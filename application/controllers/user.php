<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()

	{

		parent::__construct();

				

		$this->load->library('form_validation');

		$this->load->helper('MY');

		$this->load->model('User_model');

	}
	public function index()
	{
		$this->load->model('User_model');
		//$data['artikel'] = $this->list_blog->get_artikels();

		$limit_per_page = 6;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records = $this->User_model->get_total();

		if  ($total_records > 0) {


			$data["artikel"] = $this->User_model->get_all_blogs($limit_per_page, $start_index);

			

			$config['base_url'] = base_url() . 'user/index';

			$config['total_rows'] = $total_records;

			$config['per_page'] = $limit_per_page;

			$config["uri_segment"] = 3;

			

			$this->pagination->initialize($config);

				

			// Buat link pagination

			$data["links"] = $this->pagination->create_links();
			
			$this->load->view('home_user', $data);
		}
	}

	public function register(){

		$data['page_title'] = 'Pendaftaran User';



		$this->form_validation->set_rules('nama', 'Nama', 'required');

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');

		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');



		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('user/register', $data);

			$this->load->view('templates/footer');

		} else {

			// Encrypt password

			$enc_password = md5($this->input->post('password'));



			$this->User_model->register($enc_password);



			// Set message

			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');



			redirect('home');

		}
	}

	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }


	// Log in user

	public function login(){

		$data['page_title'] = 'Log In';



		$this->form_validation->set_rules('username', 'Username', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required');



		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('user/login', $data);

			$this->load->view('templates/footer');

		} else {

			

	// Get username

	$username = $this->input->post('username');

	// Get & encrypt password

	$password = md5($this->input->post('password'));



	// Login user

	$user_id = $this->User_model->login($username, $password);



	if($user_id){

		// Buat session

		$user_data = array(

			'user_id' => $user_id,

			'username' => $username,

			'logged_in' => true,

			'fk_level_id' => $this->User_model->get_user_level($user_id),
		);



		$this->session->set_userdata($user_data);



		// Set message

		$this->session->set_flashdata('user_loggedin', 'Anda sudah login');



		redirect('User/dashboard');

	} else {

		// Set message

		$this->session->set_flashdata('login_failed', 'Login invalid');



		redirect('user/login');

	}
	}		
}

	public function logout(){

		// Unset user data

		$this->session->unset_userdata('logged_in');

		$this->session->unset_userdata('user_id');

		$this->session->unset_userdata('username');



		// Set message

		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');



		redirect('user/login');

	}
	function dashboard()
	{

		// Must login

		if(!$this->session->userdata('logged_in')) 

			redirect('user/login');



		$user_id = $this->session->userdata('user_id');



		// Dapatkan detail dari User

		$data['user'] = $this->User_model->get_user_details($user_id);



		// Load view
		$userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('templates/header');
            $this->load->view('users/user1', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('templates/header');
            $this->load->view('users/user2', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '3') {
			$this->load->view('templates/header', $data, FALSE);
			$this->load->view('user/dashboard', $data, FALSE);
			$this->load->view('templates/footer', $data, FALSE);
	}

		}
}