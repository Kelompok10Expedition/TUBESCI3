	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_barang extends CI_Model {

		public function get_barangs(){
			$query = $this->db->get('barang');
			return $query->result();
		}	

		public function get_single($id)
		{
			$query = $this->db->query('select * from barang where id_barang='.$id);
			return $query->result();

		}

		public function get_default($id)
		{
			$data = array();
	  		$options = array('id_barang' => $id);
	  		$Q = $this->db->get_where('barang',$options,1);
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
				'gambar_user' => $upload['file']['file_name']
				
				
			);

			$this->db->insert('user', $data);
		}

	


	}
	?>