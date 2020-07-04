<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_c extends CI_Controller {

	public function __construct()
	{
		#code ..
		parent::__construct();
		$this->load->model('cetak_m');
		$this->load->library('dompdf_gen');
		$this->load->helper('url','file');
	}

	public function prev($id)
	{
		$data['datakompen']=$this->cetak_m->view_row($id);
		$this->load->view('mahasiswa/preview', $data);
	}

	public function cetakpdf($id)
	{
		$data['datakompen']=$this->cetak_m->view_row($id);
		$this->load->view('mahasiswa/print', $data);

		$paper_size 	= 'A4';
		$orientation 	= 'potrait';

		$html=$this->output->get_output();

		$dompdf=new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("File Kompen.pdf");

		unset($html);
		unset($dompdf);
	}

}

/* End of file cetak.php */
/* Location: ./application/controllers/cetak.php */