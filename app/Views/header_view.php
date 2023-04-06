<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Archivo CSS personalizado -->
    <style>
    /* Estilos personalizados para la barra de navegación */
        .navbar {
            margin-bottom: 20px;
            background-color: #239B56 !important;
            color: #9B59B6 !important;
        }
        .navbar-brand{
            color: white !important;
        }
        .nav-link{
            color: white !important;
        }
        .nav-link:hover{
            background-color: #ABEBC6;
        }
        .navbar-brand:hover{
            background-color: #ABEBC6;
        }
        .navbar-toggler{
            background-color: #fff !important; 
            /* color: #fff !important; */
        }


        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #239B56; /*#333;*/
            color: white ; /*#fff;*/
            text-align: center;
            padding: 10px 0;
        }

        #footer p {
            margin: 0;
            line-height: 30px;
        }

        /* Carrito */
        .cart-icon {
            position: fixed;
            top: 20px; /* opcional para establecer la posición vertical */
            right: 90px;
            display: inline-block;
            margin-right: 20px;    
        }

        .cart-icon i {
            font-size: 2rem;
            color: #333;
            cursor: pointer;
        }

        .item-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #f00;
            color: #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            font-size: 0.8rem;
            text-align: center;
            line-height: 16px;
        }

        .navbar-toggler-icon {
  background-color: red;
}
    </style>
</head>

<body>
<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">tianguis-V</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon " ></span>
        </button>

        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
            <div class="cart-icon ">
                <i class="fa fa-shopping-cart"></i>
                <span class="item-count">0</span>
            </div>
        <?php } ?>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (!isset($_SESSION['logged_in'] ) || !$_SESSION['logged_in']) { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>login_form">Iniciar sesión</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
            </ul>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuario
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Configuración</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>

</header>
