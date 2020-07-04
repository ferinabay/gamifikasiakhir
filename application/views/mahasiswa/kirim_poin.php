<form action="<?= site_url() ?>/mhs_c/GiftPoint" method="POST" class="mt-5">
  <div class="section section-notifications" id="notifications">
    <div class="container">
      <!-- untuk alert after click button -->
      <?php if ($this->session->flashdata('flash-data')) :  ?>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong> <?= $this->session->flashdata('flash-data'); ?> </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>


      <!-- Input kirim Point -->
      <h3 class="text-center mb-5"><b>Kirim Poin</b> ke Akun Lain</h3>
      <!-- <h4>Nama Mahasiswa</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="nm_mhs_krm" class="form-control" name="nama_mhs" required data-validation-required-message="Please enter a message." placeholder="Nama Penerima" style="background-color: #FFF;color:#000;">
                  </div>
                   <small id="error-nm" class="text-danger m-0"><b>its your name</b></small>
                </div>
              </div>
            </div> -->
      <h4>NIM</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="datepicker-container">
            <div class="form-group">
              <input type="number" id="oriNim" value="<?= $nim['nim_mhs']; ?>" hidden>
              <input type="number" id="nimGift" class="form-control" name="nimGift" required data-validation-required-message="Please enter a message." placeholder="NIM Other" style="background-color: #FFF;color:#000;">
            </div>
            <small id="error-nim" class="text-danger m-0"><b>its your nim</b></small>
          </div>
        </div>
      </div>

      <div class="alert alert-primary alert-with-icon">
        <span>
          <b>Poin Anda Saat Ini : <?= $poin->poin_mhs; ?> </b><br>

          <b>Masukkan Jumlah Poin yang akan Dikirimkan : </b> </span>
        <br><br>(Anda hanya bisa memasukkan angka)
        <input type="number" name="gpoint" id="gpoint" min="1" max="<?= $poin->poin_mhs; ?>" class="form-control">

      </div>

      <div>
        <center>
          <button class="btn btn-primary btn-block" type="submit" id="kpoin" name="kpoin" <?php if ($poin->poin_mhs == '0') { ?> disabled <?php   } ?>>Kirim Poin</button>
        </center>

      </div>
    </div>
  </div>
</form>
<?php if (validation_errors()) {
  echo validation_errors();
} ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>