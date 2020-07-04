<?php
// var_dump($kategori);
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {
  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- UNTUK NULISI JUDUL TIAP DASHBOARD -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Tambah Konten Website</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <?php echo form_open_multipart('admin_c/create_konten_adm'); ?>

                <?php echo "<input readonly type=text name=id class=form-control id=id value='" . "adm" . $id . "'>"; ?>

                <div class="form-group">
                  <label><b>Username</b></label>
                  <input type="text" id="username" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" name="username" required data-validation-required-message="Please enter a message." readonly>
                </div>

                <div class="form-group">
                  <label><b>Tanggal</b></label>
                  <input type="date" class="form-control" name="tgl" required data-validation-required-message="Please enter a message.">
                  <!-- <input type="date" class="form-control"> -->
                </div>

                <div class="form-group">
                  <label><b>Kategori</b></label>

                  <select name="kategori" class="form-control" data-placeholder="Pilih Kategori" required data-validation-required-message="Please enter a message.">
                    <option></option>
                    <?php
                    $ini_ktg = $this->db->query("SELECT id_ktg, nama_ktg FROM kategori")->result();
                    if (!empty($ini_ktg)) {
                      foreach ($ini_ktg as $key) {
                        echo '<option value="' . $key->id_ktg . '" ' . set_select('kategori', $key->id_ktg) . '>' . $key->nama_ktg . '</option>';
                      }
                    }
                    // var_dump($ini_ktg);


                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label><b>Judul</b></label>
                  <input type="text" id="judul" class="form-control" placeholder="Judul" name="judul" required data-validation-required-message="Please enter a message.">
                </div>

                <div class="form-group">
                  <label><b>Isi</b></label><br>
                  <textarea id="editor" style="background-color: white;color:#000;" placeholder="Isi" name="isi" required data-validation-required-message="Please enter a message."></textarea>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg" id="tambahk" name="tambahk">Tambah Konten</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>

      <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_mk'); ?>">Cancel </a>
      </div>

    </div>
  </div>

  </div>
  </div>
  </div>
  </div>


  <?php
  $this->load->view('admin/footer_admin');
} ?>