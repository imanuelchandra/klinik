<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_proses extends CI_Controller {


      public function  __construct() {
        parent::__construct();
        $this->load->library('auth');
       }

       public function index(){
            $this->auth->restrict(TRUE);
	    $this->load->view("login");
       }

       public function login(){

        $this->load->library('form_validation');

		$this->form_validation->set_rules('iduser', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE){
		    $this->load->view('login');
		}else{

                           $iduser = $this->input->post("iduser");
                           $pass   = $this->input->post("password");

                           $login = $this->auth->proses_login($iduser, $pass);

                           if($login == TRUE){
                                if($this->session->userdata('level') == 1){
                                  redirect('user_proses/op_dashboard');
                                }else if($this->session->userdata('level') == 2){
                                  redirect('user_proses/dok_dashboard');
                               }
                              }else{
                                redirect('user_proses');
                              }
		   }

       }

       public function logout(){
           $this->auth->restrict();
           $this->auth->proses_logout();
           $this->load->view('login');
       }
       
       public function op_dashboard(){
           $this->auth->restrict();
           $this->load->view('op_dashboard');
       }

        public function dok_dashboard(){
           $this->auth->restrict();
           $this->load->view('dok_dashboard');
       }
}