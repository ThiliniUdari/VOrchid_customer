<?php

class Customer_model extends CI_Model
{
	 public function __construct(){

            parent :: __construct();
            
            $this->load->database();
            $this->load->helper('security');
        }
	
	public function getData()
	{
		$query = $this->db->get('customer');
		if ($query -> num_rows() >0) {
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function submit($image_path)
	{
		$data = array(
			'fName'=> $this->input->post('fName'),
			'lName'=> $this->input->post('lName'),
			'gender'=>$this->input->post('gender'),
			'email'=>$this->input->post('email'),
			'contactNum'=> $this->input->post('contactNum'),
			'imageurl' => $image_path,
			'status' =>1
			);
		//insert data to the database
		$this -> db-> insert('customer',$data); 
		if ($this-> db -> affected_rows() >0 ) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getRowById($Id)
	{
		$this -> db-> where('Id',$Id); 
		$query = $this -> db -> get('customer');
		if ($query -> num_rows() >0) {
			return $query-> row_array();
		}
		else
		{
			return false;
		}
	}

	public function update($Id,$image_path)
	{
		// $Id=$this-> input -> post('txt_hidden');
        if($admin_id != NULL && $image_path != 'url'){

		$field = array(
			//'Id'=> $this->input->post('Id'),
			'fName'=> $this->input->post('fName'),
			'lName'=> $this->input->post('lName'),
			'gender'=>$this->input->post('gender'),
			'email'=>$this->input->post('email'),
			'contactNum'=> $this->input->post('contactNum'),
            'imageurl' => $image_path
			//'password'=>$this->input->post('password')
			);
		
		$this -> db -> where('Id',$Id);
		$this -> db -> update('customer',$field);
		}

		 else if($Id != NULL && $image_path == 'url' ){
               $field = array(
					//'Id'=> $this->input->post('Id'),
					'fName'=> $this->input->post('fName'),
					'lName'=> $this->input->post('lName'),
					'gender'=>$this->input->post('gender'),
					'email'=>$this->input->post('email'),
					'contactNum'=> $this->input->post('contactNum'),
			        'imageurl' => $image_path
					//'password'=>$this->input->post('password')
					);
            
            $this->db->where('Id', $Id);
            $this->db->update('customer', $field);
                

            } 
		// echo $this-> db ->last_query(); extit;
		// if ($this-> db -> affected_rows() >0) {
		// 	return true;
		// }
		// else{
		// 	return false;
		// }
	
	}
	public function delete($Id)
	{
		// updates the status of the customer as '0'
		$data = array(
					'status' => 0,
				);
			
				// Perform Deletion on User Table
				$this->db->where('Id', $Id);
				$this->db->update('customer', $data);
		if ($this-> db -> affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

}

?>