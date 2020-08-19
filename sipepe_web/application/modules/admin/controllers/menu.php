<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends MY_Controller {

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
		$data['konten'] = $this->load->view('menu/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_menu', 'temp', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {

			$status_menu = $this->input->post("status_menu");

			if ($status_menu == 'menu_utama') {				
				$data['nama_menu'] = $this->input->post("nama_menu");
				$data['link'] = $this->input->post("link");
				$this->db->insert("menu", $data);
				echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
			}

			if ($status_menu == 'sub_menu') {
				$get_menu = $this->db->get_where('menu', array('id' => $this->input->post("menu_induk")));
				$hasil_get = $get_menu->result_array();
				$menu['menu_induk'] = 'induk';
				$this->db->update("menu", $menu, "id = " . $this->input->post("menu_induk"));

				$data['menu_induk'] = $this->input->post("menu_induk");
				$data['nama_menu'] = $this->input->post("nama_menu");
				$data['link'] = $this->input->post("link");
				$this->db->insert("menu", $data);
				echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
			}

			
		}
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('menu/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('menu/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('menu/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_menu', 'temp', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$id 			    = $this->input->post("id");

			$status_menu = $this->input->post("status_menu");

			if ($status_menu == null) {
				$data['nama_menu'] = $this->input->post("nama_menu");
				$data['link'] = $this->input->post("link");
				$this->db->update("menu", $data, "id = " . $id);
				echo '<div class="alert alert-success">Berhasil diubah.</div>';				
			}

			if ($status_menu == 'menu_utama') {
				$data['menu_induk'] = 'induk';
				$data['nama_menu'] = $this->input->post("nama_menu");
				$data['link'] = $this->input->post("link");
				$data['status'] = $this->input->post("status");
				$this->db->update("menu", $data, "id = " . $id);
				echo '<div class="alert alert-success">Berhasil diubah.</div>';				
			}

			if ($status_menu == 'sub_menu') {
				$get_menu = $this->db->get_where('menu', array('id' => $this->input->post("menu_induk")));
				$hasil_get = $get_menu->result_array();
				$menu['menu_induk'] = 'induk';
				$this->db->update("menu", $menu, "id = " . $this->input->post("menu_induk"));
				echo '<div class="alert alert-success">Berhasil diubah induk.</div>';

				$data['menu_induk'] = $this->input->post("menu_induk");
				$data['nama_menu'] = $this->input->post("nama_menu");
				$data['link'] = $this->input->post("link");
				$data['status'] = $this->input->post("status");
				$this->db->update("menu", $data, "id = " . $id);
				echo '<div class="alert alert-success">Berhasil diubah.</div>';
			}       
		}


	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('menu', array('id' => $key));
		echo '<div class="alert alert-success">menu sudah dihapus.</div>';    
	}
}
