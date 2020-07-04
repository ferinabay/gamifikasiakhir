      <?php $this->load->view('mahasiswa/header_opening'); ?>

      <div class="section section-tabs mt-5 register">

        <div class="container ">
          <?= form_open_multipart('loginmhs_c/register'); ?>

          <div id="inputs">
            <h2>Register</h2><br>
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
            <div class="row">
                
              <div class="col-3">
                <img id="g1" src="<?= base_url() ?>assetKu/newAssets/dist/img/boy-default.png">
                <img id="g2" src="<?= base_url() ?>assetKu/newAssets/dist/img/girl-default.png">
              </div>
              <div class="col-9">

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <input type="text" id="nim" class="form-control form-input-custom" name="nim" placeholder="Isikan NIM Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <input type="text" id="nim" class="form-control form-input-custom" name="nama" placeholder="Isikan Nama Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <input type="email" id="email" class="form-control form-input-custom" name="email" placeholder="Isikan Email Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <p>Foto KTM</p>
                      <input type="file" id="ktm" class="form-control form-input-custom " accept="image/png, image/jpeg" name="ktm" placeholder="foto ktm" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <select name="jk" class="form-control form-select-custom" id="jk" style="background-color: #FFF;color:#000;">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <select name="prodi" class="form-control form-select-custom" id="status" style="background-color: #FFF;color:#000;">
                          <option value="Teknik Informatika">Teknik Informatika</option>
                          <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <input type="password" id="Rpassword" class="form-control form-input-custom" name="password" placeholder="Isikan Password Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <input type="password" id="Rretypepassword" class="form-control form-input-custom" name="retypepassword" placeholder="Isikan Ulang Password Anda ..." required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                      <small id="Epass" class="text-danger m-0"><b>password anda tidak sama, silahkan cek kembali</b></small>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div id="success"></div>
          <div class="row">
            <div class="form-group col-xs-12 btn-submit-center">
              <button type="submit" class="btn-submit-orange btn btn-lg btn-block" id="Bregis" name="tambah">Registrasi</button>
            </div>
          </div>
        </div>
        <?php echo form_close(); ?>
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