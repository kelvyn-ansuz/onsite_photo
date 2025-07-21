<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-colorpicker.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-formhelpers.min.css"); ?>">

    <script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/fabric.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-colorpicker.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-formhelpers.min.js"); ?>"></script>

    <title>Reflections Wall</title>
</head>
<body>

<div id="homeDiv" style="display: none;">
    <i class="fas fa-home fa-4x btnHome" id="btnHome"></i>
    <span class="fa-stack btnHome fa-2x" id="btnCounter">
        <span class="fas fa-circle-notch fa-stack-2x fa-spin"></span>
        <strong class="fa-stack-1x" id="timerDiv">30</strong>
    </span>
</div>


<div class="h-100 d-flex justify-content-center align-items-center">

  <div class="stage" id="stage1">
    <div class="logoPad"><img src="<?php echo base_url("assets/images/logo.png"); ?>" class="img-fluid" style="max-width: 400px;"></div>
    <h2>Sorry, but we are still setting up!</h2>
  </div>
</div>

<input type="hidden" name="tagSelected" id="tagSelected">

<script type='text/javascript'>

$(document).ready(function() {
  $("#btnCounter").hide();

  var inactiveCountdown;
  var intStart;

  var transition = function(itemA, ItemB) {
    $(".modal").modal('hide');
    $(itemA).hide("200");
    $(ItemB).delay("200").show("200");;
  }

  var startInactive = function() {
    intStart = 60;
    if(!inactiveCountdown) {
      inactiveCountdown = setInterval(function(){
          intStart--;
          $("#timerDiv").text(intStart);

          if(intStart==30){
              $("#btnHome").hide();
              $("#btnCounter").show();
          } else if(intStart>30) {
              $("#btnHome").show();
              $("#btnCounter").hide();
          }


          if(intStart==0) {
              clearInterval(inactiveCountdown);
              window.location.href = "<?php echo base_url(); ?>";
          }
      }, 1000);
    }
  }

  var reposHome = function(strDisplay){
    //alert("caleld" + $(window).height() + "-" + $(window).width());

    if($(window).height() > $(window).width()){
      $('#orientationModal').modal('show')
      //alert("aa");

    } else {
      $('#orientationModal').modal('hide')

    }


    var stagePos = $("#stage1").offset();
    stagePos = $("#stage1").offset();
    $("#homeDiv").css({
        position: "absolute",
        top: (stagePos.top+20) + "px",
        right: (stagePos.left+20) + "px",
        width: $("#img").width() + "px",
        "text-align": "center",
        display: "block",
      });
  }

  reposHome();

  $(document).on('click', '.btnHome', function(e) {
    e.preventDefault();
    window.location.href = "<?php echo base_url(); ?>";
  });

  $(document).on('click', 'input', function(e) {
    startInactive();
  });

  $(document).on('keypress', 'input', function(e) {
    startInactive();
  });

  $(document).on('submit', '.frmStage2', function(e) {
    e.preventDefault();
    transition(".stage2", "#actualCanvas");

    <?php

      /*
      $fi = new FilesystemIterator(FCPATH . "wall", FilesystemIterator::SKIP_DOTS);
      $intCnt = iterator_count($fi) -1;
      if($intCnt%2==0){
          $strDirection = "left";
      } else {
          $strDirection = "right";
      }
      */

    ?>

    $('[data-toggle="tooltip"]').tooltip();
    $('#colorpicker').colorpicker();

    var canvas = new fabric.Canvas('c',{width: 3000, height: 1000});

    canvas.setBackgroundImage('assets/images/left.jpg', canvas.renderAll.bind(canvas), {
      originX: 'left',
      originY: 'top'
    });

    var textbox = new fabric.Textbox('Start typing!', {
      left: 250,
      top: 450,
      width: 2500,
      fontSize: 80,
      fontFamily: 'Arial',
      lockScalingY: true
    });

    canvas.add(textbox).setActiveObject(textbox);

    textbox.enterEditing();
    textbox.selectAll();
    textbox.hiddenTextarea.focus();

    resizecanvas();

    $(document).on('change', '#color', function(e) {
      e.preventDefault();
      objThis = $(this);
      textbox.set({fill: objThis.val()});
      canvas.requestRenderAll();
      startInactive();
    });


    $('.bfh-selectbox').on('change.bfhselectbox', function () {
        var fontName = $(this).val();
        console.log(fontName);
        textbox.set("fontFamily", fontName);
        canvas.requestRenderAll();
        startInactive();
    });

    $(document).on('click', '.alignIcon', function(e) {
      e.preventDefault();
      $(".alignIcon").css("background-color", "");
      objThis = $(this);
      $(this).css("background-color", "#e9ecef");
      textbox.set("textAlign", objThis.data("value"));
      canvas.requestRenderAll();
      startInactive();
    });

    $(document).on('click', '.emoji', function(e) {
      e.preventDefault();
      objThis = $(this);
      textbox.text = textbox.text  + " " + $(this).val();
      canvas.requestRenderAll();
      startInactive();
    });

    $(document).on('change', '#fontSize', function(e) {
      e.preventDefault();

      objThis = $(this);
      objThis.tooltip('hide')
        .attr('data-original-title', objThis.val())
        .tooltip('show');

      textbox.set("fontSize", objThis.val());
      canvas.requestRenderAll();
    });

    $(document).on('click', '#btnSave', function(e) {
      e.preventDefault();

      strText = textbox.text;
      strImage = canvas.toDataURL('png');
      strTag = $("#tagSelected").val();
      strEmail = $("#" + strTag + "Email").val();

      $("#fontSize").tooltip('hide')

      canvas.setDimensions({ width: 3000, height: 1000 });
      canvas.setViewportTransform([1 , 0, 0, 1 , 0, 0])

      strImage = canvas.toDataURL('png');

      //window.open(strImage);

      resizecanvas();

      $('#processingModal').modal('show')

      setTimeout(function(){

        $.post("ajax/saveImage/", { strText: strText, strImage: strImage, strEmail: strEmail , strTag: strTag} , function(data){
          if(data.status==false){
            $('#processingModal').modal('hide')

            setTimeout(function(){
              $('#oobModal').modal('show')
            }, 1000);

          } else {
            $('#processingModal').modal('hide')
            transition("#actualCanvas", "#complete");
          }
        });

      }, 1000);

      return;
    });

    function resizecanvas() {
      var canvasSizer = document.getElementById("canvasSizer");


      intWindowWidth = $(window).width();

      //var width = canvasSizer.offsetWidth;
      width = intWindowWidth * 0.8;
      originalWidth = 3000;

      zoom = width/originalWidth;

      newHeight = 1000 * zoom;

      canvas.setDimensions({ width: width, height: newHeight });
      canvas.setViewportTransform([zoom , 0, 0, zoom , 0, 0])
    }


  });

  $(document).on('click', '.btnCancel2', function(e) {
    //e.preventDefault();
    $(".emailOverwite").val("");
    transition(".stage2", "#stage1");
  });

  $(document).on('click', '.btnTag', function(e) {
    e.preventDefault();
    objTag = $(this);
    $("#tagSelected").val(objTag.val());
    transition("#stage1", "#stage2_" + objTag.attr("id"));
  });

  $(window).on('resize', function(){
    reposHome();
  });

});


</script>

</body>
</html>