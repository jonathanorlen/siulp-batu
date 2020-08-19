<!DOCTYPE html>
<head>
  <title>
    Laporan periode
  </title>
</head>
<body onload="window.print()""><!-- 
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

    -->
    <center>
      <h6>LAPORAN BERKALA PROSES LELANG BAGIAN LAYANAN PENGADAAN </h6>
      <div style="margin-top:-15px">
        <h6>PEMERINTAH KOTA BATU</h6>
      </div>
    </center>

  <div style="float:left">
    <h7 style="font-size:12px;font-weight:bold;">
      LAPORAN PERIODE
    </h7>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <h7 style="font-size:12px;font-weight:bold;">
      20 FEBUARI 2017
    </h7>
  </div>

  <table style="width:100%;border:1px solid black;border-collapse:collapse;">
      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:12px">
              No
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              SKPD
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              TANGGAL PEMASUKAN DOKUMEN
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:12px">
              NAMA PAKET
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              JENIS PENGADAAN
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:12px">
              POKJA
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              PAGU
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              HPS
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              NILAI PENAWARAN TERKOREKSI
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:12px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:12px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              1
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              2
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              3
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              4
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              5
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:11px">
              6
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Dinas Pendidikan
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              09 Januari 2017
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              Pengadaan Mebeluer Lembaga TK,SPS dan Kelompok Bermain
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:11px">
              Barang
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:11px">
              BLP I
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:11px">
              1.06.000,000
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:11px">
              TAHAPAN
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:11px">
              PEMENANG
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              09 Januari 2017
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              P
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET SELESAI LELANG 
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              09 Januari 2017
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              P
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET PROSES LELANG
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              09 Januari 2017
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              P
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET GAGAL LELANG
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              09 Januari 2017
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              P
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:11px">
              SILPA PAKET SELESAI(Pagu umlah Nilai Paket Selesai-Jumlah Nilai Penawaran Terkoreksi Paket Selesai-Jumlah )
          </td>

          <td colspan="3" style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              Barang
          </td>
      </tr>
  </table>

  <div style="float:left;margin-top:28px;margin-left:55px">
    <center style="font-size:11px;">
      Mengetahui
      <div>
        Plt.Kepala Bagian Layanan Pengadaan
      </div>
      <div>
        Kota Batu
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div style="font-weight:bold"><u>EDI SETIAWAN ,SIP</u></div>
      <div>
        NIP:29737534875787547348987 
      </div>
    </center>
  </div>

  <div style="float:right;margin-top:25px;margin-right:55px">
    <center style="font-size:11px;">
      Di buat,
      <div>
        Kasubag Pengadaan Barang dan Jasa
      </div>
      <div>
        Bagian Layanan Pengadaan
      </div>
      <div>
        Kota Batu
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div style="font-weight:bold"><u>EDI SETIAWAN ,SIP</u></div>
      <div>
        NIP:29737534875787547348987 
      </div>
    </center>
  </div>

</body>
</html>