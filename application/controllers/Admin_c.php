<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_m');
		$this->load->model('mhs_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		error_reporting(0);
		//$this->load->library('dompdf_gen');
		// if (is_null($this->session->userdata('username'))) {
		// 	redirect('admin_c');
		// } 
	}

	public function index()
	{
		$data['count_notif'] = $this->admin_m->countNotif();
		$this->load->view('admin/login_admin', $data);
	}

	public function data_masavalidpoin()
	{
		$data['exp'] = $this->admin_m->getData('expired_poin')->row();

		// notif lama

		// $data['count_notif'] = $this->admin_m->countNotif();
		// $data['count_notif_read'] = $this->admin_m->countNotifRead();
		// $data['count_notif_unread'] = $this->admin_m->countNotifUnread();
		// $data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/data_masavalidpoin', $data);
	}

	public function ubah_masavalidpoin()
	{
		$data['exp'] = $this->admin_m->getData('expired_poin')->row();
		$data['count_notif'] = $this->admin_m->countNotif();
		$data['count_notif_read'] = $this->admin_m->countNotifRead();
		$data['count_notif_unread'] = $this->admin_m->countNotifUnread();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/header_admin1', $data);
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/ubah_masavalidpoin', $data);
		$this->load->view('admin/footer_admin');
	}

	public function ubah_timer()
	{
		$data['exp'] = $this->admin_m->getData('expired_poin')->row();
		$data['count_notif'] = $this->admin_m->countNotif();
		$data['count_notif_read'] = $this->admin_m->countNotifRead();
		$data['count_notif_unread'] = $this->admin_m->countNotifUnread();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/header_admin1', $data);
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/ubah_timer', $data);
		$this->load->view('admin/footer_admin');
	}

	public function data_masatimerkonten()
	{
		$data['exp'] = $this->admin_m->getData('expired_poin')->row();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/data_masatimerkonten', $data);
	}
	public function updateDateExp()
	{
		$d = $this->input->post('date_exp');	
		$t = $this->input->post('time_exp');
		$dt = date('Y-m-d H:i', strtotime($d.' '.$t));	
		$a = array('date_exp' => $dt ,);
		$where = array('id_exp' =>  1,);
		$this->admin_m->UpdateData('expired_poin', $a, $where);
		redirect('admin_c/data_masavalidpoin', 'refresh');
	}
	public function updateDateExpp()
	{
		$date = $_POST['date_exp'];
		$a = array('date_exp' => $date );
		$where = array('id_exp' =>  1,);
	
		
		foreach ($page_id as $k) {
			$mhs = $k->nim_mhs;
			$message = 'Poin anda telah di reset '.date('d/m/Y');
			$where1 = array(
				'nim_mhs' => $k->nim_mhs
			);
			$object = array(
				'poin_mhs' => 0
			);
			$this->mhs_m->insertNotif($mhs, $message);
			
			require_once(APPPATH . 'views/vendor/autoload.php');
			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);

			$pusher = new Pusher\Pusher(
				'aec1eb0f438bd4cddb76', //ganti dengan App_key pusher Anda
				'1647fff8adc5fd1a7898', //ganti dengan App_secret pusher Anda
				'1009900', //ganti dengan App_key pusher Anda
				$options
			);
			
			$this->mhs_m->UpdateData('mahasiswa', $object, $where1);
		}
			$this->admin_m->UpdateData('expired_poin', $a, $where);
	}
	public function updateTimer()
	{
		$input = $this->input->post('time');
		$the_time = date('Y-m-d');
		$timer = $the_time . ' ' . $input;
		var_dump($timer, $input);
		$a = array('timer' =>  $timer);
		$where = array('id_exp' =>  1);
		$this->admin_m->UpdateData('expired_poin', $a, $where);
		redirect('admin_c/data_masatimerkonten', 'refresh');
	}
	public function list_pakai_kompen()
	{
		$data['mhs_pakai_kompen'] = $this->admin_m->getKompenArray();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_pakai_kompen', $data);
	}

	public function list_temaused()
	{
		$data['mhs_temaused_array'] = $this->admin_m->getTemaUsed();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_mhs_usetema', $data);
	}

	public function list_FotoProfilused()
	{
		$data['mhs_fotoprofilused_array'] = $this->admin_m->getFotoProfilUsed();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_mhs_usefotoprofil', $data);
	}

	public function list_mk()
	{
		$data['mhs_konten_array'] = $this->admin_m->getMhsKontenArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/home_admin', $data);
	}

	public function list_mkProses()
	{
		$data['mhs_konten_proses_array'] = $this->admin_m->getMhsKontenProsesArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_kontenproses', $data);
	}

	public function list_mkDitolak()
	{
		$data['mhs_konten_ditolak_array'] = $this->admin_m->getMhsKontenDitolakArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_kontenditolak', $data);
	}

	public function list_mkDiterima()
	{
		$data['mhs_konten_diterima_array'] = $this->admin_m->getMhsKontenDiterimaArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_kontenditerima', $data);
	}

	public function list_mkDiunggah()
	{
		$data['mhs_konten_diunggah_array'] = $this->admin_m->getMhsKontenDiunggahArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_kontenunggah', $data);
	}

	public function list_wk()
	{
		$data['web_konten_array'] = $this->admin_m->getWebKontenArray();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/web_admin', $data);
	}

	public function list_kategori()
	{
		$data['kategori_array'] = $this->admin_m->getKategori();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_ktg_admin', $data);
	}

	public function list_penukaran()
	{
		$data['penukaran_array'] = $this->admin_m->getListPenukaran();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_penukaran', $data);
	}

	public function list_badges()
	{
		$data['badges_array'] = $this->admin_m->getBadges();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_badges_admin', $data);
	}

	public function list_poin_kompen()
	{
		$data['poin_kompen_array'] = $this->admin_m->getPoinKompen();
		$this->load->view('admin/list_poin_kompen', $data);
	}

	public function list_mahasiswa()
	{
		$data['mahasiswa_array'] = $this->admin_m->getMahasiswa();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_mahasiswa', $data);
	}

	public function list_mahasiswablmvalid()
	{
		$data['mahasiswablmvalid_array'] = $this->admin_m->getMahasiswaBlmValid();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_mahasiswablmvalid', $data);
	}

	public function list_mahasiswavalid()
	{
		$data['mahasiswavalid_array'] = $this->admin_m->getMahasiswaValid();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$this->load->view('admin/list_mahasiswavalid', $data);
	}

	public function list_admin()
	{
		$data['admin_array'] = $this->admin_m->getAdmin();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_admin', $data);
	}

	public function dashboard()
	{
		$data['mhs_count'] = $this->admin_m->getCountMhs();
		$data['mhsblmverif_count'] = $this->admin_m->getCountMhsBlmVerif();
		$data['mhsverif_count'] = $this->admin_m->getCountMhsVerif();
		$data['admin_count'] = $this->admin_m->getCountAdmin();
		$data['allmhskonten_count'] = $this->admin_m->getCountKontenMhs();
		$data['allmhskontenditerima_count'] = $this->admin_m->getCountKontenMhsDiterima();
		$data['allmhskontendiunggah_count'] = $this->admin_m->getCountKontenMhsDiunggah();
		$data['allmhskontenproses_count'] = $this->admin_m->getCountKontenMhsProses();
		$data['allmhskontenditolak_count'] = $this->admin_m->getCountKontenMhsDitolak();

		// Notif
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/dashboard', $data);
	}

	public function notifikasiAdmin()
	{
		$data['count_notif'] = $this->admin_m->countNotif();
		$data['count_notif_read'] = $this->admin_m->countNotifRead();
		$data['count_notif_unread'] = $this->admin_m->countNotifUnread();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$data['get_notif'] = $this->admin_m->getNotifAdmin();
		$this->load->view('admin/notifikasi_admin', $data);
	}

	public function rekap_data()
	{
		// $data['admin_array']=$this->admin_m->getAdmin();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/list_rekap_data', $data);
	}


	//UNTUK RUBAH (UPDATE) STATUS KONTEN MAHASISWA
	public function updateStatusMhs($id)
	{
		$this->form_validation->set_rules('status', 'status', 'trim|required');

		$d['ck'] = $this->admin_m->getRev_kontenMhs($id);
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$ininim = $d['ck'][0]->nim_mhs;


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editStatusKonten', $d);
		} else {

			$mhs = $this->admin_m->getMahasiswaId($ininim);
			$this->admin_m->updateSt($id, $mhs);

			if ($this->input->post('status') == 'Diterima') {
				$message = 'Selamat, Konten Anda diterima, Poinmu Bertambah 5, Cek poinmu';
			} else if ($this->input->post('status') == 'Ditolak') {
				$message = 'Konten Anda ditolak, silahkan coba kembali';
			} else {
				$message = 'Konten Anda sedang diproses';
			};

			$this->admin_m->insertNotif($mhs, $message);

			require_once(APPPATH . 'views/vendor/autoload.php');
			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);

			$pusher = new Pusher\Pusher(
				'aec1eb0f438bd4cddb76', //ganti dengan App_key pusher Anda
				'1647fff8adc5fd1a7898', //ganti dengan App_secret pusher Anda
				'1009900', //ganti dengan App_key pusher Anda
				$options
			);

			$data['message'] = 'success';
			$pusher->trigger('my-channel', 'my-event', $data);
			$count_notif = $this->admin_m->countNotif();
			$count_notif_read = $this->admin_m->countNotifRead();
			$count_notif_unread = $this->admin_m->countNotifUnread();
			$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
			$data['mhs_konten_array'] = $this->admin_m->getMhsKontenArray();
			$this->load->view('admin/home_admin', $data);
		}
	}

	//UNTUK RUBAH (UPDATE) STATUS KONTEN MAHASISWA - DIUNGGaH
	public function updateStatusDiunggah($id)
	{
		$this->form_validation->set_rules('status', 'status', 'trim|required');

		$d['ck'] = $this->admin_m->getRev_kontenMhs($id);

		$ininim = $d['ck'][0]->nim_mhs;

		$mhs = $this->admin_m->getMahasiswaId($ininim);

		$this->admin_m->updateSt22($id, $mhs);
		$message = 'Selamat, Konten Anda telah diUnggah, Poinmu Bertambah 1 dan Cek postingan nya !';
		$this->admin_m->insertNotif($mhs, $message);

		require_once(APPPATH . 'views/vendor/autoload.php');
		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);

		$pusher = new Pusher\Pusher(
			'aec1eb0f438bd4cddb76', //ganti dengan App_key pusher Anda
			'1647fff8adc5fd1a7898', //ganti dengan App_secret pusher Anda
			'1009900', //ganti dengan App_key pusher Anda
			$options
		);

		$data['message'] = 'success';
		$pusher->trigger('my-channel', 'my-event', $data);

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$data['mhs_konten_array'] = $this->admin_m->getMhsKontenArray();
		$this->load->view('admin/home_admin', $data);
	}

	public function detailKtMhs($id)
	{
		$d['ss'] = $this->admin_m->getRev_kontenMhs($id);

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/detailKontenMhs', $d);
	}

	public function adminTbKategori()
	{
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/tambah_kategori', $d);
	}

	public function adminTbKonten()
	{
		$data['id'] = $this->admin_m->autoId();

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/adminTambahKonten', $data);
	}

	public function create_kategori()
	{
		$this->form_validation->set_rules('nama_ktg', 'nama_ktg', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			echo "false tiii";
		} else {
			$this->admin_m->insertKategori();
			$data['kategori_array'] = $this->admin_m->getKategori();
			$this->load->view('admin/list_ktg_admin', $data);
			// echo "BERHASIL TIIII";
		}
	}

	public function create_konten_adm()
	{
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');

		// $data['id']=$this->admin_m->autoId();

		if ($this->form_validation->run() == FALSE) {
			// $this->admin_m->insertKontenAdm();
			// $data['web_konten_array']=$this->admin_m->getWebKontenArray();
			// $this->load->view('admin/web_admin',$data);

			echo "false tiii";
		} else {
			$this->admin_m->insertKontenAdm();
			$data['web_konten_array'] = $this->admin_m->getWebKontenArray();
			$this->load->view('admin/web_admin', $data);
			// echo "BERHASIL TIIII";
		}
	}

	public function delete_konten_adm($id)
	{
		$this->admin_m->deleteKontenAdm($id);
		$data['web_konten_array'] = $this->admin_m->getWebKontenArray();
		$this->load->view('admin/web_admin', $data);
	}

	//UNTUK MANGGIL DETAIL KONTEN ADMIN TIII
	public function detailKontenAdmin($id)
	{
		$d['konten_adm'] = $this->admin_m->getGetKontenAdm($id);

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/detail_konten_adm', $d);
	}

	public function updateKontenAdm($id)
	{
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];


		$d['inikt'] = $this->admin_m->getGetKontenAdm($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_konten_adm', $d);
		} else {
			$this->admin_m->editKontenAdm($id);
			$data['web_konten_array'] = $this->admin_m->getWebKontenArray();
			$this->load->view('admin/web_admin', $data);
		}
	}

	public function updateKategori($id)
	{
		$this->form_validation->set_rules('nama_ktg', 'nama_ktg', 'trim|required');

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$d['array_ktg_edit'] = $this->admin_m->getKategoriId($id);


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_kategori', $d);
		} else {
			$this->admin_m->updateModelKategori($id);
			$data['kategori_array'] = $this->admin_m->getKategori();
			$this->load->view('admin/list_ktg_admin', $data);
		}
	}

    public function updateListPenukaran($id)
	{
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];
		$d['array_penukaran_edit'] = $this->admin_m->getPenukaranId($id);
		$this->load->view('admin/edit_penukaran', $d);
	}

	public function updatelp()
	{
		$id = $this->input->post('id_listP');
		$this->admin_m->updateModelPenukaran($id);
		redirect('admin_c/list_penukaran', 'refresh');
	}

	public function updateBadges($id)
	{
		$this->form_validation->set_rules('nama_bdg', 'nama_bdg', 'trim|required');
		$this->form_validation->set_rules('maxpoin_bdg', 'maxpoin_bdg', 'trim|required');

		$d['array_badges_edit'] = $this->admin_m->getBadgesId($id);

		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_badges', $d);
		} else {
			$this->admin_m->updateModelBadges($id);

			$data['badges_array'] = $this->admin_m->getBadges();
			$this->load->view('admin/list_badges_admin', $data);
		}
	}

	public function updatePoinKompen($id)
	{
		$this->form_validation->set_rules('tgl_kp', 'tgl_kp', 'trim|required');
		$this->form_validation->set_rules('username_adm', 'username_adm', 'trim|required');
		$this->form_validation->set_rules('poin_kp', 'poin_kp', 'trim|required');

		$d['array_poinkompen_edit'] = $this->admin_m->getPoinKompenId($id);


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_poin_kompen', $d);
		} else {
			$this->admin_m->updateModelKp($id);

			$data['poin_kompen_array'] = $this->admin_m->getPoinKompen();
			$this->load->view('admin/list_poin_kompen', $data);
		}
	}

	public function updateMahasiswa($id)
	{
		$this->form_validation->set_rules('status_mhs', 'status_mhs', 'trim|required');

		$this->admin_m->updateModelValidMhs($id);
		$data['mahasiswa_array'] = $this->admin_m->getMahasiswa();
		
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];


		$this->load->view('admin/list_mahasiswa', $data);
	}

