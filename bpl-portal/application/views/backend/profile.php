<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Super admin
        <!-- <small>Secure Panel</small> -->
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
             <h3 class="box-title">Edit Profile</h3>
          </div>
         <form role="form" method="post" class="form-horizontal" action="<?php echo current_url() ?>">
              <div class="box-body">
               <?php  echo msg_alert_backend();  ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="First Name" class="form-control" name="first_name" value="<?php if (!empty($user->first_name)) echo $user->first_name; ?>">
                      <?php echo form_error('first_name'); ?>
                    </div>
                  </div>
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="<?php if (!empty($user->last_name)) echo $user->last_name; ?>">
                        <?php echo form_error('last_name'); ?>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email Address</label>
                    <div class="col-sm-9">
                        <input type="email" placeholder="Email Address" class="form-control" name="email" value="<?php if (!empty($user->email)) echo $user->email; ?>">
                        <?php echo form_error('email'); ?>
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