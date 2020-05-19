<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $pesanerror = array("pesan" => "");

    //Session 
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            $this->load->view('login_view', $this->pesanerror);
        } else {
            //bila belum logout
            header('Location: ' . base_url() . "index.php/dashboard");
        }
        
    }

    public function pengecekan() {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

//        echo "$email | $pass";
        $this->load->database();
        $data = $this->db->query("select * from admin where email = '$email'");


        if ($d = $data->result_array()) {
            $emailDB = $d[0]['email'];
            $passDB = $d[0]['password'];
//            var_dump($d);
            if ($passDB != $pass) {
                $this->pesanerror = array(
                    "pesan" => "Password wrong"
                );
                $this->load->view('login_view', $this->pesanerror);
            } else {
                $this->session->set_userdata('id', $d[0]['id']);
                $this->session->set_userdata('nik', $d[0]['nik']);
                $this->session->set_userdata('email', $d[0]['email']);
                header('Location: ' . base_url() . "index.php/dashboard");
            }
        } else {
//            echo 'tidak ada data';
            $this->pesanerror = array(
                "pesan" => "Admin not listed"
            );
            $this->load->view('login_view', $this->pesanerror);
        }
    }

}

