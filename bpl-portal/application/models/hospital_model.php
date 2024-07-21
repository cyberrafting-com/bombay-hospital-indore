<?php



if (!defined('BASEPATH')) exit('No direct script access allowed');



class Hospital_model extends CI_Model

{



    public function insert($table_name = '', $data = '')

    {

        $query = $this->db->insert($table_name, $data);

        if ($query) return $this->db->insert_id();

        else return FALSE;

    }



    public function get_result($table_name = '', $id_array = '', $columns = array(),$order_by = array())

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

        if (!empty($order_by)):

            $this->db->order_by($order_by[0], $order_by[1]);

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



    public function delete($table_name = '', $id_array = ''){

        return $this->db->delete($table_name, $id_array);

    }





    public function hospitals($offset = '', $per_page = '',$sort_by,$sort_order) {



        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }



        $this->db->where('user_role',1);

        $this->db->from('users');

        if($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by($sort_by,$sort_order);

            $query = $this->db->get();

            if ($query->num_rows() > 0)

                return $query->result();

            else

                return FALSE;

        }else {

            return $this->db->count_all_results();

        }

    }

    public function add_customers(){

        // $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        // $sort_columns = array('id','status');

        // $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';

        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }

        $this->db->where('user_role',1);

        $this->db->where('group_id',0);

        $this->db->from('users');

        //$this->db->limit($per_page, $offset);

        $this->db->order_by('id','desc');

        $query = $this->db->get();

        if ($query->num_rows() > 0)

            return $query->result();

        else

            return FALSE;

     

    }


    public function hospital_members($offset = '', $per_page = '',$hospital_id='') {

        $this->db->where('hospital_id',$hospital_id);

        $this->db->from('members');

        if($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by('id','desc');

            $query = $this->db->get();

            if ($query->num_rows() > 0)

                return $query->result();

            else

                return FALSE;

        }else {

            return $this->db->count_all_results();

        }

    }


    public function get_customers_info($value='')
    {

        $this->db->select('u.*,us.id as shipping_id,us.company_name as ship_company_name,us.fax as ship_fax,us.first_name as ship_first_name,us.last_name as ship_last_name,us.email as ship_email,us.phone as ship_phone,us.zip_code as ship_zip_code,us.address as ship_address,us.city as ship_city,us.country as ship_country,us.state as ship_state,us.free_shipping as ship_free_shipping,us.tax_free as ship_tax_free,us.discount as ship_discount');

        $this->db->where('user_role',1);

        $this->db->from('users as u');

        $this->db->join('user_shipping_info as us', 'u.id = us.customer_id','left');

        $this->db->order_by('u.id', 'desc');

        $query = $this->db->get();

        if ($query->num_rows() > 0)

            return $query->result();

        else

            return FALSE;

    }



    // public function get_nutritional_plan()

    // {

    //     $this->db->select('virtual_plan.*,category_audiences.title as audience_title,category_drugs.title as drug_title,category_topics.title as topic_title');

        

    //     $this->db->from('nutritionplans as np');

    //     $this->db->join('plan_rating as pr','pr.plan_user_id=np.trainer_id','left');

    //     $this->db->where('pr.plan_type','nutrition');

    //     $this->db->order_by('np.id desc');

    //     $query = $this->db->get();

    //     return $query->result();    

    // }



    



    //  public function changestatus($id="",$status="",$offset="",$table_name="") {

    //     if($status==0) $status=1;

    //     else $status=0;

    //     $data=array('status'=>$status);



    //     if($this->faq_model->update($table_name,$data,array('id'=>$id))){

    //     $this->session->set_flashdata('msg_success','Status Updated successfully.');

    //     redirect($_SERVER['HTTP_REFERER']);

    //     }else{

    //     $this->session->set_flashdata('msg_error','Status Updated successfully.');

    //     redirect($_SERVER['HTTP_REFERER']);

    //     }

    // }





 



}