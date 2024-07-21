<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Registration 
       <!--  <small>Opreaton Module</small> -->
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Update Status </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row"> 
                    
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Waiting No. </strong>
                      <p class="text-muted">
                          <?php if($register_data->id!=''){ echo $register_data->id; } ?> 
                      </p>
                  </div> 
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Full Name </strong>
                    <p class="text-muted">
                      <?php if($register_data->first_name!=''){ echo ucfirst($register_data->first_name.' '.$register_data->last_name); } ?> 
                    </p>
                  </div> 
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i>  BPL Card No. </strong>
                      <p class="text-muted">
                        <?php if($register_data->bpl_no!=''){ echo ucfirst($register_data->bpl_no); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> BPL Card View</strong>
                      <p class="text-muted">
                        <a target="_blank"  href="<?php if($register_data->bpl_card_file!=''){  echo str_ireplace('index.php/','',base_url(str_ireplace('./','',$register_data->bpl_card_file)));  }else{ echo '#'; }   ?>" class="btn btn-xs btn-warning" title=""> BPL Card </a>
                      </p>
                  </div>  

              </div>

              <hr>

              <div class="row">  
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Date Of Birth </strong>
                    <p class="text-muted">
                      <?php if($register_data->date_of_birth!=''){ echo ucfirst($register_data->date_of_birth); } ?>
                    </p>
                  </div> 
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Age </strong>
                      <p class="text-muted">
                        <?php if($register_data->age!=''){ echo ucfirst($register_data->age); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Gender </strong>
                      <p class="text-muted">
                         <?php if($register_data->gender!=''){ echo ucfirst($register_data->gender); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Added By </strong>
                    <p class="text-muted">
                      <?php if($register_data->add_by!=''){ echo ucfirst($register_data->add_by); } ?>
                    </p>
                  </div>  
              </div>
            <hr>
        <!--    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                  <p>
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                  </p>
                -->
      
<?php 
      if($register_data->specialty_id!=''){ 
        $specialty = get_specialty_info($register_data->specialty_id);
      } else{
        $specialty='';
      }
      $womentook='';
      $mentook='';
      $ward_mentook='';
      $ward_womentook='';
?>

<?php
    if($register_data->unit_type=='icu'){
        if($register_data->gender=='female'){
          $womentook = get_women_icu_status();
               //print_r($womentook);
    if($womentook['limit']!='over'){     
?>
 <div class="clearfix"></div>
    <form action="<?php  echo current_url();  ?>" method="post" accept-charset="utf-8">
        <?php //echo msg_alert_backend();  ?>
      
        <?php if($register_data->admit_status==0){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Admit Date</label>
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('d/m/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="discharge_date" class="form-control" 
                  name="discharge_date" value="<?php echo set_value('discharge_date'); ?>">
                  <?php echo form_error('discharge_date'); ?>
                </div> 
              </div> 

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Bill Amount</label>
                  <input type="text"  placeholder="Bill Amount" id="bill_amount" class="form-control" 
                  name="bill_amount" value="<?php echo set_value('bill_amount'); ?>">
                  <?php echo form_error('bill_amount'); ?>
                </div> 
              </div>

        <?php } ?>
      
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Specialty</label>
                    <input type="text" placeholder="Specialty" readonly   class="form-control" name="specialty" 
                    value="<?php if($specialty->specialty_name!=''){ echo ucfirst($specialty->specialty_name); } ?>">
                    <?php echo form_error('specialty_name'); ?>
                </div>  
              </div>  

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Gender</label>
                    <input type="text" readonly placeholder="Gender" class="form-control" name="gender" 
                    value="<?php if($register_data->gender!=''){  echo ucfirst($register_data->gender); } ?>">
                    <?php echo form_error('gender'); ?>
                </div>
              </div>
   
           
            <?php if($register_data->admit_status==0){ ?>   
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputtext3" class="control-label">Bed No.:</label>
                    <select name="bed_no"  class="form-control" >
                        <option value="">-Select Bed No.- </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='201'){ echo 'selected'; } ?> value="201">201 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='202'){ echo 'selected'; } ?> value="202">202 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='203'){ echo 'selected'; } ?> value="203">203 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='204'){ echo 'selected'; } ?> value="204">204 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='205'){ echo 'selected'; } ?> value="205">205 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='206'){ echo 'selected'; } ?> value="206">206 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='207'){ echo 'selected'; } ?> value="207">207 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='208'){ echo 'selected'; } ?> value="208">208 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='209'){ echo 'selected'; } ?> value="209">209 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='210'){ echo 'selected'; } ?> value="210">210 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='211'){ echo 'selected'; } ?> value="211">211 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='212'){ echo 'selected'; } ?> value="212">212 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='213'){ echo 'selected'; } ?> value="213">213 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='214'){ echo 'selected'; } ?> value="214">214 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='215'){ echo 'selected'; } ?> value="215">215 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='216'){ echo 'selected'; } ?> value="216">216 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='217'){ echo 'selected'; } ?> value="217">217 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='218'){ echo 'selected'; } ?> value="218">218 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='219'){ echo 'selected'; } ?> value="219">219 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='220'){ echo 'selected'; } ?> value="220">220 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='221'){ echo 'selected'; } ?> value="221">221 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='222'){ echo 'selected'; } ?> value="222">222 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='401'){ echo 'selected'; } ?> value="401">401 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='402'){ echo 'selected'; } ?> value="402">402 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='403'){ echo 'selected'; } ?> value="403">403 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='404'){ echo 'selected'; } ?> value="404">404 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='405'){ echo 'selected'; } ?> value="405">405 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='406'){ echo 'selected'; } ?> value="406">406 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='407'){ echo 'selected'; } ?> value="407">407 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='408'){ echo 'selected'; } ?> value="408">408 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='409'){ echo 'selected'; } ?> value="409">409 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='410'){ echo 'selected'; } ?> value="410">410 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='451'){ echo 'selected'; } ?> value="451">451 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='452'){ echo 'selected'; } ?> value="452">452 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='453'){ echo 'selected'; } ?> value="453">453 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='454'){ echo 'selected'; } ?> value="454">454 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='455'){ echo 'selected'; } ?> value="455">455 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='456'){ echo 'selected'; } ?> value="456">456 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='457'){ echo 'selected'; } ?> value="457">457 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='458'){ echo 'selected'; } ?> value="458">458 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='459'){ echo 'selected'; } ?> value="459">459 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='460'){ echo 'selected'; } ?> value="460">460 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='461'){ echo 'selected'; } ?> value="461">461 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='462'){ echo 'selected'; } ?> value="462">462 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='463'){ echo 'selected'; } ?> value="463">463 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='464'){ echo 'selected'; } ?> value="464">464 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='465'){ echo 'selected'; } ?> value="465">465 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='466'){ echo 'selected'; } ?> value="466">466 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='467'){ echo 'selected'; } ?> value="467">467 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='468'){ echo 'selected'; } ?> value="468">468 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='469'){ echo 'selected'; } ?> value="469">469 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='470'){ echo 'selected'; } ?> value="470">470 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='471'){ echo 'selected'; } ?> value="471">471 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='472'){ echo 'selected'; } ?> value="472">472 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='473'){ echo 'selected'; } ?> value="473">473 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='474'){ echo 'selected'; } ?> value="474">474 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='475'){ echo 'selected'; } ?> value="475">475 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='557'){ echo 'selected'; } ?> value="557">557 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='558'){ echo 'selected'; } ?> value="558">558 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='559'){ echo 'selected'; } ?> value="559">559 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='560'){ echo 'selected'; } ?> value="560">560 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='561'){ echo 'selected'; } ?> value="561">561 NICU</option>
                    </select>
                    <?php echo form_error('bed_no'); ?>
                </div>
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" name="doctor_id">
                      <?php if($doctors!=''){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                          <option <?php if(isset($_POST['doctor_id']) && $_POST['doctor_id']==$row->id){ echo 'selected="selected"';    } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox"  <?php if(isset($_POST['waiting_cleared'])){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>

<?php if($womentook['limit']==='extend'){ ?>
<div class="clearfix"></div>
<br><br>
         <h4> Your bed limit is only 6 patient In ICU , 3 for male and 3 for female. Please comment in comment box why are you assigning bed to this patient.  </h4>
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Comment Box :</label>
                      <textarea placeholder="Comment Box" class="form-control" name="comment_box"><?php echo set_value('comment_box');   ?></textarea>
                    <?php echo form_error('comment_box'); ?>
                  </div>
              </div>  

<?php }   ?>




 <?php }else{ ?>

  <div class="col-md-3">
    <div class="form-group">
        <label for="inputtext3" class="control-label">Bed No.:</label>
            <select name="bed_no"  disabled class="form-control"  >
               <option value="">-Select Bed No.-</option>
                 <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='201'){ echo 'selected'; } ?> value="201">201 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='202'){ echo 'selected'; } ?> value="202">202 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='203'){ echo 'selected'; } ?> value="203">203 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='204'){ echo 'selected'; } ?> value="204">204 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='205'){ echo 'selected'; } ?> value="205">205 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='206'){ echo 'selected'; } ?> value="206">206 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='207'){ echo 'selected'; } ?> value="207">207 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='208'){ echo 'selected'; } ?> value="208">208 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='209'){ echo 'selected'; } ?> value="209">209 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='210'){ echo 'selected'; } ?> value="210">210 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='211'){ echo 'selected'; } ?> value="211">211 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='212'){ echo 'selected'; } ?> value="212">212 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='213'){ echo 'selected'; } ?> value="213">213 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='214'){ echo 'selected'; } ?> value="214">214 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='215'){ echo 'selected'; } ?> value="215">215 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='216'){ echo 'selected'; } ?> value="216">216 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='217'){ echo 'selected'; } ?> value="217">217 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='218'){ echo 'selected'; } ?> value="218">218 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='219'){ echo 'selected'; } ?> value="219">219 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='220'){ echo 'selected'; } ?> value="220">220 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='221'){ echo 'selected'; } ?> value="221">221 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='222'){ echo 'selected'; } ?> value="222">222 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='401'){ echo 'selected'; } ?> value="401">401 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='402'){ echo 'selected'; } ?> value="402">402 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='403'){ echo 'selected'; } ?> value="403">403 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='404'){ echo 'selected'; } ?> value="404">404 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='405'){ echo 'selected'; } ?> value="405">405 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='406'){ echo 'selected'; } ?> value="406">406 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='407'){ echo 'selected'; } ?> value="407">407 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='408'){ echo 'selected'; } ?> value="408">408 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='409'){ echo 'selected'; } ?> value="409">409 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='410'){ echo 'selected'; } ?> value="410">410 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='451'){ echo 'selected'; } ?> value="451">451 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='452'){ echo 'selected'; } ?> value="452">452 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='453'){ echo 'selected'; } ?> value="453">453 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='454'){ echo 'selected'; } ?> value="454">454 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='455'){ echo 'selected'; } ?> value="455">455 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='456'){ echo 'selected'; } ?> value="456">456 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='457'){ echo 'selected'; } ?> value="457">457 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='458'){ echo 'selected'; } ?> value="458">458 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='459'){ echo 'selected'; } ?> value="459">459 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='460'){ echo 'selected'; } ?> value="460">460 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='461'){ echo 'selected'; } ?> value="461">461 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='462'){ echo 'selected'; } ?> value="462">462 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='463'){ echo 'selected'; } ?> value="463">463 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='464'){ echo 'selected'; } ?> value="464">464 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='465'){ echo 'selected'; } ?> value="465">465 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='466'){ echo 'selected'; } ?> value="466">466 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='467'){ echo 'selected'; } ?> value="467">467 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='468'){ echo 'selected'; } ?> value="468">468 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='469'){ echo 'selected'; } ?> value="469">469 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='470'){ echo 'selected'; } ?> value="470">470 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='471'){ echo 'selected'; } ?> value="471">471 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='472'){ echo 'selected'; } ?> value="472">472 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='473'){ echo 'selected'; } ?> value="473">473 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='474'){ echo 'selected'; } ?> value="474">474 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='475'){ echo 'selected'; } ?> value="475">475 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='557'){ echo 'selected'; } ?> value="557">557 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='558'){ echo 'selected'; } ?> value="558">558 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='559'){ echo 'selected'; } ?> value="559">559 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='560'){ echo 'selected'; } ?> value="560">560 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='561'){ echo 'selected'; } ?> value="561">561 NICU</option>

            </select>    
               <?php echo form_error('bed_no'); ?>
              </div>
          </div>

          <div class="col-md-4">
              <div class="form-group">
                <label for="inputtext3" class="control-label">Assign Doctors :</label>
                <select class="form-control" disabled name="doctor_id">
                  <?php if($doctors!=''){ ?>
                      <option value="">- Select Doctor -</option>
                      <?php foreach ($doctors as $row){ ?>
                        <option  <?php if($register_data->assign_doctor!="" && $register_data->assign_doctor==$row->id){ ?> selected <?php } ?>  value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                      <?php } ?>
                  <?php } ?> 
                </select>
                <?php echo form_error('doctor_id'); ?>
              </div>
          </div> 
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text" disabled  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php if($register_data->ipno!=''){ echo ucfirst($register_data->ipno); } ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled <?php if($register_data->waiting_cleared!=''){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>


 <?php  } ?>


              <div class="clearfix"></div>
              <hr>

              <div class="col-md-offset-4 col-md-4">   
                  <p><button type="submit" class="btn btn-block btn-info" name="save">Update Status </button> </p>
              </div>
            </form>
