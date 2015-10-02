<?php

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function datauser_model(){
      $query_dm = $this->db->get('pengguna');
      return $query_dm;
    }

     public function login_model($nama, $pass){
       $query_lm = $this->db->get_where('pengguna', array('nama_user' => $nama, 'password' => $pass));
       return $query_lm;
     }
     
}