<?php

namespace App\Controllers;

use App\Models\AbsensiModel;

class Absen extends BaseController
{
    protected $absensiModel;

    public function __construct()
    {
        $this->absensiModel = new AbsensiModel();
    }

    public function scan()
    {
        $data = [
            'title' => 'Absensi QR Code',
            'active' => 'absen_qr', // Tambahkan baris ini
        ];
        // Menggunakan layout dari template Anda
        return view('absen/scan', $data);
    }

    public function proses()
    {
        // Amankan proses ini agar hanya bisa diakses via AJAX/Fetch
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(403)->setJSON(['sukses' => false, 'pesan' => 'Akses Ditolak.']);
        }
        
        $id_pegawai = session()->get('user_id');
        $qr_data = $this->request->getPost('qr_data');
        $waktu_sekarang = date('H:i:s');

        // Validasi QR Code
        $parts = explode(',', $qr_data);
        if (count($parts) !== 3) {
            return $this->response->setJSON(['sukses' => false, 'pesan' => 'QR Code tidak valid!']);
        }
        
        list($tipe_absen, $tanggal, $hash_qr) = $parts;
        // Kunci rahasia ini harus sama dengan yang di Controller Admin
        $secret_key = 'RahasiaKantorDesaMajuJaya'; 
        $expected_hash = hash('sha256', $tipe_absen . $tanggal . $secret_key);

        if ($hash_qr !== $expected_hash || $tanggal !== date('Y-m-d')) {
            return $this->response->setJSON(['sukses' => false, 'pesan' => 'QR Code tidak sah atau sudah kadaluarsa!']);
        }

        // Proses Absensi
        $kehadiran_hari_ini = $this->absensiModel->getCatatanPegawai($id_pegawai, $tanggal);

        if ($tipe_absen === 'ABSEN_MASUK') {
            if ($kehadiran_hari_ini) {
                return $this->response->setJSON(['sukses' => false, 'pesan' => 'Anda sudah melakukan absen masuk hari ini.']);
            }
            $this->absensiModel->save([
                'id_pegawai' => $id_pegawai,
                'tanggal' => $tanggal,
                'waktu_masuk' => $waktu_sekarang
            ]);
            return $this->response->setJSON(['sukses' => true, 'pesan' => 'Absen MASUK berhasil dicatat pada jam ' . $waktu_sekarang]);
        
        } elseif ($tipe_absen === 'ABSEN_PULANG') {
            if (!$kehadiran_hari_ini) {
                return $this->response->setJSON(['sukses' => false, 'pesan' => 'Anda harus absen masuk terlebih dahulu.']);
            }
            if (!empty($kehadiran_hari_ini['waktu_pulang'])) {
                return $this->response->setJSON(['sukses' => false, 'pesan' => 'Anda sudah melakukan absen pulang hari ini.']);
            }
            $this->absensiModel->update($kehadiran_hari_ini['id'], ['waktu_pulang' => $waktu_sekarang]);
            return $this->response->setJSON(['sukses' => true, 'pesan' => 'Absen PULANG berhasil dicatat pada jam ' . $waktu_sekarang]);
        }

        return $this->response->setJSON(['sukses' => false, 'pesan' => 'Tipe absensi tidak dikenal.']);
    }
}