<?php

namespace App\Http\Controllers;


use App\Http\Middleware\sesiones;
use Illuminate\Http\Request;
use  App\Models\store as Model;
use Nexmo\Response;
use Validator;

class Store extends Controller
{

    public function index($any1 = "",$any2 = ""){
        $categoria =  new Model("categorias");
        $categoria = $categoria->get();

        $usuario = [];
        if(session()->has("users")){
            $usuario = new Model("usuarios");
            $usuario = $usuario->getWhereFirst(["id"=> session()->get("users")["id"]]);
        }

        $visitOnline = new Model("visit");
        $data = [
            "id" => session()->getId(),
            "ip" => \request()->ip(),
            "online" => (int)1
        ];
        $validator = Validator::make($data, [
            'id' => 'required|unique:visit|max:255',
        ]);

        $visitOnline->whereUpdate(["id"=>session()->getId()],["online"=>1]);

        return view("index")
            ->with(compact("categoria"))
            ->with(compact("usuario"))
            ->with(compact("visitOnline"))
            ->with(compact("any1"))
            ->with(compact("any2"));
    }

    public function panel(){
        $usuario = new Model("usuarios");
        if(session()->get("users")["rol"] > 1){
            $usuarios = $usuario->getWhere();
            $usuario = $usuario->getWhereFirst(["id"=> session()->get("users")["id"]]);
            $categorias = new Model("categorias");
            $categoria = $categorias->getWhere();
            $tamañoCompras = 0;

            for($i=0;$i<=$usuarios->count();$i++){
                if(isset($usuarios[$i]["factura"]["categoria"])){
                    $tamañoCompras += count($usuarios[$i]["factura"]["categoria"]);
                }
            }
            $tamañoCategorias = 0;

            for($i=0;$i<=$categoria->count();$i++){
                if(isset($categoria[$i]["productos"])){
                    $tamañoCategorias += count($categoria[$i]["productos"]);
                }
            }
            $online = $usuarios->where("online","=","1")->count();

            $visitOnline = new Model("visit");
            $visitOnline = $visitOnline->getWhere()->count();

            return view("panelAdmin")
                ->with(compact("usuario"))
                ->with(compact("usuarios"))
                ->with(compact("tamañoCompras"))
                ->with(compact("categoria"))
                ->with(compact("tamañoCategorias"))
                ->with(compact("online"))
                ->with(compact("visitOnline"));
        }else{
            $id = session()->get("users")["id"];
            $user = $usuario->getWhereFirst(compact("id"));
            return view("panelUsers")->with(compact("user"));
        }
    }

    public function login(Request $request){
        $login = new Model("usuarios");
        $where = ["username"=>  $request->post("username"), "password"=> strtolower(sha1($request->post("password")))];
        $users = $login->getWhereFirst($where,["username","id","email","rol","estado"]);

        if(isset($users)){
            session()->put("users",$users);
            $login->whereUpdate($users["id"],["online"=>1]);
            return response()->json($users);
        }else{
            return response()->json(false);
        }
    }

    public function register(Request $request){
        $register = new Model("usuarios");
        $users = [
            "id" => $register->lastId(),
            "username" => $request->post("username"),
            "password"=> strtolower(sha1($request->post("password"))),
            "email" => $request->post("email"),
            "img" => '',
            "rol" => (int)1,
            "online" => (int)0,
            "estado" => (int)1
        ];

        $validator = Validator::make($users, [
            'username' => 'required|unique:usuarios|max:255',
            'password' => 'required',
            "email" => "required|unique:usuarios|email|max:255"
        ]);

        if ($validator->fails()) {
            return response()->json(false);
        }else{
            $id = $register->insertOne($users);
            if(isset($id)){
                return response()->json(true);
            }else{
                return response()->json(false);
            }
        }
    }

    public function visitOff(){
        $visit = new Model("visit");
        $visit->whereUpdate(["id" => session()->getId()],["online"=>0]);
    }


