<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Registration 
        <!-- <small>Opreation Module</small> -->
      </h1>
      <!--  
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
       -->
    </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> View Admitted Patient Detail </h3>
                    <div class="pull-right">
                    <a href="<?php echo base_url('backend/dashboard/specialties'); ?>" class="btn btn-xs btn-primary">Vacant Bed</a>
                    <a href="<?php echo base_url('backend/bpl_lists/index/'); ?>" class="btn btn-xs btn-info">Back List</a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row"> 
                    
                  <div class="col-md-3">
                      <strong class="label label-primary" > <i class="fa fa-hand-o-right"></i> Waiting No.  :  </strong>&nbsp;&nbsp;
                      <!-- <p class="text-muted"> -->
                          <?php if($register_data->id!=''){ echo $register_data->id; } ?> 
                     <!--  </p> -->
                  </div> 
                  <div class="col-md-3">
                    <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Full Name : </strong>&nbsp;&nbsp;
                    

                      <?php if($register_data->first_name!=''){ echo ucfirst($register_data->first_name.' '.$register_data->last_name); } ?> 
                   
                  </div> 
                  <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i>  BPL Card No. : </strong>&nbsp;&nbsp;
                   
                        <?php if($register_data->bpl_no!=''){ echo ucfirst($register_data->bpl_no); } ?>
                    
                  </div>  
                  <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> BPL Card View : </strong>&nbsp;&nbsp;
                    
                        <a target="_blank"  href="<?php if($register_data->bpl_card_file!=''){  echo str_ireplace('index.php/','',base_url(str_ireplace('./','',$register_data->bpl_card_file)));  }else{ echo '#'; }   ?>" class="btn btn-xs btn-warning" title=""> BPL Card </a>
                    
                  </div> 



              </div>

              <hr>

              <div class="row">  
                  <div class="col-md-3">
                    <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Date Of Birth : </strong>&nbsp;&nbsp;
                    <?php if($register_data->date_of_birth!=''){ echo date('d-m-Y',strtotime($register_data->date_of_birth)); } ?>
                  </div> 
                
                    <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Age : </strong>&nbsp;&nbsp;
                      <?php if($register_data->age!=''){ echo ucfirst($register_data->age); } ?>
                  </div>  
                  <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Gender : </strong>&nbsp;&nbsp;
                         <?php if($register_data->gender!=''){ echo ucfirst($register_data->gender); } ?>
                   
                  </div>  
                  <div class="col-md-3">
                    <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Added By : </strong> &nbsp;&nbsp;
                  
                      <?php if($register_data->add_by!=''){ echo ucfirst($register_data->add_by); } ?>
                    
                  </div>
              </div> 
              <hr>
              <div class="row">  
                  <div class="col-md-3">
                    <strong class="label label-danger"><i class="fa fa-hand-o-right"></i> Date Of Admit :  </strong> &nbsp;&nbsp;
                   <?php if($register_data->admit_date!=''){ echo date('d-m-Y',strtotime($register_data->admit_date)); } ?> 
                   <br>
                  </div> 
              

                    <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Bed Number : </strong>&nbsp;&nbsp;
                      
                      <span class="label label-success"> <?php if($register_data->bed_no!=''){ echo $register_data->bed_no; } ?> </span>
                      
                  </div>  
                  <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> IPNO : </strong> &nbsp;&nbsp;
                       <span class="label label-success">   <?php if($register_data->ipno!=''){ echo  $register_data->ipno; } ?> </span>
                   
                  </div>  
                  <div class="col-md-3">
                    <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Unit Type : </strong>&nbsp;&nbsp;
                  
                      <?php if($register_data->unit_type!=''){ echo ucfirst($register_data->unit_type); } ?>
                    
                  </div>    
              </div>
            <hr>
              <div class="row">  
                  <div class="col-md-3">
                    <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Specialty :  </strong> &nbsp;&nbsp;
                   <?php if($register_data->specialty_id!=''){ echo get_specialty_name($register_data->specialty_id); } ?>
                  </div> 
    

                    <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Case Type : </strong>&nbsp;&nbsp;
                      
                      <?php if($register_data->case_type!=''){  $case = unserialize($register_data->case_type);  if(!empty($case[0])){ echo ucfirst($case[0]); } if(!empty($case[1])){ echo ','.ucfirst($case[1]);  }  } ?>
                      
                  </div>  
                  <div class="col-md-3">
                      <strong class="label label-primary"><i class="fa fa-hand-o-right"></i> Mobile : </strong> &nbsp;&nbsp;
                         <?php if($register_data->mobile!=''){ echo  $register_data->mobile; } ?>
                   
                  </div>  
                  <div class="col-md-3">

                  <strong class="label label-danger"><i class="fa fa-hand-o-right"></i> Number of days :  </strong> &nbsp;&nbsp;

                  <?php 
                      $now = time(); // or your date as well
                      $your_date = strtotime(date('d-m-Y',strtotime($register_data->admit_date)));
                      $datediff = $now - $your_date;
                      $total_days=  round($datediff / (60 * 60 * 24));
                  ?>
                  <?php if($total_days!=''){ echo $total_days.' days'; }else{ echo  'Today Admitted'; } ?>
                    
                  </div>    
              </div>
              <br><br>
           
              <!--    
              <strong class="label label-primary"><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                  <p>
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                  </p>
                -->
      
<?php 
      // if($register_data->specialty_id!=''){ 
      //   $specialty = get_specialty_info($register_data->specialty_id);
      // } else{
      //   $specialty='';
      // }
      // $womentook='';
      // $mentook='';
      // $ward_mentook='';
      // $ward_womentook='';
?>


                </div><!-- /.box-body -->
              </div><!-- /.box -->

        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->