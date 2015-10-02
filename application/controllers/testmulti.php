<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testmulti extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('testmulti');
    }
    
    public function test(){
       $home = $_POST['pilihpasien'];
       
       $this->load->model('Testmulti_model');

       
        $serializedoptions = serialize($home);
       // $strenc = urlencode($serializedoptions);
         
         //echo $tmp = var_dump($arr);  
        
         // foreach($tmp as $tt){
          //   echo $tt.",";
         // }
          
         $data_pemeriksaan = array(
                             'opt' => $serializedoptions,
                                
                          );
        $this->Testmulti_model->insert_db($data_pemeriksaan);    
        
       $tmpl = $this->Testmulti_model->tmplser();
       
       foreach($tmpl->result() as $tp){
    
        $dtuns = $tp->opt;
           $arr = unserialize($dtuns);
            foreach($arr as $r){
             echo $r.",";
         }
        }
       
      
         //print_r($arr);
        
       // foreach($tmpl->result_array() as $tp){
       //    
       //  $dtuns = $tp['opt'];
          
       // }
        
  
        
       // echo $dtuns;
         //foreach($home as $value) {
           //echo $value.'<br />';
        // } 
    }
    
}
