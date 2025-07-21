<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
<title>Wall</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
  <style>

    html, body {
      margin: 0;
      height: 100%;
      overflow: hidden;
      background-color: #333;
    }

    body {
      padding: 0px;
      margin: 0px;
      background:#ddd top left no-repeat;
      background-size: cover;
    }

    .tree{

    }


    /* main container */
    .container{
      top:0px;
      width:100%;
      height:100%;
      position:absolute;
      left:0%;
      /*background:#ddd url(<?php echo base_url("assets/images/base.png") ?>) center center no-repeat;
      */
      background-size: contain;

    }

    .loader {
        text-align: center;
        top: 500px;
        position: absolute;
        width: 100%;
    }
    .loader span {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin: -230px 40px 54px  -34px;

        background: #ff0000;
        background:url(<?php echo base_url("assets/images/leave.png") ?>);
        background-size: contain;

        -webkit-animation: loader 10s infinite  linear;
        -moz-animation: loader 10s infinite  linear;
    }
    .loader span:nth-child(5n+5) {

        -webkit-animation-delay: 1.3s;
        -moz-animation-delay: 1.3s;
    }
    .loader span:nth-child(3n+2) {

        -webkit-animation-delay: 1.5s;
        -moz-animation-delay: 1.5s;
    }
    .loader span:nth-child(2n+5) {

        -webkit-animation-delay: 1.7s;
        -moz-animation-delay: 1.7s;
    }

    .loader span:nth-child(3n+10) {

        -webkit-animation-delay: 2.7s;
        -moz-animation-delay: 2.7s;
    }
    .loader span:nth-child(7n+2) {

        -webkit-animation-delay: 3.5s;
        -moz-animation-delay: 3.5s;
    }
    .loader span:nth-child(4n+5) {

        -webkit-animation-delay: 5.5s;
        -moz-animation-delay: 5.5s;
    }
    .loader span:nth-child(3n+7) {

        -webkit-animation-delay: 8s;
        -moz-animation-delay: 8s;
    }
    @-webkit-keyframes loader {
      0% {
        width: 30px;
        height: 30px;
        opacity: 1;

      -webkit-transform: translate(0, 0px) rotateZ(0deg);
      }
      66% {
        width: 30px;
        height: 30px;
        opacity: 1;

      -webkit-transform: translate(100px, 500px) rotateZ(270deg);
      }
      100% {
        width: 30px;
        height: 30px;
        opacity: 0;

      -webkit-transform: translate(150px, 600px) rotateZ(360deg);
      }
    }
    @-moz-keyframes loader {
      0% {
        width: 30px;
        height: 30px;
        opacity: 1;

      -webkit-transform: translate(0, 0px) rotateZ(0deg);
      }
      66% {
        width: 30px;
        height: 30px;
        opacity: 1;

      -webkit-transform: translate(100px, 500px) rotateZ(270deg);
      }
      100% {
        width: 30px;
        height: 30px;
        opacity: 0;

      -webkit-transform: translate(150px, 600px) rotateZ(360deg);
      }
    }

    .tag{
      font-family: 'Open Sans', sans-serif;
      background:url(<?php echo base_url("assets/images/charm2.png") ?>);
      width: 500px;
      height: 1082px;
      background-size: contain;
      background-repeat: no-repeat;
      padding-left: 65px;
      padding-right: 65px;
      padding-top: 440px;
      padding-bottom: 200px;
      font-size: 50px;

      word-break: break-word;

      transform: scale(0.04);
      -webkit-transform: scale(0.04);
      -moz-transform: scale(0.04);
      -o-transform: scale(0.04);

      color: #ffffff;

      z-index: 90;
      position: absolute;
      transition: transform 500ms ease-in-out;
    }

    .smallTag{
      transform-origin: top;
    }

    .tagText{
      font-weight: bold;
      color: #006837;     
      padding-bottom: 20px;
    }

    #status {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 15px;
      background-color: rgba(40, 40, 40, 0.5);
      color: white;
      text-align: center;
      z-index: 10;
    }


  </style>

</head>

<body>

<div id="status" style="display:none;">aaa</div>

<div style="width: 100%; height:100%;">
<!--<img src="<?php echo base_url("assets/images/base.png") ?>" style="max-width: 100%; max-height: 100%; display:block; margin:auto;">-->
<video loop muted autoplay poster="" class="fullscreen-bg__video">
    <source src="<?php echo base_url("assets/images/background.mp4") ?>" type="video/mp4">
</video>

