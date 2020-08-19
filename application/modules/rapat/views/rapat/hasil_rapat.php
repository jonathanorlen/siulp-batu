
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Hasil Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                 <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Hasil Rapat</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Hasil &nbsp<strong>Rapat</strong></h1>
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
                                            }else if($get_group->kode_jabatan=="003"){
                                                $this->db->where('kode_pokja',$get_group->kode_pokja);
                                            }

                                        $this->db->where('tutup_tahun','Open');
                                        $this->db->where('status_ppk','Terima');
                                        $this->db->where('status_pokja','Terima');
                                        $hasil = $this->db->get("transaksi_rapat");
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            ?>

                                            <?php
                                            $hasil1 = $this->db->get_where("transaksi_data_paket",array("kode_paket"=>$item->kode_paket));
                                            $hasil_ambil1 = $hasil1->row();?>
                                            
                                            <tr 
                                            <?php  if($hasil_ambil1->posisi == 'verifikasi perbaikan') { ?>  class="warning"  <?php }
                                                        ?>>

                                             <td><?php echo $no;?></td>
                                             <td><?php echo tanggalindo($item->tanggal_rapat);?></td>
                                             <td><?php echo $item->agenda;?></td>
                                             <td><?php echo $item->nama_paket;?></td>
                                             <td><?php echo $item->tempat;?></td>
                                             <td><?php echo $item->nama_satuan_kerja;?></td>
                                             <td><?php echo $item->nama_pokja;?></td>
                                             <td><?php echo $item->nama_ppk;?></td>
                                             
                                             <td>
                                             <?php 
                                                $data = $this->db->get_where('transaksi_data_paket',array('kode_paket'=>$item->kode_paket));
                                                $hasil_data = $data->row();
                                                @$status = $hasil_data->posisi;
                                                @$spesfikasi_kak = $hasil_data->tanggal_pengumuman_lelang;

                                                if($get_group->kode_jabatan=="002"){
                                                if ($status == 'lanjut lelang'){
                                                    if($spesfikasi_kak=="" OR $spesfikasi_kak=="0000-00-00"){
                                             ?> 
                                                <a href="<?php echo base_url().'rapat/rapat/srpp/'.$item->id;?>" title="Input SPRPP" class="btn btn-info btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-upload"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                <?php } } }
                                                ?> 
                                                <?php 
                                                    if($get_group->kode_jabatan=="002"){
                                                    @$posisi = $hasil_data->posisi;
                                                    if(@$posisi == 'revisi paket'){?> 
                                                <a href="<?php echo base_url().'rapat/rapat/ubah_hasil/'.$hasil_data->id;?>" title="Perbaikan" class="btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                <?php } }
                                                ?>

                                                <?php if( date('Y-m-d') >= $item->tanggal_rapat ){
                                                    if($item->notulensi == ''){ 
                                                        if($get_group->kode_jabatan=="003"){
                                                ?>
                                                
                                                <a  href="<?php echo base_url(). 'rapat/rapat/form_surat_hasil?id_jadwal='. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Notulensi"><i class="fa fa-pencil" ></i></a>
                                                <?php 
                                                   } } }
                                                ?>

                                                <?php 
                                                
                                                    if($item->notulensi == 'terisi'){?>
                                                <a  href="<?php echo base_url(). 'rapat/rapat/print_surat?id_jadwal='. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" target="_blank" style="background-color: #337ab7" title="Print Notulensi"><i class="fa fa-print" ></i></a>
                                                <a  href="<?php echo base_url(). 'rapat/rapat/detail_notulensi?id_jadwal='. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="background-color: #7e33b7" title="Detail Notulensi"><i class="fa fa-eye" ></i></a>
                                                <?php }
                                                ?>

                                                <?php 
                                                    
                                                if(!empty($spesfikasi_kak)){?>
                                                <a  href="<?php echo base_url(). 'rapat/rapat/print_hasil?id_jadwal='. $item->id;?>" class="btn btn-dutch btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" target="_blank" title="Print SPRPP"><i class="fa fa-file-o" ></i></a>
                                                <a  href="<?php echo base_url(). 'rapat/rapat/detail_srpp/'. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="background-color: #a7751b" title="Detail SRPP"><i class="fa fa-eye" ></i></a>
                                                <?php }
                                                ?>
                                                <!-- <?php 
                                                $tanggal = date('Y-m-d'); 
                                                if($item->tanggal_rapat >= $tanggal){?> -->
                                                
                                                <!-- <?php } ?> -->
                                                <?php
                                                if(@$hasil_data->status_paket != "Sukses" || "Gagal"){
                                                if(@$get_group->kode_jabatan=="003"){
                                                    if (@$status == 'lanjut lelang'){
                                                        if(@$spesfikasi_kak!=""){
                                                ?>
                                               <!--  <a href="<?php echo base_url().'record_lelang/record_lelang/verifikasi/'.$item->kode_paket;?>" title="Input Hasil Lelang" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil-square-o"  style="font-size:15px;position:relative;line-height:10px"></i></a> -->
                                                <?php } } } }?>
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
