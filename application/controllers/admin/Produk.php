<?php
    class Produk extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("admin/produk_m");
        }
        public function index(){
            $this->load->view("admin/dashbord_v");
        }
        public function produkModel(){
            $data["dataProduk"] = $this->produk_m->getDataProduk();
            $this->load->view("admin/produk_v", $data);
        }
    }