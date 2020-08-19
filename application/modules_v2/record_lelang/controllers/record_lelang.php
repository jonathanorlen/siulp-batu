<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class record_lelang extends MY_Controller {

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


	public function record_sukses()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/daftar_sukses', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_paket()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_paket', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_paket_gagal()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_paket_gagal', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_monev()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_monev', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function get_paket()
	{	
		
		$this->load->view('record_lelang/record_lelang/cari');
	}

	public function get_status()
	{	
		
		$this->load->view('record_lelang/record_lelang/get_status');
	}

	// public function cari()
	// {

	// 	$data['key'] = $this->input->post("key");
	// 	$this->load->view ('record_lelang/record_lelang/cari');
	// }
	public function cari_tahun()
	{   

		$this->load->view('record_lelang/record_lelang/cari_tahun');

	}
	public function cari_gagal()
	{
		$this->load->view ('record_lelang/record_lelang/cari_gagal');
	}

	public function record_gagal()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/daftar_gagal', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function grafik()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/grafik', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function data_monev()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/data_monev', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function cari_monev()
	{
		
		$data['key'] = $this->input->post("key");
		$this->load->view ('record_lelang/record_lelang/cari_monev');
	}

	public function verifikasi()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/verifikasi', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail', NULL, TRUE);
		$this->load->view ('main', $data);

	}
