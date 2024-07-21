<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_model extends CI_Model
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


    public function doctors($offset = '', $per_page = '') {
        $this->db->from('doctors'); 
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

     public function changestatus($id="",$status="",$offset="",$table_name="") {
        if($status==0) $status=1;
        else $status=0;
        $data=array('status'=>$status);

        if($this->update($table_name,$data,array('id'=>$id))){
        $this->session->set_flashdata('msg_success','Status Updated successfully.');
        redirect($_SERVER['HTTP_REFERER']);
        }else{
        $this->session->set_flashdata('msg_error','Status Updated successfully.');
        redirect($_SERVER['HTTP_REFERER']);
        }
    }


 

}