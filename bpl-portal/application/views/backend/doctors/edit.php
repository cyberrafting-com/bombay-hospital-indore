<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Doctors
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
             <h3 class="box-title"> Edit Doctor </h3>
          </div>
             <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
              <div class="box-body">
              <?php  echo msg_alert_backend();  ?>
              
              <div class="form-group">                
                <label class="col-md-2 control-label">Doctor Name</label>                
                <div class="col-md-9">                    
                  <input type="text" placeholder="Doctor Name" class="form-control" name="doctor_name" value="<?php if (!empty($doctor->doctor_name)) echo $doctor->doctor_name;  else echo set_value('doctor_name');?>"><?php echo form_error('doctor_name'); ?>
                </div>            
              </div>     


              <div class="form-group">                
                <label class="col-md-2 control-label">Specialty</label>                
                <div class="col-md-9"> 
                  <select name="specialty"  class="form-control"  >
                    <option value="">-Select Specialty-</option>
                    <?php if(!empty($specialty)){ ?>
                    <?php foreach($specialty as $row){  ?>
                    <option  <?php if(!empty($doctor->specialty) && $doctor->specialty==$row->id){echo 'selected="selected"';} ?> value="<?php echo $row->id; ?>"><?php echo ucfirst($row->specialty_name); ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>                   
                  <?php echo form_error('specialty'); ?>
                </div>            
              </div>     
     
              <div class="form-group">                
                <label class="col-sm-2 col-sm-2 control-label">Status</label>                
                <div class="col-md-9">                    
                  <select name="status" class="form-control"> 
                  <option value="1"  <?php if (strtolower($doctor->status) == 1) echo 'selected="selected"'; ?>>Publish</option>  
                  <option value="0"  <?php if (strtolower($doctor->status) == 0) echo 'selected="selected"'; ?>>Unpublish</option>
                  </select>                
                </div>            
              </div>

              <div class="box-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="<?php echo base_url('backend/doctors/');  ?>" class="btn btn-danger">Cancel</a>
              </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
