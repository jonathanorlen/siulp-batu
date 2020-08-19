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
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/struktur_ulp/simpan_ubah';?>">

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
                                                <select name="jabatan" class="form-control" data-parsley-trigger="change" required>
                                                    <option>-- Pilih Jabatan --</option>
                                                    <option  <?php if($hasil_ambil_data->jabatan=="KEPALA ULP"){echo "selected";}?> value="KEPALA ULP">KEPALA ULP</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="SEKRETARIS"){echo "selected";}?> value="SEKRETARIS">SEKRETARIS</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN"){echo "selected";}?> value="KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN">KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PERENCANAAN"){echo "selected";}?> value="KOORDINATOR PERENCANAAN">KOORDINATOR PERENCANAAN</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR HUKUM DAN SANGGAH"){echo "selected";}?> value="KOORDINATOR HUKUM DAN SANGGAH">KOORDINATOR HUKUM DAN SANGGAH</option>
                                                    <option <?php if($hasil_ambil_data->jabatan=="KOORDINATOR PENELITIAN DAN PENGEMBANGAN"){echo "selected";}?> value="KOORDINATOR PENELITIAN DAN PENGEMBANGAN">KOORDINATOR PENELITIAN DAN PENGEMBANGAN</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pangkat *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->pangkat?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

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