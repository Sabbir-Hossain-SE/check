<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Validatedriver extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function __construct() {
        parent::__construct();

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
    }

    public function index() {
//        echo 'validate driver';
//        $this->load->model('DataPendaftarDriver_m');
//        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getAllDataPendaftarDriver();
//        $this->datakirim['pesan'] = $this->pesan;
//
//        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function driverMotor() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarDriverMotor();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Moto';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mcar() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarMcar();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Cab';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mbox() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarMbox();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Box';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mmassage() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran pemijat

        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->getAllDataPendaftarMmassage();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Massage';

        $this->load->view('validatemmassage_view', $this->datakirim);
    }

    public function mservice() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran mekanik service
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->getAllDataPendaftarMservice();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Service';

        $this->load->view('validatemservice_view', $this->datakirim);
    }

    public function mfood() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran mekanik service
        $this->load->model('Mitra_m');
        $this->datakirim['pendaftarmitra'] = $this->Mitra_m->getPendaftarMitraMfood();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Food';

        $this->load->view('validatemfood_view', $this->datakirim);
    }

//    END OF LIST PENDAFTAR =============================================================================================================

    public function detilPelamarDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getDetilPendaftarDriver($idPelamar);
        $this->datakirim['tittle'] = $tittle;
        $this->load->view('validatedriver2_view', $this->datakirim);
    }

    public function detilPelamarMmassage($idPelamar) {
        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->getDetilPendaftarMmassage($idPelamar);
        $this->load->view('validatemmassage2_view', $this->datakirim);
    }

    public function detilPelamarMservice($idPelamar) {
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->getDetilPendaftarMservice($idPelamar);
        $this->load->view('validatemservice2_view', $this->datakirim);
    }

//    VALIDASI  ==========================================================================================================

    public function validasiDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $detil = $this->DataPendaftarDriver_m->getDetilPendaftarDriver($idPelamar);

//        UPDATE DATABASE VALID ================================
        $this->DataPendaftarDriver_m->validateDriver($idPelamar);


//        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_depan'] . " " . $detil[0]['nama_belakang'];
        $nokendaraan = $detil[0]['nomor_kendaraan'];
       // $phone = $detil[0]['no_telepon'];
        $this->emailValidasi($emailtujuan, $nama, $nokendaraan, $generatePass);


