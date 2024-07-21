<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Bpl_lists extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        clear_cache();
        $this->load->model('bpl_model');
    }

	public function index($offset=0){
		_check_superadmin_login(); //check login authentication
		$per_page=25;
		$data['registrations']= $this->bpl_model->registrations($offset,$per_page);
		$data['offset']       = $offset;
 		$config=backend_pagination();
		$config['base_url']   = base_url().'backend/bpl_lists/index';
		$config['total_rows'] = $this->bpl_model->registrations(0,0);
		$config['per_page']   = $per_page;
		$config['uri_segment']= 4;
		if($_SERVER['QUERY_STRING']!=''){
        	$config['suffix'] = "?".$_SERVER['QUERY_STRING'];
        }
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
 		$data['template']='backend/bpl/index';
		$this->load->view('templates/backend/layout', $data);
	}

	public function bpl_add($slug=''){
		_check_superadmin_login(); //check login authentication

		$data['special'] = $this->bpl_model->get_row('specialties',array('status'=>1,'slug'=>$slug));
		if($data['special']==''){   redirect('backend/bpl_lists/index/');  }

		// $data['registration'] = $this->bpl_model->get_bpl_registration_record($data['special']->id);
		// if(count($data['registration'])>=2){
		//   $this->session->set_flashdata('msg_error','You can not reffer more then two patient to a particular specialty');
	 //      redirect('backend/bpl_lists/index');
		// }

		if($data['special']->slug=='neuro-surgery'){	
			$data['registration'] = $this->bpl_model->get_bpl_registration_record($data['special']->id);
			if(count($data['registration'])>=1 && !empty($data['registration'])){
			  $this->session->set_flashdata('msg_error','You can not reffer more then one patient to a particular specialty');
		      redirect('backend/bpl_lists/index');
			}
		}else{
			$data['registration'] = $this->bpl_model->get_bpl_registration_record($data['special']->id);
			if(count($data['registration'])>=2){
			  $this->session->set_flashdata('msg_error','You can not reffer more then two patient to a particular specialty');
		      redirect('backend/bpl_lists/index');
			}
		}
		
		$this->form_validation->set_rules('bpl_card_no','BPL No.','required');
        if(!$this->session->userdata('aadhar_card_file')){
		    $this->form_validation->set_rules('bpl_card_file','BPL Card File','callback_bpl_card_file_check');
		}
		$this->form_validation->set_rules('aadhar_crad_no','Aadhar Card No','required');
		if(!$this->session->userdata('aadhar_card_file')){
			$this->form_validation->set_rules('aadhar_card_file','Aadhar Card File','callback_aadhar_card_file_check');
		}
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('middle_name','Middle Name','trim');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim');
		$this->form_validation->set_rules('date_of_birth','Date Of Birth','trim');
		$this->form_validation->set_rules('age','Age','trim');
		$this->form_validation->set_rules('gender','Gender','trim');
		$this->form_validation->set_rules('occupation','Occupation','trim');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('pin','Pin','trim');
		$this->form_validation->set_rules('telephone_no','Telephone','trim');
		$this->form_validation->set_rules('annual_income','Annual Income','trim');
		$this->form_validation->set_rules('vehicle_owned','Vehicle Owned','trim');
		$this->form_validation->set_rules('mobile_no','Mobile','trim|required');
		$this->form_validation->set_rules('case_type[]','Case Type','required');
		$this->form_validation->set_rules('specialty','Specialty','required');
		$this->form_validation->set_rules('unit_type','Unit Type','required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			
			$first_data =   array(
			  						'add_by'        => 'authority',	
	                                'bpl_no'        => $this->input->post('bpl_card_no'),
	                                'aadhar_card_no'=> $this->input->post('aadhar_crad_no'),   
	                                'first_name'    => $this->input->post('first_name'),   
		                            'middle_name'   => $this->input->post('middle_name'),   
		                            'last_name'     => $this->input->post('last_name'),   
		                            'address'       => $this->input->post('address'),   
		                            'date_of_birth' => $this->input->post('date_of_birth'),   
		                            'age'           => $this->input->post('age'),   
		                            'gender'        => $this->input->post('gender'),   
		                            'occupation'    => $this->input->post('occupation'),   
		                            'city'          => $this->input->post('city'),   
		                            'state'         => $this->input->post('state'),   
		                            'pin'           => $this->input->post('pin'),   
		                            'specialty_id'  => $this->input->post('specialty'),   
		                            'case_type'     => serialize($this->input->post('case_type')),   
		                            'mobile'        => $this->input->post('mobile_no'),   
		                            'vehicle_owned' => $this->input->post('vehicle_owned'),   
		                            'annual_income' => $this->input->post('annual_income'),  
		                            'telephone'     => $this->input->post('telephone_no'),   
		                            'unit_type'     => $this->input->post('unit_type'),   
		                            'status'        => 1,   
		                            'created'       => date('Y-m-d h:i:s')
                                );

        	if($this->session->userdata('aadhar_card_file')){
                $aadhar_card_file = $this->session->userdata('aadhar_card_file');
                $first_data['aadhar_card_file']   = $aadhar_card_file['file'];
            }
            if($this->session->userdata('bpl_card_file')){
                $bpl_card_file = $this->session->userdata('bpl_card_file');
                $first_data['bpl_card_file']   = $bpl_card_file['file'];
            }
			if($last_id = $this->bpl_model->insert('bpl_registration',$first_data)){
				if($this->session->userdata('aadhar_card_file')){
            		$this->session->set_userdata('aadhar_card_file',array());
                    $this->session->unset_userdata('aadhar_card_file');
                }
                if($this->session->userdata('bpl_card_file')){
                	$this->session->set_userdata('bpl_card_file',array());
                    $this->session->unset_userdata('bpl_card_file');
                }
				$this->session->set_flashdata('msg_success','New BPL patient form has added successfully. New waiting no. is :'.$last_id);
				redirect('backend/bpl_lists/');
			}
		}

		$data['specialty'] = $this->bpl_model->get_result('specialties',array('status'=>1));
		$data['template']='backend/bpl/add';
		$this->load->view('templates/backend/layout', $data);
	}

	public function bpl_card_file_check($str)
    {
    	if(!empty($_FILES["bpl_card_file"]["tmp_name"])){

	        if($this->session->userdata('bpl_card_file')){
	            return TRUE;
	        }else{
	            $param = array(
				                'file_name'    => 'bpl_card_file',
				                'upload_path'  => './assets/uploads/bpl_card/',
				                'allowed_types'=> 'PDF|pdf',
				                // 'image_resize' => TRUE,
				                // 'source_image' => './assets/uploads/bpl_card/',
				                // 'new_image'    => './assets/uploads/bpl_card/thumb/',
				                // 'resize_width' => 320,
				                // 'resize_height'=> 300,
				                'encrypt_name' => TRUE
	            			);
	            $upload_file = upload_file($param);
	            if($upload_file['STATUS']){      
	                $this->session->set_userdata('bpl_card_file', array('file' => $param['upload_path'] . $upload_file['UPLOAD_DATA']['file_name']));
	                return TRUE;
	            } else {
	                $this->form_validation->set_message('bpl_card_file_check', $upload_file['FILE_ERROR']);
	                return FALSE;
	            }
	        }
    	}else{
    		return TRUE;
    	}
    }

    public function aadhar_card_file_check($str)
    {
    	if(!empty($_FILES["aadhar_card_file"]["tmp_name"])){

	        if($this->session->userdata('aadhar_card_file')){
	            return TRUE;
	        }else{
	            $param = array(
				                'file_name'    => 'aadhar_card_file',
				                'upload_path'  => './assets/uploads/aadhar_card/',
				                'allowed_types'=> 'PDF|pdf',
				                // 'image_resize' => TRUE,
				                // 'source_image' => './assets/uploads/bpl_card/',
				                // 'new_image'    => './assets/uploads/bpl_card/thumb/',
				                // 'resize_width' => 320,
				                // 'resize_height'=> 300,
				                'encrypt_name' => TRUE
	            			);
	            $upload_file = upload_file($param);
	            if($upload_file['STATUS']){      
	                $this->session->set_userdata('aadhar_card_file', array('file' => $param['upload_path'] . $upload_file['UPLOAD_DATA']['file_name']));
	                return TRUE;
	            } else {
	                $this->form_validation->set_message('aadhar_card_file_check', $upload_file['FILE_ERROR']);
	                return FALSE;
	            }
	        }

	    }else{
	    	return TRUE;
	    }    
    }

    public function view_detail($reg_id='',$offset=0)
    {
    	_check_superadmin_login(); //check login authentication
		if($reg_id==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset); }
	   	$data['register_data'] = $this->bpl_model->get_row('bpl_registration',array('id'=>$reg_id,'admit_status'=>1));
		if($data['register_data']==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset); }
		// print_r($data['register_data']);
		// die();
		$data['template']='backend/bpl/detail';
		$this->load->view('templates/backend/layout', $data);
    }

    public function edit_status($reg_id='',$offset=0)
    {
    	_check_superadmin_login(); //check login authentication
		if($reg_id==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset); }
	   	$data['register_data'] = $this->bpl_model->get_row('bpl_registration',array('id'=>$reg_id,'admit_status'=>1));
		if($data['register_data']==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset); }
		// print_r($data['register_data']);
        $this->form_validation->set_rules('readmit_date','Re-Admit Date','trim|required');
		$this->form_validation->set_rules('bed_no','Bed No','trim|required|numeric|callback_update_check_bed_no['.$data['register_data']->id.']');
		$this->form_validation->set_rules('doctor_id','Doctor','trim|required');
		$this->form_validation->set_rules('specialty_id','Specialty Id','trim|required');
		$this->form_validation->set_rules('unit_type','Unit Type','trim|required');
		if($this->form_validation->run() == TRUE){
			$main_data=array(
								'bed_no'         => $this->input->post('bed_no'),
								'specialty_id'   => $this->input->post('specialty_id'),
								'city'           => $this->input->post('city'),
								'assign_doctor'  => $this->input->post('doctor_id'),
								'admit_date'     => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('readmit_date')))),
								'unit_type'      => $this->input->post('unit_type'),
								'admit_status'   => 1
							);
			
            if($this->bpl_model->update('bpl_registration',$main_data,array('id'=>$data['register_data']->id))){
				$this->session->set_flashdata('msg_success','Register status has been Updated successfully.');
				redirect(base_url().'backend/bpl_lists/index/'.$offset);
		    }
		}		
	    $data['all_specialty'] = $this->bpl_model->get_result('specialties',array('status'=>1));
        
        $data['doctors']   = $this->bpl_model->get_result('doctors',array('status'=>1));

		$data['template']='backend/bpl/edit_status';
		$this->load->view('templates/backend/layout', $data);
    }

	public function update_status($reg_id='',$offset=0){
		_check_superadmin_login(); //check login authentication
		if($reg_id==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset); }
	   	$data['register_data'] = $this->bpl_model->get_row('bpl_registration',array('id'=>$reg_id,'admit_status !='=>2));
		if($data['register_data']==''){ redirect(base_url().'backend/bpl_lists/index/'.$offset);	}
		// print_r($data['register_data']);
		// die();
		$temp_arr = (array) $data['register_data'];
		
		$this->form_validation->set_rules('specialty','Specialty','trim');
		$this->form_validation->set_rules('gender','Gender','trim');
		if($data['register_data']->admit_status==0){
			$this->form_validation->set_rules('admit_date','Admit Date','trim|required');
			$this->form_validation->set_rules('ipno','IPNO','trim|required|numeric|min_length[7]');
			$this->form_validation->set_rules('waiting_cleared','Waiting Cleared','trim|required');
			$this->form_validation->set_rules('bed_no','Bed No','trim|required|numeric|callback_check_bed_no');
			$this->form_validation->set_rules('doctor_id','Doctor','trim|required');
		}else{
		    $this->form_validation->set_rules('discharge_date','Discharge Date','trim|required');
		    $this->form_validation->set_rules('bill_amount','Bill Amount','trim|required');
		}
		if(isset($_POST['comment_box'])){
			$this->form_validation->set_rules('comment_box','Comment Box','trim|required');
		}	
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			$women_icu='';
			$men_icu='';

			if($data['register_data']->admit_status==0){
			    $main_data=array(
									'bed_no'         => $this->input->post('bed_no'),
									'assign_doctor'  => $this->input->post('doctor_id'),
									'admit_date'     => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('admit_date')))),
									'waiting_cleared'=> $this->input->post('waiting_cleared'),
									'ipno'           => $this->input->post('ipno'),
									'admit_status'   => 1
								);

			    if(isset($_POST['comment_box'])){
				 	$main_data['comment']= $this->input->post('comment_box');
				 	$main_data['comment_status'] = 1;
				}	

			}else{

				$main_data=array(
									'discharge_date'=> date('Y-m-d',strtotime($this->input->post('discharge_date'))),
									'bill_amount'   => $this->input->post('bill_amount'),
									'admit_status'  => 2
								);
				
			}

			if($this->bpl_model->update('bpl_registration',$main_data,array('id'=>$data['register_data']->id))){

				if($data['register_data']->admit_status==0){

					if($temp_arr['specialty_id']!=''){ 
				        $specialty = get_specialty_info($temp_arr['specialty_id']);
				    }else{
				        $specialty='';
				    }

				    $doctor = get_doctor_name($this->input->post('doctor_id'));

			        $udata = array(
			        			'bed_no'    => $temp_arr['bpl_no'],
			        			'card_no'   => $temp_arr['aadhar_card_no'],
			                    'patient_name'=>$temp_arr['first_name'].','.$temp_arr['middle_name'].','.$temp_arr['last_name'],
			                        'address'   => $temp_arr['address'],
			                        'age'       => $temp_arr['age'],
			                        'gender'    => $temp_arr['gender'],
			                        'city'      => $temp_arr['city'],
			                        'specialty' => ucfirst($specialty->specialty_name),
			                        'unit_type' => $temp_arr['unit_type'],
			                        'doctor'    => $doctor,
			                        'mobile'    => $temp_arr['mobile'],
			                        'ipno'      => $temp_arr['ipno'],
			                        'admit_date'=> $this->input->post('admit_date'),
			                    );      

			        $body   = $this->load->view('Template',$udata,TRUE);
			       // $tester = $this->mailclass->sendMailWithBcc('mayank_physio1185@yahoo.com','Admit Patient Notification',$body);
		    	}

				$this->session->set_flashdata('msg_success','Register status has been Updated successfully.');
				redirect(base_url().'backend/bpl_lists/index/'.$offset);
			}
		}
		$data['specialty'] = $this->bpl_model->get_result('specialties',array('status'=>1));
        $data['doctors']   = $this->bpl_model->get_result('doctors',array('status'=>1));

		$data['template']='backend/bpl/edit';
		$this->load->view('templates/backend/layout',$data);	
	}

	public function check_bed_no($bed)
    {
        if($bed!=''){
        	$bed_info = $this->bpl_model->get_result('bpl_registration',array('bed_no'=>$bed,'admit_status'=>1));
        	if(!empty($bed_info)){
	          	$this->form_validation->set_message('check_bed_no','This Bed No. is already occupied');
		        return FALSE;  
        	}else{
        	   return TRUE;
        	}
        }else{	
	        $this->form_validation->set_message('check_bed_no','Please enter numeric bed no.');
	        return FALSE;  
        }  

    }
    public function update_check_bed_no($bed,$Rid)
    {
  
        if($bed!=''){
            $bed_info = $this->bpl_model->get_result('bpl_registration',array('bed_no'=>$bed,'admit_status'=>1,'id'=>$Rid));
        	if(!empty($bed_info)){
	             return TRUE; 
        	}else{
        		$next_bed_info = $this->bpl_model->get_result('bpl_registration',array('bed_no'=>$bed,'admit_status'=>1));
        		if(!empty($next_bed_info)){
		          	$this->form_validation->set_message('check_bed_no','This Bed No. is already occupied');
			        return FALSE;  
	        	}else{
	        		return TRUE;
        		}
        	}
        }else{	
	        $this->form_validation->set_message('check_bed_no','Please enter numeric bed no.');
	        return FALSE;  
        }  

    }

}	