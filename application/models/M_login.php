<?php
class m_login extends CI_Model{
	
		function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pass=htmlspecialchars($this->input->post('pass',TRUE),ENT_QUOTES);
		
		$query=$this->db->query("SELECT * FROM tabel_user WHERE email='".$email."' AND pass='".MD5($pass)."'");
		foreach ($query->result() as $row) {
            $this->session->set_userdata('submit',TRUE);
            $this->session->set_userdata('id',$row->idtabel_user);
            $this->session->set_userdata('email',$row->email);
			if ($row->level=='Admin') {
				$this->session->set_userdata('akses','1');
				redirect('admin/beranda');
			} elseif ($row->level=='Karyawan'){
				$this->session->set_userdata('akses','2');
				redirect('karyawan/beranda');
			} elseif ($row->level=='Kepala Cabang'){
				$this->session->set_userdata('akses','3');
				redirect('kepalacabang/beranda');
			} elseif ($row->level=='Mitra'){
				$this->session->set_userdata('akses','4');
				redirect('mitra/beranda');
			}else{
				echo "keluar";
			}
		}
		echo $this->session->set_flashdata('msg','Email Atau Password Salah');
		redirect(base_url());
    }
}

