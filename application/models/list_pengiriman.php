	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_pengiriman extends CI_Model {

		public function get_pengirimans(){
			$query = $this->db->get('pengiriman');
			return $query->result();
		}	

		public function get_default($id)
		{
			$data = array();
	  		$options = array('id_pengiriman' => $id);
	  		$Q = $this->db->get_where('pengiriman',$options,1);
	    		if ($Q->num_rows() > 0){
	      			$data = $Q->row_array();
	   			}
	  		$Q->free_result();
	 		return $data;
		}


		public function upload()
		{
			$config['max_size']  = '2048';
			$config['remove_space']  = TRUE;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('input_user')){
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
				'id_pengiriman' => '',
				'id_user' => $this->input->post('input_user'),
				'id_type' => $this->input->post('input_type'),
				'id_barang' => $this->input->post('id_barang'),
				'nama_penerima' => $this->input->post('input_penerima'),
				'alamat_tujuan' => $this->input->post('input_tujuan'),
				'tgl_kirim' => $this->input->post('input_tanggal'),
				'status' => $this->input->post('input_status')
				
			);

			$this->db->insert('pengiriman', $data);
		}

		public function save($upload){
		$data = array(
			'id_pengiriman' => '',
			'id_user' => $this->input->post('user_atk'),
			'id_type' => $this->input->post('type_atk'),
			'id_barang' => $this->input->post('barang_atk'),
			'nama_penerima' => $this->input->post('penerima_atk'),
			'alamat_tujuan' => $this->input->post('tujuan_atk'),
			'tgl_kirim' => $this->input->post('tanggal_atk'),
			'status' => $this->input->post('status_atk')
			
		);
		
		$this->db->insert('pengiriman', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$user_atk = $this->db->escape($post['user_atk']);
		$type_atk = $this->db->escape($post['type_atk']);
		$barang_atk = $this->db->escape($post['barang_atk']);
		$penerima_atk = $this->db->escape($post['penerima_atk']);
		$tujuan_atk = $this->db->escape($post['tujuan_atk']);
		$tanggal_atk = $this->db->escape($post['tanggal_atk']);
		$status_atk = $this->db->escape($post['status_atk']);
		$sql = $this->db->query("UPDATE pengiriman SET id_user = $user_atk, id_type = $type_atk, id_barang = $barang_atk, nama_penerima = $penerima_atk, alamat_tujuan = $tujuan_atk, tgl_kirim = $tanggal_atk, status = $status_atk WHERE id_pengiriman = ".intval($id));
		return true;
	}


		//fungsi delete
		public function hapus($id){
			$query = $this->db->query('DELETE from pengiriman WHERE id_pengiriman= '.$id);
		}
	}
	?>