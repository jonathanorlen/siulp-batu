<!DOCTYPE html>
<head>
	<title>Cetak Data</title>
</head>
	<body onload="window.print()">
			<?php
				$id = $this->uri->segment(4);
				$data = $this->db->get("transaksi_data_paket",array('id' => $id));
				$data_detail = $data->row();
			?>
		<h1>Cetak Detail Verifikasi</h1>
		<br>
		<table style="width:100%;padding-left:5px">
			<tr height="40px">
				<td style="font-size:25px">Nama Paket </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_paket;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Tanggal Pengajuan </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->tanggal_pengajuan;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Kegiatan </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->kegiatan;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Volume </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->volume?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Lokasi </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->lokasi?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Pagu </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->pagu?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Hps </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->hps?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Satuan Kerja </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_satuan_kerja;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Sumber Dana </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_sumber_dana;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Jenis Pengadaan </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_jenis_pengadaan;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Metode Pengadaan </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_metode_pengadaan;?></td>
			</tr>
		</table>
	</body>
</html>