<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Registration 
      <!--   <small>Opreaton Module</small> -->
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
                        <a href="<?php     ?>" class="btn btn-xs btn-warning" title=""> BPL Card </a>
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
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('m/d/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="admin_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('discharge_date'); ?>
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
                        <option value="201">201 Male </option>
                        <option value="202">202 Female </option>
                        <option value="401">401 Male </option>
                        <option value="451">451 Male </option>
                        <option value="452">452 Female </option>
                        <option value="557">557 NICU </option>
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
                            <option value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="yes" name="waiting_cleared">Yes
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
                 <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='201'){ echo 'selected'; } ?> value="201">201 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='202'){ echo 'selected'; } ?> value="202">202 Female </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='401'){ echo 'selected'; } ?> value="401">401 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='451'){ echo 'selected'; } ?> value="451">451 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='452'){ echo 'selected'; } ?> value="452">452 Female </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='557'){ echo 'selected'; } ?> value="557">557 NICU </option>

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
                        <option  <?php if($register_data->assign_doctor!="" && $register_data->assign_doctor==$row->id){ ?> selected <?php } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                      <?php } ?>
                  <?php } ?> 
                </select>
                <?php echo form_error('doctor_id'); ?>
              </div>
          </div> 
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text" disabled  placeholder="ipno" class="form-control" name="ipno" 
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
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('m/d/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly  placeholder="Discharge Date" id="admin_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('discharge_date'); ?>
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
                        <option value="201">201 Male </option>
                        <option value="202">202 Female </option>
                        <option value="401">401 Male </option>
                        <option value="451">451 Male </option>
                        <option value="452">452 Female </option>
                        <option value="557">557 NICU </option>
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
                            <option value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="yes" name="waiting_cleared">Yes
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
                 <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='201'){ echo 'selected'; } ?> value="201">201 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='202'){ echo 'selected'; } ?> value="202">202 Female </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='401'){ echo 'selected'; } ?> value="401">401 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='451'){ echo 'selected'; } ?> value="451">451 Male </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='452'){ echo 'selected'; } ?> value="452">452 Female </option>
