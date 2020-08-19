<!doctype html>
<!--[if lt IE 7]>      <html> class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html> class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html> class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SIULP - Admin Dashboard</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url() . 'component/admin/assets/images/favicon.ico'?>" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- vendor css files -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url(). 'component/admin/assets/js/vendor/jquery/jquery-1.11.2.min.js'?>"><\/script>')</script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'component/admin/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'?>"/>
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/animate.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/font-awesome.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/animsition/css/animsition.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/animsition/css/animsition.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/css/jquery.dataTables.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/weather-icons.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/fullcalendar/fullcalendar.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/morris/morris.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/rickshaw/rickshaw.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/magnific-popup/magnific-popup.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/summernote/summernote.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/cropper/cropper.min.css'?>">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'component/select2/select2.css '?>"/>
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/file-upload/css/jquery.fileupload.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/file-upload/css/jquery.fileupload-ui.css'?>">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="<?php echo base_url(). 'component/admin/assets/js/vendor/file-upload/css/jquery.fileupload-noscript.css'?>"></noscript>
    <noscript><link rel="stylesheet" href="<?php echo base_url(). 'component/admin/assets/js/vendor/file-upload/css/jquery.fileupload-ui-noscript.css'?>"></noscript>
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/summernote/summernote.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/toastr/toastr.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/datatables/css/jquery.dataTables.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/footable/css/footable.core.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/daterangepicker/daterangepicker-bs3.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/nestable/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/jstree/themes/default/style.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/owl-carousel/owl.carousel.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/owl-carousel/owl.theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/chosen/chosen.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/js/vendor/summernote/summernote.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().  'component/admin/assets/css/vendor/weather-icons.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'component/admin/' ?>assets/js/vendor/animsition/css/animsition.min.css">
    <!-- project main css files -->
    <link rel="stylesheet" href="<?php echo base_url(). 'component/admin/assets/css/main.css'?>">
    <!--/ stylesheets -->
        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url(). 'component/admin/assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js'?>"></script>
        <!--/ modernizr -->
         
    </head>
    <body id="minovate" class="appWrapper hz-menu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!--====================================================
        ================= Application Content ===================
        =====================================================-->
        <div id="wrap" class="animsition">
            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================-->
            <section id="header" class="scheme-greensea">
                <header class="clearfix">
                    <!-- Branding -->
                    <div class="branding scheme-greensea"  style="padding-top: 10px">
                        <!-- <a class="brand" style="background:url('<?php echo base_url() . 'component/logo_siulp22.png'; ?>');background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;width:100px">
                            <span><strong>BLP</strong>BATU</span>
                        </a> -->
                            <img src="<?php echo base_url().'component/logo kota batu.png' ?>" alt="" class="img-circle size-30x30">
                                   <span style="color:#000; font-size: 20px;"><strong>SIULP </strong></span>
                               <!--   <span style="color: #000;font-size: 20px;margin-top: 200px;">SIULP</span> -->
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->
                    <!-- Left-side navigation -->
                    <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a href="#" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        <!-- <li class="dropdown divided-right settings" style="border: 0px 1px 1px 1px solid rgba(255, 255, 255, 0.7);height: 45px;">
                            <a href="#" class="dropdown-toggle" style="margin-top: 17px;border: 1px;" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a> -->
                        <!--     <ul class="dropdown-menu with-arrow animated littleFadeInUp" role="menu"> -->
                               <!--  <li>
                                    <ul class="color-schemes list-inline">
                                        <li class="title">Header Color:</li>
                                        <li><a href="#" class="scheme-drank header-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black header-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea header-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan header-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred header-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light header-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Branding Color:</li>
                                        <li><a href="#" class="scheme-drank branding-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black branding-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea branding-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan branding-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred branding-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light branding-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Sidebar Color:</li>
                                        <li><a href="#" class="scheme-drank sidebar-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black sidebar-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea sidebar-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan sidebar-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred sidebar-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light sidebar-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Active Color:</li>
                                        <li><a href="#" class="scheme-drank color-scheme" data-scheme="drank-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-black color-scheme" data-scheme="black-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-greensea color-scheme" data-scheme="greensea-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-cyan color-scheme" data-scheme="cyan-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-lightred color-scheme" data-scheme="lightred-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-light color-scheme" data-scheme="light-scheme-color"></a></li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8 control-label">Fixed header</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch lightred small">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-header" checked="">
                                                    <label class="onoffswitch-label" for="fixed-header">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                               <!--  <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8 control-label">Fixed aside</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch lightred small">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-aside" checked="">
                                                    <label class="onoffswitch-label" for="fixed-aside">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                    <!-- Left-side navigation end -->
                    <!-- Search -->
                    <!-- <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" placeholder="Search...">
                    </div> -->
                    <!-- Search end -->
                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                      <!--   <li class="dropdown users">
                            <a href class="dropdown-toggle" style="margin-top: 10px;" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="badge bg-lightred">2</span>
                            </a> -->
                            <!-- <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInUp" role="menu">
                                <div class="panel-heading">
                                    You have <strong>2</strong> requests
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/arnold-avatar.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Arnold sent you a request</span>
                                                <small class="text-muted">15 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/george-avatar.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">George sent you a request</span>
                                                <small class="text-muted">5 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <a href="#">Show all requests <i class="fa fa-angle-right pull-right"></i></a>
                                </div>
                            </div> -->
                       <!--  </li>
                        <li class="dropdown messages">
                            <a href class="dropdown-toggle" style="margin-top: 10px;" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge bg-lightred">4</span>
                            </a>
                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInDown" role="menu"> -->
                                <!-- <div class="panel-heading">
                                    You have <strong>4</strong> messages
                                </div> -->
                               <!--  <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/ici-avatar.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Imrich sent you a message</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/peter-avatar.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Peter sent you a message</span>
                                                <small class="text-muted">46 minutes ago</small>
                                            </div>
                                        </a>
                                    </li> -->
                                   <!--  <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/random-avatar1.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Bill sent you a message</span>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </a>
                                    </li> -->
                                   <!--  <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url(). 'component/admin/assets/images/random-avatar3.jpg'?>" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Ken sent you a message</span>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <a href="#">Show all messages <i class="pull-right fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </li> -->
                       <!--  <li class="dropdown notifications">
                            <a href class="dropdown-toggle" style="margin-top: 10px;" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-lightred">3</span>
                            </a>
                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInLeft">
                                <div class="panel-heading">
                                    You have <strong>3</strong> notifications
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-danger">
                                                <i class="fa fa-ban"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Imrich cancelled account</span>
                                                <small class="text-muted">6 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-primary">
                                                <i class="fa fa-bolt"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">New user registered</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-greensea">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Robert locked account</span>
                                                <small class="text-muted">18 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <a href="#">Show all notifications <i class="fa fa-angle-right pull-right"></i></a>
                                </div>
                            </div>
                        </li> -->
                        <li class="dropdown nav-profile">
                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                
                                <?php
                                    $user = $this->session->userdata('astrosession');
                                    $id = $user->id;
                                ?>
                                <span><?php echo $user->nama; ?> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                               <li>
                                <a href="<?php echo base_url() . 'admin/user/ubah_data_profile/'.$id?>">
                                    <i class="fa fa-user"></i>Profile
                                </a>
                            </li>
                                <!--<li>
                                    <a href="#">
                                        <span class="label bg-lightred pull-right">new</span>
                                        <i class="fa fa-check"></i>Tasks
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-lock"></i>Lock
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url() . 'admin/logout'?>   ">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                       <!--  <li class="toggle-right-sidebar" style="margin-top: 15px; ">
                            <a href="#">
                                <i class="fa fa-comments" style="background: #493d55;"></i>
                            </a>
                        </li> -->
                    </ul>
                    <!-- Right-side navigation end -->
                </header>
            </section>
            <!--/ HEADER Content  -->