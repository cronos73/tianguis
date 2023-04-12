<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//Administradores
$routes->get('admin', 'admin::index');
$routes->get('productos', 'Productos::index');
$routes->get('entregas', 'Entregas::index');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('mensajes', 'Mensajes::index');
$routes->get('configuraciones', 'Configuraciones::index');


//Ventas en linea
$routes->get('inicio', 'Inicio::index');
$routes->get('acceso', 'Login::index');

//Comunes
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');


//$routes->get('login', 'Login::index');
//$routes->post('accesar', 'Login::SolicitarAccesoPos');
//$routes->get('salir', 'Login::SalirDePos');
//backend

// $routes->get('loginadmin', 'Login::admin');
// $routes->post('accesar_admin', 'Login::SolicitarAccesoAdmin');

// $routes->get('productos', 'Productos::index');
// $routes->get('usuarios', 'Usuarios::index');
// $routes->get('entregas', 'Entregas::index');
// $routes->get('configuraciones', 'Configuraciones::index');


//$routes->post('login', 'Login::SoliictarAccesoPos');
//$routes->get('logout', 'Login::SolicitarSalirDePos');
//$routes->get('login', 'Login::index');
//$routes->post('loginvalidar', 'Login::login');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
