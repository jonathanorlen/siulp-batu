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
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'rapat/rapat/content'?>">Rapat</a>
                                </li>
                                <li>
                                    <a>Ubah Rapat</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'rapat/rapat/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'rapat/rapat/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Ubah&nbsp</strong>Rapat</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id_kelompok'];
                                    $ambil_data = $this->db->get_where('transaksi_rapat',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'rapat/rapat/simpan_ubah';?>">


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tanggal Rapat *</label>
                                            <div class="col-sm-9">
                                                <!-- <select name="pokja" class="form-control mb-10"
                                                data-parsley-trigger="change"
                                                required>
                                                <option value="">Select option...</option>
                                                <option value="foo">Foo</option>
                                                <option value="bar">Bar</option> -->
                                                <input type="date" value="<?php echo $hasil_ambil_data->tanggal_rapat?>" name="tanggal_rapat" class="form-control" placeholder="Tanggal Rapat"
                                                data-parsley-trigger="change"
                                                required>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Agenda *</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $hasil_ambil_data->agenda?>" name="agenda" class="form-control" placeholder="Masukkan Agenda"
                                            data-parsley-trigger="change"
                                            required>
                                            <input type="hidden" value="<?php echo $hasil_ambil_data->id?>" name="id" class="form-control" placeholder="Masukkan id"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Paket *</label>
                                        <div class="col-sm-9">
                                            <select name="kode_paket" class="form-control" placeholder="Kode Paket"
                                            data-parsley-trigger="change"
                                            required>
                                            <option selected="true">Pilih</option>
                                            <?php 
                                            $hasil = $this->db->get_where('transaksi_data_paket',array('status'=>'terima'));
                                            $hasil_ambil = $hasil->result();

                                            foreach ($hasil_ambil as $item) {

                                                ?>

                                                <option value="<?php echo $item->kode_paket;?>"><?php echo $item->nama_paket;?></option>

                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tempat *</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?php echo $hasil_ambil_data->tempat?>" name="tempat" class="form-control" placeholder="Masukkan Tempat"
                                        data-parsley-trigger="change"
                                        required>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full" />

                                

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Satuan Kerja *</label>
                                    <div class="col-sm-9">
                                        <select name="kode_satuan_kerja" class="form-control" placeholder="Satuan Kerja"
                                        data-parsley-trigger="change"
                                        required>
                                        <option selected="true">Pilih</option>
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


                            <div class="form-group">
                                <input type="hidden" class="form-control" id="unit_kerja" name="unit_kerja" placeholder="Nama Satuan Kerja" />
                            </div> 

                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pokja *</label>
                                <div class="col-sm-9">
                                    <select name="kode_pokja" class="form-control" placeholder="Pokja"
                                    data-parsley-trigger="change"
                                    required>
                                    <option selected="true">Pilih</option>
                                    <?php 
                                    $hasil = $this->db->get('master_kelompok_kerja');
                                    $hasil_ambil = $hasil->result();

                                    foreach ($hasil_ambil as $item) {

                                        ?>

                                        <option value="<?php echo $item->id;?>"><?php echo $item->pokja;?></option>

                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <hr class="line-dashed line-full" />



                        <div class="form-group">
                            <label class="col-sm-3 control-label">PPK *</label>
                            <div class="col-sm-9">
                                <select name="kode_ppk" class="form-control" placeholder="PPK"
                                data-parsley-trigger="change"
                                required>
                                <option selected="true">Pilih</option>
                                <?php 
                                $PPK='PPK';
                                $hasil = $this->db->get_where('master_user',array('nama_jabatan'=>$PPK,'group !='=>'root'));
                                $hasil_ambil = $hasil->result();

                                foreach ($hasil_ambil as $item) {

                                    ?>

                                    <option value="<?php echo $item->id;?>"><?php echo $item->nama;?></option>

                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <hr class="line-dashed line-full" />

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sekretariat *</label>
                        <div class="col-sm-9">
                            <select name="kode_sekretariat" class="form-control" placeholder="PPK"
                            data-parsley-trigger="change"
                            required>
                            <option selected="true">Pilih</option>
                            <?php 
                            $sekretariat='Sekretariat';
                            $hasil = $this->db->get_where('master_user',array('nama_jabatan'=>$sekretariat,'group !='=>'root'));
                            $hasil_ambil = $hasil->result();

                            foreach ($hasil_ambil as $item) {

                                ?>

                                <option value="<?php echo $item->id;?>"><?php echo $item->nama;?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
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