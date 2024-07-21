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
    Manage BPL Registration
    <!-- <small>Opreaton Module</small> -->
  </h1>
  </section>
  <section class="content">
    <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-success ">
          <div class="box-header with-border">
             <h3 class="box-title"> Registration List  </h3> 
             <!-- <span class="pull-right"> <a class=" btn btn-xs btn-info" href="<?php //echo base_url('backend/networks/add');  ?>"  style="margin-top:3px;"class="btn btn-small">Add NetWork</a> </span> -->
          </div>
        
      <div class="box-body">
        <?php  echo msg_alert_backend();  ?>
        
        <div class="col-md-11 pull-right">    
          <form class="form-inline" action="<?php echo base_url('backend/bpl_lists/index/') ?>" role="form">
          <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php if(!empty($_GET['first_name'])) echo $_GET['first_name'] ?>"> 
          </div>   
          <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php if(!empty($_GET['last_name'])) echo $_GET['last_name'] ?>"> 
          </div>  
          <div class="form-group">
              <input type="text" class="form-control" name="mobile" placeholder="Mobile No." value="<?php if(!empty($_GET['mobile'])) echo $_GET['mobile'] ?>"> 
          </div>
          <div class="form-group">
            <input  class="form-control" type="text" style="width:100%;" name="bpl_card_no"  placeholder="BPL Card No." value="<?php if(!empty($_GET['bpl_card_no'])) echo $_GET['bpl_card_no'] ?>">
          </div>   
          <button class="btn btn-primary" type="submit">Search</button>
          <a class="btn btn-warning" href="<?php echo base_url('backend/bpl_lists/index/');  ?>"  style="margin-top:0px;"class="btn btn-small">Reset</a> 
          </form>
        </div> 
<br>
<br>
 
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
                    <td class="to_hide_phone"><?php echo ucfirst($value->add_by); ?></td> 

                    <td class="">
                        <?php echo ucfirst($value->first_name).' '.$value->middle_name.' '.$value->last_name ; ?>    
                    </td>
                    <td class="to_hide_phone"><?php echo get_specialty_name($value->specialty_id); ?></td> 
                    <td class="to_hide_phone"><?php echo $value->age; ?></td> 
                    <td class="to_hide_phone"><?php echo ucfirst($value->city); ?></td> 
                    <td class="to_hide_phone"><?php echo $value->mobile; ?></td> 
                    <td class="to_hide_phone"><?php echo $value->unit_type; ?></td> 
                    <!-- <td class="to_hide_phone"><?php //if($value->status){ echo 'Active'; }else{  echo 'Inactive'; } ?></td> -->

                    <td><?php if($value->admit_date!='0000-00-00'){  echo date('d-m-Y',strtotime($value->admit_date)); }else{ echo '--'; } ?></td>
                    <td class="ms">
                     <!--  <div class="btn-group">  -->
                      <?php if($value->admit_status==0){ ?>
                      <a href="<?php echo base_url().'backend/bpl_lists/update_status/'.$value->id.'/'.$offset; ?>" class="btn btn-warning btn-xs" >Admit</a> 
                      <?php }else if($value->admit_status==1){   ?>
                      
                        <a href="<?php echo base_url().'backend/bpl_lists/edit_status/'.$value->id; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-edit"></i></a>

                        <a href="<?php echo base_url().'backend/bpl_lists/update_status/'.$value->id.'/'.$offset; ?>" class="btn btn-success btn-xs" >Discharge</a> 

                        <a href="<?php echo base_url().'backend/bpl_lists/view_detail/'.$value->id.'/'.$offset; ?>" class="btn btn-success btn-xs" >Detail</a> 

                      
                      <?php }else if($value->admit_status==2){ ?>

                       <a href="javascript:;" class="btn btn-info btn-xs" >Discharged</a>

                       <a href="<?php echo base_url().'backend/bpl_lists/view_detail/'.$value->id.'/'.$offset; ?>" class="btn btn-success btn-xs" >Detail</a> 


                      <?php } ?>  
                        <!-- <i></i> -->
                      <!--   <a href="<?php //echo '#'; //echo base_url().'backend/bpl_lists/delete/'.$value->id ?>" class="btn btn-danger btn-xs"  onclick="if(confirm('Are you sure you want to delete?')){return true;} else {return false;}" > <i class="fa fa-trash-o"></i></a>  -->
                    <!--   </div> -->
                    </td>

                </tr>

                 <?php } ?>

                <?php else: ?>

                  <tr>

                    <th colspan="11"> <center>No Registrations found.</center></th>

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