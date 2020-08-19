
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Kelompok Kerja</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/kelompok_kerja/content'?>">Kelompok Kerja</a>
                                </li>
                                <li>
                                    <a>Tambah Kelompok Kerja</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/kelompok_kerja/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/kelompok_kerja/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Tambah&nbsp</strong>Kelompok Kerja</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">


                                    <form  style="" class="form-horizontal" name="data_form" role="form" id="data_form" data-parsley-validate method="post" action="<?php echo base_url().'admin/kelompok_kerja/simpan_tambah';?>">

                               <!--      <div class="form-group">
                                        <label class="col-sm-3 control-label">NIP *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>
                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>

                                    


                                    <hr class="line-dashed line-full" /> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pokja *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pokja" class="form-control" placeholder="Pokja"
                                            data-parsley-trigger="change"
                                            required>
                                        </select>
                                    </div>
                                </div>

                              <!--   <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pangkat *</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Jabatan *</label>
                                    <div class="col-sm-9">
                                           <!--  <select name="jabatan" class="form-control mb-10"
                                            data-parsley-trigger="change"
                                            required>
                                            <option value="">Select option...</option>
                                            <option value="foo">Foo</option>
                                            <option value="bar">Bar</option> 
                                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan"
                                            data-parsley-trigger="change"
                                            required>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">&nbsp;</label>
                                        <div class="col-sm-9">
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
