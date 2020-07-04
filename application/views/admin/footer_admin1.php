    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Tiani Polinema, April 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" untuk meninggalkan laman ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo site_url('login_c/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/timer.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/chart.js/Chart.min.js"></script> -->
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/js/sb-admin-datatables.min.js"></script>
    <!-- <script src="<?= base_url() ?>assetKu/startbootstrap-sb-admin-gh-pages/js/sb-admin-charts.min.js"></script> -->

    <script>
      var date = document.getElementById("exp_date").value;
      var tgl = new Date(date);

      var x = setInterval(function() {
        var now = new Date();
        // Find the distance between now and the count down date
        //  now.setMonth(5);
        function cek() {

          if (now.getTime() < tgl.getTime()) {
            var distance = tgl.getTime() - now.getTime();
          }
          tgl.setFullYear(now.getFullYear());
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var jm = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var mn = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var sc = Math.floor((distance % (1000 * 60)) / 1000);

          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + jm + "h " +
            mn + "m " + sc + "s ";
        }
        cek();
      });
    </script>
    </div>
    </body>

    </html>