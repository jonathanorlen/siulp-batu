
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
                        <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home">&nbsp</i>Dasboard</a>
                      </li>
                      <li>
                        <a href="#">Forum</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() . 'forum/'?>">Daftar Forum</a>
                      </li>
                      <li>
                        <a>Pesan</a>
                      </li>
                    </ul>

                  </div>

                </div>

                <section class="tile">
                <?php
                    $param=$this->uri->segment(3);
                    $master = $this->db->get_where('master_forum',array('id'=>$param));
                    $hasil_master = $master->row();
                ?>
                  <!-- tile header -->
                  <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Forum <?php echo $hasil_master->judul; ?></strong></h1>
                    <ul class="controls">
                      <li class="dropdown">

                        <a role="button" tabindex="0" class="dropdown-toggle settings" style="margin-top: 15px;" data-toggle="dropdown">
                          <i class="fa fa-cog"></i>
                          <i class="fa fa-spinner fa-spin"></i>
                        </a>

                        <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                          <li>
                            <a role="button" tabindex="0" class="tile-toggle">
                              <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                              <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                            </a>
                          </li>
                          <li>
                            <a role="button"  tabindex="0" class="tile-refresh">
                              <i class="fa fa-refresh"></i> Refresh
                            </a>
                          </li>
                          <li>
                            <a role="button"  tabindex="0" class="tile-fullscreen">
                              <i class="fa fa-expand"></i> Fullscreen
                            </a>
                          </li>
                        </ul>

                      </li>
                    </ul>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    <h3></h3>
                    <?php
                    
                    ?>
                    <blockquote style="border: 3px solid #45bba0; padding-bottom:5px">
                      <p style="font-size:20px;">
                       <?php echo $hasil_master->judul; ?>
                     </p>
                     <p>
                       <?php echo $hasil_master->keterangan; ?>
                     </p>

                     <small style="align:right;"><?php echo $hasil_master->tanggal; ?></small>
                   </blockquote><hr style="border-color: lightsteelblue;" />

                   <input type="hidden" id="judul" name="judul" value="<?php echo $hasil_master->judul; ?>">
                   <input type="hidden" id="kode_forum" name="kode_forum" value="<?php echo $hasil_master->kode_forum; ?>">
                   <div id="data_pesan">
                     <!--<?php

                     $opsi_forum = $this->db->get_where('data_pesan_forum',array('kode_forum'=>@$hasil_master->kode_forum));
                     $hasil_pesan = $opsi_forum->result();

                     foreach($hasil_pesan as $daftar){
                      ?> 

                      <blockquote style="border-left: 5px solid blue">
                        <p>
                         <?php echo $daftar->pesan; ?>
                       </p>
                       <small class="pull-left"><?php echo $daftar->nama; ?></small>
                       <p style="font-size:10px" class="pull-right">
                        <?php echo @$daftar->tanggal; ?>
                      </p>
                    </blockquote><hr style="border-color: lightsteelblue;" />

                    <?php }  ?>-->
                    <div class="panel-body" >
                    <ul class="chat" id="navigation">
                       <?php

                     $opsi_forum = $this->db->get_where('data_pesan_forum',array('kode_forum'=>@$hasil_master->kode_forum));
                     $hasil_pesan = $opsi_forum->result();

                     foreach($hasil_pesan as $daftar){
                      ?> 
                      <li class="left clearfix" style="width:100%"><span class="chat-img pull-left">
                        <i class="icon-bubbles" style="font-size: 50px;"></i>
                      </span>
                      <div class="chat-body clearfix" style="solid; margin-left:90px;">
                        <p >
                         <?php echo $daftar->pesan; ?>
                        </p>
                        <p >
                         <strong class="primary-font"><?php echo $daftar->nama; ?></strong>,
                         <small class="text-muted">
                          <span class="glyphicon glyphicon-time"></span> <?php echo @$daftar->tanggal; ?></small>

                        </p>
                      </div>
                      <hr style="border-color: lightsteelblue;" />
                    </li>
                    <?php }  ?>
                  </ul>
                </div>
                  </div>
                  
                  
                <!-- ======================== nyobak ============ -->
                  
                <!-- ======================== nyobak ============ -->
                <br />
               
                <div style="background-color: #edf3fa;" class="well well-large blue-steel">
                  <!-- <center><h4>Untuk membalas pesan tersebut silakan ketik pesan anda disini</h4></center> -->

                  <textarea id="komentar" rows="5" placeholder="Ketik Disini..." class="form-control"></textarea><br />

                  <a  class="kirim btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="icon-bubbles"></i> Kirim</a>     
                </div>


              </div>
              <!-- /tile body -->

            </section>

          </div>

        </section>
        <!--/ CONTENT -->


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title custom-font">Konfirmasi kirim data</h3>
              </div>
              <div class="modal-body">

                Apakah anda yakin ingin mengirim data tersebut ?
              </div>
              <div class="modal-footer">
                <a onclick="kirim_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
              </div>
            </div>
          </div>
        </div>



      </div>
      <script>
      $(document).ready(function(){
//alert($('#waktu').val());
function startTime() {
  var today=new Date(),
  curr_hour=today.getHours(),
  curr_min=today.getMinutes(),
  curr_sec=today.getSeconds();
  curr_hour=checkTime(curr_hour);
  curr_min=checkTime(curr_min);
  curr_sec=checkTime(curr_sec);

  load_data();
}
function checkTime(i) {
  if (i<10) {
    i="0" + i;
  }
  return i;
}
setInterval(startTime, 5000);
});
      $(function(){
                //$("#responsive-usage").dataTable();
                $('a.kirim').click(function(){
                 var id = $(this).attr('key');
                 $("#myModal").modal('show');

               });
              })

      function kirim_data(){
        var komentar = $("#komentar").val();
        var judul = $("#judul").val();
        var kode_forum = $("#kode_forum").val();
        var url = "<?php echo base_url().'forum/simpan_pesan' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{komentar:komentar,judul:judul,kode_forum:kode_forum},
         beforeSend:function(){
          $(".tunggu").show();  
        },
        success : function(data) {  
          $(".tunggu").hide();  
          $("#myModal").modal('hide');
          $('#data_pesan').load("<?php echo base_url().'forum/data_pesan/'?>"+kode_forum);
        },  
        error : function(data) {  
          alert(data);  
        }  
      });
      }

      function load_data(){

        var judul = $("#judul").val();
        var kode_forum = $("#kode_forum").val();
        var url = "<?php echo base_url().'forum/load_data' ?>";

       //$('#data_pesan').load("<?php echo base_url().'forum/data_pesan/'?>"+kode_forum);
       
     }

     </script>
     <!--/ Application Content -->
