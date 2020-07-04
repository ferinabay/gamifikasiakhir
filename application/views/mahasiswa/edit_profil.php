 <?php
  //  $this->load->view('mahasiswa/header_mhs');
  ?>

 <style>
   .input-hidden {
     position: absolute;
     left: -9999px;

   }

   input[type=radio]:checked+label>img {
     border: 1px solid #fff;
     box-shadow: 0 0 3px 3px #090;
   }

   /* Stuff after this is only to make things more pretty */
   input[type=radio]+label>img {
     border: 1px dashed #444;
     width: 150px;
     height: 150px;
     transition: 500ms all;
   }

   input[type=radio]:checked+label>img {
     transform:
       rotateZ(-10deg) rotateX(10deg);
   }
 </style>

 <form action="<?= site_url() ?>/mhs_c/iniUpdateProfil" method="POST" enctype="multipart/form-data">

   <div class="section section-notifications mt-5 section-padding" id="notifications">
     <h3 class="text-center mb-5">Edit<b> Profil</b></h3>
     <h5>Nama Mahasiswa</h5>
     <div class="row">
       <div class="col-md-12">
         <div class="datepicker-container">
           <div class="form-group">
             <input type="text" id="nama_mhs" class="form-control form-input-custom" name="nama_mhs" required data-validation-required-message="Please enter a message." value="<?php echo $this->session->userdata('nama'); ?>" style="background-color: #FFF;color:#000;">
           </div>
         </div>
       </div>
     </div>

     <h5>NIM</h5>
     <div class="row">
       <div class="col-md-12">
         <div class="datepicker-container">
           <div class="form-group">
             <input type="text" id="nim" class="form-control form-input-custom" name="nim" required data-validation-required-message="Please enter a message." value="<?php echo $this->session->userdata('nim'); ?>" style="background-color: #FFF;color:#000;">
           </div>
         </div>
       </div>
     </div>

     <h5>Program Studi</h5>
     <div class="row">
       <div class="col-md-12">
         <div class="datepicker-container">
           <div class="form-group">
             <select name="prodi" class="form-control form-select-custom" id="status" style="background-color: #FFF;color:#000;">
               <option value="Teknik Informatika">Teknik Informatika</option>
               <option value="Manajemen Informatika">Manajemen Informatika</option>
             </select>
           </div>
         </div>
       </div>
     </div>


     <h5>Foto</h5>
     <div class="row">
       <div class="col-md-12">
         <div class="file">
           <?php if ($poin->jk_mhs == "Laki-laki") { ?>
             <input type="radio" name="sex" id="sad" class="input-hidden" value="boy-default.png" />
             <label for="sad">
               <img src="<?= base_url() ?>assetKu/newAssets/dist/img/boy-default.png" alt="I'm sad" />
             </label>
           <?php } else { ?>
             <input type="radio" name="sex" id="happy" class="input-hidden" value="girl-default.png" />
             <label for="happy">
               <img src="<?= base_url() ?>assetKu/newAssets/dist/img/girl-default.png" alt="I'm sad" />
             </label>
           <?php }
          foreach ($pkk as $pk) : if ($pk['nim_mhs'] == $poin->nim_mhs && $pk['kategori'] == "PP") : ?>
               <?php if ($poin->jk_mhs == "Laki-laki") : ?>
                 <input type="radio" name="sex" id="sad<?= $pk['id_penukaran'] ?>" class="input-hidden" value="<?= $pk['picture']; ?>" />
                 <label for="sad<?= $pk['id_penukaran'] ?>">
                   <img src="<?= base_url() ?>assetKu/newAssets/dist/img/<?= $pk['picture']; ?>" alt="I'm sad" />
                 </label>
               <?php else : ?>
                 <input type="radio" name="sex" id="sad<?= $pk['id_penukaran'] ?>" class="input-hidden" value="2<?= $pk['picture']; ?>" />
                 <label for="sad<?= $pk['id_penukaran'] ?>">
                   <img src="<?= base_url() ?>assetKu/newAssets/dist/img/2<?= $pk['picture']; ?>" alt="I'm sad" />
                 </label>
               <?php endif;
            endif;
          endforeach; ?>
         </div>
       </div>
     </div>

     <?php foreach ($pkk as $pk) : if ($pk['nim_mhs'] == $poin->nim_mhs && $pk['id_listP'] == 3) : ?>
         <h5>OR</h5>
         <div class="row">
           <div class="col-md-12">
             <div class="file">
               <input type="radio" name="emotion" id="happy" class="input-hidden" />
               <label for="happy">
                 <input type="file" name="userfile" id="userfile" size="20">
               </label>
             </div>
           </div>
         </div>
       <?php endif;
    endforeach; ?>
     <br>
     <div>
       <center>
         <button class="btn btn-primary btn-block" type="submit" id="edprof" name="edprof">Edit Profil</button>
       </center>

     </div>

   </div>
   </div>
 </form>

 <?php $this->load->view('mahasiswa/footer_mhs'); ?>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>