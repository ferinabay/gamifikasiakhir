<?php
// var_dump($ck); 
// echo form_open_multipart('admin_c/updateStatusMhs/' . $this->uri->segment(3));

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
        <li class="breadcrumb-item active">Edit Status Konten Mahasiswa</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <form action="<?= site_url() ?>/admin_c/updateStatusMhs/<?= $this->uri->segment(3) ?>" method="POST">

                  <div class="form-group">
                    <label><b>Nim</b> </label>
                    <input type="text" name="nim" value="<?php echo $ck[0]->nim_mhs;
                                                          echo " / ";
                                                          echo $ck[0]->nama_mhs; ?>" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label><b>Judul</b> </label>
                    <input type="text" name="judul" value="<?php echo $ck[0]->judul_mk ?>" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label><b>Kategori</b> </label>
                    <input type="text" name="judul" value="<?php echo $ck[0]->nama_ktg ?>" class="form-control" readonly>
                  </div>

                  <br>
                  <div class="form-group">
                    <label><b>Ringkasan</b></label>
                    <br>
                    <!-- <textarea name="ringkasan" class="form-control" size="100" readonly><?php echo $ck[0]->ringkasan_mk ?></textarea> -->
                    <?php echo $ck[0]->ringkasan_mk ?>
                  </div>

                  <br>
                  <div class="form-group">
                    <label><b>Isi Konten</b></label>
                    <br>
                     <?php $isikonten = $ck[0]->isi_mk;
                     $string = strip_tags($isikonten);  
                     $chars = '0123456789';
                     $trim=str_replace([".","/","&nbsp;",":","%","+",";"], '', $string);
                     $a =  str_word_count($trim,1,$chars);echo count($a); ?>
                    <br>
                    <?php echo $ck[0]->isi_mk ?>
                  </div>
                  <br>
                  <div class="form-group">
                    <label><b>Status</b></label><br>
                    <select name="status" class="form-control" id="status">
                      <option value="<?php echo $ck[0]->status_mk ?>"></option>
                      <option value="Diterima">Diterima</option>
                      <option value="Ditolak">Ditolak</option>
                      <!-- <option value="Diunggah">Diunggah</option>  -->
                      <option value="Proses">Proses</option>
                    </select>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Update Status</button>
                  </div>

                </form>

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_mk'); ?>">Cancel </a>
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
  <?php
  // echo form_close(); 
  ?>