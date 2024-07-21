<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Super admin
       <!--  <small>Secure Panel</small> -->
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
             <h3 class="box-title">Cahnge Password</h3>
          </div>
         <form role="form" method="post" class="form-horizontal" action="<?php echo current_url() ?>">
              <div class="box-body">
               <?php  echo msg_alert_backend();  ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" >Old Password</label>
                    <div class="col-sm-9">
                      <input type="password" placeholder="Old Password" class="form-control" name="oldpassword" value="">
                      <?php echo form_error('oldpassword'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" placeholder="New Password" class="form-control" name="newpassword" value="">
                        <?php echo form_error('newpassword'); ?>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <input type="password" placeholder="Confirm Password" class="form-control" name="confpassword" value="">
                        <?php echo form_error('confpassword'); ?>
                      </div>
                  </div>
              </div>             
              <div class="box-footer">
                <button class="btn btn-primary" type="submit">Save Change</button>
                 <a href="<?php echo base_url('backend/dashboard');  ?>" class="btn btn-danger">Cancel</a>
              </div>
          </form>
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->