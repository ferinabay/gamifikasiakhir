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
  <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url() ?>assetKu/startbootstrap-blk/assets/demo/demo.css" rel="stylesheet" />
  <!-- new style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/treebees.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="background-theme-default index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class=" nav-link button-app-orange d-none d-lg-block" href="<?= site_url() ?>awal_c" target="_blank">
          <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/globe.png" width="25" class="img-icon"> Replika Web JTI
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
            <a class="button-app-pink d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()" data-toggle="modal" data-target="#modalLogin">
              <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/login.png" width="25" class="img-icon"> Login
            </a>
          </li>
          <li>
            <a class="button-app-orange d-none d-lg-block" href="<?= site_url() ?>loginmhs_c/register">
              <img src="<?= base_url() ?>assetKu/newAssets/dist/img/icon/register.png" width="25" class="img-icon">Register
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="section section-notifications" id="notifications background-wrap">
    <ul id=" ">
      <li class="x1"><span class="cloud"></span></li>
      <li class="x2"><span class="cloud"></span></li>
      <li class="x3"><span class="cloud"></span></li>
      <li class="x4"><span class="cloud"></span></li>
      <li class="x5"><span class="cloud"></span></li>
    </ul>
    <div class="container">
      <div class="table-y table-wrapper-scroll-y my-custom-scrollbar">
        <?php
        $ini_rank = $this->db->query("SELECT nama_mhs, poin_mhs, status_mhs, img_profile FROM `mahasiswa` WHERE status_mhs='Valid' ORDER BY `poin_mhs` DESC")->result();
        if (!empty($ini_rank)) { ?><center>
            <table class=" table table-leaderboard table-bordered mb-0">

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
                  <td class="td-icon-leaderboard"><?php
                                                  if ($rank == 1) { ?>

                      <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy1.png" alt="Circle image" style="width: 50px;  height: 50px;">
                    <?php
                  } else if ($rank == 2) { ?>
                      <br>
                      <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy2.png" alt="Circle image" style="width: 50px;  height: 50px;">
                    <?php
                  } else if ($rank == 3) { ?>
                      <br>
                      <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy3.png" alt="Circle image" style="width: 50px;  height: 50px;">
                    <?php
                  } else {
                    echo "<b>";
                    echo $rank;
                    echo "</b>";
                  }
                  ?>
                  </td>
                  <td align="left">
                    <div class="td-icon-leaderboard">
                      <span>
                        <img src="<?= base_url()  ?>assetKu/uploads/<?php echo $key->img_profile; ?>" alt="Profile" width="200"></span>
                    </div>
                  </td>
                  <td align="left">
                    <div class="alert user-scoreboard ">
                      <span>
                        <b><?php echo $key->nama_mhs; ?> </b></span>
                    </div>
                  </td>
                  <td>
                    <div class="alert user-scoreboard ">
                      <span>
                        <b><?php echo 'Poin : ';
                            echo  $key->poin_mhs; ?> </b></span>
                    </div>
                  </td>

                <?php
              } ?>
              </tr>
            </table>
          </center>
        <?php } ?>
      </div>
    </div>
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
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() ?>assetKu/newAssets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- tree animate -->
  <script src='https://daybrush.github.io/scenejs/release/latest/scene.js'></script>
  <!-- tree bess animate -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
  <script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/treebees.js"></script>

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

  <script>
    var sceneTree = new Scene({
      ".tree": {
        0: {
          transform: "scale(0)"
        },
        1.5: {
          transform: "scale(1)"
        }
      },
      ".background>.flower": function(i) {
        return {
          0: {
            opacity: 0,
            transform: "translateY(0px) rotate(0deg)"
          },
          1: {
            opacity: 1
          },
          4: {
            opacity: 1
          },
          5: {
            opacity: 0,
            transform: "translateY(300px) rotate(360deg)"
          },
          options: {
            delay: 7 + i,
            iterationCount: "infinite"
          },
        };
      },
    }, {
      selector: true
    });


    var branchs = document.querySelectorAll(".tree .branch, .tree .leaf, .tree .flower1");
    var depths = [0, 0, 0];

    for (var i = 0; i < branchs.length; ++i) {
      var sceneItem = sceneTree.newItem("item" + i);
      var className = branchs[i].className;

      if (~className.indexOf("branch-inner")) {
        ++depths[1];
        depths[2] = 0;
      } else if (~className.indexOf("branch")) {
        ++depths[0];
        depths[1] = 0;
        depths[2] = 0;
      } else if (~className.indexOf("leaf") || ~className.indexOf("flower1")) {
        ++depths[2];
      }
      sceneItem.setElement(branchs[i]);
      sceneItem.setCSS(0, ["transform"]);

      var time = 1 + depths[0] * 0.5 + depths[1] * 0.5 + depths[2] * 0.5;
      sceneItem.set(time, "transform", "scale", 0);
      sceneItem.set(time + 1, "transform", "scale", 1);
    }

    sceneTree.playCSS();
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
              <input class="form-control" placeholder="NIM" type="text" name="nim" style="background-color: #FFF;color:#000;">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Nama" type="text" name="nama" style="background-color: #FFF;color:#000;">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <select name="prodi" class="form-control" id="status" style="background-color: #FFF;color:#000;">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
              </select>
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Password" type="password" name="password" style="background-color: #FFF;color:#000;">
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
          <h3 class="mb-0">LOGIN</h3>
        </div>
      </div>
      <div class="modal-body">

        <form role="form" method="POST" action="<?= site_url() ?>/loginmhs_c/ceklogin">
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="NIM" type="text" name="nim" style="background-color: #FFF;color:#000;">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <input class="form-control" placeholder="Password" type="password" name="password" style="background-color: #FFF;color:#000;">
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <p>Lupa password?</p><a href="<?= site_url() ?>loginmhs_c/klikresetpassword">Klik disini</a>
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