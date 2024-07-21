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
        Manage Hospitals
        <!-- <small>Opreaton Module</small> -->
      </h1>
  </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-success ">
          <div class="box-header with-border">
             <h3 class="box-title">  hospitals List  </h3><span class="pull-right"> <a class=" btn btn-xs btn-info" href="<?php echo base_url('backend/hospitals/add');  ?>"  style="margin-top:3px;"class="btn btn-small">Add hospital</a> </span>
          </div>
        
          <div class="box-body">
                <?php  echo msg_alert_backend();  ?>
                
                  <div class="table-responsive">
        <table class="table table-hover">
          <thead>
              <tr>
              <!--   <th style="width:3%"> 
                  <input class=""  id="all_customer_check"  type="checkbox" name="check_all">
                </th> -->
                <th style="width:5%" >#</th>
                <th style="width:12%">Hospital Id</th>     
                <th style="width:20%">Hospital Name</th>                 
                <th style="width:10%">Mobile</th>
                <th style="width:12%">Members</th>                 
                <th style="width:10%"><?php echo anchor("backend/hospitals/index/status/".(($sort_order == 'asc' && $sort_by == 'status') ? 'desc' : 'asc')."/".$QUERY_STRING,'Status'); ?> <?php if($sort_order=='desc' && $sort_by == 'status'){ ?> <i class="fa fa-angle-down"></i> <?php }else{ ?> <i class="fa fa-angle-up"></i><?php } ?> </th>
                <!--  <th style="width:10%">Created</th> -->
                <th style="width:10%">Actions</th>
              </tr>
          </thead>
          <tbody>



                <?php if(!empty($hospitals)):

                   $i=$offset;

                foreach($hospitals as $value){ $i++; ?>

                <tr >

                     <!--  <td>

                        <input type="checkbox" class="check_customer" id="check_customer_<?php echo $value->id ; ?>"  name="checkall[]" value="<?php echo $value->id ; ?>">       

                      </td>
 -->
                    <td><?php echo $i."." ;?></td>

                    <td class=""><?php echo $value->hospital_id ; ?></td>

                    <td class=""><?php echo ucfirst($value->hospital_name); ?></td>
                

                    <td class="to_hide_phone"><?php echo $value->mobile;; ?></td> 

                    <td class="to_hide_phone"><a href="<?php echo base_url().'backend/hospitals/hospital_members/'.$value->id; ?>" class="btn btn-success btn-xs" >Manage Members</a> </td> 

                 
                    <td class="to_hide_phone"><?php if($value->status){ echo 'Active'; }else{  echo 'Inactive'; } ?></td> 

                    <td class="ms">

                      <div class="btn-group"> 

                        <a href="<?php echo base_url().'backend/hospitals/edit/'.$value->id ?>" class="btn btn-success btn-xs" ><i class="fa fa-pencil-square-o"></i></a> 

                        <i></i>

                        <a href="<?php echo base_url().'backend/hospitals/delete/'.$value->id ?>" class="btn btn-danger btn-xs"  onclick="if(confirm('Are you sure you want to delete ?')){return true;} else {return false;}" > <i class="fa fa-trash-o"></i></a> 

                      </div>

                    </td>

                </tr>

                 <?php } ?>



                <?php else: ?>

                  <tr>

                    <th colspan="9"> <center>No Hospital found.</center></th>

                  </tr>

                <?php endif; ?>

                   <tr>

           <!--  <td colspan="9" ><input type="submit" id="delete_cust" name="delete"  onclick="return confirm('Do you want to delete');" value="Delete" class="btn-info btn"></td>
 -->
           <!--  <td colspan="6"><input type="submit" name="message" value="Message" class="btn-info btn"></td> -->

          </tr>

                </tbody>

          </table>


           
                    <div class="row-fluid  control-group mt15">             
                        <div class="span12">
                          <?php if(!empty($pagination))  echo $pagination;?>              
                        </div>
                      </div>
                  </div>
              </div>
      </div>             
  
    
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->