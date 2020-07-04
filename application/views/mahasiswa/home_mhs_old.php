<div class="section section-tabs mt-5">
  <ul id="background-wrap">
    <li class="x1"><span class="cloud"></span></li>
    <li class="x2"><span class="cloud"></span></li>
    <li class="x3"><span class="cloud"></span></li>
    <li class="x4"><span class="cloud"></span></li>
    <li class="x5"><span class="cloud"></span></li>
  </ul>
  <div class="container">
    <div class="title">
      <h3 class="mb-3" id="myText">
        <?php echo $nim['nim_mhs']; ?>
      </h3>
      <a href="<?= site_url() ?>/loginmhs_c/logout" data-toggle="tooltip" data-original-title="Logout">
        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/logout.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 30px;  height: 30px;">
      </a>
    </div>
    <div class="row">
      <div class="col-md-10 ml-auto col-xl-6 mr-auto">
        <div class="mb-3">
          <h4>MY PROFIL </h4>
        </div>
        <!-- Nav tabs -->

        <div class="card">
          <div class="card-header">
            <center><img src="<?= base_url() ?>assetKu\img\polinema_logo.png" alt="Circle image" style="width: 150px;  height: 150px;"></center>
          </div>
          <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">
                <center>
                  <h2>
                    <?php foreach ($q as $row) : ?>
                      <div class="alert alert-info alert-with-icon">
                        <?php echo $row->nama_mhs; ?>
                      </div>
                    </h2>
                  </center>
                </div>
                <div class="tab-pane active" id="link1">
                  <center>

                    <h3> POIN SAYA SAAT INI </h3>
                    <?php
                    $tgl_sekarang = date("Y-m-d"); //tanggal sekarang
                    $tgl_mulai = "2020-03-25"; // tanggal launching aplikasi
                    $jangka_waktu = strtotime('+30 years', strtotime($tgl_mulai)); // jangka waktu + 365 hari
                    $tgl_exp = date("Y-m-d", $jangka_waktu);
                    //tanggal expired
                    if ((date("n") % 3) == 0) {
                      ?>
                      <span class="Apple-tab-span" style="white-space: pre;">Data sudah tidak berlaku </span>
                    <?php } else { ?>
                      <p id="demo"></p>

                      <span class="Apple-tab-span" style="white-space: pre;">Masih dalam jangka waktu </span>
                    <?php  }
                  ?>
                    <div class="alert alert-info alert-with-icon" id="poin_mhs">
                      <?php echo $row->poin_mhs; ?>
                    </div>
                  <?php endforeach ?>
                </center>
              </div>

              <div class="tab-pane active" id="link1">
                <center>
                  <h3>
                    BADGES</h3>
                  <?php
                  $akun = $this->session->userdata('nim');
                  $poin = $this->db->query("SELECT poin_total FROM mahasiswa WHERE nim_mhs=$akun")->result();

                  $badge = $this->db->query("SELECT id_bdg, nama_bdg, maxpoin_bdg FROM badges")->result();

                  if ($poin[0]->poin_total >= $badge[0]->maxpoin_bdg) {
                    echo "Congratulation for your Completed Star !"; ?>

                    <div class="alert alert-info alert-with-icon">
                      <center>
                        <?php echo "History Poin : ";
                        echo $poin[0]->poin_total;
                        echo "<br>"; ?>
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-gold.png" style=" height: 100px;">
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-silver.png" style="width: 100px;  height: 100px;">
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-bronze.png" style="width: 100px;  height: 100px;">
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
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-silver.png" style="width: 100px;  height: 100px;">
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-bronze.png" style="width: 100px;  height: 100px;">
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
                        <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/a-bronze.png" style="width: 100px;  height: 100px;">
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
      <div class="col-md-10 ml-auto col-xl-6 mr-auto">
        <div class="mb-3">
          <h4>PETUNJUK</h4>
        </div>
        <!-- Tabs with Background on Card -->
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                  Ketentuan Konten
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                  Poin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                  Penukaran Poin
                </a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link4">
                <p> Setiap mahasiswa yang bisa menambahkan konten yang diinginkan berdasarkan kategori yang telah disediakan. Konten yang diunggah oleh mahasiswa akan diseleksi admin untuk diunggah pada website resmi jurusan.
                  <br><br>
                  Beberapa ketentuan konten yang bisa diunggah oleh mahasiswa adalah sebagai berikut :
                  <br /><br />
                  1. Konten berkaitan dengan kegiatan Jurusan Teknologi Informasi Politeknik Negeri Malang
                  <br><br>
                  2. Judul konten tidak melebihi sepuluh kata
                  <br><br>
                  3. Format konten terdiri dari judul, kategori, ringkasan dan isi
                  <br><br>
                </p>
                <div class="card-footer">
                  <a href="<?= site_url() ?>/mhs_c/tambahKontenMhs" class="btn btn-info btn-round btn-lg">Tambah Konten Baru</a>
                </div>
              </div>
              <div class="tab-pane" id="link5">
                <p>
                  Poin akan didapatkan ketika mahasiswa berpartisipasi dalam pembuatan konten website. Selain itu poin akan bertambah ketika konten yang diunggah mahasiswa terpilih untuk diunggah pada website resmi Jurusan Teknologi Informasi.
                  <br><br>
                  Poin yang didapatkan mahasiswa akan menentukan urutan (rank) diantara mahasiswa yang telah mengunggah konten.
                  <br><br>
                  Terdapat tiga macam badges (lencana) yang akan didapatkan mahasiswa berdasarkan total keseluruhan poin yang pernah dimiliki mahasiswa
                  <br><br>
                  Setiap poin yang dikumpulkan oleh mahasiswa dari partisipasi pengisian konten akan bisa ditukarkan dengan kompensasi.

                </p>
              </div>
              <div class="tab-pane" id="link6">
                <p>
                  Poin yang berhasil dikumpulkan mahasiswa akan bisa ditukarkan dengan kompensasi.
                </p>
                <div class="card-footer">
                  <a href="<?= site_url() ?>/mhs_c/tukarPoin" class="btn btn-info btn-round btn-lg">Tukarkan Poin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Tabs on plain Card -->
      </div>
    </div>
  </div>
</div>
<!-- End Section Tabs -->