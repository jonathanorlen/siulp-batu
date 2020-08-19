<?php
defined('BASEPATH') or exit('No direct script access allowed');

class struktur_ulp extends MY_Controller
{

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
        if ($this->session->userdata('astrosession') == false) {
            redirect(base_url('authenticate'));
        }
    }

    public function content()
    {
        $data['menu'] = 'master';
        $data['konten'] = $this->load->view('struktur_ulp/content', null, true);
        $this->load->view('main', $data);
    }


    public function tambah()
    {
        $data['menu'] = 'master';
        $data['konten'] = $this->load->view('struktur_ulp/tambah', null, true);
        $this->load->view('main', $data);
    }

    public function detail()
    {
        $data['menu'] = 'master';
        $data['konten'] = $this->load->view('struktur_ulp/detail', null, true);
        $this->load->view('main', $data);
    }

    public function ubah()
    {
        $data['menu'] = 'master';
        $data['konten'] = $this->load->view('struktur_ulp/ubah', null, true);
        $this->load->view('main', $data);
    }

    public function simpan_tambah()
    {
        $input = $this->input->post();
        $data['nip'] = $this->input->post("nip");
        $data['nama'] = $this->input->post("nama");

        $data['jabatan'] = $input['jabatan'];
        $data['jabatan_lain'] = $this->input->post("jabatan_lain");

        $data['pangkat'] = $this->input->post("pangkat");
        $data['jabatan_blp'] = $input['jabatan_blp'];


        $this->db->insert("master_struktur_ulp", $data);

        $user['nama'] = $data['nama'];
        $user['uname'] = $input['username'];
        $user['upass'] = paramEncrypt($input['password']);
        $user['kode_jabatan'] = $data['jabatan_blp'];
        $jabatan = $this->db->get_where('master_jabatan', array('kode_jabatan' => $input['jabatan_blp']));
        $hasil_jabatan = $jabatan->row();
        $user['nama_jabatan'] = $hasil_jabatan->nama_jabatan;
        $user['nip'] = $input['nip'];
        $user['pangkat_gol'] = $input['pangkat'];
        $this->db->insert('master_user', $user);
        //echo '<div class="alert alert-success">Sudah tersimpan.</div>';
        header('location:' . base_url() . 'admin/struktur_ulp/content');
    }

    public function simpan_ubah()
    {
        $input = $this->input->post();
        $data['nip'] = $this->input->post("nip");
        $data['nama'] = $this->input->post("nama");
        $data['jabatan'] = $this->input->post("jabatan");
        $data['jabatan_lain'] = $this->input->post("jabatan_lain");
        $data['pangkat'] = $this->input->post("pangkat");
        $data['jabatan_blp'] = $input['jabatan_blp'];

        $id = $this->input->post("id");
        $this->db->update("master_struktur_ulp", $data, array('id' => $id));
        
        $user['nama'] = $data['nama'];
        $user['uname'] = $input['username'];
        $user['upass'] = paramEncrypt($input['password']);
        $user['kode_jabatan'] = $data['jabatan_blp'];
        $jabatan = $this->db->get_where('master_jabatan', array('kode_jabatan' => $input['jabatan_blp']));
        $hasil_jabatan = $jabatan->row();
        $user['nama_jabatan'] = $hasil_jabatan->nama_jabatan;
        $user['nip'] = $input['nip'];
        $user['pangkat_gol'] = $input['pangkat'];
        $this->db->update('master_user', $user,array('id'=>$input['id_user']));

        //	echo '<div class="alert alert-success">Berhasil diubah.</div>';
        header('location:' . base_url() . 'admin/struktur_ulp/content');
    }
    /*public function hapus() {
    $key = $_GET['id'];
    $this->db->delete('master_struktur_ulp', array('id' => $key));
    echo '<div class="alert alert-success">Berita sudah dihapus.</div>'; 
    header('location:'.base_url().'admin/struktur_ulp/content');  
    }*/

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('master_struktur_ulp', array('id' => $id));
    }
}
