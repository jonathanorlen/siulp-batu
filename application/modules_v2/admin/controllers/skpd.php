<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skpd extends MY_Controller {

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
		$data['konten'] = $this->load->view('skpd/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('skpd/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['unit_kerja'] = $this->input->post("unit_kerja");
		$data['kepala'] = $this->input->post("kepala");
		$data['telp'] = $this->input->post("telp");
		$data['alamat'] = $this->input->post("alamat");
		$data['kode_skpd'] = $this->input->post("kode_skpd");

		$this->db->insert("master_satuan_kerja",$data);
		
		header('location:'.base_url().'admin/skpd/content'); 
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('skpd/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('skpd/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('skpd/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$data['unit_kerja'] = $this->input->post("unit_kerja");
		$data['kepala'] = $this->input->post("kepala");
		$data['telp'] = $this->input->post("telp");
		$data['alamat'] = $this->input->post("alamat");
		$data['kode_skpd'] = $this->input->post("kode_skpd");
		
		
		$id 			    = $this->input->post("id");
		$this->db->update("master_satuan_kerja", $data, "id = " . $id);
		
		header('location:'.base_url().'admin/skpd/content');
		
	}

	public function hapus(){
		$id = $this->input->post('id');
		$this->db->delete('master_satuan_kerja', array('id' => $id));
	}
}
