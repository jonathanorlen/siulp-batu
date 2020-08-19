<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_pengadaan extends MY_Controller {

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
		$data['konten'] = $this->load->view('jenis_pengadaan/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('jenis_pengadaan/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('jenis_pengadaan/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('jenis_pengadaan/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['jenis_pengadaan'] = $this->input->post("jenis_pengadaan");
		$data['keterangan'] = $this->input->post("keterangan"); 

		$this->db->insert("master_jenis_pengadaan", $data);
		header('location:'.base_url().'admin/jenis_pengadaan/content');
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('contact/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_ubah() {
		 	$data['jenis_pengadaan'] = $this->input->post("jenis_pengadaan");
			$data['keterangan'] = $this->input->post("keterangan"); 


			$id 			    = $this->input->post("id");
			$this->db->update("master_jenis_pengadaan", $data, "id = " . $id);
			header('location:'.base_url().'admin/jenis_pengadaan/content');
		
	}

	 public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_jenis_pengadaan', array('id' => $id));
    }
}
