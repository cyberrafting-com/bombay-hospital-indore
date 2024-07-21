<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 *
 *
 * 	clear cache
 *
 */

if(!function_exists('clear_cache')){
    function clear_cache()
    {
        $CI = & get_instance();
        $CI->output->set_header('Expires: Wed, 11 Jan 1984 05:00:00 GMT');
        $CI->output->set_header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT');
        $CI->output->set_header("Cache-Control: no-cache, no-store, must-revalidate");
        $CI->output->set_header("Pragma: no-cache");
    }
}

/**
 *
 *  check superadmin logged in
 *
 */

if (!function_exists('superadmin_logged_in')) {

    function superadmin_logged_in()
    {
        $CI = & get_instance();
        $superadmin_info = $CI->session->userdata('superadmin_info');
        if ($superadmin_info['logged_in'] === TRUE && $superadmin_info['user_role'] == 0) return TRUE;
        else return FALSE;
    }
}

/**
 *
 * 	check user logged in
 *
 */

if (!function_exists('user_logged_in')) {

    function user_logged_in()
    {
        $CI = & get_instance();
        $superadmin_info = $CI->session->userdata('user_info');
        if($superadmin_info['logged_in'] === TRUE && $superadmin_info['user_role'] == 1) return TRUE;
        else return FALSE;
    }

}
/**
 *
 * 	get superadmin id
 * 
 */

if (!function_exists('superadmin_id')) {

    function superadmin_id()
    {

        $CI = & get_instance();

        $superadmin_info = $CI->session->userdata('superadmin_info');

        return $superadmin_info['id'];

    }
}


/**
 *  check user role
 *
 */

if (!function_exists('user_role')) {
    function user_role()
    {
        $CI = & get_instance();

        $user_info = $CI->session->userdata('user_info');

        if($user_info['logged_in'] === TRUE && $user_info['user_role'] == 2){

            return $user_info['user_role'];

        } else { 

            return FALSE; 

        }

    }

}

/**
 *
 *  check trainer logged in
 *
 */

if (!function_exists('user_id')) {

    function user_id()
    {
        $CI = & get_instance();
        $user_info = $CI->session->userdata('user_info');
        if($user_info['logged_in'] === TRUE && $user_info['user_role'] == 1){
            return $user_info['id'];
        } else { 
            return FALSE; 
        }
    }
}


/**
 *
 * 	superadmin login information
 *
 */

if (!function_exists('superadmin_name')) {

    function superadmin_name()
    {

        $CI = & get_instance();

        $superadmin_info = $CI->session->userdata('superadmin_info');

        if ($superadmin_info['logged_in'] === TRUE) return $superadmin_info['first_name']." ".$superadmin_info['last_name'];

        else return FALSE;

    }

}

/**
 *
 * 	backend pagination
 *
 */

if (!function_exists('backend_pagination')) {


    function backend_pagination()
    {
        $data = array();

        $data['full_tag_open'] = '<ul class="pagination">';

        $data['full_tag_close'] = '</ul>';

        $data['first_tag_open'] = '<li>';

        $data['first_tag_close'] = '</li>';

        $data['num_tag_open'] = '<li>';

        $data['num_tag_close'] = '</li>';

        $data['last_tag_open'] = '<li>';

        $data['last_tag_close'] = '</li>';
 
        $data['next_tag_open'] = '<li>';

        $data['next_tag_close'] = '</li>';

        $data['prev_tag_open'] = '<li>';

        $data['prev_tag_close'] = '</li>';

        $data['cur_tag_open'] = '<li class="active"><a href="#">';

        $data['cur_tag_close'] = '</a></li>';

        return $data;

    }


}



/**
 *
 *  frontend pagination
 *
 */


if (!function_exists('frontend_pagination')) {

    function frontend_pagination()
    {

        $data = array();

        $data['full_tag_open'] = '<ul class="pagination pull-right">';

        $data['full_tag_close'] = '</ul>';

        $data['first_tag_open'] = '<li>';

        $data['first_tag_close'] = '</li>';

        $data['num_tag_open'] = '<li>';

        $data['num_tag_close'] = '</li>';

        $data['last_tag_open'] = '<li>';

        $data['last_tag_close'] = '</li>';

        $data['next_tag_open'] = '<li>';

        $data['next_tag_close'] = '</li>';

        $data['prev_tag_open'] = '<li>';

        $data['prev_tag_close'] = '</li>';

        $data['cur_tag_open'] = '<li class="active"><a href="#">';

        $data['cur_tag_close'] = '</a></li>';

        return $data;

    }

}


