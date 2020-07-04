<footer class="main-footer no-margin-left">
  <strong>Copyright &copy; Pengisian Konten Berbasis Gamifikasi <a href=#">Admin Page</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Tahun</b> 2020
  </div>
</footer>

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

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="<?= base_url()  ?>assetKu/uploads/<?php echo $mhs_ktm; ?>" class="imagepreview" style="width: 100%;">

      </div>
    </div>
  </div>
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/timer.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assetKu/newAssets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script>
  $(function() {
    $('.pop').on('click', function() {
      $('.imagepreview').attr('src', $(this).find('img').attr('src'));
      $('#imagemodal').modal('show');
    });
  });
</script>

<!-- ckeditor -->
<script>
  initSample();
</script>
<!-- endckeditor -->

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
      }else {
        m = new Date(tgl.setMonth(tgl.getMonth() + 3));
        var date_exp = m.getUTCFullYear() + "-" + twoDigits(1 + m.getUTCMonth()) + "-" + twoDigits(m.getUTCDate());
        hasil(date_exp);
        var distance = m.getTime() - now.getTime();
        var date_exp = m.getUTCFullYear() + "-" + twoDigits(1 + m.getUTCMonth()) + "-" + twoDigits(m.getUTCDate());
        $('[name="nama"]').val(data.nama_customer);
        hasil(date_exp);
        
      }
      tgl.setFullYear(now.getFullYear());
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var jm = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var mn = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var sc = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + " days " + jm + "h " +
        mn + "m " + sc + "s ";
    }
    cek();
  function twoDigits(d) {
      if (0 <= d && d < 10) return "0" + d.toString();
      if (-10 < d && d < 0) return "-0" + (-1 * d).toString();
      return d.toString();
    }

    function hasil(m) {
      $.ajax({
        url: '<?php echo site_url('admin_c/updateDateExpp')?>',
        type: 'post',
        dataType: "JSON",
        data: {
          date_exp: m
        },
        success: function(data) {
           window.location.reload(1);
          alert('success, server says ' + data);
         
        },
        error: function() {
          alert(m);
        }
      });
    }
  }, 1000);
</script>
</body>

</html>