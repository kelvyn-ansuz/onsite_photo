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
<body style="background-image: url('<?=base_url('assets/images/draw.jpg')?>'); background-size: cover; background-position: center center; background-attachment: fixed;">

<?php
$table = $participant->PaAux;
?>

<div class="container-fluid">

<div class="registration-container" style="padding-top: 30px; padding-bottom:0px; max-width:200px; margin: auto;">
  <img src="<?=base_url('assets/images/logo.png')?>" style="width: 100%;">
</div>

<div class="registration-container" style="padding-top: 0px; padding-bottom:10px;">
  <div class="mainForm container-fluid" style="max-width:700px!important; padding:10px;text-align:center;">

  <div class="row">
    <div class="col dashheader">Event Floor Plan
    <div style="font-size:36px; padding-top:10px;">Your table is <?=$table?></div>
    </div>
  </div>


  <div>
    <a href="#" data-toggle="modal" data-target="#modal1">
      <img src="<?=base_url('assets/images/seating/' . $table . '.png')?>" style="width: 75vw; max-width:400px;" class="seatingimg">
      <div style="padding-top:5px;">Zoom In <i class="fa fa-search-plus"></i></div>
    </a>
  </div>

  <div class="row paddingtop10">
    <div class="col-md-12">
      <a href="<?=base_url('/list')?>" class="btn btn-custom btn-block btn-lg">Back to Dashboard</a>
    </div>
  </div>
</div>


<!-- <div class="container-x"> -->
  <!-- Modal -->
  <div class="modal fade" id="modal1" role="dialog">
    <div class="modal-dialog modal-lg" style="color: #000;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="text-align:center">
          <!-- modal header  -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>You are seated at table <?=$table?></h4>
        </div>
        <div class="modal-body">
        <!-- begin modal body content  -->

        <img src="<?=base_url('assets/images/seating/' . $table . '.png')?>" class="seatingimg">

        <!-- end modal body content  -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
<!-- </div> -->

<!-- <div class="container-x"> -->
  <!-- Modal -->
  <div class="modal fade" id="modal2" role="dialog">
    <div class="modal-dialog modal-lg" style="color: #000;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- modal header  -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <!-- begin modal body content  -->

        <img src="<?=base_url('assets/images/seating/overall.png')?>">

        <!-- end modal body content  -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
<!-- </div> -->

<script type="text/javascript">

    $(document).ready(function() {

      blinkSeat();

    });

    function blinkSeat() {
      var src = $(".seatingimg").attr('src');
      //var newsrc = (src=='<?=base_url('assets/images/seating/base.png')?>) ? '<?=base_url('assets/images/seating/' . $table . '.png')?>' : '<?=base_url('assets/images/seating/base.png')?>');
      var newsrc = (src=='<?=base_url('assets/images/seating/base.png')?>') ? '<?=base_url('assets/images/seating/' . $table . '.png')?>' : '<?=base_url('assets/images/seating/base.png')?>';
      $(".seatingimg").attr('src', newsrc );

      setTimeout(function() {
        blinkSeat();
      }, 1000);
    }



</script>




</body>
</html>
