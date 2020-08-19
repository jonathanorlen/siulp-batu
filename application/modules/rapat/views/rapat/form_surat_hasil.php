            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Notulensi</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Hasil Rapat</a>
                                </li>
                                <li>
                                    <a>Form Notulensi</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Form Notulensi &nbsp</strong><!-- Rapat --></h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id_jadwal'];
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();

                                    $kode_hasil=$hasil_ambil_data->kode_paket;

                                    $data_ambil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $kode_hasil));
                                    $hasil_data = $data_ambil->row();
                                    ?>
                                    <form id="data_form" class="form-horizontal"  name="data_form" role="form" method="post" data-parsley-validate  >

                                        <center>
                                            <p><label style="font-weight:bold ">NOTULEN</label></p>
                                            <p><label style="font-weight:bold "><u>HASIL KOORDINASI KAJI ULANG</u></label></p>
                                            <br>
                                        </center>
                                        <div style="font-size:17px">
                                            <input required type="hidden" name="id" id="id" class="form-control" value="<?php echo $hasil_ambil_data->id ?>">
                                            <input required type="hidden" name="kode_paket" id="kode_paket" class="form-control" value="<?php echo $hasil_ambil_data->kode_paket ?>">
                                            <input required type="hidden" name="kode_rapat" id="kode_rapat" class="form-control" value="<?php echo $hasil_ambil_data->kode_rapat ?>">
                                            <div>
                                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Pada hari ini <?php echo nama_hari(date("Y-m-d")); ?> tanggal <?php echo TanggalIndo(date("Y-m-d")); ?> ,bertempat di bagian Layanan Pengadaan Sekretariat Daerah Kota Batu,kami yang bertanda tangan dibawah ini:
                                             <p>
                                              1 &nbsp&nbsp&nbsp PPK <?php echo $hasil_data->nama_paket?>.
                                          </p>
                                          <p>
                                              2 &nbsp&nbsp&nbsp Pejabat Pelaksana Teknis Kegiatan <?php echo $hasil_ambil_data->tempat?>.
                                          </p>
                                          <p>
                                              3 &nbsp&nbsp&nbsp Pokja <?php echo $hasil_data->nama_pokja?> Bagian Layanan Pengadaan Sekretariat Daerah Kota Batu.
                                          </p>
                                          <br>
                                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Kami telah melakukan koordinasi Paket Pekerjaan <?php echo $hasil_data->nama_paket?> dengan hasil sebagai berikut:
                                          <br>
                                          <br>
                                           
                                          
                                             <input checked="true" type="checkbox" id="kerangka" class="checkbox-inline setting" /> Kerangka Acuan Kerja:
                                              <div id="form_kerangka">
                                              <input type="hidden" name="kerangka" id="input_kerangka" />
                                              <div>&nbsp&nbsp&nbsp&nbsp a . Cara Pengadaan (<?php echo $hasil_data->metode_pengadaan?>)</div>
                                              <div>
                                                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cek KAK dan Dokumen Anggaran (DIPA/DPA) pastikan paket pekerjaan memang Telah tepat dilaksanakan melalui pemlihan penyedia.
                                             </div>
    
                                             <div>&nbsp&nbsp&nbsp&nbsp b . Jenis Pengadaan (<?php echo $hasil_data->jenis_pengadaan?>)</div>
                                             <div>
                                                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sesuaikan dengan KAK terkait karakteristik output dan outcame kegiatan sehingga tepat menetapkan jenis pengadaan beserta metode pengadaan yang tepat.
                                             </div>
                                          
                                          
                                            
                                         <div>&nbsp&nbsp&nbsp&nbsp c. Biaya Penunjang 
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select class="form-control" name="biaya_penunjang" id="biaya_penunjang">
                                                      <option value="">--Pilih Biaya Penunjang--</option>
                                                      <option value="ada">Ada</option>
                                                      <option value="tidak ada">Tidak Ada</option>
                                                  </select>    
                                              </div>
                                          </div>
                                          <div>
                                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Dokumen Anggaran (DIPA/DPA) pastikan telah tersedia biaya penunjang operasional dalam rangka melaksanakan pengadaan barang jasa.
                                         </div>
                                     </div>
                                     </div>
                                     <div>
                                        <br>
                                         Nama paket pekerjaan: 
                                        <?php echo $hasil_data->nama_paket?> Uraian Tahapan pekerjaan : sesuai KAK
                                    </div>

                                     Lokasi pekerjaan <?php echo $hasil_ambil_data->tempat?>
                                    <br>
                                     Pagu Anggaran <?php echo format_rupiah($hasil_data->pagu)?>
                                    <br>
                                     Harga Perkiraan Sendiri (HPS) <?php echo format_rupiah($hasil_data->hps) ?>
                                    <br>
                                     Diusulkan perubahan HPS agar memperhitungkan Harga Satuan Dasar Pokok Utama dengan benar-benar didasarkan pada Harga Pasar setempat  yang berlaku masksimal 28 hari sebelum <!-- &nbsp&nbsp&nbsp&nbsp&nbsp -->batas akhir pemasukan penawaran.
                                    <br>
                                     Diusulkan Perubahan Spesfikasi Teknis agar tidak mengarah merk tertentu
                                    <br>
                                     Barang / Jasa belum tercantum  dalam e-Catalogue dan Spesfikasi teknis barang/jasa yang tercantum pada e-Catalogue tidak sesuai dengan spesfikasi teknis  yang dibutuhkan pada paket pekerjaan tersebut diatas
                                    <br>
                                     Sumber Dana (<?php echo $hasil_data->nama_sumber_dana?>)


                                </div>
                                <br>
                                <div class="form-group">
                                 <label class="col-sm-3"><input checked="true" type="checkbox" id="persyaratan" class="checkbox-inline setting" /> Persyaratan  Kualifikasi penyedia</label>
                                <input type="hidden" name="persyaratan" id="input_persyaratan" />
                             </div>
                             <div id="form_persyaratan">
                                <div class="form-group">
                                 <label class="col-sm-2">SIUP</label>
                                 <div class="col-sm-9">	
                                  <input required type="text" name="siup" id="siup" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2">SPT Tahunan</label>
                            <div class="col-sm-9">  
                                <input required type="text" name="spt" id="spt" class="form-control">
                            </div>
                        </div>
                             </div>
                             
                          
                        
                        <div class="form-group">
                         <label class="col-sm-8"><input checked="true" type="checkbox" id="personil" class="checkbox-inline setting" /> Daftar Personil Inti Minimal untuk Melaksanakan pekerjaan barang</label>
                        <input name="personil" type="hidden" id="input_personil" />
                       
                            
                               
                  </div>
                      <div id="form_personil">
                      <div class="row">
                      <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
                        <div class="col-sm-6">
                             <select  required class="form-control daftar" id="daftar" name="personil_inti" id="personil_inti">
                              <option value="">--Pilih--</option>
                              <option value="ada"> Ada</option>
                              <option value="tidak ada"> Tidak Ada</option>
                          </select>
                      </div><br /><br />
                      </div>
                      
                    <div id="daftar_isi" class="personil">
                  <div  style="display: none;">
                      <div id="item_personil" class="form-group">
                        <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
                        <div class="col-sm-6">
                         <input type="text" name="personil_inti_minimal[]" id="personil_inti_minimal[]" class="form-control" >
                     </div>
                 </div>
                  </div>
                    
                 <div class="form-group">
                    <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
                    <div class="col-sm-6">
                     <input type="text" name="personil_inti_minimal[]" id="personil_inti_minimal[]" class="form-control" >
                 </div>
             </div>
             <div class="form-group">
                <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
                <div class="col-sm-6">
                 <input type="text" name="personil_inti_minimal[]" id="personil_inti_minimal[]" class="form-control" >
             </div>
         </div>
         <div class="form-group">
            <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
            <div class="col-sm-6">
             <input type="text" name="personil_inti_minimal[]" id="personil_inti_minimal[]" class="form-control" >
         </div>
     </div>
     <div class="form-group">
        <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
        <div class="col-sm-6">
         <input type="text" name="personil_inti_minimal[]" id="personil_inti_minimal[]" class="form-control" >
     </div>
 </div>
