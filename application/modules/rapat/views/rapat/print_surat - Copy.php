<!DOCTYPE html>
<head>
  <title>
  </title>
</head>
<body onload="window.print()"">
	<?php 
  $id = $_GET['id_jadwal'];
  $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
  $data_rapat = $ambil_data->row();
  $kode_rapat = $data_rapat->kode_paket;

  $ambil_record_notulensi = $this->db->get_where('record_notulensi',array('kode_paket' => $kode_rapat));
  $hasil_notulensi = $ambil_record_notulensi->row();

  $data_paket_ambil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $hasil_notulensi->kode_paket));
  $hasil_data = $data_paket_ambil->row();

  $get_group = $this->session->userdata('astrosession');
  $group = $get_group->group;

  $menu = $this->db->get_where('master_jabatan',array('kode_jabatan'=>$get_group->kode_jabatan));
  $hasil_menu = $menu->row();

  $hasil_jabatan=$hasil_menu->kode_jabatan;

  $this->db->select_max('id');
  $ambil_max = $this->db->get_where('record_notulensi',array('kode_paket' => $data_rapat->kode_paket));
  $hasil_id = $ambil_max->row();

  $ambil_id = $this->db->get_where('record_notulensi',array('id' => $hasil_id->id));
  $hasil_data_id = $ambil_id->row();
  ?>
  <?php if ($hasil_jabatan != '002'){ ?>

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
  <?php } ?>
  <div style="margin-top:-120px">
  </div>
  <center>
    <?php if($hasil_jabatan == '002'){ ?>

    <h3>BERITA ACARA</h3>

    <?php }  else  { ?>

    <h3>NOTULENSI</h3>

    <?php } ?>

    <h3><u>HASIL KOORDINASI KAJI ULANG</u></h3>
  </center>
  <br>
  <br>
  <div style="font-size:18.5px">
    <?php if($hasil_jabatan == '002'){ ?>

    <center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h3>Berita Acara</h3>


      <h3><u>HASIL KOORDINASI KAJI ULANG</u></h3>
      <br>
      <br>
    </center>
    <?php }  ?>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Pada Hari Ini Rabu tanggal Delapan Belas bulan Januari tahun Dua Ribu Tujuh Belas,bertempat di
    Bagian Layanan Pengadaan Sekretariat Daerah Kota Batu,kami yang bertanda tangan di bawah ini:
    <br>1 . PPK <?php echo $hasil_data->kegiatan?>.
    <br>2 . Pejabat Pelaksana Teknis Kegiatan <?php echo $data_rapat->tempat?>.
    <br>3 . Pokja <?php echo $hasil_data->nama_pokja?> Bagian Layanan Pengadaan Sekretariat Daerah Kota Batu.
    <br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Kami telah melakukan koordinasi Paket Pekerjaan <?php echo $hasil_data->nama_paket?> dengan hasil sebagai berikut:
    <br>
    <br>
    1. Kerangka Acuan Kerja:
    <div>
      &nbsp&nbsp&nbsp&nbsp a . Cara Pengadaan (<?php echo $hasil_data->metode_pengadaan?>)
    </div>
    <div style="padding-left:50px">
     Cek KAK dan Dokumen Anggaran (DIPA/DPA) pastikan paket pekerjaan memang Telah tepat dilaksanakan melalui pemlihan penyedia.
   </div>

   <div>
     &nbsp&nbsp&nbsp&nbsp b . Jenis Pengadaan (<?php echo $hasil_data->jenis_pengadaan?>)
   </div>
   <div style="padding-left:50px">
    Sesuaikan dengan KAK terkait karakteristik output dan outcame kegiatan sehingga tepat menetapkan jenis pengadaan beserta metode pengadaan yang tepat.
  </div>

  <div>
   &nbsp&nbsp&nbsp&nbsp c. Biaya Penunjang (<?php echo $hasil_data_id->biaya_penunjang?>)
 </div>
 <div style="padding-left:50px">
  Dokumen Anggaran (DIPA/DPA) pastikan telah tersedia biaya penunjang operasional dalam rangka melaksanakan pengadaan barang jasa.
</div>

<div>
  2 . Nama paket pekerjaan: <?php echo $hasil_data->nama_paket?> Uraian 
  <div>
   &nbsp&nbsp&nbsp&nbsp&nbspTahapan pekerjaan : sesuai KAK
 </div>
</div>