/**
 *
 * 	thisis  back end helper
 *
 */

if (!function_exists('msg_alert')) {

    function msg_alert_backend()
    {

        $CI = & get_instance();

        ?>


        <?php if ($CI->session->flashdata('msg_success')): ?>

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">&times;</button>

                <!-- <strong>Success :</strong> <br> --> <?php echo $CI->session->flashdata('msg_success'); ?>

            </div>

        <?php endif; ?>

        <?php if ($CI->session->flashdata('msg_info')): ?>


            <div class="alert alert-info">

                <button type="button" class="close" data-dismiss="alert">&times;</button>

                <!-- <strong>Info :</strong> <br> --> <?php echo $CI->session->flashdata('msg_info'); ?>

            </div>


        <?php endif; ?>


        <?php if ($CI->session->flashdata('msg_warning')): ?>

            <div class="alert alert-warning">

                <button type="button" class="close" data-dismiss="alert">&times;</button>

                <!--  <strong>Warning :</strong> <br> --> <?php echo $CI->session->flashdata('msg_warning'); ?>

            </div>

        <?php endif; ?>

        <?php if ($CI->session->flashdata('msg_error')): ?>

            <div class="alert alert-danger">

                <button type="button" class="close" data-dismiss="alert">&times;</button>

                <!-- <strong>Error :</strong> <br> --> <?php echo $CI->session->flashdata('msg_error'); ?>

            </div>

        <?php endif; ?>

        <?php

    }

}


/**
 *
 * 	thisis  back end helper
 *
 */


if (!function_exists('msg_alert_frontend')) {

    function msg_alert_frontend()
    {

        $CI = & get_instance();

 ?>

        <?php if ($CI->session->flashdata('msg_success')): ?>

            <div class="alert alert-success">

                <!--  <button type="button" class="close" data-dismiss="alert">&times;</button> -->

                 <!-- <strong>Success :</strong> <br> --> <?php echo $CI->session->flashdata('msg_success'); ?>

            </div>

        <?php endif; ?>

        <?php if ($CI->session->flashdata('msg_info')): ?>

            <div class="alert alert-info">

                <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->

                <!-- <strong>Info :</strong> <br> --> <?php echo $CI->session->flashdata('msg_info'); ?>

            </div>

        <?php endif; ?>

        <?php if ($CI->session->flashdata('msg_warning')): ?>

            <div class="alert alert-warning">

                <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->

                <!--  <strong>Warning :</strong> <br> --> <?php echo $CI->session->flashdata('msg_warning'); ?>

            </div>

        <?php endif; ?>

        <?php if ($CI->session->flashdata('msg_error')): ?>

            <div class="alert alert-danger">

                <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->

                <!-- <strong>Error :</strong> <br> --> <?php echo $CI->session->flashdata('msg_error'); ?>

            </div>

        <?php endif; ?>

        <?php

    }

}


/**
 *
 * 	Menu Information
 *
 */


