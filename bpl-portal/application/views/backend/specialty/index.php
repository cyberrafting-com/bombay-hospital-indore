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
      Manage Specialties
      <!-- <small>Opreation Module</small> -->
    </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
  </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
       <div class="box  box-success ">
          <div class="box-header with-border">
             <h3 class="box-title"> Specialty List  </h3><span class="pull-right"> <a class=" btn btn-xs btn-info" href="<?php echo base_url('backend/specialties/add');  ?>"  style="margin-top:3px;"class="btn btn-small">Add Specialty</a> </span>
          </div>
          <div class="box-body">
            <?php  echo msg_alert_backend();  ?>    
               <div class="table-responsive">
                    <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                      <thead>
                        <tr>
                            <th width="5%" class="jv no_sort">#</th>  
                            <th width="25%" class="no_sort">Specialty Name</th>                 
                            <th width="25%" class="no_sort">Slug</th>                 
                            <th width="10%" class="text-center">Status </th>
                            <th width="10%" class="to_hide_phone span2">Created</th>
                            <th width="13%" class="ms no_sort ">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if(!empty($specialties)):
                        $i=$offset; foreach($specialties as $row): $i++;?>
                        <tr>
                          <td><?php echo $i.".";?></td>
                       
                          <td class="">
                          <?php if(!empty($row->specialty_name)) echo ucfirst($row->specialty_name); ?></a></td>    
                          <td> <?php if(!empty($row->slug)) echo ucfirst($row->slug); ?></a></td>    
                          <td class="to_hide_phone  text-center">
                          <?php if(!empty($row->status)) echo ucfirst('publish'); else echo ucfirst('unpublish') ; ?>
                          </td>
                          <td class="to_hide_phone"><?php echo date('d-m-Y',strtotime($row->created)); ?></td>
                          <td class="ms">
                            <div class="btn-group"> 
                              <a href="<?php echo base_url().'backend/specialties/edit/'.$row->id.'/'.$offset?>"class="btn btn-success btn-xs"  rel="tooltip" data-placement="left" data-original-title=" Edit ">
                              <i class="fa fa-pencil"></i>
                              </a> 
                              <a href="<?php echo base_url().'backend/specialties/delete/'.$row->id.'/'.$offset?>" class="btn btn-danger btn-xs black" rel="tooltip" data-placement="bottom" data-original-title="Remove" onclick="if(confirm('Are you sure want to delete?')){return true;} else {return false;}" >                       
                              <i class="fa fa-trash"></i><i class="icon-trash "></i></a> 
                            </div>
                          </td>
                        </tr> 
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <th colspan="6"> <center>No specialty Found.</center></th>
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
        <!--   <div class="box-footer">
                <button class="btn btn-primary" type="submit">Save Change</button>
                 <a href="<?php // echo base_url('backend/dashboard');  ?>" class="btn btn-danger">Cancel</a>
              </div> -->
          
        </div>
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->