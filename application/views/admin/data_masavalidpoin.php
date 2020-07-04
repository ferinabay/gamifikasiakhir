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
          <i class="fa fa-table"></i> Masa Valid Poin
        </div>
        <div class="card-body">
          <h4>Masa aktif poin saat ini :</h4>
          <input type="datetime" id="exp_date" name="exp_date" value="<?= $exp->date_exp; ?>" hidden>
          <h3 id="demo"> </h3>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">

            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal Akhir Valid</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Akhir Valid</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>

                <th><?= date('d M Y, H:i', strtotime($exp->date_exp)); ?></th>
                <td> <a href="<?= site_url() ?>admin_c/ubah_masavalidpoin">Ubah</a></td>

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