<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Specialties extends CI_Controller   
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('special_model');
    }

    public function index($offset = 0)
    {
        $this->_check_login(); //check login authentication
        $per_page = 10;
        $data['offset'] = $offset;
        $data['specialties'] = $this->special_model->specialties($offset,$per_page);
        $config = backend_pagination();
        $config['base_url'] = base_url() . 'backend/specialties/index/';
        $config['total_rows'] = $this->special_model->specialties(0,0);
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['template'] = "backend/specialty/index";
        $this->load->view('templates/backend/layout', $data);
    }
    
    private function _check_login(){
		if(superadmin_logged_in()===FALSE) redirect('superadmin/login');
	}

    public function add()
    {
        $this->_check_login(); //check login authentication
        $this->form_validation->set_rules('specialty_name', 'Specailty Name', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if($this->form_validation->run()==TRUE){
           
            $special_data['specialty_name'] = $this->input->Post('specialty_name');
            $special_data['slug']           = url_title($this->input->post('specialty_name'),'-',TRUE);
            $special_data['status']         = $this->input->Post('status');
            $special_data['created']        = date('Y-m-d h:i:s');
            //$special_data['tags']    =   $this->input->Post('tag');
            if ($this->special_model->insert('specialties',$special_data)){
                $this->session->set_flashdata('msg_success','Specialty has added successfully.');
                redirect('backend/specialties/');
            }else{
                $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
                redirect('backend/specialties/');
            }
        }
        $data['template']='backend/specialty/add';
        $this->load->view('templates/backend/layout', $data);
    }

    public function edit($special_id = '', $offset = '')
    {
        $this->_check_login(); //check login authentication
        if (empty($special_id)) redirect('backend/specialties/index/'.$offset);
        $data['specialty'] = $this->special_model->get_row('specialties', array('id'=>$special_id));

        $this->form_validation->set_rules('specialty_name', 'Specailty Name', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->form_validation->run() == TRUE) {

            $special_data['specialty_name']  = $this->input->Post('specialty_name');
            $special_data['slug']           = url_title($this->input->post('specialty_name'),'-',TRUE);
            $special_data['status'] = $this->input->Post('status');
            $special_data['created'] = date('Y-m-d h:i:s');

            if($this->special_model->update('specialties',$special_data, array('id'=>$special_id))){
                $this->session->set_flashdata('msg_success', 'Specialty has updated successfully.');
                redirect('backend/specialties/index/' . $offset);
            }else {
                $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
                redirect('backend/specialties/index/' . $offset);
            }
        }

        $data['template'] = 'backend/specialty/edit';
        $this->load->view('templates/backend/layout', $data);
    }

    public function delete($special_id = '',$offset = '')
    {
        $this->_check_login(); //check login authentication
        if (empty($special_id)) redirect('backend/help/' . $offset);
        $data['specialty'] = $this->special_model->get_row('specialties', array('id' => $special_id));
       
        if($this->special_model->delete('specialties',array('id'=>$special_id))) {
            $this->session->set_flashdata('msg_success', 'Specialty has deleted successfully.');
             redirect('backend/specialties/index/' . $offset);
        } else {
            $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
             redirect('backend/specialties/index/' . $offset);
        }
    }

}