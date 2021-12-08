<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='2')
        {
            $this->load->view('karyawan/header');
			$this->load->view('karyawan/beranda');
			$this->load->view('karyawan/footer');

        }else{
            $this->load->view('errors/403');
            
         }
		
	}
}
