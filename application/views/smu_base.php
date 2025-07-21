<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<html dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# " class=" js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="SMU Theme">
    <meta charset="utf-8">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <title>SMUseum | Wishing Tree</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/smu.css')?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/wall.css')?>">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.textfill.min.js')?>"></script>
    <script src="<?=base_url('assets/js/objectFitPolyfill.min.js')?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</head>
<body class="body-smu front path-frontpage page-node-type-page home d-flex flex-column">
<header id="header" class="site-header">
<div style="background: crimson; font-size: 14px; padding: 5px; 15px; line-height: 20px;">
<center><a style="color: #fff" href="https://crisisresponse.smu.edu.sg" target="_blank"><strong>Advisories and updates on 2019 Novel Coronavirus (COVID-19)</strong> <i class="fas fa-external-link-alt"></i></a></center>
</div>
    <div class="container-fluid">
        <div id="header-two" class="header-shadow header-two obg-site row">
            <div class="navbar-header-container container-fluid px-lg-5">
                <div class="navbar-header branding d-flex align-items-center">
                    <div class="site-branding mr-auto">
                        <div class="ob-smu-logo"><a target="_blank" href="https://www.smu.edu.sg" rel="home" title="Singapore Management University (SMU)" name="top"><img class="ob-smulogo d-none d-md-inline-block" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-d-smu.svg')?>" width="153" height="60"><img class="ob-smulogo d-none d-sm-inline-block d-md-none" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-t-smu.svg')?>" width="113" height="60"><img class="ob-smulogo d-inline-block d-sm-none" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-m-smu.svg')?>" width="37" height="48"></a></div><div class="ob-oblique"><img src="<?=base_url('assets/svgs/oblique.svg')?>"></div>
                    </div>
                    <div id="branding-subheader" class="branding-subheader d-none d-lg-inline-block ml-auto">
                        <h3><a href="./">Wishing Tree</a></h3>
                    </div>
                    <div id="branding-subheader" class="branding-subheader d-lg-none ml-auto">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: #ffffff">
                            <button class="newToggle navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarNav" style="z-index: 999; position:absolute; right: -15px; top:117px; background-color: rgba(21, 28, 85, 0.9); width: 220px;">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank" href="https://give.smu.edu.sg/office-of-advancement/imaginebetter/imagine-better-smu-bursary-fund">Make a Gift</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url("/pen")?>">Pen Your Wish</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://ansuz.info">Visit SMUseum</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-subheader row">
            <ul class="ml-3 subheader-nav d-none d-lg-block">
                <li class=""><a class="active" href="#">Home</a></li>
                <li class=""><a target="_blank" href="https://give.smu.edu.sg/office-of-advancement/imaginebetter/imagine-better-smu-bursary-fund">Make a Gift</a></li>
                <li class=""><a href="<?=base_url("/pen")?>">Pen Your Wish</a></li>
                <li class=""><a href="https://ansuz.info">Visit SMUseum</a></li>
            </ul>

            <ul class="ml-3 subheader-nav d-lg-none">
                <li class=""><a href="#">Wishing Tree</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- <div class="anniv-cta">
    <img src="https://www.smu.edu.sg/sites/default/files/smu/20thAnniversary/20thAnniversary_cta.png" alt="">
</div>

<div class="anniv-block">
    <div class="close-btn">
        <p>X</p>
    </div>
    <a href="javascript:void(0)">
        <img src="https://www.smu.edu.sg/sites/default/files/smu/20thAnniversary/20thAnniversary_logo.png" alt="">
        <p style="display: block;">SMU turns 20 this year! Join us in celebrating this momentous year with an exciting
            line-up of events. More details coming soon.</p>
    </a>
</div> -->

