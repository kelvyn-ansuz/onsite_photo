<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=isset($title) ? $title.' - ' : ''?><?=isset($settings['eventName']) ? $settings['eventName'] : ''?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-datetimepicker.min.css')?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome-animation.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/dashboard.css?4=1')?>">
  <script src="<?=base_url('assets/js/jquery-2.1.3.min.js')?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

</head>
<body  style="background-image: url('<?=base_url('assets/images/draw.jpg')?>'); background-size: cover; background-position: center center; background-attachment: fixed;">

<?php
$table = 8;
?>

<div class="container-fluid">

<div class="registration-container" style="padding-top: 30px; padding-bottom:0px; max-width:200px; margin: auto;">
  <img src="<?=base_url('assets/images/logo.png')?>" style="width: 100%;">
</div>

<div class="registration-container" style="padding-top: 0px; padding-bottom:10px;">
  <div class="mainForm container-fluid" style="max-width:700px!important; padding:10px;text-align:center;">

    <div class="row" style="padding-top: 40px;">
      <div class="col dashheader">8-Course Chinese Menu</div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
          Fairmont Signature Hot & Cold Combination
          <br>(Crispy Seafood Wanton with Mayonnaise, Unagi Sushi, Chicken Ngoh Hiang, Jelly Fish)
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
          Braised Pumpkin Soup with Scallop and Enoki Mushroom
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
          Poached Live Prawns with Chinese Herbal
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
          Roasted Chicken with Crispy Shallot and Sesame Crumb
      </div>
    </div>


    <div class="row">
      <div class="col dashcontent2">
          Braised Shitake Mushroom, Nai Bai Oyster Sauce
      </div>
    </div>


    <div class="row">
      <div class="col dashcontent2">
        Steamed Live Seabass with Hainanese Ginger Sauce
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Wok Fried Egg Noodles with Shredded Roasted Duck, Beansprout and Chives
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Mango Sago Cream with Pomelo
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Chinese Tea
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      <hr style="border-top: solid 2px #fff;">
      </div>
    </div>

    <div class="row">
      <div class="col dashheader">8-Course Chinese Vegetarian Menu</div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Fairmont Signature Hot & Cold Combination
        <br>(Green Mango Salad, Homemade Pipa Tofu, Wok Fried Sugar Bean with Carrot, Sushi Inari Bean
        Curd)
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Braised Pumpkin Soup with Enoki Mushroom and Tofu
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
        Wok Fried Rainbow Vegetables
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      Braised Milk Cabbage with Asparagus
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      Braised Shiitake Mushroom with Gingko Nuts & Broccoli
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      Crispy Mapo Tofu
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      Wok Fried Rice Noodles Vermicelli with Mixed Vegetables
      </div>
    </div>

    <div class="row">
      <div class="col dashcontent2">
      Mango Sago Cream with Pomelo
      </div>
    </div>



    <div class="row paddingtop10">


      <div class="col-md-12">
        <a href="<?=base_url('/list')?>" class="btn btn-custom btn-block btn-lg">Back to Dashboard</a>
      </div>


  </div>
</div>

</body>
</html>
