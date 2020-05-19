<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listmitramfood extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function index() {
        $this->load->model('Mitra_m');
        $this->datakirim['mitra'] = $this->Mitra_m->getAllMitraMfood();
        $this->datakirim['pesan'] = $this->pesan;

        $this->load->view('Listmitramfood_view', $this->datakirim);
    }

    public function editStatus() {
        $status = $this->input->post('status');
        $idmitra = $this->input->post('idmitra');
        $idresto = $this->input->post('idresto');

//        echo "status = $status | idmitra = $idmitra | id resto = $idresto";
        $this->load->model('Mitra_m');
        $this->datakirim['mitra'] = $this->Mitra_m->updateStatusMfood($idmitra, $status, $idresto);

        if ($status == 3) {
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status Succeeded in Delete</p> <br>";
            $this->index();
        } else if ($status == 2) {
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status Succeeded in Non Enable</p> <br>";
            $this->index();
        } else {
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Partner Status Successfully Enabled</p> <br>";
            $this->index();
        }

//        echo $status.$idmitra;
    }

}