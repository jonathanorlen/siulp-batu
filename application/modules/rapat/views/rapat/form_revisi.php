            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Detail Hasil Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Hasil Rapat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Detail Hasil Rapat</a>
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
                                    <h1 class="custom-font"><strong>Detail Hasil &nbsp</strong>Rapat</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                   <?php
                                   $id = $this->uri->segment(4);
                                   $hasil =$this->db->get_where('transaksi_data_paket',array('id' => $id));
                                   $hasil_data = $hasil->row();

                                   ?>
                                   <div class="sukses"></div>
                                   <form class="form-horizontal" name="data_form" role="form" method="post" enctype="multipart/form-data" id="data_form" data-parsley-validate action="<?php echo base_url().'record_lelang/record_lelang/simpan_revisi';?>"  >
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kode Paket*</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="id" value="<?php echo $hasil_data->id;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                            <input readonly type="text" name="kode_paket" value="<?php echo $hasil_data->kode_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Paket*</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="nama_paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Masukkan Nama Paket">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="date" name="tanggal_pengajuan" value="<?php echo $hasil_data->tanggal_pengajuan;?>" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kegiatan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->kegiatan;?>" name="kegiatan" class="form-control" placeholder="Kegiatan"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Paket *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="paket" value="<?php echo $hasil_data->nama_paket;?>" class="form-control" placeholder="Paket"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Volume *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->volume;?>" name="volume" class="form-control" placeholder="Volume"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lokasi *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->lokasi;?>" name="lokasi" class="form-control" placeholder="Lokasi"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pagu *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" value="<?php echo $hasil_data->pagu;?>" name="pagu" class="form-control" placeholder="Pagu"
                                            data-parsley-trigger="change"
                                            >
                                            <label><?php echo format_rupiah($hasil_data->pagu);?></label>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">HPS *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="HPS" value="<?php echo $hasil_data->hps;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                            <label><?php echo format_rupiah($hasil_data->hps);?></label>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Satuan Kerja" value="<?php echo $hasil_data->nama_satuan_kerja;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sumber Dana *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Sumber Dana" value="<?php echo $hasil_data->nama_sumber_dana;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Jenis Pengadaan" value="<?php echo $hasil_data->jenis_pengadaan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Metode Pengadaan *</label>
                                        <div class="col-sm-8">
                                            <input readonly type="text" name="Metode Pengadaan" value="<?php echo $hasil_data->metode_pengadaan;?>" class="form-control" placeholder="HPS"
                                            data-parsley-trigger="change"
                                            >
                                        </div>
                                    </div>
                                    <?php
                                    $rapat=$hasil_data->kode_paket;

                                    $rapat2 =$this->db->get('transaksi_rapat' ,array('kode_paket' => $rapat));
                                    $hasil_rapat = $rapat2->row();
                                    ?>
                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">PPK *</label>
                                        <div class="col-sm-8">
                                            <select name="kode_ppk" class="form-control" placeholder="PPK"
                                            data-parsley-trigger="change"
                                            required>
                                            <option selected="true">Pilih</option>
                                            <?php 
                                            $PPK='PPK';
                                            $hasil = $this->db->get_where('master_user',array('nama_jabatan'=>$PPK,'group !='=>'root'));
                                            $hasil_ambil = $hasil->result();

                                            foreach ($hasil_ambil as $item) {

                                                ?>

                                                <option value="<?php echo $item->id;?>"><?php echo $item->nama;?></option>

                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal *</label>
                                    <div class="col-sm-8">
                                        <input  type="date" name="tanggal_rapat" value="<?php echo date("Y-m-d")?>" class="form-control" placeholder="HPS"
                                        data-parsley-trigger="change"
                                        >
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Agenda *</label>
                                    <div class="col-sm-8">
                                    <input  type="text" name="agenda" value="<?php echo $hasil_rapat->agenda;?>" class="form-control" placeholder="agenda"
                                        data-parsley-trigger="change"
                                        >
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tempat *</label>
                                    <div class="col-sm-8">
                                        <input  type="text" name="tempat" value="<?php echo $hasil_rapat->tempat;?>" class="form-control" placeholder="HPS"
                                        data-parsley-trigger="change"
                                        >
                                    </div>
                                </div>

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
                                        <td><input type="file" name="dokumen_dpa" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>RUP (Rencana Umum Pengadaan)</td>
                                        <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                                        <td><input type="file" name="dokumen_rup" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>KAK Paket Pekerjaan</td>
                                        <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
                                        <td><input type="file" name="dokumen_kak" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>HPS</td>
                                        <td><button disabled="" type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
                                        <td><input type="file" name="dokumen_hps" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Survey Harga</td>
                                        <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                                        <td><input type="file" name="dokumen_survey" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Spesifikasi Teknis/Gambar</td>
                                        <td><button disabled="" type="button" class="btn btn-danger mb-10">pdf / jpeg</button></td>
                                        <td><input type="file" name="dokumen_spesifikasi" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>BoQ (Bill of Quantity)</td>
                                        <td><button disabled=""  type="button" class="btn btn-success mb-10">Excel (xls,xlsx)</button></td>
                                        <td><input type="file" name="dokumen_bill" value=""/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Rancangan Kontrak</td>
                                        <td><button disabled="" type="button" class="btn btn-primary mb-10">Word (doc,docx)</button></td>
                                        <td><input type="file" name="dokumen_rancangan" value=""/></td>
                                        <td></td>
                                    </tr>
                                </table>
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
        $('#kegiatan').val(data.kegiatan);
        $('#volume').val(data.volume);
        $('#lokasi').val(data.lokasi);
        $('#pagu').val(data.pagu);
        $('#jenis_pengadaan').val(data.jenis_pengadaan);
        $('#satuan_kerja').val(data.nama_satuan_kerja);
        $('#sumber_dana').val(data.nama_sumber_dana);
    },  
});
    return false;
});

</script>

<script type="text/javascript">

   function get_kode_hps(){
      var hps = $("#hps").val();
      var jenis_pengadaan = $("#jenis_pengadaan").val();
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/create_paket/get_kode_hps' ?>",
        cache :false, 
        data :{hps:hps,jenis_pengadaan:jenis_pengadaan},
        success : function(data) {  
           $("#metode_pengadaan").val(data);


       }  

   });

  }

</script>