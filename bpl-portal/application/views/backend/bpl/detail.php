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
        <section class="col-lg-6 connectedSortable">
                      <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> <i class="fa fa-user margin-r-5"></i> Personal Information </h3>
                </div><!-- /.box-header -->
                <div class="box-body">

              

                  <strong><i class="fa fa-book margin-r-5"></i> Full Name : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->first_name!=''){ echo ucfirst($register_data->first_name.' '.$register_data->last_name); } ?>  </i>
                  </span>

                  <hr>

                  <strong><i class="fa fa-fax margin-r-5"></i>  BPL Card No. : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->bpl_no!=''){ echo ucfirst($register_data->bpl_no); } ?></i>
                  </span>


                  <hr>  

                  <strong><i class="fa fa-fax margin-r-5"></i> BPL Card View : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                    <?php if($register_data->bpl_card_file!=''){ ?>
                       <i><a target="_blank"  href="<?php if($register_data->bpl_card_file!=''){  echo str_ireplace('index.php/','',base_url(str_ireplace('./','',$register_data->bpl_card_file)));  }else{ echo '#'; }   ?>" class="btn btn-xs btn-warning" title=""> BPL Card </a></i>
                    <?php }else{ ?>
                      <i>  -----  </i>
                    <?php } ?>
                  </span>


                  <hr> 

                  <strong><i class="fa fa-calendar margin-r-5"></i> Date Of Birth : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->date_of_birth!=''){ echo date('d-m-Y',strtotime($register_data->date_of_birth)); } ?>  </i>
                  </span>


                  <hr>

                  <strong><i class="fa fa-rocket margin-r-5"></i> Age : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->age!=''){ echo ucfirst($register_data->age); } ?> Years </i>
                  </span>


                  <hr>

                  <strong><i class="fa fa-sitemap margin-r-5"></i> Gender : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->gender!=''){ echo ucfirst($register_data->gender); } ?> </i>
                  </span>


                  <hr> 

                  <strong><i class="fa fa-phone margin-r-5"></i> Mobile :   </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>+91 <?php if($register_data->mobile!=''){ echo  $register_data->mobile; } ?></i>
                  </span>

                  <br>
                  <br>

                  <!-- <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->   
        </section><!-- right col --><section class="col-lg-6 connectedSortable">
                      <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> <i class="fa fa-ambulance margin-r-5"></i> Admitted Information </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                  <strong><i class="fa fa-book margin-r-5"></i> Waiting No. : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->id!=''){ echo $register_data->id; } ?> </i>
                  </span>
                  <hr> 

                  <strong><i class="fa fa-book margin-r-5"></i> Bed Number : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                    <i class="label label-success"> <?php if($register_data->bed_no!=''){ echo $register_data->bed_no; } ?>  </i>
                  </span>
                  <hr>

                  <strong><i class="fa fa-book margin-r-5"></i> Specialty : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->specialty_id!=''){ echo get_specialty_name($register_data->specialty_id); } ?> </i>
                  </span>
                  <hr>
                  
                  <strong><i class="fa fa-book margin-r-5"></i> Case Type : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->case_type!=''){  $case = unserialize($register_data->case_type);  if(!empty($case[0])){ echo ucfirst($case[0]); } if(!empty($case[1])){ echo ','.ucfirst($case[1]);  }  } ?> </i>
                  </span>
                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Added By : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->add_by!=''){ echo ucfirst($register_data->add_by); } ?>  </i>
                  </span>
                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Hospital Name : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                    <?php if($register_data->add_by!='' && $register_data->add_by=='authority'){ ?>
                      <i> Bombay Hospital Indore (Self) </i>  
                    <?php }else{ ?>
                      <i> <?php echo ucfirst(get_hospital_name($register_data->hospital_id)); ?></i>
                    <?php } ?>
                  </span>
                  <hr> 

                  <strong><i class="fa fa-map-marker margin-r-5"></i> IP NO. : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->ipno!=''){ echo  $register_data->ipno; } ?>  </i>
                  </span>
                  <hr>
                  
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Date Of Admit : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i>  <?php if($register_data->admit_date!=''){ echo date('d-m-Y',strtotime($register_data->admit_date)); } ?> </i>
                  </span>
                  <hr>  

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Unit Type : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($register_data->unit_type!=''){ echo ucfirst($register_data->unit_type); } ?> </i>
                  </span>
                  <hr> 

                  <?php 
                      $now = time(); // or your date as well
                      $your_date = strtotime(date('d-m-Y',strtotime($register_data->admit_date)));
                      $datediff = $now - $your_date;
                      $total_days=  round($datediff / (60 * 60 * 24));
                  ?>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Number of days : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if($total_days!=''){ echo $total_days.' Days'; }else{ echo 'Today Admitted'; } ?> </i>
                  </span>
                  <hr> 
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Doctor Name : </strong>
                  <span class="text-center" style="margin-left: 10px;">
                     <i> <?php if(trim($register_data->assign_doctor)!=''){ echo get_doctor_name(trim($register_data->assign_doctor)); }else{ echo '-----'; } ?> </i>
                  </span>
                  <hr>

            
                </div><!-- /.box-body -->
              </div><!-- /.box -->   
        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->