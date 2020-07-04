      <?php
      // $this->load->view('mahasiswa/header_mhs', $count_notif)
      // $this->load->view('mahasiswa/header_mhs_theme2', $count_notif)
      ?>

      <!--  <style>
      .note-editor.note-frame .note-editing-area .note-editable{padding:10px;overflow:auto;color:#000;word-wrap:break-word;background-color:#fff}
      </style> -->

      <div class="section section-tabs mt-5 section-padding">
        <div class="container">

          <div id="inputs">
            <h3 class="text-center mb-5">Tambahkan <b>Konten Anda</b></h3>
            <div class="row mb-5">
              <h4 class="text-timer" style="padding-top:0.5em;">Waktu Pengisian Kontenmu : </h4>
              <input type="hidden" id="jam" name="jam" value="<?php $date = date('H', strtotime($exp->timer));
                                                              echo "$date"; ?>">
              <input type="hidden" id="min" name="min" value="<?php $date = date('i', strtotime($exp->timer));
                                                              echo "$date"; ?>">
              <div class="timer-tambahkonten" id="ten-countdown"></div>
            </div>
            <?php echo form_open_multipart('mhs_c/create_konten_mhs'); ?>

            <h5>ID Mahasiswa</h5>
            <?php echo "<input readonly type=text name=id class=form-input-disable-custom  id=id value='" . "mhs" . $id . "'>"; ?>

            <h5 class="mt-3">NIM</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="nim" class="form-control form-input-custom" value="<?php echo $this->session->userdata('nim'); ?>" name="nim" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;" readonly>
                    <!-- input ketika waktu habis -->
                    <!-- <input readonly type="text" name="nim" class="form-input-disable-custom"> -->
                    <!-- input ketika waktu habis -->
                  </div>
                </div>
              </div>
            </div>

            <h5>Tanggal</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="date" class="form-control form-input-custom" name="tgl" id="tgl" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                  <!-- input ketika waktu habis -->
                  <!-- <input readonly type="text" name="tgl" class="form-input-disable-custom"> -->
                  <!-- input ketika waktu habis -->
                </div>
              </div>
            </div>

            <h5>Kategori</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <select id="kategori" name="kategori" class="form-control form-select-custom" data-placeholder="Pilih Kategori" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                    <option></option>
                    <?php
                    $ini_ktg = $this->db->query("SELECT id_ktg, nama_ktg FROM kategori")->result();
                    if (!empty($ini_ktg)) {
                      foreach ($ini_ktg as $key) {
                        echo '<option value="' . $key->id_ktg . '" ' . set_select('kategori', $key->id_ktg) . '>' . $key->nama_ktg . '</option>';
                      }
                    }
                    // var_dump($ini_ktg);
                    ?>
                  </select>
                  <!-- input ketika waktu habis -->
                  <!-- <select readonly type="text" name="tgl" class="form-input-disable-custom"></select> -->
                  <!-- input ketika waktu habis -->
                </div>
              </div>
            </div>

            <script type="text/javascript">
              function numberOfCharacters(textbox, limit, indicator) {
                chars = document.getElementById(textbox).value.length;
                document.getElementById(indicator).innerHTML = limit - chars;
              }
            </script>

            <h5 for="mytextbox">Judul</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  (Maksimal 150 Karakter)
                  <span id="characterlimit">150</span>
                  <!-- <input type="text" id="mytextbox" rows="2" cols="40" onkeyup="numberOfCharacters('mytextbox',150,'characterlimit');" class="form-control form-input-custom" placeholder="Judul" name="judul" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;"> -->
                  <!-- input ketika waktu habis -->
                  <input type="text" id="judul" name="judul" onkeyup="numberOfCharacters('mytextbox',150,'characterlimit');" class="form-control form-input-custom" placeholder="Judul" required data-validation-required-message="Please enter a message.">
                  <!-- input ketika waktu habis -->
                </div>
              </div>
            </div>

            <h5 for="mytextbox">Ringkasan</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  (Maksimal 500 Karakter)
                  <span id="characterlimit2">500</span>
                  <textarea type="text" id="mytextbox2" rows="2" cols="40" onkeyup="numberOfCharacters('mytextbox2',500,'characterlimit2');" class="form-control form-input-custom" placeholder="Ringkasan" name="ringkasan" required data-validation-required-message="Please enter a message."></textarea>
                  <!-- input ketika waktu habis -->
                  <!-- <textarea readonly type="text" name="ringkasan" class="form-input-disable-custom"></textarea> -->
                  <!-- input ketika waktu habis -->
                </div>
              </div>
            </div>

            <h5>Isi</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="editor" name="isi" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;"></textarea>
                </div>
                <!-- input ketika waktu habis -->
                <!-- <textarea readonly type="text" name="isi" class="form-input-disable-custom"></textarea> -->
                <!-- input ketika waktu habis -->
                <div class="ck ck-word-count">
                  <div class="ck-word-count__words"></div>
                  <div class="ck-word-count__characters"></div>
                </div>
              </div>
            </div>

            
            <input type="checkbox" name="checkbox" value="check" id="agree" onchange="toggleCheckbox(this)" /> I have read and agree to <a href="<?= base_url() ?>mhs_c/tampilTerm">the Terms and Conditions</a>


            <div id="success"></div>
            <div class="row"><br>
              <div class="col-md-12">
                <div class="form-group col-xs-12">
                  <center>
                    <button type="submit" class="btn btn-primary btn-lg" id="tambahktn" name="tambah">Tambah Konten</button>
                </div>
                </center>
              </div>

            </div>
          </div>

        </div>



        <div class="modal modal-custom fade modal-black" id="modalTerm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Term and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
            </div>
          </div>
        </div>
        <?php echo form_close(); ?>



        <?php $this->load->view('mahasiswa/footer_mhs'); ?>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>