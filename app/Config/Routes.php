<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::dasboard');
//website
$routes->get('/', 'Website::index');
$routes->get('/about', 'Website::about');
$routes->get('/services_security', 'Website::services_security');
$routes->get('/cleaning_service', 'Website::cleaning_service');
$routes->get('/gardening', 'Website::gardening');
$routes->get('/receptionist', 'Website::receptionist');
$routes->get('/driver', 'Website::driver');
$routes->get('/labor_supply', 'Website::labor_supply');
$routes->get('/loker', 'Website::loker');
$routes->get('/berita', 'Website::berita');
$routes->get('/contact', 'Website::contact');
$routes->get('/berita_detail_award', 'Website::berita_detail_award');
// $routes->get('/input_loker', 'Website::inputloker');
// $routes->get('inputloker', 'Website::input');
$routes->get('inputloker', 'Website::input');

//halaman admin
$routes->get('/dashboard', 'dashboard');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/cekdb', 'CekDatabase::index');

$routes->get('/input_loker', 'LokerC::input_loker');
$routes->get('/data_loker', 'LokerC::data_loker');


$routes->get('/input_berita', 'BeritaC::input_berita');
$routes->get('/data_berita', 'BeritaC::data_berita');