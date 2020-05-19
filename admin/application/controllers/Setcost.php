<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setcost extends CI_Controller {

    public $biaya = "";
    public $biayaminimum = "";
    public $keterangan_biaya = "";
    public $prosentase = "";
    public $pesan = "";
    public $datakirim;

    public function index() {
        echo 'error terjadi hubungi admin atau tekan tombol back';
//        $data = $this->db->query("SELECT biaya, keterangan_biaya FROM `fitur_mangjek`");
//        $d = $data->result_array();
//
//        $no = 0;
//        foreach ($d as $data) {
//            $this->cost[$no] = $data['biaya'];
//            $this->keterangan[$no] = $data['keterangan_biaya'];
//            $no = $no + 1;
//        }
//
//        $datakirim = array(
//            "cost" => $this->cost,
//            "keterangan" => $this->keterangan,
//            "pesan" => $this->pesan
//        );
//
//        $this->load->view('setcost_view', $datakirim);
    }

//    RIDE 
    public function mride($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMride();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

//        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mride";

        $this->load->view('setcost_view', $this->datakirim);
    }

    public function setMride() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

//        echo "$biaya | $id | $persentase";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMride($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);


        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Moto';
        $this->mride($tittle);
    }

//      CAR
    public function mcar($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMcar();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

        //        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mcar";

        $this->load->view('setcost_view', $this->datakirim);
    }

    public function setMcar() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

//        echo "$biaya";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMcar($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Cab';
        $this->mcar($tittle);
    }

//      FOOD
    public function mfood($tittle) {

        //<<data form non partner>>>
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMfood();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

        //        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mfood";


        //<<data form partner>>>
        $this->load->model('Biayapromo_m');
        $d2 = $this->Biayapromo_m->getBiayaPromoMfood();

        $this->datakirim['biaya_p'] = $d2[0]['biaya'];
        $this->datakirim['biayaminimum_p'] = $d2[0]['biaya_minimum'];
        $this->datakirim['keterangan_biaya_p'] = $d2[0]['keterangan_biaya'];


        $this->load->view('setcostmfood_view', $this->datakirim);
    }

    public function setMfood() {
        //get data non partner
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

        //get data partner
        $biaya_p = $this->input->post('biaya_p');
        $biayaminimum_p = $this->input->post('biayaminimum_p');

        // update data non partner
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMfood($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        // update data pertner
        $this->load->model('Biayapromo_m');
        $this->Biayapromo_m->updateBiayaPromoMfood($biaya_p, $biayaminimum_p);
        
        
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Food';
        $this->mfood($tittle);
    }

//    MART
    public function mmart($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMmart();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

        //        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mmart";

        $this->load->view('setcost_view', $this->datakirim);
    }

    public function setMmart() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

//        echo "$biaya";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMmart($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Mart';
        $this->mmart($tittle);
    }

//    SEND
    public function msend($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMsend();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

//        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Msend";

        $this->load->view('setcost_view', $this->datakirim);
    }

    public function setMsend() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

//        echo "$biaya";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMsend($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Send';
        $this->msend($tittle);
    }

//    MASSAGE
    public function mmassage($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMmassage();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

        //        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

        // set harga layanan pijat
        $this->load->model('Layananpijat_m');
        $l = $this->Layananpijat_m->getLayananPijat();
//        var_dump($l);
        $this->datakirim['l1'] = $l[0]['harga'];
        $this->datakirim['l2'] = $l[1]['harga'];
        $this->datakirim['l3'] = $l[2]['harga'];
        $this->datakirim['l4'] = $l[3]['harga'];
        $this->datakirim['l5'] = $l[4]['harga'];
        $this->datakirim['l6'] = $l[5]['harga'];
        $this->datakirim['l7'] = $l[6]['harga'];


        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mmassage";

        $this->load->view('setcostmassage_view', $this->datakirim);
    }

    public function setMmassage() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];
        $l4 = $_POST['l4'];
        $l5 = $_POST['l5'];
        $l6 = $_POST['l6'];
        $l7 = $_POST['l7'];

//        echo "$biaya";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMmassage($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->load->model('Layananpijat_m');
        $this->Layananpijat_m->updateLayananPijat($l1, 1);
        $this->Layananpijat_m->updateLayananPijat($l2, 2);
        $this->Layananpijat_m->updateLayananPijat($l3, 3);
        $this->Layananpijat_m->updateLayananPijat($l4, 4);
        $this->Layananpijat_m->updateLayananPijat($l5, 5);
        $this->Layananpijat_m->updateLayananPijat($l6, 6);
        $this->Layananpijat_m->updateLayananPijat($l7, 7);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Massage';
        $this->mmassage($tittle);
    }

