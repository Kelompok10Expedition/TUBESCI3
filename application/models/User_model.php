<?php defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {


	public function get_artikels(){
            $query = $this->db->get('users');
            return $query->result();
        }   

        public function get_single($id)
        {
            $query = $this->db->query('select * from users where user_id='.$id);
            return $query->result();

            // $this->db->select('*');
            // $this->db->from('user');
            // $this->db->join('category', 'blog.fk_id_cat = category.id_cat');
            // $this->db->where('blog.id_blog='.$id);
            return $this->db->get()->result();
        }

         public function get_total()
        {
            return $this->db->count_all("users");
        }
    public function get_all_blogs($limit = FALSE, $offset = FALSE)
        {
            if ($limit) {
                $this->db->limit($limit, $offset);
            }

            $this->db->order_by('users.user_id', 'DESC');

            $query = $this->db->get('users');
            return $query->result();
        }
	 public function register($enc_password){

        // Array data user 

        $data = array(

            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),

            'email' => $this->input->post('email'),

            'username' => $this->input->post('username'),

            'password' => $enc_password,

            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')

        );



        // Insert user

        return $this->db->insert('users', $data);

    }
   public function login($username, $password){

        // Validasi

        $this->db->where('username', $username);

        $this->db->where('password', $password);



        $result = $this->db->get('users');





        if($result->num_rows() == 1){

            return $result->row(0)->user_id;

        } else {

            return false;

        }

    }
    public function logout(){

        // Unset user data

        $this->session->unset_userdata('logged_in');

        $this->session->unset_userdata('user_id');

        $this->session->unset_userdata('username');



        // Set message

        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');



        redirect('user/login');

    }

     function get_user_level($user_id)
    {
        //mendapatkan data user
        $this->db->select('fk_level_id');

        $this->db->where('user_id', $user_id);



        $result = $this->db->get('users');





        if($result->num_rows() == 1){

            return $result->row(0)->fk_level_id ;

        } else {

            return false;

        }

    }
    function get_user_details($user_id)
    {
        $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
        $this->db->where('user_id', $user_id);


        $result = $this->db->get('users');


        if($result->num_rows() == 1){

            return $result->row() ;

        } else {

            return false;

        }
    }

    function get_level_name($level_id)
    {
        $this->db->select('nama_level');
         $this->db->where('level_id', $level_id);


        $result = $this->db->get('levels');


        if($result->num_rows() == 1){

            return $result->row(0) ;

        } else {

            return false;

        }
    }

}