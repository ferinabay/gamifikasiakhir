<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_m extends CI_Model {

	public function view()
	{
		$this->db->select("*");
			$query=$this->db->get('kompen');

			return $query->result();
	}

	public function view_row($id)
	{
		$this->db->select('a.*, b.*');
        $this->db->from('mahasiswa a');
        $this->db->join('kompen b', 'a.nim_mhs = b.nim');

		$this->db->where('id_kmp', $id);
        
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();

	}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */ }