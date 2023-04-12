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
        /* Azul: #0074D9
Verde: #2ECC40
Naranja: #FF851B
Rojo: #FF4136
Gris: #AAAAAA

Fondo: #FFA07A
Encabezados: #FF8C00
Texto principal: #FFA500
Botones: #FF6347
Iconos/Elementos de resalte: #FFD700
Enlaces: #FF7F50

Fondo: #FFFFFF (blanco puro) o #F5F5F5 (gris claro).

Texto: #333333 (negro oscuro) o #666666 (gris oscuro).

Encabezados y botones: #333333 (negro oscuro) o #666666 (gris oscuro), y quizás un tono de color de acento como #A9DF9C (verde menta suave) o #F7CAC9 (rosa pastel suave).

Iconos: #333333 (negro oscuro) o #666666 (gris oscuro), o un tono de color de acento si se usan como botones.

Acentos de color: Si se utiliza una paleta de colores de acento, se pueden utilizar tonos suaves y sutiles, como #A9DF9C (verde menta suave), #F7CAC9 (rosa pastel suave) o #AED6F1 (azul claro suave).

verde bajito #A9DF9C
verde fuerte #4CAF50
*/
    /* Estilos personalizados para la barra de navegación */
        body{
            background-color: #F5F5F5 ;
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #4CAF50   !important;
            color: white !important;
        }
        .navbar-brand{
            color: white !important;
        }
        .nav-link{
            color: white !important;
        }
        .nav-link:hover{
            background-color: #A9DF9C  ;
            color: white !important;
        }
        .navbar-brand:hover{
            background-color: #A9DF9C  ;
            color: white !important;
        }
        .navbar-toggler{
            background-color: #4CAF50 !important;
             color: #fff !important;
             border-color: #4CAF50!important;
        }

        .navbar-toggler-icon {
            background-color: white;
        }



        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #4CAF50  ; /*#333;*/
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

    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url() ?><?php echo $inicio; ?>"><i class="fa fa-home"></i>  tianguis-V</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon " ></span>
        </button>
            <!-- ------------------------------------------------------------------- -->
            <!-- Opcion carrito de compra -->
            <!-- ------------------------------------------------------------------- -->
            <?php if (isset($_SESSION['loggin']) && $_SESSION['loggin'] && ($origen == 'ventas')) {?>
            <div class="cart-icon ">
                <i class="fa fa-shopping-cart " style="color:sylver"></i>
                <span class="item-count">0</span>
            </div>
        <?php }?>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- ------------------------------------------------------------------- -->
                <!-- Menu para administradores -->
                <!-- ------------------------------------------------------------------- -->
                <?php if (isset($_SESSION['loggin']) && $_SESSION['loggin'] && isset($_SESSION['esAdmin']) && $_SESSION['esAdmin']== true && $origen == 'admin') {?>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>productos"><i class="fa fa-cubes" aria-hidden="true"></i>  Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>entregas"><i class="fa fa-car" aria-hidden="true"></i>   Entregas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>usuarios"><i class="fa fa-users" aria-hidden="true"></i>  Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>mensajes"><i class="fa fa-commenting-o" aria-hidden="true"></i>  Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>configuraciones"><i class="fa fa-cogs" aria-hidden="true"></i>  Configuraciones</a>
                    </li>
                <?php }?>

                <!-- ------------------------------------------------------------------- -->
                <!-- Menu para venta en linea -->
                <!-- ------------------------------------------------------------------- -->
                <?php if ( $origen == 'ventas') {?>
                    <?php if (!isset($_SESSION['loggin']) || !$_SESSION['loggin']) {?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url() ?>acceso">Iniciar sesión</a>
                        </li>
                    <?php }?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                <?php }?>

            </ul>

            <!-- ------------------------------------------------------------------- -->
            <!-- Opciones para los perfiles -->
            <!-- ------------------------------------------------------------------- -->
            <?php if (isset($_SESSION['loggin']) && $_SESSION['loggin']) {?>
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sistema
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <!-- Perfil del usuario -->
                            <a class="dropdown-item" href="#">Perfil</a>

                            <!-- configuracion del usuario -->
                            <a class="dropdown-item" href="#">Configuración</a>

                            <!-- cierra session del usuario -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url() ?>logout">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            <?php }?>

        </div>
    </nav>

</header>
