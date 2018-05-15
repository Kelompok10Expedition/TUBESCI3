	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_daftar extends CI_Model {

		public function get_daftars(){
			$query = $this->db->get('user');
			return $query->result();
		}	

		public function get_default($id)
		{
			$data = array();
	  		$options = array('id_user' => $id);
	  		$Q = $this->db->get_where('user',$options,1);
	    		if ($Q->num_rows() > 0){
	      			$data = $Q->row_array();
	   			}
	  		$Q->free_result();
	 		return $data;
		}


		public function upload()
		{
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']  = '2048';
			$config['remove_space']  = TRUE;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('input_gambar')){
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		public function insert($upload)
		{
			$data = array(
				'id_user' => '',
				'nama_user' => $this->input->post('input_nama'),
				'alamat_user' => $this->input->post('input_alamat'),
				'no_telp' => $this->input->post('input_no'),
				'email' => $this->input->post('input_email')
				
				
			);

			$this->db->insert('user', $data);
		}
	}
	?>