
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Daftar Paket Gagal</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Record</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'surat_perintah/'?>">Daftar Paket Gagal</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Data&nbsp<strong>Daftar Paket Gagal</strong></h1>
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

                        <form class="form-inline" role="form">
                         <br>
                         <div class="col-md-3">
                            <div class="form-group" >
                                <label>Nama Paket</label>
                                <input type="text" class="form-control" id="nama_paket" placeholder="Filter by Nama Paket :" >
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" >
                                <label>Jenis Pengadaan</label>
                                <select style="margin-left: 5px;" class="form-control" id="jenis_pengadaan">
                                    <option value="" selected="">Filter by Jenis Pengadaan :</option>

                                       <!--  <?php 
                                        $get_cari =$this->db->get("transaksi_data_paket");
                                        $hasil_get_cari = $get_cari->result();
                                        foreach ($hasil_get_cari as $value) {
                                           ?>
                                           <option value="<?php echo $value->jenis_pengadaan?>"><?php echo $value->jenis_pengadaan?></option>
                                           <?php
                                        }
                                        ?> -->
                                        <option value="Jasa Konsultansi">Jasa Konsultansi</option>
                                        <option value="Konstruksi">Konstruksi</option>
                                        <option value="Barang">Barang</option>
                                        <option value="Jasa Lainnya">Jasa Lainnya</option>
                                    </select>    
                                    
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a style="margin-right: 20px;" onclick="get_paket()" class="btn btn-md bg-greensea"><i class="fa fa-search"></i> Cari</a>
                                <a target="_blank" style="" id="cetak" class="btn btn-md bg-primary pull-right"><i class="fa fa-print"></i> Print</a>
                            </div>
                        </form>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <br>
                        <br>

                        <br>
                        <div class="tile-body">

                            <div class="table-responsive">
                                <div id="cari_paket">


                                    <?php $user =  $this->session->userdata('astrosession');  ?>

                                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">

                                        <thead>
                                            <tr class="info">
                                                <th>No</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>SKPD</th>
                                                <th>Kegiatan</th>
                                                <th>Paket</th>
                                                <th>Vol</th>
                                                <th>Lokasi</th>
                                                <th>Pagu</th>
                                                <th>Hps</th>
                                                <th>Nilai Kontrak</th>
                                                <th>Pemenang</th>
                                                <!-- <th>Nilai Kontrak</th>-->
                                                <th>Jenis Pengadaan</th>
                                                            <!-- <th>Metode Pengadaan</th>
                                                            <th>Sumber Dana</th> -->
                                                            <th>Pokja</th>
                                                            <th>Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $user =  $this->session->userdata('astrosession');
                                                        
                                                        if($user->kode_jabatan=="002"){
                                                            $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                            
                                                        }elseif ($user->kode_jabatan=="003") {
                                                            $this->db->where('kode_pokja',$user->kode_pokja);
                                                        };

                                                        $hasil=$this->db->get_where("transaksi_data_paket",array('status_paket' => 'Gagal','tutup_tahun'=>'Open'));
                                                        $hasil_ambil = $hasil->result();
                                                        $no = 0;
                                                        foreach ($hasil_ambil as $item) {
                                                            $no++;
                                                            ?>
                                                            <tr  > <!-- <?php  if($item->status == 'tolak') { ?>  class="danger"  <?php } ?> --> 
                                                             <td><?php echo $no;?></td>
                                                             <td><?php echo TanggalIndo($item->tanggal_pengajuan);?></td>
                                                             <td><?php echo $item->nama_satuan_kerja;?></td>
                                                             <td><?php echo $item->kegiatan;?></td>
                                                             <td><?php echo $item->nama_paket;?></td>
                                                             <td><?php echo $item->volume;?></td>
                                                             <td><?php echo $item->lokasi;?></td>
                                                             <td><?php echo format_rupiah($item->pagu);?></td>
                                                             <td><?php echo format_rupiah($item->hps);?></td>
                                                             <!--<td></td>-->
                                                             <td><?php echo format_rupiah($item->nilai_kontrak) ?></td>
                                                             <td><?php echo $item->pemenang; ?></td>
                                                             <td><?php echo $item->jenis_pengadaan;?></td>
                                                             <!--   <td><?php echo $item->metode_pengadaan;?></td>
                                                             <td><?php echo $item->nama_sumber_dana;?></td> -->
                                                             <td><?php echo $item->nama_pokja;?></td>


<!-- 
                                             <td>
                                              <?php if($item->status == 'proses verifikasi')
                                              { 

                                                ?>
                                                <span class="label label-warning">Proses Verifikasi</span>
                                                <label>&nbsp</label
                                                    <?php 
                                                }
                                                else if($item->status == 'tolak')
                                                {
                                                    ?>
                                                    <span class="label label-danger">Gagal</span>
                                                    <label>&nbsp</label>
                                                    <?php 
                                                }
                                                else if($item->status == 'terima')
                                                {
                                                    ?>
                                                    <span class="label label-danger">Gagal</span>
                                                    <label>&nbsp</label>
                                                    <?php 
                                                } 
                                                ?>
                                            </td> -->
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
                                                <!-- <?php if ($item->status != 'terima'){ ?> -->
                                                <a href="<?php echo base_url(). 'record_lelang/record_lelang/detail_paket_gagal/'. $item->id;?>" class="btn btn-success btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-eye"> Detail</span><i class="fa fa-eye"></i></a>
                                                <!-- <a href="<?php echo base_url(). 'admin/create_paket/ubah/'. $item->id;?>" class="btn btn-warning btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-pencil"> Edit</span><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo base_url(). 'admin/create_paket/uploud/'. $item->id;?>" class="btn btn-primary btn-md btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span class="fa fa-upload"> Upload</span><i class="fa fa-upload"></i></a> -->
                                                <!-- <a key="<?php echo $item->id; ?>" class="hapus btn btn-danger btn-rounded btn-ef btn-ef-5 btn-ef-5b mb-10"><span>Delete</span><i class="fa fa-trash"></i></a> -->

                                                <!-- <?php } ?> -->
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

    

</script>
<script>
    $(function(){
        $("#responsive-usage").dataTable();
    })

</script>
<script>
   /* $(function () {

      $("#btncari").click(function()

        {
            var parameter = $('#kode_kategori').val();
            var jenis_pengadaan = $('#jenis_pengadaan').val();
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'record_lelang/record_lelang/cari_gagal' ?>",  
            cache :false,  
          data :({key:parameter,jenis_pengadaan:jenis_pengadaan}), //mengambil dari variable
          //data :$(this).serialize(), // mengambil dari inputan form -> submit
          success : function(data) {  
            $(".box_ajax").html(data);                    
          },  
          error : function() {  
            alert("Data gagal dimasukkan.");  
          }  
        });

          return false;   


        });
    });*/

    function get_paket(){
        var nama_paket = $("#nama_paket").val();
        var jenis_pengadaan = $("#jenis_pengadaan").val();

        var url = "<?php echo base_url().'record_lelang/record_lelang/cari_gagal' ?>";
        $.ajax( {
           type:"POST", 
           url : url,  
           cache :false,  
           data :{nama_paket:nama_paket,jenis_pengadaan:jenis_pengadaan},
           beforeSend:function(){
              $(".tunggu").show();  
          },
          success : function(data) {  
            $("#cari_paket").html(data);
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
  });

    $("#cetak").click(function(){
      var nama_paket =$("#nama_paket").val();
      var jenis_pengadaan =$("#jenis_pengadaan").val();

      if(nama_paket && jenis_pengadaan==""){
          // alert("n");
          var search = "n";
          window.open("<?php echo base_url(). 'record_lelang/record_lelang/print_gagal/'?>"+search+"/"+nama_paket);
      }else if(jenis_pengadaan && nama_paket==""){
        // alert("j");
        var search = "j";
        window.open("<?php echo base_url(). 'record_lelang/record_lelang/print_gagal/'?>"+search+"/"+jenis_pengadaan);
    }else if(nama_paket && jenis_pengadaan){
        var search = "nj";
        window.open("<?php echo base_url(). 'record_lelang/record_lelang/print_gagal/'?>"+search+"/"+nama_paket+"/"+jenis_pengadaan);
        // alert("nj");
    }else{
        // alert("all");
        var search = "all";
        window.open("<?php echo base_url(). 'record_lelang/record_lelang/print_gagal/'?>"+search);
    }

});

</script>
<!--/ Application Content -->
