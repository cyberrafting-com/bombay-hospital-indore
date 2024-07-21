<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Hospitals_model extends CI_Model
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


        if($this->common_model->update($table_name,$data,array('id'=>$id))){

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

    public function login($data='',$user_type=FALSE){       

        $query = $this->db->get_where('users',$data);

        if($query->num_rows()==1 &&  $user_type=='hospital'){

            $user_data = array(

                                'id'            => $query->row()->id,

                                'user_role'     => $query->row()->user_role,

                                'first_name'    => $query->row()->first_name,

                                'last_name'     => $query->row()->last_name,

                                'email'         => $query->row()->email,

                                'last_ip'       => $query->row()->last_ip,

                                'last_login'    => $query->row()->last_login,

                                'logged_in'     => TRUE);

          
                $this->session->set_userdata('user_info',$user_data);


                $this->update('users',array('last_ip' => $this->input->ip_address(),

                    'last_login' => date('Y-m-d h:i:s')),array('id'=>$query->row()->id));

        
            return TRUE;

        }else{

            $this->session->set_flashdata('msg_error','Incorrect Email or Password.');

            return FALSE;

        }

    }

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

    public function password_check($data='',$user_id=''){  

        $query = $this->db->get_where('users',$data,array('id'=>$user_id));

        if($query->num_rows()>0)

            return TRUE;

        else{

            //$this->form_validation->set_message('password_check', 'The %s field can not match');

            return FALSE;

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







    public function hosts($offset = '', $per_page = '')



    {



        $this->db->select('host.*,users.email,users.status,club.club');



        $this->db->from('users');



        $this->db->join('host', 'host.host_id=users.id');



        $this->db->join('club', 'club.id=host.club_id');







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







    public function blogs($offset = '', $per_page = '')



    {



        if ($offset >= 0 && $per_page > 0) {



            $this->db->order_by('id', 'desc');



            $this->db->limit($per_page, $offset);



            $query = $this->db->get('blogs');



            if ($query->num_rows() > 0) return $query->result();



            else return FALSE;



        }else {



            $query = $this->db->get('blogs');



            return $query->num_rows();



        }



    }







    /* public function blogs_feature_image_delete($news_id='',$userfile)



      {



      if(file_exists('./assets/uploads/blog/'.$userfile) && file_exists('./assets/uploads/blog/thumbnail/'.$userfile)){



      if(!empty($userfile)){



      $directory ='./assets/uploads/blog/';



      $thumb_directory ='./assets/uploads/blog/thumbnail/';



      $this->db->update('blog',array('blog_image' => ''),array('id' =>$news_id));



      if (@unlink($directory.$userfile) && @unlink($thumb_directory.$userfile)){



      return TRUE;



      } else {



      return FALSE;



      }



      }



      }else{



      return FALSE;



      }



      } */







    public function statistics_users($user_role = '', $status = '')



    {







        $query1 = $this->db->query('SELECT count(*) as total_rows FROM users WHERE user_role=' . $user_role . ' AND status=' . $status);



        return $query1->row();



    }







    public function statistics_events($status = '')



    {







        $query1 = $this->db->query('SELECT count(*) as total_rows FROM events WHERE status=' . $status);



        return $query1->row();



    }







    public function statistics_profit($status = '')



    {







        $query1 = $this->db->query('SELECT sum(total_amount) as total_rows FROM orders WHERE order_status=' . $status);



        return $query1->row();



    }







    public function club_info($club_id = '')



    {







        $this->db->select('club.*,users.email,users.status');



        $this->db->from('users');



        $this->db->join('club', 'club.user_id=users.id');



        $this->db->where('club.id', $club_id);







        $query = $this->db->get();



        if ($query->num_rows() > 0) return $query->row();



        else return FALSE;



    }







    public function faqs($offset = '', $per_page = '')

    {



        $this->db->from('faqs');



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







    public function item_types($offset = '', $per_page = '')



    {



        $this->db->from('item_types');



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







    public function tags($offset = '', $per_page = '')



    {



        $this->db->from('tags');



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















    public function get_product_tag($product_id = '')



    {



        $this->db->where('type', 'product');



        $this->db->where('key', $product_id);



        $this->db->from('tags_association');



        $query = $this->db->get();



        if ($query->num_rows() > 0) return $query->result();



        else return FALSE;



    }



    public function get_blog_tag($blog_id='')



    {



        $this->db->where('type', 'blog');



        $this->db->where('key', $blog_id);



        $this->db->from('tags_association');



        $query = $this->db->get();



        if ($query->num_rows() > 0) return $query->result();



        else return FALSE;



    }







}



