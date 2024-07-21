<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Hospitals extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('hospital_model');
    }

	public function index($sort_by='id',$sort_order='desc',$offset=0){
		_check_superadmin_login(); //check login authentication
		$per_page=40;
		$data['hospitals'] = $this->hospital_model->hospitals($offset,$per_page,$sort_by,$sort_order);
		$data['offset'] = $offset;
 		$config=backend_pagination();
		$config['base_url'] = base_url().'backend/hospitals/index/'. $sort_by.'/'.$sort_order.'/';
		$config['total_rows'] = $this->hospital_model->hospitals(0,0,$sort_by,$sort_order);
		$config['per_page'] = $per_page;
		$config['uri_segment']=6;
		if(!empty($_SERVER['QUERY_STRING'])){
        	$config['suffix'] = "?".$_SERVER['QUERY_STRING'];
        }
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$data['sort_by']=$sort_by;
        $data['sort_order']=$sort_order;
 		$data['template']='backend/hospital/index';
		$this->load->view('templates/backend/layout', $data);
	}

	public function add(){
		_check_superadmin_login(); //check login authentication
		// $this->form_validation->set_rules('first_name','First Name','trim|required');
		// $this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('hospital_name','Hostpital Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[con_password]');
        $this->form_validation->set_rules('con_password', 'Confirm Password','required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile No','trim|required|numeric');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == TRUE){
			
		    $cust_data =  array(
									'user_role' =>1,
									'hospital_id' =>random_string('numeric',10),
									'hospital_name'=> $this->input->post('hospital_name'),
									'mobile'     => $this->input->post('mobile'),
								 	'password'  =>sha1($this->input->post('password')),
								    'address'   => $this->input->post('address'),
									'city'	    => $this->input->post('city'),
									'mobile'    => $this->input->post('mobile'),
									'status'    => $this->input->post('status'),
									'created'   => date('Y-m-d h:i:s')
							   );

			if($user_id=$this->hospital_model->insert('users',$cust_data)){
				$this->session->set_flashdata('msg_success','New hospital has been created successfully.');
				redirect('backend/hospitals/');
			}

		}
		$data['template']='backend/hospital/add';
		$this->load->view('templates/backend/layout', $data);
	}

	public function edit($cust_id=''){

		_check_superadmin_login(); //check login authentication
		if(empty($cust_id)) redirect(base_url().'backend/users');
		$data['customer'] = $this->hospital_model->get_row('users',array('id'=>$cust_id,'user_role'=>1));
		if(empty($data['customer'])) redirect('backend/users/');
		// $this->form_validation->set_rules('first_name','First Name','trim|required');
		// $this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('hospital_name','Hostpital Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		if(!empty($_POST['password'])){
			$this->form_validation->set_rules('password','Password', 'required|min_length[6]|matches[con_password]');
		    $this->form_validation->set_rules('con_password', 'Confirm Password','required');
		}
		$this->form_validation->set_rules('mobile', 'Mobile No','trim|required|numeric');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			
			$cust_data  =   array(
									// 'first_name'=> $this->input->post('first_name'),
									// 'last_name' => $this->input->post('last_name'),
									'hospital_name'=> $this->input->post('hospital_name'),
								    'address'   => $this->input->post('address'),
									'city'	    => $this->input->post('city'),
									'mobile'    => $this->input->post('mobile'),
									'status'    => $this->input->post('status'),
									'modified'  => date('Y-m-d h:i:s')
							     );

			if(!empty($_POST['password'])){
				$cust_data['password']  = sha1($this->input->post('password'));
			}

			if($this->hospital_model->update('users',$cust_data,array('id'=>$cust_id))){
				$this->session->set_flashdata('msg_success','Hospital Record has been Updated successfully.');
				redirect('backend/hospitals/');
			}

		}

		$data['template']='backend/hospital/edit';
		$this->load->view('templates/backend/layout',$data);	

	}

	public function check_email($email,$id){   
        if($_POST){ 	
            $user_info = $this->hospital_model->get_row('users', array('id'=>$id));  
            if($_POST['email']!=$user_info->email){
	            $resp = $this->hospital_model->get_row('users', array('email'=>$_POST['email']));
	            if($resp){
                  $this->form_validation->set_message('check_email', 'Email already exist.');
                  return FALSE;
                }else{
                  return TRUE;
                }
            }else{
                return TRUE;
            }
        }   
    }

	public function alpha_numeric_space($str)
	{
		if(!preg_match("/^([-a-z0-9_ ])+$/i",$str)){
			$this->form_validation->set_message('alpha_numeric_space', 'Please provide alpha numeric value in zip code.');
            return FALSE;
		} else {
			return TRUE;
		}
	}

	public function delete($hosp_id ='')	{
		_check_superadmin_login(); //check login authentication
		if(empty($hosp_id)) redirect('backend/hospitals');
		$this->hospital_model->delete('users',array('id'=>$hosp_id,'user_role'=>1));
		$this->hospital_model->delete('bpl_registration',array('hospital_id'=>$hosp_id));
		$this->hospital_model->delete('members',array('hospital_id'=>$hosp_id));
		$this->session->set_flashdata('msg_success','Hospital has been deleted successfully.');
		redirect('backend/hospitals');		
	}

    public function delete_member($hospital_id='',$member_id ='')	{
		_check_superadmin_login(); //check login authentication
		if(empty($hospital_id)) redirect('backend/hospitals');
		$data['user'] = $this->hospital_model->get_row('users',array('id'=>$hospital_id,'user_role'=>1,'status'=>1));
		if(empty($data['user'])) redirect('backend/hospitals');

		if(empty($member_id)) redirect('backend/hospitals');
		$this->hospital_model->delete('members',array('hospital_id'=>$hospital_id,'id'=>$member_id));
		// $this->hospital_model->delete('user_shipping_info',array('customer_id'=>$cust_id));
		// $this->hospital_model->delete('product_rating',array('user_id'=>$cust_id));
		// $this->hospital_model->delete('product_reviews',array('user_id'=>$cust_id));
		$this->session->set_flashdata('msg_success','Users has been deleted successfully.');
		redirect('backend/hospitals/hospital_members/'.$hospital_id);		
	}

	public function hospital_members($user_id='',$offset=0)
	{ 
		_check_superadmin_login(); //check login authentication
		if(empty($user_id)) redirect('backend/hospitals');
		$data['user'] = $this->hospital_model->get_row('users',array('id'=>$user_id,'user_role'=>1,'status'=>1));
		if(empty($data['user'])) redirect('backend/hospitals');

		$per_page=10;
		$data['members'] = $this->hospital_model->hospital_members($offset,$per_page,$user_id);

		$data['offset'] = $offset;
 		$config=backend_pagination();
		$config['base_url'] = base_url().'backend/hospitals/hospital_members/'.$user_id.'/';
		$config['total_rows'] = $this->hospital_model->hospital_members(0,0,$user_id);
		$config['per_page'] = $per_page;
		$config['uri_segment']=6;
		// if(!empty($_SERVER['QUERY_STRING'])){
		//     $config['suffix'] = "?".$_SERVER['QUERY_STRING'];
		// }
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
 		$data['template']='backend/hospital/members';
		$this->load->view('templates/backend/layout', $data);
	}


	public function add_member($user_id='')
	{
		_check_superadmin_login(); //check login authentication
		if(empty($user_id)) redirect('backend/hospitals/');
		$data['user'] = $this->hospital_model->get_row('users',array('id'=>$user_id,'user_role'=>1,'status'=>1));
		if(empty($data['user'])) redirect('backend/hospitals/');

		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('designation','Designation','trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile No','trim|required|numeric|min_length[10]');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			
			$member_data  = array(
									'hospital_id' => $data['user']->id,
									'first_name'  => $this->input->post('first_name'),
									'last_name'   => $this->input->post('last_name'),
									'designation' => $this->input->post('designation'),
									'mobile'      => $this->input->post('mobile'),
									'status'      => $this->input->post('status'),
									'created'     => date('Y-m-d h:i:s')
							    );

			if($id = $this->hospital_model->insert('members',$member_data)){
				$this->session->set_flashdata('msg_success','Hospital Member has been added successfully.');
				redirect('backend/hospitals/hospital_members/'.$data['user']->id);
			}

		}

		$data['template']='backend/hospital/add_member';
		$this->load->view('templates/backend/layout', $data);
	}

    public function edit_member($user_id='',$member_id='')
	{
		_check_superadmin_login(); //check login authentication
		if(empty($user_id) ||  empty($member_id)) redirect('backend/hospitals/');
		$data['user'] = $this->hospital_model->get_row('users',array('id'=>$user_id,'user_role'=>1,'status'=>1));
		if(empty($data['user'])) redirect('backend/hospitals/');

		$data['member'] = $this->hospital_model->get_row('members',array('hospital_id'=>$user_id,'id'=>$member_id));
		if(empty($data['member'])) redirect('backend/hospitals/');

		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('designation','Designation','trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile No','trim|required|numeric|min_length[10]');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == TRUE){
			
			$member_data  = array(
									'hospital_id' => $data['user']->id,
									'first_name'  => $this->input->post('first_name'),
									'last_name'   => $this->input->post('last_name'),
									'designation' => $this->input->post('designation'),
									'mobile'      => $this->input->post('mobile'),
									'status'      => $this->input->post('status'),
									'created'     => date('Y-m-d h:i:s')
							    );

			if($this->hospital_model->update('members',$member_data,array('hospital_id'=>$user_id,'id'=>$member_id))){
				$this->session->set_flashdata('msg_success','Hospital Member has been updated successfully.');
				redirect('backend/hospitals/hospital_members/'.$data['user']->id);
			}

		}

		$data['template']='backend/hospital/edit_member';
		$this->load->view('templates/backend/layout', $data);
	}

		
}	