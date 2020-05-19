<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            //bila session user kosong balik ke 'Login'
            redirect(base_url());
        } else {
            $this->load->model('Voucher_m');

            $this->datakirim['voucher'] = $this->Voucher_m->getAllVoucher();
            $this->datakirim['pesan'] = $this->pesan;
            $this->datakirim['fiturVoucher'] = $this->Voucher_m->getFitur();
            $this->datakirim['tipeVoucher'] = $this->Voucher_m->getTipe();


            $this->load->view('Voucher_view', $this->datakirim);
        }
    }

    public function hapusVoucher($idvoucher) {
//        echo $idvoucher;
        $this->load->model('Voucher_m');
        $this->Voucher_m->hapusVoucher($idvoucher);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Voucher successfully deleted</p> <br>";
        $this->index();

//        var_dump($mride);
    }

    public function editVoucher() {
//        echo $idvoucher;

        $data = array(
            // 'nama' => $this->input->post('namavoucher'),
            'fitur' => $this->input->post('fiturvoucher'),
            'tipe' => $this->input->post('tipevoucher'),
            'nilai' => $this->input->post('nilaivoucher'),
            // 'keterangan' => $this->input->post('ketvoucher'),
            // 'kuota' => $this->input->post('kuotavoucher'),
            'id' => $this->input->post('idvoucher')
        );

        $this->load->model('Voucher_m');
        $this->Voucher_m->editVoucher($data);

        redirect(base_url('index.php/Voucher'));
        // echo "hallo world";
        // echo $data['fitur'];
        // print_r($data);
//        var_dump($mride);
    }

    public function tambahVoucherDiskonPersen() {

        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tipe_voucher'] = 1;
        $this->datakirim['tittle'] = "Discount Voucher Percent";


        $this->load->view('VoucherFormPersen_view', $this->datakirim);
    }

    public function insertDiskonPersen() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $datePickerStart =date('Y-m-d',strtotime($_POST['datePickerStart']));//expire date
        $tipe = 1;
        
        //var_dump( $datePickerStart);exit;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            //$this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
            $this->Voucher_m->insertVoucher_addpromo($nama, $tipe, $value, $nilai, $kuota, $keterangan,$datePickerStart);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Annual Discount Voucher successfully added</p> <br>";
        $this->index();
//        var_dump($mride);
    }

    public function tambahVoucherDiskonNominal() {
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tipe_voucher'] = 2;
        $this->datakirim['tittle'] = "Discount Voucher Nominal";
        $this->datakirim['insert'] = "DiskonNominal";
//        echo 'Form input Diskon nominal';

        $this->load->view('VoucherForm_view', $this->datakirim);
    }

    public function insertDiskonNominal() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $tipe = 2;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            $this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Discount Voucher Nominal successfully added</p> <br>";
        $this->index();
//        var_dump($mride);
    }

    public function tambahVoucherDapatSaldo() {
        $this->datakirim['pesan'] = $this->pesan;
        $this->datakirim['tipe_voucher'] = 3;
        $this->datakirim['tittle'] = "Voucher Can Be Money";
        $this->datakirim['insert'] = "DapatSaldo";

        $this->load->view('VoucherForm_view', $this->datakirim);

//        echo 'Form input dapat saldo';
    }

    public function insertDapatSaldo() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $tipe = 3;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            $this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
        }

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Discount Voucher Nominal successfully added</p> <br>";
        $this->index();
//        var_dump($mride);
    }

}
