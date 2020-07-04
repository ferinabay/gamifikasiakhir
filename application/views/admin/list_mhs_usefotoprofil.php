<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>

  <div class="content-wrapper">
    <div class="container-fluid">


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Mahasiswa Penukaran dengan Foto Profil</div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Nama</th>
                  <th>Kategori Penukaran</th>
                  <th>Tanggal Penukaran</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Nama</th>
                  <th>Kategori Penukaran</th>
                  <th>Tanggal Penukaran</th>
                </tr>
              </tfoot>
              <tbody>

                <?php
                foreach ($mhs_fotoprofilused_array as $key) { ?>
                  <tr>
                    <td><?php echo $key['nama_mhs']; ?></td>
                    <td><?php echo $key['kategori']; ?></td>
                    <td><?php echo $key['tgl_penukaran']; ?></td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

    <?php

    $this->load->view('admin/footer_admin');
  }

  ?>