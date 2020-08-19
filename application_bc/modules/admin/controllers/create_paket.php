<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_paket extends MY_Controller {

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
		$data['konten'] = $this->load->view('create_paket/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function tambah()
	{	
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('create_paket/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
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
        
        $hps = $this->input->post("hps");
        $jenis_pengadaan = $this->input->post("jenis_pengadaan");
		$data['jenis_pengadaan'] = $jenis_pengadaan;
        $metode_pengadaan = '';
        if($jenis_pengadaan=="konsultansi"){
            if($hps > 200000000){
                $metode_pengadaan = "seleksi umum";
            }else if($hps<200000000){
                $metode_pengadaan = "seleksi sederhana";
            }
        }else if($jenis_pengadaan=="konstruksi"){
            if($hps >5000000000){
                $metode_pengadaan = "lelang umum";
            }else if($hps <5000000000){
                $metode_pengadaan = "pemilihan langsung";
            }
        }else if($jenis_pengadaan=="barang"){
            if($hps > 5000000000){
                $metode_pengadaan = "lelang umum";
            }else if($hps < 5000000000){
                $metode_pengadaan = "lelang sederhana";
            }
        }
        
         
		

		$data['status'] = ("proses verifikasi");

        echo $hps;
		/*$this->db->insert("transaksi_data_paket", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header("location:".base_url().'admin/create_paket/content') */ ;        
	}	

	public function simpan_ubah() {
		$id = $this->input->post("id");
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


		$this->db->update("transaksi_data_paket", $data,array('id' => $id));
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';
		header("location:".base_url().'admin/create_paket/content')  ;        
	}	

	 public function uploud_file()

    {
    	$id = $this->input->post("id");
    	/*$kode = $this->input->post("armada");

    	$get_armada = $this->db->get_where("kategori_armada",array('id' => $kode));
    	$hasil_armada = $get_armada->row();

    	$data['nama']                    = strtoupper($this->input->post("nama"));
    	$data['email']                    = $this->input->post("email");
    	$data['negara']                    = strtoupper($this->input->post("negara"));
    	$data['tahun_produksi']          = $this->input->post("tahun_produksi");
    	$data['kapasitas_penumpang']          = $this->input->post("kapasitas_penumpang");
    	$data['alamat']                  = strtoupper($this->input->post("alamat"));
    	$data['telp']                    = $this->input->post("telp");
    	$data['tanggal_registrasi']      = date('Y-m-d');
    	$data['kode_kategori_armada']    =  $hasil_armada->id;
    	$data['biaya_sewa']              =  $hasil_armada->tarif_3;
    	$data['status_driver']           = 'pending';
    	$data['bank']                    =  strtoupper($this->input->post("bank"));
    	$data['no_rekening']             =  $this->input->post("no_rekening");
    	$data['nama_kendaraan']          =  strtoupper($this->input->post("nama_kendaraan"));
    	$data['nomor_polisi']            =  strtoupper($this->input->post("nomor_polisi"));
    	$data['uname']                   =  $this->input->post("username");
    	$data['upass']                   =  paramEncrypt($this->input->post("password"));
    	$data['location']                = $this->input->post("location");
    	$data['kode_aktivasi']           = date('his');*/

    	$filename = substr(date("Y"),2,4).date("mdHis");
    	$oke = $this->input->post('dokumen_dpa');
  		if(!empty($_FILES['dokumen_dpa']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_dpa']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_dpa_'.$filename.'.'.pathinfo($_FILES['dokumen_dpa']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_dpa'] =  'dokumen_dpa_'.$filename.'.'.pathinfo($_FILES['dokumen_dpa']['name'], PATHINFO_EXTENSION);
    	}
    	$rup =$this->input->post('dokumen_rup');
   		if(!empty($_FILES['dokumen_rup']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_rup']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_rup_'.$filename.'.'.pathinfo($_FILES['dokumen_rup']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_rup'] = 'dokumen_rup_'.$filename.'.'.pathinfo($_FILES['dokumen_rup']['name'], PATHINFO_EXTENSION);
   		}
   		if(!empty($_FILES['dokumen_kak']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_kak']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_kak_'.$filename.'.'.pathinfo($_FILES['dokumen_kak']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_kak'] = 'dokumen_kak_'.$filename.'.'.pathinfo($_FILES['dokumen_kak']['name'], PATHINFO_EXTENSION);
    	}

    	if(!empty($_FILES['dokumen_hps']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_hps']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_hps_'.$filename.'.'.pathinfo($_FILES['dokumen_hps']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_hps'] = 'dokumen_hps_'.$filename.'.'.pathinfo($_FILES['dokumen_hps']['name'], PATHINFO_EXTENSION);
    	}

    	if(!empty($_FILES['dokumen_survey']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_survey']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_survey_'.$filename.'.'.pathinfo($_FILES['dokumen_survey']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_survey'] = 'dokumen_survey_'.$filename.'.'.pathinfo($_FILES['dokumen_survey']['name'], PATHINFO_EXTENSION);
    	}

    	if(!empty($_FILES['dokumen_rup']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_spesifikasi']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_spesifikasi_'.$filename.'.'.pathinfo($_FILES['dokumen_spesifikasi']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_spesifikasi'] = 'dokumen_spesifikasi_'.$filename.'.'.pathinfo($_FILES['dokumen_spesifikasi']['name'], PATHINFO_EXTENSION);
   		}

   		if(!empty($_FILES['dokumen_bill']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_bill']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_bill_'.$filename.'.'.pathinfo($_FILES['dokumen_bill']['name'], PATHINFO_EXTENSION)
    		);

    	$data['dokumen_bill'] = 'dokumen_bill_'.$filename.'.'.pathinfo($_FILES['dokumen_bill']['name'], PATHINFO_EXTENSION);
    	}

    	if(!empty($_FILES['dokumen_rancangan']['tmp_name'])){
    	move_uploaded_file(
    		$_FILES['dokumen_rancangan']['tmp_name'],
    		'./component/upload/file/uploads/'.'dokumen_rancangan_'.$filename.'.'.pathinfo($_FILES['dokumen_rancangan']['name'], PATHINFO_EXTENSION)
    		);
    	$data['dokumen_rancangan'] = 'dokumen_rancangan_'.$filename.'.'.pathinfo($_FILES['dokumen_rancangan_']['name'], PATHINFO_EXTENSION);
    	}
    

    	$insert = $this->db->update("transaksi_data_paket", $data,array('id' => $id)); 
    	
        redirect(base_url().'admin/create_paket/content');

    }

	public function daftar()
	{
		$data['menu'] = 'Data';
		$data['konten'] = $this->load->view('create_paket/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('create_paket/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('create_paket/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function uploud()
	{
		$item = 
		$data['konten'] = $this->load->view('create_paket/uploud', NULL, TRUE);
		$this->load->view ('main', $data);
	}
    
    public function import()
	{
		
		$data['konten'] = $this->load->view('create_paket/import', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('create_paket', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>';    
	}
}
