<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
    <title>Wall</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.textfill.min.js')?>"></script>
    <style>
      html, body {
          margin: 0;
          height: 100%;
          overflow: hidden;
          background-color: #333;
      }

      body {
          padding: 0;
          margin: 0;
          background: #ddd top left no-repeat;
          background-size: cover;
          font-family: Arial;
      }

      .main-container{
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
      }

      .fixed {
        width: 1920px;
        height: 1080px;
        background-image: url('<?=base_url('assets/images/background.jpg')?>');
        background-size: cover;
        position: relative;
      }

      .cloud {
        width: 400px;
        height: 400px;
        position: absolute;
        /* text-shadow: 0px 0px 20px #83d4ef, 0px 0px 5px #83d4ef, 0px 0px 10px #83d4ef; */
      }

      .cloudleft {
        background-image: url('<?=base_url('assets/images/cloud_l.png')?>');
        background-size: 100% 100%;
      }

      .cloudright {
        background-image: url('<?=base_url('assets/images/cloud_r.png')?>');
        background-size: 100% 100%;
      }

      .cloudtext{
        position: absolute;
        left: 55px;
        top: 85px;
        font-family: Arial;
        width: 185px;
        height: 75px;
        padding: 5px;
        font-size: 16px;
        /* background-color: rgba(255,255,255,0.9); */
      }

      .cloudauthor{
        position: absolute;
        right: 55px;
        top: 220px;
        font-family: Arial;
        width: 275px;
        height: 20px;
        text-align: right;
        padding: 5px;
        font-size: 16px;
        /* background-color: rgba(255,255,255,0.9); */
        font-weight: bold;

      }

      .moveCloud {
        position: absolute;
        animation: linear infinite;
        animation-name: run;
        animation-duration: 30s;
      }

      @keyframes run {
        0% {
          left: 0;
        }
        50% {
          left: 1470px;
        }
        100% {
          left: 0;
        }
      }

      .growCloud {
        position: absolute;
        animation: linear;
        animation-name: grow;
        animation-duration: 10s;
        z-index: 15;
      }


      @keyframes grow {
          0% {
              transform: scale(0.4);
          }
          10% {
              transform: scale(1.2);
          }
          90% {
              transform: scale(1.2);
          }
          100% {
              transform: scale(0.4);
          }
      }




    </style>