if (!function_exists('upload_file')) {

    function upload_file($param = null) {

        $CI = & get_instance();

        $config['upload_path'] = './assets/uploads/';

        $config['allowed_types'] = 'gif|jpg|png|xls|xlsx|csv|jpeg|pdf|doc|docx';

        $config['max_size'] = 1024 * 90;

        $config['image_resize'] = TRUE;

        $config['resize_width'] = 200;

        $config['resize_height'] = 200;

        if ($param) {

            $config = $param + $config;

        }

        $CI->load->library('upload');

        $CI->upload->initialize($config);

        if (!empty($config['file_name'])) $file_Status = $CI->upload->do_upload($config['file_name']);

        else $file_Status = $CI->upload->do_upload();

        if (!$file_Status) {

            return array('STATUS' => FALSE, 'FILE_ERROR' => $CI->upload->display_errors());

        } else {

            $uplaod_data = $CI->upload->data();

            // if(empty($param['resize_width'])&&empty($param['resize_height'])){

            //      // $original_height = $uplaod_data['image_height']; 

            //      // $original_width =  $uplaod_data['image_width']; 

            //         $config['resize_width']=175; 

            //         $config['resize_height']=150;

            //  } 

            $upload_file = explode('.', $uplaod_data['file_name']);

            if ($config['image_resize'] && in_array($upload_file[1], array('gif', 'jpeg', 'jpg', 'png', 'bmp', 'jpe'))) {



                $param2 = array(



                    'source_image' => $config['source_image'] . $uplaod_data['file_name'],



                    'new_image' => $config['new_image'] . $uplaod_data['file_name'],



                    'create_thumb' => FALSE,



                    'maintain_ratio' => TRUE,



                    'width' => $config['resize_width'],



                    'height' => $config['resize_height'],



                );

                image_resize($param2);

            }



            if (empty($config['image_resize']) && in_array($upload_file[1], array('gif', 'jpeg', 'jpg', 'png', 'bmp', 'jpe'))) {



                $param3 = array(

                    'file_name' => $uplaod_data['file_name'],



                    'source_image' => $config['source_image'] . $uplaod_data['file_name'],



                    'new_image' => $config['new_image'] . $uplaod_data['file_name'],

                    'maintain_ratio' => 0,

                    'width' => $config['resize_width'],



                    'height' => $config['resize_height'],

                );

               create_frontend_thumbnail($param3);
            }

            return array('STATUS' => TRUE, 'UPLOAD_DATA' => $uplaod_data);
        }
    }

    }


    function create_frontend_thumbnail($config_img = '')
    {

        $CI = & get_instance();

        $config_image['image_library'] = 'gd2';

        $config_image['source_image'] = $config_img['source_image'];

        $config_image['file_name'] = $config_img['file_name'];

        $config_image['new_image'] = $config_img['new_image'];

        $config_image['height'] = $config_img['height'];

        $config_image['width'] = $config_img['width'];

        list($width, $height, $type, $attr) = getimagesize($config_image['source_image']);


        if ($width < $height) {

            $cal = $width / $height;

            $config_image['width'] = $config_img['width'] * $cal;
        }

        if ($height < $width) {

            $cal = $height / $width;
            $config_image['height'] = $config_img['height'] * $cal;

        }

        $CI->load->library('image_lib');

        $CI->image_lib->initialize($config_image);

        if (!$CI->image_lib->resize()) return array('status' => FALSE, 'error_msg' => $CI->image_lib->display_errors());

        else return array('status' => TRUE, 'file_name' => $config_image['file_name']);

    }


/**
 *
 *  thumbnail image
 *
 */



if (!function_exists('create_thumbnail')) {

    function create_thumbnail($config_img = '')

    {

        $CI = & get_instance();

        $config_image['image_library'] = 'gd2';

        $config_image['source_image'] = $config_img['source_path'] . $config_img['file_name'];

        $config_image['encrypt_name'] = TRUE;

        $config_image['new_image'] = $config_img['destination_path'] . $config_img['file_name'];

        $config_image['maintain_ratio'] = FALSE;

        $config_image['height'] = $config_img['height'];

        $config_image['width'] = $config_img['width'];

        if (!empty($config_image['image_resize'])) {

            list($width, $height, $type, $attr) = getimagesize($config_img['source_path'] . $config_img['file_name']);

            if ($width < $height) {
                $cal = $width / $height;
                $config_image['width'] = $config_img['width'] * $cal;
            }

            if ($height < $width) {
                $cal = $height / $width;
                $config_image['height'] = $config_img['height'] * $cal;
            }

        }

        $CI->load->library('image_lib');
        $CI->image_lib->initialize($config_image);
        if (!$CI->image_lib->resize()) return array('status' => FALSE, 'error_msg' => $CI->image_lib->display_errors());
        else return array('status' => TRUE, 'file_name' => $config_img['file_name']);

    }

}

/**

 *

 * 	image resize

 *

 */



if (!function_exists('image_resize')) {

    function image_resize($param = null)
    {

        $CI = & get_instance();
        $CI->load->library('image_lib');
        $CI->image_lib->clear();
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/uploads/';
        $config['new_image'] = './assets/uploads/';
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 150;
        $config['height'] = 150;

        if($param){

            $config = $param + $config;      

        }

        $CI->image_lib->initialize($config);

        if (!$CI->image_lib->resize()) {

            //return array('STATUS'=>TRUE,'MESSAGE'=>$CI->image_lib->display_errors());

            die($CI->image_lib->display_errors());


        } else {          

            return array('STATUS' => TRUE, 'MESSAGE' => 'Image resized.');


        }


    }


}


/**
 *
 * 	image delete
 *
 */

if (!function_exists('file_delete')) {
    function file_delete($param = null)
    {
        $config['file_path'] = './assets/uploads/';
        $config['file_thumb_path'] = './assets/uploads/';
        if($param){
            $config = $param + $config;
        }      
        if (file_exists($config['file_path'])) {
            @unlink($config['file_path']);
        }
        if (file_exists($config['file_thumb_path'])) {
            @unlink($config['file_thumb_path']);
        }
    }
}

/**
 *
 *  Menu Information
 *
 */

