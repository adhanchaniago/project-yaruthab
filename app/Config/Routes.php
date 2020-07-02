<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages');
$routes->get('/rt', 'Pages::rt');
$routes->get('/pesantren', 'Pages::pesantren');
$routes->get('/portofolio', 'Pages::portofolio');
$routes->get('/doc', 'Pages::doc');

$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->get('/admin', 'Pages::dashboard');
$routes->get('/logout', 'Auth::logout');

$routes->get('/rumahtahfid', 'RumahTahfidz::index');
$routes->post('/rumahtahfid', 'RumahTahfidz::tambahData');
$routes->get('/hrumahtahfid/(:any)', 'RumahTahfidz::hapusData/$1');
$routes->post('/erumahtahfid/(:any)', 'RumahTahfidz::editData/$1');


$routes->get('/pengajar', 'Pengajar::index');
$routes->get('/pengajar/(:any)', 'Pengajar::edit/$1');
$routes->get('/hpengajar/(:any)', 'Pengajar::hapusData/$1');
$routes->post('/epengajar/(:any)', 'Pengajar::updateData/$1');
$routes->post('/pengajar', 'Pengajar::tambahData');

$routes->get('/profile', 'Profile::index');
$routes->post('/profile', 'Profile::index');

$routes->get('/pengurus', 'Pengurus::index');
$routes->get('/pengurus/(:any)', 'Pengurus::edit/$1');
$routes->post('/pengurus', 'Pengurus::tambahData');
$routes->post('/epengurus/(:any)', 'Pengurus::editData/$1');
$routes->get('/hpengurus/(:any)', 'Pengurus::hapusData/$1');

$routes->get('/santri', 'Santri::index');
$routes->get('/santri/edit/(:any)', 'Santri::edit/$1');
$routes->get('/santri/(:any)', 'Santri::hapusData/$1');
$routes->get('/detailSantri/(:any)', 'Santri::getDataById/$1');
$routes->post('/santri', 'Santri::tambahData');
$routes->post('/santri/(:any)', 'Santri::editData/$1');

$routes->get('/user', 'User::index');

$routes->get('/donatur', 'Donatur::index');
$routes->get('/donatur/(:any)', 'Donatur::hapusData/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
