<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Words extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Words_model', '', true);
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndRedirect();
    }

    public function index()
    {
        $this->load->view('header');
        $data["objWords"] = $this->Words_model->getAll();
        $data["success"] = $this->session->flashdata('success');
        $this->load->view('words/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Words_model->update($objPostData);
            $this->session->set_flashdata('success', 'Word Added');
            redirect("/admin/words");
        } else {
            $this->load->view('header');
            $data["objWord"] = $this->Words_model->new();
            $data["mode"] = "add";
            $data["name"] = "";
            $this->load->view('words/item', $data);
            $this->load->view('footer');
        }
    }

    public function edit($intID)
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Words_model->update($objPostData, $intID);
            $this->session->set_flashdata('success', 'Word Edited');
            redirect("/admin/Words");
        } else {
            $this->load->view('header');
            $data["objWord"] = $this->Words_model->get($intID);
            $data["mode"] = "edit";
            $data["name"] = $data["objWord"]->WoText;
            $this->load->view('words/item', $data);
            $this->load->view('footer');
        }
    }

    public function delete($intID)
    {
        $this->Words_model->delete($intID);
        $this->session->set_flashdata('success', 'Word Deleted');
        redirect("/admin/words");
    }

}
