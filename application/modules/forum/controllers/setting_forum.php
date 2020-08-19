<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting_forum extends MY_Controller {

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
		$data['konten'] = $this->load->view('forum/setting_forum/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function content()
	{	
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('forum/setting_forum/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function tambah()
	{	
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('forum/setting_forum/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function detail()
	{	
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('forum/setting_forum/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function hapus(){
		$id = $this->input->post('id');
		$this->db->delete('master_forum', array('id' => $id));
	}
	public function simpan_tambah(){
		$this->db->select_max('id');
        $get_max_forum = $this->db->get('master_forum');
        $max_forum = $get_max_forum->row();

        $this->db->where('id', $max_forum->id);
        $get_forum = $this->db->get('master_forum');
        $forum = $get_forum->row();
        $nomor = substr(@$forum->kode_forum, 4);
        $nomor = $nomor + 1;
        $string = strlen($nomor);
        if($string == 1){
          $kode_forum ='000'.$nomor;
        } else if($string == 2){
          $kode_forum ='00'.$nomor;
        } else if($string == 3){
          $kode_forum ='0'.$nomor;
        } else if($string == 4){
          $kode_forum =''.$nomor;
        } 
        $simpan['kode_forum']='F_'.$kode_forum;
		$data=$this->input->post();
		@$anggota = implode("|", $data['anggota']);
		$simpan['judul']=$data['judul'];
		$simpan['keterangan']=$data['keterangan'];
		$simpan['anggota']=@$anggota;
		$simpan['tanggal']=date('Y-m-d');
		$simpan['status']=$data['status'];

		$this->db->insert('master_forum',$simpan);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
	}
	public function simpan_edit(){
		$id = $this->input->post("id") ;

		$data['judul'] = $this->input->post("judul");
		$data['keterangan'] = $this->input->post("keterangan");
		$data['status'] = $this->input->post("status");
		//$anggota=
		$data['anggota'] = @implode("|",$this->input->post("anggota"));
		$this->db->update("master_forum", $data,array('id' => $id));
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';

	}
}
