
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
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/skpd/content'?>">SKPD</a>
                                </li>
                                <li>
                                    <a>Tambah SKPD</a>
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
                                    <h1 class="custom-font"><strong>Tambah&nbsp</strong>SKPD</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                <form  style="" class="form-horizontal" name="data_form" role="form" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/skpd/simpan_tambah'?>" method="post">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kode wilayah*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kode_skpd" class="form-control" placeholder="Kode SKPD"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Unit kerja*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kepala *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kepala" class="form-control" placeholder="Kepala"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Telp *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="telp" class="form-control" placeholder="Telepon"
                                                data-parsley-trigger="change"
                                                data-parsley-type="digits"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Alamat *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
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
    <!--/ Application Content -->
