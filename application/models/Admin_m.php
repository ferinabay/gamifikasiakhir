<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public  function getMhsKontenArray()
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.id_ktg, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public  function getMhsKontenProsesArray()
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.id_ktg, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');
        $this->db->where('mhs_konten.status_mk', 'Proses');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public  function getMhsKontenDiterimaArray()
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.id_ktg, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');
        $this->db->where('mhs_konten.status_mk', 'Diterima');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public  function getMhsKontenDiunggahArray()
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.id_ktg, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');
        $this->db->where('mhs_konten.status_mk', 'Diunggah');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }
    
    public  function getMhsKontenDitolakArray()
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.id_ktg, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');
        $this->db->where('mhs_konten.status_mk', 'Ditolak');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getTemaUsed()
    {
        $this->db->select('mahasiswa.nim_mhs, penukaran.nim_mhs, mahasiswa.nama_mhs, 
        penukaran.kategori, penukaran.tgl_penukaran, penukaran.poin, penukaran.penerima');
        $this->db->from('penukaran');
        $this->db->join('mahasiswa', 'mahasiswa.nim_mhs = penukaran.nim_mhs');
        $this->db->where('penukaran.kategori', 'TEMA');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getFotoProfilUsed()
    {
        $this->db->select('mahasiswa.nim_mhs, penukaran.nim_mhs, mahasiswa.nama_mhs, 
        penukaran.kategori, penukaran.tgl_penukaran, penukaran.poin, penukaran.penerima');
        $this->db->from('penukaran');
        $this->db->join('mahasiswa', 'mahasiswa.nim_mhs = penukaran.nim_mhs');
        $this->db->where('penukaran.kategori', 'PP');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public  function getWebKontenArray()
    {
        $this->db->select('a.id_wk, a.judul_wk, b.id_ktg, b.nama_ktg, a.isi_wk, a.tgl_wk ');
        $this->db->from('web_konten a');
        $this->db->join('kategori b', 'a.id_ktg = b.id_ktg');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    //MODEL UNTUK UPDATE RUBAH STATUS KONTEN MAHASISWA
    public function updateSt($id, $mhs)
    {
        $point = 0;
        $poin2 = 0;
        foreach ($mhs as $s) {
            $point = $s['poin_total'];
            $poin2 = $s['poin_mhs'];

            $nim = $s['nim_mhs'];
        }

        $object = array('status_mk' => $this->input->post('status'));

        if ($this->input->post('status') == 'Diterima') {
            $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_total' => $point + 5]);
            $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_mhs' => $poin2 + 5]);
        }

        $this->db->where('id_mk', $id);
        $this->db->update('mhs_konten', $object);
    }

    //MODEL UNTUK UPDATE RUBAH STATUS KONTEN MAHASISWA
    public function updateSt22($id, $mhs)
    {
        $point = 0;
        $poin2 = 0;
        foreach ($mhs as $s) {
            $point = $s['poin_total'];
            $poin2 = $s['poin_mhs'];

            $nim = $s['nim_mhs'];
        }

        $object = array('status_mk' => 'Diunggah');

        // if($this->input->post('status')=='Diunggah')

        // {
        //     $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_total' => $point +1]);
        //     $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_mhs' => $poin2 +1]);
        // }

        $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_total' => $point + 1]);
        $this->db->where('nim_mhs', $nim)->update('mahasiswa', ['poin_mhs' => $poin2 + 1]);

        $this->db->where('id_mk', $id);
        $this->db->update('mhs_konten', $object);
    }

    //MODEL UNTUK UPDATE RUBAH STATUS KONTEN MAHASISWA
    public function updateMhsValid($id, $mhs)
    {
        $object = array('status_mhs' => $this->input->post('status'));

        $this->db->where('nim_mhs', $id);
        $this->db->update('mahasiswa', $object);
    }


    public function getRev_kontenMhs($id)
    {
        $this->db->select('mhs_konten.id_mk, mhs_konten.judul_mk, kategori.nama_ktg,  mhs_konten.ringkasan_mk, mhs_konten.isi_mk, mhs_konten.tgl_mk, mhs_konten.status_mk, mahasiswa.nim_mhs, mahasiswa.nama_mhs, mahasiswa.status_mhs');
        $this->db->from('mhs_konten');
        $this->db->join('kategori', 'mhs_konten.id_ktg = kategori.id_ktg');
        $this->db->join('mahasiswa', 'mhs_konten.nim_mhs = mahasiswa.nim_mhs');

        $this->db->where('id_mk', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function insertKontenAdm()
    {
        $object = array(
            'id_wk' => $this->input->post('id'),
            'judul_wk' => $this->input->post('judul'),
            'id_ktg' => $this->input->post('kategori'),
            'isi_wk' => $this->input->post('isi'),
            'tgl_wk' =>  $this->input->post('tgl'),
            'username_adm' => $this->input->post('username')
        );

        $this->db->insert('web_konten', $object);
    }

    public function insertNotif($mhs, $message)
    {

        foreach ($mhs as $s) {
            $nim = $s['nim_mhs'];
        }

        $object = array(
            'id_mk' => $this->uri->segment(3),
            'nim_mhs' => $nim,
            'message' => $message,
        );
        $this->db->set('creation_time', 'NOW()', FALSE);
        $this->db->insert('notif', $object);
    }

    public function deleteKontenAdm($id)
    {
        $this->db->where('id_wk', $id);
        $this->db->delete('web_konten');
    }

    public  function getGetKontenAdm($id)
    {
        $this->db->select('a.id_wk, a.judul_wk, b.id_ktg, b.nama_ktg, a.isi_wk, a.tgl_wk, c.username_adm');
        $this->db->from('web_konten a');
        $this->db->join('kategori b', 'a.id_ktg = b.id_ktg');
        $this->db->join('admin c', 'c.username_adm = a.username_adm');

        $this->db->where('id_wk', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    //LIST PENUKARAN
    public function getListPenukaran()
    {
        $this->db->select('*');
        $this->db->from('list_penukaran');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getPenukaranId($id)
    {
        $this->db->select('*');
        $this->db->from('list_penukaran');

        $this->db->where('id_listP', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }
    public function updateModelPenukaran($id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2048';
        $config['max_width']  = '2048';
        $config['max_height']  = '1536';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('picture')) {
            $object = array(
                'nama_listP' => $this->input->post('nama_listP'),
                'keterangan' => $this->input->post('keterangan'),
                'poin' => $this->input->post('poin')
            );
            $this->db->where('id_listP', $id);
            $this->db->update('list_penukaran', $object);
        } else {
            $object = array('nama_listP' => $this->input->post('nama_listP'));
            $object = array('keterangan' => $this->input->post('keterangan'));
            $object = array('poin' => $this->input->post('poin'));
            $object = array('picture' => $this->upload->data('file_name'));
            $this->db->where('id_listP', $id);
            $this->db->update('list_penukaran', $object);
        }
    }

    //KATEGORI
    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getKategoriId($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');

        $this->db->where('id_ktg', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }


    public function updateModelKategori($id)
    {
        $object = array('nama_ktg' => $this->input->post('nama_ktg'));

        $this->db->where('id_ktg', $id);
        $this->db->update('kategori', $object);
    }

    //KOMPEN
    public function getKompenArray()
    {
        $this->db->select('*');
        $this->db->from('kompen');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    //BADGES
    public function getBadges()
    {
        $this->db->select('*');
        $this->db->from('badges');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getBadgesId($id)
    {
        $this->db->select('*');
        $this->db->from('badges');

        $this->db->where('id_bdg', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function updateModelBadges($id)
    {
        $object = array(
            'nama_bdg' => $this->input->post('nama_bdg'),
            'maxpoin_bdg' => $this->input->post('maxpoin_bdg')
        );

        $this->db->where('id_bdg', $id);
        $this->db->update('badges', $object);
    }

    //POIN KOMPEN
    public function getPoinKompen()
    {
        $this->db->select('a.tgl_kp, a.id_kp, a.poin_kp, b.username_adm');
        $this->db->from('poin_kompen a');
        $this->db->join('admin b', 'a.username_adm = b.username_adm');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getPoinKompenId($id)
    {
        $this->db->select('a.id_kp, a.tgl_kp,  a.poin_kp, b.username_adm');
        $this->db->from('poin_kompen a');
        $this->db->join('admin b', 'a.username_adm = b.username_adm');

        $this->db->where('id_kp', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function updateModelKp($id)
    {
        $now = date('Y-m-d');

        $object = array(
            'tgl_kp' => $now,
            'poin_kp' => $this->input->post('poin_kp'),
            'username_adm' => $this->input->post('username_adm')
        );

        $this->db->where('id_kp', $id);
        $this->db->update('poin_kompen', $object);
    }

    //MAHASISWA
    public function getMahasiswa()
    {
        $data = $this->db->get('mahasiswa'); //mengambil seluruh data
        return $data->result_array();
    }

    public function getMahasiswaBlmValid()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $this->db->where('status_mhs', 'Belum Valid');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getMahasiswaValid()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $this->db->where('status_mhs', 'Valid');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function getMahasiswaId($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $this->db->where('nim_mhs', $id);

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    //ADMIN
    public function getAdmin()
    {
        $this->db->select('*');
        $this->db->from('admin');

        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    //HITUNG POIN INIII
    public function getDataMhs()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');


        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }


    public function hitungStatus($id)
    {
        $this->db->select('COUNT(status_mk)');
        $this->db->from('mhs_konten', $id);
        $this->db->where('status_mk = Diterima');


        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function updatePoinMhs($id)
    {
        $object = array('poin_mhs' => $this->input->post('poin'));

        $this->db->where('id_mhs', $id);
        $this->db->update('mahasiswa', $object);
    }

    public function updateModelValidMhs($id)
    {
        $object = array('status_mhs' => 'Valid');

        $this->db->where('nim_mhs', $id);
        $this->db->update('mahasiswa', $object);
    }

    public function insertKategori()
    {
        $object = array('nama_ktg' => $this->input->post('nama_ktg'));

        $this->db->insert('kategori', $object);
    }

    public function editKontenAdm($id)
    {
        $object = array(
            'judul_wk' => $this->input->post('judul'),
            'id_ktg' => $this->input->post('kategori'),
            'isi_wk' => $this->input->post('isi'),
            'tgl_wk' =>  $this->input->post('tgl'),
            'username_adm' => $this->input->post('username')
        );

        $this->db->where('id_wk', $id);
        $this->db->update('web_konten', $object);
    }

    public function autoId()
    {
        $q = $this->db->query("select max(mid(id_wk,4,5)) as maksimal from web_konten");
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

    public function insertAdmin()
    {
        $object = array(
            'username_adm' => $this->input->post('username_adm'),
            'nama_adm' => $this->input->post('nama_adm'),
            'password_adm' => MD5($this->input->post('password_adm'))
        );

        $this->db->insert('admin', $object);
    }

    public function getData($Table)
    {
        return $this->db->get($Table);
    }
    public function UpdateData($tabel, $object, $where)
    {
        $this->db->update($tabel, $object, $where);
    }

    //count data dashboard admin
    public function getCountMhs()
    {
        $sql = "SELECT count(nim_mhs) AS nim_mhs FROM mahasiswa";
        $result = $this->db->query($sql);
        return $result->row()->nim_mhs;
    }
    public function getCountMhsBlmVerif()
    {
        $sql = "SELECT count(nim_mhs) AS nim_mhs FROM mahasiswa WHERE status_mhs='Belum Valid'";
        $result = $this->db->query($sql);
        return $result->row()->nim_mhs;
    }
    public function getCountMhsVerif()
    {
        $sql = "SELECT count(nim_mhs) AS nim_mhs FROM mahasiswa WHERE status_mhs='Valid'";
        $result = $this->db->query($sql);
        return $result->row()->nim_mhs;
    }
    public function getCountAdmin()
    {
        $sql = "SELECT count(username_adm) AS username_adm FROM `admin`";
        $result = $this->db->query($sql);
        return $result->row()->username_adm;
    }
    public function getCountKontenMhs()
    {
        $sql = "SELECT count(id_mk) AS id_mk FROM mhs_konten";
        $result = $this->db->query($sql);
        return $result->row()->id_mk;
    }
    public function getCountKontenMhsDiterima()
    {
        $sql = "SELECT count(id_mk) AS id_mk FROM mhs_konten WHERE status_mk='Diterima'";
        $result = $this->db->query($sql);
        return $result->row()->id_mk;
    }
    public function getCountKontenMhsDiunggah()
    {
        $sql = "SELECT count(id_mk) AS id_mk FROM mhs_konten WHERE status_mk='Diunggah'";
        $result = $this->db->query($sql);
        return $result->row()->id_mk;
    }
    public function getCountKontenMhsProses()
    {
        $sql = "SELECT count(id_mk) AS id_mk FROM mhs_konten WHERE status_mk='Proses'";
        $result = $this->db->query($sql);
        return $result->row()->id_mk;
    }
    public function getCountKontenMhsDitolak()
    {
        $sql = "SELECT count(id_mk) AS id_mk FROM mhs_konten WHERE status_mk='Ditolak'";
        $result = $this->db->query($sql);
        return $result->row()->id_mk;
    }

    //MODEL UNTUK GET NOTIF
    public function getNotifAdmin()
    {
        $this->db->select('*');
        $this->db->from('notif_admin');
        $this->db->order_by("creation_time", "desc");
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result_array();
    }

    public function updateStatusRead($id)
    {
        $object = array(
            'be_read' => true
        );

        $this->db->where('id', $id);
        $this->db->update('notif_admin', $object);
    }

    public function countNotif()
    {
        $this->db->select('*');
        $this->db->from('notif_admin');

        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function countNotifRead()
    {
        $this->db->select('*');
        $this->db->from('notif_admin');

        $this->db->where('be_read', true);
        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function countNotifUnread()
    {
        $this->db->select('*');
        $this->db->from('notif_admin');

        $this->db->where('be_read', false);
        $num_results = $this->db->count_all_results();
        return $num_results;
    }
}
