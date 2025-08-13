<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Desa Kersik'); ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <style>
        /* Mengganti font default Bootstrap dengan Poppins */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang mirip bg-gray-100 */
        }
        .btn-success {
            --bs-btn-bg: #16a34a; /* Warna hijau yang lebih segar */
            --bs-btn-border-color: #16a34a;
            --bs-btn-hover-bg: #15803d;
            --bs-btn-hover-border-color: #15803d;
        }
    </style>
</head>
<body>

    <?= $this->include('layout/header'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>