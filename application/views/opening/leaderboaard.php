<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assetKu/img/polinema_logo.png">
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
  <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/demo/demo.css" rel="stylesheet" />
  <!-- new style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
</head>

<body class="background-theme-default index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" data-placement="bottom" target="_blank">
          <span>
            <h2><b>Leaderboard</b></h2>
          </span>
        </a>
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
        <ul class="navbar-nav">
          <li>
            <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()" data-toggle="modal" data-target="#modalLogin">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()" data-toggle="modal" data-target="#modalRegister">
              Register
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="section section-notifications" id="notifications">
    <div class="container">
      <h3>
        <center><img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/polinema logo.png" alt="Circle image" style="width: 150px;  height: 150px;"></center>
      </h3>

      <?php
      $ini_rank = $this->db->query("SELECT nama_mhs, poin_mhs, status_mhs FROM `mahasiswa` WHERE status_mhs='Valid' ORDER BY `poin_mhs` DESC")->result();
      if (!empty($ini_rank)) { ?><center>
          <table style="width:60%">
            <tr>
              <th></th>
              <th></th>
            </tr>
            <?php
            $rank = 0;
            $last_score = false;
            $rows = 0;

            foreach ($ini_rank as $key) {
              $rows++;
              if ($last_score != $key->poin_mhs) {
                $last_score = $key->poin_mhs;
                $rank++;
                // $rank = $rows --> digunakan untuk menampilkan rank sesuai jumlah row,, jadi misal 1224
                // $rank = $rows;
              } ?>
              <tr>
                <td><?php
                    if ($rank == 1) { ?>

                    <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/trophy1.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 50px;  height: 50px;">
                  <?php
                } else if ($rank == 2) { ?>
                    <br>
                    <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/trophy2.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 50px;  height: 50px;">
                  <?php
                } else if ($rank == 3) { ?>
                    <br>
                    <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/trophy3.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 50px;  height: 50px;">
                  <?php
                } else {
                  echo "<b>";
                  echo $rank;
                  echo "</b>";
                }
                ?>

                </td>
                <td align="left">
                  <div class="alert alert-primary alert-with-icon">
                    <span>
                      <b><?php echo $key->nama_mhs; ?> </b></span>
                  </div>
                </td>
                <td>
                  <div class="alert alert-primary alert-with-icon">
                    <span>
                      <b><?php echo 'Poin : ';
                          echo  $key->poin_mhs; ?> </b></span>
                  </div>
                </td>

              <?php
            } ?>
            </tr>
          </table>
        </center><?php

              }
              ?>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/moment.min.js"></script>
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

<!-- Form Modal -->
<div class="modal fade modal-black" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove text-white"></i>
        </button>
        <div class="text-muted text-center ml-auto mr-auto">
          <h3 class="mb-0">SILAKAN MENDAFTARKAN AKUN ANDA</h3>
        </div>
      </div>
      <div class="modal-body">

        <form role="form" method="POST" action="<?= site_url() ?>/loginmhs_c/register">
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="NIM" type="text" name="nim">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Nama" type="text" name="nama">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Program Studi" type="text" name="prodi">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
          </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg">Daftar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--  End Modal -->

<!-- Form Modal -->
<div class="modal fade modal-black" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove text-white"></i>
        </button>
        <div class="text-muted text-center ml-auto mr-auto">
          <h3 class="mb-0">SILAKAN MENDAFTARKAN AKUN ANDA</h3>
        </div>
      </div>
      <div class="modal-body">

        <form role="form" method="POST" action="<?= site_url() ?>/loginmhs_c/ceklogin">
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="NIM" type="text" name="nim">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
          </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--  End Modal -->

</html>