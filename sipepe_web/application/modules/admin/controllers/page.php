<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends MY_Controller {

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
		$data['konten'] = $this->load->view('page/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_page', 'temp', 'required');
		$this->form_validation->set_rules('isi_page', 'temp', 'required');        		      


		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$menu['nama_menu'] = $this->input->post("nama_page");
			$menu['status'] = '0';

			$this->db->insert("menu", $menu);
			$id_menu = $this->db->insert_id();
			
			$data['nama_page'] = $this->input->post("nama_page");
			$data['isi_page'] = $this->input->post("isi_page");						
			$data['menu'] = $id_menu;
			$name_foto = $this->input->post("foto_name_upload");		
			$foto = '';
			for($i=0; $i < count($name_foto); $i++)
			{				
				$foto = $name_foto[$i].'|'.$foto;				

			} 			

			$data['foto'] = $foto;
			$this->db->insert("page", $data);

			$id_page = $this->db->insert_id();
			
			$link['link'] = 'detail_page/'.$id_page; 
			$this->db->update("menu", $link, "id = " . $id_menu);

			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function upload()
	{
		$data['konten'] = $this->load->view('page/upload', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('page/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('page/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('page/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'temp', 'required');
		$this->form_validation->set_rules('nama_page', 'temp', 'required');
		$this->form_validation->set_rules('isi_page', 'temp', 'required');        		    

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$data['nama_page'] 		= $this->input->post("nama_page");
			$data['isi_page'] = $this->input->post("isi_page"); 
			$data['status'] = $this->input->post("status"); 
			$id 			    = $this->input->post("id");
			
			$get_old_file = $this->db->query("SELECT * FROM page where id='$id'");
			$hasil_old_file = $get_old_file->row();
			$string_file = $hasil_old_file->foto;
			list($name_old_file) = (explode('|',$string_file));			

			$name_foto = $this->input->post("foto_name_upload");

			if (!empty($name_foto)) {
				$path = $_SERVER['DOCUMENT_ROOT'].'/SC/component/upload/foto/uploads/'.$name_old_file;
				
				//unlink($path);
			}

			$foto = '';
			for($i=0; $i < count($name_foto); $i++)
			{				
				$foto = $name_foto[$i].'|'.$foto;				
			} 
			
			if (!empty($name_foto)) {
				$data['foto'] = $foto;
			}

			$this->db->update("page", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('page', array('id' => $key));
		echo '<div class="alert alert-success">Berhasil dihapus.</div>';    
	}
}
