<div class="content-wrapper">
  <?php
      if(!empty($_SERVER['QUERY_STRING']))
          $QUERY_STRING = "0?".$_SERVER['QUERY_STRING'];
      else
          $QUERY_STRING ='';
  ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Referral BPL Registration
     <!--  <small>Opreaton Module</small> -->
    </h1>
  </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-success ">
          <div class="box-header with-border">
             <h3 class="box-title"> Registration List  </h3> <!-- <span class="pull-right"> <a class=" btn btn-xs btn-info" href="<?php //echo base_url('backend/networks/add');  ?>"  style="margin-top:3px;"class="btn btn-small">Add NetWork</a> </span> -->
          </div>
        
              <div class="box-body">
                <?php  echo msg_alert_backend();  ?>
                
          <!-- <form class="form-inline" action="<?php //echo base_url('backend/users/index/id/asc/') ?>" role="form">

              <div class="form-group">

                  <select style="width:100%;"  class="form-control" name="search_by"> <option value="">Select Field  </option>  <option value="first_name" <?php //if(!empty($_GET['search_by']) && $_GET['search_by']=='first_name') echo 'selected'?>>First Name </option><option value="last_name" <?php //if(!empty($_GET['search_by']) && $_GET['search_by']=='last_name') echo 'selected'?>>Last Name</option> <option value="email" <?php //if(!empty($_GET['search_by']) && $_GET['search_by']=='email') echo 'selected'?>>Email </option>  </select> 

              </div>

              <div class="form-group">

                  <input  class="form-control" type="text" style="width:100%;" name="search_query"  placeholder="Search" value="<?php //if(!empty($_GET['search_query'])) echo $_GET['search_query'] ?>">

              </div>

              <button class="btn btn-primary" type="submit">Search</button>

              <a class="btn btn-warning" href="<?php //echo base_url('backend/users/');  ?>"  style="margin-top:0px;"class="btn btn-small">Reset</a> 

        </form> -->
 
        <table class="table users-table table-condensed table-hover">
          <thead>
              <tr>
                <th>Wait No.</th>
                <th>Referred By</th>
                <th>Full Name</th>
                <th>Specialty</th>
                <th>Age</th>
                <th>City </th>
                <th>Mobile</th>
                <th>Unit</th>
                <th class="hidden-phone">Admit Date</th>
                <th class="hidden-phone">Actions</th>
              </tr>
          </thead>
          <tbody>
            <?php if(!empty($registrations)):

                $i=$offset;

                foreach($registrations as $value){ $i++; ?>

                <tr class="gradeX">
                    <td><?php echo $value->id."." ;?></td>
                    <?php if($value->hospital_id==user_id()){   ?>
                    <td> <span class="label label-success"><?php echo ucfirst(get_hospital_name($value->hospital_id)); ?></span></td>
                    <?php }else{ ?>
                    <?php if($value->add_by=='patient') { ?>
                      <td><span class="label label-warning"><?php echo ucfirst('Patient Self'); ?></span></td>
                    <?php } else { ?>
                    <td><span class="label label-info"><?php echo ucfirst(get_hospital_name($value->hospital_id)); ?></span></td>
                    <?php } }  ?>
                    <td class="">
                      <?php echo ucfirst($value->first_name).' '.$value->middle_name.' '.$value->last_name ; ?>    
                    </td>
                    <td class="to_hide_phone"><?php echo get_specialty_name($value->specialty_id); ?></td>
                    <td class="to_hide_phone"><?php echo $value->age; ?></td> 
                    <td class="to_hide_phone"><?php echo ucfirst($value->city); ?></td> 
                    <td class="to_hide_phone"><?php echo $value->mobile; ?></td> 
                    <td class="to_hide_phone"><?php echo $value->unit_type; ?></td> 
                    <td><?php echo date('d-m-Y',strtotime($value->admit_date)); ?></td>
                    <td class="ms">
                     <!--  <div class="btn-group">  -->
                      <?php if($value->admit_status==0){ ?>
                      
                      <a href="<?php echo '#'; //echo base_url().'backend/bpl_lists/edit/'.$value->id ?>" class="btn btn-warning btn-xs" >Waiting</a> 
                        
                      <?php }else if($value->admit_status==1){ ?>

                      <a href="<?php echo base_url().'referral/bpl/view_detail/'.$value->id.'/0'; ?>" class="btn btn-success btn-xs" >Admitted</a>

                      <?php }else if($value->admit_status==1){ ?>

                      <?php }  ?>
                      <!--   <a href="<?php //echo '#'; //echo base_url().'backend/bpl_lists/delete/'.$value->id ?>" class="btn btn-danger btn-xs"  onclick="if(confirm('Are you sure you want to delete?')){return true;} else {return false;}" > <i class="fa fa-trash-o"></i></a>  -->
                    <!--   </div> -->
                    </td>

                </tr>

                 <?php } ?>

                <?php else: ?>

                  <tr>

                    <th colspan="10"> <center>No BPL Registration found.</center></th>

                  </tr>

                <?php endif; ?>

                </tbody>

          </table>   
                <div class="row-fluid  control-group mt15">             
                    <div class="span12">
                      <?php if(!empty($pagination))  echo $pagination;?>              
                    </div>
                  </div>
              </div>
      </div>             
  
        
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->