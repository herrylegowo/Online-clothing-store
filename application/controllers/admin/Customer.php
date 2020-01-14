<?php
    class Customer extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("admin/dashbord_m");
        }


        public function index(){
            $this->load->view("admin/dashbord_v");
        }
        public function customerModel(){
            $data['dataCustomer'] = $this->dashbord_m->getDataCustomers();
            $this->load->view("admin/customer_v", $data);
        }
    }