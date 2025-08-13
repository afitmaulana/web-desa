<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Website Desa',
            'active' => 'home'
        ];
        return view('pages/home', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Desa',
            'active' => 'profil'
        ];
        return view('pages/profil', $data);
    }

    public function layanan()
    {
        $data = [
            'title' => 'Layanan Desa',
            'active' => 'layanan'
        ];
        return view('pages/layanan', $data);
    }

    // --- TAMBAHKAN FUNGSI INI ---
    public function produk()
    {
        $data = [
            'title' => 'Produk Unggulan Desa',
            'active' => 'produk',
            'produk_list' => [ // Data contoh produk
                [
                    'nama' => 'Kopi Robusta Kersik',
                    'deskripsi' => 'Biji kopi robusta pilihan yang ditanam dan diolah secara tradisional oleh petani lokal.',
                    'gambar' => 'kopi.jpg' // Nama file gambar di folder public/img/
                ],
                [
                    'nama' => 'Keripik Singkong Aneka Rasa',
                    'deskripsi' => 'Keripik renyah yang terbuat dari singkong berkualitas dengan varian rasa original, balado, dan keju.',
                    'gambar' => 'keripik.jpg'
                ],
                [
                    'nama' => 'Gula Aren Asli',
                    'deskripsi' => 'Pemanis alami yang dibuat dari nira aren murni, tanpa bahan pengawet.',
                    'gambar' => 'gula.jpg'
                ]
            ]
        ];
        return view('pages/produk', $data);
    }
    // -------------------------
}