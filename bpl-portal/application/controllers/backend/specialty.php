<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo get_admmitted_patient();   ?></h3>
                  <p>Total Admitted Patient</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo get_total_hospital(); ?></h3>
                  <p> Total Hospital </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-medkit"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo get_waiting_patient(); ?></h3>
                  <p>Patient In Waiting</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo get_total_specialty(); ?></h3>
                  <p>Total Specialty </p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <!-- Main row -->


        <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Available Bed In Bombay hospital Indore </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:10%"> #            </th>
                      <th style="width:10%"> Bed No.      </th>
                      <th style="width:20%"> Patient Name </th>
                      <th style="width:10%"> Unit Type    </th>
                      <th style="width:10%"> Mobile No.   </th>
                      <th style="width:10%"> Added by     </th>
                      <th style="width:20%"> Hospital Name</th>
                      <th style="width:10%"> Bed Status   </th>
                    </tr>
                    <?php if(!empty($specialty)){ ?>

                        <?php foreach($specialty as $row){ ?>

                          <?php $Get_list = get_specilty_bed_update($row->id); ?>
                          
                          <?php if(!empty($Get_list['num_rows'])){  $j=0; ?>
                                
                          <tr><td colspan="8" class="text-center" ><b><?php  if($row->specialty_name!=''){ echo ucfirst($row->specialty_name);  } ?></b></td></tr>

                            <?php foreach($Get_list['total'] as $value){ $j++; ?>

                                <tr>
                                      <td style="width:10%"><?php echo  $value->id;   ?> </td>
                                      <td style="width:10%"><?php echo  $value->bed_no;   ?></td>
                                      <td style="width:20%"><?php echo  ucfirst($value->first_name.' '.$value->last_name);     ?></td>
                                      <td style="width:10%"><?php echo  ucfirst($value->unit_type);   ?></td>
                                      <td style="width:10%"><?php echo  $value->mobile;   ?></td>
                                      <td style="width:10%"><?php echo  ucfirst($value->add_by);   ?></td>
                                      <td style="width:20%"><?php  if($value->add_by=='hospital'){ echo  get_hospital_name($value->hospital_id); }else{ echo  ' - '; } ?></td>
                                      <td>
                                        <?php if($value->admit_status==1){ ?> 
                                            <span class="label label-success">Occupied</span> 
                                        <?php } ?>
                                        <?php if($value->admit_status==0){ ?> 
                                            <span class="label label-warning">Waiting</span>  
                                        <?php } ?> 
                                      </td>
                                </tr>               

                            <?php } ?>
                            <?php if($j<2){ ?>
                              <tr>
                                  <td colspan="7"> * Bed is vacant In <?php  if($row->specialty_name!=''){ echo ucfirst($row->specialty_name);  } ?> Specialty</td>
                                  <td> <a href="<?php echo base_url('backend/bpl_lists/bpl_add/'.$row->slug); ?>" class="label label-info">Vacant</a> </td>
                              </tr>       
                            <?php } ?>
                              
                          <?php }else{  ?> 


                          <tr><td colspan="8" class="text-center" ><b><?php  if($row->specialty_name!=''){ echo ucfirst($row->specialty_name);  } ?></b></td></tr>
                          <?php for($i=0; $i <2 ; $i++) {  ?>
                              
                                <tr>
                                    <td colspan="7"> * Bed is vacant in <?php  if($row->specialty_name!=''){ echo ucfirst($row->specialty_name);  } ?> Specialty</td>
                                    <td> <a href="<?php echo base_url('backend/bpl_lists/bpl_add/'.$row->slug); ?>" class="label label-info">Vacant</a> </td>
                                </tr>       

                          <?php } ?>

                          <?php }  ?> 

                        <?php } ?>
                    <?php } ?>      
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div> 

        </section><!-- /.content -->


      </div><!-- /.content-wrapper