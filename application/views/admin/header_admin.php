<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Pengisian Konten Website JTI</title>
  <link rel="icon" type="image/png" href="<?=base_url()?>assetKu/img/polinema_logo.png">


  <!-- Bootstrap core CSS-->
  <link href="<?=base_url()?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?=base_url()?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assetKu/startbootstrap-sb-admin-gh-pages/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href=""> Admin Pengisian Konten Website JTI (<?php echo "Admin : "; echo $this->session->userdata('username');?>) </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-table"></i>
            <span>Daftar Konten</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo site_url('admin_c/list_mk') ?>">Konten Mahasiswa</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/list_wk') ?>">Konten Saya</a>
            </li>
          </ul>          
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components2">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-table"></i>
            <span>Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="<?php echo site_url('admin_c/list_kategori') ?>">Kategori</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/list_badges') ?>">Badges</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/list_poin_kompen') ?>">Poin Kompen</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/rekap_data') ?>">Jumlah Konten & Rating</a>
            </li>
          </ul>          
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components3">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
            <i class="fa fa-table"></i>
            <span>Pengguna</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents3">
            <li>
              <a href="<?php echo site_url('admin_c/list_mahasiswa') ?>">Mahasiswa</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/list_admin') ?>">Admin</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin_c/list_pakai_kompen') ?>">Penggunaa Poin</a>
            </li>
          </ul>          
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>