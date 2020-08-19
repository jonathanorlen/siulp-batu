<!DOCTYPE html>
<head>
  <title>
    Laporan periode
  </title>
</head>
<body onload="window.print()"">


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

<?php

                                        $user =  $this->session->userdata('astrosession');

                                        if($user->kode_jabatan=="002"){
                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                        
                                        }elseif ($user->kode_jabatan=="003") {
                                            $this->db->where('kode_pokja',$user->kode_pokja);
                                        };

                                        $hasil=$this->db->get_where("transaksi_data_paket",array('status_paket'=>'gagal','tutup_tahun'=>'Open'));
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        $hps = 0;
                                        $pagu = 0;
                                        $nilai_kontrak = 0;
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            ?>

      <tr>
          <td style="width:5%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $no;?>
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->nama_satuan_kerja;?>
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              TANGGAL PEMASUKAN DOKUMEN
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->nama_paket;?>
          </td>

          <td style="width:10%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->jenis_pengadaan;?>
          </td>

          <td style="width:7%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->nama_pokja;?>
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->pagu;?>
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->hps;?>
          </td>

          <td style="width:8%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->nilai_kontrak;?>
          </td>

          <td style="width:20%;border:1px solid black;text-align:center;font-size:12px;">
              Lelang Gagal
          </td>

          <td style="width:15%;border:1px solid black;text-align:center;font-size:12px">
              <?php echo $item->pemenang;?>
          </td>
      </tr>

<?php 
  $pagu = $pagu + $item->pagu;
 # $pagu += $item->pagu;
  $hps = $hps + $item->hps;
  $nilai_kontrak = $nilai_kontrak + $item->nilai_kontrak;
}


?>
      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $pagu?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $hps?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $nilai_kontrak?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET SELESAI LELANG 
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET PROSES LELANG
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              -
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:12px">
              JUMLAH NILAI PAKET GAGAL LELANG
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $pagu?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $hps?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px">
              <?php echo $nilai_kontrak?>
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
             
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>
      </tr>

      <tr>
          <td colspan="6" style="border:1px solid black;text-align:center;font-size:11px">
              SILPA PAKET SELESAI(Pagu umlah Nilai Paket Selesai-Jumlah Nilai Penawaran Terkoreksi Paket Selesai-Jumlah )
          </td>

          <td colspan="3" style="border:1px solid black;text-align:center;font-size:12px">
              Dinas Pendudukan
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
          </td>

          <td style="border:1px solid black;text-align:center;font-size:12px;background-color:#909090">
              
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
      <?php 
        $ambil = $this->db->get_where("master_struktur_ulp",array('jabatan' => 'KEPALA ULP'));
        $ambil_struktur = $ambil->row();
      ?>
      <div style="font-weight:bold"><u><?php echo $ambil_struktur->nama?></u></div>
      <div>
        NIP:<?php echo $ambil_struktur->nip?>
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