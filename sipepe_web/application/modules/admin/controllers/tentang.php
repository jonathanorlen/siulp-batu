<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentang extends MY_Controller {

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

	public function tambah()
	{
		$data['konten'] = $this->load->view('tentang/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');
		

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['keterangan'] = $this->input->post("keterangan");
			$data['status'] = '1';
			$this->db->insert("tentang", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('tentang/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('tentang/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('tentang/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$data['keterangan'] = $this->input->post("keterangan");
			$data['status'] = $this->input->post("status"); 
			$name_foto = $this->input->post("foto_name_upload");		
			$foto = '';
			for($i=0; $i < count($name_foto); $i++)
			{				
				$foto = $name_foto[$i].'|'.$foto;				

			} 			
			if($name_foto!=''){
				$data['image'] = $foto;
			}
			
			$id 			    = $this->input->post("id");
			$this->db->update("tentang", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('tentang', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>';    
	}
}
