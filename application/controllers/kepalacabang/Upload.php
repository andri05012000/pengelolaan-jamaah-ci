<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kepalacabang/Upload_model');
        $this->load->model('kepalacabang/Jamaah');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('akses')=='3')
        {
            $data['query'] = $this->Jamaah->tampil_data();
            $data['tabel_user'] = $this->Jamaah->tampil_data();
            $this->load->view('kepalacabang/header', $data);
            $this->load->view('kepalacabang/jamaah', $data);
            $this->load->view('kepalacabang/footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }


    public function add()
    {
        if($this->session->userdata('akses')=='3')
        {
             $this->load->view('kepalacabang/header');
            $this->load->view('kepalacabang/upload_create');
            $this->load->view('kepalacabang/footer');

        }else{
            $this->load->view('errors/403');
            
         }
    }
    
    public function create()
    {
        $data = array(
            'idtabel_user' => $this->input->post('idtabel_user'),
            'nama_jamaah' => $this->input->post('nama_jamaah'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nik' => $this->input->post('nik'),
            'no_rek' => $this->input->post('no_rek'),
            'nama_bank' => $this->input->post('nama_bank'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'verifikasi' => $this->input->post('verifikasi'),
            'tanggal' => $this->input->post('tanggal'),
        );
        
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        
        $this->Upload_model->insert($data);
        redirect('kepalacabang/Upload', $data);
    }

    public function edit($id)
    {
        if($this->session->userdata('akses')=='3')
        {
            $data['upload'] = $this->Upload_model->get_by_id($id);
            $this->load->view('kepalacabang/header', $data);
            $this->load->view('kepalacabang/upload_update', $data);
            $this->load->view('kepalacabang/footer', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }

    public function update()
    {
         $id = $this->input->post('id');
        $nama_jamaah = $this->input->post('nama_jamaah');
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $nik = $this->input->post('nik');
        $no_rek = $this->input->post('no_rek');
        $nama_bank = $this->input->post('nama_bank');
        $jenis_pembayaran = $this->input->post('jenis_pembayaran');
        $verifikasi = $this->input->post('verifikasi');

        

        $data = array(
           'nama_jamaah' => $nama_jamaah,
           'no_hp' => $no_hp,
           'jenis_kelamin' => $jenis_kelamin,
           'nik' => $nik,
           'no_rek' => $no_rek,
           'nama_bank' => $nama_bank,
           'jenis_pembayaran' => $jenis_pembayaran,
           'verifikasi' => $verifikasi,
        );

        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();

            $upload = $this->Upload_model->get_by_id($id);
            if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
                unlink('assets/upload/images/'.$upload->image);
            }

            $data['image'] = $image;
        }

        $this->Upload_model->update($data, $id);
        redirect('kepalacabang/Upload');
    }

    private function _do_upload()
    {
        $image_name = time().'-'.$_FILES["image"]['name'];

        $config['upload_path'] 		= 'assets/upload/images/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size'] 		= 100000;
        $config['max_widht'] 		= 100000;
        $config['max_height']  		= 100000;
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('kepalacabang/Upload');
        }
        return $this->upload->data('file_name');
    }

    public function delete($id)
    {
        $upload = $this->Upload_model->get_by_id($id);
        if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
            unlink('assets/upload/images/'.$upload->image);
        }
        $this->Upload_model->delete($id);
        redirect('kepalacabang/Upload');
    }

    public function detail($id)
    {
        if($this->session->userdata('akses')=='3')
        {
            $data['upload'] = $this->Upload_model->get_by_id($id);
            $this->load->view('admin/detail', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }
}
