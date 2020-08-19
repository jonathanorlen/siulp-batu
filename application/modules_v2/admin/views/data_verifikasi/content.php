
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Verifikasi Data Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Verifikasi Data Paket</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/data_verifikasi/content'?>">Verifikasi Data Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Verifikasi Data&nbsp<strong>Paket</strong></h1>
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
                            <div class="table-responsive">

                                <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                    <thead>
                                        <tr class="info">
                                            <th>No</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>SKPD</th>
                                            <th>Paket</th>
                                            <th>Vol</th>
                                            <th>Lokasi</th>
                                            <th>Pagu</th>
                                            <th>Hps</th>
                                            <!--<th>Nilai Kontrak</th>
                                            <th>Pemenang</th>-->
                                            
                                            <th>Jenis Pengadaan</th>
                                            <th>Metode Pengadaan</th>
                                            <th>Sumber Dana</th>
                                            <th>Pokja</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $this->db->where('tutup_tahun','Open');
                                        $hasil=$this->db->get_where("transaksi_data_paket",array('posisi' => "verifikasi sekretariat"));
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            ?>
                                            <tr  > <!-- <?php  if($item->status == 'tolak') { ?>  class="danger"  <?php } ?> -->
                                                <td><?php echo $no;?></td>
                                             <td><?php echo @TanggalIndo(@$item->tanggal_pengajuan);?></td>
                                             <td><?php echo $item->nama_satuan_kerja;?></td>
                                             <td><?php echo $item->nama_paket;?></td>
                                             <td><?php echo $item->volume;?></td>
                                             <td><?php echo $item->lokasi;?></td>
                                             <td><?php echo format_rupiah($item->pagu);?></td>
                                             <td><?php echo format_rupiah($item->hps);?></td>
                                             <!--<td><?php echo format_rupiah($item->nilai_kontrak) ?></td>
                                             <td><?php echo $item->pemenang; ?></td>-->
                                             <td><?php echo $item->jenis_pengadaan;?></td>
                                             <td><?php echo $item->metode_pengadaan;?></td>
                                             <td><?php echo $item->nama_sumber_dana;?></td>
                                             <td><?php echo $item->nama_pokja;?></td>



                                             <td>
                                             <?php echo cek_dokumen($item->status_paket); ?>
                                            </td>
                                                <td>
                                                    <!-- <?php if ($item->status == 'proses verifikasi')
                                                    {
                                                        ?>
                                                        <a  href="<?php echo base_url(). 'admin/data_verifikasi/detail/'. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10"><i class="fa fa-check" title="Verifikasi"></i></a>
                                                        <?php 
                                                    }
                                                    else if($item->status == 'terima')
                                                    {
                                                        ?>
                                                        <a  href="<?php echo base_url(). 'admin/data_verifikasi/detail_verifikasi/'. $item->id;?>" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Detail"><i class="fa fa-eye" ></i></a>
                                                        <a  href="<?php echo base_url(). 'admin/data_verifikasi/cetak/'. $item->id;?>" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10"  title="cetak"><i class="fa fa-print"></i></a>
                                                        <a  href="<?php echo base_url(). 'admin/data_verifikasi/setting/'. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Setting Pokja"><i class="fa fa-pencil" ></i></a>
                                                        <?php 
                                                    }else{
                                                        ?> -->
                                                        <a  href="<?php echo base_url(). 'admin/data_verifikasi/detail/'. $item->id;?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10"><i class="fa fa-eye" ></i></a>
                                                        <a title="Verifikasi" href="<?php echo base_url(). 'admin/data_verifikasi/verifikasi/'. $item->id;?>" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10"><i class="fa fa-check-square-o" ></i></a>
                                                        <!-- <a target="_blank"  title="cetak" href="<?php echo base_url(). 'admin/data_verifikasi/cetak/'. $item->id;?>" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10"><i class="fa fa-print" ></i></a> -->
                                                        <!-- <?php 
                                                    }
                                                    ?> -->
                                                  <!--   <a href="<?php echo base_url(). 'admin/create_paket/ubah/'. $item->id;?>" class="btn btn-warning btn-sm btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span>Edit</span><i class="fa fa-pencil"></i></a>
                                                  <a href="<?php echo base_url(). 'admin/create_paket/uploud/'. $item->id;?>" class="btn btn-warning btn-sm btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10" style="background-color: #3376da"><span>Upload</span><i class="fa fa-upload" style="background-color: #3376da"></i></a> -->
                                                  <!-- <a key="<?php echo $item->id; ?>" class="hapus_data btn btn-danger btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span>Delete</span><i class="fa fa-trash"></i></a> -->

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
            var url = "<?php echo base_url().'admin/struktur_ulp/hapus' ?>";
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

    </script>
    <!--/ Application Content -->
