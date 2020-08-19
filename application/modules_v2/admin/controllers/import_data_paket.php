<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class import_data_paket extends MY_Controller {

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

	public function jalan_import()
	{
		require('excel_reader2_.php');
		$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
		$data->setOutputEncoding('CP1251');
		$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;

$query1 = "TRUNCATE TABLE  master_data_paket;";
$hasil1 = $this->db->query($query1);

for ($i=2; $i<=$hasildata; $i++)
{
	
	$nama_paket = $data->val($i,2);
	#$tanggal_pengajuan = $data->val($i,2);
	$kegiatan = $data->val($i,1); 
	$volume = $data->val($i,3); 
	$lokasi = $data->val($i,4); 
	$pagu = $data->val($i,5);
	$kode_satuan_kerja = $data->val($i,6); 
	$nama_satuan_kerja = $data->val($i,7); 
	$nama_sumber_dana = $data->val($i,8);
	$jenis_pengadaan = $data->val($i,9);
	$tanggal_rencana_pengadaan = $data->val($i,10);
	$tanggal_rencana_pekerjaan = $data->val($i,11);

	$query = "INSERT INTO master_data_paket VALUES (null,'$kegiatan','$nama_paket','$volume','$lokasi','$pagu','$kode_satuan_kerja','$nama_satuan_kerja','$nama_sumber_dana','$jenis_pengadaan','$tanggal_rencana_pengadaan','$tanggal_rencana_pekerjaan')";
	$hasil = $this->db->query($query);

	}
	/*$data['konten'] = $this->load->view('import_data_paket/content', NULL, TRUE);
	$this->load->view ('main', $data);*/
	header('location:'.base_url().'admin/import_data_paket/content');
}

	public function content()
	{
		$data['konten'] = $this->load->view('import_data_paket/content', NULL, TRUE);
		$this->load->view ('main', $data);
	}


	public function tambah()
	{
		$data['konten'] = $this->load->view('import_data_paket/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('isi', 'temp', 'required');
		$this->form_validation->set_rules('id_ym', 'temp', 'required');        

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['isi'] = $this->input->post("isi");
			$data['id_ym'] = $this->input->post("id_ym");
			$this->db->insert("contact", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('contact/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('contact/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('contact/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
					

			
			$data['isi'] = $this->input->post("isi");
			$data['telepon'] = $this->input->post("telepon");
			$data['handphone'] = $this->input->post("handphone");
			$data['email'] = $this->input->post("email");
			$data['fb'] = $this->input->post("fb");
			$data['ig'] = $this->input->post("ig");
			$data['pin_bb'] = $this->input->post("pin_bb");
			$data['id_ym'] = $this->input->post("id_ym"); 
			$data['status'] = $this->input->post("status"); 
			$id 			    = $this->input->post("id");
			$this->db->update("contact", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('contact', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>';    
	}
}