</div>
<div class="col-md-4 personil">
    <a onclick="tambah_personil()" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Personil</a>
</div>
</div>
                        
                        
                     
                
                 

<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox" id="inti" class="checkbox-inline setting" />
                        <input name="inti"  type="hidden" id="input_inti" /> Daftar Peralatan utama minimal untuk melaksanakan pekerjaan barang</label>
      
</div>
<div id="form_inti">
<div class="row">
<label class="col-sm-1">&nbsp&nbsp&nbsp</label>
<div class="col-sm-6">
        <select required class="form-control" id="peralatan" name="peralatan_inti"  >
         <option  value="">--PILIH--</option>
         <option value="ada"> Ada</option>
         <option value="tidak ada"> Tidak Ada</option>
     </select>
 </div>
</div><br />


<div id="peralatan_isi" class="peralatan">
    <div style="display: none;">
    <div id="item">
        <div class="form-group" >
            <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
            <div class="col-sm-6">
             <input type="text" name="peralatan_inti_minimal[]" id="peralatan_inti_minimal[]" class="form-control">
         </div>
     </div>
    </div>
        
    </div>
    <div class="form-group">
        <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
        <div class="col-sm-6">
         <input type="text" name="peralatan_inti_minimal[]" id="peralatan_inti_minimal[]" class="form-control">
     </div>
 </div>
 <div class="form-group">
    <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
    <div class="col-sm-6">
     <input type="text" name="peralatan_inti_minimal[]" id="peralatan_inti_minimal[]" class="form-control" >
 </div>
