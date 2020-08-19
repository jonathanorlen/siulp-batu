
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Jadwal Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/jadwal_rapat'?>">Jadwal Rapat</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Jadwal &nbsp<strong>Rapat</strong></h1>
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
                           <!--  <div class="">
                                <a href="<?php echo base_url() . 'rapat/rapat/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                                <a href="<?php echo base_url() . 'rapat/rapat/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                            </div> -->
                            <div class="table-responsive">

                                <table class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                    <thead>
                                        <tr class="info">
                                            <th>No</th>
                                            <th>Tanggal Rapat</th>
                                            <th>Agenda</th>
                                            <th>Paket</th>
                                            <th>Tempat</th>
                                            <th>Satuan Kerja</th>
                                            <th>Pokja</th>
                                            <th>PPK</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_group = $this->session->userdata('astrosession');
                                        if($get_group->kode_jabatan=="002"){
                                            $this->db->where('kode_satuan_kerja',$get_group->kode_skpd);  
                                        }elseif($get_group->kode_jabatan=="003"){
                                            $this->db->where('kode_pokja',$get_group->kode_pokja);  
                                        }
                                        $this->db->where('tutup_tahun','Open');
                                        $hasil = $this->db->get("transaksi_rapat");
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            ?>
                                            <tr <?php  if($item->tanggal_rapat ==date('Y-m-d')) { ?> class="warning"   <?php }?>>
                                               <td><?php echo $no;?></td>
                                               <td><?php echo tanggalindo($item->tanggal_rapat);?></td>
                                               <td><?php echo $item->agenda;?></td>
                                               <td><?php echo $item->nama_paket;?></td>
                                               <td><?php echo $item->tempat;?></td>
                                               <td><?php echo $item->nama_satuan_kerja;?></td>
                                               <td><?php echo $item->nama_pokja;?></td>
                                               <td><?php echo $item->nama_ppk;?></td>

                                               <td>
                                                <a  href="<?php echo base_url(). 'rapat/rapat/detail_jadwal?id_jadwal='. $item->id;?>" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Detail"><i class="fa fa-eye" ></i></a>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
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
                        <h3 class="modal-title custom-font">Konfirmasi hapus data</h3>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="hapus" />
                        Apakah anda yakin ingin menghapus data tersebut ?
                    </div>
                    <div class="modal-footer">
                        <a onclick="hapus_data()" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i>Ya</a>
                        <a class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Tidak</a>
                    </div>
                </div>
            </div>
        </div>







    </div>
    <script>
    $(function(){
        $("#responsive-usage").dataTable();
        $('a.hapus').click(function(){
           var id = $(this).attr('key');
           $("#myModal").modal('show');
           $("#hapus").val(id); 
       });
    })

    function hapus_data(){
        var id = $("#hapus").val();
        var url = "<?php echo base_url().'rapat/rapat/hapus' ?>";
        $.ajax( {
         type:"POST", 
         url : url,  
         cache :false,  
         data :{id:id},
         beforeSend:function(){
          $(".tunggu").show();  
      },
      success : function(data) {  
        window.location.reload();
    },  
    error : function(data) {  
      alert(data);  
  }  
});
    }

    $("#cetak_rapat").click(function(){
        window.open("<?php echo base_url().'rapat/rapat/cetak_rapat/'; ?>");
    });

    </script>
    <script>
    $(function(){
        $("#responsive-usage").dataTable();
    })

    </script>
    <!--/ Application Content -->
