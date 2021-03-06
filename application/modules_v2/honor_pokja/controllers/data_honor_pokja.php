<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_honor_pokja extends MY_Controller {

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
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/data_honor_pokja/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function detail()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/data_honor_pokja/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function cetak_honor()
	{	
		$id = $this->uri->segment(4);
		$pencairan['pencairan_gaji']='Selesai';
		$hasil =$this->db->update('transaksi_data_paket',$pencairan,array('id' => $id));
		$this->load->view('honor_pokja/data_honor_pokja/print_honor');
	}
	public function get_data_honor()
	{	
		
		$this->load->view('honor_pokja/data_honor_pokja/cari_data');
	}
	public function pencairan()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/data_honor_pokja/pencairan', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function get_pencairan_honor()
	{	
		
		$this->load->view('honor_pokja/data_honor_pokja/cari_pencairan');
	}
	public function simpan_tolak()
	{	

		$kode= $this->input->post("id");

		$data['status_rapat'] ="tolak";
		$data['keterangan']=$this->input->post('keterangan');
		
		$update=$this->db->update("transaksi_rapat", $data,array('id' => $kode));
		// echo '<div class="alert alert-success">Data Sudah Di Tolak.</div>';
		header("location:".base_url().'honor_pokja/honor_pokja/content')  ; 

	}

	public function simpan_terima()
	{	

		$kode= $this->input->post("id");

		$data_verifikasi['status_rapat'] ="terima";
		
		$update=$this->db->update("transaksi_rapat", $data_verifikasi,array('id' => $kode));
		/*echo '<div class="alert alert-success">Data Sudah Di Terima.</div>';*/
		header("location:".base_url().'honor_pokja/honor_pokja/content')  ; 

	}


	public function detail_verifikasi()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/detail_verifikasi', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	// public function detail_verifikasi()
	// {	
	// 	$data['menu'] = 'master';
	// 	$data['konten'] = $this->load->view('honor_pokja/honor_pokja/detail_verifikasi', NULL, TRUE);
	// 	$this->load->view ('main', $data);
	// }

	public function print_honor()
	{	
		$this->load->view('honor_pokja/honor_pokja/print_honor');
	}

	public function hasil_rapat()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/hasil_rapat', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function srpp()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/srpp', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_srpp()
	{	
		$id= $this->input->post("id");

		$data_verifikasi['spesifikasi_kak'] = $this->input->post("spesifikasi_kak");
		
		$update=$this->db->update("transaksi_data_paket", $data_verifikasi,array('id' => $id));
		// echo $this->db->last_query();
		/*echo '<div class="alert alert-success">Data Sudah Di Terima.</div>';*/
		header("location:".base_url().'honor_pokja/honor_pokja/hasil_rapat') ; 
		
	}

	//--------------------------------------------------Hasil Rapat----------------------------------
	public function print_hasil()
	{	
		$this->load->view('honor_pokja/honor_pokja/print_hasil_rapat');
	}

	public function form_surat_hasil()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/form_surat_hasil', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_ubah_hasil() {

    $id=$this->input->post('id');
    $kode=$this->input->post('kode_paket');
    $data['hps'] = $this->input->post("hps");
    $data['posisi'] = 'terjadwal';



    $status= '';
    if(empty($_FILES['dokumen_dpa']['tmp_name']) && empty($_FILES['dokumen_rup']['tmp_name']) && empty($_FILES['dokumen_kak']['tmp_name']) && empty($_FILES['dokumen_hps']['tmp_name']) && empty($_FILES['dokumen_survey']['tmp_name']) && empty($_FILES['dokumen_rup']['tmp_name']) && empty($_FILES['dokumen_bill']['tmp_name']) && empty($_FILES['dokumen_rancangan']['tmp_name']) )
    {
        $status='Dokumen Kosong';
    }
    elseif (empty($_FILES['dokumen_dpa']['tmp_name']) || empty($_FILES['dokumen_rup']['tmp_name']) || empty($_FILES['dokumen_kak']['tmp_name']) || empty($_FILES['dokumen_hps']['tmp_name']) || empty($_FILES['dokumen_survey']['tmp_name']) || empty($_FILES['dokumen_rup']['tmp_name']) || empty($_FILES['dokumen_bill']['tmp_name']) || empty($_FILES['dokumen_rancangan']['tmp_name']))
    {
        $status='Dokumen Belum Lengkap';     
    }
    elseif (!empty($_FILES['dokumen_dpa']['tmp_name']) && !empty($_FILES['dokumen_rup']['tmp_name']) && !empty($_FILES['dokumen_kak']['tmp_name']) && !empty($_FILES['dokumen_hps']['tmp_name']) && !empty($_FILES['dokumen_survey']['tmp_name']) && !empty($_FILES['dokumen_rup']['tmp_name']) && !empty($_FILES['dokumen_bill']['tmp_name']) && !empty($_FILES['dokumen_rancangan']['tmp_name'])) {
        $status='Dokumen Lengkap';
    }

    $data['status_paket'] = $status;

    $this->db->update("transaksi_data_paket", $data,array('id' => $id));
//    echo $this->db->last_query();


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
        $this->db->insert("dokumen_paket", $data2); 

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
        $this->db->insert("dokumen_paket", $data3); 
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
        $this->db->insert("dokumen_paket", $data4); 
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
        $this->db->insert("dokumen_paket", $data5); 
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
        $this->db->insert("dokumen_paket", $data6); 
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
        $this->db->insert("dokumen_paket", $data7); 
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
        $this->db->insert("dokumen_paket", $data8); 
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
        $this->db->insert("dokumen_paket", $data9); 
    }
    


        // $this->db->insert("dokumen_paket", $data2);

    /*echo '<div class="alert alert-success">Sudah tersimpan.</div>';*/
    header("location:".base_url().'honor_pokja/honor_pokja/hasil_rapat')  ;        
}    

	public function ubah_hasil()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/ubah_hasil_rapat', NULL, TRUE);
		$this->load->view ('main', $data);
	}



	public function cetak_rapat()
	{	
		
		$this->load->view('honor_pokja/honor_pokja/cetak_rapat');
		
	}

