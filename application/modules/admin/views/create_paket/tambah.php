            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Create Paket</h2>

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
                                <li>
                                    <a>Tambah Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/create_paket/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Input Paket</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/tambah_manual'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Input Paket Manual</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                        
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Create&nbsp</strong>Paket</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                    <form class="form-horizontal" name="data_form" role="form" method="post" enctype="multipart/form-data" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>" >
                                        <!--  -->

                                        <div class="form-group">
                                        <label class="col-sm-2 control-label">No RUP *</label>
                                            <div class="col-sm-8">
                                                <input  id="no_rup" type="text" name="no_rup" class="form-control" placeholder="No RUP" autocomplete="off">
                                            </div>
                                        </div><hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Paket *</label>
                                            <div class="col-sm-8">
                                                <?php
                                                $user =  $this->session->userdata('astrosession');
                                                
                                                if($user->kode_jabatan=="002"){
                                                    $this->db->where('kode_satuan_kerja',$user->kode_skpd);
                                                }

                                                
                                                //echo $user->kode_skpd;
                                                $unit =$this->db->get('master_data_paket');
                                                $hasil_unit = $unit->result();
                                                ?>
                                                <select class="form-control" name="nama_paket" id="nama_paket" required>
                                                  <option selected="true"  value="">Pilih</option>
                                                  <?php foreach($hasil_unit as $item ){
                                                     ?>
                                                     <?php 

                                                     $dapat = $this->db->get_where('transaksi_data_paket',array('nama_paket'=>$item->nama_paket));
                                                     $dapat_data = $dapat->row();

                                                     $jumlah = count($dapat_data);

                                                     $pagu=$item->pagu;
                                                     $jenis_pengadaan=$item->jenis_pengadaan;
                                                     if(@$jenis_pengadaan=="Jasa Konsultansi" and (( @$pagu >= 50000000 and  @$pagu <= 200000000) or (@$pagu > 200000000))){
                                                       $lolos='1';
                                                   }else if(@$jenis_pengadaan=="Konstruksi" and ((@$pagu >= 200000000 and @$pagu <= 5000000000) or (@$pagu > 5000000000))){
                                                       $lolos='1';
                                                   }else if(@$jenis_pengadaan=="Barang" and ((@$pagu >= 200000000 and @$pagu <= 5000000000) or (@$pagu > 5000000000))){
                                                       $lolos='1';
                                                   }else if(@$jenis_pengadaan=="Jasa Lainnya" and ((@$pagu >= 200000000 and @$pagu <= 5000000000) or (@$pagu > 5000000000))){
                                                      $lolos='1';
                                                  }else{
                                                    $lolos='0';
                                                }

                                                if($jumlah < 1 and $lolos=='1'){
                                                 ?>

                                                 <option value="<?php echo $item->nama_paket;?>" <?php if (@$hasil_paket->nama_paket == $item->nama_paket){echo'selected="true"';} ?> ><?php echo $item->nama_paket;  ?></option>
                                                 <?php } } ?>
                                             </select>
                                         </div>
                                     </div> 

                                     <hr class="line-dashed line-full" />

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                                        <div class="col-sm-8" >
                                       <!--  <select class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                                            <option value="" selected="true">Pilih Bulan</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select> -->
                                        <input  type="date" id="tanggal_pengajuan" value="<?php echo date('Y-m-d')?>" name="tanggal_pengajuan" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
                                        data-parsley-trigger="change"
                                        required>
                                        <input hidden=""  type="hidden" id="tanggal_rencana_pengadaan" value="" name="tanggal_rencana_pengadaan" class="form-control" placeholder="Masukkan Tanggal Rencana Pengadaan"
                                        data-parsley-trigger="change"
                                        required>
                                        <input hidden="" type="hidden" id="tanggal_rencana_pekerjaan" value="" name="tanggal_rencana_pekerjaan" class="form-control" placeholder="Masukkan Tanggal Rencana Pekerjaan"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>


                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kegiatan *</label>
                                    <div class="col-sm-8">
                                        <input  id="kegiatan" type="text" name="kegiatan" class="form-control" placeholder="Kegiatan"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <!--<hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Paket *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="paket" class="form-control" placeholder="Paket"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>-->

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Volume *</label>
                                    <div class="col-sm-8">
                                        <input  type="text" id="volume" name="volume" class="form-control" placeholder="Volume"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Lokasi *</label>
                                    <div class="col-sm-8">
                                        <input  type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Lokasi"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pagu *</label>
                                    <div class="col-sm-8">
                                        <input onkeyup="get_rupiah()"  type="text" id="pagu" name="pagu" class="form-control" placeholder="Pagu"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                    <label class="col-sm-12 " style="margin-left:17%;font-size:15px;" id="rupiah_pagu"></label>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">HPS *</label>
                                    <div class="col-sm-8">
                                        <input onkeyup="get_kode_hps()" id="hps" type="text" name="hps" class="form-control" placeholder="HPS"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                    <label class="col-sm-2 " id="notif_hps"></label>
                                    <label class="col-sm-12 " style="margin-left:17%;font-size:15px;" id="rupiah_hps"></label>
                                </div>

                                <hr class="line-dashed line-full" />
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Satuan Kerja *</label> 
                                    <div class="col-sm-8">
                                        <input readonly type="text" id="satuan_kerja" name="satuan_kerja" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <input  type="hidden" id="kode_satuan_kerja" name="kode_satuan_kerja" class="form-control" placeholder="Kode Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                    </div> 
                                </div>

                                <?php if($user->kode_jabatan=="007"){ ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">PPK *</label>
                                    <div class="col-sm-8">
                                        <select  id="kode_ppk" name="kode_ppk" class="form-control" placeholder="Satuan Kerja">

                                        </select>
                                    </div>
                                </div> 
                                <?php } ?>
                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                    <div class="col-sm-8">
                                    
                                        <select  id="satuan_kerja" name="satuan_kerja" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>

                                        <option  selected="" value="">--Pilih SKPD--</option>
                                        <?php 
                                        $hasil = $this->db->get('master_satuan_kerja');
                                        $hasil_ambil = $hasil->result();

                                        foreach ($hasil_ambil as $item) {

                                            ?>

                                            <option value="<?php echo $item->kode_skpd;?>"><?php echo $item->unit_kerja;?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> -->

                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <!-- <label class="col-sm-2 control-label">Sumber Dana *</label> -->
                            <!-- <div class="col-sm-8">
                                <input  type="text" id="sumber_dana" name="sumber_dana" class="form-control" placeholder="Sumber dana"
                                data-parsley-trigger="change"
                                required>
                            </div> -->
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sumber Dana *</label>
                            <div class="col-sm-8">
                                <select  id="sumber_dana" name="sumber_dana" class="form-control" placeholder="Satuan Kerja"
                                data-parsley-trigger="change"
                                required>

                                <option id="sumber_dana" value="" selected="">Pilih Sumber Dana</option>
                                <?php 
                                $hasil = $this->db->get('master_sumber_dana');
                                $hasil_ambil = $hasil->result();

                                foreach ($hasil_ambil as $item) {

                                    ?>

                                    <option value="<?php echo $item->nama_sumber_dana;?>"><?php echo $item->nama_sumber_dana;?></option>

                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div> 

                    <hr class="line-dashed line-full" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Pengadaan*</label>
                        <div class="col-sm-8">
                                <!-- <input  type="text" id="jenis_pengadaan" name="jenis_pengadaan" class="form-control" placeholder="Jenis Pengadaan"
                                data-parsley-trigger="change"
                                required> -->
                                <select onchange="get_kode_hps()"  id="jenis_pengadaan" name="jenis_pengadaan" class="form-control" placeholder="Satuan Kerja"
                                data-parsley-trigger="change"
                                required>
                                <option value="Jasa Konsultansi">Jasa Konsultansi</option>
                                <option value="Konstruksi">Konstruksi</option>
                                <option value="Barang">Barang</option>
                                <option value="Jasa Lainnya">Jasa Lainnya</option>
                            </select>
                        </div>
                    </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
                            <div class="col-sm-8">
                                <select name="jenis_pengadaan" id="jenis_pengadaan" class="form-control" placeholder="Satuan Kerja"
                                data-parsley-trigger="change"
                                required>
                                <option selected="true" value="">Pilih</option>
                                <option value="konsultansi">Jasa Konsultansi</option>
                                <option value="konstruksi">Konstruksi</option>
                                <option value="barang">Barang / Jasa Lainnya</option>
                            </select>
                        </div>
                    </div> -->

                    <hr class="line-dashed line-full" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Metode Pengadaan*</label>
                        <div class="col-sm-8">
                            <input readonly type="text" id="metode_pengadaan" name="metode_pengadaan" class="form-control" placeholder="Metode Pengadaan"
                            data-parsley-trigger="change"
                            required>
                        </div>
                    </div>
                    <hr class="line-dashed line-full" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor Surat*</label>
                        <div class="col-sm-8">
                            <input  type="text" id="nomor_surat" name="nomor_surat" class="form-control" placeholder="Nomor Surat"
                            data-parsley-trigger="change"
                            required>
                        </div>
                    </div>
                   <!--  <div class="form-group">
                        <label class="col-sm-2 control-label">Metode Pengadaan *</label>
                        <div class="col-sm-8">
                            <select name="metode_pengadaan" class="form-control" placeholder="Satuan Kerja"
                            data-parsley-trigger="change"
                            required>
                            <option selected="true">Pilih</option>
                            <?php 
                            $hasil = $this->db->get('master_metode_pengadaan');
                            $hasil_ambil = $hasil->result();

                            foreach ($hasil_ambil as $item) {

                                ?>

                                <option value="<?php echo $item->id;?>"><?php echo $item->metode_pengadaan;?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->
                <div class="table-responsive">
                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
                        <input type="hidden" name="id" value="<?php //echo $hasil_data->id;?>">
                        <tr>
                            <th>Dokumen</th>
                            <th>Tipe File</th>
                            <th>Upload</th>
                        </tr>
                        <tr>
                            <td>DPA</td>
                            <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                            <td><input type="file" accept="application/pdf" name="dokumen_dpa" value=""/></td>

                        </tr>
                        <tr>
                            <td>RUP (Rencana Umum Pengadaan)</td>
                            <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                            <td><input type="file" accept="application/pdf" name="dokumen_rup" value=""/></td>

                        </tr>
                        <tr>
                            <td>KAK Paket Pekerjaan</td>
                            <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
                            <td><input type="file" accept="application/msword" name="dokumen_kak" value=""/></td>

                        </tr>
                        <tr>
                            <td>HPS</td>
                            <td><button disabled="" type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
                            <td><input type="file" accept="application/vnd.ms-excel" name="dokumen_hps" value=""/></td>

                        </tr>
                        <tr>
                            <td>Bukti Survey Harga</td>
                            <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                            <td><input accept="application/pdf" type="file" name="dokumen_survey" value=""/></td>

                        </tr>
                        <tr>
                            <td>Spesifikasi Teknis/Gambar</td>
                            <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                            <td><input accept="application/pdf" type="file" name="dokumen_spesifikasi" value=""/></td>

                        </tr>
                        <tr>
                            <td>BoQ (Bill of Quantity)</td>
                            <td><button disabled=""  type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
                            <td><input accept="application/vnd.ms-excel" type="file" name="dokumen_bill" value=""/></td>

                        </tr>
                        <tr>
                            <td>Rancangan Kontrak</td>
                            <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
                            <td><input type="file" accept="application/msword" name="dokumen_rancangan" value=""/></td>

                        </tr>
                    </table>
                </div>
                <div class="sukses"></div>
                <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                    <div class="form-group">
                        <div>
                            <!-- <a href="<?php echo base_url(). 'admin/create_paket/upload/'. $item->id;?>" title="Uploud" class="btn btn-primary btn-rounded btn-icon-only btn-ef btn-ef-7 btn-ef-7c mb-10" 
                                style="position:relative;padding:10px 15px;width: 100px;height: 30px;float: left;margin-left: 250px;">
                                <i class="fa fa-upload"  style="font-size:15px;position:relative;line-height:10px">
                                    Upload
                                </i></a> -->


                            </div>
                            <label class="col-sm-2 control-label">&nbsp;</label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-save"></i> Simpan</button>    
                            </div>
                        </div>
                        <!-- SUBMIT BUTTON -->
                        
                    </div>
                </form>

            </div>
            <!-- /tile body -->

            <!-- tile footer -->
            <!-- /tile footer -->

        </section>
    </div>
    
</div>


<!-- /tile -->

</section>

<script type="text/javascript">

    $("#nama_paket").change( function() {
        var nama_paket = $(this).val();
        $.ajax( {  
          type :"post",  
          url :"<?php echo base_url().'admin/create_paket/get_kode' ?>",  
          cache: false,
          dataType: 'json',
          data:{nama_paket: nama_paket},
          success : function(data) { 
            $('#tanggal_rencana_pengadaan').val(data.tanggal_rencana_pengadaan);
            $('#tanggal_rencana_pekerjaan').val(data.tanggal_rencana_pekerjaan);
            $('#kegiatan').val(data.kegiatan);
            $('#volume').val(data.volume);
            $('#lokasi').val(data.lokasi);
            $('#pagu').val(data.pagu);
            $('#hps').val(data.pagu);

            $('#jenis_pengadaan').val(data.jenis_pengadaan);
            $('#satuan_kerja').val(data.nama_satuan_kerja);
            $('#kode_satuan_kerja').val(data.kode_satuan_kerja);
            $('#sumber_dana').val(data.nama_sumber_dana);

            $("#metode_pengadaan").val('');
        //$("#hps").val('');
        get_rupiah();
        get_kode_hps();


        var kode_ppk = data.kode_satuan_kerja;
        $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'admin/create_paket/get_ppk' ?>",
            cache :false, 
            data :{kode_ppk:kode_ppk},
            success : function(data) {  

               $("#kode_ppk").html(data);


           }  

       });


    },  
});
        return false;
    });

// $("#data_form").submit( function() {
//     var metode_pengadaan=$('#metode_pengadaan').val();
//     var hps = $("#hps").val();
//     var jenis_pengadaan = $("#jenis_pengadaan").val();
//     if(jenis_pengadaan=="Jasa Konsultansi" && (( hps >= 50000000 &&  hps <= 200000000) || (hps > 200000000))){
//        simpan_tambah();
//    }else if(jenis_pengadaan=="Konstruksi" && ((hps >= 200000000 && hps <= 5000000000) || (hps > 5000000000))){
//     simpan_tambah();
// }else if(jenis_pengadaan=="Barang" && ((hps >= 200000000 && hps <= 5000000000) || (hps > 5000000000))){
//    simpan_tambah();
// }else if(jenis_pengadaan=="Jasa" && ((hps >= 200000000 && hps <= 5000000000) || (hps > 5000000000))){
//     simpan_tambah();
// }else{
//  $('.sukses').html('<div class="alert alert-danger">HPS Tidak Mencukupi.</div>');
// }
// return false;
// });

</script>

<script type="text/javascript">
    get_kode_hps();
    get_rupiah();
    function get_kode_hps(){
      var hps2 = $("#hps").val();
      var hps = parseInt(hps2);
      var pagu2 = $("#pagu").val();
      var pagu = parseInt(pagu2);
      var jenis_pengadaan = $("#jenis_pengadaan").val();

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/create_paket/get_kode_hps' ?>",
        cache :false, 
        data :{hps:hps,jenis_pengadaan:jenis_pengadaan},
        success : function(data) {  
            if(hps >  pagu){
                $("#notif_hps").html('<div class="alert alert-danger">HPS Melebihi Pagu.</div>');
                $("#form_submit").prop('disabled',true);
            }else{

                var hasil=data.split("|");
                $("#metode_pengadaan").val(hasil[0]);
                $("#rupiah_hps").html(hasil[1]);
                $("#notif_hps").html(hasil[2]);
                if(hasil[3]==0){
                    $("#form_submit").prop('disabled',true);
                }else{
                    $("#form_submit").prop('disabled',false);
                }
            }






        }  

    });

  }
  function get_rupiah(){
      var pagu = $("#pagu").val();

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/create_paket/get_rupiah' ?>",
        cache :false, 
        data :{rupiah:pagu},
        success : function(data) {  

           $("#rupiah_pagu").html(data);


       }  

   });

  }
// function simpan_tambah(){
//  $.ajax( {  
//   type :"post",  
//   url :"<?php echo base_url().'admin/create_paket/simpan_tambah';?>",  
//   cache: false,
//   dataType: 'json',
//   data :$('#data_form').serialize(),
//   success : function(data) { 
//     $(".sukses").html(data);   
//     setTimeout(function(){$('.sukses').html('');
//         window.location = "<?php echo base_url().'admin/create_paket/content'; ?>";},1000);              
// },  
// });
//  return false;

// }


</script>