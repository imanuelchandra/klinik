<?php

class Billing_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function billing_pemeriksaan_model(){
        $this->db->select('*');
        $this->db->from('pemeriksaan');
        $this->db->join('pasien', 'pasien.id_pasien = pemeriksaan.id_pasien');

        $query_bp = $this->db->get();
        return $query_bp;
    }
    
    public function bpm_get_obat($io){
        $query_bpm_io = $this->db->get_where('obat', array('id_obat' => $io));
        return $query_bpm_io; 
    }
    
    public function bpm_getharga_jasaperiksa(){
         $this->db->select('tarif_total');
         $this->db->from('jasa_medis');
         $this->db->where('jenis_pelayanan', "Pemeriksaan Dokter Umum");
         $query_hjp = $this->db->get();
         return $query_hjp;
    }
    
    public function bpm_getharga_tindakan($idjasa){
         $this->db->select('tarif_total');
         $this->db->from('jasa_medis');
         $this->db->where('id_jasa', $idjasa);
         $query_htm = $this->db->get();
         return $query_htm;
    }
}