<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Bombay Hospital | Registration Page </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo BACKEND_THEME_URL; ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
        .mend{
            color: red;
        }
    </style>
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
         <img src="<?php echo BACKEND_THEME_URL; ?>dist/img/logo11.png" ><br>
        <a href="#"><b>Bombay</b>Hospital Indore</a>
      </div>

      <div class="register-box-body">
        
        <h3 class="login-box-msg"> Patient Register </h3>

         <?php  echo msg_alert_backend();  ?>

        <form action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label>BPL Card Number <span class="mend">*</span> </label>
                    <input type="text" class="form-control" name="bpl_card_no" value="<?php echo set_value('bpl_card_no') ?>"  maxlength="20" placeholder="BPL Card No.">
                    <span class=""><?php echo form_error('bpl_card_no');  ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-feedback">
                  <label  style="float:left;margin-right:15px;">Upload BPL Card PDF <span class="mend">*</span> </label>
                  <input type="file" id="bplUpload" name="bpl_card_file" placeholder="BPL Card">
                  <span id="lblError" class="error"><?php echo form_error('bpl_card_file');  ?></span>
                </div>
              </div>
          </div> 
          <div class="row">
              <div class="col-md-6">
                <div class="form-group has-feedback">
                   <label>Aadhar Card Number<span class="mend">*</span> </label>
                  <input type="text"  value="<?php echo set_value('aadhar_crad_no') ?>" class="form-control" id="aadhar_crad_no"  maxlength="12" name="aadhar_crad_no" placeholder="Aadhar Card No.">
                  <span id="aadhar_crad_no_error"  class="error"><?php echo form_error('aadhar_crad_no'); ?></span>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group has-feedback">
                  <label style="float:left;margin-right:15px;"> Upload Aadhar Card PDF <span class="mend">*</span></label>
                  <input type="file" id="aadharUpload" name="aadhar_card_file" >
                  <span id="lbladharError" class="error"><?php echo form_error('aadhar_card_file');  ?></span>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-xs-4">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" onclick="return ValidateExtension()" class="btn btn-primary btn-block btn-flat">Next</button>
            </div><!-- /.col -->
          </div>
        </form>

       
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <script src="<?php echo BACKEND_THEME_URL ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo BACKEND_THEME_URL ?>bootstrap/js/bootstrap.min.js"></script>
    
    <!-- iCheck -->
    <script src="<?php echo BACKEND_THEME_URL ?>plugins/iCheck/icheck.min.js"></script>

  <script type="text/javascript">

      $('#aadhar_crad_no').keypress(function(event){
        //console.log(event.which);
        if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#aadhar_crad_no_error').html('Please enter 12 digit aadhar card number');
            setTimeout(function(){
              $('#aadhar_crad_no_error').html('');
            },3000);
        }}); 
        function ValidateExtension(){
            var allowedFiles = [".PDF",".pdf"];
            var bplUpload = document.getElementById("bplUpload");
            var aadharUpload = document.getElementById("aadharUpload");
            var lblError = document.getElementById("lblError");
            var lbladharError = document.getElementById("lbladharError");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            if(!regex.test(bplUpload.value.toLowerCase())){
                lblError.innerHTML = "Please upload files having extensions: <b>"+allowedFiles.join(', ')+"</b> only.";
                setTimeout(function(){
                  lblError.innerHTML = "";
                },3000);  
                return false;
            }
            if(!regex.test(aadharUpload.value.toLowerCase())){
                lbladharError.innerHTML="Please upload files having extensions: <b>"+allowedFiles.join(', ')+"</b>only.";
                setTimeout(function(){
                  lbladharError.innerHTML = "";
                },3000);  
                return false;
            }
            lblError.innerHTML = "";
            lbladharError.innerHTML = "";
            return true;
        }
</script>
   
  </body>
</html>