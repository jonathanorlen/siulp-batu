<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metode_pengadaan extends MY_Controller {

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
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('metode_pengadaan/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('metode_pengadaan/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['metode_pengadaan'] = $this->input->post("metode_pengadaan");
		$data['keterangan'] = $this->input->post("keterangan"); 

		$this->db->insert("master_metode_pengadaan", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/metode_pengadaan/content');
	}	

	public function daftar()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('metode_pengadaan/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('metode_pengadaan/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('metode_pengadaan/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
			$data['metode_pengadaan'] = $this->input->post("metode_pengadaan");
			$data['keterangan'] = $this->input->post("keterangan"); 


			$id 			    = $this->input->post("id");
			$this->db->update("master_metode_pengadaan", $data, "id =" .$id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
			header('location:'.base_url().'admin/metode_pengadaan/content');
	}

	 public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_metode_pengadaan', array('id' => $id));
    }
}