<?php }else{ ?>
 
   <div style="padding: 12px 5px 4px 0px;" class="callout callout-info">
        <h4 class="text-center"> Limit Is Over </h4>
    </div>

<?php
    
  }   }else if($register_data->gender=='male'){
      $mentook = get_men_icu_status();
      //print_r($mentook);

  if($mentook['limit']!='over'){ 
  
?>     

 <div class="clearfix"></div>
    <form action="<?php  echo current_url();  ?>" method="post" accept-charset="utf-8">

        <?php //echo msg_alert_backend();  ?>
      
        <?php if($register_data->admit_status==0){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Admit Date</label>
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('d/m/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly  placeholder="Discharge Date" id="discharge_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('discharge_date'); ?>
                </div> 
              </div>

               <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Bill Amount</label>
                  <input type="text"  placeholder="Bill Amount" id="bill_amount" class="form-control" 
                  name="bill_amount" value="">
                  <?php echo form_error('bill_amount'); ?>
                </div> 
              </div>


        <?php } ?>
      
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Specialty</label>
                    <input type="text" placeholder="Specialty" readonly   class="form-control" name="specialty" 
                    value="<?php if($specialty->specialty_name!=''){ echo ucfirst($specialty->specialty_name); } ?>">
                    <?php echo form_error('specialty_name'); ?>
                </div>  
              </div>  

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Gender</label>
                    <input type="text" readonly placeholder="Gender" class="form-control" name="gender" 
                    value="<?php if($register_data->gender!=''){  echo ucfirst($register_data->gender); }     ?>">
                    <?php echo form_error('gender'); ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class="control-label">Unit Type</label>
                    <input type="text" readonly placeholder="Unit Type" class="form-control" name="unit_type" 
                    value="<?php if($register_data->unit_type!=''){  echo ucfirst($register_data->unit_type); }     ?>">
                    <?php echo form_error('unit_type'); ?>
                </div>
              </div>
   
            <?php if($register_data->admit_status==0){ ?>   
              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputtext3" class="control-label">Bed No.:</label>
                    <select name="bed_no"  class="form-control" >
                      <option value="">-Select Bed No.- </option>
                       <option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='201'){ echo 'selected'; } ?> value="201">201 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='202'){ echo 'selected'; } ?> value="202">202 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='203'){ echo 'selected'; } ?> value="203">203 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='204'){ echo 'selected'; } ?> value="204">204 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='205'){ echo 'selected'; } ?> value="205">205 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='206'){ echo 'selected'; } ?> value="206">206 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='207'){ echo 'selected'; } ?> value="207">207 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='208'){ echo 'selected'; } ?> value="208">208 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='209'){ echo 'selected'; } ?> value="209">209 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='210'){ echo 'selected'; } ?> value="210">210 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='211'){ echo 'selected'; } ?> value="211">211 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='212'){ echo 'selected'; } ?> value="212">212 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='213'){ echo 'selected'; } ?> value="213">213 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='214'){ echo 'selected'; } ?> value="214">214 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='215'){ echo 'selected'; } ?> value="215">215 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='216'){ echo 'selected'; } ?> value="216">216 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='217'){ echo 'selected'; } ?> value="217">217 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='218'){ echo 'selected'; } ?> value="218">218 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='219'){ echo 'selected'; } ?> value="219">219 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='220'){ echo 'selected'; } ?> value="220">220 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='221'){ echo 'selected'; } ?> value="221">221 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='222'){ echo 'selected'; } ?> value="222">222 ICU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='401'){ echo 'selected'; } ?> value="401">401 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='402'){ echo 'selected'; } ?> value="402">402 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='403'){ echo 'selected'; } ?> value="403">403 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='404'){ echo 'selected'; } ?> value="404">404 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='405'){ echo 'selected'; } ?> value="405">405 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='406'){ echo 'selected'; } ?> value="406">406 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='407'){ echo 'selected'; } ?> value="407">407 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='408'){ echo 'selected'; } ?> value="408">408 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='409'){ echo 'selected'; } ?> value="409">409 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='410'){ echo 'selected'; } ?> value="410">410 ICCU </option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='451'){ echo 'selected'; } ?> value="451">451 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='452'){ echo 'selected'; } ?> value="452">452 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='453'){ echo 'selected'; } ?> value="453">453 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='454'){ echo 'selected'; } ?> value="454">454 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='455'){ echo 'selected'; } ?> value="455">455 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='456'){ echo 'selected'; } ?> value="456">456 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='457'){ echo 'selected'; } ?> value="457">457 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='458'){ echo 'selected'; } ?> value="458">458 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='459'){ echo 'selected'; } ?> value="459">459 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='460'){ echo 'selected'; } ?> value="460">460 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='461'){ echo 'selected'; } ?> value="461">461 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='462'){ echo 'selected'; } ?> value="462">462 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='463'){ echo 'selected'; } ?> value="463">463 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='464'){ echo 'selected'; } ?> value="464">464 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='465'){ echo 'selected'; } ?> value="465">465 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='466'){ echo 'selected'; } ?> value="466">466 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='467'){ echo 'selected'; } ?> value="467">467 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='468'){ echo 'selected'; } ?> value="468">468 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='469'){ echo 'selected'; } ?> value="469">469 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='470'){ echo 'selected'; } ?> value="470">470 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='471'){ echo 'selected'; } ?> value="471">471 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='472'){ echo 'selected'; } ?> value="472">472 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='473'){ echo 'selected'; } ?> value="473">473 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='474'){ echo 'selected'; } ?> value="474">474 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='475'){ echo 'selected'; } ?> value="475">475 ICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='557'){ echo 'selected'; } ?> value="557">557 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='558'){ echo 'selected'; } ?> value="558">558 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='559'){ echo 'selected'; } ?> value="559">559 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='560'){ echo 'selected'; } ?> value="560">560 NICU</option>
