<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Authenticate extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->module = 'authenticate';
        $this->cname = 'authenticate';
        $this->load->model('Mdl_login');
    }


    function index()
    {
        if ($this->session->userdata('astrosession') == true) {
            redirect(base_url('admin/'));
        } else {
            $data['cname'] = $this->module;
            $data['title'] = "Authentication";
            $data['content'] = $this->load->view($this->module . '/login', $data, true);
            $this->load->view('login', $data);
        }
    }


    public function login()
    {
        $user = $this->input->post('login-email');
        $pass = $this->input->post('login-password');

        $password = paramEncrypt($pass);

        $get = $this->db->query("SELECT * FROM master_user WHERE uname='$user' AND upass='$password'");
        $hasil = $get->row();

        if (count($hasil) == 1) {
            $id = $hasil->id;
            $this->session->set_userdata('astrosession', $hasil);
            redirect(base_url('admin/'));

            $rapat = $this->db->get_where('transaksi_rapat',array('tutup_tahun'=>'Open','notulensi !='=>'terisi',
                'status_ppk'=>'Terima','status_pokja'=>'Terima'));
            foreach ($rapat->result() as $daftar) {
                if($daftar->tanggal_rapat == date('Y-m-d')){
                    $status['status_paket'] = 'Rapat Kaji Ulang';
                    $this->db->update('transaksi_data_paket',$status,array('kode_paket'=>$daftar->kode_paket));
                }
                
            }
        } else {
            header('location:'.'htpp://siulpweb.cloud-astro.com');  
        }

    }


    public function test_set()
    {

        $id = 'satuasasasas';
        $this->session->set_userdata('test', $id);

    }

    public function test_get()
    {

        $id = $this->session->userdata('test');
        echo $id;
    }


    public function generate()
    {
        $karakter = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890";
        $string = '';
        $user = $this->session->userdata('astrosession');
        $id = $user->id;

        for ($i = 0; $i < 10; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        $data = $this->input->post();

            #$update['tanggal_generate'] = $tgl;
        $update['generate'] = $string;
        $this->db->update('master_user', $update, array('id' => $id));

        $from_add = "blpbatu@gmail.com";

            #$to_add = "yukotanjung@gmail.com";
        $to_add = $user->email;

        $subject = "Kode Verifikasi";
        $message = "Silakan masukkan kode verifikasi anda ke form yang disediakan " . $string;

        $headers = "From: $from_add \r\n";
        $headers .= "Reply-To: $from_add \r\n";
        $headers .= "Return-Path: $from_add\r\n";
        $headers .= "X-Mailer: PHP \r\n";


        if (mail($to_add, $subject, $message, $headers)) {
            $msg = "Mail sent OK";
        } else {
            $msg = "Error sending email!";
        }


        echo $string;
    }
}

/* End of file signin.php */
/* Location: ./application/modules/authenticate/controllers/authenticate.php */
