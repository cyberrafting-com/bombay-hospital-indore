<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('superadmin_model');
    }

    public function index(){

 		_check_user_login(); // Check Login Authentication
 		$data['admit_registers'] = $this->superadmin_model->get_result('bpl_registration',array('hospital_id'=>user_id(),'admit_status'=>1,'waiting_cleared'=>'yes'));
 		$data['specialty']= $this->superadmin_model->get_result('specialties',array('status'=>1));


  		$data['template'] = "referral/dashboard/index";
  		$this->load->view('templates/referral/layout', $data);
    }


    public function admitted()
    {


    	$data['admit_registers'] = $this->superadmin_model->get_result('bpl_registration',array('hospital_id'=>user_id(),'admit_status'=>1,'waiting_cleared'=>'yes'));

  		$data['template'] = "referral/dashboard/admitted";
  		$this->load->view('templates/referral/layout', $data);

    }


    public function specialties()
    {
    	_check_user_login(); // Check Login Authentication


    	
    	$data['specialty']= $this->superadmin_model->get_result('specialties',array('status'=>1));

   		$data['template']="referral/dashboard/specialty";
  		$this->load->view('templates/referral/layout', $data);
    }


}