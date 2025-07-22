<html dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# " class=" js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="SMU Theme">
    <meta charset="utf-8">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <title>PTWA 2024</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-colorpicker.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-formhelpers.min.css"); ?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
    <script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/fabric.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-colorpicker.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-formhelpers.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-maxlength.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
    <style>

        @font-face {
          font-family: Mont;
          src: url('./assets/fonts/Montserrat-BoldItalic.otf')  format('opentype');
        }

        .oswald{
          font-family: Mont;
        }
    </style>
</head>
<body style="overflow: clip;">

<div style="padding-top: 0px; padding-bottom:0px; max-width:700px; margin: auto;">
  <img src="<?=base_url('assets/images/header.png')?>" style="width: 100%;">
</div>

<div class="main-container" style="">
    <div class="stageOnline" id="stage1">
        <form class="container-fluid" novalidate="" method="POST" id="submitTag">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 pr-md-5 pt-lg-3 pt-sm-2 pt-2">
                    <div class="d-none d-lg-block mb-lg-3 oswald" style="color:#fff; font-size: 36px; text-align: center;">Pen Your Well Wishes to Elitez</div>
                    <div class="d-lg-none my-3 oswald mb-2 px-3" style="color:#fff; font-size: 36px; text-align: center;">Pen Your Well Wishes to Elitez</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group row">
                        <label for="firstName" class="col-form-label" style="padding-left: 15px; padding-right: 15px; width: 120px; font-size: 14px; font-weight: 600;">Name</label>
                        <div class="col" style="padding-top: 2px;">
                            <input style="font-size: 14px;" type="text" class="form-control" name="firstName" id="firstName" maxlength="20" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-top:8px">
                    <div class="form-group" id="divMessage">
                        <textarea class="form-control" name="inputMessage" required id="inputMessage" maxlength="100" placeholder="Your message here..."></textarea>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="feedbackBox d-none d-lg-block col-md-10 mb-3 mb-lg-1 text-left" style="font-size:14px;">
                </div>

                <div class="feedbackBox d-lg-none col-md-10 mb-3 mb-lg-1 text-center" style="font-size:14px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 mb-2 alignPen">
                    <a href="<?=base_url("pen")?>" class="penButton" style="margin-right: 20px;">Reset</a>
                    <a href="#" id="btn-submit" class="penButton">Submit</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 m-2 alignPen">
                    <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
                </div>
            </div>

        </form>
    </div>

    <div class="stageOnline" id="stage2" style="display:none;">
        <div class="row">
            <div class="confirmBox" style="">
                <div class="col-sm-12 my-auto" style="text-align: left;">
                    Thank you for your message, you will not be able to edit your message after clicking 'Submit'. If you want to make further edits to your message, select 'CANCEL' to return to editing your message. Otherwise, click 'Submit' to continue.
                    <br><br>
                    <span class="tag-text"></span>
                    <br>
                    - <span class="tag-author"></span>
                    <!--
                    <br>
                    <br>Confirm submission of your message?
                    -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10 mb-2 ">
                <div class="buttonDiv d-flex justify-content-center">
                    <a href="javascript:;" id="btn-back" class="penButtonReverse maRight" >Cancel</a>
                    <a href="javascript:;" id="btn-confirm-submit" class="penButton">Submit</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-2 alignPen">
                <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
            </div>
        </div>

    </div>

    <div class="stageOnline" id="stage3" style="display:none;">
        <div class="row">
            <div class="confirmBox" style="">
                <div class="col-sm-12 my-auto" style="text-align: center;">
                    Thank you, we have received your message. It will appear on the wall soon.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-2 alignPen">
                <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
            </div>
        </div>

    </div>



</div>


<script type='text/javascript'>
    var stage1 = $('#stage1');
    var stage2 = $('#stage2');
    var stage3 = $('#stage3');

    var form = $('#submitTag');

    $('#inputMessage').maxlength({
        threshold: 0
    });

    $('#firstName').maxlength({
        threshold: 0
    });

    $(document).ready(function() {
    });

    $(document).on('click', '#btn-submit', function(e) {
        e.preventDefault();

        strText = $("#inputMessage").val().trim();
        strFirstName = $("#firstName").val().trim();

        if (strText.length > 100 || strFirstName.length > 20){
            $(".feedbackBox").addClass("text-danger");
            $(".feedbackBox").html("Sorry, but certain fields have exceed the word limit");
            $( ".feedbackBox" ).animate({
                backgroundColor: "rgb( 220, 100, 100 )"
            }).animate({
                backgroundColor: "rgba(255, 255, 255, 0)"
            });
        } else if (strText && strFirstName) {

            $.post("ajax/checkText/", { strText: strText, strFirstName: strFirstName} , function(data){
                if (data.status == false) {
                    $(".feedbackBox").addClass("text-danger");
                    $(".feedbackBox").html("It looks like you are unable to submit your message. Please check and remove inappropriate language that may have been accidentally included before submitting your message. Thank you.");

                    $("#divMessage").css("outline", "0px solid #ff0000").animate({
                        'outlineWidth': 'px',
                        'outlineColor': '#ff0000',
                        'outlineOffset': '5'
                    },500);

                    $( ".feedbackBox" ).animate({
                        backgroundColor: "rgb(255, 0, 0)"
                    }).animate({
                        backgroundColor: "rgba(255, 255, 255, 0)"
                    });
                } else {
                    stage2.find('.tag-text').html(form.find('[name=inputMessage]').val());
                    stage2.find('.tag-author').html(form.find('[name=firstName]').val());

                    stage1.fadeOut(500, function() {
                        stage2.fadeIn(500);
                    });
                }
            });

        } else {
            $(".feedbackBox").addClass("text-danger");
            $(".feedbackBox").html("Please fill the required fields before proceeding. Thank you.");
            $( ".feedbackBox" ).animate({
                backgroundColor: "rgb(255, 0, 0)"
            }).animate({
                backgroundColor: "rgba(255, 255, 255, 0)"
                //backgroundColor: "rgba(255, 255, 255, 0)"
            })
        }
    });

    $(document).on('click', '#btn-back', function(e) {
        e.preventDefault();
        stage2.fadeOut(500, function() {
            stage1.fadeIn(500);
        });
    });

    $(document).on('click', '#btn-confirm-submit', function(e) {
        e.preventDefault();

        stage2.fadeOut(500, function() {
            stage3.fadeIn(500);

            setTimeout(function(){
                $('#submitTag').submit();
            },3000);

        });
    });

    $(document).on('submit', 'form', function(e) {
        e.preventDefault();
        var form = $("#submitTag");

        if (form[0].checkValidity() === false) {
            e.stopPropagation()
        } else {
            strText = $("#inputMessage").val();
            strFirstName = $("#firstName").val();

            $.post("ajax/saveText/", { strText: strText, strFirstName: strFirstName} , function(data){
                if (data.status == false) {
                    $(".feedbackBox").addClass("text-danger");
                    $(".feedbackBox").html("It looks like you are unable to submit your message. Please check and remove inappropriate language that may have been accidentally included before submitting your message. Thank you.");
                    $( ".feedbackBox" ).animate({
                        backgroundColor: "rgb( 220, 100, 100 )"
                    }).animate({
                        backgroundColor: "rgba(255, 255, 255, 0)"
                    });
                } else {
                    //$('#stage2').fadeOut(500, function() {
                    //});
                    //window.location.href = '<?=base_url("/animatebird/")?>' + data.ID;
                }
            });
        }
        form.addClass('was-validated');
    });

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

    $(document).on('click', '.pencontainer', function(e) {
        //e.preventDefault();
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


</script>
</body>
</html>
