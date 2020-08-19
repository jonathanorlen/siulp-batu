<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class struktur_data_paket extends MY_Controller {

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
		$data['konten'] = $this->load->view('struktur_data_paket/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function tambah()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('struktur_data_paket/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function detail()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('struktur_data_paket/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function ubah()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('struktur_data_paket/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$data['nip'] = $this->input->post("nip");
		$data['nama'] = $this->input->post("nama");
		$data['jabatan'] = $this->input->post("jabatan");
		$data['pangkat'] = $this->input->post("pangkat");  

		$this->db->insert("master_struktur_data_paket", $data);
		
		header('location:'.base_url().'admin/struktur_data_paket/content');     
	}	
	
	public function simpan_ubah() {
$data['nip'] = $this->input->post("nip");
		$data['nama'] = $this->input->post("nama");
		$data['jabatan'] = $this->input->post("jabatan");
		$data['pangkat'] = $this->input->post("pangkat");  

			$id 			    = $this->input->post("id");
			$this->db->update("master_struktur_data_paket", $data, array('id' => $id ));
					
			
			header('location:'.base_url().'admin/struktur_data_paket/content'); 
	}
	/*public function hapus() {      
		$key = $_GET['id'];
		$this->db->delete('master_struktur_data_paket', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>'; 
		header('location:'.base_url().'admin/struktur_data_paket/content');  
	}*/
    
    public function hapus(){
        $id = $this->input->post('id');
        $this->db->delete('master_struktur_data_paket', array('id' => $id));
    }
}
