<?php
// var_dump($ck); 
echo form_open_multipart('admin_c/updateMahasiswa/' . $this->uri->segment(3));

if (is_null($this->session->userdata('username'))) {
    redirect('admin_c');
  } else {
    $this->load->view('admin/header_admin1');
    $this->load->view('admin/sidebar_admin');

    ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- UNTUK NULISI JUDUL TIAP DASHBOARD -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Edit Kategori</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <form action="<?= site_url() ?>/admin_c/updateMahasiswa" method="POST">

                  <?php foreach ($array_valid_mhs as $key) { ?>

                    <div class="form-group">
                      <label><b>NIM</b> </label>
                      <br><br>
                      <input type="text" id="nim_mhs" class="form-control" placeholder="<?php echo $key['nim_mhs'] ?>" name="nim_mhs" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Nama</b> </label>
                      <br><br>
                      <input type="text" id="nama_mhs" class="form-control" value="<?php echo $key['nama_mhs'] ?>" name="nama_mhs">
                    </div>

                    <div class="form-group">
                      <label><b>Status Mahasiswa</b></label><br>
                      <select name="status_mhs" class="form-control" id="status_mhs">
                        <option value="Diterima">Valid</option>
                        <option value="Belum Valid">Belum Valid</option>
                      </select>
                    </div>


                    <div class="text-center">
                      <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Validasi Mahasiswa</button>
                    </div>

                  <?php } ?>

                </form>

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_mahasiswa'); ?>">Cancel </a>
                </div>
                <!-- <?php } ?> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php

  $this->load->view('admin/footer_admin');


  ?>
  <?php echo form_close(); ?>