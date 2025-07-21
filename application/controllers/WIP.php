<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WIP extends CI_Controller
{
  public function index()
  {
    $this->load->helper('cookie');

    $objSettings = db_GetSettings();
    if($objSettings["Lock Down"]=="true") {

        $arrAllowedIPs = explode(",", $objSettings["Allowed IPs"]);
        if (!in_array($this->input->ip_address(), $arrAllowedIPs)) {
            $this->load->view('wip');
            return;
        }
    }

    $this->load->model('Attendees_model', '', true);
    $objAll = $this->Attendees_model->getPublished();


    $arrBird = array();
    $arrBird[] = array("id" => 3, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown");
    $arrBird[] = array("id" => 7, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown");
    $arrBird[] = array("id" => 11, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown");
    $arrBird[] = array("id" => 13, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown");
    $arrBird[] = array("id" => 15, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown");
    $arrBird[] = array("id" => 17, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown");
    $arrBird[] = array("id" => 25, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown");

    $arrBird[] = array("id" => 1, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");
    $arrBird[] = array("id" => 2, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink");
    $arrBird[] = array("id" => 4, "class" => "birdStaticBlue", "flipped" => false, "bgcolor" => "blue");
    $arrBird[] = array("id" => 5, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink");
    $arrBird[] = array("id" => 6, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");

    $arrBird[] = array("id" => 8, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");
    $arrBird[] = array("id" => 9, "class" => "birdStaticBlue", "flipped" => true, "bgcolor" => "blue");
    $arrBird[] = array("id" => 10, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink");

    $arrBird[] = array("id" => 12, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");

    $arrBird[] = array("id" => 14, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");

    $arrBird[] = array("id" => 16, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");

    $arrBird[] = array("id" => 18, "class" => "birdStaticBlue", "flipped" => false, "bgcolor" => "blue");
    $arrBird[] = array("id" => 19, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");
    $arrBird[] = array("id" => 20, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");
    $arrBird[] = array("id" => 21, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");
    $arrBird[] = array("id" => 22, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");
    $arrBird[] = array("id" => 23, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue");
    $arrBird[] = array("id" => 24, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink");

    //printObject($objAll);

    foreach($objAll as $key => $value) {
      //$arrTemp = $arrBird[$key];
      //$arrTemp["text"] = $value->AtText;
      $arrBird[$key]["text"] = $value->AtText;
      $arrBird[$key]["firstname"] = $value->AtFirstName;
      $arrBird[$key]["lastname"] = $value->AtLastName;
    }

    $objData["Birds"] = $arrBird;
    $objData["PublishedTiles"] = $objAll;
    $this->load->view('bird', $objData);
  }

  public function flying(){
    $this->load->view('flying');

  }
}

?>