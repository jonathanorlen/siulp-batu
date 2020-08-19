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
                                          1 . Kerangka Acuan Kerja:
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
                                     <div>
                                        <br>
                                        2 . Nama paket pekerjaan: <?php echo $hasil_data->nama_paket?> Uraian Tahapan pekerjaan : sesuai KAK
                                    </div>

                                    3 . Lokasi pekerjaan <?php echo $hasil_ambil_data->tempat?>
                                    <br>
                                    4 . Pagu Anggaran <?php echo format_rupiah($hasil_data->pagu)?>
                                    <br>
                                    5 . Harga Perkiraan Sendiri (HPS) <?php echo format_rupiah($hasil_data->hps) ?>
                                    <br>
                                    6 . Diusulkan perubahan HPS agar memperhitungkan Harga Satuan Dasar Pokok Utama dengan benar-benar didasarkan pada Harga Pasar setempat  yang berlaku masksimal 28 hari sebelum <!-- &nbsp&nbsp&nbsp&nbsp&nbsp -->batas akhir pemasukan penawaran.
                                    <br>
                                    7 . Diusulkan Perubahan Spesfikasi Teknis agar tidak mengarah merk tertentu
                                    <br>
                                    8 . Barang / Jasa belum tercantum  dalam e-Catalogue dan Spesfikasi teknis barang/jasa yang tercantum pada e-Catalogue tidak sesuai dengan spesfikasi teknis  yang dibutuhkan pada paket pekerjaan tersebut diatas
                                    <br>
                                    9 . Sumber Dana (<?php echo $hasil_data->nama_sumber_dana?>)


                                </div>
                                <br>
                                <div class="form-group">
                                 <label class="col-sm-3">10 . Persyaratan  Kualifikasi penyedia</label>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-1">SIUP</label>
                                 <div class="col-sm-9">	
                                  <input required type="text" name="siup" id="siup" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3">SPT Tahunana (Tahun 2015 / 2016)</label>
                        </div>
                        <div class="form-group">
                         <label class="col-sm-8">11 . Daftar Personil Inti Minimal untuk Melaksanakan pekerjaan barang</label>
                         <div class="col-sm-2">
                             <select  required class="form-control daftar" id="daftar" name="personil_inti" id="personil_inti">
                              <option value="">--Pilih--</option>
                              <option value="ada"> Ada</option>
                              <option value="tidak ada"> Tidak Ada</option>
                          </select>
                      </div>
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

<div class="form-group">
    <label class="col-sm-8">12 . Daftar Peralatan utama minimal untuk melaksanakan pekerjaan barang</label>
    <div class="col-sm-2">
        <select required class="form-control" id="peralatan" name="peralatan_inti"  >
         <option  value="">--PILIH--</option>
         <option value="ada"> Ada</option>
         <option value="tidak ada"> Tidak Ada</option>
     </select>
 </div>  
</div>
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


<div class="form-group">
    <label class="col-sm-3">13 . Spesifikasi Teknis</label>
</div> 
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
      </select>
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


<div class="form-group">
    <label class="col-sm-8">14 . Jenis Kontrak</label> 
    <div class="col-sm-2">
        <input required type="text" class="form-control" name="jenis_kontrak" id="jenis_kontrak">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-8">15 . Jadwal Pelaksaan Pekerjaan </label>
    <div class="col-sm-2">
        <!-- <input required type="date" class="form-control" name="jadwal_pelaksanaan" id="jadwal_pelaksanaan"> -->
        <select class="form-control" id="jadwal_pelaksanaan" name="jadwal_pelaksanaan" required>
     <option value="" selected="true">--PILIH--</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-8">16 . Pengadaan Barang Ini dapat diberikan uang muka</label> 
    <div class="col-sm-2">
        <select class="form-control" name="uang_muka"  id="uang_muka" required="">
            <option value="">--PILIH--</option>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
    </div> 
</div>

<div class="form-group">
    <label class="col-sm-8">17 . Pembayaran prestasi pekerjaan dilakukan dengan cara</label>
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
    <!-- sebesar maksimal 30% (Dua Puluh Perseratus) dari nilai Kontrak<input type="text">   -->
</div>

<div class="form-group">
    <label class="col-sm-8">18 . Masa berlaku pembayaran</label>
    <div class="col-sm-2">
        <select class="form-control" name="masa_pembayaran" id="masa_pembayaran" required>
            <option value="">--PILIH--</option>
            <option value="termin">Termin</option>
            <option value="bulanan">Bulanan</option>
            <option value="sekaligus">Sekaligus</option>
        </select>
    </div>
    <div class="col-sm-7">

    </div>
</div>


<div class="form-group">
    <label class="col-sm-1">19 .</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1">20 .</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1">21 .</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1">22 .</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1">23 .</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="keterangan_tambahan[]" id="keterangan_tambahan[]">
    </div>  
</div>

<div class="form-group">
    <label class="col-sm-1">24 .</label>
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
    <label class="col-sm-1">25 .</label>
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
    var url = "<?php echo base_url().'rapat/simpan_lanjut' ?>";
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