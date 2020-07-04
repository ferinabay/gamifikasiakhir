<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <!-- UNTUK NULISI JUDUL TIAP DASHBOARD -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Ubah Timer</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-body">
        <div class="table-responsive">
          <div>
            <div class="card-body">
              <form action="<?= site_url() ?>admin_c/updateTimer" method="POST">
                <div class="form-group">
                  <label><b>Timer</b> </label>
                  <br><br>
                  <input type="time" id="time" class="form-control" placeholder="time" name="time" value="<?php $date = date('H:i', strtotime($exp->timer));
                                                                                                          echo "$date"; ?>" required>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary btn-block" type="submit" id="tambahad" name="tambahad">Update Expired</button>
                </div>
              </form>
              <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo site_url('admin_c/data_masatimerkonten'); ?>">Cancel </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <?php echo form_close(); ?> -->