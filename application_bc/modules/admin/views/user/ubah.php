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
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a>Setup Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/user/content'?>">User</a>
                                </li>
                                <li>
                                    <a>Ubah User</a>
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
                                    <h1 class="custom-font"><strong>Ubah&nbsp</strong>User</h1>
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
                                    <form class="form-horizontal" name="data_form" role="form" method="post" id="data_form" data-parsley-validate action="<?php echo base_url().'admin/user/simpan_ubah'?>">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" class="form-control" value="<?php echo $hasil_ambil_data->nama?>" placeholder="Masukkan Nip" required="">
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $hasil_ambil_data->id?>" placeholder="Masukkan Nip" required="">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">User Name *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="uname" class="form-control" value="<?php echo $hasil_ambil_data->uname?>" placeholder="Masukkan Nama"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>


                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upass *</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="upass" class="form-control" value="<?php echo paramDecrypt($hasil_ambil_data->upass)?>" placeholder="Masukkan Nama"
                                                data-parsley-trigger="change"
                                                required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <!-- <div class="form-group">
                                            <label class="col-sm-2 control-label">Last Login *</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="last_login" class="form-control" placeholder="Jabatan"
                                                data-parsley-trigger="change" value="<?php echo $hasil_ambil_data->last_login?>"
                                                required>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama Jabatan *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="nama_jabatan" id="jabatan">
                                                    <option value="<?php echo $hasil_ambil_data->nama_jabatan?>"><?php echo $hasil_ambil_data->nama_jabatan?></option>
                                                    <option value="Sekretariat">Sekretariat</option>
                                                    <option value="PPK">PPK</option>
                                                    <option value="Pokja">Pokja</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group" id="ppk">
                                            <label class="col-sm-2 control-label">SKPD *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="kode_skpd" >
                                                    <option value="">--PILIH--</option>
                                                    <?php 
                                                        $data = $this->db->get('master_satuan_kerja');
                                                        $hasil_ambil = $data->result();

                                                        foreach ($hasil_ambil as $item) {
                                                            if($item->kode_skpd == $hasil_ambil_data->kode_skpd){

                                                    ?>
                                                    <option <?php echo 'selected';?> value="<?php echo $item->kode_skpd?>"><?php echo $item->unit_kerja?></option>
                                                    <?php }

                                                    else { 
                                                        ?>
                                                    
                                                        <option value="<?php echo $item->kode_skpd?>"><?php echo $item->unit_kerja?></option>
                                                   <?php 
                                                    }
                                                }
                                                   ?>
                                                </select>

                                            </div>
                                        </div>

                                         <div class="form-group" id="pkj" >
                                            <label class="col-sm-2 control-label">Pokja *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="kode_pokja" id="pokja">
                                                    <option  value="<?php echo $hasil_ambil_data->kode_pokja?>"><?php echo $hasil_ambil_data->nama_pokja?></option>
                                                    <?php 
                                                        $data = $this->db->get('master_kelompok_kerja');
                                                        $hasil_ambil_data_pokja = $data->result();

                                                        foreach ($hasil_ambil_data_pokja as $item) {
                                                        

                                                    ?>
                                                    

                                                    <option  value="<?php echo $item->id?>"><?php echo $item->pokja?></option>

                                                   <?php 
                                                       
                                                        }
                                                   ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group" id="jabatan_pokja" >
                                            <label class="col-sm-2 control-label">Jabatan Pokja *</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="jabatan_pokja" id="pokja">
                                                    <option value="<?php echo $hasil_ambil_data->jabatan_pokja?>"><?php echo $hasil_ambil_data->jabatan_pokja?></option>

                                                    <option value="ketua">Ketua</option>
                                                    <option value="wakil ketua">Wakil Ketua</option>
                                                    <option value="sekretaris">Sekretaris</option>

                                                </select>

                                            </div>
                                        </div>
                                        

                                        <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-8">
                                                    <button  class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa  fa-save">&nbsp</i>Save</button>    
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
        }

   $("#jabatan").change(function(){
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
        }

    });

});
</script>