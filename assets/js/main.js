requirejs.config({
  paths: {
      // the left side is the module ID,
      // the right side is the path to
      // the jQuery file, relative to baseUrl.
      // Also, the path should NOT include
      // the '.js' file extension. This example
      // is using jQuery 1.9.0 located at
      // js/lib/jquery-1.9.0.js, relative to
      // the HTML page.
      "jquery": "jquery-3.4.1.min",
      "velocity-animate": "velocity.min",
      "jquery.textfill" : "jquery.textfill.min",
      "bootstrap" : "bootstrap.bundle.min",
    },
    shim: {
      "velocity-animate": {
          deps: [ "jquery" ]
      },
      "bootstrap" : {
        deps: [ "jquery"]
      }
  }
 });

 require([ "jquery", "velocity-animate",'bootstrap'], function ($, Velocity) {
  $(function() {
    $('.anniv-cta').click(function () {
      $(this).css('display', 'none');
      $('.anniv-block').css('display', 'block');
      $('.anniv-cta').data("opened", true);
    });

    $('.close-btn').click(function () {
        $('.anniv-block').css('display', 'none');
        $('.anniv-cta').css('display', 'block');
        $('.anniv-cta').data("opened", false);
    });

    $(document).ready(function() {
      /*
      intScaling = calculateScaling();
      intOrigin = calculateOrigin();

      $("#bird1").css("top", 200 * calculateScaling() + "px");
      $("#bird1").css("left", (600 * calculateScaling())+intOrigin + "px");
      $("#bird1").css({transform: "translate(-50%, -50%) scale(" + intScaling + ")"});

      $(".testBox").css("top", 200 * calculateScaling() + "px");
      $(".testBox").css("left", (600 * calculateScaling())+intOrigin + "px");
      $(".testBox").css({transform: "translate(-50%, -50%) scale(" + intScaling + ")"});
      */


     var ua = window.navigator.userAgent;
     var isIE = /MSIE|Trident/.test(ua);

     if ( isIE ) {
       //IE specific code goes here
       $(".notSupported").show();
       $(".tree").hide();
       $(".flowers").hide();

       $(".loading").css("display","none");

     } else {


      if($(".content").height() < 200){
        $(".loading").css("display","none");

        $("#rotate2portrait").css("opacity","1")
        $("#rotate2portrait").height("100%")
      } else {

        document.addEventListener('click', PlayStop);
        document.addEventListener('keydown', PlayStop);

        function PlayStop() {

          var myaudio = document.getElementById("audioID");
          myaudio.play();
          document.removeEventListener('click', PlayStop);
          document.removeEventListener('keydown', PlayStop);
          $("#btnMute").removeClass("fa-volume-mute");
          $("#btnMute").addClass("fa-volume-up");
        };


        initButterflies();
        initLeaves();
        initBirds();

        $("#footerUp").css("bottom", $("#footer").outerHeight()-15);
        $("#footerUp").velocity({display: "block", opacity:1}, 500, function(){
        });




        /*
        if(isMobile()) {
          $("#footerUp").css("display","block");
          $("#footerDown").css("display","block");
        }
        */
      }

      $("#btnMute").on('click', function(){
        var myaudio = document.getElementById("audioID");

        if(myaudio.paused) {
          myaudio.play();
          $("#btnMute").removeClass("fa-volume-mute");
          $("#btnMute").addClass("fa-volume-up");
        } else {
          myaudio.pause();
          $("#btnMute").addClass("fa-volume-mute");
          $("#btnMute").removeClass("fa-volume-up");
        }

      });


      $(window).on('resize', function(){
        setTimeout(function(){
          window.location.reload();
        });
      });

      function showExtraFooter() {
        intOffset = $("#footer").outerHeight();
        $("#footerUp").velocity({display: "none", opacity:0}, 500, function(){
        });

        $("#extraFooter").velocity({display: "block", opacity:1, bottom: intOffset + "px"}, 500, function(){
          $("#extraFooter").data("opened", true);
        });
      }

      function hideExtraFooter() {

         if($("#extraFooter").data("opened")){

          $("#footerUp").velocity({display: "block", opacity:1}, 500, function(){
          });

          $("#extraFooter").velocity({display: "none", bottom: 20 + "px", opacity:0}, 500, function(){
            $("#extraFooter").data("opened", false);
          });
        }
      }






      $(document).on('click', '#showExtra', function(e) {

        e.preventDefault();
        objThis = $(this);

        $objTarget = objThis.next(".birdUnfold");
        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        showExtraFooter();
      });


      /*
      $(document).on('mouseover', '#footer', function(e) {

        if(isMobile()) {
          return;
        }

        e.preventDefault();
        objThis = $(this);

        $objTarget = objThis.next(".birdUnfold");
        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        showExtraFooter();
      });

      $(document).on('mouseover', '.content', function(e) {

        if(isMobile()) {
          return;
        }

        e.preventDefault();
        objThis = $(this);

        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        hideExtraFooter();

      });
      */

      $(document).on('click', '#hideExtra', function(e) {

        e.preventDefault();
        objThis = $(this);

        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        hideExtraFooter();

      });



      $(document).on('click', '.flowers', function(e) {
        e.preventDefault();
        objThis = $(this);

        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        if($('.anniv-cta').data("opened")) {
          $('.anniv-block').css('display', 'none');
          $('.anniv-cta').css('display', 'block');
        }

      });

      //window.onblur= function() {window.onfocus= function () {location.reload()}};

     }




    //intScaling = calculateScaling();
      //$("#birdZ").css({transform: "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotate(15deg) rotateY(180deg)"});

    });

    // Start of animations

    function unfoldStep1(strTarget, strBGColor) {
      // Tuck head and back feet. Shrink front feet
      objTarget = $(strTarget);
      objTarget.find(".headUnfold").velocity({ top: 100 + "px", left: 150 + "px" }, { duration: 500});
      objTarget.find(".backUnfold").velocity({ top: -30 + "px", left: -20 + "px" }, { duration: 500});
      objTarget.find(".backFeetUnfold").velocity({ top: -100 + "px"}, 500, function(){

        strStartTransform = "scale(1) ";
        strEndTransform = "scale(0.5) ";

        objTarget.find(".frontFeetUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 500, function(){
          unfoldStep2(strTarget, strBGColor);
        });
      });
    }

    function unfoldStep2(strTarget, strBGColor) {
      // Flip main body
      objTarget = $(strTarget);

      //objTarget.find(".quarterBack").css("opacity", 1);
      strStartTransform = "rotateX(0deg) ";
      strEndTransform = "rotateX(180deg) ";
      objTarget.find(".mainCloneUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 500, function(){
        objTarget.find(".step1").css("opacity", 0);
        objTarget.find(".quarterBack").css("opacity", 1);
        objTarget.find(".quarterUnfold").css("opacity", 1);
        objTarget.find(".step2").css("opacity", 1);

        unfoldStep3(strTarget, strBGColor);
      });
    }

    function unfoldStep3(strTarget, strBGColor) {
      //alert("a");

      //Form triangle
      objTarget = $(strTarget);
      strStartTransform = "rotateY(0deg) ";
      strEndTransform = "rotateY(180deg) ";

      objTarget.find(".quarterUnfold").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 500,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".quarterUnfold").css("background-image","url(./assets/images/unfold/" + strBGColor + "/darken.png)");
          }
        },
        complete: function() {
          objTarget.find(".step2").css("opacity", 0);
          objTarget.find(".half").css("opacity", 1);
          objTarget.find(".otherHalf").css("opacity", 1);
          unfoldStep4(strTarget, strBGColor);
        }
      });
    }

    function unfoldStep4(strTarget, strBGColor) {
      //Unfold to square
      objTarget = $(strTarget);

      strStartTransform = "rotateY(0deg)";
      strEndTransform = "rotateY(180deg)";

      objTarget.find(".otherHalf").velocity({
        transform: [strEndTransform, strStartTransform],
        opacity: 1
      },{
        duration: 500,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".otherHalf").css("background-image","url(./assets/images/unfold/" + strBGColor + "/half2_rotated.png)");
          }
        },
        complete: function(){

          objTarget.find(".birdButtons").velocity({ opacity: 1 }, { duration: 500, queue: false});
          objTarget.find(".unfoldBirdText").velocity({ opacity: 1}, { duration: 500, queue: false});

        }

      });
    }


    function foldStep1(strTarget, strBGColor, intTarget) {
      //Fold back to triangle
      objTarget = $(strTarget);

      strStartTransform = "rotateY(180deg)";
      strEndTransform = "rotateY(0deg)";

      objTarget.find(".otherHalf").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 200,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            //objTarget.find(".otherHalf").css("background-image","url(./assets/images/unfold/" + strBGColor + "/half_rotated.png)");
          }
        },
        complete: function(){
          //objTarget.find(".step2").css("opacity", 1);
          //objTarget.find(".half").css("opacity", 0);
          //objTarget.find(".otherHalf").css("opacity", 0);


          objTarget.find(".half").removeClass("pink blue brown");
          objTarget.find(".half").addClass(strBGColor);

          objTarget.find(".postedText").text(objTarget.data("postedtext"));
          objTarget.find(".postedName").text(objTarget.data("postedname"));
          objTarget.data("displayID", parseInt(objTarget.attr("id").replace("bird",""), 10));

          foldStep2(strTarget, strBGColor, intTarget);
        }
      });
    }

    function foldStep2(strTarget, strBGColor, intTarget) {
      objTarget = $(strTarget);

      objTarget.find(".step2").css("opacity", 1);
      objTarget.find(".half").css("opacity", 0);
      objTarget.find(".otherHalf").css("opacity", 0);

      objTarget.find(".quarterBack").css("opacity", 1);
      objTarget.find(".quarterUnfold").css("opacity", 1);

      strStartTransform = "rotateY(180deg) ";
      strEndTransform = "rotateY(0deg) ";

      objTarget.find(".quarterUnfold").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 200,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".quarterUnfold").css("background-image","url(./assets/images/unfold/" + strBGColor + "/quarter.png)");
          }
        },
        complete: function() {
          objTarget.find(".step2").css("opacity", 0);
          objTarget.find(".quarterBack").css("opacity", 0);

          //objTarget.find(".half").css("opacity", 1);
          //objTarget.find(".otherHalf").css("opacity", 1);

          //unfoldStep4(strTarget);
          objTarget.find(".step1").css("opacity", 1);

          foldStep3(strTarget, strBGColor, intTarget);

        }
      });
    }

    function foldStep3(strTarget, strBGColor, intTarget) {
      objTarget = $(strTarget);

      strStartTransform = "rotateX(180deg) ";
      strEndTransform = "rotateX(0deg) ";
      objTarget.find(".mainCloneUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 300, function(){

        foldStep4(strTarget, strBGColor, intTarget);
      });
    }

    function foldStep4(strTarget, strBGColor, intTarget) {

      objTarget = $(strTarget);

      strStartTransform = "scale(0.5) ";
      strEndTransform = "scale(1) ";

      objTarget.find(".frontFeetUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 300, function(){
        //unfoldStep2(strTarget);
          objTarget.find(".headUnfold").velocity({ top: 0 + "px", left: 0 + "px" }, { duration: 300});
          objTarget.find(".backUnfold").velocity({ top: 0 + "px", left: 0 + "px" }, { duration: 300});

          objTarget.find(".backFeetUnfold").velocity({ top: 0 + "px"}, 300, function(){

          //console.log(intTarget);

          objTarget.removeClass("birdOpen");
          objTarget.css("z-index","");


          var strID = "#bird" + objTarget.data("currentID");
          $targetABird = $(strID);

          $targetABird.css("opacity","1");
          objTarget.css("opacity","0");
        });
      });
    }


    // End

    function isMobile() {
      try{ document.createEvent("TouchEvent"); return true; }
      catch(e){ return false; }
    }

    function calculateOrigin(){
      intBaseWidth = 1922;
      intBaseHeight = 635;

      intMiddlePoint = middlePoint();
      intScaling = calculateScaling();
      intModifiedWidth = intBaseWidth * intScaling;

      intOrigin = intMiddlePoint - (intModifiedWidth/2);
      return parseInt(intOrigin, 10);

    }

    function calculateScaling(){
      intBaseHeight = 635;
      objContainer = $(".content");
      intScaling = (objContainer.height()/intBaseHeight).toFixed(4);
      return intScaling;
    }

    function middlePoint(){
      objContainer = $(".content");
      intMiddlePoint = (objContainer.width()/2).toFixed(0);
      return parseInt(intMiddlePoint, 10);
    }

    function initBirds(){
      intScaling = calculateScaling();
      intOrigin = calculateOrigin();

      var objPosition = [
        {y:74, x:357, rotate: 20}
        ,{y:39, x:422, rotate: 16}
        ,{y:34, x:511, rotate: 13}
        ,{y:28, x:627, rotate: -19}
        ,{y:38, x:737, rotate: 17}
        ,{y:31, x:813, rotate: -16}
        ,{y:153, x:376, rotate: 15}
        ,{y:137, x:442, rotate: -18}
        ,{y:102, x:498, rotate: 17}
        ,{y:77, x:578, rotate: 16}
        ,{y:80, x:667, rotate: -15}
        ,{y:116, x:746, rotate: 19}
        ,{y:97, x:805, rotate: -13}
        ,{y:100, x:858, rotate: 18}
        ,{y:172, x:864, rotate: -20}
        ,{y:219, x:365, rotate: 14}
        ,{y:171, x:518, rotate: -19}
        ,{y:143, x:621, rotate: -17}
        ,{y:192, x:700, rotate: -13}
        ,{y:186, x:789, rotate: -20}
        ,{y:203, x:906, rotate: 15}
        ,{y:241, x:445, rotate: -18}
        ,{y:246, x:601, rotate: 13}
        ,{y:259, x:776, rotate: -14}
        ,{y:247, x:853, rotate: 17}
      ];


      $expandBird = $("#expandBird");
      $expandBird.css({top: "100px", left: "100px",transform: "translate(-50%, -50%) scale(" + intScaling * 0.06 + ")"});

      for(i=1;i<=25;i++) {

        intX = ((objPosition[i-1].x + 320) * intScaling) + intOrigin;
        intY = (objPosition[i-1].y + 130) * intScaling;

        objTarget = $("#bird" + i);
        objClick = $("#click" + i);

        objTarget.css({left: intX.toFixed(1) + "px"});
        objTarget.css({top: intY.toFixed(1) + "px"});

        //resize clickable area

        intXc = ((objPosition[i-1].x + 303) * intScaling) + intOrigin;
        intYc = (objPosition[i-1].y + 100) * intScaling;

        objClick.css({left: intXc.toFixed(1) + "px"});
        objClick.css({top: intYc.toFixed(1) + "px"});
        objClick.css({transform: "scale(" + intScaling + ")"});


        if(objTarget.data("flipped")==1) {
          objTarget.css({transform: "translate(-50%, -50%) scale(" + intScaling + ") rotate(" + objPosition[i-1].rotate + "deg) rotateY(180deg)"});

         } else {
          objTarget.css({transform: "translate(-50%, -50%) scale(" + intScaling + ") rotate(" + objPosition[i-1].rotate + "deg)"});
        }


        objTarget.data("rotation", objPosition[i-1].rotate);
        objTarget.data("intX", intX);
        objTarget.data("intY", intY);

      }

      objContainer = $(".content");
      intIntialHeight = (objContainer.height()/3) * 2;


      $(".brownFlying").css({transform: "scale(" + intScaling*0.1 + ")"});
      $(".brownFlying").css({top: intIntialHeight + "px"});
      $(".brownFlying").css({right: (-200 * intScaling) + "px"});

      $(".blueFlying").css({transform: "scale(" + intScaling*0.1 + ")"});
      $(".blueFlying").css({top: intIntialHeight + "px"});
      $(".blueFlying").css({left: (-200 * intScaling) + "px"});

      animateBrown();

      setTimeout(function(){
      animateBlue();
      }, randomIntFromInterval(3000,16000));


      $(".aBird").velocity({
        opacity: 1
      }, {
        duration: 1000,
        queue: false,
        complete: function(){
          $(".loading").velocity({ opacity: 0 }, { duration: 200, queue: false, complete: function(){
            $(".loading").css("display","none");
          }});

          $("#buttonHidder").velocity({ opacity: 0 }, { duration: 500, queue: false, complete: function(){
          }});
        }
      });

     $(".brownFlying").velocity({ opacity: 1 }, { duration: 1000, queue: false});
     $(".blueFlying").velocity({ opacity: 1 }, { duration: 1000, queue: false});

      //$("#bird1").css("right", "2000");
    }

    function initLeaves(){
      intScaling = calculateScaling();
      leaveHeight = 250;
      scaledLeaveHeight = leaveHeight * intScaling;

      intMiddlePoint = middlePoint();

      for(i = 1; i<=6; i++) {
        //$("#leave" + i).css({ bottom: scaledLeaveHeight.toFixed(0) + 'px' });
      }

      $("#leave1").css({ left: (intMiddlePoint - (300*intScaling)) + 'px' });
      $("#leave2").css({ left: (intMiddlePoint - (200*intScaling)) + 'px' });
      $("#leave3").css({ left: (intMiddlePoint - (100*intScaling)) + 'px' });
      $("#leave4").css({ left: (intMiddlePoint + (100*intScaling)) + 'px' });
      $("#leave5").css({ left: (intMiddlePoint + (200*intScaling)) + 'px' });
      $("#leave6").css({ left: (intMiddlePoint + (300*intScaling)) + 'px' });

      animateLeave("#leave1");
      animateLeave("#leave2");
      animateLeave("#leave3");
      animateLeave("#leave4");
      animateLeave("#leave5");
      animateLeave("#leave6");
    }

    function animateLeave(strTarget) {
      var objTarget = $(strTarget);
      intSpeed = randomIntFromInterval(3000,8000);
      intScaling = calculateScaling();
      leaveHeight = 300;
      scaledLeaveHeight = leaveHeight * intScaling;
      leaveBottom = 50;
      scaledLeaveBottom = leaveBottom * intScaling;


      objTarget.css({bottom: scaledLeaveHeight + "px"});
      objTarget.css({opacity: 1});

      strStartTransform = "scale(" + intScaling + ") rotateZ(" + randomIntFromInterval(20, 350) + "deg)";
      strEndTransform = "scale(" + intScaling + ") rotateZ(" + randomIntFromInterval(20, 350) + "deg)";

      objTarget.velocity({transform: [strStartTransform, strEndTransform], opacity:0, bottom: scaledLeaveBottom + "px"}, intSpeed, function(){

        objTarget.velocity({opacity:0, bottom: scaledLeaveHeight + "px"}, 100, function(){

          setTimeout(function(){
            animateLeave(strTarget);
          }, 30000);

        });
      });
    }

    function initButterflies(){

      objContainer = $(".content");

      //alert(objContainer.height());
      intUsableWidth = objContainer.width() - 100;
      intButterFlySpace = intUsableWidth/4;

      //$("#butterfly01").fadeIn(500);

      //var nh = Math.floor(Math.random() * h);
      //var nw = Math.floor(Math.random() * w);

      intScaling = calculateScaling();

      min1 = 100*intScaling;
      max1 = intButterFlySpace;

      min2 = intButterFlySpace-(100*intScaling);
      max2 = (intButterFlySpace*2)+(50*intScaling);

      min3 = (intButterFlySpace*2)-(50*intScaling);
      max3 = (intButterFlySpace*3)-(50*intScaling);

      min4 = (intButterFlySpace*3)-(50*intScaling);
      max4 = (intButterFlySpace*4)-(100*intScaling);

      $("#butterfly01").css({ bottom: (Math.floor(Math.random() * 100)) * intScaling + 'px' });
      $("#butterfly02").css({ bottom: (Math.floor(Math.random() * 100)) * intScaling + 'px' });
      $("#butterfly03").css({ bottom: (Math.floor(Math.random() * 100)) * intScaling + 'px' });
      $("#butterfly04").css({ bottom: (Math.floor(Math.random() * 100)) * intScaling + 'px' });

      $("#butterfly01").css({ left: min1 + 'px' });
      $("#butterfly02").css({ left: min2 + 'px' });
      $("#butterfly03").css({ left: min3 + 'px' });
      $("#butterfly04").css({ left: min4 + 'px' });


      $("#butterfly01").data("scaling", 0.06 * intScaling);
      $("#butterfly02").data("scaling", 0.06 * intScaling);
      $("#butterfly03").data("scaling", 0.06 * intScaling);
      $("#butterfly04").data("scaling", 0.06 * intScaling);

      $("#butterfly01").data("rotation", randomIntFromInterval(10,20));
      $("#butterfly02").data("rotation", 0-randomIntFromInterval(10,20));
      $("#butterfly03").data("rotation", randomIntFromInterval(10,20));
      $("#butterfly04").data("rotation", 0-randomIntFromInterval(10,20));

      $("#butterfly01").velocity({ opacity: 1 }, { duration: 1000, queue: false});
      $("#butterfly02").velocity({ opacity: 1 }, { duration: 1000, queue: false});
      $("#butterfly03").velocity({ opacity: 1 }, { duration: 1000, queue: false});
      $("#butterfly04").velocity({ opacity: 1 }, { duration: 1000, queue: false});

      animateButterfly("#butterfly01", min1, max1);
      animateButterfly("#butterfly02", min2, max2);
      //animateButterfly("#butterfly03", min3, max3);
      animateButterfly("#butterfly04", min4, max4);
    }

    function randomIntFromInterval(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function animateBrown(){
      intScaling = calculateScaling();
      var objTarget = $(".brownFlying");

      strStartTransform = "scale(1) rotateZ(22deg)";
      strEndTransform = "scale(1) rotateZ(22deg)";
      intSpeed = randomIntFromInterval(20000,40000);

      objContainer = $(".content");
      intIntialHeight = (objContainer.height()/3) * 2;

      intMaxVariance = parseInt(objContainer.width()/5*2,10);
      intVariance = randomIntFromInterval(10,intMaxVariance);

      objTarget.velocity({
          top: -100 * intScaling ,
          right: intMiddlePoint/2 + intVariance}, {
            easing: "easeInExpo",
            duration: intSpeed,
        complete: function() {

         objTarget.velocity({opacity: "0"})
         .velocity({top: intIntialHeight + "px", right: (-200 * intScaling)})
         .velocity({opacity: "1"});

          setTimeout(function() {
            animateBrown();
          }, randomIntFromInterval(5000,15000));

        }});
    }

    function animateBlue() {
      intScaling = calculateScaling();
      var objTarget = $(".blueFlying");

      strStartTransform = "scale(1) rotateZ(-22deg)";
      strEndTransform = "scale(1) rotateZ(-22deg)";
      intSpeed = randomIntFromInterval(20000,40000);

      objContainer = $(".content");
      intIntialHeight = (objContainer.height()/3) * 2;

      intMaxVariance = parseInt(objContainer.width()/5*2,10);
      intVariance = randomIntFromInterval(10,intMaxVariance);

      objTarget.velocity({
          top: -100 * intScaling ,
          left: intMiddlePoint/2 + intVariance}, {
            easing: "easeInExpo",
            duration: intSpeed,
        complete: function() {

          objTarget.velocity({opacity: "0"})
          .velocity({top: intIntialHeight + "px", left: (-200 * intScaling)})
          .velocity({opacity: "1"});

          setTimeout(function() {
            animateBlue();
          }, randomIntFromInterval(5000,15000));

          //animateBlue();

        }});

    }

    function animateButterfly(strTarget, maxLeft, maxRight) {
      intScaling = calculateScaling();

      var objTarget = $(strTarget);
      addX = objTarget.position().left + randomIntFromInterval(0,200)-100;
      addY = randomIntFromInterval(50,150) * intScaling;

      if(addX > maxRight){
        addX = maxRight - (randomIntFromInterval(200,400) * intScaling);
      }

      if (maxLeft>addX) {
        addX = maxLeft +  (randomIntFromInterval(200,400) * intScaling);
      }

      intSpeed = randomIntFromInterval(2000,8000);
      //intScaling = Math.random() * (2 - 1) + 1;


      intScaleStart = objTarget.data("scaling");
      //intNewScaling = (0.12 * intScaling).toFixed(2)

      intBaseScaling = Math.random() * (0.06 - 0.03) + 0.03;

      intNewScaling = (intBaseScaling*intScaling).toFixed(2)
      //(((Math.random() * (0.12 - 0.08) + 0.08)*intScaling).toFixed(2)
      objTarget.data("scaling", intNewScaling);

      intRotation = objTarget.data("rotation");

      if(objTarget.position().left > addX) {
        intNewRotation = 0-randomIntFromInterval(10,20);
      } else {
        intNewRotation = randomIntFromInterval(10,20);
      }

      objTarget.data("rotation", intNewRotation);
      strStartTransform = "scale(" + intNewScaling + ") rotateZ(" + intNewRotation + "deg)";
      strEndTransform = "scale(" + intScaleStart + ") rotateZ(" + intRotation + "deg)";

      objTarget.velocity({transform: [strStartTransform, strEndTransform], bottom: addY + "px" , left: addX + "px"}, intSpeed,
        function() {

            animateButterfly(strTarget, maxLeft, maxRight);

        });

      /*
      objTarget.velocity({
        bottom: addX,
        left: "+=" + addY,
        transform: "scale(7)"
      }, intSpeed, function() {
        animateButterfly(strTarget);
      });
      */

    }

    // Events

    function openStaticBird($objTarget) {

      if($(".birdOpen").length==0){

        $objTarget.addClass("birdOpen");

        intRotation = $objTarget.data("rotation");

        if($objTarget.data("flipped")==true) {
          strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateY(0deg) rotateZ(" + intRotation + "deg)";
          strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateY(90deg) rotateZ(" + intRotation + "deg)";

          $objTarget.velocity({transform: [strEndTransform, strStartTransform]}, 500,
          function() {
            strColor = $objTarget.data("bgcolor");
            strColor = strColor.charAt(0).toUpperCase() + strColor.slice(1);

            $objTarget.removeClass("birdStatic" + strColor + "Flipped");
            $objTarget.addClass("birdStatic" + strColor);

          });

          $objTarget.velocity({transform: [strStartTransform, strEndTransform]}, 500)
        }

        strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(" + intRotation + "deg)";
        strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateZ(0deg)";

        intMiddlePoint = middlePoint();

        intScaling = calculateScaling();

        baseBirdWidth = 455;
        scaledWidth = 455/2;

        scaledTop = 200 * intScaling;

        $objTarget.css("z-index","998");

        var objBGColor = {pink: "#FFE3E0", brown: "#EBE2D9",blue: "#BFEAF7"};

        $objTarget.velocity({transform: [strEndTransform, strStartTransform], top: scaledTop + "px" , left: (intMiddlePoint) + "px"}, 2000,
        function() {
          $objTarget.find(".birdButtons").velocity({ opacity: 1 }, { duration: 500, queue: false});
          $objTarget.find(".birdText").css("background",objBGColor[$objTarget.data("bgcolor")]);
          $objTarget.find(".birdText").velocity({ opacity: 1 }, { duration: 500, queue: false});


          $objTarget.find(".birdText").textfill({
            innerTag: '.text-inner-container',
            maxFontPixels: 60,
            explicitWidth: 380,
            explicitHeight: 320,

          });


        });
      }
    }

    function closeStaticBird($objTarget) {

      if($(".birdOpen").length==1 && $(".birdClosing").length==0){

        intScaling = calculateScaling();
        intRotation = $objTarget.data("rotation");
        intX = $objTarget.data("intX");
        intY = $objTarget.data("intY");

        if($objTarget.data("flipped")==true) {
          strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateY(0deg)";
          strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateY(90deg)";

          $objTarget.velocity({transform: [strEndTransform, strStartTransform]}, 500,
          function() {

            strColor = $objTarget.data("bgcolor");
            strColor = strColor.charAt(0).toUpperCase() + strColor.slice(1);

            $objTarget.addClass("birdStatic" + strColor + "Flipped");
            $objTarget.removeClass("birdStatic" + strColor);

          });

          $objTarget.velocity({transform: [strStartTransform, strEndTransform]}, 500)
        }

        strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateZ(0deg)";
        strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(" + intRotation + "deg)";

        $objTarget.find(".birdButtons").velocity({ opacity: 0 }, { duration: 500, queue: false});
        $objTarget.find(".birdText").velocity({ opacity: 0}, { duration: 500, queue: false});

        $objTarget.velocity({transform: [strEndTransform, strStartTransform], top: intY + "px" , left: intX + "px"}, 2000,
          function() {
            $objTarget.removeClass("birdOpen");
            $objTarget.css("z-index","");
        });
      }
    }

    function toggleStaticBird($objTarget, $objNewTarget) {
      if($(".birdOpen").length==1){
        intRotation = $objTarget.data("rotation");
        intX = $objTarget.data("intX");
        intY = $objTarget.data("intY");

        if($objTarget.data("flipped")==true) {
          strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateY(0deg)";
          strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateY(90deg)";

          $objTarget.velocity({transform: [strEndTransform, strStartTransform]}, 250,
          function() {

            strColor = $objTarget.data("bgcolor");
            strColor = strColor.charAt(0).toUpperCase() + strColor.slice(1);

            $objTarget.addClass("birdStatic" + strColor + "Flipped");
            $objTarget.removeClass("birdStatic" + strColor);

          });

          $objTarget.velocity({transform: [strStartTransform, strEndTransform]}, 250)
        }

        strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.8 + ") rotateZ(0deg)";
        strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(10deg)";

        $objTarget.find(".birdButtons").velocity({ opacity: 0 }, { duration: 250, queue: false});
        $objTarget.find(".birdText").velocity({ opacity: 0 }, { duration: 250, queue: false});

        $objTarget.velocity({transform: [strEndTransform, strStartTransform], top: intY + "px" , left: intX + "px"}, 2000,
          function() {
            $objTarget.css("z-index","");
            $objTarget.removeClass("birdOpen");
            openStaticBird($objNewTarget);
        });
      }
    }

    $(document).on('click', '.unfoldClickableArea', function(e) {
      e.preventDefault();
      objThis = $(this);

      if(objThis.data('stop')==1) return;
      objThis.data('stop',1);

      setTimeout(function(lclObjThis){
        lclObjThis.data('stop',0);
      },1000, objThis);

      moveBird(objThis);
    });

    function moveBird($objCurrent) {
      if($(".birdOpen").length!==0){
        return;
      }

      intScaling = calculateScaling();

      $target = $("#expandBird");
      $target.css("opacity","0");

      strCurrentTransform = $objCurrent.css("transform");
      strColor = $objCurrent.data("bgcolor");

      $target.removeClass("pink blue brown").addClass(strColor);

      $target.data("bgcolor", strColor);
      $target.data("currentID", $objCurrent.data("id"));

      $(".step1").removeClass("pink blue brown");
      $(".step1").addClass(strColor);
      $(".step2").removeClass("pink blue brown");
      $(".step2").addClass(strColor);
      $(".step3").removeClass("pink blue brown");
      $(".step3").addClass(strColor);
      $(".otherHalfContainer").removeClass("pink blue brown");
      $(".otherHalfContainer").addClass(strColor);
      $(".otherHalf").removeClass("pink blue brown");
      $(".otherHalf").addClass(strColor);
      $(".unfoldBirdText").removeClass("pink blue brown");
      $(".unfoldBirdText").addClass(strColor);
      $(".quarterUnfold").css("background-image","url(./assets/images/unfold/" + strColor + "/quarter.png)");
      $(".otherHalf").css("background-image","url(./assets/images/unfold/" + strColor + "/half_rotated.png)");


      $target.find(".postedText").text($objCurrent.data("postedtext"));
      $target.find(".postedName").text($objCurrent.data("postedname"));

      intScaling = calculateScaling();
      intOrigin = calculateOrigin();
      intNewTop = parseInt($objCurrent.css("top"),10) + (30 * intScaling);
      intNewLeft = parseInt($objCurrent.css("left"),10) + (18 * intScaling);

      $target.velocity({
        top: intNewTop,
        left: intNewLeft
      });

      var strID = "#bird" + $objCurrent.data("id");

      $targetABird = $(strID);
      intRotation = $targetABird.data("rotation");

      if($targetABird.data("flipped")==true) {
        strStartTransform = "translate(-50%, -50%) scale(" + intScaling + ") rotateY(180deg) rotateZ(" + intRotation + "deg)";
        strEndTransform = "translate(-50%, -50%) scale(" + intScaling + ") rotateY(0deg) rotateZ(0deg)";

      } else {
        strStartTransform = "translate(-50%, -50%) scale(" + intScaling + ") rotateZ(" + intRotation + "deg)";
        strEndTransform = "translate(-50%, -50%) scale(" + intScaling + ") rotateZ(0deg)";
      }

      $targetABird.velocity({transform: [strEndTransform, strStartTransform]}, 1000,
        function() {
          $targetABird.css("opacity","0");
          $target.css("opacity","1");
        });


      openBird($target);
    }


    function openBird($objTarget) {

      if($(".birdOpen").length!==0){
        return;
      }

      $objTarget.addClass("birdOpen");
      $objTarget.css("z-index","999");

      strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ")";
      strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.5 + ")";

      intMiddlePoint = middlePoint();
      scaledTop = 220 * intScaling;

      $objTarget.velocity({
        transform: [strEndTransform, strStartTransform],
        top: scaledTop + "px" ,
        left: (intMiddlePoint) + "px"
      }, {duration: 2000, complete: function(){
      }});

      unfoldStep1("#" + $objTarget.attr("id"), $objTarget.data("bgcolor"));
    }

    function closeBird($objTarget, intTarget) {

      if($(".birdOpen").length==1){

        $objTarget.find(".birdButtons").velocity({ opacity: 0 }, { duration: 200, queue: false});
        $objTarget.find(".unfoldBirdText").velocity({ opacity: 0}, { duration: 200, queue: false, complete: function(){

          var strID = "#bird" + $objTarget.data("currentID");
          $targetABird = $(strID);

          intRotation = $targetABird.data("rotation");
          intX = $targetABird.data("intX");
          intY = $targetABird.data("intY");


          strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.4 + ") rotateZ(0deg)";
          strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(" + intRotation + "deg)";

          if($targetABird.data("flipped")==1) {
            $targetABird.css("transform","translate(-50%, -50%) scale(" + intScaling + ") rotateZ(" + intRotation + "deg) rotateY(180deg)");
          } else {
            $targetABird.css("transform","translate(-50%, -50%) scale(" + intScaling + ") rotateZ(" + intRotation + "deg)");
          }


          $objTarget.velocity({
            transform: [strEndTransform, strStartTransform],
            top: intY + "px" ,
            left: intX + "px"
          }, {queue: false, duration: 1000, complete: function(){

            if($targetABird.data("flipped")==1) {

              strStartTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(" + intRotation + "deg) rotateY(0deg)";
              strEndTransform = "translate(-50%, -50%) scale(" + intScaling*0.06 + ") rotateZ(" + intRotation + "deg) rotateY(180deg)";

              $objTarget.velocity({transform: [strEndTransform, strStartTransform]}, 200,
                function() {
                $objTarget.removeClass("birdOpen");
                $objTarget.css("z-index","");
              });
            } else {
              //
            }

          }});

          foldStep1("#" + $objTarget.attr("id"), $objTarget.data("bgcolor"), intTarget);
        }});
      }
    }

    $(document).on('click', '.closeBirdBtn', function(e) {
      e.preventDefault();
      objThis = $(this);

      if(objThis.data('stop')==1) return;
      objThis.data('stop',1);

      setTimeout(function(lclObjThis){
        lclObjThis.data('stop',0);
      },1000, objThis);

      $target = $("#expandBird");
      //$objTarget = objThis.closest(".birdUnfold");
      closeBird($target);

    });

    $(document).on('click', '.previousBirdBtn', function(e) {
      e.preventDefault();
      objThis = $(this);

      if(objThis.data('stop')==1) return;
      objThis.data('stop',1);

      setTimeout(function(lclObjThis){
        lclObjThis.data('stop',0);
      },1000, objThis);

      $objTarget = $("#expandBird");

      if(!$objTarget.data("displayID")) {
        $objTarget.data("displayID", parseInt($objTarget.data("currentID"), 10));
      }

      intTarget = parseInt($objTarget.data("displayID")) - 1;

      if(intTarget==0) {
        intTarget = 25;
      }

      $objTarget.data("displayID", intTarget);
      $objNewTarget = $("#bird" + intTarget);
      strPostedText = $objNewTarget.data("postedtext");
      strPostedName = $objNewTarget.data("postedname");

      strOldColor = $objTarget.data("bgcolor");
      strNewColor = $objNewTarget.data("bgcolor");

      $objTarget.find(".unfoldBirdText").velocity({opacity: 0}, {duration: 500, complete: function(){

        $objTarget.find(".postedText").text(strPostedText);
        $objTarget.find(".postedName").text(strPostedName);

      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});

      $objTarget.find(".half").velocity({opacity: 0}, {duration: 500, complete: function(){
        $objTarget.find(".half").removeClass("pink blue brown");
        $objTarget.find(".half").addClass(strNewColor);
      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});

      $objTarget.find(".otherHalf").velocity({opacity: 0}, {duration: 500, complete: function(){
        $objTarget.find(".otherHalf").css("background-image","url('./assets/images/unfold/" + strNewColor + "/half2_rotated.png')");
      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});
    });

    $(document).on('click', '.nextBirdBtn', function(e) {
      e.preventDefault();
      objThis = $(this);

      if(objThis.data('stop')==1) return;
      objThis.data('stop',1);

      setTimeout(function(lclObjThis){
        lclObjThis.data('stop',0);
      },1000, objThis);

      $objTarget = $("#expandBird");

      if(!$objTarget.data("displayID")) {
        $objTarget.data("displayID", parseInt($objTarget.data("currentID"), 10));
      }

      intTarget = parseInt($objTarget.data("displayID")) + 1;

      if(intTarget==26) {
        intTarget = 1;
      }

      $objTarget.data("displayID", intTarget);
      $objNewTarget = $("#bird" + intTarget);
      strPostedText = $objNewTarget.data("postedtext");
      strPostedName = $objNewTarget.data("postedname");

      strOldColor = $objTarget.data("bgcolor");
      strNewColor = $objNewTarget.data("bgcolor");

      $objTarget.find(".unfoldBirdText").velocity({opacity: 0}, {duration: 500, complete: function(){

        $objTarget.find(".postedText").text(strPostedText);
        $objTarget.find(".postedName").text(strPostedName);

      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});

      $objTarget.find(".half").velocity({opacity: 0}, {duration: 500, complete: function(){
        $objTarget.find(".half").removeClass("pink blue brown");
        $objTarget.find(".half").addClass(strNewColor);
      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});

      $objTarget.find(".otherHalf").velocity({opacity: 0}, {duration: 500, complete: function(){
        $objTarget.find(".otherHalf").css("background-image","url('./assets/images/unfold/" + strNewColor + "/half2_rotated.png')");
      }}).velocity({opacity: 1}, {duration: 500, complete: function(){

      }});
    });



  });
});