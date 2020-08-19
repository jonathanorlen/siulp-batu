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
	<table style="width: 100%;border-collapse: collapse;" align="center" id="tabel1" style="border-bottom: 1px;">
		<tr>
			<td align="left" rowspan="5"><img src="<?php echo base_url().'component/logo kota batu.png' ?>" style=" width: 150px;"></td>
			<td align="center"><H3>PEMERINTAH KOTA BATU</H3></td>
		</tr>
		<tr>
			<td align="center">
				<H2>SEKRETARIAT DAERAH</H2>
				<p>Balaikota Among Tani Gedung A lantai 1</p>
				<p>Jl. Panglima Sudirman Nomor 507, Kota Batu, Kode Pos 65313</p>
				<p>Telepon: 0341-512554,Faks: 0341-512554,</p>
				<p>email : blp@batukota.go.id, webmail : batukota.go.id</p>
			</td>	
		</tr>
		<hr style="position: relative; top: 140px; height:5px; color: #000;">
	</table>

	<table style="width: 100%;border-collapse: collapse;" border="" align="center" id="tabel1">
		<tr >
			<td align="center">
				<h3 style="border-bottom: 3px solid black; width:100%;">SURAT PERINTAH TUGAS</h3>
			</td>
		</tr>
		<tr>
			<td align="center">
				<p style="text-align: center; position: relative; left:275px;top: -50px;" >Nomor : <?php echo @$data_detail->nomor_surat_sekretariat ?></p>
			</td>
		</tr>
	</table>

	<br>
	<form action="#" id="form_sample_3" class="form-horizontal" >
		<div class="form-body" style="width: 100%;">
			<!-- <table border="1px" class="form-body" style="width: 100%;"> -->
			<table border="" style="width: 100%;">
				
				<!-- <tr class="form-group" style="width: 100px;position: relative;">
					<td style="width:-700px;float: left;">
						<p style="text-align: center; position: relative; left:275px;top: -50px;" >Nomor : <?php echo @$data_detail->nomor_surat_sekretariat ?></p>
					</td>
				</tr> -->
				<tr class="form-group">
					<td rowspan="" width="75px">
						<label class="control-label col-md-0" >DASAR<span class="required">
						</span>
					</label>
				</td>
				<td rowspan="" width="75px" style="text-align: center;">
					<label class="control-label col-md-0" > : <span class="required">
					</span>
				</label>
			</td>

				<!-- <td >
				<label class="control-label col-md-0" style="margin-left:100px" > -->
					<td>
						Surat Pejabat Pembuat Komitmen <?php echo $data_detail->nama_satuan_kerja?>
					</td>
				</tr>
				<tr>
					<td rowspan="2" width="75px">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
				</td>
				<td rowspan="2" width="45px">
					<label class="control-label col-md-0" ><span class="required">
					</span>
				</label>
			</td>
			<td>
				Nomor : <?php echo @$data_detail->nomor_surat_ppk ?> <?php echo $data_detail->nama_paket?> Tentang Paket <?php echo $data_detail->nama_paket?>
			</td>
		</tr>
					<!-- </label>
				</td> -->

			</table>
		</div>
	</form>

	<form action="#" id="form_sample_3" class="form-horizontal" >
		<div class="form-body" style="width: 100%;">
			<table  border="0" class="form-body" style="width: 100%;">
				<tr width="100%" >
					<center>
						<td align="center" style="margin-left:5000px">
							<h3 style="border-bottom: 3px solid black;width:400px;">Menugaskan</h3>
						</td>
					</center>
				</tr>
			</table>
		</div>
	</form>

	<form action="#" id="form_sample_3" class="form-horizontal" >
		<div class="form-body" style="width: 100%;">
			<!-- <table  border="1" class="form-body" style="width: 100%;"> -->
			<table  border="" style="width: 100%;">

				<tr class="form-group">
					<td rowspan="" width="75px" >
						<label class="control-label col-md-0" style="margin-top:-100px">KEPADA<span class="required">
						</span>
					</label>
				</td>
				<td rowspan="" style="text-align: center;width: 30px !important;">
					<label class="control-label col-md-0" > : <span class="required">
					</span>
				</label>
			</td>
			<td rowspan="" style="text-align: center;width: 20px;">
				<label class="control-label col-md-0" >1.<span class="required">
				</span>
			</label>
		</td>
			<!-- <td>
				<label class="control-label col-md-0" style="position: relative;left:-100px;" >
					<table border="1" >
						<th> -->
							<?php 
							$ketua = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'ketua'));
							$hasil_ketua=$ketua->row();
							?>
							
							<td style="border-right: none;">Nama</td>
							<td style="border-left:none;width: 60%;">:  <?php echo @$hasil_ketua->nama?></td>
							
							<tr>
								<td rowspan="11" width="45px" style="text-align: center;">
									<label class="control-label col-md-0" ><span class="required">
									</span>
								</label>
							</td>
							<td rowspan="" width="45px" style="text-align: center;">
								<label class="control-label col-md-0" ><span class="required">
								</span>
							</label>
						</td>
						<td rowspan="3" style="text-align: center;width: 20px;">
							<label class="control-label col-md-0" ><span class="required">
							</span>
						</label>
					</td>
					<td style="border-right: none;">NIP</td>
					<td style="border-left:none;">:  <?php echo @$hasil_ketua->nip?></td>
				</tr>
				<tr>
					<td rowspan="" width="45px" style="text-align: center;">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
				</td>
				<td style="border-right: none;">Pangkat/Gol</td>
				<td style="border-left:none;">:  <?php echo @$hasil_ketua->pangkat_gol?></td>
			</tr>
			<tr>
				<td rowspan="" width="45px" style="text-align: center;">
					<label class="control-label col-md-0" ><span class="required">
					</span>
				</label>
			</td>
			<td style="border-right: none;">Jabatan</td>
			<td style="border-left:none;">:  <?php echo "Ketua ".@$hasil_ketua->nama_pokja ?></td>
		</tr>
						<!-- </th>
					</table>
				<br>
			</label>
		</td> -->
	</tr> 




	<!-- sekretaris -->
