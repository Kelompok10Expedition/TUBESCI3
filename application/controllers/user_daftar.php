<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_daftar extends CI_Controller {

	public function index()
	{
		$this->load->model('user/list_daftar');
		$data['benda'] = $this->list_daftar->get_daftars();
		$this->load->view('user/view_daftar', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('user/list_daftar');
		 $data = array();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_nama', 'Nama', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_alamat','Alamat','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_email','Email','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_no','Nomer','required',array('required' => 'isi %s.'));

 		if($this->form_validation->run()==FALSE){
		 	$this->load->view('user/view_daftar');
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
				$this->list_daftar->insert($upload);
				redirect('user');


		 }
		 $this->load->view('user/view_daftar', $data);
		}
	}

}
?>