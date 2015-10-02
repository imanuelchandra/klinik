<?php

class Daftar_menu extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function menu_model($idmenu){
       $this->db->select('level_akses');
       $this->db->from('menu');
       $this->db->where('id_menu', $idmenu);
       $query_mm = $this->db->get();
       return $query_mm;
     }
}