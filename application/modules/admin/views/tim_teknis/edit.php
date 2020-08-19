            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Tim Teknis</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/tim_teknis/content'?>">Tim Teknis</a>
                                </li>
                                <li>
                                    <a>Detail Tim Teknis</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/tim_teknis/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/tim_teknis/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Detail&nbsp</strong>Tim Teknis</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id'];
                                    $ambil_data = $this->db->get_where('master_tim_teknis',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/tim_teknis/simpan_ubah'?>">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama *</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $hasil_ambil_data->id?>" placeholder="Masukkan Nip" required="">
                                                <input type="text" name="nama" class="form-control" value="<?php echo $hasil_ambil_data->nama?>" placeholder="Masukkan Nip" required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="email" class="form-control" value="<?php echo $hasil_ambil_data->email?>" placeholder="Masukkan Nama"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Telepon *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="telp" class="form-control" placeholder="Jabatan"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->telp?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Alamat *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Pangkat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->alamat?>"
                                                required>
                                            </div>
                                        </div>

                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <button  class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa  fa-save">&nbsp</i>Ubah</button>    
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