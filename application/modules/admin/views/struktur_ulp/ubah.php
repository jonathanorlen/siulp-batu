            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Struktur ULP</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"<i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/struktur_ulp/content'?>">Struktur ULP</a>
                                </li>
                                <li>
                                    <a >Ubah Struktur ULP</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/struktur_ulp/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/struktur_ulp/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Ubah&nbsp</strong>Struktur ULP</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id'];
                                    $ambil_data = $this->db->get_where('master_struktur_ulp',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="form1" data-parsley-validate action="<?php echo base_url().'admin/struktur_ulp/simpan_ubah';?>">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nip *</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $hasil_ambil_data->id?>" placeholder="Masukkan Nip" required="">
                                                <input type="text" name="nip" class="form-control" value="<?php echo $hasil_ambil_data->nip?>" placeholder="Masukkan Nip" required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" class="form-control" value="<?php echo $hasil_ambil_data->nama?>" placeholder="Masukkan Nama"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jabatan *</label>
                                            <!-- <div class="col-sm-8">
                                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->jabatan?>"
                                                required>
                                            </div> -->
                                            <div class="col-sm-8">
                                                 <select id="jabatan" name="jabatan" class="form-control" data-parsley-trigger="change" required>
                                                    <option  value="">-- Pilih Jabatan --</option>
                                                    <option  <?php if($hasil_ambil_data->jabatan=="KEPALA ULP"){echo "selected";}?> value="KEPALA ULP">KEPALA ULP</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="SEKRETARIS"){echo "selected";}?> value="SEKRETARIS">SEKRETARIS</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN"){echo "selected";}?> value="KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN">KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PERENCANAAN"){echo "selected";}?> value="KOORDINATOR PERENCANAAN">KOORDINATOR PERENCANAAN</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR HUKUM DAN SANGGAH"){echo "selected";}?> value="KOORDINATOR HUKUM DAN SANGGAH">KOORDINATOR HUKUM DAN SANGGAH</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PENELITIAN DAN PENGEMBANGAN"){echo "selected";}?> value="KOORDINATOR PENELITIAN DAN PENGEMBANGAN">KOORDINATOR PENELITIAN DAN PENGEMBANGAN</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="PENGARAH"){echo "selected";}?> value="PENGARAH">PENGARAH</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="PENANGGUNG JAWAB"){echo "selected";}?> value="PENANGGUNG JAWAB">PENANGGUNG JAWAB</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR BIDANG"){echo "selected";}?> value="KOORDINATOR BIDANG">KOORDINATOR BIDANG</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KETUA POKJA"){echo "selected";}?> value="KETUA POKJA">KETUA POKJA</option>
                                                     <option <?php if($hasil_ambil_data->jabatan=="SEKRETARIS POKJA"){echo "selected";}?> value="SEKRETARIS POKJA">SEKRETARIS POKJA</option>
                                                     <option <?php if($hasil_ambil_data->jabatan=="ANGGOTA POKJA"){echo "selected";}?> value="ANGGOTA POKJA">ANGGOTA POKJA</option>
                                                     <option <?php if($hasil_ambil_data->jabatan=="STAF PENDUKUNG"){echo "selected";}?> value="STAF PENDUKUNG">STAF PENDUKUNG</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="lain"){echo "selected";}?> value="lain">LAIN</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />
                                        
                                        <div id="lain">
                                          <div class="form-group">
                                        <label class="col-sm-2 control-label">Jabatan Lain *</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="<?php echo $hasil_ambil_data->jabatan_lain ; ?>" name="jabatan_lain" class="form-control" placeholder="Masukkan Jabatan Lain"
                                            data-parsley-trigger="change" />
                                        </div>
                                    </div>
                                    
                                    <hr class="line-dashed line-full" />
                                
                                </div>
                                
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pangkat *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->pangkat?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />
                                        
                                        <div class="form-group">
                                    <label class="col-sm-2 control-label">Jabatan BLP *</label>
                                   <!--  <div class="col-sm-8">
                                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan"
                                        data-parsley-trigger="change"
                                        required>
                                    </div> -->
                                     <div class="col-sm-8">
                                    <select id="jabatan_blp" name="jabatan_blp" class="form-control" data-parsley-trigger="change">
                                        <option value="">-- Pilih Jabatan BLP--</option>
                                        <option <?php if($hasil_ambil_data->jabatan_blp=="011"){echo "selected";}?> value="011">KEPALA BLP</option>
                                        <option <?php if($hasil_ambil_data->jabatan_blp=="008"){echo "selected";}?> value="008">SUBAG PERENCANAAN DAN PENATA USAHAAN</option>
                                        <option <?php if($hasil_ambil_data->jabatan_blp=="009"){echo "selected";}?> value="009">SUBAG PENGADAAN BARANG / JASA</option>
                                        <option <?php if($hasil_ambil_data->jabatan_blp=="010"){echo "selected";}?> value="010">SUBAG PEMBINAAN DAN PENGEMBANGAN</option>
                                    </select>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />
                                
                                
                                
                                <?php
                                    $user = $this->db->get_where('master_user',array('nip'=>$hasil_ambil_data->nip));
                                    $hasil_user = $user->row();
                                ?>
                                
                                <input type="hidden" name="id_user" class="form-control" value="<?php echo @$hasil_user->id?>" placeholder="Masukkan Nip" required="">
                                
                                <div id="blp">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username *</label>
                                    <div class="col-sm-8">
                                        <input value="<?php echo @$hasil_user->uname; ?>" type="text" name="username" class="form-control" placeholder="Username"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>
                                
                                  <hr class="line-dashed line-full" />
                                  
                                
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Password *</label>
                                    <div class="col-sm-8">
                                        <input value="<?php echo paramDecrypt(@$hasil_user->upass); ?>" id="password" type="password" name="password" class="form-control" placeholder="Password"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>
                                
                                  <hr class="line-dashed line-full" />
                                  
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label">Konfirmasi Password *</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="konfirm_password" class="form-control" placeholder="Password"
                                         data-parsley-trigger="change"
                                         data-parsley-range="[4, 20]"
                                         data-parsley-equalto="#password"

                                        required>
                                    </div>
                                </div>
                                
                                  <hr class="line-dashed line-full" />
                                </div>
                                

                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-save">&nbsp</i>Ubah</button>    
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
<?php if($hasil_ambil_data->jabatan=="lain"){ ?>
$("#lain").show();
<?php }else{ ?>
$("#lain").hide();
<?php } ?>

<?php if($hasil_ambil_data->jabatan_blp!=""){ ?>
$("#blp").show();
<?php }else{ ?>
$("#blp").hide();
<?php } ?>
$("#jabatan").change(function(){
    var jabatan = $("#jabatan").val();
    if(jabatan=="lain"){
        $("#lain").show();
    }else{
        $("#lain").hide();
    }
})

$("#jabatan_blp").change(function(){
    var jabatan_blp = $("#jabatan_blp").val();
    if(jabatan_blp!=""){
        $("#blp").show();
    }else{
        $("#blp").hide();
    }
})

$(window).load(function(){
                $('#form1').parsley().subscribe('parsley:field:validate', function () {
                    
                });

                
            });

</script>