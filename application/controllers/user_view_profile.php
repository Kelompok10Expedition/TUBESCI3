<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_view_profile extends CI_Controller {

	public function index()
	{
		$this->load->model('user/list_profile');
		$data['benda'] = $this->list_profile->get_profiles();
		$this->load->view('user/view_profile', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('list_barang');
		 $data = array();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_nama', 'Nama', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_berat','Berat','required',array('required' => 'isi %s.'));

 		if($this->form_validation->run()==FALSE){
		 	$this->load->view('tabel_barang');
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
			$upload = $this->list_barang->upload();

			if ($upload['result'] == 'success') {
				$this->list_barang->insert($upload);
				redirect('view_barang');
			}else{
				$data['message'] = $upload['error'];
			}
		 }
		 $this->load->view('tabel_barang', $data);
		}
	}

}
?>