<div class="main-container flex-fill d-flex position-relative">

    <div class="videoContainer d-lg-none hidden-md-up ">
        <video loop muted autoplay class="bgVideo" type="video/mp4">
            <source src="<?=base_url('assets/images/background_noplogo.mp4')?>" type="video/mp4">
        </video>
    </div>

    <div class="container2 d-none d-lg-flex">
        <video loop muted autoplay class="media2" type="video/mp4" data-object-fit="cover">
            <source src="<?=base_url('assets/images/wide.mp4')?>" type="video/mp4">
        </video>
    </div>

    <div style="display: none;" id="buttonHidder">

    <a href="https://give.smu.edu.sg/office-of-advancement/imaginebetter/imagine-better-smu-bursary-fund" target="_blank">
        <div class="d-lg-none hidden-md-up" style="position: absolute; bottom: 10px; left: 10px; z-index:1000">
            <span style="color: #ffffff; vertical-align: top;" class="fa-stack fa-2x">
                <i style="color: #151c55" class="fas fa-circle fa-stack-2x"></i>
                <i class="far fa-circle fa-stack-2x"></i>
                <i class="fas fa-gift fa-stack-1x"></i>
            </span>
        </div>
    </a>

    <a href="<?=base_url('pen')?>">
        <div class="d-lg-none hidden-md-up" style="position: absolute; bottom: 10px; right: 10px; z-index:1000">
            <span style="color: #ffffff; vertical-align: top;" class="fa-stack fa-2x">
                <i style="color: #151c55" class="fas fa-circle fa-stack-2x"></i>
                <i class="far fa-circle fa-stack-2x"></i>
                <i class="fas fa-pen fa-stack-1x"></i>
            </span>
        </div>
    </a>

    <a href="https://give.smu.edu.sg/office-of-advancement/imaginebetter/imagine-better-smu-bursary-fund" target="_blank">
        <div class="landingButton d-none d-lg-flex" style="position: absolute; bottom: 30px; left: 30px;">
            <div style="width: 25px; color: white; padding-top: 6px; margin-left: 3px;">
                <span class="fa-stack" style="font-size:16px">
                    <i class="far fa-circle fa-stack-2x"></i>
                    <i class="fas fa-gift fa-stack-1x"></i>
                </span>
            </div>
            <div style="flex-grow: 1; text-align: center; color: #ffffff; display: flex; justify-content: center; align-items: center; font-size: 14px">
                <span>Make A Gift</span>
            </div>
        </div>
    </a>

    <a href="<?=base_url('pen')?>">
        <div class="landingButton d-none d-lg-flex" style="position: absolute; bottom: 30px; right: 30px;">
        <div style="width: 25px; color: white; padding-top: 6px; margin-left: 3px;">
                <span class="fa-stack" style="font-size:16px">
                    <i class="far fa-circle fa-stack-2x"></i>
                    <i class="fas fa-pen fa-stack-1x"></i>
                </span>
            </div>
            <div style="flex-grow: 1; text-align: center; color: #ffffff; display: flex; justify-content: center; align-items: center; font-size: 14px">
                <span>Pen Your Well<br>Wishes For SMU</span>
            </div>
        </div>
    </a>

    </div>
    <?php
    /*
    'b7bba6',
    'f5c24c',
    '76cbdd',
    'e2323b',
    'e4cbd1',
    '936aae',
    */
$arrColors = array(
    'ccc5ab',
    'fdd2c1',
    '91d8ec'
);

$intColor = 0;

foreach ($PublishedTiles as $tiles) {
    $angle = pow(-1, rand(1, 2)) * rand(5, 10);
    $color = $arrColors[$intColor];
    $i = $tiles->AtCollectionID;
    ?>
    <div id="leave_<?=$i?>" class="leaves tag onlineSmallTag" style="display:none;top:10px;left:10px;background-color:#<?=$color?>;transform:rotate(<?=$angle?>deg) scale(1);" data-id="<?=$tiles->AtCollectionID?>">
        <div class="text-container">
            <div class="text-inner-container" style="transform:rotate(<?=$angle * -1?>deg);">
                <p class="text"><?=$tiles->AtText?></p>
                <p class="text-author"><?=$tiles->AtFirstName?> <?=$tiles->AtLastName?></p>
            </div>
        </div>
    </div>
    <?php
    $intColor = $intColor + 1;
    if($intColor==3) {
        $intColor=0;
    }
}
?>

    <div id="animation-4" data-id="" class="">
        <div class="text-container">
            <div class="text-inner-container">
                <p class="text"></p>
                <p class="big-text-author"></p>
            </div>
        </div>
    </div>

    <div id="animation-5" data-id="" class="">
        <div class="text-container">
            <div class="text-inner-container">
                <p class="text"></p>
                <p class="big-text-author"></p>
            </div>
        </div>
    </div>

<!--    <iframe src="--><?//=base_url('wall')?><!--" frameborder="0"></iframe>-->
</div>

<div id="rotate2portrait" class="overlay d-flex justify-content-center align-items-center">
     <div class="newOverlayContent" style="width: 90%;">
        <div class="newOverlayContentBody" style="padding: 30px;">
            The height of your current view is too small.
            <br>Please rotate your device to portrait or use another device.
        </div>
    </div>
