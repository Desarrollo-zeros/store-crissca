<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Route::get('/', function () {
    $store = new App\Models\store("usuarios",[]);
    $usuario = $store->get();
    $store = new App\Models\store("categorias",[]);
    $categoria = $store->get();
    $data = [compact("categoria"),compact("usuario")];
    dd($data);
});
*/
Route::get("/logout",function (){
    session()->forget("users");
    session()->flush();
    return redirect("/");
});

Route::get("/test","Store@test");

Route::group(['middleware' => ['sesiones']], function () {
    Route::get("/panel",function (\App\Http\Controllers\Store $store){
        return $store->panel();
    });

    Route::post("/gestionUsuario/{tipo}","Store@gestionUsuario");

});


Route::post("/gestionCategoria/{tipo}","Store@gestionCategoria");
Route::get("/","Store@index");
Route::get("/store/{any1}/{any2}","Store@index");
Route::get("/store/{any1}","Store@index");

Route::post("/login","Store@login");
Route::post("/register","Store@register");
Route::post("/visitOff","Store@visitOff");