<!-- 	<tr class="form-group" style="width: -100px;">
		<td>

		</td>
		<td>
			<label class="control-label col-md-0" style="position: relative;left:-100px;" >
				<table>

					<th> -->
						<?php 
						$sekretaris = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'sekretaris'));
						$hasil_sekretaris=$sekretaris->row();
						?>
						<tr>
							<td rowspan="" width="45px" style="text-align: center;">
								<label class="control-label col-md-0" ><span class="required">
								</span>
							</label>
						</td>
						<td rowspan="" style="text-align: center;width: 20px;">
							<label class="control-label col-md-0" >2.<span class="required">
							</span>
						</label>
					</td>
					<td style="border-right: none;">Nama</td>
					<td style="border-left:none;width: 60%;">:  <?php echo @$hasil_sekretaris->nama?></td>
				</tr>
				<tr>
					<td rowspan="" width="45px" style="text-align: center;">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
				</td>
				<td rowspan="3" style="text-align: center;width: 20px;">
				<label class="control-label col-md-0" ><span class="required">
				</span>
			</label>
		</td>
				<td style="border-right: none;">NIP</td>
				<td style="border-left:none;">:  <?php echo @$hasil_sekretaris->nip?></td>
			</tr>
			<tr>
				<td rowspan="" width="45px" style="text-align: center;">
					<label class="control-label col-md-0" ><span class="required">
					</span>
				</label>
			</td>
			<td style="border-right: none;">Pangkat/Gol</td>
			<td style="border-left:none;">:  <?php echo @$hasil_sekretaris->pangkat_gol?></td>
		</tr>
		<tr>
			<td rowspan="" width="45px" style="text-align: center;">
				<label class="control-label col-md-0" ><span class="required">
				</span>
			</label>
		</td>
		<td style="border-right: none;">Jabatan</td>
		<td style="border-left:none;">:  <?php echo "Sekretaris ".@$hasil_sekretaris->nama_pokja ?></td>
	</tr>
					<!-- </th>
				</table>
				<br>
			</label>
		</td>
	</tr> -->




	<!-- Anggota -->
	<!-- <tr class="form-group" style="width: -100px;">
		<td>

		</td>
		<td>
			<label class="control-label col-md-0" style="position: relative;left:-100px;" >
				<table border="1">

					<th> -->
						<?php 
						$anggota = $this->db->get_where('master_user',array('nama_pokja' => $data_detail->nama_pokja,'jabatan_pokja' => 'anggota'));
						$hasil_anggota=$anggota->row();
						?>
						<tr>
							<td rowspan="" width="45px" style="text-align: center;">
								<label class="control-label col-md-0" ><span class="required">
								</span>
							</label>
						</td>
						<td rowspan="" style="text-align: center;width: 20px;">
							<label class="control-label col-md-0" >3.<span class="required">
							</span>
						</label>
					</td>
					<td style="border-right: none;">Nama</td>
					<td style="border-left:none;width: 60%;">:  <?php echo @$hasil_anggota->nama?></td>
				</tr>
				<tr>
					<td rowspan="" width="45px" style="text-align: center;">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
				</td>
				<td rowspan="3" style="text-align: center;width: 20px;">
				<label class="control-label col-md-0" ><span class="required">
				</span>
			</label>
		</td>
				<td style="border-right: none;">NIP</td>
				<td style="border-left:none;">:  <?php echo @$hasil_anggota->nip?></td>
			</tr>
			<tr>
				<td rowspan="" width="45px" style="text-align: center;">
					<label class="control-label col-md-0" ><span class="required">
					</span>
				</label>
			</td>
			<td style="border-right: none;">Pangkat/Gol</td>
			<td style="border-left:none;">:  <?php echo @$hasil_anggota->pangkat_gol?></td>
		</tr>
		<tr>
			<td rowspan="" width="45px" style="text-align: center;">
				<label class="control-label col-md-0" ><span class="required">
				</span>
			</label>
		</td>
		<td style="border-right: none;">Jabatan</td>
		<td style="border-left:none;">:  <?php echo "Anggota ".@$hasil_anggota->nama_pokja ?></td>
	</tr>
					<!-- </th>
				</table>
				<br>
			</label>
		</td>
	</tr>  -->

	<br>
	<tr class="form-group" style="width: -100px;">
		<td>
			<br>
			<label class="control-label col-md-0" style="position: relative;">UNTUK<span class="required">
			</span>
		</label>
	</td>
	<td rowspan="" style="text-align: center;">
		<label class="control-label col-md-0" > : <span class="required">
		</span>
	</label>
