<?php
// WAJIB ADA: Memberitahu CodeIgniter untuk "memakai" bingkai dari template.php
echo $this->extend('layout/template'); 

// WAJIB ADA: Menandakan AWAL dari konten yang akan dimasukkan ke template
echo $this->section('content'); 
?>

<div class="container my-5">
    
    <div class="text-center border-bottom pb-4 mb-5">
        <h1 class="fw-bold display-5">Profil Desa Kersik</h1>
        <p class="lead text-muted">Mengenal Lebih Dekat Sejarah, Visi, dan Misi Desa Kersik</p>
    </div>

    <div class="row g-5 align-items-center">
        
        <div class="col-lg-5">
            <img src="https://placehold.co/600x450/png?text=Kantor+Desa+Kersik" class="img-fluid rounded shadow-lg" alt="Kantor Desa Kersik">
        </div>

        <div class="col-lg-7">
            <h2 class="fw-bold text-success">Sejarah Singkat</h2>
            <p class="text-muted">Desa Kersik didirikan pada tahun 1920 oleh para pendahulu yang memiliki semangat gotong royong yang tinggi. Nama 'Kersik' diambil dari jenis tanah berpasir (kersik) yang banyak ditemukan di wilayah ini, melambangkan kesederhanaan dan kemampuan beradaptasi. Sejak awal berdirinya, desa ini terus berkembang pesat di bidang pertanian dan perkebunan.</p>
            
            <h2 class="fw-bold text-success mt-4">Visi & Misi</h2>
            
            <h5 class="fw-semibold mt-3">Visi</h5>
            <p class="text-muted fst-italic">"Terwujudnya Desa Kersik yang Maju, Mandiri, Sejahtera, dan Berakhlak Mulia melalui Pembangunan yang Berkelanjutan dan Partisipatif."</p>
            
            <h5 class="fw-semibold mt-3">Misi</h5>
            <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                <li class="d-flex"><i class="fa-solid fa-check-double text-success me-2 mt-1"></i><span>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan kesehatan.</span></li>
                <li class="d-flex"><i class="fa-solid fa-check-double text-success me-2 mt-1"></i><span>Mengembangkan potensi ekonomi lokal dan UMKM untuk kemandirian desa.</span></li>
                <li class="d-flex"><i class="fa-solid fa-check-double text-success me-2 mt-1"></i><span>Meningkatkan tata kelola pemerintahan desa yang bersih, transparan, dan akuntabel.</span></li>
                <li class="d-flex"><i class="fa-solid fa-check-double text-success me-2 mt-1"></i><span>Membangun infrastruktur yang merata dan ramah lingkungan.</span></li>
            </ul>
        </div>

    </div>

</div>

<?php
// WAJIB ADA: Menandakan AKHIR dari "jendela konten"
echo $this->endSection(); 
?>