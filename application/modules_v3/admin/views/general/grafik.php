
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Sumber Dana</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Info Grafik Paket</a>
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
                                    <h1 class="custom-font">Info Grafik Paket</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                    <div id="container">
                                    
                                    </div>

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
    $(document).ready(function(){
       /*  Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        
        text: 'Grafik Paket Sukses & Gagal'
      },
      subtitle: {
        text: 'Tahun 2017'
      },
      xAxis: {
        categories: [
        'Paket Sukses','Paket Gagal ',
      ],
      crosshair: true
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.0f} Keluhan</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Jumlah Keluhan'
      }
    },
    plotOptions: {
      column: {
        pointPadding: 0,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Transaksi',
      data: [
      4 ]

    }, {
      name: 'Non Transaksi',
      data: [
      1   ]

    }]
    
  });*/
        
    })

		</script>
  
  
  <script type="text/javascript">
$(function () {
    var chart;
    
    $(document).ready(function () {
    	
    	// Build the chart
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
                    ['Sukses',   <?php echo count($hasil_paket_sukses); ?>],
                    ['Gagal',       <?php echo count($hasil_paket_gagal); ?>]
                    
                ]
            }]
        });
    });
    
});
    

		</script>
 
