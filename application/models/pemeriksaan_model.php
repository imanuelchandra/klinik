<?php
	
class Pemeriksaan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
     
    public function tmpl_dtpasien($idpasien){
		$query_tpp = $this->db->get_where('pasien', array('id_pasien' => $idpasien));
		return $query_tpp; 
    }
    
    public function daftar_pemeriksaan(){
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->join('pasien','pemeriksaan.id_pasien=pasien.id_pasien');
		$this->db->order_by('id_pemeriksaan','ASC');
		$getData = $this->db->get('');
		return $getData;
    }
    
    public function get_jenis_penyakit(){
        $this->db->select('id_jenis_penyakit, jenis');
        $query_gjp = $this->db->get('jenis_penyakit');
        //return $query_gjp;
       
        $jns_penyakit = array();
 
        if($query_gjp->result()){
          foreach ($query_gjp->result() as $jp) {
              $jns_penyakit[0] = "-Pilih-";
              $jns_penyakit[$jp->id_jenis_penyakit] = $jp->jenis;
          }
         return $jns_penyakit;
       }else{
         return FALSE;
      }
 
    }
    
    public function get_nm_penyakit($idjp = null){
        $this->db->select('id_penyakit, nama_penyakit');
 
        if($idjp != NULL){
          $this->db->where('id_jenis_penyakit', $idjp);
       }
 
       $query_gnp = $this->db->get('penyakit');
       //return $query_gnp;

      $penyakit = array();
 
      if($query_gnp->result()){
          foreach ($query_gnp->result() as $p) {
              $penyakit[0] = "-Pilih-";
              $penyakit[$p->id_penyakit] = $p->nama_penyakit;
          }
      return $penyakit;
      }else{
          return FALSE;
      }
     
    }
    
    public function get_gol_obat(){
        $this->db->select('id_golongan_obat, golongan');
        $query_go = $this->db->get('golongan_obat');
        //return $query_gjp;
       
        $gol_obat = array();
 
        if($query_go->result()){
          foreach ($query_go->result() as $go) {
              $gol_obat[0] = "-Pilih-";
              $gol_obat[$go->id_golongan_obat] = $go->golongan;
          }
         return $gol_obat;
       }else{
         return FALSE;
      }
    }
    
    public function get_nm_obat($idgo = null){
       $this->db->select('id_obat, nama_obat');
 
        if($idgo != NULL){
          $this->db->where('id_golongan_obat', $idgo);
       }
 
       $query_nmo = $this->db->get('obat');
       //return $query_gnp;

      $nm_obat = array();
 
      if($query_nmo->result()){
          foreach ($query_nmo->result() as $nmo) {
              $nm_obat[0] = "-Pilih-";
              $nm_obat[$nmo->id_obat] = $nmo->nama_obat;
          }
      return $nm_obat;
      }else{
          return FALSE;
      }
   }
   
   public function get_tindakan(){
       $this->db->select('id_tindakan, jenis_tindakan');
        $query_tm = $this->db->get('tindakan');
        //return $query_gjp;
       
        $tindakan = array();
 
        if($query_tm->result()){
          foreach ($query_tm->result() as $tm) {
              $tindakan[0] = "-Pilih-";
              $tindakan[$tm->id_tindakan] = $tm->jenis_tindakan;
          }
         return $tindakan;
       }else{
         return FALSE;
      }
   }
   
   public function get_jns_pelayanan($idtm){
      $this->db->select('id_jasa, jenis_pelayanan');
 
        if($idtm != NULL){
          $this->db->where('id_tindakan', $idtm);
       }
 
       $query_jp = $this->db->get('jasa_medis');
       //return $query_gnp;

      $jns_pelayanan = array();
 
      if($query_jp->result()){
          foreach ($query_jp->result() as $jp) {
              $jns_pelayanan[0] = "-Pilih-";
              $jns_pelayanan[$jp->id_jasa] = $jp->jenis_pelayanan;
          }
      return $jns_pelayanan;
      }else{
          return FALSE;
      }
   }
   
   public function ins_pemeriksaan_model($dt_pemeriksaan){
       $ins_pm = $this->db->insert('pemeriksaan', $dt_pemeriksaan); 
       if($ins_pm){
          return TRUE; 
       }else{
          return FALSE;
       }
   }
   
}