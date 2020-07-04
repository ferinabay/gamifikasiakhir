<?php
// var_dump($ss); 
echo form_open_multipart('admin_c/detailKontenAdmin/' . $this->uri->segment(3));

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
            <div class="card-body">


              <form action="<?= site_url() ?>admin_c/detailKontenAdmin" method="POST">

                <?php
                // var_dump($konten_adm); 
                // echo "<br><br>"; 
                // echo $this->db->last_query(); 
                // echo "<br><br>"; 
                // echo $konten_adm;
                foreach ($konten_adm as $key) {
                  // echo $key['judul_wk'];
                  ?>

                  <div class="form-group">
                    <label><b>Judul</b> </label><br>
                    <?php echo $key['judul_wk'] ?>
                  </div>

                  <div class="form-group">
                    <label><b>Tanggal</b> </label><br>
                    <?php echo $key['tgl_wk'] ?>
                  </div>

                  <div class="form-group">
                    <label><b>Admin</b> </label><br>
                    <?php echo $key['username_adm'] ?>
                  </div>

                  <div class="form-group">
                    <label><b>Kategori</b> </label><br>
                    <?php echo $key['nama_ktg'] ?>
                  </div>

                  <div class="form-group">
                    <label><b>Konten</b></label><br>
                    <?php echo $key['isi_wk'];
                  } ?>
                </div>

                <div class="text-center">
                  <a class="btn btn-danger btn-sm d-bloss mt-3" href="<?php echo site_url('admin_c/list_wk'); ?>">Cancel </a>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php

  $this->load->view('admin/footer_admin');


  ?>
  <?php echo form_close(); ?>