<option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='557'){ echo 'selected'; } ?> value="557">557 NICU </option>

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
                    <input type="text" disabled  placeholder="ipno" class="form-control" name="ipno" 
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
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('m/d/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="admin_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('discharge_date'); ?>
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
                        <option  value="501">501 Male </option>
                        <option  value="502">502 Male </option>
                        <option  value="503">503 Male </option>
                        <option  value="504">504 Male </option>
                        <option  value="505">505 Male </option>
                        <option  value="506">506 Male </option>
                        <option  value="507">507 Male </option>
                        <option  value="508">508 Male </option>
                        <option  value="509">509 Male </option>
                        <option  value="510">510 Male </option>
                        <option  value="511">511 Male </option>
                        <option  value="512">512 Male </option>
                        <option  value="513">513 Male </option>
                        <option  value="514">514 Male </option>
                        <option  value="515">515 Male </option>
                        <option  value="516">516 Male </option>  
                        <option  value="517">517 Female</option>  
                        <option  value="518">518 Female</option>  
                        <option  value="519">519 Female</option>  
                        <option  value="520">520 Female</option>  
                        <option  value="521">521 Female</option>  
                        <option  value="522">522 Female</option>  
                        <option  value="523">523 Female</option>  
                        <option  value="524">524 Female</option>  
                        <option  value="525">525 Female</option>  
                        <option  value="526">526 Female</option>  
                        <option  value="527">527 Female</option>  
                        <option  value="528">528 Female</option>  
                        <option  value="529">529 Female</option>  
                        <option  value="530">530 Female</option>  
                        <option  value="531">531 Female</option>  
                        <option  value="532">532 Female</option>
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
                            <option value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="yes" name="waiting_cleared">Yes
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
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='501'){ echo 'selected'; } ?> value="501">501 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='502'){ echo 'selected'; } ?> value="502">502 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='503'){ echo 'selected'; } ?> value="503">503 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='504'){ echo 'selected'; } ?> value="504">504 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='505'){ echo 'selected'; } ?> value="505">505 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='506'){ echo 'selected'; } ?> value="506">506 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='507'){ echo 'selected'; } ?> value="507">507 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='508'){ echo 'selected'; } ?> value="508">508 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='509'){ echo 'selected'; } ?> value="509">509 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='510'){ echo 'selected'; } ?> value="510">510 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='511'){ echo 'selected'; } ?> value="511">511 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='512'){ echo 'selected'; } ?> value="512">512 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='513'){ echo 'selected'; } ?> value="513">513 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='514'){ echo 'selected'; } ?> value="514">514 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='515'){ echo 'selected'; } ?> value="515">515 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='516'){ echo 'selected'; } ?> value="516">516 Male </option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='517'){ echo 'selected'; } ?> value="517">517 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='518'){ echo 'selected'; } ?> value="518">518 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='519'){ echo 'selected'; } ?> value="519">519 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='520'){ echo 'selected'; } ?> value="520">520 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='521'){ echo 'selected'; } ?> value="521">521 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='522'){ echo 'selected'; } ?> value="522">522 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='523'){ echo 'selected'; } ?> value="523">523 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='524'){ echo 'selected'; } ?> value="524">524 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='525'){ echo 'selected'; } ?> value="525">525 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='526'){ echo 'selected'; } ?> value="526">526 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='527'){ echo 'selected'; } ?> value="527">527 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='528'){ echo 'selected'; } ?> value="528">528 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='529'){ echo 'selected'; } ?> value="529">529 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='530'){ echo 'selected'; } ?> value="530">530 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='531'){ echo 'selected'; } ?> value="531">531 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='532'){ echo 'selected'; } ?> value="532">532 Female</option>  
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
                    <input type="text" disabled  placeholder="ipno" class="form-control" name="ipno" 
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
                  <input type="text" readonly placeholder="Admit Date" id="admin_date" class="form-control" name="admit_date" value="<?php echo date('m/d/Y');   ?>">
                  <?php echo form_error('admit_date'); ?>
                </div> 
              </div>
        
        <?php }else if($register_data->admit_status==1){ ?>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Discharge Date</label>
                  <input type="text" readonly placeholder="Discharge Date" id="admin_date" class="form-control" 
                  name="discharge_date" value="">
                  <?php echo form_error('admit_date'); ?>
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
                      <option  value="501">501 Male </option>
                      <option  value="502">502 Male </option>
                      <option  value="503">503 Male </option>
                      <option  value="504">504 Male </option>
                      <option  value="505">505 Male </option>
                      <option  value="506">506 Male </option>
                      <option  value="507">507 Male </option>
                      <option  value="508">508 Male </option>
                      <option  value="509">509 Male </option>
                      <option  value="510">510 Male </option>
                      <option  value="511">511 Male </option>
                      <option  value="512">512 Male </option>
                      <option  value="513">513 Male </option>
                      <option  value="514">514 Male </option>
                      <option  value="515">515 Male </option>
                      <option  value="516">516 Male </option>  
                      <option  value="517">517 Female</option>  
                      <option  value="518">518 Female</option>  
                      <option  value="519">519 Female</option>  
                      <option  value="520">520 Female</option>  
                      <option  value="521">521 Female</option>  
                      <option  value="522">522 Female</option>  
                      <option  value="523">523 Female</option>  
                      <option  value="524">524 Female</option>  
                      <option  value="525">525 Female</option>  
                      <option  value="526">526 Female</option>  
                      <option  value="527">527 Female</option>  
                      <option  value="528">528 Female</option>  
                      <option  value="529">529 Female</option>  
                      <option  value="530">530 Female</option>  
                      <option  value="531">531 Female</option>  
                      <option  value="532">532 Female</option>
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
                            <option value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">IPNO:</label>
                    <input type="text"  placeholder="ipno" class="form-control" name="ipno" 
                    value="<?php echo set_value('ipno');   ?>">
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Waiting Cleared :</label>
                     <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="yes" name="waiting_cleared">Yes
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
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='501'){ echo 'selected'; } ?> value="501">501 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='502'){ echo 'selected'; } ?> value="502">502 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='503'){ echo 'selected'; } ?> value="503">503 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='504'){ echo 'selected'; } ?> value="504">504 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='505'){ echo 'selected'; } ?> value="505">505 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='506'){ echo 'selected'; } ?> value="506">506 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='507'){ echo 'selected'; } ?> value="507">507 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='508'){ echo 'selected'; } ?> value="508">508 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='509'){ echo 'selected'; } ?> value="509">509 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='510'){ echo 'selected'; } ?> value="510">510 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='511'){ echo 'selected'; } ?> value="511">511 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='512'){ echo 'selected'; } ?> value="512">512 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='513'){ echo 'selected'; } ?> value="513">513 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='514'){ echo 'selected'; } ?> value="514">514 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='515'){ echo 'selected'; } ?> value="515">515 Male </option>
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='516'){ echo 'selected'; } ?> value="516">516 Male </option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='517'){ echo 'selected'; } ?> value="517">517 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='518'){ echo 'selected'; } ?> value="518">518 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='519'){ echo 'selected'; } ?> value="519">519 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='520'){ echo 'selected'; } ?> value="520">520 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='521'){ echo 'selected'; } ?> value="521">521 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='522'){ echo 'selected'; } ?> value="522">522 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='523'){ echo 'selected'; } ?> value="523">523 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='524'){ echo 'selected'; } ?> value="524">524 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='525'){ echo 'selected'; } ?> value="525">525 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='526'){ echo 'selected'; } ?> value="526">526 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='527'){ echo 'selected'; } ?> value="527">527 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='528'){ echo 'selected'; } ?> value="528">528 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='529'){ echo 'selected'; } ?> value="529">529 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='530'){ echo 'selected'; } ?> value="530">530 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='531'){ echo 'selected'; } ?> value="531">531 Female</option>  
                  <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='532'){ echo 'selected'; } ?> value="532">532 Female</option>  
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
                    <input type="text" disabled  placeholder="ipno" class="form-control" name="ipno" 
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