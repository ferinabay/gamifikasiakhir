<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhs_m','mhs_m');
		date_default_timezone_set("asia/jakarta");
		error_reporting(0);
		$session_data = $this->session->userdata('logged_in');
		if (empty($session_data['nim_mhs'])) {
			redirect('Loginmhs_c');
		}
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];

		$data['nim'] = 	$session_data;
		$data['q'] = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->result();
		$data['exp'] = $this->mhs_m->getDataLimit('expired_poin', '1', 'id_exp', 'desc')->row();

		$count['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $count);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $count);
		}
		$this->load->view('mahasiswa/home_mhs', $data);
		$this->load->view('mahasiswa/footer_mhs');
	}

	public function resetPoin()
	{
	    //add 3 month in db
		$effectiveDate = date('Y-m-d');
		$effectiveDate = date('Y-m-d', strtotime("+3 months", strtotime($effectiveDate)));
		$a = array('date_exp' => $effectiveDate );
		$where1 = array('id_exp' =>  1,);
		$this->mhs_m->UpdateData('expired_poin', $a, $where1);
		
		$page_id = $this->mhs_m->get('mahasiswa')->result();
		$rating = $_POST['poin_mhs'];
		foreach ($page_id as $k) {
			$mhs = $k->nim_mhs;
			$message = 'Poin anda telah di reset '.date('d/m/Y');
			$where = array(
				'nim_mhs' => $k->nim_mhs
			);
			$object = array(
				'poin_mhs' => $rating
			);
			$this->mhs_m->insertNotif($mhs, $message);
			$this->mhs_m->UpdateData('mahasiswa', $object, $where);
		}
	}

	public function tambahKontenMhs()
	{
		$data['id'] = $this->mhs_m->autoId();
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$data['exp'] = $this->mhs_m->getDataLimit('expired_poin', '1', 'id_exp', 'desc')->row();
		// $this->load->view('mahasiswa/header_mhs_theme2', $data);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		// $this->load->view('mahasiswa/header_mhs', $data);
		$this->load->view('mahasiswa/tambah_konten_mhs', $data);
	}

	public function tukarPoin()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/tukar_poin', $data);
	}
	public function tukarPoinTema()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['pk'] = $this->mhs_m->getWhereO('penukaran', 'nim_mhs', $nim, 'id_listP', 'asc');

		$data['mhs'] = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();
		$data['pnk'] = $this->mhs_m->get('list_penukaran')->result();
		$data['tkr'] = $this->mhs_m->get('penukaran')->result();
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);


		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		// $this->load->view('mahasiswa/header_mhs_theme2', $data);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$data['z'] = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}


		$this->load->view('mahasiswa/tukar_pointema', $data);
	}

	public function tukarPoinPP()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		// $a=$this->mhs_m->gJoin($nim);
		// $data['a'] = $a;
		// $data['pk'] = $a;
		$data['mhs'] = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();
		$data['pnk'] = $this->mhs_m->get('list_penukaran')->result();

		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}

		$this->load->view('mahasiswa/tukar_poinpp', $data);
	}

	public function kirimPoin()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];

		$data['nim'] = 	$session_data = $this->session->userdata('logged_in');
		$data['poin'] = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();
		$data['q'] = $this->mhs_m->getWhere('data_alpa', 'nim', $nim)->result();

		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/kirim_poin', $data);

		// $this->load->view('mahasiswa/kirim_poin',$data);
		$this->load->view('mahasiswa/footer_mhs');
	}

	public function list_konten_df()
	{

		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/list_konten', $data);
	}

	public function leaderboard()
	{

		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/rank', $data);
	}

	public function create_konten_mhs()
	{
		$this->form_validation->set_rules('nim', 'nim', 'trim|required');
		$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('ringkasan', 'ringkasan', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// $this->mhs_m->insertKontenMhs();
			// $this->load->view('admin/home_admin');
			echo "false tiii";
		} else {

			$session_data = $this->session->userdata('logged_in');
			$nim = $session_data['nim_mhs'];
			$dataNama = json_encode($this->mhs_m->getNama($nim));
			foreach (json_decode($dataNama) as $key) {
				$nama = $key->nama_mhs;
				// 	$nama = $key['data'];
			}

			$message = $nama . ' mengunggah konten baru';
			$this->mhs_m->insertNotifAdmin($message);

			// echo "BERHASIL TIIII";
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


			$this->mhs_m->insertKontenMhs();
			$nim = $session_data['nim_mhs'];
			$count['count_notif'] = $this->mhs_m->countNotif($nim);
			redirect('mhs_c/list_konten_df', 'refresh');

			$data['message'] = 'success';
			$pusher->trigger('my-channel', 'my-event', $data);
		}

		// require_once(APPPATH.'views/vendor/autoload.php');
		// $options = array(
		// 	'cluster' => 'ap1',
		// 	'useTLS' => true
		// );
		// $pusher = new Pusher\Pusher(
		// 	'9f3ce5a5380276a000f1', //ganti dengan App_key pusher Anda
		// 	'1a7f1b4a6aef23445eb7', //ganti dengan App_secret pusher Anda
		// 	'1014977', //ganti dengan App_key pusher Anda
		// 	$options
		// );

		// $data['message'] = 'success';
		// $pusher->trigger('my-channel1', 'my-event1', $data);
	}

	public function updatePoin()
	{
		$this->form_validation->set_rules('pengajar', 'Pengajar', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'trim|required');
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('smt', 'Semester', 'trim|required');
		$this->form_validation->set_rules('tukarkompen', 'Tukar Kompen', 'trim|required');

		$nim = $this->input->post('nim');
		$poinskr = $this->input->post('poinskr');
		$tukarkompen = $this->input->post('tukarkompen');
		// $ketentuanpoin=$this->mhs_m->getPoinKompen($data);
		$query = $this->db->query('SELECT poin_kp FROM poin_kompen WHERE id_kp = 1');
		$query = $query->row();
		$query = $query->poin_kp;

		$reward = $tukarkompen * $query;

		if ($reward <= $poinskr) {

			$sisa = $poinskr - $reward;

			if ($sisa >= 0) {
				$this->mhs_m->updatePoinKompen($nim, $sisa);
				$this->mhs_m->insertTbKompen();
				redirect('mhs_c/useKompen', 'refresh');
			} else {
				echo "lebih";
			}
		} else {
			// $this->admin_m->updatePoinKompen($nim);

			// $data['badges_array']=$this->admin_m->getBadges();
			// $this->load->view('admin/list_badges_admin',$data);
			// echo "salah ikiii";

			$this->load->view('mahasiswa/list_penggunaan_kompen');
		}
	}

	public function tukarTema()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];

		$pa = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();
		$pp = $this->uri->segment(3);

		$s = $this->uri->segment(4);
		$z = $this->uri->segment(5);
		$w = array(
			'nim_mhs' => $nim,
			'id_listP' => $s
		);

		$a = $this->mhs_m->gw('penukaran', $w)->row();
		if ($a == null) {
			$ps = $pa->poin_mhs - $pp;
			if ($pa->poin_mhs < $pp) {
				$this->session->set_flashdata('flash-data', 'Gagal, poin anda kurang!! ');
				echo "<script>window.history.go(-1);</script>";
			} else {
				$upd = array('poin_mhs' => $ps);
				$w = array('nim_mhs' => $nim);
				$this->mhs_m->UpdateData("mahasiswa", $upd, $w);

				$x = "";
				if ($z == 0) {
					$x = "TEMA";
				} elseif ($z == 1) {
					if ($s != 3) {
						$x = "PP";
					} else {
						$x = "PPF";
					}
				}
				$ins = array(
					'nim_mhs' => $nim,
					'id_listP' => $s,
					'kategori' => $x,
					'tgl_penukaran' => date('Y-m-d H:i:s'),
					'status' => 0
				);

				$this->mhs_m->insData("penukaran", $ins);
				$this->session->set_flashdata('flash-data', 'Sukses, melakukan penukaran!! ');
				if ($x == "TEMA") {
					redirect('mhs_c/tukarPoinTema', 'refresh');
				} else {
					redirect('mhs_c/tukarPoinPP', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('flash-data', 'Gagal, Anda hanya dapat melakukannya sekali!! ');
			echo "<script>window.history.go(-1);</script>";
		}
	}

	public function useTema()
	{
		$nim = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		if ($id == 0) {
			$where = array(
				'nim_mhs' => $nim,
				'Kategori' => 'TEMA',
			);
			$object1 = array('status' => 0);
			$this->mhs_m->UpdateData('penukaran', $object1, $where);
		} else {
			$where1 = array(
				'nim_mhs' => $nim,
				'Kategori' => 'TEMA',
			);
			$object1 = array('status' => 0);
			$this->mhs_m->UpdateData('penukaran', $object1, $where1);

			$where = array(
				'nim_mhs' => $nim,
				'id_listP' => $id,
			);
			$object = array('status' => 1);
			$this->mhs_m->UpdateData('penukaran', $object, $where);
		}

		$this->session->set_flashdata('flash-data', 'Berhasil, Anda telah ganti tema!! ');
		redirect('mhs_c/tukarPoinTema', 'refresh');
	}


	public function mhsini($nim)
	{
		$data['mhs_data'] = $this->mhs_m->getMahasiswa($nim);
		$this->load->view('admin/home_mhs', $data);
	}

	public function useKompen()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);

		$akun = $this->session->userdata('nim');
		$data['kompp'] = $this->mhs_m->gJoin()->result_array();
		$a = $this->mhs_m->getDataLimit('penukaran', NULL, 'tgl_penukaran', 'DESC');
		$data['penukaran'] = $a->result();
		$data['pjg'] = $a->num_rows();

		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/list_penggunaan_kompen', $data);
	}

	public function updateProfil()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['poin'] = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();
		$data['pkk'] = $this->mhs_m->gJoin()->result_array();
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/edit_profil', $data);
	}

	public function iniUpdateProfil()
	{
		$this->form_validation->set_rules('nama_mhs', 'nama_mhs', 'trim|required');
		$this->form_validation->set_rules('nim', 'nim', 'trim|required');
		$this->form_validation->set_rules('prodi', 'prodi', 'trim|required');

		$nim = $this->input->post('nim');
		$as = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();

		if ($this->form_validation->run() == FALSE) {
			// $this->load->view('buku/editReview', $data);
			echo "FALSE EDIT PROFIL";
		} else {
			$config['upload_path'] = './assetKu/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = '1000000000';
			// $config['max_width'] = '10240';
			// $config['max_height'] = '7680';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('userfile')) {
				$object = array(
					'nim_mhs'   => $this->input->post('nim'),
					'nama_mhs'  => $this->input->post('nama_mhs'),
					'prodi_mhs' => $this->input->post('prodi'),
					'img_profile'  => $this->input->post('sex')
				);
				$this->mhs_m->upProfil($nim, $object);
				redirect('mhs_c', 'refresh');
			} else {
				//var_dump($this->upload->data());
				//die();x

				$image_data = $this->upload->data();

				$configer = array(
					'image_library' 	=> 'gd2',
					'source_image' 		=> $image_data['full_path'],
					'maintain_ratio' 	=> TRUE,
				);

				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();
				// $poina = $as->poin_mhs - 10;
				$object = array(
					'nim_mhs'   => $this->input->post('nim'),
					'nama_mhs'  => $this->input->post('nama_mhs'),
					'prodi_mhs' => $this->input->post('prodi'),
					// 'poin_mhs'  => $poina,
					'img_profile'  => $this->upload->data('file_name')
				);
				$a = $this->mhs_m->upProfil($nim, $object);
				if ($a > 0) {
					redirect('mhs_c', 'refresh');
				} else {
					var_dump($a);
				}
			}
		}
	}

	public function deleteKontenMhs($id)
	{
		$session_data = $this->session->userdata('logged_in');
		$n = $session_data['nim_mhs'];
		$this->mhs_m->deleteKontenMhs1($id);
		$count['count_notif'] = $this->mhs_m->countNotif($n);
		redirect('mhs_c/list_konten_df', 'refresh');
	}

	public function detailKontenMhs($id)
	{
		$d['konten_mhs1'] = $this->mhs_m->getKontenMhs($id);
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/detail_konten_mhs', $d);
		$this->load->view('mahasiswa/footer_mhs');
	}

	public function updateKontenMhs($id)
	{
		$this->form_validation->set_rules('nim', 'nim', 'trim|required');
		$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('ringkasan', 'ringkasan', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');

		$d['konten_mhs_edit'] = $this->mhs_m->getKontenMhs($id);

		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$d['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);

		// $join = "list_penukaran.id_listP = penukaran.id_listP";
		// $z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		// if ($z != null) {
		// 	$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		// } else {
		// 	$this->load->view('mahasiswa/header_mhs_theme', $data);
		// }
		// $this->load->view('mahasiswa/detail_konten_mhs', $d);
		// $this->load->view('mahasiswa/footer_mhs');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mahasiswa/edit_konten_mhs', $d);
		} else {
			$this->mhs_m->editKontenMhs($id);
			redirect('mhs_c/list_konten_df', 'refresh');
		}
	}

	public function GiftPoint()
	{
		$session_data = $this->session->userdata('logged_in');
		$n = $session_data['nim_mhs'];

		//deklarasi input
		$nim  = $this->input->post('nimGift');
		$poin = $this->input->post('gpoint');

		$pengirim = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $n)->row();
		$penerima = $this->mhs_m->getWhere('mahasiswa', 'nim_mhs', $nim)->row();

		if (empty($penerima)) {
			$this->session->set_flashdata('flash-data', 'Gagal, NIM tidak terdaftar !! ');
			redirect('mhs_c/kirimPoin', 'refresh');
		}

		if ($n == $penerima->nim_mhs) {
			$this->session->set_flashdata('flash-data', 'Gagal, Kirim lah ke orang lain !! ');
		} else {

			$pdt = -$poin + $pengirim->poin_mhs;
			$pdt1 = $poin + $penerima->poin_mhs;

			$upd = array('poin_mhs' => $pdt);
			$upd1 = array('poin_mhs' => $pdt1);

			$w = array('nim_mhs' => $n);
			$w1 = array('nim_mhs' => $nim);

			$ins = array(
				'nim_mhs' => $n,
				'penerima' => $nim,
				'poin' => $poin,
				'kategori' => 'GIFT',
				'tgl_penukaran' => date('Y-m-d H:i:s')
			);
			$this->mhs_m->insData('penukaran', $ins);
			$this->mhs_m->UpdateData("mahasiswa", $upd, $w);
			$this->mhs_m->UpdateData("mahasiswa", $upd1, $w1);
			$this->session->set_flashdata('flash-data', 'Sukses, !! ');
			redirect('mhs_c/kirimPoin', 'refresh');
		}
	}

	public function lihatRule()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/rule');
		$this->load->view('mahasiswa/footer_mhs');
	}

    public function tampilTerm()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$data['count_notif'] = $this->mhs_m->countNotif($nim);
		$sts = array(
			'nim_mhs' => $nim,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $data);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $data);
		}
		$this->load->view('mahasiswa/term');
		$this->load->view('mahasiswa/footer_mhs');
	}

	public function tampilNotifikasi()
	{
		$session_data = $this->session->userdata('logged_in');
		$n = $session_data['nim_mhs'];
		$data['data'] = $this->mhs_m->getNotif($n);

		$count['count_notif'] = $this->mhs_m->countNotif($n);
		$sts = array(
			'nim_mhs' => $n,
			'kategori' => "TEMA",
			'status' => 1
		);
		$join = "list_penukaran.id_listP = penukaran.id_listP";
		$z = $this->mhs_m->gwj('penukaran', 'list_penukaran', $join, $sts)->row();
		if ($z != null) {
			$this->load->view('mahasiswa/' . $z->nama_listP, $count);
		} else {
			$this->load->view('mahasiswa/header_mhs_theme', $count);
		}
		$this->load->view('mahasiswa/notifikasi', $data);
		$this->load->view('mahasiswa/footer_mhs');
	}
}