</div>


<div id="myNav" class="overlay d-flex justify-content-center align-items-center">

    <div class="newOverlayContent">
        <div class="newOverlayContentHeader d-flex d-flex justify-content-between">
            <div class="overLayHeaderPadding" style=""></div>
            <div class="overLayHeader"><h3>THE WISHING TREE</h3></div>
            <div class="overLayHeaderPadding" style="text-align: right; padding:10px">
                <a href="javascript:void(0)" onclick="hideOverlay()">
                    <i class="fas fa-times" style="color: #151c55; font-size:30px;"></i>
                </a>
            </div>
        </div>
        <div class="newOverlayContentBody">
            The Bodhi Tree preserved in SMU’s Campus Green is said to have been planted in the 19th century where a century-old prison used to stand. A member of the family of fig trees, or also known by its botanical name Ficus Religiosa, it is similar to one under which the Buddha, Siddhartha Gautama, is said to have sat under and attained enlightenment. It symbolizes wisdom, compassion and awareness.
            <br>
            <br>Like our Bodhi Tree, which has witnessed change and survived the passage of time, our own virtual Wishing Tree represents respect for our past and a yearning for a better future, one marked by education, wisdom and compassion.
            <br>
            <br>As you sit under The Wishing Tree, we welcome your well wishes for our beloved university. Your kind thoughts and donations will encourage and motivate us to make meaningful impact as responsible individuals and as a life-giving community.
        </div>
    </div>
</div>

