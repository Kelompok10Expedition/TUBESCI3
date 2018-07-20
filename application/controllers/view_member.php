<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_member extends CI_Controller {

	public function index()
	{
		$this->load->model('list_member');
		$data['artikel'] = $this->list_member->get_members();
		$this->load->view('home_member', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('list_member');
		 $data = array();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_nama', 'Nama', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_alamat','Alamat','required',array('required' => 'isi %s.'));

		 if($this->form_validation->run()==FALSE){
		 	$this->load->view('tabel_member');
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
				$this->list_category->insert();
				redirect('user/admin');

		 }
		 $this->load->view('templates/header');
		 $this->load->view('tabel_member', $data);
		 $this->load->view('templates/footer');
		}
	}
	//fungsi update
	
	public function edit($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_atk', 'Nama', 'required', array('required' => 'isi %s .'));
		$this->form_validation->set_rules('alamat_atk','Alamat','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('nomor_atk','Nomor','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('kodepos_atk','Kodepos','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('email_atk','Email','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('username_atk','Username','required',array('required' => 'isi %s.'));

		$this->load->model("list_member");
		$data['tipe'] = "Edit";
		$data['default'] = $this->list_member->get_default($id);


		if($this->form_validation->run()==FALSE){
		 	$this->load->view('tabel_member_edit', $data);
		 }
		 else
		 {
		 	if(isset($_POST['simpan'])){
			$this->list_member->update($_POST, $id);
			redirect("view_member");
		}
		 	$this->load->view('tabel_member_edit', $data);
		 }
	}


	//fungsi delete
	public function delete($id){
		$this->load->model('list_member');
		$this->list_member->hapus($id);
		redirect('home/index2');
	}
}
?>