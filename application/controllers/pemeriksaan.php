<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Pemeriksaan extends CI_Controller{

        public function  __construct() {
         parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->library('auth');
        }
       
	public function pem_pasien($idpasien) {
		
	 $this->load->model('Pemeriksaan_model');
	 $data_tp = $this->Pemeriksaan_model->tmpl_dtpasien($idpasien);
        
         $this->load->model('Notifikasi_model');
	 $this->Notifikasi_model->del_notif_reg($idpasien);	
	
         $data_gjp = $this->Pemeriksaan_model->get_jenis_penyakit();
         $data_gol = $this->Pemeriksaan_model->get_gol_obat();
         $data_tm = $this->Pemeriksaan_model->get_tindakan();
         
         $data['datapasien'] = $data_tp;
         $data['gjp'] = $data_gjp;
         $data['tg'] = $data_gol;
         $data['tm'] = $data_tm;
         
	 $this->load->view('pemeriksaan', $data);
	}
        
     public function get_penyakit($jnp){
          $this->load->model('Pemeriksaan_model');
          header('Content-Type: application/x-json; charset=utf-8');
          echo(json_encode($this->Pemeriksaan_model->get_nm_penyakit($jnp)));
     }
     
     public function get_nm_obat($gol){
          $this->load->model('Pemeriksaan_model');
          header('Content-Type: application/x-json; charset=utf-8');
          echo(json_encode($this->Pemeriksaan_model->get_nm_obat($gol))); 
     }
     
     public function get_jns_pelayanan($idt){
          $this->load->model('Pemeriksaan_model');
          header('Content-Type: application/x-json; charset=utf-8');
          echo(json_encode($this->Pemeriksaan_model->get_jns_pelayanan($idt)));
     }

     public function ins_pemeriksaan(){
        if($_POST['pemeriksaan']){
        $this->load->model('Pemeriksaan_model');
        
        $idpasien = $this->input->post('idpasien');  
        $tensi = $this->input->post('tensi');
        $nadi = $this->input->post('nadi');
        $respirasi = $this->input->post('respirasi');
        $suhu = $this->input->post('suhu');
        $brtbdn = $this->input->post('beratbadan');  
        $tinggibdn = $this->input->post('tinggibadan'); 
        $bmi = $this->input->post('bmi');  
        $lingkarkpl = $this->input->post('lingkarkepala');
        $keluhan = $this->input->post('keluhan');
        $alergi = $this->input->post('alergi');
       
        $jnspenyakit = $this->input->post('jnspenyakit');
        $penyakit = $this->input->post('penyakit');  
        
        $gol_obat = $this->input->post('gol_obat');  
        $nm_obat = $this->input->post('nm_obat'); 
        
        $dos_obat = $this->input->post('dosis_obat');  
        $jum_obat = $this->input->post('jumlah_obat');  
 
        
        $tmedis = $this->input->post('tmedis');
        $jns_pmedis = $this->input->post('jns_pmedis'); 
       
        //shuffle($jnspenyakit);
        $this->array_drop_multiple(array('0', '#'), $jnspenyakit);
        //shuffle($penyakit);
        $this->array_drop_multiple(array('0', '#'), $penyakit);
        
        //shuffle($gol_obat);
        $this->array_drop_multiple(array('0', '#'), $gol_obat);
       // shuffle($nm_obat);
        $this->array_drop_multiple(array('0', '#'), $nm_obat);
        
       // shuffle($tmedis);
        $this->array_drop_multiple(array('0', '#'), $tmedis);
       // shuffle($jns_pmedis);
        $this->array_drop_multiple(array('0', '#'), $jns_pmedis);
        
        $ndos = $this->array_trim($dos_obat);
        $njum = $this->array_trim($jum_obat);
       // shuffle($dos_obat);
       // $this->array_drop_multiple(array('empty()'), $dos_obat);
       // shuffle($jum_obat);
       // $this->array_drop_multiple(array('empty()'), $jum_obat);
        
        //for($d=0;$d<count($dos_obat);$d++){
        //  if(trim($dos_obat[$d]) == "") unset($dos_obat[$d]);
        //  echo $dos_obat[$d];
        //} 
        // print_r($dos_obat);
 
        
        $jp = serialize($jnspenyakit);
        $py = serialize($penyakit);
        $go = serialize($gol_obat);
        $nmo = serialize($nm_obat);
        $tm = serialize($tmedis);
        $jpm = serialize($jns_pmedis);
        $do = serialize($ndos);
        $jo = serialize($njum);
        
        
          $data_pemeriksaan = array(
                                 'id_pasien' => $idpasien,
                                 'id_jenis_penyakit' => $jp,
                                 'id_penyakit' => $py,
                                 'id_golongan_obat' => $go,
                                 'id_obat' => $nmo,
                                 'id_tindakan' => $tm,
                                 'id_jasa' => $jpm,
                                 'tensi' => $tensi,
                                 'nadi' => $nadi,
                                 'respirasi' => $respirasi,
                                 'suhu' => $suhu,
                                 'berat_badan' => $brtbdn,
                                 'tinggi_badan' => $tinggibdn,
                                 'bmi' => $bmi,
                                 'lingkar_kepala' => $lingkarkpl,
                                 'keluhan_utama' => $keluhan,
                                 'dosis_obat' => $do,
                                 'jumlah_obat' => $jo,
                                 'tgl_pemeriksaan' => date("Y-m-d"),
                                 );
          
       $ins_pem = $this->Pemeriksaan_model->ins_pemeriksaan_model($data_pemeriksaan);
       
       if($ins_pem){
           redirect('user_proses/dok_dashboard');
        }
      }
    }
     
  public function array_drop_multiple($mSearch, &$aArray){
    if (!is_array($mSearch))
    {
        $mSearch = (array) $mSearch;
    }
    
    foreach ($mSearch as $szSearch)
     {
        while (($iKey = array_search($szSearch, $aArray)) !== false)
        {
            unset($aArray[$iKey]);
        }
     }
   }
   
   public function array_trim($a) { 
       $j = 0; 
       for ($i = 0; $i < count($a); $i++) { 
           if ($a[$i] != "") { 
               $b[$j++] = $a[$i]; 
               
                } 
              } 
               return $b;    
         }
		
}