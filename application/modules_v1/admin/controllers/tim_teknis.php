<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tim_teknis extends MY_Controller {

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
		$data['konten'] = $this->load->view('tim_teknis/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('tim_teknis/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah()
	{
		$data['nama'] = $this->input->post("nama");
		$data['email'] = $this->input->post("email");
		$data['telp'] = $this->input->post("telp");
		$data['alamat'] = $this->input->post("alamat");
		$this->db->insert("master_tim_teknis", $data);      
		//echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/tim_teknis/content');    
	}	

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('tim_teknis/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('tim_teknis/edit', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() 
	{

			$data['nama'] = $this->input->post("nama");
			$data['email'] = $this->input->post("email");
			$data['telp'] = $this->input->post("telp");
			$data['alamat'] = $this->input->post("alamat");
			 
			$id 			    = $this->input->post("id");
			$this->db->update("master_tim_teknis", $data, "id = " . $id);
			/*echo '<div class="alert alert-success">Berhasil diubah.</div>';*/
			header('location:'.base_url().'admin/tim_teknis/content');    

	}

	public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_tim_teknis', array('id' => $id));
    }
}
