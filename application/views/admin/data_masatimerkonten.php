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
      <div class="card mb-4 mt-4">
        <div class="card-header">
          <i class="fa fa-table"></i> Waktu Timer Input Konten
        </div>
        <div class="card-body">
          <h4>Waktu timer saat ini : <?php $date = date('H', strtotime($exp->timer)); echo "$date";?> jam <?php $date = date('i', strtotime($exp->timer)); echo "$date";?> menit</h4>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">

            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Waktu Timer</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Waktu Timer</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>

                <th><?= date('H : i', strtotime($exp->timer)); ?></th>
                <td> <a href="<?= site_url() ?>admin_c/ubah_timer">Ubah</a></td>

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