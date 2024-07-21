<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller{

    public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('superadmin_model');
    }

    public function index($offset=0){
 		_check_superadmin_login(); // Check Login Authentication

 		$per_page=25;
		$data['registrations'] = $this->superadmin_model->registrations($offset,$per_page);
		$data['offset'] = $offset;
 		$config=backend_pagination();
		$config['base_url'] = base_url().'backend/reports/index';
		$config['total_rows'] = $this->superadmin_model->registrations(0,0);
		$config['per_page'] = $per_page;
		$config['uri_segment']=4;
		if($_SERVER['QUERY_STRING']!=''){
        	$config['suffix'] = "?".$_SERVER['QUERY_STRING'];
        }
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
  		$data['template'] = "backend/report/index";
  		$this->load->view('templates/backend/layout', $data);
    }

    public function export($type='csv'){
            _check_superadmin_login(); //check login authentication
            // if(empty($class_id)) redirect('professor/classes');
            $registrations = $this->superadmin_model->report_registrations();    

            if($registrations==FALSE){
                $this->session->set_flashdata('msg_info',"No Registrations Available.");
                redirect('backend/reports/index');
            }
            header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=registration_list_".date('Y-m-d').".csv");
            header("Pragma: no-cache");
            header("Expires: 0");
            $file = fopen('php://output', 'w');
                    fputcsv($file, array(
                            '#',
                            'Waiting no',
                            'IPNO',
                            'Full Name',
                            'Age',
                            'City',
                            'Mobile',
                            'Address',
                            'Type',
                            'Hospital',
                            'Unit Type',
                            'Case Type',
                            'Admit date',
                            'Discharge Date',
                            'Bed No',
                            'Gender',
                            'Specialty',
                            'Doctor Name',
                            'Total Bill'
                      ));

            $p=0;foreach ($registrations as $row) { $p++;
               $type=''; $hosp='';  $spec=''; $Dname=''; $case_str ='';
            
            if($row->add_by=='hospital'){
                $type = 'hospital';
                $hosp = get_hospital_name($row->hospital_id); 
            }else if($row->add_by=='authority'){
                $type = 'authority';
                $hosp = ''; 
            }     

            if(!empty($row->case_type)){
               $case = unserialize($row->case_type);  
               if(!empty($case[0])){ $case_str  = ucfirst($case[0]); } 
               if(!empty($case[1])){ $case_str .= ucfirst($case[1]); } 
            }
            if(!empty($row->specialty_id)){
                $spec = get_specialty_name($row->specialty_id);
            }
            if(!empty($row->assign_doctor)){
                $Dname = get_doctor_name($row->assign_doctor);
            }

            $rows= array(
                            $p,
                            trim($row->id),
                            trim($row->ipno),
                            trim(strtoupper($row->first_name.' '.$row->last_name)),
                            trim($row->age),
                            trim($row->city),
                            trim($row->mobile),
                            trim($row->address),
                            trim($type),
                            trim($hosp),
                            trim($row->unit_type),
                            trim($case_str),
                            trim(date('d-m-Y',strtotime($row->admit_date))),
                            trim(date('d-m-Y',strtotime($row->discharge_date))),
                            trim($row->bed_no),
                            trim($row->gender),
                            trim($spec),
                            trim($Dname),
                            trim($row->bill_amount)
                        );    
            
            fputcsv($file, $rows);

          }
          exit();
    }



    public function view_detail($reg_id='',$offset=0)
    {
        _check_superadmin_login(); //check login authentication
        if($reg_id==''){ redirect(base_url().'backend/reports/index/'.$offset); }
        $data['register_data'] = $this->superadmin_model->get_row('bpl_registration',array('id'=>$reg_id,'admit_status'=>2));
        if($data['register_data']==''){ redirect(base_url().'backend/reports/index/'.$offset); }

        $data['specialty'] = $this->superadmin_model->get_result('specialties',array('status'=>1));
        $data['doctors']   = $this->superadmin_model->get_result('doctors',array('status'=>1));

        $data['template']='backend/report/view_detail';
        $this->load->view('templates/backend/layout', $data);
    }

}