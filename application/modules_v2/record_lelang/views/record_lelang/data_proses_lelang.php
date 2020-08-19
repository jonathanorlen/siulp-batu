
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Data Paket Proses Lelang </h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Record</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'record_lelang/record_lelang/data_proses_lelang'?>">Data Paket Proses Lelang</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Data Paket&nbsp<strong>Proses Lelang</strong></h1>
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
                                            <th>Bulan Pengajuan</th>
                                            <th>SKPD</th>
                                            <th>Paket</th>
                                            <th>Vol</th>
                                            <th>Lokasi</th>
                                            <th>Pagu</th>
                                            <th>Hps</th>
                                            <th>Nilai Kontrak</th>
                                            <th>Pemenang</th>
                                            <th>Kegiatan</th>
                                            <th>Jenis Pengadaan</th>
                                            <th>Metode Pengadaan</th>
                                            <th>Sumber Dana</th>
                                            <th>Pokja</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $user =  $this->session->userdata('astrosession');
                                      
                                    ?>
                                    <tbody>
                                        <?php
                                        if($user->kode_jabatan=="002"){
                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                        }
                                        $hasil=$this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Open'));
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            ?>
                                            <tr> 
                                               <td><?php echo $no;?></td>
                                               <td><?php echo TanggalIndo($item->tanggal_pengajuan);?></td>
                                               <td><?php echo $item->nama_satuan_kerja;?></td>
                                               <td><?php echo $item->nama_paket;?></td>
                                               <td><?php echo $item->volume;?></td>
                                               <td><?php echo $item->lokasi;?></td>
                                               <td><?php echo format_rupiah($item->pagu);?></td>
                                               <td><?php echo format_rupiah($item->hps);?></td>
                                               <td></td>
                                               <td></td>
                                               <td><?php echo $item->kegiatan; ?></td>
                                               <td><?php echo $item->jenis_pengadaan;?></td>
                                               <td><?php echo $item->metode_pengadaan;?></td>
                                               <td><?php echo $item->nama_sumber_dana;?></td>
                                               <td><?php echo $item->nama_pokja;?></td>



                                               <td>
                                                  <?php if($item->status_paket == 'proses verifikasi')
                                                  { 

                                                    ?>
                                                    <span class="label label-warning">Proses Verifikasi</span>
                                                    <label>&nbsp</label
                                                        <?php 
                                                    }
                                                    else if($item->status_paket == 'tolak')
                                                    {
                                                        ?>
                                                        <span class="label label-danger">Tolak</span>
                                                        <label>&nbsp</label>
                                                        <?php 
                                                    }
                                                    else if($item->status_paket == 'terima')
                                                    {
                                                        ?>
                                                        <span class="label label-success">Terima</span>
                                                        <label>&nbsp</label>
                                                        <?php 
                                                    } 
                                                    ?>
                                                </td>
                                                <td>
                                                <a href="<?php echo base_url().'record_lelang/record_lelang/detail/'.$item->id;?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    <?php if ($item->posisi == 'revisi'){ ?>
                                                    <a href="<?php echo base_url().'record_lelang/record_lelang/form_revisi/'.$item->id;?>" title="Perbaikan" class="btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    <?php } else if($item->posisi == 'lanjut lelang') { ?>
                                                    <!-- <a href="<?php echo base_url().'record_lelang/record_lelang/lanjut_lelang/'.$item->id;?>" title="Upload SPRPP" class="btn btn-info btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-upload"  style="font-size:15px;position:relative;line-height:10px"></i></a> -->
                                                    <?php }else if($item->posisi=="hasil lelang"){ 
                                                        
                                                        $user = $this->session->userdata('astrosession');
                                                        if($user->kode_jabatan=="003"){
                                                    ?>
                                                        
                                                        <!-- <a href="<?php echo base_url().'record_lelang/record_lelang/verifikasi/'.$item->id;?>" title="Input Hasil Lelang" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil"  style="font-size:15px;position:relative;line-height:10px"></i></a> -->
                                                    <?php }  }
                                                    ?>
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