    public function gestionCategoria($tipo = 1, Request $request){
        $categoria = new Model("categorias");
        $id = empty($request->post("id")) ? '' : (int)$request->post("id");
        switch ($tipo){
            case 1:{
                return empty(\response()->json($categoria->getWhere())) ? [] : \response()->json($categoria->getWhere()) ;
            }
            case 2:{
                $validator = Validator::make($request->all(), [
                    'nombre' => 'required|unique:categorias|max:255',
                ]);
                if ($validator->fails()) {
                    return response()->json(false);
                }else{
                    $data = [
                        "id" => $categoria->lastId(),
                        "nombre" => $request->post("nombre"),
                        "detalle" => $request->post("detalle"),
                        "url" => $request->post("url"),
                        "estado" => (int)$request->post("estado"),
                    ];

                    $id = $categoria->insertOne($data);
                    return isset($id) ? \response()->json(true) : \response()->json(false);
                }
            }
            case 3:{
                $data = [
                    "nombre" => $request->post("nombre"),
                    "detalle" => $request->post("detalle"),
                    "url" => $request->post("url"),
                    "estado" => (int)$request->post("estado"),
                ];
                return \response()->json($categoria->whereUpdate(compact("id"),$data));
            }
            case 4:{
                return \response()->json($categoria->remove(compact("id")));
            }
            case 5:{
                if($request->post("tipo") == 1){
                    $c = $categoria->getLike("nombre","like","%".$request->post("like")."%");
                    return \response()->json($c);
                }else{
                    if(empty($id)){
                        $c = $categoria->getWhere();
                    }else{
                        $c = $categoria->getWhere(compact("id"));
                    }
                    $productos = [];
                    $match = "/^".$request->post("like")."/i";
                    $pro = [];
                    $j = 1;
                    $found = [];
                    for($i = 0; $i< $c->count();$i++){
                        if(!empty($c[$i]["productos"])){
                            foreach ($c[$i]["productos"] as $key => $value){
                                $pro = [
                                    "idProducto" => $key,
                                    "idCategoria" => $c[$i]["id"],
                                    "categoria" => $c[$i]["nombre"],
                                    "nombreProducto" => $value["nombre"],
                                    "precioProducto" => $value["precio"],
                                    "detalleProducto" => $value["detalle"],
                                    "imgProducto" => $value["img"],
                                    "estadoProducto" => $value["estado"],
                                ];
                                array_push($productos,$pro);
                            }
                        }
                    }
                    foreach ($productos as $row){
                        if(preg_match($match, $row["nombreProducto"])){
                            array_push($found, $row);
                        }
                    }
                    return \response()->json($found);
                }
            }
            case 6:{
                $productos = [
                    "nombre" => $request->post("nombre"),
                    "precio" => $request->post("precio"),
                    "detalle" => $request->post("detalle"),
                    "img" => $request->post("img"),
                    "estado" => $request->post("estado")
                ];
                return \response()->json($categoria->insertPush(compact("id"),"productos",$productos));
            }
            case 7:{
                $idProducto = $request->post("idProducto");
                $productos = [
                    "productos.$idProducto.nombre" => $request->post("nombre"),
                    "productos.$idProducto.precio" => $request->post("precio"),
                    "productos.$idProducto.detalle" => $request->post("detalle"),
                    "productos.$idProducto.img" => $request->post("img"),
                    "productos.$idProducto.estado" => $request->post("estado")
                ];
                return \response()->json($categoria->whereUpdate(compact("id"),$productos));
            }
            case 8:{
                $idProducto = $request->post("idProducto");
                $productos = [];
                $data = $categoria->getWhereFirst(compact("id"));
                if(!empty($data["productos"])){
                    if(count($data["productos"]) <= 1){
                        unset($data["productos"]);
                        $categoria->remove(compact("id"));
                    }else{
                        unset($data["productos"][$idProducto]);
                        $categoria->remove(compact("id"));
                    }
                }
                return \response()->json($categoria->insertOne($data));
            }
        }
    }

