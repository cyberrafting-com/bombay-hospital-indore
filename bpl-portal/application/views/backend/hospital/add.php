<style type="text/css" media="screen">
  .error{color: red;} .men{ color: red; }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Hospital
       <!--  <small>Opreaton Module</small> -->
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
             <h3 class="box-title"> Add Hospital  </h3>
          </div>
                  <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
 <div class="box-body">




        <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Hostpital <span class="men">*</span></label>

            <div class="col-sm-9">

              <input type="text" class="form-control" name="hospital_name" id="hospital" placeholder="Hostpital" value="<?php echo set_value('hospital_name'); ?>" >

              <?php  echo form_error('hospital_name');  ?><span style="color:red;" id="em_error"></span>

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

          <label for="inputPassword3" class="col-sm-2 control-label">Address <span class="men">*</span></label>

          <div class="col-sm-9">

              <textarea name="address" id="address"  class="form-control"><?php echo set_value('address'); ?></textarea>

            <?php  echo form_error('address');  ?> <span style="color:red;" id="ad1_error"></span>

          </div>

        </div> 



        <div class="form-group">

          <label for="inputPassword3" class="col-sm-2 control-label">City <span class="men">*</span></label>

          <div class="col-sm-9">

             <select name="city" id="city" class="form-control" placeholder="City">
                <option value="">- Select City -</option>
                <option value='indore'  >  Indore  </option>
                <option value='bhopal'  >  Bhopal  </option>
                <option value='jabalpur'> Jabalpur  </option>
                <option value='gwalior' >  Gwalior  </option>
                <option value='ujjain'  > Ujjain  </option>
                <option value='sagar'   > Sagar  </option>
                <option value='dewas'   > Dewas  </option>
                <option value='satna'   > Satna  </option>
                <option value='ratlam'  > Ratlam  </option>
                <option value='rewa'    > Rewa  </option>
                <option value='murwara-katni' > Murwara (Katni)  </option>
                <option value='singrauli' > Singrauli  </option>
                <option value='burhanpur' > Burhanpur  </option>
                <option value='khandwa' > Khandwa  </option>
                <option value='bhind'   > Bhind  </option>
                <option value='chhindwara' > Chhindwara  </option>
                <option value='guna'    > Guna  </option>
                <option value='vidisha' > Vidisha  </option>
                <option value='chhatarpur' > Chhatarpur  </option>
                <option value='damoh'   > Damoh  </option>
                <option value='mandsaur'> Mandsaur  </option>
                <option value='khargone'> Khargone  </option>
                <option value='neemuch' > Neemuch  </option>
                <option value='pithampur'> Pithampur  </option>
                <option value='hoshangabad'>  Hoshangabad  </option>
                <option value='itarsi' > Itarsi   </option>
                <option value='sehore' > Sehore  </option>
                <option value='betul' > Betul  </option>
                <option value='seoni' > Seoni  </option>
                <option value='datia' > Datia  </option>
                <option value='nagda' > Nagda  </option>
              </select>   

            <?php echo form_error('city');  ?>  <span style="color:red;" id="ct_error"></span>

          </div>
          </div>

          <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Mobile No. <span class="men">*</span></label>

            <div class="col-sm-9">

               <input type="text" class="form-control" maxlength="10"  id="hospitalMobile"  name="mobile"  value="<?php  if(!empty($_POST['mobile'])){  echo $_POST['mobile'];  }  ?>"  placeholder="Mobile No.">

               <?php echo form_error('mobile'); ?><span style="color:red;" id="hospitalMobile_error"></span>

            </div>

          </div>





          <div class="form-group">

            <label for="inputtext3" class="col-sm-2 control-label">Status:</label>

            <div class="col-sm-9">

              <select class="form-control"  name="status">

                <option value="1">Active</option>

                <option value="0">InActive</option>

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