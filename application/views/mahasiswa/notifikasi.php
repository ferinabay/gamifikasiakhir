<div class="section section-tabs mt-5">

    <div class="container ">
        <div class="show_product">
        </div>
        <?php foreach ($data as $key) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $key['message']; ?>
            </div>
        <?php } ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('aec1eb0f438bd4cddb76', {
                cluster: 'ap1',
                forceTLS: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if (data.message === 'success') {
                    location.reload(true);
                    // $session_data = $this->session->userdata('logged_in');
                    // $n = $session_data['nim_mhs'];
                    // $data['data'] = $this->mhs_m->getNotif($n);
                }
            });
        })
    </script>
</div>
<!-- End Section Tabs -->