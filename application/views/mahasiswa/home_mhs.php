<div class="section section-tabs mt-5">

  <div class="container">
    <a href="<?= site_url() ?>/loginmhs_c/logout" data-toggle="tooltip" data-original-title="Logout">
      <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/logout.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 30px;  height: 30px;">
    </a>
    <div class="row">
      <div class="col-md-10 ml-auto col-xl-6 mr-auto">
        <!-- Nav tabs -->

        <div class="card card-profile">

          <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">
                <?php foreach ($q as $row) : ?>
                  <center>
                    <div class="name-profile">
                      <h2>Hai <b><?php echo $row->nama_mhs; ?></b></h2>
                    </div>
                  </center>
                  <div class="row bagian-detail">
                    <div class="col-5 foto-profile ">
                      <!-- <span class="tooltip-text">mendapatkan <?php echo $row->poin_mhs; ?> poin </span> -->
                      <img src="<?= base_url('assetKu/uploads/') . $row->img_profile; ?>" class=" img-profile-home float-right" alt="Profile">
                    </div>
                    <div class="col-7 poinmu">
                      <h5> Poinmu Saat Ini : </h5>
                      <h5><b><?php echo $row->poin_mhs; ?></b></h5>
                    </div>
                  </div>
                </div>
                <div class="aktif-poin tab-pane active" id="link1">
                  <center>
                    <h5>Masa Aktif Poinmu Tinggal :</h5>
                    <p id="demo"></p>
                    <input type="datetime" id="exp_date" name="exp_date" value="<?= $exp->date_exp; ?>" hidden>
                    <span class=" alert alert-info Apple-tab-span" style="white-space: pre;">Masih dalam jangka waktu </span>
                  <?php endforeach ?>
                </center>
              </div>

              <div class="tab-pane active badges-profile" id="link1">
                <center>
                  <h4>Badges mu</h4>
                  <?php
                  $akun = $this->session->userdata('nim');
                  $poin = $this->db->query("SELECT poin_total FROM mahasiswa WHERE nim_mhs=$akun")->result();

                  $badge = $this->db->query("SELECT id_bdg, nama_bdg, maxpoin_bdg FROM badges")->result();

                  if ($poin[0]->poin_total >= $badge[0]->maxpoin_bdg) {
                    echo "<p class=congrat>Congratulation for your Completed Star !</p>"; ?>

                    <div class=" alert-with-icon">
                      <center>
                        <?php echo "History Poin : ";
                        echo $poin[0]->poin_total;
                        echo "<br>"; ?>
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank1.png" style=" height: 100px;">
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank2.png" style="width: 100px;  height: 100px;">
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank3.png" style="width: 100px;  height: 100px;">
                      </center>
                    </div>

                  <?php
                } else if ($poin[0]->poin_total >= $badge[1]->maxpoin_bdg && $poin[0]->poin_total < $badge[0]->maxpoin_bdg) {
                  echo "Congratulation for your Silver Star, Let's get Gold Star !"; ?>

                    <div class="alert alert-info alert-with-icon">
                      <center>
                        <?php echo "History Poin : ";
                        echo $poin[0]->poin_total;
                        echo "<br>"; ?>
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank2.png" style="width: 100px;  height: 100px;">
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank3.png" style="width: 100px;  height: 100px;">
                      </center>
                    </div>

                  <?php
                } elseif ($poin[0]->poin_total >= $badge[2]->maxpoin_bdg && $poin[0]->poin_total < $badge[1]->maxpoin_bdg) {
                  echo "Congratulation for your Bronze Star, Let's get Silver Star !"; ?>
                    <div class="alert alert-info alert-with-icon">
                      <center>
                        <?php echo "History Poin : ";
                        echo $poin[0]->poin_total;
                        echo "<br>"; ?>
                        <img src="<?= base_url() ?>assetKu/newAssets/dist/img/rank3.png" style="width: 100px;  height: 100px;">
                      </center>
                    </div>

                  <?php
                } else {
                  echo "Collect your poin to get your star !";
                }


                ?>
              </div>
              <br><br>
              <!-- <div>
                      <CENTER><a href="<?= site_url() ?>/mhs_c/updateProfil/" class="btn btn-simple btn-primary btn-round">Edit Profil</a></CENTER>
                    </div>
                    <div>
                      <CENTER><a href="examples/landing-page.html" class="btn btn-simple btn-primary btn-round">Info Peringkat</a></CENTER>
                    </div>
                    <div>
                      <CENTER><a href="examples/landing-page.html" class="btn btn-simple btn-primary btn-round">Daftar Konten Saya</a></CENTER>
                    </div>
                    <div>
                      <CENTER><a href="<?= site_url() ?>/mhs_c/useKompen/" class="btn btn-simple btn-primary btn-round">Daftar Penggunaan Poin</a></CENTER>
                    </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- End Section Tabs -->