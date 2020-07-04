<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('awal_m');
	
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		date_default_timezone_set("asia/bangkok");
		error_reporting(0);
		//$this->load->library('dompdf_gen');
	}

	public function index()
	{
	
		$this->load->view('website/brita');
	}

	public function viewA()
	{
		$this->load->view('website/artikel');
	}

	public function panggilA($id)
	{
		$data['artikel_new'] = $this->awal_m->getArtikel($id);
		// echo $data["artikel_new"];
		// var_dump($data);
		$data['komen'] = $this->awal_m->komen($id)->result();
		$data['k'] = $this->awal_m->komen($id)->row();
		error_reporting(0);
		// var_dump($data['artikel_new']);
		$this->load->view('website/artikel', $data);
	}

	public function insKomen()
	{
		$session_data = $this->session->userdata('logged_in');
		$nim = $session_data['nim_mhs'];
		$k = $this->input->post('komentar');
		$id = $this->input->post('id_mk');
	    //var_dump($nim);
		$arrayName = array(
			'id_mk' => $id,
			'nim_mhs' => $nim,
			'komentar' => $k,
			'time' => date('Y-m-d H-i-s'),
		);

		$this->awal_m->ins('komentar', $arrayName);
		$this->PointFromKomen($id);
    	redirect('awal_c/panggilA/'.$id,'refresh');
	}

	public function PointFromKomen($id)
	{
		$w = array('id_mk' => $id,);
		$d = $this->awal_m->getdataId($w, "mhs_konten")->row();
		$a = $this->awal_m->CountdataId($w, "komentar");

		$wp = array('nim_mhs' => $d->nim_mhs,);
		$dd = $this->awal_m->getdataId($wp, "mahasiswa")->row();

		$ww = array('rate' => 'LIKE', 'id_artikel' => $id,);
		$c = $this->awal_m->CountdataId($ww, "rating");

		$p = $dd->poin_mhs + 1;
		$pl = $dd->poin_mhs - 1;
		$tl = $dd->poin_total + 1;
		$object = array('poin_mhs' => $p,
		'poin_total' => $tl);

		if ($a % 5 == 0 && $c % 5 == 0) {
			$this->awal_m->UpdateData('mahasiswa', $object, $wp);
		}
		// $this->awal_m->UpdateData('mahasiswa', $object, $wp);
	}
	public function updateDislike()
	{
		$id_art = $this->input->post('aaa');
		$data = $this->input->post('vvv');

		if (isset($_POST["updateDislike"])) {
			$this->db->query("UPDATE rating SET rate='DISLIKE' WHERE id_artikel= '$id_art' AND id_mhs='$data'");
			redirect('awal_c/panggilA/'.$id_art, 'refresh');
		
		} else if (isset($_POST["updateLike"])) {
			$this->db->query("UPDATE rating SET rate='LIKE' WHERE id_artikel= '$id_art' AND id_mhs='$data'");
			redirect('awal_c/panggilA/'.$id_art, 'refresh');
		
			$this->PointFromKomen($id_art);
		} else if (isset($_POST["insertLike"])) {
			$this->db->query("INSERT INTO rating (id_artikel, id_mhs, rate) VALUES ('$id_art', '$data', 'LIKE')");
			// $this->db->query("UPDATE mahasiswa SET poin_total = '$tambah_status1' , poin_mhs = '$tambah_status2' WHERE nim_mhs = '$data'");
			redirect('awal_c/panggilA/'.$id_art, 'refresh');
		
			$this->PointFromKomen($id_art);
			// echo "string";
		} else if (isset($_POST["insertDislike"])) {
			$this->db->query("INSERT INTO rating (id_artikel, id_mhs, rate) VALUES ('$id_art', '$data', 'DISLIKE')");
			// echo "a";
			// $this->db->query("UPDATE mahasiswa SET poin_total = '$tambah_status1' , poin_mhs = '$tambah_status2' WHERE nim_mhs = '$data'");
			
			redirect('awal_c/panggilA/'.$id_art, 'refresh');
		}
	}
}