if(!function_exists('get_nav_menu')) {
    function get_nav_menu($slug = '', $is_location = FALSE)
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if ($menu = $CI->common_model->get_nav_menu($slug, $is_location)) return $menu;
        else return FALSE;
    }
}


if(!function_exists('get_admmitted_patient')) {
    function get_admmitted_patient()
    {
        $CI = & get_instance();

        $CI->db->where('admit_status',1);

        $CI->db->from('bpl_registration');

        $query = $CI->db->get();  

        if ($query->num_rows()>0) 

            return $query->num_rows();

        else

            return 0;


    }
}

if(!function_exists('get_refferal_admmitted_patient')) {
    function get_refferal_admmitted_patient()
    {
        $CI = & get_instance();

        $CI->db->where('admit_status',1);

        $CI->db->where('hospital_id',user_id());

        $CI->db->from('bpl_registration');

        $query = $CI->db->get();  

        if ($query->num_rows()>0) 

            return $query->num_rows();

        else

            return 0;


    }
}



if(!function_exists('get_specilty_bed_update')) {

    function get_specilty_bed_update($specialty_id='')
    {
        $CI = & get_instance();

        $CI->db->where_in('admit_status',array(0,1));
        
        $CI->db->where('specialty_id',$specialty_id);

        $CI->db->from('bpl_registration');

        $query = $CI->db->get();  

        if($query->num_rows()>0){ 

            $arrayName = array('num_rows'=>$query->num_rows(),'total'=>$query->result());

            return $arrayName;

        }else{

            $arrayName = array('num_rows'=>0,'total'=>'');

            return $arrayName;
            
        }    
    }
}


if(!function_exists('get_total_specialty')){

    function get_total_specialty()
    {
        $CI = & get_instance();

        $CI->db->where('status',1);

        $CI->db->from('specialties');

        $query = $CI->db->get();  

        if ($query->num_rows()>0) 

            return $query->num_rows();

        else

            return 0;
    }
}

if(!function_exists('get_total_hospital')) {
    function get_total_hospital()
    {
        $CI = & get_instance();

        $CI->db->where('user_role',1);

        $CI->db->from('users');

        $query = $CI->db->get();  

        if ($query->num_rows()>0) 

            return $query->num_rows();

        else

            return 0;


    }
}

if(!function_exists('get_waiting_patient')) {
    function get_waiting_patient()
    {
        $CI = & get_instance();

        $CI->db->where('admit_status',0);

        $CI->db->from('bpl_registration');


        $query = $CI->db->get();  

        if ($query->num_rows()>0) 

            return $query->num_rows();

        else

            return 0;

    }
}




if(!function_exists('get_hospital_members')) {

    function get_hospital_members($key = FALSE) {

        $CI = & get_instance();

        $CI->load->model('common_model');
        
        if($members = $CI->common_model->get_result('members',array('hospital_id'=>user_id()))){ 
        
            return $name = $members;
        
        } else { 
        
            return FALSE; 
        
        }

    }



}

/**
 *
 *  User information 
 *
 */

if(!function_exists('get_user_info')){
    function get_user_info()
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($menu = $CI->common_model->get_row('users',array('status'=>1,'user_role'=>1,'id'=>user_id()))){ 
            return $menu;
        } else { 
            return FALSE; 
        }
    }
}



if(!function_exists('get_hospital_name')){
    function get_hospital_name($hospital_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($menu = $CI->common_model->get_row('users',array('id'=>$hospital_id ,'user_role'=>1))){ 
            return $name = $menu->hospital_name;
        } else { 
            return FALSE; 
        }
    }
}

if(!function_exists('get_specialty_info')){
    function get_specialty_info($spec_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('specialties',array('status'=>1,'id'=>$spec_id))){ 
            return $spec;
        } else { 
            return FALSE; 
        }
    }
}

if(!function_exists('get_specialty_name')){
    function get_specialty_name($spec_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('specialties',array('status'=>1,'id'=>$spec_id))){ 
            return ucfirst($spec->specialty_name);
        } else { 
            return FALSE; 
        }
    }
}

if(!function_exists('get_doctor_name')){
    function get_doctor_name($doct_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('doctors',array('status'=>1,'id'=>trim($doct_id)))){ 
            if (!empty($spec->doctor_name)) {
             
                return ucfirst($spec->doctor_name);
            }else{
                return FALSE;

            }
        } else { 
            return FALSE; 
        }
    }
}