</div>
<?php

  //printObject($PublishedTiles);

  foreach ($PublishedTiles as $tiles) {

    $arrTop = array(600,550,500,450,400,350);

    $intTop = $arrTop[array_rand($arrTop)] + rand(0, 40);

    $arrLeft = array(250,350,450,550,650,750,850,950,1000);

    $intLeft = $arrLeft[array_rand($arrLeft)] + rand(0, 80);

    $i = $tiles->AtCollectionID;


?>

<div id="leave_<?php echo($i); ?>" class="leaves tag smallTag" style="top: <?php echo($intTop); ?>px; left: <?php echo($intLeft); ?>px;">
  <div style="width: 100%" class="tagText">
  <?php echo($tiles->AtText); ?>
  </div>
  <div style="width: 100%;   text-align: right;">
  - <?php echo($tiles->AtFirstName); ?> <?php echo($tiles->AtLastName); ?>
  </div>
</div>
<?php
  }

?>

<div id="big_2" class="leaves tag bigtag" style="top: -20px; left: 100px; transform: scale(0.30) ">
  <div style="width: 100%" class="tagText" id="big_2_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_2_name">
  </div>
</div>

<div id="big_1" class="leaves tag bigtag" style="top: -20px; left: 315px; transform: scale(0.28) ">
  <div style="width: 100%" class="tagText" id="big_1_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_1_name">
  </div>
</div>

<div id="big_3" class="leaves tag bigtag" style="top: 40px; left: 1200px; transform: scale(0.28) ">
  <div style="width: 100%" class="tagText" id="big_3_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_3_name">
  </div>
</div>

<div id="main_tag" class="leaves tag bigtag" style="top: -70px; left: 920px; transform: scale(0.44)">
  <div style="width: 100%" class="tagText" id="main_tag_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="main_tag_name">
  </div>
</div>

<!--
<div class="container">
		<div class="loader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
</div>
-->

