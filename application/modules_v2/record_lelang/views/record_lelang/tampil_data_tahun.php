            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

              <div class="page page-hz-menu-layout">

                <div class="pageheader">

                  <h2>Record</h2>

                  <div class="page-bar">

                    <ul class="page-breadcrumb">
                      <li>
                        <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home">&nbsp</i>Dasboard</a>
                      </li>
                      <li>
                                    <a>Record</a>
                                </li>
                      <li>
                        <a href="<?php echo base_url() . 'record_lelang/record_lelang/tampil_tahun'?>">Data Tahunan</a>
                      </li>
                      <li>
                        <a href="#">Data Berdasarkan Tahun </a>
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
                        <h1 class="custom-font"><strong>Data &nbsp</strong>Tahunan</h1>
                      </div>
                      <!-- /tile header -->

                      <!-- tile body -->

                      <div class="tile-body">

                        <div class="sukses"></div>

                        <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>" id="responsive-usage" style="">

                          <?php
                          $ambil_data = $this->db->query(" SELECT * FROM transaksi_data_paket WHERE tutup_tahun = 'Close' GROUP BY tahun ");
                          $hasil_ambil_data = $ambil_data->result();
                          ?>
                          
                          <table>
                            <tr>
                              <?php foreach ($hasil_ambil_data as $tahun){ ?>
                               
                               <?php if ($tahun->tutup_tahun == 'Close'){ ?>
                               <td>
                                 <a href="<?php echo base_url().'record_lelang/record_lelang/tampil_tabel/' . $tahun->tahun;?>" style="margin-left: 10px;" class="btn btn-info btn-ef btn-ef-3 btn-ef-3c mb-10" title="Data Tahunan <?php echo $tahun->tahun?>"><h1><?php echo $tahun->tahun?></h1></a>
                               </td>

                             <?php } } ?>
                           </tr>
                         </table>

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
              <h3 class="modal-title custom-font">Konfirmasi Tutup Tahun</h3>
            </div>
            <div class="modal-body">
              <input type="hidden" id="terima" />
              Apakah anda yakin ingin menutup data tersebut ?
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
          var url = "<?php echo base_url().'record_lelang/record_lelang/simpan_tutup' ?>";
          $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{id:id},
           beforeSend:function(){
            $(".tunggu").show();  
          },
          success : function(data) {  
             //window.location = "<?php echo base_url() . 'record_lelang/record_lelang/tampil_tahun' ?>"; 
           },  
           error : function(data) {  
            alert(data);  
          }  
        });
        };

      </script>