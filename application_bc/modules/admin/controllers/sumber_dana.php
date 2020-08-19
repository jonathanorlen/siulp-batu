<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sumber_dana extends MY_Controller {

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
		$data['konten'] = $this->load->view('sumber_dana/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('sumber_dana/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['nama_sumber_dana'] = $this->input->post("nama_sumber_dana");
		$data['keterangan'] = $this->input->post("keterangan"); 

		$this->db->insert("master_sumber_dana", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/sumber_dana/content');
	}	

	public function daftar()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('sumber_dana/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('sumber_dana/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('sumber_dana/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
			$data['nama_sumber_dana'] = $this->input->post("nama_sumber_dana");
			$data['keterangan'] = $this->input->post("keterangan");
			$id 			    = $this->input->post("id");
			$this->db->update("master_sumber_dana", $data,array('id' =>$id ));
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
			header('location:'.base_url().'admin/sumber_dana/content');
		
	}

	 public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_sumber_dana', array('id' => $id));
    }
}
