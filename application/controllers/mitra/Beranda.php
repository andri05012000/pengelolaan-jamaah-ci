<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='4')
        {
            $this->load->view('mitra/header');
			$this->load->view('mitra/beranda');
			$this->load->view('mitra/footer');

        }else{
            $this->load->view('errors/403');
            
         }
		
	}
}
