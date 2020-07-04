      <?php
      // $this->load->view('mahasiswa/header_mhs');

      $session_data = $this->session->userdata('logged_in');

      $data = $session_data['nim_mhs'];

      $q = $this->db->select('*');
      $q = $this->db->from('data_alpa');
      $q = $this->db->where('nim ', $data);
      // $query = $this->db->get()->result();
      $q = $this->db->get();

      foreach ($q->result() as $exec) {
        $alpa = $exec->alpa;
      }
      ?>


      <!-- <?php echo form_open_multipart('mhs_c/create_konten_mhs'); ?>  -->


      <form action="<?= site_url() ?>/mhs_c/updatePoin" method="POST">

        <div class="section section-notifications mt-5 section-padding" id="notifications">
          <div class="container">
            <h3 class="text-center mb-5">Tukar <b>Poin untuk Kompen</b></h3>

            <?php
            if ($q->num_rows() > 0 || $q->num_rows() == 1) { ?>
              <div class="alert alert-info alert-with-icon">
                Jumlah Alpa : <?php echo $alpa ?> jam
              </div>
            <?php
          } else if ($q->num_rows() == 0) { ?>
              <div class="alert alert-info alert-with-icon">
                Data jam alpa Anda belum dimasukkan
              </div>
            <?php
          }
          ?>
            <h4>Admin</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <!-- <input type="text" id="pengajar" class="form-control"  name="pengajar" required data-validation-required-message="Please enter a message."> -->
                    <select name="pengajar" class="form-control form-select-custom" id="status" style="background-color: #FFF;color:#000;">
                      <option value="Ridwan Rismanto">Ridwan Rismanto</option>
                      <option value="Qonitatul Hasanah">Qonitatul Hasanah</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <h4>NIP</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="nip" class="form-control form-input-custom" name="nip" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>
            </div>

            <h4>Nama Mahasiswa</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="nama_mhs" class="form-control form-input-custom" name="nama_mhs" required data-validation-required-message="Please enter a message." value="<?php echo $this->session->userdata('nama'); ?>" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>
            </div>

            <h4>NIM</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="nim" class="form-control form-input-custom" name="nim" required data-validation-required-message="Please enter a message." value="<?php echo $this->session->userdata('nim'); ?>" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>
            </div>

            <h4>Kelas</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    <input type="text" id="kelas" class="form-control form-input-custom" name="kelas" required data-validation-required-message="Please enter a message." style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>
            </div>

            <h4>Semester</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="datepicker-container">
                  <div class="form-group">
                    (Anda hanya bisa memasukkan angka)
                    <input type="text" id="smt" class="form-control form-input-custom" name="smt" required data-validation-required-message="Please enter a message." class="form-control" onkeypress="return hanyaAngka(event)" style="background-color: #FFF;color:#000;">
                  </div>
                </div>
              </div>
            </div>

            <br><br>
            <div class="alert alert-primary alert-with-icon">
              <span>
                <input type="text" name="poinskr" class="form-control form-input-custom" value="<?php
                                                                                                $this->db->select('poin_mhs');
                                                                                                $this->db->where('nim_mhs', $this->session->userdata('nim'));
                                                                                                $query = $this->db->get('mahasiswa');

                                                                                                if ($query) {
                                                                                                  foreach ($query->result() as $row) {
                                                                                                    echo $row->poin_mhs;
                                                                                                  }
                                                                                                }
                                                                                                ?>" hidden>
                <b>Poin Anda Saat Ini :

                  <?php
                  $this->db->select('poin_mhs');
                  $this->db->where('nim_mhs', $this->session->userdata('nim'));
                  $query = $this->db->get('mahasiswa');

                  if ($query) {
                    foreach ($query->result() as $row) {
                      echo $row->poin_mhs;
                    }
                  }
                  ?>
                </b>
                <br>

                <b>Masukkan Jumlah Kompen Anda : </b> </span>
              <br><br>(Anda hanya bisa memasukkan angka)
              <input type="text" name="tukarkompen" class="form-control form-input-custom" onkeypress="return hanyaAngka(event)">

              <script>
                function hanyaAngka(evt) {
                  var charCode = (evt.which) ? evt.which : event.keyCode
                  if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                  return true;
                }
              </script>
            </div>

            <div>
              <center>

                <!-- <a href="<?= site_url() ?>/mhs_c/updatePoin/<?php echo $this->session->userdata('nim'); ?>" class="btn btn-info btn-round btn-lg">Tukar Dengan Kompen</a> -->

                <button class="btn btn-primary btn-block" type="submit" id="edkom" name="edkom">Tukar Dengan Kompen</button>
              </center>

            </div>
          </div>

        </div>
      </form>

      <!-- <?php echo form_close(); ?> -->
      <?php $this->load->view('mahasiswa/footer_mhs'); ?>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>