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

    <div class="row">
      <div class="col dashheader">Lucky Draw Results</div>
    </div>

    <div class="row">
      <div class="col dashheader">

      <?php
        if($prize) {
          echo("Congratulations!<br>You won:<br>" . $prize);
        } else {
          echo("Sorry, you did not win any prize.");
        }
      ?>

      </div>
    </div>

    <?php
        if($prize) {
    ?>

    <div>
      <img src="<?=base_url('home/qrcode/' . $participant->PaBarcode)?>" width="100%">
    </div>

    <div class="row" style="padding-top: 20px;">
      <div class="col dashheader">
      Present the QR code at the redemption counter to redeem your prize.
      </div>
    </div>

    <?php
        }
    ?>

    <div class="row paddingtop20">
      <div class="col-md-12">
        <a href="<?=base_url('/list')?>" class="btn btn-custom btn-block btn-lg">Back to Dashboard</a>
      </div>
    </div>
</div>

</body>
</html>
