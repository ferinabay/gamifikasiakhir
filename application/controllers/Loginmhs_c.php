<?php

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') or exit('No direct script access allowed');

class Loginmhs_c extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('loginmhs_m');
			$this->load->model('mhs_m');
		// $this->load->library('MyPHPMailer');
		require_once(APPPATH . 'third_party/phpmailer/src/Exception.php');
		require_once(APPPATH . 'third_party/phpmailer/src/PHPMailer.php');
		require_once(APPPATH . 'third_party/phpmailer/src/SMTP.php');
        error_reporting(0);
		// $this->db->query("SET GLOBAL sql_mode = '' ");
		// $this->db->query("SET SESSION sql_mode = '' ");
	}

	public function index()
	{
	    $a = $this->mhs_m->get('expired_poin')->result();
	    $d = date('Y-m-h');
	    $page_id = $this->mhs_m->get('mahasiswa')->result();
	    foreach($a as $as){
	        if($a->date_exp == $d){
	           foreach ($page_id as $k) {
        			$mhs = $k->nim_mhs;
        			$message = 'Poin anda telah di reset '.date('d/m/Y');
        			$where = array(
        				'nim_mhs' => $k->nim_mhs
        			);
        			$object = array(
        				'poin_mhs' => 0
        			);
        			$this->mhs_m->insertNotif($mhs, $message);
        			$this->mhs_m->UpdateData('mahasiswa', $object, $where);
        		}
	        }
	    }
	   $this->load->view('opening/index.php');
	}

	public function theme2()
	{
		$this->load->view('opening/indexTheme2.php');
	}

	public function ceklogin()
	{
		$this->form_validation->set_rules('nim', 'Nim', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('opening/index');
			// $this->load->view('opening/indexTheme2');
		} else {
			$session_data = $this->session->userdata('logged_in');

			$data['nim_mhs'] = $session_data['nim_mhs'];
			$data['nama_mhs'] = $session_data['nama_mhs'];
			$data['prodi_mhs'] = $session_data['prodi_mhs'];
			$data['poin_total'] = $session_data['poin_total'];
			$data['poin_mhs'] = $session_data['poin_mhs'];
			$data['status_mhs'] = $session_data['status_mhs'];

			$nim = $this->input->post('nim');
			$password = $this->input->post('password');

			if ($data['status_mhs'] == 'Valid') {
				$this->session->set_userdata('nim', $data['nim_mhs']);
				$this->session->set_userdata('nama', $data['nama_mhs']);
				$this->session->set_userdata('prodi_mhs', $data['prodi_mhs']);
				$this->session->set_userdata('poin_total', $data['poin_total']);
				$this->session->set_userdata('poin_mhs', $data['poin_mhs']);

				// $user_data = $this->session->userdata('poin_mhs');
				// var_dump($data);

				// $this->load->view('mahasiswa/home_mhs');
				// redirect('loginmhs_c','refreshed');

				redirect('mhs_c', 'refresh');
			} else if ($data['status_mhs'] == 'Belum Valid') {
				$this->load->view('opening/index');
			}
		}
	}


	public function cekDb($password)
	{
		$nim_mhs = $this->input->post('nim');
		$result = $this->loginmhs_m->login($nim_mhs, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'nim_mhs' => $row->nim_mhs,
					'nama_mhs' => $row->nama_mhs,
					'prodi_mhs' => $row->prodi_mhs,
					'poin_total' => $row->poin_total,
					'poin_mhs' => $row->poin_mhs,
					'status_mhs' => $row->status_mhs
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else {
			$this->form_validation->set_message('cekDb', "Login Gagal. Username dan Password tidak valid");
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		// $this->load->view('opening/index');
		redirect('loginmhs_c');
	}

	public function register()
	{
		$this->form_validation->set_rules('nim', 'Nim', 'trim|required|is_unique[mahasiswa.nim_mhs]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jk', 'trim|required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mahasiswa/register');
		} else {
			$config['upload_path'] = './assetKu/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '2048';

			$this->load->library('upload', $config);
			$cek = $this->db->get('mahasiswa')->row();
			$nim = $this->input->post('nim');

			if ($nim != $cek->nim) {
				if (!$this->upload->do_upload('ktm')) {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('flash-data', 'Gagal, ukuran foto maksimal 2 mb' );
					$this->load->view('mahasiswa/register');
				} else {
					if ($this->input->post('jk') == "Perempuan") {
						$object = array(
							'nim_mhs' => $this->input->post('nim'),
							'nama_mhs' => $this->input->post('nama'),
							'email_mhs' => $this->input->post('email'),
							'jk_mhs' => $this->input->post('jk'),
							'prodi_mhs' => $this->input->post('prodi'),
							'password_mhs' => MD5($this->input->post('password')),
							'img_ktm' => $this->upload->data('file_name'),
							'img_profile' => "girl-default.png",
							'status_mhs' 	=> "Belum Valid"
						);
						$this->loginmhs_m->insertMhs($object);
						redirect('loginmhs_c');
					} else {
						$object = array(
							'nim_mhs' => $this->input->post('nim'),
							'nama_mhs' => $this->input->post('nama'),
							'email_mhs' => $this->input->post('email'),
							'jk_mhs' => $this->input->post('jk'),
							'prodi_mhs' => $this->input->post('prodi'),
							'password_mhs' => MD5($this->input->post('password')),
							'img_ktm' => $this->upload->data('file_name'),
							'img_profile ' => "boy-default.png",
							'status_mhs' 	=> "Belum Valid"
						);
						$this->loginmhs_m->insertMhs($object);
						redirect('loginmhs_c');
					}
				}
			} else {
				echo '<script language="javascript">';
				echo 'alert("nim sudah terpakai")';
				echo '</script>';
			}
			// $this->loginmhs_m->insertMhs();
			// $this->load->view('opening/index');
		}
	}

	public function klikresetpassword()
	{
		$this->load->view('mahasiswa/kirimresetpassword');
	}

	function emailSend()
	{
		$penerima = $this->input->post('email');
		$reset_key = random_string('alnum', 50);
		$object = array(
			'email' => $penerima,
			'code'  => $reset_key
		);
		$this->loginmhs_m->dataInsert('req_reset', $object);

		$message = "<p>Anda melakukan permintaan reset password</p>";
		$message .= "Klik <a href='" . site_url('loginmhs_c/resetpassword/' . $reset_key) . "'>reset password</a>";
		$mail = new PHPMailer();
		$mail->IsHTML(true);    // set email format to HTML
		$mail->IsSMTP();   // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host 	  = 'mail.gamifikasijti.online';      // setting GMail as our SMTP server
		$mail->Port       = 465;                   // SMTP port to connect to GMail
		$mail->Username   = "admin@gamifikasijti.online";  // alamat email kamu
		$mail->Password   = "Hi7hp2pksRyiebd";            // password GMail
		$mail->SetFrom('admin@gamifikasijti.online', 'JTI POLINEMA');  //Siapa yg mengirim email
		$mail->Subject    = "Reset Password";
		$mail->Body       = $message;
		// $toEmail = "email.penerima@gmail.com"; // siapa yg menerima email ini
		$mail->AddAddress($penerima);

		if (!$mail->Send()) {
			$this->session->set_flashdata('flash-data', "Eror: " . $mail->ErrorInfo);
			redirect('loginmhs_c/klikresetpassword');
		} else {
			$this->session->set_flashdata('flash-data', 'Sukses, email telah dikirim !! ');
			redirect('loginmhs_c/klikresetpassword');
		}
	}
	public function resetpassword()
	{
		$where = array('code' => $this->uri->segment(3));
		$data['m'] = $this->loginmhs_m->dataGetW('req_reset', $where)->row();
		error_reporting(0);
		$this->load->view('mahasiswa/resetpassword', $data);
	}

	public function resetpass()
	{
		$pass = md5($this->input->post('password'));


		$obj = array('password_mhs' => $pass,);
		$wh = array('email_mhs' => $this->input->post('email'));
		var_dump($wh);
		$this->loginmhs_m->updatePass($obj, $wh);

		$this->session->set_flashdata('flash-data', 'Sukses, Password sudah diganti !! ');
		redirect('loginmhs_c/resetpassword', 'refresh');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
