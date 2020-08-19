<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {

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
		$data['konten'] = $this->load->view('user/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('user/tambah', NULL, TRUE);
		$this->load->view ('main', $data);	
	}
	public function ubah_data_profile()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('user/ubah_data_profile', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function simpan_ubah_profile()
	{
			$input = $this->input->post();
			$id = $input['id'];
			$data['nama'] = $input['nama'];
			$data['uname'] = $input['uname'];
			$data['upass'] = paramEncrypt($input['upass']);
			$data['email'] = $input['email'];

			$this->db->update('master_user',$data ,array('id'=>$id));
		//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/dasboard');    
	}

	public function simpan_tambah() {

		$data['id'] = $this->input->post('id');
		$data['nama'] = $this->input->post('nama');
		$data['nip'] = $this->input->post('nip');
		$data['pangkat_gol'] = $this->input->post('pangkat_gol');
		$data['email'] = $this->input->post('email');
		$data['uname'] = $this->input->post('uname');
		$data['upass'] = paramEncrypt($this->input->post('upass'));

		$eventstart=date("y-m-d");
		$waktu=strtotime($eventstart . ' -1 day');

		$data['tanggal_generate'] =date("Y-m-d",$waktu);
		//echo $this->db->last_query;

		$data['kode_skpd'] = $this->input->post('kode_skpd');
		$hasil = $this->db->get_where('master_satuan_kerja',array('kode_skpd' => $data['kode_skpd']));
		$hasil_skpd = $hasil->row();
		$data['nama_skpd'] = $hasil_skpd->unit_kerja;

		$data['kode_jabatan'] = $this->input->post('kode_jabatan');
		$hasil = $this->db->get_where('master_jabatan',array('kode_jabatan' => $data['kode_jabatan']));
		$hasil_jabatan = $hasil->row();
		$data['nama_jabatan'] = $hasil_jabatan->nama_jabatan;

		$data['kode_pokja'] = $this->input->post('kode_pokja');
		$hasil_ambil = $this->db->get_where('master_kelompok_kerja',array('id' => $data['kode_pokja']));
		$hasil_ambil_data = $hasil_ambil->row();
		$data['nama_pokja'] = $hasil_ambil_data->pokja;

		$data['jabatan_pokja'] = $this->input->post("jabatan_pokja");
		$data['group'] = $this->input->post("group");

		$this->db->insert("master_user", $data);
	//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/user/content');             
	}	

	public function daftar()
	{
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('user/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('user/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('user/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {

		$data['status']= $this->input->post("status");
		$data['nama']= $this->input->post("nama");
		$data['nip'] = $this->input->post('nip');
		$data['pangkat_gol'] = $this->input->post('pangkat_gol');
		$data['email'] = $this->input->post('email');
		$data['uname']= $this->input->post("uname");
		$data['upass']= paramEncrypt($this->input->post("upass"));
		$data['nama_jabatan'] = $this->input->post('nama_jabatan');

		$data['kode_skpd'] = $this->input->post('kode_skpd');
		$hasil = $this->db->get_where('master_satuan_kerja',array('kode_skpd' => @$data['kode_skpd']));
		$hasil_skpd = $hasil->row();
		$data['nama_skpd'] = @$hasil_skpd->unit_kerja;

		$data['kode_jabatan'] = $this->input->post('kode_jabatan');
		$hasil = $this->db->get_where('master_jabatan',array('kode_jabatan' => $data['kode_jabatan']));
		$hasil_jabatan = $hasil->row();
		$data['nama_jabatan'] = @$hasil_jabatan->nama_jabatan;

		$data['kode_pokja'] = $this->input->post('kode_pokja');
		$hasil_ambil = $this->db->get_where('master_kelompok_kerja',array('id' => $data['kode_pokja']));
		$hasil_ambil_data = $hasil_ambil->row();
		$data['nama_pokja'] = @$hasil_ambil_data->pokja;

		$data['jabatan_pokja'] = $this->input->post("jabatan_pokja");
		$data['group'] = $this->input->post("group");

		$id= $this->input->post("id");
		$this->db->update("master_user", $data, "id = " . $id);

		//echo $this->db->last_query();

	//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'admin/user/content');   

	}

	public function hapus(){
		$id = $this->input->post('id');
		$this->db->delete('master_user', array('id' => $id));
	}
}
