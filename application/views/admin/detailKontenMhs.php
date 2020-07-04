<?php
// var_dump($ss); 
echo form_open_multipart('admin_c/detailKtMhs/' . $this->uri->segment(3));

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
        <li class="breadcrumb-item active">Detail Konten Mahasiswa</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <form action="<?= site_url() ?>admin_c/detailKtMhs" method="POST">



                  <div class="form-group">
                    <label><b>Judul</b> </label>
                    <br>
                    <?php echo $ss[0]->judul_mk ?>
                  </div>

                  <div class="form-group">
                    <label><b>Tanggal</b> </label>
                    <br>
                    <?php echo $ss[0]->tgl_mk ?>
                  </div>

                  <div class="form-group">
                    <label><b>Penulis</b> </label>
                    <br>
                    <?php echo $ss[0]->nama_mhs ?>
                  </div>

                  <div class="form-group">
                    <label><b>Kategori</b> </label>
                    <br>
                    <?php echo $ss[0]->nama_ktg ?>
                  </div>

                  <div class="form-group">
                    <label><b>Status</b> </label>
                    <br>
                    <?php echo $ss[0]->status_mk ?>
                  </div>

                  <div class="form-group konten-admin">
                    <label><b>Konten</b></label>
                    <br>
                    <?php echo $ss[0]->isi_mk ?>
                  </div>

                </form>

                <div class="text-center">
                  <a class="btn btn-danger btn-sm d-bloss small mt-3" href="<?php echo site_url('admin_c/list_mk'); ?>">Cancel </a>
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