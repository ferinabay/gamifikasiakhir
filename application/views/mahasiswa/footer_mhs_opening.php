<!--   Core JS Files   -->
<script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/core/jquery.min.js" type="text/javascript"></script>
<!-- <script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/core/jquery-3.4.1.min.js" type="text/javascript"></script> -->
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
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/timer.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

<!-- tree animate -->
<script src='https://daybrush.github.io/scenejs/release/latest/scene.js'></script>

<script src="<?= base_url() ?>assetKu/newAssets/dist/js/treeanimate.js"></script>
<!-- rule page -->
<script src="<?= base_url() ?>assetKu/newAssets/dist/js/rulepage.js"></script>
<!-- tree bess animate -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/treebees.js"></script>
<script src="<?php echo base_url() ?>assetKu/newAssets/dist/js/clockanimate.js"></script>

<!-- ckeditor -->
<script>
  initSample();
</script>
<!-- endckeditor -->

<script>
  $(document).ready(function() {
    document.getElementById("tambahktn").disabled = true;
  });

  function toggleCheckbox(element) {
    element.checked = element.checked;
    if (element.checked == false) {
      document.getElementById("tambahktn").disabled = true;
    } else {
      document.getElementById("tambahktn").disabled = false;
    }
  }
</script>


<script>
  $('#topheader .navbar-nav a').on('click', function() {
    $('#topheader .navbar-nav').find('li.active').removeClass('active');
    $(this).parent('li').addClass('active');
  });
</script>


<script>
  $(document).ready(function() {
    blackKit.initDatePicker();
    blackKit.initSliders();
    $('#summernote').summernote({});
    // @param {String} color
    $('#summernote').summernote('backColor', 'white');

    // @param {String} color
    $('#summernote').summernote('foreColor', 'black');
  });

  function scrollToDownload() {

    if ($('.section-download').length != 0) {
      $("html, body").animate({
        scrollTop: $('.section-download').offset().top
      }, 1000);
    }
  }
</script>

<!-- kirim poin -->
<script>
  $(document).ready(function() {
    $('#error-nim').hide();
    $('#error-nm').hide();
    $('#kpoin').show()

  });
  $('#nimGift').keyup(() => {
    if ($("#oriNim").val() != $("#nimGift").val()) {
      $('#error-nim').hide()
      $('#kpoin').show()
    } else {
      $('#error-nim').show()
      $('#kpoin').hide()
    }
  });
</script>
<!-- end kirim poin -->

<script>
  $(document).ready(function() {
    $('#g1').show();
    $('#g2').hide();

    $('#Epass').hide();
    document.getElementById("Bregis").disabled = false;

    $('#jk').on('change', function() {
      var a = $(this).val();
      if (a == "Laki-laki") {
        $('#g1').show();
        $('#g2').hide();

      } else {
        $('#g1').hide();
        $('#g2').show();

      }
    });
  });
  $('#Rretypepassword').keyup(() => {

    if ($("#Rpassword").val() != $("#Rretypepassword").val()) {
      $('#Epass').show()
      document.getElementById("Bregis").disabled = true;

    } else {
      $('#Epass').hide()
      document.getElementById("Bregis").disabled = false;
    }
  });
</script>
<script>
  $(document).ready(function() {
    $('#Esetpass').hide();
    document.getElementById("setPasbtn").disabled = false;
  });
  $('#setretypepassword').keyup(() => {
    if ($("#setpassword").val() != $("#setretypepassword").val()) {
      $('#Esetpass').show()
      document.getElementById("setPasbtn").disabled = true;

    } else {
      $('#Esetpass').hide()
      document.getElementById("setPasbtn").disabled = false;
    }
  });
</script>

<!-- poin hangus -->
<script>
  // Set the date we're counting down to
  var countDownDate = new Date("april 15, 2020 14:05:25").getTime();

  // Get today's date and time

  var exp = document.getElementById("exp_date").value;
  var t = new Date(exp);
  var m;

  // Update the count down every 1 second
  var x = setInterval(function() {
    var now = new Date();
    // Find the distance between now and the count down date
    //  now.setMonth(5);
    function cek() {

      if (now.getTime() < t.getTime()) {
        var distance = t.getTime() - now.getTime();
      } else {
        m = new Date(t.setMonth(t.getMonth() + 3));
        var distance = m.getTime() - now.getTime();
      }

      t.setFullYear(now.getFullYear());

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

      hasil(distance);
    }
    cek();
    // If the count down is over, write some text 
    function hasil(distance) {

      if (distance <= 1000) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        var rst = 0;
        var nim = <?= $nim['nim_mhs'] ?>;
        $.ajax({
          url: 'mhs_c/resetpoin',
          type: 'post',
          data: 'nim_mhs=' + nim + '&poin_mhs=' + rst,
          success: function(output) {
            alert('success, server says ' + output);
            window.location.reload();
          },
          error: function() {
            alert('something went wrong, rating failed');
          }
        });
      }
    }
  }, 1000);
</script>
<!-- end poin hangus -->

</body>

</html>