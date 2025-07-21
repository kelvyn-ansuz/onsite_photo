<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', '', true);
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndRedirect();
    }

    public function index()
    {
        $this->load->view('header');
        $data["objUsers"] = $this->Users_model->getAll();
        $data["success"] = $this->session->flashdata('success');
        $this->load->view('users/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Users_model->update($objPostData);
            $this->session->set_flashdata('success', 'User Added');
            redirect("/admin/users");
        } else {
            $this->load->view('header');
            $data["objUser"] = $this->Users_model->new();
            $data["mode"] = "add";
            $data["name"] = "";
            $this->load->view('users/item', $data);
            $this->load->view('footer');
        }
    }

    public function edit($intID)
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Users_model->update($objPostData, $intID);
            $this->session->set_flashdata('success', 'User Edited');
            redirect("/admin/users");
        } else {
            $this->load->view('header');
            $data["objUser"] = $this->Users_model->get($intID);
            $data["mode"] = "edit";
            $data["name"] = $data["objUser"]->UsFirstName . " " . $data["objUser"]->UsLastName;
            $this->load->view('users/item', $data);
            $this->load->view('footer');
        }
    }

    public function delete($intID)
    {
        $this->Users_model->delete($intID);
        $this->session->set_flashdata('success', 'User Deleted');
        redirect("/admin/users");
    }

}