<footer id="footer" class="site-footer" style="z-index:500;">
    <div class="container-fluid">
        <div class="row">
            <div class="col common-footer">
                <div id="copyright" class="float-md-left text-center text-md-left">
                    <div class="footer-menu mb-1 mb-md-0">
                        <a href="https://www.smu.edu.sg/terms-use" class="href"> Terms of Use</a> |
                        <a href="https://www.smu.edu.sg/privacy-statement" class="href">Privacy Statement </a> |
                        <a href="https://www.smu.edu.sg/form/contact-dpo" class="href">Contact Data Protection Officer </a> |
                        <a href="https://goo.gl/forms/sFyabWz2ikMCw8YE3" target="_blank">Website Feedback</a>
                    </div>
                    <div class="footer-copyright">© Copyright 2020 Singapore Management University. All Rights Reserved</div>
                </div>
                <div id="social-menu" class="float-md-right d-md-block d-none">
                    <ul>
                        <li class="facebook"><a target="_blank" class="smu-social-channels facebook" title="SMU on Facebook" href="http://facebook.com/sgsmu"><i class="fab fa-facebook-square"></i><span class="menu-item">Facebook</span></a></li>
                        <li class="instagram"><a target="_blank" class="smu-social-channels instagram" href="https://www.instagram.com/sgsmu"><i class="fab fa-instagram"></i><span class="menu-item">Instagram</span></a></li>
                        <li class="twitter"><a target="_blank" class="smu-social-channels twitter" title="SMU (@sgsmu) on Twitter" href="http://twitter.com/sgsmu"><i class="fab fa-twitter-square"></i><span class="menu-item">Twitter</span></a></li>
                        <li class="linkedin"><a target="_blank" class="smu-social-channels linkedin" title="SMU on LinkedIn" href="http://www.linkedin.com/company/singapore-management-university/"><i class="fab fa-linkedin"></i><span class="menu-item">LinkedIn</span></a></li>
                        <li class="youtube"><a target="_blank" class="smu-social-channels youtube" title="SMU on YouTube" href="http://www.youtube.com/smutubesg"><i class="fab fa-youtube-square"></i><span class="menu-item">YouTube</span></a></li>
                        <li class="soundcloud"><a target="_blank" class="smu-social-channels soundcloud" href="http://soundcloud.com/sgsmu"><i class="fab fa-soundcloud"></i><span class="menu-item">SoundCloud</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<script type="text/javascript">
    jQuery.noConflict();

    window.bigTagSize = 100;
    window.pauseAnimation = true;

    function rescale() {

        if(jQuery(".main-container").height() < 150){
            window.pauseAnimation = true;
            jQuery("#rotate2portrait").height("100%")
            jQuery("#buttonHidder").hide();
            jQuery(".onlineSmallTag").hide();
            jQuery("#animation4").removeClass('animating');
            jQuery("#animation5").removeClass('animating');
            return;
        } else {
            window.pauseAnimation = false;
            jQuery("#rotate2portrait").height("0%")
            jQuery("#buttonHidder").fadeIn(500);
            jQuery(".onlineSmallTag").delay(500).fadeIn(500);
            jQuery("#animation4").fadeIn(500);
            jQuery("#animation5").fadeIn(500);
        }

        /*
        // KIV for IE detection
        if (window.document.documentMode) {
            //alert("hai");
        }
        */

        objSmallTags = jQuery(".onlineSmallTag");

        windowHeight = jQuery(window).height();
        windowWidth = jQuery(window).width();
        aspectRatio =  windowWidth/windowHeight;

        var videoContainerHeight = windowHeight - 282;
        jQuery(".container2").css("height", videoContainerHeight + "px");

        if(aspectRatio>1.99) {
            intStart = Math.floor(windowWidth/3.8) - 20;
            intEnd = windowWidth-intStart-70;
            intDiff = Math.floor((intEnd-intStart)/8)
        } else {
            intStart = Math.floor(windowWidth/3.6) - 20;
            intEnd = windowWidth-intStart-70;
            intDiff = 80;
        }


        var arrLeft = [];

        intI = intStart;

        while(intI < intEnd) {
            arrLeft.push(intI);
            intI = intI + intDiff;
        }

        intStart = Math.floor(windowHeight/5)
        intDiff = 40

        var arrTop = [];

        intI = intStart;

        for (i = 0; i < 6; i++) {
            arrTop.push(intStart + (i*intDiff));
            //console.log(intStart + (i*intDiff));
        }


        if(jQuery(window).width() < 992){

            tagScale = 30;
            tagFont = 1;
            if(windowWidth<= 992 && windowWidth>= 768) {
                intStart = 250
                intEnd = windowWidth-intStart;
                intDiff = Math.floor((intEnd-intStart)/10)

                if(intDiff < 80) {
                    intDiff = 80;
                }

                var arrLeft = [];

                intI = intStart;

                while(intI < intEnd) {
                    arrLeft.push(intI);
                    intI = intI + intDiff;
                }

                windowHeight = jQuery(window).height();
                intStart = Math.floor(windowHeight/5)
                intDiff = 40

                if(windowHeight> windowWidth){
                    var arrTop = [100,140,180,200,240];
                    resizeBigAnimation(20, 200, 110);
                } else {
                    var arrTop = [20,50,80];
                    resizeBigAnimation(20, 170, 110);
                }



                intI = intStart;


                /*
                animation5.css('left', '60%');
                animation5.css('transform', 'scale(0.65) rotate(-8deg)');
                animation5.css('bottom', '-50px');
                */

            }

            if(windowWidth< 768 && windowWidth>= 576) {
                intStart = 100
                arrTop = [80,110,140,170];

                /*
                animation5.css('left', '40%');
                animation5.css('transform', 'scale(0.55) rotate(-8deg)');
                animation5.css('bottom', '-50px');
                */

                resizeBigAnimation(20, 150, 100);
            }

            if(windowWidth< 576){
                arrTop = [80,100,120];
                arrLeft = [40,80,120,160,200,240,(windowWidth-170)];

                resizeBigAnimation(80, 150, 20);

                tagScale = 25;
                tagFont = 1;

                //animation5.css('left', (windowWidth-320) + "px");
                //animation5.css('transform', 'scale(0.45) rotate(-8deg)');
                //animation5.css('bottom', '-150px');
            }



        } else {
            if(aspectRatio>1.99){

                if(windowWidth <= 1400) {
                    addHeight = 20;
                    arrTop = [(50+addHeight),(110+addHeight)];
                } else {
                    addHeight = windowHeight/4.5-100;
                    arrTop = [(50+addHeight),(110+addHeight)];
                }

                if(windowHeight>1000) {
                    resizeBigAnimation(20, 350, Math.floor(windowWidth/4));
                    tagScale = 60;
                    tagFont = 3;
                } else {
                    intTarget = Math.floor(windowHeight/3.5);
                    if(intTarget>200){
                        intTarget = 200;
                    }
                    resizeBigAnimation(20, intTarget, Math.floor(windowWidth/4));
                    tagScale = 40;
                    tagFont = 1.5;
                }

            } else{
                if(windowHeight>=2000) {
                    addHeight = 300;
                    if(windowWidth >= 3000){
                        arrTop = [(120+addHeight),(160+addHeight),(220+addHeight),(280+addHeight),(340+addHeight),(400+addHeight),(460+addHeight)];
                    } else {
                        arrTop = [(160+addHeight),(220+addHeight),(280+addHeight)];
                    }
                } else if(windowHeight<2000 && windowHeight>=1200){
                    addHeight = 100;
                    arrTop = [(160+addHeight),(220+addHeight),(280+addHeight)];
                } else if(windowHeight<1200 && windowHeight>=900){
                    addHeight = 50;
                    arrTop = [(160+addHeight),(220+addHeight),(280+addHeight)];
                } else if(windowHeight<900 && windowHeight>=700){
                    arrTop = [(150),(190)];
                } else {
                    addHeight = -10;
                    arrTop = [(100+addHeight),(150+addHeight)];
                }

                if(windowWidth <= 1400) {
                    resizeBigAnimation(10, 150, Math.floor(windowWidth/3.5));
                    tagScale = 25;
                    tagFont = 1;
                } else {
                    if(windowHeight>1000) {
                        resizeBigAnimation(20, 350, Math.floor(windowWidth/4));
                        tagScale = 60;
                        tagFont = 3;
                    } else {
                        resizeBigAnimation(20, 200, Math.floor(windowWidth/4));
                        tagScale = 40;
                        tagFont = 1.5;
                    }
                }
            }
        }

        objSmallTags.each(function(){

            var intTop = arrTop[Math.floor(Math.random() * arrTop.length)] +  Math.floor(Math.random() * 20) + Math.floor(Math.random() * 40);
            var intLeft = arrLeft[Math.floor(Math.random() * arrLeft.length)] +  Math.floor(Math.random() * 20) + Math.floor(Math.random() * 40);

            objThis = jQuery(this)

            objThis.css('height', tagScale + 'px');
            objThis.css('width', tagScale + 'px');
            objThis.css('font-size', tagFont + 'px');
            objThis.css('overflow', 'hidden');

            objThis.css('left', intLeft + 'px');
            objThis.css('top', intTop + 'px');
        });

    }

    function resizeBigAnimation(intBottom, intWidth, intOffset){
        animation4.css('width', intWidth + 'px');
        animation4.css('height', intWidth + 'px');
        animation5.css('width', intWidth + 'px');
        animation5.css('height', intWidth + 'px');

        animation4.css('left', intOffset + "px");
        animation4.css('bottom', intBottom + 'px');

        animation5.css('left', (windowWidth-intOffset-intWidth) + "px");
        animation5.css('bottom', intBottom + 'px')

        //animation5.find(".text-author").css('font-size', 8 + 'px');

        //jQuery("#animation-4 ").css('font-size', 8 + 'px')
        //jQuery("#animation-5 .text-author").css('font-size', 8 + 'px')
    }


    var growTimer = null;
    var animationInProgress = false;
    var idleAnimationType = 1;
    var newTagSubmittedQueue = [];
    var animation1 = jQuery('#animation-1');
    var animation2 = jQuery('#animation-2');
    var animation3 = jQuery('#animation-3');
    var animation4 = jQuery('#animation-4');
    var animation5 = jQuery('#animation-5');

    function escapeNull(str) {
        return str === null ? '' : str;
    }

    jQuery.fn.random = function() {
        return this.eq(Math.floor(Math.random() * this.length));
    };

    function getRandomTag() {
        return jQuery('.onlineSmallTag').random();
    }

    jQuery(document).ready(function() {

        function wallActivity() {
            console.log('Initiailizing wall activity');

            if(!window.pauseAnimation) {

                if (animationInProgress) {
                    console.log('Animation in progress');
                } else {
                    console.log('No animation in progress');

                    console.log(newTagSubmittedQueue.length + ' new tags submitted in queue');
                    var smallTags = jQuery('.onlineSmallTag');
                    console.log(smallTags.length + ' tags currently displayed on the wall');

                    /*
                    if (newTagSubmittedQueue.length) {
                        console.log('Initializing new-tag-submitted animation');
                        newTagSubmittedAnimation();
                    } else */

                    if (smallTags.length) {
                        console.log('Initializing idle animation');
                        idleAnimation();
                    } else {
                        console.log('No animation can be played');
                    }
                }

            }

            setTimeout(function() {
                wallActivity();
            }, 1000);
        }

        function idleAnimation() {
            console.log('Idle animation initialized');
            animationInProgress = true;

            var tag = getRandomTag();
            var tagHTML = tag.find('.text-inner-container').html();

            tagHTML = tagHTML.replace("text-author","big-text-author");

            if (idleAnimationType === 1) {
                console.log('Idle animation type 1');
                idleAnimationType = 2; // switch animation type for next call
                animation4.css('background-color', tag.css('background-color'));
                animation4.attr('data-id', tag.data('id'));
                animation4.find('.text-inner-container').html(tagHTML);
                animation4.textfill({
                    innerTag: '.text-inner-container',
                    maxFontPixels: Math.floor(animation4.width() * 0.85/6),
                    explicitWidth: Math.floor(animation4.width() * 0.90),
                    explicitHeight: Math.floor(animation4.height() * 0.80)
                });

                animation4.find(".big-text-author").css("text-align", "right");
                //animation4.find(".big-text-author").css("text-transform", "uppercase");
                animation4.find(".big-text-author").css("font-size", Math.floor(animation4.width()/16) + "px !important");

                animation4.addClass('animating');
                setTimeout(function() {
                    animation4.removeClass('animating');
                }, <?=$animation3Duration * 1000?>);
            } else {
                console.log('Idle animation type 2');
                idleAnimationType = 1; // switch animation type for next call
                animation5.css('background-color', tag.css('background-color'));
                animation5.attr('data-id', tag.data('id'));
                animation5.find('.text-inner-container').html(tagHTML);

                animation5.textfill({
                    innerTag: '.text-inner-container',
                    maxFontPixels: Math.floor(animation4.width() * 0.85/6),
                    explicitWidth: Math.floor(animation4.width() * 0.90),
                    explicitHeight: Math.floor(animation4.height() * 0.80)
                });

                animation5.find(".big-text-author").css("text-align", "right");
                //animation5.find(".big-text-author").css("text-transform", "uppercase");
                animation5.find(".big-text-author").css("font-size", Math.floor(animation4.width()/16) + "px !important");

                animation5.addClass('animating');
                setTimeout(function() {
                    animation5.removeClass('animating');
                }, <?=$animation3Duration * 1000?>);
            }

            setTimeout(function() {
                animationInProgress = false;
                //console.log("here");
            }, <?=$animation3Duration * 1000?> - 3000)

        }

        setTimeout(function() {
            wallActivity();
        }, 3000);

    });

    rescale();
