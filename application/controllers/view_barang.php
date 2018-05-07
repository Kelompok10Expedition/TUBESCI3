<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_barang extends CI_Controller {

	public function index()
	{
		$this->load->model('list_barang');
		$data['benda'] = $this->list_barang->get_barangs();
		$this->load->view('home_view_barang', $data);
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

	public function edit($id){
		$this->load->model("list_barang");
		$data['tipe'] = "Edit";
		$data['default'] = $this->list_barang->get_default($id);

		if(isset($_POST['simpan'])){
			$this->list_barang->update($_POST, $id);
			redirect("view_barang");
		}

		$this->load->view("edit_barang",$data);
	}

	public function delete($id){
		$this->load->model('list_barang');
		$this->list_barang->hapus($id);
		redirect('view_barang');
	}
}
?>