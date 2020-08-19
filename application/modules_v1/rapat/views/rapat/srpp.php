            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Input SPRPP</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Hasil Rapat</a>
                                </li>
                                <li>
                                    <a>Form SPRPP</a>
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
                                    <h1 class="custom-font"><strong>Form SPRPP &nbsp</strong><!-- Rapat --></h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >

                                    <div class="sukses"></div>
                                    <?php 
                                        $id = $this->uri->segment(4);
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'=>$id));
                                    $hasil_ambil_data = $ambil_data->row();

                                    $data_ambil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $hasil_ambil_data->kode_paket));
                                    $hasil_data = $data_ambil->row();
                                    ?>
                                    <form class="form-horizontal"  name="data_form" role="form" method="post" data-parsley-validate action="<?php echo base_url().'rapat/rapat/simpan_srpp';?>">

                                    <input type="hidden" value="<?php echo $hasil_data->id?>" name="id">
                                        <center>
                                            <u><h3>SURAT PENETAPAN RENCANA PELAKSANAAN RENCANA PELAKSANAAN PENGADAAN</h3></u>
                                            <h4>Nomor : Sesuai Nomor surat PPK <?php echo $hasil_data->nomor_surat_sekretariat?> terkait</h4>
                                        </center>
                                        <br>
                                        <br>
                                        <br>
                                        <div style="font-size:17px;padding-left:10px;line-height:35px;padding-left:10px">

                                        Mempertimbangkan Berita Acara Hasil Koordinasi Kaji Ulang Hari :
                                        <br>
                                        <?php echo nama_hari(date("Y-m-d")); ?>,tanggal <?php echo TanggalIndo(date("Y-m-d")); ?>,yang bertandatangan di bawah ini :
                                        <br>
                                        Nama &nbsp: <?php echo $hasil_data->nama_ppk?>
                                        <br>
                                        NIP &nbsp&nbsp&nbsp&nbsp    : <?php echo $hasil_data->kode_ppk?>
                                        <br>
                                        PPK&nbsp&nbsp&nbsp&nbsp     : SKPD <?php echo $hasil_data->nama_satuan_kerja?>
                                        <br> 
                                        Menetapkan hasil kaji untuk Paket Pekerjaan <?php echo $hasil_data->nama_paket; ?>
                                        <br>
                                        dengan hasil sebagai berikut :
                                        <br>
                                        1 . Metode Pengadaan <?php echo $hasil_data->metode_pengadaan?>
                                        <br>
                                        2 .  Nilai HPS <?php echo format_rupiah($hasil_data->hps)?>
                                        <br>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp(Dalam Penyusunan HPS telah sesuai dengan peraturan yang berlaku)
                                        <br>
                                        <div class="form-group">
                                        <label class="col-sm-2">3 . Tanggal Pengumuan lelang</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="spesifikasi_kak" class="form-control" placeholder="KAK">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-2">4 . Tanggal Lelang</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="tanggal_lelang" class="form-control" placeholder="tanggal_lelang">
                                            </div>
                                        </div>

                                        Demikian penetapan saya ini,dibuat dengan sebenarnya untuk digunakan sebagaimana semestinya.


                                        </div>
                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-save"></i> Simpan</button>    
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
     $('#daftar_isi').hide();
     $("#daftar").click(function(){
        var daftar = $('#daftar').val();
        if(daftar == 'ada'){
        	$('#daftar_isi').show();
        }else{
        	$('#daftar_isi').hide();
        }
    });

     $('#peralatan_isi').hide();

     $("#peralatan").click(function(){
        var peralatan = $('#peralatan').val();
        if(peralatan == 'ada'){
        	$('#peralatan_isi').show();
        }else{
        	$('#peralatan_isi').hide();
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
       data :{
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
    },
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
     data :{id:id,
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
       keterangan_tambahan:keterangan_tambahan,},
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