    public function gestionUsuario($tipo = 1, Request $request){
        $usuario = new Model("usuarios");
        $id = empty($request->post("id")) ? (int)session()->get("users")["id"] :  (int)$request->post("id");
        switch ($tipo){
            case 1:{
                return \response()->json($usuario->getWhere());
            }
            case 2:{
                $fondo = $request->post("fondo");
                return \response()->json($usuario->whereUpdate(compact("id"),["factura.fondo" => $fondo]));
            }
            case 3:{
                $id = session()->get("users")["id"];

                if(empty($request->post("password"))){
                    $data = [
                        "persona.nombre" => $request->post("nombre"),
                        "persona.departamento" => $request->post("departamento"),
                        "persona.ciudad" => $request->post("ciudad"),
                        "persona.direccion" => $request->post("direccion"),
                        "persona.img" => $request->post("img"),
                    ];
                }else{
                    $data = [
                        "persona.nombre" => $request->post("nombre"),
                        "persona.departamento" => $request->post("departamento"),
                        "persona.ciudad" => $request->post("ciudad"),
                        "persona.direccion" => $request->post("direccion"),
                        "persona.img" => $request->post("img"),
                        "password" => sha1($request->post("password"))
                    ];
                }
                return \response()->json($usuario->whereUpdate(compact("id"),$data));
            }
            case 4:{
                $id = session()->get("users")["id"];
                $tarjeta = $usuario->tarjetas();
                $user = $usuario->getWhereFirst(compact("id"));

                if(empty($user["factura"]["tarjeta"])){
                    foreach($tarjeta as $key => $value){
                        if($value["tarjeta"] == (int)$request->post("tarjeta")){
                            $data = [
                                "factura.tarjeta" => $value["tarjeta"],
                                "factura.fondo" => $value["fondo"],
                            ];
                            return \response()->json($usuario->whereUpdate(compact("id"),$data));
                        }
                    }
                }
                if(!empty($user["factura"]["tarjeta"])){
                    if($user["factura"]["tarjeta"] != (int)$request->post("tarjeta")){
                        foreach($tarjeta as $key => $value){
                            if($value["tarjeta"] == (int)$request->post("tarjeta")){
                                $data = [
                                    "factura.tarjeta" => $value["tarjeta"],
                                    "factura.fondo" => $value["fondo"],
                                ];
                                return \response()->json($usuario->whereUpdate(compact("id"),$data));
                            }
                        }
                    }
                }
                return \response()->json(0);
            }
            case 5:{
                return \response()->json($usuario->getWhereFirst(compact("id")));
            }
            case 6:{
                $posicion = (int)$request->post("posicion");
                return \response()->json($usuario->whereUpdate(compact("id"),["factura.categoria.$posicion.enviado" => 1]));
            }
            case 7:{
                $id = session()->get("users")["id"]; //id Usuario
                $user = $usuario->getWhereFirst(compact("id"),["factura"]);
                $fondo1 = (int)$request->post("cantidad") * (int)$request->post("precio");
                $fondo2 = !empty($user["factura"]["fondo"]) ? (int)$user["factura"]["fondo"] : 0;
                if($fondo2 < $fondo1){
                    return \response()->json(-1);
                }
                $fondo = ($fondo2 - $fondo1);
                $dataUpdate = ["factura.fondo" => $fondo];
                $usuario->whereUpdate(compact("id"),$dataUpdate);
                $data = [
                    "codigo" => $usuario->getCode(),
                    "categoria" => $request->post("idCategoria"),
                    "producto" => (int)$request->post("idProducto"),
                    "cantidad" => (int)$request->post("cantidad"),
                    "enviado" => (int)0
                ];
                return \response()->json($usuario->insertPush(compact("id"),"factura.categoria",$data));
            }
        }
    }
                                                //categoria //producto
    public function productos(Request $request,$any1 = "",$any2 = ""){
        $categoria =  new Model("categorias");
        $categoria = $categoria->get();

        $usuario = [];
        if(session()->has("users")){
            $usuario = new Model("usuarios");
            $usuario = $usuario->getWhereFirst(["id"=> session()->get("users")["id"]]);
        }

        $visitOnline = new Model("visit");
        $data = [
            "id" => session()->getId(),
            "ip" => \request()->ip(),
            "online" => (int)1
        ];
        $validator = Validator::make($data, [
            'id' => 'required|unique:visit|max:255',
        ]);

        $visitOnline->whereUpdate(["id"=>session()->getId()],["online"=>1]);

        return view("index")
            ->with(compact("categoria"))
            ->with(compact("usuario"))
            ->with(compact("visitOnline"))
            ->with(compact("any1"))
            ->with(compact("any2"));
    }

}
