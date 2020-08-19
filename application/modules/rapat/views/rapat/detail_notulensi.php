




<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

  <div class="page page-hz-menu-layout">

    <div class="pageheader">

      <h2>Paket</h2>

      <div class="page-bar">

        <ul class="page-breadcrumb">
          <li>
            <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
          </li>
         <!--  <li>
            <a>Rapat Kaji Ulang</a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Hasil Rapat</a>
          </li>
          <li>
            <a>Detail Notulensi</a>
          </li> -->
        </ul>

      </div>

    </div>


    <!-- tile -->

    <div class="row">
      <div class="col-md-12">
        <section class="tile">

          <!-- tile header -->
          <div class="tile-header dvd dvd-btm">
            <h1 class="custom-font"><strong>Detail </strong>Paket</h1>
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

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Paket*</label>
                <div class="col-sm-8">
                  <input readonly type="hidden" name="id" id="id" value="<?php echo $hasil_data->id;?>" class="form-control" placeholder="Masukkan Nama Paket">
                  <input readonly type="text" name="nama_paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                </div>
              </div>

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                <div class="col-sm-8">
                  <input readonly type="text" name="tanggal_pengajuan" value="<?php echo TanggalIndo($hasil_data->tanggal_pengajuan);?>" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
                  data-parsley-trigger="change"
                  >
                </div>
              </div>

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Kegiatan *</label>
                <div class="col-sm-8">
                  <input readonly type="text" value="<?php echo $hasil_data->kegiatan;?>" name="kegiatan" class="form-control" placeholder="Kegiatan"
                  data-parsley-trigger="change"
                  >
                </div>
              </div>

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Volume *</label>
                <div class="col-sm-8">
                  <input readonly type="text" value="<?php echo $hasil_data->volume;?>" name="volume" class="form-control" placeholder="Volume"
                  data-parsley-trigger="change"
                  >
                </div>
              </div>

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Lokasi *</label>
                <div class="col-sm-8">
                  <input readonly type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" placeholder="Lokasi"
                  data-parsley-trigger="change"
                  >
                </div>
              </div>

              <hr class="line-dashed line-full" />

              <div class="form-group">
                <label class="col-sm-2 control-label">Pagu *</label>
                <div class="col-sm-8">
                  <input readonly type="text" value="<?php echo $hasil_data->pagu;?>" name="pagu" class="form-control" placeholder="Pagu"
                  data-parsley-trigger="change"
                  >
                  <label><?php echo format_rupiah($hasil_data->pagu)?></label>
                </div>
              </div>
<!-- 
<hr class="line-dashed line-full" />

<div class="form-group">
<label class="col-sm-2 control-label">Paket *</label>
<div class="col-sm-8">
<input readonly type="text" name="paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Paket"
data-parsley-trigger="change"
>
</div>
</div> -->




<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">HPS *</label>
  <div class="col-sm-8">
    <input readonly type="text" name="HPS" value="<?php echo $hasil_data->hps?>" class="form-control" placeholder="HPS"
    data-parsley-trigger="change"
    >
    <label><?php echo format_rupiah($hasil_data->hps)?></label>
  </div>
</div>

<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">Satuan Kerja *</label>
  <div class="col-sm-8">
    <input readonly type="text" name="Satuan Kerja" value="<?php echo $hasil_data->nama_satuan_kerja;?>" class="form-control" placeholder="HPS"
    data-parsley-trigger="change"
    >

  </div>
<!-- <div class="col-sm-8">
<select name="satuan_kerja" class="form-control" placeholder="Satuan Kerja"
data-parsley-trigger="change"
>
<option disabled="">--PILIH--</option>
<?php 
$hasil = $this->db->get('master_satuan_kerja');
$hasil_ambil = $hasil->result();

foreach ($hasil_ambil as $item) {

?>

<option value="<?php echo $item->unit_kerja;?>"><?php echo $item->unit_kerja;?></option>

<?php
}
?>
</select>
</div> -->
</div>

<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">Sumber Dana *</label>
  <div class="col-sm-8">
    <input readonly type="text" name="Sumber Dana" value="<?php echo $hasil_data->nama_sumber_dana;?>" class="form-control" placeholder="HPS"
    data-parsley-trigger="change"
    >
  </div>
<!-- <div class="col-sm-8">
<select name="sumber_dana" class="form-control" placeholder="Satuan Kerja"
data-parsley-trigger="change"
>
<option disabled="">--PILIH--</option>
<?php 
$hasil = $this->db->get('master_sumber_dana');
$hasil_ambil = $hasil->result();

foreach ($hasil_ambil as $item) {

?>

<option value="<?php echo $item->nama_sumber_dana;?>"><?php echo $item->nama_sumber_dana;?></option>

<?php
}
?>
</select>
</div> -->
</div>

