<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dokter extends CI_Controller {
    
        public function  __construct() {
         parent::__construct();
         $this->load->library('auth');
        }
        
        public function trans_pengguna(){
          $this->load->view('pengguna');
        }

        public function datauser(){
            $this->auth->restrict();
            $this->auth->cek(1);

            $this->load->model('User');

            $du = $this->User->datauser_model();
          
            $data['datauser'] = $du;

            $this->load->view('dok_datauser', $data);
        }
           
        public function tambahuser(){
           $this->load->view('dok_tbpengguna');
        }
        
        public function tambahuser_proses(){
            
            $this->auth->restrict();
            $this->auth->cek(2);

             if($_POST){
	       if ($this->form_validation->run('tmbh_pengguna') == FALSE){
			$this->load->view('dok_tbpengguna');
	       }else{
                  $nm_login = $this->input->post('nama');
                  $passwd = $this->input->post('passwd');
                  $lvl_akses = $this->input->post('lvl_akss');
            
                  $nm_lngkp = $this->input->post('nm_lengkap');
                  $tmpt_lhr = $this->input->post('tmpt_lahir');
                  $tgl_lhr = $this->input->post('tgl_lahir');
	          $bln_lhr = $this->input->post('bln_lahir');
	          $th_lhr = $this->input->post('th_lahir');
                  $jns_kelamin = $this->input->post('jns_kelamin');
                  $alamat = $this->input->post('alamat');
                  $no_tlp = $this->input->post('telepon');
                
              }
           }
       
        }
        
}