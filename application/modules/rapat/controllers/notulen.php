<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notulen extends MY_Controller {

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
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('rapat/notulen/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

		public function detail()

	{
		$data['konten'] = $this->load->view('rapat/notulen/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	// 	public function cetak()

	// {
	// 	$data['konten'] = $this->load->view('rapat/notulen/cetak', NULL, TRUE);
	// 	$this->load->view ('main', $data);
	// }
	
	public function tambah_notulen() {

		$id = $this->input->post("id") ;
		$data['notulensi'] = $this->input->post("notulensi");


		$this->db->update("transaksi_rapat", $data,array('id' => $id));

		//echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header("location:".base_url().'rapat/notulen/content')  ;        
	}	
}