if(!function_exists('get_men_icu_status')){
    function get_men_icu_status()
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('bpl_registration',array('admit_status'=>1,'unit_type'=>'icu','gender'=>'male'))){ 
            if(count($spec)>=6){
                return array('status'=>0,'limit'=>'over','total'=>count($spec),'unit'=>'icu');
            } else if(count($spec)>=3){
                return array('status'=>1,'limit'=>'extend','total'=>count($spec),'unit'=>'icu');
            } else {
                return array('status'=>1,'limit'=>'exit','total'=>count($spec),'unit'=>'icu');
            }

        } else { 
            return array('status'=>1,'limit'=>'exit','total'=>0,'unit'=>'icu'); 
        }
    }
}

if(!function_exists('get_women_icu_status')){
    function get_women_icu_status()
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('bpl_registration',array('admit_status'=>1,'unit_type'=>'icu','gender'=>'female'))){ 
            if(count($spec)>=6){
               return array('status'=>0,'limit'=>'over','total'=>count($spec),'unit'=>'icu');
            }else if(count($spec)>=3){
                return array('status'=>1,'limit'=>'extend','total'=>count($spec),'unit'=>'icu');
            }else{
                return array('status'=>1,'limit'=>'exit','total'=>count($spec),'unit'=>'icu');
            }

        } else { 
            return array('status'=>1,'limit'=>'exit','total'=>0,'unit'=>'icu');
        }
    }
}

if(!function_exists('get_women_ward_status')){
    function get_women_ward_status($spec_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('bpl_registration',array('specialty_id'=>$spec_id,'admit_status'=>1,'unit_type'=>'ward','gender'=>'female'))){ 

            if(count($spec)>=1){
                $women_total = $CI->common_model->get_row('bpl_registration',array('admit_status'=>1,'unit_type'=>'ward','gender'=>'female'));
                if(count($women_total)>=16){
                    return array('status'=>0,'limit'=>'over','total'=>count($women_total),'unit'=>'ward');
                }else if(count($women_total)<16){
                    return array('status'=>1,'limit'=>'extend','total'=>count($women_total),'unit'=>'ward');
                }else{
                    return array('status'=>1,'limit'=>'extend','total'=>0,'unit'=>'ward');
                }
            }else{
               return array('status'=>1,'limit'=>'exit','total'=>$spec,'unit'=>'ward');
            }
        } else { 
            return array('status'=>1,'limit'=>'exit','total'=>0,'unit'=>'ward');
        }
    }
}

if(!function_exists('get_men_ward_status')){
    function get_men_ward_status($spec_id='')
    {
        $CI = & get_instance();
        $CI->load->model('common_model');
        if($spec = $CI->common_model->get_row('bpl_registration',array('specialty_id'=>$spec_id,'admit_status'=>1,'unit_type'=>'ward','gender'=>'male'))){ 
            if(count($spec)>=1){
                $men_total = $CI->common_model->get_row('bpl_registration',array('admit_status'=>1,'unit_type'=>'ward','gender'=>'male'));
                if(count($men_total)>=16){
                    return array('status'=>0,'limit'=>'over','total'=>count($men_total),'unit'=>'ward');
                }else if(count($men_total)<16){
                    return array('status'=>1,'limit'=>'extend','total'=>count($men_total),'unit'=>'ward');
                }else{
                    return array('status'=>1,'limit'=>'extend','total'=>0,'unit'=>'ward');
                }
            }else{
               return array('status'=>1,'limit'=>'exit','total'=>$spec,'unit'=>'ward');
            }
        } else { 
            return array('status'=>1,'limit'=>'exit','total'=>0,'unit'=>'ward');
        }
    }
}


/**

*/
     // Option Values  
/**

*/



if (!function_exists('get_option_value')) {



    function get_option_value($key = FALSE) {



        $CI = & get_instance();



        if ($option = $CI->getoption->get_option_value($key)) 

            return $option;

        else

             return FALSE;



    }



}







if (!function_exists('get_country_state')) {

    function get_country_state($con_sulg=''){


        $CI = & get_instance();

        $Country = $CI->common_model->get_row('countries',array('slug'=>$con_sulg));

        if(!empty($Country)){

            $CI->db->where('con_id',$Country->id);

            $CI->db->from('states');

            $query = $CI->db->get();  

            if ($query->num_rows()>0) 

                return $query->result();

            else

                return 0;

        }else{

            return 0;

        }

    }

}








/**

*
     Superadmin Login
*

**/
function _check_superadmin_login() {
    if(superadmin_logged_in() === FALSE) redirect('superadmin/login');
}

function _check_user_login() {
    if(user_logged_in()=== FALSE) redirect('hospital/login');
}





