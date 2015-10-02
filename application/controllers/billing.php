<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller{

        public function  __construct() {
         parent::__construct();
	   $this->load->library('auth');
        }	
        
        public function billing_pemeriksaan(){
          $this->load->model('Billing_model');
          $resbpm = $this->Billing_model->billing_pemeriksaan_model();
           
          foreach($resbpm->result() as $rbpm){
                $kd_pasien = $rbpm->kode_pasien;
                $nm_pasien = $rbpm->nama_pasien;
                $io  = $rbpm->id_obat;
                $it  = $rbpm->id_tindakan;
                $ij  = $rbpm->id_jasa;
                $do  = $rbpm->dosis_obat;
                $jo  = $rbpm->jumlah_obat;
                $tgl_pemeriksaan = $rbpm->tgl_pemeriksaan;
          }
          
          $data['kode_pasien'] = $kd_pasien;
          $data['nama_pasien'] = $nm_pasien;
          $data['tgl_pemeriksaan'] = $tgl_pemeriksaan;
          
           $usio = unserialize($io);
           $usit = unserialize($it);
           $usij = unserialize($ij);
           $usdo = unserialize($do);
           $usjo = unserialize($jo);
                 
           //print_r($usio);
           $impio = implode(",", $usio);
           $exio = explode(",", $impio);
           
           for($i=0; $i<count($exio); $i++){
               //echo $fio = $exio[$i];
              $resbpm_io = $this->Billing_model->bpm_get_obat($exio[$i]);
             // print_r($resbpm_ijp);
              foreach($resbpm_io->result() as $resio){
                 $resobat = $resio->nama_obat;
                 $obat_arr[] = $resobat;
                 
                 $hrg_jual = $resio->harga_jual;
                 $arr_hrgjual[] = $hrg_jual;
                 
               
                $imobat = implode(",", $obat_arr);
                $exobat = explode(",", $imobat);
                $data['arr_obat'] = $exobat;
              }
              
           }
           
           //print_r($arr_hrgjual);
           //echo "<br/>";
           
           $imdosis = implode(",", $usdo);
           $exdosis = explode(",", $imdosis);
            
           $data['dosis_obat'] = $exdosis;
           
           $imjo = implode(",", $usjo);
           $exjo = explode(",", $imjo);
           
           $data['jumlah_obat'] = $exjo;
           
           //print_r($exjo);
           //echo "<br/>";
           
           $jajo = count($exjo);
           $jaho = count($arr_hrgjual);
           
           if($jajo == $jaho){
            for($a=0; $a<count($exjo); $a++){
                $hjo[$a] = $exjo[$a] * $arr_hrgjual[$a];
              }
           }
           
           //print_r($hjo);
           //echo "<br/>";
           
           $imhjo = implode(",", $hjo);
           $exhjo = explode(",", $imhjo);
           
           $totho = 0;
           for($b=0; $b<count($exhjo); $b++){
               $totho += $exhjo[$b];
           }
           
           $data['total_hrgobat'] = $totho;
           
           $resbpm_hjp = $this->Billing_model->bpm_getharga_jasaperiksa();
           
           foreach($resbpm_hjp->result() as $rhjp){
                  $drhjp = $rhjp->tarif_total;
           }
           
           $data['harga_jperiksa'] = $drhjp;
          
           $imij = implode(",", $usij);
           $exij = explode(",", $imij);
           
            for($c=0; $c<count($exij); $c++){
               $resbpm_ij = $this->Billing_model->bpm_getharga_tindakan($exij[$c]);
               
               foreach($resbpm_ij->result() as $rij){
                     $tottarif = $rij->tarif_total;
                     $tottarif_arr[] = $tottarif;
               }
            }
        
           $htottindakan = 0;
           for($d=0; $d<count($tottarif_arr); $d++){
               $htottindakan += $tottarif_arr[$d];
           }
           
           $data['htot_tindakan'] = $htottindakan;
            
           $totbiaya_pempasien = $drhjp+$totho+$htottindakan;
           $data['totby_pempasien'] = $totbiaya_pempasien;
         
         $this->load->view('billing', $data);
         
        }
        
}