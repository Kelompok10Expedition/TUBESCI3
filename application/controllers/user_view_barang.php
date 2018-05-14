<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_view_barang extends CI_Controller {

	public function index()
	{
		$this->load->model('user/list_barang');
		$data['list'] = $this->list_barang->get_barangs();
		$this->load->view('user/view_barang', $data);
	}

	public function detail($id)
	{
		$this->load->model('user/list_barang');
		$data['detail'] = $this->list_barang->get_single($id);
		$this->load->view('user/home_detail', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('user/list_barang');
		 $data = array();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_nama', 'Nama', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_alamat','Alamat','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_no','Nomor','required',array('required' => 'isi %s.'));

 		if($this->form_validation->run()==FALSE){
		 	$this->load->view('user/view_barang');
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
			$upload = $this->list_daftar->upload();

			if ($upload['result'] == 'success') {
				$this->list_daftar->insert($upload);
				redirect('user');
			}else{
				$data['message'] = $upload['error'];
			}
		 }
		 $this->load->view('user', $data);
		}
	}

}
?>