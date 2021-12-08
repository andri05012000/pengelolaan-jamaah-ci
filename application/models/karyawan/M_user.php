<?php 
 
class m_user extends CI_Model{
	
	function tampil_data(){
		return $this->db->query("SELECT * FROM tabel_user WHERE level IN ('Mitra', 'Kepala Cabang') ");

    }
    
    function tambah_data() {

		$data = array(
			'nama' => $this->input->post('nama'),
		    'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nik' => $this->input->post('nik'),
			'email' => $this->input->post('email'),
			'pass' => MD5($this->input->post('pass')),
			'level' => $this->input->post('level'),
			'no_rek' => $this->input->post('no_rek'),
			'nama_bank' => $this->input->post('nama_bank'),
			'jumlah_mitra' => $this->input->post('jumlah_mitra'),
			'jumlah_jamaah' => $this->input->post('jumlah_jamaah'),
			'jumlah_bus' => $this->input->post('jumlah_bus')
			);
		$this->db->insert('tabel_user', $data);
		redirect('karyawan/user');
    }
  
    function ubah_data ($idtabel_user) {
 
		$data = array(
			'nama' => $this->input->post('nama'),
		    'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nik' => $this->input->post('nik'),
			'email' => $this->input->post('email'),
			'pass' => MD5($this->input->post('pass')),
			'level' => $this->input->post('level'),
			'no_rek' => $this->input->post('no_rek'),
			'nama_bank' => $this->input->post('nama_bank'),
			'jumlah_mitra' => $this->input->post('jumlah_mitra'),
			'jumlah_jamaah' => $this->input->post('jumlah_jamaah'),
			'jumlah_bus' => $this->input->post('jumlah_bus')
			);
		$this->db->where(array('idtabel_user' => $idtabel_user ));
		$this->db->update('tabel_user', $data);
		redirect('karyawan/user');
	}
	
	function hapus_data ($idtabel_user) {
		$this->db->where(array('idtabel_user' => $idtabel_user));
		$this->db->delete('tabel_user');
		redirect('karyawana/user');
    }

}