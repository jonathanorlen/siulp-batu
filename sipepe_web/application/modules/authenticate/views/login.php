<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PLUT KWB | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.4 -->
  <link href="<?php echo base_url() . 'component/admin/bootstrap/css/bootstrap.min.css '?>" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css '?>" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url() . 'component/admin/dist/css/AdminLTE.min.css '?>" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="<?php echo base_url() . 'component/admin/plugins/iCheck/square/blue.css '?>" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="login-page" style="    background: #00b235;">
        <div class="login-box">
          <div class="login-logo">
			<img style="" align="center" src="<?php echo base_url() . 'component/web/images/hahaha.png '?>" width="301" height="116" />
          </div><!-- /.login-logo -->
          <div class="login-box-body" style="background-color:rgba(255, 255, 255, 0.25);">
            <p class="login-box-msg " style="color: #FFF;">Sign in to PLUT KWB</p>
            <form action="<?php echo base_url($this->cname).'/login'; ?>" method="post">
              <div class="form-group has-feedback">
                <input type="input" class="form-control" name="login-email" placeholder="User" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="login-password" placeholder="Password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">           
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #FFF; color: #7b7a7a;border-color: #c3c3c3;">Sign In</button>
                </div><!-- /.col -->
              </div>
            </form>            

          </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url() . 'component/admin/plugins/jQuery/jQuery-2.1.4.min.js '?>" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url() . 'component/admin/bootstrap/js/bootstrap.min.js '?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url() . 'component/admin/plugins/iCheck/icheck.min.js '?>" type="text/javascript"></script>
        <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        });
        </script>
      </body>
      </html>
