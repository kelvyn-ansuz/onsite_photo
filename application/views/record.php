<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMUseum | Wishing Tree</title>
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/style.css')?>">
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/birds.css')?>">
  <script data-main="<?=base_url('assets/js/record.js')?>" src="<?=base_url('assets/js/require.js')?>" async></script>
</head>
<body id="body" style="background-color: #cccccc;">

<div class="birdUnfold pink" id="bird1" data-bgcolor="pink" data-flipped="" style="opacity: 1; top: 50px; left: 50px; background-color: #ffffff">

  <div class="step1 headUnfold pink"></div>
  <div class="step1 mainUnfold pink"></div>
  <div class="step1 unfoldCloneContainer pink">
    <div class="step1 mainCloneUnfold pink"></div>
  </div>
  <div class="step1 backUnfold pink"></div>
  <div class="step1 frontFeetUnfold pink"></div>
  <div class="step1 backFeetUnfold pink"></div>

  <div class="step2 quarterBack pink"></div>
  <div class="step2 quarterFoldContainer pink">
    <div class="step2 quarterUnfold pink"></div>
  </div>

  <div class="step3 half pink"></div>
  <div class="otherHalfContainer pink">
    <div class="otherHalf pink"></div>
  </div>
</div>

<div class="birdUnfold blue" id="bird2" data-bgcolor="blue" data-flipped="" style="opacity: 1; top: 50px; left: 1150px; background-color: #ffffff">

  <div class="step1 headUnfold blue"></div>
  <div class="step1 mainUnfold blue"></div>
  <div class="step1 unfoldCloneContainer blue">
    <div class="step1 mainCloneUnfold blue"></div>
  </div>
  <div class="step1 backUnfold blue"></div>
  <div class="step1 frontFeetUnfold blue"></div>
  <div class="step1 backFeetUnfold blue"></div>

  <div class="step2 quarterBack blue"></div>
  <div class="step2 quarterFoldContainer blue">
    <div class="step2 quarterUnfold blue"></div>
  </div>

  <div class="step3 half blue"></div>
  <div class="otherHalfContainer blue">
    <div class="otherHalf blue"></div>
  </div>
</div>


<div class="birdUnfold brown" id="bird3" data-bgcolor="brown" data-flipped="" style="opacity: 1; top: 50px; left: 2250px; background-color: #ffffff">

  <div class="step1 headUnfold brown"></div>
  <div class="step1 mainUnfold brown"></div>
  <div class="step1 unfoldCloneContainer brown">
    <div class="step1 mainCloneUnfold brown"></div>
  </div>
  <div class="step1 backUnfold brown"></div>
  <div class="step1 frontFeetUnfold brown"></div>
  <div class="step1 backFeetUnfold brown"></div>

  <div class="step2 quarterBack brown"></div>
  <div class="step2 quarterFoldContainer brown">
    <div class="step2 quarterUnfold brown"></div>
  </div>

  <div class="step3 half brown"></div>
  <div class="otherHalfContainer brown">
    <div class="otherHalf brown"></div>
  </div>
</div>

<div class="preload">
  <img src="<?=base_url('assets/images/unfold/pink/darken.png')?>">
  <img src="<?=base_url('assets/images/unfold/pink/half2_rotated.png')?>">
  <img src="<?=base_url('assets/images/unfold/blue/darken.png')?>">
  <img src="<?=base_url('assets/images/unfold/blue/half2_rotated.png')?>">
  <img src="<?=base_url('assets/images/unfold/brown/darken.png')?>">
  <img src="<?=base_url('assets/images/unfold/brown/half2_rotated.png')?>">
</div>

</body>

</html>