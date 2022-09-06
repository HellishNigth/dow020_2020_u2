<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyas Amaju</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
</head>

<body style="background-color:rgb(211, 211, 211)">
    <div class="container-fluid p-0">
        <!--usuario-->
        <div class="row text-white m-0" style="background-color:rgba(12, 175, 175, 0.514)">
            <div class="col-8">
                Bienvenido <b>Señorita</b>
            </div>
            <div class="col-3 text-right d-none d-lg-block">
                <small>Último inicio de sesión: 06/10/2020 a las 22:28</small>
            </div>
            <div class="col-1 text-right d-none d-lg-block">
                <a href="index.html" class="text-white">Cerrar Sesión</a>
            </div>
        </div>
        <!--/usuario-->

        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(231, 229, 229)">
            <a class="navbar-dark">
                <img class="logo" src="{{asset('images/logo.png')}}">
            </a>
            <a class="navbar-dark" href="#">Joyas Amaju</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="home.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="equipos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Proveedores</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav-link text-dark" href="#">Ajuste de Stock</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Configuración
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                            <a class="dropdown-item" href="#">Usuario</a>
                            <a class="dropdown-item d-lg-none" href="index.html">Cerrar Sesión</a>
                        </div>
                    </li>
                    
                </ul>
                
            </div>
        </nav>
        <!--/navbar-->

        <!--contenido-->
        
        <!--/contenido-->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>