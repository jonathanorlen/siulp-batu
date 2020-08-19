
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <!-- <h2>Selamat Datang Di Aplikasi BLP BATU</h2> -->

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home">&nbsp</i>Dasboard</a>
                                </li>
                                
                                
                                
                            </ul>
                            
                        </div>

                    </div>
                    
                    

                    <!-- tile -->
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Dashboard</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                    <div class="row">
                                        <h2 class="text-center">SELAMAT DATANG DI APLIKASI BLP BATU</h2><br />
                                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                                            <div class="card">
                                                <div class="bg-info" style="height:100px;">

                                                    <!-- row -->
                                                    <br>
                                                    <?php
                                                    $user = $this->session->userdata('astrosession');
                                                    if($user->kode_jabatan=="002"){
                                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                    }else if($user->kode_jabatan=="003"){
                                                        $this->db->where('kode_pokja',$user->kode_pokja);
                                                    }
                                                    $this->db->where('tutup_tahun','Open');
                                                    $ambil_jumlah = $this->db->get('transaksi_data_paket');
                                                    $hasil_ambil_jumlah = $ambil_jumlah->result();

                                                    $jumlah_paket = count($hasil_ambil_jumlah);

                                                    ?>
                                                    <div class="row">
                                                        <!-- col -->
                                                        <div class="col-xs-4">
                                                            <i style="margin-left:10px;" class="fa fa-list fa-4x"></i>
                                                        </div>
                                                        <!-- /col -->
                                                        <!-- col -->
                                                        <div class="col-xs-8">
                                                            <p class="text-elg text-strong mb-0"><?php echo ($jumlah_paket) ;?></p>
                                                            <span>Jumlah Paket</span>
                                                        </div>
                                                        <!-- /col -->
                                                    </div>
                                                    <!-- /row -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                                            <div class="card">
                                                <div class="bg-greensea" style="height:100px;">

                                                    <!-- row -->
                                                    <br>
                                                    <?php
                                                    if($user->kode_jabatan=="002"){
                                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                    }else if($user->kode_jabatan=="003"){
                                                        $this->db->where('kode_pokja',$user->kode_pokja);
                                                    }
                                                    $this->db->where('tutup_tahun','Open');
                                                    $ambil_sukses = $this->db->get_where('transaksi_data_paket',array('status_paket' => 'Sukses'));
                                                    $hasil_sukses = $ambil_sukses->result();

                                                    $jumlah_sukses = count($hasil_sukses);

                                                    ?>
                                                    <div class="row">
                                                        <!-- col -->
                                                        <div class="col-xs-4">
                                                            <i style="margin-left:10px;" class="fa fa-check fa-4x"></i>
                                                        </div>
                                                        <!-- /col -->
                                                        <!-- col -->
                                                        <div class="col-xs-8">
                                                            <p class="text-elg text-strong mb-0"><?php echo ($jumlah_sukses) ;?></p>
                                                            <span>Jumlah Paket Sukses</span>
                                                        </div>
                                                        <!-- /col -->
                                                    </div>
                                                    <!-- /row -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                                            <div class="card">
                                                <div class="bg-lightred" style="height:100px;">

                                                    <!-- row -->
                                                    <br>
                                                    <?php
                                                    if($user->kode_jabatan=="002"){
                                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                    }else if($user->kode_jabatan=="003"){
                                                        $this->db->where('kode_pokja',$user->kode_pokja);
                                                    }
                                                    $this->db->where('tutup_tahun','Open');
                                                    $ambil_gagal = $this->db->get_where('transaksi_data_paket',array('status_paket ' => 'gagal'));
                                                    $hasil_gagal = $ambil_gagal->result();

                                                    $jumlah_gagal = count($hasil_gagal);

                                                    ?>
                                                    <div class="row">
                                                        <!-- col -->
                                                        <div class="col-xs-4">
                                                            <i style="margin-left:10px;" class="fa fa-exclamation-triangle fa-4x"></i>
                                                        </div>
                                                        <!-- /col -->
                                                        <!-- col -->
                                                        <div class="col-xs-8">
                                                            <p class="text-elg text-strong mb-0"><?php echo ($jumlah_gagal) ;?></p>
                                                            <span>Jumlah Paket Gagal</span>
                                                        </div>
                                                        <!-- /col -->
                                                    </div>
                                                    <!-- /row -->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                                            <div class="card">
                                                <div class="bg-primary" style="height:100px;">

                                                    <!-- row -->
                                                    <br>
                                                    <?php
                                                    $user = $this->session->userdata('astrosession');
                                                    if($user->kode_jabatan=="002"){
                                                        $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                    }else if($user->kode_jabatan=="003"){
                                                        $this->db->where('kode_pokja',$user->kode_pokja);
                                                    }
                                                    $this->db->where('tutup_tahun','Open');
                                                    $ambil_jumlah = $this->db->get('transaksi_data_paket');
                                                    $hasil_ambil_jumlah = $ambil_jumlah->result();

                                                    $jumlah_paket = count($hasil_ambil_jumlah);

                                                    ?>
                                                    <div class="row">
                                                        <!-- col -->
                                                        <div class="col-xs-4">
                                                            <i style="margin-left:10px;" class="fa fa-tasks fa-4x"></i>
                                                        </div>
                                                        <!-- /col -->
                                                        <!-- col -->
                                                        <div class="col-xs-8">
                                                            <p class="text-elg text-strong mb-0"><?php echo ($jumlah_paket - $jumlah_gagal -$jumlah_sukses ) ;?></p>
                                                            <span>Jumlah Paket Proses</span>
                                                        </div>
                                                        <!-- /col -->
                                                    </div>
                                                    <!-- /row -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <?php if($user->kode_jabatan=="002"){ ?>
                                        <div class="col-md-12">
                                          <div id="container">

                                          </div>
                                      </div>
                                      <?php }else{ ?>
                                      <div class="col-md-4">
                                          <div id="container">

                                          </div>
                                      </div>
                                      
                                      <div class="col-md-4">
                                      <div class="text-center">
                                      <strong>Data Paket Gagal</strong>    
                                      </div>
                                      <?php
                                      if($user->kode_jabatan=="003"){
                                        $gagal = $this->db->query("SELECT
                                    	kode_skpd,
                                    	nama_satuan_kerja,
                                    COUNT(kode_paket) AS jumlah
                                    FROM
                                    	transaksi_data_paket
                                    LEFT JOIN master_satuan_kerja ON master_satuan_kerja.kode_skpd = transaksi_data_paket.kode_satuan_kerja
                                    WHERE
                                    	transaksi_data_paket.status_paket = 'Gagal' AND tutup_tahun = 'Open' AND
                                        transaksi_data_paket.kode_pokja = '$user->kode_pokja'
                                    GROUP BY
                                    	transaksi_data_paket.kode_satuan_kerja ORDER BY jumlah DESC LIMIT 5");
                                     }else{
                                            $gagal = $this->db->query("SELECT
                                        	kode_skpd,
                                        	nama_satuan_kerja,
                                        COUNT(kode_paket) AS jumlah
                                        FROM
                                        	transaksi_data_paket
                                        LEFT JOIN master_satuan_kerja ON master_satuan_kerja.kode_skpd = transaksi_data_paket.kode_satuan_kerja
                                        WHERE
                                        	transaksi_data_paket.status_paket = 'Gagal' AND tutup_tahun = 'Open'
                                        GROUP BY
                                        	transaksi_data_paket.kode_satuan_kerja ORDER BY jumlah DESC LIMIT 5");
                                     }
                                        $total_gagal = 0;
                                        $total_paket = 0;
                                        foreach($gagal->result() as $daftar){
                                      ?>
                                       <div class="progress-list">
                                            <div class="details">
                                                <div class="title"><strong>SKPD</strong> <?php echo $daftar->nama_satuan_kerja; ?></div>
                                                <div class="description">Paket Gagal</div>
                                            </div>
                                            <div class="status pull-right">
                                            <?php
                                            if($user->kode_jabatan=="003"){
                                                $this->db->where('kode_pokja',$user->kode_pokja);
                                                }
                                                $this->db->where('kode_satuan_kerja',$daftar->kode_skpd);
                                                $this->db->where('tutup_tahun','Open');
                                                $paket_skpd = $this->db->get('transaksi_data_paket');
                                                $hasil_paket_skpd = $paket_skpd->result();
                                            ?>
                                                <span><?php echo $daftar->jumlah."/".count($hasil_paket_skpd); ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-xs progress-striped active">
                                            <?php
                                            $persen = ($daftar->jumlah / count($hasil_paket_skpd)) *100;
                                            ?>
                                                <div class="progress-bar progress-bar-red animate-progress-bar" data-percentage="<?php echo $persen."%"; ?>" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                       <?php
                                            $total_gagal += $daftar->jumlah;
                                            $total_paket += count($hasil_paket_skpd);
                                        } ?>
                                       <div class="progress-list">
                                            <div class="details">
                                                <div class="title"><strong>SKPD</strong> Lain</div>
                                                <div class="description">Paket Sukses</div>
                                            </div>
                                            <div class="status pull-right">
                                                <span><?php echo ($jumlah_gagal- $total_gagal)."/".$jumlah_paket; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-xs progress-striped active">
                                            <?php
                                            $persen_lain = (($jumlah_gagal - $total_gagal) / $jumlah_paket) *100;
                                            ?>
                                                <div class="progress-bar progress-bar-red animate-progress-bar" data-percentage="<?php echo $persen_lain."%"; ?>" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    


                                     <div class="col-md-4">
                                      <div class="text-center">
                                      <strong>Data Paket Sukses</strong>    
                                      </div>
                                      <?php
                                      if($user->kode_jabatan=="003"){
                                        $sukses = $this->db->query("SELECT
                                    	kode_skpd,
                                    	nama_satuan_kerja,
                                    COUNT(kode_paket) AS jumlah
                                    FROM
                                    	transaksi_data_paket
                                    LEFT JOIN master_satuan_kerja ON master_satuan_kerja.kode_skpd = transaksi_data_paket.kode_satuan_kerja
                                    WHERE
                                    	transaksi_data_paket.status_paket = 'Sukses' AND tutup_tahun = 'Open' AND
                                        transaksi_data_paket.kode_pokja = '$user->kode_pokja'
                                    GROUP BY
                                    	transaksi_data_paket.kode_satuan_kerja ORDER BY jumlah DESC LIMIT 5");
                                     }else{
                                         $sukses = $this->db->query("SELECT
                                    	kode_skpd,
                                    	nama_satuan_kerja,
                                    COUNT(kode_paket) AS jumlah
                                    FROM
                                    	transaksi_data_paket
                                    LEFT JOIN master_satuan_kerja ON master_satuan_kerja.kode_skpd = transaksi_data_paket.kode_satuan_kerja
                                    WHERE
                                    	transaksi_data_paket.status_paket = 'Sukses' AND tutup_tahun = 'Open'
                                    GROUP BY
                                    	transaksi_data_paket.kode_satuan_kerja ORDER BY jumlah DESC LIMIT 5");
                                     }
                                        $total_sukses = 0;
                                        $total_paket = 0;
                                        foreach($sukses->result() as $daftar){
                                      ?>
                                       <div class="progress-list">
                                            <div class="details">
                                                <div class="title"><strong>SKPD</strong> <?php echo $daftar->nama_satuan_kerja; ?></div>
                                                <div class="description">Paket Sukses</div>
                                            </div>
                                            <div class="status pull-right">
                                            <?php
                                             if($user->kode_jabatan=="003"){
                                                $this->db->where('kode_pokja',$user->kode_pokja);
                                                }
                                                $this->db->where('kode_satuan_kerja',$daftar->kode_skpd);
                                                $this->db->where('tutup_tahun','Open');
                                                $paket_skpd = $this->db->get('transaksi_data_paket');
                                                $hasil_paket_skpd = $paket_skpd->result();
                                            ?>
                                                <span><?php echo $daftar->jumlah."/".count($hasil_paket_skpd); ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-xs progress-striped active">
                                            <?php
                                            $persen = ($daftar->jumlah / count($hasil_paket_skpd)) *100;
                                            ?>
                                                <div class="progress-bar progress-bar-greensea animate-progress-bar" data-percentage="<?php echo $persen."%"; ?>" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                       <?php
                                            $total_sukses += $daftar->jumlah;
                                            $total_paket += count($hasil_paket_skpd);
                                        } ?>
                                       <div class="progress-list">
                                            <div class="details">
                                                <div class="title"><strong>SKPD</strong> Lain</div>
                                                <div class="description">Paket Sukses</div>
                                            </div>
                                            <div class="status pull-right">
                                                <span><?php echo ($jumlah_sukses - $total_sukses)."/".$jumlah_paket; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-xs progress-striped active">
                                            <?php
                                            $persen_lain = (($jumlah_sukses - $total_sukses) / $jumlah_paket) *100;
                                            ?>
                                                <div class="progress-bar progress-bar-greensea animate-progress-bar" data-percentage="<?php echo $persen_lain."%"; ?>" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>

                                    <!--<div id="container">
                                    
                                </div>-->

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
<!--/ Application Content -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function () {
        var chart;

        $(document).ready(function () {

        // Build the chart
        
        Highcharts.setOptions({
    colors: ['#16a085', '#e05d6f', '#428bca']
});
        
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Grafik Data Paket'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Data Paket',
                data: [
                <?php
                
                $user = $this->session->userdata('astrosession');
                if($user->kode_jabatan=="002"){
                    $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                }else if($user->kode_jabatan=="003"){
                    $this->db->where('kode_pokja',$user->kode_pokja);
                }

                $jumlah_paket_sukses = $this->db->get_where("transaksi_data_paket",array('status_paket'=>'sukses','tutup_tahun'=>'Open'));
                $hasil_paket_sukses = $jumlah_paket_sukses->result();
                ?>
                <?php
                
                $user = $this->session->userdata('astrosession');
                if($user->kode_jabatan=="002"){
                    $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                }else if($user->kode_jabatan=="003"){
                    $this->db->where('kode_pokja',$user->kode_pokja);
                }
                $jumlah_paket_gagal = $this->db->get_where("transaksi_data_paket",array('status_paket'=>'gagal','tutup_tahun'=>'Open'));
                $hasil_paket_gagal = $jumlah_paket_gagal->result();
                ?>
                <?php
                
                $user = $this->session->userdata('astrosession');
                if($user->kode_jabatan=="002"){
                    $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                }else if($user->kode_jabatan=="003"){
                    $this->db->where('kode_pokja',$user->kode_pokja);
                }
                $jumlah_paket = $this->db->get_where("transaksi_data_paket",array('tutup_tahun'=>'Open'));
                $hasil_paket = $jumlah_paket->result();
                ?>
                ['Sukses',   <?php echo count($hasil_paket_sukses); ?>],
                ['Gagal',       <?php echo count($hasil_paket_gagal); ?>],
                ['Proses',       <?php echo count($hasil_paket) - count($hasil_paket_sukses) - count($hasil_paket_gagal) ; ?>]

                ]
            }]
        });
    });

    });
    

</script>
