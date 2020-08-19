public function jalan_import()
	{
		require('excel_reader2_.php');
		$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
		$data->setOutputEncoding('CP1251');
		$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;

// $query1 = "TRUNCATE TABLE  setoran_susu;";
// $hasil1 = mysql_query($query1);

for ($i=5; $i<=$hasildata; $i++)
{
	$id = $data->val($i,1); 
	$tanggal = $data->val($i,2);
	$tanggal_r = str_replace("'", '', $tanggal);
	$waktu = $data->val($i,3); 
	$no_transaksi = $data->val($i,4); 
	$no_anggota = $data->val($i,5); 
	$nama_anggota = $data->val($i,6);
	$code_cooling_unit = $data->val($i,7); 
	$code_pps = $data->val($i,8); 
	$alamat_anggota = $data->val($i,9);
	$status_penerimaan = $data->val($i,10);
	$status_kualitas = $data->val($i,11);
	$bj = $data->val($i,12);
	$bj_r = str_replace("'", '', $bj);
	$jumlah_liter = $data->val($i,13);
	

	$query = "INSERT INTO setoran_susu VALUES (null,'$tanggal_r','$waktu','$no_transaksi','$no_anggota','$nama_anggota','$code_cooling_unit','$code_pps','$alamat_anggota','$status_penerimaan','$status_kualitas','$bj_r','$jumlah_liter')";
	$hasil = mysql_query($query);

	}