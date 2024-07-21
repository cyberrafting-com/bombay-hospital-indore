<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('superadmin_model');
    }
    public function index()
	{
		redirect('patient/register');
	}		

	public function register()
	{
		if($this->session->userdata('first_step')){
        	redirect('patient/second');
        }
		$this->form_validation->set_rules('bpl_card_no','BPL No.','required');
		$this->form_validation->set_rules('bpl_card_file','BPL Card File','callback_bpl_card_file_check');
		$this->form_validation->set_rules('aadhar_crad_no','Aadhar Card No','required|numeric');
		$this->form_validation->set_rules('aadhar_card_file','Aadhar Card File','callback_aadhar_card_file_check');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->form_validation->run() == TRUE){
            $first_data = array(
                                    'bpl_no'      => $this->input->post('bpl_card_no'),
                                    'aadhar_card' => $this->input->post('aadhar_crad_no'),   
                                    'created'     => date('Y-m-d h:i:s')
                               );
        	if($this->session->userdata('aadhar_card_file')){
                $aadhar_card_file = $this->session->userdata('aadhar_card_file');
                $first_data['aadhar_card_file']   = $aadhar_card_file['file'];
            }
            if($this->session->userdata('bpl_card_file')){
                $bpl_card_file = $this->session->userdata('bpl_card_file');
                $first_data['bpl_card_file']   = $bpl_card_file['file'];
            }
            if(!$this->session->userdata('first_step')){
                $this->session->set_userdata('first_step',$first_data);
                redirect('patient/second');
            }   
        }    
        $data['template'] = '';    
		$this->load->view('register',$data);
	}

	public function second()
	{
		if(!$this->session->userdata('first_step')){
        	redirect('patient/register');
        }
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('middle_name','Middle Name','trim');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim');
		$this->form_validation->set_rules('date_of_birth','Date Of Birth','trim');
		$this->form_validation->set_rules('age','Age','trim');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('occupation','Occupation','trim');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('pin','Pin','trim');
		$this->form_validation->set_rules('telephone_no','Telephone','trim');
		$this->form_validation->set_rules('mobile_no','Mobile','required');
        $this->form_validation->set_rules('annual_income','Annual Income','trim');
        $this->form_validation->set_rules('vehicle_owned','Vehicle Owned','trim');
		$this->form_validation->set_rules('case_type[]','Case Type','required');
		$this->form_validation->set_rules('specialty','Specialty','required');
		$this->form_validation->set_rules('unit_type','Unit Type','required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->form_validation->run() == TRUE){

            $first_data = array(
        						'add_by'        => 'patient',
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
        	
        	if($this->session->userdata('first_step')){
                $first_step = $this->session->userdata('first_step');
				$first_data['bpl_no']= $first_step['bpl_no'];
				$first_data['bpl_card_file']= $first_step['bpl_card_file'];
				$first_data['aadhar_card_no']= $first_step['aadhar_card'];
				$first_data['aadhar_card_file']= $first_step['aadhar_card_file'];
            }
           
            if($waiting_id=$this->superadmin_model->insert('bpl_registration', $first_data)){

            	if($this->session->userdata('aadhar_card_file')){
                    $this->session->set_userdata('aadhar_card_file',array());
                    $this->session->unset_userdata('aadhar_card_file');
                }
                if($this->session->userdata('bpl_card_file')){
                    $this->session->set_userdata('bpl_card_file',array());
                    $this->session->unset_userdata('bpl_card_file');
                }
                if($this->session->userdata('first_step')){
                    $this->session->set_userdata('first_step',array());
                    $this->session->unset_userdata('first_step');
                }
                $this->session->set_flashdata('msg_success', 'Thank you for registration. Please contact the hospital help desk no. 1800 0000 0110 to provide further detail. Your waiting no. is : '.$waiting_id." Please always mention your waiting no. in every correspondence or every conversation" );
                redirect('patient/register');
            
            } else {
            	if($this->session->userdata('aadhar_card_file')){
            		$this->session->set_userdata('aadhar_card_file',array());
                    $this->session->unset_userdata('aadhar_card_file');
                }
                if($this->session->userdata('bpl_card_file')){
                	$this->session->set_userdata('bpl_card_file',array());
                    $this->session->unset_userdata('bpl_card_file');
                }
                if($this->session->userdata('first_step')){
                	$this->session->set_userdata('first_step',array());
                    $this->session->unset_userdata('first_step');
                }
                $this->session->set_flashdata('msg_error', 'Failed Operation, Please try again.');
                 redirect('patient/register'); 
            }

        }    
        $data['specialty'] = $this->superadmin_model->get_result('specialties',array('status'=>1));
		$data['template'] = '';    
		$this->load->view('second',$data);
	}


	public function bpl_card_file_check($str)
    {
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
    }

    public function aadhar_card_file_check($str)
    {
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
    }



}