<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
  <div class="col-sm-8">
    <input readonly type="text" name="Jenis Pengadaan" value="<?php echo $hasil_data->jenis_pengadaan;?>" class="form-control" placeholder="HPS"
    data-parsley-trigger="change"
    >
  </div>
</div>

<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">Metode Pengadaan *</label>
  <div class="col-sm-8">
    <input readonly type="text" name="Metode Pengadaan" value="<?php echo $hasil_data->metode_pengadaan;?>" class="form-control" placeholder="HPS"
    data-parsley-trigger="change"
    >
  </div>
</div>

<hr class="line-dashed line-full" />

<div class="form-group">
  <label class="col-sm-2 control-label">Download Dokumen *</label>
  <div class="col-sm-8">
    <a key="<?php echo $hasil_data->id; ?>" class="download">
      <button type="button"  class="btn btn-primary mb-10"><i class="fa fa-download"></i> Download</button>
    </a>
  </div>

</div>
<hr class="line-dashed line-full" />
<div class="table-responsive">
  <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="kode_download">
    <input type="hidden" name="id" value="<?php //echo $hasil_data->id; ?>">
    <tr>
      <th>Dokumen</th>
      <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Action</th>
    </tr>
    <?php 
    @$dpa = $this->db->get_where('dokumen_paket',array('kode_paket' => @$hasil_data->kode_paket,'jenis_dokumen' => 'dpa'));
    @$hasil_dpa = @$dpa->result();
    @$jumlah_dpa = count(@$hasil_dpa);
    if(@$jumlah_dpa == 0){echo '<tr>
      <td>DPA</td>
    <td> - </td></tr>' ;}
    foreach (@$hasil_dpa as $item) {

      ?>
      <tr>
        <td>DPA</td>
        <td><a  download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen ?>" class="btn btn-danger mb-10">DOWNLOAD</a></td>
      </tr>
      <?php 
    }
    ?>

    <?php 
    @$rup = $this->db->get_where('dokumen_paket',array('kode_paket' => @$hasil_data->kode_paket,'jenis_dokumen' => 'rup'));
    @$hasil_rup = @$rup->result();
    @$jumlah_rup = count(@$hasil_rup);
    if(@$jumlah_rup == 0){echo '
      <td>RUP (Rencana Umum Pengadaan)</td>
    <td> - </td>';} 
    foreach (@$hasil_rup as $item) {
      ?>
      <tr>
        <td>RUP (Rencana Umum Pengadaan)</td>
        <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen ;?>" class="btn btn-danger mb-10">DOWNLOAD</a></td>
      </tr>
      <?php }
      ?>


      <?php 
      @$kak = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'kak'));
      @$hasil_kak = @$kak->result();
      @$jumlah_kak = count(@$hasil_kak);
      if(@$jumlah_kak == 0){echo '
        <tr>
          <td>KAK Paket Pekerjaan</td>
          <td> - </td>
          <tr>
            '
            ;}
            foreach (@$hasil_kak as $item) {
              ?>
              <tr>
                <td>KAK Paket Pekerjaan</td>
                <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen?>"><button type="button" class="btn btn-primary mb-10">DOWNLOAD</button></a></td>
              </tr>
              <?php 
            }
            ?>


            <?php 
            @$hps = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'hps'));
            @$hasil_hps = @$hps->result();
            @$jumlah_hps = count(@$hasil_hps);
            if(@$jumlah_hps == 0){
              echo '<tr>
              <td>HPS</td>
              <td>-</td>
            </tr>';
          }
          foreach (@$hasil_hps as $item) {
            ?>
            <tr>
              <td>HPS</td>
              <td><a download href="<?php echo base_url().'component/upload/file/uploads/'.@$item->nama_dokumen?>"><button type="button" class="btn btn-success mb-10">DOWNLOAD</button></a></td>
            </tr>
            <?php 
          }
          ?>


          <?php 
          @$survey = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'survey'));
          @$hasil_survey = @$survey->result();
          @$jumlah_paket = count(@$hasil_survey);
          if(@$jumlah_paket == 0){
            echo '
            <tr>
              <td>Bukti Survey Harga</td>
              <td>-</td>
            </tr>';
          }
          foreach (@$hasil_survey as $item) {
            ?>
            <tr>
              <td>Bukti Survey Harga</td>
              <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-danger mb-10">DOWNLOAD</button></a></td>
            </tr>
            <?php }?>


            <?php 
            @$spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'spesifikasi'));
            @$hasil_spesifikasi = @$spesifikasi->result();
            @$jumlah_spesfikasi = count(@$hasil_spesifikasi);
            if($jumlah_spesfikasi == 0){
              echo '
              <tr>
                <td>Spesifikasi Teknis/Gambar</td>
                <td>-</td>
              </tr>';
            }
            foreach (@$hasil_spesifikasi as $item) {
              ?>
              <tr>
                <td>Spesifikasi Teknis/Gambar</td>
                <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-danger mb-10">DOWNLOAD</button></a></td>
              </tr>
              <?php 
            }
            ?>



            <?php 
            @$bill = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'bill'));
            @$hasil_bill = @$bill->row();
            @$jumlah_bill = count(@$hasil_bill);
            if(@$jumlah_bill =  0){echo '
              <tr>
                <td>BoQ (Bill of Quantity)</td>
                <td>-</td>
              </tr>';
            }
            foreach (@$hasil_bill as $item) {
              ?>
              <tr>
                <td>BoQ (Bill of Quantity)</td>
                <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button  type="button" class="btn btn-success mb-10">DOWNLOAD</button></a></td>
              </tr>
              <?php
            }

            ?>
            <?php 
            @$rancangan = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_data->kode_paket,'jenis_dokumen' => 'rancangan'));
            @$hasil_rancangan = @$rancangan->row();
            @$jumlah_rancangan = count(@$hasil_rancangan);
            if($jumlah_rancangan == 0){ echo '
              <tr>
                <td>Rancangan Kontrak</td>
                <td>-</td>
              </tr>
              ';
            }
            foreach(@$hasil_rancangan as $item){
              ?>
              <tr>
                <td>Rancangan Kontrak</td>
                <td><a download href="<?php echo base_url().'component/upload/file/uploads'.@$item->nama_dokumen ;?>"><button type="button" class="btn btn-primary mb-10">DOWNLOAD</button></a></td>
              </tr>
              <?php }?>
            </table>
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
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title custom-font">Download</h3>
      </div>
      <div class="modal-body" id="form">
        <input type="hidden" id="download" />
        <input type="hidden" id="hasil_kode" />
        Masukan Kode ?

        <input type="text" name="kode" class="form-control has-error" placeholder="Kode"
        data-parsley-trigger="change" id="download_kode">
        <span class="help-block mb-0" id="span">Kode tidak ada yang sama.</span>
      </div>
      <div class="modal-footer">
        <a onclick="terima_download()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
        <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
      </div>
    </div>
  </div>
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
<script type="text/javascript">
  function send_email(){
    var kode_pokja = "<?php echo $hasil_data->kode_pokja ?>";
    var id = "<?php echo $id ?>";
    var url = "<?php echo base_url().'admin/create_paket/sendEmail/'.$id;?>";
    $.ajax( {
      type:"POST", 
      url : url,  
      cache :false,  
      data :{id:id,kode_pokja:kode_pokja},
      beforeSend:function(){
        $(".tunggu").show();  
      },
      success : function(data) {
        $(".tunggu").hide(); 
//window.location.reload()

},  
error : function(data) {  
  alert(data);  
}  
});
  }

  function cetak(){
    var id = $("#id").val();
    var nomor_surat = $("#nomor_surat").val();
    var url = "<?php echo base_url().'admin/create_paket/cetak_tugas/'.$id;?>";
    $.ajax( {
      type:"POST", 
      url : url,  
      cache :false,  
      data :{id:id,nomor_surat:nomor_surat},
      beforeSend:function(){
        $(".tunggu").show();  
      },
      success : function(data) {
        var link = "<?php echo base_url().'admin/create_paket/generate_pdf/'?>"+id;
// var link = "<?php echo base_url().'admin/create_paket/cetak_surat/'?>"+id;
window.open(link, '_blank');
$(".tunggu").hide();  
window.location.reload()
//alert(data);  
/*$("#myModal3").modal('show');
$("#download").val(id); 
$("#hasil_kode").val(data);*/
},  
error : function(data) {  
  alert(data);  
}  
});
  }

  $(function(){

  })
