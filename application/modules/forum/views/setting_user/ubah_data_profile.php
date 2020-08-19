            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>User</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>       
                                <li>
                                    <a>Ubah Profile</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">
                                    <div class="tunggu" style="z-index:9999999999999999; background:rgba(51, 50, 50, 0.8); width:100%; height:100%; position:fixed; top:0; left:0; text-align:center; padding-top:25%; display: none;" >
                                        <img src="<?php echo base_url() . '/public/images/loading1.gif' ?>" style="width:72px; height: 72px;"/>
                                    </div>
                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Ubah&nbsp</strong>Profile</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $ambil_data = $this->db->get_where('master_user',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" id="data_form" data-parsley-validate>

                                        <div class="form-group">
                                        <div class="errorpass"></div>
                                            <label class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $hasil_ambil_data->id?>" required="">
                                                <input type="text" name="nama" class="form-control" value="<?php echo $hasil_ambil_data->nama?>" required="">
                                            </div>
                                        </div>
                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="email" class="form-control" value="<?php echo $hasil_ambil_data->email?>"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">User Name *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="uname" class="form-control" value="<?php echo $hasil_ambil_data->uname?>"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>


                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upass *</label>
                                            <div class="col-sm-8">
                                                <input type="password" id="upass" name="upass" class="form-control" value="<?php echo paramDecrypt($hasil_ambil_data->upass)?>"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>
                                        <hr class="line-dashed line-full" />

                                        <div class="form-group" id="group">
                                            <label for="input03" class="col-sm-2 control-label">Konfirmasi</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="konfirmasi" placeholder="Konfirmasi Password">
                                                <span class="help-block mb-0" id="keterangan" >Password Tidak Sama</span>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                                <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">&nbsp;</label>
                                                        <div class="col-sm-8">
                                                            <button type="submit"  class="btn btn-rounded-10 btn-primary btn-lg" id="btn_simpan"><i class="fa  fa-save">&nbsp</i>Save</button>    
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
            <script type="text/javascript">
                
                $(function () {

    $("#btn_simpan").click( function() { 
        var kode = $('#upass').val() ;
        var konfir = $('#konfirmasi').val() ; 

        if(konfir==kode ){
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/user/simpan_ubah_profile' ?>",  
        cache :false,  
        data :$('#data_form').serialize(),
        beforeSend:function(){
          $(".tunggu").show();  
      },
        success : function(data) {  
          $(".sukses").html(data);
          $(".tunggu").hide();     
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
            base_url() . 'admin/logout' ?>";},1000);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;
      }
      else {
         $(".errorpass").html('<div class="alert alert-danger">konfirmasi password harus diisi !!!</div>');
        setTimeout(function(){$('.sukses').html('');},2500);
      }                         
    });  

           $('#keterangan').hide();
$("#konfirmasi").keyup( function() { 

        var kode = $('#upass').val() ;
        var konfir = $('#konfirmasi').val() ; 

        if(konfir != kode ){
            $("#group").addClass("form-group has-error");
            $("#keterangan").show();
        }
      else {
        $("#group").removeClass("form-group has-error");
        $("#group").addClass("form-group");
        $('#keterangan').hide();
      }                         
    });    
    });   

            </script>