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
           <h3 class="box-title"> Edit Hospital Member </h3>
        </div>

        <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 

        <div class="box-body">

          <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">First Name<span class="men">*</span></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="first_name"  id="first_name" placeholder="First Name" value="<?php  if(!empty($member->first_name))  echo $member->first_name;    ?>">

                <?php echo form_error('first_name'); ?> <span style="color:red;" id="fn_error"></span> 

              </div>

          </div> 



        <div class="form-group">

            <label for="inputEmail3" class="col-sm-2 control-label">Last Name <span class="men">*</span></label>

            <div class="col-sm-9">

              <input type="text" class="form-control" name="last_name"  id="last_name" placeholder="Last Name" value="<?php if(!empty($member->last_name))  echo $member->last_name; ?>">

              <?php echo form_error('last_name'); ?> <span style="color:red;" id="ln_error"></span>

            </div>

        </div>
 

        <div class="form-group">

            <label for="inputEmail3" class="col-sm-2 control-label"> Designation <span class="men">*</span></label>

            <div class="col-sm-9">

              <input type="text" class="form-control" value="<?php if(!empty($member->designation))  echo $member->designation; ?>" name="designation" placeholder="Designation">
                <span class=""><?php echo form_error('designation'); ?></span>

            </div>

        </div>


        <div class="form-group">

            <label for="inputPassword3" class="col-sm-2 control-label">Mobile No.</label>

            <div class="col-sm-9">

               <input type="text" class="form-control" maxlength="10"  id="mobile"  name="mobile"  value="<?php if(!empty($member->mobile))  echo $member->mobile; ?>"  placeholder="Mobile No.">

               <?php echo form_error('mobile'); ?><span style="color:red;" id="ph_error"></span>

            </div>

        </div>


        <div class="form-group">

          <label for="inputtext3" class="col-sm-2 control-label">Status:</label>

          <div class="col-sm-9">

            <select class="form-control"  name="status">

              <option <?php if($member->status==1) echo 'selected="selected"'; ?> value="1">Active</option>

              <option <?php if($member->status==0) echo 'selected="selected"'; ?> value="0">InActive</option>

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