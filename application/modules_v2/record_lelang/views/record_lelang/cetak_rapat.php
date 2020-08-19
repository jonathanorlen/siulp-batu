<head>
	<title>Cetak Data Jadwal Rapat</title>
</head>
	<body onload="window.print()">
			<?php
				$id = $this->uri->segment(4);
				$data = $this->db->get("transaksi_rapat",array('id' => $id));
				$data_detail = $data->row();
			?>
		<br>
		<h2>Cetak Detail Jadwal Rapat</h2>
		<br>
		<table style="width:100%;padding-left:5px">
			<tr height="40px">
				<td style="font-size:25px">Tanggal Rapat</td>
				<td> : </td>
				<td style="font-size:25px"><?php echo TanggalIndo($data_detail->tanggal_rapat);?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Agenda</td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->agenda;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Paket</td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_paket;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Tempat </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->tempat;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Satuan Kerja</td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_satuan_kerja;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Pokja </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_pokja;?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">PPK </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_ppk?></td>
			</tr>
			<tr height="40px">
				<td style="font-size:25px">Nama Sekretariat </td>
				<td> : </td>
				<td style="font-size:25px"><?php echo $data_detail->nama_sekretariat;?></td>
			</tr>
		</table>
	</body>
