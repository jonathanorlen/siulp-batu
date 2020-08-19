

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Forum</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Forum</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'forum/setting_forum'?>">Setting Forum</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    <div class="">
                        <a href="<?php echo base_url() . 'forum/setting_forum/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'forum/setting_forum'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
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
                                    <div class="sukses"></div>
                                    <?php
                                  //   $this->db->select_max('id');
                                  //   $get_max_forum = $this->db->get('master_forum');
                                  //   $max_forum = $get_max_forum->row();

                                  //   $this->db->where('id', $max_forum->id);
                                  //   $get_forum = $this->db->get('master_forum');
                                  //   $forum = $get_forum->row();
                                  //   $nomor = substr(@$forum->kode_forum, 4);
                                  //   $nomor = $nomor + 1;
                                  //   $string = strlen($nomor);
                                  //   if($string == 1){
                                  //     $kode_forum ='000'.$nomor;
                                  // } else if($string == 2){
                                  //     $kode_forum ='00'.$nomor;
                                  // } else if($string == 3){
                                  //     $kode_forum ='0'.$nomor;
                                  // } else if($string == 4){
                                  //     $kode_forum =''.$nomor;
                                  // } 

                                  // echo 'F_'.$kode_forum;

                                  $param=$this->uri->segment('4');
                                  $data_forum=$this->db->get_where('master_forum',array('id' => $param ));
                                  $hasil_data_forum=$data_forum->row();
                                  ?>

                                  <form  style="" class="form-horizontal" role="form" method="post" id="data_form" data-parsley-validate >

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Judul *</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="<?php echo @$hasil_data_forum->judul;?>" name="judul" id="judul" class="form-control" placeholder="Judul"
                                            data-parsley-trigger="change"
                                            required="">
                                            <input type="hidden" value="<?php echo @$param?>" name="id">
                                        </div>
                                    </div>
                                    <hr class="line-dashed line-full" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keterangan *</label>
                                        <div class="col-sm-8">

                                         <textarea required="" class="form-control" name="keterangan"><?php echo @$hasil_data_forum->keterangan;?></textarea>
                                     </div>
                                 </div>
                                 <hr class="line-dashed line-full" />
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Anggota *</label>
                                    <div class="col-sm-8">
                                       <select  class=" select2" name="anggota[]" id="anggota" style="width:100%;" multiple>
                                        <option  value="">--PILIH--</option>

                                        <?php  
                                        $this->db->where('group !=','root');
                                        $anggota=$this->db->get('master_user');
                                        $hasil_anggota=$anggota->result();
                                        foreach ($hasil_anggota as $value) {
                                            ?>  
                                            <option value="<?php echo @$value->nip;?>"><?php echo @$value->nama;?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>




                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status *</label>
                                <div class="col-sm-8">
                                    <select required="" class="form-control" name="status" id="status">
                                        <option selected="" value="">--PILIH--</option>
                                        <option value="1" <?php if(@$hasil_data_forum->status=='1'){echo "selected";}?>>Aktif</option>
                                        <option value="0" <?php if(@$hasil_data_forum->status=='0'){echo "selected";}?>>Tidak Aktif</option>
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
<script type="text/javascript">
$(document).ready(function(){


    $('.select2').select2();

    

});
$(function () {

    //$(".select2").select2();

    $("#button").click( function() { 
        var kode = $('#upass').val() ;
        var konfir = $('#konfirmasi').val() ; 

        if(konfir == kode ){
          $.ajax( {  
            type :"post", 
            <?php if(!empty($param)){
                ?>
                url : "<?php echo base_url() . 'forum/setting_forum/simpan_edit' ?>",  
                <?php
            }else{
                ?>
                url : "<?php echo base_url() . 'forum/setting_forum/simpan_tambah' ?>",  
                <?php
            }?> 
            
            cache :false,  
            data :$('#data_form').serialize(),
            success : function(data) {  
              $(".sukses").html(data);   
              setTimeout(function(){$('.sukses').html('');
           window.location = "<?php echo base_url() . 'forum/setting_forum' ?>";
      },1500);              
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
