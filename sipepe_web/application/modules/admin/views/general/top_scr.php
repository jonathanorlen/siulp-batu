<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PLUT KWB | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.4 -->
  <link href="<?php echo base_url() . 'component/admin/bootstrap/css/bootstrap.css '?>" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url() . 'component/admin/dist/css/AdminLTE.min.css'?>" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url() . 'component/admin/plugins/select2/select2.min.css '?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url() . 'component/admin/dist/css/skins/_all-skins.css'?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url() . 'component/admin/plugins/iCheck/flat/green.css'?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url() . 'component/admin/plugins/morris/morris.css'?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url() . 'component/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url() . 'component/admin/plugins/datepicker/datepicker3.css'?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url() . 'component/admin/plugins/daterangepicker/daterangepicker-bs3.css'?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url() . 'component/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() . 'component/admin/style-metronic.css'?>" rel="stylesheet" type="text/css" />

    <!-- DATA TABLES -->
    <link href="<?php echo base_url() . 'component/admin/plugins/datatables/dataTables.bootstrap.css '?>" rel="stylesheet" type="text/css" />
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('admin') ; ?>" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>PLUT KWB</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>PLUT KWB</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">                                   

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-fw fa-user"></i>
                      <span class="hidden-xs">PLUT KWB</span>
                    </a>


                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header" style="height:80px;">
                        <p>
                          PLUT KWB
                          <small>Member 2015</small>
                        </p>
                      </li>


                      <!-- Menu Footer-->
                      <li class="user-footer">
						<center>
                        <div>
                          <a href="<?php echo base_url() . 'admin/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                        </div>
						</center>
                      </li>                      
                    </ul>


                  </li>                  

                </ul>
              </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->