</head>
<body>
  <div class="main-container">
    <div class="fixed" id="fixed">
      <!--
      <div style="top: 50px; left: 50px; position: absolute; text-align: center; width: 300px; height: 340px; padding: 10px; box-shadow: 0px 0px 20px #83d4ef;">
        <div style="width: 100%; height: auto;"><img src="<?=base_url('assets/images/qr.png')?>" style="width: 100%;"></div>
        <div>Scan the QR code to leave a message</div>
      </div>
      <div style="top: 50px; right: 50px; position: absolute; text-align: center; width: 300px; height: 340px; padding: 10px; box-shadow: 0px 0px 20px #83d4ef;">
        <div style="width: 100%;"><img src="<?=base_url('assets/images/qr.png')?>" style="width: 100%;"></div>
        <div>Scan the QR code to leave a message</div>
      </div>
      -->


    <!--

    <?php

      foreach ($PublishedTiles as $tiles) {

        $height = rand(320,540);
        $width = rand(-50,1470);
    ?>

    <div id="cloud_<?=$tiles->AtCollectionID?>" class="cloud move" style="top: <?=$height?>px; left: <?=$width?>px; transform:scale(0.4);">
      <div class="cloudtext"><?=$tiles->AtText?></div>
      <div class="cloudauthor"><?=$tiles->AtFirstName?> <?=$tiles->AtLastName?></div>
    </div>

    <?php
      }
    ?>

    -->

    </div>
  </div>

  <script type="text/javascript">

    var isPlaying = false;
    var arrIDs = [];
    var arrNewIDs = [];
    var initDisplay = true;

    function randomIntFromInterval(x, y, z) { // min and max included

        const numberOfSteps = Math.floor((y - x) / z) + 1; // +1 to include the 'y' value if it's a multiple of z
        const randomStepIndex = Math.floor(Math.random() * numberOfSteps);
        const randomNumber = x + (randomStepIndex * z);

        return randomNumber;

    }

    function escapeNull(str) {
        return str === null ? '' : str;
    }

    $.fn.random = function() {
        return this.eq(Math.floor(Math.random() * this.length));
    };

    var arrCnt = -1;

    function getRandomTag() {
      return $('.cloud.move').random();
    }

    function animateClouds(){
      console.log("Move clouds");
      $('.cloud.move').each(function() {

        intMove = randomIntFromInterval(-50,1470, 10);
        intDelay = randomIntFromInterval(8000,9800, 10);

        $( this ).animate({left: intMove + 'px'}, intDelay);
      });

      setTimeout(function() {
        animateClouds();
      }, 10000);
    }

    function checkStatus() {

      //idleAnimation();


      $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
        if(data){

          intCnt = 1;

          console.log(data);

          data.forEach(function(objItem){

            if(!arrIDs.includes(objItem.AtCollectionID)) {
              console.log("Add " + objItem.AtCollectionID);
              arrIDs.push(objItem.AtCollectionID);
              arrNewIDs.push(objItem.AtCollectionID);

              //320,480
              var xheight = randomIntFromInterval(5,200,10);
              var xwidth = randomIntFromInterval(25,1485,20);

              //25 1470


              var strHTML = "";

              if(xwidth<=710){
                strHTML = '<div id="cloud_' + objItem.AtCollectionID + '" class="cloud cloudleft move" style="top:' + xheight + 'px; left:' + xwidth + 'px; transform:scale(0.4);">';
              } else {
                strHTML = '<div id="cloud_' + objItem.AtCollectionID + '" class="cloud cloudright move" style="top:' + xheight + 'px; left:' + xwidth + 'px; transform:scale(0.4);">';
              }

              strHTML += '<div class="cloudtext">' + objItem.AtText + '</div>';
              strHTML += '<div class="cloudauthor">' + objItem.AtFirstName + " " + objItem.AtLastName + '</div>';
              strHTML += '</div>';
              var newTag = $(strHTML);

              $('#fixed').append(newTag);
            }

            /*
            //alert(objItem.toSource());

            setTimeout(function(){
              //$("#image_" + flipX + "_" + flipY).attr("src","wall/" + image);

              $("#image_" + objItem.AtRow +  "_" + objItem.AtColumn).attr("src","<?php echo(base_url("ajax/convert/")); ?>" + objItem.AtCollectionID);
              flipTile(objItem.AtRow, objItem.AtColumn);
            }, 500 * intCnt);

            intCnt++;
            */
          });

        }
      });

      setTimeout(function() {
        checkStatus();
      }, 10000);

    }

    function idleAnimation() {

      if(!isPlaying) {

        isPlaying = true;
        if(initDisplay){
          arrNewIDs = [];
          initDisplay = false;
        }


        if (arrNewIDs.length) {
          var tag = $("#cloud_" + arrNewIDs[0]);
          console.log("New: #cloud_" + arrNewIDs[0]);
          arrNewIDs.shift();
        } else {
          var tag = getRandomTag();
        }

        tag.stop();
        tag.removeClass("move");
        tag.addClass("growCloud");

        console.log("grow");

        setTimeout(function() {
          tag.addClass("move");
          tag.removeClass("growCloud");
          isPlaying = false;
        }, 12000);
      }


      setTimeout(function() {
        idleAnimation();
      }, 2000);

    }

    $(document).ready(function() {

      checkStatus();
      idleAnimation();

      setTimeout(function() {
        //animateClouds();
      }, 2000);

    });


  </script>

</body>
</html>