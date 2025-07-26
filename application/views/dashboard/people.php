<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elitez 2025</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-datetimepicker.min.css')?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome-animation.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/dashboard.css?4=1')?>">
  <script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
</head>
<body>

<div style="padding-top: 0px; padding-bottom:0px; max-width:700px; margin: auto;">
  <img src="<?=base_url('assets/images/header.png')?>" style="width: 100%;">
</div>

<div class="container-fluid">

  <div class="registration-container" style="padding-top: 0px; padding-bottom:10px;">
    <div class="mainForm container-fluid" style="max-width:700px!important; padding:10px;text-align:center;">

      <?php
      if (isset($error)>0) {
          ?>
          <div class="alert alert-danger" role="alert">
              <?php echo($error) ?>
          </div>
          <?php
      }

      ?>

      <div class="row" style="padding-top: 20px;">

        <div style="color:#fff; font-size: 36px; text-align: center; font-family: Mont; width: 100%;   text-shadow: 2px 2px 4px black;">Meet Our Long Service Awardees!</div>

        <div style="padding-top: 50px; color:#fff; font-size: 32px; text-align: center; font-family: Mont; width: 100%;   text-shadow: 2px 2px 4px black;">10 Years</div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/2')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Li Qian</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/3')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Tan Hui Qing</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/1')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Tok Mei Ting</a>
        </div>

        <div style="padding-top: 50px; color:#fff; font-size: 32px; text-align: center; font-family: Mont; width: 100%;   text-shadow: 2px 2px 4px black;">5 Years</div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/8')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Chan Wai Seng Nicholas</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/6')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Chia Jun Hao (Josh)</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/5')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Chua Yu Jinn (Eugene)</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/7')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Heng Zeng Yang Ian</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/9')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">How Hee Chek (Jaysen)</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/4')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Kenneth Koh</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/10')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Tsai Pei Hua (Penny)</a>
        </div>

        <div style="padding-top: 50px; color:#fff; font-size: 32px; text-align: center; font-family: Mont; width: 100%;   text-shadow: 2px 2px 4px black;">Dedicated Service Award</div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/11')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Ellen Cheong</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/12')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Kevin Chong</a>
        </div>

        <div class="col-md-12 paddingtop20">
          <a href="<?=base_url('service/details/13')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Liew Yuk Kong</a>
        </div>

        <div class="col-md-12" style="padding-top: 80px;">
          <a href="<?=base_url('')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Back to Main</a>
        </div>

        <!--
        <div class="col-md-12 <?php if($this->settings['gameMenu'] !== 'yes') { echo(" hide"); }?>">
          <a href="game" class="btn btn-primary btn-block btn-lg " id="resetBtn">Table Game</a>
          Please allow camera access when prompted.
        </div>

        <div class="col-md-12 paddingtop20 <?php if($this->settings['ttMenu'] !== 'yes') { echo(" hide"); }?>">
          <a href="<?=base_url('vote/talenttime')?>" class="btn btn-primary btn-block btn-lg" id="talenttime">Talent Time Voting</a>
        </div>

        <div class="col-md-12 paddingtop20 <?php if($this->settings['BDMenu'] !== 'yes') { echo(" hide"); }?>">
          <a href="<?=base_url('vote/bestdress')?>" class="btn btn-primary btn-block btn-lg" id="bestdresss">Best Dress Voting</a>
        </div>
        -->


      </div>

    </div>
  </div>
</div>


</body>
</html>
