<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs_m extends CI_Model
{

    public function insertKontenMhs()
    {
        $object = array(
            'id_mk'         => $this->input->post('id'),
            'judul_mk'      => $this->input->post('judul'),
            'id_ktg'        => $this->input->post('kategori'),
            'ringkasan_mk'  => $this->input->post('ringkasan'),
            'isi_mk'        => $this->input->post('isi'),
            'status_mk'     => 'Proses',
            'tgl_mk'        => $this->input->post('tgl'),
            'nim_mhs'       => $this->input->post('nim')
        );

        $this->db->insert('mhs_konten', $object);
    }

    public function getMahasiswa($nim)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $this->db->where('nim_mhs', $nim);
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function updatePoinKompen($nim, $sisa)
    {
        // $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_mhs' => $sisa]);

        $object = array('poin_mhs' => $sisa);

        $this->db->where('nim_mhs', $nim);
        $this->db->update('mahasiswa', $object);
    }

    public function getPoinKompen()
    {
        $this->db->select('poin_kp');
        $this->db->from('poin_kompen');
        $this->db->where('id_kp = 1');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function insertTbKompen()
    {
        $object = array(
            'nama_pengajar'    => $this->input->post('pengajar'),
            'nip'           => $this->input->post('nip'),
            'nama_mhs'      => $this->input->post('nama_mhs'),
            'nim'           => $this->input->post('nim'),
            'kelas'         => $this->input->post('kelas'),
            'semester'      => $this->input->post('smt'),
            'jumlah_jam'    => $this->input->post('tukarkompen')
        );

        $this->db->insert('kompen', $object);
        $a = $this->db->query("SELECT id_kmp FROM kompen ORDER BY id_kmp desc LIMIT 1");

        $object2 = array(
            'nim_mhs'           => $this->input->post('nim'),
            'kategori'          => 'KOMPEN',
            'id_kmp'            => $a->row()->id_kmp,
            'tgl_penukaran'     => date('Y-m-d H:i:s')
        );
        $this->db->insert('penukaran', $object2);
    }

    public function upProfil($nim, $object)
    {
        $this->db->where('nim_mhs', $nim);
        return $this->db->update('mahasiswa', $object);
    }

    public function deleteKontenMhs1($id)
    {
        $this->db->where('id_mk', $id);
        $this->db->delete('notif');

        $this->db->where('id_mk', $id);
        $this->db->delete('mhs_konten');
    }

    public function getKontenMhs($id)
    {
        $this->db->select('a.*, b.*, c.*');
        $this->db->from('mhs_konten a');
        $this->db->join('kategori b', 'a.id_ktg = b.id_ktg');
        $this->db->join('mahasiswa c', 'c.nim_mhs = a.nim_mhs');

        $this->db->where('id_mk', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function editKontenMhs($id)
    {
        $object = array(
            'judul_mk'      => $this->input->post('judul'),
            'id_ktg'        => $this->input->post('kategori'),
            'ringkasan_mk'  => $this->input->post('ringkasan'),
            'isi_mk'        => $this->input->post('isi'),
            'status_mk'     => 'Proses',
            'tgl_mk'        => $this->input->post('tgl'),
            'nim_mhs'       => $this->input->post('nim')
        );

        $this->db->where('id_mk', $id);
        $this->db->update('mhs_konten', $object);
    }


    public function autoId()
    {
        $q = $this->db->query("select max(mid(id_mk,4,5)) as maksimal from mhs_konten");
        $id = "";
        foreach ($q->result() as $row) {
            $id = $row->maksimal + 1;
        }

        $jml = strlen($id);
        $nol = "";
        for ($i = 1; $i <= 4 - $jml; $i++) {
            $nol = $nol . "0";
        }
        return $nol . $id;
        // return $id;
    }

    public function insData($t, $i)
    {
        $this->db->insert($t, $i);
    }
    public function get($t)
    {
        return $this->db->get($t);
    }
    public function gw($t, $w)
    {
        $this->db->where($w);
        return $this->db->get($t);
    }
    public function getWhere($tabel, $col, $val)
    {
        $this->db->where($col, $val);
        return $this->db->get($tabel);
    }
    public function getWhereO($tabel, $col, $val, $t, $d)
    {
        $this->db->where($col, $val);
        $this->db->order_by($t, $d);
        return $this->db->get($tabel);
    }
    public function getDataLimit($Table, $limit, $titel, $ps)
    {
        $this->db->order_by($titel, $ps);
        return $this->db->get($Table, $limit);
    }
    public function UpdateData($tabel, $object, $where)
    {
        $this->db->update($tabel, $object, $where);
    }

    //MODEL UNTUK GET NOTIF
    public function getNotif($id)
    {
        $this->db->select('*');
        $this->db->from('notif');
        $this->db->order_by("creation_time", "desc");
        $this->db->where('nim_mhs', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function countNotif($id)
    {
        $this->db->select('*');
        $this->db->from('notif');

        $this->db->where('nim_mhs', $id);
        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function getNama($id)
    {
        $this->db->select('nama_mhs');
        $this->db->from('mahasiswa');
        $this->db->where('nim_mhs', $id);

        $data = $this->db->get();
        return $data->result();
    }
    public function insertNotif($mhs, $message)
    {
            $object = array(
                'nim_mhs' => $mhs,
                'message' => $message,
            );
            $this->db->set('creation_time', 'NOW()', FALSE);
            $this->db->insert('notif', $object);
       
    }
    public function insertNotifAdmin($message)
    {
        $object = array(
            'message' => $message,
            'be_read' => false,
        );
        $this->db->set('creation_time', 'NOW()', FALSE);
        $this->db->insert('notif_admin', $object);
    }
    public function gwj($tabel, $tj, $join, $where)
    {
        $this->db->join($tj, $join, 'left');
        $this->db->where($where);
        return $this->db->get($tabel); 
    }
    public function gJoin()
    {
        $this->db->join('list_penukaran', 'list_penukaran.id_listP = penukaran.id_listP', 'left');
        $this->db->join('kompen', 'kompen.id_kmp = penukaran.id_kmp', 'left');
        $this->db->order_by('penukaran.tgl_penukaran', 'desc');
        return $this->db->get('penukaran');
    }
}
