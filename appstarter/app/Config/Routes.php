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
$routes->get('/', 'Dashboard::index');

$routes->get('/dashboard/gallery', 'Dashboard::gallery');

$routes->get('/dashboard/about', 'Dashboard::about');

$routes->get('/user', 'Home::index');

$routes->get('/employe', 'Employe::index');
$routes->get('/admin/crud', 'Admin::crud_admin');

$routes->post('/employe', 'Employe::save');

$routes->post('/admin/save', 'Admin::save');

$routes->get('/tambahdata', 'Employe::tambahdata');

$routes->get('/tambahdata/admin', 'Admin::create');

$routes->get('/kalkulator', 'Kalkulator::hitung');

$routes->post('/hitung/proses', 'Kalkulator::proses');

$routes->get('/login','Admin::login');

$routes->post('/cek_login','Admin::cek_login');

$routes->post('/daftar', 'Admin::register');

//untuk edit dan ubah
$routes->get('/employe/(:any)/edit', 'Employe::edit/$1');
$routes->put('/employe/update', 'Employe::update');

$routes->get('/admin/(:any)/edit', 'Admin::edit/$1');
$routes->put('/admin/update', 'Admin::update');

$routes->get('/logout', 'Admin::logout');

//untuk delete
$routes->get('/employe/(:any)/delete', 'Employe::destroy/$1');

$routes->get('/admin/(:any)/delete', 'Admin::destroy/$1');
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
