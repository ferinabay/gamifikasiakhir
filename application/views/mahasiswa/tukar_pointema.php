<?php
// $this->load->view('mahasiswa/header_mhs');
$session_data = $this->session->userdata('logged_in');
$data = $session_data['nim_mhs'];
$a = false;
$y = array();
$s = 0;
foreach ($pnk as $p) {
  if ($p->jenis == 0) {
    foreach ($tkr as $t) {
      if ($t->nim_mhs == $data && $t->kategori == "TEMA" && $t->id_listP == $p->id_listP && $t->status == 0) {
        $a = true;
        array_push($y, $p->id_listP);
        // var_dump($t->id_listP, $p->id_listP);
      } else if ($t->nim_mhs == $data && $t->id_listP == $p->id_listP && $t->status == 1) {
        $a = true;
        $s =$p->id_listP;
      }
    }
  }
}

?>
<!-- <?php echo form_open_multipart('mhs_c/create_konten_mhs'); ?>  -->
<!-- <form action="<?= site_url() ?>/mhs_c/updatePoin" method="POST"> -->
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

    <h3 class="text-center mb-5">Tukar Poin dengan<b>Tema Tampilan</b></h3>

    <div class="alert alert-warning col-3">
      <span>
        <b>Poin Anda Saat Ini :<?= $mhs->poin_mhs; ?> </b>
        <br>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?= base_url() ?>assetKu/newAssets/dist/img/theme/theme-enable.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Tema Default</h5>
            <p class="card-text">Tema awal yang diberikan kepada semua mahasiswa.</p>
            <?php
            if ($z != null) { ?>
              <a href="<?= base_url() ?>mhs_c/useTema/<?= $data ?>/0" class="btn btn-primary"><b>Active</b></a>
            <?php } else { ?>
              <a href="<?= base_url() ?>mhs_c/useTema/<?= $data ?>/0" class="btn btn-warning disabled"><b>Actived</b></a>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php $I = 2;
      $j = 0;
      foreach ($pnk as $p) {
        if ($p->jenis == 0) {
          ?>
          <div class="col-6">
            <div class="card" style="width: 18rem;">

              <img class="card-img-top" src="<?= base_url() ?>assetKu/newAssets/dist/img/theme/theme-enable.png" alt="Card image cap">

              <div class="card-body">
                <h5 class="card-title">Tema <?= $I; ?> - <b><?= $p->poin; ?> POIN</b></h5>
                <p class="card-text"><?= $p->keterangan; ?></p>
                <?php if ($mhs->poin_mhs < $p->poin) {
                  if ($p->id_listP == $y[$j] && $a == true) { ?>
                    <a href="<?= base_url() ?>mhs_c/useTema/<?= $data ?>/<?= $p->id_listP ?>" class="btn btn-warning">Use Tema </a>
                  <?php $j++; } elseif ($p->id_listP == $s && $a == true) { ?>
                    <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>/<?= $p->jenis ?>" class="btn btn-primary disabled">Actived</a>
                  <?php } else { ?>
                    <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>/<?= $p->jenis ?>" class="btn btn-primary disabled">Tukar Poin</a>
                  <?php }
                } else {
                  if ($p->id_listP == $y[$j] && $a == true) { ?>
                    <a href="<?= base_url() ?>mhs_c/useTema/<?= $data ?>/<?= $p->id_listP ?>" class="btn btn-warning">Use Tema </a>
                  <?php $j++; } elseif ($p->id_listP == $s && $a == true) {  ?>
                    <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>/<?= $p->jenis ?>" class="btn btn-primary disabled">Actived</a>
                  <?php } else { ?>
                    <a href="<?= base_url() ?>mhs_c/tukarTema/<?= $p->poin ?>/<?= $p->id_listP ?>/<?= $p->jenis ?>" class="btn btn-primary ">Tukar Poin</a>
                <?php }
                } ?>
              </div>
            </div>
          </div>
      <?php $I++; 
        }
      } ?>

    </div>
  </div>

</div>
<!-- </form> -->

<!-- <?php echo form_close(); ?> -->
<?php $this->load->view('mahasiswa/footer_mhs'); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>