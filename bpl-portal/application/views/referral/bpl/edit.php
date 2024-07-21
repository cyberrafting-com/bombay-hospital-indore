<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Categories
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
       <div class="box  box-warning ">
          <div class="box-header with-border">
             <h3 class="box-title">Edit Category</h3>
          </div>
             
        <?php echo form_open_multipart(current_url(),array('class'=>'form-horizontal')); ?> 
          <div class="box-body">
              <?php  echo msg_alert_backend();  ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NetWork Name</label>
                  <div class="col-sm-9">
                    <input type="text" placeholder="Category Name" class="form-control" name="network_name" value="<?php if(!empty($networks->network_name)) echo $networks->network_name;?>">
                    <?php echo form_error('network_name'); ?>
                  </div>
                </div> 

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Network Address</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="net_address" placeholder="For eg. 16 Street( Address ),City , State" name="network_address" ><?php if(!empty($networks->address)) echo $networks->address; ?></textarea>
                        <?php echo form_error('network_address'); ?>
                    </div>
                </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Latitude / Longitude </label>
                  <div class="col-sm-9">
                    <div class="col-md-6">
                        <input type="text" placeholder="Latitude" readonly  id="latitude"  value="<?php if(!empty($networks->latitude)) echo $networks->latitude;?>" class="form-control" name="latitude" value="<?php echo set_value('latitude');?>">
                        <?php echo form_error('Latitude'); ?>
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Longitude" readonly id="longitude"  value="<?php if(!empty($networks->longitude)) echo $networks->longitude;?>" class="form-control" name="longitude" value="<?php echo set_value('longitude'); ?>">
                        <?php echo form_error('longitude'); ?>  
                    </div>
                  </div>
              </div> 

                <div class="form-group">
                  <label for="inputtext3" class="col-sm-2 control-label">Status:</label>
                  <div class="col-sm-9">
                    <select class="form-control"  name="status">
                      <option  <?php if($networks->status==1) echo 'selected="selected"'; ?> value="1">Active</option>
                      <option  <?php if($networks->status==0) echo 'selected="selected"'; ?> value="0">InActive</option>
                    </select>
                  </div>
                </div>

              </div>             
              <div class="box-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                 <a href="<?php echo base_url('backend/networks/');  ?>" class="btn btn-danger">Cancel</a>
              </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->