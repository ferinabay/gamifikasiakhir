<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/apple-icon.png">
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
  <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/demo/demo.css" rel="stylesheet" />
  <!-- new style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/ruleTimeline.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/treebees.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <!-- navbar baru -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'> -->
  <!-- include summernote css/js -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
  <!-- ckeditor -->
  <script src="<?= base_url() ?>assetKu/newAssets/plugins/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url() ?>assetKu/newAssets/dist/js/ckeditor/sample.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assetKu/newAssets/plugins/ckeditor/samples/css/samples.css">
  <link rel="stylesheet" href="<?= base_url() ?>assetKu/newAssets/plugins/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

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

    .badge {
      display: inline-block;
      padding: .25em .4em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .navbar-badge {
      font-size: .6rem;
      font-weight: 300;
      padding: 2px 4px;
      position: absolute;
      right: 5px;
      top: 9px;
    }
  </style>

  <!-- Navbar -->
  <!-- <div id="topheader">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?= base_url(); ?>" class="button-app-pink">
                <span>
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/home.png" width="25" class="img-icon"> Home
                </span>
              </a>
            </li>
            <li>
              <a href="<?= base_url() ?>mhs_c/lihatRule" class="button-app-pink">
                <span>
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/document.png" width="25" class="img-icon"> Rule
                </span>
              </a>
            </li>
            <li>
              <a href="<?= base_url() ?>awal_c" class="button-app-pink">
                <span>
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/globe.png" width="25" class="img-icon"> Replika Web JTI
                </span>
              </a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle nav-link button-app-pink" data-toggle="dropdown">
                <span>
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/content.png" width="25" class="img-icon"> Konten
                </span>
              </a>
              <div class="dropdown-menu dropdown-with-icons">

                <a href="<?= base_url() ?>mhs_c/tambahKontenMhs" class="dropdown-item" style="font-family: verdana; color: #000;"> Tambah Konten Baru
                </a>
                <a href="<?= base_url() ?>mhs_c/list_konten_df" class="dropdown-item" style="font-family: verdana; color: #000;"> Daftar Konten Saya
                </a>

              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle nav-link button-app-pink" data-toggle="dropdown">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/cost.png" width="25" class="img-icon"> Poin
                </span>
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="<?= base_url() ?>mhs_c/tukarPoin" class="dropdown-item" style="font-family: verdana; color: #000;"> Penukaran Poin
                </a>
                <a href="<?= base_url() ?>mhs_c/tukarPoinTema" class="dropdown-item" style="font-family: verdana; color: #000;"> Tukar Poin dgn Tema
                </a>
                <a href="<?= base_url() ?>mhs_c/tukarPoinPP" class="dropdown-item" style="font-family: verdana; color: #000;"> Tukar Poin dgn Foto Profil
                </a>
                <a href="<?= base_url() ?>mhs_c/useKompen" class="dropdown-item" style="font-family: verdana; color: #000;"> Daftar Penggunaan Poin
                </a>
                <a href="<?= base_url() ?>mhs_c/kirimPoin" class="dropdown-item" style="font-family: verdana; color: #000;"> Kirim Poin
                </a>
              </div>
            </li>
            <li>
              <a href="<?= base_url() ?>mhs_c/tampilNotifikasi" class="button-app-pink">
                <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/bell.png" width="25" class="img-icon">
              </a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle nav-link button-app-pink" data-toggle="dropdown">
                <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/gear.png" width="25" class="img-icon"> Profil
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="<?= base_url() ?>mhs_c/updateProfil/" class="dropdown-item" style="font-family: verdana; color: #000;"> Edit Profil
                </a>
                <a href="<?= base_url() ?>mhs_c/leaderboard" class="dropdown-item" style="font-family: verdana; color: #000;"> Leaderboard
                </a>
                </a>
                <a href="<?= base_url() ?>loginmhs_c/logout" class="dropdown-item" style="font-family: verdana; color: #000;"> <b>Logout </b>
                </a>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div> -->
  <nav class="navbar navbar-expand-lg navbar-transparent mt-4" color-on-scroll="100">
    <div class="container">
      <div class="row">
        <div class="navbar-translate">
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation ">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a>

                </a>
              </div>
              <div class="col-6 collapse-close text-right">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="<?= base_url(); ?>">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/home.png" width="25" class="img-icon"> Home
                </span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="<?= base_url() ?>mhs_c/lihatRule">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/document.png" width="25" class="img-icon"> Rule
                </span>
              </a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="<?= base_url() ?>awal_c">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/globe.png" width="25" class="img-icon"> Replika Web JTI
                </span>
              </a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/content.png" width="25" class="img-icon"> Konten
                </span>
              </a>
              <div class="dropdown-menu dropdown-with-icons">

                <a href="<?= base_url() ?>mhs_c/tambahKontenMhs" class="dropdown-item" style="font-family: verdana; color: #000;"> Tambah Konten Baru
                </a>
                <a href="<?= base_url() ?>mhs_c/list_konten_df" class="dropdown-item" style="font-family: verdana; color: #000;"> Daftar Konten Saya
                </a>

              </div>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/cost.png" width="25" class="img-icon"> Poin
                </span>
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="<?= base_url() ?>mhs_c/tukarPoin" class="dropdown-item" style="font-family: verdana; color: #000;"> Tukar Poin dgn Kompen
                </a>
                <a href="<?= base_url() ?>mhs_c/tukarPoinTema" class="dropdown-item" style="font-family: verdana; color: #000;"> Tukar Poin dgn Tema
                </a>
                <a href="<?= base_url() ?>mhs_c/tukarPoinPP" class="dropdown-item" style="font-family: verdana; color: #000;"> Tukar Poin dgn Foto Profil
                </a>
                <a href="<?= base_url() ?>mhs_c/useKompen" class="dropdown-item" style="font-family: verdana; color: #000;"> Daftar Penggunaan Poin
                </a>
                <a href="<?= base_url() ?>mhs_c/kirimPoin" class="dropdown-item" style="font-family: verdana; color: #000;"> Kirim Poin
                </a>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="<?= base_url() ?>mhs_c/tampilNotifikasi">
                <span class="button-app-pink">
                  <!-- <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/bell.png" width="25" class="img-icon"> -->
                  <!-- <a class="nav-link"> -->
                  <!-- <i class="far fa-bell"></i> -->
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/bell1.png" width="25" class="img-icon">
                  <span class="badge badge-warning navbar-badge"><?php echo $count_notif; ?></span>
                  <!-- </a> -->
                </span>
              </a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="button-app-pink">
                  <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/gear.png" width="25" class="img-icon"> Profil
                </span>
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="<?= base_url() ?>mhs_c/updateProfil/" class="dropdown-item" style="font-family: verdana; color: #000;"> Edit Profil
                </a>
                <a href="<?= base_url() ?>mhs_c/leaderboard" class="dropdown-item" style="font-family: verdana; color: #000;"> Leaderboard
                </a>
                </a>
                <a href="<?= base_url() ?>loginmhs_c/logout" class="dropdown-item" style="font-family: verdana; color: #000;"> <b>Logout </b>
                </a>

              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- animate -->
      <ul id="background-wrap">
        <li class="x1"><span class="cloud"></span></li>
        <li class="x2"><span class="cloud"></span></li>
        <li class="x3"><span class="cloud"></span></li>
        <li class="x4"><span class="cloud"></span></li>
        <li class="x5"><span class="cloud"></span></li>
      </ul>
      <div class="background">
        <div class="flower roundpetal petal5 flower1">
          <div class="petal">
            <div class="petal">
              <div class="petal">
              </div>
            </div>
          </div>
        </div>
        <div class="flower roundpetal petal5 flower2 blueflower">
          <div class="petal">
            <div class="petal">
              <div class="petal">
              </div>
            </div>
          </div>
        </div>
        <div class="flower roundpetal petal5 flower3 yellowflower">
          <div class="petal">
            <div class="petal">
              <div class="petal">
              </div>
            </div>
          </div>
        </div>
        <div class="flower roundpetal petal5 flower4 purpleflower">
          <div class="petal">
            <div class="petal">
              <div class="petal">
              </div>
            </div>
          </div>
        </div>
        <div class="slope"></div>
        <div class="tree">
          <div class="leaf leaf1"></div>
          <div class="leaf leaf2"></div>


          <div class="branch left branch1">
            <div class="branch left branch-inner1">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="heart flower1 blueflower">
              </div>
            </div>
            <div class="branch left branch-inner2">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="tulip flower1 redflower">
                <div class="peak"></div>
              </div>
            </div>
            <div class="branch left branch-inner3">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
            </div>
            <div class="flower petal5 flower1 redflower">
              <div class="petal">
                <div class="petal">
                  <div class="petal">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="branch right branch2">
            <div class="branch left branch-inner1">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="flower petal5 flower1 blueflower">
                <div class="petal">
                  <div class="petal">
                    <div class="petal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="branch right branch-inner2">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="tulip flower1 greenflower">
                <div class="peak"></div>
              </div>
            </div>
            <div class="branch right branch-inner3">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="branch left branch-inner4">
                <div class="leaf leaf1"></div>
                <div class="flower petal5 flower1 yellowflower">
                  <div class="petal">
                    <div class="petal">
                      <div class="petal">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tulip flower1 purpleflower">
                <div class="peak"></div>
              </div>
            </div>
            <div class="flower petal5 roundpetal flower1">
              <div class="petal">
                <div class="petal">
                  <div class="petal">
                    <div class="petal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="branch left branch3">
            <div class="branch right branch-inner1">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="heart flower1">
              </div>
            </div>
            <div class="branch left branch-inner2">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="tulip flower1">
                <div class="peak"></div>
              </div>
            </div>
            <div class="leaf leaf1"></div>
            <div class="leaf leaf2"></div>
            <div class="flower roundpetal petal5 flower1 purpleflower">
              <div class="petal">
                <div class="petal">
                  <div class="petal">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="branch right branch4">
            <div class="branch left branch-inner1">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="flower petal5 flower1 yellowflower">
                <div class="petal">
                  <div class="petal">
                    <div class="petal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="branch right branch-inner2">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="tulip tulip1 flower1 purpleflower">
                <div class="peak"></div>
              </div>
            </div>
            <div class="flower petal5 roundpetal flower1">
              <div class="petal">
                <div class="petal">
                  <div class="petal">
                    <div class="petal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="branch left branch5">
            <div class="branch right branch-inner1">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="heart flower1">
              </div>
            </div>
            <div class="branch left branch-inner2">
              <div class="leaf leaf1"></div>
              <div class="leaf leaf2"></div>
              <div class="leaf leaf3"></div>
              <div class="tulip flower1 greenflower">
                <div class="peak"></div>
              </div>
            </div>
            <div class="flower roundpetal petal5 flower1 blueflower">
              <div class="petal">
                <div class="petal">
                  <div class="petal">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="canvas">

        <div class="grassbess"></div>

        <div class="bees">
          <div class="bees__1"></div>
          <div class="bees__2"></div>
          <div class="bees__3"></div>
        </div>

        <div class="flowersbees">
          <div class="flowers__pink">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
            <div class="flowers__dot1"></div>
            <div class="flowers__dot2"></div>
          </div>
          <div class="flowers__blue">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
          </div>
          <div class="flowers__orange">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
          </div>
          <div class="flowers__yellow">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
            <div class="flowers__dot1"></div>
            <div class="flowers__dot2"></div>
            <div class="flowers__dot3"></div>
          </div>
          <div class="flowers__yellow2">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
          </div>
          <div class="flowers__purple">
            <div class="flowers__stem"></div>
            <div class="flowers__petals"></div>
            <div class="flowers__dot1"></div>
            <div class="flowers__dot2"></div>
          </div>
        </div>

        <div class="treebees">
          <div class="tree__top"></div>
          <div class="tree__face">
            <div class="tree__leye"></div>
            <div class="tree__reye"></div>
            <div class="tree__mouth"></div>
          </div>

          <div class="tree__shade1"></div>
          <div class="tree__shade2"></div>
          <div class="tree__shade3"></div>
          <div class="tree__shade4"></div>
          <div class="tree__shade5"></div>

          <div class="tree__trunk1"></div>
          <div class="tree__trunk2"></div>
          <div class="tree__trunk3">
            <div class="tree__trunk3__leaf1"></div>
            <div class="tree__trunk3__leaf2"></div>
            <div class="tree__trunk3__leaf3"></div>
          </div>
        </div>

        <div class="bird">
          <div class="bird__head"></div>
          <div class="bird__body"></div>
          <div class="bird__tail"></div>
          <div class="bird__note1"></div>
          <div class="bird__note2"></div>
          <div class="bird__note3"></div>
        </div>
      </div>
      <!-- end animate -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {

          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;

          var pusher = new Pusher('aec1eb0f438bd4cddb76', {
            cluster: 'ap1',
            forceTLS: true
          });

          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
            if (data.message === 'success') {
              location.reload(true);
              // $session_data = $this->session->userdata('logged_in');
              // $n = $session_data['nim_mhs'];
              // $data['data'] = $this->mhs_m->getNotif($n);
            }
          });
        })
      </script>

    </div>
  </nav>

  <!-- End Navbar -->