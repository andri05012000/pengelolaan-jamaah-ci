<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
    parent::__construct();		
    $this->load->model('mitra/m_user');
    $this->load->helper('url');
	}


	public function index()
	{
		if($this->session->userdata('akses')=='4')
		{
            $data['query'] = $this->m_user->tampil_data();
            $data['tabel_user'] = $this->m_user->tampil_data();

			$this->load->view('mitra/header', $data);
			$this->load->view('mitra/user', $data);
			$this->load->view('mitra/footer', $data);

		}else{
            $this->load->view('errors/403');
            
         }
	}

	public function add()
	{
        $idtabel_user = $this->input->post('idtabel_user');

        if(empty($idtabel_user)) {
                $this->m_user->tambah_data();

        }else {
                $this->m_user->ubah_data($idtabel_user);
		}
	}

	public function delete()
	{
        $idtabel_user = $this->input->post('idtabel_user1');
        $this->m_user->hapus_data($idtabel_user);
	}
}
