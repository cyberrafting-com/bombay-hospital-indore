<style type="text/css" media="screen">
  .error{color: red;} .men{ color: red; }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Hospital
        <!-- <small>Opreaton Module</small> -->
      </h1>
  <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-warning ">
        <div class="box-header with-border">
           <h3 class="box-title"> Add Hospital </h3>
        </div>
        <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
 
        <div class="box-body">
  
        <div class="form-group">

          <label for="inputPassword3" class="col-sm-2 control-label">Hospital Name <span class="men">*</span></label>

          <div class="col-sm-9">

            <input type="text" class="form-control"  name="hospital_name" placeholder="Hospital Name" value="<?php if(!empty($customer->hospital_name)) echo $customer->hospital_name; ?>">

            <?php  echo form_error('hospital_name');  ?><span style="color:red;" id="em_error"></span>

          </div>

        </div> 



        <div class="form-group">

          <label for="inputPassword3" class="col-sm-2 control-label">Address<span class="men">*</span></label>

          <div class="col-sm-9">

              <textarea name="address"  id="address"  class="form-control"><?php if(!empty($customer->address)) echo $customer->address; ?></textarea>

            <?php  echo form_error('address');  ?><span style="color:red;" id="ad_error"></span>

          </div>

        </div> 

   

        <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Password <span class="men">*</span></label>

            <div class="col-sm-9">

              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>" >

              <?php  echo form_error('password');  ?><span style="color:red;" id="ps_error"></span>

            </div>

        </div>

        <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password <span class="men">*</span></label>

            <div class="col-sm-9">

              <input type="password" class="form-control" name="con_password" id="con_password" placeholder="Confirm Password" value="<?php echo set_value('con_password'); ?>" >

              <?php  echo form_error('con_password');  ?><span style="color:red;" id="cps_error"></span>

            </div>

        </div> 


          <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">City <span class="men">*</span></label>

            <div class="col-sm-9">

            <select name="city" id="city" class="form-control" placeholder="City">
              <option value="">- Select City -</option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='indore' ) echo 'selected="selected"'; ?> value='indore'  >  Indore  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='bhopal' ) echo 'selected="selected"'; ?> value='bhopal'  >  Bhopal  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='jabalpur' ) echo 'selected="selected"'; ?> value='jabalpur'> Jabalpur  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='gwalior' ) echo 'selected="selected"'; ?> value='gwalior' >  Gwalior  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='ujjain' ) echo 'selected="selected"'; ?> value='ujjain'  > Ujjain  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='sagar' ) echo 'selected="selected"'; ?> value='sagar'   > Sagar  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='dewas' ) echo 'selected="selected"'; ?> value='dewas'   > Dewas  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='satna' ) echo 'selected="selected"'; ?> value='satna'   > Satna  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='ratlam' ) echo 'selected="selected"'; ?> value='ratlam'  > Ratlam  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='rewa' ) echo 'selected="selected"'; ?> value='rewa'    > Rewa  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='murwara-katni' ) echo 'selected="selected"'; ?> value='murwara-katni' > Murwara (Katni)  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='singrauli' ) echo 'selected="selected"'; ?> value='singrauli' > Singrauli  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='burhanpur' ) echo 'selected="selected"'; ?> value='burhanpur' > Burhanpur  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='khandwa' ) echo 'selected="selected"'; ?> value='khandwa' > Khandwa  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='bhind' ) echo 'selected="selected"'; ?> value='bhind'   > Bhind  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='chhindwara' ) echo 'selected="selected"'; ?> value='chhindwara' > Chhindwara  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='guna' ) echo 'selected="selected"'; ?> value='guna'    > Guna  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='vidisha' ) echo 'selected="selected"'; ?> value='vidisha' > Vidisha  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='chhatarpur' ) echo 'selected="selected"'; ?> value='chhatarpur' > Chhatarpur  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='damoh' ) echo 'selected="selected"'; ?> value='damoh'   > Damoh  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='mandsaur' ) echo 'selected="selected"'; ?> value='mandsaur'> Mandsaur  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='khargone' ) echo 'selected="selected"'; ?> value='khargone'> Khargone  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='neemuch' ) echo 'selected="selected"'; ?> value='neemuch' > Neemuch  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='pithampur' ) echo 'selected="selected"'; ?> value='pithampur'> Pithampur  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='hoshangabad' ) echo 'selected="selected"'; ?> value='hoshangabad'>  Hoshangabad  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='itarsi' ) echo 'selected="selected"'; ?> value='itarsi' > Itarsi   </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='sehore' ) echo 'selected="selected"'; ?> value='sehore' > Sehore  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='betul' ) echo 'selected="selected"'; ?> value='betul' > Betul  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='seoni' ) echo 'selected="selected"'; ?> value='seoni' > Seoni  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='datia' ) echo 'selected="selected"'; ?> value='datia' > Datia  </option>
              <option <?php if(!empty($customer->city) && trim($customer->city)=='nagda' ) echo 'selected="selected"'; ?> value='nagda' > Nagda  </option>
                    </select>   


            <?php echo form_error('city');  ?>  <span style="color:red;" id="ct_error"></span>
            </div>

          </div> 
          

          <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Mobile No.  <span class="men">*</span></label>

            <div class="col-sm-9">

               <input type="text" class="form-control" maxlength="15"  id="mobile"  name="mobile"  value="<?php if(!empty($customer->mobile)) echo $customer->mobile; ?>"  placeholder="Mobile No.">

               <?php echo form_error('mobile'); ?><span style="color:red;" id="ph_error"></span>

            

            </div>

          </div>


        

          <div class="form-group">

            <label for="inputtext3" class="col-sm-2 control-label">Status:</label>

            <div class="col-sm-9">

              <select class="form-control"  name="status">

                <option value="1" <?php if($customer->status==1) echo 'selected="selected"'; ?> >Active</option>

                <option value="0" <?php if($customer->status==0) echo 'selected="selected"'; ?> >InActive</option>

              </select>

            </div>

          </div>

<div class="box-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                 <a href="<?php echo base_url('backend/hospitals/');  ?>" class="btn btn-danger">Cancel</a>
              </div>

            
           
        <?php echo form_close(); ?>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->