//     public function updateMahasiswaBlmValid($id)
// 	{
// 		$this->form_validation->set_rules('status_mhs', 'status_mhs', 'trim|required');

// 		$this->admin_m->updateModelValidMhs($id);
// 		$data['mahasiswa_array'] = $this->admin_m->getMahasiswa();
		
// 		$count_notif = $this->admin_m->countNotif();
// 		$count_notif_read = $this->admin_m->countNotifRead();
// 		$count_notif_unread = $this->admin_m->countNotifUnread();
// 		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];


// 		$this->load->view('admin/list_mahasiswablmvalid', $data);
// 	}

	public function	tambah_admin_baru()
	{
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$d['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$this->load->view('admin/tambah_admin', $d);
	}

	public function create_admin()
	{
		$this->form_validation->set_rules('username_adm', 'username_adm', 'trim|required');
		$this->form_validation->set_rules('nama_adm', 'nama_adm', 'trim|required');
		$this->form_validation->set_rules('password_adm', 'password_adm', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			echo "false tiii";
		} else {
			$this->admin_m->insertAdmin();

			$data['admin_array'] = $this->admin_m->getAdmin();
			$this->load->view('admin/list_admin', $data);
		}
	}

	public function updateStatusRead($id)
	{

		$this->admin_m->updateStatusRead($id);

		$data['count_notif'] = $this->admin_m->countNotif();
		$data['count_notif_read'] = $this->admin_m->countNotifRead();
		$data['count_notif_unread'] = $this->admin_m->countNotifUnread();
		$count_notif = $this->admin_m->countNotif();
		$count_notif_read = $this->admin_m->countNotifRead();
		$count_notif_unread = $this->admin_m->countNotifUnread();
		$data['data'] = ["count_notif" => $count_notif, "count_notif_read" => $count_notif_read, 'count_notif_unread' => $count_notif_unread];

		$data['get_notif'] = $this->admin_m->getNotifAdmin();
		$this->load->view('admin/notifikasi_admin', $data);
	}
}
