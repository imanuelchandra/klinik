<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth {

 var $menu_id;

 public function Auth()
 {
    $this->CI =& get_instance();
 }
 
function proses_login($user_name, $passwd)
 {
     $this->CI->load->model('User');

     $login = $this->CI->User->login_model($user_name, $passwd);

     if($login->num_rows() > 0){
     foreach($login->result() as $dl){
     $datalogin = array('id_user' => $dl->id_user, 'user' => $dl->nama_user, 'level' => $dl->level);
     $this->CI->session->set_userdata($datalogin);
     $this->CI->session->set_userdata('login_user', $user_name);
     }
      return TRUE;
     }else{
      $this->CI->session->set_flashdata('psnerror', 'nama atau anda password salah');
      return FALSE;
     }
  }
  
function restrict($logged_out = FALSE)
 {
    // fungsi ini untuk mengatur restriction sebuah halaman

    if ($logged_out && $this->logged_in())
    {
        if($this->CI->session->userdata('level') == 1){
            redirect('user_proses/op_dashboard');
        }else{
          if($this->CI->session->userdata('level') == 2){
            redirect('user_proses/dok_dashboard');
         }
       }
        // jika user sudah login tetapi ingin melihat halaman
        // yang tidak seharusnya dilihat, contoh halaman login
        // redirect('user_proses/op_dashboard'); // url helper, pastikan sudah ter-load
    }

    if ( !$logged_out && !$this->logged_in())
    {
        // jika user sudah logout (default :FALSE) dan dia
        // ingin masuk halaman admin

        redirect('user_proses');
    }
 }
 
 function logged_in()
 {
    if ($this->CI->session->userdata('login_user') == FALSE)
    {
        return FALSE;
    }
    else 
    {
        return TRUE;
    }
 }
 
 function proses_logout()
 {
   // $datasess = array('user' => 0, 'level' => 0, 'login' => FALSE);
    $this->CI->session->sess_destroy();
   // $this->CI->session->unset_userdata($datasess);
    return TRUE;
 }
 function cek($idm)
 {
    // untuk mengecek apakah user mempunyai hak akses atau tidak
    //$rd = new models\Menu;
    $status_user = $this->CI->session->userdata('level');
    $this->CI->load->model('Daftar_menu');
    $lvl_akses = $this->CI->Daftar_menu->menu_model($idm);

   // $this->CI->load->model('User');
    //$du = $this->CI->User->datauser_model();
   // $du->getNamaUser();
   //$menu_id->getIdManu();
    foreach($lvl_akses->result() as $lvlm){
     $lvl = $lvlm->level_akses;
    }
    $arr_lev =explode('-', $lvl);
    if(in_array($status_user, $arr_lev) == FALSE)
    {
        redirect('user_proses');
    }
 }
}