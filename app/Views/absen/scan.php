<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm mt-4">
                <div class="card-header text-center">
                    <h3>Absensi Kehadiran</h3>
                </div>
                <div class="card-body text-center">
                    <p>Arahkan kamera ke QR Code yang disediakan.</p>
                    <div id="qr-reader" style="width:100%; max-width:400px; margin:auto; border: 1px solid #ddd;"></div>
                    <div id="hasil-scan" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    const hasilContainer = document.getElementById('hasil-scan');
    
    function onScanSuccess(decodedText, decodedResult) {
        // Hentikan kamera setelah berhasil scan
        html5QrcodeScanner.clear();
        hasilContainer.innerHTML = `<div class="alert alert-warning">Memproses...</div>`;
        
        let formData = new FormData();
        formData.append('qr_data', decodedText);
        // Tambahkan CSRF token untuk keamanan CI4
        formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

        fetch('<?= base_url('/absen/proses') ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            let alertClass = data.sukses ? 'alert-success' : 'alert-danger';
            hasilContainer.innerHTML = `<div class="alert ${alertClass}">${data.pesan}</div>`;
        });
    }

    var html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);
</script>
<?= $this->endSection(); ?>