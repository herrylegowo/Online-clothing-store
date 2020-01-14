<?php
    Class Transaksi extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("admin/transaksi_m");
        }
        public function index(){
            $this->load->view("admin/dashbord_v");
        }
        public function transaksiModel(){
            $data["dataTransaksi"] = $this->transaksi_m->getDataTransaksi();
            $this->load->view("admin/transaksi_v", $data);
        }
    }