<style type="text/css" media="screen">
  .error{color: red;} .mend{ color: red; }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Referral BPL 
        <!-- <small>Opreaton Module</small> -->
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    
    </section>


    <?php $special->slug;  ?>

    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-warning ">
          <div class="box-header with-border">
             <h3 class="box-title"> Add Referral BPL </h3>
          </div>
             <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
              <div class="box-body">
               <?php  echo msg_alert_backend();  ?>
              
              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">BPL Card No. <span class="mend">*</span></label>
                  <input type="text" maxlength="20"  value="<?php echo set_value('bpl_card_no') ?>" class="form-control" name="bpl_card_no" placeholder="BPL Card No.">
                  <span class=""><?php echo form_error('bpl_card_no');  ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Upload BPL Card PDF </label>
                  <input type="file" id="bplUpload" name="bpl_card_file" placeholder="BPL Card">
                  <span id="lblError" class="error"><?php echo form_error('bpl_card_file');  ?></span>
                </div>
              </div> 
              
              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Aadhar Card No. <span class="mend">*</span></label>
                 <input type="text" id="aadhar_crad_no"  maxlength="12" value="<?php echo set_value('aadhar_crad_no') ?>" class="form-control" name="aadhar_crad_no" placeholder="Aadhar Card No.">
                  <span id="aadhar_crad_no_error"  class="error"><?php echo form_error('aadhar_crad_no'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Upload Aadhar Card PDF </label>
                  <input type="file" id="aadharUpload" name="aadhar_card_file" >
                  <span id="lbladharError" class="error"><?php echo form_error('aadhar_card_file');  ?></span>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Patient's First Name <span class="mend">*</span></label>
                 <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo set_value('first_name') ?>" placeholder="Patient First Name">
                    <span class=""><?php echo form_error('first_name');  ?></span>
                </div>
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Patient Middle Name</label>
                   <input type="text" class="form-control" id="middle_name" value="<?php echo set_value('middle_name') ?>" name="middle_name" placeholder="Patient Middle Name">
                  <span class=""><?php echo form_error('middle_name'); ?></span>
                </div> 
                <div class="col-md-4">
                   <label for="inputEmail3" class="control-label">Patient's Last Name <span class="mend">*</span></label>
                   <input type="text" class="form-control" id="last_name" value="<?php echo set_value('last_name') ?>" name="last_name" placeholder="Patient Last Name">
                  
                  <span class=""><?php echo form_error('last_name');  ?></span>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-12">
                  <label for="inputEmail3" class="control-label">Address</label>
                 <textarea class="form-control" name="address" placeholder="Address"><?php echo set_value('address') ?></textarea>
                  <span class=""><?php echo form_error('address'); ?></span>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Date Of Birth</label>
                <input type="text" class="form-control" id="date_of_birth" value="<?php echo set_value('date_of_birth') ?>" name="date_of_birth" placeholder="Date Of Birth (DD/MM/YY)">
                  <span class=""><?php echo form_error('date_of_birth'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Age</label>
                <input type="text" class="form-control" id="person_age" value="<?php echo set_value('age') ?>" name="age" placeholder="Age">  
                <span class=""><?php echo form_error('age'); ?></span>
                </div> 
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Gender <span class="mend">*</span></label>
                  <select name="gender" class="form-control">
                    <option value=""> - Select Gender - </option>
                    <option <?php if(isset($_POST['gender']) && $_POST['gender']=='male'){ echo 'selected="selected"';  } ?> value="male">  Male </option>
                    <option <?php if(isset($_POST['gender']) && $_POST['gender']=='female'){ echo 'selected="selected"';  } ?> value="female"> Female </option>
                  </select>
                  <span class=""><?php echo form_error('gender'); ?></span>
                </div>
              </div> 


              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Occupation</label>
               <input type="text" class="form-control" value="<?php echo set_value('occupation') ?>" name="occupation" placeholder="Occupation">
                  <span class=""><?php echo form_error('occupation'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">City <span class="mend">*</span></label>
                <select name="city" class="form-control" placeholder="City">
                      <option value="">- Select City -</option>
                      <option <?php if(isset($_POST['city']) && $_POST['city']=='indore'){ echo 'selected="selected"';  }else{ echo 'selected="selected"'; } ?> value='indore' > Indore </option>
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
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">State <span class="mend">*</span></label>
                  <select class="form-control" name="state">
                      <option value="mp"> Madhya Pradesh </option>
                  </select>   
                  <span class=""><?php echo form_error('state'); ?></span>
                </div>
              </div> 


              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Pin </label>
                <input type="text" class="form-control" id="pin_no" maxlength="6" value="<?php echo set_value('pin') ?>" name="pin" placeholder="Pin">
                  
                  <span id="pin_no_error" class="error" ><?php echo form_error('pin'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Telephone</label>
               <input type="text" class="form-control" id="telephone_no" maxlength="15" value="<?php echo set_value('telephone_no') ?>" name="telephone_no" placeholder="Telephone No">
                  
                  <span id="telephone_no_error" class="error"><?php echo form_error('telephone_no'); ?></span>
                </div> 
                <div class="col-md-4">
                   <label for="inputEmail3" class="control-label">Mobile No <span class="mend">*</span></label>
                 <input type="text" class="form-control" id="mobile_no" maxlength="10" value="<?php echo set_value('mobile_no') ?>" name="mobile_no" placeholder="Mobile No">
                  
                  <span id="mobile_no_error" class="error"><?php echo form_error('mobile_no'); ?></span>
                </div>
              </div>  

               <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Vehicle Owned</label>
                  <select id="vehicle_owned"  name="vehicle_owned"   class="form-control">
                      <option value="">- Select Vehicle Owned -</option>
                     <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='none'){ echo 'selected="selected"';  } ?> value="none"> None </option>
                      <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='two-wheeler'){ echo 'selected="selected"';  } ?> value="two-wheeler">Two Wheeler</option>
                      <option <?php if(isset($_POST['vehicle_owned']) && $_POST['vehicle_owned']=='four-wheeler'){ echo 'selected="selected"';  } ?> value="four-wheeler">Four Wheeler</option>
                  </select>
                  <span id="vehicle_error" class="error"><?php echo form_error('vehicle_owned'); ?></span>
                </div>
                <div class="col-md-6">
                <label for="inputEmail3" class="control-label">Annual Income</label>
               <input type="text" class="form-control" id="annual_income" maxlength="10" value="<?php echo set_value('annual_income') ?>" name="annual_income" placeholder="Annual Income">
                  
                  <span id="annual_income_error" class="error" ><?php echo form_error('annual_income'); ?></span>
                </div> 
                
              </div>  

              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Case Type <span class="mend">*</span></label>
                  <br>
               <label class="checkbox-inline">
                    <input type="checkbox" name="case_type[]" value="surgical"> Surgical
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="case_type[]" value="medical"> Medical
                  </label>
            
                  <span class=""><?php echo form_error('case_type[]'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Specialty <span class="mend">*</span></label>
                  <select name="specialty" class="form-control">
                    <option value="">-Select Specialty-</option>
              
                    <?php if(!empty($specialty)): ?>
                      <?php foreach ($specialty as $row): ?>
                         <?php if(!empty($special->slug) && $special->slug==$row->slug){ ?>
                      <option    <?php if(!empty($special->slug)){ echo 'selected="selected"';  }else{ if(isset($_POST['specialty']) && $_POST['specialty']==$row->id){ echo 'selected="selected"';  } }?> value="<?php echo $row->id; ?>"><?php  echo ucfirst($row->specialty_name); ?></option>
                       <?php } ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select> 
                  <span class=""><?php echo form_error('specialty'); ?></span>
                </div> 
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Unit Type <span class="mend">*</span></label>
                  <select name="unit_type" class="form-control">
                    <option value="">-Select Unit-</option>
                    <option <?php if(isset($_POST['unit_type']) && $_POST['unit_type']=='icu'){ echo 'selected="selected"';  } ?> value="icu">ICU</option>
                    <option <?php if(isset($_POST['unit_type']) && $_POST['unit_type']=='ward'){ echo 'selected="selected"';  } ?> value="ward">Ward</option>
                  </select> 
                  <span class=""><?php echo form_error('unit_type'); ?></span>
                </div>
              </div> 
              <hr> 
              <h3 class="box-title"> Clinical Information </h3>

              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Symptoms <span class="mend">*</span></label>
                  <textarea class="form-control"  name="symptoms" placeholder="Symptoms"><?php echo set_value('symptoms') ?></textarea>
                  <span class=""><?php echo form_error('symptoms'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Examination Finding</label>
                  <textarea class="form-control" name="examination_finding" placeholder="Examination Finding"><?php echo set_value('examination_finding') ?></textarea>
                  <span class=""><?php echo form_error('examination_finding'); ?></span>
                </div> 
              </div> 

              <div class="form-group">
                <div class="col-md-12">
                  <label for="inputEmail3" class="control-label"> Relevant Testes/investigations </label>
                  <textarea class="form-control"  name="relevant_tests_investigations" placeholder="Relevant Testes/investigations"><?php echo set_value('relevant_tests_investigations') ?></textarea>
                  <span class=""><?php echo form_error('relevant_tests_investigations'); ?></span>
                </div>    
              </div> 

              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Past Medical History </label>
                  <textarea class="form-control" name="past_medical_history" placeholder="Past Medical History"><?php echo set_value('past_medical_history') ?></textarea>
                  <span class=""><?php echo form_error('past_medical_history'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Current History</label>
                  <textarea class="form-control" name="current_history" placeholder="Current History"><?php echo set_value('current_history') ?></textarea>
                  <span class=""><?php echo form_error('current_history'); ?></span>
                </div> 
              </div>  

              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Adverse events / allergies </label>
                   <input type="text"  class="form-control" value="<?php echo set_value('adverse_events_allergies') ?>" name="adverse_events_allergies" placeholder="Adverse events / allergies ">
                  <span class=""><?php echo form_error('adverse_events_allergies'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Family History</label>
                  <input type="text" class="form-control" value="<?php echo set_value('family_history') ?>" name="family_history" placeholder="Family History">
                  <span class=""><?php echo form_error('family_history'); ?></span>
                </div> 
              </div>  

              <div class="form-group">
                <div class="col-md-12">
                  <label for="inputEmail3" class="control-label"> Social History </label>
                  <input type="text"  class="form-control" value="<?php echo set_value('social_history') ?>" name="social_history" placeholder="Social History">
                  <span class=""><?php echo form_error('social_history'); ?></span>
                </div>
              </div> 

              <hr> 
              <h3 class="box-title"> Clinical Information </h3>

              <div class="form-group">
                <div class="col-md-12">
                  <label for="inputEmail3" class="control-label"> Name of Referral Centre  <span class="mend">*</span></label>
                  
                   <select name="referral_centre" id="referral_centre" class="form-control" readonly="readonly"  >
                     
                    <?php if(!empty($hospitals)){ ?>
                        <?php foreach($hospitals as $row){ ?>
                      
                        <?php if($row->id==user_id()): ?>
                        <option selected="selected" value="<?php echo $row->id; ?>"> <?php  echo  ucfirst($row->hospital_name);  ?></option> <?php endif ?>
                        
                        <?php } ?>
                    <?php } ?>

                   </select>

                  <span class=""><?php echo form_error('referral_centre'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Reason For Referral / Comments</label>
                  <input type="text" class="form-control" value="<?php echo set_value('referral_reason') ?>" name="referral_reason" placeholder="Reason For Referral">

                  <span class=""><?php echo form_error('referral_reason'); ?></span>
                </div> 
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Date of Referral </label>
                  <input type="text" class="form-control" id="date_of_referral" value="<?php echo set_value('date_of_referral') ?>" name="date_of_referral" placeholder="Date of Referral">

                  <span class=""><?php echo form_error('date_of_referral'); ?></span>
                </div> 
              </div>  
              <hr> 
              <h3 class="box-title"> Referral Designation </h3>

              <?php $members = get_hospital_members();  ?>
            
              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label"> Name  <span class="mend">*</span></label>
                  <select class="form-control"  id="referral_name" name="referral_name" >
                      <option value="">-Select Name-</option>
                      <?php if(!empty($members)){ ?>
                        <?php foreach ($members as $row) { ?> 
                           <option value="<?php echo $row->id; ?>"><?php echo ucfirst($row->first_name.' '.$row->last_name);   ?></option>
                        <?php } ?>
                      <?php } ?>
                  </select>
                  <span class=""><?php echo form_error('referral_name'); ?></span>

                </div>
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Designation</label>
                  <input type="text" class="form-control" readonly id="designation" value="<?php echo set_value('referral_designation') ?>" name="referral_designation" placeholder="Designation">
                  <span class=""><?php echo form_error('referral_designation'); ?></span>
                </div> 
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label"> Mobile No. </label>
                  <input type="text" class="form-control" readonly id="mobile_num" value="<?php echo set_value('mobile_no') ?>" name="mobile_no" placeholder="Mobile No.">
                  <span class=""><?php echo form_error('mobile_no'); ?></span>
                </div> 
              </div>  

          </div>             
          <div class="box-footer">
            <button onclick="return ValidateExtension()" class="btn btn-primary" type="submit">Save</button>
            <a href="<?php echo base_url('referral/bpl/');  ?>" class="btn btn-danger">Cancel</a>
          </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->