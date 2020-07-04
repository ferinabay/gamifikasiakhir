<?php
// var_dump($ck); 
// echo form_open_multipart('admin_c/updateKategori/'.$this->uri->segment(3));

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
        <li class="breadcrumb-item active">Tambah Kategori</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">
                <?php echo form_open_multipart('admin_c/create_kategori'); ?>

                <!-- <form action="<?= site_url() ?>/admin_c/adminTbKategori" method="POST"> -->


                <div class="form-group" method="POST">
                  <label><b>Nama Kategori</b> </label>
                  <br><br>
                  <input type="text" id="nama_ktg" class="form-control" placeholder="Nama Kategori" name="nama_ktg">
                </div>


                <div class="text-center">
                  <button class="btn btn-primary btn-block" type="submit" id="tambah" name="tambah">Tambah Kategori</button>
                </div>

                <?php echo form_close(); ?>

                <!-- </form> -->

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_kategori'); ?>">Cancel </a>
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
  <!-- <?php echo form_close(); ?> -->