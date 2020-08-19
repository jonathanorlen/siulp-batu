
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Data Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Data Paket</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Data Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Data&nbsp<strong>Paket</strong></h1>
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
                        <form class="form-inline" role="form">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Berdasarkan Status</label>
                                            <select class="form-control" id="status">
                                                <option value="" selected="">-Pilih Status-</option>
                                                <option value="Dokumen Lengkap">Dokumen Lengkap</option>
                                                <option value="Dokumen Belum Lengkap">Dokumen Belum Lengkap</option>
                                                <option value="Dokumen Kosong">Dokumen Kosong</option>
                                                <option value="Revisi Dokumen">Revisi Dokumen</option>
                                                <option value="Lolos Verifikasi">Lolos Verifikasi</option>
                                                <?php
                                                $user =  $this->session->userdata('astrosession');
                                                 if($user->kode_jabatan=="002" OR $user->kode_jabatan=="007" ){ ?>
                                                <option value="sukses">Sukses</option>
                                                <option value="gagal">Gagal</option>
                                                <?php } ?>
                                                <option value="Rapat Kaji Ulang">Rapat Kaji Ulang</option>
                                                <option value="Input SPRPP">Input SPRPP</option>
                                                <option value="Input Hasil Lelang">Input Hasil Lelang</option>
                                                <option value="Revisi Paket">Revisi Paket</option>
                                            </select>    
                                        
                                        </div>
                                        
                                        <a onclick="get_status()" class="btn btn-md bg-greensea"><i class="fa fa-search"></i> Cari</a>
                                    </form>
                            <div class="">
                            <?php
                                
                                if($user->kode_jabatan=="002" OR $user->kode_jabatan=="007" ){
                            ?>
                                <a href="<?php echo base_url() . 'admin/create_paket/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Input Paket</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/tambah_manual'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Input Paket Manual</button></a>
                                <a href="<?php echo base_url() . 'admin/create_paket/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                            <?php } ?>
                                <!--  <a href="<?php echo base_url() . 'admin/create_paket/import'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-greensea btn-ef-2a mb-10"><i class="fa fa-file-excel-o"></i> Import Data Paket</button></a> -->
                            </div>
                            <div class="table-responsive">
                                <div id="cari_status">
                                    <table style="font-size: small;" class="table dt-responsive table-hover table-custom" id="responsive-usage">
                                    <thead>
                                        <tr class="info">
                                            <th>No</th>
                                            <th width="50px">Tanggal Pengajuan</th>
                                            <th>SKPD</th>
                                            <th>Kegiatan</th>
                                            <th>Paket</th>
                                            <th>Vol</th>
                                            <th>Lokasi</th>
                                            <th>Pagu</th>
                                            <th>Hps</th>
                                        <?php if($user->kode_jabatan !="002") {?>
                                            <th>Nilai Kontrak</th>
                                            <th>Pemenang</th>
                                        <?php } ?>
                                            <th>Jenis Pengadaan</th>
                                            <!-- <th>Metode Pengadaan</th> -->
                                            <!-- <th>Sumber Dana</th> -->
                                            <th>Pokja</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if($user->kode_jabatan=="002"){
                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                        $this->db->where('kode_ppk',$user->nip);
                                        $this->db->where('status_paket !=',"Sukses");
                                        $this->db->where('status_paket !=',"Gagal");
                                        }
                                        if($user->kode_jabatan=="003"){
                                            $this->db->where('kode_pokja',$user->kode_pokja);
                                            $this->db->where('status_paket !=',"Sukses");
                                            $this->db->where('status_paket !=',"Gagal");
                                        }
                                        $this->db->order_by('id',"DESC");
                                        $tahun=$this->uri->segment(4);
                                        $hasil=$this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Open'));
                                        $hasil_ambil = $hasil->result();
                                        $no = 0;
                                        
                                        foreach ($hasil_ambil as $item) {
                                            $no++;
                                            
                                            

                                            ?>
                                            <tr <?php  if($item->status_paket == 'tolak') { ?>  class="danger"  <?php }elseif($item->status_paket == 'Revisi Dokumen') { ?>  style="background-color:rgb(251, 205, 141)"  <?php } ?> > 
                                             <td><?php echo $no?></td>
                                             <td><?php echo TanggalIndo($item->tanggal_pengajuan);?></td>
                                             <td><?php echo $item->nama_satuan_kerja;?></td>
                                             <td><?php echo $item->kegiatan;?></td>
                                             <td><?php echo $item->nama_paket;?></td>
                                             <td><?php echo $item->volume;?></td>
                                             <td><?php echo $item->lokasi;?></td>
                                             <td><?php echo format_rupiah($item->pagu);?></td>
                                             <td><?php echo format_rupiah($item->hps);?></td>

                                        <?php if($user->kode_jabatan !="002"){?>
                                             <td><?php echo format_rupiah($item->nilai_kontrak) ?></td>
                                             <td><?php echo $item->pemenang; ?></td>
                                        <?php }?>
                                             <td><?php echo $item->jenis_pengadaan;?></td><!-- 
                                             <td><?php echo $item->metode_pengadaan;?></td> -->
                                             <!-- <td><?php echo $item->nama_sumber_dana;?></td> -->
                                             <td><?php echo $item->nama_pokja;?></td>



                                             <td>
                                                 <?php echo cek_dokumen($item->status_paket); ?>
                                             </td>
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
                                                <?php if ($item->status_paket != 'terima'){ ?>
                                                <!-- <a href="<?php echo base_url(). 'admin/create_paket/detail/'. $item->id;?>" class="btn btn-success btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-eye"> Detail</span><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url(). 'admin/create_paket/ubah/'. $item->id;?>" class="btn btn-warning btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-pencil"> Edit</span><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo base_url(). 'admin/create_paket/uploud/'. $item->id;?>" class="btn btn-primary btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-upload"> Upload</span><i class="fa fa-upload"></i></a> -->
                                                <!-- <a key="<?php echo $item->id; ?>" class="hapus btn btn-danger btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span>Delete</span><i class="fa fa-trash"></i></a> -->
                                                
                                                <a href="<?php echo base_url().'admin/create_paket/detail/'.$item->id;?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                <!--<a href="<?php echo base_url().'admin/create_paket/ubah/'.$item->id;?>" title="Ubah"  class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil" style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                 <a href="<?php echo base_url(). 'admin/create_paket/uploud/'. $item->id;?>" title="Uploud" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-upload"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                <a key="<?php echo $item->id; ?>" title="Hapus" class="hapus btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-trash"  style="font-size:15px;position:relative;line-height:10px"></i></a> -->
                                                <?php }?>

                                                <?php if($user->kode_jabatan == '001'){?>

                                                    <?php if($item->status_paket != 'verifikasi sekretariat'){ if($item->hardcopy =='' && $item->softcopy ==''){?>

                                                    <?php if($item->jenis_pengadaan == "Jasa Konsultasi"){?>
                                                    <a href="<?php echo base_url().'admin/create_paket/form_jasa_konsultasi/'.$item->id;?>" title="Checklist"  class="btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil" style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    <?php }  if($item->jenis_pengadaan == "Konstruksi"){?>
                                                         <a href="<?php echo base_url().'admin/create_paket/form_konstruksi/'.$item->id;?>" title="Checklist"  class="btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil" style="font-size:15px;position:relative;line-height:10px"></i></a>

                                                    <?php } else{?>

                                                        <a href="<?php echo base_url().'admin/create_paket/form_barang/'.$item->id;?>" title="Checklist"  class="btn btn-danger btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil" style="font-size:15px;position:relative;line-height:10px"></i></a>

                                                    <?php }}}?>


                                                    <?php if($item->status_paket != 'verifikasi sekretariat'){ if($item->hardcopy !='' || $item->softcopy !=''){?>

                                                    <?php if($item->jenis_pengadaan == "Jasa Konsultasi"){?>
                                                    <a href="<?php echo base_url().'admin/create_paket/print_jasa_konsultasi/'.$item->id;?>" title="Print Checklist"  target="_blank" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-print" style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    <?php }  if($item->jenis_pengadaan == "Konstruksi"){?>
                                                         <a href="<?php echo base_url().'admin/create_paket/print_konstruksi/'.$item->id;?>" title="Print Checklist" target="_blank" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-print" style="font-size:15px;position:relative;line-height:10px"></i></a>

                                                    <?php } else{?>

                                                        <a href="<?php echo base_url().'admin/create_paket/print_barang/'.$item->id;?>" title="Print Checklist" target="_blank" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-print" style="font-size:15px;position:relative;line-height:10px"></i></a>

                                                    <?php }}}?>


                                                <?php }?>    
                                                
                                                <?php 
                                                    if($user->kode_jabatan=="002" OR $user->kode_jabatan=="007"){    
                                                ?>
                                                <a href="<?php echo base_url().'admin/create_paket/ubah/'.$item->id;?>" title="Ubah"  class="btn btn-warning btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-pencil" style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                                </div>
                                
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
        
        function get_status(){
            var status = $("#status").val();
            var url = "<?php echo base_url().'admin/create_paket/get_status' ?>";
            $.ajax( {
               type:"POST", 
               url : url,  
               cache :false,  
               data :{status:status},
               beforeSend:function(){
                  $(".tunggu").show();  
              },
              success : function(data) {  
                $("#cari_status").html(data);
            },  
            error : function(data) {  
              alert(data);  
          }  
      });
        }

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
