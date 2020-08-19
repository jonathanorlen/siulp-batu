            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">

                        <h2>User</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/user/content'?>">user</a>
                                </li>
                                <li>
                                    <a>Detail User</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    <div class="">
                        <a href="<?php echo base_url() . 'admin/user/tambah'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10"><i class="fa fa-plus"></i> Tambah</button></a>
                        <a href="<?php echo base_url() . 'admin/user/content'?>"><button class="btn btn-md btn-rounded btn-ef btn-ef-2 btn-ef-2-success btn-ef-2a mb-10"><i class="fa fa-list"></i> Daftar</button></a>
                    </div>

                    <!-- tile -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Detail&nbsp</strong>User</h1>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="sukses"></div>
                                    <?php 
                                    $id = $_GET['id'];
                                    $ambil_data = $this->db->get_where('master_user',array('id'  =>  $id));
                                    $hasil_ambil_data = $ambil_data->row();
                                    ?>
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="">


                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Jabatan *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nama_jabatan" class="form-control" id="jabatan" placeholder="Masukkan Pangkat"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_jabatan?>"
                                            required>
                                        </div>
                                    </div>

                                    <div class="form-group" id="ppk">
                                        <label class="col-sm-2 control-label">SKPD *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nama_jabatan" class="form-control" id="jabatan" placeholder="Masukkan Pangkat"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_skpd?>"
                                            required>
                                        </div>
                                    </div>

                                    <div class="form-group" id="pkj">
                                        <label class="col-sm-2 control-label">Pokja *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nama_jabatan" class="form-control" id="jabatan" placeholder="Masukkan Pangkat"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->nama_pokja?>"
                                            required>
                                        </div>
                                    </div>

                                    <div class="form-group" id="jabatan_pokja">
                                        <label class="col-sm-2 control-label">Jabatan Pokja *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nama_jabatan" class="form-control" id="jabatan" placeholder="Masukkan Pangkat"
                                            data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->jabatan_pokja?>"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nama" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->uname?>" placeholder="Masukkan Nip" required="">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="nip" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->nip?>" placeholder="Masukkan Nip" required="">
                                        </div>
                                    </div>
                                    <hr class="line-dashed line-full" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pangkat/ Gol</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="pangkat_gol" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->pangkat_gol?>" placeholder="Masukkan Pangkat/ Gol" required="">
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="email" class="form-control" value="<?php echo $hasil_ambil_data->email?>" placeholder="Masukkan Nama"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">User Name *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" name="uname" class="form-control" value="<?php echo $hasil_ambil_data->uname?>" placeholder="Masukkan Nama"
                                            data-parsley-trigger="change"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Upass *</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="password" name="last_login" class="form-control" placeholder="Jabatan"
                                            data-parsley-trigger="change" value="<?php echo paramDecrypt($hasil_ambil_data->upass)?>"
                                            required>
                                        </div>
                                    </div>

                                    <hr class="line-dashed line-full" />



                                      <!--   <hr class="line-dashed line-full" />
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Group</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" name="group" class="form-control" disabled="" value="<?php echo $hasil_ambil_data->group?>" placeholder="Masukkan Group" required="">
                                            </div>
                                        </div> -->
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pkj').hide();
            $("#ppk").hide();
            $('#jabatan_pokja').hide();


            var jabatan = $('#jabatan').val();
            if(jabatan == 'Pokja'){
                $("#pkj").show();
                $("#jabatan_pokja").show();
                $("#ppk").hide();
            }
            else if(jabatan == 'PPK'){
                $('#ppk').show();
                $("#pkj").hide();
                $("#jabatan_pokja").hide();
            }else if(jabatan == 'Kepala SKPD'){
                $('#ppk').show();
                $("#pkj").hide();
                $("#jabatan_pokja").hide();
            }
            else{
                $('#ppk').hide();
                $("#pkj").hide();
                $("#jabatan_pokja").hide()
            }


        });
    </script>