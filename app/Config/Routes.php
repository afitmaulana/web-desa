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
$routes->get('/login', 'Auth::index'); // Menampilkan halaman login
$routes->post('/login/process', 'Auth::process'); // Memproses data login yang dikirim dari form
$routes->get('/logout', 'Auth::logout'); // Proses logout

// -------------------------

// Tambahkan di bagian bawah file, sebelum "Additional Routing"

// Rute untuk Halaman Absensi Pegawai
$routes->get('/absen/scan', 'Absen::scan', ['filter' => 'role:admin,pegawai']); // Semua yang login boleh scan
$routes->post('/absen/proses', 'Absen::proses', ['filter' => 'role:admin,pegawai']);

// Grup Rute untuk Admin (Semua di dalam sini otomatis butuh role 'admin')
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('absensi', 'Admin::absensiDashboard');
    $routes->get('absensi/qrcode', 'Admin::buatQrcode');
});