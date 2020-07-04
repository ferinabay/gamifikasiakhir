<?php
// $this->load->view('mahasiswa/header_mhs');
$session_data = $this->session->userdata('logged_in');
$data = $session_data['nim_mhs'];
?>
<!-- <?php echo form_open_multipart('mhs_c/create_konten_mhs'); ?>  -->
<!-- <form action="" > -->
<div class="section section-notifications" id="notifications">

  <div class="container mt-5">
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

    <h3 class="text-center mb-5">Tukar Poin dengan<b>Foto Profil</b></h3>

    <div class="alert alert-warning col-3">
      <span>
        <input type="text" name="poinskr" class="form-control" value="<?= $mhs->poin_mhs; ?>" hidden>
        <b>Poin Anda Saat Ini :<?= $mhs->poin_mhs; ?>
        </b>
        <br>
    </div>

    <div class="row">
      <?php
      foreach ($pnk as $p) {
        if ($p->jenis == 1) { ?>
          <div class="col-6">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url() ?>assetKu/newAssets/dist/img/<?= $p->picture ?>" alt="Card image cap" style="width:140px;">
              <div class="card-body">
                <h5 class="card-title"><?= $p->nama_listP ?> - <b><?= $p->poin ?> Poin</b></h5>
                <p class="card-text"><?= $p->keterangan ?></p>
                <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>/<?= $p->jenis ?>" class="btn btn-primary ">Tukar Poin</a>
                <!-- <?php
                      if ($pk->nim_mhs == $data) {
                        if ($mhs->poin_mhs < $p->poin || $p->id_listP == $pk->id_listP) {  ?> -->
                    <!-- <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>" class="btn btn-primary disabled">Tukar Poin</a>
                                                                          <?php } else { ?> -->

                    <!-- <!-- <?php }
                        } ?> -->
              </div>
            </div>
          </div>
        <?php }
    } ?>

    </div>
  </div>
</div>
<!-- </form> -->

<!-- <?php echo form_close(); ?> -->
<?php $this->load->view('mahasiswa/footer_mhs'); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>