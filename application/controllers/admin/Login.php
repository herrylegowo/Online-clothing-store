<?php
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("admin/account");
        }
        public function loginAdmin(){
            $this->load->view("admin/login_v");
        }
        public function islogin(){
            $credentials = [
                "email" => $this->input->post("email"),
                "password" => $this->input->post("password")
                ];
            $isvalid = $this->account->checkCredentials($$credentials);
        }
    }