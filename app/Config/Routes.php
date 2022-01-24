<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');



//resep
$routes->get('/categories/(:segment)', 'ResepController::categories/$1');
$routes->get('/recipe/(:num)', 'ResepController::resep/$1');
$routes->get('/reg-recipe', 'ResepController::add_recipe');
$routes->add('/reg-recipe/submit', 'ResepController::create');
$routes->add('/recipe/search', 'ResepController::search');

// restoran
$routes->get('/restaurant', 'RestoranController::restaurant');
$routes->add('/restaurant/filter', 'RestoranController::filter');
$routes->get('/restaurant-info/(:num)', 'RestoranController::restaurant_info/$1');
$routes->add('/restaurant/search', 'RestoranController::search');

//komentar
$routes->add('/komentar/submit', 'KomentarController::create');
$routes->add('/reply/submit', 'KomentarController::reply');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
