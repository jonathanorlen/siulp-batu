            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Verifikasi Jadwal Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat'?>">Verifikasi Jadwal Rapat</a>
                                </li>
                                <li>
                                    <a>Verifikasi Jadwal</a>
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
                                    <h1 class="custom-font"><strong>Verifikasi Jadwal &nbsp</strong><!-- Rapat --></h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >

                                    <div class="sukses"></div>
                                    
                                    <form id="data_form" class="form-horizontal"  name="data_form" role="form" method="post" data-parsley-validate  >


                        <?php 
                                    $id = $this->uri->segment(4);
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Rapat</label>
                                            <div class="col-sm-8">
                                                    <input  type="hidden" name="tanggal_rapat" id="id" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->id?>" placeholder="Masukkan Tanggal Rapat" required="">
                                                <input disabled="" type="text" name="tanggal_rapat" class="form-control" disabled="" value="<?php echo tanggalindo($hasil_ambil_data->tanggal_rapat)?>" placeholder="Masukkan Tanggal Rapat" required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Agenda *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="agenda" class="form-control" value="<?php echo $hasil_ambil_data->agenda?>" placeholder="Masukkan Agenda"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Paket *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="paket" class="form-control" placeholder="Masukkan Paket"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_paket?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tempat *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->tempat?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_satuan_kerja" class="form-control" placeholder="Masukkan Satuan Kerja"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_satuan_kerja?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pokja *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="pokja" class="form-control" placeholder="Masukkan Pokja"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_pokja?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">PPK *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_ppk" class="form-control" placeholder="Masukkan PPK"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_ppk?>"
                                                required>
                                            </div>
                                        </div>

<div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
    <div class="form-group">
        <label class="col-sm-1 control-label">&nbsp;</label>
        <div class="col-sm-10"">
            <div style="float:left; "> 
              <a key="" class=" terima btn-rounded-10 btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Setuju</i></a>
          </div>
          <div style="float:left; margin-left: 10px;"> 
              <a key="" class="tolak  btn-rounded-10 btn btn-danger btn-lg" style="background: red;"><i class="fa fa-close">&nbsp Tidak Setuju</i></a>
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
<?php
$get_group = $this->session->userdata('astrosession');
?>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font warning ">Konfirmasi </h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tolak" />
                Silahkan Berikan Alasan Anda
                <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                                                data-parsley-trigger="change"
                                                required>
            </div>
            <div class="modal-footer">
            
                <?php if($get_group->kode_jabatan == "002"){?>
                        <a onclick="tolak_data_ppk()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <?php }else if($get_group->kode_jabatan == "003"){?>
                        <a onclick="tolak_data_pokja()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <?php }?>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi Persetujuan</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="terima" />
                Apakah anda yakin ingin menyetujui data tersebut ?
            </div>
            <div class="modal-footer">
            <?php if($get_group->kode_jabatan == "002"){?>
                        <a onclick="terima_data_ppk()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <?php }else if($get_group->kode_jabatan == "003"){?>
                        <a onclick="terima_data_pokja()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <?php }?>
                
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

 function terima_data_ppk(){
    var id = $("#id").val();
    var url = "<?php echo base_url().'rapat/terima_data_ppk' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :{id:id},
     
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat' ?>";
     },  
     error : function(data) {  
      alert(data);  
  }  
});
};

  function terima_data_pokja(){
    var id = $("#id").val();
    var url = "<?php echo base_url().'rapat/terima_data_pokja' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :{id:id},
     
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat' ?>";
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

function tolak_data_pokja(){
    var id = $("#id").val();
    var keterangan=$("#keterangan").val();

    var url = "<?php echo base_url().'rapat/tolak_data_pokja' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :{id:id,keterangan:keterangan},
     
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat' ?>";
     },  
     error : function(data) {  
      alert(data);  
  }  
});
};

function tolak_data_ppk(){
    var id = $("#id").val();
    var keterangan=$("#keterangan").val();

    var url = "<?php echo base_url().'rapat/tolak_data_ppk' ?>";
    $.ajax( {
     type:"POST", 
     url : url,  
     cache :false,  
     data :{id:id,keterangan:keterangan},
     
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat' ?>";
     },  
     error : function(data) {  
      alert(data);  
  }  
});
};
</script>