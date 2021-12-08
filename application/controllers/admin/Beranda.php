<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='1')
        {
            $this->load->view('admin/header');
			$this->load->view('admin/beranda');
			$this->load->view('admin/footer');


        }else{
            $this->load->view('errors/403');
            
         }
		
	}
}
