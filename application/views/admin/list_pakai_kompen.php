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
          <i class="fa fa-table"></i> Daftar Penggunaan Poin untuk Kompen

        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jumlah Jam</th>
                  <th>Kelas / Semester</th>
                  <th>Nama Pengajar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jumlah Jam</th>
                  <th>Kelas / Semester</th>
                  <th>Nama Pengajar</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($mhs_pakai_kompen as $key) { ?>

                  <tr>
                    <td><?php echo $key['nim']; ?></td>
                    <td><?php echo $key['nama_mhs']; ?></td>
                    <td><?php echo $key['jumlah_jam']; ?></td>
                    <td><?php echo $key['kelas'];
                        echo " / ";
                        echo $key['semester'];  ?></td>
                    <td><?php echo $key['nama_pengajar']; ?></td>
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