            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Form Pengadaan</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Rapat Kaji Ulang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/data_verifikasi/content'?>">Verifikasi </a>
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
                                    $ambil_data = $this->db->get_where('transaksi_data_paket',array('id'=>$id));
                                    $hasil_ambil_data = $ambil_data->row();

                                    $dapat_data = $this->db->get_where('master_satuan_kerja',array('kode_skpd' => $hasil_ambil_data->kode_satuan_kerja));
                                    $tampil_data = $dapat_data->row();

                                    $ambil_dokumen = $this->db->get_where('dokumen_paket',array('kode_paket' => $hasil_ambil_data->kode_paket));
                                    $tampil_dokumen = $ambil_data->result();
                                    ?>
                                    <form class="form-horizontal"  name="data_form" id="data_form" role="form" method="post" data-parsley-validate>
                                        <input type="hidden" name="id" value="<?php echo $hasil_ambil_data->id?>">
                                        <center style="font-size:18px;font-weight:bold">
                                            CHECKLIST USULAN DOKUMEN PENGADAAN
                                        </center>
                                        <br>
                                        <br>
                                        <table width="100%" style="line-height:35px" >
                                            <tr>
                                                <td style="width:30%">Sudah terima dari</td>
                                                <td style="width:5%;text-align:center;">:</td>
                                                <td><?php echo $hasil_ambil_data->nama_ppk?></td>
                                            </tr>
                                            <tr>
                                                <td>Dokumen paket pekerjaan</td>
                                                <td style="text-align:center;">:</td>
                                                <td><?php echo $hasil_ambil_data->nama_paket?></td>
                                            </tr>
                                            <tr>
                                                <td>SKPD</td>
                                                <td style="text-align:center;">:</td>
                                                <td ><?php echo $tampil_data->unit_kerja?></td>
                                            </tr>
                                        </table>
                                        
                                        <br>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                        <thead>
                                            <tr class="info">
                                                <td>
                                                    No
                                                </td>
                                                <td>
                                                    Uraian
                                                </td>
                                                <td>
                                                    hardcopy
                                                </td>
                                                <td>
                                                    softcopy
                                                </td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                  <td>1</td>
                                  <td>DPA</td>
                                  <td><center><input type="checkbox" value="dpa" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','dpa');
                                      $cek_dokumen_dpa = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_dpa = $cek_dokumen_dpa->row();
                                      $dpa = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_dpa->id));
                                                    $hasil_dpa = $dpa->row();

                                                    if($hasil_dpa){echo 'checked';} ?> value="dpa" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>2</td>
                                  <td>RUP (Rencana Umum Pengadaan)</td>
                                  <td><center><input type="checkbox" value="rup" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','rup');
                                      $cek_dokumen_rup = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_rup = $cek_dokumen_rup->row();
                                      $rup = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_rup->id));
                                                    $hasil_rup = $rup->row();
                                                    if($hasil_rup){echo 'checked';} ?> value="rup" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>3</td>
                                  <td>KAK Paket Pekerjaan</td>
                                  <td><center><input type="checkbox" value="kak" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','kak');
                                      $cek_dokumen_kak = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_kak = $cek_dokumen_kak->row();
                                      $kak = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_kak->id));
                                                    $hasil_kak = $kak->row();
                                                    if($hasil_kak){echo 'checked';} ?> value="kak" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>4</td>
                                  <td>HPS</td>
                                  <td><center><input type="checkbox" value="hps" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','hps');
                                      $cek_dokumen_hps = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_hps = $cek_dokumen_hps->row();
                                      $hps = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_hps->id));
                                                    $hasil_hps = $hps->row();
                                                    if($hasil_hps){echo 'checked';} ?> value="hps" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>5</td>
                                  <td>BoQ (Bill of Quality)</td>
                                  <td><center><input type="checkbox" value="boq" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','bill');
                                      $cek_dokumen_boq = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_boq = $cek_dokumen_boq->row();
                                      $boq = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_boq->id));
                                                    $hasil_boq = $boq->row();
                                                    if($hasil_boq){echo 'checked';} ?> value="boq" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>6</td>
                                  <td>Rancangan Kontrak</td>
                                  <td><center><input type="checkbox" value="rank" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" <?php
                                       $this->db->select_max('id');
                                      $this->db->where('kode_paket',$hasil_ambil_data->kode_paket);
                                      $this->db->where('jenis_dokumen','rancangan');
                                      $cek_dokumen_rank = $this->db->get('dokumen_paket');
                                      $hasil_cek_dokumen_rank = $cek_dokumen_rank->row();
                                      $rank = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_rank->id));
                                                    $hasil_rank = $rank->row();
                                                    if($hasil_rank){echo 'checked';} ?> value="rank" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            <tr>
                                  <td>7</td>
                                  <td>Surat Pengantar</td>
                                  <td><center><input type="checkbox" value="kels" name="hardcopy[]"></center></td>
                                  <td>
                                    <center>
                                      <input type="checkbox" value="kels" name="softcopy[]">

                                    </center>
                                  </td>
                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        <br>
                                        <div style="font-size:18px">Kelengkapan dokumen <span style="font-weight:bold">jasa konsultasi</span> yang diterima tanggal <?php echo tanggalindo(date("Y-m-d"))?></div>
                                        <br>
                                        <table border="1px" width="100%">
                                            <tr style="height:50px;">
                                            <?php if($hasil_ambil_data->posisi == 'Lanjut Lelang'){?>
                                                <td style="font-weight:bold;font-size:18px;padding-left:10px;width:50%">DITERIMA UNTUK DILANJUTKAN</td>
                                            <?php }?>
                                            <?php if($hasil_ambil_data->posisi == 'Revisi Dokumen'){?>
                                                <td style="font-weight:bold;font-size:18px;padding-left:10px;width:50%">DILENGKAPI KEMBALI</td>
                                            <?php }?>
                                            </tr>
                                        </table>

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
            url : "<?php echo base_url() . 'admin/create_paket/simpan_form_jasa_konsultasi' ?>",  
            cache :false,  
            data :$(this).serialize(),
            success : function(data) {  
              $(".sukses").html(data);   
              setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
                base_url() . 'admin/create_paket/content/' ?>";},1000);          
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