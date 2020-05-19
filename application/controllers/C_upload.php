<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload extends CI_Controller {

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


	public function upload(){
	$validasi = 0;

	$merk=$this->input->post('merk');
	$tipe=$this->input->post('tipe');
	$jenis=$this->input->post('jenis');
	$no_kendaraan=$this->input->post('nomor_kendaraan');
	$warna=$this->input->post('warna');
	$job=$this->input->post('job');

	$nama_depan = $this->input->post('nama_depan');
	$nama_belakang = $this->input->post('nama_belakang');
	$email = $this->input->post('email');
	$no_telepon = $this->input->post('no_telepon');
	$tempat_lahir = $this->input->post('tempat_lahir');
	$tgl_lahir = $this->input->post('tgl_lahir');
	$no_ktp = $this->input->post('no_ktp');


	$pesan = '';

	if ($nama_depan == '') {
            $pesan = '-Nama depan tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_depan)) {

            $pesan = $pesan.'-nama depan tidak valid\\n';
            $validasi = 1;
        }

        if($nama_belakang != ""){
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_belakang)) {
            $pesan = $pesan.'-nama belakang tidak valid\\n';
            $validasi = 1;
        }
        }
         
         
        if ($email == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }

        if($email != ''){
        	$data_email = $this->m_upload-> select_get_jumlah_where('berkas_lamaran_kerja' , array('email' => $email));
        	if($data_email != 0){
        		$pesan = $pesan.'-email sudah terdaftar,mohon ganti email anda\\n';
        		$validasi = 1;
        	}

    	}
        if ($no_telepon == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

         if (strlen($no_telepon) > 15) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        
        if($no_telepon != ''){
        	$data_telepon = $this->m_upload->select_get_no_telp_where(array('no_telepon' => $no_telepon), array('nomor_telepon' => $no_telepon),                   array('nomor_telepon' => $no_telepon));
        	if($data_telepon){
        		$pesan = $pesan.'-nomor telepon sudah terdaftar,mohon ganti nomor telepon anda\\n';
        		$validasi = 1;
        	}

    	}

        if ($tempat_lahir == '') {
            $pesan = $pesan.'-Tempat Lahir Harus diisi\\n';
            $validasi = 1;
        }

        if ($tgl_lahir == '') {
            $pesan = $pesan.'-Tanggal Lahir Harus diisi\\n';
            $validasi = 1;
        }
        
        if($no_ktp != ''){
        	$data_ktp = $this->m_upload-> select_get_jumlah_where('berkas_lamaran_kerja' , array('no_ktp' => $no_ktp));
        	if($data_ktp != 0){
        		$pesan = $pesan.'-no. ktp sudah terdaftar,silahkan koreksi kembali nomor ktp anda\\n';
        		$validasi = 1;
        	}

    	}

        if ($no_ktp == '') {
            $pesan = $pesan.'-Nomor KTP Harus diisi\\n';
            $validasi = 1;
        }     	

	$allowed =  array('gif','png' ,'jpg' ,'jpeg' ,'GIF' , 'PNG' , 'JPG' , 'JPEG');


	$nama_ktp = $_FILES['foto_ktp']['name'];
	$ext_ktp = pathinfo($nama_ktp, PATHINFO_EXTENSION);

	$nama_stnk = $_FILES['foto_stnk']['name'];
	$ext_stnk = pathinfo($nama_stnk, PATHINFO_EXTENSION);

	$nama_sim = $_FILES['foto_sim']['name'];
	$ext_sim = pathinfo($nama_sim, PATHINFO_EXTENSION);

	$nama_diri = $_FILES['foto_diri']['name'];
	$ext_diri = pathinfo($nama_diri, PATHINFO_EXTENSION);


	if ($_FILES['foto_ktp']['name'] == '') {
     	$pesan = $pesan.'-Foto KTP tidak boleh kosong\\n';
        $validasi = 1;
 	}

	elseif($_FILES['foto_ktp']['name'] != ''){
		if(!in_array($ext_ktp,$allowed)){
			$pesan = $pesan.'-Foto KTP Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
			$validasi = 1;
		}
		elseif($_FILES['foto_ktp']['name'] != '' && $_FILES["foto_ktp"]["size"] > 1000000){
			$pesan = $pesan.'-Foto KTP Anda terlalu besar\\n';
			$validasi = 1;
		}
	}

	

	

	elseif($_FILES['foto_stnk']['name'] != ''){
		if(!in_array($ext_stnk,$allowed)){
			$pesan = $pesan.'-Foto STNK Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
			$validasi = 1;
		}
		elseif($_FILES['foto_stnk']['name'] != '' && $_FILES["foto_stnk"]["size"] > 1000000){
		$pesan = $pesan.'-Foto STNK Anda terlalu besar\\n';
		$validasi = 1;
		}

	}

	

	if ($_FILES['foto_stnk']['name'] == '' && $_FILES["foto_stnk"]["size"] == 0) {
     	$pesan = $pesan.'-Foto STNK tidak boleh kosong\\n';
        $validasi = 1;
 	}


 	if ($_FILES['foto_sim']['name'] == '') {
     	$pesan = $pesan.'-Foto SIM tidak boleh kosong\\n';
        $validasi = 1;
 	}

	elseif($_FILES['foto_sim']['name'] != '' ){
		if(!in_array($ext_sim,$allowed)){
			$pesan = $pesan.'-Foto SIM Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
			$validasi = 1;
		}
		elseif($_FILES['foto_sim']['name'] != '' && $_FILES["foto_sim"]["size"] > 1000000){
		$pesan = $pesan.'-Foto SIM Anda terlalu besar\\n';
		$validasi = 1;
		}

	}


	if($_FILES['foto_diri']['name'] != ''){
		if(!in_array($ext_diri,$allowed)){
			$pesan = $pesan.'-Foto Diri Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
			$validasi = 1;
		}
		elseif($_FILES["foto_diri"]["size"] > 1000000){
		$pesan = $pesan.'-Foto Diri Anda terlalu besar\\n';
		$validasi = 1;
	}

	}

	



	if ($merk == '') {
            $pesan = $pesan.'-Merk Kendaraan Harus diisi\\n';
            $validasi = 1;
        }

        if ($tipe == '') {
            $pesan = $pesan.'-Tipe Kendaraan Harus diisi\\n';
            $validasi = 1;
        }

        if ($no_kendaraan == '') {
            $pesan = $pesan.'-Nomor Kendaraan Harus diisi\\n';
            $validasi = 1;
        }

        if ($warna == '') {
            $pesan = $pesan.'-Warna Kendaraan Harus diisi\\n';
            $validasi = 1;
        }

	if($validasi == 1){
		
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
		</script>";
	}

	elseif($validasi == 0){
	
	$foto_ktp = $this->input->post('foto_ktp');
	$foto_stnk = $this->input->post('foto_stnk');
	$foto_sim = $this->input->post('foto_sim');
	$foto_diri = $this->input->post('foto_diri');





	$id_kendaraan = $this->m_upload->select_get_jumlah('kendaraan');
	$id_kendaraan = $id_kendaraan+1;
	$data_insert = array('id' => $id_kendaraan,
						 'merek' => $merk,
						 'tipe' => $tipe,
						 'jenis' => $jenis,
						 'nomor_kendaraan' => $no_kendaraan,
						 'warna' => $warna);

	$insert_kendaraan = $this->m_upload->insert('kendaraan', $data_insert);

	if($insert_kendaraan){
	
	$id_lamaran = $this->m_upload->select_get_jumlah('berkas_lamaran_kerja');
	$id_lamaran = $id_lamaran+1;
	$data = $this->m_upload->select_table_order_limit('*','kendaraan' , 'id' , 1);
	$data_lamaran = array('nomor' => $id_lamaran,
						  'nama_depan' => $nama_depan,
						  'nama_belakang' => $nama_belakang,
						  'email' => $email,
						  'no_telepon' => $no_telepon,
						  'tempat_lahir' => $tempat_lahir,
						  'tgl_lahir' => $tgl_lahir,
						  'no_ktp' => $no_ktp,
						  'kendaraan' => $data[0]['id'],
						  'job' => $job,
						  'foto_ktp' => '',
						  'foto_stnk' => '',
						  'foto_sim' => '',
						  'foto_diri' => '',
						  'is_valid' => 'no'
						  );
		$insert_lamaran = $this->m_upload->insert('berkas_lamaran_kerja', $data_lamaran);

	if($insert_lamaran){
		$data_berkas = $this->m_upload->select_where('*' , 'berkas_lamaran_kerja', 'no_ktp', $no_ktp);

		
         	$foto_ktp = 'ktp_'.$data_berkas[0]['nomor'].".".$ext_ktp;
         	$config['upload_path']          = 'http://gamajek.web.id/http://gamajek.web.id/asset/berkas_driver/foto_ktp/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$config['file_name']			= 'ktp_'.$data_berkas[0]['nomor'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('foto_ktp');
        
         	$foto_stnk = 'stnk_'.$data_berkas[0]['nomor'].".".$ext_stnk;
         	$config1['upload_path']          = 'http://gamajek.web.id/asset/berkas_driver/foto_stnk/';
			$config1['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$config1['file_name']			= 'stnk_'.$data_berkas[0]['nomor'];
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->upload->do_upload('foto_stnk');
        
         	$foto_sim = 'sim_'.$data_berkas[0]['nomor'].".".$ext_sim;

         	$sim['upload_path']          = 'http://gamajek.web.id/asset/berkas_driver/foto_sim/';
			$sim['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$sim['file_name']			= 'sim_'.$data_berkas[0]['nomor'];
			$this->load->library('upload', $sim);
			$this->upload->initialize($sim);
			$this->upload->do_upload('foto_sim');
       

        if($_FILES['foto_diri']['name'] == '' && $_FILES["foto_diri"]["size"] == 0){
         	$foto_diri = "anonym.jpg";
        }
        
        else{
         	$foto_diri = 'diri_'.$data_berkas[0]['nomor'].".".$ext_diri;

         	$diri['upload_path']          = 'http://gamajek.web.id/asset/berkas_driver/foto_diri/';
			$diri['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$diri['file_name']			= 'diri_'.$data_berkas[0]['nomor'];
			$this->load->library('upload', $diri);
			$this->upload->initialize($diri);
			$this->upload->do_upload('foto_diri');
        }


		
		$data_foto = array('foto_ktp' => $foto_ktp,
						  'foto_stnk' => $foto_stnk,
						  'foto_sim' => $foto_sim,
						  'foto_diri' => $foto_diri
						  );
		// print_r($data_berkas);

		$insert_foto = $this->m_upload->update('nomor', $data_berkas[0]['nomor'], 'berkas_lamaran_kerja', $data_foto);

			
		$this->session->unset_userdata('form_isi'); 
    	$this->session->set_userdata('form_isi', 1);
    	redirect($this->input->post('redirect'));
	}
	}
	

	

	}
		
		
	}



	public function upload_mmassage(){
		$validasi = 0;

		$nama_lengkap	= $this->input->post('nama_lengkap');
		$jk			 	= $this->input->post('jk');
		$no_hp			= $this->input->post('no_hp');
		$no_ktp			= $this->input->post('no_ktp');
		$email			= $this->input->post('email');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$alamat_tinggal	= $this->input->post('alamat_tinggal');
		$kecamatan		= $this->input->post('kecamatan');
		$kota			= $this->input->post('kota');
		$pengalaman		= $this->input->post('pengalaman');
		$area_kerja		= $this->input->post('area_kerja');
		$pekerjaan_terakhir	= $this->input->post('pekerjaan_terakhir');
		$telepon_keluarga	= $this->input->post('telepon_keluarga');
		$job=$this->input->post('job');


		$pesan = '';

		if ($nama_lengkap == '') {
            $pesan = '-Nama depan tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_lengkap)) {

            $pesan = $pesan.'-nama depan tidak valid\\n';
            $validasi = 1;
        }

        if ($jk == '') {
            $pesan = $pesan.'-Jenis Kelamin tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($no_hp == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

        if (strlen($no_hp) > 15) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        
       if($no_hp != ''){
        	$data_telepon = $this->m_upload->select_get_no_telp_where(array('no_telepon' => $no_hp), array('nomor_telepon' => $no_hp),                   array('nomor_telepon' => $no_hp));
        	if($data_telepon){
        		$pesan = $pesan.'-nomor telepon sudah terdaftar,mohon ganti nomor telepon anda\\n';
        		$validasi = 1;
        	}

    	}
        
        if($no_ktp != ''){
        	$data_ktp = $this->m_upload-> select_get_jumlah_where('pendaftaran_mmassage' , array('nomor_ktp' => $no_ktp));
        	if($data_ktp != 0){
        		$pesan = $pesan.'-no. ktp sudah terdaftar , silahkan cek kembali nomor ktp anda\\n';
        		$validasi = 1;
        	}

    	}
        
        if ($no_ktp == '') {
            $pesan = $pesan.'-Nomor KTP Harus diisi\\n';
            $validasi = 1;
        }

        if ($email == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }
        
        if($email != ''){
        	$data_email = $this->m_upload-> select_get_jumlah_where('pendaftaran_mmassage' , array('email' => $email));
        	if($data_email != 0){
        		$pesan = $pesan.'-email sudah terdaftar,mohon ganti email anda\\n';
        		$validasi = 1;
        	}

    	}

       

        if ($tempat_lahir == '') {
            $pesan = $pesan.'-Tempat Lahir Harus diisi\\n';
            $validasi = 1;
        }

        if ($tgl_lahir == '') {
            $pesan = $pesan.'-Tanggal Lahir Harus diisi\\n';
            $validasi = 1;
        }

        if ($_FILES["foto_ktp"]["size"] == 0) {
     		 $pesan = $pesan.'-Ukuran foto ktp tidak sesuai\\n';
            $validasi = 1;
 		}

        if ($alamat_tinggal == '') {
            $pesan = $pesan.'-Alamat Harus diisi\\n';
            $validasi = 1;
        }

        if ($kecamatan == '') {
            $pesan = $pesan.'-Kecamatan Harus diisi\\n';
            $validasi = 1;
        }

        if ($kota == '') {
            $pesan = $pesan.'-Kota Harus diisi\\n';
            $validasi = 1;
        }

        if ($pengalaman == '') {
            $pesan = $pesan.'-Pengalaman Harus diisi\\n';
            $validasi = 1;
        }
        
        if ($area_kerja == '0') {
            $pesan = $pesan.'-area kerja Harus diisi\\n';
            $validasi = 1;
        }

        if ($pekerjaan_terakhir == '') {
            $pesan = $pesan.'-pekerjaan terakhir Harus diisi\\n';
            $validasi = 1;
        }

        if ($telepon_keluarga == '') {
            $pesan = $pesan.'-telepon keluarga harus diisi \\n';
            $validasi = 1;
        }

        if (strlen($telepon_keluarga) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        
        if($telepon_keluarga != ''){
        	$data_telepon = $this->m_upload-> select_get_jumlah_where('pendaftaran_mmassage' , array('nama_telepon_keluarga' => $telepon_keluarga));
        	if($data_telepon != 0){
        		$pesan = $pesan.'-nomor telepon keluarga sudah terdaftar,mohon ganti nomor telepon keluarga anda\\n';
        		$validasi = 1;
        	}

    	}

        // if ($jenis_pijat == '') {
        //     $pesan = $pesan.'-jenis pijat harus diisi \\n';
        //     $validasi = 1;
        // }

        $allowed =  array('gif','png' ,'jpg' ,'JPG', 'PNG');

        $nama_ktp = $_FILES['foto_ktp']['name'];
		$ext_ktp = pathinfo($nama_ktp, PATHINFO_EXTENSION);

		if ($_FILES['foto_ktp']['name'] == '') {
     	$pesan = $pesan.'-Foto KTP tidak boleh kosong\\n';
        $validasi = 1;
 		}

		elseif($_FILES['foto_ktp']['name'] != ''){
			if(!in_array($ext_ktp,$allowed)){
				$pesan = $pesan.'-Foto KTP Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
				$validasi = 1;
			}
			elseif($_FILES['foto_ktp']['name'] != '' && $_FILES["foto_ktp"]["size"] > 1000000){
				$pesan = $pesan.'-Foto KTP Anda terlalu besar\\n';
				$validasi = 1;
			}	
	}
		$nama_diri = $_FILES['foto_diri']['name'];
		$ext_diri = pathinfo($nama_diri, PATHINFO_EXTENSION);

		if ($_FILES['foto_diri']['name'] == '') {
     		$pesan = $pesan.'-Foto diri tidak boleh kosong\\n';
        	$validasi = 1;
 		}

		elseif($_FILES['foto_diri']['name'] != ''){
			if(!in_array($ext_diri,$allowed)){
				$pesan = $pesan.'-Foto Diri Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
				$validasi = 1;
			}
			elseif($_FILES["foto_diri"]["size"] > 1000000){
				$pesan = $pesan.'-Foto Diri Anda terlalu besar\\n';
				$validasi = 1;
			}
		}

		if($validasi == 1){
			// print_r($pesan);
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
		</script>";
		}

		elseif($validasi == 0){
			$jenis_pijat = $this->input->post('jenis_pijat');
			$jumlah_jenis = count($jenis_pijat);
			$tampung_jenis = '';
			for($i=0; $i < $jumlah_jenis; $i++){
				if($i == 0){
					$tampung_jenis = $_POST['jenis_pijat'][$i];
				}
				if($i != 0){
					$tampung_jenis = $tampung_jenis.','.$_POST['jenis_pijat'][$i];
				}
			}

			// print_r($jenis_pijat);
			// print_r($tampung_jenis);

			$data_insert = array('nama_lengkap' => $nama_lengkap,
								 'nomor_telepon' => $no_hp,
								 'email' => $email,
								 'tanggal_lahir' => $tgl_lahir,
								 'jenis_kelamin' => $jk,
								 'nomor_ktp'	=> $no_ktp,
								 'tempat_lahir' => $tempat_lahir,
								 'alamat_tinggal' => $alamat_tinggal,
								 'kecamatan' => $kecamatan,
								 'kota' => $kota,
								 'pengalaman_pijat' => $pengalaman,
								 'keahlian_pijat' => $tampung_jenis,
								 'area_kerja' => $area_kerja,
								 'pekerjaan_terakhir' => $pekerjaan_terakhir,
								 'nama_telepon_keluarga' =>$telepon_keluarga,
								 'foto_ktp' => '',
								 'foto_diri' => '',
								 'job'		=> $job,
								 'is_valid' => 0
				);
			$insert_lamaran = $this->m_upload->insert('pendaftaran_mmassage', $data_insert);

			if($insert_lamaran){
				$data_berkas = $this->m_upload->select_table_order_limit('*','pendaftaran_mmassage' , 'nomor' , 1);
				$data_foto = array('foto_ktp' => 'ktp_'.$data_berkas[0]['nomor'].".".$ext_ktp,
						   'foto_diri' => 'diri_'.$data_berkas[0]['nomor'].".".$ext_diri);
				$insert_foto = $this->m_upload->update('nomor', $data_berkas[0]['nomor'], 'pendaftaran_mmassage', $data_foto);
				if($insert_foto){
						$config['upload_path']          = 'http://gamajek.web.id/asset/berkas_mmassage/foto_ktp/';
						$config['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						// $config['max_size']             = 100;
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$config['file_name']			= 'ktp_'.$data_berkas[0]['nomor'];
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('foto_ktp');
						
						$diri['upload_path']          = 'http://gamajek.web.id/asset/berkas_mmassage/foto_diri/';
						$diri['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						$diri['file_name']			= 'diri_'.$data_berkas[0]['nomor'];
						$this->load->library('upload', $diri);
						$this->upload->initialize($diri);
						$this->upload->do_upload('foto_diri');

						
    					$this->session->set_userdata('form_isi', 1);
    					redirect($this->input->post('redirect'));
				}

			}

		}
	}


	public function upload_mservice(){
		$validasi = 0;

		$nama_lengkap	= $this->input->post('nama_lengkap');
		$no_ktp 		= $this->input->post('no_ktp');
		$no_telepon 	= $this->input->post('no_telepon');
		$email 			= $this->input->post('email');
		$alamat 		= $this->input->post('alamat');
		$kecamatan 		= $this->input->post('kecamatan');
		$kota 			= $this->input->post('kota');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tgl_lahir 		= $this->input->post('tgl_lahir');
		$peralatan		= $this->input->post('peralatan');
		$keahlian		= $this->input->post('keahlian');
		$area_kerja		= $this->input->post('area_kerja');
		$job			= $this->input->post('job');

		$pesan = "";

		if ($nama_lengkap == '') {
            $pesan = '-Nama depan tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_lengkap)) {

            $pesan = $pesan.'-nama depan tidak valid\\n';
            $validasi = 1;
        }
        
        if($no_ktp != ''){
        	$data_ktp = $this->m_upload-> select_get_jumlah_where('pendaftaran_acservice' , array('nomor_ktp' => $no_ktp));
        	if($data_ktp != 0){
        		$pesan = $pesan.'-no. ktp sudah terdaftar\\n';
        		$validasi = 1;
        	}

    	}

        if ($no_ktp == '') {
            $pesan = $pesan.'-Nomor KTP Harus diisi\\n';
            $validasi = 1;
        }

        if ($_FILES["foto_ktp"]["size"] == 0) {
     		 $pesan = $pesan.'-Ukuran foto ktp tidak sesuai\\n';
            $validasi = 1;
 		}

        if ($no_telepon == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }
        

        if($no_telepon != ''){
        	$data_telepon = $this->m_upload->select_get_no_telp_where(array('no_telepon' => $no_telepon), array('nomor_telepon' => $no_telepon),                   array('nomor_telepon' => $no_telepon));
        	if($data_telepon){
        		$pesan = $pesan.'-nomor telepon sudah terdaftar,mohon ganti nomor telepon anda\\n';
        		$validasi = 1;
        	}

    	}

        if (strlen($no_telepon) > 15) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }

        if ($email == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }
        
        if($email != ''){
        	$data_email = $this->m_upload-> select_get_jumlah_where('pendaftaran_acservice' , array('email' => $email));
        	if($data_email != 0){
        		$pesan = $pesan.'-email sudah terdaftar,mohon ganti email anda\\n';
        		$validasi = 1;
        	}

    	}
        
       	if ($alamat == '') {
            $pesan = $pesan.'-Alamat Harus diisi\\n';
            $validasi = 1;
        }

        if ($kecamatan == '') {
            $pesan = $pesan.'-Kecamatan Harus diisi\\n';
            $validasi = 1;
        }

        if ($kota == '') {
            $pesan = $pesan.'-Kota Harus diisi\\n';
            $validasi = 1;
        }

       
       

        if ($tempat_lahir == '') {
            $pesan = $pesan.'-Tempat Lahir Harus diisi\\n';
            $validasi = 1;
        }

        if ($tgl_lahir == '') {
            $pesan = $pesan.'-Tanggal Lahir Harus diisi\\n';
            $validasi = 1;
        }


        if ($peralatan == '') {
            $pesan = $pesan.'-Peralatan Harus diisi minimal 1\\n';
            $validasi = 1;
        }
        
        if ($keahlian == '') {
            $pesan = $pesan.'-keahlian Harus diisi minimal 1\\n';
            $validasi = 1;
        }

         if ($area_kerja == '0') {
            $pesan = $pesan.'-area kerja Harus diisi\\n';
            $validasi = 1;
        }

        $allowed =  array('gif','png' ,'jpg' ,'jpeg' ,'GIF' , 'PNG' , 'JPG' , 'JPEG');
        $nama_ktp = $_FILES['foto_ktp']['name'];
		$ext_ktp = pathinfo($nama_ktp, PATHINFO_EXTENSION);

		if(!in_array($ext_ktp,$allowed)){
			$pesan = $pesan.'-Berkas Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang';
			$validasi = 1;
		} $allowed =  array('gif','png' ,'jpg' ,'JPG', 'PNG');

        $nama_ktp = $_FILES['foto_ktp']['name'];
		$ext_ktp = pathinfo($nama_ktp, PATHINFO_EXTENSION);

		if ($_FILES['foto_ktp']['name'] == '') {
     	$pesan = $pesan.'-Foto KTP tidak boleh kosong\\n';
        $validasi = 1;
 		}

		elseif($_FILES['foto_ktp']['name'] != ''){
			if(!in_array($ext_ktp,$allowed)){
				$pesan = $pesan.'-Foto KTP Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
				$validasi = 1;
			}
			elseif($_FILES['foto_ktp']['name'] != '' && $_FILES["foto_ktp"]["size"] > 1000000){
				$pesan = $pesan.'-Foto KTP Anda terlalu besar\\n';
				$validasi = 1;
			}	
	}
		$nama_diri = $_FILES['foto_diri']['name'];
		$ext_diri = pathinfo($nama_diri, PATHINFO_EXTENSION);

		if ($_FILES['foto_diri']['name'] == '') {
     		$pesan = $pesan.'-Foto diri tidak boleh kosong\\n';
        	$validasi = 1;
 		}

		elseif($_FILES['foto_diri']['name'] != ''){
			if(!in_array($ext_diri,$allowed)){
				$pesan = $pesan.'-Foto Diri Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang\\n';
				$validasi = 1;
			}
			elseif($_FILES["foto_diri"]["size"] > 1000000){
				$pesan = $pesan.'-Foto Diri Anda terlalu besar\\n';
				$validasi = 1;
			}
		}

		if($validasi == 1){
			// print_r($pesan);
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
		</script>";
		}

		elseif($validasi == 0){
			$peralatan = $this->input->post('peralatan');
			$jumlah_jenis = count($peralatan);
			$tampung_peralatan = '';
			for($i=0; $i < $jumlah_jenis; $i++){
				if($i == 0){
					$tampung_peralatan = $peralatan[$i];
				}
				else{
					$tampung_peralatan = $tampung_peralatan.','.$peralatan[$i];
				}
			}
			$keahlian = $this->input->post('keahlian');
			$jumlah_keahlian = count($keahlian);
			$tampung_keahlian = '';
			for($i=0; $i < $jumlah_keahlian; $i++){
				if($i == 0){
					$tampung_keahlian = $keahlian[$i];
				}
				else{
					$tampung_keahlian = $tampung_keahlian.','.$keahlian[$i];
				}
				
			}
			
			$data_insert = array( 'nama_lengkap' => $nama_lengkap,
								  'nomor_ktp'	 => $no_ktp,
								  'nomor_telepon'=> $no_telepon,
								  'email'		 => $email,
								  'alamat_tinggal'=> $alamat,
								  'kecamatan_tinggal' => $kecamatan,
								  'kota_tinggal'	  => $kota,
								  'tempat_lahir'	  => $tempat_lahir,
								  'tanggal_lahir' => $tgl_lahir,
								  'peralatan'		  => $tampung_peralatan,
								  'keahlian'		  => $tampung_keahlian,
								  'area_kerja'		  => $area_kerja,
								  'foto_ktp' => '',
								  'job'		=> $job,
								  'is_valid' => 0,
								  'foto_diri' => ''
				);
			$insert_lamaran = $this->m_upload->insert('pendaftaran_acservice', $data_insert);
			if($insert_lamaran){
				$data_berkas = $this->m_upload->select_table_order_limit('*','pendaftaran_acservice' , 'nomor' , 1);
				$data_foto = array('foto_ktp' => 'ktp_'.$data_berkas[0]['nomor'].".".$ext_ktp,
						   'foto_diri' => 'diri_'.$data_berkas[0]['nomor'].".".$ext_diri);
				$insert_foto = $this->m_upload->update('nomor', $data_berkas[0]['nomor'], 'pendaftaran_acservice', $data_foto);
				if($insert_foto){
						$config['upload_path']          = 'http://gamajek.web.id/asset/berkas_mservice/foto_ktp/';
						$config['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						// $config['max_size']             = 100;
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$config['file_name']			= 'ktp_'.$data_berkas[0]['nomor'];
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('foto_ktp');
						
						$diri['upload_path']          = 'http://gamajek.web.id/asset/berkas_mservice/foto_diri/';
						$diri['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						$diri['file_name']			= 'diri_'.$data_berkas[0]['nomor'];
						$this->load->library('upload', $diri);
						$this->upload->initialize($diri);
						$this->upload->do_upload('foto_diri');

						
    					$this->session->set_userdata('form_isi', 1);
    					redirect($this->input->post('redirect'));
				}
			}

		}		
       
	}

	function upload_mfood(){
		$validasi = 0;
		// echo $this->input->post('email_penanggung_jawab');
		// echo $this->input->post('latitude');

		$nama_pemilik_restoran		= $this->input->post('nama_pemilik_restoran');
		$jenis_identitas			= $this->input->post('jenis_identitas');
		$no_identitas		 		= $this->input->post('no_identitas');
		$password1 					= $this->input->post('password1');
		$password2 					= $this->input->post('password2');
		$alamat_pemilik 			= $this->input->post('alamat_pemilik');
		$kota 						= $this->input->post('kota');
		$nama_penanggung_jawab 		= $this->input->post('nama_penanggung_jawab');
		$telepon_penanggung_jawab 	= $this->input->post('telepon_penanggung_jawab');
		$email_penanggung_jawab		= $this->input->post('email_penanggung_jawab');

		$nama_restoran 				= $this->input->post('nama_restoran');
		$alamat_restoran			= $this->input->post('alamat_restoran');
		$telepon_restoran			= $this->input->post('telepon_restoran');
		$jam_buka					= $this->input->post('jam_buka');
		$jam_tutup					= $this->input->post('jam_tutup');
		$kategori					= $this->input->post('kategori');

		$pesan = "";
		if ($nama_pemilik_restoran == '') {
            $pesan = '-Nama tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_pemilik_restoran)) {

            $pesan = $pesan.'-nama tidak valid\\n';
            $validasi = 1;
        }

        if ($jenis_identitas == '') {
            $pesan = '-Isikan Jenis Identitas\\n';
            $validasi = 1;
        }
        
        if($no_identitas != ''){
        	$data_identitas = $this->m_upload-> select_get_jumlah_where('mitra_mmart_mfood' , array('nomor_identitas' => $no_identitas));
        	if($data_identitas != 0){
        		$pesan = $pesan.'-no. identitas sudah terdaftar\\n';
        		$validasi = 1;
        	}

    	}

        if ($no_identitas == '') {
            $pesan = $pesan.'-Nomor Identitas Harus diisi\\n';
            $validasi = 1;
        }

        if($password1 != $password2){
        	$pesan = $pesan.'-Password tidak Cocok\\n';
            $validasi = 1;
        }

        if ($alamat_pemilik == '') {
            $pesan = $pesan.'-alamat pemilik Harus diisi\\n';
            $validasi = 1;
        }

        if ($kota == '') {
            $pesan = $pesan.'-kota Harus diisi\\n';
            $validasi = 1;
        }

        if ($nama_penanggung_jawab == '') {
            $pesan = $pesan.'-Nama penanggung jawab tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_penanggung_jawab)) {

            $pesan = $pesan.'-Nama penanggung jawab tidak valid\\n';
            $validasi = 1;
        }

        if ($telepon_penanggung_jawab == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

        if (strlen($telepon_penanggung_jawab) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        

        if ($email_penanggung_jawab == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }

        if (!filter_var($email_penanggung_jawab, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }
        
         if($email_penanggung_jawab != ''){
        	$data_email = $this->m_upload-> select_get_jumlah_where('mitra_mmart_mfood' , array('email_penanggung_jawab' => $email_penanggung_jawab));
        	if($data_email != 0){
        		$pesan = $pesan.'-email sudah terdaftar,mohon ganti email anda\\n';
        		$validasi = 1;
        	}

    	}

        if ($nama_restoran == '') {
            $pesan = $pesan.'-Nama restoran tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_restoran)) {

            $pesan = $pesan.'-nama restoran tidak valid\\n';
            $validasi = 1;
        }

		if ($alamat_restoran == '') {
            $pesan = $pesan.'-alamat restoran Harus diisi\\n';
            $validasi = 1;
        }

        if ($telepon_restoran == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }
        
        if($telepon_restoran != ''){
        	$data_telepon = $this->m_upload-> select_get_jumlah_where('restoran' , array('kontak_telepon' => $telepon_restoran));
        	if($data_telepon != 0){
        		$pesan = $pesan.'-nomor telepon restoran sudah terdaftar,mohon ganti nomor telepon anda\\n';
        		$validasi = 1;
        	}

    	}

 		if (strlen($telepon_restoran) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }

        if ($jam_buka == '') {
            $pesan = $pesan.'-jam buka tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($jam_tutup == '') {
            $pesan = $pesan.'-jam tutup tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($kategori == '') {
            $pesan = $pesan.'-kategori resto tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($_FILES["foto_restoran"]["size"] == 0) {
     		 $pesan = $pesan.'-Ukuran foto restoran tidak sesuai\\n';
            $validasi = 1;
 		}

        $allowed =  array('gif','png' ,'jpg' ,'jpeg' ,'GIF' , 'PNG' , 'JPG' , 'JPEG');
        $foto_restoran = $_FILES['foto_restoran']['name'];
		$ext_foto = pathinfo($foto_restoran, PATHINFO_EXTENSION);

		if(!in_array($ext_foto,$allowed)){
			$pesan = $pesan.'-Berkas Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang';
			$validasi = 1;
		}

        if($validasi == 1){
			// print_r($pesan);
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
			  </script>";
		}

		elseif($validasi == 0){
			$deskripsi_resto	= $this->input->post('deskripsi_resto');
			$latitude 			= $this->input->post('latitude');
			$longitude 			= $this->input->post('longitude');
			$jenis_lapak		= $this->input->post('jenis_lapak');

			$data_insert = array('nama_resto'		=> $nama_restoran,
								 'alamat' 			=> $alamat_restoran,
								 'latitude'			=> $latitude,
								 'longitude'		=> $longitude,
								 'jam_buka'			=> $jam_buka,
								 'jam_tutup'		=> $jam_tutup,
								 'deskripsi_resto'	=> $deskripsi_resto,
								 'kategori_resto'	=> $kategori,
								 'foto_resto'		=> '',
								 'kontak_telepon'	=> $telepon_restoran
				);

			$insert_restoran = $this->m_upload->insert('restoran', $data_insert);
			if($insert_restoran){
				$data_restoran = $this->m_upload->select_table_order_limit('*','restoran' , 'id' , 1);
				$nama_foto = array('foto_resto' => 'resto_'.$data_restoran[0]['id'].".".$ext_foto);
				$insert_nama_foto = $this->m_upload->update('id', $data_restoran[0]['id'], 'restoran', $nama_foto);
				if($insert_nama_foto){
						$config['upload_path']          = 'http://gamajek.web.id/asset/berkas_mmart_mfood/foto_restoran/';
						$config['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						// $config['max_size']             = 100;
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$config['file_name']			= 'resto_'.$data_restoran[0]['id'];
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('foto_restoran');

						$data_pelapak = array(
								'nama_pemilik'				=> $nama_pemilik_restoran,
								'jenis_identitas'			=> $jenis_identitas,
								'nomor_identitas'			=> $no_identitas,
								'alamat_pemilik'			=> $alamat_pemilik,
								'kota'						=> $kota,
								'nama_penanggung_jawab'		=> $nama_penanggung_jawab,
								'email_penanggung_jawab'	=> $email_penanggung_jawab,
								'password'					=> md5($password1),
								'telepon_penanggung_jawab'	=> $telepon_penanggung_jawab,
								'jenis_lapak'				=> $jenis_lapak,
								'lapak'						=> $data_restoran[0]['id'],
								'is_valid' => 0
							);
						
						$insert_pelapak = $this->m_upload->insert('mitra_mmart_mfood', $data_pelapak);
    					$this->session->set_userdata('form_isi', 1);
    					redirect($this->input->post('redirect'));
				}
			}

		}
	}


	function upload_mmart(){
		$validasi = 0;
		// echo $this->input->post('email_penanggung_jawab');
		// echo $this->input->post('latitude');

		$nama_pemilik_toko			= $this->input->post('nama_pemilik_toko');
		$jenis_identitas			= $this->input->post('jenis_identitas');
		$no_identitas		 		= $this->input->post('no_identitas');
		$password1 					= $this->input->post('password1');
		$password2 					= $this->input->post('password2');
		$alamat_pemilik 			= $this->input->post('alamat_pemilik');
		$kota 						= $this->input->post('kota');
		$nama_penanggung_jawab 		= $this->input->post('nama_penanggung_jawab');
		$telepon_penanggung_jawab 	= $this->input->post('kota');
		$email_penanggung_jawab		= $this->input->post('email_penanggung_jawab');

		$nama_toko 					= $this->input->post('nama_toko');
		$alamat_toko				= $this->input->post('alamat_toko');
		$telepon_toko				= $this->input->post('telepon_toko');
		$jam_buka					= $this->input->post('jam_buka');
		$jam_tutup					= $this->input->post('jam_tutup');
		$kategori					= $this->input->post('kategori');

		$pesan = "";
		if ($nama_pemilik_toko == '') {
            $pesan = '-Nama tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_pemilik_toko)) {

            $pesan = $pesan.'-nama tidak valid\\n';
            $validasi = 1;
        }

        if ($jenis_identitas == '') {
            $pesan = '-Isikan Jenis Identitas\\n';
            $validasi = 1;
        }
        
        if($no_identitas != ''){
        	$data_identitas = $this->m_upload-> select_get_jumlah_where('mitra_mmart_mfood' , array('nomor_identitas' => $no_identitas));
        	if($data_identitas != 0){
        		$pesan = $pesan.'-no. indentitas sudah terdaftar\\n';
        		$validasi = 1;
        	}

    	}

        if ($no_identitas == '') {
            $pesan = $pesan.'-Nomor Identitas Harus diisi\\n';
            $validasi = 1;
        }

        if($password1 != $password2){
        	$pesan = $pesan.'-Password tidak Cocok\\n';
            $validasi = 1;
        }

        if ($alamat_pemilik == '') {
            $pesan = $pesan.'-alamat pemilik Harus diisi\\n';
            $validasi = 1;
        }

        if ($kota == '') {
            $pesan = $pesan.'-kota Harus diisi\\n';
            $validasi = 1;
        }

        if ($nama_penanggung_jawab == '') {
            $pesan = $pesan.'-Nama penanggung jawab tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_penanggung_jawab)) {

            $pesan = $pesan.'-Nama penanggung jawab tidak valid\\n';
            $validasi = 1;
        }

        if ($telepon_penanggung_jawab == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

        if (strlen($telepon_penanggung_jawab) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }

        if ($email_penanggung_jawab == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }

        if (!filter_var($email_penanggung_jawab, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }
        
        if($email_penanggung_jawab != ''){
        	$data_email = $this->m_upload-> select_get_jumlah_where('mitra_mmart_mfood' , array('email_penanggung_jawab' => $email_penanggung_jawab));
        	if($data_email != 0){
        		$pesan = $pesan.'-email sudah terdaftar,mohon ganti email anda\\n';
        		$validasi = 1;
        	}

    	}

        if ($nama_toko == '') {
            $pesan = $pesan.'-Nama toko tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama_toko)) {

            $pesan = $pesan.'-nama toko tidak valid\\n';
            $validasi = 1;
        }

		if ($alamat_toko == '') {
            $pesan = $pesan.'-alamat toko Harus diisi\\n';
            $validasi = 1;
        }

        if ($telepon_toko == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

 		if (strlen($telepon_toko) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        
        if($telepon_toko != ''){
        	$data_telepon = $this->m_upload-> select_get_jumlah_where('toko' , array('kontak_telepon' => $telepon_toko));
        	if($data_telepon != 0){
        		$pesan = $pesan.'-nomor telepon toko sudah terdaftar,mohon ganti nomor telepon anda\\n';
        		$validasi = 1;
        	}

    	}

        if ($jam_buka == '') {
            $pesan = $pesan.'-jam buka tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($jam_tutup == '') {
            $pesan = $pesan.'-jam tutup tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($kategori == '') {
            $pesan = $pesan.'-kategori toko tidak boleh kosong\\n';
            $validasi = 1;
        }

        if ($_FILES["foto_toko"]["size"] == 0) {
     		 $pesan = $pesan.'-Ukuran foto toko tidak sesuai\\n';
            $validasi = 1;
 		}

        $allowed =  array('gif','png' ,'jpg' ,'jpeg' ,'GIF' , 'PNG' , 'JPG' , 'JPEG');
        $foto_toko = $_FILES['foto_toko']['name'];
		$ext_foto = pathinfo($foto_toko, PATHINFO_EXTENSION);

		if(!in_array($ext_foto,$allowed)){
			$pesan = $pesan.'-Berkas Anda tidak sesuai / tidak cocok! Mohon Dicek Ulang';
			$validasi = 1;
		}

        if($validasi == 1){
			// print_r($pesan);
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
			  </script>";
		}

		elseif($validasi == 0){
			$deskripsi_toko		= $this->input->post('deskripsi_toko');
			$latitude 			= $this->input->post('latitude');
			$longitude 			= $this->input->post('longitude');
			$jenis_lapak		= $this->input->post('jenis_lapak');

			$data_insert = array('nama_toko'		=> $nama_toko,
								 'alamat' 			=> $alamat_toko,
								 'latitude'			=> $latitude,
								 'longitude'		=> $longitude,
								 'deskripsi'		=> $deskripsi_toko,
								 'jam_buka'			=> $jam_buka,
								 'jam_tutup'		=> $jam_tutup,
								 'kategori_toko'	=> $kategori,
								 'kontak_telepon'	=> $telepon_toko,
								 'foto_toko'		=> ''
								 
				);

			$insert_toko = $this->m_upload->insert('toko', $data_insert);
			if($insert_toko){
				$data_toko = $this->m_upload->select_table_order_limit('*','toko' , 'id' , 1);
				$nama_foto = array('foto_toko' => 'toko_'.$data_toko[0]['id'].".".$ext_foto);
				$insert_nama_foto = $this->m_upload->update('id', $data_toko[0]['id'], 'toko', $nama_foto);
				if($insert_nama_foto){
						$config['upload_path']          = 'http://gamajek.web.id/asset/berkas_mmart_mfood/foto_toko/';
						$config['allowed_types']        = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
						// $config['max_size']             = 100;
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$config['file_name']			= 'toko_'.$data_toko[0]['id'];
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('foto_toko');

						$data_pelapak = array(
								'nama_pemilik'				=> $nama_pemilik_toko,
								'jenis_identitas'			=> $jenis_identitas,
								'nomor_identitas'			=> $no_identitas,
								'alamat_pemilik'			=> $alamat_pemilik,
								'kota'						=> $kota,
								'nama_penanggung_jawab'		=> $nama_penanggung_jawab,
								'email_penanggung_jawab'	=> $email_penanggung_jawab,
								'password'					=> md5($password1),
								'telepon_penanggung_jawab'	=> $telepon_penanggung_jawab,
								'jenis_lapak'				=> $jenis_lapak,
								'lapak'						=> $data_toko[0]['id']
							);
						
						$insert_pelapak = $this->m_upload->insert('mitra_mmart_mfood', $data_pelapak);
    					$this->session->set_userdata('form_isi', 1);
    					redirect($this->input->post('redirect'));
				}
			}

		}
	}

	function hubungi_kami(){
		$validasi = 0;
		$nama 		= $this->input->post('nama');
		$email 		= $this->input->post('email');
		$telepon 	= $this->input->post('telepon');
		$subjek 	= $this->input->post('subjek');
		$pesan_isi 	= $this->input->post('pesan');

		$pesan = "";
		if ($nama == '') {
            $pesan = '-Nama tidak boleh kosong\\n';
            $validasi = 1;
        }
         
        if (!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/",$nama)) {

            $pesan = $pesan.'-nama tidak valid\\n';
            $validasi = 1;
        }
        if ($email == '') {
            $pesan = $pesan.'-email tidak boleh kosong\\n';
            $validasi = 1;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $pesan = $pesan.'-alamat email tidak valid\\n';
            $validasi = 1;
        }

		if ($telepon == '') {
            $pesan = $pesan.'-No. Telepon harus diisi \\n';
            $validasi = 1;
        }

        if (strlen($telepon) > 12) {
            $pesan = $pesan.'-No. Telepon tidak valid\\n';
            $validasi = 1;
        }
        if ($subjek == '') {
            $pesan = $pesan.'-Subjek harus diisi \\n';
            $validasi = 1;
        }
        if ($pesan_isi == '') {
            $pesan = $pesan.'-pesan harus diisi \\n';
            $validasi = 1;
        }

        if($validasi == 1){
			// print_r($pesan);
		echo "<script>
				 alert('Maaf, ada kesalahan pengisian Formulir :\\n".$pesan."');
				window.history.go(-1);
			  </script>";
		}

		elseif($validasi == 0){
			$data_insert = array(
								 'nama'			=> $nama,
								 'email'		=> $email,
								 'telepon'		=> $telepon,
								 'subjek'		=> $subjek,
								 'isi_bantuan'	=> $pesan_isi
				);

			$insert_help = $this->m_upload->insert('help_general', $data_insert);
			$this->session->set_userdata('hubungi_isi', 1);
    		redirect($this->input->post('redirect'));



		}
		
	}

}

