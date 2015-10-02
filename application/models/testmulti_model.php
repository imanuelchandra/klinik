<?php

class Testmulti_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function insert_db($data_pemeriksaan){
       $this->db->insert('testopt', $data_pemeriksaan);   
    }
    
    public function tmplser(){
        $queryo = $this->db->get('testopt');
        return $queryo;
    }
}