            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>Create paket</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Data Paket</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Data Paket</a>
                                </li>
                                <li>
                                    <a>Tambah Paket</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/create_paket/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                        <a href="<?php echo base_url() . 'admin/create_paket/import'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-greensea btn-ef-2a mb-10"><i class="fa fa-file-excel-o"></i> Import Data Paket</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Create&nbsp</strong>Paket</h1>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">

                            <div class="sukses"></div>
                            <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/create_paket/simpan_tambah';?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Paket*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_paket" class="form-control" placeholder="Masukkan Nama Paket" required="">
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal Pengajuan *</label>
                                    <div class="col-sm-8">
                                        <input value="<?php echo date("Y-m-d"); ?>" type="date" name="tanggal_pengajuan" class="form-control" placeholder="Masukkan Tanggal Pengajuan"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kegiatan *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <!--<hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Paket *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="paket" class="form-control" placeholder="Paket"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>-->

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Volume *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="volume" class="form-control" placeholder="Volume"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Lokasi *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="lokasi" class="form-control" placeholder="Lokasi"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pagu *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="pagu" class="form-control" placeholder="Pagu"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Pengadaan *</label>
                                    <div class="col-sm-8">
                                        <select name="jenis_pengadaan" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <option selected="true" value="">--Pilih Jenis Pengadaan--</option>
                                            <option value="konsultansi">Jasa Konsultansi</option>
                                            <option value="konstruksi">Konstruksi</option>
                                            <option value="barang">Barang / Jasa Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">HPS *</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="hps" class="form-control" placeholder="HPS"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Satuan Kerja *</label>
                                    <div class="col-sm-8">
                                        <select name="satuan_kerja" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <option selected="" value="">--Pilih SKPD--</option>
                                        <?php 
                                          $hasil = $this->db->get('master_satuan_kerja');
                                          $hasil_ambil = $hasil->result();

                                          foreach ($hasil_ambil as $item) {

                                        ?>

                                        <option value="<?php echo $item->id;?>"><?php echo $item->unit_kerja;?></option>

                                        <?php
                                      }
                                        ?>
                                        </select>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sumber Dana *</label>
                                    <div class="col-sm-8">
                                        <select name="sumber_dana" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <option value="" selected="">--Pilih Sumber Dana--</option>
                                        <?php 
                                          $hasil = $this->db->get('master_sumber_dana');
                                          $hasil_ambil = $hasil->result();

                                          foreach ($hasil_ambil as $item) {

                                        ?>

                                        <option value="<?php echo $item->id;?>"><?php echo $item->nama_sumber_dana;?></option>

                                        <?php
                                      }
                                        ?>
                                        </select>
                                    </div>
                                </div>


                                <hr class="line-dashed line-full" />

                                <!--<div class="form-group">
                                    <label class="col-sm-2 control-label">Metode Pengadaan *</label>
                                    <div class="col-sm-8">
                                        <select name="metode_pengadaan" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <option disabled="">PILIH</option>
                                        <?php 
                                          $hasil = $this->db->get('master_metode_pengadaan');
                                          $hasil_ambil = $hasil->result();

                                          foreach ($hasil_ambil as $item) {

                                        ?>

                                        <option value="<?php echo $item->id;?>"><?php echo $item->metode_pengadaan;?></option>

                                        <?php
                                      }
                                        ?>
                                        </select>
                                    </div>
                                </div>-->

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