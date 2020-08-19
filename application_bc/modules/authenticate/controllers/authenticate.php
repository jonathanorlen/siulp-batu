<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->module = 'authenticate';
		$this->cname = 'authenticate';
		$this->load->model('Mdl_login');
	}
	

	function index() {
		if ($this->session->userdata('astrosession') == TRUE) {
			redirect(base_url('admin/'));
		} else {
			$data['cname'] = $this->module;
			$data['title'] = "Authentication";
			$data['content'] = $this->load->view($this->module.'/login',$data,TRUE);
			$this->load->view('login', $data);
		}
	}
	

	public function login()
	{
		$user = $this->input->post('login-email');
		$pass = $this->input->post('login-password');

		$password = paramEncrypt($pass);

		$get = $this->db->query("SELECT * FROM master_user WHERE uname='$user' AND upass='$password'");
		$hasil = $get->row();		
		
		if ($sesi = 1) {			
			$id= $hasil->id;
			$this->session->set_userdata('astrosession', $id);				
			redirect(base_url('admin/'));			
		} else {			
			$data['cname'] = $this->module;
			$data['title'] = "Authentication";
			$data['content'] = $this->load->view($this->module.'/login',$data,TRUE);
			$this->load->view('login', $data);
		}	
		
	}


	 public function test_set() {
       
            $id = 'satuasasasas';
            $this->session->set_userdata('test', $id);
       
    }

    public function test_get() {
       
            $id = $this->session->userdata('test');
       echo $id;
    }


	public function fuck()
	{
		echo paramEncrypt("admin");
	}
}

/* End of file signin.php */
/* Location: ./application/modules/authenticate/controllers/authenticate.php */
