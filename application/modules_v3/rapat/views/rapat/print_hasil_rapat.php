<!DOCTYPE html>
<head>
  <title>
  </title>
</head>
<body onload="window.print()"">
	<?php 
  $id = $_GET['id_jadwal'];
  $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
  $hasil_ambil_data = $ambil_data->row();

  $data_ambil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $hasil_ambil_data->kode_paket));
  $hasil_data = $data_ambil->row();

  $get_group = $this->session->userdata('astrosession');
  $group = $get_group->group;

  $menu = $this->db->get_where('master_jabatan',array('kode_jabatan'=>$get_group->kode_jabatan));
  $hasil_menu = $menu->row();
  $tanggal=date('Y-m-d');

  $hasil_jabatan=$hasil_menu->kode_jabatan;

  ?>
  <?php if ($hasil_jabatan != '002'){ ?>

  <?php } ?>

   <table style="width:100%;border-collapse: collapse;" id="tabel1" style="border-bottom: 1px;">
      <tr>
            <td rowspan="5" style="width: 20%;text-align: right;position:relative;top: -65px;left:40px; "><img src="<?php echo base_url().'component/logo kota batu.png' ?>" style=" width: 150px;"></td>
            <td><H3 style="text-align: center;position: relative;left:-70px;margin-top:10px;letter-spacing: 3px;">PEMERINTAH KOTA BATU</H3></td>
      </tr>
      <tr>
            <td>
                  <H2 style="text-align: center;position: relative;left:-70px;;top:-38px;letter-spacing: 3px;">SEKRETARIAT DAERAH</H2>
                  <p style="position: relative;text-align: center;top:-60px;left:-70px;">Balaikota Among Tani Gedung A lantai 1</p>
                  <p style="position: relative;text-align:;top:-79px;left: 40px;">Jl. Panglima Sudirman Nomor 507, Kota Batu, Kode Pos 65313</p>
                  <p style="position: relative;text-align;top:-98px;left:110px;">Telepon: 0341-512554,Faks: 0341-512554,</p>
                  <p style="position: relative;text-align:;top:-117px;left:80px;">email : blp@batukota.go.id, webmail : batukota.go.id</p>
            </td> 
      </tr>
      <hr style="position: relative; top: 140px; height:5px; color: #000;">
</table>

<div style="margin-top:-120px">
</div>
  <center>
    <p>
    <h3>
      <u> SURAT PENETAPAN BENCANA PELAKSANAAN PRNGADAAN </u>
    </h3>
    </p>
    <p>
    <h4>
    Nomor : Sesuai Nomor Surat PPK <?php echo $hasil_data->nomor_surat_sekretariat?> terkait
    </h4>
    </p>
  </center>

    <br>
    <div style="font-size:18px">
      Mempertimbangkan Berita Acara Hasil Koordinasi Kaji Ulang Hari :
      <br>
      <?php echo nama_hari($tanggal)?> tanggal  <?php echo TanggalIndo($tanggal)?> ,yang bertandatangan di bawah ini :
      <br>
      Nama : <?php echo $hasil_data->nama_ppk?>
      <br>
      NIP&nbsp&nbsp&nbsp&nbsp: <?php echo $hasil_data->kode_ppk?>
      <br>
      PPK&nbsp&nbsp&nbsp: SKPD <?php echo $hasil_data->nama_satuan_kerja?>
      <br>
      <br>
      Menetapkan hasil kaji ulang untuk Paket Pekerjan <?php echo $hasil_data->nama_paket; ?>
      <br>
      dengan hasil sebagai berikut :
      <br>
      1 . Metode Pengadaan <?php echo $hasil_data->metode_pengadaan?>
      <br>
      2 . Nilai HPS <?php echo format_rupiah($hasil_data->hps)?>
      <br>
      &nbsp&nbsp&nbsp&nbsp(Dalam Penyusunan HPS telah sesuai dengan peraturan yang berlaku)
      <br>
      3 . Pengumuman Lelang <?php echo TanggalIndo($hasil_data->tanggal_pengumuman_lelang) ?>
      <br>
      4 . Ambising
      <br>
      &nbsp&nbsp&nbsp&nbspTanggal Mulai Ambising  : <?php echo TanggalIndo($hasil_data->tanggal_mulai_ambising)?>
      <br>
      &nbsp&nbsp&nbsp&nbspWaktu Mulai Ambising    :<?php echo $hasil_data->jam_mulai_ambising?>
      <br>
      &nbsp&nbsp&nbsp&nbspTanggal Akhir Ambising  : <?php echo TanggalIndo($hasil_data->tanggal_akhir_ambising)?>
      <br>
      &nbsp&nbsp&nbsp&nbspWaktu Akhir Ambising    : <?php echo $hasil_data->jam_akhir_ambising?>
      <br>
      5 . Jadwal Pemasukan Dokumen
      <br>
      &nbsp&nbsp&nbsp&nbspTanggal Mulai  : <?php echo TanggalIndo($hasil_data->tanggal_mulai_pemasukan)?>
      <br>
       &nbsp&nbsp&nbsp&nbspTanggal Akhir  : <?php echo TanggalIndo($hasil_data->tanggal_selesai_pemasukan)?>
       <br>
       <br>
      Demikian penetapan saya ini,dibuat dengan sebenarnya untuk digunakan sebagaiman mestinya.
    </div>

    <br>
    <br>

    <div style="font-size:18px;float:right">

     <center>
     PEJABAT PEMBUAT KOMITMEN
     <br>
     SKPD <?php echo $hasil_data->nama_satuan_kerja; ?>
     </center>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <center><?php echo $hasil_data->nama_ppk; ?></center>
     <br>
     <span>
       <center>NIP <?php echo $hasil_data->kode_ppk?></center>
     </span>

    </div>

</body>
</html>