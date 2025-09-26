<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ================== WEBSITE (FRONTEND) ================== //
$routes->get('/', 'Website::index');
$routes->get('/about', 'Website::about');
$routes->get('/services_security', 'Website::services_security');
$routes->get('/services', 'Website::services');
$routes->get('/cleaning_service', 'Website::cleaning_service');
$routes->get('/gardening', 'Website::gardening');
$routes->get('/receptionist', 'Website::receptionist');
$routes->get('/driver', 'Website::driver');
$routes->get('/labor_supply', 'Website::labor_supply');
$routes->get('/contact', 'Website::contact');
$routes->get('/contact', 'Website::contact');
$routes->get('/berita', 'Berita::berita');

// Loker & Lamaran (frontend)
$routes->get('/loker', 'AdminLoker::loker'); // List lowongan
$routes->get('/inputloker', 'Website\Lamaran::input');
$routes->get('/lamaran', 'Website\Lamaran::index');
$routes->post('/lamaran/save', 'Website\Lamaran::save');

// Data Lamaran
$routes->get('/data_lamaran', 'Website\Lamaran::lamaran');
$routes->get('/data_lamaran/(:segment)', 'Dashboard::lamaran/$1');
$routes->get('/dashboard/hapus/(:num)', 'Dashboard::hapus/$1');
$routes->get('/dashboard/tandai/(:num)', 'Website\Lamaran::tandai/$1');
$routes->post('/dashboard/hapus_multiple', 'Website\Lamaran::hapus_multiple');
// $routes->post('/dashboard/tandai_multiple', 'Website\Lamaran::tandai_multiple');

// LPK
$routes->get('/rubber_seal', 'Website::rubber_seal');
$routes->get('/wiring_harness', 'Website::wiring_harness');
$routes->get('/sewing', 'Website::sewing');
$routes->get('/packing', 'Website::packing');
$routes->get('/molding_operator', 'Website::molding_operator');

// Public Berita Routes
// ✅ Berita Frontend
$routes->get('/berita', 'Berita::index');
$routes->get('/berita/detail/(:segment)', 'Berita::detail/$1');
$routes->get('/berita/kategori/(:segment)', 'Berita::kategori/$1');
$routes->get('/berita/search', 'Berita::search');
$routes->post('/berita/load-more', 'Berita::loadMore');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');


$routes->group('', ['filter' => 'auth'], function ($routes) {
    // ================== AUTH ================== //


    $routes->get('/logout', 'Auth::logout');
    $routes->get('/data_akun', 'Akun::index');
    $routes->get('/create', 'Akun::create');
    $routes->post('/akun/store', 'Akun::store');
    $routes->post('auth/logout', 'Auth::logout');
    $routes->get('akun/delete/(:num)', 'Akun::delete/$1');
    $routes->get('akun/edit/(:num)', 'Akun::edit/$1');
    $routes->post('akun/update/(:num)', 'Akun::update/$1');


    // ================== ADMIN ================== //

    // Dashboard
    $routes->get('/dashboard', 'Dashboard::index');

    // Admin Berita Management
    $routes->get('admin/berita', 'AdminBerita::search');

    $routes->get('data_berita', 'AdminBerita::index');           // /admin/berita
    $routes->get('input_berita', 'AdminBerita::create');     // /admin/berita/create
    $routes->post('berita/store', 'AdminBerita::store');   // /admin/berita/store
    $routes->get('berita/edit/(:num)', 'AdminBerita::edit/$1');
    $routes->post('berita/update/(:num)', 'AdminBerita::update/$1');
    $routes->post('berita/delete/(:num)', 'AdminBerita::delete/$1');
    $routes->post('check-slug', 'AdminBerita::checkSlug');


    $routes->post('breaking-news/delete/(:num)', 'BreakingNews::delete/$1'); // Delete (POST)
    // $routes->get('breaking_news/delete/(:num)', 'BreakingNews::delete/$1'); // hapus
    $routes->get('breaking_news/edit_breaking/(:num)', 'BreakingNews::edit/$1'); // Form edit
    $routes->post('breaking_news/update/(:num)', 'BreakingNews::update/$1');
    $routes->get('data_breaking', 'BreakingNews::index');
    $routes->post('breaking-news/store', 'BreakingNews::store');
    $routes->get('input_breaking', 'BreakingNews::create');

    // $routes->post('breaking-news/delete/(:num)', 'BreakingNews::delete/$1'); // <-- harus POST
    $routes->post('breaking-news/toggle-status/(:num)', 'BreakingNews::toggleStatus/$1');
    // $routes->post('breaking-news/store', 'AdminBerita::storeBreaking');



    // $routes->get('admin/berita', 'AdminBerita::index');
    // $routes->get('admin/berita/create', 'AdminBerita::create');
    // $routes->post('admin/berita/store', 'AdminBerita::store');
    $routes->get('admin/berita/edit/(:num)', 'AdminBerita::edit/$1');
    $routes->post('admin/berita/update/(:num)', 'AdminBerita::update/$1');
    // $routes->delete('admin/berita/delete/(:num)', 'AdminBerita::delete/$1');

    // Admin Loker Management
    $routes->get('data_loker', 'AdminLoker::index');            // /admin/loker
    $routes->get('input_loker', 'AdminLoker::create');      // /admin/loker/create
    $routes->post('loker/store', 'AdminLoker::store');       // /admin/loker/store
    $routes->get('loker/edit/(:num)', 'AdminLoker::edit/$1');
    $routes->post('loker/update/(:num)', 'AdminLoker::update/$1');
    $routes->get('loker/delete/(:num)', 'AdminLoker::delete/$1');
});

// ================== API ================== //
$routes->group('api', function ($routes) {
    $routes->get('berita/latest/(:num)', 'ApiBerita::latest/$1');
    $routes->get('berita/featured', 'ApiBerita::featured');
    $routes->get('berita/breaking', 'ApiBerita::breaking');
    $routes->get('berita/search/(:segment)', 'ApiBerita::search/$1');
});
