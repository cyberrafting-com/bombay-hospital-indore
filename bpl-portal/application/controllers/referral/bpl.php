<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');
class Bpl extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        clear_cache();
        $this->load->model('bpl_model');
    }
    
    //$offset=0;
	public function index($offset=0){
		_check_user_login(); //check login authentication
		$per_page=25;
		$data['registrations'] = $this->bpl_model->bpl_registrations($offset,$per_page);
		$data['offset'] = $offset;
 	    $config=backend_pagination();
		$config['base_url'] = base_url().'referral/bpl/index';
		$config['total_rows'] = $this->bpl_model->bpl_registrations(0,0);
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
 	    $data['template']='referral/bpl/index';
		$this->load->view('templates/referral/layout', $data);
	}

	public function add($slug=''){

		_check_user_login(); //check login authentication
		if($slug==''){ redirect('referral/bpl/index/'); }
		$data['special'] = $this->bpl_model->get_row('specialties',array('status'=>1,'slug'=>$slug));
		if($data['special']==''){ redirect('referral/bpl/index/'); }

		$data['registration'] = $this->bpl_model->get_bpl_registration_record($data['special']->id);
		if(count($data['registration'])>=2){
			$this->session->set_flashdata('msg_error','You can not reffer more then two patient to a particular specialty');
	        redirect('referral/bpl/index');
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
		$this->form_validation->set_rules('mobile_no','Mobile','required');
		$this->form_validation->set_rules('case_type[]','Case Type','required');
		$this->form_validation->set_rules('specialty','Specialty','required');
		$this->form_validation->set_rules('unit_type','Unit Type','required');
		$this->form_validation->set_rules('symptoms','Symptoms','trim');
		$this->form_validation->set_rules('annual_income','Annual Income','trim');
		$this->form_validation->set_rules('vehicle_owned','Vehicle Owned','trim');
		$this->form_validation->set_rules('referral_centre','Referral Centre','trim|required');
		$this->form_validation->set_rules('referral_name','Referral Name ','trim|required');
		$this->form_validation->set_rules('mobile_no','Referral Mobile','trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			$first_data = array(
	                                'add_by'        => 'hospital',
	                                'hospital_id'   => user_id(),
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
		                            'symptoms'      =>$this->input->post('symptoms'),
								    'examination_finding'=>$this->input->post('examination_finding'),
									'relevant_tests_investigations'=>$this->input->post('relevant_tests_investigations'),
									'past_medical_history'=>$this->input->post('past_medical_history'),
									'current_medication'=>$this->input->post('current_history'),
									'adverse_events_allergies'=>$this->input->post('adverse_events_allergies'),
									'family_history'=>$this->input->post('family_history'),
									'social_history'=>$this->input->post('social_history'),
									'name_of_referral_center'=>$this->input->post('referral_centre'),
									'reason_for_referral_comments'=>$this->input->post('referral_reason'),
									'date_of_referral'=>$this->input->post('date_of_referral'),
									'referral_name'=>$this->input->post('referral_name'),
									'referral_designation'=>$this->input->post('referral_designation'),
									'mobile_no'=>$this->input->post('mobile_no'),
		                            'status'   => 1,   
		                            'created'  => date('Y-m-d h:i:s')
                               );

        	if($this->session->userdata('aadhar_card_file')):
                $aadhar_card_file = $this->session->userdata('aadhar_card_file');
                $first_data['aadhar_card_file']   = $aadhar_card_file['file'];
            endif;
            if($this->session->userdata('bpl_card_file')):
                $bpl_card_file = $this->session->userdata('bpl_card_file');
                $first_data['bpl_card_file']   = $bpl_card_file['file'];
            endif;

			if($last_id = $this->bpl_model->insert('bpl_registration',$first_data)){
				if($this->session->userdata('aadhar_card_file')):
            		$this->session->set_userdata('aadhar_card_file',array());
                    $this->session->unset_userdata('aadhar_card_file');
                endif;
                if($this->session->userdata('bpl_card_file')):
                	$this->session->set_userdata('bpl_card_file',array());
                    $this->session->unset_userdata('bpl_card_file');
                endif;
				$this->session->set_flashdata('msg_success','New BPL patient form has added successfully. New waiting no. is :'.$last_id);
				redirect('referral/bpl/');
			}
		}

		$data['specialty'] = $this->bpl_model->get_result('specialties',array('status'=>1));
		$data['hospitals'] = $this->bpl_model->get_result('users',array('status'=>1,'user_role'=>1));


		$data['template']='referral/bpl/add';
		$this->load->view('templates/referral/layout', $data);
	}

	public function view_detail($reg_id='',$offset=0)
    {
    	_check_user_login(); //check login authentication
		if($reg_id==''){ redirect(base_url().'backend/bpl/index/'.$offset); }
	   	$data['register_data'] = $this->bpl_model->get_row('bpl_registration',array('id'=>$reg_id,'admit_status'=>1));
		if($data['register_data']==''){ redirect(base_url().'referral/bpl/index/'.$offset); }
		// print_r($data['register_data']);
		// die();
		$data['template']='referral/bpl/view_detail';
		$this->load->view('templates/referral/layout', $data);
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

    public function get_member_detail()
    {
    	if($_POST){
    		$member_id   = $_POST['member_id'];
    		$hospital_id = $_POST['hospital_id'];
    		$member = $this->bpl_model->get_row('members',array('hospital_id'=>$hospital_id,'id'=>$member_id));
    		if(!empty($member)){
    			$arr = array('designation'=>$member->designation,'mobile_no'=>$member->mobile,'status'=>1); 
    			echo json_encode($arr);
    		}else{
    			$arr = array('designation'=>'','mobile_no'=>'','status'=>0); 
    			echo json_encode($arr);
    		}

    	}
    }
    
}	