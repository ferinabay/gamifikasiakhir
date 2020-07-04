<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation', 'session');

		$session_data = $this->session->userdata('logged_in');
	}

	public function index()
	{
		$this->load->view('admin/home1_admin');
	}

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login_admin');
		} else {
			// $session_data = $this->session->userdata('logged_in');

			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			if ($user == $user && $pass == $pass) {
				$this->session->set_userdata('username', $user);
				$this->load->model('admin_m');

				// $data['mhs_konten_array'] = $this->admin_m->getMhsKontenArray();
				// $this->load->view('admin/home_admin', $data);
				$data['mhs_count'] = $this->admin_m->getCountMhs();
				$data['admin_count'] = $this->admin_m->getCountAdmin();
				$data['allmhskonten_count'] = $this->admin_m->getCountKontenMhs();
				$data['allmhskontenditerima_count'] = $this->admin_m->getCountKontenMhsDiterima();
				$data['allmhskontendiunggah_count'] = $this->admin_m->getCountKontenMhsDiunggah();
				$data['allmhskontenproses_count'] = $this->admin_m->getCountKontenMhsProses();

				// Notif
				$count_notif = $this->admin_m->countNotif();
				$count_notif_read = $this->admin_m->countNotifRead();
				$count_notif_unread = $this->admin_m->countNotifUnread();
				$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

				// $data['count_notif'] = $this->admin_m->countNotif();
				// $data['count_notif_read'] = $this->admin_m->countNotifRead();
				// $data['count_notif_unread'] = $this->admin_m->countNotifUnread();
				// $data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];


				
				redirect('admin_c/dashboard','refresh');
				
			} else {
				redirect('login_c', 'refresh');
			}
		}
	}

	public function cekDb($password)
	{

		$username = $this->input->post('username');
		$result = $this->login_m->login($username, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'username_adm' => $row->username_adm
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
		redirect('admin_c', 'refresh');
	}
}

/* End of file login_c.php */
/* Location: ./application/controllers/login_c.php */
