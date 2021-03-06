<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_pengiriman extends CI_Controller {

	public function index()
	{
		$this->load->model('list_pengiriman');
		$data['pengirim'] = $this->list_pengiriman->get_pengirimans();
		$this->load->view('home_view_pengiriman', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		
		$this->load->model('list_pengiriman');
		$this->load->model('list_barang');
		 $data = array();
		 $data['barang'] = $this->list_barang->get_barangs();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_user', 'User', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_type','Type','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('id_barang','Barang','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_penerima','Penerima','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_tujuan','Tujuan','required',array('required' => 'isi %s.'));
		 $this->form_validation->set_rules('input_status','Status','required',array('required' => 'isi %s.'));


		$data = array();	
		$data['barang'] = $this->list_barang->get_barangs();	
  

		 if($this->form_validation->run()==FALSE){
		 	$this->load->view('tabel_pengiriman', $data);
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
				$this->list_pengiriman->insert();
				redirect('view_pengiriman');
		 	}
		 	$this->load->view('tabel_pengiriman', $data);
		 }
	}

	public function edit($id){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_atk', 'User', 'required', array('required' => 'isi %s .'));
		$this->form_validation->set_rules('type_atk','Type','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('barang_atk','Barang','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('penerima_atk','Penerima','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('tujuan_atk','Tujuan','required',array('required' => 'isi %s.'));
		$this->form_validation->set_rules('status_atk','Status','required',array('required' => 'isi %s.'));
		
		$this->load->model("list_pengiriman");
		$data['tipe'] = "Edit";
		$data['default'] = $this->list_pengiriman->get_default($id);


		if($this->form_validation->run()==FALSE){
		 	$this->load->view('edit_pengiriman', $data);
		 }
		 else
		 {
		 	if(isset($_POST['simpan'])){
			$this->list_pengiriman->update($_POST, $id);
			redirect("view_pengiriman");
		}
		 	$this->load->view('edit_pengiriman', $data);
		 }

}
	public function delete($id){
		$this->load->model('list_pengiriman');
		$this->list_pengiriman->hapus($id);
		redirect('view_pengiriman');
	}
}
?>