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
          <i class="fa fa-table"></i> Daftar Konten dari Mahasiswa
          <br>
          <i class="fa fa-plus"></i>&nbsp&nbsp<a href="<?= site_url() ?>admin_c/adminTbKonten">Tambah Konten Baru</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <!-- <th>Isi</th> -->
                  <th>Edit</th>
                  <th>Detail</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <!-- <th>Isi</th> -->
                  <th>Edit</th>
                  <th>Detail</th>
                  <th>Hapus</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($web_konten_array as $key) { ?>

                  <tr>
                    <td><?php echo $key['nama_ktg']; ?></td>
                    <td><?php echo $key['judul_wk']; ?></td>
                    <td><?php echo $key['tgl_wk']; ?></td>
                    <!-- <td><?php echo $key['isi_wk']; ?></td> -->
                    <!-- <td>Edit</td> -->
                    <td>
                      <a class="btn btn-success btn-sm" href="<?= site_url() ?>admin_c/updateKontenAdm/<?php echo $key['id_wk'] ?>">
                        Edit
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?= site_url() ?>admin_c/detailKontenAdmin/<?php echo $key['id_wk'] ?>">
                        Detail
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="<?= site_url() ?>admin_c/delete_konten_adm/<?php echo $key['id_wk'] ?>">
                        Hapus
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