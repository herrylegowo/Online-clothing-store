<?php
    class Produk_m extends CI_Model{
        public function insertProduk($dataproduk){
            return $this->db->insert("produk", $dataproduk);
        }
        public function getDataProduk(){
            return $this->db->get("produk")->result_array();
        }
        public function hapusProduk($idProduk){
            return $this->db->delete("produk", array("id_produk" => $idProduk));
        }
    }