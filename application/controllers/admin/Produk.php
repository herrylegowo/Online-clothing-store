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
        public function tambahProduk(){
            $dataproduk = [
                "id_produk" => $this->input->post("id_produk"),
                "nama"      => $this->input->post("nama"),
                "gambar"    => $this->input->post("gambar"),
                "harga"     => $this->input->post("harga"),
                "id_kurir"  => $this->input->post("id_kurir")
            ];
            $addproduk = $this->produk_m->insertProduk($dataproduk);
            redirect("admin/produk/produkModel");
        }
        public function hapusProduk($idProduk){
            $hapusProduk = $this->produk_m->hapusProduk($idProduk);
            redirect("admin/produk/produkModel");
        }
    }