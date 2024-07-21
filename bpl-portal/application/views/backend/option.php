

                <div class="row">
                 <div class="col-mod-12">

              <!--     <ul class="breadcrumb">
                   <li><a href="index.html">Dashboard</a></li>
                   <li><a href="#">Forms</a></li>
                   <li class="active">Form Input Masks</li>
                 </ul> -->


                <h3 class="page-header"> Update Your Profile<!-- <i class="fa fa-info-circle animated bounceInDown show-info"></i>  --></h3>

              <!--   <blockquote class="page-information hidden">
                 <p>
                  you can 
                 </p>
              </blockquote> -->
            </div>
          </div>

          <!-- input masks -->
          <div class="row">
           <div class="col-md-12">
            <div class="panel panel-cascade">
             <!-- <div class="panel-heading">
              <h3 class="panel-title">
                <i class="fa fa-pencil-square"></i> Form Input Masks 
                <span class="pull-right">
                  <div class="btn-group code">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Classes used"><i class="fa fa-code"></i></a>
                   <ul class="dropdown-menu pull-right list-group" role="menu">
                    <li class="list-group-item"><code>.form-horizontal</code></li>
                    <li class="list-group-item"><code>.form-group</code></li>
                    <li class="list-group-item"><code>.help-block</code></li>
                  </ul>
                </div>
                <a href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="panel-close"><i class="fa fa-times"></i></a>
              </span>
            </h3>
          </div> -->
          <div class="panel-body">
<?php  echo msg_alert_backend();  ?>
 <?php echo form_open(current_url(),array('id'=>'form_traditional_validation')); ?>

                   <div class="form-body">          

     <?php echo $this->session->flashdata('msg_error');?> 

                <?php foreach ($option as $value) { ?>

          <div class="form-group">

            <label class="form-label"><?php echo $value->option_name;?></label> 

            <div class="input-with-icon right">

              <input type="text" placeholder="<?php echo $value->option_name ?>" class="form-control" name="<?php echo $value->option_name ?>" value="<?php echo $value->option_value;?>">

              <?php echo form_error($value->option_name); ?>

            </div>

          </div> 

                <?php } ?>



                <div class="form-actions"> 

                    <div class=" col-md-9">

                        <button class="btn btn-info" type="submit">Update</button>

                        <a href="<?php echo base_url()?>backend/dashboard">

                          <button class="btn btn-danger" type="button">Cancel</button>  

                        </a>                            

                    </div>

                </div>

                </div>

      <?php echo form_close(); ?>
</div>
</div>
</div>

