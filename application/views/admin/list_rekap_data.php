<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  $like = 'LIKE';
  $dislike = 'DISLIKE';

  $cc1 = $this->db->from('rating');
  $cc1 = $this->db->where('rate', $like);
  $cc1 = $this->db->count_all_results();

  $cc2 = $this->db->from('rating');
  $cc2 = $this->db->where('rate', $dislike);
  $cc2 = $this->db->count_all_results();

  $cc3 = $this->db->from('mhs_konten');
  $cc3 = $this->db->count_all_results();

  $cc4 = $this->db->from('web_konten');
  $cc4 = $this->db->count_all_results();

  ?>

  <div class="content-wrapper">
    <div class="container-fluid">


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Jumlah Data Konten & Rating

        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Jumlah Konten Mahasiswa</td>
                  <td><?php echo $cc3; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Konten Admin</td>
                  <td><?php echo $cc4; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Like Konten</td>
                  <td><?php echo $cc1; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Dislike Konten</td>
                  <td><?php echo $cc2; ?></td>
                </tr>
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