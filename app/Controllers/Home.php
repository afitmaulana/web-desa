<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Data yang bisa dikirim ke view, contohnya judul halaman
        $data = [
            'title' => 'Desa Kersik - Selamat Datang'
        ];

        // Memuat view utama (template) dan mengirimkan data
        return view('layout/template', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Desa Kersik'
        ];
        return view('pages/profil', $data);
    }
}
