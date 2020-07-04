<?php
if (isset($_SESSION['username'])) {
  redirect('admin_c/list_mk');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Pengisian Konten Website JTI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/plugins/fontawesome-free/css/all.min.css"> <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/adminlte.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/parallax/parallax.js"></script>
</head>

<body class="hold-transition login-page">

  <ul id="scene">
    <li class="layer" data-depth=".1"><img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/parallax/img1.png"></li>
    <li class="layer" data-depth="1"><img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/parallax/img2.png"></li>
    <li class="layer" data-depth="-1"><img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/parallax/img3.png"></li>
    <li class="layer" data-depth="2"><img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/parallax/img4.png"></li>
    <li class="layer" data-depth="0.5"><img src="<?php echo base_url() ?>assetKu/newAssets/dist/img/parallax/img5.png"></li>
  </ul>
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Login Admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">

        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?= site_url() ?>login_c/cekLogin" method="post">
          <div class="input-group mb-3">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required data-validation-required-message="Please enter a message.">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required data-validation-required-message="Please enter a message.">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.social-auth-links -->



      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assetKu/newAssets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/adminlte.min.js"></script>

  <script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
  </script>
</body>

</html>