
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

              <div class="page page-hz-menu-layout">

                <div class="pageheader">

                  <h2>Input Rapat</h2>

                  <div class="page-bar">

                    <ul class="page-breadcrumb">
                      <li>
                        <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Rapat Kaji Ulang</a>
                      </li>
                      <li>
                        <a href="#">Input Rapat</a> 
                      </li>
                    </ul>
                    
                  </div>

                </div>
                
                
                
                
                
                

                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font">Input Data&nbsp<strong>Rapat</strong></h1>
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
                     <!--        <div class="">
                                <a href="<?php echo base_url() . 'rapat/rapat/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                                <a href="<?php echo base_url() . 'rapat/rapat/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                              </div> -->
                              <div class="table-responsive">
                                <?php
                                $user = $this->session->userdata('astrosession');
                                
                                ?>
                                <table class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                  <thead>
                                    <tr class="info">
                                      <th width="40">No</th>
                                      <th>Tanggal Pengajuan </th>
                                      <th>SKPD</th>
                                      <th>Paket</th>
                                      <th>Vol</th>
                                      <th>Lokasi</th>
                                      <th>Pagu</th>
                                      <th>Hps</th>
                                            <!--<th>Nilai Kontrak</th>
                                            <th>Pemenang</th>-->
                                            <th>Kegiatan</th>
                                            <th>Jenis Pengadaan</th>
                                            <th>Metode Pengadaan</th>
                                            <th>Sumber Dana</th>
                                            <th>Pokja</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          
                                          if($user->kode_jabatan=="002"){
                                            $this->db->where('kode_ppk',$user->nip);
                                          }
                                          $this->db->where('tutup_tahun','Open');
                                          $hasil=$this->db->get_where("transaksi_data_paket",array('posisi' => 'proses penjadwalan'));
                                          $hasil_ambil = $hasil->result();
                                        //echo $this->db->last_query();
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
                                               <!--<td></td>
                                               <td></td>-->
                                               <td><?php echo $item->kegiatan; ?></td>
                                               <td><?php echo $item->jenis_pengadaan;?></td>
                                               <td><?php echo $item->metode_pengadaan;?></td>
                                               <td><?php echo $item->nama_sumber_dana;?></td>
                                               <td><?php echo $item->nama_pokja;?></td>
                                               <td><?php echo cek_dokumen($item->status_paket); ?></td>
                                               <td>
                                                <?php
                                                $dokumen = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket));
                                                $hasil_dokumen = $dokumen->result();
                                                if(count($hasil_dokumen) <8){
                                                  echo "Belum Upload ";
                                                }
                                                ?>
                                                <?php 
                                                $bill = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'bill'));
                                                $hasil_bill = $bill->row();
                                                if(count($hasil_bill) <1){
                                                  echo "Dokumen Bill of Quantity ,";
                                                }
                                                ?>
                                                <?php 
                                                $dpa = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'dpa'));
                                                $hasil_dpa = $dpa->row();
                                                if(count($hasil_dpa) <1){
                                                  echo "Dokumen DPA ,";
                                                }
                                                ?>
                                                <?php 
                                                $hps = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'hps'));
                                                $hasil_hps = $hps->row();
                                                if(count($hasil_hps) <1){
                                                  echo "Dokumen HPS ,";
                                                }
                                                ?>
                                                <?php 
                                                $kak = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'kak'));
                                                $hasil_kak = $kak->row();
                                                if(count($hasil_kak) <1){
                                                  echo "Dokumen KAK Paket Kerja,";
                                                }
                                                ?>
                                                <?php 
                                                $rancangan = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'rancangan'));
                                                $hasil_rancangan = $rancangan->row();
                                                if(count($hasil_rancangan) <1){
                                                  echo "Dokumen Rancangan Kontrak,";
                                                }
                                                ?>
                                                <?php 
                                                $rup = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'rup'));
                                                $hasil_rup = $rup->row();
                                                if(count($hasil_rup) <1){
                                                  echo "Dokumen RUP ,";
                                                }
                                                ?>
                                                <?php 
                                                $spesifikasi = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'spesifikasi'));
                                                $hasil_spesifikasi = $spesifikasi->row();
                                                if(count($hasil_spesifikasi) <1){
                                                  echo "Dokumen Spesifikasi Teknis ,";
                                                }
                                                ?>

                                                <?php 
                                                $survey = $this->db->get_where('dokumen_paket',array('kode_paket'=>$item->kode_paket,'jenis_dokumen'=>'survey'));
                                                $hasil_survey = $survey->row();
                                                if(count($hasil_survey) <1){
                                                  echo "Dokumen Bukti Survey Harga ,";
                                                }
                                                ?>
                                              </td>
                                              <td>
                                               <!--  <a  href="<?php echo base_url(). 'rapat/rapat/detail?id_kelompok='. $item->id;?>" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Detail" ><i class="fa fa-eye" ></i></a> -->
                                               <?php
                                               $user = $this->session->userdata('astrosession');
                                               if($user->kode_jabatan=="002"){
                                                 ?>
                                                 <a  href="<?php echo base_url(). 'rapat/rapat/tambah_jadwal?id_jadwal='. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Input Jadwal Rapat"><i class="fa fa-pencil-square-o" ></i></a>
                                                 <?php } ?>
                                                 <!--  <a  href="<?php echo base_url(). 'rapat/rapat/ubah?id_kelompok='. $item->id;?>" class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Ubah" ><i class="fa fa-pencil" ></i></a> -->
                                              <!--   <a key="<?php echo $item->id; ?>" class="hapus btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Hapus"><i class="fa fa-trash" ></i></a>
                                              <a  href="<?php echo base_url(). 'rapat/rapat/detail_verifikasi?id_kelompok='. $item->id;?>" class="btn btn-info btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" title="Verifikasi" ><i class="fa fa-pencil" ></i></a> -->
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

                        </script>
                        <script>
                          $(function(){
                            $("#responsive-usage").dataTable();
                          })

                        </script>
                        <!--/ Application Content -->