</script>
<script>
  $(function(){
    $("#responsive-usage").dataTable();
    $('a.download').click(function(){
      var id = $(this).attr('key');
      var url = "<?php echo base_url().'authenticate/generate/' ?>";
      $.ajax( {
        type:"POST", 
        url : url,  
        cache :false,  
        data :{id:id},
        beforeSend:function(){
          $(".tunggu").show();  
        },
        success : function(data) {  
          $(".tunggu").hide(); 
          $("#myModal3").modal('show');
          $("#download").val(id); 
          $("#hasil_kode").val(data);
        },  
        error : function(data) {  
          alert(data);  
        }  
      });

    });
  })
  $("#kode_download").hide();
  $("#span").hide();

  function terima_download(){
    var kode = $("#download_kode").val();
    var verifikasi = $("#hasil_kode").val();
    if(kode == verifikasi){
      $("#kode_download").show();
      $("#responsive-usage").dataTable('hide');
      $("#myModal3").modal('hide');

    }
    else{
      $("#span").show();
      $("#form").addClass("has-error");
      setTimeout(function(){$("#span").hide();$("#form").removeClass("has-error"); }, 2599);
    }      
  }

</script>
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
  window.location = "<?php echo base_url() . 'rapat/rapat/form_kirim?id_jadwal='.$hasil_ambil_data->id?>";
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