</script>

<script>
    function showOverlay() {
        document.getElementById("myNav").style.height = "100%";
    }

    function hideOverlay() {
        document.getElementById("myNav").style.height = "0%";
    }

    jQuery('.anniv-cta').click(function () {
        jQuery(this).css('display', 'none');
        jQuery('.anniv-block').css('display', 'block');
    });

    jQuery('.close-btn').click(function () {
        jQuery('.anniv-block').css('display', 'none');
        jQuery('.anniv-cta').css('display', 'block');
    });

    jQuery(document).ready(function () {
        jQuery(location).attr('href');
        var pathname = window.location.pathname;
        if (pathname.indexOf('campus-life') != -1 || pathname.indexOf('campus-development') != -1) {
            jQuery('.anniv-block').css('top', '170px');
            jQuery('.anniv-cta').css('top', '145px');
        }

        <?php
            $strShowModal = $this->input->cookie("showModal");

            if($strShowModal!=="false") {
                echo("            showOverlay();");
            }

            $cookie= array(
                'name'   => 'showModal',
                'value'  => 'false',
                'expire' => '2147483647',
                'secure' => TRUE
            );

            $this->input->set_cookie($cookie);
        ?>

        jQuery(document).on('click', '.overlay', function(e) {
            //hideOverlay();
        });

        jQuery(window).on('resize', function(){
            rescale();
        });

    });

    function setCookie(name, value, maxAgeSeconds) {
        var maxAgeSegment = "; max-age=" + maxAgeSeconds;
        document.cookie = encodeURI(name) + "=" + encodeURI(value) + maxAgeSegment;
    }

    function getCookie(c_name){var c_value = document.cookie;var c_start = c_value.indexOf(" " + c_name + "=");if (c_start == -1){c_start = c_value.indexOf(c_name + "=");}if (c_start == -1){c_value = null;}else{c_start = c_value.indexOf("=", c_start) + 1;var c_end = c_value.indexOf(";", c_start);if (c_end == -1){c_end = c_value.length;}c_value = unescape(c_value.substring(c_start,c_end));}return c_value;}
    function delCookie(name){document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';}

</script>

</body>
</html>