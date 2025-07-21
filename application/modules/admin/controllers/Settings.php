<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings_model', '', true);
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndRedirect();
    }

    public function index()
    {
        $this->load->view('header');
        $data["objSettings"] = $this->Settings_model->getAll();

        $this->Settings_model->getAllByKeyValue();
        $data["success"] = $this->session->flashdata('success');
        $this->load->view('settings/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Settings_model->update($objPostData);
            $this->session->set_flashdata('success', 'Setting Added');
            redirect("/admin/settings");
        } else {
            $this->load->view('header');
            $data["objSetting"] = $this->Settings_model->new();
            $data["mode"] = "add";
            $data["name"] = "";
            $this->load->view('settings/item', $data);
            $this->load->view('footer');
        }
    }

    public function edit($intID)
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Settings_model->update($objPostData, $intID);
            $this->session->set_flashdata('success', 'Setting Edited');
            redirect("/admin/settings");
        } else {
            $this->load->view('header');
            $data["objSetting"] = $this->Settings_model->get($intID);
            $data["mode"] = "edit";
            $data["name"] = $data["objSetting"]->SeName;
            $this->load->view('settings/item', $data);
            $this->load->view('footer');
        }
    }

    public function delete($intID)
    {
        $this->Settings_model->delete($intID);
        $this->session->set_flashdata('success', 'Setting Deleted');
        redirect("/admin/settings");
    }

}
