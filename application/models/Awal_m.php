<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal_m extends CI_Model
{

    public function getArtikel($id)
    {
        $this->db->select('a.id_mk as id, a.judul_mk as judul, b.nama_mhs as penulis, a.tgl_mk as tanggal, a.isi_mk as isi');
        $this->db->from('mhs_konten a');
        $this->db->join('mahasiswa b', 'a.nim_mhs = b.nim_mhs');

        // $this->db->where('status_mk="Diunggah"');
        $this->db->where('a.id_mk', $id);

        $data = $this->db->get()->result(); //mengambil seluruh data
        $subQuery1 = $this->db->last_query();



        $this->db->select('c.id_wk as id, c.judul_wk as judul, d.nama_adm as penulis, c.tgl_wk as tanggal, c.isi_wk as isi');
        $this->db->from('web_konten c');
        $this->db->join('admin d', 'c.username_adm = d.username_adm');

        $this->db->where('c.id_wk', $id);

        $data = $this->db->get()->result(); //mengambil seluruh dat
        $subQuery2 = $this->db->last_query();


        $data = $this->db->query("$subQuery1 UNION $subQuery2");

        // var_dump($id);

        // $this->db->from("($subQuery1 UNION $subQuery2)");
        // $this->db->get();

        return $data->result_array();
    }

    public function komen($id)
    {
        $this->db->join('mhs_konten', 'komentar.id_mk = mhs_konten.id_mk', 'left');
        $this->db->join('mahasiswa', 'komentar.nim_mhs = mahasiswa.nim_mhs', 'left');
        $this->db->where('komentar.id_mk', $id);
        return $this->db->get('komentar');
    }

    public function ins($tabel, $obj)
    {
        $this->db->insert($tabel, $obj);
    }

    public function CountdataId($where, $Table)
    {
        $this->db->where($where);
        $Var = $this->db->get($Table);
        return $Var->num_rows();
    }

    public function getdataId($where, $Table)
    {
        $this->db->where($where);
        return $this->db->get($Table);
    }
    public function UpdateData($tabel, $object, $where)
    {
        $this->db->update($tabel, $object, $where);
    }



    /* End of file cetak_model.php */
    /* Location: ./application/models/cetak_model.php */
}
