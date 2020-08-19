<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends MY_Controller {

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

	public function tambah()
	{
		$data['konten'] = $this->load->view('paket/tambah', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function tambah_keterangan()
	{
		$data['konten'] = $this->load->view('paket/tambah_keterangan', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function tambah_kategori()
	{
		$data['konten'] = $this->load->view('paket/tambah_kategori', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	public function daftar_kategori()
	{
		$data['konten'] = $this->load->view('paket/daftar_kategori', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function daftar_keterangan()
	{
		$data['konten'] = $this->load->view('paket/daftar_keterangan', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function simpan_keterangan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['keterangan'] = $this->input->post("keterangan");
			$this->db->insert("keterangan_paket", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}

	}

	public function simpan_ubah_keterangan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$id = $this->input->post("id");
			$data['keterangan'] = $this->input->post("keterangan");
			$this->db->update("keterangan_paket", $data, "id = " . $id);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}

	public function simpan_temp()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_kategori', 'temp', 'required');
		$this->form_validation->set_rules('indihome', 'temp', 'required');
		$this->form_validation->set_rules('telp_rumah', 'temp', 'required');
		$this->form_validation->set_rules('cable', 'temp', 'required');
		$this->form_validation->set_rules('harga', 'temp', 'required');
		$this->form_validation->set_rules('kode_tr', 'temp', 'required');
		   

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['kode_kategori'] = $this->input->post("kode_kategori");
			$data['indihome'] = $this->input->post("indihome");
			$data['telp_rumah'] = $this->input->post("telp_rumah");
			$data['cable'] = $this->input->post("cable");
			$data['harga'] = $this->input->post("harga");
			$data['kode_tr'] = $this->input->post("kode_tr");
			$this->db->insert("produk_indihome_temp", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}

	public function simpan_ubah_temp()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_kategori', 'temp', 'required');
		$this->form_validation->set_rules('indihome', 'temp', 'required');
		$this->form_validation->set_rules('telp_rumah', 'temp', 'required');
		$this->form_validation->set_rules('cable', 'temp', 'required');
		$this->form_validation->set_rules('harga', 'temp', 'required');
		$this->form_validation->set_rules('kode_tr', 'temp', 'required');
		   

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$id =  $this->input->post("id");
			$data['kode_kategori'] = $this->input->post("kode_kategori");
			$data['indihome'] = $this->input->post("indihome");
			$data['telp_rumah'] = $this->input->post("telp_rumah");
			$data['cable'] = $this->input->post("cable");
			$data['harga'] = $this->input->post("harga");
			$data['kode_tr'] = $this->input->post("kode_tr");
			$this->db->update("produk_indihome_temp", $data, "id = " . $id);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}

	public function simpan_ubah_paket()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_kategori', 'temp', 'required');
		$this->form_validation->set_rules('indihome', 'temp', 'required');
		$this->form_validation->set_rules('telp_rumah', 'temp', 'required');
		$this->form_validation->set_rules('cable', 'temp', 'required');
		$this->form_validation->set_rules('harga', 'temp', 'required');
		$this->form_validation->set_rules('kode_tr', 'temp', 'required');
		   

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$id =  $this->input->post("id");
			$data['kode_kategori'] = $this->input->post("kode_kategori");
			$data['indihome'] = $this->input->post("indihome");
			$data['telp_rumah'] = $this->input->post("telp_rumah");
			$data['cable'] = $this->input->post("cable");
			$data['harga'] = $this->input->post("harga");
			$data['kode_tr'] = $this->input->post("kode_tr");
			$this->db->update("produk_indihome", $data, "id = " . $id);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}

	public function ubah_paket()
	{
		$data['konten'] = $this->load->view('paket/ubah_paket', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function ubah_keterangan()
	{
		$data['konten'] = $this->load->view('paket/ubah_keterangan', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function hapus_paket_temp()
	{
		$key = $_REQUEST['key'];
		$this->db->delete('produk_indihome_temp', array('id' => $key));
		echo '<div class="alert alert-success">Berhasil dihapus.</div>'; 
	}

	public function simpan_kategori()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kategori', 'temp', 'required');
		
		   

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['kategori_nama'] = $this->input->post("kategori");
			
			$this->db->insert("kategori_indihome", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}

	public function simpan()
	{
		$kode  = $this->uri->segment(4);

		$get_temp = $this->db->query("SELECT * from produk_indihome_temp where kode_tr = '$kode'");
		$hasil_temp = $get_temp->result();

		foreach ($hasil_temp as $temp) {
			$data['kode_kategori']= $temp->kode_kategori;
			$data['indihome']= $temp->indihome;
			$data['telp_rumah']= $temp->telp_rumah;
			$data['cable']= $temp->cable;
			$data['harga']= $temp->harga;
			$data['kode_tr'] = $temp->kode_tr;

			$this->db->insert("produk_indihome", $data);

		}

		$this->db->delete('produk_indihome_temp', array('kode_tr' => $kode));
	}
	public function table_temp()
	{
		$this->load->view('paket/tabletemp');
	}
	public function edit_paket_temp()
	{
		$id= $this->input->post("key");
		$get_paket = $this->db->query("SELECT * from produk_indihome_temp where id='$id'");
		$hasil_paket = $get_paket->row();
		echo json_encode($hasil_paket);
	}


	public function simpan_tambah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');
		   

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';            
		} else {
			$data['keterangan'] = $this->input->post("keterangan");
			$data['status'] = '1';
			$this->db->insert("tentang", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
		}
	}	

	public function daftar()
	{
		
		$data['konten'] = $this->load->view('paket/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('tentang/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('paket/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'temp', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo '<div class="alert alert-warning">Gagal tersimpan.</div>';
		} else {
			$data['keterangan'] = $this->input->post("keterangan");
			$data['status'] = $this->input->post("status"); 
			$id 			    = $this->input->post("id");
			$this->db->update("tentang", $data, "id = " . $id);
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		}
	}

	

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('produk_indihome', array('id' => $key));
		echo '<div class="alert alert-success">Paket sudah dihapus.</div>';    
	}
	public function hapus_kategori()
	{
		$key = $_REQUEST['key'];
		$this->db->delete('kategori_indihome', array('id' => $key));
		echo '<div class="alert alert-success">Kategori sudah dihapus.</div>';   
	}
	public function hapus_keterangan()
	{
		$key = $_REQUEST['key'];
		$this->db->delete('keterangan_paket', array('id' => $key));
		echo '<div class="alert alert-success">keterangan sudah dihapus.</div>';   
	}
}
