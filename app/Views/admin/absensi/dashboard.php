<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Dashboard Absensi Hari Ini</h1>
            <p>Tanggal: <strong><?= date('d F Y'); ?></strong></p>
            <a href="<?= base_url('/admin/absensi/qrcode'); ?>" class="btn btn-primary mb-3">Buat QR Code Absensi</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Waktu Masuk</th>
                            <th scope="col">Waktu Pulang</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kehadiran as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= htmlspecialchars($k['nama_lengkap']); ?></td>
                                <td><?= htmlspecialchars($k['jabatan']); ?></td>
                                <td><?= $k['waktu_masuk'] ?? '--:--:--'; ?></td>
                                <td><?= $k['waktu_pulang'] ?? '--:--:--'; ?></td>
                                <td>
                                    <?php
                                    $status_text = 'Belum Absen';
                                    $status_class = 'badge bg-danger';
                                    if ($k['waktu_masuk'] && !$k['waktu_pulang']) {
                                        $status_text = 'Hadir';
                                        $status_class = 'badge bg-success';
                                    } elseif ($k['waktu_pulang']) {
                                        $status_text = 'Sudah Pulang';
                                        $status_class = 'badge bg-secondary';
                                    }
                                    ?>
                                    <span class="<?= $status_class; ?>"><?= $status_text; ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>