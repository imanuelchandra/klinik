<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {


       public function  __construct() {
         parent::__construct();
          $this->load->library('form_validation');
          $this->load->library('auth');
        }

        public function register(){
	      $this->auth->restrict();
              $this->auth->cek(2);

                if($_POST){
                    $pilihpasien = $this->input->post('pilihpasien');
		      if($pilihpasien=="pasienbaru"){
		          $this->load->view('op_register_baru');
		      }else if($pilihpasien=="pasienlama"){
		         $this->load->view('op_register_lama');
		      }else{
                         $this->load->view('op_register');
                      }
                }else{
                   $this->load->view('op_register');
                }

	}
        
	public function registerlama(){
		$this->auth->restrict();
                $this->auth->cek(2);
               
                //$this->load->helper('usia');
                
                if($_POST){
                   $key_cari = $this->input->post('key_cari');
                   $kriteria = $this->input->post('cari_pasien_lama');
                   
		   $this->load->model('Data_pasien');
		   $du = $this->Data_pasien->cari_pasien_model($key_cari,$kriteria);
		   $data['pasien_lama'] = $du;
		   $this->load->view('pasien_lama', $data);
				   
                }else{
                    $this->load->view('op_register_lama');
                }

		//$tgllahir = $this->input->post('key_cari');
		//$nama = $this->input->post('nama');
		//echo $nama;
		//$query2 = $this->em->createQuery("SELECT p FROM models\Pasien p WHERE p.nama_pasien='nama'");
                //$dt = $query2->getResult();
		//$datadata['reglama'] = $dt;
		//$this->load->view('reglama', $datadata);
	}
	public function cek_registerlama($id_pasien){
				$this->auth->restrict();
                $this->auth->cek(2);
               
            $this->load->model('Data_pasien');
            $cp = $this->Data_pasien->cek_pasienlama($id_pasien);
			$data['pasien_lama'] = $cp;
			$this->load->view('data_pasien_lama', $data);
   
	}
	public function registerbaru(){
	         $this->auth->restrict();
                 $this->auth->cek(2);

                /**
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('tgllahir', 'tgllahir', 'required');
		$this->form_validation->set_rules('umur', 'umur', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('telepon', 'telepon', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
                **/
                if($_POST ['register'] == 'register'){
		if ($this->form_validation->run('pasreg_baru') == FALSE)
		{
			$this->load->view('op_register_baru');
		}
		else
		{
           
			$nama = $this->input->post('nama');
			$tmpt_lhr = $this->input->post('tmpt_lahir');
			$tgl_lhr = $this->input->post('tgl_lahir');
			$bln_lhr = $this->input->post('bln_lahir');
			$th_lhr = $this->input->post('th_lahir');
			$jns_kelamin = $this->input->post('jns_kelamin');
			$alamat = $this->input->post('alamat');
                        $telepon = $this->input->post('telepon');
                        $status = $this->input->post('status');

                        if(((($bln_lhr==4)||($bln_lhr==6)||($bln_lhr==9)||($bln_lhr==11))&&($tgl_lhr==31))||
                          (($bln_lhr==2)&&($th_lhr%4==0)&&(($tgl_lhr==30)||($tgl_lhr==31)))||
                          (($bln_lhr==2)&&($th_lhr%4!=0)&&(($tgl_lhr==29)||($tgl_lhr==30)||($tgl_lhr==31)))){
                                 if((($bln_lhr==4)||($bln_lhr==6)||($bln_lhr==9)||($bln_lhr==11))&&($tanggal==31)){

                                 }
                          if(($bln_lhr==2)&&($th_lhr%4==0)&&(($tgl_lhr==30)||($tgl_lhr==31))){

                          }
                            if(($bln_lhr==2)&&($th_lhr%4!=0)&&(($tgl_lhr==29)||($tgl_lhr==30)||($tgl_lhr==31))){

                            }
                        }else{
                           //mysql_query("insert into tanggal(terpilih) values ('$tahun-$bulan-$tanggal')");
                           $tanggal_lahir = $th_lhr."-".$bln_lhr."-".$tgl_lhr;
                        }

			$this->load->model('Data_pasien');
			 
            $rp = $this->Data_pasien->reg_pasien($nama, $tmpt_lhr, $tanggal_lahir, $jns_kelamin, $alamat, $telepon, $status);
			
			$lp = $this->Data_pasien->cr_pasien($nama, $tmpt_lhr, $tanggal_lahir, $jns_kelamin, $alamat, $telepon, $status);
			$data['pasien_lama'] = $lp;
			$this->load->view('data_pasien_lama', $data);
		}
             }
	}
}