<?php
// var_dump($ck); 
echo form_open_multipart('admin_c/updateBadges/' . $this->uri->segment(3));

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
        <li class="breadcrumb-item active">Edit Kategori</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <form action="<?= site_url() ?>/admin_c/updateBadges" method="POST">

                  <?php foreach ($array_badges_edit as $key) { ?>

                    <div class="form-group">
                      <label><b>Id</b> </label>
                      <br>
                      <input type="text" id="id_ktg" class="form-control" placeholder="<?php echo $key['id_bdg'] ?>" name="id_ktg" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Nama Badges</b> </label>
                      <br>
                      <input type="text" id="nama_bdg" class="form-control" value="<?php echo $key['nama_bdg'] ?>" name="nama_bdg">
                    </div>

                    <div class="form-group">
                      <label><b>Max Poin</b> </label>
                      <br>
                      <input type="text" id="maxpoin_bdg" class="form-control" value="<?php echo $key['maxpoin_bdg'] ?>" name="maxpoin_bdg">
                    </div>


                    <div class="text-center">
                      <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Update Kategori</button>
                    </div>

                  <?php } ?>

                </form>

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_badges'); ?>">Cancel </a>
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