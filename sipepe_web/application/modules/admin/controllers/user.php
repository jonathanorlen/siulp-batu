<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {

	/**
	 * Index user for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('astrosession') == FALSE) {
			redirect(base_url('authenticate'));			
		}		
	}

	public function tambah()
	{
		$data['konten'] = $this->load->view('user/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'temp', 'required');
		$this->form_validation->set_rules('user', 'temp', 'required');        		      
		$this->form_validation->set_rules('pass', 'temp', 'required');        		      		


		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$menu['nama'] = $this->input->post("nama");
			$menu['jenis_kelamin'] = $this->input->post("jenis_kelamin");
			$menu['telp'] = $this->input->post("telp");
			$menu['alamat'] = $this->input->post("alamat");
			$menu['uname'] = $this->input->post("user");		
			$menu['upass'] = paramEncrypt($this->input->post("pass"));
			$menu['akses'] = implode("|", $this->input->post("akses_page"));
			$menu['status'] = '1';

			$this->db->insert("user", $menu);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function upload()
	{
		$data['konten'] = $this->load->view('user/upload', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('user/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('user/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('user/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'temp', 'required');
		$this->form_validation->set_rules('user', 'temp', 'required');  

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$menu['nama'] = $this->input->post("nama");
			$menu['jenis_kelamin'] = $this->input->post("jenis_kelamin");
			$menu['telp'] = $this->input->post("telp");
			$menu['alamat'] = $this->input->post("alamat");
			$menu['uname'] = $this->input->post("user");
			$menu['upass'] = paramEncrypt($this->input->post("pass"));
			$menu['akses'] = implode("|", $this->input->post("akses_page"));
			$menu['status'] = $this->input->post("status");
			$id 			    = $this->input->post("id");

			$this->db->update("user", $menu, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('user', array('id' => $key));
		echo '<div class="alert alert-success">Berhasil dihapus.</div>';    
	}
}