</div>
<div class="form-group">
    <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
    <div class="col-sm-6">
     <input type="text" name="peralatan_inti_minimal[]" id="peralatan_inti_minimal[]" class="form-control" >
 </div>
</div>
<div class="form-group">
    <label class="col-sm-1">&nbsp&nbsp&nbsp</label>
    <div class="col-sm-6">
     <input type="text" name="peralatan_inti_minimal[]" id="peralatan_inti_minimal[]" class="form-control" >
 </div>
</div>

</div>
<div class="form-group">
    <div class="col-md-4 peralatan">
        <a onclick="tambah_peralatan()" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Peralatan</a>
    </div>
    
</div>
</div>

<div class="form-group">
    <label class="col-sm-3"><input checked="true" type="checkbox" id="spesifikasi" class="checkbox-inline setting" />
                        <input name="spesifikasi" type="hidden" id="input_spesifikasi" /> Spesifikasi Teknis</label>
</div> 
<div id="form_spesifikasi">


<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp a . <span style="font-weight:bold"> File Jadwal </span> dan jangka waktu pelaksaan pekerjaan
    </label>
    <div class="col-sm-2">
        <select class="form-control" name="file_jadwal" id="file_jadwal" required>
            <option value="">--PILIH--</option>
            <option value="ada">Ada</option>
            <option value="tidak ada">Tidak Ada</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp b . <span style="font-weight:bold"> File Daftar Identitas (Jenis,Merk,Type,Lokasi serta Spesfikasi) bahan/material pabrikasi yang digunakan </span> 
    </label>
    <div class="col-sm-2">
        <select class="form-control" name="file_daftar_identitas" id="file_daftar_identitas" required>
          <option value="">--PILIH--</option>
          <option value="ada">Ada</option>
          <option value="tidak ada">Tidak Ada</option>
      </select><!--  -->
  </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp c . <span style="font-weight:bold"> File RAB/HPS Lengkap analisa harga satuan pekerjaan dan Harga  Satuan Dasar</span></label>
    <div class="col-sm-2">
        <select class="form-control" name="file_rab" id="file_rab" required>
            <option value="">--PILIH--</option>
            <option value="ada">Ada</option>
            <option value="tidak ada">Tidak Ada</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp d . <span style="font-weight:bold"> File Gambar Teknis Lengkap </span></label>
    <div class="col-sm-2">
        <select class="form-control" name="file_gambar_teknis" id="file_gambar_teknis" required>
          <option value="">--PILIH--</option>
          <option value="ada">Ada</option>
          <option value="tidak ada">Tidak Ada</option>
      </select>
  </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp e . <span style="font-weight:bold"> Surat Dukungan sesuai KAK </span></label>
    <div class="col-sm-2">
        <select class="form-control" name="surat_dukungan" id="surat_dukungan" required>
            <option value="">--PILIH--</option>
            <option value="diperlukan">Diperlukan</option>
            <option value="tidak diperlukan">Tidak Diperlukan</option>
        </select>
    </div>
</div>
<div  style="display: none;">
    <div id="spesifikasi_teknis">
        <div class="form-group">
            <label class="col-sm-1">&nbsp</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="spesifikasi_teknis[]" id="spesifikasi_teknis[]">
            </div>  
        </div>
    </div>
</div>

<div id="teknis" >

</div>

