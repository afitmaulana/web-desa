<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col text-center">
            <h2>Produk Unggulan Desa Kersik</h2>
            <p>Temukan produk-produk asli hasil karya warga Desa Kersik.</p>
        </div>
    </div>

    <div class="row">
        <?php foreach ($produk_list as $p) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?= base_url('img/' . esc($p['gambar'])); ?>" class="card-img-top" alt="<?= esc($p['nama']); ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($p['nama']); ?></h5>
                        <p class="card-text"><?= esc($p['deskripsi']); ?></p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>