3 . Lokasi pekerjaan <?php echo $data_rapat->tempat?>
<br>
4 . Pagu Anggaran <?php echo $hasil_data->pagu?>
<br>
5 . Harga Perkiraan Sendiri (HPS) <?php echo $hasil_data->hps?>
<br>
6 . Diusulkan perubahan HPS agar memperhitungkan Harga Satuan Dasar Pokok Utama dengan benar-benar didasarkan pada Harga Pasar setempat  yang berlaku masksimal 28 hari sebelum batas akhir pemasukan penawaran.
<br>
7 . Diusulkan Perubahan Spesfikasi Teknis agar tidak mengarah merk tertentu
<br>
8 . Barang / Jasa belum tercantum  dalam e-Catalogue dan Spesfikasi teknis barang/jasa yang tercantum <br>
&nbsp&nbsp&nbsp&nbsp&nbsppada e-Catalogue tidak sesuai dengan spesfikasi teknis  yang dibutuhkan pada paket pekerjaan tersebut
&nbsp&nbsp&nbsp&nbsp&nbspdiatas
<br>
9 . Sumber Dana (<?php echo $hasil_data->nama_sumber_dana?>)
<br>
10 . Persyaratan Kualifikasi penyedia
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIUP <?php echo $hasil_data_id->siup?>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIUP SPT Tahunan (2015/2016)
<br>
11 . Daftar Personil Inti Minimal untuk melaksanakan Pekerjaan barang
<?php if($hasil_data_id->personil_inti_minimal == 'tidak ada'){ ?>
(Tidak Ada)
<?php }
else{
  ?>
  (Ada)
  <?php 
  @$hasil = explode("|",$hasil_data_id->personil_inti_minimal);
  $no = 0;
  for($i=0;$i <= count(@$hasil);$i++){
   if(@$hasil[$i] !=""){
    $no++;
    ?>
    <br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $no; ?>. <?php echo @$hasil[$i];?>
    <?php } }?>
    
    <?php }
    ?>

    <br>
    12 . Daftar peralatan utama minimal untuk melaksanakan pekerjaan barang
    <?php if($hasil_data_id->peralatan_utama_minimal == 'tidak ada'){ ?>
    (Tidak Ada)
    <?php }
    else{
      ?>
      (Ada)
      <?php 
      @$hasil_explode = explode("|",$hasil_data_id->peralatan_utama_minimal);
      
      ?>
      <?php }
      $no = 0;
      for($i=0;$i <= count(@$hasil_explode);$i++){
       if(@$hasil_explode[$i] !=""){
        $no++;

        ?>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $no; ?>. <?php echo @$hasil_explode[$i];?>
        <?php } } ?>
        <br>
        13 . Spesfikasi Teknis :
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp a . <span style="font-weight:bold"> File Jadwal </span> dan jangka waktu pelaksaan pekerjaan (<?php if($hasil_data_id->file_jadwal == 'ada'){
          ?>
          Ada
          <?php }else{?>
          Tidak Ada
          <?php }
          ?>
          )

          <br>
          &nbsp&nbsp&nbsp&nbsp&nbsp b . <span style="font-weight:bold"> File Daftar Identitas (Jenis,Merk,Type,Lokasi serta Spesfikasi) bahan/material  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsppabrikasi yang digunakan 
          (<?php if($hasil_data_id->file_daftar_identitas == 'ada'){
            ?>
            Ada
            <?php }else{?>
            Tidak Ada
            <?php }
            ?>
            )
          </span>

          <br>
          &nbsp&nbsp&nbsp&nbsp&nbsp c . <span style="font-weight:bold"> File RAB/HPS Lengkap analisa harga satuan pekerjaan dan Harga  Satuan Dasar
          <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          (<?php if($hasil_data_id->file_rab == 'ada'){
            ?>
            Ada
            <?php }else{?>
            Tidak Ada
            <?php }
            ?>
            )

          </span>

          <br>
          &nbsp&nbsp&nbsp&nbsp&nbsp d . <span style="font-weight:bold"> File Gambar Teknis Lengkap 
          (<?php if($hasil_data_id->file_gambar_teknis == 'ada'){
            ?>
            Ada
            <?php }else{?>
            Tidak Ada
            <?php }
            ?>
            )
          </span>

          <br>
          &nbsp&nbsp&nbsp&nbsp&nbsp e . <span style="font-weight:bold"> Surat Dukungan sesuai KAK 
          (<?php if($hasil_data_id->surat_dukungan == 'diperlukan'){
            ?>
            Diperlukan
            <?php }else{?>
            Tidak Diperlukan
            <?php }
            ?>
            )
          </span>
          <?php 
          $teknis = explode("|",$hasil_data_id->spesifikasi_teknis) ;
          for($i=0;$i <= count(@$teknis);$i++){
           if(@$teknis[$i] !=""){
            $no++;
            ?>
            <br>
            <span style="margin-left:45px"><?php echo @$teknis[$i];?></span>
            
            <?php
          }}
          ?>
          <br>
          14 . Jenis Kontrak <?php echo $hasil_data_id->jenis_kontrak?>

          <br>
          15 . Jadwal Pelaksaan Pekerjaan (<?php echo $hasil_data_id->jadwal_pelaksanaan?>) hari

          <br>
          16 . Pengadaan Barang Ini dapat diberikan uang muka 
          (<?php if($hasil_data_id->uang_muka == 'ada'){
            ?>
            Ada
            <?php }else{?>
            Tidak Ada
            <?php }
            ?>
            )

            <br>
            17 . Pembayaran prestasi pekerjaan dilakukan dengan cara (<?php if($hasil_data_id->pembayaran_prestasi == 'termin'){
              ?>
              Termin
              <?php }else if($hasil_data_id->pembayaran_prestasi == 'bulanan'){?>
              Bulanan
              <?php }else{
                ?>
                Sekaligus
                <?php 
              }
              ?>
              )

              <br>
              18 . Masa berlaku penawaran (<?php echo $hasil_data_id->masa_pembayaran?>) hari
              <?php 
              $keterangan = explode("|",$hasil_data_id->keterangan_tambahan) ;
              $no = 18;
              for($i=0;$i <= count(@$keterangan);$i++){
               if(@$keterangan[$i] !=""){
                $no++;
                ?>
                <br>
                <?php echo $no; ?> . <?php echo @$keterangan[$i];?>

                <?php
              }}
              ?>
              <br>
              <br>
              Demikian Notulen Hasil Koordinasi Kaji Ulang ini dibuat dengan sebenarnya untuk digunakan sebagaimana mestinya.
            </div>

            <br>
            <br>
            <br>
            <br>
            <div style="width:50%;float:left">
              <center>
               <div style="font-weight:bold">PEJABAT PEMBUAT KOMITMEN</div>
               <div style="font-weight:bold"><?php echo $hasil_data->nama_satuan_kerja?></div>
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
               <center>
                <div>
                  <center>
                    <div>PEJABAT PELAKSANA KEGIATAN</div>
                    <div>TEKNIS</div>
                  </center>
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
                  ............................................................................
                  <br>
                </div>
              </center>

            </center>

            <br>
            <br>

            <center>
              <div>
                <center>
                  <div><?php echo $hasil_data_id->jabatan?></div>
                  <div><?php echo $hasil_data_id->cv?></div>
                </center>
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
                ............................................................................
                <br>
                <span style="text-align:center;"><?php echo $hasil_data_id->nama?></span>
                <br>
              </div>
            </center>

          </center>


        </div>
        <div style="float:right;width:50%">
         <div>
           <center>
            <div>Kelompok Kerja</div>
            <div><?php echo $data_rapat->nama_pokja?></div>
          </center>
        </div>
        <center>
         <div>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <?php 
           $nama = $this->db->get_where('master_user',array('nama_pokja' => $data_rapat->nama_pokja,'jabatan_pokja' => 'ketua'));
           @$ketua = $nama->row();
           ?>
           <?php echo @$ketua->nama; ?>
           <br>
           ..........................................................................
           <br>
           nip : <?php echo @$ketua->nip; ?>
         </div>
       </center>

       <center>
         <div>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <?php 
           $nama_wakil = $this->db->get_where('master_user',array('nama_pokja' => $data_rapat->nama_pokja,'jabatan_pokja' => 'sekretaris'));
           @$wakil = $nama_wakil->row();
           ?>
           <?php echo @$wakil->nama; ?>
           <br>
           ..........................................................................
           <br>
           nip : <?php echo @$wakil->nip; ?>
         </div>
       </center>

       <center>
         <div>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <?php 
           $nama_sekre = $this->db->get_where('master_user',array('nama_pokja' => $data_rapat->nama_pokja,'jabatan_pokja' => 'anggota'));
           @$sekretariat = $nama_sekre->row();
           ?>
           <?php echo @$sekretariat->nama; ?>
           <br>
           ..........................................................................
           <br>
           nip : <?php echo @$sekretariat->nip; ?>
         </div>
       </center>
     </div>
   </body>
   </html>