<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function cekpesan(){
        
         $level_cp = $this->session->userdata('level');
         
         $this->load->model('Notifikasi_model');
         $qcek = $this->Notifikasi_model->cekpesan_model($level_cp);
         //print_r($qcek);
         //$q = $qcek->num_rows();
        // if($qcek->num_rows() > 0){
            $jmpsn = count($qcek);
            if($jmpsn > 0){
                echo $jmpsn;
            }else{
                echo "";
            }
        // }
         
         
    }
    
    public function lihatpesan(){
         $level_lp = $this->session->userdata('level');
         
         $this->load->model('Notifikasi_model');
         $qcek_lp = $this->Notifikasi_model->lihatpesan_model($level_lp);
    
          if($qcek_lp->num_rows() > 0){
           echo "<table border=0 width=100% style=\"font-size:10pt\">";
         }else{
           die("<font color=red size=1>Tidak ada pesan baru yang belum dibaca</font>");
         }
         
         foreach ($qcek_lp->result_array() as $rowlp){
            echo "<tr><td onmouseover=\"this.style.backgroundColor='#000000'\"
                  onmouseout=\"this.style.backgroundColor='#000000'\">
                  <a href='".base_url().'index.php/pemeriksaan/pem_pasien/'.$rowlp['dari']."'>Pemeriksaan : ".$rowlp['nama_pasien']."</a><br>
                  Waktu : ".$rowlp['tgl_notif']."</td></tr>";
         }
        echo "</table>";
         
    }
    
    public function notif_reg_pasien(){
              $id_pasien = $this->input->post('kodepasien');
              $idusr_rp = $this->session->userdata('id_user');
             
              $this->load->model('Notifikasi_model');
              $qrp = $this->Notifikasi_model->notif_reg_pasien_model($id_pasien, $idusr_rp);
              
              if($qrp){
                  $pesan_sukses = "<script>alert('Registrasi pasien sukses!');</script>";
                  $data['notif_al'] = $pesan_sukses;
                  redirect('user_proses/op_dashboard');
              }
   }
}