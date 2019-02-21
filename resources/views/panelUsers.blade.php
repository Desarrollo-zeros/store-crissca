<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tienda Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><span>store </span><strong> New</strong></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>NS</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                        <!-- Notifications-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="/img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="/img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item"><a href="/logout" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar Sesíon</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src='{{empty($user["persona"]["img"]) ? '' : $user["persona"]["img"]}}' alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">{{$user["username"]}}</h1>
                    <p>Cliente</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li id="liHome" class="active"><a href=""> <i class="icon-home"></i>Inicio </a></li>
                <li id="liUsuario" class=""><a href="javascript:void(0);" onclick="$('.active').removeClass('active');$('#liUsuario').addClass('active');$('#gestionUsuario').css('display','block');$('#gestionProducto').css('display','none')"> <i class="icon-user"></i>Gestionar Cuenta</a></li>
                <li id="liProducto" class=""><a href="javascript:void(0);" onclick="$('.active').removeClass('active');$('#liProducto').addClass('active');$('#gestionUsuario').css('display','none');$('#gestionProducto').css('display','block');"> <i class="icon-bill"></i>Gestionar Productos</a></li>
                <li class=""><a href="/logout"> <i class="icon-close"></i>Cerrar Sesíon </a></li>
            </ul>
        </nav>
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Dashboard</h2>
                </div>
            </header>
            <!-- Dashboard Counts Section-->

            <section class="forms" id="gestionUsuario" style="display:block;">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Gestionar Usuario</h3>
                                </div>
                                <div class="card-body">
                                    <form id="formUsuario">
                                        <div class="form-group">
                                            <label class="form-control-label">Usuario</label>
                                            <input type="text" disabled="disabled" class="form-control" required="required" value="{{$user["username"]}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Correo electronico</label>
                                            <input type="text" disabled="disabled" class="form-control" required="required" value="{{$user["email"]}}">
                                        </div>

                                        <div class="form-group" ondblclick="$('#password').prop('disabled',false);" >
                                            <label class="form-control-label">Contraseña</label>
                                            <input type="text" id="password" disabled="disabled" class="form-control" required="required" placeholder="DobleClick para editar la contraseña" value="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Foto perfil</label><br>
                                            <input type="hidden" class="form-control" id="imgU" value="{{!empty($user["persona"]) ? $user["persona"]["img"] : ""}}">
                                            <img src="{{!empty($user["persona"]) ? $user["persona"]["img"] : ""}}" id="imgUsuario" width="100" height="100" style="dispaly:block">
                                            <br>
                                            <input type="file" id="imageU" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" required="required" value="{{!empty($user["persona"]) ? $user["persona"]["nombre"] : ""}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Departamento</label>
                                            <input type="text" class="form-control" id="departamento" required="required" value="{{!empty($user["persona"]) ? $user["persona"]["departamento"] : ""}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Ciudad</label>
                                            <input type="text" class="form-control" id="ciudad" required="required" value="{{!empty($user["persona"]) ? $user["persona"]["ciudad"] : ""}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Direccion</label>
                                            <input type="text" class="form-control" id="direccion" required="required" value="{{!empty($user["persona"]) ? $user["persona"]["direccion"] : ""}}">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" id="btnUsuario" value="Actualizar Usuario" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Gestionar Usuario</h3>
                                </div>
                                <div class="card-body">
                                    <form id="formFondo">
                                        <div class="form-group">
                                            <label class="form-control-label">Tarjetas de crédito</label>
                                            <input type="number" class="form-control" minlength="10" maxlength="10" id="tarjeta" required="required" value="{{!empty($user["factura"]["tarjeta"]) ? $user["factura"]["tarjeta"] : ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Fondos Cuenta</label>
                                            <input type="number" class="form-control" disabled="disabled" id="fondo" required="required" value="{{!empty($user["factura"]["fondo"]) ? $user["factura"]["fondo"] : ""}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="btnFondo" value="Actualizar Fondo" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="forms" id="gestionProducto" style="display:none;">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Gestionar Usuario</h3>
                                </div>
                                <div class="card-body">
                                    <div class="center-block text-center">
                                        <button  onclick="loaderListaProductoPorComprar();" class="btn btn-info btn-sm">Listado Producto por Comprar</button>&nbsp;&nbsp;
                                        <button onclick="loaderListaProductosComprados();" class="btn btn-success btn-sm">Listado Producto Comprados</button>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="table-responsive" id="tablePor" style="display: none">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cateogria</th>
                                                    <th>Producto</th>
                                                    <th>Imagen Producto</th>
                                                    <th>precio</th>
                                                    <th>Cantidad</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableListaPor">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive" id="tableCom" style="display: none">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Cateogria</th>
                                                <th>Producto</th>
                                                <th>Imagen Producto</th>
                                                <th>precio</th>
                                                <th>Cantidad</th>
                                                <th>Estado</th>
                                                <th>Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableListaCom">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div lass="table-responsive" id="pdf" style="background-color: white;visibility:hidden;">
                                        <img src="{{url("")}}/img/logon.png" width="70"></img>
                                        <hr>
                                        <h3>Store New tienda online</h3>
                                        <hr>
                                        <h6>El usuario <b id="username"></b> hizo compra de los siguientes productos en la siguiente fecha<b id="fecha"></b></h6>
                                        <hr><h5>Producto Comprado</h5>
                                        <table class="table" style="background: white;">
                                            <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>precio</th>
                                                <th>Cantidad</th>
                                                <th>Estado</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablaFactura">
                                            </tbody>
                                        </table>
                                        <h5>Datos de envio</h5>
                                        <table class="table" style="background: white;">
                                            <thead>
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Departamento</th>
                                                <th>Ciudad</th>
                                                <th>Direccion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableEnvio">
                                            </tbody>
                                        </table>
                                        <h6>Este Recibo es válida en todo el Territorio Nacional, siempre y cuando el tipo y número consignados en el
                                            respectivo documento de identificación, coincidan con los aquí registrados.
                                        </h6>
                                        <h5>Codigo barra</h5>
                                        <img width="200" height="60" id="bcTarget" src="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript files-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/popper.js/umd/popper.min.js"> </script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="/js/charts-home.js"></script>
<!-- Main File-->
<script src="/js/front.js"></script>
<script src="/js/notify.min.js"></script>
<script src="/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>
<script>
    var url = '{{url('')}}';
    var csrf_token = '{{csrf_token()}}';


    $("#imageU").change(function(e){
        var FR= new FileReader();
        FR.addEventListener("load", function(evt) {
            $("#imgU").val(evt.target.result);
            $("#imgUsuario").attr("src",evt.target.result).css("display","block");
        });
        FR.readAsDataURL(this.files[0]);
    });

    $("#formUsuario").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.nombre = $("#nombre").val();
        obj.departamento = $("#departamento").val();
        obj.ciudad = $("#ciudad").val();
        obj.direccion = $("#direccion").val();
        if($("#password").val() != ""){
            obj.password = $("#password").val();
        }
        obj.img = $("#imgU").val();
        if(!confirmar()){
            return false;
        }
        post(url+"/gestionUsuario/3",obj,"POST",csrf_token).then(data =>{
            if(data){
                $.notify("Datos actualizados","success");
            }else{
                $.notify("error al actualizar los datos");
            }
        });

    });

    $("#formFondo").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.tarjeta = $("#tarjeta").val();
        obj.fondo = $("#fondo").val();
        if(obj.tarjeta.length != 10){
            $.notify("El tamaño de la tarjeta debe ser 10 digitos");
            return false;
        }

        if(!confirmar()){
            return false;
        }
        post(url+"/gestionUsuario/4",obj,"POST",csrf_token).then(data =>{
            if(data){
                $.notify("Fondo actualizado con extio, debes actualizar la pagina","success");
            }else{
                $.notify("Tu saldo no pudo ser actualizado,o la tarjeta ingresada no existe, se informara aun administrador de tu caso");
            }
        });
    })

    function confirmar(text = "desea Realizar esta operacion") {
        if(confirm(text)){
            return true;
        }
        return false;
    }

    function loaderListaProductoPorComprar(text = "No tienes elemento por comprar",estado = "error"){
        $('.table-responsive').css('display','none');
        if(localStorage.carrito == undefined){
            $.notify(text,estado);
            return false;
        }
        var carrito = JSON.parse(localStorage.carrito);
        if(carrito.length == 0){
            $.notify(text,estado);
            return false;
        }
        $('#tablePor').css('display','block');
        post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(categoria =>{
            var string = "";
            var carrito = JSON.parse(localStorage.carrito);
            for(var i in carrito){
                if(carrito[i] == null){
                    continue;
                }
                for(var j in categoria){
                    var producto = categoria[j]["productos"];
                    for(var k in producto){
                        if(k == carrito[i].idProducto && carrito[i].idCategoria == categoria[j].id){
                            string += "<tr>";
                            string += "<td>" + j + "</td>";
                            string += "<td>" + categoria[j].nombre + "</td>";
                            string += "<td>" + producto[k].nombre + "</td>";
                            string += "<td><a href='store/"+carrito[i].idCategoria+"/"+carrito[i].idProducto+"' target='_blank'><img src='" + producto[k].img + "' width='70' style='position: relative; bottom: 18px;'></a></td>";
                            string += "<td>$ " + producto[k].precio + "</td>";
                            string += "<td><select id='cantidadCompra' class='form-control'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></td>";
                            string += "<td><button onclick='comprar("+k+","+categoria[j].id+","+producto[k].precio+")' class='btn btn-sm btn-info'>Comprar</button></td><td><button onclick='eliminar("+carrito[i].idProducto+","+carrito[i].idCategoria+")' class='btn btn-sm btn-danger'>Eliminar</button></td>";
                            string += "</tr>";
                        }
                    }
                }
            }
            $("#tableListaPor").html(string);
        });
    }



    function comprar(idProducto,idCategoria,precio) {
        var obj = new Object();
        obj.idProducto = idProducto;
        obj.idCategoria = idCategoria;
        obj.cantidad = $("#cantidadCompra").val();
        obj.precio = precio;
        if(confirmar("Desea comprar este producto, si acepta de descontara el precio de este a tu fondo"))
        post(url+"/gestionUsuario/7",obj,"POST",csrf_token).then(data => {
            if(data == 1){
                eliminar(idProducto,idCategoria,"Compra realizada con exito","success");
            }if(data == -1){
                $.notify("no posees fondo para realizar esta compra, por favor recargue su cuenta");
            }
        });
    }

    function loaderListaProductosComprados() {
        $('.table-responsive').css('display','none');
        $('#tableCom').css('display','block');
        post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(categoria =>{
            post(url+"/gestionUsuario/5",{},"POST",csrf_token).then(usuario => {
                var string = "";
                if(size(usuario["factura"]["categoria"]) > 0){
                    var usuarioProducto = usuario["factura"]["categoria"];
                    for(var i in usuarioProducto){
                        for(var j in categoria){
                            var producto = categoria[j]["productos"];
                            for(var k in producto){
                                if(k == usuarioProducto[i].producto && usuarioProducto[i].categoria == categoria[j].id){
                                    string += "<tr>";
                                    string += "<td>"+categoria[j].nombre+"</td>";
                                    string += "<td>" + producto[k].nombre + "</td>";
                                    string += "<td><a href='store/"+categoria[j].id+"/"+usuarioProducto[i].producto+"' target='_blank'><img src='" + producto[k].img + "' width='70' style='position: relative; bottom: 19px;'></a></td>";
                                    string += "<td>$" + producto[k].precio + "</td>";
                                    string += "<td><span style='color:blue;'>"+usuarioProducto[i].cantidad+"</span></td>"
                                    if(usuarioProducto[i].enviado == 1){
                                        string += "<td><p style='color:green'>Enviado</p></td>"
                                        string += "<td><button onclick='recibo("+JSON.stringify(producto[k])+","+categoria[j].id+","+JSON.stringify(usuario)+","+usuarioProducto[i].codigo+","+k+")' class='btn btn-sm btn-info recibo'>Recibo</button></td>";
                                    }else{
                                        string += "<td><p style='color:blue'>no enviado</p></td>"
                                        string += "<td><button onclick='enviar("+i+");'class='btn btn-sm btn-success'>Enviar</button><button  class='btn btn-sm btn-info' onclick='recibo("+JSON.stringify(producto[k])+","+categoria[j].id+","+JSON.stringify(usuario)+","+usuarioProducto[i].codigo+","+k+")'>Recibo</button></td>";
                                    }
                                    string += "</tr>";
                                }
                            }
                        }
                    }
                    $("#tableListaCom").html(string);
                }else{
                    $.notify("No ha comprado ningun articulo");
                }
            });
        });
    }


    function textToBase64Barcode(text){
        var canvas = document.createElement("canvas");
        JsBarcode(canvas, text, {format: "CODE128"});
        return canvas.toDataURL("image/png");
    }
                    //producto //usuario //codigo //id
    function recibo(data1,idCategoria,data2,codigo,id) {
        $(".recibo").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>');
        $(".btn").prop("disabled",true);
        $("li").prop("disabled",true);
        setTimeout(function(){
            $(".btn").prop("disabled",false);
            $("li").prop("disabled",false);
            $(".recibo").html("Recibo");
        }, 3000);


        var obj = new Object();
        var fecha = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        $("#fecha").html(fecha.toLocaleDateString("es-ES", options));
        var producto = data2["factura"]["categoria"];
        $("#username").html(data2.username);
        $("#bcTarget").attr("src",textToBase64Barcode(idCategoria.toString()+"-"+codigo.toString()));
        var string = "";
        for(var i in producto){
            if(producto[i].codigo == codigo){
                string += "<tr>";
                string += "<td>" + data1.nombre+ "</td>";
                string += "<td>$ "+ data1.precio + "</td>";
                string += "<td><span style='color:blue;'>"+producto[i].cantidad+"</span></td>"
                if(producto[i].enviado == 1){
                    string += "<td><p style='color:green'>Enviado</p></td>"
                }else{
                    string += "<td><p style='color:blue'>no enviado</p></td>"
                }
                string += "</tr>";
            }
        }
        $("#tablaFactura").html(string);
        string = "";
        string += "<tr>";
        string += "<td>" + data2["persona"].nombre+ "</td>";
        string += "<td>" + data2["persona"].departamento+ "</td>";
        string += "<td>" + data2["persona"].ciudad+ "</td>";
        string += "<td>" +data2["persona"].direccion+ "</td>";
        string += "</tr>";
        $("#tableEnvio").html(string);


        var pdf = new jsPDF('l', 'pt', [500,700]);
        source = $('#pdf')[0];
        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 40,
            bottom: 60,
            left: 40,
            width: 500
        };

        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Test.pdf');
            }, margins);

    }
                        //producto //categoria
    function verProducto(id1,id2) {
        window.open(url+"/store/"+id2+"/"+id1,'_blank');
    }

    function enviar(id) {
        var obj = new Object();
        obj.posicion = id;
        post(url+"/gestionUsuario/6",obj,"POST",csrf_token).then(data => {
            if(data){
                loaderListaProductosComprados();
                $.notify("Se ha realizado procedimiento de envio","success");
            }else{
                $.notify("eror el producto no puede ser enviado","error");
            }
        });
    }

    $(document).ready(function () {
        var carrito = JSON.parse(localStorage.carrito);
        if(carrito.length > 0){
            if(confirmar("Tienes productos pendientes por comprar, Desea Verlos?")){
                $('.active').removeClass('active');
                $('#liProducto').addClass('active');
                $('.forms').css('display','none');
                $('#gestionProducto').css('display','block');
                loaderListaProductoPorComprar();
            }
        }
    });

</script>

</body>
</html>