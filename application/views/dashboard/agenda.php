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
  <style>

    .agendaTable {
      width: 100%;
      font-family: mont;
      font-size: 22px;
      border-spacing: 10px;
      border-collapse: separate;
    }

    th, td {
      padding: 10px;
    }

    tr:nth-child(even) {
      background-color: #034769;
    }

    tr:nth-child(odd) {
      background-color: #9e5434;
    }

  </style>
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

        <div style="color:#fff; font-size: 36px; text-align: center; font-family: Mont; width: 100%;   text-shadow: 2px 2px 4px black;">Event Agenda</div>

        <div class="table-responsive" style="padding-top: 20px;">

          <table class="agendaTable">
            <tr>
              <td>9:00am</td>
              <td align="left" style="padding-left: 20px;">Registration</td>
            </tr>
            <tr>
              <td>9:30am</td>
              <td align="left" style="padding-left: 20px;">Doors Open</td>
            </tr>
            <tr>
              <td>10:00am</td>
              <td align="left" style="padding-left: 20px;">Emcee Opening</td>
            </tr>
            <tr>
              <td>10:05am</td>
              <td align="left" style="padding-left: 20px;">Opening Address by Derrick</td>
            </tr>
            <tr>
              <td>10:15am</td>
              <td align="left" style="padding-left: 20px;">Long Service Award</td>
            </tr>
            <tr>
              <td>10:25am</td>
              <td align="left" style="padding-left: 20px;">Short Speech by Wayne</td>
            </tr>
            <tr>
              <td>10:30am</td>
              <td align="left" style="padding-left: 20px;">Bursary Award</td>
            </tr>
            <tr>
              <td>11:00am</td>
              <td align="left" style="padding-left: 20px;">Lunch</td>
            </tr>
            <tr>
              <td>12:30pm</td>
              <td align="left" style="padding-left: 20px;">Lucky Draw</td>
            </tr>
          </table>

        </div>

        <div class="col-md-12" style="padding-top: 20px;">
          <a href="<?=base_url('')?>" class="btn btn-custom btn-block btn-lg" id="talenttime">Back to Main</a>
        </div>


      </div>

    </div>
  </div>
</div>


</body>
</html>
