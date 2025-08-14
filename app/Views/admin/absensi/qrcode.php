<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="mt-2">Generator QR Code Absensi</h1>
            <p>Tanggal: <strong><?= date('d F Y'); ?></strong></p>
            <button class="btn btn-success m-2" id="btn-masuk">Tampilkan QR Absen MASUK</button>
            <button class="btn btn-danger m-2" id="btn-pulang">Tampilkan QR Absen PULANG</button>
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
<!-- Gunakan CDN yang valid -->
 <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.1/build/qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const qrWrapper = document.getElementById('qr-wrapper');
        const qrTitle = document.getElementById('qr-title');
        const qrcodeContainer = document.getElementById('qrcode');
        let qrcode = new QRCode(qrcodeContainer, {
            width: 256,
            height: 256
        });

        // Event listeners dengan penanganan error
        document.getElementById('btn-masuk').addEventListener('click', function() {
            generateQR('Masuk', "<?= $data_masuk ?? '' ?>");
        });

        document.getElementById('btn-pulang').addEventListener('click', function() {
            generateQR('Pulang', "<?= $data_pulang ?? '' ?>");
        });

        function generateQR(title, data) {
            if (!data) {
                alert('Data QR tidak valid!');
                console.error('Data QR kosong');
                return;
            }

            try {
                qrcodeContainer.innerHTML = '';
                qrTitle.innerText = `QR Code untuk Absen ${title}`;
                qrcode.makeCode(data);
                qrWrapper.style.display = 'block';
            } catch (error) {
                console.error('Gagal generate QR:', error);
                alert('Terjadi kesalahan saat membuat QR Code');
            }
        }
    });
</script>
<?= $this->endSection(); ?>