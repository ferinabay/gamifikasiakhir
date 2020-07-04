      <?php
      $this->load->view('mahasiswa/header_mhs_theme');
      ?>


      <div class="section section-tabs mt-5 section-padding">
        <div class="container">
          <h3 class="text-center mb-5">Edit <b>Konten Anda</b></h3>
        </div>
        <div>
          <div id="inputs" method="POST">

            <?php echo form_open_multipart('mhs_c/updateKontenMhs/' . $this->uri->segment(3)); ?>

            <?php foreach ($konten_mhs_edit as $newkey) { ?>


              <h4>NIM</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="datepicker-container">
                    <div class="form-group">
                      <input type="text" id="nim" class="form-control form-input-custom" value="<?php echo $this->session->userdata('nim'); ?>" name="nim" required data-validation-required-message="Please enter a message." readonly style="background-color: #FFF;color:#000;">
                    </div>
                  </div>
                </div>
              </div>

              <h4>Tanggal</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control form-input-custom" name="tgl" value="<?php echo $newkey['tgl_mk']; ?>" readonly style="background-color: #FFF;color:#000;">
                  </div>

                </div>
              </div>

              <h4>Kategori</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <select name="kategori" class="form-control form-select-custom" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                      <?php
                      $ini_ktg = $this->db->query("SELECT id_ktg, nama_ktg FROM kategori")->result();
                      if (!empty($ini_ktg)) {
                        foreach ($ini_ktg as $key) { ?>
                          <option <?php if ($newkey->id_ktg == $key->id_ktg ) echo 'selected' ; ?> value="<?= $key->id_ktg; ?>"><?= $key->nama_ktg ?></option>
                       <?php }
                      }
                      // var_dump($ini_ktg);


                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <script type="text/javascript">
                function numberOfCharacters(textbox, limit, indicator) {
                  chars = document.getElementById(textbox).value.length;
                  document.getElementById(indicator).innerHTML = limit - chars;
                }
              </script>

              <h4>Judul</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    (Maksimal 150 Karakter)
                    <span id="characterlimit">150</span>
                    <input type="text" id="mytextbox" rows="2" cols="40" onkeyup="numberOfCharacters('mytextbox',150,'characterlimit');" class="form-control form-input-custom" name="judul" required data-validation-required-message="Please enter a message." value="<?php echo $newkey['judul_mk']; ?>" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>

              <h4>Ringkasan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    (Maksimal 500 Karakter)
                    <span id="characterlimit2">500</span>
                    <textarea type="text" id="mytextbox2" rows="2" cols="40" onkeyup="numberOfCharacters('mytextbox2',500,'characterlimit2');" class="form-control form-input-custom" name="ringkasan" required data-validation-required-message="Please enter a message."><?php echo $newkey['ringkasan_mk']; ?></textarea>
                  </div>
                </div>
              </div>

              <h4>Isi</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="editor" style="background-color: white;color:black;" name="isi" required data-validation-required-message="Please enter a message."><?php echo $newkey['isi_mk']; ?></textarea>
                  </div>
                </div>
              </div>
            <?php } ?>
            <input type="checkbox" name="checkbox" value="check" id="agree" onchange="toggleCheckbox(this)" /> I have read and agree to <a href="javascript:void(0)" onclick="scrollToDownload()" data-toggle="modal" data-target="#modalTerm">the Terms and Conditions</a>


            <div id="success"></div>
            <div class="row"><br>
              <div class="col-md-12">
                <div class="form-group col-xs-12">
                  <center>
                    <button type="submit" class="btn btn-primary btn-lg" id="tambahktn" name="edit">Edit Konten</button>
                </div>
                </center>
              </div>

            </div>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
      <?php $this->load->view('mahasiswa/footer_mhs'); ?>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>