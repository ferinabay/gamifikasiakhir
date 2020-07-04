   <div class="section section-notifications  mt-5" id="notifications">
     <div class="container">
       <h3 class="text-center mb-5 ">Daftar Penggunaan Poin <b><?php echo $this->session->userdata('nama'); ?></b></h3>

       <?php
        $a = $this->session->userdata('nim');
        $i = 0;
        foreach ($penukaran as $p) :
          if ($p->nim_mhs == $a || $p->penerima == $a) :
            if ($p->kategori == "KOMPEN") :
              if ($kompp[$i]['nim'] == $a) : ?>
               <div class="alert alert-warning ">
                 <a href="<?= site_url() ?>cetak_c/prev/<?php echo $kompp[$i]['id_kmp']; ?>"> <img src="<?= base_url() ?>assetKu/startbootstrap-blk/assets/img/Download-PDF.png" style=" height: 50px;"></a>
                 <br><br>
                 <span>
                   <p>
                     <b> <?php echo $kompp[$i]['nama_pengajar']; ?> ( NIP : <?php echo $kompp[$i]['nip']; ?> ) &nbsp&nbsp&nbsp&nbsp|| &nbsp&nbsp&nbsp&nbsp Jumlah Jam : <?php echo $kompp[$i]['jumlah_jam']; ?>
                   </p>
                 </span>
                 <p class="time-notif-mhs"><?php $d = date_create($p->tgl_penukaran);
                                            echo date_format($d, 'j F Y, g:i a  '); ?></p>
               </div>

               <?php
                echo "<br>";
              endif;
            elseif ($p->kategori == "GIFT") :

              if ($p->penerima != $a) :
                ?>
               <div class="alert alert-warning" role="alert">
                 Pengiriman poin ke akun <b><?= $p->penerima; ?></b>
                 <p class="time-notif-mhs"><?php $d = date_create($p->tgl_penukaran);
                                            echo date_format($d, 'j F Y, g:i a  '); ?></p>
               </div>
             <?php else : ?>
               <div class="alert alert-warning" role="alert">
                 Menerima poin dari akun <b><?= $p->nim_mhs ?></b>
                 <p class="time-notif-mhs"><?php $d = date_create($p->tgl_penukaran);
                                            echo date_format($d, 'j F Y, g:i a  '); ?></p>
               </div>
             <?php endif;
          else : ?>
             <div class="alert alert-warning" role="alert">
               Penukaran poin dengan <b><?= $kompp[$i]['nama_listP'] ?></b>
               <p class="time-notif-mhs"><?php $d = date_create($p->tgl_penukaran);
                                          echo date_format($d, 'j F Y, g:i a  '); ?></p>
             </div>
           <?php endif;
          $i++;
        endif;
      endforeach; ?>

     </div>
   </div>

   <?php $this->load->view('mahasiswa/footer_mhs'); ?>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>