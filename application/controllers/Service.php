<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
  public function index()
  {
    $this->load->view('dashboard/service');
  }

  public function details($intTarget)
  {
    $objData["target"] = $intTarget;

    //printObject($objData["target"]);
    $this->load->view('dashboard/service', $objData);
  }


}