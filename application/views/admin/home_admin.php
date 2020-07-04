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
          <i class="fa fa-table"></i> Daftar Konten dari Mahasiswa</div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Ringkasan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Diunggah</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Ringkasan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Diunggah</th>
                  <th>Detail</th>
                </tr>
              </tfoot>
              <tbody>

                <?php
                // $rows = 0;

                foreach ($mhs_konten_array as $key) { ?>

                  <tr>
                    <!-- $rows++; -->
                    <!-- <td><?php echo $key['id_mk']; ?></td> -->
                    <td><?php echo $key['nama_ktg']; ?></td>
                    <td><?php echo $key['judul_mk']; ?></td>
                    <td><?php echo $key['ringkasan_mk']; ?></td>
                    <td><?php echo $key['tgl_mk']; ?></td>
                    <td>
                      <?php
                      if ($key['status_mk'] == 'Ditolak') { ?>
                        <!-- meraah -->
                        <p style="font-family: none; color: #FF1000;"><?php echo $key['status_mk']; ?> </p>
                      <?php
                    } else if ($key['status_mk'] == 'Proses') { ?>
                        <!-- kuning -->
                        <p style="font-family: none; color:  #FFA500;"><?php echo $key['status_mk']; ?> </p>
                      <?php
                    } else if ($key['status_mk'] == 'Diterima') { ?>
                        <!-- hijau -->
                        <p style="font-family: none; color: #008000;"><?php echo $key['status_mk']; ?> </p>
                      <?php
                    } else if ($key['status_mk'] == 'Diunggah') { ?>
                        <!-- biru -->
                        <p style="font-family: none; color: #0400ff;"><?php echo $key['status_mk']; ?> </p>
                      <?php
                    }
                    ?>
                    </td>
                    <!-- <td>Edit</td> -->
                    <td>
                      <!-- <a href="<?= site_url() ?>/admin_c/updateStatusMhs/<?php echo $key['id_mk'] ?>"> <center><i class="fa fa-pencil-square-o"></i></center> </a>-->
                      <?php
                      if ($key['status_mk'] == 'Diunggah') { ?>
                        <!-- biru -->
                        <p style="font-family: none; color: #0400ff;">Sudah Diunggah </p>
                      <?php
                    } else { ?>
                        <a class="btn btn-success btn-sm" href="<?= site_url() ?>/admin_c/updateStatusMhs/<?php echo $key['id_mk'] ?>">
                          Edit
                        </a>
                      <?php
                    }

                    ?>
                    </td>
                    <td>
                      <?php
                      if ($key['status_mk'] == 'Diterima') { ?>
                        <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/admin_c/updateStatusDiunggah/<?php echo $key['id_mk'] ?>">
                          Unggah
                        </a>
                      <?php
                    } else if ($key['status_mk'] == 'Diunggah') { ?>
                        <!-- biru -->
                        <p style="font-family: none; color: #0400ff;">Sudah Diunggah </p>
                      <?php
                    } else { ?>
                        <!-- hijau -->
                        <p style="font-family: none; color: #008000;">
                          <center>---</center>
                        </p>
                      <?php
                    }

                    ?>

                    </td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?= site_url() ?>/admin_c/detailKtMhs/<?php echo $key['id_mk'] ?>">
                        Detail
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