<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forum extends MY_Controller {

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

	public function index()
	{	
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('forum/forum/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function pesan()
	{
		$data['konten'] = $this->load->view('forum/forum/pesan', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function data_pesan()
	{
		$this->load->view('forum/forum/data_pesan');
	}

	// 	public function cetak()

	// {
	// 	$data['konten'] = $this->load->view('forum/forum/cetak', NULL, TRUE);
	// 	$this->load->view ('main', $data);
	// }
	
	public function simpan_pesan() {

		$get_nip = $this->session->userdata('astrosession');
		$nip = $get_nip->nip;
		$nama_petugas = $get_nip->nama;
		
		$data['nip'] = $nip;
		$data['nama'] = $nama_petugas;
		$data['pesan'] = $this->input->post("komentar");
		$data['judul'] = $this->input->post("judul");
		$data['kode_forum'] = $this->input->post("kode_forum");
		$data['tanggal'] = date('Y-m-d');
		$data['jam'] = date('H:i');
		$this->db->insert("data_pesan_forum", $data);

		// echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		
	}	
}
