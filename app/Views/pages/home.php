<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang di Website Desa Kersik</h1>
                <p class="lead">Pusat informasi dan layanan digital untuk masyarakat Desa Kersik. Kami berkomitmen untuk memberikan transparansi dan kemudahan akses bagi seluruh warga.</p>
                <hr class="my-4">
                <p>Jelajahi informasi profil desa kami atau lihat layanan yang tersedia untuk Anda.</p>
                <a class="btn btn-primary btn-lg" href="<?= base_url('/profil'); ?>" role="button">Lihat Profil</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>