<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listdriver extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function index() {

//        $this->load->model('Driver_m');
//        $this->datakirim['driver'] = $this->Driver_m->getAllDriver();
//        $this->datakirim['pesan'] = $this->pesan;
//        $this->datakirim['tittle'] = 'Driver Motor';
//
//        $this->load->view('Listdriver_view', $this->datakirim);
//        echo 'listdriver';

    redirect('dashboard');
    }

    public function driverMotor() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMotor();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Moto';
        //echo $this->db->last_query();exit;

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mcar() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMcar();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Cab';

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mbox() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllDriverMbox();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Box';

        $this->load->view('Listdriver_view', $this->datakirim);
    }

    public function mmassage() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllMmassage();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Massage';

        $this->load->view('Listmmassage_view', $this->datakirim);
    }

    public function mservice() {

        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getAllMservice();
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tittle'] = 'MR-Service';

        $this->load->view('Listmservice_view', $this->datakirim);
    }

//    =============================================================================================

    public function Resetemail($email, $pass) {


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
        $this->email->to($email);
        $this->email->subject('Your password has been reset by MRRIDER ');
        $this->email->message("<html>
            <head>
           <title>MRRIDER</title>
            </head>
            <body>
            <p><h2>Welcome</h2></p>
          
           <p>Your password has been reset.<p>
            <table>
            <tr>
                <th>Email</th>
                <th>:</th>
                <td>$email</td>
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
            </html>");
        $this->email->send();
    }

    public function resetPassword($idDriver, $namaDriver, $tittle) {

          $this->load->model('Driver_m');
        $this->datakirim['driver'] = $pass = $this->Driver_m->resetPassword($idDriver);

        $this->db->where('driver.id',$idDriver);
        $driverinfo =  $this->db->get('driver')->row();

        $this->Resetemail($driverinfo->email,$pass);

        switch ($tittle) {
            case 'MR-Moto':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->driverMotor();

                break;
            case 'MR-Cab':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->mcar();

                break;
            case 'MR-Box':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Password $namaDriver successfully reset</p> <br>";
                $this->mbox();

                break;
            case 'MR-Massage':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->mmassage();

                break;
            case 'MR-Service':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->mservice();

                break;

            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Password Driver $namaDriver successfully reset</p> <br>";
                $this->index();
                break;
        }
    }

//    ==================== detil driver + edit status ================================================
    public function detilDriver($idDriver) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $driver = $this->Driver_m->getDriver($idDriver);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($idDriver);
        $this->datakirim['transaksi'] = $this->Driver_m->getHistoryTransaksi($idDriver);
        $idkendaraan = $driver['0']['idkendaraan'];        
        $this->datakirim['driverinfo'] = $this->db->where('kendaraan',$idkendaraan)->get('berkas_lamaran_kerja')->result_array();

//var_dump($this->datakirim['driverinfo']);exit;
        $this->load->view('Listdriver2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusForm($idDriver) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $driver = $this->Driver_m->getDriver($idDriver);
        
        $idkendaraan = $driver['0']['idkendaraan'];        
        $this->datakirim['driverinfo'] = $this->db->where('kendaraan',$idkendaraan)->get('berkas_lamaran_kerja')->result_array();


        $this->load->view('Editdriver_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatus() {


//        echo $idDriver;
        $idDriver = $_POST['iddriver'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];
        $job = $_POST['job'];
        $status = $_POST['status'];
        $foto = $_POST['foto'];

        $tipekendaraan = $_POST['tipekendaraan'];
        $nokendaraan = $_POST['nokendaraan'];
        $warnakendaraan = $_POST['warnakendaraan'];
        $merekkendaraan = $_POST['merekkendaraan'];
        $idkendaraan = $_POST['idkendaraan'];
        
                @$Drivinglicenseexpiredate   = $this->input->post('Drivinglicenseexpiredate');
        @$Registrationexpiredate     = $this->input->post('Registrationexpiredate');
        @$Insuranceexpiredate        = $this->input->post('Insuranceexpiredate');
        @$Taxtokenexpiredate         = $this->input->post('Taxtokenexpiredate');
        @$Fitnessexpiredate          = $this->input->post('Fitnessexpiredate');
        @$Bkashnumber                = $this->input->post('Bkashnumber');
        @$kendaraan                      = $this->input->post('kendaraan');

        if($Drivinglicenseexpiredate)
        {
            $DriverInfo['Drivinglicenseexpiredate'] = date('d-m-Y',strtotime(str_replace('/','-', $Drivinglicenseexpiredate)));
        }

        if($Registrationexpiredate)
        {
            $DriverInfo['Registrationexpiredate'] = date('d-m-Y',strtotime(str_replace('/','-', $Registrationexpiredate)));
        }

        if($Insuranceexpiredate)
        {
            $DriverInfo['Insuranceexpiredate'] = date('d-m-Y',strtotime(str_replace('/','-', $Insuranceexpiredate)));
        }


        if($Taxtokenexpiredate)
        {
            $DriverInfo['Taxtokenexpiredate'] = date('d-m-Y',strtotime(str_replace('/','-', $Taxtokenexpiredate)));
        }


        if($Fitnessexpiredate)
        {
            $DriverInfo['Fitnessexpiredate'] = date('d-m-Y',strtotime(str_replace('/','-', $Fitnessexpiredate)));
        }
        if($Bkashnumber)
        {
             $DriverInfo['Bkashnumber']  =  $Bkashnumber;
        }
      


        $this->db->where('kendaraan', $kendaraan);
        $this->db->update('berkas_lamaran_kerja',$DriverInfo);


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotodriver/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotodriver/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        $this->load->model('Driver_m');

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, $namabelakang, $ktp, $dob, $tempatlahir);
            $this->Driver_m->editKendaraan($tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, $namabelakang, $ktp, $dob, $tempatlahir);
            $this->Driver_m->editKendaraan($tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }

        $this->db->where('id', $idDriver);
        $this->db->update('driver',array('job'=>$job));
        
                        $this->db->where('id',$job);
        $driver_jobs = $this->db->get('driver_job')->row();
        $job = $driver_jobs->driver_job;
//        REDIRECT PAGE 
        switch ($job) {
            case 'mride':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->driverMotor();
                break;
            case 'mcar':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->mcar();
                break;
            case 'mbox':
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->mbox();
                break;
            default:
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Driver Status has been successfully edited</p> <br>";
                $this->driverMotor();
                break;
        }
    }

    //    ==================== detil mmassager + edit status ================================================
    public function detilMmassage($id) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMmassage($id);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($id);

        $this->load->view('Listmmassage2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editMmassageForm($id) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMmassage($id);

        $this->load->view('Editmmassage_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusMmassage() {
        $this->load->model('Driver_m');

//        echo $idDriver;
        $idDriver = $_POST['idmmassage'];
        $namadepan = $_POST['namalengkap'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];

        $status = $_POST['status'];
        $foto = $_POST['foto'];


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotommassage/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotommassage/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status has been successfully edited</p> <br>";
        $this->mmassage();
    }

    //    ==================== detil mservice + edit status ================================================
    public function detilMservice($id) {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMservice($id);
        $this->datakirim['saldo'] = $this->Driver_m->getSaldoDriver($id);

        $this->load->view('Listmservice2_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editMserviceForm($id) {
//        echo $idDriver;
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $this->Driver_m->getMservice($id);

        $this->load->view('Editmservice_view', $this->datakirim);
//        echo 'listdriver';
    }

    public function editStatusMservice() {
        $this->load->model('Driver_m');

//        echo $idDriver;
        $idDriver = $_POST['idmservice'];
        $namadepan = $_POST['namalengkap'];
        $tempatlahir = $_POST['tempatlahir'];
        $dob = $_POST['DOB'];
        $ktp = $_POST['ktp'];

        $status = $_POST['status'];
        $foto = $_POST['foto'];


        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotomservice/$foto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotomservice/";

//        echo "$pathfiledelete | $jeniskendaraan | $tipekendaraan | $nokendaraan | $warnakendaraan | $idkendaraan | $merekkendaraan";

        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
//            upload foto editan baru 
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
//            $this->Driver_m->editStatus($idDriver, $status);
        } else {
            $this->Driver_m->editStatus($idDriver, $status, $namadepan, "", $ktp, $dob, $tempatlahir);
//            $this->Driver_m->editKendaraan($jeniskendaraan, $tipekendaraan, $merekkendaraan, $nokendaraan, $warnakendaraan, $idkendaraan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status has been successfully edited</p> <br>";
        $this->mservice();
    }
    
    
        public function editdetilDriver($idDriver) 
    {
        $this->load->model('Driver_m');
        $this->datakirim['driver'] = $driver = $this->Driver_m->getDriver($idDriver);

        $idkendaraan = $driver['0']['idkendaraan'];        
        $driverinfo = $this->db->where('kendaraan',$idkendaraan)->get('berkas_lamaran_kerja')->result_array();
         $nomor = $driverinfo[0]['nomor'];
        //print "<pre>";print_r($driverinfo);exit;
        redirect("validatedriver/detailsDriver/$nomor");

    }

}
