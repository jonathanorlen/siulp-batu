              <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Rapat</a>
                                </li>
                                <li>
                                    <a>Verifikasi Jadwal Rapat</a>
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
                                    <h1 class="custom-font"><strong>Verifikasi Jadwal &nbsp</strong>Rapat</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>" id="responsive-usage">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Rapat</label>
                                            <div class="col-sm-8">
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

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pokja *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="pokja" class="form-control" placeholder="Masukkan Pokja"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_pokja?>"
                                                required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">PPK *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_ppk" class="form-control" placeholder="Masukkan PPK"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_ppk?>"
                                                required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Sekretariat *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_sekretariat" class="form-control" placeholder="Masukkan Sekretariat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_sekretariat?>"
                                                required>
                                            </div>
                                        </div>
                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <div style="float:left; "> 
                                                        <a key="<?php echo $hasil_ambil_data->id; ?>" class=" terima btn btn-primary btn-lg" ><i class="fa fa-arrow-circle-right">&nbsp Terima</i></a>
                                                    </div>
                                                    <div style="float:left; margin-left: 10px;"> 
                                                      <a key="<?php echo $hasil_ambil_data->id; ?>" class="tolak btn btn-danger btn-lg" style="background: red;"><i class="fa fa-arrow-circle-left">&nbsp Tolak</i></a>
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

          </div>

      </section>
      <!--/ CONTENT -->
  </div>

  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi Tolak data</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tolak" />
                <textarea style="width: 100%" rows="4" tabindex="-1" id="keterangan">

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
                Apakah anda yakin ingin menerima data tersebut ?
            </div>
            <div class="modal-footer">
                <a onclick="terima_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
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
        var keterangan = $('#keterangan').val();
        var url = "<?php echo base_url().'rapat/rapat/simpan_tolak' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id,keterangan:keterangan},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
         window.location = "<?php echo base_url() . 'rapat/rapat/content' ?>";
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
    });

    function terima_data(){
        var id = $("#terima").val();
        var url = "<?php echo base_url().'rapat/rapat/simpan_terima' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
       window.location = "<?php echo base_url() . 'rapat/rapat/content' ?>"; 
   },  
   error : function(data) {  
      alert(data);  
  }  
});
    };

</script>