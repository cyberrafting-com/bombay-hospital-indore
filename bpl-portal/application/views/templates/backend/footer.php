<?php 
    $segment2 = $this->uri->segment(2);
    $segment3 = $segment2."/".$this->uri->segment(3);
    if($segment2 == 'dashboard' || $segment2 == '') $dashboard='active'; else $dashboard='';
    if($segment2 == 'products' || $segment3 == 'products/edit') $myproduct='active'; else $myproduct='';
    if($segment3 == 'customers/add') $cust='active'; else $cust='';
?>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Bombay</b>Hospital  
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Bombay Hospital </a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/select2/select2.full.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- datepicker -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo BACKEND_THEME_URL;  ?>dist/js/demo.js"></script>
    <script  type="text/javascript" src="<?php echo BACKEND_THEME_URL; ?>tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        $('#first_name').keyup(function(){
           this.value = this.value.toUpperCase();
        }); 
        $('#middle_name').keyup(function(){
           this.value = this.value.toUpperCase();
        });  
        $('#last_name').keyup(function(){
           this.value = this.value.toUpperCase();
        });  

        $('#unit_type').on('change',function(){
            var unit_type = $(this).val();
            if(unit_type=='icu'){
              $('#ward_bed').prop('disabled','disabled');
              $('#ward_bed').css('display','none');
              $('#icu_bed').prop('disabled',false);
              $('#icu_bed').css('display','block');
            } 
            if(unit_type=='ward'){
              $('#ward_bed').prop('disabled',false);
              $('#ward_bed').css('display','block');
              $('#icu_bed').prop('disabled','disabled');
              $('#icu_bed').css('display','none');
            }
        });

        $('#mobile_no').keypress(function(event){
          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#mobile_no_error').html('Please enter 10 digit mobile number');
            setTimeout(function(){
              $('#mobile_no_error').html('');
            },3000);
        }}); 

        $('#hospitalMobile').keypress(function(event){
          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            
            $('#hospitalMobile_error').html('Please enter 10 digit mobile number');
            setTimeout(function(){
              $('#hospitalMobile_error').html('');
            },3000);
        }}); 

        $('#hospitalMobile').focusout(function() {
            var mobNum = $('#hospitalMobile').val();
            if(mobNum.length<10){
              $('#hospitalMobile_error').html('Please enter 10 digit mobile number');
              $('#hospitalMobile').val('');         
              setTimeout(function(){
                  $('#hospitalMobile_error').html('');
              },3000);
              return false;
            }  
        });

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

        $('#bill_amount').keypress(function(event){
          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#bill_amount_error').html('Please enter number');
            setTimeout(function(){
              $('#bill_amount_error').html('');
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
          }
        });
       $('#aadhar_crad_no').keypress(function(event){
          ///console.log(event.which);
          if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
            $('#aadhar_crad_no_error').html('Please enter 12 digit aadhar card number');
            setTimeout(function(){
              $('#aadhar_crad_no_error').html('');
            },3000);
        }});

        $('#aadhar_crad_no').focusout(function() {
            var aadharNum = $('#aadhar_crad_no').val();
            if(aadharNum.length<10){
              $('#aadhar_crad_no_error').html('Please enter 12 digit mobile number');
              $('#aadhar_crad_no').val('');         
              setTimeout(function(){
                  $('#aadhar_crad_no_error').html('');
              },3000);
              return false;
            }  
        }); 

      function ValidateExtension(){
          var allowedFiles = [".PDF",".pdf"];
          var bplUpload = document.getElementById("bplUpload");
          var aadharUpload = document.getElementById("aadharUpload");
          var lblError = document.getElementById("lblError");
          var lbladharError = document.getElementById("lbladharError");
          var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
          if(bplUpload.files.length!=0){
            if(!regex.test(bplUpload.value.toLowerCase())){
                lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                setTimeout(function(){
                  lblError.innerHTML = "";
                },3000);  
                $('html, body').animate({
                    scrollTop: ($('.error').first().offset().top)
                },500);
                return false;
            }
            lblError.innerHTML = "";
          }
          if(aadharUpload.files.length!=0){
            if(!regex.test(aadharUpload.value.toLowerCase())){
                lbladharError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                $('html, body').animate({
                    scrollTop: ($('.error').first().offset().top)
                },500);
                setTimeout(function(){
                  lbladharError.innerHTML = "";
                },3000);  
                return false;
            }
            lbladharError.innerHTML = "";
          }
          return true;
      }
    </script>
    <script type="text/javascript">
      $('#net_address').focusout(function(){
          var geocoder = new google.maps.Geocoder();
          var address = document.getElementById("net_address").value;
          geocoder.geocode({'address':address }, function(results, status){
              if (status == google.maps.GeocoderStatus.OK) {
                  var latitude = results[0].geometry.location.lat();
                  var longitude = results[0].geometry.location.lng();
                  $('#latitude').val(latitude);
                  $('#longitude').val(longitude);
                   return true;
              } else {
                  alert("Request failed.");
                  return false;
              }
          });
      });
       
    </script>
 <script>
      var FromEndDate = new Date();
      $('#date_of_birth').datepicker({ format: 'dd/mm/yyyy',endDate: FromEndDate, autoclose: true}).on('changeDate', function() {
          var dob = $('#date_of_birth').val();
          var birthdate  = dob.split("/");
          var dateString = birthdate[2]+'-'+birthdate[1]+'-'+birthdate[0]
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

    <script type="text/javascript">
    tinymce.init({
        //selector: "textarea",
        selector: ".tinymce_edittor",
        menubar: false,
        plugins:[
                    "advlist autolink lists link image charmap print preview anchor media",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime table contextmenu paste textcolor",
                    "image",      
                ],
        image_advtab: true,
        toolbar: "insertfile undo redo | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | preview code ",
        file_browser_callback: function(field_name, url, type, win) {
                if(type=='image') $('#my_form input').click();
        }
    });
    </script>
    <script type="text/javascript">
     $(document).ready(function(){
      
        $('#submit_btn').on('click',function(event) {
             $('#report_form').attr('action', '<?php echo base_url('backend/reports/index/') ?>');
             $('#report_form').submit();
        });
        
        $('#report_btn').on('click',function(event) {
           $('#report_form').attr('action', '<?php echo base_url('backend/reports/export/') ?>');
            $('#report_form').submit();
        });      

        $(".select2").select2();
        $('#admin_date').datepicker({ format: 'dd/mm/yyyy' });
        $('#discharge_date').datepicker({ format: 'dd/mm/yyyy' });
        $('#readmit_date').datepicker({ format: 'dd/mm/yyyy' });
        $('#reservation').daterangepicker({ format: 'DD/MM/YYYY' });
        $(".timepicker").timepicker({
          showInputs: false
        });
     });
    </script>
  </body>
</html>
