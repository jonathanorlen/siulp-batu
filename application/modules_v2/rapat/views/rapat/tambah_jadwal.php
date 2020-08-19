<!--    <script type="text/javascript">
       $(function () {

        //$(".select2").select2();

        $("#data_form").submit( function() {    
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'rapat/rapat/simpan_posisi' ?>",  
            cache :false,  
            data :$(this).serialize(),
            success : function(data) {  
              $(".sukses").html(data);   
              setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'rapat/rapat/content' ?>";},1500);              
          },  
          error : function() {  
              alert("Data gagal dimasukkan.");  
          }  
      });
          return false;                          
      });   

    </script> -->



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
                        <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Input Rapat</a>
                      </li>
                      <li>
                        <a>Input Rapat</a>
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
                        <h1 class="custom-font"><strong>Input Jadwal &nbsp</strong>Rapat</h1>
                      </div>
                      <!-- /tile header -->

                      <!-- tile body -->
                      <div class="tile-body">

                        <div class="sukses"></div>
                        <?php 
                        $id = $_GET['id_jadwal'];
                        $ambil_data = $this->db->get_where('transaksi_data_paket',array('id'  =>  $id));
                        $hasil_ambil_data = $ambil_data->row();

                        $hasil_rapat=$hasil_ambil_data->kode_paket;
                        $data_rapat = $this->db->get_where('transaksi_rapat',array('kode_paket'  =>  $hasil_rapat));
                        $hasil_rapat = $data_rapat->row();

                        ?>
                        <form class="form-horizontal" action="<?php echo base_url(). 'rapat/rapat/simpan_posisi'?>" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="">

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Paket *</label>
                            <div class="col-sm-8">
                              <input readonly type="text" name="paket" class="form-control" placeholder="Masukkan Paket"
                              data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_paket?>"
                              required>
                              <input readonly type="hidden" name="kode_paket" class="form-control" placeholder="Masukkan kode_Paket"
                              data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->kode_paket?>"
                              required>
                            </div>
                          </div>


                          <hr class="line-dashed line-full" />

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Satuan Kerja *</label>
                            <div class="col-sm-8">
                              <input readonly type="text" name="nama_satuan_kerja" class="form-control" placeholder="Masukkan Satuan Kerja"
                              data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_satuan_kerja?>"
                              required>
                              <input readonly type="hidden" name="kode_satuan_kerja" class="form-control" placeholder="Masukkan Satuan Kerja"
                              data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->kode_satuan_kerja?>"
                              required>
                            </div>
                          </div>
<!-- 
                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">PPK *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_ppk" class="form-control" placeholder="Masukkan PPK"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_ppk?>"
                                                required>
                                                 <input disabled="" type="hidden" name="kode_ppk" class="form-control" placeholder="Masukkan PPK"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->kode_ppk?>"
                                                required>
                                            </div>
                                          </div> -->


                                          <hr class="line-dashed line-full" />

                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Agenda *</label>
                                            <div class="col-sm-8">
                                              <input type="text" readonly="" value="Rapat Kaji Ulang" disable=""  name="agenda" class="form-control" placeholder="Masukkan Agenda"
                                              data-parsley-trigger="change"
                                              required>
                                            </div>
                                          </div>

                                          <hr class="line-dashed line-full" />

                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Tempat Rapat *</label>
                                            <div class="col-sm-8">
                                              <input type="text" readonly="" value="ULP" disable=""  name="tempat" class="form-control" placeholder="Masukkan Tempat"
                                              data-parsley-trigger="change" 
                                              required>
                                            </div>
                                          </div>

                                          <hr class="line-dashed line-full" />

                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Rapat</label>
                                            <div class="col-sm-8">
                                              <input  type="date" value="<?php echo date("Y-m-d")?>" name="tanggal_rapat" class="form-control" placeholder="Masukkan Tanggal " required="">
                                            </div>
                                          </div>


                                          <hr class="line-dashed line-full" />

                                          <div class="form-group">
                                          <label class="col-sm-2 control-label">Jam Rapat</label>
                                            <div class="col-sm-8">
                                              <input id="waktu"  type="text" value="<?php echo date("H:i:s")?>" name="waktu" class="form-control" placeholder="Masukkan Tanggal " required="">
                                            </div>
                                          </div>

                                          <hr class="line-dashed line-full" />


                                          <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">&nbsp;</label>
                                              <div class="col-sm-8">
                                                <div style="float:left; "> 
                                                  <button type="submit" class=" btn btn-rounded-10 btn-primary btn-lg" ><i class="fa fa-save">&nbsp Save</i></button>
                                                </div>
                                                <div style="float:left; margin-left: 10px;"> 
                                                  <a class=" btn btn-rounded-10 btn-primary btn-lg" onclick="history.go(-1)" style="background: red;"><i class="fa fa-arrow-circle-left">&nbsp Kembali</i></a>
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
<script>
$(function(){
$("#waktu").timepicker({

      showMeridian: false,
      minuteStep : 10
    });

});
</script>