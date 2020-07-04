<div class="section section-tabs mt-5 section-padding">
  <div class="container">
    <div class="title">
      <h3 class="text-center mb-5">Detail <b>Konten Anda</b></h3>
    </div>
    <div>
      <div id="inputs">

        <?php
        foreach ($konten_mhs1 as $key) {

          ?>

          <h5>NIM </h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $this->session->userdata('nim'); ?></b></h5>
          </div>
          <h5>Nama </h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $key['nama_mhs']; ?></b></h5>
          </div>
          <h5>Tanggal </h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $key['tgl_mk']; ?></b></h5>
          </div>
          <h5>Kategori </h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $key['nama_ktg']; ?></b></h5>
          </div>

          <h5>Ringkasan </h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $key['ringkasan_mk']; ?></b></h5>
          </div>
          <h5>Isi</h5>
          <div class="form-input-custom">
            <h5 style="color: #000;"><b> <?php echo $key['isi_mk']; ?></b></h5>
          </div>

        <?php
      }
      ?>


      </div>
    </div>
  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>