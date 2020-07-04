<?php
// var_dump($ck); 
echo form_open_multipart('admin_c/updatePoinKompen/' . $this->uri->segment(3));

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

                <form action="<?= site_url() ?>/admin_c/updatePoinKompen" method="POST">

                  <?php foreach ($array_poinkompen_edit as $key) { ?>

                    <div class="form-group">
                      <label><b>Id</b> </label>
                      <br><br>
                      <input type="text" id="id_kp" class="form-control" placeholder="<?php echo $key['id_kp'] ?>" name="id_kp" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Tanggal</b> </label>
                      <br><br>
                      <input type="text" id="tgl_kp" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_kp" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Nama Admin</b> </label>
                      <br><br>
                      <input type="text" id="username_adm" class="form-control" value="<?php echo $this->session->userdata('username') ?>" name="username_adm" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Poin Kompen</b> </label>
                      <br><br>
                      <input type="text" id="poin_kp" class="form-control" value="<?php echo $key['poin_kp'] ?>" name="poin_kp">
                    </div>


                    <div class="text-center">
                      <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Update Poin Kompen</button>
                    </div>

                  <?php } ?>

                </form>

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_poin_kompen'); ?>">Cancel </a>
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