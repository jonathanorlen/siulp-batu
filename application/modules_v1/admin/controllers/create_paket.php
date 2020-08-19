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
    public function tambah_manual()
    {   
        $data['menu'] = 'Data';
        $data['konten'] = $this->load->view('create_paket/tambah_manual', NULL, TRUE);
        $this->load->view ('main', $data);
    }

    public function cetak_tugas()
    {   

        $id = $this->input->post("id");
        $data['nomor_surat_sekretariat'] = $this->input->post("nomor_surat");

        $this->db->update('transaksi_data_paket',$data,array("id" => $id));
        
       # $this->load->view('create_paket/cetak_tugas');


    }
    public function cetak_surat()
    {   

        $id = $this->input->post("id");
        
        $this->load->view('create_paket/cetak_tugas');


    }
    
    public function get_status()
    {   

        $this->load->view('create_paket/get_status');

    }

    public function get_kode()
    {

        $kode=$this->input->post("nama_paket");
        $this->db->where('nama_paket',$kode);
        $get = $this->db->get("master_data_paket");
        $hasil_get = $get->row();

        echo json_encode($hasil_get);
    }
    public function get_rupiah()
    {

        $rupiah=$this->input->post("rupiah");
        echo format_rupiah($rupiah);
    }

    public function get_kode_hps()
    {

        $hps=$this->input->post("hps");
        $jenis_pengadaan=$this->input->post("jenis_pengadaan");
        if($jenis_pengadaan=="Jasa Konsultansi"){
            if( $hps >= 50000000 and  $hps <= 200000000){
                $metode_pengadaan = "Seleksi Sederhana";
            }else if($hps > 200000000){
                $metode_pengadaan = "Seleksi Umum";
            }

        }else if($jenis_pengadaan=="Konstruksi"){
            if($hps >= 200000000 and $hps <= 5000000000){
                $metode_pengadaan = "Pemilihan Langsung";
            }else if($hps > 5000000000){
                $metode_pengadaan = "Lelang Umum";
            }

        }else if($jenis_pengadaan=="Barang"){
            if($hps >= 200000000 and $hps <= 5000000000){
                $metode_pengadaan = "Lelang Sederhana";
            }else if($hps > 5000000000){
                $metode_pengadaan = "Lelang Umum";
            }
        }else if($jenis_pengadaan=="Jasa Lainnya"){
            if($hps >= 200000000 and $hps <= 5000000000){
                $metode_pengadaan = "Lelang Sederhana";
            }else if($hps > 5000000000){
                $metode_pengadaan = "Lelang Umum";
            }
        }

        echo (@$metode_pengadaan).'|'.@format_rupiah($hps);

        if(@$jenis_pengadaan=="Jasa Konsultansi" and (( @$hps >= 50000000 and  @$hps <= 200000000) or (@$hps > 200000000))){
            echo '| ';
        }else if(@$jenis_pengadaan=="Konstruksi" and ((@$hps >= 200000000 and @$hps <= 5000000000) or (@$hps > 5000000000))){
            echo '| ';
        }else if(@$jenis_pengadaan=="Barang" and ((@$hps >= 200000000 and @$hps <= 5000000000) or (@$hps > 5000000000))){
            echo '| ';
        }else if(@$jenis_pengadaan=="Jasa Lainnya" and ((@$hps >= 200000000 and @$hps <= 5000000000) or (@$hps > 5000000000))){
         echo '| ';
     }else{
        echo '|<div class="alert alert-danger">HPS Tidak Mencukupi.</div>|0';

    }
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


$hps=$this->input->post("hps");
$jenis_pengadaan=$this->input->post("jenis_pengadaan");
$cek_hps="cukup";
if(@$jenis_pengadaan=="Jasa Konsultansi" && (( @$hps >= 50000000 &&  @$hps <= 200000000) || (@$hps > 200000000))){

}else if(@$jenis_pengadaan=="Konstruksi" && ((@$hps >= 200000000 && @$hps <= 5000000000) || (@$hps > 5000000000))){

}else if(@$jenis_pengadaan=="Barang" && ((@$hps >= 200000000 && @$hps <= 5000000000) || (@$hps > 5000000000))){

}else if(@$jenis_pengadaan=="Jasa Lainnya" && ((@$hps >= 200000000 && @$hps <= 5000000000) || (@$hps > 5000000000))){

}else{
    echo '<div class="alert alert-danger">HPS Tidak Mencukupi.</div>';
    $cek_hps="Tidak cukup";
}
if($cek_hps=='cukup'){
    $data['kode_paket'] = $kode ;
    $data['nama_paket'] = $this->input->post("nama_paket");
    $data['tanggal_pengajuan'] = $this->input->post("tanggal_pengajuan");
    $data['tanggal_rencana_pengadaan'] = $this->input->post("tanggal_rencana_pengadaan");
    $data['tanggal_rencana_pekerjaan'] = $this->input->post("tanggal_rencana_pekerjaan");
    $data['volume'] = $this->input->post("volume");
    $data['kegiatan'] = $this->input->post("kegiatan");
    $data['lokasi'] = $this->input->post("lokasi");
    $data['pagu'] = $this->input->post("pagu");
    $data['hps'] = $this->input->post("hps");
    $tanggal_pengajuan = $this->input->post("tanggal_pengajuan");
    $tanggal_rencana_pengadaan = $this->input->post("tanggal_rencana_pengadaan");

		// $data['kode_satuan_kerja'] = $this->input->post("satuan_kerja");
		// $hasil = $this->db->get_where('master_satuan_kerja',array('id' => $data['kode_satuan_kerja']));
		// $hasil_data = $hasil->row();
		// $data['nama_satuan_kerja'] = $hasil_data->unit_kerja ;
    $data['nama_satuan_kerja'] = $this->input->post("satuan_kerja");
    $data['nomor_surat_ppk'] = $this->input->post("nomor_surat");


    // $get_tanggal_pengajuan = $this->db->get('transaksi_data_paket');
    // $tanggal_pengajuan = $get_tanggal_pengajuan->row();

    // $get_tanggal_rencana_pengadaan = $this->db->get('master_data_paket');
    // $tanggal_rencana_pengadaan = $get_tanggal_rencana_pengadaan->row();

    if($tanggal_pengajuan > $tanggal_rencana_pengadaan){

        $status_pengajuan="Overdue";

    } else {
        $status_pengajuan="";
    }
    $data['status_pengajuan']= $status_pengajuan;

    $data['nama_sumber_dana'] = $this->input->post("sumber_dana");
    $hasil_dana = $this->db->get_where('master_sumber_dana',array('nama_sumber_dana' => $data['nama_sumber_dana']));
    $hasil_data_dana = $hasil_dana->row();
    $data['kode_sumber_dana'] = @$hasil_data_dana->id;	

    $data['nama_sumber_dana'] = $this->input->post("sumber_dana");
    $data['jenis_pengadaan'] = $this->input->post("jenis_pengadaan");
    $data['metode_pengadaan'] = $this->input->post("metode_pengadaan");
    $data['posisi'] = 'Verifikasi Sekretariat';
    $data['tutup_tahun'] = 'Open';
    $data['tahun'] = date("Y");
    $get_group = $this->session->userdata('astrosession');
    $kode_petugas = $get_group->nip;
    $nama_petugas = $get_group->nama;

    $data['kode_ppk'] = $kode_petugas;
    $data['nama_ppk'] = $nama_petugas;
    $data['kode_satuan_kerja'] = $this->input->post("kode_satuan_kerja");

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

    $this->db->insert("transaksi_data_paket", $data);



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

    //echo '<div class="alert alert-success">Sudah tersimpan.</div>';
    header("location:".base_url().'admin/create_paket/content');    
}

}	 

