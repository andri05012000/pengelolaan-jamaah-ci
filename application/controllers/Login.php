<?php  
class Login extends CI_Controller{

		function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('M_reset');
	}

	function index(){

		if($this->session->userdata('akses')=='1'){
			redirect('admin/beranda');
		}elseif($this->session->userdata('akses')=='2'){
			redirect('karyawan/beranda');
		}elseif($this->session->userdata('akses')=='3'){
			redirect('kepalacabang/beranda');
		}elseif($this->session->userdata('akses')=='4'){
			redirect('mitra/beranda');
		}else{
		$this->load->view('login');
		}
	}

	function auth(){
        $this->m_login->auth();
    }

    function logout(){
        $this->session->sess_destroy();
         redirect(site_url('Login'));
    }

    function email_password_validation(){
		$this->form_validation->set_rules('email','Email', 'required|valid_email|trim');
		if($this->form_validation->run()){


			$email= $this->input->post('email');
			$reset_key = random_string('alnum', 50);

			if($this->M_reset->update_reset_key($email,$reset_key))
			{
				$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "5";
				$config['smtp_user']= "reizaadytyas@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "andri270700"; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($this->input->post('email'));
				$this->email->subject("Reset your password");
 
				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message .= "<a href='".site_url('https://ujicobaandri.000webhostapp.com/login/reset_password/'.$reset_key)."'>klik reset password</a>";
				$this->email->message($message);
				
				if($this->email->send())
				{
					echo "silahkan cek email <b>".$this->input->post('email').'</b> untuk melakukan reset password';
				}else
				{
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}
				
				echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
			}else{
				die("Email yang anda masukan belum terdaftar");
			}
		}else{
			$this->load->view('reset_password_email');
		}
	}


	public function reset_password(){
		$reset_key = $this->uri->segment(3);
		
		if(!$reset_key){
			die('Jangan Dihapus');
		}

		if($this->M_reset->check_reset_key($reset_key) == 1)
		{
			$this->load->view('reset_password');
		} else{
			die("reset key salah");
		}
	
	}

	public function reset_password_validation(){
		$this->form_validation->set_rules('pass', 'Pass', 'required|min_length[6]|matches[retype_password]');
		$this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[6]|matches[pass]');

		if($this->form_validation->run())
		{

			$reset_key = $this->input->post('reset_key');
			$pass = MD5($this->input->post('pass'),PASSWORD_DEFAULT);

			if($this->M_reset->reset_password($reset_key, $pass)){
				echo "Password anda telah berhasil diubah";
			}else{
				echo "error";
			}
		
		}else{
			$this->load->view('reset_password');
		}
	}
}
?>