//        INSERT DATA KE TABEL DRIVER + PINDAHIN FOTO DI TABEL FOTO DRIVER ============================
        $namadepan = $detil[0]['nama_depan'];
        $namabelakang = $detil[0]['nama_belakang'];
        $noktp = $detil[0]['no_ktp'];
        $tgllahir = $detil[0]['tgl_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['no_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
        $idkendaraan = $detil[0]['kendaraan'];
        $this->DataPendaftarDriver_m->insertDriver($namadepan, $namabelakang, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, $idkendaraan);

//        Redirect page ===========
        switch ($tittle) {
            case 'MR-Moto':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->driverMotor();
                break;
            case 'MR-Cab':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->mcar();
                break;
            case 'MR-Box':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->mbox();
                break;
            case 'MR-Massage':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->mmassage();
                break;
            case 'MR-Service':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->mservice();
                break;

            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
                $this->index();
                break;
        }
    }

    public function validasiMmassage($idPelamar) {
        $this->load->model('DataPendaftarMmassage_m');
        $detil = $this->DataPendaftarMmassage_m->getDetilPendaftarMmassage($idPelamar);

        //        UPDATE DATABASE VALID ================================
        $this->DataPendaftarMmassage_m->validateMmassage($idPelamar);

        //        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_lengkap'];
        $this->emailValidasi($emailtujuan, $nama, "-", $generatePass);

        //        INSERT DATA TO DRIVER TABLE + MOVE PHOTOS IN PHOTO DRIVER TABLE ============================
        $namadepan = $detil[0]['nama_lengkap'];
        $noktp = $detil[0]['nomor_ktp'];
        $tgllahir = $detil[0]['tanggal_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['nomor_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
        $gender = $detil[0]['jenis_kelamin'];
        $keahlian = $detil[0]['keahlian_pijat'];
        $this->DataPendaftarMmassage_m->insertMmassage($namadepan, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, $gender, $keahlian);


        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
        $this->mmassage();
    }

    public function validasiMservice($idPelamar) {
        $this->load->model('DataPendaftarMservice_m');
        $detil = $this->DataPendaftarMservice_m->getDetilPendaftarMservice($idPelamar);

        //        UPDATE DATABASE VALID ================================
        $this->DataPendaftarMservice_m->validateMservice($idPelamar);

        //        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_lengkap'];
        $this->emailValidasi($emailtujuan, $nama, "-", $generatePass);

        //        INSERT DATA KE TABEL DRIVER + PINDAHIN FOTO DI TABEL FOTO DRIVER ============================
        $namadepan = $detil[0]['nama_lengkap'];
        $noktp = $detil[0]['nomor_ktp'];
        $tgllahir = $detil[0]['tanggal_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['nomor_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
//        $gender = $detil[0]['jenis_kelamin'];
        $keahlian = $detil[0]['keahlian'];
        $this->DataPendaftarMservice_m->insertMservice($namadepan, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, '1', $keahlian);


        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Applicants Successfully validated</p> <br>";
        $this->mservice();
    }

    public function validasiMfood($idMitra, $idResto) {
//        echo $idMitra;
        $this->load->model('Mitra_m');
        $this->Mitra_m->validasiMfood($idMitra, $idResto);
        $email = $this->Mitra_m->getEmailMfood($idMitra);

        $this->emailTerimaMfood($email[0]['email_penanggung_jawab']);
        
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner registration data successfully validated</p> <br>";
        $this->mfood();
    }

//                        T O L A K ================================================================================
    public function tolakDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $this->DataPendaftarDriver_m->tolakDriver($idPelamar);

        switch ($tittle) {
            case 'MR-Moto':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->driverMotor();
                break;
            case 'MR-Cab':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->mcar();
                break;
            case 'MR-Box':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->mbox();
                break;
            case 'MR-Massage':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->mmassage();
                break;
            case 'MR-Service':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->mservice();
                break;

            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
                $this->index();
                break;
        }



//        $this->load->view('validatedriver2_view', $this->datakirim);
    }

    public function tolakMmassage($idPelamar) {
//        echo $idPelamar;
        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->tolakMmassage($idPelamar);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
        $this->mmassage();
    }

    public function tolakMservice($idPelamar) {
//        echo $idPelamar;
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->tolakMservice($idPelamar);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
        $this->mservice();
    }

    public function tolakMfood() {
//        echo $idPelamar;
        $email = $this->input->post('email');
        $idmitra = $this->input->post('idmitra');
        $idresto = $this->input->post('idresto');
        $alasan = $this->input->post('alasan');
//        echo "$alasan | $idmitra | $idresto";
        //hapus data mitra & restoran
        $this->load->model('Mitra_m');
        $this->datakirim['pendaftar'] = $this->Mitra_m->tolakPendaftaranMfood($idmitra, $idresto);

        //email konfirmasi validasi
        $this->emailTolakMfood($email, $alasan);


        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Applicants Data Successfully denied</p> <br>";
        $this->mfood();
    }

//                          F U N G S I    T A M B A H A N ==============================
    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function emailValidasi($emailtujuan, $nama, $nokendaraan, $pass) {

          $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.mrriderbd.com',
            'smtp_port' => 26,
            'smtp_user' => 'info@mrriderbd.com',
            'smtp_pass' => 'mykey2019',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);


        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('info@mrriderbd.com', 'Admin MR-RIDER');
        $this->email->to($emailtujuan);
        $this->email->bcc('info.mrriderbd@gmail.com');
        $this->email->subject('Your account has been approved by MRRIDER ');
        $this->email->message("
            <html>
            <head>
           <!-- <title>Your Registration Files have been Validated by Admin</title> -->
            </head>
            <body>
            <p><h2>Welcome</h2></p>
          
           Your account has now been fully approved.<p>
            <p>
           Thank you for registering yourself as a partner of MRRIDER. Your registration data has been successfully validated by the admin of MRRIDER, please contact us to confirm.</p>

            <table>
            <tr>
                <th>Name</th>
                <th>:</th>
                <td>$nama</td>
            </tr>
            <tr>
                <th>Number Vehicle</th>
                <th>:</th>
                <td>$nokendaraan</td>
            </tr>            
            <tr>
                <th>Password</th>
                <th>:</th>
                <td>$pass</td>
            </tr>
            </table><br>           
            <p>You can login with that password, and please make changes to the password immediately by logging into our application. Please do not reply to this email.</p><br><br><br><br>

            <p>Best regards</p><br>
            <p>Admin MRRIDER </p>

            </body>
            </html>
");
        $this->email->send();
    }
    
    

    public function emailTolakMfood($email, $alasan) {
        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('info@mrriderbd.com', 'Admin MRRIDER');
        $this->email->to($email);
        $this->email->subject('[MRRIDER] Validate File Registration ');
        $this->email->message("
            <html>
            <head>
            <title>Your MR-Food registration is rejected by the admin</title>
            </head>
            <body>
            <p>Sorry Sorry your MR-Food Partner registration is unacceptable, with reason : $alasan</p>
            <br><br><br>

            <p>Best Regards</p><br><br>
            <p>Admin MRRIDER-App</p>

            </body>
            </html>
");
        $this->email->send();
    }

    public function emailTerimaMfood($email) {
        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('info@mrriderbd.com', 'Admin MRRIDER');
        $this->email->to($email);
        $this->email->subject('[GoTaxi] Validate File Registration ');
        $this->email->message("
            <html>
            <head>
            <title>Your MR-Food registration has been validated by admin</title>
            </head>
            <body>
            <p>Thank you for registering. Your registration has been validated by admin. Please visit <a href='http://gotaxi.biz/partner/'>http://gotaxi.biz/partner/</a> and login using the Email and Password you have registered</p>
            <br><br><br>

            <p>Best regards</p><br>
            <p>Admin MRRIDER </p>

            </body>
            </html>
");
        $this->email->send();
    }
    
        public function detailsDriver($idPelamar) 
        {
            $this->load->model('DataPendaftarDriver_m');
            $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getdetailsDriver($idPelamar);
            
            //var_dump(  $this->datakirim['pendaftar']);exit;
            $this->datakirim['tittle'] = '';
            $this->load->view('detailsDriver_view', $this->datakirim);
        }
        
        
            public function edit_driver_view($path,$driverid)
    {
        $data['driverid'] = $driverid;
        $data['path']     = $path;


         $this->load->view('edit_driver_photo', $data);

    }


    public function edit_driver_photo()
    {
                        
            $driverid = $this->input->post('driverid');
            $path     = $this->input->post('path');
            
            

                        $pesan          ='';
                        $validasi       = 1;
                        $allowed        =  array('gif','png' ,'jpg' ,'jpeg' ,'GIF' , 'PNG' , 'JPG' , 'JPEG');
                        $nama_ktp       = $_FILES['file']['name'];
                        $ext_ktp        = pathinfo($nama_ktp, PATHINFO_EXTENSION);

                        if ($_FILES['file']['name'] == '') 
                        {
                                $pesan          = 'Please select valid photo';
                                $validasi       = 0;
                        }

                        elseif($_FILES['file']['name'] != '')
                        {
                                if(!in_array($ext_ktp,$allowed))
                                {
                                        $pesan          = 'This photo is not appropriate! Please recheck';
                                        $validasi       = 0;
                                }
                                elseif($_FILES['file']['name'] != '' && $_FILES["file"]["size"] > 3155728)
                                {
                                        $pesan          = 'This photos are too large';
                                        $validasi       = 0;
                                }
                        }

                
                if($validasi)
                {
                        echo $config['upload_path']          = "../frontend/asset/berkas_driver/$path/";
                        $config['allowed_types']        = 'gif|png|jpg|jpeg|GIF|PNG|JPG|JPEG';       
                        $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('file'))
                        {
                                $error = array('error' => $this->upload->display_errors());
                                
                                var_dump($error);exit;
                                $pesan          = 'Please select valid photo';
                                $validasi       = 0;
                        }
                        else
                        {
                               $result['file_name'] = $this->upload->data('file_name');
                               $pesan               = 'Uploaded successfully';

                                $colum = $path;
                               if($path=='Registration')    $colum= 'vRegistration';
                               if($path=='TaxToken')        $colum= 'vTaxToken';
                               if($path=='Insurance')       $colum= 'vInsurance';

                               
                                $this->db->where('nomor', $driverid);
                                $this->db->limit(1);
                                $this->db->update('berkas_lamaran_kerja',array($colum=>$result['file_name']));

                             $validasi = 1;


                                           
                        }

                }
                
                $result['msg'] = $pesan;
                $result['flag'] = $validasi;

               redirect("validatedriver/detailsDriver/$driverid");



    }


}