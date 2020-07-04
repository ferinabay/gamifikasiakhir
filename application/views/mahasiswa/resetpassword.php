      <?php $this->load->view('mahasiswa/header_opening'); ?>

      <div class="section section-tabs mt-5">

        <div class="container">
          <?php if ($this->session->flashdata('flash-data')) :  ?>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong> <?= $this->session->flashdata('flash-data'); ?> </strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?= form_open('loginmhs_c/resetpass'); ?>
          <div id="inputs">
            <h2>Reset Password</h2><br>
            <div class="row">
              <div class="col-12">
                <div class="col-6 items-center">
                  <div class="form-group">
                    <input type="hidden" name="email" value="<?= $m->email; ?>">
                    <input type="password" id="setpassword" class="form-control form-input-custom" name="password" placeholder="Isikan Password Baru Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                  </div>
                </div>
                <div class="col-6 items-center">
                  <div class="form-group">
                    <input type="password" id="setretypepassword" class="form-control form-input-custom" name="retypepassword" placeholder="Isikan Ulang Password Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    <small id="Esetpass" class="text-danger m-0"><b>password anda tidak sama, silahkan cek kembali</b></small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="success"></div>
          <div class="row"><br>
            <div class="col-md-12">
              <div class="form-group col-xs-12">
                <center>
                  <button type="submit" class="btn btn-primary btn-lg" id="setPasbtn" name="tambah">Submit</button>
              </div>
              </center>
            </div>
          </div>
          <?= form_close(); ?>
        </div>
      </div>

      <!-- Form Modal -->
      <div class="modal fade modal-black" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form role="form" method="POST" action="<?= site_url() ?>/loginmhs_c/ceklogin">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="NIM" type="text" name="nim" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="Password" type="password" name="password" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <p>Lupa password?</p><a href="<?= site_url() ?>loginmhs_c/klikresetpassword">Klik disini</a>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg">Login</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!--  End Modal -->
      <?php $this->load->view('mahasiswa/footer_mhs_opening'); ?>