<div class="form-group">
    <div class="col-md-4">
        <a onclick="tambah_spesifikasi()" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Spesfikasi Teknis</a>
    </div>
</div>
</div>

<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox"  id="kontrak" class="checkbox-inline setting" />
                        <input name="kontrak" type="hidden" id="input_kontrak" /> Jenis Kontrak</label> 
<div id="form_kontrak">
    <div class="col-sm-2">
      <select class="form-control" id="jenis_kontrak" name="jenis_kontrak" required>
        <option value="" selected="true">--PILIH--</option>
        <option value="Lumpsom">Lumpsom</option>
        <option value="Harga satuan">Harga satuan</option>
        <option value="Gabungan lumpsom dan harga satuan">Gabungan lumpsom dan harga satuan</option>
        <option value="Presentase">Presentase</option>
        <option value="Terima jadi">Terima jadi</option>
    </select>
    </div>   
</div>
</div>
<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox" id="jadwal" class="checkbox-inline setting" />
                        <input name="jadwal" type="hidden" id="input_jadwal" /> Jadwal Pelaksaan Pekerjaan </label>
<div id="form_jadwal">
    <div class="col-sm-2">
     <!--  <input required type="text" class="form-control" name="jadwal_pelaksanaan" id="jadwal_pelaksanaan"> -->
      <input type="text" name="jadwal_pelaksanaan" id="jadwal_pelaksanaan" class="form-control" >
    </div>
    <div class="col-sm-1">
      hari
    </div>
</div>  
</div>

<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox" id="pengadaan" class="checkbox-inline setting" />
                        <input name="pengadaan"  type="hidden" id="input_pengadaan" />  Pengadaan Barang Ini dapat diberikan uang muka</label> 
    <div id="form_pengadaan">
    <div class="col-sm-2">
        <select class="form-control" name="uang_muka"  id="uang_muka" required="">
            <option value="">--PILIH--</option>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
    </div>
    </div>
     
</div>

<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox" id="pembayaran" class="checkbox-inline setting" />
                        <input name="pembayaran" type="hidden" id="input_pembayaran" />  Pembayaran prestasi pekerjaan dilakukan dengan cara</label>
    <div id="form_pembayaran">
        <div class="col-sm-2">    
        <select class="form-control" name="pembayaran_prestasi" id="pembayaran_prestasi" required>
            <option value="">--PILIH--</option>
            <option value="termin">Termin</option>
            <option value="bulanan">Bulanan</option>
            <option value="sekaligus">Sekaligus</option>
        </select>
    </div>
    <div class="col-sm-8">
    </div>
    </div>
    
    
    <!-- sebesar maksimal 30% (Dua Puluh Perseratus) dari nilai Kontrak<input type="text">   -->
</div>

<div class="form-group">
    <label class="col-sm-8"><input checked="true" type="checkbox" id="penawaran" class="checkbox-inline setting" />
                        <input name="penawaran" type="hidden" id="input_penawaran" />  Masa berlaku penawaran</label>
    <div id="form_penawaran">
         <div class="col-sm-2">
     <!--  <input required type="text" class="form-control" name="jadwal_pelaksanaan" id="jadwal_pelaksanaan"> -->
      <input type="text" name="masa_pembayaran" id="masa_pembayaran" class="form-control" >
    </div>
    <div class="col-sm-1">
      hari
    </div> 
    </div>
   
</div>


<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>



<div  style="display: none;">
    <div id="ket_tambahan">
        <div class="form-group">
            <label class="col-sm-1">&nbsp</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
            </div>  
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-1"> </label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div id="ket_tambahan2" >

</div>

<div class="form-group">
    <div class="col-md-4">
        <a onclick="tambah_ket()" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Keterangan</a>
    </div>
</div>


<div class="form-group">
   <div class="col-md-2">
   <label><input checked="true" type="checkbox" id="pihak" class="checkbox-inline setting" /> 
                        <input name="pihak" type="hidden" id="input_pihak" />  Pihak Lain</label>
   </div>
</div>

<div id="form_pihak">
    <div class="form-group">
    <label class="col-sm-2">Jabatan</label>
    <div class="col-sm-3">
        <select class="form-control" name="jabatan" id="jabatan" required>
            <option value="">--PILIH--</option>
            <option value="Konsultan">Konsultan</option>
            <option value="Tim teknis">Tim teknis</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2">Nama</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" name="nama" id="nama">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-2">Cv</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" name="cv" id="cv">
    </div>  
