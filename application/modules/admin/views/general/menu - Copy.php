
            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar" class="aside-fixed scheme-greensea">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li class=" open">
                                                <a href="<?php echo base_url(). 'admin/dasboard/'?>"><i class="fa fa-delicious"></i> <span>Dasboard</span></a>
                                                <!--<ul>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-check-square"></i>Record Paket Sukses</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-remove"></i> Record Paket Gagal</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-bookmark"></i> Paket Yang Akan Lelang</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa fa-table"></i> Total Paket</a></li>
                                                </ul>-->
                                            </li>
                                            <?php
                                            $get_group = $this->session->userdata('astrosession');
                                            $group = $get_group->group;
                                            
                                            $menu = $this->db->get_where('master_jabatan',array('kode_jabatan'=>$get_group->kode_jabatan));
                                            $hasil_menu = $menu->row();
                                            $akses = $hasil_menu->modul;
                                            $modul = explode("|",$akses);
                                            
                                            if($group=='Internal' or $group=='root'){
                                                ?>
                                                <?php if(in_array('Master',$modul)){ ?> 
                                                <li class="<?php if(@$menu=="master"){ echo "active"; } ?>">
                                                    <a href="#"><i class="fa fa-gear"></i> <span>Setup Master</span></a>
                                                    <ul>
                                                        <?php if(in_array('Struktur ULP',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/struktur_ulp/content/'?>"><i class="fa fa-caret-right"></i><i class=" fa fa-pencil-square"></i>Struktur ULP</a></li>
                                                        <?php } ?>
                                                        <?php if(in_array('Kelompok Kerja',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/kelompok_kerja/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-users"></i>Kelompok Kerja</a></li>
                                                        <?php } ?>
                                                        <?php if(in_array('SKPD',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/skpd/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-th-list"></i> SKPD</a></li>
                                                        <?php } ?>
                                                    <!--     <?php if(in_array('Tim Teknis',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/tim_teknis/content/'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-wrench"></i> Tim Teknis</a></li>
                                                        <?php } ?> -->
                                                        <?php if(in_array('User',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/user/content/'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-user"></i> User</a></li>
                                                        <?php } ?>
                                                        <?php if(in_array('Import',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/import_data_paket/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-money"></i>Import Data Paket</a></li>
                                                        <?php } ?>
                                                    <!-- <li><a href="<?php echo base_url() . 'admin/jenis_pengadaan/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-tag"></i> Jenis Pengadaan</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/metode_pengadaan/content/'?>"><i class="fa fa-caret-right"></i><i class=" fa fa-pencil-square-o"></i> Metode Pengadaan</a></li> -->
                                                    <!-- <li><a href="<?php echo base_url() . 'admin/sumber_dana/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-money"></i> Sumber Dana</a></li> -->
                                                    <!-- <li><a href="<?php echo base_url() . 'admin/status_paket/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-check-square-o"></i> Status Paket</a></li> -->
                                                    
                                                </ul>
                                            </li>
                                            <?php } ?>
                                            <?php 
                                            $this->db->where('tutup_tahun','Open');
                                            $hasil = $this->db->get_where('transaksi_data_paket',array('posisi' => 'verifikasi sekretariat'));
                                            $hasil_gabung = $hasil->result();
                                            ?>
                                             <?php /*
                                            $hasil = $this->db->query(" SELECT * FROM transaksi_data_paket where status = 'tolak' or status ='proses verifikasi' ");
                                            $hasil_gabung = $hasil->result();
                                            ?>
                                            <?php
                                            $hasil = $this->db->query(" SELECT * FROM transaksi_data_paket where status = 'tolak' ");
                                            $hasil_tolak = $hasil->result();
                                            ?>
                                            <?php
                                            $hasil = $this->db->query(" SELECT * FROM transaksi_data_paket where status = 'proses verifikasi' ");
                                            $hasil_ambil = $hasil->result(); */
                                            ?> 
                                            <?php
                                            $user =  $this->session->userdata('astrosession');
                                            if($user->kode_jabatan=="002"){
                                                $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                $this->db->where('kode_ppk',$user->nip);

                                                $get_refis=$this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Open','status_paket'=>'Revisi Dokumen'));
                                                $get_refis_ambil = $get_refis->result();
                                                $jml_ref_paket=count(@$get_refis_ambil);
                                            }
                                            ?>
                                            <li>

                                                <a href="#"><i class="fa fa-list "></i><span>Pendaftaran Paket Lelang</span>
                                                    <?php if(in_array('Verifikasi',$modul)){ ?>
                                                    <?php if(!empty($hasil_gabung)){ ;?><span  class="badge bg-lightred"><?php echo count($hasil_gabung);?> </span><?php } ?>
                                                    <?php } ?>  
                                                    <?php if(@$jml_ref_paket > 0 and !empty($jml_ref_paket)){ ?><span  class="badge bg-warning"><?php  echo $jml_ref_paket; } ?> </span>    
                                                    <!--<span class="badge bg-lightred"><?php if(!empty($hasil_ambil)){ ;?><?php echo count($hasil_ambil);?><?php } ?></span> --></a>
                                                    <ul>
                                                        <?php if(in_array('Data Paket',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/create_paket/content'?>"><i class="fa fa-caret-right"></i><i class="fa fa-plus-square"></i> Data Paket<span  class="badge bg-warning"><?php if(@$jml_ref_paket > 0 and !empty($jml_ref_paket)){  echo $jml_ref_paket; } ?></span></a></li>
                                                        <?php } ?>
                                                        
                                                        <?php if(in_array('Verifikasi',$modul)){ ?>
                                                        <li><a href="<?php echo base_url() . 'admin/data_verifikasi/content'?>"><i class="fa fa-caret-right"></i><i class="fa fa-check-square"></i> Verifikasi <span class="badge bg-lightred"><?php if(!empty($hasil_gabung)){ ;?><?php echo count($hasil_gabung);?><?php } ?></span></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>


                                                <!-- Rapat Kaji Ulang -->
                                                <li class="<?php if(@$menu=="rapat"){ echo "active"; } ?>">

                                                   <?php
                                                   if($get_group->kode_jabatan=="002"){
                                                    $this->db->where('kode_satuan_kerja',$get_group->kode_skpd);  
                                                }
                                                $input_rapat = $this->db->get_where('transaksi_data_paket',array('posisi'=>'proses penjadwalan','tutup_tahun'=>'Open'));
                                                $hasil_input = $input_rapat->result();
                                                $jumlah_input = count($hasil_input);

                                                $tanggal = date("Y-m-d");
                                                $eventstart_time = strtotime($tanggal . ' 1 day');
                                                $jadi=date("Y-m-d",$eventstart_time);
                                                $datang_rapat = $this->db->get_where('transaksi_rapat',array('tanggal_rapat <'=>$jadi,'tutup_tahun'=>'Open'));
                                                $hasil_rapat = $datang_rapat->result();
                                                @$hasil_count = count($hasil_rapat);
                                                //echo $this->db->last_query();

                                                if($get_group->kode_jabatan=="002"){
                                                    $this->db->where('kode_satuan_kerja',$get_group->kode_skpd);  
                                                }elseif($get_group->kode_jabatan=="003"){
                                                    $this->db->where('kode_pokja',$get_group->kode_pokja);  
                                                }
                                                $tgl = date("Y-m-d");
                                                /*-------Orlen-------*/
                                                if($get_group->kode_jabatan == "001"){

                                                }else{
                                                    $this->db->where('status_ppk','Terima'); 
                                                    $this->db->where('status_pokja','Terima');
                                                }
                                                /*----------/orlen------------*/
                                                $this->db->where('status_ppk',"Terima");
                                                $this->db->where('status_pokja',"Terima");
                                                $jadwal_rapat = $this->db->get_where('transaksi_rapat',array('tanggal_rapat ='=>  $tgl,'tutup_tahun'=>'Open','notulensi !='=>'terisi'));
                                                $hasil_jadwal = $jadwal_rapat->result();
                                                $jumlah_jadwal = count($hasil_jadwal);

                                                $tgl2 = date("Y-m-d");
                                                $this->db->where('status_ppk',"Terima");
                                                $this->db->where('status_pokja',"Terima");
                                                $jadwal_rapat2 = $this->db->get_where('transaksi_rapat',array('tanggal_rapat >'=>  $tgl2,'tutup_tahun'=>'Open','notulensi !='=>'terisi'));
                                                $hasil_jadwal2 = $jadwal_rapat2->result();
                                                $jumlah_jadwal2 = count($hasil_jadwal2);


                                                ?>



                                                <a href="<?php echo base_url(). 'admin/rapat/';?>"><i class="fa fa-pencil"></i> <span> Rapat Kaji Ulang </span>
                                                    <?php if(!empty($jumlah_jadwal)) { ;?>
                                                    <span  class="badge bg-danger"><?php echo ($jumlah_jadwal);?></span>
                                                    <?php } ?>

                                                    <?php if(!empty($jumlah_jadwal2)) { ;?>
                                                    <span style="margin-left: 15px;margin-right: 15px;" class="badge bg-success"><?php echo ($jumlah_jadwal2);?></span>
                                                    <?php } ?>


                                                    <?php $dapat = $this->session->userdata('astrosession');
                                                    if($dapat->kode_jabatan == '002' || $dapat->kode_jabatan == '003') { ?>

                                                    <?php 
                                                    

                                                        /*if($dapat->kode_jabatan=="002"){
                                                            $this->db->where('status_ppk','Proses Verifikasi');  
                                                        }else if($dapat->kode_jabatan=="003"){
                                                            $this->db->where('status_pokja','Proses Verifikasi');  
                                                        }*/
                                                        $user = $this->session->userdata('astrosession');
                                                        if($user->kode_jabatan=="002"){
                                                            $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                            $this->db->where('status_ppk','Proses Verifikasi');  
                                                        }else if($user->kode_jabatan=="003"){
                                                            $this->db->where('kode_pokja',$user->kode_pokja);
                                                            $this->db->where('status_pokja','Proses Verifikasi');  
                                                        }
                                                        $this->db->where('tutup_tahun','Open');
                                                        $ambil = $this->db->get('transaksi_rapat');
                                                        $hitung = $ambil->result();
                                                        $jumlah_hitung = count($hitung);
                                                        ?>
                                                        <?php if($jumlah_hitung != '0') { ?>
                                                        <span style="margin-left: 26px;margin-right: 26px;" class="badge bg-primary"><?php echo ($jumlah_hitung);?></span>
                                                        <?php } ?>

                                                        <?php } ?> 
                                                    </a>


                                                    <ul>

                                                        <?php if(in_array('Input Rapat',$modul)) { ?>
                                                        <li><a href="<?php echo base_url() . 'rapat/rapat/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-plus-square"></i> Input Rapat <?php 

                                                            if(!empty($jumlah_input)){ ;?>
                                                            <span  class="badge bg-danger"><?php echo ($jumlah_input);?></span><?php } ?></a>
                                                        </li>
                                                        <?php } ?>






                                                        <?php if(in_array('Jadwal Rapat',$modul)){ ?>
                                                        <li>
                                                            <a href="<?php echo base_url() . 'rapat/rapat/jadwal_rapat/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-calendar"></i>Data Jadwal Rapat 

                                                                <?php if(!empty($jumlah_jadwal)){ ;?>
                                                                <span  class="badge bg-danger"><?php echo ($jumlah_jadwal);?></span>
                                                                <?php } ?>


                                                                <?php if(!empty($jumlah_jadwal2)){ ;?>
                                                                <span style="margin-left: 15px;margin-right: 15px;" class="badge bg-success"><?php echo ($jumlah_jadwal2);?></span>
                                                                <?php } ?>


                                                                <!--  <?php if(!empty($hasil_count)){ ;?><span  class="badge bg-info"><?php echo count($hasil_count);?></span><?php } ?> --></a>

                                                            </li>
                                                            <?php } ?>








                                                            <?php if(in_array('Hasil Rapat',$modul)) 
                                                            { ?>
                                                            <li style="width: 80%;" >

                                                                <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-calendar"></i>Hasil Rapat 
                                                                 <?php if($dapat->kode_jabatan == '003'){?>
                                                                 <?php 

                                                                 $hasil_data = $this->db->get_where("transaksi_data_paket",array('posisi' => 'verifikasi perbaikan','tutup_tahun' => 'Open'));
                                                                 $ambil_data = $hasil_data->result();
                                                                 $jumlah_data = count($ambil_data);
                                                                 ?>
                                                                 <span class="badge bg-warning"><?php echo $jumlah_data?></span>
                                                                 <?php }?>

                                                                 <?php 
                                                                 $dapat = $this->session->userdata('astrosession');
                                                                 $kode_skpd = $dapat->kode_skpd;
                                                                 if($dapat->kode_jabatan == '002')
                                                                    { ?>

                                                                <?php 
                                                                $this->db->where('kode_satuan_kerja',$kode_skpd);
                                                                $hasil=$this->db->get_where('transaksi_data_paket',array('status_paket' => 'Input SPRPP'));
                                                                $hasil_rapat= $hasil->result();
                                                                $jumlah_rapat=count($hasil_rapat);
                                                                ?> 
                                                                <?php 
                                                                if($jumlah_rapat != '0'){
                                                                    ?>
                                                                    <span class="badge bg-primary"><?php echo ($jumlah_rapat);?></span>

                                                                    <?php }?>
                                                                    <?php }?>

                                                                    <!-- notif pokja -->
                                                                    <?php 
                                                                    $dapat = $this->session->userdata('astrosession');
                                                                    $kode_pokja = $dapat->kode_pokja;
                                                                    if($dapat->kode_jabatan == '003')
                                                                        { ?>
                                                                    <?php 
                                                                    $this->db->where('kode_pokja',$kode_pokja);
                                                                    $this->db->where('status_ppk','Terima');
                                                                    $this->db->where('status_pokja','Terima');
                                                                    $hasil=$this->db->get_where('transaksi_rapat',array('notulensi !=' => 'terisi'));
                                                                    $hasil_rapat= $hasil->result();
                                                                    $jumlah_rapat=count($hasil_rapat);
                                                                    ?> 
                                                                    <?php 
                                                                    if($jumlah_rapat != '0') {
                                                                        ?>
                                                                        <span class="badge bg-warning"><?php echo ($jumlah_rapat);?></span>

                                                                        <?php }?>
                                                                        <?php }?>
                                                                        <!-- end -->
                                                                        <!-- notif revisi -->
                                                                        <?php 
                                                                        $dapat = $this->session->userdata('astrosession');
                                                                        $kode_skpd = $dapat->kode_skpd;
                                                                        if($dapat->kode_jabatan == '002')
                                                                            { ?>

                                                                        <?php 
                                                                        $this->db->where('kode_satuan_kerja',$kode_skpd);
                                                                        $hasil=$this->db->get_where('transaksi_data_paket',array('posisi' => 'Revisi Paket'));
                                                                        $hasil_rapat= $hasil->result();
                                                                        $jumlah_rapat=count($hasil_rapat);
                                                                        ?> 
                                                                        <?php 
                                                                        if($jumlah_rapat != '0'){
                                                                            ?>
                                                                            <span style="margin-left: 15px;margin-right: 15px;" class="badge bg-cyan"><?php echo ($jumlah_rapat);?></span>

                                                                            <?php }?>
                                                                            <?php }?>
                                                                            <!-- end -->
                                                                            <!-- notif input sprpp -->
                                                                            <?php 
                                                                            $dapat = $this->session->userdata('astrosession');
                                                                            $kode_skpd = $dapat->kode_skpd;
                                                                            if($dapat->kode_jabatan == '002')
                                                                                { ?>

                                                                            <?php 
                                                                            $this->db->where('kode_satuan_kerja',$kode_skpd);
                                                                            $hasil=$this->db->get_where('transaksi_data_paket',array('posisi' => 'Lanjut Lelang'));
                                                                            $hasil_rapat= $hasil->result();
                                                                            $jumlah_rapat=count($hasil_rapat);
                                                                            ?> 
                                                                            <?php 
                                                                            if($jumlah_rapat != '0'){
                                                                                ?>
                                                                                <span class="badge bg-lightred"><?php echo ($jumlah_rapat);?></span>
                                                                                <?php }?>
                                                                                <?php }?>
                                                                                <!-- end -->
                                                                            </a>
                                                                        </li>

                                                                        <?php } ?>





                                                                        <?php if(in_array('Verifikasi Jadwal',$modul)) { ?>
                                                                        <?php
                                                                        $user = $this->session->userdata('astrosession');
                                                                        if($user->kode_jabatan=="002"){
                                                                            $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                                            $this->db->where('status_ppk','Proses Verifikasi');  
                                                                        }else if($user->kode_jabatan=="003"){
                                                                            $this->db->where('kode_pokja',$user->kode_pokja);
                                                                            $this->db->where('status_pokja','Proses Verifikasi');  
                                                                        }
                                                                        $this->db->where('tutup_tahun','Open');
                                                                        $verifikasi = $this->db->get('transaksi_rapat');
                                                                        $data_verifikasi = $verifikasi->result();
                                                                        $hasil_verifikasi =count($data_verifikasi);
                                                                        ?>
                                                                        <li><a href="<?php echo base_url() . 'rapat/rapat/verifikasi_jadwal_rapat/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-calendar"></i>Verifikasi Jadwal Rapat<span  class="badge bg-primary"><?php if($hasil_verifikasi != '0'){?><?php echo ($hasil_verifikasi);?><?php }?></span></a></li>
                                                                        <?php } ?>

                                                                    </ul>
                                                                </li>
                                           <!--  <li class="<?php if(@$menu=="surat_perintah"){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(). 'surat_perintah/'?>"><i class="fa fa-envelope-o"></i> <span>Surat Perintah Tugas</span></a>
                                                
                                            </li> -->
                                            <?php if(in_array('Honor Pokja',$modul)){ ?>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Honor POKJA</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url().'honor_pokja/data_honor_pokja'?>"><i class="fa fa-caret-right"></i><i class="fa fa-pie-chart"></i> Data Honor Pokja</a></li>
                                                    <li><a href="<?php echo base_url().'honor_pokja/data_honor_pokja/pencairan'?>"><i class="fa fa-caret-right"></i><i class="fa fa-money"></i> Pencairan Honor Pokja</a></li>
                                                </ul>
                                            </li>
                                            <?php } ?> 
                                            <li class="<?php if(@$menu=="record_lelang"){ echo "active"; } ?>">
                                                <?php
                                                if($user->kode_jabatan=="002"){
                                                    $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                    $this->db->where('kode_ppk',$user->nip);
                                                }
                                                if($user->kode_jabatan=="003"){
                                                    $this->db->where('kode_pokja',$user->kode_pokja);
                                                }
                                                $lelang=$this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Open','status_paket'=>'Proses Lelang'));
                                                $hasil_lelang = $lelang->result();
                                                $jml_input = count($hasil_lelang);
                                                ?>
                                                
                                                <a href="#"><i class="fa fa-desktop"></i> <span>Record</span><?php if($user->kode_jabatan=="003") { if($jml_input > 0 ) { ?><span class="badge bg-blue"><?php echo ($jml_input);?></span><?php } } ?></a>
                                                <ul>
                                                    <?php if(in_array('Hasil Lelang',$modul)){ ?>
                                                    
                                                    
                                                    <li><a href="<?php echo base_url() . 'record_lelang/hasil_lelang'?>"><i class="fa fa-caret-right"></i><i class="fa fa-exclamation"></i> Input Hasil Lelang <?php if($jml_input > 0 ) { ?><span class="badge bg-blue"><?php echo ($jml_input);?></span><?php } ?></a></li>
                                                    <?php } ?>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/record_sukses'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-check-square"></i> Paket Sukses</a></li>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/record_gagal'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-remove"></i> Paket Gagal</a></li>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/grafik'?>"><i class="fa fa-caret-right"></i><i class="fa fa-line-chart"></i> Info Grafik</a></li>
                                                    <?php if(in_array('Monev',$modul)){ ?>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/data_monev'?>"><i class="fa fa-caret-right"></i><i class="fa fa-list-ol"></i> Data Monev</a></li>
                                                    <?php } ?>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/tampil_tahun'?>"><i class="fa fa-caret-right"></i><i class="fa fa-bar-chart"></i> Data Tahunan</a></li>
                                                    <?php if(in_array('Histori Paket',$modul)){ ?>
                                                    <li><a href="<?php echo base_url() . 'record_lelang/histori_paket'?>"><i class="fa fa-caret-right"></i><i class="fa fa-history"></i>Histori Paket</a></li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        <li class="<?php if(@$menu=="forum"){ echo "active"; } ?>">
                                            <a href="#"><i class="fa fa-comments"></i> <span>Forum</span></a>
                                            <ul>
                                                <?php
                                                if($group=='Internal' or $group=='root'){
                                                    ?>

                                                    <?php if(in_array('Setting User',$modul)){ ?>
                                                    <li><a href="<?php echo base_url() . 'forum/setting_user/content'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-users"></i>Setting User</a></li>
                                                    <?php } ?>

                                                    <?php if(in_array('Setting Forum',$modul)){ ?>
                                                    <li><a href="<?php echo base_url() . 'forum/setting_forum'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-plus-square"></i> Setting Forum</a></li>
                                                    <?php } ?>
                                                    <?php
                                                }
                                                ?>
                                                <li><a href="<?php echo base_url() . 'forum'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-user"></i>Forum</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <!--/ NAVIGATION Content -->


                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                </div>


            </aside>
            <!--/ SIDEBAR Content -->

                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                <aside id="rightbar">

                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
                            <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
                            <li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="users">
                                <h6><strong>Online</strong> Users</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/peter-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/george-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">George <strong>McCain</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar1.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar2.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Jesse <strong>Phoenix</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                                <h6><strong>Offline</strong> Users</h6>

                                <ul>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar4.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Dell <strong>MacApple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Paris, France</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar5.jpg'?>" alt>
                                            </a>

                                            <div class="media-body">
                                                <span class="media-heading">Roger <strong>Flopple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Rome, Italia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar6.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Nico <strong>Vulture</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar7.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Bobby <strong>Socks</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar8.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="history">
                                <h6><strong>Chat</strong> History</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/peter-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="friends">
                                <h6><strong>Friends</strong> List</h6>
                                <ul>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar8.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar1.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h6><strong>Chat</strong> Settings</h6>

                                <ul class="settings">

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Offline Users</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">
                                                    <label class="onoffswitch-label" for="show-offline">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Fullname</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">
                                                    <label class="onoffswitch-label" for="show-fullname">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">History Enable</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">
                                                    <label class="onoffswitch-label" for="show-history">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Locations</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">
                                                    <label class="onoffswitch-label" for="show-location">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Notifications</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">
                                                    <label class="onoffswitch-label" for="show-notifications">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Undread Count</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">
                                                    <label class="onoffswitch-label" for="show-unread">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </aside>
                <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->