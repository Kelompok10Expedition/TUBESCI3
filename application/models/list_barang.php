	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_barang extends CI_Model {

		public function get_barangs(){
			$query = $this->db->get('barang');
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
<<<<<<< HEAD
			$config['upload_path'] = './img/';
=======
			$config['upload_path'] = './assets/img/';
>>>>>>> 520f7e127c9380f4896785b90f823fb3469b8c7c
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
				'id_barang' => '',
				'nama_barang' => $this->input->post('input_nama'),
				'berat_barang' => $this->input->post('input_berat'),
				'gambar_barang' => $upload['file']['file_name']
				
				
			);

			$this->db->insert('barang', $data);
		}

<<<<<<< HEAD
	// 	public function save($upload){
	// 	$data = array(
	// 		'id_barang' => $this->input->post('null'),
	// 		'nama_barang' => $this->input->post('user_atk'),
	// 		'berat_barang' => $this->input->post('type_atk'),
	// 		'gambar_barang' => $upload['file']['file_name']
			
	// 	);
		
	// 	$this->db->insert('barang', $data);
	// }

=======
>>>>>>> 520f7e127c9380f4896785b90f823fb3469b8c7c
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama_atk = $this->db->escape($post['nama_atk']);
		$berat_atk = $this->db->escape($post['berat_atk']);
		$gambar_atk = $this->db->escape($post['gambar_atk']);
		$sql = $this->db->query("UPDATE barang SET nama_barang = $nama_atk, berat_barang = $berat_atk, berat_barang = $berat_atk WHERE id_barang = ".intval($id));
		return true;
	}


		//fungsi delete
		public function hapus($id){
			$query = $this->db->query('DELETE from barang WHERE id_barang= '.$id);
		}
	}
	?>