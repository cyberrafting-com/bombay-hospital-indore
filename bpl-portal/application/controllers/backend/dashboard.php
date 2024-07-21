<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('superadmin_model');
    }

    public function index(){
 		_check_superadmin_login(); // Check Login Authentication
  		$data['specialty']= $this->superadmin_model->get_result('specialties',array('status'=>1));
  		
  		$data['template'] = "backend/dashboard/index";
  		$this->load->view('templates/backend/layout', $data);
    }

    public function admitted()
    {
    	$data['admit_registers'] = $this->superadmin_model->get_result('bpl_registration',array('admit_status'=>1));
    	$data['template'] = "backend/dashboard/admitted";
  		$this->load->view('templates/backend/layout', $data);
    }

    
    public function specialties()
    {
    	$data['specialty']= $this->superadmin_model->get_all_specialty();
    	$data['template'] = "backend/dashboard/specialty";
  		$this->load->view('templates/backend/layout', $data);
    }




}