<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	

	public function login($username,$password)
	{
		$this->db->select('username_adm, nama_adm, password_adm');
		$this->db->from('admin');
		$this->db->where('username_adm', $username);
		$this->db->where('password_adm', MD5($password));
		
		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return $query->result();
		} 
		else 
		{
			return false; 
		}
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


/* End of file login_m.php */
/* Location: ./application/models/login_m.php */