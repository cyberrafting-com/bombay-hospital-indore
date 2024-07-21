 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital extends CI_Controller {

	public  function __construct() {
  		parent::__construct();
        clear_cache();
        $this->load->model('hospitals_model');
	}

	public function index(){
       redirect('hospital/login');
    }

    public function login(){
			
        if(user_logged_in() === TRUE) redirect('referral/dashboard');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('hospital_id', 'Hospital Id', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if($this->form_validation->run() == TRUE){
            $data = array('hospital_id' => $this->input->post('hospital_id',TRUE), 'password' => sha1($this->input->post('password',TRUE)));
            if($this->hospitals_model->login($data,'hospital')){
                redirect('referral/dashboard');
            }else{
                $this->session->set_flashdata('msg_error', 'Incorrect Hospital ID or password.');
                redirect('hospital/login');
            }
        }
        $this->load->view('referral/login');
    }

    public function logout(){
        _check_user_login(); //check  login authentication
        $this->session->sess_destroy();
        redirect('hospital/login');
    }

    public function profile(){

        _check_user_login(); //check login authentication

        $this->form_validation->set_rules('first_name', 'First Name', 'required');

        $this->form_validation->set_rules('last_name', 'last Name', 'required');

        $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric');

        $this->form_validation->set_error_delimiters('<div class="error">','</div>');

        if($this->form_validation->run() == TRUE){
            $user_data = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name'  => $this->input->post('last_name'),
                                'mobile'      => $this->input->post('mobile'),
                              );
            if($this->hospitals_model->update('users',$user_data,array('id'=>user_id()))){
                $this->session->set_flashdata('msg_success', 'Profile updated successfully.');
                redirect('hospital/profile');
            } else {
                $this->session->set_flashdata('msg_error','Update failed, Please try again.');
                redirect('hospital/profile');
            }

        } else {

            $data['user'] = $this->hospitals_model->get_row('users', array('id'=>user_id()));
            $data['template'] = 'referral/profile';
            $this->load->view('templates/referral/layout', $data);

        }

    }

    public function change_password(){

        _check_user_login(); //check login authentication

        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required|callback_password_check');

        $this->form_validation->set_rules('newpassword', 'New Password', 'required|matches[confpassword]');

        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == TRUE){

            $user_data = array('password' => sha1($this->input->post('newpassword')));

            if($this->hospitals_model->update('users', $user_data, array('id' => user_id()))) {

                $this->session->set_flashdata('msg_success', 'Password updated successfully.');
                redirect('hospital/change_password');

            } else {
                $this->session->set_flashdata('msg_error', 'Update failed, Please try again.');
                redirect('hospital/change_password');
            }
        }
        $data['template'] = 'referral/change_password';
        $this->load->view('templates/referral/layout', $data);
    }

    public function password_check($oldpassword){

        $this->load->model('hospitals_model');

        if ($this->hospitals_model->password_check(array('password' => sha1($oldpassword)), user_id())) {

            return TRUE;

        } else {

            $this->form_validation->set_message('password_check', 'The %s does not match.');

            return FALSE;

        }

    }

    public function option()
    {
        _check_user_login(); //check login authentication
        $data['option'] = $this->hospitals_model->get_result('options',array('status' =>1 ));
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
                $this->hospitals_model->update('options',$post_data,$optionid);
                $i++;
            }
            $this->session->set_flashdata('msg_success','Data updated successfully.');
            redirect('superadmin/option');
        }
        $data['template'] ='referral/option';
        $this->load->view('templates/referral/layout', $data);
    }

}