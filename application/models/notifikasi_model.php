<?php

class Notifikasi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function cekpesan_model($kpd){
        
       $query_cp = $this->db->get_where('notifikasi', array('status_notif' => "N"));
       if($query_cp->num_rows() > 0){
        foreach($query_cp->result() as $rowcp){
          $jns_ntf = $rowcp->jenis_notif;
          
            if($jns_ntf == "PMR"){
                
              $this->db->select('id_notif');
              $this->db->from('notifikasi');
              $this->db->where('kepada', $kpd);
              $this->db->where('jenis_notif', "PMR");
              $this->db->where('status_notif', "N");
              $query_cpp = $this->db->get();
              
              //return $query_cpp->result();
              
          }else if($jns_ntf == "BPP"){
              
              $this->db->select('id_notif');
              $this->db->from('notifikasi');
              $this->db->where('kepada', $kpd);
              $this->db->where('jenis_notif', "BPP");
              $this->db->where('status_notif', "N");
              $query_cpb = $this->db->get();
              
              //return $query_cpb->result();
              
          }else if($jns_ntf == "PMR" and $jns_ntf == "BPP"){
              
              $jnsnotf = array('PMR', 'BPP');
         
              $this->db->select('id_notif');
              $this->db->from('notifikasi');
              $this->db->where('kepada', $kpd);
              $this->db->or_where_in('jenis_notif', $jnsnotf);
              $this->db->where('status_notif', "N");
              $query_cpb2 = $this->db->get();
              
              return $query_cpb2->result();

             // return FALSE;
          }

         }
       }else{
           
          return $query_cp->result();
       }

    }
    
    public function lihatpesan_model($kpd_lm){
        $this->db->select('*');
        $this->db->from('notifikasi');
        $this->db->join('pasien', 'pasien.id_pasien = notifikasi.dari');
        $this->db->where('notifikasi.kepada', $kpd_lm);
        $this->db->where('notifikasi.jenis_notif', "PMR");
        $this->db->where('notifikasi.status_notif', "N");

        $query_lm = $this->db->get();
        return $query_lm;
    }
    
     public function notif_reg_pasien_model($reg_idpasien, $idusr_rp){
        $ins_notif_pemerikasaan = array(
		'dari' => $reg_idpasien,
		'kepada'=> 2,
		'jenis_notif' => "PMR",
		'tgl_notif' => date("Y-m-d"),
		'status_notif' => "N",
		);
        
         $qi_nrpm = $this->db->insert('notifikasi', $ins_notif_pemerikasaan);
         return $qi_nrpm;
     }
     
     public function del_notif_reg($idpasien){
         $this->db->delete('notifikasi', array('dari' => $idpasien, 'jenis_notif' => "PMR", 'status_notif' => "N")); 
     }
}