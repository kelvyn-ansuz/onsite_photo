<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

    @keyframes flip {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(-180deg);
        background-image: url(../assets/images/bird/brown_down.png);
      }
      100% {
        transform: rotateX(0deg);

      }
    }

    @keyframes flip2 {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(180deg);
        background-image: url(../assets/images/bird/downback.png);
      }
      100% {
        transform: rotateX(0deg);
      }
    }

    .bird {
      position: relative;
      padding: 0px;
      margin: 0px;
      width: 500px;
      height: 500px;
      z-index: 1;
      transform: scale(0.5) rotateZ(22deg);
      perspective: 1000px;
      background-color: pink;
    }

    .birdWing{
      position: absolute;
      top: 0px;
      left: 0px;

      background-image: url(../assets/images/bird/brown_wings.png);
      width: 677px;
      height: 304px;

      animation-name: flip;
      animation-duration: 4s;
      transform-origin: bottom left;
      animation-iteration-count: infinite;
      z-index: 3;


    }

    .birdWingBack{
      position: absolute;
      top: 0px;
      left: 0px;
      width: 677px;
      height: 304px;

      background-image: url(../assets/images/bird/brown_wings_back.png);

      animation-name: flip2;
      animation-duration: 4s;
      transform-origin: bottom left;
      animation-iteration-count: infinite;
      z-index: 2;

    }

    .birdBody{
      position: absolute;
      top: 303px;
      left: 122px;
      background-image: url(../assets/images/bird/brown_body.png);
      width: 415px;
      height: 165px;
      z-index: 2;
    }

    .brownFlying {
      position: relative;
      padding: 0px;
      margin: 0px;
      width: 500px;
      height: 500px;
      z-index: 1;
      transform: scale(1) rotateZ(22deg);
      perspective: 1000px;
      background-color: pink;
    }


    .brownBody{
      position: absolute;
      top: 303px;
      left: 122px;
      background-image: url(../assets/images/flying/brown_body.png);
      width: 373px;
      height: 132px;
      z-index: 2;
    }

    @keyframes brownFlip {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(-180deg);
        background-image: url(../assets/images/flying/brown_front_down.png);
      }
      100% {
        transform: rotateX(0deg);

      }
    }

    @keyframes brownFlip2 {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(180deg);
        background-image: url(../assets/images/flying/brown_back_down.png);
      }
      100% {
        transform: rotateX(0deg);
      }
    }


    .brownWing{
      position: absolute;
      top: 64px;
      left: 205px;
      background-image: url(../assets/images/flying/brown_front.png);
      width: 137px;
      height: 240px;
      animation-name: brownFlip;
      animation-duration: 4s;
      transform-origin: bottom left;
      animation-iteration-count: infinite;
      z-index: 3;
    }


    .brownWingBack{
      position: absolute;
      top: 82px;
      left: 205px;
      width: 171px;
      height: 223px;
      background-image: url(../assets/images/flying/brown_back.png);
      animation-name: brownFlip2;
      animation-duration: 4s;
      transform-origin: bottom left;
      animation-iteration-count: infinite;
      z-index: 2;
    }

    .blueFlying {
      position: relative;
      padding: 0px;
      margin: 0px;
      width: 500px;
      height: 500px;
      z-index: 1;
      transform: scale(0.5) rotateZ(-22deg);
      perspective: 1000px;
      background-color: pink;
    }


    .blueBody{
      position: absolute;
      top: 303px;
      right: 122px;
      background-image: url(../assets/images/flying/blue_body.png);
      width: 373px;
      height: 132px;
      z-index: 2;
    }

    @keyframes blueFlip {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(-180deg);
        background-image: url(../assets/images/flying/blue_front_down.png);
      }
      100% {
        transform: rotateX(0deg);

      }
    }

    @keyframes blueFlip2 {
      0% {
        transform: rotateX(0deg);
      }
      50% {
        transform: rotateX(180deg);
        background-image: url(../assets/images/flying/blue_back_down.png);
      }
      100% {
        transform: rotateX(0deg);
      }
    }


    .blueWing{
      position: absolute;
      top: 64px;
      right: 205px;
      background-image: url(../assets/images/flying/blue_front.png);
      width: 137px;
      height: 240px;
      animation-name: blueFlip;
      animation-duration: 4s;
      transform-origin: bottom right;
      animation-iteration-count: infinite;
      z-index: 3;
    }

    .blueWingBack{
      position: absolute;
      top: 82px;
      right: 205px;
      width: 171px;
      height: 223px;
      background-image: url(../assets/images/flying/blue_back.png);
      animation-name: blueFlip2;
      animation-duration: 4s;
      transform-origin: bottom left;
      animation-iteration-count: infinite;
      z-index: 2;
    }

    </style>
</head>
<body>

  <div class="bird">
    <div class="birdWing"></div>
    <div class="birdWingBack"></div>
    <div class="birdBody"></div>
  </div>

  <div class="brownFlying">
    <div class="brownWing"></div>
    <div class="brownWingBack"></div>
    <div class="brownBody"></div>
  </div>

  <div class="blueFlying">
    <div class="blueWing"></div>
    <div class="blueWingBack"></div>
    <div class="blueBody"></div>
  </div>


</body>
</html>