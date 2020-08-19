<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print()">

	<?php
	$id = $this->uri->segment(4);

	$hasil =$this->db->get_where('transaksi_data_paket' ,array('id' => $id));
	$hasil_data = $hasil->row();
	?>
	<br>
	<h4 style="text-align:center">TANDA TERIMA HONORARIUM</h4>
	<h4 style="text-align:center;margin-top:-12px;">POKJA( <?php echo strtoupper(@$hasil_data->nama_pokja);?> ) BAGIAN LAYANAN PENGADAAN</h4>
	<h4 style="text-align:center;margin-top:-12px;">PAKET PEKERJAAN <?php echo strtoupper(@$hasil_data->nama_paket);?> </h4>

	<p style="float:right;">Kode Rekening :4563798284234</p>
	<table border="1" style="border-collapse: collapse;width:100%;margin-top:-">
		<thead>
			<th>No</th>
			<th>NAMA/NIP</th>
			<th>JABATAN<br>DALAM POKJA</th>
			<th>TGL/NO.SK</th>
			<th>HONOR/<br>PAKET(RP)</th>
			<th>PPH 21<BR>5%(Rp)</th>
			<th>JUMLAH<br>DITERIMA</th>
			<th colspan="2">TANDA TANGAN</th>
		</thead>
		<tbody >

			<tr>
				<td>1</td>
				<td>
					<?php
					$id = $this->uri->segment(4);

					$master_ketua =$this->db->get_where('master_user' ,array('kode_pokja' => $hasil_data->kode_pokja,'jabatan_pokja' =>'ketua'));
					$master_data_ketua = $master_ketua->row();
					echo $master_data_ketua->nama;
					?>
					<br>
					NIP : <?php echo $master_data_ketua->nip;?> <br>
					<!-- NPWP: 12.32312.3144.54523  <br> -->

				</td>
				<td>
					Ketua
				</td>
				<td style="text-align: center;" width="30%" rowspan="3">
					188.45.56/KEP/422.012/2017<br>
					Tanggal 13 January 2017 SK<br>
					Walikota tentang Pembentukan Keanggotaan Kelompok Kerja (Pokja)
					Pengadaan Barang / Jasa Bagian Layanan Pengadaan Pemerintah Kota Batu
				</td>
				<td align="right">
					<?php
					$pagu=$hasil_data->pagu;
					//echo format_rupiah($pagu);
					
					$jenis_pengadaan=$hasil_data->jenis_pengadaan;
					if($jenis_pengadaan=='Konstruksi' or $jenis_pengadaan=='Barang' or $jenis_pengadaan=='Jasa Lainnya'){
						if($pagu >=200000000 and $pagu <=500000000){
							$kode_honor='P_001';
						}elseif ($pagu >=500000000 and $pagu <=1000000000) {
							$kode_honor='P_002';
						}elseif ($pagu >=1000000000 and $pagu <=2500000000) {
							$kode_honor='P_003';
						}elseif ($pagu >=2500000000 and $pagu <=5000000000) {
							$kode_honor='P_004';
						}elseif ($pagu >=5000000000 and $pagu <=10000000000) {
							$kode_honor='P_005';
						}elseif ($pagu >=10000000000 and $pagu <=25000000000) {
							$kode_honor='P_006';
						}elseif ($pagu >=25000000000 and $pagu <=50000000000) {
							$kode_honor='P_007';
						}elseif ($pagu >=50000000000 and $pagu <=100000000000) {
							$kode_honor='P_008';
						}elseif ($pagu >100000000000) {
							$kode_honor='P_009';
						}
					}elseif ($jenis_pengadaan=='Jasa Konsultasi') {
						if($pagu >=50000000 and $pagu <=100000000){
							$kode_honor='P_001';
						}elseif ($pagu >=100000000 and $pagu <=200000000) {
							$kode_honor='P_002';
						}elseif ($pagu >=200000000 and $pagu <=500000000) {
							$kode_honor='P_003';
						}elseif ($pagu >=500000000 and $pagu <=1000000000) {
							$kode_honor='P_004';
						}elseif ($pagu >=1000000000 and $pagu <=2500000000) {
							$kode_honor='P_005';
						}elseif ($pagu >=2500000000 and $pagu <=5000000000) {
							$kode_honor='P_006';
						}elseif ($pagu >=5000000000 and $pagu <=10000000000) {
							$kode_honor='P_007';
						}elseif ($pagu >=10000000000 and $pagu <=15000000000) {
							$kode_honor='P_008';
						}elseif ($pagu >15000000000 ) {
							$kode_honor='P_009';
						}
					}
					if($jenis_pengadaan=='Barang' or $jenis_pengadaan=='Jasa Lainnya'){
						$this->db->where('jenis_pengadaan','Barang / Jasa Lainya');
					}else {
						$this->db->where('jenis_pengadaan',$jenis_pengadaan);
					}
					
					$this->db->where('jabatan','ketua');
					$this->db->where('kode',$kode_honor);
					$honor_ketua =$this->db->get('master_honor_pokja');
					$honor_data_ketua = $honor_ketua->row();
					//echo $this->db->last_query();
					if(!empty($master_data_ketua)){
						
						$total_honor_ketua=@$honor_data_ketua->nominal;
						$total_pph_ketua =@$honor_data_ketua->nominal * 5/100;
						$total_terima_ketua =$total_honor_ketua - $total_pph_ketua;
						
					}
					echo @format_rupiah($total_honor_ketua);
					?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_pph_ketua); ?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_terima_ketua); ?>
				</td>
				<td>
					1.
				</td>
				<td>

				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>

					<?php
					$id = $this->uri->segment(4);

					$master_sekretaris =$this->db->get_where('master_user' ,array('kode_pokja' => $hasil_data->kode_pokja,'jabatan_pokja' =>'sekretaris'));
					$master_data_sekretaris = $master_sekretaris->row();
					echo @$master_data_sekretaris->nama;
					?>
					<br>
					NIP : <?php echo @$master_data_sekretaris->nip;?> <br>
				</td>
				<td>
					Sekretaris
				</td>

				<td align="right">
					<?php
					// $pagu=$hasil_data->pagu;
					// $jenis_pengadaan=$hasil_data->jenis_pengadaan;
					// if($jenis_pengadaan=='Konstruksi' or $jenis_pengadaan=='Barang' or $jenis_pengadaan=='Jasa Lainnya'){
					// 	if($pagu >=200 000 000 and $pagu <=500 000 000){
					// 		$kode_honor='P_001';
					// 	}elseif ($pagu >=500 000 000 and $pagu <=1 000 000 000) {
					// 		$kode_honor='P_002';
					// 	}elseif ($pagu >=1 000 000 000 and $pagu <=2 500 000 000) {
					// 		$kode_honor='P_003';
					// 	}elseif ($pagu >=2 500 000 000 and $pagu <=5 000 000 000) {
					// 		$kode_honor='P_004';
					// 	}elseif ($pagu >=5 000 000 000 and $pagu <=10 000 000 000) {
					// 		$kode_honor='P_005';
					// 	}elseif ($pagu >=10 000 000 000 and $pagu <=25 000 000 000) {
					// 		$kode_honor='P_006';
					// 	}elseif ($pagu >=25 000 000 000 and $pagu <=50 000 000 000) {
					// 		$kode_honor='P_007';
					// 	}elseif ($pagu >=50 000 000 000 and $pagu <=100 000 000 000) {
					// 		$kode_honor='P_008';
					// 	}elseif ($pagu >100 000 000 000 ) {
					// 		$kode_honor='P_009';
					// 	}
					// }elseif ($jenis_pengadaan=='Jasa Konsultasi') {
					// 	if($pagu >=50 000 000 and $pagu <=100 000 000){
					// 		$kode_honor='P_001';
					// 	}elseif ($pagu >=100 000 000 and $pagu <=200 000 000) {
					// 		$kode_honor='P_002';
					// 	}elseif ($pagu >=200 000 000 and $pagu <=500 000 000) {
					// 		$kode_honor='P_003';
					// 	}elseif ($pagu >=500 000 000 and $pagu <=1000 000 000) {
					// 		$kode_honor='P_004';
					// 	}elseif ($pagu >=1000 000 000 and $pagu <=2500 000 000) {
					// 		$kode_honor='P_005';
					// 	}elseif ($pagu >=2500 000 000 and $pagu <=5000 000 000) {
					// 		$kode_honor='P_006';
					// 	}elseif ($pagu >=5 000 000 000 and $pagu <=10 000 000 000) {
					// 		$kode_honor='P_007';
					// 	}elseif ($pagu >=10 000 000 000 and $pagu <=15 000 000 000) {
					// 		$kode_honor='P_008';
					// 	}elseif ($pagu >15 000 000 000 ) {
					// 		$kode_honor='P_009';
					// 	}
					// }
					if($jenis_pengadaan=='Barang' or $jenis_pengadaan=='Jasa Lainnya'){
						$this->db->where('jenis_pengadaan','Barang / Jasa Lainya');
					}else {
						$this->db->where('jenis_pengadaan',$jenis_pengadaan);
					}
					
					$this->db->where('jabatan','sekretaris');
					$this->db->where('kode',$kode_honor);
					$honor_sekretaris =$this->db->get('master_honor_pokja');
					$honor_data_sekretaris = $honor_sekretaris->row();
					//echo $this->db->last_query();
					if(!empty($master_data_sekretaris)){
						
						$total_honor_sekretaris=@$honor_data_sekretaris->nominal;
						$total_pph_sekretaris =@$honor_data_sekretaris->nominal * 5/100;
						$total_terima_sekretaris =$total_honor_sekretaris - $total_pph_sekretaris;
						
					}
					echo @format_rupiah($total_honor_sekretaris);
					?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_pph_sekretaris); ?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_terima_sekretaris); ?>
				</td>
				<td>

				</td>
				<td>
					2.
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<?php
					$id = $this->uri->segment(4);

					$master_anggota =$this->db->get_where('master_user' ,array('kode_pokja' => $hasil_data->kode_pokja,'jabatan_pokja' =>'anggota'));
					$master_data_anggota = @$master_anggota->row();
					echo @$master_data_anggota->nama;
					?>
					<br>
					NIP : <?php echo @$master_data_anggota->nip;?> <br>

				</td>
				<td>
					Anggota
				</td>

				<td align="right">
					<?php 
					if($jenis_pengadaan=='Barang' or $jenis_pengadaan=='Jasa Lainnya'){
						$this->db->where('jenis_pengadaan','Barang / Jasa Lainya');
					}else {
						$this->db->where('jenis_pengadaan',$jenis_pengadaan);
					}
					
					$this->db->where('jabatan','anggota');
					$this->db->where('kode',$kode_honor);
					$honor_anggota =$this->db->get('master_honor_pokja');
					$honor_data_anggota = $honor_anggota->row();
					//echo $this->db->last_query();
					if(!empty($master_data_anggota)){

						$total_honor_anggota=@$honor_data_anggota->nominal;
						$total_pph_anggota =@$honor_data_anggota->nominal * 5/100;
						$total_terima_anggota =$total_honor_anggota - $total_pph_anggota;
						
					}
					echo @format_rupiah($total_honor_anggota);
					?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_pph_anggota); ?>
				</td>
				<td align="right">
					<?php echo @format_rupiah($total_terima_anggota); ?>
				</td>
				<td>
					3.
				</td>
				<td>

				</td>
			</tr>
		</tbody>
		<tfoot>
			<td align="center" colspan="3">Jumlah</td>
			<td></td>
			<td align="right"><?php echo @format_rupiah(@$total_honor_ketua + @$total_honor_sekretaris + @$total_honor_anggota);?></td>
			<td align="right"><?php echo @format_rupiah(@$total_pph_ketua + @$total_pph_sekretaris + @$total_pph_anggota);?></td>
			<td align="right"><?php echo @format_rupiah(@$total_terima_ketua + @$total_terima_sekretaris + @$total_terima_anggota);?></td>
			<td colspan="2"></td>
		</tfoot>
	</table>
	<br>
	<tr>
		<th>
			<P style="margin-left:20px;">Kategori</P>
		</th>
		<th>
			<p style="margin-left:90px;margin-top:-35px; "><span>:</span>&nbsp <?php echo @$hasil_data->jenis_pengadaan;?></p>
			<p style="margin-left:90px;margin-top:-10px;"><span>:</span>&nbsp 1.237.000.99</p>
		</th>
	</tr>
	<table style="width: 100%;">
		<tr>
			<th>
				<p style="text-align:center;">Setuju dibayar</p>
				<p style="text-align:center;margin-top:-10px;">Pengguna Anggaran</p>
			</th>
			<th>
				<p style="text-align:center;">Menyetujui</p>
				<p style="text-align:center;margin-top:-10px;">Penjabat Pelaksana Teknis Kegiatan</p>	
			</th>
			<th>
				<p style="text-align:center;margin-top:-10px;">Lunas dibayar</p>
				<p style="text-align:center;margin-top:-10px;">Tgl................</p>
				<p style="text-align:center;margin-top:-10px;">Bendahara Pengeluaran</p>
			</th>
		</tr>
		<tr>
			<td>
				<p style="text-align:center;margin-top:30px;" ><b><u>WIDODO,SH,MH</u></b></p>
				<p style="text-align:center;margin-top:-10px;">NIP :1542136213123 1 062</p>
			</td>
			<td>
				<p style="text-align:center;margin-top:30px;" ><b><u>SYEH ZAENAL ARIFIN,ST</u></b></p>
				<p style="text-align:center;margin-top:-10px;">NIP :1542136213123 1 062</p>
			</td>
			<td>
				<p style="text-align:center;margin-top:30px;" ><b><u>RIA SHANTI, SH</u></b></p>
				<p style="text-align:center;margin-top:-10px;">NIP :1542136213123 1 062</p>
			</td>
		</tr>
	</table>
</body>
</html>