<option <?php if(isset($_POST['bed_no']) &&   $_POST['bed_no']=='561'){ echo 'selected'; } ?> value="561">561 NICU</option>
                    </select>
                    <?php echo form_error('bed_no'); ?>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" name="doctor_id">
                      <?php if($doctors!=''){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                          <option <?php if(isset($_POST['doctor_id']) && $_POST['doctor_id']==$row->id){ echo 'selected="selected"';    } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox"  <?php if(isset($_POST['waiting_cleared'])){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>

<?php if($mentook['limit']==='extend'){ ?>
      <div class="clearfix"></div>
      <br><br>
         <h4> Your bed limit is only 6 patient In ICU , 3 for male and 3 for female. Please comment in comment box why are you assigning bed to this patient.  </h4>
      <div class="col-md-3">
          <div class="form-group">
            <label for="inputtext3" class="control-label">Comment Box :</label>
              <textarea placeholder="Comment Box" class="form-control" name="comment_box"><?php echo set_value('comment_box');   ?></textarea>
            <?php echo form_error('comment_box'); ?>
          </div>
      </div>  

<?php }   ?>


 <?php }else{ ?>

          <div class="col-md-3">
              <div class="form-group">
                <label for="inputtext3" class="control-label">Bed No.:</label>
                <select name="bed_no" disabled  class="form-control"  >
                <option value="">-Select Bed No.-</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='201'){ echo 'selected'; } ?> value="201">201 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='202'){ echo 'selected'; } ?> value="202">202 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='203'){ echo 'selected'; } ?> value="203">203 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='204'){ echo 'selected'; } ?> value="204">204 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='205'){ echo 'selected'; } ?> value="205">205 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='206'){ echo 'selected'; } ?> value="206">206 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='207'){ echo 'selected'; } ?> value="207">207 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='208'){ echo 'selected'; } ?> value="208">208 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='209'){ echo 'selected'; } ?> value="209">209 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='210'){ echo 'selected'; } ?> value="210">210 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='211'){ echo 'selected'; } ?> value="211">211 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='212'){ echo 'selected'; } ?> value="212">212 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='213'){ echo 'selected'; } ?> value="213">213 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='214'){ echo 'selected'; } ?> value="214">214 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='215'){ echo 'selected'; } ?> value="215">215 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='216'){ echo 'selected'; } ?> value="216">216 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='217'){ echo 'selected'; } ?> value="217">217 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='218'){ echo 'selected'; } ?> value="218">218 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='219'){ echo 'selected'; } ?> value="219">219 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='220'){ echo 'selected'; } ?> value="220">220 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='221'){ echo 'selected'; } ?> value="221">221 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='222'){ echo 'selected'; } ?> value="222">222 ICU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='401'){ echo 'selected'; } ?> value="401">401 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='402'){ echo 'selected'; } ?> value="402">402 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='403'){ echo 'selected'; } ?> value="403">403 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='404'){ echo 'selected'; } ?> value="404">404 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='405'){ echo 'selected'; } ?> value="405">405 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='406'){ echo 'selected'; } ?> value="406">406 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='407'){ echo 'selected'; } ?> value="407">407 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='408'){ echo 'selected'; } ?> value="408">408 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='409'){ echo 'selected'; } ?> value="409">409 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='410'){ echo 'selected'; } ?> value="410">410 ICCU </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='451'){ echo 'selected'; } ?> value="451">451 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='452'){ echo 'selected'; } ?> value="452">452 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='453'){ echo 'selected'; } ?> value="453">453 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='454'){ echo 'selected'; } ?> value="454">454 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='455'){ echo 'selected'; } ?> value="455">455 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='456'){ echo 'selected'; } ?> value="456">456 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='457'){ echo 'selected'; } ?> value="457">457 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='458'){ echo 'selected'; } ?> value="458">458 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='459'){ echo 'selected'; } ?> value="459">459 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='460'){ echo 'selected'; } ?> value="460">460 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='461'){ echo 'selected'; } ?> value="461">461 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='462'){ echo 'selected'; } ?> value="462">462 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='463'){ echo 'selected'; } ?> value="463">463 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='464'){ echo 'selected'; } ?> value="464">464 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='465'){ echo 'selected'; } ?> value="465">465 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='466'){ echo 'selected'; } ?> value="466">466 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='467'){ echo 'selected'; } ?> value="467">467 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='468'){ echo 'selected'; } ?> value="468">468 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='469'){ echo 'selected'; } ?> value="469">469 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='470'){ echo 'selected'; } ?> value="470">470 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='471'){ echo 'selected'; } ?> value="471">471 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='472'){ echo 'selected'; } ?> value="472">472 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='473'){ echo 'selected'; } ?> value="473">473 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='474'){ echo 'selected'; } ?> value="474">474 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='475'){ echo 'selected'; } ?> value="475">475 ICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='557'){ echo 'selected'; } ?> value="557">557 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='558'){ echo 'selected'; } ?> value="558">558 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='559'){ echo 'selected'; } ?> value="559">559 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='560'){ echo 'selected'; } ?> value="560">560 NICU</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='561'){ echo 'selected'; } ?> value="561">561 NICU</option>

            </select>    
                <?php echo form_error('bed_no'); ?>
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="inputtext3" class="control-label">Assign Doctors :</label>
                <select class="form-control" disabled name="doctor_id">
                  <?php if($doctors!=''){ ?>
                      <option value="">- Select Doctor -</option>
                      <?php foreach ($doctors as $row){ ?>
                        <option  <?php if($register_data->assign_doctor!='' && $register_data->assign_doctor==$row->id){ ?> selected <?php } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                      <?php } ?>
                  <?php } ?> 
                </select>
                <?php echo form_error('doctor_id'); ?>
              </div>
          </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text" disabled  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php if($register_data->ipno!=''){ echo ucfirst($register_data->ipno); } ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled <?php if($register_data->waiting_cleared!=''){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>


 <?php  } ?>


            <div class="clearfix"></div>
              <hr>
              <div class="col-md-offset-4 col-md-4">   
                  <p><button type="submit" class="btn btn-block btn-info" name="save"> Update Status </button> </p>
              </div>
            </form>

