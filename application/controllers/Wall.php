<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wall extends CI_Controller
{

    public function index()
    {
        $objSettings = db_GetSettings();

        $objData["intRows"] = $objSettings["Rows"];
        $objData["intCols"] = $objSettings["Columns"];

        $this->load->model('Attendees_model', '', true);
        $objAll = $this->Attendees_model->getPublished();

        $objData["PublishedTiles"] = $objAll;

        $this->load->view('wallsbst.php', $objData);
        //redirect("/wall/opt1");
    }

    public function ver2()
    {
        $objSettings = db_GetSettings();

        $objData["intRows"] = $objSettings["Rows"];
        $objData["intCols"] = $objSettings["Columns"];

        $this->load->model('Attendees_model', '', true);
        $objAll = $this->Attendees_model->getPublished();

        $objData["PublishedTiles"] = $objAll;


        $this->load->view('wall2', $objData);
    }


    /*
    public function opt1()
    {
      $objSettings = db_GetSettings();

      $objData["intRows"] = $objSettings["Rows"];
      $objData["intCols"] = $objSettings["Columns"];

      $this->load->view('wall1', $objData);
    }


    public function opt2()
    {
      $objSettings = db_GetSettings();

      $objData["intRows"] = $objSettings["Rows"];
      $objData["intCols"] = $objSettings["Columns"];

      $this->load->view('wall2', $objData);
    }
    */

}
