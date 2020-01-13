<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('user'); ?>">
                <img src="<?= base_url('assets/images/Logo_UMB_Putih_kecil.png');?>" width="40" height="40" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active-toggle">
                        <a class="nav-link active" href="<?= base_url(); ?>">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url(); ?>user/registrasi">Registrasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="<?= base_url(); ?>user/daftar_kelompok" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Daftar Kelompok
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>user/daftar_kelompok">Kelompok 1</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/daftar_kelompok">Kelompok 2</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/daftar_kelompok">Kelompok 3</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/daftar_kelompok">Kelompok 4</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/daftar_kelompok">Kelompok 5</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-outline-light" href="<?= base_url(); ?>admin/login" role="button">Login</a>
        </div>
    </nav>