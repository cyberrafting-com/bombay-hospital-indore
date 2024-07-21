<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function insert($table_name='',  $data=''){

		$query=$this->db->insert($table_name, $data);

		if($query)

			return $this->db->insert_id();

		else

			return FALSE;		

	}

	public function get_result($table_name='', $id_array='',$columns=array()){

		if(!empty($columns)):

			$all_columns = implode(",", $columns);

			$this->db->select($all_columns);

		endif; 

		if(!empty($id_array)):		

			foreach ($id_array as $key => $value){

				$this->db->where($key, $value);

			}

		endif;		

		$query=$this->db->get($table_name);

		if($query->num_rows()>0)

			return $query->result();

		else

			return FALSE;

	}

	public function get_row($table_name='', $id_array='',$columns=array()){

		if(!empty($columns)):

			$all_columns = implode(",", $columns);

			$this->db->select($all_columns);

		endif; 

		if(!empty($id_array)):		

			foreach ($id_array as $key => $value){

				$this->db->where($key, $value);

			}

		endif;

		$query=$this->db->get($table_name);

		if($query->num_rows()>0)

			return $query->row();

		else

			return $query->num_rows();

	}

	public function update($table_name='', $data='', $id_array=''){

		if(!empty($id_array)):

			foreach ($id_array as $key => $value){

				$this->db->where($key, $value);

			}

		endif;

		return $this->db->update($table_name, $data);		

	}

	public function delete($table_name='', $id_array=''){		

	 return $this->db->delete($table_name, $id_array);

	}

	// all user login

	// public function login($data='',$user_type=FALSE){		

	// 	$query = $this->db->get_where('users',$data);

		

	// 	if($query->num_rows()==1){

	// 		$user_data = array( 'id' 			=> $query->row()->id,

	// 							'user_role' 	=> $query->row()->user_role,

	// 							'first_name' 	=> $query->row()->first_name,

	// 							'last_name'		=> $query->row()->last_name,

	// 							'email'			=> $query->row()->email,

	// 							'last_ip' 		=> $query->row()->last_ip,

	// 							'last_login' 	=> $query->row()->last_login,

	// 							'logged_in' 	=> TRUE);

	// 		if($user_type=='superadmin'){

	// 			$this->session->set_userdata('superadmin_info',$user_data);

	// 		} else {

	// 			return FALSE;

	// 			//$this->session->set_userdata('user_info',$user_data);

	// 		}

	// 			$this->update('users',array('last_ip' => $this->input->ip_address(),

	// 				'last_login' => date('Y-m-d h:i:s')),array('id'=>$query->row()->id));

		

	// 		return TRUE;

	// 	} else {

			

	// 		return FALSE;

	// 	}

	// }

	public function login($data='',$user_type=FALSE){		

		$query = $this->db->get_where('users',$data);

		if($query->num_rows()==1){

			$user_data = array(

								'id' 			=> $query->row()->id,

								'user_role' 	=> $query->row()->user_role,

								'first_name' 	=> $query->row()->first_name,

								'last_name'		=> $query->row()->last_name,

								'email'			=> $query->row()->email,

								'last_ip' 		=> $query->row()->last_ip,

								'last_login' 	=> $query->row()->last_login,

								'logged_in' 	=> TRUE);

			if($user_type)

				$this->session->set_userdata('superadmin_info',$user_data);

			else

				$this->session->set_userdata('user_info',$user_data);



				$this->update('users',array('last_ip' => $this->input->ip_address(),

					'last_login' => date('Y-m-d h:i:s')),array('id'=>$query->row()->id));

		

			return TRUE;

		}else{

			$this->session->set_flashdata('msg_error','Incorrect Email or Password.');

			return FALSE;

		}

	}



	public function for_login($data='')
    { 

        $query = $this->get_row('users',$data);
        if(empty($query)){
            return FALSE;
        }
        if(!empty($query->user_role) && $query->user_role!=0){
            $role=$query->user_role;
        }else{
            return FALSE;   
        }
        if($query->status==1):

            $user_data = array(
                    'id'            => $query->id,
                    'user_role'     => $query->user_role,
                    'first_name'    => $query->first_name,
                    'last_name'     => $query->last_name,
                    'email'         => $query->email,
                    'last_ip'       => $query->last_ip,
                    'last_login'    => $query->last_login,
                    'logged_in'     => TRUE
                );

            if($role == 1){
                $this->session->set_userdata('user_info', $user_data);
            } 

            $this->update('users', array('last_ip' => $this->input->ip_address(),

                'last_login' => date('Y-m-d h:i:s')), array('id' => $query->id));

            return TRUE;

        endif;

        return FALSE;

    }



	// public function login2($data=''){		

	// 	$query = $this->db->get_where('users',$data);

	// 	if($query->num_rows()==1){

	// 		if($query->row()->user_role==2){

	// 			$user_data =array(

	// 								'id' 		=> $query->row()->id,

	// 								'user_role' => $query->row()->user_role,

	// 								'first_name'=> $query->row()->first_name,

	// 								'last_name'	=> $query->row()->last_name,

	// 								'email'		=> $query->row()->email,

	// 								'last_ip' 	=> $query->row()->last_ip,

	// 								'last_login'=> $query->row()->last_login,

	// 								'logged_in' => TRUE

	// 						);

	// 			if($this->session->userdata('professor_info'))

	// 				$this->session->unset_userdata('professor_info');

	// 			    $this->session->set_userdata('professor_info',$user_data);

	// 			$this->update('users',array('last_ip' => $this->input->ip_address(),

	// 				'last_login' => date('Y-m-d h:i:s')),array('id'=>$query->row()->id));			

	// 			return TRUE;

	// 		}else{

	// 		}



	// 	}else{

			

	// 		return FALSE;

	// 	}

	// }

	

	public function password_check($data='',$user_id=''){  

		$query = $this->db->get_where('users',$data,array('id'=>$user_id));

 		if($query->num_rows()>0)

			return TRUE;

		else{

			//$this->form_validation->set_message('password_check', 'The %s field can not match');

			return FALSE;

		}

	}



	public function insert_array($table_name='',  $data=''){

		$query=$this->db->insert_batch($table_name, $data);

		if($query)

			return TRUE;

		else

			return FALSE;		

	}



	public function orders($limit, $offset, $user_id=""){



		$this->db->select('od.*');

		$this->db->from('orders as od');

		$this->db->where('byr.user_id', $user_id);

		$this->db->join('buyers as byr','byr.id=od.buyer_id');

		$this->db->order_by('od.created','DESC');

		if($limit > 0 && $offset>=0)

		{

			$this->db->limit($limit, $offset);

			$query=$this->db->get();			

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

	 	}

	 	else{		

			$query=$this->db->get();

			return $query->num_rows();

  		}

	}



	public function order_user_info($order_id){

		$this->db->select('orders.*, buyers.recipient_name, buyers.email, buyers.delivery_address, buyers.shipping_city2, buyers.shipping_state2, buyers.country, buyers.shipping_zip2 ');

		$this->db->from('orders');

		$this->db->join('buyers','buyers.id=orders.buyer_id');	

		$this->db->where('orders.id',$order_id);		

		$query=$this->db->get();

		if($query->num_rows()>0)

			return $query->row();

		else

			return FALSE;

	}



	public function order_info($order_id){

		// echo "here"; die();

		$this->db->select('oi.*,e.event_name,o.total_amount,o.order_status,t.event_from_time,t.event_to_time,t.event_date');

		$this->db->from('order_items as oi');

		$this->db->join('orders as o','o.id=oi.order_id');

		$this->db->join('events as e','e.id=oi.event_id');	

		$this->db->join('event_time_slots as t','oi.date_id=t.id');	


		$this->db->where('oi.order_id',$order_id);

		$query=$this->db->get();

		if($query->num_rows()>0)

			return $query->result();

		else

			return FALSE;

	}

	public function get_full_information()
	{
		$this->db->select('ur.*,uai.id as user_info_id,uai.*');
		$this->db->from('users as ur');
		$this->db->join('user_academy_information as uai ','uai.user_id = ur.id','right');
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function get_user_info($email='',$password='')
	{
     	$this->db->where('email', $email);
		$this->db->where('password',sha1($password));
		$this->db->where('status',1);
		$this->db->from('users');
		$query = $this->db->get();
		if($query->num_rows()>0) {
			return $query->row();			 
		}else{
			return $query->num_rows();
		}
	}



	public function students($offset='',$per_page='',$class_id='',$sort_by,$sort_order){

		$this->db->where('class_id',$class_id);



		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status','student_id');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



          if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            }

            // if($_GET['search_by']=='size_set'){

            //     $this->db->like('size_set', $this->input->get('search_query',TRUE));

            // }

            // if($_GET['search_by']=='price_level_1'){

            //     $this->db->like('price_level_1', $this->input->get('search_query',TRUE));

            // }

            // if($_GET['search_by']=='price_level_2'){

            //     $this->db->like('price_level_2', $this->input->get('search_query',TRUE));

            // }

          

        }



		$this->db->from('students');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by($sort_by, $sort_order);

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{
			return $this->db->count_all_results();
		}

	}



	public function delete_student($class_id='',$id_array='')

	{

		$this->db->where('class_id',$class_id);

		if(!empty($id_array)):

			$this->db->where_in('id', $id_array);

		endif;	

		$query = $this->db->delete('students');

		if($query)

			return true;

		else

			return FALSE;

	}

	

	public function delete_exams($class_id='',$id_array='')

	{

		$this->db->where('class_id',$class_id);

		if(!empty($id_array)):

			$this->db->where_in('id', $id_array);

		endif;	

		$query = $this->db->delete('examinations');

		if($query)

			return true;

		else

			return FALSE;

	}



	public function delete_event($class_id='',$id_array='')

	{

		$this->db->where('class_id',$class_id);

		if(!empty($id_array)):

			$this->db->where_in('id', $id_array);

		endif;	

		$query = $this->db->delete('events');

		if($query)

			return true;

		else

			return FALSE;

	}



	public function delete_question($exam_id='',$id_array='')

	{

		$this->db->where('exam_id',$exam_id);

		if(!empty($id_array)):

			$this->db->where_in('id', $id_array);

		endif;	

		$query = $this->db->delete('questions');

		if($query)

			return true;

		else

			return FALSE;

	}



	public function classes($offset='', $per_page=''){

		$this->db->where('professor_id',professor_id());

		$this->db->from('classes');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by('id','desc');

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}





	public function all_classes($offset='', $per_page=''){

		$this->db->where('professor_id',professor_id());

		$this->db->from('classes');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by('id','desc');

			$this->db->order_by('status','desc');

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}



	

	public function examinations($offset='', $per_page='',$class_id,$sort_by,$sort_order){

		$this->db->where('class_id',$class_id);





		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }







		$this->db->from('examinations');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by($sort_by, $sort_order);

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}

	public function questions($offset='', $per_page='',$exam_id='',$sort_by,$sort_order){

		$this->db->where('exam_id',$exam_id);



		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }



		$this->db->from('questions');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by($sort_by, $sort_order);

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}

	public function subjects($offset='',$per_page=''){

		$this->db->from('subjects');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by('id','desc');

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}


	    public function projects($offset = '', $per_page = '',$sort_by,$sort_order) {



        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }

        if(!empty($_GET['technology'])){

             $this->db->like('technology','#'.$_GET['technology'].'#');

        }  

        $this->db->where('user_id',user_id());

        $this->db->from('projects');

        if ($offset >= 0 && $per_page > 0) {

            $this->db->limit($per_page, $offset);

            $this->db->order_by($sort_by, $sort_order);

            $query = $this->db->get();

            if($query->num_rows() > 0)

                return $query->result();

            else

                return FALSE;

        }else {

            return $this->db->count_all_results();

        }

    }



	public function events($offset='',$per_page='',$class_id='',$sort_by,$sort_order){

		$this->db->where('class_id',$class_id);



		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_columns = array('id','status');

        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';



        if(!empty($_GET['search_by'])){

            if($_GET['search_by']!=''){

                $this->db->like($_GET['search_by'],$this->input->get('search_query',TRUE));

            } 

        }





		$this->db->from('events');

		if($offset>=0 && $per_page>0){

			$this->db->limit($per_page,$offset);

			$this->db->order_by($sort_by, $sort_order);

			$query = $this->db->get();

			if($query->num_rows()>0)

				return $query->result();

			else

				return FALSE;

		}else{

			return $this->db->count_all_results();



		}

	}

	

		

}