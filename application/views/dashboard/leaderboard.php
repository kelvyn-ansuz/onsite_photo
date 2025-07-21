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
</head>
<body style="color: #000; background-color: #000; background-image: url(<?=base_url('assets/images/draw.jpg')?>); background-size: cover; background-repeat: no-repeat; background-position: top center;">

<div style="position: absolute; top: 50px; left: 65px; z-index: 999;"><img src="<?=base_url('assets/images/qr.png')?>" style="width:200px; height: 200px;"></div>
<div style="position: absolute; top: 50px; right: 65px; z-index: 999;"><img src="<?=base_url('assets/images/qr.png')?>" style="width:200px; height: 200px;"></div>

<div class="container" style="">

<div style="padding: 50px; height: 100vh;" class="dashcontent2">

<div style="font-size: 60px;">Leaderboard</div>

<table class="table table-responsive">
  <tr>
    <td>Name</td>
    <td>Department</td>
    <td>Score</td>
  </tr>
  <tbody id="lbbody">
  </tbody>
</table>

</div>

</div>

<script type="text/javascript">
    $(function () {

      function updateTable() {


        $.getJSON( "<?=base_url('ajax/getscores')?>", function( data ) {

          var html = '';

          $.each(data, function (key, val) {

            html += "<tr><td>" + val.ScName + "</td><td>" + val.ScDepartment + "</td><td>" + val.ScScore + "</td></tr>";
          });

          $("#lbbody").empty();

          $("#lbbody").append(html);


        });

        setTimeout(function(){
          updateTable();
        },500);
      }



      updateTable();


    });
  </script>


</body>
</html>