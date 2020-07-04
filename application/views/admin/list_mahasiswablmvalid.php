<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>

  <div class="content-wrapper">
    <div class="container-fluid ktm">


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Mahasiswa

        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Poin</th>
                  <th>Status</th>
                  <th>Validasi Akun</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Poin</th>
                  <th>Status</th>
                  <th>Validasi Akun</th>
              </tfoot>
              <tbody>

                <?php foreach ($mahasiswablmvalid_array as $key) { ?>

                  <tr>
                    <td><?php echo $key['nim_mhs']; ?></td>
                    <td> <img src="<?= base_url()  ?>assetKu/uploads/<?php echo $key['img_ktm']; ?>" class="zoom" alt="Profile" width="200"></td>
                    <td><?php echo $key['nama_mhs']; ?></td>
                    <td><?php echo $key['prodi_mhs']; ?></td>
                    <td><?php echo $key['status_mhs']; ?></td>
                    <td>
                      <?php
                      if ($key['status_mhs'] == 'Belum Valid') { ?>
                        <a class="btn btn-success btn-sm" href="<?= site_url() ?>admin_c/updateMahasiswa/<?php echo $key['nim_mhs']; ?>" role="button">
                          Verifikasi
                        </a>
                      <?php
                    } else {
                      echo "-";
                    }

                    ?>
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