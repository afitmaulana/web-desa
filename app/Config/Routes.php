<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/layanan', 'Home::layanan');

// --- TAMBAHKAN BARIS INI ---
$routes->get('/produk', 'Home::produk');
// -------------------------