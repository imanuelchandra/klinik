<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gaji extends CI_Controller{

        public function  __construct() {
         parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->library('auth');
        }
	public function index() {
		$this->load->view('gaji_karyawan');
		}	
}