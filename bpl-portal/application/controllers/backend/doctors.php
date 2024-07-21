<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors extends CI_Controller {

    public function __construct(){
        parent::__construct();
        clear_cache();
        $this->load->model('doctor_model');
    }

    public function index($offset = 0)
    {
        _check_superadmin_login(); //check login authentication
        $per_page = 10;
        $data['doctors'] = $this->doctor_model->doctors($offset, $per_page);
        $data['offset'] = $offset;
        $config = backend_pagination();
        $config['base_url'] = base_url().'backend/doctors/index/';
        $config['total_rows'] = $this->doctor_model->doctors(0,0);
        $config['per_page'] = $per_page;
        $config['uri_segment']=4;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
    
        $data['template'] = 'backend/doctors/index';
        $this->load->view('templates/backend/layout', $data);
    }
    
    public function add()
    {
        _check_superadmin_login(); //check login authentication
        $this->form_validation->set_rules('doctor_name','Doctor Name','required');
        $this->form_validation->set_rules('specialty','Specialty','required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->form_validation->run() == TRUE){
            $doctor_data = array(
                                    'doctor_name' => $this->input->post('doctor_name'),
                                    'specialty' => $this->input->post('specialty'),
                                    'status' => $this->input->post('status'),    
                                    'created' => date('Y-m-d h:i:s')
                                );
            if($this->doctor_model->insert('doctors', $doctor_data)) {
                $this->session->set_flashdata('msg_success', 'Doctor has added successfully.');
                redirect('backend/doctors/index');
            } else {
                $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
                redirect('backend/doctors/add');
            }
        }        
        $data['specialty'] = $this->doctor_model->get_result('specialties',array('status'=>1));
        $data['template']  = 'backend/doctors/add';
        $this->load->view('templates/backend/layout', $data);
    }

    public function edit($doc_id='')
    {
         _check_superadmin_login(); //check login authentication
        if(empty($doc_id)) redirect(base_url().'backend/doctors/index');
        $data['doctor'] = $this->doctor_model->get_row('doctors', array('id' => $doc_id));
        if(empty($data['doctor'])) redirect(base_url().'backend/doctors/index');

        $this->form_validation->set_rules('specialty','Specialty','required');
        $this->form_validation->set_rules('doctor_name','Doctor Name','required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if($this->form_validation->run()==TRUE){
            $doctor_data = array(
                                    'doctor_name' => $this->input->post('doctor_name'),
                                    'specialty' => $this->input->post('specialty'),
                                    'status' => $this->input->post('status'),    
                                    'created' => date('Y-m-d h:i:s')
                                );
            if($this->doctor_model->update('doctors', $doctor_data, array('id'=>$doc_id))) {
                $this->session->set_flashdata('msg_success', 'Doctor has updated successfully.');
                redirect('backend/doctors/index');
            } else {
                $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
                redirect('backend/doctors/index');
            }
        }
        $data['specialty'] = $this->doctor_model->get_result('specialties',array('status'=>1));
        $data['template'] = 'backend/doctors/edit';
        $this->load->view('templates/backend/layout', $data);
    }

    public function delete($doc_id = '')
    {
         _check_superadmin_login(); //check login authentication
        if(empty($doc_id)) redirect(base_url().'backend/doctors/index');
        $data['doctor'] = $this->doctor_model->get_row('doctors', array('id' => $doc_id));
        if(empty($data['doctor'])) redirect(base_url().'backend/doctors/index');
        
        if($this->doctor_model->delete('doctors', array('id'=>$doc_id))) {
            $this->session->set_flashdata('msg_success', 'Doctor has deleted successfully.');
            redirect('backend/doctors/index');
        }else{
            $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
            redirect('backend/doctors/index');
        }
    }

    public function changestatus($id="",$status="",$offset="")
    {
        if(!empty($id)){
            $this->doctor_model->changestatus($id,$status,$offset,"doctors");
        }else{
            $this->session->set_flashdata('msg_error', 'Failed, Please try again.');
            redirect('backend/doctors/index');
        }
    }
}