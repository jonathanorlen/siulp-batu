
            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li class=" open">
                                                <a href="<?php echo base_url(). 'admin/dashboard/'?>"><i class="fa fa-delicious"></i> <span>Dasboard</span></a>
                                                <!--<ul>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-check-square"></i>Record Paket Sukses</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-remove"></i> Record Paket Gagal</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-bookmark"></i> Paket Yang Akan Lelang</a></li>
                                                    <li><a href="<?php echo base_url() . '#'?>"><i class="fa fa-caret-right"></i><i class="fa fa-table"></i> Total Paket</a></li>
                                                </ul>-->
                                            </li>
                                            <li class="<?php if(@$menu=="master"){ echo "active"; } ?>">
                                                <a href="#"><i class="fa fa-envelope-o"></i> <span>Setup Master</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url() . 'admin/struktur_ulp/content/'?>"><i class="fa fa-caret-right"></i><i class=" fa fa-pencil-square"></i>Struktur ULP</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/kelompok_kerja/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-users"></i>Kelompok Kerja</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/skpd/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-th-list"></i> SKPD</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/jenis_pengadaan/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-tag"></i> Jenis Pengadaan</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/metode_pengadaan/content/'?>"><i class="fa fa-caret-right"></i><i class=" fa fa-pencil-square-o"></i> Metode Pengadaan</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/sumber_dana/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-money"></i> Sumber Dana</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/status_paket/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-check-square-o"></i> Status Paket</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/tim_teknis/content/'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-wrench"></i> Tim Teknis</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/user/content/'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-user"></i> User</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-list "></i> <span>Data Paket</span><?php
                                        $hasil = $this->db->query(" SELECT * FROM transaksi_data_paket where status = 'proses verifikasi' ");
                                        $hasil_ambil = $hasil->result();
                                        ?>
                                        <span class="badge bg-lightred"><?php echo count($hasil_ambil);?></span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url() . 'admin/create_paket/content'?>"><i class="fa fa-caret-right"></i><i class="fa fa-plus-square"></i> Create Paket</a></li>
                                                    <!-- <li><a href="<?php echo base_url() . 'component/admin/form-validate.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-upload"></i> Upload Dokumen Paket</a></li> -->
                                                    <li><a href="<?php echo base_url() . 'admin/data_verifikasi/content'?>"><i class="fa fa-caret-right"></i><i class="fa fa-check-square"></i> Verifikasi <span class="badge bg-lightred"><?php echo count($hasil_ambil);?></span></a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/form-upload.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-download"></i> Import Data Paket</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(). 'admin/rapat/';?>"><i class="fa fa-pencil"></i> <span>Rapat</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url() . 'component/admin/ui-general.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-users"></i> Rapat Kaji Ulang</a></li>
                                                    <li><a href="<?php echo base_url() . 'admin/rapat/content/'?>"><i class="fa fa-caret-right"></i><i class="fa fa-plus-square"></i> Create Rapat</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/ui-general.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-calendar"></i> Jadwal Rapat</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/ui-general.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-align-justify"></i> Notulensi</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-shopping-cart"></i> <span>Surat Perintah Tugas</span> <span class="label label-success">new</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url() . 'component/admin/shop-orders.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-plus-square"></i> Create Surat</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Honor POKJA</span></a>
                                                <ul>
                                                <li><a href="<?php echo base_url() . 'component/admin/tables-bootstrap.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-pie-chart"></i> Record Honor</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/tables-datatables.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-money"></i> Slip Honor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-desktop"></i> <span>Record</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url() . 'component/admin/login.html'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-check-square"></i> Paket Sukses</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/signup.html'?>"><i class="fa fa-caret-right"></i><i class="fa  fa-remove"></i> Paket Gagal</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/forgotpass.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-line-chart"></i> Info Grafik</a></li>
                                                    <li><a href="<?php echo base_url() . 'component/admin/page404.html'?>"><i class="fa fa-caret-right"></i><i class="fa fa-bar-chart"></i> Data Tahunan</a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel charts panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarCharts">
                                            Orders Summary <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarCharts" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="summary">

                                            <div class="media">
                                                <a class="pull-right" href="#">
                                                    <span class="sparklineChart"
                                                    values="5, 8, 3, 4, 6, 2, 1, 9, 7"
                                                    sparkType="bar"
                                                    #92424e"
                                                    sparkBarWidth="6px"
                                                    sparkHeight="36px">
                                                    Loading...</span>
                                                </a>
                                                <div class="media-body">
                                                    This week sales
                                                    <h4 class="media-heading">26, 149</h4>
                                                </div>
                                            </div>

                                            <div class="media">
                                                <a class="pull-right" href="#">
                                                    <span class="sparklineChart"
                                                    values="2, 4, 5, 3, 8, 9, 7, 3, 5"
                                                    sparkType="bar"
                                                    #397193"
                                                    sparkBarWidth="6px"
                                                    sparkHeight="36px">
                                                    Loading...</span>
                                                </a>
                                                <div class="media-body">
                                                    This week balance
                                                    <h4 class="media-heading">318, 651</h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel settings panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarControls">
                                            General Settings <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarControls" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="row">
                                              <label class="col-xs-8 control-label">Switch ON</label>
                                              <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-on" checked="">
                                                  <label class="onoffswitch-label" for="switch-on">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                      <label class="col-xs-8 control-label">Switch OFF</label>
                                      <div class="col-xs-4 control-label">
                                        <div class="onoffswitch greensea">
                                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-off">
                                          <label class="onoffswitch-label" for="switch-off">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</aside>
<!--/ SIDEBAR Content -->

                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                <aside id="rightbar">

                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
                            <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
                            <li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="users">
                                <h6><strong>Online</strong> Users</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/peter-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/george-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">George <strong>McCain</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar1.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar2.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Jesse <strong>Phoenix</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                                <h6><strong>Offline</strong> Users</h6>

                                <ul>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar4.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Dell <strong>MacApple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Paris, France</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar5.jpg'?>" alt>
                                            </a>

                                            <div class="media-body">
                                                <span class="media-heading">Roger <strong>Flopple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Rome, Italia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar6.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Nico <strong>Vulture</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar7.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Bobby <strong>Socks</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar8.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="history">
                                <h6><strong>Chat</strong> History</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/peter-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="friends">
                                <h6><strong>Friends</strong> List</h6>
                                <ul>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar8.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/random-avatar1.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h6><strong>Chat</strong> Settings</h6>

                                <ul class="settings">

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Offline Users</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">
                                                    <label class="onoffswitch-label" for="show-offline">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Fullname</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">
                                                    <label class="onoffswitch-label" for="show-fullname">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">History Enable</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">
                                                    <label class="onoffswitch-label" for="show-history">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Locations</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">
                                                    <label class="onoffswitch-label" for="show-location">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Notifications</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">
                                                    <label class="onoffswitch-label" for="show-notifications">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Undread Count</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">
                                                    <label class="onoffswitch-label" for="show-unread">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </aside>
                <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->