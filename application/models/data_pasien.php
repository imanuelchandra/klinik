<?php

class Data_pasien extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function cari_pasien_model($key_cari, $cari_kriteria){
          if ($cari_kriteria == 'id'){
	     $querycpm_id = $this->db->get_where('pasien', array('kode_pasien' => $key_cari));
             return $querycpm_id;
             
	   }else if ($cari_kriteria == 'nama'){
	      $querycpm_nm = $this->db->get_where('pasien', array('nama_pasien' => $key_cari));
              return $querycpm_nm;	
	   }
    }
     public function cek_pasienlama($id_pasien){
	 $cek_pl = $this->db->get_where('pasien', array('id_pasien' => $id_pasien));
     return $cek_pl;	
	 
	 }
     public function reg_pasien($nama, $tmpt_lhr, $tanggal_lahir, $jns_kelamin, $alamat, $telepon, $status){
         $input_pasien = array(
		'kode_pasien' =>"5515",
		'nama_pasien'=>$nama,
		'tempat_lahir' => $tmpt_lhr,
		'tgl_lahir' => $tanggal_lahir,
		'jenis_kelamin' => $jns_kelamin,
		'alamat_pasien' => $alamat,
		'no_telepon' => $telepon,
		'status' => $status,
		);				
		$qp = $this->db->insert('pasien', $input_pasien);
		return $qp;
     }
	 public function cr_pasien($nama, $tmpt_lhr, $tanggal_lahir, $jns_kelamin, $alamat, $telepon, $status){
		  $lht_pasien = array(
		'nama_pasien'=>$nama,
		'tempat_lahir' => $tmpt_lhr,
		'tgl_lahir' => $tanggal_lahir,
		'jenis_kelamin' => $jns_kelamin,
		'alamat_pasien' => $alamat,
		'no_telepon' => $telepon,
		'status' => $status,
		);	
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->where($lht_pasien);
		$query_cp = $this->db->get();
		return $query_cp;
     }
}