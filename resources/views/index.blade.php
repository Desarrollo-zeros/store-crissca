@extends("main")

@section('head')
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Store </title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{url('')}}/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{url('')}}/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('')}}/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{url('')}}/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{url('')}}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('')}}/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .cart-dropdown .cart-btns>a{
            width: 100%!important;
            background-color: #D10024!important;
        }
    </style>
</head>
@endsection


@section('header')
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">

                    @if(!empty($usuario))
                        <li><a href="#"><i class="fa fa-dollar"></i>$ {{$usuario["factura"]["fondo"]}} USD</a></li>
                        <li><a href="/panel"><i class="fa fa-user-o"></i> Mi cuenta</a></li>
                        <li><a href="/logout"><i class="fa fa-close"></i> Cerrar Sesíon</a></li>
                    @else
                        <li><a href="#" onclick="openLoginModal()"><i class="fa fa-user-o"></i> Iniciar o Registrar</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <div class="header-logo">
                            <a href="{{url('')}}" class="logo">
                                <img src="{{url('')}}/img/logon.png" width="100" class="img-circle img-thumbnail" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form class="search-product">
                                <select class="input-select input-select1">
                                    @foreach($categoria as $row)
                                        <option value="{{$row["id"]}}" >{{$row["nombre"]}}</option>
                                    @endforeach
                                </select>
                                <input class="input input-search1" type="search" placeholder="Buscar Producto">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-4">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" onclick="loaderListaProductoPorComprar()" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                    <div class="qty" id="cart"></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">

                                    </div>
                                    <div class="cart-summary">
                                        <small id="cantidadSelect"></small>
                                        <h5 id="subTotal"></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a onclick="comprarProducto();" href="#">Comprar Producto<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
@endsection


@section("navigation")
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{url("")}}">Inicio</a></li>
                    @foreach($categoria as $row)
                        @if(!empty($row["productos"]))
                            <li><a href="/store/{{$row["url"]}}">{{$row["nombre"]}}</a></li>
                        @endif
                    @endforeach
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
@endsection

@section("categoria")

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- STORE -->
                <div id="store" class="col-md-12">
                    <!-- store top filter -->

                    <!-- /store top filter -->
                    <!-- store products -->
                    <div class="row productoSearch">
                        @foreach($categoria as $productos)
                            @if(!empty($productos["productos"]) && $productos["url"] == $any1)
                                @foreach($productos["productos"] as $key => $value)
                                    @if($value != null && $value["estado"] == 1)
                                        <div class="col-md-4 col-xs-6">
                                            <div class="product {{$productos["nombre"]}}" style="display: block">
                                                <div class="product-img">
                                                    <img src="{{$value["img"]}}" height="240" width="240" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">Categoria {{$productos["nombre"]}}</p>
                                                    <h3 class="product-name"><a href="#">{{substr($value["nombre"],0,20)}}</a></h3>
                                                    <h4 class="product-price">$ {{$value["precio"]}} <del class="product-old-price">$ {{$value["precio"]}}</del></h4>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product-btns">
                                                        <button class="add-to-compare" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-exchange"></i><span class="tooltipp">Agregar a carrito</span></button>
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver Producto</span></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-shopping-cart"></i> Agregar a Carrito</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                    </div>
                    <!-- /store products -->
                </div>
                <!-- /STORE -->

            </div>
        </div>
    </div>

@endsection

