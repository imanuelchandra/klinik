<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apotek extends CI_Controller {

        public function  __construct() {
                  parent::__construct();
		  $this->load->library('form_validation');
		  //$this->load->library('auth');
		  $this->load->library('pagination');
        }

		public function index() {
		$this->load->view('apotek');
		}

		public function inputobat() {
		$this->load->model('Data_obat');
		$data['dt_golongan'] = $this->Data_obat->golongan_model();
		$this->load->view('input_obat',$data);
		}

		public function inputresult() {
		//$this->auth->restrict();
         //       $this->auth->cek(2);
		
		$this->form_validation->set_rules('namaobat', 'namaobat', 'required');
		$this->form_validation->set_rules('golongan', 'golongan', 'required');
		$this->form_validation->set_rules('stokmasuk', 'stokmasuk', 'required');
		$this->form_validation->set_rules('isibox', 'isibox', 'required');
		$this->form_validation->set_rules('hargabelibox', 'hargabelibox', 'required');
		$this->form_validation->set_rules('tgl_exp', 'tgl_exp', 'required');
		$this->form_validation->set_rules('bln_exp', 'bln_exp', 'required');
		$this->form_validation->set_rules('th_exp', 'th_exp', 'required');
		$this->form_validation->set_rules('apotek', 'apotek', 'required');
		
		 if($_POST){
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('input_obat');
		}
		else
		{
		$nama_obat= $this->input->post('namaobat');
		$golongan = $this->input->post('golongan');
		$stok_masuk = $this->input->post('stokmasuk');
		$isi_box = $this->input->post('isibox');
		$harga_beli_box = $this->input->post('hargabelibox');
		$harga_beli_satuan = $this->input->post('hargabelisatuan');
		$harga_jual_satuan = $this->input->post('hargajual');
		$tgl_exp = $this->input->post('tgl_exp');
		$bln_exp = $this->input->post('bln_exp');
		$th_exp = $this->input->post('th_exp');
		$nama_apotek = $this->input->post('apotek');
		
		if(((($bln_exp==4)||($bln_exp==6)||($bln_exp==9)||($bln_exp==11))&&($tgl_exp==31))||
                          (($bln_exp==2)&&($th_exp%4==0)&&(($tgl_exp==30)||($tgl_exp==31)))||
                          (($bln_exp==2)&&($th_exp%4!=0)&&(($tgl_exp==29)||($tgl_exp==30)||($tgl_exp==31)))){
                                 if((($bln_exp==4)||($bln_exp==6)||($bln_exp==9)||($bln_exp==11))&&($tanggal==31)){

                                 }
                          if(($bln_exp==2)&&($th_exp%4==0)&&(($tgl_exp==30)||($tgl_exp==31))){

                          }
                            if(($bln_exp==2)&&($th_exp%4!=0)&&(($tgl_exp==29)||($tgl_exp==30)||($tgl_exp==31))){

                            }
                        }else{
                           //mysql_query("insert into tanggal(terpilih) values ('$tahun-$bulan-$tanggal')");
                           $tanggal_exp = $th_exp."-".$bln_exp."-".$tgl_exp;
                        }
		$data = array(
		'nama_obat'=>$nama_obat,
		'stok_obat' => $stok_masuk,
		'harga_beli_box' => $isi_box,
		'isi_box' => $harga_beli_box,
		'harga_beli' => $harga_beli_satuan,
		'harga_jual' => $harga_jual_satuan,
		'Exp_date' => $tanggal_exp,
		'apotik' => $nama_apotek,
		'id_golongan_obat' =>$golongan
		);				
		$this->load->model('Data_obat');
		$du = $this->Data_obat->input_obat($data);
		redirect('apotek/inputobat');
		}
		}
		}
		public function delete_obat($id_obat){
		$this->load->model('Data_obat');
		$this->Data_obat->delete_obat($id_obat);
		redirect('apotek/view_data_obat');
		}
		public function delete_bnyk_obat(){
                if($_POST){
                    $pilihoption = $this->input->post('pilihoption');
				if($pilihoption=="edit"){
		         redirect('apotek/view_obat_expired');
				}else if($pilihoption=="delete"){
					$data = $_POST['id_obat'];
					$this->load->model('Data_obat');
					foreach($data as $dt) {
					$this->Data_obat->dlt_bnyk_obat($dt);
					}
					redirect('apotek/view_obat_expired');
				}else{
                    redirect('apotek/view_obat_expired');
                      }
                }else{
                   redirect('apotek/view_obat_expired');
                }
		
		}
		public function delete_bnyk_obat1(){
                if($_POST){
                    $pilihoption = $this->input->post('pilihoption');
				if($pilihoption=="edit"){
		         redirect('apotek/view_data_obat');
				}else if($pilihoption=="delete"){
					$dataobat = $_POST['id_obat'];
					$this->load->model('Data_obat');
					foreach($dataobat as $dt2) {
					$this->Data_obat->delete_obat($dt2);
					}
					redirect('apotek/view_data_obat');
				}else{
                    redirect('apotek/view_data_obat');
                      }
                }else{
                   redirect('apotek/view_data_obat');
                }
		
		}
		public function delete_obat_expired($id_obat){
		$this->load->model('Data_obat');
		$this->Data_obat->delete_obat($id_obat);
		redirect('apotek/view_obat_expired');
		}
		public function view_data_obat() {

                 $per_page = 10;
				 $this->load->model('Data_obat');
                 $data['dt_obat'] = $this->Data_obat->dataobat_model($per_page,$this->uri->segment(3));
              
				
				$num_obat = $this->Data_obat->numObat();
				
					$config['base_url'] = base_url()."index.php/apotek/view_data_obat";
				   $config['total_rows'] = $num_obat;
				   $config['per_page'] = $per_page;
				   $this->pagination->initialize($config);
                   $data2['pagination'] =  $this->pagination->create_links();
           
				//$config['base_url'] = base_url()."index.php/apotek/view_data_obat";
				//$config['total_rows'] = $num_obat;
				//$config['per_page'] = $per_page;
                //$data['dt_obat'] = $this->Data_obat->dataobat_model($this->limit, $offset, $order_column, $order_type)->result();
               
                  
				//$this->pagination->initialize($config);
                //$data['pagination'] =  $this->pagination->create_links(); 
              
				$this->load->view('data_obat', $data);
                
		}
		public function view_obat_expired() {
				
				$this->load->model('Data_obat');
				$data2['dt_exp'] = $this->Data_obat->obat_expired();
				$this->load->view('data_obat_expired', $data2);
		}
		
}