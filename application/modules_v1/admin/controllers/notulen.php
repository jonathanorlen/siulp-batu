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
		$data['konten'] = $this->load->view('notulen/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_tolak()
	{	

		$kode= $this->input->post("id");

		$data['status'] ="tolak";
		$data['keterangan']=$this->input->post('keterangan');
		
		$update=$this->db->update("transaksi_data_paket", $data,array('id' => $kode));
		
		header("location:".base_url().'admin/data_verifikasi/content')  ; 

	}

	public function simpan_terima()
	{	

		$kode= $this->input->post("id");

		$data_verifikasi['status'] ="terima";
		
		$update=$this->db->update("transaksi_data_paket", $data_verifikasi,array('id' => $kode));
		
		header("location:".base_url().'admin/data_verifikasi/content')  ; 

	}

	public function simpan_tambah() {

		$this->db->select_max('id');
		$get_max_mo = $this->db->get('transaksi_data_paket');
		$max_mo = $get_max_mo->row();

		$this->db->where('id', $max_mo->id);
		$get_mo = $this->db->get('transaksi_data_paket');
		$mo = $get_mo->row();
		$nomor = substr(@$mo->kode_paket, 3);
		$nomor = $nomor + 1;
		$string = strlen($nomor);
		if($string == 1){
			$kode = 'PK_000'.$nomor;
		} else if($string == 2){
			$kode = 'PK_00'.$nomor;
		} else if($string == 3){
			$kode = 'PK_00'.$nomor;
		} else if($string == 4){
			$kode = 'PK_'.$nomor;
		}

		$data['kode_paket'] = $kode ;
		$data['nama_paket'] = $this->input->post("nama_paket");
		$data['tanggal_pengajuan'] = $this->input->post("tanggal_pengajuan");
		$data['volume'] = $this->input->post("volume");
		$data['kegiatan'] = $this->input->post("kegiatan");
		$data['lokasi'] = $this->input->post("lokasi");
		$data['pagu'] = $this->input->post("pagu");
		$data['hps'] = $this->input->post("hps");

		$data['kode_satuan_kerja'] = $this->input->post("satuan_kerja");
		$hasil = $this->db->get_where('master_satuan_kerja',array('id' => $data['kode_satuan_kerja']));
		$hasil_data = $hasil->row();
		$data['nama_satuan_kerja'] = $hasil_data->unit_kerja ;

		$data['kode_sumber_dana'] = $this->input->post("sumber_dana");
		$hasil_dana = $this->db->get_where('master_sumber_dana',array('id' => $data['kode_sumber_dana']));
		$hasil_data_dana = $hasil_dana->row();
		$data['nama_sumber_dana'] = $hasil_data_dana->nama_sumber_dana;	


		$data['kode_jenis_pengadaan'] = $this->input->post("jenis_pengadaan");
		$hasil_jenis = $this->db->get_where('master_jenis_pengadaan',array('id' => $data['kode_jenis_pengadaan']));
		$hasil_data_jenis = $hasil_jenis->row();
		$data['nama_jenis_pengadaan'] = $hasil_data_jenis->jenis_pengadaan;

		$data['kode_metode_pengadaan'] = $this->input->post("metode_pengadaan");
		$hasil_metode = $this->db->get_where('master_metode_pengadaan',array('id' => $data['kode_metode_pengadaan']));
		$hasil_data_metode = $hasil_metode->row();
		$data['nama_metode_pengadaan'] = $hasil_data_metode->metode_pengadaan;

		$data['status'] = ("proses verifikasi");


		$this->db->insert("transaksi_data_paket", $data);
		
		header("location:".base_url().'admin/data_verifikasi/content')  ;        
	}	

	public function detail()

	{
		$data['konten'] = $this->load->view('data_verifikasi/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail_verifikasi()

	{
		$data['konten'] = $this->load->view('data_verifikasi/detail_verifikasi', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function setting()

	{
		$data['konten'] = $this->load->view('data_verifikasi/setting', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function setting_pokja()

	{	
		$id = $this->input->post('id');
		$data['kode_pokja'] = $this->input->post('kode_pokja');
		$hasil = $this->db->get_where('master_kelompok_kerja',array('id' => $data['kode_pokja']));
		$hasil_data = $hasil -> row();
		
		$data['nama_pokja'] = $hasil_data->pokja;

		$this->db->update('transaksi_data_paket', $data,array('id' => $id));
		header("location:".base_url().'admin/data_verifikasi/content')  ; 
	}

	public function cetak()

	{
		$this->load->view('data_verifikasi/cetak');
	}
}
