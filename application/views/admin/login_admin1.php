<?php
if(isset($_SESSION['username']))
{
  redirect('admin_c/list_mk');
}
?>
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
  <link href="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">

        <form action="<?=site_url()?>login_c/cekLogin" method="POST">

          <div class="form-group">
            <label >Username</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Enter username" required data-validation-required-message="Please enter a message.">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required data-validation-required-message="Please enter a message.">
          </div>
          <button class="btn btn-primary btn-block" type="suubmit" id="login" name="login">Login</button>

        </form>

      </div>
    </div>
  </div>

  <!--   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   -->


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Terima Kasih atas Penilaian Anda</h5>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="<?php echo site_url('admin_c/index') ?>">Ok</a>
          </div>
        </div>
      </div>
    </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assetKu/startbootstrap-agency-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
