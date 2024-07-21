<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	public  function __construct() {
  		parent::__construct();
        clear_cache();
        $this->load->model('superadmin_model');
	}

	public function index(){
       redirect('superadmin/login');
    }

    public function login(){
			
        if(superadmin_logged_in() === TRUE) redirect('backend/dashboard');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if($this->form_validation->run() == TRUE){
            
            $this->load->model('user_model');
            $data = array('email' => $this->input->post('email',TRUE), 'password' => sha1($this->input->post('password',TRUE)));
            if($this->user_model->login($data,'superadmin')){
                redirect('backend/dashboard');
            }else{
                $this->session->set_flashdata('msg_error', 'Incorrect email Address or password.');
                redirect('superadmin/login');
            }
        }
        $this->load->view('backend/login');
    }

    public function logout(){

        _check_superadmin_login(); //check  login authentication

        $this->session->sess_destroy();

        redirect('superadmin/login');

    }

    public function profile(){

        _check_superadmin_login(); //check login authentication

        $this->form_validation->set_rules('first_name', 'First Name', 'required');

        $this->form_validation->set_rules('last_name', 'last Name', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == TRUE) {

            $user_data = array(

                            'first_name' => $this->input->post('first_name'),

                            'last_name'  => $this->input->post('last_name'),

                            'email'      => $this->input->post('email'),

                        );


            if ($this->superadmin_model->update('users', $user_data, array('id' => superadmin_id()))) {

                $this->session->set_flashdata('msg_success', 'Profile updated successfully.');

                redirect('superadmin/profile');

            } else {

                $this->session->set_flashdata('msg_error', 'Update failed, Please try again.');

                redirect('superadmin/profile');

            }

        } else {


            $data['user'] = $this->superadmin_model->get_row('users', array('id' => superadmin_id()));

            $data['template'] = 'backend/profile';

            $this->load->view('templates/backend/layout', $data);

        }

    }



    public function change_password(){

        _check_superadmin_login(); //check login authentication

        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required|callback_password_check');

        $this->form_validation->set_rules('newpassword', 'New Password', 'required|matches[confpassword]');

        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == TRUE) {

            $user_data = array('password' => sha1($this->input->post('newpassword')));

            if ($this->superadmin_model->update('users', $user_data, array('id' => superadmin_id()))) {

                $this->session->set_flashdata('msg_success', 'Password updated successfully.');

                redirect('superadmin/change_password');

            } else {
                $this->session->set_flashdata('msg_error', 'Update failed, Please try again.');
                redirect('superadmin/change_password');
            }
        }
        $data['template'] = 'backend/change_password';
        $this->load->view('templates/backend/layout', $data);
    }



    public function password_check($oldpassword){

        $this->load->model('user_model');

        if ($this->user_model->password_check(array('password' => sha1($oldpassword)), superadmin_id())) {

            return TRUE;

        } else {

            $this->form_validation->set_message('password_check', 'The %s does not match.');

            return FALSE;

        }

    }



    public function option()
    {

       _check_superadmin_login(); //check login authentication

        // if($_POST){

        //  print_r($_POST);

        //  die();

        // }

        $data['option'] = $this->superadmin_model->get_result('options',array('status' =>1 ));

        foreach ($data['option'] as $value){

            $this->form_validation->set_rules($value->option_name,$value->option_name,'required');

        }

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == TRUE){

            $name=$this->input->post('name');   
            $i=1;
            //print_r($name);
            foreach ($_POST as $key=>$value) 
            {
                $post_data = array('option_value' => htmlentities($value));
                $optionid=array('option_name'=> $key);
                $this->superadmin_model->update('options',$post_data,$optionid);
                $i++;
            }

            $this->session->set_flashdata('msg_success','Data updated successfully.');

            redirect('superadmin/option');              

        }

        $data['template'] ='backend/option';
        $this->load->view('templates/backend/layout', $data);

    }

}