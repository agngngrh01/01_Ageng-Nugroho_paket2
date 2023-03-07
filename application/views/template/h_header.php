<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aplikasi Pengaduan Masyarakat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  <style>
    /* Start https://www.cursors-4u.com */
    * {
      cursor: url(https://cur.cursors-4u.net/cursors/cur-10/cur970.cur), auto !important;
    }

    /* End https://www.cursors-4u.com */
  </style>
</head>

<body>

  <?php $page = basename($_SERVER['PHP_SELF']); ?>

  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a style="margin-left: -100px;" class="navbar-brand" href="<?= base_url('index.php/welcome/'); ?>index">
    <span>Pengaduan Masyarakat</span></a>
      <br>
      <ul  class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?= base_url('welcome/'); ?>about" class="nav-link"></a></li>
               </ul>
      <div class="collapse navbar-collapse">
        <ul   class="navbar-nav ml-auto">
          <button class="btn bg-gradient-success"><a href="<?= base_url('auth'); ?>">LOGIN</a></button>          
          <ul  style="margin-right: -100px; ">
            <button class="btn bg-gradient-success"><a href="<?= base_url('auth/register'); ?>">DAFTAR</a></button>
          </ul>
        </ul>
      </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->