<script type="text/javascript">

  var growTimer = null;

  $(document).ready(function() {

    //$("#main_tag").fadeOut(200);

    $("#main_tag_text").fadeOut(200);
    $("#main_tag_name").fadeOut(200);

    $("#big_1").fadeOut(200);
    $("#big_2").fadeOut(200);
    $("#big_3").fadeOut(200);

    var intStarted = 0;
    function growLeave(objData, intTarget, boolRequeue){

      //console.log("Growing:" + intTarget + " " + growTimer);
      if (growTimer==null) {
        console.log("start animation");
        $("#main_tag").fadeIn(200);

        strText = objData.AtText;
        strFrom = "- " + objData.AtFirstName + " " + objData.AtLastName;
        strID = objData.AtCollectionID;

        growTimer = setTimeout("console.log('animationActive')",20000);

        $("#main_tag_text").hide();
        $("#main_tag_name").hide();

        //console.log("fade out current text");

        strOriginal = $("#main_tag").css("transform");

        //$("#main_tag").hide();

        //$("#main_tag").css("transform","scale(0.42)");

        //setTimeout(function(){
        //  $("#main_tag").fadeIn(2000);
        //},100);

        bigText = [];
        bigFrom = [];

        bigText[1] = $("#main_tag_text").html();
        bigFrom[1] = $("#main_tag_name").html();

        bigText[0] = strText;
        bigFrom[0] = strFrom;

        console.log("strText: " + strText);
        console.log("0 " + bigText[0]);
        console.log("1 " + bigText[1]);


        $("#main_tag_text").html(strText);
        $("#main_tag_name").html(strFrom);
        $("#main_tag").data("tileID",strID);

        strOriginal = $("#main_tag").css("transform");

        $("#main_tag").css("z-index","1000");
        $("#main_tag").css("transform","rotateY(180deg) scale(0.44)");

        //console.log("flip")

        intStarted = intStarted + 1;

        setTimeout(function(){

            //console.log("text in");

            $("#main_tag_text").html(strText);
            $("#main_tag_name").html(strFrom);

            $("#main_tag_text").delay(300).fadeIn(500);
            $("#main_tag_name").delay(300).fadeIn(500);

            $("#main_tag").css("transform",strOriginal);

            //console.log("fade in, flip");

        },1000);

        setTimeout(function(){
            /*
          $("#main_tag").css("transform","scale(0.44)");
          $("#main_tag").css("z-index","90");
          $("#main_tag").data("tileID",null);

          $("#main_tag_text").text("");
          $("#main_tag_name").text("");
            */

            //console.log("do small tags");

            bigText[2] = $("#big_1_text").html();
            bigText[3] = $("#big_2_text").html();
            bigText[4] = $("#big_3_text").html();

            bigFrom[2] = $("#big_1_name").html();
            bigFrom[3] = $("#big_2_name").html();
            bigFrom[4] = $("#big_3_name").html();

          //console.log(bigFrom[0].length);
          //console.log(bigFrom[1].length);
          //console.log(bigFrom[2].length);

          console.log("checking for tags");

          console.log("0 " + bigText[0]);
          console.log("1 " + bigText[1]);
          console.log("2 " + bigText[2]);
          console.log("3 " + bigText[3]);
          console.log("4 " + bigText[4]);


          if(intStarted == 2) {
            $("#big_1").fadeIn(200);

            //uguuguu();
          }

          if(intStarted == 3) {
            $("#big_2").fadeIn(200);
          }

          if(intStarted == 4) {
            $("#big_3").fadeIn(200);
          }


          for(i=1; i<=3; i++){
            strNumber = i;

            if(strText.length > 0) {

              strTarget = "#big_" + strNumber;

              if(i==2) {
                $(strTarget).css("transform","rotateY(180deg) scale(0.30)");
              } else {
                $(strTarget).css("transform","rotateY(180deg) scale(0.28)");
              }

              strOriginal = $(strTarget).css("transform");

              console.log(strOriginal);

              $(strTarget).data("tileID",strID);


              $("#big_" + strNumber + "_text").fadeOut(500);
              $("#big_" + strNumber + "_name").fadeOut(500);

              setTimeout(function(){

                for(i=1; i<=3; i++){

                  strTarget = "#big_" + i;

                  //console.log("bigText[" + i + "-1]" + bigText[i-1]);

                  $("#big_" + i + "_text").html(bigText[i]);
                  $("#big_" + i + "_name").html(bigFrom[i]);

                  $("#big_" + i + "_text").delay(200).fadeIn(300);
                  $("#big_" + i + "_name").delay(200).fadeIn(300);

                  //$(strTarget).css("transform",strOriginal);

                }

                $("#big_2").css("transform","scale(0.30)");

                setTimeout(function(){
                  $("#big_1").css("transform","scale(0.28)");
                },150);

                setTimeout(function(){
                  $("#big_3").css("transform","scale(0.28)");
                },300);


              },1000);

            }
          }

          setTimeout(function(){

            clearTimeout(growTimer);
            growTimer = null;
            console.log("animation ready");

          },1000);

        },3000);


        /*

        $("#leave_" + intTarget).css("z-index","1000");
        strOriginal = $("#leave_" + intTarget).css("transform");
        $("#leave_" + intTarget).css("transform","scale(0.2)");

        setTimeout(function(){
          $("#leave_" + intTarget).css("transform",strOriginal);
          $("#leave_" + intTarget).css("z-index","90");

          setTimeout(function(){

            clearTimeout(growTimer);
            growTimer = null;

          },2000);

        },5000);
        */

      } else {

        if(boolRequeue) {
          setTimeout(function(){
            growLeave(objData, intTarget, boolRequeue);
          },1000);
        }
      }
    }

    function randomGrow(){

      console.log("Random grow called");

      if (growTimer==null) {
        console.log("Random grow allowed");

        $("#big_1").fadeIn(200);
        $("#big_2").fadeIn(200);
        $("#big_3").fadeIn(200);
        $("#main_tag").fadeOut(200);

        strExist = "";
        objBigTags = $(".bigtag");

        jQuery.each(objBigTags, function(index, objVal){
          if($(objVal).data("tileID")){
            strExist = strExist + $(objVal).data("tileID") + "_"
          }

        });

        if(strExist){

          strExist = strExist.slice(0, -1);

        }

        $.getJSON("<?php echo(base_url("ajax/getRandomTile/")); ?>" + strExist, function (data) {

          strText = data.AtText;
          strFrom = "- " + data.AtFirstName + " " + data.AtLastName;
          strID = data.AtCollectionID;

          strNumber = (Math.floor(Math.random() * 3) + 1);

          strTarget = "#big_" + strNumber;

          if(strNumber==2) {
            $(strTarget).css("transform","rotateY(180deg) scale(0.30)");
          } else {
            $(strTarget).css("transform","rotateY(180deg) scale(0.28)");
          }

          //$(strTarget).css("transform","rotateY(180deg) scale(0.28)");
          $(strTarget).data("tileID",strID);


          $("#big_" + strNumber + "_text").fadeOut(500);
          $("#big_" + strNumber + "_name").fadeOut(500);


          strOriginal = $(strTarget).css("transform");

          setTimeout(function(){
            $("#big_" + strNumber + "_text").html(strText);
            $("#big_" + strNumber + "_name").html(strFrom);

            $("#big_" + strNumber + "_text").delay(200).fadeIn(300);
            $("#big_" + strNumber + "_name").delay(200).fadeIn(300);

            $(strTarget).css("transform",strOriginal);

          },1000);

        });




        //console.log("aa" + strTarget);
        /*
        if(objTags.length > 0) {
          objTarget = objTags[Math.floor(Math.random()*objTags.length)];
          growLeave($(objTarget).attr("ID").split("_")[1] , false);
          //console.log("target: " + intID);
        }
        */
      }

      setTimeout(function(){
        randomGrow();
      },15000);
    }

    function shakeLeaves() {
      objSmallTags = $(".smallTag");

      jQuery.each(objSmallTags, function(index, objVal){

        var min = -30;
        var max = 30;
        var randomAngle = Math.floor(Math.random() * (max - min + 1)) + min;


        var randomTime = Math.floor(Math.random() * (5000 - 1000 + 1)) + 1000;


        //var orientation = ["X","Z"];
        //var randomOrientation = Math.floor(Math.random() * 2);

        var intialTime = Math.floor(Math.random() * 101);
        var elapsed = Math.floor(Math.random() * 201) + 1500;

        setTimeout(function(){
          $(objVal).css("transform","rotate(" + randomAngle +  "deg) scale(0.04)");
          $(objVal).css("transition","transform " + randomTime + "ms ease-in-out");

          //transition: ;
        },intialTime);

        setTimeout(function(){
          $(objVal).css("transform","scale(0.04)");
        },elapsed);

      });

      setTimeout(function(){
        shakeLeaves()
      },10000);

    }

    function initSocket(){
        var conn = new WebSocket('<?php echo $this->config->item('sockets_server'); ?>');
        var statusDiv = $('#status');

        function checkServer(){
          intTimeStamp = new Date().getTime()
          conn.send("ping_" + intTimeStamp);

          setTimeout(function(){
            checkServer()
          },5000);
        }

        conn.onopen = function(e) {
          statusDiv.text('Connection Established');
          statusDiv.fadeIn(300).delay(1000).fadeOut(300);
          checkServer();
          conn.send("is_screen");
        };

        conn.onclose = function(e) {
          statusDiv.text('Connection Dropped');
          statusDiv.fadeIn(300);
        };

        conn.onerror = function(e) {
          statusDiv.text('Error Detected');
          statusDiv.fadeIn(300);
        };

        conn.onmessage = function(e) {
            var strMessage = e.data;

            if (strMessage.startsWith("publish")) {

              $.getJSON("<?php echo(base_url("ajax/publishTile/")); ?>" + strMessage.split("_")[1], function (data) {
                //console.log("pubish");
                //console.log(data);
                objItem = data;

                intCnt = $(".leaves").length;
                intID = objItem.AtCollectionID;

                arrTop = [600,550,500,450,400,350];
                intTop = arrTop[Math.floor(Math.random() * arrTop.length)] + Math.floor(Math.random() * 40);

                arrLeft = [250,350,450,550,650,750,850,950,1000];
                intLeft = arrLeft[Math.floor(Math.random() * arrLeft.length)] + Math.floor(Math.random() * 80);

                $objBody = $("body");

                strHTML = '<div id="leave_' + intID + '" class="leaves smallTag tag" style="top: ' + intTop + 'px; left: ' + intLeft + 'px;">';
                strHTML += '  <div style="width: 100%" class="tagText">';
                strHTML += objItem.AtText;
                strHTML += '  </div>';
                strHTML += '  <div style="width: 100%;   text-align: right;">';
                strHTML += "-" + objItem.AtFirstName + " " + objItem.AtLastName;
                strHTML += '  </div>';
                strHTML += '</div>';

                $objItem = $(strHTML).hide();

                $objBody.append($objItem);

                $("#leave_" + intID).fadeIn(500, function(){
                    //alert("Grow");
                    //console.log("now grow");
                    growLeave(objItem, intID, true);
                });


                //setTimeout(function(){
                //},2000);


              });


            } else if (strMessage.startsWith("unpublish")) {
              intID = strMessage.split("_")[1];
              $objTarget = $("#leave_" + intID);
              $objTarget.fadeOut(500, function(){
                  //alert("Grow");
                  //growLeave(intID);
                  $objTarget.remove();
              });

              objBigTags = $(".bigtag");

              jQuery.each(objBigTags, function(index, objVal){
                if($(objVal).data("tileID") == intID){

                  $(objVal).find(".tagText").html("");
                  $(objVal).find(".tagName").html("");


                }

              });


              //alert("UnPublish");

            }

        };
    }


    initSocket();

    setTimeout(function(){
      randomGrow();
    },10000);

    shakeLeaves();

    growLeave();

  });


</script>

</body>

</html>