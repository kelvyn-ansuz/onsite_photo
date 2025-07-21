<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMUseum | Wishing Tree</title>
  <link rel="shortcut icon" href="<?=base_url('assets/images/smu_favicon.png')?>" type="image/png" />
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/style.css')?>">
  <link rel="stylesheet" media="all" href="<?=base_url('assets/css/birds.css')?>">
  <script data-main="<?=base_url('assets/js/animate.js')?>" src="<?=base_url('assets/js/require.js')?>" async></script>
</head>
<body>
  <div class="wrapper">

    <header id="header" class="site-header">
      <div style="background: crimson; font-size: 14px; padding: 5px; line-height: 20px;">
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
                  <div class="collapse navbar-collapse " id="navbarNav" style="z-index: 999; position:absolute; right: -15px; top:117px; background-color: #2b3265; width: 220px;">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://give.smu.edu.sg/office-of-advancement/imaginebetter/imagine-better-smu-bursary-fund">Make a Gift</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo(base_url("pen"));  ?>">Pen Your Wish</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://smuseum.smu.edu.sg/">Visit SMUseum</a>
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
            <li class=""><a href="<?php echo(base_url("pen"));  ?>">Pen Your Wish</a></li>
            <li class=""><a href="https://smuseum.smu.edu.sg/">Visit SMUseum</a></li>
          </ul>
          <ul class="ml-3 subheader-nav d-lg-none">
            <li class=""><a href="#">Wishing Tree</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- <div class="anniv-cta">
      <img src="<?=base_url('assets/images/20thAnniversary_cta.png')?>" alt="">
    </div>

    <div class="anniv-block">
      <div class="close-btn">
        <p>X</p>
      </div>
      <a href="javascript:void(0)">
      <img src="<?=base_url('assets/images/20thAnniversary_logo.png')?>" alt="">
      <p style="display: block;">SMU turns 20 this year! Join us in celebrating this momentous year with an exciting
        line-up of events. More details coming soon.</p>
      </a>
    </div> -->

    <div id="rotate2portrait" class="overlay d-flex justify-content-center align-items-center" style="opacity: 0;">
      <div class="newOverlayContent" style="width: 90%;">
          <div class="newOverlayContentBody" style="padding: 30px; text-align: center; font-family: oswald; ">
            <i class="fa fa-sync-alt fa-2x" aria-hidden="true"></i>
            <br>This experience is best viewed in portrait mode.
            <br>Please rotate your device.
          </div>
      </div>
    </div>

    <div class="loading">
      <div class="loadingMessage">
        Loading...
        <i style="text-align: center;" class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
        <span class="sr-only"></span>
      </div>
    </div>

    <div class="thankyou flex-grow-1 pencontainer" style="min-height: 100px; opacity: 0; height: 100%; display: none; overflow: hidden">
        <div class="d-flex flex-column align-items-center h-100 w-100">
            <div class="flex-grow-1 row ">
                <div class="col-sm-12 my-auto" style="font-size: 14px; text-align: center; padding-right: 60px; padding-left: 60px;">
                  Once approved, your message may take up to 3 days to be displayed on the Wishing Tree.
                  <br>
                  <br>Thank you again for your well wishes.
                </div>
            </div>
        </div>
    </div>


    <div class="content" style="opacity: 1;">
      <div class="notSupported" style="height: 100%; width:100%; position: absolute; display: none; z-index: 9999; text-align: center">
        <table style="width: 100%; height: 100%">
          <tr>
            <td style="font-size: 24px; font-family: oswald;">
              Looks like your browser is not optimized for this site.
              <br>Please use the latest version of Chrome, Edge, Safari, or Firefox for a better experience.
            </td>
          </tr>
        </table>
      </div>

      <div style="position: absolute; top: 10px; left: 10px; width: 50px; height: 50px;  z-index:1000">
        <i id="btnMute" class="fas fa-2x fa-volume-mute" aria-hidden="true"></i>
      </div>

      <div style="opacity: 0;" id="abuttonHidder">

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

      <div class="background"></div>
      <div class="tree"></div>
      <div class="flowers"></div>
      <!--<div class="all"></div>-->

      <div class="butterflyYellow" id="butterfly01">
        <div class="butterflyYellowLeft"></div>
        <div class="butterflyYellowRight"></div>
      </div>

      <div class="butterflyBlue" id="butterfly02">
        <div class="butterflyRedLeft"></div>
        <div class="butterflyRedRight"></div>
      </div>

      <!--
      <div class="butterflyBlue" id="butterfly03">
        <div class="butterflyBlueLeft"></div>
        <div class="butterflyBlueRight"></div>
      </div>
      -->

      <div class="butterflyPurple" id="butterfly04">
        <div class="butterflyPurpleLeft"></div>
        <div class="butterflyPurpleRight"></div>
      </div>

      <div class="leave" id="leave1" style="left:100px;"></div>
      <div class="leave" id="leave2" style="left:200px;"></div>
      <div class="leave" id="leave3" style="left:300px;"></div>
      <div class="leave" id="leave4" style="left:400px;"></div>
      <div class="leave" id="leave5" style="left:500px;"></div>
      <div class="leave" id="leave6" style="left:600px;"></div>


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

    <?php

      foreach($Birds as $objBird){
        $objData["id"] = $objBird["id"];
        $objData["text"] = $objBird["text"];
        $objData["firstname"] = $objBird["firstname"];
        $objData["lastname"] = $objBird["lastname"];
        $objData["bgcolor"] = $objBird["bgcolor"];
        $objData["flipped"] = $objBird["flipped"];


        if($objData["id"]==18) {
          $this->load->view('bird_template_old', $objData);
        } else {
          $this->load->view('bird_template', $objData);
        }
      }

      $strBirdButtonTemplate = '<div class="birdStatic [CLASS]" id="bird[ID]" data-bgcolor="[BGCOLOR]" data-flipped="true">';

      $strBirdButtonTemplate .= '<div class="closeBird birdButtons">';
      $strBirdButtonTemplate .= '<a href="javascript:void(0)" class="closeBirdBtn">';
      $strBirdButtonTemplate .= '<i class="fa fa-times circle-icon" style="width: 70px; height: 70px; line-height: 70px; font-size:45px; color: #ffffff"></i>';
      $strBirdButtonTemplate .= '</a>';
      $strBirdButtonTemplate .= "</div>\n";

      $strBirdButtonTemplate .= '<div class="previousBird birdButtons">';
      $strBirdButtonTemplate .= '<a href="javascript:void(0)" class="previousBirdBtn">';
      $strBirdButtonTemplate .= '<i class="fas fa-chevron-left circle-icon" style="width: 50px; height: 50px; line-height: 50px; font-size:35px; color: #ffffff"></i>';
      $strBirdButtonTemplate .= '</a>';
      $strBirdButtonTemplate .= "</div>\n";

      $strBirdButtonTemplate .= '<div class="nextBird birdButtons">';
      $strBirdButtonTemplate .= '<a href="javascript:void(0)" class="nextBirdBtn">';
      $strBirdButtonTemplate .= '<i class="fas fa-chevron-right circle-icon" style="width: 50px; height: 50px; line-height: 50px; font-size:35px; color: #ffffff"></i>';
      $strBirdButtonTemplate .= '</a>';
      $strBirdButtonTemplate .= "</div>\n";

      $strBirdButtonTemplate .= '<div class="birdText">';
      $strBirdButtonTemplate .= '<div class="text-inner-container"><p>[TEXT]</p>';
      $strBirdButtonTemplate .= '<p>[FIRST_NAME] [LAST_NAME]</p>';
      $strBirdButtonTemplate .= "</div>\n";
      $strBirdButtonTemplate .= "</div>\n";

      $strBirdButtonTemplate .= "</div>\n\n";

      foreach($Birds as $objBird){

        $strBird = $strBirdButtonTemplate;

        $strBird = str_replace("[ID]", $objBird["id"], $strBird);
        $strBird = str_replace("[TEXT]", $objBird["text"], $strBird);
        $strBird = str_replace("[BGCOLOR]", $objBird["bgcolor"], $strBird);
        $strBird = str_replace("[CLASS]", $objBird["class"], $strBird);

        $strBird = str_replace("[FIRST_NAME]", $objBird["firstname"], $strBird);
        $strBird = str_replace("[LAST_NAME]", $objBird["lastname"], $strBird);

        //echo($strBird);

      }

    ?>




        <div class="preload">
            <img src="<?=base_url('assets/images/unfold/pink/darken.png')?>">
            <img src="<?=base_url('assets/images/unfold/pink/half2_rotated.png')?>">
            <img src="<?=base_url('assets/images/unfold/blue/darken.png')?>">
            <img src="<?=base_url('assets/images/unfold/blue/half2_rotated.png')?>">
            <img src="<?=base_url('assets/images/unfold/brown/darken.png')?>">
            <img src="<?=base_url('assets/images/unfold/brown/half2_rotated.png')?>">

        </div>

      </div>

      <footer role="site-footer" id="footer" class="site-footer overwriteFooter">
        <div id="footerUp" style="position: absolute; bottom: 155px; width: 100%; text-align: center; display: none">
          <i id="showExtra" class="fas fa-chevron-up circle-icon" style="width: 26px; height: 26px; line-height: 26px; font-size:18px; color: #ffffff"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 common-footer">
                    <div id="copyright" class="float-left">
                        <div class="footer-menu">
                            <a href="https://www.smu.edu.sg/terms-use" class="href footerLink">Terms of Use</a> |
                            <a href="https://www.smu.edu.sg/privacy-statement" class="href">Privacy Statement </a> |
                            <a href="https://www.smu.edu.sg/form/contact-dpo" class="href">Contact Data Protection
                                Officer </a> |
                            <a href="https://goo.gl/forms/sFyabWz2ikMCw8YE3" target="_blank">Website Feedback</a>
                        </div>
                        <div class="footer-copyright">© Copyright 2020 Singapore Management University. All Rights
                            Reserved</div>
                    </div>
                    <div id="social-menu" class="float-right">
                        <ul>
                            <li class="facebook"><a target="_blank" class="smu-social-channels facebook"
                                    title="SMU on Facebook" href="http://facebook.com/sgsmu"><i
                                        class="fab fa-facebook-square"></i><span
                                        class="menu-item">Facebook</span></a></li>
                            <li class="instragram"><a target="_blank" class="smu-social-channels instragram"
                                    href="https://www.instagram.com/sgsmu"><i class="fab fa-instagram"></i><span
                                        class="menu-item">Instagram</span></a></li>
                            <li class="twitter"><a target="_blank" class="smu-social-channels twitter"
                                    title="SMU (@sgsmu) on Twitter" href="http://twitter.com/sgsmu"><i
                                        class="fab fa-twitter-square"></i><span class="menu-item">Twitter</span></a>
                            </li>
                            <li class="linkedin"><a target="_blank" class="smu-social-channels linkedin"
                                    title="SMU on LinkedIn"
                                    href="http://www.linkedin.com/company/singapore-management-university/"><i
                                        class="fab fa-linkedin"></i><span class="menu-item">LinkedIn</span></a></li>
                            <li class="youtube"><a target="_blank" class="smu-social-channels youtube"
                                    title="SMU on YouTube" href="http://www.youtube.com/smutubesg"><i
                                        class="fab fa-youtube-square"></i><span class="menu-item">YouTube</span></a>
                            </li>
                            <li class="soundcloud"><a target="_blank" class="smu-social-channels soundcloud"
                                    href="http://soundcloud.com/sgsmu"><i class="fab fa-soundcloud"></i><span
                                        class="menu-item">SoundCloud</span></a>
                            </li>

                            <li class="smublog"><a target="_blank" class="smu-social-channels smublog"
                                    href="http://blog.smu.edu.sg/"><i class="fa fa-pen-square"></i><span
                                        class="menu-item">SMU Blog</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </footer>
      </div>
    <audio id="audioID" loop><source src="../assets/audio/background.mp3"  type="audio/mp3"></audio>
  </body>
  </html>