//jadwal rapat------------------------------------------------------------------------------------//

	public function simpan_posisi()
	{	

		$parameter=$this->input->post("kode_paket");
		$ambil_data = $this->db->get_where('transaksi_rapat',array('kode_paket'  =>  $parameter));
		$hasil_ambil_data = $ambil_data->row();
		//echo $this->db->last_query();
		$kode=@$hasil_ambil_data->kode_paket;

		$data['posisi']='terjadwal';
		
		$update=$this->db->update("transaksi_data_paket", $data,array('kode_paket' => $parameter));
		//echo $this->db->last_query();
		//-------------------------------------simpan data paket---------------//
		
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

		$simpan['kode_rapat'] = $kode;
		$simpan['kode_paket'] = $this->input->post("kode_paket");
		$simpan['nama_paket'] = $this->input->post("paket");
		$hasil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $simpan['kode_paket']));
		$hasil_data = $hasil->row();
		
		// $simpan['kode_ppk'] = $this->input->post("kode_ppk");
		// $hasil = $this->db->get_where('master_user',array('id' => $simpan['kode_ppk']));
		// $hasil_data = $hasil->row();
		$simpan['kode_ppk'] = $hasil_data->kode_ppk ;
		$simpan['nama_ppk'] = $hasil_data->nama_ppk ;

		$simpan['kode_pokja'] = $hasil_data->kode_pokja ;
		$simpan['nama_pokja'] = $hasil_data->nama_pokja ;

		$simpan['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");
		$simpan['nama_satuan_kerja'] = $this->input->post("nama_satuan_kerja");
		
		$simpan['tanggal_rapat']=$this->input->post('tanggal_rapat');
		$simpan['agenda']=$this->input->post('agenda');
		
		$simpan['tempat']=$this->input->post('tempat');
		$simpan['waktu']=$this->input->post('waktu');


		//$simpan['notulensi']='terisi';
		$simpan['tahun']=date("Y");
		$simpan['tutup_tahun']='Open';

		$insert=$this->db->insert("transaksi_rapat",$simpan);
		/*echo $this->db->last_query();
		echo '<div class="alert alert-success">Data Sukses </div>';*/
		header("location:".base_url().'honor_pokja/honor_pokja/content')  ; 

	}

	public function tambah_jadwal()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/tambah_jadwal', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function content()
	{

		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function tambah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function form_surat()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/form_surat', NULL, TRUE);
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

		$simpan['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");
		$hasil_satuan_kerja = $this->db->get_where('master_satuan_kerja',array('id' => $simpan['kode_satuan_kerja']));
		$hasil_data_satuan_kerja = $hasil_satuan_kerja->row();
		$simpan['nama_satuan_kerja'] = $hasil_data_satuan_kerja->unit_kerja ;

		$data['tempat'] = $this->input->post("tempat");

		$data['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");
		$data['nama_satuan_kerja'] = $this->input->post("nama_satuan_kerja");
		
		$data['nama_pokja'] = $this->input->post("nama_pokja");
		$data['kode_pokja'] = $this->input->post("kode_pokja");
		$data['tahun'] = date(Y);
		$data['tutup_tahun'] = 'open';

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
		/*echo '<div class="alert alert-success">Sudah tersimpan.</div>';*/
		header('location:'.base_url().'honor_pokja/honor_pokja/content');    
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	
	public function print_surat()
	{	
		
		$this->load->view('honor_pokja/honor_pokja/print_surat');
	}

	public function ubah()
	{	
		$data['menu'] = 'master';
		$data['konten'] = $this->load->view('honor_pokja/honor_pokja/ubah', NULL, TRUE);
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
		/*echo '<div class="alert alert-success">Berhasil diubah.</div>';*/
		header('location:'.base_url().'honor_pokja/honor_pokja/content');

	}

	public function simpan_lanjut()
	{	
		$data = $this->input->post();
		$id = $data['id'];
		$simpan['biaya_penunjang'] = $data['biaya_penunjang'];
		$simpan['siup'] = $data['siup'];
		if(@$data['personil_inti'] == 'ada'){
			@$personil = implode("|", $data['personil_inti_minimal']);
			@$simpan['personil_inti_minimal'] = @$personil;
		}else{
			@$simpan['personil_inti_minimal'] = $data['personil_inti'];
		}

		if(@$data['peralatan_inti'] == 'ada'){
			@$peralatan = implode("|", $data['peralatan_inti_minimal']);
			@$simpan['peralatan_utama_minimal'] = @$peralatan;
		}else{
			@$simpan['peralatan_utama_minimal'] = @$data['peralatan_inti'];
		}

		$simpan['file_jadwal'] = $data['file_jadwal'];
		$simpan['file_daftar_identitas'] = $data['file_daftar_identitas'];
		$simpan['file_rab'] = $data['file_rab'];
		$simpan['file_gambar_teknis'] = $data['file_gambar_teknis'];
		$simpan['surat_dukungan'] = $data['surat_dukungan'];
		$simpan['jenis_kontrak'] = $data['jenis_kontrak'];
		$simpan['jadwal_pelaksanaan'] = $data['jadwal_pelaksanaan'];
		$simpan['uang_muka'] = $data['uang_muka'];
		$simpan['pembayaran_prestasi'] = $data['pembayaran_prestasi'];
		$simpan['masa_pembayaran'] = $data['masa_pembayaran'];

		@$keterangan = implode("|", $data['keterangan_tambahan']);
		$simpan['keterangan_tambahan'] = @$keterangan;

		$simpan['notulensi']='terisi';

		$this->db->update("transaksi_rapat", $simpan,array('id'=>$id));
//		echo $this->db->last_query();


		$posisi = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
		$fix = $posisi->row();
//		echo $this->db->last_query();


		$hasil_jadi=$fix->kode_paket;

		$hasil_posisi['posisi']='lanjut lelang';

		$this->db->update("transaksi_data_paket",$hasil_posisi,array('kode_paket'=>$hasil_jadi));
//		echo $this->db->last_query();


		// echo '<div class="alert alert-success">Berhasil diubah.</div>';
		// header('location:'.base_url().'honor_pokja/honor_pokja/jadwal_rapat');
	}

	public function simpan_revisi()
	{	
		$data = $this->input->post();
		$id = @$data['id'];
		$simpan['biaya_penunjang'] = $data['biaya_penunjang'];
		$simpan['siup'] = $data['siup'];
		if(@$data['personil_inti'] == 'ada'){
			@$personil = implode("|", $data['personil_inti_minimal']);
			@$simpan['personil_inti_minimal'] = @$personil;
		}else{
			@$simpan['personil_inti_minimal'] = @$data['personil_inti'];
		}

		if(@$data['peralatan_inti'] == 'ada'){
			@$peralatan = implode("|", $data['peralatan_inti_minimal']);
			@$simpan['peralatan_utama_minimal'] = @$peralatan;
		}else{
			@$simpan['peralatan_utama_minimal'] = @$data['peralatan_inti'];
		}

		$simpan['file_jadwal'] = $data['file_jadwal'];
		$simpan['file_daftar_identitas'] = $data['file_daftar_identitas'];
		$simpan['file_rab'] = $data['file_rab'];
		$simpan['file_gambar_teknis'] = $data['file_gambar_teknis'];
		$simpan['surat_dukungan'] = $data['surat_dukungan'];
		$simpan['jenis_kontrak'] = $data['jenis_kontrak'];
		$simpan['jadwal_pelaksanaan'] = $data['jadwal_pelaksanaan'];
		$simpan['uang_muka'] = $data['uang_muka'];
		$simpan['pembayaran_prestasi'] = $data['pembayaran_prestasi'];
		$simpan['masa_pembayaran'] = $data['masa_pembayaran'];

		@$keterangan = implode("|", $data['keterangan_tambahan']);
		$simpan['keterangan_tambahan'] = @$keterangan;

		$simpan['notulensi']='terisi';



		$this->db->update("transaksi_rapat", $simpan,array('id'=>$id));
//		echo $this->db->last_query();


		$posisi_2 = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
		$fix_2 = $posisi_2->row();
//		echo $this->db->last_query();

		@$hasil_jadi_2=$fix_2->kode_paket;

		$hasil_posisi['posisi']='revisi paket';

		$this->db->update("transaksi_data_paket",$hasil_posisi,array('kode_paket'=>$hasil_jadi_2));
//		echo $this->db->last_query();

		// echo '<div class="alert alert-success">Berhasil diubah.</div>';
		// header('location:'.base_url().'honor_pokja/honor_pokja/jadwal_rapat');
	}

	public function hapus(){
		$id = $this->input->post('id');
		$this->db->delete('transaksi_rapat', array('id' => $id));
	}


}
