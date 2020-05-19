<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_utama extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
		  $this->load->model('m_upload');
	}

	function index(){
		$data = $this->m_upload->select_table_order_limit('*', 'blog_content', 'tanggal', 2);
		$this->load->view('index', array('data' => $data));
		
	}

	// function cobaonepage(){
	// 	$this->load->view('cobaonepage');
	// }

	function home(){
		$data = $this->m_upload->select_table_order_limit('*', 'blog_content', 'tanggal', 2);
		$this->load->view('index', array('data' => $data));
	}



	function join(){
		$this->load->view('join');
		
	}
	
		function join_app(){
		$this->load->view('join_app');
		
	}
	
	
	
		function privacy(){
		$this->load->view('privacy_policy');
		
	}
	
		function terms_conditions(){
		$this->load->view('terms_conditions');
		
	}
	
	
		function faq(){
		$this->load->view('faq');
	}
	

	
		function promo(){
		$this->load->view('promo');
		
	}
	
		function artikel(){
		$this->load->view('artikel');
		
	}
	
	function forgot_password_driver(){
	$this->load->view('forgot_password_driver');
	}
	function forgot_password_customer(){
	$this->load->view('forgot_password_customer');
	}

	
	public function ForgotPassword_Driver()
   {
         $email = $this->input->post('email');      
         $findemail = $this->m_upload->ForgotPassword_Driver($email);  
         
         if($findemail){
          $this->m_upload->sendpassword_driver($findemail);        
           }else{
           $this->session->set_flashdata('msg',' Email not found!');
           $this->session->set_flashdata('style', 'danger');
           $this->session->set_flashdata('alert', 'Email not found!');
           $this->session->set_flashdata('message', 'Check back the registered email.');
          redirect(base_url().'index.php/c_utama/forgot_password_driver?','refresh');
      }
   }



public function ForgotPassword_Customer()
   {
         $email = $this->input->post('email');      
         $findemail = $this->m_upload->ForgotPassword_Customer($email);  
         
         if($findemail){
          $this->m_upload->sendpassword_customer($findemail);        
           }else{
           $this->session->set_flashdata('msg',' Email not found!');
           $this->session->set_flashdata('style', 'danger');
           $this->session->set_flashdata('alert', 'Email not found!');
           $this->session->set_flashdata('message', 'Check back the registered email.');
          redirect(base_url().'index.php/c_utama/forgot_password_customer?','refresh');
      }
   }
	
	
	

  

	function join_ride(){
	
		$this->load->view('join_ride', array('form' => 0 ));
	}



	function join_car(){
	
		$this->load->view('join_car', array('error' => ' ' ));
	}

	function join_box(){
		$jenis = $this->m_upload->select_where('*' , 'jenis_kendaraan', 'id >', '2');
		$this->load->view('join_box', array('jenis' => $jenis));
	}
	function join_food(){
		$jenis = $this->m_upload->select('*' , 'kategori_resto');
		$this->load->view('join_food', array('jenis' => $jenis ));
	}
	function join_mangfood_personal(){
		$this->load->view('join_food_personal', array('error' => ' ' ));
	}
	function join_food_company(){
		$this->load->view('join_food_company', array('error' => ' ' ));
	}

	function join_service(){
		$keahlian = $this->m_upload->select('*', 'mservice_jenis');
		$jenis = $this->m_upload->select('*' , 'peralatan_service');
		$area = $this->m_upload->select('*', 'cabang_perusahaan');
		$this->load->view('join_service', array('jenis' => $jenis, 'area'=> $area, 'keahlian'=>$keahlian ));
	}

	function join_massage(){
		$area = $this->m_upload->select('*', 'cabang_perusahaan');
		$jenis = $this->m_upload->select('*' , 'layanan_pijat');
		$this->load->view('join_massage', array('jenis' => $jenis, 'area' => $area ));
	}

	function join_mart(){
		$jenis = $this->m_upload->select('*' , 'kategori_toko');
		$this->load->view('join_mart', array('jenis' => $jenis ));
	}
	


	function faq_app(){
		$this->load->view('faq_app');
	}
}
