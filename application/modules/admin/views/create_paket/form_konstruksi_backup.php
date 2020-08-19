<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

    <div class="page page-hz-menu-layout">

        <div class="pageheader">

            <h2>Check list 10</h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo base_url().'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'admin/data_verifikasi/ceklist10#'?>">Hasil Rapat</a>
                    </li>
                    <li>
                        <a>Form Check List 10</a>
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
                        <h1 class="custom-font"><strong>Form Check List 10 &nbsp</strong><!-- Rapat --></h1>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body" >

                        <div class="sukses"></div>
                        <?php 
                        $id = $this->uri->segment(4);
                        $get = $this->db->get_where('transaksi_data_paket',array('id'=>$id));
                        $hasil_get = $get->row();

                        $get_skpd = $this->db->get_where('master_satuan_kerja',array('kode_skpd'=>$hasil_get->kode_satuan_kerja));
                        $hasil_get_skpd = $get_skpd->row();

                        

                        ?>
                        <form id="data_form" class="form-horizontal"  name="data_form" role="form" method="post" data-parsley-validate  >

                            <center>
                                <p><label style="font-weight:bold ">CHECK LIST USULAN DOKUMEN PENGADAAAN 10</label></p>
                                <br>
                            </center>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-1"> 

                                    </div>
                                    <div class="col-sm-4"> 
                                        <label>Sudah terima dari</label>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label>:&nbsp&nbsp<?php echo $hasil_get->nama_ppk;?></label>
                                        <input type="hidden" name="id" value="<?php echo $hasil_get->id;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-1"> 

                                    </div>
                                    <div class="col-sm-4"> 
                                        <label>Dokumen paket pekerjaan</label>
                                    </div>
                                    <div class="col-sm-7"> 
                                        <label>:&nbsp&nbsp<?php echo $hasil_get->nama_paket;?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-1"> 

                                    </div>
                                    <div class="col-sm-4"> 
                                        <label>SPKD</label>
                                    </div>
                                    <div class="col-sm-7"> 
                                        <label>:&nbsp&nbsp<?php echo $hasil_get_skpd->unit_kerja;?></label>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">

                                <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                    <thead>
                                        <tr class="info">
                                            <th width="2%">No</th>
                                            <th>Uraian</th>
                                            <th><center>hardcopy</center></th>
                                            <th><center>softcopy</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>DPA</td>
                                            <td><center><input type="checkbox" value="dpa" name="hardcopy_dpa"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->select_max('id');
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','dpa');
                                                    $cek_dokumen_dpa = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_dpa = $cek_dokumen_dpa->row();

                                                    $dpa = $this->db->get_where('dokumen_paket',array('id'=>$hasil_cek_dokumen_dpa->id));
                                                    $hasil_dpa = $dpa->row();
                                                    
                                                    if($hasil_dpa){echo 'checked';} ?> value="dpa" name="softcopy_dpa">

                                                </center>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>RUP (Rencana Umum Pengadaan)</td>
                                            <td><center><input type="checkbox" value="rup" name="hardcopy_rup"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','rup');
                                                    $cek_dokumen_rup = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_rup = $cek_dokumen_rup->row();
                                                    if($hasil_cek_dokumen_rup){echo 'checked';} ?> value="rup" name="softcopy_rup">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>KAK Paket Pekerjaan</td>
                                            <td><center><input type="checkbox" value="kak" name="hardcopy_kak"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','kak');
                                                    $cek_dokumen_kak = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_kak = $cek_dokumen_kak->row();
                                                    if($hasil_cek_dokumen_kak){echo 'checked';} ?> value="kak" name="softcopy_kak">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>HPS</td>
                                            <td><center><input type="checkbox" value="hps" name="hardcopy_hps"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','hps');
                                                    $cek_dokumen_hps = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_hps = $cek_dokumen_hps->row();
                                                    if($hasil_cek_dokumen_hps){echo 'checked';} ?> value="hps" name="softcopy_hps">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Bukti Survey Harga</td>
                                            <td><center><input type="checkbox" value="bsh" name="hardcopy_bsh"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','survey');
                                                    $cek_dokumen_bsh = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_bsh = $cek_dokumen_bsh->row();
                                                    if($hasil_cek_dokumen_bsh){echo 'checked';} ?> value="bsh" name="softcopy_bsh">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Spesifikasi Teknis/Gambar Rencana</td>
                                            <td><center><input type="checkbox" value="stg" name="hardcopy_stg"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','spesifikasi');
                                                    $cek_dokumen_stg = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_stg = $cek_dokumen_stg->row();
                                                    if($hasil_cek_dokumen_stg){echo 'checked';} ?> value="stg" name="softcopy_stg">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>RKS</td>
                                            <td><center><input type="checkbox" value="rks" name="hardcopy_rks"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','rks');
                                                    $cek_dokumen_rks = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_rks = $cek_dokumen_rks->row();
                                                    if($hasil_cek_dokumen_rks){echo 'checked';} ?> value="rks" name="softcopy_rks">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>BoQ (Bill of Quality)</td>
                                            <td><center><input type="checkbox" value="boq" name="hardcopy_boq"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','bill');
                                                    $cek_dokumen_boq = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_boq = $cek_dokumen_boq->row();
                                                    if($hasil_cek_dokumen_boq){echo 'checked';} ?> value="boq" name="softcopy_boq">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Time Schedule</td>
                                            <td><center><input type="checkbox" value="ts" name="hardcopy_ts"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','ts');
                                                    $cek_dokumen_ts = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_ts = $cek_dokumen_ts->row();
                                                    if($hasil_cek_dokumen_ts){echo 'checked';} ?> value="ts" name="softcopy_ts">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Rancangan Kontrak</td>
                                            <td><center><input type="checkbox" value="rank" name="hardcopy_rank"></center></td>
                                            <td>
                                                <center>
                                                    <input type="checkbox" <?php
                                                    $this->db->where('kode_paket',$hasil_get->kode_paket);
                                                    $this->db->where('jenis_dokumen','rancangan');
                                                    $cek_dokumen_rank = $this->db->get('dokumen_paket');
                                                    $hasil_cek_dokumen_rank = $cek_dokumen_rank->row();
                                                    if($hasil_cek_dokumen_rank){echo 'checked';} ?> value="rank" name="softcopy_dpa">

                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Kelengkapan Surat</td>
                                            <td></center></td>
                                            <td></center></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-6"> 
                                        <label>Kelengkapan dokumen <b>kontruksi</b> yang diterima tanggal <?php echo tanggalindo(date('Y-m-d'));?></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <table style="width:100%; border-collapse: collapse;border: 1px solid black;">
                                <tr style="border-collapse: collapse;border: 1px solid black;">
                                    <td style="width:50%;text-align:center;border: 1px solid black;">DILENGKAPI KEMBALI</td>
                                    <td style="width:50%;text-align:center;border: 1px solid black;">DITERIMA UNTUK DI LANJUTKAN</td>
                                </tr>
                            </table>
                            <div class="tile-footer text-center bg-tr-white lter dvd dvd-top form-group">
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
<script>
    $("#data_form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/create_paket/simpan_form_konstruksi' ?>",  
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