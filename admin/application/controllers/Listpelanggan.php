<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listpelanggan extends CI_Controller {

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
            $this->load->model('Pelanggan_m');
            $this->datakirim['pelanggan'] = $this->Pelanggan_m->getAllpelanggan();
            $this->datakirim['pesan'] = $this->pesan;

            $this->load->view('Listpelanggan_view', $this->datakirim);
        }
    }

    public function editstatus() {

        $id = $_POST['id'];
        $status = $_POST['status'];

//        echo "$id | $status";
        $this->load->model('Pelanggan_m');
        $this->datakirim['pelanggan'] = $this->Pelanggan_m->editStatusPelanggan($id, $status);

        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Customer Status has been successfully edited</p> <br>";
        $this->index();
    }

}
