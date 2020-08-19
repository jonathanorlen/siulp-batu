<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		hr.style8 {
			border-top: 1px solid #8c8b8b;
			border-bottom: 1px solid #fff;
		}
		hr.style8:after {
			content: '';
			display: block;
			margin-top: 2px;
			border-top: 1px solid #8c8b8b;
			border-bottom: 1px solid #fff;
		}
	</style>
</head>
<body onload="window.print()">
	<?php
	$id = $this->uri->segment(4);
	$data = $this->db->get_where("transaksi_data_paket",array('id' => $id));
	$data_detail = $data->row();
   # echo $this->db->last_query();
	$user=$data_detail->kode_pokja;
	
	$ambil_data = $this->db->get_where('master_user',array('kode_pokja'  =>  $user));
    $hasil_ambil_data = $ambil_data->row();

	?>
	<table style="width: 100%;border-collapse: collapse;" id="tabel1" style="border-bottom: 1px;">
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
	<form action="#" id="form_sample_3" class="form-horizontal" style="width: 100%;position: relative; top: -100px;">
		<div class="form-body" style="width: 100%;">
			<table  border="0" class="form-body" style="width: 100%;">
				<tr class="form-group" style="width: 100px;position: relative;">
					<td style="width:-700px;float: left;">
						<h3 style="text-align: center; position: relative; left: 275px;top: -35px;border-bottom: 3px solid black; width:250px;">SURAT PERINTAH TUGAS</h3>
						<p style="text-align: center; position: relative; left:275px;top: -50px;" >Nomor : <?php echo @$data_detail->nomor_surat_sekretariat ?></p>
					</td>
				</tr>
				<tr class="form-group" style="width: -100px;">
					<td>
						<label class="control-label col-md-0" style="position: relative;top: -15px;">DASAR<span class="required">
						</span>
					</label>
				</td>
				<td>
					<label class="control-label col-md-0" style="position: relative;left:-100px;" >
						Surat Pejabat Pembuat Komitmen <?php echo $data_detail->nama_satuan_kerja?>
						<br>
						Nomor : <?php echo @$data_detail->nomor_surat_ppk ?> <?php echo $data_detail->nama_paket?> Tentang Paket <?php echo $data_detail->nama_paket?>
					</label>
				</td>
			</tr>
			<tr class="form-group" style="width: 100px;position: relative;">
				<td style="width:-700px;float: left;">
					<h3 style="text-align: center; position: relative; left: 290px;border-bottom: 3px solid black; width:210px;letter-spacing: 5px;">MENUGASKAN</h3>
				</td>
			</tr>
			<tr class="form-group" style="width: -100px;">
				<td>
					<label class="control-label col-md-0" style="position: relative;text-align: top;">KEPADA<span class="required">
					</span>
				</label>
			</td>
			<td>
				<label class="control-label col-md-0" style="position: relative;left:-100px;" >
					<table>
						<th>
						<?php 
							$ketua = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'ketua'));
							$hasil_ketua=$ketua->row();
						?>
							<tr>
								<td style="border-right: none;">Nama</td>
								<td style="border-left:none;width: 60%;">:&nbsp<?php echo @$hasil_ketua->nama?></td>
							</tr>
							<tr>
								<td style="border-right: none;">NIP</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_ketua->nip?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Pangkat/Gol</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_ketua->pangkat_gol?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Jabatan</td>
								<td style="border-left:none;">:&nbsp<?php echo "Ketua ".@$hasil_ketua->nama_pokja ?></td>
							</tr>
						</th>
					</table>
				<br>
			</label>
		</td>
	</tr> 

	<tr class="form-group" style="width: -100px;">
			<td>
					
			</td>
			<td>
				<label class="control-label col-md-0" style="position: relative;left:-100px;" >
					<table>

						<th>
						<?php 
							$sekretaris = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'sekretaris'));
							$hasil_sekretaris=$sekretaris->row();
						?>
							<tr>
								<td style="border-right: none;">Nama</td>
								<td style="border-left:none;width: 60%;">:&nbsp<?php echo @$hasil_sekretaris->nama?></td>
							</tr>
							<tr>
								<td style="border-right: none;">NIP</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_sekretaris->nip?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Pangkat/Gol</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_sekretaris->pangkat_gol?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Jabatan</td>
								<td style="border-left:none;">:&nbsp<?php echo "Sekretaris ".@$hasil_sekretaris->nama_pokja ?></td>
							</tr>
						</th>
					</table>
				<br>
			</label>
		</td>
	</tr>

	<tr class="form-group" style="width: -100px;">
			<td>
					
			</td>
			<td>
				<label class="control-label col-md-0" style="position: relative;left:-100px;" >
					<table>

						<th>
						<?php 
							$anggota = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'anggota'));
							$hasil_anggota=$anggota->row();
						?>
							<tr>
								<td style="border-right: none;">Nama</td>
								<td style="border-left:none;width: 60%;">:&nbsp<?php echo @$hasil_anggota->nama?></td>
							</tr>
							<tr>
								<td style="border-right: none;">NIP</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_anggota->nip?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Pangkat/Gol</td>
								<td style="border-left:none;">:&nbsp<?php echo @$hasil_anggota->pangkat_gol?></td>
							</tr>
							<tr>
								<td style="border-right: none;">Jabatan</td>
								<td style="border-left:none;">:&nbsp<?php echo "Anggota ".@$hasil_anggota->nama_pokja ?></td>
							</tr>
						</th>
					</table>
				<br>
			</label>
		</td>
	</tr> 

	<br>
	<tr class="form-group" style="width: -100px;margin-top: 10px;">
		<td>
			<br>
			<label class="control-label col-md-0" style="position: relative;top:-10px;">UNTUK<span class="required">
			</span>
		</label>
	</td>
	<BR>
		<td>
			<br>
			<label class="control-label col-md-0" style="position: relative;left:-100px;" >
				<table>
					<tr>
						<td style="border-right: none;">
							1. Melaksanakan Paket <?php echo $data_detail->nama_paket;?>.
						</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td style="border-right: none;">
							2. Melaksanakan semua tahapan pengadaan sesuai dengan peraturan yang berlaku.
						</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td style="border-right: none;">
							3. Melaporkan hasil pengadaan kepada Kepala Bagian Layanan Pengadaan. 
						</td>
					</tr>
				</table>
			</label>
		</td>
	</tr> 
</table>


</div>
</form>
<center>
	<table width="95%" id="tabel2" style="position: relative; top:-30px;">
		<tr>
		</tr>
		<tr>
			<td style="float: right;width: 32%">Batu,&nbsp<?php echo TanggalIndo(date("Y-m-d"))?></td>
		</tr>
		<tr>
			<td style="float: right;"><H4 style="width: 400px; position: relative; left: 30px;top:-20px;">KEPALA LAYANAN PENGADAAN PENGADAAN <center>KOTA BATU</center></H4></td>
		</tr>
		<tr>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>		</tr>
		</table>
		<table width="95%" id="tabel3" style="position: relative; top:-30px;">
			<tr>
				<td style="float: right;width: 32%">
				<?php
				$kepala = $this->db->get_where('master_struktur_ulp',array('jabatan'=>"KEPALA ULP"));
				$hasil_kepala = $kepala->row();
				?>
					<U><?php echo $hasil_kepala->nama; ?></U>
					<p style="position:relative; left:-10px;">NIP. <?php echo $hasil_kepala->nip; ?></p>
				</td>
			</tr>
		</table>
	</body>
	</html>