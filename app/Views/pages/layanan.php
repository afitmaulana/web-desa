<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Layanan Desa</h2>
            <p>Selamat datang di halaman layanan Desa Kersik. Berikut adalah beberapa layanan yang kami sediakan untuk masyarakat:</p>
            <ul>
                <li>Administrasi Kependudukan (KTP, Kartu Keluarga)</li>
                <li>Layanan Surat Pengantar (SKCK, Surat Keterangan Usaha)</li>
                <li>Program Bantuan Sosial</li>
                <li>Pajak Bumi dan Bangunan (PBB)</li>
                <li>Dan layanan lainnya.</li>
            </ul>
            <p>Untuk informasi lebih detail, silakan datang langsung ke kantor desa pada jam kerja.</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>