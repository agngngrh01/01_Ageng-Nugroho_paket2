<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>

  <!-- Custom styles for this template-->
  <link href="<?= base_url('asset/sbadmin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('asset/sbadmin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/datatables/bootstrap4.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/datatables/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/swall/dist/sweetalert2.min.css'); ?>">


</head>

<body id="page-top">
  <!-- Navbar -->
<nav  class="navbar navbar-expand-lg navbar-dark bg-success">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="<?= base_url('asset/img/peng.jpg')?>"
          height="50"
          width="180"
          alt="Aplikasi Pengaduan Masyarakat"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item ">
<?php if ($this->session->userdata('nik')): ?>
  <a class="nav-link" href="<?= base_url('user'); ?>">
  <?php elseif ($this->session->userdata('level')): ?>
    <a class="nav-link" href="<?= base_url('admin'); ?>">
    <?php endif; ?>
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

 <!-- Heading -->
 <div class="sidebar-heading">
              <?php if ($this->session->userdata('level')): ?>
              <?php elseif ($this->session->userdata('nik')): ?>
              <?php endif; ?>
            </div>

            <?php if ($this->session->userdata('level')): ?>

<!-- Nav Item - Pages Collapse Menu -->
<?php if ($this->session->userdata('level') == 1): ?>
  <div class="nav-item dropdown ">
  <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-fw fa-database"></i>
    Management
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a class="dropdown-item" href="<?= base_url('master/masyarakat'); ?>">Data Masyarakat</a>
  <a class="dropdown-item" href="<?= base_url('master/petugas'); ?>">Data Petugas</a>
  </div>
</div>
 
<li class="nav-item">
                  <a class="nav-link" href="<?= base_url('generate '); ?>">
                    <i class="fas fa-fw fa-download"></i>
                    <span>Laporan</span></a>
                </li>

              <?php endif; ?>

              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pengaduan '); ?>">
                  <i class="fas fa-fw fa-file"></i>
                  <span>Data Pengaduan</span></a>
              </li>

              <?php elseif ($this->session->userdata('nik')): ?>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('laporan'); ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Buat Pengaduan</span></a>
</li>
<?php endif; ?>

<li class="nav-item">
<?php if ($this->session->userdata('level')): ?>
  <a class="nav-link" href="<?= base_url('admin/edit'); ?>">
  <?php elseif ($this->session->userdata('nik')): ?>
    <a class="nav-link" href="<?= base_url('user/edit'); ?>">
    <?php endif; ?>
    <i class="fas fa-fw fa-user-edit"></i>
    <span>Edit Profile</span></a>
</li>
    <div>
  </div>
</div>
<hr>
<li class="nav-link dropdown no-arrow mx-1">
<?php if ($this->session->userdata('level')): ?>
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color:#F6FBFC" class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-primary badge-counter">
                <?= $this->db->get_where('tbl_pengaduan', ['status_notif' => 0])->num_rows(); ?></span>
              </a>               
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown" >
                <h6 class="dropdown-header" style="background-color:blue;">
                  notifikasi
                </h6>
                <?php foreach ($notif as $n) { ?>
                  <?php if ($n->status_notif == 0): ?>
                    <a style="padding-right:40px;" id="status-btn" class="dropdown-item d-flex align-items-center"
                      href="<?= base_url('pengaduan/status_notif/') . md5($n->id_pengaduan); ?>">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <img src="<?= base_url('asset/upload/') . $n->foto; ?>" alt="" width="49" height="40"
                            class="d-inline-block align-text-top">

                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">
                          <?= $n->tgl_pengaduan; ?>
                        </div>
                        <span class="font-weight-bold">
                          <?= $n->isi_laporan; ?>
                        </span>

                      </div>
                    </a>
                  <?php endif; ?>
                <?php }
                ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('pengaduan') ?>">tampilkan
                  semua aduan</a>
              </div>
            </li>
          <?php endif; ?>
<li class="nav-link dropdown no-arrow mx-1">
<?php if ($this->session->userdata('nik')): ?>
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color:#F6FBFC" class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-primary badge-counter">
                  <?= $ntf_jumlah ?>
                </span>
              </a>               
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown" >
                <h6 class="dropdown-header" style="background-color:blue;">
                  notifikasi
                </h6>
                <?php foreach ($ntf as $t) { ?>
                  <?php if ($t->notif_status == 0): ?>
                    <a style="padding-right:40px;" id="status-btn" class="dropdown-item d-flex align-items-center"
                      href="<?= base_url('laporan/notif_status/') . ($t->id_tanggapan); ?>">
                      <div class="mr-3">
                      </div>
                      <div>
                        <div class="small text-gray-500">
                          <?= $t->tgl_tanggapan; ?>
                        </div>
                        <span class="font-weight-bold">
                          <?= $t->tanggapan; ?>
                        </span>

                      </div>
                    </a>
                  <?php endif; ?>
                <?php }
                ?>
              </div>
            </li>
          <?php endif; ?>
   <!-- end of notification -->
  <div class="topbar-divider d-none d-sm-block"></div>

   <!-- Nav Item - User Information -->
      <div class="nav-item dropdown arrow toggle">
            <a style="color:#F6FBFC" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span style="color:#F6FBFC" class="mr-2 d-none d-lg-inline small"><?= $this->session->userdata('username'); ?></span>
              <img
            src="<?= base_url('asset/img/user.png');?>"
            class="rounded-circle"
            height="35"
            alt=""
            loading="lazy"
          />
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <?php if ($this->session->userdata('nik')): ?>
                <a class="dropdown-item" href="<?= base_url('user'); ?>">
                <?php elseif ($this->session->userdata('level')): ?>
                  <a class="dropdown-item" href="<?= base_url('admin'); ?>">
                  <?php endif; ?>
                <?php if ($this->session->userdata('level')): ?>
                  <a class="dropdown-item" href="<?= base_url('admin/edit'); ?>">
                  <?php elseif ($this->session->userdata('nik')): ?>
                    <a class="dropdown-item" href="<?= base_url('user/edit'); ?>">
                    <?php endif; ?>
                    <i class="fas fa fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Edit Profile</span></a>

                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item logout" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
                    data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
            </div>
          </li>
    </div>
  <!-- Container wrapper -->
</nav>

<script>
function myFunction() {
    var x = document.getElementById("Btn");
    x.disabled = true;
}
</script>
<!-- Navbar -->