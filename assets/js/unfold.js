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
      "jquery": "../vendor/jquery/jquery.min",
      "velocity-animate": "velocity.min"
    },
    shim: {
      "velocity-animate": {
          deps: [ "jquery" ]
      }
  }
 });


 require([ "jquery", "velocity-animate" ], function ($, Velocity) {
  $(function() {

    function unfoldStep1(strTarget) {
      // Tuck head and back feet. Shrink front feet
      objTarget = $(strTarget);
      objTarget.find(".headUnfold").velocity({ top: 200 + "px", left: 200 + "px" }, { duration: 1000});
      objTarget.find(".backUnfold").velocity({ top: 100 + "px", left: -50 + "px" }, { duration: 1000});
      objTarget.find(".backFeetUnfold").velocity({ top: -200 + "px"}, 1000, function(){

        strStartTransform = "scale(1) ";
        strEndTransform = "scale(0.5) ";

        objTarget.find(".frontFeetUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 1000, function(){
          unfoldStep2(strTarget);
        });
      });
    }

    function unfoldStep2(strTarget) {
      // Flip main body
      objTarget = $(strTarget);

      //objTarget.find(".quarterBack").css("opacity", 1);
      strStartTransform = "rotateX(0deg) ";
      strEndTransform = "rotateX(180deg) ";
      objTarget.find(".mainCloneUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 1000, function(){
        objTarget.find(".step1").css("opacity", 0);
        objTarget.find(".quarterBack").css("opacity", 1);
        objTarget.find(".quarterUnfold").css("opacity", 1);
        objTarget.find(".step2").css("opacity", 1);

        unfoldStep3(strTarget);
      });
    }

    function unfoldStep3(strTarget) {
      //Form triangle
      console.log("unfold 3");
      objTarget = $(strTarget);
      strStartTransform = "rotateY(0deg) ";
      strEndTransform = "rotateY(180deg) ";

      objTarget.find(".quarterUnfold").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 1000,
        progress: function(elements, complete, remaining, start, tweenValue){
          console.log("here");
          if(complete>=0.5) {
            objTarget.find(".quarterUnfold").css("background-image","url(./images/unfold/pink/darken.png)");
          }
        },
        complete: function() {
          objTarget.find(".step2").css("opacity", 0);
          objTarget.find(".half").css("opacity", 1);
          objTarget.find(".otherHalf").css("opacity", 1);
          unfoldStep4(strTarget);
        }
      });
    }

    function unfoldStep4(strTarget) {
      //Unfold to square
      objTarget = $(strTarget);

      strStartTransform = "rotateY(0deg) ";
      strEndTransform = "rotateY(180deg) ";

      objTarget.find(".otherHalf").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 1000,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".otherHalf").css("background-image","url(./images/unfold/pink/half2_rotated.png)");
          }
        },
        complete: function(){
          // Reserved

          setTimeout(function(){
            foldStep1(strTarget);
          }, 3000);

        }

      });
    }

    function foldStep1(strTarget) {
      //Fold back to triangle
      objTarget = $(strTarget);

      strStartTransform = "rotateY(180deg) ";
      strEndTransform = "rotateY(0deg) ";

      objTarget.find(".otherHalf").velocity({
        transform: [strEndTransform, strStartTransform]
      },{
        duration: 1000,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".otherHalf").css("background-image","url(./images/unfold/pink/half_rotated.png)");
          }
        },
        complete: function(){
          //objTarget.find(".step2").css("opacity", 1);
          //objTarget.find(".half").css("opacity", 0);
          //objTarget.find(".otherHalf").css("opacity", 0);

          foldStep2(strTarget);
        }
      });
    }

    function foldStep2(strTarget) {
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
        duration: 1000,
        progress: function(elements, complete, remaining, start, tweenValue){
          if(complete>=0.5) {
            objTarget.find(".quarterUnfold").css("background-image","url(./images/unfold/pink/quarter.png)");
          }
        },
        complete: function() {
          objTarget.find(".step2").css("opacity", 0);
          objTarget.find(".quarterBack").css("opacity", 0);

          //objTarget.find(".half").css("opacity", 1);
          //objTarget.find(".otherHalf").css("opacity", 1);

          //unfoldStep4(strTarget);
          objTarget.find(".step1").css("opacity", 1);

          foldStep3(strTarget);

        }
      });
    }

    function foldStep3(strTarget) {
      objTarget = $(strTarget);

      strStartTransform = "rotateX(180deg) ";
      strEndTransform = "rotateX(0deg) ";
      objTarget.find(".mainCloneUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 1000, function(){

        foldStep4(strTarget);
      });
    }

    function foldStep4(strTarget) {

      objTarget = $(strTarget);

      strStartTransform = "scale(0.5) ";
      strEndTransform = "scale(1) ";

      objTarget.find(".frontFeetUnfold").velocity({ transform: [strEndTransform, strStartTransform] }, 1000, function(){
        //unfoldStep2(strTarget);

        objTarget.find(".headUnfold").velocity({ top: 50 + "px", left: 50 + "px" }, { duration: 1000});
        objTarget.find(".backUnfold").velocity({ top: 50 + "px", left: 50 + "px" }, { duration: 1000});

        objTarget.find(".backFeetUnfold").velocity({ top: 50 + "px"}, 1000, function(){

          //reset everything...

          setTimeout(function(){
            unfoldStep1(strTarget);
          }, 3000);

        });
      });
    }

    $(document).ready(function() {

      unfoldStep1("#bird1");
    });
  });

});