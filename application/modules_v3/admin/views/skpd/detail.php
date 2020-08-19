            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>SKPD</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/skpd/content'?>">SKPD</a>
                                </li>
                                <li>
                                    <a >Detail SKPD</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/skpd/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/skpd/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Detail&nbsp</strong>SKPD</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id_satuan'];
                                    $ambil_data = $this->db->get_where('master_satuan_kerja',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="">

                                       <div class="form-group">
                                       <label class="col-sm-2 control-label">Kode Wilayah*</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="kode_skpd" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->kode_skpd?>" placeholder="Masukkan Nip" required="">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Unit Kerja*</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="unit_kerja" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->unit_kerja?>" placeholder="Masukkan Nip" required="">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kepala *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="kepala" class="form-control" value="<?php echo $hasil_ambil_data->kepala?>" placeholder="Masukkan Nama"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telepon *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="jabatan" class="form-control" placeholder="Jabatan"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->telp?>"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->alamat?>"
                                            required>
                                        </div>
                                    </div>
                                    <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">&nbsp;</label>
                                            <div class="col-sm-8">
                                                <button onclick="history.go(-1);" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa  fa-arrow-left">&nbsp</i>Kembali</button>    
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
<!--/ Application Content -->
