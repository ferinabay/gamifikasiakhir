   <?php
    //  $this->load->view('mahasiswa/header_mhs');
    ?>

   <div class="section section-notifications mt-5" id="notifications">
     <div class="container">
       <h3 class="text-center mb-5">Daftar Konten/Artikel <b><?php echo $this->session->userdata('nama'); ?></b></h3>

       <?php
        $akun = $this->session->userdata('nim');
        $ini_rank = $this->db->query("SELECT * FROM mhs_konten WHERE nim_mhs=$akun")->result();

        if (!empty($ini_rank)) { ?><center>
           <table class="table table-hover table-list-konten" style="width:100%">
             <thead>
               <tr style="font-family: none; ">
                 <th>
                   <center>No</center>
                 </th>
                 <th>
                   <center>Judul</center>
                 </th>
                 <th>
                   <center>Tanggal Buat</center>
                 </th>
                 <th>
                   <center>Status</center>
                 </th>
                 <th>
                   <center>Detail</center>
                 </th>
                 <th>
                   <center>Edit</center>
                 </th>
                 <th>
                   <center>Delete</center>
                 </th>
               </tr>
             </thead>
             <tbody>
               <?php
                $rows = 0;

                foreach ($ini_rank as $key) {
                  $rows++; ?>
                 <tr class="text-center">
                   <td>
                     <div class=" alert-with-icon">
                       <span style="font-family: none; ">
                         <b> <?php echo $rows; ?> </b>
                       </span>
                     </div>
                   </td>
                   <td>
                     <div class="alert-with-icon">
                       <span style="font-family: none; ">
                         <b><?php echo $key->judul_mk; ?> </b>
                       </span>
                     </div>
                   </td>
                   <td>
                     <div class="alert-with-icon">
                       <span style="font-family: none; ">
                         <b><?php echo  $key->tgl_mk; ?></b>
                       </span>
                     </div>
                   </td>
                   <td><?php
                        if ($key->status_mk == 'Ditolak') { ?>
                       <!-- meraah -->
                       <div class=" alert-with-icon">
                         <span style="font-family: none; color: #FF1000;"><?php echo $key->status_mk; ?> </span>
                       </div>
                     <?php
                    } else if ($key->status_mk == 'Proses') { ?>
                       <!-- kuning -->
                       <div class=" alert-with-icon">
                         <span style="font-family: none; color: #e6c210;"><?php echo $key->status_mk; ?></span>
                       </div>
                     <?php
                    } else if ($key->status_mk == 'Diterima') { ?>
                       <!-- hijau -->
                       <div class=" alert-with-icon">
                         <span style="font-family: none; color: #19b30f;"><?php echo $key->status_mk ?></span>
                       </div>

                     <?php
                    } else if ($key->status_mk == 'Diunggah') { ?>
                       <!-- biru -->
                       <div class=" alert-with-icon">
                         <span style="font-family: none; color: #0400ff;"><?php echo $key->status_mk ?></span>
                       </div>

                     <?php
                    } ?>
                   </td>
                   <td>
                     <div class=" alert-with-icon">
                       <!-- <a href="<?= site_url() ?>/mhs_c/detailKontenMhs/<?php echo $key->id_mk ?>" style="color: #FFF">Detail</a>  -->
                       <a href="<?= site_url() ?>mhs_c/detailKontenMhs/<?php echo $key->id_mk ?>">Detail</a>
                     </div>
                   </td>
                   <td>
                     <?php
                      if ($key->status_mk == 'Proses') { ?>
                       <div class=" alert-with-icon">
                         <a href="<?= site_url() ?>mhs_c/updateKontenMhs/<?php echo $key->id_mk ?>">Edit</a>
                       </div>
                     <?php
                    } else { ?>
                       <div class=" alert-with-icon">
                         <span href="">---</span>
                       </div>
                     <?php
                    }

                    ?>

                   </td>
                   <td>
                     <?php
                      if ($key->status_mk == 'Ditolak') { ?>
                       <div class=" alert-with-icon">
                         <a href="<?= site_url() ?>/mhs_c/deleteKontenMhs/<?php echo $key->id_mk ?>">Delete</a>
                       </div>
                     <?php
                    } else if ($key->status_mk == 'Diterima') { ?>
                       <div class="  alert-with-icon">
                         <a href="<?= site_url() ?>/mhs_c/deleteKontenMhs/<?php echo $key->id_mk ?>">Delete</a>
                       </div>
                     <?php
                    } else if ($key->status_mk == 'Proses') { ?>
                       <div class="  alert-with-icon">
                         <a href="<?= site_url() ?>/mhs_c/deleteKontenMhs/<?php echo $key->id_mk ?>">Delete</a>
                       </div>
                     <?php
                    } else { ?>
                       <div class="  alert-with-icon">
                         <span href="">---</span>
                       </div>
                     <?php
                    }

                    ?>
                   </td>

                 <?php
                } ?>
               </tr>
             </tbody>
           </table>
         </center><?php

              }
              ?>


     </div>
   </div>

   <?php $this->load->view('mahasiswa/footer_mhs'); ?>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>