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
                                    <a href="<?php echo base_url() . 'admin/dasboard'?>"><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Data Paket</a>
                                </li>
                                <li>
                                    <a href="#">Import Paket</a>
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
                            <h1 class="custom-font"><strong>Uploud&nbsp</strong>Data</h1>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                        

                    <form class="form-horizontal" name="data_form"  method="post" id="data_form" action="<?php echo base_url().'admin/create_paket/uploud_file';?>" enctype="multipart/form-data" >
                                <!-- /tile header -->

                                <!-- tile body -->

                               
                    
                   <!-- <table width="100%">
                    <tr>
                    <td> -->
                    <div class="row" style="margin-left:2px">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                        <label>Import Dokumen </label>
                        <label>.xls</label>
                        <input type="file" name="dokumen_dpa" /><br>
                        </div>

                    </div>

                    <!-- <td>
                    </tr>
                      </table> -->

                                </div>

                                <div class="tile-footer text-right bg-tr-white lter dvd dvd-top form-group">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">&nbsp;</label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-rounded-10 btn-primary btn-lg" id="form_submit"><i class="fa fa-file-excel-o"></i> Import</button>    
                                    </div>
                                </div>
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