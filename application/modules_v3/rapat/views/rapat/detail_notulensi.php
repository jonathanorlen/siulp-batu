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
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Hasil Rapat</a>
                                </li>
                                <li>
                                    <a>Detail Notulensi</a>
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
                                    <h1 class="custom-font"><strong>Detail Notulensi &nbsp</strong><!-- Rapat --></h1>
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
                                    <form class="form-horizontal"  name="data_form" role="form" method="post" data-parsley-validate  >

                                        <center>
                                            <p><label style="font-weight:bold ">NOTULEN</label></p>
                                            <p><label style="font-weight:bold "><u>HASIL KOORDINASI KAJI ULANG</u></label></p>
                                            <br>
                                        </center>
                                        <input type="hidden" value="<?php echo @$hasil_data->kode_paket?>" name="kode_paket" id="kode_paket">
                                        <div style="font-size:17px">
                                            <input required type="hidden" name="id" id="id" class="form-control" value="<?php echo $hasil_ambil_data->id ?>">
                                            <div>
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Pada hari ini RABU tanggal DELAPAN BELAS bulan Januari Tahun DUA RIBU TUJUH BELAS,bertempat di bagian Layanan Pengadaan Skretariat Daerah Kota Batu,kami yang bertanda tangan dibawah ini:
                                               <p>
                                                  1 &nbsp&nbsp&nbsp PPK <?php echo @$hasil_data->nama_paket?>.
                                              </p>
                                              <p>
                                                  2 &nbsp&nbsp&nbsp Pejabat Pelaksana Teknis Kegiatan <?php echo $hasil_ambil_data->tempat?>.
                                              </p>
                                              <p>
                                                  3 &nbsp&nbsp&nbsp Pokja <?php echo @$hasil_data->nama_pokja?> Bagian Layanan Pengadaan Sekretariat Daerah Kota Batu.
                                              </p>
                                              <br>
                                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Kami telah melakukan koordinasi Paket Pekerjaan <?php echo @$hasil_data->nama_paket?> dengan hasil sebagai berikut:
                                              <br>
                                              <br>
                                              1 . Kerangka Acuan Kerja:
                                              <div>&nbsp&nbsp&nbsp&nbsp a . Cara Pengadaan (<?php echo @$hasil_data->metode_pengadaan?>)</div>
                                              <div>
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cek KAK dan Dokumen Anggaran (DIPA/DPA) pastikan paket pekerjaan memang Telah tepat dilaksanakan melalui pemlihan penyedia.
                                           </div>

                                           <div>&nbsp&nbsp&nbsp&nbsp b . Jenis Pengadaan (<?php echo @$hasil_data->jenis_pengadaan?>)</div>
                                           <div>
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sesuaikan dengan KAK terkait karakteristik output dan outcame kegiatan sehingga tepat menetapkan jenis pengadaan beserta metode pengadaan yang tepat.
                                           </div>

                                           <div>&nbsp&nbsp&nbsp&nbsp c. Biaya Penunjang (<?php if($hasil_ambil_data->biaya_penunjang == "ada"){?> Ada<?php }else{?> Tidak ada<?php }?>)
                                            
                                          <div>
                                           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Dokumen Anggaran (DIPA/DPA) pastikan telah tersedia biaya penunjang operasional dalam rangka melaksanakan pengadaan barang jasa.
                                       </div>
                                   </div>
                                   <div>
                                    <br>
                                    2 . Nama paket pekerjaan: <?php echo @$hasil_data->nama_paket?> Uraian Tahapan pekerjaan : sesuai KAK
                                </div>

                                3 . Lokasi pekerjaan <?php echo @$hasil_ambil_data->tempat?>
                                <br>
                                4 . Pagu Anggaran <?php echo @$hasil_data->pagu?>
                                <br>
                                5 . Harga Perkiraan Sendiri (HPS) <?php echo @$hasil_data->hps?>
                                <br>
                                6 . Diusulkan perubahan HPS agar memperhitungkan Harga Satuan Dasar Pokok Utama dengan benar-benar didasarkan pada Harga Pasar setempat  yang berlaku masksimal 28 hari sebelum <!-- &nbsp&nbsp&nbsp&nbsp&nbsp -->batas akhir pemasukan penawaran.
                                <br>
                                7 . Diusulkan Perubahan Spesfikasi Teknis agar tidak mengarah merk tertentu
                                <br>
                                8 . Barang / Jasa belum tercantum  dalam e-Catalogue dan Spesfikasi teknis barang/jasa yang tercantum pada e-Catalogue tidak sesuai dengan spesfikasi teknis  yang dibutuhkan pada paket pekerjaan tersebut diatas
                                <br>
                                9 . Sumber Dana (<?php echo @$hasil_data->nama_sumber_dana?>)


                            </div>
                            <br>
                            <div class="form-group">
                               <label class="col-sm-3">10 . Persyaratan  Kualifikasi penyedia</label>
                           </div>
                           <div class="form-group">
                               <label class="col-sm-1">SIUP <?php echo @$hasil_ambil_data->siup?></label>
                               
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3">SPT Tahunana (Tahun 2015 / 2016)</label>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-8">11 . Daftar Personil Inti Minimal untuk Melaksanakan pekerjaan barang</label>
                           <div class="col-sm-2">
                               <select  required class="form-control daftar" id="daftar" name="personil_inti" id="personil_inti" disabled>
                                  <option value="<?php echo $hasil_ambil_data->personil_inti_minimal?>"><?php if($hasil_ambil_data->personil_inti_minimal == "tidak ada") {?> Tidak Ada <?php }else{?> Ada<?php }?></option>
                                 <!--  <option value="ada"> Ada</option>
                                  <option value="tidak ada"> Tidak Ada</option> -->
                              </select>
                          </div>
                      </div>
                      <div id="daftar_isi">
                          <?php 
                        @$hasil = explode("|",$hasil_ambil_data->personil_inti_minimal);
                            $no = 0;
                        for($i=0;$i <= count(@$hasil);$i++){
                           if(@$hasil[$i] !=""){
                            $no++;
                        ?>
                        <div class="form-group">
                        
                            <label class="col-sm-1">&nbsp&nbsp&nbsp <?php echo $no; ?>. </label>
                            <div class="col-sm-4">
                               <?php echo @$hasil[$i];?>
                           </div>
                       </div>
                       <?php } } ?>
                       
   </div>

   <div class="form-group">
    <label class="col-sm-8">12 . Daftar Peralatan utama minimal untuk melaksanakan pekerjaan barang</label>
    <div class="col-sm-2">
        <select required disabled class="form-control" id="peralatan" name="peralatan_inti" id="peralatan_inti" >
            <option value="<?php echo $hasil_ambil_data->peralatan_utama_minimal?>"><?php if($hasil_ambil_data->peralatan_utama_minimal == "tidak ada") {?> Tidak Ada <?php }else{?> Ada<?php }?></option>
       </select>
   </div>  
