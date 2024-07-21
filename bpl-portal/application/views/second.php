<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bombay Hospital | Registration Page</title>
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

    <link rel="stylesheet" href="<?php echo BACKEND_THEME_URL;  ?>plugins/datepicker/datepicker3.css">

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

        <form action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>Patient's First Name <span class="mend">*</span>  </label>
                  <input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name') ?>" placeholder="Patient's First Name">
                  <span class=""><?php echo form_error('first_name');  ?></span>
                </div>
              </div>
              <div class="col-md-4">
                 <label>Patient's Middle Name </label>
                  <input type="text" class="form-control"  value="<?php echo set_value('middle_name') ?>" name="middle_name" placeholder="Patient's Middle Name">
                  <span class=""><?php echo form_error('middle_name');  ?></span>
              </div>
              <div class="col-md-4">
                 <label>Patient's Last Name <span class="mend">*</span></label>
                  <input type="text" class="form-control" value="<?php echo set_value('last_name') ?>" name="last_name" placeholder="Patient's Last Name">
                  <span class=""><?php echo form_error('last_name');  ?></span>
              </div> 
          </div>         

          <div class="row">
              <div class="col-md-12">
                 <label>Address </label>
                <div class="form-group has-feedback">
                  <textarea class="form-control" name="address" placeholder="Address"><?php echo set_value('address') ?></textarea>
                  <span class=""><?php echo form_error('address'); ?></span>
                </div>
              </div>
          </div> 

          <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>D.O.B</label>
                  <input type="text" class="form-control" id="date_of_birth" value="<?php echo set_value('date_of_birth') ?>" name="date_of_birth" placeholder="Date Of Birth (MM/DD/YY)">
                  <span class=""><?php echo form_error('date_of_birth'); ?></span>
                </div>
              </div> 
              <div class="col-md-4">
                <label>Age </label>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" id="person_age" maxlength="4" value="<?php echo set_value('age') ?>" name="age" placeholder="Age">
                  
                  <span class=""><?php echo form_error('age'); ?></span>
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>Gender <span class="mend">*</span></label>
                  <select name="gender" class="form-control">
                    <option value=""> - Select Gender - </option>
                    <option <?php if(isset($_POST['gender']) && $_POST['gender']=='male'){ echo 'selected="selected"';  } ?> value="male"> Male </option>
                    <option <?php if(isset($_POST['gender']) && $_POST['gender']=='female'){ echo 'selected="selected"';  } ?> value="female"> Female </option>
                  </select>
                  
                  <span class=""><?php echo form_error('gender'); ?></span>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback">
                 <label>Occupation </label>
                  <input type="text" class="form-control" value="<?php echo set_value('occupation') ?>" name="occupation" placeholder="Occupation">
                  <span class=""><?php echo form_error('occupation'); ?></span>
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>City <span class="mend">*</span> </label>
                    <select name="city" class="form-control" placeholder="City">
                      <option value="">- Select City -</option>
                      <option <?php if(!isset($_POST['city'])){  echo  'selected="selected"'; } ?>    <?php if(isset($_POST['city']) && $_POST['city']=='indore'){ echo 'selected="selected"';  } ?> value='indore'  >  Indore  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='bhopal'){ echo 'selected="selected"';  } ?> value='bhopal'  >  Bhopal  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='jabalpur'){ echo 'selected="selected"';  } ?> value='jabalpur'> Jabalpur  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='gwalior'){ echo 'selected="selected"';  } ?> value='gwalior' >  Gwalior  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='ujjain'){ echo 'selected="selected"';  } ?> value='ujjain'  > Ujjain  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='sagar'){ echo 'selected="selected"';  } ?> value='sagar'   > Sagar  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='dewas'){ echo 'selected="selected"';  } ?> value='dewas'   > Dewas  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='satna'){ echo 'selected="selected"';  } ?> value='satna'   > Satna  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='ratlam'){ echo 'selected="selected"';  } ?> value='ratlam'  > Ratlam  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='rewa'){ echo 'selected="selected"';  } ?> value='rewa'    > Rewa  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='murwara-katni'){ echo 'selected="selected"';  } ?> value='murwara-katni' > Murwara (Katni)  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='singrauli'){ echo 'selected="selected"';  } ?> value='singrauli' > Singrauli  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='burhanpur'){ echo 'selected="selected"';  } ?> value='burhanpur' > Burhanpur  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='khandwa'){ echo 'selected="selected"';  } ?> value='khandwa' > Khandwa  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='bhind'){ echo 'selected="selected"';  } ?> value='bhind'   > Bhind  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='chhindwara'){ echo 'selected="selected"';  } ?> value='chhindwara' > Chhindwara  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='guna'){ echo 'selected="selected"';  } ?> value='guna'    > Guna  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='vidisha'){ echo 'selected="selected"';  } ?> value='vidisha' > Vidisha  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='chhatarpur'){ echo 'selected="selected"';  } ?> value='chhatarpur' > Chhatarpur  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='damoh'){ echo 'selected="selected"';  } ?> value='damoh'   > Damoh  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='mandsaur'){ echo 'selected="selected"';  } ?> value='mandsaur'> Mandsaur  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='khargone'){ echo 'selected="selected"';  } ?> value='khargone'> Khargone  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='neemuch'){ echo 'selected="selected"';  } ?> value='neemuch' > Neemuch  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='pithampur'){ echo 'selected="selected"';  } ?> value='pithampur'> Pithampur  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='hoshangabad'){ echo 'selected="selected"';  } ?> value='hoshangabad'>  Hoshangabad  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='itarsi'){ echo 'selected="selected"';  } ?> value='itarsi' > Itarsi   </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='sehore'){ echo 'selected="selected"';  } ?> value='sehore' > Sehore  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='betul'){ echo 'selected="selected"';  } ?> value='betul' > Betul  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='seoni'){ echo 'selected="selected"';  } ?> value='seoni' > Seoni  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='datia'){ echo 'selected="selected"';  } ?> value='datia' > Datia  </option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='nagda'){ echo 'selected="selected"';  } ?> value='nagda' > Nagda  </option>
                    </select>   
                  <span class=""><?php echo form_error('city'); ?></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>State <span class="mend">*</span> </label>
                  <select class="form-control" name="state">
                      <option <?php if(isset($_POST['state']) && $_POST['state']=='mp'){ echo 'selected="selected"';  } ?> value="mp"> Madhya Pradesh </option>
                  </select>   
                  <span class=""><?php echo form_error('state'); ?></span>
                </div>
              </div> 
          </div> 

          <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback">
                   <label>Pin Number </label>
                  <input type="text" class="form-control" id="pin_no" maxlength="6" value="<?php echo set_value('pin') ?>" name="pin" placeholder="Pin">
                  
                  <span id="pin_no_error" class="error"><?php echo form_error('pin'); ?></span>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>Telephone Number </label>
                  <input type="text" class="form-control" id="telephone_no" maxlength="15" value="<?php echo set_value('telephone_no') ?>" name="telephone_no" placeholder="Telephone No">
                  
                  <span id="telephone_no_error" class="error"><?php echo form_error('telephone_no'); ?></span>
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-group has-feedback"> 
                  <label>Mobile Number <span class="mend">*</span> </label>
                  <input type="text" class="form-control" id="mobile_no" maxlength="10" value="<?php echo set_value('mobile_no') ?>" name="mobile_no" placeholder="Mobile No">
                  
                  <span id="mobile_no_error" class="error"><?php echo form_error('mobile_no'); ?></span>
                </div>
              </div> 
          </div>

          <div class="row">
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                  <label for="inputEmail3" class="control-label">Vehicle Owned</label>
                  <select id="vehicle_owned"  name="vehicle_owned"   class="form-control">
                      <option value="">- Select Vehicle Owned -</option>
                      <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='bicycle'){ echo 'selected="selected"';  } ?> value="bicycle"> Bicycle </option>
                      <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='two-wheeler'){ echo 'selected="selected"';  } ?> value="two-wheeler">Two Wheeler</option>
                      <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='four-wheeler'){ echo 'selected="selected"';  } ?> value="four-wheeler">Four Wheeler</option>
                  </select>
                  <span id="vehicle_error" class="error"><?php echo form_error('vehicle_owned'); ?></span>
                </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group has-feedback">
                   <label for="inputEmail3" class="control-label">Annual Income</label>
                   <input type="text" class="form-control" id="annual_income" maxlength="10" value="<?php echo set_value('annual_income') ?>" name="annual_income" placeholder="Annual Income">
                  
                  <span id="annual_income_error" class="error" ><?php echo form_error('annual_income'); ?></span>
                </div> 
                </div> 
                
          </div>  

          <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback">
                  <label>Case Type <span class="mend">*</span> </label><br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="case_type[]" value="surgical"> Surgical
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="case_type[]" value="medical"> Medical
                  </label>
            
                  <span class=""><?php echo form_error('case_type[]'); ?></span>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="form-group has-feedback">
                   <label>Specialty <span class="mend">*</span> </label>
                   <select name="specialty" class="form-control">
                    <option value="">-Select Specialty-</option>
                    option
                    <?php if(!empty($specialty)): ?>
                      <?php foreach ($specialty as $row): ?>
                        <option <?php if(isset($_POST['specialty']) && $_POST['specialty']==$row->id){ echo 'selected="selected"';  } ?> value="<?php echo $row->id; ?>"><?php  echo ucfirst($row->specialty_name); ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select> 
                  <span class=""><?php echo form_error('specialty'); ?></span>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="form-group has-feedback">
                   <label>Unit Type <span class="mend">*</span> </label>
                   <select name="unit_type" class="form-control">
                    <option value="">-Select Unit-</option>
                    <option <?php if(isset($_POST['unit_type']) && $_POST['unit_type']=='icu'){ echo 'selected="selected"';  } ?> value="icu">ICU</option>
                    <option <?php if(isset($_POST['unit_type']) && $_POST['unit_type']=='ward'){ echo 'selected="selected"';  } ?> value="ward">Ward</option>
                  </select> 
                  <span class=""><?php echo form_error('unit_type'); ?></span>
                </div>
              </div> 
          </div>
        
          <div class="row">
            <div class="col-xs-4">
                <!-- <a href="#"  class="btn btn-primary btn-block btn-flat">Back</a> -->
            </div><!-- /.col -->
            <div class="col-xs-4">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit"  class="btn btn-primary btn-block btn-flat">Register</button>
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
    <script src="<?php echo BACKEND_THEME_URL  ?>plugins/datepicker/bootstrap-datepicker.js"></script>

    <script>

        $('#mobile_no').keypress(function(event){
         

          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            if(mobNum.length<10){

                $('#mobile_no_error').html('Please enter 10 digit mobile number');
                 setTimeout(function(){
              $('#mobile_no_error').html('');
            },3000);
                 return false;

            }  

            $('#mobile_no_error').html('Please enter 10 digit mobile number');
            setTimeout(function(){
              $('#mobile_no_error').html('');
            },3000);
        }}); 

        $('#mobile_no').focusout(function() {
            var mobNum = $('#mobile_no').val();
            if(mobNum.length<10){
              $('#mobile_no_error').html('Please enter 10 digit mobile number');
              $('#mobile_no').val('');         
              setTimeout(function(){
                  $('#mobile_no_error').html('');
              },3000);
              return false;
            }  
        });

         $('#annual_income').keypress(function(event){
          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#annual_income_error').html('Please enter number');
            setTimeout(function(){
              $('#annual_income_error').html('');
            },3000);
        }}); 


        $('#telephone_no').keypress(function(event){
          //  console.log(event.which);
        if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#telephone_no_error').html('Please enter numeric value');
            setTimeout(function(){
              $('#telephone_no_error').html('');
            },3000);
        }});
 $('#pin_no').keypress(function(event){
          //  console.log(event.which);
        if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#pin_no_error').html('Please enter numeric value');
             setTimeout(function(){
              $('#pin_no_error').html('');
            },3000);
        }});

      var FromEndDate = new Date();
      $('#date_of_birth').datepicker({ format: 'mm/dd/yyyy',endDate: FromEndDate, autoclose: true}).on('changeDate', function() {
          var dob = $('#date_of_birth').val();
          var birthdate  = dob.split("/");
          var dateString = birthdate[2]+'-'+birthdate[0]+'-'+birthdate[1]
          var today = new Date();
          var birthDate = new Date(dateString);
          var age = today.getFullYear() - birthDate.getFullYear();
          if(age>0){
            $('#person_age').val(age);
          }else{
            alert("Please select porper date.");
            $('#date_of_birth').val('');
            $('#person_age').val('');
          }
      });
    </script>
  </body>
</html>