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
$routes->get('/home', 'Home::homePage'); // User
$routes->get('/home/admin', 'Admin::adminPage'); // Admin

// DASHBOARD PAGES

