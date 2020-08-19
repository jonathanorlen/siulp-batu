            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Input SPRPP</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/hasil_rapat'?>">Hasil Rapat</a>
                                </li>
                                <li>
                                    <a>Form SPRPP</a>
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
                                    <h1 class="custom-font"><strong>Form SPRPP &nbsp</strong><!-- Rapat --></h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body" >

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'=>$id));
                                    $hasil_ambil_data = $ambil_data->row();

                                    $data_ambil = $this->db->get_where('transaksi_data_paket',array('kode_paket' => $hasil_ambil_data->kode_paket));
                                    $hasil_data = $data_ambil->row();
                                    ?>
                                    <form class="form-horizontal"  name="data_form" id="data_form" role="form" method="post" data-parsley-validate >

                                        <input type="hidden" value="<?php echo $hasil_data->id?>" name="id">
                                        <center>
                                            <u><h3>SURAT PENETAPAN RENCANA PELAKSANAAN RENCANA PELAKSANAAN PENGADAAN</h3></u>
                                            <h4>Nomor : Sesuai Nomor surat PPK <?php echo $hasil_data->nomor_surat_sekretariat?> terkait</h4>
                                        </center>
                                        <br>
                                        <br>
                                        <br>
                                        <div style="font-size:17px;padding-left:10px;line-height:35px;padding-left:10px">

                                            Mempertimbangkan Berita Acara Hasil Koordinasi Kaji Ulang Hari :
                                            <br>
                                            <?php echo nama_hari(date("Y-m-d")); ?>,tanggal <?php echo TanggalIndo(date("Y-m-d")); ?>,yang bertandatangan di bawah ini :
                                            <br>
                                            Nama &nbsp: <?php echo $hasil_data->nama_ppk?>
                                            <br>
                                            NIP &nbsp&nbsp&nbsp&nbsp    : <?php echo $hasil_data->kode_ppk?>
                                            <br>
                                            PPK&nbsp&nbsp&nbsp&nbsp     : SKPD <?php echo $hasil_data->nama_satuan_kerja?>
                                            <br> 
                                            Menetapkan hasil kaji untuk Paket Pekerjaan <?php echo $hasil_data->nama_paket; ?>
                                            <br>
                                            dengan hasil sebagai berikut :
                                            <br>
                                            1 . Metode Pengadaan <?php echo $hasil_data->metode_pengadaan?>
                                            <br>
                                            2 .  Nilai HPS <?php echo format_rupiah($hasil_data->hps)?>
                                            <br>
                                            &nbsp&nbsp&nbsp&nbsp&nbsp(Dalam Penyusunan HPS telah sesuai dengan peraturan yang berlaku)
                                            <br>
                                            <div class="form-group">
                                                <label class="col-sm-2">3 . Pengumuman Lelang</label>
                                                <div class="col-sm-4">
                                                    <input type="date" name="tanggal_pengumuman_lelang" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="KAK">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2">4 . Ambising</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Tanggal Mulai Ambising</label>
                                                <div class="col-sm-3">
                                                    <input type="date" name="tanggal_mulai_ambising" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="tanggal_lelang">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Waktu Mulai Ambisisng</label>
                                                <div class="col-sm-3">
                                                    <input id="waktu"  type="text"  name="jam_mulai_ambising" value="<?php echo date('H:i:s');?>" class="form-control" placeholder="Masukkan Waktu Mulai " required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Tanggal Akhir Ambisisng</label>
                                                <div class="col-sm-3">
                                                    <input type="date" name="tanggal_akhir_ambising" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="tanggal_lelang">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Waktu Akhir Ambisisng</label>
                                                <div class="col-sm-3">
                                                    <input id="waktu_akhir"  type="text" value="<?php echo date('H:i:s');?>" name="jam_akhir_ambising" class="form-control" placeholder="Masukkan Waktu Selesai " required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3">5 . Jadwal Pemasukan Dokumen</label>

                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Tanggal Mulai</label>
                                                <div class="col-sm-3">
                                                    <input type="date" name="tanggal_mulai_pemasukan" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="tanggal_lelang">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1"></div>
                                                <label class="col-sm-2">Tanggal Akhir</label>
                                                <div class="col-sm-3">
                                                    <input type="date" name="tanggal_selesai_pemasukan" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="tanggal_lelang">
                                                </div>
                                            </div>

                                            Demikian penetapan saya ini,dibuat dengan sebenarnya untuk digunakan sebagaimana semestinya.


                                        </div>
                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
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

            </div>

        </section>
        <!--/ CONTENT -->
    </div>

    <script type="text/javascript">
        $("#data_form").submit( function() {    
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'rapat/rapat/simpan_srpp' ?>",  
            cache :false,  
            data :$(this).serialize(),
            success : function(data) {  
              $(".sukses").html(data);   
              setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
                base_url() . 'rapat/rapat/hasil_rapat/' ?>";},1000);              
          },  
          error : function() {  
              alert("Data gagal dimasukkan.");  
          }  
      });
          return false;                          
      });   
  </script>

  <script>
    $(function(){
        $("#waktu").timepicker({

          showMeridian: false,
          minuteStep : 10
      });

        $("#waktu_akhir").timepicker({

          showMeridian: false,
          minuteStep : 10
      });

    });
</script>