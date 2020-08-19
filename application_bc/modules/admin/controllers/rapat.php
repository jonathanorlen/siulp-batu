<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelompok_kerja extends MY_Controller {

	/**
	 * Index Page for this controller.
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

	public function content()
	{	$data['menu'] = 'rapat';
		$data['konten'] = $this->load->view('kelompok_kerja/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'rapat';
		$data['konten'] = $this->load->view('kelompok_kerja/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['pokja'] = $this->input->post("pokja");
		$data['nama'] = $this->input->post("nama");
		$data['nip'] = $this->input->post("nip");
		$data['pangkat'] = $this->input->post("pangkat");
		$data['jabatan'] = $this->input->post("jabatan");  

		$this->db->insert("master_kelompok_kerja", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/kelompok_kerja/content');    
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('kelompok_kerja/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'rapat';
		$data['konten'] = $this->load->view('kelompok_kerja/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'rapat';
		$data['konten'] = $this->load->view('kelompok_kerja/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
			$data['pokja'] = $this->input->post("pokja");
			$data['nama'] = $this->input->post("nama");
			$data['nip'] = $this->input->post("nip");
			$data['pangkat'] = $this->input->post("pangkat");
			$data['jabatan'] = $this->input->post("jabatan");
			$id 			    = $this->input->post("id");
			$this->db->update("master_kelompok_kerja", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
			header('location:'.base_url().'admin/kelompok_kerja/content');
		
	}

	 public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_kelompok_kerja', array('id' => $id));
    }
}
