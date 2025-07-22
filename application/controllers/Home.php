<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('dashboard/list');
  }

  public function list()
  {
    $this->load->view('dashboard/people');
  }

  public function agenda()
  {
    $this->load->view('dashboard/agenda');
  }

  public function old()
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
    $arrBird[] = array("id" => 3, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown", "y" => 34, "x" => 511, "rotate" => 13);
    $arrBird[] = array("id" => 7, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown", "y" => 153, "x" => 376, "rotate" => 15);
    $arrBird[] = array("id" => 11, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown", "y" => 80, "x" => 667, "rotate" => -15);
    $arrBird[] = array("id" => 13, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown", "y" => 97, "x" => 825, "rotate" => -13);
    $arrBird[] = array("id" => 15, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown", "y" => 172, "x" => 864, "rotate" => -20);
    $arrBird[] = array("id" => 17, "class" => "birdStaticBrown", "flipped" => false, "bgcolor" => "brown", "y" => 171, "x" => 518, "rotate" => -19);
    $arrBird[] = array("id" => 25, "class" => "birdStaticBrownFlipped", "flipped" => true, "bgcolor" => "brown", "y" => 247, "x" => 873, "rotate" => 17);
    $arrBird[] = array("id" => 1, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 74, "x"  => 337, "rotate" => 20);
    $arrBird[] = array("id" => 2, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink", "y" => 39, "x" => 422, "rotate" => 16);
    $arrBird[] = array("id" => 4, "class" => "birdStaticBlue", "flipped" => false, "bgcolor" => "blue", "y" => 28, "x" => 627, "rotate" => -19);
    $arrBird[] = array("id" => 5, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink", "y" => 58, "x" => 767, "rotate" => 17);
    $arrBird[] = array("id" => 6, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 31, "x" => 843, "rotate" => -16);
    $arrBird[] = array("id" => 8, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 137, "x" => 442, "rotate" => -18);
    $arrBird[] = array("id" => 9, "class" => "birdStaticBlue", "flipped" => true, "bgcolor" => "blue", "y" => 102, "x" => 498, "rotate" => 17);
    $arrBird[] = array("id" => 10, "class" => "birdStaticPinkFlipped", "flipped" => true, "bgcolor" => "pink", "y" => 77, "x" => 578, "rotate" => 16);
    $arrBird[] = array("id" => 12, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 116, "x" => 746, "rotate" => 19);
    $arrBird[] = array("id" => 14, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 100, "x" => 888, "rotate" => 18);
    $arrBird[] = array("id" => 16, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 219, "x" => 365, "rotate" => 14);
    $arrBird[] = array("id" => 18, "class" => "birdStaticBlue", "flipped" => false, "bgcolor" => "blue", "y" => 143, "x" => 621, "rotate" => -17);
    $arrBird[] = array("id" => 19, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 192, "x" => 700, "rotate" => -13);
    $arrBird[] = array("id" => 20, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 186, "x" => 789, "rotate" => -20);
    $arrBird[] = array("id" => 21, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 203, "x" => 926, "rotate" => 15);
    $arrBird[] = array("id" => 22, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 241, "x" => 445, "rotate" => -18);
    $arrBird[] = array("id" => 23, "class" => "birdStaticBlueFlipped", "flipped" => true, "bgcolor" => "blue", "y" => 246, "x" => 601, "rotate" => 13);
    $arrBird[] = array("id" => 24, "class" => "birdStaticPink", "flipped" => false, "bgcolor" => "pink", "y" => 259, "x" => 776, "rotate" => -14);

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

  public function flyingLogo()
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

      $objData["PublishedTiles"] = $objAll;
      $this->load->view('smu_base', $objData);
  }

  public function old_index()
  {
      $objSettings = db_GetSettings();
      if($objSettings["Lock Down"]=="true") {

          $arrAllowedIPs = explode(",", $objSettings["Allowed IPs"]);
          if (!in_array($this->input->ip_address(), $arrAllowedIPs)) {
              $this->load->view('wip');
              return;
          }
      }

      $this->load->model('Attendees_model', '', true);
      $data["position"] = $this->Attendees_model->currentTilePosition();

      $this->load->view('index', $data);
  }

  public function pen()
  {
      $this->load->view('pen');
  }

  public function tac()
  {
      $this->load->view('tac');
  }

  public function animate($ID)
  {
      $this->load->model('Attendees_model', '', true);
      $objAll = $this->Attendees_model->getPublished();
      $objCurrent = $this->Attendees_model->get($ID);

      $objData["PublishedTiles"] = $objAll;
      $objData["CurrentObject"] = $objCurrent;
      $this->load->view('animate', $objData);
  }

  public function animatebird($ID)
  {

      $this->load->model('Attendees_model', '', true);
      $objAll = $this->Attendees_model->getPublished();
      $objCurrent = $this->Attendees_model->get($ID);


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

      $arrBird[18]["text"] = $objCurrent->AtText;
      $arrBird[18]["firstname"] = $objCurrent->AtFirstName;
      $arrBird[18]["lastname"] = $objCurrent->AtLastName;

      $objData["Birds"] = $arrBird;
      $objData["PublishedTiles"] = $objAll;

      $this->load->view('animatebird', $objData);
  }

  public function animatetest($ID)
  {
      $this->load->model('Attendees_model', '', true);
      $objAll = $this->Attendees_model->getPublished();
      $objCurrent = $this->Attendees_model->get(7);

      $objData["PublishedTiles"] = $objAll;
      $objData["CurrentObject"] = $objCurrent;
      $this->load->view('animate2', $objData);
  }


  public function story11()
  {
      $this->load->view('story11');
  }

  public function story7()
  {
      $this->load->view('story7');
  }

  public function record()
  {
      $this->load->view('record');
  }

  public function testemail()
  {
      $this->load->library('email');
      $this->config->load('email', true);

      if(!isset($this->config->item("email")["testemail_enable"]) || !$this->config->item("email")["testemail_enable"]) {
          exit();
      }

      echo("Attempting to send out test email <br>");

      $this->email->set_mailtype('html');
      $this->email->from($this->config->item("email")["email_from"]);
      $this->email->to($this->config->item("email")["testemail_to"]);
      $this->email->subject($this->config->item("email")["testemail_subject"]);
      $this->email->message($this->config->item("email")["testemail_message"]);

      if($this->email->send(false)) {
          echo("Email was sucessful <br>");
      } else {
          echo("Failed to send <br>");
          echo $this->email->print_debugger();
      }
  }

}