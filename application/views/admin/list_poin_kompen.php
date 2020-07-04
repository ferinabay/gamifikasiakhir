<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1');
  $this->load->view('admin/sidebar_admin');

  ?>

  <div class="content-wrapper">
    <div class="container-fluid">


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Penggunaan Max Poin Kompen

        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Poin</th>
                  <th>Username</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal</th>
                  <th>Poin</th>
                  <th>Username</th>
                  <th>Edit</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($poin_kompen_array as $key) { ?>

                  <tr>
                    <td><?php echo $key['tgl_kp']; ?></td>
                    <td><?php echo $key['poin_kp']; ?></td>
                    <td><?php echo $key['username_adm']; ?></td>
                    <td>
                      <a href="<?= site_url() ?>admin_c/updatePoinKompen/<?php echo $key['id_kp'] ?>">
                        <center><i class="fa fa-pencil-square-o"></i></center>
                      </a>
                    </td>
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