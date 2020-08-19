<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class support extends MY_Controller {

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
	}

	/*public function tambah()
	{
		$data['konten'] = $this->load->view('kategori/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_kategori', 'temp', 'required');
		$this->form_validation->set_rules('status', 'temp', 'required');        

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['nama_kategori'] = $this->input->post("nama_kategori");
			$data['status'] = $this->input->post("status");
			$this->db->insert("kategori", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	*/

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('support/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	/*public function detail()
	{
		$data['konten'] = $this->load->view('kategori/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('kategori/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'temp', 'required');
		$this->form_validation->set_rules('nama_kategori', 'temp', 'required');
		$this->form_validation->set_rules('status', 'temp', 'required');        

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$data['nama_kategori'] 	= $this->input->post("nama_kategori");
			$data['status'] 		= $this->input->post("status");
			$id 			    	= $this->input->post("id");

			$this->db->update("kategori", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('kategori', array('id' => $key));
		echo '<div class="alert alert-success">kategori sudah dihapus.</div>';    
	} */
}
