<?php

use App\Controllers\Mahasiswa;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =============================================
// Routes akan mengirim ke controller.
// Routes adalah sebuah path untuk mengirimkan sesuatu ke controller
// =============================================
// Pola  :
//  $routes->get/post('Routes', 'Class::method');
// Contoh : 
//  $routes->post('/home/inputData', 'Home::inputData');
//  $routes->get('/home/input', 'Home::inputPages');
// =============================================


// LOGIN PAGES AND AUTH
$routes->get('/login', 'LoginPage::index');
$routes->post('/login/auth', 'LoginPage::auth');

// HOME PAGES
$routes->get('/home', 'Home::homePage'); 
$routes->get('/home/admin', 'Admin::adminPage'); 

// PENGGAJIAN PAGES
$routes->get('/penggajian', 'Home::penggajian');
$routes->get('/penggajian/User', 'Home::penggajianUser');

// LOGOUT PAGES
$routes->get('/logout', 'LoginPage::logout');

// DATA
$routes->get('/delete/(:num)', 'Data::deleteAnggota/$1');
$routes->get('/detail/anggota/(:num)', 'Data::detailAnggota/$1');
$routes->get('/input', 'Data::inputAnggota');
$routes->post('/input/auth', 'Data::inputAuth');
$routes->get('/edit/(:num)', 'Data::editDataAnggota/$1');
$routes->post('/edit/auth', 'Data::editAnggotaAuth');

//TUNJANGAN PAGES
$routes->get('/komponenGaji', 'Tunjangan::Komponen_gaji');
$routes->get('/delete/gaji(:num)', 'Tunjangan::DeleteKomponen/$1');
$routes->get('/input/komponen', 'Tunjangan::inputKomponen');
$routes->post('/input/komponen/auth', 'Tunjangan::inputKomponenAuth');
$routes->get('/edit/gaji/(:num)', 'Tunjangan::editKomponen/$1');
$routes->post('/edit/gaji/auth', 'Tunjangan::editKomponenAuth');

//DETAIL PENGGAJIAN
$routes->get('/detail/gaji/(:num)', 'Tunjangan::penggajian/$1');
$routes->get('/input/detail/penggajian/(:any)/(:num)', 'Tunjangan::inputPenggajian/$1/$2');
$routes->post('/input/detail/penggajian/auth', 'Tunjangan::inputPenggajianAuth');
$routes->get('/delete/gaji/(:num)', 'Tunjangan::deleteGaji/$1');
