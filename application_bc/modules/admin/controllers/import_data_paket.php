<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class import_data_paket extends MY_Controller {

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
	{
		$data['konten'] = $this->load->view('import_data_paket/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function tambah()
	{
		$data['konten'] = $this->load->view('import_data_paket/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('isi', 'temp', 'required');
		$this->form_validation->set_rules('id_ym', 'temp', 'required');        

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['isi'] = $this->input->post("isi");
			$data['id_ym'] = $this->input->post("id_ym");
			$this->db->insert("contact", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('contact/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('contact/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('contact/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
					

			
			$data['isi'] = $this->input->post("isi");
			$data['telepon'] = $this->input->post("telepon");
			$data['handphone'] = $this->input->post("handphone");
			$data['email'] = $this->input->post("email");
			$data['fb'] = $this->input->post("fb");
			$data['ig'] = $this->input->post("ig");
			$data['pin_bb'] = $this->input->post("pin_bb");
			$data['id_ym'] = $this->input->post("id_ym"); 
			$data['status'] = $this->input->post("status"); 
			$id 			    = $this->input->post("id");
			$this->db->update("contact", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('contact', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>';    
	}
}
