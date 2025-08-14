<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="mt-2">Generator QR Code Absensi</h1>
            <p>Tanggal: <strong><?= date('d F Y'); ?></strong></p>
            <button class="btn btn-success m-2" onclick="tampilkanQR('masuk')">Tampilkan QR Absen MASUK</button>
            <button class="btn btn-danger m-2" onclick="tampilkanQR('pulang')">Tampilkan QR Absen PULANG</button>
            <a href="<?= base_url('/admin/absensi'); ?>" class="btn btn-secondary m-2">Kembali ke Dashboard</a>
            
            <div id="qr-wrapper" style="display: none;" class="mt-4">
                <h3 id="qr-title"></h3>
                <div id="qrcode" class="mx-auto" style="width:256px; height:256px; border: 1px solid #ddd; padding: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
    const qrWrapper = document.getElementById('qr-wrapper');
    const qrTitle = document.getElementById('qr-title');
    const qrcodeContainer = document.getElementById('qrcode');
    let qrcode = new QRCode(qrcodeContainer);

    function tampilkanQR(tipe) {
        qrcodeContainer.innerHTML = ''; // Kosongkan QR lama
        if (tipe === 'masuk') {
            qrTitle.innerText = 'QR Code untuk Absen MASUK';
            qrcode.makeCode("<?= $data_masuk; ?>");
        } else {
            qrTitle.innerText = 'QR Code untuk Absen PULANG';
            qrcode.makeCode("<?= $data_pulang; ?>");
        }
        qrWrapper.style.display = 'block';
    }
</script>
<?= $this->endSection(); ?>