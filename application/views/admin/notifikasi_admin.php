<?php
if (is_null($this->session->userdata('username'))) {
  redirect('admin_c');
} else {

  $this->load->view('admin/header_admin1', $data);
  $this->load->view('admin/sidebar_admin');

  ?>
  <div class="container-fluid">
    <div class="content-wrapper">

      <div class="col-lg-12 col-xl-12 mt-4">
        <div class="list-group shadow-sm">
        <?php foreach ($get_notif as $key) { 
          if($key['be_read'] == false){
            echo'
                  <a class="list-group-item list-group-item-action list-group-item-warning" href="'. site_url().'admin_c/updateStatusRead/'.$key['id'] .'">
                    <div class="d-flex w-100 justify-content-between"><small>Notifikasi Belum Dibaca</small><small>'. $key['creation_time'] .'</small></div>
                    <p class="mb-1"><span>'. $key['message'] .'</span></p>
                  </a>
                ';
            } else {
            echo'
                  <a class="list-group-item list-group-item-action null" href="#">
                    <div class="d-flex w-100 justify-content-between"><small>Notifikasi</small><small>'. $key['creation_time'] .'</small></div>
                    <p class="mb-1"><span>'. $key['message'] .'</span></p>
                  </a>
                ';
            }
          
          } ?>


          <!-- <a class="list-group-item list-group-item-action list-group-item-warning" href="/u/tuitions?confirm=371">
            <div class="d-flex w-100 justify-content-between"><small>Notifikasi Belum Dibaca</small><small>19/05/2020</small></div>
            <p class="mb-1"><span>Sukma mengunggah konten baru</span></p>
          </a>
          <a class="list-group-item list-group-item-action list-group-item-warning" href="/u/tests?q=id:39">
            <div class="d-flex w-100 justify-content-between"><small>Notifikasi Belum Dibaca</small><small>15/05/2020</small></div>
            <p class="mb-1"><span>Setya mengunggah konten baru</span></p>
          </a>
          <a class="list-group-item list-group-item-action null" href="/u/messages?with=1">
            <div class="d-flex w-100 justify-content-between"><small>Notifikasi</small><small>08/05/2020</small></div>
            <p class="mb-1"><span>Fatma mengunggah konten baru</span></p>
          </a>
          <a class="list-group-item list-group-item-action null" href="/u/announcements/9">
            <div class="d-flex w-100 justify-content-between"><small>Notifikasi</small><small>08/05/2020</small></div>
            <p class="mb-1"><span>Lala mengunggah konten baru</span></p>
          </a></div><br> -->
        <!-- <ul class="pagination pagination-sm mb-0 mr-2">
          <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">⟨</a></li>
          <li class="page-item active"><a class="page-link undefined" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">⟩</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul> -->
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <script>
      $(document).ready(function(){
            show_product()
          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;
        
          var pusher = new Pusher('9f3ce5a5380276a000f1', {
              cluster: 'ap1',
              forceTLS: true
          });
        
          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
              if(data.message === 'success'){
                  location.reload(true);
                  echo 'MASOK PAK EKO'
              //     $session_data = $this->session->userdata('logged_in');
              // $n = $session_data['nim_mhs'];
              // $data['data'] = $this->mhs_m->getNotif($n);
              }
          });
          })
          function show_product(){
          $.ajax({
              url   : '<?php echo site_url("mhs_c/notifikasiAdmin");?>',
              type  : 'GET',
              async : true,
              dataType : 'json',
              success : function(data){
                location.reload(true);
              }
      
          });
      }
    </script> -->
    <script>
      $(document).ready(function(){

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('aec1eb0f438bd4cddb76', {
          cluster: 'ap1',
          forceTLS: true
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
          if(data.message === 'success'){
              location.reload(true);
              // $session_data = $this->session->userdata('logged_in');
          // $n = $session_data['nim_mhs'];
          // $data['data'] = $this->mhs_m->getNotif($n);
          }
      });
      })
    </script>
  </div>
  <?php

$this->load->view('admin/footer_admin');
}

?>
