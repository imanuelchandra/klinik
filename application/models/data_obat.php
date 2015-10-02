<?php

class Data_obat extends CI_Model {
   
   public function __construct() {
        parent::__construct();
    }
      public  function dataobat_model($perPage, $uri){
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->join('golongan_obat','golongan_obat.id_golongan_obat=obat.id_golongan_obat');
		$this->db->order_by('id_obat','ASC');
		$getData = $this->db->get('', $perPage, $uri);
		if($getData->num_rows() > 0)
		return $getData->result();
		else
		return null;
    }
	public function golongan_model(){
		return $this->db->get('golongan_obat')->result();
	}
	public function dlt_bnyk_obat($dt){
		$cek_pl = $this->db->get_where('obat', array('id_obat' => $dt));
		foreach($cek_pl->result()  as $data) {
		$id= $data->id_obat;
		if ($data->stok_obat == 0){
		$this->db->where('id_obat',$id);
		$this->db->delete('obat');
		}else {
		//echo "otidak bisa";
		}
		}
	}
	public function delete_obat($id_obat){
	
	$this->db->where('id_obat', $id_obat);
	$this->db->delete('obat');
	}
     public function numObat(){
        $this->db->select('*');
		$this->db->from('obat');
		$getData = $this->db->get('');
		$a = $getData->num_rows();
		return $a;
     }
     public function input_obat($data){
		$this->db->insert('obat', $data);
		return $this->db->insert_id();
	}
	 public function obat_expired(){
		$query_dm = $this->db->get('obat');
      return $query_dm;
	}
}