</div>
</div>






<!-- <div class="form-group">
    <label class="col-sm-2 control-label">Posisi Rapat</label>
    <div class="col-sm-8">
        <div style="float:left; "> 
          <a key="<?php echo $hasil_data->id; ?>" class=" terima btn-rounded-10 btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Lanjut Lelang</i></a>
      </div>
      <div style="float:left; margin-left: 10px;"> 
          <a key="<?php echo $hasil_data->id; ?>" class="tolak  btn-rounded-10 btn btn-danger btn-lg" style="background: red;"><i class="fa fa-close">&nbsp Revisi</i></a>
      </div>  
  </div>
</div> -->




<!-- <input type="text" name="hari" placeholder="Hari" style="width:70px;clear:both" required=""> -->
</div>
<div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
    <div class="form-group">
        <label class="col-sm-1 control-label">&nbsp;</label>
        <div class="col-sm-10"">
            <div style="float:left; "> 
              <a key="<?php echo $id; ?>" class=" terima btn-rounded-10 btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Lanjut Lelang</i></a>
          </div>
          <div style="float:left; margin-left: 10px;"> 
              <a key="<?php echo $id; ?>" class="tolak  btn-rounded-10 btn btn-danger btn-lg" style="background: red;"><i class="fa fa-close">&nbsp Revisi</i></a>
          </div>  
      </div>
  </div>
  <!-- SUBMIT BUTTON -->

</div>
</form>

</div>
<!-- /tile body -->

<!-- tile footer -->
<!-- /tile footer -->

</section>
</div>

</div>


<!-- /tile -->

</section>

</div>

</section>
<!--/ CONTENT -->
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font warning ">Konfirmasi Revisi </h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tolak" />
                Apakah anda yakin ingin Merevisi data tersebut ?
            </div>
            <div class="modal-footer">
                <a onclick="tolak_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi Lanjut lelang</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="terima" />
                Apakah anda yakin ingin Melanjutkan data tersebut ?
            </div>
            <div class="modal-footer">
                <a onclick="terima_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
     $('.personil').hide();
     $("#daftar").click(function(){
        var daftar = $('#daftar').val();
        if(daftar == 'ada'){
        	$('.personil').show();
        }else{
        	$('.personil').hide();
        }
    });

     $('.peralatan').hide();

     $("#peralatan").click(function(){
        var peralatan = $('#peralatan').val();
        if(peralatan == 'ada'){
        	$('.peralatan').show();
        }else{
        	$('.peralatan').hide();
           } 
        });
        
    });


    function myFunction() {
        confirm("Apakah anda yakin.?");
    }

    function print_form() {
        window.print();
    }
</script>

<script type="text/javascript">
  $(function(){
    //$("#responsive-usage").dataTable();
    $('a.terima').click(function(){
     var id = $(this).attr('key');
     $("#myModal2").modal('show');
     $("#terima").val(id); 
 });
 
 $(".setting").click(function(){
    var id = $(this).attr('id');
    if($('#'+id).is(':checked')){
        //alert(id);
        $("#input_"+id).val('aktif');
        $("#form_"+id).show();
    }else{
        $("#input_"+id).val('tidak aktif');
        $("#form_"+id).hide();
        $("#form_"+id).find('input:text, input:password, input:file, select, textarea').each(function() {
            $(this).val('');
        });        
    }
 })
})

function tambah_peralatan(){
    $('#item').clone().appendTo('#peralatan_isi');
}
function tambah_personil(){
    $('#item_personil').clone().appendTo('#daftar_isi');
}
function tambah_ket(){
    $('#ket_tambahan').clone().appendTo('#ket_tambahan2');
}

