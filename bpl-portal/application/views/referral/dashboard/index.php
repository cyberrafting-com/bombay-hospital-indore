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
                  <h3><?php echo get_refferal_admmitted_patient();   ?></h3>
                  <p>Total Admitted Patient</p>
                </div>
                <div class="icon">
                  <i class="ion ion-easel"></i>
                </div>
                <a href="<?php echo base_url('referral/dashboard/admitted');  ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
           <!--<div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php //echo get_total_hospital(); ?></h3>
                  <p> Total Hospital </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-medkit"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> -->
           <!--  <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php //echo get_waiting_patient(); ?></h3>
                  <p>Patient In Waiting</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo get_waiting_patient(); ?></h3>
                  <p> Patients waiting List </p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url('referral/dashboard/specialties');  ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->


      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->