</div>
<div id="peralatan_isi">
<?php 
            @$hasil_explode = explode("|",$hasil_ambil_data->peralatan_utama_minimal);
           
            $no = 0;
            for($i=0;$i <= count(@$hasil_explode);$i++){
               if(@$hasil_explode[$i] !=""){
                $no++;
            ?>  
    <div class="form-group">
        <label class="col-sm-1">&nbsp&nbsp&nbsp <?php echo $no."."; ?> </label>
        <div class="col-sm-4">
           <?php echo @$hasil_explode[$i];?>
       </div>
   </div>
   <?php } } ?>
   
</div>
<div class="form-group">
    <label class="col-sm-3">13 . Spesifikasi Teknis</label>
</div> 
<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp a . <span style="font-weight:bold"> File Jadwal </span> dan jangka waktu pelaksaan pekerjaan
    </label>
    <div class="col-sm-2">
       (<?php if($hasil_ambil_data->file_jadwal == 'ada'){
                  ?>
                  Ada
                  <?php }else{?>
                  Tidak Ada
                  <?php }
                  ?>
                  )
    </div>
</div>
<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp b . <span style="font-weight:bold"> File Daftar Identitas (Jenis,Merk,Type,Lokasi serta Spesfikasi) bahan/material pabrikasi yang digunakan </span> 
    </label>
    <div class="col-sm-2">
        (<?php if($hasil_ambil_data->file_daftar_identitas == 'ada'){
                        ?>
                        Ada
                        <?php }else{?>
                        Tidak Ada
                        <?php }
                        ?>
                        )
  </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp c . <span style="font-weight:bold"> File RAB/HPS Lengkap analisa harga satuan pekerjaan dan Harga  Satuan Dasar</span></label>
    <div class="col-sm-2">
        (<?php if($hasil_ambil_data->file_rab == 'ada'){
                        ?>
                        Ada
                        <?php }else{?>
                        Tidak Ada
                        <?php }
                        ?>
                        )
    </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp d . <span style="font-weight:bold"> File Gambar Teknis Lengkap </span></label>
    <div class="col-sm-2">
        (<?php if($hasil_ambil_data->file_gambar_teknis == 'ada'){
                        ?>
                        Ada
                        <?php }else{?>
                        Tidak Ada
                        <?php }
                        ?>
                        )
  </div>
