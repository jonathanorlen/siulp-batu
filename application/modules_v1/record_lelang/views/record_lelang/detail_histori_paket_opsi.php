
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-hz-menu-layout">

                    <div class="pageheader">
                        <?php
                        $kode = $this->uri->segment(3);
                        $jenis_perubahan = $this->uri->segment(4);
                        ?>

                        <h2>Data Perubahan</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a><i class="fa fa-home"></i>Dasboard</a>
                                </li>
                                <!-- <li>
                                    <a>Data paket</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin/create_paket/content'?>">Data Paket</a>
                                </li> -->
                            </ul>
                            
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    

                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Detail Histori&nbsp<strong>Paket</strong></h1>
                            <ul class="controls">
                                <li class="dropdown">

                                    <a role="button" tabindex="0" class="dropdown-toggle settings" style="margin-top: 15px;" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </a>

                                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                        <li>
                                            <a role="button" tabindex="0" class="tile-toggle">
                                                <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="button"  tabindex="0" class="tile-refresh">
                                                <i class="fa fa-refresh"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a role="button"  tabindex="0" class="tile-fullscreen">
                                                <i class="fa fa-expand"></i> Fullscreen
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                            <div class="table-responsive">
                                <div id="cari_status">

                                    <table style="font-size: small;" class="table table-hover table-custom dt-responsive" id="responsive-usage">
                                        <thead>
                                            <tr class="info">
                                                <th>No</th>
                                                <th>Data Sebelum Perubahan</th>
                                                <th>Data Sesudah Perubahan</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php 
                                            $this->db->where('kode_paket',$kode);
                                            $this->db->where('field_perubahan',$jenis_perubahan);
                                           
                                            $get = $this->db->get('histori_paket');
                                            $hasil_get = $get->result();
                                            $no=1;
                                            foreach ($hasil_get as $key) {
                                        
                                        ?>
                                            <tr>
                                                
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $key->data_lama;?></td>
                                                <td><?php echo $key->data_baru;?></td>

                                            </tr>
                                            <?php } ?>



                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- /tile body -->

                    </section>

                </div>

            </section>
            <!--/ CONTENT -->




        </div>

