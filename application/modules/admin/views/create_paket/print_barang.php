<!DOCTYPE html>
<head>
  <title>
  </title>
</head>
<body onload="window.print()"">


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
  <div style="margin-top:-65px;position:relative;"></div>
  <center style="font-size:20px;font-weight:bold">
    CHEKLIST USULAN DOKUMEN PENGADAAN
  </center>
  <br>
   <?php 
      $id = $this->uri->segment(4);
      $ambil_data = $this->db->get_where('transaksi_data_paket',array('id'=>$id));
      $hasil_ambil_data = $ambil_data->row();

      $dapat_data = $this->db->get_where('master_satuan_kerja',array('kode_skpd' => $hasil_ambil_data->kode_satuan_kerja));
      $tampil_data = $dapat_data->row();
    ?>
  <div>
    <table style="line-height:35px">
      <tr>
        <td width="250px">Sudah terima dari</td>
        <td width="15px">:</td>
        <td><?php echo $hasil_ambil_data->nama_ppk?></td>
      </tr>
      <tr>
        <td>Dokumen paket pekerjaan</td>
        <td>:</td>
        <td><?php echo $hasil_ambil_data->nama_paket?></td>
      </tr>
      <tr>
        <td>SKPD</td>
        <td>:</td>
        <td><?php echo $tampil_data->unit_kerja?></td>
      </tr>
    </table>
  </div>
  <br>
  <div style="width:97%;float:right;">
    <table style="width:100%;border-collapse: collapse;" border="1px">
    <thead>
      <tr style="height:30px">
        <td style="width:5%;text-align:center;">No</td>
        <td style="width:35%;text-align:center;">Uraian</td>
        <td style="width:30%;text-align:center;">hardcopy</td>
        <td style="width:30%;text-align:center;">softcopy</td>
      </tr>
    </thead>
    <?php
      $ambil =$hasil_ambil_data->hardcopy;
      $hasil_hardcopy = explode('|',$ambil);

      $ambil_soft =$hasil_ambil_data->softcopy;
      $hasil_softcopy = explode('|',$ambil_soft);
    ?>
    <tbody>
      <tr style="height:30px">
        <td style="text-align:center;">1</td>
        <td style="padding-left:5px">DPA</td>
        <td style="text-align:center;">
          <?php if(in_array('dpa',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('dpa',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">2</td>
        <td style="padding-left:5px">RUP (Rencana Umum Pengadaan)</td>
        <td style="text-align:center;">
          <?php if(in_array('rup',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('rup',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">3</td>
        <td style="padding-left:5px">Hps</td>
        <td style="text-align:center;">
          <?php if(in_array('hps',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('hps',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">4</td>
        <td style="padding-left:5px">KAK Paket Pekerjaan</td>
        <td style="text-align:center;">
          <?php if(in_array('kak',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('kak',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">5</td>
        <td style="padding-left:5px">Bukti Survey Harga</td>
        <td style="text-align:center;">
          <?php if(in_array('bsh',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('bsh',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">6</td>
        <td style="padding-left:5px">Spesfikasi Teknis Harga</td>
        <td style="text-align:center;">
          <?php if(in_array('stg',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('stg',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">7</td>
        <td style="padding-left:5px">BoQ (Build of Quality))</td>
        <td style="text-align:center;">
          <?php if(in_array('boq',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('boq',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">8</td>
        <td style="padding-left:5px">Rancangan Kontrak</td>
        <td style="text-align:center;">
          <?php if(in_array('rank',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('rank',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
      <tr style="height:30px">
        <td style="text-align:center;">9</td>
        <td style="padding-left:5px">Surat Pengantar</td>
        <td style="text-align:center;">
          <?php if(in_array('kels',$hasil_hardcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
        <td style="text-align:center;">
          <?php if(in_array('kels',$hasil_softcopy)){ ?>
            &#10004;
          <?php }?>
        </td>
      </tr>
    </tbody>
    </table>
    <br>
    <br>
    <div style="font-size:16px;margin-bottom:5px">Kelengkapan dokumen <span style="font-weight:bold;">pengadaan barang/jasa lainnya </span>yang diterima tanggal <?php echo tanggalindo(date("Y-m-m"))?></div>
    <table style="width:100%;border-collapse:collapse;" border="1px">
      <tr>
       <?php if($hasil_ambil_data->posisi == "Revisi Dokumen"){?>
        <td style="width:50%;font-size:17px;padding:5px">DILENGKPAI KEMBALI</td>
      <?php }?>

      <?php if($hasil_ambil_data->posisi == "Lanjut lelang"){?>
        <td style="width:50%;font-size:17px;padding:5px">DITERIMA UNTUK DILANJUTKAN</td>
        <?php }?>
      </tr>
    </table>
    <br>
    <br>
    <table  style="width:100%">
      <tr>
        <td style="text-align:center;width:50%">
          SKPD
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          ( <?php echo $tampil_data->unit_kerja?> )
        </td>
        <td style="text-align:center;width:50%">
          Bagian Layanan Pengadaan
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          ( <?php 
            $dapat = $this->db->get_where('master_user',array('nama_jabatan' => 'Sekretariat'));
            $ambil_dapat = $dapat->row();
            echo $ambil_dapat->nama; 
          ?> )
        </td>
      </tr>
    </table>
  </div>
</body>
</html>