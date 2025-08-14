<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($active === 'home') ? 'active' : ''; ?>" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($active === 'profil') ? 'active' : ''; ?>" href="<?= base_url('/profil'); ?>">Profil</a>
                </li>
                <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active === 'absen_qr') ? 'active' : ''; ?>" href="<?= base_url('/absen/scan'); ?>">Absensi QR</a>
                    </li>

                    <?php if (session()->get('role') == 'admin') : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($active === 'pantau_absensi') ? 'active' : ''; ?>" href="<?= base_url('/admin/absensi'); ?>">Pantau Absensi</a>
                        </li>
                    <?php endif; ?>
                    
                    <li class="nav-item ms-lg-3">
                        <a class="nav-link btn btn-danger btn-sm text-white px-3" href="<?= base_url('/logout'); ?>">Logout</a>
                    </li>

                <?php else : ?>
                    <li class="nav-item ms-lg-3">
                        <a class="nav-link btn btn-light btn-sm text-primary px-3 <?= ($active === 'login') ? 'active' : ''; ?>" href="<?= base_url('/login'); ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Tinggi navbar & padding */
.navbar {
    padding-top: 0.8rem;
    padding-bottom: 0.8rem;
}

/* Ukuran font menu */
.navbar-nav .nav-link {
    font-size: 1.05rem;
    padding: 0.5rem 0.8rem;
    transition: 0.3s;
}

/* Hover effect */
.navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.15);
}

/* Menu aktif */
.navbar-nav .active {
    border-bottom: 2px solid #ffeb3b;
}
</style>
