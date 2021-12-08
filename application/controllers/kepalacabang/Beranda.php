<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='3')
        {
            $this->load->view('kepalacabang/header');
			$this->load->view('kepalacabang/beranda');
			$this->load->view('kepalacabang/footer');

        }else{
            $this->load->view('errors/403');
            
         }
		
	}
}