</td>
<td rowspan="" style="text-align: center;width: 20px;">
	<label class="control-label col-md-0" >1.<span class="required">
	</span>
</label>
</td>
<td colspan="2" style="width: 100%">
	Melaksanakan Paket <?php echo $data_detail->nama_paket;?>.
</td>
</tr> 
<!-- <label class="control-label col-md-0" style="position: relative;left:-100px;" > -->

				<!-- 	<tr>
					<td rowspan="4" width="75px">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
					<td width="75px">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
					</td>
					</td>
						
				</tr> -->
				
				
				
				<tr>
					<td rowspan="4" width="75px">
						<label class="control-label col-md-0" ><span class="required">
						</span>
					</label>
				</td>
				<td width="75px">
					<label class="control-label col-md-0" ><span class="required">
					</span>
				</label>
			</td>
			<td rowspan="" style="text-align: center;width: 20px;">
				<label class="control-label col-md-0" >2.<span class="required">
				</span>
			</label>
		</td>
		<td colspan="2" style="width: 100%">
			Melaksanakan semua tahapan pengadaan sesuai dengan peraturan yang berlaku.
		</td>
	</tr>



	<tr>
		<td width="75px">
			<label class="control-label col-md-0" ><span class="required">
			</span>
		</label>
	</td>
	<td rowspan="" style="text-align: center;width: 20px;">
		<label class="control-label col-md-0" >3.<span class="required">
		</span>
	</label>
</td>
<td colspan="2" style="width: 100%">
	Melaporkan hasil pengadaan kepada Kepala Bagian Layanan Pengadaan. 
</td>
</tr>

<!-- </label> -->


</table>


</div>
</form>
<br>
<br>
<div style="float:right;position:relative;">
	<table width="100%" id="tabel2" style="top:-20px;float:right">
		<tr>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%" style="text-align:center">Batu,  <?php echo TanggalIndo(date("Y-m-d"))?></td>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%" style="float:right"><H4>KEPALA LAYANAN PENGADAAN <center>KOTA BATU</center></H4></td>
		</tr>
		<!-- <tr>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>		</tr> -->
		</table>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<table width="100%" id="tabel3" style="top:-30px;">
			<tr>
				<td width="50%"></td>
				<td style="text-align:center;float:right;width:50%">
					<?php
					$kepala = $this->db->get_where('master_struktur_ulp',array('jabatan'=>"KEPALA ULP"));
					$hasil_kepala = $kepala->row();
					?>
					<U><?php echo $hasil_kepala->nama; ?></U>
					<p style="position:relative; left:-10px;">NIP. <?php echo $hasil_kepala->nip; ?></p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>