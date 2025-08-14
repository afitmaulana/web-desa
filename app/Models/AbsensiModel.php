<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'catatan_kehadiran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pegawai', 'tanggal', 'waktu_masuk', 'waktu_pulang'];

    public function getKehadiranHariIni($tanggal)
    {
        // Query untuk join tabel users dan catatan_kehadiran
        return $this->db->table('users u')
            ->select('u.id, u.nama_lengkap, u.jabatan, ck.waktu_masuk, ck.waktu_pulang')
            ->join('catatan_kehadiran ck', 'u.id = ck.id_pegawai AND ck.tanggal = "' . $tanggal . '"', 'left')
            ->where('u.role', 'pegawai')
            ->orderBy('u.nama_lengkap', 'ASC')
            ->get()->getResultArray();
    }

    public function getCatatanPegawai($id_pegawai, $tanggal)
    {
        return $this->where([
            'id_pegawai' => $id_pegawai,
            'tanggal' => $tanggal
        ])->first();
    }
}