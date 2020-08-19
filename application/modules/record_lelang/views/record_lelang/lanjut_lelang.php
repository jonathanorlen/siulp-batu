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

                                    $hasil =$this->db->get_where('transaksi_data_paket' ,array('id' => $id));
                                    $hasil_data = $hasil->row();
                                    ?>
                                    <div class="sukses"></div>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" id="responsive-usage" data-parsley-validate action="<?php echo base_url().'record_lelang/record_lelang/simpan_lelang';?>" id="responsive-usage" >

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Kode Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

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


                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Upload SPRPP *</label>
                                        <div class="col-sm-8">
                                            <table>
                                                <tr>
                                                    <td><input type="file" name="lampiran" id="lampiran" value=""/></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>


                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Lelang *</label>
                                        <div class="col-sm-8">
                                            <input  type="date" name="tanggal_lelang" id="tanggal_lelang" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>

                                    </div>

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

                                    <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">&nbsp;</label>
                                            <div class="col-sm-8">
                                                <div style="float:left; "> 
                                                    <a title="Simpan Data" key="<?php echo $hasil_data->id; ?>" class=" terima btn btn-primary btn-lg" ><i class="fa fa-save">&nbsp Simpan </i></a>
                                                </div>
                                                <div style="float:left; margin-left: 10px;"> 
                                                  <a title="Kembali" onclick="history.go(-1);" class="btn btn-greensea btn-lg" ><i class="fa fa-arrow-left">&nbsp Back</i></a>
                                              </div>  
                                          </div>
                                      </div>

                                  </div>

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

      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title custom-font">Konfirmasi Revisi</h3>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="tolak" />
                    <textarea style="width: 100%" rows="4" id="keterangan">

                    </textarea>
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
                    <h3 class="modal-title custom-font">Konfirmasi Terima data</h3>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="terima" />
                    Apakah anda yakin ingin data paket tersebut  ? 
<!--     <select class="form-control" name="kode_paket" id="kode_paket">
        <option>--PILIH--</option>
        <?php 
        $data = $this->db->get('master_kelompok_kerja');
        $ambil_data = $data->result();

        foreach ($ambil_data as $item) {
            ?>
            <option class="form-control" value="<?php echo $item->id;?>"><?php echo $item->pokja;?></option>
            <?php 
        }
        ?>
    </select> -->
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
        var keterangan = $("#keterangan").val();
        var url = "<?php echo base_url().'admin/data_verifikasi/simpan_tolak' ?>";
        $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{id:id,keterangan:keterangan},
           beforeSend:function(){
              $(".tunggu").show();  
          },
          success : function(data) {  
            window.location = "<?php echo base_url() . 'record_lelang/record_lelang/data_proses_lelang/' ?>";
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

    function terima_data(){
        var id = $("#terima").val();
        var kode_paket = $("#kode_paket").val();
        var tanggal_lelang = $("#tanggal_lelang").val();
        var lampiran = $("#lampiran").val();
        var url = "<?php echo base_url().'record_lelang/record_lelang/simpan_lelang' ?>";
        $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{id:id,kode_paket:kode_paket,tanggal_lelang:tanggal_lelang,lampiran:lampiran},
           beforeSend:function(){
              $(".tunggu").show();  
          },
          success : function(data) {  
            window.location = "<?php echo base_url() . 'record_lelang/record_lelang/data_proses_lelang/' ?>"; 
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
        
    }
</script>
