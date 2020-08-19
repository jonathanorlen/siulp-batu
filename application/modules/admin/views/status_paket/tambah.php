
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Status Paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/status_paket/content'?>">Status Paket</a>
                                </li>
                                <li>
                                    <a>Tambah Status Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/status_paket/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/status_paket/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Tambah&nbsp</strong>Status Paket</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                    <form  style="" class="form-horizontal" name="data_form" method="post" role="form" id="data_form" data-parsley-validate action="<?php echo base_url(). 'admin/status_paket/simpan_tambah'?>">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status Paket *</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="status" class="form-control" placeholder="Masukkan status_paket"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Keterangan *</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                                                data-parsley-trigger="change"
                                                required="">
                                            </div>
                                        </div>

                                    <!-- /tile body -->

                                    <!-- tile footer -->
                                    <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">&nbsp;</label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-save"></i> Simpan</button>    
                                            </div>
                                        </div>
                                        <!-- SUBMIT BUTTON -->

                                    </div>
                                    <!-- /tile footer -->

                                </form>
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
