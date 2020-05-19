<?php
class M_upload extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function read($filter=null, $limit = 0, $offset = 0, $ar_sort = null){
		return $filter;
		
	}

	function insert($namatabel, $data_insert){
			$res = $this->db->insert($namatabel, $data_insert); 
			return $res;
	}

	function update($where, $value, $namatabel, $data_update){
			$res = $this->db->update($namatabel, $data_update, array($where => $value));
			return $res;
	}

	function select_table_order_limit($row, $namatabel, $order_trigger, $limit){
			$this->db->select($row);
			$this->db->from($namatabel);
			$this->db->order_by($order_trigger,"desc");
			$this->db->limit($limit); 
			$query = $this->db->get();
			return $query->result_array();

	}

	function select($row , $namatabel){
			$this->db->select($row);
			$this->db->from($namatabel);
			$query = $this->db->get();
			return $query->result_array();
	}

	function select_where($row , $namatabel, $where, $value){
			$this->db->select($row);
			$this->db->from($namatabel);
			$this->db->where($where, $value);
			$query = $this->db->get();
			return $query->result_array();
	}

	function select_get_jumlah($namatabel){
		$query = $this->db->get($namatabel);
		return $query->num_rows();
	}

	function select_get_jumlah_where($namatabel, $data_where){
		$query = $this->db->get_where($namatabel, $data_where);
		return $query->num_rows();
	}

        function select_get_no_telp_where($data_where1, $data_where2, $data_where3){
                $query = $this->db->get_where("berkas_lamaran_kerja", $data_where1);
		if($query->num_rows() == 0){
                    $query1 = $this->db->get_where("pendaftaran_mmassage", $data_where2);
                    if($query1->num_rows() == 0){
                        $query2 = $this->db->get_where("pendaftaran_acservice", $data_where3);
                        if($query2->num_rows() == 0){
                             return FALSE;
                        }else{
                             return TRUE;
                        }
                    }else{
                        return TRUE;
                    }
                }else{
                    return TRUE;
                }
	}

	function data($row, $number,$offset , $namatabel){
		$this->db->select($row);
		$this->db->from($namatabel);
		$this->db->order_by("tanggal","desc");
		$this->db->limit($number,$offset);
		return $query = $this->db->get()->result();		
	}

	function data_where($row,$namatabel,$where,$value, $number, $offset){
		$this->db->select($row);
		$this->db->from($namatabel);
		$this->db->where($where, $value);
		$this->db->order_by("tanggal","desc");
		$this->db->limit($number,$offset);
		$query = $this->db->get();
		return $query->result(); 		
	}
	
	
	
	
	// forgot password random send email
	  public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
	
	
	public function ForgotPassword_Driver($email)
    {
        $this->db->select('email');
        $this->db->from('driver'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
    }
   
 
    public function sendpassword_driver ($data) {
     
             $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.mrriderbd.com',
            'smtp_port' => 26,
            'smtp_user' => 'info@mrriderbd.com',
            'smtp_pass' => 'mykey2019',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        
        
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from driver where email = '".$email."' ");
        $row=$query1->result_array();

    
          $passwordplain = $this->generateRandomString(6);
          $newpass['password'] = sha1($passwordplain);
          
          $this->db->where('email', $email);
          $this->db->update('driver', $newpass); 

        
         $nama='Dear '.$row[0]['nama_depan'].' '.$row[0]['nama_belakang']. "\r\n";

        
//        $this->email->set_newline("\r\n");

        $this->email->from('info@mrriderbd.com', 'Admin MR Rider');
        $this->email->to($email);
        $this->email->subject('[IMPORTANT] MR Rider Driver Reset Password Information');
        $this->email->message('
            <div style="background-color: #f9f9f9;" align="center"><br />
					  <table style="font-family: OpenSans,sans-serif; color: #666666;" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
					    <tbody>
					      <tr>
					        <td width="600" valign="top" bgcolor="#FFFFFF"><br>
					          <table style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; padding: 15px;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
					            <tbody>
					              <tr>
					                <td valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0" style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; width:100%;">
					                    <tbody>
					                      <tr>
					                        <td><p style="color: #262626; font-size: 28px; margin-top:0px;"><strong>'.$nama.'</strong></p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;">Thank you for using MR Rider Driver<br>
					                            Your password is:<b> '.$passwordplain.'<b></p>
					                            <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;">After you login to account, please replace with your new password.</p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;margin-bottom:30px;">Best Regard,<br />
					                            MR Rider Driver.</p></td>
					                      </tr>
					                    </tbody>
					                  </table></td>
					              </tr>
					               
					            </tbody>
					          </table></td>
					      </tr>
					      <tr>
					        <td style="color: #262626; padding: 20px 0; font-size: 20px; border-top:5px solid #52bfd3;" colspan="2" align="center" bgcolor="#ffffff">Copyright @2019 MR Rider App.</td>
					      </tr>
					    </tbody>
					  </table>
					</div>');
					
        $this->email->send();
          $this->session->set_flashdata('style', 'success');
          $this->session->set_flashdata('alert', 'Success !');
          $this->session->set_flashdata('message', 'Please check your email');
           redirect(base_url().'index.php/c_utama/forgot_password_driver','refresh');
    }
    


	public function ForgotPassword_Customer($email)
    {
        $this->db->select('email');
        $this->db->from('pelanggan'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
    }
   
 
    public function sendpassword_customer ($data) {
     
             $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.mrriderbd.com',
            'smtp_port' => 26,
            'smtp_user' => 'info@mrriderbd.com',
            'smtp_pass' => 'mykey2019',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        
        
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from pelanggan where email = '".$email."' ");
        $row=$query1->result_array();

    
          $passwordplain = $this->generateRandomString(6);
          $newpass['password'] = sha1($passwordplain);
          
          $this->db->where('email', $email);
          $this->db->update('pelanggan', $newpass); 

        
         $nama='Dear '.$row[0]['nama_depan'].' '.$row[0]['nama_belakang']. "\r\n";

        
//        $this->email->set_newline("\r\n");

        $this->email->from('info@mrriderbd.com', 'Admin MR Rider');
        $this->email->to($email);
        $this->email->subject('[IMPORTANT] MR Rider App Reset Password Information');
        $this->email->message('
            <div style="background-color: #f9f9f9;" align="center"><br />
					  <table style="font-family: OpenSans,sans-serif; color: #666666;" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
					    <tbody>
					      <tr>
					        <td width="600" valign="top" bgcolor="#FFFFFF"><br>
					          <table style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; padding: 15px;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
					            <tbody>
					              <tr>
					                <td valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0" style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; width:100%;">
					                    <tbody>
					                      <tr>
					                        <td><p style="color: #262626; font-size: 28px; margin-top:0px;"><strong>'.$nama.'</strong></p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;">Thank you for using MR Rider App,<br>
					                            Your password is:<b> '.$passwordplain.'<b></p>
					                            <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;">After you login to account, please replace with your new password.</p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;margin-bottom:30px;">Best Regard,<br />
					                            MR Rider App.</p></td>
					                      </tr>
					                    </tbody>
					                  </table></td>
					              </tr>
					               
					            </tbody>
					          </table></td>
					      </tr>
					      <tr>
					        <td style="color: #262626; padding: 20px 0; font-size: 20px; border-top:5px solid #52bfd3;" colspan="2" align="center" bgcolor="#ffffff">Copyright @2019 MR Rider App.</td>
					      </tr>
					    </tbody>
					  </table>
					</div>');
					
        $this->email->send();
          $this->session->set_flashdata('style', 'success');
          $this->session->set_flashdata('alert', 'Success !');
          $this->session->set_flashdata('message', 'Please check your email');
           redirect(base_url().'index.php/c_utama/forgot_password_customer','refresh');
    }
	
	
	
	

	
	
}
?>