<?php
class M_reset extends CI_Model{

	function update_reset_key($email, $reset_key){
        $this->db->where('email', $email);
        $data = array('reset_password'=>$reset_key);
        $this->db->update('tabel_user', $data);
        if($this->db->affected_rows()>0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
	}

    public function reset_password($reset_key, $pass)
        {
            $this->db->where('reset_password', $reset_key);
            $data = array('pass' => $pass);
            $this->db->update('tabel_user', $data);
            return ($this->db->affected_rows()>0 )? TRUE:FALSE;
        }


        public function check_reset_key($reset_key)
        {
            $this->db->where('reset_password', $reset_key);
            $this->db->from('tabel_user');
            return $this->db->count_all_results();
        }
	
}