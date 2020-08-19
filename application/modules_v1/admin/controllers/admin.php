<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {

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
		redirect(base_url('admin/dasboard'));
		
	}	

	public function dasboard()
	{
		$data['konten'] = $this->load->view('general/content', NULL, TRUE);
		$this->load->view ('main', $data);		
	}
    
    public function grafik()
	{
		$data['konten'] = $this->load->view('general/grafik', NULL, TRUE);
		$this->load->view ('main', $data);		
	}

	public function logout()
	{
		$this->session->unset_userdata('astrosession');
		$this->session->sess_destroy();
		clearstatcache();
		// redirect($this->cname);
		header("location:".'http://192.168.100.46/siulpweb/')  ;
	}
}
