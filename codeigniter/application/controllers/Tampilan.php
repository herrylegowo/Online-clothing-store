<?php
    Class Tampilan extends CI_Controller{
        public function index(){
            $this->load->view("admin/dashbord_v");
        }
    }