<?php
    class Produk_m extends CI_Model{
        public function getDataProduk(){
            return $this->db->get("produk")->result_array();
        }
    }