<?php }else{ ?>

    <div style="padding: 12px 5px 4px 0px;" class="callout callout-info">
        <h4 class="text-center"> Limit Is Over </h4>
    </div>


<?php         
       }

}
        }else if($register_data->unit_type=='ward'){

            if($register_data->gender=='female'){

               $ward_womentook = get_women_ward_status($register_data->specialty_id);
               //print_r($ward_womentook);
        
if($ward_womentook['limit']!='over'){

?>

 <div class="clearfix"></div>
    <form action="<?php  echo current_url();  ?>" method="post" accept-charset="utf-8">

        <?php //echo msg_alert_backend();  ?>
      
        <?php if($register_data->admit_status==0){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Admit Date</label>
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('d/m/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="discharge_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('discharge_date'); ?>
                </div> 
              </div>

               <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Bill Amount</label>
                  <input type="text"  placeholder="Bill Amount" id="bill_amount" class="form-control" 
                  name="bill_amount" value="">
                  <?php echo form_error('bill_amount'); ?>
                </div> 
              </div>


        <?php } ?>
      
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Specialty</label>
                    <input type="text" placeholder="Specialty" readonly class="form-control" name="specialty" 
                    value="<?php if(!empty($specialty->specialty_name)){ echo ucfirst($specialty->specialty_name); } ?>">
                    <?php echo form_error('specialty_name'); ?>
                </div>  
              </div>  

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Gender</label>
                    <input type="text" readonly placeholder="Gender" class="form-control" name="gender" 
                    value="<?php if(!empty($register_data->gender)){  echo ucfirst($register_data->gender); }     ?>">
                    <?php echo form_error('gender'); ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class="control-label">Unit Type</label>
                    <input type="text" readonly placeholder="Unit Type" class="form-control" name="unit_type" 
                    value="<?php if(!empty($register_data->unit_type)){  echo ucfirst($register_data->unit_type); }     ?>">
                    <?php echo form_error('unit_type'); ?>
                </div>
              </div>
   
   
 <?php if($register_data->admit_status==0){ ?>   
              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputtext3" class="control-label">Bed No.:</label>
                      <select name="bed_no"  class="form-control"  >
                        <option value="">-Select Bed No.-</option>
                       <option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='501'){ echo 'selected'; } ?> value="501">501</option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='502'){ echo 'selected'; } ?> value="502">502 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='503'){ echo 'selected'; } ?> value="503">503 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='504'){ echo 'selected'; } ?> value="504">504 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='505'){ echo 'selected'; } ?> value="505">505 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='506'){ echo 'selected'; } ?> value="506">506 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='507'){ echo 'selected'; } ?> value="507">507 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='508'){ echo 'selected'; } ?> value="508">508 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='509'){ echo 'selected'; } ?> value="509">509 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='510'){ echo 'selected'; } ?> value="510">510 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='511'){ echo 'selected'; } ?> value="511">511 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='512'){ echo 'selected'; } ?> value="512">512 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='513'){ echo 'selected'; } ?> value="513">513 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='514'){ echo 'selected'; } ?> value="514">514 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='515'){ echo 'selected'; } ?> value="515">515 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='516'){ echo 'selected'; } ?> value="516">516 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='517'){ echo 'selected'; } ?> value="517">517 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='518'){ echo 'selected'; } ?> value="518">518 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='519'){ echo 'selected'; } ?> value="519">519 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='520'){ echo 'selected'; } ?> value="520">520 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='521'){ echo 'selected'; } ?> value="521">521 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='522'){ echo 'selected'; } ?> value="522">522 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='523'){ echo 'selected'; } ?> value="523">523 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='524'){ echo 'selected'; } ?> value="524">524 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='525'){ echo 'selected'; } ?> value="525">525 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='526'){ echo 'selected'; } ?> value="526">526 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='527'){ echo 'selected'; } ?> value="527">527 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='528'){ echo 'selected'; } ?> value="528">528 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='529'){ echo 'selected'; } ?> value="529">529 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='530'){ echo 'selected'; } ?> value="530">530 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='531'){ echo 'selected'; } ?> value="531">531 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='532'){ echo 'selected'; } ?> value="532">532 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='533'){ echo 'selected'; } ?> value="533">533 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='534'){ echo 'selected'; } ?> value="533">534 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='535'){ echo 'selected'; } ?> value="535">535 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='536'){ echo 'selected'; } ?> value="536">536 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='537'){ echo 'selected'; } ?> value="537">537 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='538'){ echo 'selected'; } ?> value="538">538 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='539'){ echo 'selected'; } ?> value="539">539 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='540'){ echo 'selected'; } ?> value="540">540 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='541'){ echo 'selected'; } ?> value="541">541 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='542'){ echo 'selected'; } ?> value="542">542 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='543'){ echo 'selected'; } ?> value="543">543 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='544'){ echo 'selected'; } ?> value="544">544 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='545'){ echo 'selected'; } ?> value="545">545 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='546'){ echo 'selected'; } ?> value="546">546 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='547'){ echo 'selected'; } ?> value="547">547 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='548'){ echo 'selected'; } ?> value="548">548 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='549'){ echo 'selected'; } ?> value="549">549 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='550'){ echo 'selected'; } ?> value="550">550 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='551'){ echo 'selected'; } ?> value="551">551 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='552'){ echo 'selected'; } ?> value="552">552 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='553'){ echo 'selected'; } ?> value="553">553 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='554'){ echo 'selected'; } ?> value="554">554 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='555'){ echo 'selected'; } ?> value="555">555 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='556'){ echo 'selected'; } ?> value="556">556 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='567'){ echo 'selected'; } ?> value="567">567 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='568'){ echo 'selected'; } ?> value="568">568 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='569'){ echo 'selected'; } ?> value="569">569 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='570'){ echo 'selected'; } ?> value="570">570 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='571'){ echo 'selected'; } ?> value="571">571 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='572'){ echo 'selected'; } ?> value="572">572 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='573'){ echo 'selected'; } ?> value="573">573 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='574'){ echo 'selected'; } ?> value="574">574 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='575'){ echo 'selected'; } ?> value="575">575 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='576'){ echo 'selected'; } ?> value="576">576 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='577'){ echo 'selected'; } ?> value="577">577 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='578'){ echo 'selected'; } ?> value="578">578 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='579'){ echo 'selected'; } ?> value="579">579 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='580'){ echo 'selected'; } ?> value="580">580 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='581'){ echo 'selected'; } ?> value="581">581 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='582'){ echo 'selected'; } ?> value="582">582 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='583'){ echo 'selected'; } ?> value="583">583 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='584'){ echo 'selected'; } ?> value="584">584 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='585'){ echo 'selected'; } ?> value="585">585 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='586'){ echo 'selected'; } ?> value="586">586 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='587'){ echo 'selected'; } ?> value="587">587 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='588'){ echo 'selected'; } ?> value="588">588 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='589'){ echo 'selected'; } ?> value="589">589 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='590'){ echo 'selected'; } ?> value="590">590 </option>
                    </select>
                    <?php echo form_error('bed_no'); ?>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" name="doctor_id">
                      <?php if($doctors!=''){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                            <option <?php if(isset($_POST['doctor_id']) && $_POST['doctor_id']==$row->id){ echo 'selected="selected"';    } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox"  <?php if(isset($_POST['waiting_cleared'])){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>
<?php if($ward_womentook['limit']==='extend'){ ?>
<div class="clearfix"></div>
<br><br>
			   <h4> Your bed limit is only 2 patient, one for male and one for female. Please comment in comment box why are you assigning bed to this patient.  </h4>
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Comment Box :</label>
                      <textarea placeholder="Comment Box" class="form-control" name="comment_box"><?php echo set_value('comment_box');   ?></textarea>
                    <?php echo form_error('comment_box'); ?>
                  </div>
              </div>  

<?php }   ?>


 <?php  }else{ ?>

    <div class="col-md-3">
        <div class="form-group">
          <label for="inputtext3" class="control-label">Bed No.:</label>
                <select name="bed_no" disabled class="form-control" >
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='501'){ echo 'selected'; } ?> value="501">501 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='502'){ echo 'selected'; } ?> value="502">502 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='503'){ echo 'selected'; } ?> value="503">503 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='504'){ echo 'selected'; } ?> value="504">504 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='505'){ echo 'selected'; } ?> value="505">505 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='506'){ echo 'selected'; } ?> value="506">506 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='507'){ echo 'selected'; } ?> value="507">507 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='508'){ echo 'selected'; } ?> value="508">508 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='509'){ echo 'selected'; } ?> value="509">509 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='510'){ echo 'selected'; } ?> value="510">510 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='511'){ echo 'selected'; } ?> value="511">511 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='512'){ echo 'selected'; } ?> value="512">512 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='513'){ echo 'selected'; } ?> value="513">513 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='514'){ echo 'selected'; } ?> value="514">514 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='515'){ echo 'selected'; } ?> value="515">515 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='516'){ echo 'selected'; } ?> value="516">516 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='517'){ echo 'selected'; } ?> value="517">517 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='518'){ echo 'selected'; } ?> value="518">518 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='519'){ echo 'selected'; } ?> value="519">519 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='520'){ echo 'selected'; } ?> value="520">520 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='521'){ echo 'selected'; } ?> value="521">521 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='522'){ echo 'selected'; } ?> value="522">522 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='523'){ echo 'selected'; } ?> value="523">523 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='524'){ echo 'selected'; } ?> value="524">524 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='525'){ echo 'selected'; } ?> value="525">525 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='526'){ echo 'selected'; } ?> value="526">526 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='527'){ echo 'selected'; } ?> value="527">527 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='528'){ echo 'selected'; } ?> value="528">528 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='529'){ echo 'selected'; } ?> value="529">529 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='530'){ echo 'selected'; } ?> value="530">530 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='531'){ echo 'selected'; } ?> value="531">531 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='532'){ echo 'selected'; } ?> value="532">532 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">533 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">534 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='535'){ echo 'selected'; } ?> value="535">535 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='536'){ echo 'selected'; } ?> value="536">536 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='537'){ echo 'selected'; } ?> value="537">537 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='538'){ echo 'selected'; } ?> value="538">538 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='539'){ echo 'selected'; } ?> value="539">539 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='540'){ echo 'selected'; } ?> value="540">540 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='541'){ echo 'selected'; } ?> value="541">541 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='542'){ echo 'selected'; } ?> value="542">542 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='543'){ echo 'selected'; } ?> value="543">543 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='544'){ echo 'selected'; } ?> value="544">544 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='545'){ echo 'selected'; } ?> value="545">545 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='546'){ echo 'selected'; } ?> value="546">546 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='547'){ echo 'selected'; } ?> value="547">547 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='548'){ echo 'selected'; } ?> value="548">548 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='549'){ echo 'selected'; } ?> value="549">549 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='550'){ echo 'selected'; } ?> value="550">550 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='551'){ echo 'selected'; } ?> value="551">551 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='552'){ echo 'selected'; } ?> value="552">552 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='553'){ echo 'selected'; } ?> value="553">553 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='554'){ echo 'selected'; } ?> value="554">554 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='555'){ echo 'selected'; } ?> value="555">555 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='556'){ echo 'selected'; } ?> value="556">556 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='567'){ echo 'selected'; } ?> value="567">567 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='568'){ echo 'selected'; } ?> value="568">568 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='569'){ echo 'selected'; } ?> value="569">569 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='570'){ echo 'selected'; } ?> value="570">570 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='571'){ echo 'selected'; } ?> value="571">571 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='572'){ echo 'selected'; } ?> value="572">572 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='573'){ echo 'selected'; } ?> value="573">573 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='574'){ echo 'selected'; } ?> value="574">574 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='575'){ echo 'selected'; } ?> value="575">575 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='576'){ echo 'selected'; } ?> value="576">576 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='577'){ echo 'selected'; } ?> value="577">577 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='578'){ echo 'selected'; } ?> value="578">578 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='579'){ echo 'selected'; } ?> value="579">579 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='580'){ echo 'selected'; } ?> value="580">580 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='581'){ echo 'selected'; } ?> value="581">581 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='582'){ echo 'selected'; } ?> value="582">582 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='583'){ echo 'selected'; } ?> value="583">583 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='584'){ echo 'selected'; } ?> value="584">584 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='585'){ echo 'selected'; } ?> value="585">585 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='586'){ echo 'selected'; } ?> value="586">586 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='587'){ echo 'selected'; } ?> value="587">587 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='588'){ echo 'selected'; } ?> value="588">588 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='589'){ echo 'selected'; } ?> value="589">589 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='590'){ echo 'selected'; } ?> value="590">590 </option>
</select>
 <?php echo form_error('bed_no'); ?>
      </div>
  </div>

    <div class="col-md-3">
        <div class="form-group">
          <label for="inputtext3" class="control-label">Assign Doctors :</label>
          <select class="form-control" disabled name="doctor_id">
            <?php if(!empty($doctors)){ ?>
                <option value="">- Select Doctor -</option>
                <?php foreach ($doctors as $row){ ?>
                  <option  <?php if(!empty($register_data->assign_doctor) && $register_data->assign_doctor==$row->id){ ?> selected <?php } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                <?php } ?>
            <?php } ?> 
          </select>
          <?php echo form_error('doctor_id'); ?>
        </div>
    </div> 
    <div class="col-md-3">
      <div class="form-group">
        <label for="inputtext3" class="control-label">IPNO:</label>
        <input type="text" disabled  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
        value="<?php if(!empty($register_data->ipno)){ echo ucfirst($register_data->ipno); } ?>">
        <?php echo form_error('ipno'); ?>
      </div>
    </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled <?php if(!empty($register_data->waiting_cleared)){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>


 <?php  } ?>

   <div class="clearfix"></div>
              <hr>

              <div class="clearfix"></div>
              <div class="col-md-offset-4 col-md-4">   
                  <p><button type="submit" class="btn btn-block btn-info" name="save">Update Status </button> </p>
              </div>
            </form>

