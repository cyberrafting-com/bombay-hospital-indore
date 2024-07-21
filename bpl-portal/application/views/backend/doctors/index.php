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
      Manage Doctors
     <!--  <small>Opreaton Module</small> -->
    </h1>
  
  </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-success ">
          <div class="box-header with-border">
             <h3 class="box-title"> Doctors 
               </h3><span class="pull-right"> <a class=" btn btn-xs btn-info" href="<?php echo base_url('backend/doctors/add');  ?>"  style="margin-top:3px;" class="btn btn-small">Add Doctor</a> </span>
          </div>
        
          <div class="box-body">
            <?php  echo msg_alert_backend();  ?>
                
          <div class="table-responsive">
            <table class="table table-bordered table-hover">                        
            <thead>                            
              <tr>                                
                <th width="5%" class="jv no_sort">#</th>
                <th width="20%" class="no_sort">Doctors</th>
               
                <th width="10%" class="to_hide_phone ue no_sort">Status</th>
                <th width="10%" class="to_hide_phone span2">Created</th>         
                <th width="10%" class="ms no_sort ">Actions</th>       
              </tr>                        
            </thead>                        
            <tbody>  
              <?php if (!empty($doctors)): $i = $offset; 
              foreach ($doctors as $row): $i++; ?> 
              <tr> 
                <td><?php echo $i . "."; ?></td>
                <td class="">
                  <?php if (!empty($row->doctor_name)) echo ucfirst($row->doctor_name); ?></a></td>
               
           
                <td class="to_hide_phone">
                  <?php if ($row->status) { ?>
                    <a href="<?php echo base_url() . 'backend/doctors/changestatus/' . $row->id .'/'.$row->status.'/'. $offset ?>"><span class="label label-success label-mini" >Publish </span></a>
                   <?php } else { ?> <a href="<?php echo base_url() . 'backend/doctors/changestatus/' . $row->id . '/'.$row->status.'/'. $offset ?>"><span class="label label-warning label-mini"> Unpublish </span></a>
                   <?php } ?> 
                </td>                                        

                <td class="to_hide_phone"><?php echo date('d-m-Y', strtotime($row->created)); ?></td>                                       
                <td class="ms">                                            
                  <div class="btn-group">  
                    <a href="<?php echo base_url() . 'backend/doctors/edit/' . $row->id . '/' . $offset ?>"  class="btn btn-success btn-xs" rel="tooltip" data-placement="left" data-original-title=" Edit "><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url() . 'backend/doctors/delete/' . $row->id . '/' . $offset ?>" class="btn btn-danger btn-xs" rel="tooltip" rel="tooltip" data-placement="bottom" data-original-title="Remove" onclick="return confirm('Are you sure want to delete?');" ><i class="fa fa-trash-o "></i></a>      
                  </div>                                        
                </td>                                    
              </tr>                                
            <?php endforeach; ?>                            
           <?php else: ?>
            <tr>
             <th colspan="6"> <center>No Doctors found.</center></th>
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
      </div>             
  
          

        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->