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
    }



/* main container */
.container{
	top:0px;
	width:100%;
	height:100%;
	position:absolute;
	left:0%;
	background:#ddd url(<?php echo base_url("assets/images/base.png") ?>) center center no-repeat;
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
  background:url(<?php echo base_url("assets/images/leave_tag.png") ?>);
  width: 991px;
  height: 1731px;
  background-size: contain;
  background-repeat: no-repeat;
  padding-left: 150px;
  padding-right: 150px;
  padding-top: 700px;
  padding-bottom: 200px;
  font-size: 70px;
  color: #ffffff;

  transform: scale(0.02);
  -webkit-transform: scale(0.02);
  -moz-transform: scale(0.02);
  -o-transform: scale(0.02);


  z-index: 90;
  position: absolute;
  font-weight: bold;
  transition: transform 250ms ease-in-out;
}

</style>



</head>

<body>

<?php

  for($i=0;$i<100;$i++){

    $arrTop = array(950,900,850,800,750);


    $intTop = $arrTop[array_rand($arrTop)] + rand(0, 40);

    $arrLeft = array(-100, 0,100,200,300,400,500,600,700);

    $intLeft = $arrLeft[array_rand($arrLeft)] + rand(0, 80);

    $strRotate = "";

    $strRotate =  "transform: rotate(" . rand(-45,45) .  "deg) scale 0.5";

?>

<div id="leave_<?php echo($i); ?>" class="leaves tag" style="top: -<?php echo($intTop); ?>px; left: <?php echo($intLeft); ?>px; transform:rotate(<?php echo(rand(-45,45)); ?>deg) scale(0.02)">
  <div style="width: 100%">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor velit porttitor, imperdiet ante in, lobortis mi. Phasellus efficitur arcu eu metus sagittis, sed blandit eros venenatis. Ut sem nulla.
  </div>
  <div style="width: 100%;   text-align: right;">
  - Kelvyn Zhuang (<?php echo($i); ?>)
  </div>
</div>

<?php
  }

?>

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

<script type="text/javascript">

var growTimer = null;


$(document).ready(function() {

function growLeave(){
  if (growTimer==null) {
    intCnt = $(".leaves").length;
    intTarget = Math.floor(Math.random() * intCnt);
    //alert("#leave_" + intTarget);
    $("#leave_" + intTarget).css("z-index","1000");
    strOriginal = $("#leave_" + intTarget).css("transform");
    $("#leave_" + intTarget).css("transform","scale(0.2)");

    setTimeout(function(){
      $("#leave_" + intTarget).css("transform",strOriginal);
      $("#leave_" + intTarget).css("z-index","90");
      setTimeout(function(){
      growLeave();
    },2000);

    },5000);

    //$(strElement).css("transform","scale(2,2)");
  } else {

    setTimeout(function(){
      growLeave();
    },1000);
  }
}

growLeave();

});


</script>

</body>

</html>