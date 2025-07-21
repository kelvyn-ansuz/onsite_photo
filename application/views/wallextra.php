
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

<video loop muted autoplay poster="" class="fullscreen-bg__video">
    <source src="<?php echo base_url("assets/images/background.mp4") ?>" type="video/mp4">
 </video>



</div>
<?php

  //printObject($PublishedTiles);

  foreach ($PublishedTiles as $tiles) {
    $arrTop = array(-550,-500,-450,-400);

    $intTop = $arrTop[array_rand($arrTop)] + rand(0, 40);

    $arrLeft = array(100,200,300,400,500,600,700);

    $intLeft = $arrLeft[array_rand($arrLeft)] + rand(0, 80);

    $i = $tiles->AtCollectionID;


?>

<div id="leave_<?php echo($i); ?>" class="leaves tag" style="top: <?php echo($intTop); ?>px; left: <?php echo($intLeft); ?>px;">
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

<div id="big_2" class="leaves tag bigtag" style="top: -200px; left: 60px; transform: scale(0.22) ">
  <div style="width: 100%" class="tagText" id="big_2_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_2_name">
  </div>
</div>

<div id="big_1" class="leaves tag bigtag" style="top: -200px; left: 250px; transform: scale(0.22) ">
  <div style="width: 100%" class="tagText" id="big_1_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_1_name">
  </div>
</div>

<div id="big_3" class="leaves tag bigtag" style="top: -200px; left: 1200px; transform: scale(0.22) ">
  <div style="width: 100%" class="tagText" id="big_3_text">
  </div>
  <div style="width: 100%; text-align: right;" class="tagName" id="big_3_name">
  </div>
</div>

<div id="main_tag" class="leaves tag bigtag" style="top: -270px; left: 585px; transform: scale(0.42)  translate(0, 500px)">
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

    $("#main_tag").fadeOut(200);

    function growLeave(objData, intTarget, boolRequeue){

      //console.log("Growing:" + intTarget + " " + growTimer);
      if (growTimer==null) {

        strText = objData.AtText;
        strFrom = "- " + objData.AtFirstName + " " + objData.AtLastName;
        strID = objData.AtCollectionID;

        growTimer = setTimeout("console.log('animationActive')",5000);

        strOriginal = $("#main_tag").css("transform");

        $("#main_tag").hide();

        //$("#main_tag").css("transform","scale(0.42)");

        setTimeout(function(){
          $("#main_tag").fadeIn(2000);
        },100);

        $("#main_tag_text").text(strText);
        $("#main_tag_name").text(strFrom);
        $("#main_tag").data("tileID",strID);


        setTimeout(function(){

          $("#main_tag").css("z-index","1000");
          $("#main_tag").css("transform","scale(0.42)");

        },1000);

        setTimeout(function(){

          $("#main_tag").fadeOut(500);
        },5000);


        setTimeout(function(){
          $("#main_tag").css("transform",strOriginal);
          $("#main_tag").css("z-index","90");
          $("#main_tag").data("tileID",null);

          $("#main_tag_text").text("");
          $("#main_tag_name").text("");

          bigText = [];
          bigFrom = [];

          bigText[0] = strText;
          bigText[1] = $("#big_1_text").html();
          bigText[2] = $("#big_2_text").html();
          bigText[3] = $("#big_3_text").html();

          bigFrom[0] = strFrom;
          bigFrom[1] = $("#big_1_name").html();
          bigFrom[2] = $("#big_2_name").html();
          bigFrom[3] = $("#big_3_name").html();



          for(i=1; i<=3; i++){
            strNumber = i;

            if(strText.length > 0) {


              strTarget = "#big_" + strNumber;
              $(strTarget).css("transform","rotateY(180deg) scale(0.22)");
              $(strTarget).data("tileID",strID);


              $("#big_" + strNumber + "_text").fadeOut(500);
              $("#big_" + strNumber + "_name").fadeOut(500);


              strOriginal = $(strTarget).css("transform");

              setTimeout(function(){

                for(i=1; i<=3; i++){

                  strTarget = "#big_" + i;

//                  console.log("bigText[" + i + "-1]" + bigText[i-1]);

                  $("#big_" + i + "_text").html(bigText[i-1]);
                  $("#big_" + i + "_name").html(bigFrom[i-1]);

                  $("#big_" + i + "_text").delay(200).fadeIn(300);
                  $("#big_" + i + "_name").delay(200).fadeIn(300);

                  $(strTarget).css("transform",strOriginal);

                }


              },1000);

            }


          }


          setTimeout(function(){

            clearTimeout(growTimer);
            growTimer = null;

          },3500);

        },4500);


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

      if (growTimer==null) {

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
          $(strTarget).css("transform","rotateY(180deg) scale(0.22)");
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

                arrTop = [-550,-500,-450,-400];
                intTop = arrTop[Math.floor(Math.random() * arrTop.length)] + Math.floor(Math.random() * 40);

                arrLeft = [100,200,300,400,500,600,700];
                intLeft = arrLeft[Math.floor(Math.random() * arrLeft.length)] + Math.floor(Math.random() * 80);

                $objBody = $("body");

                strHTML = '<div id="leave_' + intID + '" class="leaves tag" style="top: ' + intTop + 'px; left: ' + intLeft + 'px;">';
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
    randomGrow();

    //growLeave();

  });


</script>

</body>

</html>
