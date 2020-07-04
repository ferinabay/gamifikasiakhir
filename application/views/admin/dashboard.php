<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>
  <div class="container-fluid">

    <div class="content-wrapper">
      <!-- Small Box (Stat card) -->
      <h5 class="mb-2 mt-4">Small Box</h5>
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> <?php echo $mhs_count; ?></h3>
              <p>Mahasiswa Total</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mahasiswa') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3> <?php echo $mhsblmverif_count; ?></h3>
              <p>Mahasiswa "Belum Valid"</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mahasiswablmvalid') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3> <?php echo $mhsverif_count; ?></h3>
              <p>Mahasiswa "Valid"</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mahasiswavalid') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> <?php echo $admin_count; ?></h3>
              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-alt"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_admin') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> <?php echo $allmhskonten_count; ?></h3>
              <p>Semua Konten Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="fas fa-paste"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mk') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $allmhskontenproses_count; ?></h3>

              <p>Konten Mahasiswa "Proses"</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mkProses') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $allmhskontenditerima_count; ?></h3>

              <p>Konten Mahasiswa "Diterima"</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mkDiterima') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $allmhskontendiunggah_count; ?></h3>

              <p>Konten Mahasiswa "Diunggah"</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mkDiunggah') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $allmhskontenditolak_count; ?></h3>

              <p>Konten Mahasiswa "Ditolak"</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?php echo site_url('admin_c/list_mkDitolak') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Small Box (Stat card) -->
      <div class="row">

        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->

    </div>
  </div>

  <?php

  $this->load->view('admin/footer_admin');
}

?>