<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndModeratorAndRedirect();
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
}
