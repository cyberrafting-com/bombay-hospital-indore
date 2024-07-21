<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Manage Registration 
        <!-- <small>Opreaton Module</small> -->
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <section class="content">
      <div class="row">
      <section class="col-lg-12 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Update Status </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row"> 
                    
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Waiting No. </strong>
                      <p class="text-muted">
                          <?php if($register_data->id!=''){ echo $register_data->id; } ?> 
                      </p>
                  </div> 
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Full Name </strong>
                    <p class="text-muted">
                      <?php if($register_data->first_name!=''){ echo ucfirst($register_data->first_name.' '.$register_data->last_name); } ?> 
                    </p>
                  </div> 
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i>  BPL Card No. </strong>
                      <p class="text-muted">
                        <?php if($register_data->bpl_no!=''){ echo ucfirst($register_data->bpl_no); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> BPL Card View</strong>
                      <p class="text-muted">
                        <a target="_blank"  href="<?php if($register_data->bpl_card_file!=''){  echo str_ireplace('index.php/','',base_url(str_ireplace('./','',$register_data->bpl_card_file)));  }else{ echo '#'; }   ?>" class="btn btn-xs btn-warning" title=""> BPL Card </a>
                      </p>
                  </div>  

              </div>

              <hr>

              <div class="row">  
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Date Of Birth </strong>
                    <p class="text-muted">
                      <?php if($register_data->date_of_birth!=''){ echo ucfirst($register_data->date_of_birth); } ?>
                    </p>
                  </div> 
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Age </strong>
                      <p class="text-muted">
                        <?php if($register_data->age!=''){ echo ucfirst($register_data->age); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                      <strong><i class="fa fa-hand-o-right"></i> Gender </strong>
                      <p class="text-muted">
                         <?php if($register_data->gender!=''){ echo ucfirst($register_data->gender); } ?>
                      </p>
                  </div>  
                  <div class="col-md-3">
                    <strong><i class="fa fa-hand-o-right"></i> Added By </strong>
                    <p class="text-muted">
                      <?php if($register_data->add_by!=''){ echo ucfirst($register_data->add_by); } ?>
                    </p>
                  </div>  
              </div>
            <hr>
        <!--    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                  <p>
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                  </p>
                -->
      
    <?php 

      if($register_data->specialty_id!=''){ 
          $specialty = get_specialty_info($register_data->specialty_id);
          $specialty_id = $specialty->id;
      }else{
          $specialty='';
          $specialty_id ='';
      }

      $womentook='';
      $mentook='';
      $ward_mentook='';
      $ward_womentook='';
    ?>
 <div class="clearfix"></div>
    <form action="<?php  echo current_url();  ?>" method="post" accept-charset="utf-8">
    

              <div class="col-md-3">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Admit Date</label>
                  <input type="text" readonly placeholder="Admit Date" id="readmit_date" class="form-control" name="readmit_date"  value="<?php if(!empty($register_data->admit_date)){ echo date('d/m/Y',strtotime($register_data->admit_date)); } ?>">
                  <?php echo form_error('readmit_date'); ?>
                </div> 
              </div>
        
    
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Specialty</label>

                    <select  class="form-control" name="specialty_id" >
                      
                      <option value="">- Select Specialty -</option>
                      <?php if(!empty($all_specialty)){  ?>
                        <?php foreach ($all_specialty as $value){ ?>
                            <option <?php if(!empty($specialty_id) && $specialty_id==$value->id){ ?>  selected="selected"   <?php } ?>  value="<?php echo $value->id; ?>"><?php echo $value->specialty_name; ?></option>
                        <?php } ?>
                      <?php   } ?>
                      
                    </select>

                    
                    <?php echo form_error('specialty_id'); ?>
                </div>  
              </div>  

              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail3" class=" control-label">Gender</label>
                    <input type="text" readonly placeholder="Gender" class="form-control" name="gender" 
                    value="<?php if($register_data->gender!=''){  echo ucfirst($register_data->gender); } ?>">
                    <?php echo form_error('gender'); ?>
                </div>
              </div>
   
              <div class="col-md-3">
                <div class="form-group">
                    <label for="inputtext3" class="control-label">Bed No.:</label>
                    <select name="bed_no" id="ward_bed" <?php if(!empty($register_data->unit_type) && $register_data->unit_type=='ward'){ echo 'style="display:block"';  }else{   echo 'disabled="disabled" style="display:none"';   } ?>  class="form-control" >
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='501'){ echo 'selected'; } ?> value="501">501 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='502'){ echo 'selected'; } ?> value="502">502 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='503'){ echo 'selected'; } ?> value="503">503 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='504'){ echo 'selected'; } ?> value="504">504 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='505'){ echo 'selected'; } ?> value="505">505 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='506'){ echo 'selected'; } ?> value="506">506 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='507'){ echo 'selected'; } ?> value="507">507 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='508'){ echo 'selected'; } ?> value="508">508 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='509'){ echo 'selected'; } ?> value="509">509 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='510'){ echo 'selected'; } ?> value="510">510 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='511'){ echo 'selected'; } ?> value="511">511 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='512'){ echo 'selected'; } ?> value="512">512 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='513'){ echo 'selected'; } ?> value="513">513 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='514'){ echo 'selected'; } ?> value="514">514 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='515'){ echo 'selected'; } ?> value="515">515 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='516'){ echo 'selected'; } ?> value="516">516 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='517'){ echo 'selected'; } ?> value="517">517 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='518'){ echo 'selected'; } ?> value="518">518 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='519'){ echo 'selected'; } ?> value="519">519 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='520'){ echo 'selected'; } ?> value="520">520 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='521'){ echo 'selected'; } ?> value="521">521 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='522'){ echo 'selected'; } ?> value="522">522 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='523'){ echo 'selected'; } ?> value="523">523 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='524'){ echo 'selected'; } ?> value="524">524 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='525'){ echo 'selected'; } ?> value="525">525 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='526'){ echo 'selected'; } ?> value="526">526 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='527'){ echo 'selected'; } ?> value="527">527 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='528'){ echo 'selected'; } ?> value="528">528 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='529'){ echo 'selected'; } ?> value="529">529 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='530'){ echo 'selected'; } ?> value="530">530 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='531'){ echo 'selected'; } ?> value="531">531 </option>  
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='532'){ echo 'selected'; } ?> value="532">532 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">533 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='533'){ echo 'selected'; } ?> value="533">534 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='535'){ echo 'selected'; } ?> value="535">535 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='536'){ echo 'selected'; } ?> value="536">536 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='537'){ echo 'selected'; } ?> value="537">537 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='538'){ echo 'selected'; } ?> value="538">538 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='539'){ echo 'selected'; } ?> value="539">539 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='540'){ echo 'selected'; } ?> value="540">540 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='541'){ echo 'selected'; } ?> value="541">541 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='542'){ echo 'selected'; } ?> value="542">542 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='543'){ echo 'selected'; } ?> value="543">543 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='544'){ echo 'selected'; } ?> value="544">544 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='545'){ echo 'selected'; } ?> value="545">545 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='546'){ echo 'selected'; } ?> value="546">546 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='547'){ echo 'selected'; } ?> value="547">547 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='548'){ echo 'selected'; } ?> value="548">548 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='549'){ echo 'selected'; } ?> value="549">549 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='550'){ echo 'selected'; } ?> value="550">550 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='551'){ echo 'selected'; } ?> value="551">551 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='552'){ echo 'selected'; } ?> value="552">552 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='553'){ echo 'selected'; } ?> value="553">553 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='554'){ echo 'selected'; } ?> value="554">554 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='555'){ echo 'selected'; } ?> value="555">555 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='556'){ echo 'selected'; } ?> value="556">556 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='567'){ echo 'selected'; } ?> value="567">567 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='568'){ echo 'selected'; } ?> value="568">568 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='569'){ echo 'selected'; } ?> value="569">569 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='570'){ echo 'selected'; } ?> value="570">570 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='571'){ echo 'selected'; } ?> value="571">571 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='572'){ echo 'selected'; } ?> value="572">572 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='573'){ echo 'selected'; } ?> value="573">573 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='574'){ echo 'selected'; } ?> value="574">574 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='575'){ echo 'selected'; } ?> value="575">575 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='576'){ echo 'selected'; } ?> value="576">576 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='577'){ echo 'selected'; } ?> value="577">577 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='578'){ echo 'selected'; } ?> value="578">578 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='579'){ echo 'selected'; } ?> value="579">579 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='580'){ echo 'selected'; } ?> value="580">580 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='581'){ echo 'selected'; } ?> value="581">581 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='582'){ echo 'selected'; } ?> value="582">582 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='583'){ echo 'selected'; } ?> value="583">583 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='584'){ echo 'selected'; } ?> value="584">584 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='585'){ echo 'selected'; } ?> value="585">585 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='586'){ echo 'selected'; } ?> value="586">586 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='587'){ echo 'selected'; } ?> value="587">587 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='588'){ echo 'selected'; } ?> value="588">588 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='589'){ echo 'selected'; } ?> value="589">589 </option>
                      <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='590'){ echo 'selected'; } ?> value="590">590 </option>
                    </select>


              <select name="bed_no" id="icu_bed"  <?php if(!empty($register_data->unit_type) && $register_data->unit_type=='icu'){ echo 'style="display:block"';  }else{   echo 'disabled="disabled" style="display:none"';   } ?>  class="form-control"  >
                <option value="">-Select Bed No.-</option>
                                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='201'){ echo 'selected'; } ?> value="201">201 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='202'){ echo 'selected'; } ?> value="202">202 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='203'){ echo 'selected'; } ?> value="203">203 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='204'){ echo 'selected'; } ?> value="204">204 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='205'){ echo 'selected'; } ?> value="205">205 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='206'){ echo 'selected'; } ?> value="206">206 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='207'){ echo 'selected'; } ?> value="207">207 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='208'){ echo 'selected'; } ?> value="208">208 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='209'){ echo 'selected'; } ?> value="209">209 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='210'){ echo 'selected'; } ?> value="210">210 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='211'){ echo 'selected'; } ?> value="211">211 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='212'){ echo 'selected'; } ?> value="212">212 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='213'){ echo 'selected'; } ?> value="213">213 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='214'){ echo 'selected'; } ?> value="214">214 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='215'){ echo 'selected'; } ?> value="215">215 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='216'){ echo 'selected'; } ?> value="216">216 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='217'){ echo 'selected'; } ?> value="217">217 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='218'){ echo 'selected'; } ?> value="218">218 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='219'){ echo 'selected'; } ?> value="219">219 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='220'){ echo 'selected'; } ?> value="220">220 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='221'){ echo 'selected'; } ?> value="221">221 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='222'){ echo 'selected'; } ?> value="222">222 ICU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='401'){ echo 'selected'; } ?> value="401">401 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='402'){ echo 'selected'; } ?> value="402">402 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='403'){ echo 'selected'; } ?> value="403">403 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='404'){ echo 'selected'; } ?> value="404">404 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='405'){ echo 'selected'; } ?> value="405">405 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='406'){ echo 'selected'; } ?> value="406">406 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='407'){ echo 'selected'; } ?> value="407">407 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='408'){ echo 'selected'; } ?> value="408">408 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='409'){ echo 'selected'; } ?> value="409">409 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='410'){ echo 'selected'; } ?> value="410">410 ICCU </option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='451'){ echo 'selected'; } ?> value="451">451 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='452'){ echo 'selected'; } ?> value="452">452 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='453'){ echo 'selected'; } ?> value="453">453 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='454'){ echo 'selected'; } ?> value="454">454 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='455'){ echo 'selected'; } ?> value="455">455 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='456'){ echo 'selected'; } ?> value="456">456 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='457'){ echo 'selected'; } ?> value="457">457 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='458'){ echo 'selected'; } ?> value="458">458 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='459'){ echo 'selected'; } ?> value="459">459 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='460'){ echo 'selected'; } ?> value="460">460 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='461'){ echo 'selected'; } ?> value="461">461 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='462'){ echo 'selected'; } ?> value="462">462 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='463'){ echo 'selected'; } ?> value="463">463 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='464'){ echo 'selected'; } ?> value="464">464 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='465'){ echo 'selected'; } ?> value="465">465 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='466'){ echo 'selected'; } ?> value="466">466 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='467'){ echo 'selected'; } ?> value="467">467 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='468'){ echo 'selected'; } ?> value="468">468 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='469'){ echo 'selected'; } ?> value="469">469 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='470'){ echo 'selected'; } ?> value="470">470 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='471'){ echo 'selected'; } ?> value="471">471 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='472'){ echo 'selected'; } ?> value="472">472 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='473'){ echo 'selected'; } ?> value="473">473 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='474'){ echo 'selected'; } ?> value="474">474 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='475'){ echo 'selected'; } ?> value="475">475 ICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='557'){ echo 'selected'; } ?> value="557">557 NICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='558'){ echo 'selected'; } ?> value="558">558 NICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='559'){ echo 'selected'; } ?> value="559">559 NICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='560'){ echo 'selected'; } ?> value="560">560 NICU</option>
                <option <?php if($register_data->bed_no!='' &&  $register_data->bed_no=='561'){ echo 'selected'; } ?> value="561">561 NICU</option>

            </select>   
                    <?php echo form_error('bed_no'); ?>
                </div>
              </div>
              <div class="clearfix"></div>
               <div class="col-md-3">
                <label for="inputEmail3" class="control-label">City <span class="mend">*</span></label>
                <select name="city" class="form-control" placeholder="City">
                      <option value="">- Select City -</option>
                      <option  <?php if(empty($register_data->city)){  echo  'selected="selected"'; } ?> <?php if(!empty($register_data->city) && $register_data->city=='indore'){ echo 'selected="selected"';  } ?> value='indore'  >  Indore  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='bhopal'){ echo 'selected="selected"';  } ?> value='bhopal'  >  Bhopal  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='jabalpur'){ echo 'selected="selected"';  } ?> value='jabalpur'> Jabalpur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='gwalior'){ echo 'selected="selected"';  } ?> value='gwalior' >  Gwalior  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='ujjain'){ echo 'selected="selected"';  } ?> value='ujjain'  > Ujjain  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='sagar'){ echo 'selected="selected"';  } ?> value='sagar'   > Sagar  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='dewas'){ echo 'selected="selected"';  } ?> value='dewas'   > Dewas  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='satna'){ echo 'selected="selected"';  } ?> value='satna'   > Satna  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='ratlam'){ echo 'selected="selected"';  } ?> value='ratlam'  > Ratlam  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='rewa'){ echo 'selected="selected"';  } ?> value='rewa'    > Rewa  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='murwara-katni'){ echo 'selected="selected"';  } ?> value='murwara-katni' > Murwara (Katni)  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='singrauli'){ echo 'selected="selected"';  } ?> value='singrauli' > Singrauli  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='burhanpur'){ echo 'selected="selected"';  } ?> value='burhanpur' > Burhanpur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='khandwa'){ echo 'selected="selected"';  } ?> value='khandwa' > Khandwa  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='bhind'){ echo 'selected="selected"';  } ?> value='bhind'   > Bhind  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='chhindwara'){ echo 'selected="selected"';  } ?> value='chhindwara' > Chhindwara  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='guna'){ echo 'selected="selected"';  } ?> value='guna'    > Guna  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='vidisha'){ echo 'selected="selected"';  } ?> value='vidisha' > Vidisha  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='chhatarpur'){ echo 'selected="selected"';  } ?> value='chhatarpur' > Chhatarpur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='damoh'){ echo 'selected="selected"';  } ?> value='damoh'   > Damoh  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='mandsaur'){ echo 'selected="selected"';  } ?> value='mandsaur'> Mandsaur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='khargone'){ echo 'selected="selected"';  } ?> value='khargone'> Khargone  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='neemuch'){ echo 'selected="selected"';  } ?> value='neemuch' > Neemuch  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='pithampur'){ echo 'selected="selected"';  } ?> value='pithampur'> Pithampur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='hoshangabad'){ echo 'selected="selected"';  } ?> value='hoshangabad'>  Hoshangabad  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='itarsi'){ echo 'selected="selected"';  } ?> value='itarsi' > Itarsi   </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='sehore'){ echo 'selected="selected"';  } ?> value='sehore' > Sehore  </option>
                       <option <?php if(!empty($register_data->city) && $register_data->city=='shajapur'){ echo 'selected="selected"';  } ?> value='shajapur' > Shajapur  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='betul'){ echo 'selected="selected"';  } ?> value='betul' > Betul  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='seoni'){ echo 'selected="selected"';  } ?> value='seoni' > Seoni  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='datia'){ echo 'selected="selected"';  } ?> value='datia' > Datia  </option>
                      <option <?php if(!empty($register_data->city) && $register_data->city=='nagda'){ echo 'selected="selected"';  } ?> value='nagda' > Nagda  </option>
                    </select>   
                  <span class=""><?php echo form_error('city'); ?></span>
                </div> 

              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Assign Doctors :</label>
                    <select class="form-control" name="doctor_id">
                      <?php if($doctors!=''){ ?>
                          <option value="">- Select Doctor -</option>
                          <?php foreach ($doctors as $row){ ?>
                          <option <?php if(!empty($register_data->assign_doctor) && $register_data->assign_doctor==$row->id){ echo 'selected="selected"';    } ?> value="<?php echo $row->id; ?>"><?php echo $row->doctor_name; ?></option>
                          <?php } ?>
                      <?php } ?> 
                    </select>
                    <?php echo form_error('doctor_id'); ?>
                  </div>
              </div> 
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputtext3" class="control-label">Unit Type:</label>
                    <select name="unit_type" id="unit_type"  class="form-control">
                    <option value="">-Select Unit-</option>
                    <option <?php if(!empty($register_data->unit_type) && $register_data->unit_type=='icu'){ echo 'selected="selected"';  } ?> value="icu">ICU</option>
                    <option <?php if(!empty($register_data->unit_type) && $register_data->unit_type=='ward'){ echo 'selected="selected"';  } ?> value="ward">Ward</option>
                  </select> 
                  <span class=""><?php echo form_error('unit_type'); ?></span>

                    
                    <?php echo form_error('ipno'); ?>
                  </div>
              </div>  

              <div class="clearfix"></div>
              <div class="col-md-offset-4 col-md-4">   
                  <p><button type="submit" class="btn btn-block btn-info" name="save">Update Status </button> </p>
              </div>
            </form>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

        </section><!-- right col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->