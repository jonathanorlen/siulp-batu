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
            base_url() . 'admin/user/content' ?>";},1500);              
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

  });
</script>
<script>
$(document).ready(function(){
    $('#pkj').hide();
    $("#ppk").hide();
    $('#jabatan_pokja').hide();


    
      $("#jabatan").change(function(){
        var jabatan = $('#jabatan').val();
        if(jabatan == 'Pokja'){
            $("#pkj").show();
            $("#jabatan_pokja").show();
            $("#ppk").hide();
        }
        else if(jabatan == 'PPK'){
            $('#ppk').show();
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
                                    <a><i class="fa fa-home"></i>Dasboard</a>
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
                                <div class="tile-body" style="margin-right: 200px;">


                                    <form  style="" class="form-horizontal" role="form" method="post" id="data_form" data-parsley-validate >

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama *</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Username"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username *</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="uname"  class="form-control" placeholder="Username"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password *</label>
                                            <div class="col-sm-9">
                                                <input type="password" id="upass" name="upass"  class="form-control" placeholder="Password"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Konfirmasi *</label>
                                            <div class="col-sm-9">
                                                <input type="password" id="konfirmasi"  class="form-control" placeholder="Password"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jabatan *</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="nama_jabatan" id="jabatan">
                                                	<option selected="" value="">--PILIH--</option>
                                                    <option value="Sekretariat">Sekretariat</option>
                                                    <option value="PPK">PPK</option>
                                                    <option value="Pokja">Pokja</option>
                                                    <option value="Kepala SKPD">Kepaala SKPD</option>
                                                    <option value="Bupati">Bupati</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group" id="ppk">
                                            <label class="col-sm-3 control-label">SKPD *</label>
                                            <div class="col-sm-9">
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
                                            <label class="col-sm-3 control-label">Pokja *</label>
                                            <div class="col-sm-9">
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
                                            <label class="col-sm-3 control-label">Jabatan Pokja *</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="jabatan_pokja" id="pokja">
                                                    <option value="">--PILIH--</option>

                                                    <option value="ketua">Ketua</option>
                                                    <option value="wakil ketua">Wakil Ketua</option>
                                                    <option value="sekretaris">Sekretaris</option>

                                                </select>

                                            </div>
                                        </div>



                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">&nbsp;</label>
                                                <div class="col-sm-9">
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
