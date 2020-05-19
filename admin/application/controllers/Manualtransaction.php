<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manualtransaction extends CI_Controller {

    public $datakirim;
    public $pesan = "";

    public function __construct() {
        parent::__construct();
        $this->load->model('ManualTransaction_m');
        $this->load->library('session');
    }

    public function index() {
        
    }

//    PELANGAN ==============================================================
    public function Pelanggan() {
//        echo 'pelanggan';
        $this->datakirim['saldopelanggan'] = $this->ManualTransaction_m->getPelanggan();
        $this->datakirim['pesan'] = $this->pesan;

        $this->load->view('MT_Pelanggan_view', $this->datakirim);
    }

    public function penguranganPelanggan() {
        $pengurangan = $_POST['nominal'] + 0;
        $saldo = $_POST['saldo'] + 0;
        $id = $_POST['id'];
//        echo "$id | $saldo + $penambahan";

        if ($pengurangan > $saldo) {
            $this->pesan = "<p style=\"color:red\" class=\"text-center\">Reduction exceeds the current wallet limit of $ $saldo</p> <br>";
            $this->Pelanggan();
        } else {
            $saldoakhir = $saldo - $pengurangan;

            //        insert tabel transaksi_pelanggan 
            $this->ManualTransaction_m->insertTransaksiPelanggan('pengurangan', $id, $pengurangan, $saldoakhir);
            //            update saldo pelanggan 
            $this->ManualTransaction_m->updateSaldoPelanggan($id, $saldoakhir);

            //pesan sukses + redirect ke halaman pelanggan 
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Wallet reduction successful. wallet to $ $saldoakhir</p> <br>";
            $this->Pelanggan();
        }
    }

    public function penambahanPelanggan() {
        $penambahan = $_POST['nominal'] + 0;
        $saldo = $_POST['saldo'] + 0;
        $id = $_POST['id'];
//        echo "$id | $saldo + $penambahan";

        $saldoakhir = $saldo + $penambahan;
        //        insert tabel transaksi_pelanggan 
        $this->ManualTransaction_m->insertTransaksiPelanggan('penambahan', $id, $penambahan, $saldoakhir);
        //            update saldo pelanggan 
        $this->ManualTransaction_m->updateSaldoPelanggan($id, $saldoakhir);

        //pesan sukses + redirect ke halaman pelanggan 
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">The addition of the wallet is successful. Wallet to $ $saldoakhir</p> <br>";
        $this->Pelanggan();
    }

//    DRIVER ===================================================================
    public function Driver() {
//        echo 'Driver';

        $this->datakirim['saldodriver'] = $this->ManualTransaction_m->getDriver();
        $this->datakirim['pesan'] = $this->pesan;

        $this->load->view('MT_Driver_view', $this->datakirim);
    }

    public function penguranganDriver() {
        $pengurangan = $_POST['nominal'] + 0;
        $saldo = $_POST['saldo'] + 0;
        $id = $_POST['id'];
//        echo "$id | $saldo + $penambahan";

        if ($pengurangan > $saldo) {
            $this->pesan = "<p style=\"color:red\" class=\"text-center\">Reduction exceeds the current wallet limit of $ $saldo</p> <br>";
            $this->Driver();
        } else {
            $saldoakhir = $saldo - $pengurangan;

            //        insert tabel transaksi_pelanggan 
            $this->ManualTransaction_m->insertTransaksiDriver('pengurangan', $id, $pengurangan, $saldoakhir);
            //            update saldo pelanggan 
            $this->ManualTransaction_m->updateSaldoDriver($id, $saldoakhir);

            //pesan sukses + redirect ke halaman pelanggan 
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Wallet reduction successful. Wallet to $ $saldoakhir</p> <br>";
            $this->Driver();
        }
    }

    public function penambahanDriver() {
        $penambahan = $_POST['nominal'] + 0;
        $saldo = $_POST['saldo'] + 0;
        $id = $_POST['id'];
//        echo "$id | $saldo + $penambahan";

        $saldoakhir = $saldo + $penambahan;
        //        insert tabel transaksi_pelanggan 
        $this->ManualTransaction_m->insertTransaksiDriver('penambahan', $id, $penambahan, $saldoakhir);
        //            update saldo pelanggan 
        $this->ManualTransaction_m->updateSaldoDriver($id, $saldoakhir);

        //pesan sukses + redirect ke halaman pelanggan 
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">The addition of the wallet is successful. wallet balance to $ $saldoakhir</p> <br>";
        $this->Driver();
    }

}