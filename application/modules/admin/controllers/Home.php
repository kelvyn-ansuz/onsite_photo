<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library("Authentication");
        if (!$this->authentication->checkAdmin()) {

            if ($this->input->post()) {
                $objPostData = $this->input->post();
                if ($this->authentication->authenticate($objPostData["email"], $objPostData["password"])) {
                     if(!$this->authentication->checkAdmin() && !$this->authentication->checkModerator()) {
                        $data["error"] = "Access Denied.";
                        $this->load->view('login', $data);
                    } else {
                        if(isset($objPostData["previousURL"]) && strlen($objPostData["previousURL"])>0) {

                            redirect($objPostData["previousURL"], "refresh");
                        } else {
                            redirect("/admin/dashboard", "refresh");
                        }
                    }
                } else {
                    $data["error"] = "The username/password combination is invalid.";
                    $data["previousURL"] = $objPostData["previousURL"];
                    $this->load->view('login', $data);
            }

            } else {
                $data["error"] = $this->session->flashdata('error');
                $data["previousURL"] = $this->session->flashdata('previousURL');

                $this->load->view('login', $data);
            }
        } else {
            redirect("/admin/dashboard", "refresh");
        }
    }

    public function dashboard()
    {
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndRedirect();
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function logout()
    {
        $this->load->library("Authentication");
        $this->authentication->logout("/admin/home");
    }
}