public function simpan_ubah() {

    $id=$this->input->post('kode_paket');
    $kode=$this->input->post('kode_paket');
    // $data['hps'] = $this->input->post("hps");
    // $data['pagu'] = $this->input->post("pagu");
    // $data['posisi'] = 'Verifikasi Sekretariat';
    // $data['nama_paket'] = $this->input->post("nama_paket");
    // //$data['nama_paket_2'] = $this->input->post("nama_paket");
    // $data['tanggal_pengajuan'] = $this->input->post("tanggal_pengajuan");
    // $data['volume'] = $this->input->post("volume");
    // $data['kegiatan'] = $this->input->post("kegiatan");
    // $data['lokasi'] = $this->input->post("lokasi");
    // $data['nama_satuan_kerja'] = $this->input->post("nama_satuan_kerja");
    // $data['nama_sumber_dana'] = $this->input->post("nama_sumber_dana");
    // $hasil_dana = $this->db->get_where('master_sumber_dana',array('nama_sumber_dana' => $data['nama_sumber_dana']));
    // $hasil_data_dana = $hasil_dana->row();
    // $data['kode_sumber_dana'] = @$hasil_data_dana->id;
    // $data['jenis_pengadaan'] = $this->input->post("jenis_pengadaan");

    $data['metode_pengadaan'] = $this->input->post("metode_pengadaan");
    // $tanggal_pengajuan = $this->input->post("tanggal_pengajuan");
    // $tanggal_rencana_pengadaan = $this->input->post("tanggal_rencana_pengadaan");
    $status= '';
    $data_status = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $id));
    $hasil_data_status = $data_status->row();
    if($hasil_data_status->status_paket=='Dokumen Kosong'){
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
    }else{
       if (empty($_FILES['dokumen_dpa']['tmp_name']) || empty($_FILES['dokumen_rup']['tmp_name']) || empty($_FILES['dokumen_kak']['tmp_name']) || empty($_FILES['dokumen_hps']['tmp_name']) || empty($_FILES['dokumen_survey']['tmp_name']) || empty($_FILES['dokumen_rup']['tmp_name']) || empty($_FILES['dokumen_bill']['tmp_name']) || empty($_FILES['dokumen_rancangan']['tmp_name']))
        {
            $status='Dokumen Belum Lengkap';     
        }
        elseif (!empty($_FILES['dokumen_dpa']['tmp_name']) && !empty($_FILES['dokumen_rup']['tmp_name']) && !empty($_FILES['dokumen_kak']['tmp_name']) && !empty($_FILES['dokumen_hps']['tmp_name']) && !empty($_FILES['dokumen_survey']['tmp_name']) && !empty($_FILES['dokumen_rup']['tmp_name']) && !empty($_FILES['dokumen_bill']['tmp_name']) && !empty($_FILES['dokumen_rancangan']['tmp_name'])) {
            $status='Dokumen Lengkap';
        }
    }

    

    $data['status_paket'] = $status;

    $this->db->update("transaksi_data_paket", $data,array('kode_paket' => $id));
    


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
    
    

   

   header("location:".base_url().'admin/create_paket/content')  ;        
}   

