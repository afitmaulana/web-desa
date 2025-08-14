<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika tidak ada session 'logged_in', paksa ke halaman login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Jika filter membutuhkan role tertentu (misal: 'admin')
        if ($arguments) {
            $userRole = session()->get('role');
            if (!in_array($userRole, $arguments)) {
                // Jika role tidak sesuai, bisa redirect ke halaman utama atau tampilkan error
                return redirect()->to('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman tersebut.');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah request
    }
}