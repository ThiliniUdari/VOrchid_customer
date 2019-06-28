<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_ctrl extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Customer_model');
		$this->load->helper(array('form', 'url', 'url_helper'));
		// Loading the Session Mangement Library
		$this->load->library('session');
		// Form Validation
		$this->load->library('form_validation');
			
	}
	public function index()
	{
			if($this->session->userdata('id') != null)
		{
				$data['page_title'] = 'Dashboard';
				$data['blog'] = $this -> Customer_model->getData();

				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);
	 			$this-> load->view('Templates/Dashboard_Header',$data);
				$this-> load->view('customer/index',$data);
				$this-> load->view('Templates/Dashboard_Footer');
			}
			else
			{
				redirect('login');
			}

	}
	public function viewAll($Id)
	{
	
		if($this->session->userdata('id') != null)
		{

				$data['page_title'] = 'My Account';
				$data['blog'] = $this -> Customer_model->getRowById($Id);

				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);
				
				// $this-> load->view('Templates/Header',$data);
				$this-> load->view('Templates/customer/profile_Header',$data);
				$this-> load->view('customer/profile',$data);
				// $this-> load->view('Templates/Footer');
				$this-> load->view('Templates/Dashboard_Footer');
			}
			else
			{
				redirect('login');
			}
	}

	//directs to the registration page
	public function register()
	{
			if($this->session->userdata('id') != null)
			{
				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
		 			'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);
				$data['page_title'] = 'Add New Customer';

				
				$this -> load -> helper('url'); // To Use the base_url() Function in View

				$this-> load->view('Templates/Dashboard_Header',$data);
				$this-> load->view('customer/Customer', array('error' => ' ' ));
				$this-> load->view('Templates/Dashboard_Footer');
			}
			else{
				redirect('login');
			}
	}
	
	//add new customer
	public function submit()
	{
		if($this->session->userdata('id') != null)
		{
				
				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);

				$data['page_title'] = 'Add New Customer';
				$image_path = "url";

				$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

				// Form Validation Begins From Here
				$this->form_validation->set_rules('fName', 'First Name', 'required');
				$this->form_validation->set_rules('lName', 'Last Name', 'required');
				$this->form_validation->set_rules('contactNum', 'Mobile', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				// $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required');

				if ($this->form_validation->run() == FALSE)
				{
					echo validation_errors();
					$this-> load->view('Templates/Dashboard_Header',$data);
					$this -> load -> view('customer/Customer', array('error' => ' ' ));
					$this -> load -> view('Templates/Dashboard_Footer');
				}
				else
				{
					// Image File Upload Configauration
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '4096000'; // Max image size can be uploaded is 4 MB - 4096 KB
					$config['max_width'] = '1024';
					$config['max_height'] = '768';

					// Loading the File Upload Library
					$this->load->library('upload', $config);

					// Uploading the File - do_upload()
					if (! $this->upload->do_upload('userimage'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this-> load->view('Templates/Dashboard_Header',$data);
						$this -> load -> view('customer/Customer', $error);
						$this -> load -> view('Templates/Dashboard_Footer');
					} 

					else 
					{
						$file_name = $this->upload->data('file_name');
						$image_path = 'uploads/'.$file_name;
					}
					// $result = 
					$this -> Customer_model ->submit($image_path);
					
					redirect('Customer_ctrl/index');
			}
		}
	}
	//directs to the update page
	public function update($Id = null)
	{
			if($this->session->userdata('id') != null){

				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
		 			'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);

				$data['page_title'] = 'Edit Profile';

				$this -> load -> helper('url'); // To Use the base_url() Function in View
				$data['blog'] = $this -> Customer_model-> getRowById($Id);

				$this-> load->view('Templates/customer/profile_Header',$data);
				$this -> load -> view('customer/update', $data);
				$this -> load -> view('Templates/Dashboard_Footer');
			}
			else{
				
				redirect('login');
			}
	}

	//edit customer details
	public function edit($Id)
	{
		if($this->session->userdata('id') != null){
				$data['page_title'] = 'Edit Profile';
				$image_path = "url";

				if ($Id != null) {

					// Image File Upload Configauration
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '4096000'; // Max image size can be uploaded is 4 MB - 4096 KB
					$config['max_width'] = '1024';
					$config['max_height'] = '768';
		
					// Loading the File Upload Library
					$this->load->library('upload', $config);
		
					// Uploading the File - do_upload()
					if (! $this->upload->do_upload('userimage')) {
						$error = array('error' => $this->upload->display_errors());
		
						// Getting the Data From the Session
						$data['currUser'] = array(
							'id' => $this->session->userdata('id'),
							'firstname' => $this->session->userdata('firstname'),
							'lastname' => $this->session->userdata('lastname'),
							'role' => $this->session->userdata('role'),
							'email' => $this->session->userdata('email'),
							'imgurl' =>$this->session->userdata('imgurl')
						);    
						$this-> load->view('Templates/customer/profile_Header',$data);
						$this -> load -> view('customer/Customer', $error);
						$this -> load -> view('Templates/Dashboard_Footer');
					} else {
						$file_name = $this->upload->data('file_name');
						$image_path = 'uploads/' . $file_name;
					}
					
					$this -> Customer_model ->update($Id, $image_path);
					redirect('Customer_ctrl/view/'.$Id);
				}
		}
		else{
			
			redirect('login');
		}
     
		redirect(base_url('index.php/Customer_ctrl/index'));
	}

	//delete customer
	public function delete($Id)
	{
		$this->load->model('Customer_model');
		$result = $this -> Customer_model ->delete($Id);
		if($result){
			$this->session->set_flashdata('success_msg' , 'Record deleted successfully');
		}
		else{
			$this->session->set_flashdata('error_msg' , 'Failed to delete record');
		}

		redirect(base_url('index.php/Customer_ctrl/index'));
	}
	
	public function view($Id=null)
	{	
		// view the customer details
		if($this->session->userdata('id') != null){

				// Getting the Data From the Session
				$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);
				$data['page_title'] = 'View Profile';

				if ($Id != null) {
				$data['blog'] = $this -> Customer_model-> getRowById($Id);
				}

				$this-> load->view('Templates/customer/profile_Header',$data);
				$this -> load-> view('customer/view_customer',$data);
				$this -> load -> view('Templates/Dashboard_Footer');
				}
				else{
					
					redirect('login');
				}

		}
		public function edit_Password($Id)
		{
			$data['currUser'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')
				);

				$data['page_title'] = 'Change Password';

			$this-> load->view('Templates/Dashboard_Header',$data);
			$this-> load->view('customer/Edit_password');
			$this -> load -> view('Templates/Dashboard_Footer');

		}

}
?> 