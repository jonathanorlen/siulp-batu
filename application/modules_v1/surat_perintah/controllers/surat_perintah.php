<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_perintah extends MY_Controller {

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

		$data['menu'] = 'surat_perintah';
		$data['konten'] = $this->load->view('surat_perintah/surat_perintah/daftar', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function simpan_terima()
	{	

		$kode= $this->input->post("id");

		$data_verifikasi['status_rapat'] ="terima";
		
		$update=$this->db->update("transaksi_rapat", $data_verifikasi,array('id' => $kode));
		//echo '<div class="alert alert-success">Data Sudah Di Terima.</div>';
		header("location:".base_url().'rapat/rapat/content')  ; 

	}


	public function detail_verifikasi()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/detail_verifikasi', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail_jadwal()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/detail_jadwal', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function jadwal_rapat()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/jadwal_rapat', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function cetak_rapat()
	{	
		
		$this->load->view('rapat/rapat/cetak_rapat');
		
	}

	public function cetak_tugas()
	{	
		
		$this->load->view('surat_perintah/surat_perintah/cetak_tugas');
		
	}

//jadwal rapat------------------------------------------------------------------------------------//

	public function content()
	{

		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function get_kode()
	{

		$kode=$this->input->post("kode_paket");
		$this->db->where('kode_paket',$kode);
		$get = $this->db->get("transaksi_data_paket");
		$hasil_get = $get->row();

		echo json_encode($hasil_get);
	}


	public function simpan_tambah() {

		$this->db->select_max('id');
		$get_max_mo = $this->db->get('transaksi_rapat');
		$max_mo = $get_max_mo->row();

		$this->db->where('id', $max_mo->id);
		$get_mo = $this->db->get('transaksi_rapat');
		$mo = $get_mo->row();
		$nomor = substr(@$mo->kode_paket, 3);
		$nomor = $nomor + 1;
		$string = strlen($nomor);
		if($string == 1){
			$kode = 'RPT_000'.$nomor;
		} else if($string == 2){
			$kode = 'RPT_00'.$nomor;
		} else if($string == 3){
			$kode = 'RPT_00'.$nomor;
		} else if($string == 4){
			$kode = 'RPT_'.$nomor;
		}

		$data['kode_rapat'] = $kode;
		$data['tanggal_rapat'] = $this->input->post("tanggal_rapat");
		$data['agenda'] = $this->input->post("agenda");

		$data['kode_paket'] = $this->input->post("kode_paket");
		$hasil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $data['kode_paket']));
		$hasil_data = $hasil->row();
		$data['nama_paket'] = $hasil_data->nama_paket ;


		$data['tempat'] = $this->input->post("tempat");

		$data['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");
		$data['nama_satuan_kerja'] = $this->input->post("nama_satuan_kerja");
		$data['nama_pokja'] = $this->input->post("nama_pokja");
		$data['kode_pokja'] = $this->input->post("kode_pokja");

		$data['kode_ppk'] = $this->input->post("kode_ppk");
		$hasil = $this->db->get_where('master_user',array('id' => $data['kode_ppk']));
		$hasil_data = $hasil->row();
		$data['nama_ppk'] = $hasil_data->nama ;

		$data['kode_sekretariat'] = $this->input->post("kode_sekretariat");
		$hasil = $this->db->get_where('master_user',array('id' => $data['kode_sekretariat']));
		$hasil_data = $hasil->row();
		$data['nama_sekretariat'] = $hasil_data->nama ;
		$data['status_rapat'] = 'terima';

		$this->db->insert("transaksi_rapat", $data);
		//echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header('location:'.base_url().'rapat/rapat/content');    
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('rapat/rapat/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('rapat/rapat/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_ubah() {
		$data['kode_rapat'] = $this->input->post("kode_rapat");
		$data['tanggal_rapat'] = $this->input->post("tanggal_rapat");
		$data['agenda'] = $this->input->post("agenda");

		$data['kode_paket'] = $this->input->post("kode_paket");
		$hasil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $data['kode_paket']));
		$hasil_data = $hasil->row();
		$data['nama_paket'] = $hasil_data->nama_paket ;


		$data['tempat'] = $this->input->post("tempat");

		$data['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");
		$hasil_satuan_kerja = $this->db->get_where('master_satuan_kerja',array('id' => $data['kode_satuan_kerja']));
		$hasil_data_satuan_kerja = $hasil_satuan_kerja->row();
		$data['nama_satuan_kerja'] = $hasil_data_satuan_kerja->unit_kerja ;

		$data['kode_pokja'] = $this->input->post("kode_pokja");
		$hasil_pokja = $this->db->get_where('master_kelompok_kerja',array('id' => $data['kode_pokja']));
		$hasil_data_pokja = $hasil_pokja->row();
		$data['nama_pokja'] = $hasil_data_pokja->pokja ;

		$data['kode_ppk'] = $this->input->post("kode_ppk");
		$hasil_ppk = $this->db->get_where('master_user',array('id' => $data['kode_ppk']));
		$hasil_data_ppk = $hasil_ppk->row();
		$data['nama_ppk'] = $hasil_data_ppk->nama_jabatan ;

		$data['kode_sekretariat'] = $this->input->post("kode_sekretariat");
		$hasil_sekretariat = $this->db->get_where('master_user',array('id' => $data['kode_sekretariat']));
		$hasil_data_sekretariat = $hasil_sekretariat->row();
		$data['nama_sekretariat'] = $hasil_data_sekretariat->nama_jabatan ;
		$data['status_rapat'] = $this->input->post("status_rapat");
		$id 			    = $this->input->post("id");
		$this->db->update("transaksi_rapat", $data,array('id'=>$id));
	//	echo '<div class="alert alert-success">Berhasil diubah.</div>';
		header('location:'.base_url().'rapat/rapat/content');

	}

	public function hapus(){
		$id = $this->input->post('id');
		$this->db->delete('transaksi_rapat', array('id' => $id));
	}
}
