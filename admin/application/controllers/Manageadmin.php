<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manageadmin extends CI_Controller {

    public $datakirim = array();

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            //bila session user kosong balik ke 'Login'
            redirect(base_url());
        } else {
            $this->load->model('manageadmin_model');
            $model = $this->manageadmin_model;

            $this->datakirim = array(
                "pesan" => "",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        }
    }

    public function pengecekan() {
        $this->load->model('manageadmin_model');
        $model = $this->manageadmin_model;
        $nik = $model->nik;
        $passDB = $model->password;
        $passlama = $_POST['passlama'];
        $passbaru = $_POST['passbaru'];
        $repassbaru = $_POST['repassbaru'];

        if ($passDB != $passlama) {
            $this->datakirim = array(
                "pesan" => "<p style=\"color:red\" class=\"text-center\">The old password you have submitted is incorrect</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        } elseif ($passbaru != $repassbaru) {
            $this->datakirim = array(
                "pesan" => "<p style=\"color:red\" class=\"text-center\">The new password you entered does not match</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        } else {
            $model->setData($nik, $passbaru);
            $this->datakirim = array(
                "pesan" => "<p style=\"color:green\" class=\"text-center\">Password successfully updated</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        }
    }

}
