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
                <div class="avatar"><img src="{{$usuario["persona"]["img"]}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">{{$usuario["username"]}}</h1>
                    <p>Adminitrador</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href=""> <i class="icon-home"></i>Inicio </a></li>
                <li id="liGestionProducto" class=""><a href="#gestionProducto" onclick="$('li').removeClass('active');$('#liGestionProducto').addClass('active');$('#gestionProducto').css('display','block');$('#gestionUsuario').css('display','none');"> <i class="icon-bill"></i>Gestion Producto </a></li>
                <li id="liGestionUsuario"  class=""><a href="#gestionUsuario" onclick="$('li').removeClass('active');$('#liGestionUsuario').addClass('active');$('#gestionProducto').css('display','none');$('#gestionUsuario').css('display','block');"> <i class="icon-user"></i>Gestion usuario </a></li>
                <li class=""><a href="/"> <i class="icon-form"></i>Ir a tienda </a></li>
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
            <section class="dashboard-counts no-padding-bottom">
                <div class="container-fluid">
                    <div class="row bg-white has-shadow">
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="item d-flex align-items-center">
                                <div class="icon bg-violet"><i class="icon-user"></i></div>
                                <div class="title"><span>Total<br>Clientes</span>
                                    <div class="progress">
                                        <div role="progressbar" style="width: {{$usuarios->count()}}%; height: 4px;" aria-valuenow="{{$usuarios->count()}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                                    </div>
                                </div>
                                <div class="number"><strong>{{$usuarios->count()}}</strong></div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="item d-flex align-items-center">
                                <div class="icon bg-red"><i class="icon-padnote"></i></div>
                                <div class="title"><span>Compras<br>Clientes</span>
                                    <div class="progress">
                                        <div role="progressbar" style="width: {{$tamañoCompras}}%; height: 4px;" aria-valuenow="{{$tamañoCompras}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                                    </div>
                                </div>
                                <div class="number"><strong>{{$tamañoCompras}}</strong></div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="item d-flex align-items-center">
                                <div class="icon bg-green"><i class="icon-bill"></i></div>
                                <div class="title"><span>Total<br>Categorias</span>
                                    <div class="progress">
                                        <div role="progressbar" style="width: {{$categoria->count()}}%; height: 4px;" aria-valuenow="{{$categoria->count()}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                                    </div>
                                </div>
                                <div class="number"><strong>{{$categoria->count()}}</strong></div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="item d-flex align-items-center">
                                <div class="icon bg-orange"><i class="icon-bill"></i></div>
                                <div class="title"><span>Total<br>Productos</span>
                                    <div class="progress">
                                        <div role="progressbar" style="width: {{$tamañoCategorias}}%; height: 4px;" aria-valuenow="{{$tamañoCategorias}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                                    </div>
                                </div>
                                <div class="number"><strong>{{$tamañoCategorias}}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Header Section    -->
            <section class="dashboard-header">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Statistics -->
                        <div class="statistics col-lg-12 col-12">
                            <div class="statistic d-flex align-items-center bg-white has-shadow">
                                <div class="icon bg-red"><i class="fa fa-user"></i></div>
                                <div class="text"><strong>{{$online}}</strong><br><small>Usuarios Online</small></div>
                            </div>
                            <div class="statistic d-flex align-items-center bg-white has-shadow">
                                <div class="icon bg-green"><i class="fa fa-ticket-o"></i></div>
                                <div class="text"><strong>{{$visitOnline}}</strong><br><small>Visitantes Online</small></div>
                            </div>

                            <div class="statistic d-flex align-items-center bg-white has-shadow">
                                <div class="icon bg-green"><i class="fa fa-ticket-o"></i></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="forms" id="gestionProducto" style="display:none;">
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
                                    <h3 class="h4">Categorias Productos</h3>
                                </div>
                                <div class="card-body">
                                    <p>Registrar Categorias de productos</p>
                                    <form id="formCategoria">
                                        <div class="form-group">
                                            <label class="form-control-label">Nombre Categoria</label>
                                            <input type="hidden" id="idCategoria" required="required">
                                            <input type="text" id="nombreC" placeholder="Nombre Categoria" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Detalle</label>
                                            <input type="text" id="detalleC" placeholder="Ejemplo Computador de escritorio" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Url</label>
                                            <input type="text" id="urlC" placeholder="/escritorio" class="form-control" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Estado</label>
                                            <select id="estadoC" name="estadoC" required="required" class="form-control">
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" id="btnCategoria" value="Registrar Categoria" class="btn btn-primary">
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
                                    <h3 class="h4">Productos</h3>
                                </div>
                                <div class="card-body">
                                    <p>Registrar Productos</p>
                                    <form id="formProductos">

                                        <div class="form-group" id="btndisableCategoria">
                                            <label class="form-control-label">Categoria</label>
                                            <p style="display: none" id="mns">Si quieres cambiar la categoria da doble click aquí</p>
                                            <input id="idCategoriaP" type="hidden">
                                            <input id="idProducto" type="hidden">
                                            <select id="categoriaP" name="categoriaP" required="required" class="form-control">
                                                @foreach($categoria as $row)
                                                    <option value="{{$row["id"]}}">{{$row["nombre"]}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Nombre Producto</label>
                                            <input type="text" id="nombreP" placeholder="Nombre Producto" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Precio producto</label>
                                            <input type="number" id="precioP" min="1" pattern="^[0-9]+"  placeholder="Precio producto" class="form-control"  maxlength="7" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Detalle</label>
                                            <textarea type="text" id="detalleP" spellcheck="false" placeholder="Ejemplo Computador de escritorio" class="form-control" required="required"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Imagen producto</label>
                                            <img src="" width="400" height="200" id="imgProducto" style="display: none">
                                            <input type="file" id="imageP" class="form-control" required="required">
                                            <input type="hidden" id="imgP">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Estado</label>
                                            <select id="estadoP" name="estadoP" required="required" class="form-control">
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" id="btnProducto" value="Registrar Producto" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                   <h3>Listados</h3>
                                </div>
                                <div class="card-body">
                                    <button onclick='loaderCategoria();$("#tableCategoria").css("display","block");$("#tableProducto").css("display","none");' class="btn btn-info btn-lg btn-sm">Categorias</button>&nbsp;&nbsp;&nbsp;
                                    <button onclick='loaderProducto();$("#tableCategoria").css("display","none");$("#tableProducto").css("display","block");' class="btn btn-success btn-lg btn-sm">Productos</button>
                                    <br>
                                    <hr>
                                    <div class="table-responsive" id="tableCategoria" style="display: none">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Detalle</th>
                                                    <th>Url</th>
                                                    <th>Estado</th>
                                                    <th>Accíon</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableC">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive" id="tableProducto" style="display: none">
                                        <div id="searchForm" action="#" role="search">
                                            <label>Buscar Producto</label>

                                            <select class="form-control col-md-4" id="searchProductoOption">
                                                <option value="1">Categoria</option>
                                                <option value="2">Producto</option>
                                            </select>
                                            <input class="form-control" type="search" id="searchProducto" placeholder="Nombre Producto y/o Categoria">
                                        </div>
                                        <hr><br>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Categoria</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Datalle</th>
                                                <th>Imagen</th>
                                                <th>Estado</th>
                                                <th>Accíon</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableP">
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="forms" id="gestionUsuario" style="display:none;">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3>Listados Usuarios</h3>
                                </div>
                                <div class="card-body">
                                    <button onclick="loaderUsuarios();" class="btn btn-info btn-sm">Cargar Usuarios</button>
                                    <hr>
                                    <div class="table-responsive" id="tableUsuario" style="display: block">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuario</th>
                                                <th>Nombre Completo</th>
                                                <th>Fondo usuario</th>
                                                <th>Cantidad De Compra</th>
                                                <th>Estado</th>
                                                <th>Accíon</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableU">
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="table-responsive" id="tableCompras" style="display: block">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuario</th>
                                                <th>Fondo usuario</th>
                                                <th>Producto</th>
                                                <th>imagen Producto</th>
                                                <th>Valor Producto</th>
                                                <th>Cantidad</th>
                                                <th>Estado</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableUP">
                                                <input type="hidden" id="htmlUP">
                                            </tbody>
                                        </table>
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

<script>
    var url = '{{url('')}}';
    var csrf_token = '{{csrf_token()}}';


    $("#imageP").change(function(e){
        var FR= new FileReader();
        FR.addEventListener("load", function(evt) {
            $("#imgP").val(evt.target.result);
            $("#imgProducto").attr("src",evt.target.result).css("display","block");
        });
        FR.readAsDataURL(this.files[0]);
    });

    $("#formCategoria").on("submit",function (form) {
        form.preventDefault();
        if(!confirmar()){
            return false;
        }
        var obj = new Object();
        obj.nombre = $("#nombreC").val();
        obj.detalle = $("#detalleC").val();
        obj.url = $("#urlC").val();
        obj.estado = $("#estadoC").val();

        if($("#idCategoria").val() == ""){
            post(url+"/gestionCategoria/2",obj,"POST",csrf_token).then(data =>{
                if(data){
                    $.notify("Categoria Creada Con exito","success");
                }else{
                    $.notify("Error al crear esta categoria o ya existe");
                }
            });
        }else{
            obj.id = $("#idCategoria").val();
            post(url+"/gestionCategoria/3",obj,"POST",csrf_token).then(data =>{
                if(data){
                    $.notify("Categoria Editada Con exito","success");
                }else{
                    $.notify("Error al Actualizar esta categoria");
                }
                $("#idCategoria").val("");
                $("#nombreC").val("");
                $("#detalleC").val("");
                $("#urlC").val("");
                $("#btnCategoria").val("Registrar Categoria");
            });
        }
        loaderCategoria();
    });



    function confirmar(text = "desea Realizar esta operacion") {
        if(confirm(text)){
            return true;
        }
        return false;
    }


    function loaderUsuarios() {
        $("#tableUsuario").css("display","block");
        $("#tableCompras").css("display","none");
        post(url+"/gestionUsuario/1",{},"POST",csrf_token).then(data => {
            var string = "";
            for (var i in data){
                if(data[i].rol<2){
                    string  += "<tr>";
                    string  += "<td>"+data[i].id+"</td>";
                    string  += "<td>"+data[i].username+"</td>";
                    if(data[i]["persona"] != undefined){
                        string  += "<td>"+data[i]["persona"].nombre+"</td>";
                    }else{
                        string += "<td>No hay Datos</td>";
                    }
                    if(data[i]["factura"] != undefined){
                        string  += "<td><input id='fondoInput"+data[i].id+"' style='height: 25px!important; width: 100px!important;background-color:#0c0c0c00!important;border:1px solid #0c0c0c00!important;' class='form-control' disabled='disabled' value='"+data[i]["factura"].fondo+"'></td>";
                        string  += "<td>Cantidad:&nbsp;&nbsp;&nbsp;<span style='color:blue;'>"+size(data[i]["factura"]["categoria"])+"</span></td>";
                    }else{
                        string  += "<td><input id='fondoInput"+data[i].id+"' style='height: 25px!important; width: 100px!important;background-color:#0c0c0c00!important;border:1px solid #0c0c0c00!important;' class='form-control' disabled='disabled' value=''></td>";
                        string += "<td>No hay Datos</td>";
                    }
                    string  += estado(data[i].estado);
                    string  += "<td><button onclick='mostrarCompras("+JSON.stringify(data[i])+")' class='btn btn-info btn-sm'>Ver Compras</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-success btn-sm' id='btnAgregarFondo"+data[i].id+"' onclick='agregarFondo("+data[i].id+")'>Agregar Fondo</button></td>";
                    string  += "</tr>";
                }
            }
            $("#tableU").html(string);
        });
    }
    function agregarFondo(id) {
        if($("#btnAgregarFondo"+id).html() == "Actualizar Fondo"){
            $("#fondoInput"+id).prop('disabled', true);
            $("#btnAgregarFondo"+id).html("Agregar Fondo");
            var obj = new Object();
            obj.id = id;
            obj.fondo = $("#fondoInput"+id).val();
            if(!confirmar("Desea actualizar fondo del usuario?")){
                return false;
            }
            post(url+"/gestionUsuario/2",obj,"POST",csrf_token).then(data => {
                if(data){
                    $.notify("Fondo actualizado con exito","success");
                }else{
                    $.notify("erro al actualizar el fondo del usuario o no se edito el fondo");
                }
            });

        }else{
            $("#fondoInput"+id).prop('disabled', false);
            $("#btnAgregarFondo"+id).html("Actualizar Fondo");
            $("#fondoInput"+id).focus();
        }
    }
    

    function mostrarCompras(data){
        data1 = data["factura"]["categoria"];
        if(size(data1) > 0){
            $("#tableUsuario").css("display","none");
            $("#tableCompras").css("display","block");
            for(var i in data1){
                cargarProducto(data,data1[i]);
            }
        }else{
            $.notify("no tiene compras este usuario");
        }
    }
                            //usuario //produco
    function cargarProducto(usuario,productoUsuario){
        post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(categoria => {
            var string = "";
            for(var i in categoria){
                var productoCategoria = categoria[i]["productos"];
                for(var j in productoCategoria){
                    if(categoria[j].id ==  productoUsuario.categoria && j == productoUsuario.producto){
                        string  += "<tr>";
                        string  += "<td>"+usuario.id+"</td>";
                        string  += "<td>"+usuario.username+"</td>";
                        string  += "<td>"+usuario["factura"].fondo+"</td>";
                        string += "<td>"+productoCategoria[j].nombre+"</td>";
                        string += "<td><a href='store/"+categoria[i].id+"/"+productoUsuario.producto+"' target='_blank'><img src='" + productoCategoria[j].img + "' width='70' style='position: relative; bottom: 19px;'></a></td>";
                        string += "<td>"+productoCategoria[j].precio+"</td>";
                        string += "<td>"+productoUsuario.cantidad+"</td>";
                        if(productoUsuario.enviado == 1){
                            string += "<td><p style='color:green'>Enviado</p></td>"
                        }else{
                            string += "<td><p style='color:blue'>no enviado</p></td>"
                        }
                        string += "</tr>";
                    }
                }
            }
            $("#tableUP").html(string);
        });
    }



    function loaderCategoria() {
        post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(data => {
            var string = "";
            for(var i in data){
                string += "<option value='"+data[i].id+"'>"+data[i].nombre+"</option>";
            }
            $("#categoriaP").html(string);
            string = "";
            for (var i in data){
                string  += "<tr>";
                string  += "<td>"+data[i].id+"</td>";
                string  += "<td>"+data[i].nombre+"</td>";
                string  += "<td>"+data[i].detalle+"</td>";
                string  += "<td>"+data[i].url+"</td>";
                string  += estado(data[i].estado);
                string  += "<td><button onclick='editarCategoria("+JSON.stringify(data[i])+")' class='btn btn-sm btn-success'>Editar</button>&nbsp;&nbsp;<button onclick='eliminarCategoria("+data[i].id+")' class='btn btn-sm btn-danger'>Eliminar</button></td>";
                string  += "</tr>";
            }
            $("#tableC").html(string);
        });
    }

    function loaderProducto(data = {}) {
        var string = "";
        if(data.length == undefined){
            post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(data => {
                for(var i in data){
                    var data1 = data[i]["productos"];
                    for(var j in data1){
                        string += "<tr>";
                        string += "<td>"+j+"</td>";
                        string += "<td>"+data[i].nombre+"</td>";
                        string += "<td>"+data1[j].nombre+"</td>";
                        string += "<td>"+data1[j].precio+"</td>";
                        string += "<td>"+data1[j].detalle+"</td>";
                        string += "<td><img src='"+data1[j].img+"' width='100'></td>";
                        string += estado(data1[j].estado);
                        string += "<td><button onclick='editarProducto("+JSON.stringify(data[i])+","+j+")' class='btn btn-sm btn-success'>Editar</button>&nbsp;&nbsp;<button onclick='eliminarProducto("+data[i].id+","+j+")' class='btn btn-sm btn-danger'>Eliminar</button></td>";
                        string += "</tr>";
                    }
                    $("#tableP").html(string);
                }
            });
        }else{
            for(var i in data){
                var data1 = data[i]["productos"];
                for(var j in data1){
                    string += "<tr>";
                    string += "<td>"+j+"</td>";
                    string += "<td>"+data[i].nombre+"</td>";
                    string += "<td>"+data1[j].nombre+"</td>";
                    string += "<td>"+data1[j].precio+"</td>";
                    string += "<td>"+data1[j].detalle+"</td>";
                    string += "<td><img src='"+data1[j].img+"' width='100'></td>";
                    string += estado(data1[j].estado);
                    string += "<td><button onclick='editarProducto("+JSON.stringify(data[i])+","+j+")' class='btn btn-sm btn-success'>Editar</button>&nbsp;&nbsp;<button onclick='eliminarProducto("+data[i].id+","+j+")' class='btn btn-sm btn-danger'>Eliminar</button></td>";
                    string += "</tr>";
                }
                $("#tableP").html(string);
            }
        }

    }


    function editarCategoria(data) {
        window.location.href = "#gestionProducto";
        $("#idCategoria").val(data.id);
        $("#nombreC").val(data.nombre);
        $("#detalleC").val(data.detalle);
        $("#urlC").val(data.url);
        $("#btnCategoria").val("Editar Categoria");
    }

    function eliminarCategoria(id) {
        if(!confirmar("Si borras la categorias, los productos de esta se eliminaran")){
            return false;
        }
        obj = new Object();
        obj.id = id;
        post(url+"/gestionCategoria/4",obj,"POST",csrf_token).then(data => {
            if(data){
                loaderCategoria();
                $.notify("Categoria eliminada","success");
            }else{
                $.notify("Error al eliminar la categoria")
            }
        });
    }

    function estado(tipo) {
        if(tipo == 1){
            return '<td><p style="color:green">Activo</p></td>';
        }else{
            return '<td><p style="color:red">Inactivo</p></td>';
        }
    }

    $(document).ready(function () {
        loaderCategoria();
        loaderProducto();
        loaderUsuarios();
    });

    $("#searchProducto").keyup(function () {
        var productos = "";
        var like = $("#searchProducto").val();
        var tipo = $("#searchProductoOption").val();
        if(like.length > 3){
            var obj = new Object();
            obj.like = like;
            obj.tipo = tipo;
            post(url+"/gestionCategoria/5",obj,"POST",csrf_token).then(data => {
                var string = "";
                if(obj.tipo == 1){
                    loaderProducto(data);
                }else{
                    for(var i in data){
                        string += "<tr>";
                        string += "<td>"+data[i].idCategoria+"</td>";
                        string += "<td>"+data[i].categoria+"</td>";
                        string += "<td>"+data[i].nombreProducto+"</td>";
                        string += "<td>"+data[i].precioProducto+"</td>";
                        string += "<td>"+data[i].detalleProducto+"</td>";
                        string += "<td><img src='"+data[i].imgProducto+"' width='100'></td>";
                        string += estado(data[i].estadoProducto);
                        string += "<td><button onclick='editarProducto("+JSON.stringify(data[i])+","+i+")' class='btn btn-sm btn-success'>Editar</button>&nbsp;&nbsp;<button onclick='eliminarProducto("+data[i].id+","+i+")' class='btn btn-sm btn-danger'>Eliminar</button></td>";
                        string += "</tr>";
                    }
                    $("#tableP").html(string);
                }
            });
        }
    });


    $("#formProductos").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();

        obj.id = $("#categoriaP").val();
        obj.nombre = $("#nombreP").val();
        obj.precio = $("#precioP").val();
        obj.detalle = $("#detalleP").val();
        obj.img = $("#imgP").val();
        obj.estado = $("#estadoP").val();
        if(obj.precio.length>7){
            $.notify("el precio no puede ser mayor a $ 9999999","error");
            return false;
        }

        if (!confirmar()){
            return false;
        }
        if($("#idCategoriaP").val() == ""){
            post(url+"/gestionCategoria/6",obj,"POST",csrf_token).then(data =>{
                if(data){
                    $.notify("Producto Creada Con exito","success");
                }else{
                    $.notify("Error al crear esta categoria o ya existe");
                }
            });
        }else{
            obj.idProducto = $("#idProducto").val();
            obj.id = $("#idCategoriaP").val();
            post(url+"/gestionCategoria/7",obj,"POST",csrf_token).then(data =>{
                if(data){
                    $.notify("Producto editado con exito","success");
                }else{
                    $.notify("Error al editar este producto /o no cambio los datos del producto");
                }
            });
        }
        loaderProducto();
    });


    function editarProducto(data = {},id) {
        $("#mns").css("display", "block").css("color", "red");
        $('html, body').animate({
            scrollTop: $("#mns").offset().top - 150
        }, 500);
        $('#categoriaP').prop('disabled', true);
        $("#btnProducto").val("Editar Producto");
        $("#imageP").prop("required",false);
        if(data.idProducto != undefined){
            $("#nombreP").val(data.nombreProducto);
            $("#precioP").val(data.precioProducto);
            $("#detalleP").val(data.detalleProducto);
            $("#imgProducto").attr("src",data.imgProducto).css("display","block");
            $("#imgP").val(data.imgProducto);
            $("#idCategoriaP").val(data.idCategoria);
            $("#idProducto").val(data.idProducto);
        }else{
            $("#nombreP").val(data["productos"][id].nombre);
            $("#precioP").val(data["productos"][id].precio);
            $("#detalleP").val(data["productos"][id].detalle);
            $("#imgProducto").attr("src",data["productos"][id].img).css("display","block");
            $("#imgP").val(data["productos"][id].img);
            $("#idCategoriaP").val(data.id);
            $("#idProducto").val(id);
        }
        expandTextarea();
    }

    $("#btndisableCategoria").click(function () {
        $('#categoriaP').prop('disabled', false);
        $("#idCategoriaP").val("");
        $("#btnProducto").val("Registrar Producto");
    });

    function expandTextarea() {
        $("textarea").css("overflow","hidden");
        $("textarea").css("height",0);
        $("textarea").css("height",$("textarea").prop('scrollHeight')+"px");
    }

    $("textarea").keyup(function () {
        expandTextarea();
    })

    function eliminarProducto(id,idProducto) {
        if(!confirmar("Si borras la categorias, los productos de esta se eliminaran")){
            return false;
        }
        obj = new Object();
        obj.id = id;
        obj.idProducto = idProducto;

        post(url+"/gestionCategoria/8",obj,"POST",csrf_token).then(data => {
            if(data){
                loaderProducto();
                $.notify("Producto eliminada","success");
            }else{
                $.notify("Error al eliminar el producto")
            }
        });
    }

</script>

</body>
</html>