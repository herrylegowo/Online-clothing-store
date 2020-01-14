<?php
    Class Dashbord_m extends CI_model{
        public function getDataCustomers(){
            return $this->db->get("costumer")->result_array();
        }
    }