</div>

<div class="form-group">
    <label class="col-sm-8">&nbsp&nbsp&nbsp&nbsp&nbsp e . <span style="font-weight:bold"> Surat Dukungan sesuai KAK </span></label>
    <div class="col-sm-2">
        (<?php if($hasil_ambil_data->surat_dukungan == 'diperlukan'){
                        ?>
                        Diperlukan
                        <?php }else{?>
                        Tidak Diperlukan
                        <?php }
                        ?>
                        )
    </div>
</div>


<div class="form-group">
    <label class="col-sm-8">14 . Jenis Kontrak <?php echo $hasil_ambil_data->jenis_kontrak?></label> 
    
</div>

<div class="form-group">
    <label class="col-sm-8">15 . Jadwal Pelaksaan Pekerjaan (<?php echo BulanIndo($hasil_ambil_data->jadwal_pelaksanaan)?>) </label>
      
</div>

<div class="form-group">
    <label class="col-sm-8">16 . Pengadaan Barang Ini dapat diberikan uang muka</label> 
    <div class="col-sm-2">
        (<?php if($hasil_ambil_data->uang_muka == 'ada'){
                        ?>
                        Ada
                        <?php }else{?>
                        Tidak Ada
                        <?php }
                        ?>
                        )
    </div> 
</div>

<div class="form-group">
    <label class="col-sm-8">17 . Pembayaran prestasi pekerjaan dilakukan dengan cara</label>
    <div class="col-sm-2">    
        (<?php if($hasil_ambil_data->pembayaran_prestasi == 'termin'){
                              ?>
                              Termin
                              <?php }else if($hasil_ambil_data->pembayaran_prestasi == 'bulanan'){?>
                              Bulanan
                              <?php }else{
                                    ?>
                                    Sekaligus
                                    <?php 
                              }
                              ?>
                              )
    </div>
    <div class="col-sm-8">
    </div>
    <!-- sebesar maksimal 30% (Dua Puluh Perseratus) dari nilai Kontrak<input type="text">   -->
</div>

<div class="form-group">
    <label class="col-sm-8">18 . Masa berlaku pembayaran</label>
    <div class="col-sm-2">
        (<?php echo $hasil_ambil_data->masa_pembayaran?>)
    </div>
    <div class="col-sm-7">

    </div>
</div>

