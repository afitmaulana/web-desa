<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title); ?></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>AdminLTE 3 | <?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <style>
.navbar-nav .nav-link {
    transition: 0.3s;
}

.navbar-nav .nav-link:hover {
    color: #ffeb3b !important; /* warna kuning saat hover */
}

.navbar-nav .active {
    border-bottom: 2px solid #ffeb3b;
}
</style>

</head>

<body>

    <?= $this->include('layout/header'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0rPoBfU2r1T/fYs4HwpK+E8DbkGaaPePz9DrvPcwq+PcCbVYdkzQkpB2R" crossorigin="anonymous"></script>
</body>

</html>