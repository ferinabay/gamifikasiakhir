<?php
// $this->load->view('mahasiswa/header_mhs'); 
?>

<div class="section section-notifications mt-5" id="notifications">
  <div class="container">
    <h3 class="text-center mb-5"> <b>Leaderboard</b></h3>
    <div class="table-y table-wrapper-scroll-y my-custom-scrollbar">
      <?php
      $ini_rank = $this->db->query("SELECT nama_mhs, poin_mhs, status_mhs, img_profile FROM `mahasiswa` WHERE status_mhs='Valid' ORDER BY `poin_mhs` DESC")->result();
      if (!empty($ini_rank)) { ?><center>
          <table class=" table table-leaderboard mb-0">

            <?php
            $rank = 0;
            $last_score = false;
            $rows = 0;

            foreach ($ini_rank as $key) {
              $rows++;
              if ($last_score != $key->poin_mhs) {
                $last_score = $key->poin_mhs;
                $rank++;
                // $rank = $rows --> digunakan untuk menampilkan rank sesuai jumlah row,, jadi misal 1224
                // $rank = $rows;
              } ?>
              <tr>
                <td class="td-icon-leaderboard"><?php
                                                if ($rank == 1) { ?>

                    <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy1.png" alt="Circle image" style="width: 50px;  height: 50px;">
                  <?php
                } else if ($rank == 2) { ?>
                    <br>
                    <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy2.png" alt="Circle image" style="width: 50px;  height: 50px;">
                  <?php
                } else if ($rank == 3) { ?>
                    <br>
                    <img src="<?= base_url() ?>assetKu/newAssets/dist/img/trophy3.png" alt="Circle image" style="width: 50px;  height: 50px;">
                  <?php
                } else {
                  echo "<b>";
                  echo $rank;
                  echo "</b>";
                }
                ?>
                </td>
                <td align="left">
                  <div class="td-icon-leaderboard">
                    <span>
                      <img src="<?= base_url()  ?>assetKu/uploads/<?php echo $key->img_profile; ?>" alt="Profile" width="70"></span>
                  </div>
                </td>
                <td align="left">
                  <div class="alert user-scoreboard ">
                    <span>
                      <b><?php echo $key->nama_mhs; ?> </b></span>
                  </div>
                </td>
                <td>
                  <div class="alert user-scoreboard ">
                    <span>
                      <b><?php echo 'Poin : ';
                          echo  $key->poin_mhs; ?> </b></span>
                  </div>
                </td>

              <?php
            } ?>
            </tr>
          </table>
        </center>
      <?php } ?>
    </div>
  </div>
</div>

<?php $this->load->view('mahasiswa/footer_mhs'); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>