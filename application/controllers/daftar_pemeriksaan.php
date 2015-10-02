<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_pemeriksaan extends CI_Controller {
    
        public function  __construct() {
         parent::__construct();
         $this->load->library('auth');
        }
		public function index() {
		$this->auth->restrict();
            $this->auth->cek(1);
			$this->load->model('Pemeriksaan_model');
            $dp = $this->Pemeriksaan_model->daftar_pemeriksaan();
            $data['datapemeriksaan'] = $dp;
            $this->load->view('daftar_pemeriksaan', $data);
		}	
        public function datauser(){
            
        }
}