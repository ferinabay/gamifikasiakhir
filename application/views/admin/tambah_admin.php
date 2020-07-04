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
        <li class="breadcrumb-item active">Tambah Admin</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">
                <?php echo form_open_multipart('admin_c/create_admin'); ?>

                <!-- <form action="<?= site_url() ?>/admin_c/adminTbKategori" method="POST"> -->


                <div class="form-group" method="POST">
                  <label><b>Username Admin</b> </label>
                  <br>
                  <input type="text" id="username_adm" class="form-control" placeholder="Username Admin" name="username_adm">
                </div>

                <div class="form-group" method="POST">
                  <label><b>Nama Admin</b> </label>
                  <br>
                  <input type="text" id="nama_adm" class="form-control" placeholder="Nama Admin" name="nama_adm">
                </div>

                <div class="form-group" method="POST">
                  <label><b>Password Admin</b> </label>
                  <br>
                  <input type="password" id="username_adm" class="form-control" name="password_adm">
                </div>


                <div class="text-center">
                  <button class="btn btn-primary btn-block" type="submit" id="tambahad" name="tambahad">Tambah Admin</button>
                </div>

                <?php echo form_close(); ?>

                <!-- </form> -->

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_admin'); ?>">Cancel </a>
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