@section("productos")
    <!-- SECTION -->
    <div class="section" id="producto">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Productos</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                @foreach($categoria as $row)
                                    @if(!empty($row["productos"]))
                                        <li><a data-toggle="tab" onclick="$('.product').css('display','none');$('.{{$row["nombre"]}}').css('display','block');" href="#{{$row["url"]}}">{{$row["nombre"]}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">

                                <div class="products-slick productoSearch" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @foreach($categoria as $productos)
                                        @if(!empty($productos["productos"]))
                                            @foreach($productos["productos"] as $key => $value)
                                                @if($value != null && $value["estado"] == 1)
                                                    @if($productos["id"] == 1)
                                                        <div class="product {{$productos["nombre"]}}" style="display: block">
                                                            <div class="product-img">
                                                                <img src="{{$value["img"]}}" height="240" width="240" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">Categoria {{$productos["nombre"]}}</p>
                                                                <h3 class="product-name"><a href="#">{{substr($value["nombre"],0,20)}}</a></h3>
                                                                <h4 class="product-price">$ {{$value["precio"]}} <del class="product-old-price">$ {{$value["precio"]}}</del></h4>
                                                                <div class="product-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-btns">
                                                                    <button class="add-to-compare" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-exchange"></i><span class="tooltipp">Agregar a carrito</span></button>
                                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver Producto</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <button class="add-to-cart-btn" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-shopping-cart"></i> Agregar a Carrito</button>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="product {{$productos["nombre"]}}" style="display: none">
                                                            <div class="product-img">
                                                                <img src="{{$value["img"]}}" height="240" width="240" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">Categoria {{$productos["nombre"]}}</p>
                                                                <h3 class="product-name"><a href="#">{{substr($value["nombre"],0,20)}}</a></h3>
                                                                <h4 class="product-price">$ {{$value["precio"]}} <del class="product-old-price">$ {{$value["precio"]}}</del></h4>
                                                                <div class="product-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-btns">
                                                                    <button class="add-to-compare" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-exchange"></i><span class="tooltipp">Agregar a carrito</span></button>
                                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver Producto</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <button class="add-to-cart-btn" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-shopping-cart"></i> Agregar a Carrito</button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection


@section('producto')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- product -->
            @foreach($categoria as $productos)
                @if(!empty($productos["productos"]) &&  $productos["id"] == $any1)
                    @foreach($productos["productos"] as $key => $value)
                        @if($value != null && $value["estado"] == 1 && $key == (int)$any2)
                            <!-- Product main img -->
                                <div class="col-md-5 col-md-push-2">
                                    <div id="product-main-img">
                                        <div class="product-preview">
                                            <img src="{{$value["img"]}}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Product thumb imgs -->
                                <div class="col-md-2  col-md-pull-5">
                                    <div id="product-imgs">
                                    </div>
                                </div>

                            <!-- Product details -->
                                <div class="col-md-5">
                                    <div class="product-details">
                                        <h2 class="product-name">{{$value["nombre"]}}</h2>
                                        <div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <a class="review-link" href="#"></a>
                                        </div>
                                        <div>
                                            <h3 class="product-price">{{$value["precio"]}} <del class="product-old-price">{{$value["precio"]}}</del></h3>
                                            <span class="product-available">In Stock</span>
                                        </div>
                                        <p>{{$value["detalle"]  }}</p>

                                        <div class="product-options">
                                            <hr>
                                            <br>
                                            <label><strong>Para Comprar el producto debe iniciar sesion</strong></label>
                                            <hr>
                                        </div>

                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn" onclick="addCarrito('{{$key}}','{{$productos["id"]}}')"><i class="fa fa-shopping-cart"></i> Agregar Producto al carrito</button>
                                        </div>


                                        <ul class="product-links">
                                            <li><a href="{{url("")}}">Inicio</a></li>
                                            @foreach($categoria as $row)
                                                @if(!empty($row["productos"]))
                                                    <li><a href="/store/{{$row["url"]}}">{{$row["nombre"]}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>

                                        <ul class="product-links">
                                            <li>Share:</li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- /Product details -->
                        @endif
                    @endforeach
                @endif
            @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection

@section("newsletter")
    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <form>
                            <br>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
@endsection

@section("footer")
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                @foreach($categoria as $row)
                                    <li><a href="/store/{{$row["url"]}}">{{$row["nombre"]}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->


        <div class="modal fade login" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Iniciar Seśion</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="division">
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8" id="formLogin">
                                        <input id="username" class="form-control" type="text" placeholder="usuario" name="username" required=required>
                                        <input id="password" class="form-control" type="password" placeholder="Contraseña" name="password" required=required>
                                        <input class="btn btn-default btn-login" type="submit" value="Iniciar Sesíon">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                                <div class="form">
                                    <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" id="formRegister" accept-charset="UTF-8">
                                        <input id="username1" class="form-control" type="text" placeholder="usuario" name="username1" required=required>
                                        <input id="email" class="form-control" type="email" placeholder="Correo electronico" name="email" required=required>
                                        <input id="password1" class="form-control" type="password" placeholder="Contraseña" name="password1" required=required>
                                        <input id="password2" class="form-control" type="password" placeholder="Repetir contraseña" name="password2" required=required>
                                        <input class="btn btn-default btn-register" type="submit" value="Crear Cuenta" name="commit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>No tienes Cuenta?
                                 <a href="javascript: showRegisterForm();">Registrate</a></span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                            <span>Ya tienes Cuenta?</span>
                            <a href="javascript: showLoginForm();">Iniciar Sesíon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->
@endsection




@section('js')


    <script type="text/javascript" src='{{url('')}}/js/jquery.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/slick.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/nouislider.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/jquery.zoom.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/main.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/notify.min.js'></script>
    <script type="text/javascript" src='{{url('')}}/js/custom.js'></script>


    <script>
        var a = [];

        var url = '{{url('')}}';
        var csrf_token = '{{csrf_token()}}';



        if(localStorage.carrito != undefined){
            var carrito = JSON.parse(localStorage.carrito);
            $("#cart").html(carrito.length);
        }
        /*if(localStorage.deseo != undefined){
            var deseo = JSON.parse(localStorage.deseo);
            $("#deseo").html(deseo.length);
        }*/


        /* var addDeseo = function(idProducto,idCategoria) {
             var obj = new Object();
             obj.idCategoria = idCategoria;
             obj.idProducto = idProducto;
             if(localStorage.deseo == undefined){
                 localStorage.deseo = JSON.stringify(obj);
             }else{
                 var carrito = JSON.parse(localStorage.carrito);
                 var data = [{"idCategoria":idCategoria,"idProducto":idProducto}];
                 for(var i in carrito){
                     if(!isEmpty(carrito[i]) && carrito[i] != undefined){
                         data.push({"idCategoria":carrito[i].idCategoria,"idProducto":carrito[i].idProducto});
                     }
                 }
                 localStorage.deseo = JSON.stringify(data);
             }
             var carrito = JSON.parse(localStorage.deseo);
             $("#cart").html(carrito.length);
             $.notify("Producto agregado al carrito","success");
         };*/

        var addCarrito = function (idProducto,idCategoria) {
            var obj = new Object();
            obj.idCategoria = idCategoria;
            obj.idProducto = idProducto;
            if(localStorage.carrito == undefined){
                localStorage.carrito = JSON.stringify([obj]);
            }else{
                var carrito = JSON.parse(localStorage.carrito);
                var data = [{"idCategoria":idCategoria,"idProducto":idProducto}];
                for(var i in carrito){
                    if(!isEmpty(carrito[i]) && carrito[i] != undefined){
                        data.push({"idCategoria":carrito[i].idCategoria,"idProducto":carrito[i].idProducto});
                    }
                }
                localStorage.carrito = JSON.stringify(data);
            }
            var carrito = JSON.parse(localStorage.carrito);
            $("#cart").html(carrito.length);
            $.notify("Producto agregado al carrito","success");
        };





        function showRegisterForm(){
            $('.loginBox').fadeOut('fast',function(){
                $('.registerBox').fadeIn('fast');
                $('.login-footer').fadeOut('fast',function(){
                    $('.register-footer').fadeIn('fast');
                });
                $('.modal-title').html('Registrar Usuario');
            });
            $('.error').removeClass('alert alert-danger').html('');

        }
        function showLoginForm(){
            $('#loginModal .registerBox').fadeOut('fast',function(){
                $('.loginBox').fadeIn('fast');
                $('.register-footer').fadeOut('fast',function(){
                    $('.login-footer').fadeIn('fast');
                });

                $('.modal-title').html('Iniciar Sesíon');
            });
            $('.error').removeClass('alert alert-danger').html('');
        }

        function openLoginModal(){
            showLoginForm();
            setTimeout(function(){
                $('#loginModal').modal('show');
            }, 230);

        }
        function openRegisterModal(){
            showRegisterForm();
            setTimeout(function(){
                $('#loginModal').modal('show');
            }, 230);

        }

        $("#formLogin").on("submit",function (form) {
            form.preventDefault();
            var obj = new Object();
            obj.username = $("#username").val();
            obj.password = $("#password").val();

            if(obj.username.length <3 || obj.password.length < 3){
                shakeModal("Usuario y/o contraseña deben tener minimo 3 caracteres");
                return false;
            }else{
                post(url+"/login",obj,"POST",csrf_token).then(data => {
                    if(!data){
                        shakeModal("Error usuario y/o Contraseña incorrecta");
                        $.notify("Error usuario y/o Contraseña incorrecta");
                    }else{
                        window.location.href = url+"/panel";
                    }
                });
            }
        });

        $("#formRegister").on("submit",function (form) {
            form.preventDefault();
            var obj = new Object();
            obj.username = $("#username1").val();
            obj.password = $("#password1").val();
            obj.password2 = $("#password2").val();
            obj.email = $("#email").val();

            if(obj.password != obj.password2){
                shakeModal("Ambas contraseña deben ser iguales");
                return false;
            }
            if(obj.username.length <3 || obj.password.length < 3){
                shakeModal("Usuario y/o contraseña deben tener minimo 3 caracteres");
                return false;
            }else{
                post(url+"/register",obj,"POST",csrf_token).then(data => {
                    if(!data){
                        shakeModal("Error usuario y/o Email ya existen");
                        $.notify("Error usuario y/o Email ya existen");
                    }else{
                        shakeModal("Cuenta creada con exito","success");
                        $.notify("Cuenta creada con exito","success");
                    }
                });
            }
        });

        function shakeModal(text,alert = 'danger'){
            $('#loginModal .modal-dialog').addClass('shake');
            $('.error').addClass('alert alert-'+alert+'').html(text);
            $('input[type="password"]').val('');
            setTimeout( function(){
                $('#loginModal .modal-dialog').removeClass('shake');
            }, 1000 );
        }


        window.onbeforeunload = function(){
            post(url+"/visitOff",{},"POST",csrf_token).then();
        }


        $(".search-product").on("submit",function (form) {
            form.preventDefault();
            loaderSearchProducto();
        });


        $(".input-search1").keyup(function () {
            loaderSearchProducto(1);
        });

        function loaderSearchProducto(tipo) {
            var obj = new Object();
            obj.tipo = 2;
            obj.id = $(".input-select1").val();
            obj.like = $(".input-search1").val();

            if(obj.like.length > 4){
                post(url+"/gestionCategoria/5",obj,"POST",csrf_token).then(data => {
                    var string = "";
                    for(var i in data){
                        string += '<div class="col-md-4 col-xs-6">';
                        string += '<div class="product" style="display: block">';
                        string += '<div class="product-img"><img src="'+data[i].imgProducto+'" height="240" width="240" alt=""></div>';
                        string += '   <div class="product-body">';
                        string += '    <p class="product-category">Categoria '+data[i].categoria+'</p>';
                        string += '    <h3 class="product-name"><a href="#">'+data[i].nombreProducto.substr(0, 20);+'</a></h3>';
                        string += '<h4 class="product-price">$ '+data[i].precioProducto+' <del class="product-old-price">$ '+data[i].precioProducto+'</del></h4>';
                        string += '<div class="product-rating">';
                        string += '   <i class="fa fa-star"></i>';
                        string += '    <i class="fa fa-star"></i>';
                        string += '    <i class="fa fa-star"></i>';
                        string += '    <i class="fa fa-star"></i>';
                        string += '   <i class="fa fa-star"></i>';
                        string += ' </div>';
                        string += '  <div class="product-btns">';
                        string += ' <button class="add-to-compare" onclick="addCarrito('+i+','+data[i].idCategoria+')"><i class="fa fa-exchange"></i><span class="tooltipp">Agregar a carrito</span></button>';
                        string += '<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver Producto</span></button>';
                        string += '</div>';
                        string += '</div>';
                        string += '<div class="add-to-cart">';
                        string += '<button class="add-to-cart-btn" onclick="addCarrito('+i+','+data[i].idCategoria+')"><i class="fa fa-shopping-cart"></i> Agregar a Carrito</button>';
                        string += '</div>';
                        string += '</div>';
                        string += '</div>';
                    }
                    $(".productoSearch").html(string);
                });
            }else{
                return;
            }

        }

        function loaderListaProductoPorComprar(text = "",estado = "") {
            var carrito = JSON.parse(localStorage.carrito);
            if(carrito.length == 0){
                $.notify("carrito vacio","warnig");
                return false;
            }
            post(url+"/gestionCategoria/1",{},"POST",csrf_token).then(categoria =>{
                var string = "";
                var carrito = JSON.parse(localStorage.carrito);
                var total = 0;
                for(var i in carrito){
                    for(var j in categoria){
                        var producto = categoria[j]["productos"];
                        for(var k in producto){
                            if(k == carrito[i].idProducto && carrito[i].idCategoria == categoria[j].id){
                               string += '<div class="product-widget">';
                               string += ' <div class="product-img"><img src="'+producto[k].img+'" alt=""></div>';
                               string += '<div class="product-body">';
                               string += '<h3 class="product-name"><a href="#">'+producto[k].nombre+'</a></h3>';
                               string += '<h4 class="product-price"><span class="qty"></span>'+producto[k].precio+'</h4>';
                               string += '</div>';
                               string += '<button  onclick="eliminar('+carrito[i].idProducto+','+carrito[i].idCategoria+')" class="delete"><i class="fa fa-close"></i></button>';
                               string += '</div>';
                               total += parseInt(producto[k].precio);
                            }
                        }
                    }
                }
                var carrito = JSON.parse(localStorage.carrito);
                $("#cantidadSelect").html("tienes "+carrito.length+" items seleccionados");
                $("#subTotal").html("SUBTOTAL: $"+total);
                $("#cart").html(carrito.length);
                $(".cart-list").html(string);
            });
        }

        function comprarProducto(){
            var id = '';
            @if(!empty($usuario["id"]))
                id = '{{$usuario["id"]}}';
            @endif
            if(id == "" || id.length == 0){
                $.notify("para realizar la compra debe iniciar sesíon");
                openLoginModal();

            }else{
                window.location.href = url+"/panel";
            }
        }

    </script>
@endsection