<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Superadmin_model extends CI_Model
{

    public function insert($table_name = '', $data = '')
    {
        $query = $this->db->insert($table_name, $data);

        if ($query) return $this->db->insert_id();

        else return FALSE;

    }

    public function get_result($table_name = '', $id_array = '', $columns = array(), $order_by = array())
    {


        if (!empty($columns)):

            $all_columns = implode(",", $columns);



            $this->db->select($all_columns);



        endif;



        if (!empty($order_by)):



            $this->db->order_by($order_by[0], $order_by[1]);



        endif;







        if (!empty($id_array)):



            foreach ($id_array as $key => $value) {



                $this->db->where($key, $value);



            }



        endif;



        $query = $this->db->get($table_name);



        if ($query->num_rows() > 0) return $query->result();



        else return FALSE;



    }







    public function get_row($table_name = '', $id_array = '', $columns = array())



    {



        if (!empty($columns)):



            $all_columns = implode(",", $columns);



            $this->db->select($all_columns);



        endif;



        if (!empty($id_array)):



            foreach ($id_array as $key => $value) {



                $this->db->where($key, $value);



            }



        endif;



        $query = $this->db->get($table_name);



        if ($query->num_rows() > 0) return $query->row();



        else return FALSE;



    }







    public function update($table_name = '', $data = '', $id_array = '')



    {



        if (!empty($id_array)):



            foreach ($id_array as $key => $value) {



                $this->db->where($key, $value);



            }



        endif;



        return $this->db->update($table_name, $data);



    }







    public function delete($table_name = '', $id_array = '')



    {



        // foreach ($id_array as $key => $value){



        // 		$this->db->where($key, $value);



        // }



        return $this->db->delete($table_name, $id_array);



    }







    public function get_result_with_pagination($offset = '', $per_page = '', $tablename)

    {

        $this->db->from($tablename);

        if($offset >= 0 && $per_page > 0){

            $this->db->limit($per_page, $offset);

            $this->db->order_by('id', 'desc');

            $query = $this->db->get();

            if ($query->num_rows() > 0) return $query->result();

            else return FALSE;

        }else {

            return $this->db->count_all_results();

        }



    }



    public function get_result_with_pagination_msg($offset = '', $per_page = '', $tablename)

    {

        $this->db->where('parent_id', 0);

        $this->db->from($tablename);

        if ($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by('id', 'desc');

            $query = $this->db->get();

            if ($query->num_rows() > 0) return $query->result();

            else return FALSE;

        }else {

            return $this->db->count_all_results();

        }



    }





    public function changestatus($id="",$status="",$offset="",$table_name="") {

        if($status==0) $status=1;

        else $status=0;

        $data=array('status'=>$status);



        if($this->blog_model->update($table_name,$data,array('id'=>$id))){

        $this->session->set_flashdata('msg_success','Status Updated successfully.');

        redirect($_SERVER['HTTP_REFERER']);

        }else{

        $this->session->set_flashdata('msg_error','Status Updated successfully.');

        redirect($_SERVER['HTTP_REFERER']);

        }

    }



    /* Messages */

    public function messages($offset='', $per_page=''){
        $this->db->from('contact_us');      
        if($offset>=0 && $per_page>0){
            $this->db->limit($per_page,$offset);
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            if($query->num_rows()>0)
                return $query->result();
            else
                return FALSE;
        }
        else
        {
            $query = $this->db->get();
            return $query->num_rows();          
        }       
    }

 
    /*   Messages   */       



    // start here





    public function notification($offset = '', $per_page = '')

    {

        if(!empty($_GET['type'])&&$_GET['type']=='USER'){

            $this->db->where('type', $_GET['type']);

        }

        

        if(!empty($_GET['type'])&&$_GET['type']=='PROPERTY'){

            $this->db->where('type', $_GET['type']);

        }

  

        $this->db->from('notification');

        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('id','desc');



            $this->db->order_by('status','asc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }



public function notification_counter($type=''){       



        $this->db->where(array('type'=>$type,'status'=>0));

        $this->db->from('notification');

        return $this->db->count_all_results();  



    }







    public function owners($offset = '', $per_page = '')



    {



        $this->db->select('club.*,users.email');



        $this->db->from('users');



        $this->db->join('club', 'club.user_id=users.id');



        $this->db->where('user_role', 1);



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('id', 'desc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }





    public function trainers($offset = '', $per_page = '',$sort_by,$sort_order)

    {

         $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        $this->db->where('user_role',1);



        if(!empty($_GET['first_name']) && !empty($_GET['last_name'])){

          

                $this->db->like('first_name',trim($this->input->get('first_name',TRUE)));

                $this->db->like('last_name',trim($this->input->get('last_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',2);

                $this->db->not_like('user_role',3);

        }else{



            if(!empty($_GET['first_name'])){

                 $this->db->like('first_name',trim($this->input->get('first_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',2);

                $this->db->not_like('user_role',3);

            } 



            if(!empty($_GET['last_name'])){

                $this->db->like('last_name',trim($this->input->get('last_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',2);

                $this->db->not_like('user_role',3);

            }







        }
 


        //$names = array(0,2);

        // $this->db->where('user_role !=',2);



        $this->db->from('users');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by($sort_by, $sort_order);



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        } else {



            return $this->db->count_all_results();



        }



    }



    public function users($offset = '', $per_page = '',$sort_by,$sort_order)

    {

         $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



       if(!empty($_GET['first_name']) && !empty($_GET['last_name'])){

          

                $this->db->like('first_name',trim($this->input->get('first_name',TRUE)));

                $this->db->like('last_name',trim($this->input->get('last_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',1);

                $this->db->not_like('user_role',3);

        }else{



            if(!empty($_GET['first_name'])){

                $this->db->like('first_name',trim($this->input->get('first_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',1);

                $this->db->not_like('user_role',3);

            } 



            if(!empty($_GET['last_name'])){

                $this->db->like('last_name',trim($this->input->get('last_name',TRUE)));

                $this->db->not_like('user_role',0);

                $this->db->not_like('user_role',1);

                $this->db->not_like('user_role',3);

            }







        }





        $this->db->where('user_role',2);



        $this->db->from('users');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by($sort_by, $sort_order);



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    } 



    public function providers($offset = '', $per_page = '',$sort_by,$sort_order)

    {

         $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_query'])){

            if($_GET['search_query']!=''){



            $this->db->like('company_name',$this->input->get('search_query',TRUE));

                // $this->db->or_like('last_name',$this->input->get('search_query',TRUE));

                $this->db->not_like('user_role',0); 

                $this->db->not_like('user_role',1); 

                $this->db->not_like('user_role',2); 

            }

        }



        $this->db->where('user_role',3);



        $this->db->from('users');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by($sort_by, $sort_order);



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }


    public function get_all_specialty()
    {

        if(!empty($_GET['specialty'])){

            $this->db->like('specialty_name',trim($this->input->get('specialty')));

        }

        $this->db->where('status',1);

        $this->db->from('specialties');

        $this->db->order_by('id', 'desc');

        $query = $this->db->get();

        if ($query->num_rows() > 0) 
            return $query->result();
        else 
            return FALSE;

    }


    public function email_templates($offset = '', $per_page = '')
    {



        $this->db->from('email_templates');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('id', 'desc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }







   







    public function navigations($offset = '', $per_page = '')



    {



        $this->db->select('navigations.*,navigation_categories.navigation_category_name,navigation_categories.navigation_category_slug,(SELECT navigation_label FROM navigations as n WHERE n.id=navigations.navigation_parent_id) as navigation_parent_name');



        $this->db->from('navigations');



        $this->db->join('navigation_categories', 'navigation_categories.id=navigations.navigation_category_id');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('navigations.id', 'desc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }







    public function navigation_categories($offset = '', $per_page = '')



    {



        $this->db->from('navigation_categories');



        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('id', 'desc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            return $this->db->count_all_results();



        }



    }







    public function slider_images($offset = '', $per_page = '')

    {







        $this->db->from('slider_images');







        if ($offset >= 0 && $per_page > 0) {



            $this->db->limit($per_page, $offset);



            $this->db->order_by('slider_images.id', 'desc');



            $query = $this->db->get();



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            $query = $this->db->get();



            return $query->num_rows();



        }



    }







    public function checkimg($tablename = '', $id = '')



    {



        $query = $this->db->get_where($tablename, array('id' => $id));



        return $query->row();



    }







    public function login_user($data = '')



    {



        $query = $this->db->get_where('users', $data);



        if ($query->num_rows() == 1) {



            $user_data = array(



                'id' => $query->row()->id,



                'user_role' => $query->row()->user_role,



                'first_name' => $query->row()->first_name,



                'last_name' => $query->row()->last_name,



                'email' => $query->row()->email,



                'last_ip' => $query->row()->last_ip,



                'last_login' => $query->row()->last_login,



                'logged_in' => TRUE);







            $this->session->set_userdata('admin_info', $user_data);



            $this->update('users', array('last_ip' => $this->input->ip_address(),



                'last_login' => date('Y-m-d h:i:s')), array('id' => $query->row()->id));







            return TRUE;



        }



    }







    //---------------------------------------NEWs------------------------------------------------------------//



    public function news_categories($offset = '', $per_page = '')
    {


        if ($offset >= 0 && $per_page > 0) {



            $this->db->order_by('id', 'desc');



            $this->db->limit($per_page, $offset);



            $query = $this->db->get('news_categories');



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            $query = $this->db->get('news_categories');



            return $query->num_rows();



        }



    }


 

    // public function club_info($club_id = '')
    // {

    //     $this->db->select('club.*,users.email,users.status');

    //     $this->db->from('users');

    //     $this->db->join('club', 'club.user_id=users.id');

    //     $this->db->where('club.id', $club_id);

    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) return $query->row();

    //     else return FALSE;

    // }


    public function registrations($offset = '', $per_page = '')
    {

        if(isset($_GET['first_name']) && $_GET['first_name']!=''){

            $this->db->like('first_name',trim($_GET['first_name']));
         
        }
        if(isset($_GET['last_name']) && $_GET['last_name']!=''){

            $this->db->like('last_name',trim($_GET['last_name']));
         
        }
        if(isset($_GET['mobile']) && $_GET['mobile']!=''){

            $this->db->like('mobile',trim($_GET['mobile']));
         
        } 

        if(isset($_GET['bpl_card_no']) && $_GET['bpl_card_no']!=''){

            $this->db->like('bpl_no',trim($_GET['bpl_card_no']));
         
        }

        if(isset($_GET['date_range']) && $_GET['date_range']!=''){

            $date_range = explode('-',$_GET['date_range']);
            $from_date  = date('Y-m-d',strtotime($date_range[0])); 
            $to_date    = date('Y-m-d',strtotime($date_range[1])); 
            $this->db->where('discharge_date >=',$from_date);
            $this->db->where('discharge_date <=',$to_date);

        }
        
        $this->db->where('admit_status',2);

        $this->db->from('bpl_registration');

        if ($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by('id', 'desc');

            $query = $this->db->get();

            if ($query->num_rows() > 0) 
                return $query->result();
            else 
                return FALSE;

        }else {

            return $this->db->count_all_results();

        }

    } 

    public function report_registrations()
    {

        if(isset($_GET['first_name']) && $_GET['first_name']!=''){

            $this->db->like('first_name',trim($_GET['first_name']));
         
        }
        if(isset($_GET['last_name']) && $_GET['last_name']!=''){

            $this->db->like('last_name',trim($_GET['last_name']));
         
        }
        if(isset($_GET['mobile']) && $_GET['mobile']!=''){

            $this->db->like('mobile',trim($_GET['mobile']));
         
        } 

        if(isset($_GET['bpl_card_no']) && $_GET['bpl_card_no']!=''){

            $this->db->like('bpl_no',trim($_GET['bpl_card_no']));
         
        }

        if(isset($_GET['bpl_card_no']) && $_GET['bpl_card_no']!=''){

            $this->db->like('bpl_no',trim($_GET['bpl_card_no']));
         
        }
       
        if(isset($_GET['date_range']) && $_GET['date_range']!=''){

            $date_range = explode('-',$_GET['date_range']);
            $from_date  = date('Y-m-d',strtotime($date_range[0])); 
            $to_date    = date('Y-m-d',strtotime($date_range[1])); 
            $this->db->where('discharge_date >=',$from_date);
            $this->db->where('discharge_date <=',$to_date);

        }

        $this->db->where('admit_status',2);

        $this->db->from('bpl_registration');

        $this->db->order_by('id', 'desc');

        $query = $this->db->get();

        if ($query->num_rows() > 0) 
            return $query->result();
        else 
            return FALSE;


    }



    public function referral_registrations($offset = '', $per_page = '')
    {

        if(isset($_GET['first_name']) && $_GET['first_name']!=''){

            $this->db->like('first_name',trim($_GET['first_name']));
         
        }
        if(isset($_GET['last_name']) && $_GET['last_name']!=''){

            $this->db->like('last_name',trim($_GET['last_name']));
         
        }
        if(isset($_GET['mobile']) && $_GET['mobile']!=''){

            $this->db->like('mobile',trim($_GET['mobile']));
         
        } 

        if(isset($_GET['bpl_card_no']) && $_GET['bpl_card_no']!=''){

            $this->db->like('bpl_no',trim($_GET['bpl_card_no']));
         
        }

        if(isset($_GET['date_range']) && $_GET['date_range']!=''){
            $date_range = explode('-',$_GET['date_range']);

            $from_date  = date('Y-m-d',strtotime($date_range[0])); 
            
            $to_date    = date('Y-m-d',strtotime($date_range[1])); 
            
            $this->db->where('discharge_date >=',$from_date);
            $this->db->where('discharge_date <=',$to_date);
        }
        
        $this->db->where('hospital_id',user_id());
        
        $this->db->where('admit_status',2);

        $this->db->from('bpl_registration');

        if ($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by('id', 'desc');

            $query = $this->db->get();

            if ($query->num_rows() > 0) 
                return $query->result();
            else 
                return FALSE;

        }else {

            return $this->db->count_all_results();

        }

    } 

    public function referral_registrations_exports()
    {
        if(isset($_GET['first_name']) && $_GET['first_name']!=''){
            $this->db->like('first_name',trim($_GET['first_name']));
        }
        if(isset($_GET['last_name']) && $_GET['last_name']!=''){
            $this->db->like('last_name',trim($_GET['last_name']));
        }
        if(isset($_GET['mobile']) && $_GET['mobile']!=''){
            $this->db->like('mobile',trim($_GET['mobile']));
        } 
        if(isset($_GET['bpl_card_no']) && $_GET['bpl_card_no']!=''){
            $this->db->like('bpl_no',trim($_GET['bpl_card_no']));
        }
        if(isset($_GET['date_range']) && $_GET['date_range']!=''){
            $date_range = explode('-',$_GET['date_range']);
            $from_date  = date('Y-m-d',strtotime($date_range[0]));
            $to_date    = date('Y-m-d',strtotime($date_range[1])); 
            $this->db->where('discharge_date >=',$from_date);
            $this->db->where('discharge_date <=',$to_date);
        }
        $this->db->where('hospital_id',user_id());
        $this->db->where('admit_status',2);
        $this->db->from('bpl_registration');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
            return $query->result();
        else 
            return FALSE;

    } 
    

}