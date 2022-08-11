<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModal extends CI_Model{

	public function login($USERNAME, $PASSWORD)
    {
        $this->db->where('U_USERNAME', $USERNAME);
        $this->db->where('U_PASSWORD', $PASSWORD);
        $query = $this->db->get('dash_users');

        if($query->num_rows() == 1) {
            return $query->row();
			}
        return false;
    }
	  
	  
}


?>