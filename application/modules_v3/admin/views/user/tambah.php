<script type="text/javascript">
  $(function () {

    //$(".select2").select2();

    $("#button").click( function() { 
    	var kode = $('#upass').val() ;
    	var konfir = $('#konfirmasi').val() ; 

    	if(konfir == kode ){
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/user/simpan_tambah' ?>",  
        cache :false,  
        data :$('#data_form').serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
            base_url() . 'admin/user/content' ?>";},1000);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;
      }
      else {
      	alert("Kode Konfirmasi anda salah");
      }                         
    });   
/*
    $("#upload_foto").click( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'component/upload/foto' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".box_upload").html(data);           
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });   
*/
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
<script>
$(document).ready(function(){
    $('#pkj').hide();
    $("#ppk").hide();
    $('#jabatan_pokja').hide();


    
      $("#jabatan").change(function(){
        var jabatan = $('#jabatan').val();
        if(jabatan == '003'){
            $("#pkj").show();
            $("#jabatan_pokja").show();
            $("#ppk").hide();
        }
        else if(jabatan == '002'){
            $('#ppk').show();
            $("#pkj").hide();
            $("#jabatan_pokja").hide();
        }else if(jabatan == '004'){
            $('#ppk').show();
            $("#pkj").hide();
            $("#jabatan_pokja").hide();
        }
        else{
            $('#ppk').hide();
            $("#pkj").hide();
            $("#jabatan_pokja").hide();
        }

    });

});
</script>
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
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/user/content'?>">User</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/user/content'?>">Tambah User</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/user/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/user/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>
                    <!-- tile -->
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Tambah&nbsp</strongUser</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >


                                    <form  style="" class="form-horizontal" role="form" method="post" id="data_form" data-parsley-validate >

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>
                                         <hr class="line-dashed line-full" />
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">NIP *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>
                                         <hr class="line-dashed line-full" />
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pangkat/ Gol *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="pangkat_gol" id="pangkat_gol" class="form-control" placeholder="Pangkat/ Gol"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email *</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email"  class="form-control" placeholder="Email"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Username *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="uname"  class="form-control" placeholder="Username"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Password *</label>
                                            <div class="col-sm-8">
                                                <input type="password" id="upass" name="upass"  class="form-control" placeholder="Password"
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

                                        <!-- <div class="form-group">
                                            <label class="col-sm-2 control-label">Konfirmasi *</label>
                                            <div class="col-sm-8">
                                                <input type="password" id="konfirmasi"  class="form-control" placeholder="Password"
                                                data-parsley-trigger="change"
                                                required="Kode tidak sama">
                                            </div>
                                        </div> -->


                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jabatan *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="kode_jabatan" id="jabatan">
                                                	<option selected="" value="">--PILIH--</option>
                                                    <?php
                                                        $master_jabatan = $this->db->get('master_jabatan');
                                                        foreach($master_jabatan->result() as $daftar){
                                                        
                                                    ?>
                                                    <option value="<?php echo $daftar->kode_jabatan; ?>"><?php echo $daftar->nama_jabatan; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group" id="ppk">
                                            <label class="col-sm-2 control-label">SKPD *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="kode_skpd" >
                                                    <option value="">--PILIH--</option>
                                                    <?php 
                                                    	$data = $this->db->get('master_satuan_kerja');
                                                    	$hasil_ambil = $data->result();

                                                    	foreach ($hasil_ambil as $item) {

                                                    ?>
                                                    <option value="<?php echo $item->kode_skpd?>"><?php echo $item->unit_kerja?></option>
                                                 
                                                   <?php 
                                               			}
                                                   ?>
                                                </select>

                                            </div>
                                        </div>

                                         <div class="form-group" id="pkj" >
                                            <label class="col-sm-2 control-label">Pokja *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="kode_pokja" id="pokja">
                                                    <option value="">--PILIH--</option>
                                                    <?php 
                                                    	$data = $this->db->get('master_kelompok_kerja');
                                                    	$hasil_ambil_data = $data->result();

                                                    	foreach ($hasil_ambil_data as $item) {

                                                    ?>
                                                    <option value="<?php echo $item->id?>"><?php echo $item->pokja?></option>
                                                 
                                                   <?php 
                                               			}
                                                   ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group" id="jabatan_pokja" >
                                            <label class="col-sm-2 control-label">Jabatan Pokja *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="jabatan_pokja" id="pokja">
                                                    <option value="">--PILIH--</option>

                                                    <option value="ketua">Ketua</option>
                                                    <option value="Sekretaris">Sekretaris</option>
                                                    <option value="Anggota">Anggota</option>

                                                </select>

                                            </div>
                                        </div>
                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Group *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="group" id="group">
                                                    <option selected="" value="">--PILIH--</option>
                                                     <option value="Internal">Internal</option>
                                                    <option value="Eksternal">Eksternal</option>
                                                   
                                                   
                                                </select>

                                            </div>
                                        </div>



                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <a  class="btn btn-rounded-10 btn-primary btn-lg" id="button"><i class="fa fa-save"></i> Simpan</a>    
                                                </div>
                                            </div>
                                            <!-- SUBMIT BUTTON -->
                                            
                                        </div>


                                    </form>

                                </div>


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
