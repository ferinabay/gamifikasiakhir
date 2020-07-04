<?php
// var_dump($inik); 
echo form_open_multipart('admin_c/updateKontenAdm/' . $this->uri->segment(3));

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
        <li class="breadcrumb-item active">Edit Konten Admin</li>
      </ol>

      <?php
      ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <div class="card-body">
              <form action="<?= site_url() ?>/admin_c/updateKontenAdm" method="POST">
                <?php
                foreach ($inikt as $key) {
                  ?>

                  <div class="form-group">
                    <label><b>Judul</b> </label>

                    <input type="text" id="judul" class="form-control" name="judul" required data-validation-required-message="Please enter a message." value="<?php echo $key['judul_wk'] ?>">

                  </div>

                  <div class="form-group">
                    <label><b>Tanggal</b> </label>
                    <input type="text" id="judul" class="form-control" name="tgl" required data-validation-required-message="Please enter a message." value="<?php echo $key['tgl_wk'] ?>" readonly>

                  </div>

                  <div class="form-group">
                    <label><b>Admin</b> </label>
                    <input type="text" id="judul" class="form-control" name="username" required data-validation-required-message="Please enter a message." value="<?php echo $key['username_adm'] ?>">

                  </div>

                  <div class="form-group">
                    <label><b>Kategori</b> </label>
                    <select name="kategori" class="form-control" data-placeholder="Pilih Kategori" required data-validation-required-message="Please enter a message.">
                      <option></option>
                      <?php
                      $ini_ktg = $this->db->query("SELECT id_ktg, nama_ktg FROM kategori")->result();
                      if (!empty($ini_ktg)) {
                        foreach ($ini_ktg as $a) {
                          echo '<option value="' . $a->id_ktg . '" ' . set_select('kategori', $a->id_ktg) . '>' . $a->nama_ktg . '</option>';
                        }
                      }
                      // var_dump($ini_ktg);
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><b>Konten</b></label>
                    <textarea id="editor" style="background-color: white;color:#000;" placeholder="Isi" name="isi" required data-validation-required-message="Please enter a message."><?php echo $key['isi_wk'];
                                                                                                                                                                                      } ?></textarea>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary btn-bloinik" type="submit" id="edkom" name="edkom">Update Konten</button>
                </div>

              </form>

              <div class="text-center">
                <a class="d-bloinik small mt-3" href="<?php echo site_url('admin_c/list_wk'); ?>">Cancel </a>
              </div>
              <!-- <?php } ?> -->
          </div>

        </div>
      </div>
    </div>
  </div>



  <?php

  $this->load->view('admin/footer_admin');

  ?>
  <?php echo form_close(); ?>