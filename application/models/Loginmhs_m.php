<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginmhs_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function login($nim, $password)
	{
		$this->db->select('nim_mhs, nama_mhs, prodi_mhs, password_mhs, poin_total, poin_mhs, status_mhs');
		$this->db->from('mahasiswa');
		$this->db->where('nim_mhs', $nim);
		$this->db->where('password_mhs', MD5($password));

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function insertMhs($object)
	{
		$this->db->insert('mahasiswa', $object);
	}

	public function updatePass($pass, $where)
	{
		$this->db->update('mahasiswa', $pass, $where);
	}

	public function dataInsert($tabel, $object)
	{
		$this->db->insert($tabel, $object);
	}
	public function dataGetW($tabel, $where)
	{
		$this->db->where($where);
		return $this->db->get($tabel);
	}
}

/* End of file modelLogin.php */
/* Location: ./application/models/modelLogin.php */
