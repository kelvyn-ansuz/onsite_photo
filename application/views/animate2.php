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
    <title>Home | SMU Theme</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/smu.css')?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/wall.css')?>">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.textfill.min.js')?>"></script>
    <script src="<?=base_url('assets/js/objectFitPolyfill.min.js')?>"></script>
    
</head>
<body class="body-smu front path-frontpage page-node-type-page home d-flex flex-column">

<div style="background: crimson; font-size: 14px; padding: 5px; 15px; line-height: 20px;">
<center><a style="color: #fff" href="https://crisisresponse.smu.edu.sg" target="_blank"><strong>Advisories and updates on 2019 Novel Coronavirus (COVID-19)</strong> <i class="fas fa-external-link-alt"></i></a></center> 
</div>

<header id="header" class="site-header">
    <div class="container-fluid">
        <div id="header-two" class="header-shadow header-two obg-site row">
            <div class="navbar-header-container container-fluid px-lg-5">
                <div class="navbar-header branding d-flex align-items-center">
                    <div class="site-branding mr-auto">
                        <div class="ob-smu-logo"><a target="_blank" href="https://www.smu.edu.sg" rel="home" title="Singapore Management University (SMU)" name="top"><img class="ob-smulogo d-none d-md-inline-block" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-d-smu.svg')?>" width="153" height="60"><img class="ob-smulogo d-none d-sm-inline-block d-md-none" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-t-smu.svg')?>" width="113" height="60"><img class="ob-smulogo d-inline-block d-sm-none" alt="Singapore Management University (SMU)" src="<?=base_url('assets/svgs/logo-m-smu.svg')?>" width="37" height="48"></a></div><div class="ob-oblique"><img src="<?=base_url('assets/svgs/oblique.svg')?>"></div>
                    </div>
                    <div id="branding-subheader" class="branding-subheader d-none d-lg-inline-block ml-auto">
                        <h3><a href="./">SMUseum</a></h3>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="mobile-subheader row">
            <ul class="ml-3 subheader-nav">
                <li class=""><a target="_blank" class="" href="#">SMUseum</a></li>
                <li class=""><a target="_blank" class="active" href="#">Wishing Tree</a></li>
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

<div id="animation-1" class="" data-id="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

<div id="animation-2"></div>

<div id="animation-3" data-id="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

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
  

    

<!--    <iframe src="--><?//=base_url('wall')?><!--" frameborder="0"></iframe>-->
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

    function rescale() {

        if (window.document.documentMode) {
            //alert("hai");
        }        

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
        
      jQuery(document).ready(function() {
        newTagSubmittedAnimation("<?php echo($CurrentObject->AtFirstName); ?>","<?php echo($CurrentObject->AtLastName); ?>","<?php echo($CurrentObject->AtText); ?>");

        function newTagSubmittedAnimation(strFirstName, strLastName, strMessage) {
          console.log('New-tag-published animation initialized');
          animationInProgress = true;
          var arrColors = [
            'ccc5ab',
            'fdd2c1',
            '91d8ec'
          ];
          var color = arrColors[Math.floor(Math.random() * arrColors.length)];


          animation1.find('.text-container').css('background-color', color);
          animation1.attr('data-id', "1");
          // animation1.find('.text').html(tag.AtText);
          // animation1.find('.text-author').html(escapeNull(tag.AtFirstName) + '<br>' + escapeNull(tag.AtLastName));
          animation1.find('.text').html('');
          animation1.find('.text-author').html('');
          animation1.textfill({
              innerTag: '.text-inner-container',
              maxFontPixels: 20,
              explicitWidth: 90,
              explicitHeight: 90
          });
          animation1.addClass('animating');

          setTimeout(function() {
              animation2.addClass('animating');
              animation3.css('background-color', color);
              animation3.attr('data-id', 1);
              setTimeout(function() {
                  animation3.find('.text').html(strMessage);
                  animation3.find('.text-author').html(escapeNull(strFirstName) + '<br>' + escapeNull(strLastName));
                  animation3.textfill({
                      innerTag: '.text-inner-container',
                      maxFontPixels: 50,
                      explicitWidth: 250,
                      explicitHeight: 250
                  });
              }, 1000);
              animation3.addClass('animating');
              setTimeout(function() {
                  animation1.removeClass('animating');
              }, 2000);
              setTimeout(function() {
                  animation2.removeClass('animating');
                  animation3.removeClass('animating');
                  setTimeout(function() {
                      window.location.href = "<?=base_url('/')?>";
                  }, 2000);
              }, <?=$animation3Duration * 1000?>);
          }, <?=$animation1Duration * 1000?>)
      }

    });        

    });

    rescale();
</script>

<script>
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

        jQuery(window).on('resize', function(){
            rescale();
        });

    });



</script>

</body>
</html>