<?php  }else{  ?>

  <div style="padding: 12px 5px 4px 0px;" class="callout callout-info">
        <h4 class="text-center"> Limit Is Over </h4>
    </div>

<?php  
	
}

            }else if($register_data->gender=='male'){
              //echo  'test3';
              $ward_mentook = get_men_ward_status($register_data->specialty_id);
               //print_r($ward_mentook);

    if($ward_mentook['limit']!='over'){
           

?>
 <div class="clearfix"></div>
    <form action="<?php  echo current_url();  ?>" method="post" accept-charset="utf-8">

        <?php //echo msg_alert_backend();  ?>
      
      <?php if($register_data->admit_status==0){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Admit Date</label>
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('d/m/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="discharge_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>

               <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Bill Amount</label>
                  <input type="text"  placeholder="Bill Amount" id="bill_amount" class="form-control" 
                  name="bill_amount" value="">
                 <span  id="bill_amount_error" class="error" ><?php echo form_error('bill_amount'); ?></span> 
                </div> 
              </div>

        <?php } ?>
      
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Specialty</label>
                    <input type="text" placeholder="Specialty" readonly   class="form-control" name="specialty" 
                    value="<?php if(!empty($specialty->specialty_name)){ echo ucfirst($specialty->specialty_name); } ?>">
                    <?php echo form_error('specialty_name'); ?>
                </div>  
              </div>  

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Gender</label>
                    <input type="text" readonly placeholder="Gender" class="form-control" name="gender" 
                    value="<?php if(!empty($register_data->gender)){  echo ucfirst($register_data->gender); }     ?>">
                    <?php echo form_error('gender'); ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class="control-label">Unit Type</label>
                    <input type="text" readonly placeholder="Unit Type" class="form-control" name="unit_type" 
                    value="<?php if(!empty($register_data->unit_type)){  echo ucfirst($register_data->unit_type); }     ?>">
                    <?php echo form_error('unit_type'); ?>
                </div>
              </div>
   
   
  <?php if($register_data->admit_status==0){ ?>   
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputtext3"  class="control-label">Bed No.:</label>
                    <select name="bed_no"  class="form-control"  >
                      <option value="">-Select Bed No.-</option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='501'){ echo 'selected'; } ?> value="501">501 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='502'){ echo 'selected'; } ?> value="502">502 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='503'){ echo 'selected'; } ?> value="503">503 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='504'){ echo 'selected'; } ?> value="504">504 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='505'){ echo 'selected'; } ?> value="505">505 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='506'){ echo 'selected'; } ?> value="506">506 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='507'){ echo 'selected'; } ?> value="507">507 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='508'){ echo 'selected'; } ?> value="508">508 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='509'){ echo 'selected'; } ?> value="509">509 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='510'){ echo 'selected'; } ?> value="510">510 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='511'){ echo 'selected'; } ?> value="511">511 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='512'){ echo 'selected'; } ?> value="512">512 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='513'){ echo 'selected'; } ?> value="513">513 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='514'){ echo 'selected'; } ?> value="514">514 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='515'){ echo 'selected'; } ?> value="515">515 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='516'){ echo 'selected'; } ?> value="516">516 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='517'){ echo 'selected'; } ?> value="517">517 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='518'){ echo 'selected'; } ?> value="518">518 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='519'){ echo 'selected'; } ?> value="519">519 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='520'){ echo 'selected'; } ?> value="520">520 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='521'){ echo 'selected'; } ?> value="521">521 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='522'){ echo 'selected'; } ?> value="522">522 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='523'){ echo 'selected'; } ?> value="523">523 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='524'){ echo 'selected'; } ?> value="524">524 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='525'){ echo 'selected'; } ?> value="525">525 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='526'){ echo 'selected'; } ?> value="526">526 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='527'){ echo 'selected'; } ?> value="527">527 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='528'){ echo 'selected'; } ?> value="528">528 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='529'){ echo 'selected'; } ?> value="529">529 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='530'){ echo 'selected'; } ?> value="530">530 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='531'){ echo 'selected'; } ?> value="531">531 </option>  
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='532'){ echo 'selected'; } ?> value="532">532 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='533'){ echo 'selected'; } ?> value="533">533 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='534'){ echo 'selected'; } ?> value="533">534 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='535'){ echo 'selected'; } ?> value="535">535 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='536'){ echo 'selected'; } ?> value="536">536 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='537'){ echo 'selected'; } ?> value="537">537 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='538'){ echo 'selected'; } ?> value="538">538 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='539'){ echo 'selected'; } ?> value="539">539 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='540'){ echo 'selected'; } ?> value="540">540 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='541'){ echo 'selected'; } ?> value="541">541 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='542'){ echo 'selected'; } ?> value="542">542 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='543'){ echo 'selected'; } ?> value="543">543 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='544'){ echo 'selected'; } ?> value="544">544 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='545'){ echo 'selected'; } ?> value="545">545 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='546'){ echo 'selected'; } ?> value="546">546 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='547'){ echo 'selected'; } ?> value="547">547 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='548'){ echo 'selected'; } ?> value="548">548 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='549'){ echo 'selected'; } ?> value="549">549 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='550'){ echo 'selected'; } ?> value="550">550 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='551'){ echo 'selected'; } ?> value="551">551 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='552'){ echo 'selected'; } ?> value="552">552 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='553'){ echo 'selected'; } ?> value="553">553 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='554'){ echo 'selected'; } ?> value="554">554 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='555'){ echo 'selected'; } ?> value="555">555 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='556'){ echo 'selected'; } ?> value="556">556 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='567'){ echo 'selected'; } ?> value="567">567 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='568'){ echo 'selected'; } ?> value="568">568 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='569'){ echo 'selected'; } ?> value="569">569 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='570'){ echo 'selected'; } ?> value="570">570 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='571'){ echo 'selected'; } ?> value="571">571 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='572'){ echo 'selected'; } ?> value="572">572 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='573'){ echo 'selected'; } ?> value="573">573 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='574'){ echo 'selected'; } ?> value="574">574 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='575'){ echo 'selected'; } ?> value="575">575 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='576'){ echo 'selected'; } ?> value="576">576 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='577'){ echo 'selected'; } ?> value="577">577 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='578'){ echo 'selected'; } ?> value="578">578 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='579'){ echo 'selected'; } ?> value="579">579 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='580'){ echo 'selected'; } ?> value="580">580 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='581'){ echo 'selected'; } ?> value="581">581 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='582'){ echo 'selected'; } ?> value="582">582 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='583'){ echo 'selected'; } ?> value="583">583 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='584'){ echo 'selected'; } ?> value="584">584 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='585'){ echo 'selected'; } ?> value="585">585 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='586'){ echo 'selected'; } ?> value="586">586 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='587'){ echo 'selected'; } ?> value="587">587 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='588'){ echo 'selected'; } ?> value="588">588 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='589'){ echo 'selected'; } ?> value="589">589 </option>
<option <?php if(isset($_POST['bed_no']) && $_POST['bed_no']=='590'){ echo 'selected'; } ?> value="590">590 </option>
                    </select>
                    <?php echo form_error('bed_no'); ?>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" name="doctor_id">
                      <?php if(!empty($doctors)){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                            <option <?php if(isset($_POST['doctor_id']) && $_POST['doctor_id']==$row->id){ echo 'selected="selected"';    } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="yes" <?php if(isset($_POST['waiting_cleared'])){ echo 'checked="checked"'; } ?> name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>

              <?php if($ward_mentook['limit']==='extend'){ ?>
             <div class="clearfix"></div>
<br><br>
			  <h4> Your bed limit is only 2 patient, one for male and one for female. Please comment in comment box why are you assigning bed to this patient.  </h4>	
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Comment Box :</label>
                    

                    <textarea placeholder="Comment Box" class="form-control" name="comment_box"><?php echo set_value('comment_box');   ?></textarea>
                    <?php echo form_error('comment_box'); ?>
                  </div>
              </div>  

<?php }  ?>

 <?php }else{ ?>

          <div class="col-md-3">
              <div class="form-group">
                <label for="inputtext3" class="control-label">Bed No.:</label>
                <select name="bed_no" disabled class="form-control" >
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='501'){ echo 'selected'; } ?> value="501">501 Male</option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='502'){ echo 'selected'; } ?> value="502">502 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='503'){ echo 'selected'; } ?> value="503">503 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='504'){ echo 'selected'; } ?> value="504">504 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='505'){ echo 'selected'; } ?> value="505">505 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='506'){ echo 'selected'; } ?> value="506">506 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='507'){ echo 'selected'; } ?> value="507">507 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='508'){ echo 'selected'; } ?> value="508">508 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='509'){ echo 'selected'; } ?> value="509">509 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='510'){ echo 'selected'; } ?> value="510">510 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='511'){ echo 'selected'; } ?> value="511">511 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='512'){ echo 'selected'; } ?> value="512">512 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='513'){ echo 'selected'; } ?> value="513">513 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='514'){ echo 'selected'; } ?> value="514">514 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='515'){ echo 'selected'; } ?> value="515">515 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='516'){ echo 'selected'; } ?> value="516">516 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='517'){ echo 'selected'; } ?> value="517">517 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='518'){ echo 'selected'; } ?> value="518">518 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='519'){ echo 'selected'; } ?> value="519">519 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='520'){ echo 'selected'; } ?> value="520">520 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='521'){ echo 'selected'; } ?> value="521">521 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='522'){ echo 'selected'; } ?> value="522">522 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='523'){ echo 'selected'; } ?> value="523">523 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='524'){ echo 'selected'; } ?> value="524">524 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='525'){ echo 'selected'; } ?> value="525">525 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='526'){ echo 'selected'; } ?> value="526">526 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='527'){ echo 'selected'; } ?> value="527">527 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='528'){ echo 'selected'; } ?> value="528">528 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='529'){ echo 'selected'; } ?> value="529">529 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='530'){ echo 'selected'; } ?> value="530">530 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='531'){ echo 'selected'; } ?> value="531">531 </option>  
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='532'){ echo 'selected'; } ?> value="532">532 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">533 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">534 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='535'){ echo 'selected'; } ?> value="535">535 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='536'){ echo 'selected'; } ?> value="536">536 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='537'){ echo 'selected'; } ?> value="537">537 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='538'){ echo 'selected'; } ?> value="538">538 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='539'){ echo 'selected'; } ?> value="539">539 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='540'){ echo 'selected'; } ?> value="540">540 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='541'){ echo 'selected'; } ?> value="541">541 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='542'){ echo 'selected'; } ?> value="542">542 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='543'){ echo 'selected'; } ?> value="543">543 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='544'){ echo 'selected'; } ?> value="544">544 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='545'){ echo 'selected'; } ?> value="545">545 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='546'){ echo 'selected'; } ?> value="546">546 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='547'){ echo 'selected'; } ?> value="547">547 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='548'){ echo 'selected'; } ?> value="548">548 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='549'){ echo 'selected'; } ?> value="549">549 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='550'){ echo 'selected'; } ?> value="550">550 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='551'){ echo 'selected'; } ?> value="551">551 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='552'){ echo 'selected'; } ?> value="552">552 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='553'){ echo 'selected'; } ?> value="553">553 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='554'){ echo 'selected'; } ?> value="554">554 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='555'){ echo 'selected'; } ?> value="555">555 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='556'){ echo 'selected'; } ?> value="556">556 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='567'){ echo 'selected'; } ?> value="567">567 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='568'){ echo 'selected'; } ?> value="568">568 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='569'){ echo 'selected'; } ?> value="569">569 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='570'){ echo 'selected'; } ?> value="570">570 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='571'){ echo 'selected'; } ?> value="571">571 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='572'){ echo 'selected'; } ?> value="572">572 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='573'){ echo 'selected'; } ?> value="573">573 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='574'){ echo 'selected'; } ?> value="574">574 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='575'){ echo 'selected'; } ?> value="575">575 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='576'){ echo 'selected'; } ?> value="576">576 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='577'){ echo 'selected'; } ?> value="577">577 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='578'){ echo 'selected'; } ?> value="578">578 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='579'){ echo 'selected'; } ?> value="579">579 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='580'){ echo 'selected'; } ?> value="580">580 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='581'){ echo 'selected'; } ?> value="581">581 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='582'){ echo 'selected'; } ?> value="582">582 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='583'){ echo 'selected'; } ?> value="583">583 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='584'){ echo 'selected'; } ?> value="584">584 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='585'){ echo 'selected'; } ?> value="585">585 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='586'){ echo 'selected'; } ?> value="586">586 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='587'){ echo 'selected'; } ?> value="587">587 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='588'){ echo 'selected'; } ?> value="588">588 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='589'){ echo 'selected'; } ?> value="589">589 </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='590'){ echo 'selected'; } ?> value="590">590 </option>

                </select>
                <?php echo form_error('bed_no'); ?>
              </div>
          </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" disabled name="doctor_id">
                      <?php if($doctors!=''){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                            <option  <?php if($register_data->assign_doctor!='' && $register_data->assign_doctor==$row->id){ ?> selected <?php } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text" disabled  placeholder="ipno" maxlength="7" class="form-control" name="ipno" 
                    value="<?php if($register_data->ipno!=''){ echo ucfirst($register_data->ipno); } ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled <?php if($register_data->waiting_cleared!=''){ echo 'checked="checked"'; } ?> value="yes" name="waiting_cleared">Yes
                    </label>
                   <!--  <label class="radio-inline">
                      <input type="radio" value="no" name="waiting_cleared">No
                    </label> -->
                   <?php echo form_error('waiting_cleared'); ?>
                  </div>
              </div>


 <?php  } ?>

   <div class="clearfix"></div>
              <hr>

              <div class="clearfix"></div>
              <div class="col-md-offset-4 col-md-4">   
                  <p><button type="submit" class="btn btn-block btn-info" name="save">Update Status </button> </p>
              </div>
            </form>

<?php }else{ ?>

<div style="padding: 12px 5px 4px 0px;" class="callout callout-info">
        <h4 class="text-center"> Limit Is Over </h4>
    </div>

<?php


}
            }
            

        }



      ?>
             

                </div><!-- /.box-body -->
              </div><!-- /.box -->

        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->