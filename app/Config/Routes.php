<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::index');
$routes->group('belajar', static function ($routes) {
    $routes->get('', 'Belajar::index');
    $routes->get('kali/(:any)/(:any)', 'Belajar::kali/$1/$2');
    $routes->get('bagi/(:any)/(:any)', 'Belajar::bagi/$1/$2');
    $routes->get('pesan', 'Belajar::pesan');
    $routes->get('latihan', 'Belajar::latihan');
});
$routes->group('belajar-helper', static function ($routes) {
    $routes->get('', 'BelajarHelper::index');
    $routes->get('amount', 'BelajarHelper::helper');
    $routes->post('simpan-belajar', 'BelajarHelper::simpanBelajar');
});
$routes->group('belajar-library', static function ($routes) {
    $routes->get('', 'BelajarLibrary::index');
    $routes->get('login', 'BelajarLibrary::login');
    $routes->get('logout', 'BelajarLibrary::logout');
    $routes->get('coba-lib', 'BelajarLibrary::cobaLib');
    // $routes->post('simpan-belajar', 'BelajarLibrary::simpanBelajar');
});

// $routes->get('/login', 'AuthController::login');
$routes->group('auth', static function ($routes) {
    $routes->get('login', 'AuthController::login');
    $routes->post('authenticate', 'AuthController::authenticate');
});