<?php 
        $keterangan = explode("|",$hasil_ambil_data->keterangan_tambahan) ;
         $no = 18;
            for($i=0;$i <= count(@$keterangan);$i++){
               if(@$keterangan[$i] !=""){
                $no++;
    
?>
<div class="form-group">
    <label class="col-sm-1"><?php echo $no; ?> .</label>
    <div class="col-sm-11">
       <?php echo @$keterangan[$i];?>
    </div>  
</div>

<?php } } ?>


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
<?php
    $user = $this->session->userdata('astrosession');
    if($user->kode_jabatan == "003"){
        #echo $hasil_data->posisi;
        if($hasil_data->posisi == "verifikasi perbaikan"){
        // if($hasil_data->posisi=="Verifikasi Sekretariat"){
?>
<div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
    <div class="form-group">
        <label class="col-sm-1 control-label">&nbsp;</label>
        <div class="col-sm-10"">
            <div style="float:left; "> 
              <a key="<?php echo $hasil_data->id; ?>" class="terima btn-rounded-10 btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Lanjut Lelang</i></a>
          </div>
          <div style="float:left; margin-left: 10px;"> 
              <a key="<?php echo $hasil_data->id; ?>" class="tolak  btn-rounded-10 btn btn-danger btn-lg" style="background: red;"><i class="fa fa-close">&nbsp Revisi</i></a>
          </div>  
      </div>
  </div>
 <?php
    } }
 ?>
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
       $('#daftar_isi').hide();
        var daftar = $('#daftar').val();
        if(daftar == 'tidak ada'){
        	$('#daftar_isi').hide();
        }else{
        	$('#daftar_isi').show();
        }
    ;

       $('#peralatan_isi').hide();

       $("#peralatan").show();
        var peralatan = $('#peralatan').val();
        if(peralatan == 'tidak ada'){
        	$('#peralatan_isi').hide();
        }else{
        	$('#peralatan_isi').show();
        };
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

  function terima_data(){
   /* var id=$('input[name=id]').val();
    var biaya=$('input[name=biaya_penunjang]').val();
    var siup=$('input[name=siup]').val();
    var personil_inti=$('input[name=personil_inti]').val();
    var personil_inti_minimal=$('input[name=personil_inti_minimal]').val();
    var peralatan_inti=$('input[name=peralatan_inti]').val();
    var peralatan_inti_minimal=$('input[name=peralatan_inti_minimal]').val();
    var file_jadwal=$('input[name=file_jadwal]').val();
    var file_daftar_identitas=$('input[name=file_daftar_identitas]').val();
    var file_rab=$('input[name=file_rab]').val();
    var file_gambar_teknis=$('input[name=file_gambar_teknis]').val();
    var surat_dukungan=$('input[name=surat_dukungan]').val();
    var jenis_kontrak=$('input[name=jenis_kontrak]').val();
    var jadwal_pelaksanaan=$('input[name=jadwal_pelaksanaan]').val();
    var uang_muka=$('input[name=uang_muka]').val();
    var pembayaran_prestasi=$('input[name=pembayaran_prestasi]').val();
    var masa_pembayaran=$('input[name=masa_pembayaran]').val();
    var keterangan_tambahan=$('input[name=keterangan_tambahan]').val();*/
    
    /*var id = $("#terima").val();
    var biaya_penunjang=$("#biaya_penunjang").val();
    var siup=$("#siup").val();
    var personil_inti=$("#personil_inti").val();
    var personil_inti_minimal=$('input[name=personil_inti_minimal').val();
    var peralatan_inti=$("#peralatan_inti").val();
    var peralatan_inti_minimal=$('input[name=peralatan_inti_minimal').val();
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
    var keterangan_tambahan=$('input[name=keterangan_tambahan').val();*/
    var kode_paket=$("#kode_paket").val();
    var url = "<?php echo base_url().'rapat/simpan_lanjut_lelang' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :{
      kode_paket:kode_paket
        /*id:id,
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
        keterangan_tambahan:keterangan_tambahan,*/
    },
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
   /* var id = $("#tolak").val();
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
*/
var kode_paket=$("#kode_paket").val();
    var url = "<?php echo base_url().'rapat/simpan_revisi_lelang' ?>";
    $.ajax( {
       type:"POST", 
       url : url,  
       cache :false,  
       data :{
       kode_paket:kode_paket/*id:id,
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
         keterangan_tambahan:keterangan_tambahan,*/},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
        window.location = "<?php echo base_url() . 'rapat/rapat/jadwal_rapat' ?>";
    },  
    error : function(data) {  
      alert(data);  
  }  
});
};
</script>