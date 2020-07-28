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
$routes->get('/checkout', 'Pages::checkout');
$routes->get('/portfolio/(:num)', 'Pages::galeri/$1');

$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->get('/admin', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');

$routes->get('/rumahtahfid', 'RumahTahfidz::index');
$routes->get('/rumahtahfid/print', 'RumahTahfidz::print');
$routes->post('/rumahtahfid', 'RumahTahfidz::tambahData');
$routes->get('/hrumahtahfid/(:any)', 'RumahTahfidz::hapusData/$1');
$routes->post('/erumahtahfid/(:any)', 'RumahTahfidz::editData/$1');


$routes->get('/pengajar', 'Pengajar::index');
$routes->get('/pengajar/(:num)', 'Pengajar::edit/$1');
$routes->get('/hpengajar/(:num)', 'Pengajar::hapusData/$1');
$routes->post('/epengajar/(:num)', 'Pengajar::updateData/$1');
$routes->post('/pengajar', 'Pengajar::tambahData');

$routes->get('/profile', 'Profile::index');
$routes->post('/profile', 'Profile::index');

$routes->get('/pengurus', 'Pengurus::index');
$routes->get('/pengurus/(:any)', 'Pengurus::edit/$1');
$routes->post('/pengurus', 'Pengurus::tambahData');
$routes->post('/epengurus/(:any)', 'Pengurus::editData/$1');
$routes->get('/hpengurus/(:any)', 'Pengurus::hapusData/$1');

$routes->get('/santri', 'Santri::index');
$routes->get('/santri/edit/(:num)', 'Santri::edit/$1');
$routes->get('/santri/(:num)', 'Santri::hapusData/$1');
$routes->get('/detailSantri/(:num)', 'Santri::getDataById/$1');
$routes->post('/santri', 'Santri::tambahData');
$routes->post('/santri/(:num)', 'Santri::editData/$1');

$routes->get('/user', 'User::index');

$routes->get('/donatur', 'Donatur::index');
$routes->get('/donatur/detail', 'Donatur::donasi');
$routes->get('/donatur/(:num)', 'Donatur::hapusData/$1');
$routes->get('/donatur/donasi/(:num)', 'Donatur::hapusDonasi/$1');
$routes->get('/donatur/konfirmasi/(:num)', 'Donatur::konfirmasi/$1');
$routes->post('/donasi/add', 'Donatur::tambahDonasi');
$routes->post('/donasi/barang', 'Donatur::tambahDonasiBarang');

$routes->post('/kegiatan', 'Kegiatan::tambahData');
$routes->post('/kegiatan/print', 'Kegiatan::print');
$routes->post('/kegiatan/(:num)', 'Kegiatan::editData/$1');
$routes->post('/kegiatan/upload/(:num)', 'Kegiatan::uploadGambar/$1');
$routes->get('/kegiatan/galeri/(:num)', 'Kegiatan::galeri/$1');
$routes->get('/kegiatan/(:num)', 'Kegiatan::hapusData/$1');
$routes->get('/kegiatan/tampil/(:num)', 'Kegiatan::isTampil/$1');
$routes->get('/kegiatan/hapus-foto/(:num)', 'Kegiatan::hapusFoto/$1');

$routes->get('/testimoni/(:num)', 'Testimoni::hapusData/$1');
$routes->post('/testimoni/', 'Testimoni::tambahData');

$routes->get('/keuangan', 'Keuangan::index');
$routes->get('/keuangan/(:num)', 'Keuangan::hapus/$1');
$routes->post('/keuangan/income', 'Keuangan::tambahIncome');
$routes->post('/keuangan/outcome', 'Keuangan::tambahOutcome');

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