function tambah_spesifikasi(){
    $('#spesifikasi_teknis').clone().appendTo('#teknis');
}

  function terima_data(){
    var id = $("#terima").val();
    var biaya_penunjang=$("#biaya_penunjang").val();
    var siup=$("#siup").val();
    var personil_inti=$("#personil_inti").val();
    var personil_inti_minimal=$("#personil_inti_minimal").val();
    var peralatan_inti=$("#peralatan_inti").val();
    var peralatan_inti_minimal=$("#peralatan_inti_minimal").val();
    var file_jadwal=$("#file_jadwal").val();
    var file_daftar_identitas=$("#file_daftar_identitas").val();
    var file_rab=$("#file_rab").val();
    var file_gambar_teknis=$("#file_gambar_teknis").val();
    var surat_dukungan=$("#surat_dukungan").val();
    var jenis_kontrak=$("#jenis_kontrak").val();
    var jadwal_pelaksanaan=$("#jadwal_pelaksanaan").val();
    var uang_muka=$("#uang_muka").val();
    var pembayaran_prestasi=$("#pembayaran_prestasi").val();
    var masa_pembayaran=$("#masa_pembayaran").val();
    var keterangan_tambahan=$("#keterangan_tambahan").val();
    var spesifikasi_teknis=$("#spesifikasi_teknis").val();
    var url = "<?php echo base_url().'rapat/notulensi' ?>";
    $.ajax( {
       type:"POST", 
       url : url,  
       cache :false,  
       data : $("#data_form").serialize(),
       /*{
       
        id:id,
        biaya_penunjang:biaya_penunjang,
        siup:siup,
        personil_inti:personil_inti,
        personil_inti_minimal:personil_inti_minimal,
        peralatan_inti:peralatan_inti,
        peralatan_inti_minimal:peralatan_inti_minimal,
        file_jadwal:file_jadwal,
        file_daftar_identitas:file_daftar_identitas,
        file_rab:file_rab,
        file_gambar_teknis:file_gambar_teknis,
        surat_dukungan:surat_dukungan,
        jenis_kontrak:jenis_kontrak,
        jadwal_pelaksanaan:jadwal_pelaksanaan,
        uang_muka:uang_muka,
        pembayaran_prestasi:pembayaran_prestasi,
        masa_pembayaran:masa_pembayaran,
        keterangan_tambahan:keterangan_tambahan,
    },*/
    beforeSend:function(){
      $(".tunggu").show();  
  },
  success : function(data) {  
    window.location = "<?php echo base_url() . 'rapat/rapat/hasil_rapat' ?>";
 },  
 error : function(data) {  
  alert(data);  
}  
});
};

$(function(){
    $("#responsive-usage").dataTable();
    $('a.tolak').click(function(){
       var id = $(this).attr('key');
       $("#myModal1").modal('show');
       $("#tolak").val(id); 
   });
});

function tolak_data(){
    var id = $("#tolak").val();
    var biaya_penunjang=$("#biaya_penunjang").val();
    var siup=$("#siup").val();
    var personil_inti=$("#personil_inti").val();
    var personil_inti_minimal=$("#personil_inti_minimal").val();
    var peralatan_inti=$("#peralatan_inti").val();
    var peralatan_inti_minimal=$("#peralatan_inti_minimal").val();
    var file_jadwal=$("#file_jadwal").val();
    var file_daftar_identitas=$("#file_daftar_identitas").val();
    var file_rab=$("#file_rab").val();
    var file_gambar_teknis=$("#file_gambar_teknis").val();
    var surat_dukungan=$("#surat_dukungan").val();
    var jenis_kontrak=$("#jenis_kontrak").val();
    var jadwal_pelaksanaan=$("#jadwal_pelaksanaan").val();
    var uang_muka=$("#uang_muka").val();
    var pembayaran_prestasi=$("#pembayaran_prestasi").val();
    var masa_pembayaran=$("#masa_pembayaran").val();
    var keterangan_tambahan=$("#keterangan_tambahan").val();

    var url = "<?php echo base_url().'rapat/simpan_revisi' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :
     $("#data_form").serialize(),
     /*{id:id,
       biaya_penunjang:biaya_penunjang,
       siup:siup,
       personil_inti:personil_inti,
       personil_inti_minimal:personil_inti_minimal,
       peralatan_inti:peralatan_inti,
       peralatan_inti_minimal:peralatan_inti_minimal,
       file_jadwal:file_jadwal,
       file_daftar_identitas:file_daftar_identitas,
       file_rab:file_rab,
       file_gambar_teknis:file_gambar_teknis,
       surat_dukungan:surat_dukungan,
       jenis_kontrak:jenis_kontrak,
       jadwal_pelaksanaan:jadwal_pelaksanaan,
       uang_muka:uang_muka,
       pembayaran_prestasi:pembayaran_prestasi,
       masa_pembayaran:masa_pembayaran,
       keterangan_tambahan:keterangan_tambahan,},*/
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
        window.location = "<?php echo base_url() . 'rapat/rapat/hasil_rapat' ?>";
     },  
     error : function(data) {  
      alert(data);  
  }  
});
};
</script>