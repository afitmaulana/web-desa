<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        // Jika sudah login, tidak bisa akses halaman login lagi
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Login Admin',
            'active' => 'login', // Tambahkan baris ini
        ];
        return view('auth/login', $data);
    }

    public function process()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/login')->withInput()->with('error', 'Username dan Password harus diisi!');
        }

        $user = $userModel->getUserByUsername($username);

        // Cek user dan password
        if ($user && password_verify($password, $user['password'])) {
            // Jika berhasil, buat session
            $session_data = [
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'nama_lengkap' => $user['nama_lengkap'],
                'role'      => $user['role'],
                'logged_in' => TRUE,
            ];
            session()->set($session_data);

            // Arahkan berdasarkan role
            if ($user['role'] == 'admin') {
                return redirect()->to('/admin/absensi');
            } else {
                return redirect()->to('/'); // Pegawai ke halaman utama
            }
        } else {
            // Jika gagal, kembali ke login dengan pesan error
            return redirect()->to('/login')->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda berhasil logout.');
    }
}