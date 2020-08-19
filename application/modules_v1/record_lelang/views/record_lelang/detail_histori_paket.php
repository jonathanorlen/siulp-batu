
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Detail Histori Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <!-- <li>
                                    <a>Data paket</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Data Paket</a>
                                </li> -->
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Detail Histori&nbsp<strong>Paket</strong></h1>
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
                                <div id="cari_status">
                                    <?php
                                    $kode = $this->uri->segment(3);
                                    ?>
                                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                        <thead>
                                            <tr class="info">
                                                <th>Data Paket</th>
                                                <th>Perubahan</th>
                                                <th>Jumlah Perubahan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>  
                                                <td>Nama Paket</td>
                                                <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'nama_paket'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/nama_paket';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Bulan Pengajuan</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'tanggal_pengajuan'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/tanggal_pengajuan';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Kegiatan</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'kegiatan'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/kegiatan';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Volume</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'volume'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/volume';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Lokasi</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'lokasi'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/lokasi';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Pagu</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'pagu'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/pagu';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>HPS</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'hps'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/hps';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Satuan Kerja</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'nama_satuan_kerja'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/nama_satuan_kerja';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>

                                                <tr>  
                                                    <td>Sumber Dana</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'nama_sumber_dana'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/nama_sumber_dana';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>

                                                <tr>  
                                                    <td>Jenis Pengandaan</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'jenis_pengadaan'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/jenis_pengadaan';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>

                                                 <tr>  
                                                    <td>Nomor Surat</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'nomor_surat_ppk'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/nomor_surat_ppk';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>

                                                <tr>  
                                                    <td>Metode Pengandaan</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get_where("histori_paket",array('field_perubahan'=>'metode_pengadaan'));
                                                    $hasil_cek=$cek->result();

                                                    if($hasil_cek){
                                                        ?>
                                                        Ya
                                                        <?php }else{?>
                                                        tidak
                                                        <?php }?>

                                                    </td>
                                                    <td><?php
                                                    echo count($hasil_cek)
                                                    ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_paket_opsi/'.$kode.'/metode_pengadaan';?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>
                                                <tr>  
                                                    <td>Dokumen Paket</td>
                                                    <td><?php
                                                    $this->db->where('kode_paket',$kode);
                                                    $cek=$this->db->get("dokumen_paket");
                                                    $hasil_cek=$cek->result();
                                                    $jumlah = count($hasil_cek);
                                                    if($jumlah > 8){
                                                        echo 'Ya';
                                                    }else{
                                                        echo "Tidak";
                                                    }
                                                        ?>
                                                        
                                                    </td>
                                                    <td><?php
                                                     if($jumlah > 8){
                                                        echo( $jumlah - 8);
                                                    }else{
                                                        echo '0';
                                                    } ?> Perubahan
                                                        
                                                    </td>
                                                    <td><a href="<?php echo base_url().'record_lelang/detail_histori_dokumen/'.$kode;?>" title="Detail" class="btn btn-success btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" style="position:relative;padding:10px 15px"><i class="fa fa-eye"  style="font-size:15px;position:relative;line-height:10px"></i></a>
                                                    
                                                        
                                                    </td>
                                                </tr>   


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




            </div>
         
