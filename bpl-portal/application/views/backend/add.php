<style type="text/css" media="screen">
  .error{color: red;} .mend{ color: red; }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage BPL Registration
        <!-- <small>Opreaton Module</small> -->
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-warning ">
          <div class="box-header with-border">
             <h3 class="box-title"> Add BPL </h3>
          </div>
             <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
              <div class="box-body">
               <?php  echo msg_alert_backend();  ?>
              
              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">BPL Card No.  <span class="mend">*</span> </label>
                  <input type="text" class="form-control" name="bpl_card_no" value="<?php echo set_value('bpl_card_no')    ?>"  maxlength="20" placeholder="BPL Card No.">
                  <span class=""><?php echo form_error('bpl_card_no');  ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label"> Upload BPL Card PDF <span class="mend">*</span></label>
                  <input type="file" id="bplUpload" name="bpl_card_file" placeholder="BPL Card">
                  <span id="lblError" class="error"><?php echo form_error('bpl_card_file');  ?></span>
                </div>
              </div> 
             
              <div class="form-group">
                <div class="col-md-6">
                  <label for="inputEmail3" class="control-label">Aadhar Card No. <span class="mend">*</span> </label>
                 <input type="text" class="form-control"  value="<?php echo set_value('aadhar_crad_no')    ?>" name="aadhar_crad_no" id="aadhar_crad_no"  maxlength="12" placeholder="Aadhar Card No.">
                  <span id="aadhar_crad_no_error"  class="error"><?php echo form_error('aadhar_crad_no'); ?></span>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3"  class="control-label">Upload Aadhar Card PDF <span class="mend">*</span></label>
                  <input type="file" id="aadharUpload" name="aadhar_card_file" >
                  <span id="lbladharError" class="error"><?php echo form_error('aadhar_card_file');  ?></span>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Patient's First Name <span class="mend">*</span></label>
                 <input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name') ?>" placeholder="Patient First Name">
                  
                    <span class=""><?php echo form_error('first_name');  ?></span>
                </div>
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Patient Middle Name </label>
                   <input type="text" class="form-control"  value="<?php echo set_value('middle_name') ?>" name="middle_name" placeholder="Patient Middle Name">
                  <span class=""><?php echo form_error('middle_name');  ?></span>
                </div> 
                <div class="col-md-4">
                   <label for="inputEmail3" class="control-label">Patient's Last Name <span class="mend">*</span> </label>
                   <input type="text" class="form-control" value="<?php echo set_value('last_name') ?>" name="last_name" placeholder="Patient Last Name">
                  
                  <span class=""><?php echo form_error('last_name');  ?></span>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-12">
                  <label for="inputEmail3" class="control-label">Address </label>
                 <textarea class="form-control" name="address" placeholder="Address"><?php echo set_value('address') ?></textarea>
                  <span class=""><?php echo form_error('address'); ?></span>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Date Of Birth </label>
                <input type="text" class="form-control" id="date_of_birth" value="<?php echo set_value('date_of_birth') ?>" name="date_of_birth" placeholder="Date Of Birth (DD/MM/YY)">
                  <span class=""><?php echo form_error('date_of_birth'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Age</label>
                <input type="text" id="person_age" class="form-control" value="<?php echo set_value('age') ?>" name="age" placeholder="Age">  
                <span class=""><?php echo form_error('age'); ?></span>
                </div> 
                <div class="col-md-4">
                  <label for="inputEmail3" class="control-label">Gender <span class="mend">*</span></label>
                  <select name="gender" class="form-control">
                    <option value=""> - Select Gender - </option>
                    <option <?php if(isset($_POST['gender']) && $_POST['gender']=='male'){ echo 'selected="selected"';  } ?> value="male"> Male </option>
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
                      <option  <?php if(!isset($_POST['city'])){  echo  'selected="selected"'; } ?> <?php if(isset($_POST['city']) && $_POST['city']=='indore'){ echo 'selected="selected"';  } ?> value='indore'  >  Indore  </option>
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
                  
                  <span id="pin_no_error" class="error"><?php echo form_error('pin'); ?></span>
                </div>
                <div class="col-md-4">
                <label for="inputEmail3" class="control-label">Telephone No.</label>
               <input type="text" class="form-control" id="telephone_no" maxlength="15" value="<?php echo set_value('telephone_no') ?>" name="telephone_no" placeholder="Telephone No">
                  
                  <span id="telephone_no_error" class="error" ><?php echo form_error('telephone_no'); ?></span>
                </div> 
                <div class="col-md-4">
                   <label for="inputEmail3" class="control-label">Mobile No <span class="mend">*</span></label>
                 <input type="text" class="form-control"  id="mobile_no" maxlength="10" value="<?php echo set_value('mobile_no') ?>" name="mobile_no" placeholder="Mobile No">
                  
                  <span id="mobile_no_error" class="error"><?php echo form_error('mobile_no'); ?></span>
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
                        <option value="<?php echo $row->id; ?>"><?php  echo ucfirst($row->specialty_name); ?></option>
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

          </div>             
          <div class="box-footer">
            <button onclick="return ValidateExtension()" class="btn btn-primary" type="submit">Save</button>
             <a href="<?php echo base_url('backend/bpl_lists/');  ?>" class="btn btn-danger">Cancel</a>
          </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->