public function simpan_ubah_item() {

    $id=$this->input->post('kode_paket');
    $kode_histori=$this->input->post('kode_paket');

    $histori['kode_paket']=$this->input->post('kode_paket');
    $histori['field_perubahan']=$this->input->post('fild');
    
    $field_perubahan=$this->input->post('fild');
    $histori['data_baru']=@$this->input->post($field_perubahan);
    $histori['data_lama']=$this->input->post('data_lama');
    $get_group_2 = $this->session->userdata('astrosession');
    $kode_petugas_2 = $get_group_2->nip;
    $nama_petugas_2 = $get_group_2->nama;

    $histori['kode_petugas']=$kode_petugas_2;
    $histori['nama_petugas']=$nama_petugas_2;
    $histori['time']=date('Y-m-d H:i:s');

    $this->db->insert("histori_paket", $histori);
    $data=$this->input->post();
    unset($data['fild']);
    unset($data['kode_paket']);
    unset($data['data_lama']);
    
    if(!empty($data['nama_sumber_dana'])){
        $hasil_dana = $this->db->get_where('master_sumber_dana',array('nama_sumber_dana' => @$data['nama_sumber_dana']));
        $hasil_data_dana = $hasil_dana->row();
        $data['kode_sumber_dana'] = @$hasil_data_dana->id;
    }
    
    if(!empty($data['nama_satuan_kerja'])){
        $hasil_dana = $this->db->get_where('master_satuan_kerja',array('unit_kerja' => @$data['nama_satuan_kerja']));
        $hasil_data_dana = $hasil_dana->row();
        $data['kode_satuan_kerja'] = @$hasil_data_dana->kode_skpd;
    }

    $this->db->update("transaksi_data_paket", $data,array('kode_paket' => $id));
    
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

  public function upload()
  {
    $item = 
    $data['konten'] = $this->load->view('create_paket/upload', NULL, TRUE);
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
