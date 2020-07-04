<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assetKu/startbootstrap-blk/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/polinema logo.png">
  <title>
    Konten Website JTI Polinema
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <!-- <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/demo/demo.css" rel="stylesheet" /> -->
  <!-- new style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <!-- include summernote css/js -->
  <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet"> -->

</head>

<body class="background-theme-default index-page">
  <!-- <body class="index-page" style="background:#000 !important;"> -->
  <style>
    .note-editor.note-frame .note-editing-area .note-editable {
      padding: 10px;

      overflow: auto;
      color: #fff;
      word-wrap: break-word;
      background-color: #000
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent mt-4" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <div class="row" style="margin-left:0;">
          <a class=" nav-link button-app-orange d-none d-lg-block" href="<?= site_url() ?>/awal_c" target="_blank">
            <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/globe.png" width="25" class="img-icon"> Replika Web JTI
          </a>
          <a class=" nav-link-custom button-app-orange d-none d-lg-block" style="margin-left:20px;" href="<?= base_url() ?>loginmhs_c">
            <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/score.png" width="25" class="img-icon"> Halaman Utama
          </a>
        </div>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>

      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav header-opening">
          <li>
            <a class="button-app-pink d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()" data-toggle="modal" data-target="#modalLogin">
              <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/login.png" width="25" class="img-icon"> Login
            </a>
          </li>
          <li>
            <a class="button-app-orange d-none d-lg-block" href="<?= site_url() ?>loginmhs_c/register">
              <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/register.png" width="25" class="img-icon"> Register
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->