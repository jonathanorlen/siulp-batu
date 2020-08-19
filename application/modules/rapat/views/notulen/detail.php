            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Rapat</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Jadwal Rapat</a>
                                </li>
                                <li>
                                    <a>Detail Jadwal Rapat</a>
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
                                    <h1 class="custom-font"><strong>Detail Jadwal &nbsp</strong>Rapat</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id'];
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'rapat/notulen/tambah_notulen';?>">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Rapat</label>
                                            <div class="col-sm-8">
                                            <input type="hidden" name="id" class="form-control"  value="<?php echo $hasil_ambil_data->id?>" placeholder="Masukkan Tanggal Rapat" >
                                                <input disabled="" type="text" name="tanggal_rapat" class="form-control" disabled="" value="<?php echo tanggalindo($hasil_ambil_data->tanggal_rapat)?>" placeholder="Masukkan Tanggal Rapat" required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Agenda *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="agenda" class="form-control" value="<?php echo $hasil_ambil_data->agenda?>" placeholder="Masukkan Agenda"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Paket *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="paket" class="form-control" placeholder="Masukkan Paket"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_paket?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tempat *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->tempat?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_satuan_kerja" class="form-control" placeholder="Masukkan Satuan Kerja"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_satuan_kerja?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Pokja *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="pokja" class="form-control" placeholder="Masukkan Pokja"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_pokja?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">PPK *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_ppk" class="form-control" placeholder="Masukkan PPK"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_ppk?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Sekretariat *</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="nama_sekretariat" class="form-control" placeholder="Masukkan Sekretariat"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_sekretariat?>"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Notulen</label>
                                            <div class="col-sm-8">
                                                <textarea rows="5" type="text" name="notulensi" class="form-control" placeholder="Masukkan Sekretariat"
                                                data-parsley-trigger="change" 
                                                required>

                                                </textarea>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa  fa-save">&nbsp</i>Save</button>    
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