<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage specialties
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
             <h3 class="box-title">Edit Specialty</h3>
          </div>
             <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
              <div class="box-body">
               <?php echo msg_alert_backend(); ?>
              
                <div class="form-group">         
                  <label class="col-md-2   col-sm-2 control-label">Specialty Name</label>        
                  <div class="col-md-10">        
                           
                    <input class="form-control" placeholder="Specialty Name"  name="specialty_name" value="<?php  if (!empty($specialty->specialty_name)) echo ($specialty->specialty_name);  else echo set_value('content'); ?>">
                    <?php echo form_error('specialty_name'); ?>
                              
                  </div>         
                </div>    
            
                <div class="form-group">    
                  <label class="col-sm-2 col-sm-2 control-label">Status</label>  
                    <div class="col-md-10">    
                      <select name="status" class="form-control"> 
                       <option value="1"  <?php if (strtolower($specialty->status) == 1) echo 'selected="selected"'; ?>>Publish</option> 
                        <option value="0"  <?php if (strtolower($specialty->status) == 0) echo 'selected="selected"'; ?>>Unpublish</option> 
                      </select>            
                    </div>        
                </div>  
              </div>             
              <div class="box-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                 <a href="<?php echo base_url('backend/specialties/');  ?>" class="btn btn-danger">Cancel</a>
              </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->