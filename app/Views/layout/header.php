<header class="sticky-top shadow-sm">
    <div class="bg-dark text-white" style="font-size: 0.8rem;">
        <div class="container-xxl d-flex justify-content-between align-items-center py-1">
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="text-white text-decoration-none"><i class="fa-solid fa-phone me-1"></i> (021) 1234567</a>
                <a href="#" class="text-white text-decoration-none"><i class="fa-solid fa-envelope me-1"></i> info@desakersik.id</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-xxl">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Desa Kersik" style="height: 40px;">
                <div>
                    <p class="fw-bold text-dark mb-0 lh-1">PEMERINTAH DESA</p>
                    <p class="fw-semibold text-secondary mb-0 lh-1" style="font-size: 0.9rem;">KERSIK</p>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pemerintahan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Informasi Publik</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>