<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> BPL | Log-in </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo BACKEND_THEME_URL; ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BACKEND_THEME_URL; ?>dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo BACKEND_THEME_URL; ?>plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .login-box, .register-box {
            width: 800px;
            margin: 5% auto;
        }
        .error{
            color: red;
        }
    </style>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <img src="<?php echo BACKEND_THEME_URL; ?>dist/img/logo11.png" ><br>
        <a href="#"><b>Bombay Hospital Indore BPL Portal </b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">&nbsp;</p>
       

          <div class="row">
            
            <!--<div class="col-xs-4">
              <a href="<?php //echo base_url('patient/register'); ?>" class="btn btn-primary btn-block btn-flat">BPL Patient Registration</a>
            </div>-->
            
            <div class="col-xs-6">
              <a href="<?php echo base_url('hospital/login'); ?>" class="btn btn-primary btn-block btn-flat">Referral Centre</a>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <a href="<?php echo base_url('superadmin/login'); ?>" class="btn btn-primary btn-block btn-flat">Hospital Authority</a>
            </div><!-- /.col -->
          </div>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo BACKEND_THEME_URL ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo BACKEND_THEME_URL ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo BACKEND_THEME_URL ?>plugins/iCheck/icheck.min.js"></script>
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
