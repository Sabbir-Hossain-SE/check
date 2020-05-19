<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fiturmangjek_m extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

//    GET FUNCTION
    function getMride() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Moto'");
        return $query->result_array();
    }

    function getMcar() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Cab'");
        return $query->result_array();
    }

    function getMfood() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Food'");
        return $query->result_array();
    }

    function getMmart() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Mart'");
        return $query->result_array();
    }

    function getMsend() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Send'");
        return $query->result_array();
    }

    function getMmassage() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Massage'");
        return $query->result_array();
    }

    function getMbox() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Box'");
        return $query->result_array();
    }

    function getMservice() {
        $query = $this->db->query("SELECT * FROM `fitur_mangjek` WHERE fitur = 'Go-Service'");
        return $query->result_array();
    }
    
//    UPDATE FUNCTION Product GoTaxi

    function updateMride($biaya, $biayaminimum) {
        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum'  WHERE fitur = 'Go-Moto'");
    }

    function updateMcar($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Cab'");
    }

    function updateMfood($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Food'");
    }

    function updateMmart($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Mart'");
    }

    function updateMsend($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Send'");
    }

    function updateMmassage($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Massage'");
    }

    function updateMbox($biaya, $biayaminimum) {

        $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Box'");
    }

    function updateMservice($biaya, $biayaminimum) {
    $this->db->query("UPDATE `fitur_mangjek` SET `biaya` = '$biaya' , `biaya_minimum` = '$biayaminimum' WHERE fitur = 'Go-Service'");
    }

}

?>
