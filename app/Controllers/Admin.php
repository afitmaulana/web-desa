<?php

namespace App\Controllers;

// Tambahkan "use" untuk model yang akan kita gunakan
use App\Models\AbsensiModel;

class Admin extends BaseController
{
    // Tambahkan properti untuk model
    protected $absensiModel;

    // Tambahkan __construct untuk memuat model secara otomatis
    public function __construct()
    {
        $this->absensiModel = new AbsensiModel();
    }
    
    // ... (fungsi index() yang sudah ada) ...
    public function index()
    {
        // ...
    }

    // --- TAMBAHKAN FUNGSI-FUNGSI BARU DI BAWAH INI ---

    public function absensiDashboard()
    {
        $tanggal_hari_ini = date('Y-m-d');
        $data = [
            'title' => 'Dashboard Absensi Pegawai',
            'kehadiran' => $this->absensiModel->getKehadiranHariIni($tanggal_hari_ini)
        ];

        return view('admin/absensi/dashboard', $data);
    }

    public function buatQrcode()
    {
        // Kunci rahasia untuk enkripsi QR Code
        $secret_key = 'RahasiaKantorDesaMajuJaya';
        $tanggal_hari_ini = date('Y-m-d');

        // Gabungkan data dan hash menjadi satu string untuk QR Code
        $data_masuk = "ABSEN_MASUK," . $tanggal_hari_ini . "," . hash('sha256', 'ABSEN_MASUK' . $tanggal_hari_ini . $secret_key);
        $data_pulang = "ABSEN_PULANG," . $tanggal_hari_ini . "," . hash('sha256', 'ABSEN_PULANG' . $tanggal_hari_ini . $secret_key);

        $data = [
            'title' => 'Buat QR Code Absensi',
            'data_masuk' => $data_masuk,
            'data_pulang' => $data_pulang
        ];

        return view('admin/absensi/qrcode', $data);
    }
}