//    BOX
    public function mbox($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMbox();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

//        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

//            harga kendaraan angkut
        $this->load->model('Kendaraanangkut_m');
        $l = $this->Kendaraanangkut_m->getKendaraanAngkut();
//        var_dump($l);
        $this->datakirim['l1'] = $l[0]['harga'];
        $this->datakirim['l2'] = $l[1]['harga'];
        $this->datakirim['l3'] = $l[2]['harga'];
        $this->datakirim['l4'] = $l[3]['harga'];

//        biaya minimum per kendaraan 
        $this->datakirim['m1'] = $l[0]['hargaminimum_mbox'];
        $this->datakirim['m2'] = $l[1]['hargaminimum_mbox'];
        $this->datakirim['m3'] = $l[2]['hargaminimum_mbox'];
        $this->datakirim['m4'] = $l[3]['hargaminimum_mbox'];


        $this->datakirim['pesan'] = "$this->pesan";
//        $this->datakirim['biaya'] = "$this->biaya";
//        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mbox";

        $this->load->view('setcostbox_view', $this->datakirim);
    }

    public function setMbox() {
//        $biaya = $_POST['biaya'];
//        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];
        $l4 = $_POST['l4'];

        $m1 = $_POST['m1'];
        $m2 = $_POST['m2'];
        $m3 = $_POST['m3'];
        $m4 = $_POST['m4'];

//        echo "$biaya";
//        update data 
//        $this->load->model('Fiturmangjek_m');
//        $d = $this->Fiturmangjek_m->updateMbox($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->load->model('Kendaraanangkut_m');
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l1, $m1, 3);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l2, $m2, 4);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l3, $m3, 5);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l4, $m4, 6);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Box';
        $this->mbox($tittle);
    }

//    SERVICE
    public function mservice($tittle) {
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->getMservice();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

//        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];
//        fare ac type
        $this->load->model('Actype_m');
        $k = $this->Actype_m->getAcType();

        $this->datakirim['k1'] = $k[0]['fare'];
        $this->datakirim['k2'] = $k[1]['fare'];
        $this->datakirim['k3'] = $k[2]['fare'];
        $this->datakirim['k4'] = $k[3]['fare'];
        $this->datakirim['k5'] = $k[4]['fare'];
        $this->datakirim['k6'] = $k[5]['fare'];
        $this->datakirim['k7'] = $k[6]['fare'];

//            harga service
        $this->load->model('Mservicejenis_m');
        $k = $this->Mservicejenis_m->getMserviceJenis();

        $this->datakirim['l1'] = $k[0]['harga'];
        $this->datakirim['l2'] = $k[1]['harga'];
        $this->datakirim['l3'] = $k[2]['harga'];
        $this->datakirim['l4'] = $k[3]['harga'];
        $this->datakirim['l5'] = $k[4]['harga'];
        $this->datakirim['l6'] = $k[5]['harga'];

        $this->datakirim['pesan'] = "$this->pesan";
        $this->datakirim['biaya'] = "$this->biaya";
        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mservice";

        $this->load->view('setcostservice_view', $this->datakirim);
    }

    public function setMservice() {
        $biaya = $_POST['biaya'];
        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

        $k1 = $_POST['k1'];
        $k2 = $_POST['k2'];
        $k3 = $_POST['k3'];
        $k4 = $_POST['k4'];
        $k5 = $_POST['k5'];
        $k6 = $_POST['k6'];
        $k7 = $_POST['k7'];


        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];
        $l4 = $_POST['l4'];
        $l5 = $_POST['l5'];
        $l6 = $_POST['l6'];


//        echo "$biaya";
//        update data 
        $this->load->model('Fiturmangjek_m');
        $d = $this->Fiturmangjek_m->updateMservice($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->load->model('Actype_m');
        $this->Actype_m->updateAcType(1, $k1);
        $this->Actype_m->updateAcType(2, $k2);
        $this->Actype_m->updateAcType(3, $k3);
        $this->Actype_m->updateAcType(4, $k4);
        $this->Actype_m->updateAcType(5, $k5);
        $this->Actype_m->updateAcType(6, $k6);
        $this->Actype_m->updateAcType(7, $k7);

        $this->load->model('Mservicejenis_m');
        $this->Mservicejenis_m->updateMserviceJenis(1, $l1);
        $this->Mservicejenis_m->updateMserviceJenis(2, $l2);
        $this->Mservicejenis_m->updateMserviceJenis(3, $l3);
        $this->Mservicejenis_m->updateMserviceJenis(4, $l4);
        $this->Mservicejenis_m->updateMserviceJenis(5, $l5);
        $this->Mservicejenis_m->updateMserviceJenis(6, $l6);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data successfully updated</p> <br>";
        $tittle = 'MR-Service';
        $this->mservice($tittle);
    }
    
    
    

}
