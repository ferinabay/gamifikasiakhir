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
          <i class="fa fa-table"></i> Daftar Admin
          <br>
          <i class="fa fa-plus"></i>&nbsp&nbsp<a href="<?= site_url() ?>admin_c/tambah_admin_baru">Tambah Admin Baru</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama Admin</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Nama Admin</th>


                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($admin_array as $key) { ?>

                  <tr>
                    <td><?php echo $key['username_adm']; ?></td>
                    <td><?php echo $key['nama_adm']; ?></td>

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