//-------------------------------------------------- data paket proses lelang only !!! -------------------------------//
	
	public function data_proses_lelang()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/data_proses_lelang', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	
	public function lanjut_lelang()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/lanjut_lelang', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_histori_dokumen(){
		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_histori_dokumen', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_lelang()
	{	
		$kode=$this->input->post('id');


		$data['posisi']='hasil lelang';

		$data['lampiran'] = $this->input->post('lampiran');
		if(!empty($_FILES['lampiran']['tmp_name'])){
			move_uploaded_file(
				$_FILES['lampiran']['tmp_name'],
				'./component/upload/file/uploads/'.'SPRPP_'.$filename.'.'.pathinfo($_FILES['lampiran']['name'], PATHINFO_EXTENSION)
				);

		}
		
		$data['tanggal_lelang']=$this->input->post('tanggal_lelang');

		$update=$this->db->update("transaksi_data_paket", $data,array('id' => $kode));

		//echo '<div class="alert alert-success">Sudah tersimpan.</div>';	
		header("location:".base_url().'record_lelang/record_lelang/data_proses_lelang')  ;   

	}

	public function simpan_gagal()
	{	
		$kode=$this->input->post('id');
		$data['status_paket'] = 'Gagal';
		$data['posisi'] = 'selesai';
		$update=$this->db->update("transaksi_data_paket", $data,array('id' => $kode));

	//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';	
		header("location:".base_url().'record_lelang/record_lelang/data_proses_lelang')  ;   

	}

	public function simpan_berhasil()
	{	
		$kode=$this->input->post('id');
		$data['status_paket'] = 'Sukses';
		$data['pemenang'] = $this->input->post('pemenang');
		$data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
		$data['alamat'] = $this->input->post('alamat');
		$data['nama_direktur'] = $this->input->post('nama_direktur');
		$data['posisi'] = 'selesai';

		$update=$this->db->update("transaksi_data_paket", $data,array('id' => $kode));

	//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';	
		header("location:".base_url().'record_lelang/record_lelang/data_proses_lelang')  ;   

	}

	//------------------------------form revisi-----------------------------------------//

	public function form_revisi()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/form_revisi', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function simpan_revisi()

	{	
		
		$filename = substr(date("Y"),2,4).date("mdHis");



		$data2['nama_dokumen'] = $this->input->post('dokumen_dpa');
		if(!empty($_FILES['dokumen_dpa']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_dpa']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_dpa_'.$filename.'.'.pathinfo($_FILES['dokumen_dpa']['name'], PATHINFO_EXTENSION)
				);
			$data2['kode_paket'] = $kode;
			$data2['nama_dokumen'] =  'dokumen_dpa_'.$filename.'.'.pathinfo($_FILES['dokumen_dpa']['name'], PATHINFO_EXTENSION);
			$data2['jenis_dokumen'] =  'dpa';
			$this->db->insert("dokumen_paket",$data2); 

		}


		$data3['nama_dokumen'] =$this->input->post('dokumen_rup');
		if(!empty($_FILES['dokumen_rup']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_rup']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_rup_'.$filename.'.'.pathinfo($_FILES['dokumen_rup']['name'], PATHINFO_EXTENSION)
				);
			$data3['kode_paket'] = $kode;
			$data3['nama_dokumen'] = 'dokumen_rup_'.$filename.'.'.pathinfo($_FILES['dokumen_rup']['name'], PATHINFO_EXTENSION);
			$data3['jenis_dokumen'] =  'rup';
			$this->db->insert("dokumen_paket",$data3); 
		}

		$data4['nama_dokumen'] =$this->input->post('dokumen_kak');
		if(!empty($_FILES['dokumen_kak']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_kak']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_kak_'.$filename.'.'.pathinfo($_FILES['dokumen_kak']['name'], PATHINFO_EXTENSION)
				);
			$data4['kode_paket'] = $kode;
			$data4['nama_dokumen'] = 'dokumen_kak_'.$filename.'.'.pathinfo($_FILES['dokumen_kak']['name'], PATHINFO_EXTENSION);
			$data4['jenis_dokumen'] =  'kak';
			$this->db->insert("dokumen_paket",$data4); 
		}

		$data5['nama_dokumen'] =$this->input->post('dokumen_hps');
		if(!empty($_FILES['dokumen_hps']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_hps']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_hps_'.$filename.'.'.pathinfo($_FILES['dokumen_hps']['name'], PATHINFO_EXTENSION)
				);
			$data5['kode_paket'] = $kode;
			$data5['nama_dokumen'] = 'dokumen_hps_'.$filename.'.'.pathinfo($_FILES['dokumen_hps']['name'], PATHINFO_EXTENSION);
			$data5['jenis_dokumen'] =  'hps';
			$this->db->insert("dokumen_paket",$data5); 
		}

		$data6['nama_dokumen'] =$this->input->post('dokumen_survey');
		if(!empty($_FILES['dokumen_survey']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_survey']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_survey_'.$filename.'.'.pathinfo($_FILES['dokumen_survey']['name'], PATHINFO_EXTENSION)
				);
			$data6['kode_paket'] = $kode;
			$data6['nama_dokumen'] = 'dokumen_survey_'.$filename.'.'.pathinfo($_FILES['dokumen_survey']['name'], PATHINFO_EXTENSION);
			$data6['jenis_dokumen'] =  'survey';
			$this->db->insert("dokumen_paket",$data6); 
		}

		$data7['nama_dokumen'] =$this->input->post('dokumen_spesifikasi');
		if(!empty($_FILES['dokumen_spesifikasi']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_spesifikasi']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_spesifikasi_'.$filename.'.'.pathinfo($_FILES['dokumen_spesifikasi']['name'], PATHINFO_EXTENSION)
				);
			$data7['kode_paket'] = $kode;
			$data7['nama_dokumen'] = 'dokumen_spesifikasi_'.$filename.'.'.pathinfo($_FILES['dokumen_spesifikasi']['name'], PATHINFO_EXTENSION);
			$data7['jenis_dokumen'] =  'spesifikasi';
			$this->db->insert("dokumen_paket",$data7); 
		}

		$data8['nama_dokumen'] =$this->input->post('dokumen_bill');
		if(!empty($_FILES['dokumen_bill']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_bill']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_bill_'.$filename.'.'.pathinfo($_FILES['dokumen_bill']['name'], PATHINFO_EXTENSION)
				);
			$data8['kode_paket'] = $kode;
			$data8['nama_dokumen'] = 'dokumen_bill_'.$filename.'.'.pathinfo($_FILES['dokumen_bill']['name'], PATHINFO_EXTENSION);
			$data8['jenis_dokumen'] =  'bill';
			$this->db->insert("dokumen_paket",$data8); 
		}

		$data9['nama_dokumen'] =$this->input->post('dokumen_rancangan');
		if(!empty($_FILES['dokumen_rancangan']['tmp_name'])){
			move_uploaded_file(
				$_FILES['dokumen_rancangan']['tmp_name'],
				'./component/upload/file/uploads/'.'dokumen_rancangan_'.$filename.'.'.pathinfo($_FILES['dokumen_rancangan']['name'], PATHINFO_EXTENSION)
				);
			$data9['kode_paket'] = $kode;
			$data9['nama_dokumen'] = 'dokumen_rancangan_'.$filename.'.'.pathinfo($_FILES['dokumen_rancangan']['name'], PATHINFO_EXTENSION);
			$data9['jenis_dokumen'] =  'rancangan';
			$this->db->insert("dokumen_paket",$data9); 
		}

		//---------------------------------------------------------//

		$posisi = $this->input->post('kode_paket');

		$data_posisi['posisi']="terjadwal"; 

		$update = $this->db->update("transaksi_data_paket",$data_posisi,array('kode_paket' => $posisi));
		// echo $this->db->last_query();


		//----------------------------------------------------------//

		$parameter=$this->input->post("kode_paket");
		$ambil_data = $this->db->get_where('transaksi_data_paket',array('kode_paket'  =>  $parameter));
		$hasil_data = $ambil_data->row();

		$rapat=$hasil_data->kode_paket;

		$data['agenda']=$this->input->post('agenda');

		$data['tanggal_rapat']=$this->input->post('tanggal_rapat');

		$data['kode_ppk'] = $this->input->post("kode_ppk");
		$hasil_ppk = $this->db->get_where('master_user',array('id' => $data['kode_ppk']));
		$hasil_data_ppk = $hasil_ppk->row();
		@$data['nama_ppk']=@$hasil_data_ppk->nama_jabatan ;

		$update= $this->db->update("transaksi_rapat",$data,array('kode_paket' => $rapat ));
		// echo $this->db->last_query();
	//	echo '<div class="alert alert-success">Sudah tersimpan.</div>';	
		header("location:".base_url().'record_lelang/record_lelang/data_proses_lelang')  ;  

	}
	//------------------------------- data tahunan --------------------------------//

	public function tampil_tahun()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/tampil_tahun', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	
	public function tampil_data_tahun()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/tampil_data_tahun', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function tampil_tabel()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/tampil_tabel', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_tahun()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_tahun', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function histori_paket()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/histori_paket', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function detail_histori_paket()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_histori_paket', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function detail_histori_paket_opsi()
	{	

		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/detail_histori_paket_opsi', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function print_sukses()
	{	

		$this->load->view('record_lelang/record_lelang/print_sukses');

	}

	public function print_gagal()
	{	

		$this->load->view('record_lelang/record_lelang/print_gagal');

	}

	public function print_monev()
	{	

		$this->load->view('record_lelang/record_lelang/print_monev');

	}

	public function print_tahunan()
	{	

		$this->load->view('record_lelang/record_lelang/print_tahunan');

	}

	public function simpan_tutup()
	{	
		$kode=$this->input->post('id');	
		$data['tutup_tahun'] = 'Close';
		$update=$this->db->update("transaksi_data_paket", $data,array('tahun' => $kode));

		$kode_2=$this->input->post('id');
		$data_2['tutup_tahun'] = 'Close';
		$update=$this->db->update("transaksi_rapat", $data_2,array('tahun' => $kode_2));

		//echo $this->db->last_query();



	}
	// input lelang
	public function hasil_lelang()
	{	
		$data['menu'] = 'record_lelang';
		$data['konten'] = $this->load->view('record_lelang/record_lelang/hasil_lelang', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	

}
