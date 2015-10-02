<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller{

        public function  __construct() {
         parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->library('auth');
        }
	public function index() {
		$this->load->view('absensi');
		}	
	public function input_absensi(){

        $this->load->library('form_validation');

		$this->form_validation->set_rules('iduser', 'ID', 'required');

		if ($this->form_validation->run() == FALSE){
		    $this->load->view('absensi');
		}else{

            $iduser = $this->input->post('iduser');	
			$this->load->model('User');
			$du = $this->User->absensi($iduser);
			echo "berhasil";
			$this->load->view('absensi');
			}

       }
}