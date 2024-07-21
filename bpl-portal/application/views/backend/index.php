<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          <!--   <small>Control panel</small> -->
          </h1>
        <!--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
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
                  <h3 class="box-title">Admitted Patient</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:10%">#</th>
                      <th style="width:20%">Patient Name  </th>
                      <th style="width:10%">Unit Tyep</th>
                      <th style="width:10%">Bed No.</th>
                      <th style="width:10%">Mobile No.</th>
                      <th style="width:10%">Added by</th>
                      <th style="width:20%">Hospital Name</th>
                    </tr>


        
                    <?php if(!empty($admit_registers)){ ?>
                      <?php $i=0; foreach($admit_registers as $row){  $i++; ?>
                      
                        <tr>
                          <td><?php echo $i.'.';     ?></td>
                          <td><?php echo $row->first_name.' '.$row->last_name; ?></td>
                          <td><?php echo $row->unit_type; ?></td>
                          <td><?php echo '<span class="label label-info">'.$row->bed_no.'</span>'; ?></td>
                          <td><?php echo $row->mobile_no; ?></td>
                          <td><?php echo $row->add_by; ?></td>
                          <?php if($row->add_by=='authority'){?>
                            <td><?php echo 'Hospital Authority'; ?></td>       
                          <?php }else if($row->add_by=='hospital'){ ?>
                            <td><?php echo get_hospital_name($row->hospital_id); ?></td>
                          <?php }else if($row->add_by=='patient'){ ?>
                            <td><?php echo 'Patient'; ?></td>
                          <?php } ?>
                        
                        </tr>
                      
                      <?php } ?>
                     <?php }else{ ?>

                       <tr><td colspan="7">No. Patient Found</td></tr>

                    <?php }  ?>

                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>

        </section><!-- /.content -->


      </div><!-- /.content-wrapper