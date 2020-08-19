<!-- <script type="text/javascript">
  $(function () {

    $(".select2").select2();

    $("#data_form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/tim_teknis/simpan_tambah' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
            base_url() . 'admin/tim_teknis/content' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });  
});
</script>
-->
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Tim Teknis</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/tim_teknis/content'?>">Tim Teknis</a>
                                </li>
                                <li>
                                    <a>Tambah Tim Teknis</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/tim_teknis/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/tim_teknis/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Tambah&nbsp</strong>Tim Teknis</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url(). 'admin/tim_teknis/simpan_tambah'?>" >

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email *</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">No telp. *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="telp" class="form-control" placeholder="Masukkan No Tepl."
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Alamat *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
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
    <!--/ Application Content -->
