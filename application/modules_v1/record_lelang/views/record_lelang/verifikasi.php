            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Verifikasi Data Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Verifikasi Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile" >

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Verfikasi Data &nbsp</strong>Paket</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >
                                    <?php
                                    $id = $this->uri->segment(4);

                                    $hasil =$this->db->get_where('transaksi_data_paket' ,array('kode_paket' => $id));
                                    $hasil_data = $hasil->row();
                                    ?>
                                    <div class="sukses"></div>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" id="responsive-usage" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>" id="responsive-usage">

                                       <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Kode Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div> -->

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="nama_paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="date" name="tanggal_pengajuan" value="<?php echo $hasil_data->tanggal_pengajuan;?>" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
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
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">HPS *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="HPS" value="<?php echo $hasil_data->hps;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
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

                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sumber Dana *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Sumber Dana" value="<?php echo $hasil_data->nama_sumber_dana;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div>

                                   <!--  <hr class="line-dashed line-full" />
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
                                        <label class="col-sm-2 control-label">Download *</label>
                                        <div class="col-sm-8">
                                            <a key="<?php echo $hasil_data->id; ?>" class="download">
                                                <button type="button"  class="btn btn-default mb-10">Download</button>
                                            </a>
                                        </div>

                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group" id="kode_download">
                                        <label class="col-sm-2 control-label">Download *</label>
                                        <div class="col-sm-8">
                                            <a key="<?php echo $hasil_data->id; ?>" class="download">
                                                <button type="button"  class="btn btn-default mb-10">Download</button>
                                            </a>
                                            <a key="<?php echo $hasil_data->id; ?>" class="download">
                                                <button type="button"  class="btn btn-default mb-10">Download</button>
                                            </a>
                                            <a key="<?php echo $hasil_data->id; ?>" class="download">
                                                <button type="button"  class="btn btn-default mb-10">Download</button>
                                            </a>
                                        </div>

                                    </div>

<!--                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Jenis Pengadaan" value="<?php echo $hasil_data->nama_jenis_pengadaan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div> -->


                                    <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Metode Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Metode Pengadaan" value="<?php echo $hasil_data->nama_metode_pengadaan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div> -->
<!--                                     <hr class="line-dashed line-full" />
                                    <?php if($hasil_data->status == 'tolak'){?>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Keterangan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Metode Pengadaan" value="<?php echo $hasil_data->keterangan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>
                                    <hr class="line-dashed line-full" />
                                    <?php
                                     }
                                    ?>
                                -->

                                    <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Dokumen DPA *</label>
                                        <div class="col-sm-8">
                                            <label class="control-label col-md-0" >
                                                <?php echo $hasil_data->dokumen_dpa;?>
                                            </label>
                                            &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                            <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_dpa ?>">
                                              <i class="glyphicon glyphicon-cloud-download"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Dokumen RUP*</label>
                                    <div class="col-sm-8">
                                        <label class="control-label col-md-0" >
                                            <?php echo $hasil_data->dokumen_rup;?>
                                        </label>
                                        &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                        <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rup ?>">
                                          <i class="glyphicon glyphicon-cloud-download"></i>
                                      </a>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 control-label">Dokumen KAK*</label>
                                  <div class="col-sm-8">
                                    <label class="control-label col-md-0" >
                                        <?php echo $hasil_data->dokumen_kak;?>
                                    </label>
                                    &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                    <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_kak ?>">
                                      <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Dokumen HPS*</label>
                            <div class="col-sm-8">
                                <label class="control-label col-md-0" >
                                    <?php echo $hasil_data->dokumen_hps;?>
                                </label>
                                &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                                <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_hps ?>">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                              </a>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Dokumen Survey*</label>
                        <div class="col-sm-8">
                            <label class="control-label col-md-0" >
                                <?php echo $hasil_data->dokumen_survey;?>
                            </label>
                            &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                            <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_survey ?>">
                              <i class="glyphicon glyphicon-cloud-download"></i>
                          </a>
                      </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Dokumen Spesifikasi*</label>
                    <div class="col-sm-8">
                        <label class="control-label col-md-0" >
                        <?php echo $hasil_data->dokumen_spesifikasi;?>
                        </label>
                        &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                        <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_spesifikasi ?>">
                          <i class="glyphicon glyphicon-cloud-download"></i>
                      </a>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Dokumen Bill*</label>
                <div class="col-sm-8">
                    <label class="control-label col-md-0" >
                        <?php echo $hasil_data->dokumen_bill;?>
                    </label>
                    &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                    <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_bill ?>">
                      <i class="glyphicon glyphicon-cloud-download"></i>
                  </a>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Dokumen Rancangan*</label>
            <div class="col-sm-8">
                <label class="control-label col-md-0" >
                    <?php echo $hasil_data->dokumen_rancangan;?>
                </label>
                &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                <a  target = '_blank' class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_data->dokumen_rancangan ?>">
                  <i class="glyphicon glyphicon-cloud-download"></i>
              </a>
          </div>
      </div> -->

      <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
        <div class="form-group">
            <label class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-8">
                <div style="float:left; "> 
                  <a key="<?php echo $hasil_data->id; ?>" class=" terima btn btn-lightred btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Gagal</i></a>
              </div>
              <div style="float:left; margin-left: 10px;"> 
                  <a key="<?php echo $hasil_data->id; ?>" class="tolak btn btn-primary btn-lg" style=""><i class="fa fa-arrow-circle-left">&nbsp Sukses</i></a>
              </div> 
              <div style="float:left; margin-left: 10px;"> 
                  <a onclick="history.go(-1);" class="btn btn-greensea btn-lg" ><i class="fa fa-arrow-left">&nbsp Back</i></a>
              </div>  
          </div>
      </div>
      

  </div>
   <!--  <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">&nbsp;</label>
                                    <div class="col-sm-8">
                                        <button onclick="history.go(-1);" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-arrow-left"></i> Back</button>    
                                    </div>
                                </div>
                                <!-- SUBMIT BUTTON -->

                            </div> -->
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

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title custom-font">Konfirmasi Paket Sukses</h3>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="tolak" />
                    <label class=" control-label">Pemenang *</label>
                    <input type="text" class="form-control" name="pemenang" id="pemenang" placeholder="Pemenang">
                    
                    <label class=" control-label">Nilai Kontrak *</label>
                    <input onkeyup="get_rupiah()" type="number" class="form-control" name="nilai_kontrak" id="nilai_kontrak" placeholder="Nilai Kontrak">
                    <label id="rupiah_pagu" class=" control-label"></label>

                    <br>
                    <label class=" control-label">Alamat *</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">

                    <label class=" control-label">Nama Direktur *</label>
                    <input type="text" class="form-control" name="nama_direktur" id="nama_direktur" placeholder="Nama Direktur">
                    
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
                    <h3 class="modal-title custom-font">Konfirmasi Gagal Paket</h3>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="terima" />
                    Apakah anda yakin ingin menggagalkan data tersebut ?
                </div>
                <div class="modal-footer">
                    <a onclick="terima_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                    <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
                </div>
            </div>
        </div>
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
<!--                 <input readonly type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" placeholder="Lokasi"
    data-parsley-trigger="change"> -->
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

