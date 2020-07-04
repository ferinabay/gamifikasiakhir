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
          <i class="fa fa-table"></i> Daftar Badges

        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <!-- <th>Gambar</th> -->
                  <th>Max Poin</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <!-- <th>Gambar</th> -->
                  <th>Max Poin</th>
                  <th>Edit</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($badges_array as $key) { ?>

                  <tr>
                    <td><?php echo $key['id_bdg']; ?></td>
                    <td><?php echo $key['nama_bdg']; ?></td>
                    <!-- <td><?php echo $key['gambar_bdg']; ?></td> -->
                    <td><?php echo $key['maxpoin_bdg']; ?></td>
                    <td>
                      <a class="btn btn-success btn-sm" href="<?= site_url() ?>admin_c/updateBadges/<?php echo $key['id_bdg'] ?>">
                        Edit
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