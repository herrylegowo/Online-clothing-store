<?php
    class Account extends CI_Model{
        public function checkCredentials(){
            $checkemail = $this->db->get_where("admin", array("email" => $credentials["email"]))->row_array();
            if($checkemail > 0){
                if(password_verify($credentials["password"], $chechkemail["password"])){
                    $userdata["islogin"] = [
                        "email" => $checkemail["email"],
                        "userId" => $chechkemail["id_admin"]
                    ];
                    $this->session->set_userdata($userdata);
                    redirect("dashbord");
                }else{
                    $this->session->set_flashdata("error", "<b>ERROR<b>: Invalid Password");
                    redirect("admin/loginadmin");
                }
            }else{
                $this->session->set_flashdata("error", "<b>ERROR<b>: Invali Email");
                redirect("admin/loginadmin");
            }
        }
    }