<script>
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
    var pemenang = $("#pemenang").val();
    var nilai_kontrak = $("#nilai_kontrak").val();
    var alamat = $("#alamat").val();
    var nama_direktur = $("#nama_direktur").val();
    var url = "<?php echo base_url().'record_lelang/record_lelang/simpan_berhasil' ?>";
    $.ajax( {
       type:"POST", 
       url : url,  
       cache :false,  
       data :{id:id,pemenang:pemenang,nilai_kontrak:nilai_kontrak,alamat:alamat,nama_direktur:nama_direktur},
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'record_lelang/record_lelang/data_proses_lelang' ?>";
   },  
   error : function(data) {  
      alert(data);  
  }  
});
};

</script>
<script>
$(function(){
    $("#responsive-usage").dataTable();
    $('a.terima').click(function(){
     var id = $(this).attr('key');
     $("#myModal2").modal('show');
     $("#terima").val(id); 
 });
})

function get_rupiah(){
  var pagu = $("#nilai_kontrak").val();
  
  $.ajax( {  
    type :"post",  
    url : "<?php echo base_url() . 'admin/create_paket/get_rupiah' ?>",
    cache :false, 
    data :{rupiah:pagu},
    success : function(data) {  
      
     $("#rupiah_pagu").html(data);
    
     
 }  

});

}

function terima_data(){
    var id = $("#terima").val();
    var kode_paket = $("#kode_paket").val();
    var url = "<?php echo base_url().'record_lelang/record_lelang/simpan_gagal' ?>";
    $.ajax( {
       type:"POST", 
       url : url,  
       cache :false,  
       data :{id:id,kode_paket:kode_paket},
       beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
         window.location = "<?php echo base_url() . 'record_lelang/data_proses_lelang' ?>"; 
     },  
     error : function(data) {  
      alert(data);  
  }  
});
}

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

        /*var id = $("#download").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_terima' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'admin/data_verifikasi/content' ?>"; 
   },  
   error : function(data) {  
      alert(data);  
  }  
});*/
        }

    /*function terima_download(){
        var id = $("#download").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_terima' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'admin/data_verifikasi/content' ?>"; 
   },  
   error : function(data) {  
      alert(data);  
  }  
});
        }*/

        </script>
