<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bannermfood extends CI_Controller {

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
            $this->load->model('Promotion_m');

            $this->datakirim['promosi'] = $this->Promotion_m->getAllBannerMfood();
            $this->datakirim['restoran'] = $this->Promotion_m->getAllNamaResto();
            $this->datakirim['pesan'] = $this->pesan;

            $this->load->view('Bannermfood_view', $this->datakirim);
        }
    }

    public function turnon($id) {
        $this->load->model('Promotion_m');

        $this->Promotion_m->BannerMfoodTurnon($id);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Banner Berhasil di Aktifkan</p> <br>";
        $this->index();
    }

    public function turnoff($id) {
        $this->load->model('Promotion_m');

        $this->Promotion_m->BannerMfoodTurnoff($id);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Banner Successfully Disabled</p> <br>";
        $this->index();
    }

    public function hapusBannerMfood($id, $foto) {

//        echo $id."|".$foto;
//        hapus entry database 
        $this->load->model('Promotion_m');

//        hapus file 
        $path = "./fotopromosimfood/$foto";
        if (unlink("$path")) {
            $this->Promotion_m->hapusBannerMfood($id);
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">MR-Food Banner data successfully deleted</p> <br>";
            $this->index();
        } else {
            $this->pesan = "<p style=\"color:red\" class=\"text-center\">Promotional data failed to delete, please contact Admin</p> <br>";
            $this->index();
        }
    }

    public function tambahBannerMfood() {
        $this->load->model('Promotion_m');

        $namarestoran = $this->input->post('namarestoran');
        $keterangan = $this->input->post('keterangan');

        $idresDB = $this->Promotion_m->getIDResto($namarestoran);


        if ($idresDB == NULL) {
            $this->pesan = "<p style=\"color:red\" class=\"text-center\">Restaurant Not Found</p> <br>";
            $this->index();
        } else {
            $idresto = $idresDB[0]['id'];
            $no = time() . "-" . date("Y-m-d");
            $path = $_FILES["userfile"]['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $new_name = "$no." . $ext;

//        echo $fiturpromosi." | ".$new_name;
//        config upload foto
            $config['file_name'] = $new_name;
            $config['upload_path'] = './fotopromosimfood/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
//        $this->upload->do_upload();
//        echo "$nama | $kategori | $harga | $deskripsi | $new_name";
            if ($this->upload->do_upload()) {
//            insert database

                $this->Promotion_m->tambahBannerMfood($keterangan, $new_name, $idresto);
//            echo "$nama | $kategori | $harga | $deskripsi | $new_name";
                $this->pesan = "<p style=\"color:green\" class=\"text-center\">Promotional Banner added successfully</p> <br>";
                $this->index();
            } else {
                $this->pesan = "<p style=\"color:red\" class=\"text-center\">Complete the requirements</p> <br>";
                $this->index();
            }
        }
    }

}
