<!DOCTYPE html>
<head>
<title>
</title>
</head>
<body onload="window.print()"">
<center>
<table style="width:100%;border-collapse: collapse;border-bottom: 1px;" id="tabel1">
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
</center>

<div style="margin-top:-120px">
</div>
<center>

<h3>CHECK LIST USULAN DOKUMEN PENGADAAN</h3>
</center>
<br>
<br>
<center>
<?php 
$id = $this->uri->segment(4);
$get = $this->db->get_where('transaksi_data_paket',array('id'=>$id));
$hasil_get = $get->row();

$get_skpd = $this->db->get_where('master_satuan_kerja',array('kode_skpd'=>$hasil_get->kode_satuan_kerja));
$hasil_get_skpd = $get_skpd->row();



?>
<table style="width: 100%;">

<tr>
<td style="width: 40%;">Sudah diterima dari</td>
<td style="width: 10%;">:</td>
<td style="width: 50%;"><?php echo $hasil_get->nama_ppk;?></td>
</tr>
<tr>
<td style="width: 40%;">Dokumen Paket Pekerjaan</td>
<td style="width: 10%;">:</td>
<td style="width: 50%;"><?php echo $hasil_get->nama_paket;?></td>
</tr>
<tr>
<td style="width: 40%;"> SPKD</td>
<td style="width: 10%;"> : </td>
<td style="width: 50%;"><?php echo $hasil_get_skpd->unit_kerja;?></td>
</tr>

</table>
</center>
<br>
<br>
<div style="width:95%;float:right;">
<table style="width:100%; border-collapse: collapse;border: 1px solid black;">
<?php
$ambil =$hasil_get->hardcopy;
$hasil_hardcopy = explode('|',$ambil);

$ambil_soft =$hasil_get->softcopy;
$hasil_softcopy = explode('|',$ambil_soft);
?>
<tr style=" border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;text-align: center;width:5%;">No</td>
<td style="border: 1px solid black;text-align: center;width:45%;">Uraian</td>
<td style="border: 1px solid black;text-align: center;width:25%; ">Hardcopy</td>
<td style="border: 1px solid black;text-align: center;width:25%;">Softcopy</td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">1</td>
<td style="border: 1px solid black;">DPA</td>
<td style="border: 1px solid black;"><?php if(in_array('dpa',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('dpa',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">2</td>
<td style="border: 1px solid black;">RUP(Rencana Umum Pengadaan)</td>
<td style="border: 1px solid black;"><?php if(in_array('rup',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('rup',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">3</td>
<td style="border: 1px solid black;">KAK Paket Pekerjaan</td>
<td style="border: 1px solid black;"><?php if(in_array('kak',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('kak',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">4</td>
<td style="border: 1px solid black;">HPS</td>
<td style="border: 1px solid black;"><?php if(in_array('hps',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('hps',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">5</td>
<td style="border: 1px solid black;">Bukti Survey Harga</td>
<td style="border: 1px solid black;"><?php if(in_array('bsh',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('bsh',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">6</td>
<td style="border: 1px solid black;">Spesifikasi Teknis/Gambar Rencana</td>
<td style="border: 1px solid black;"><?php if(in_array('stg',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('stg',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">7</td>
<td style="border: 1px solid black;">RKS</td>
<td style="border: 1px solid black;"><?php if(in_array('rks',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('rks',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">8</td>
<td style="border: 1px solid black;">BoQ (Bill of Quality)</td>
<td style="border: 1px solid black;"><?php if(in_array('boq',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('boq',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">9</td>
<td style="border: 1px solid black;">Time Schedule</td>
<td style="border: 1px solid black;"><?php if(in_array('ts',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('ts',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">10</td>
<td style="border: 1px solid black;">Rancangan Kontrak</td>
<td style="border: 1px solid black;"><?php if(in_array('rank',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('rank',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>
<tr style=" text-align: center; border-collapse: collapse;border: 1px solid black;">
<td style="border: 1px solid black;">11</td>
<td style="border: 1px solid black;">Surat Pengantar</td>
<td style="border: 1px solid black;"><?php if(in_array('sp',$hasil_hardcopy)){?>
&#10004;
<?php }?></td>
<td style="border: 1px solid black;"><?php if(in_array('sp',$hasil_softcopy)){?>
&#10004;
<?php }?></td>
</tr>

</table>
<br>
<div>
<div>Kelengkapan Dokumen <b>Kontruksi</b> Yang Diterima Tanggal &nbsp&nbsp<?php echo tanggalindo(date('Y-m-d'));?></div>        
</div>
<br>
<table style="width:100%;border-collapse: collapse;border: 1px solid black;">
<?php if($hasil_get->posisi=='Revisi Dokumen'){ ?>
<tr style="border-collapse: collapse;border: 1px solid black;">
<td style="width:50%;text-align:center;border: 1px solid black;">DILENGKAPI KEMBALI</td>
</tr>
<?php } if($hasil_get->posisi=='Lanjut Lelang'){?>
<tr style="border-collapse: collapse;border: 1px solid black;">
<td style="width:50%;text-align:center;border: 1px solid black;">DITERIMA UNTUK DI LANJUTKAN</td>
</tr>
<?php } ?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="width:50%;float:left">
<center>

<center>
<div>
<center>
<div>SKPD</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
(<?php echo $hasil_get_skpd->unit_kerja;?>)
<br>
</div>
</center>

</center>
</div>
<div style="width:50%;float:right;">
<center>

<center>
<div>
<center>
<div>Bagian Layanan Pengadaan</div>
</center>
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
?>)
<br>
</div>
</center>

</center>
</div>
</div>

</body>
</html>