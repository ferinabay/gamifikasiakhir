<?php
// var_dump($ck); 
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {
  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- UNTUK NULISI JUDUL TIAP DASHBOARD -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Edit Kategori</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">

            <div>
              <div class="card-body">

                <form action="<?= site_url() ?>admin_c/updatelp" method="POST" enctype="multipart/form-data">

                  <?php foreach ($array_penukaran_edit as $key) { ?>

                    <div class="form-group">
                      <label><b>Id</b> </label>
                      <br><br>
                      <input type="text" id="id_listP" class="form-control" value="<?php echo $key['id_listP'] ?>" name="id_listP" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Nama </b> </label>
                      <br><br>
                      <input type="text" id="nama_listP" class="form-control" value="<?php echo $key['nama_listP'] ?>" name="nama_listP">
                    </div>

                    <div class="form-group">
                      <label><b>Keterangan </b> </label>
                      <br><br>
                      <input type="text" id="keterangan" class="form-control" value="<?php echo $key['keterangan'] ?>" name="keterangan">
                    </div>

                    <div class="form-group">
                      <label><b>Poin </b> </label>
                      <br><br>
                      <input type="text" id="poin" class="form-control" value="<?php echo $key['poin'] ?>" name="poin">
                    </div>

                    <!--<div class="form-group">-->
                    <!--  <label><b>Picture</b> </label>-->
                    <!--  <br><br>-->
                    <!--  <input type="file" id="picture" class="form-control" name="picture">-->
                    <!--</div>-->
                    <div class="text-center">
                      <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Update Kategori</button>
                    </div>

                  <?php } ?>

                </form>

                <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo site_url('admin_c/list_penukaran'); ?>">Cancel </a>
                </div>
                <!-- <?php } ?> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php
  $this->load->view('admin/footer_admin');
  ?>