<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-colorpicker.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-formhelpers.min.css"); ?>">
    <script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/fabric.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-colorpicker.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-formhelpers.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-maxlength.min.js"); ?>"></script>
    <title>Wishing Tree</title>
</head>
<body>

<div id="homeDiv" style="display: none;">
    <i class="fas fa-home fa-4x btnHome" id="btnHome"></i>
    <span class="fa-stack btnHome fa-2x" id="btnCounter">
        <span class="fas fa-circle-notch fa-stack-2x fa-spin"></span>
        <strong class="fa-stack-1x" id="timerDiv">30</strong>
    </span>
</div>

<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="stage" id="stage1">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <img src="<?=base_url('assets/images/btn1.png')?>" id="btn-donate" class="w-100" style="cursor:pointer;" />
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 mr-auto">
                        <img src="<?=base_url('assets/images/btn2.png')?>" id="btn2" class="w-100" style="cursor:pointer;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stage" id="stage2" style="display:none;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <h1 class="mb-5 pb-5" style="font-size:50pt;font-family:TrajanPro-Bold;color:#006838;">SMU bursary fund</h1>

                        <p class="mb-5" style="font-size:24pt;">SMU’s key priority is to ensure that no deserving students, with the right drive shall be deprived of our unique education experience because of financial constraints.</p>

                        <p class="mb-5" style="font-size:24pt;">Our ambition is to allow the financially-challenged students to consider a SMU education, benefit from the unique educational experience and opportunities at SMU, and graduate with less debt, if not debt free.</p>

                        <p class="mb-5" style="font-size:24pt;">We share the ideal that good education will lead to good jobs that will lift students and their families from the lowest financial strata in the society, ensuring that the potential of all promising students is translated into a lasting impact on the world.</p>
                    </div>
                </div>

                <a href="<?=base_url()?>" class="btn-bottom-left"><img src="<?=base_url('assets/images/btnhome.png')?>" alt=""></a>
                <a href="javascript:;" class="btn-bottom-right"><img src="<?=base_url('assets/images/btnnext.png')?>" alt=""></a>
            </div>
        </div>
    </div>

    <div class="stage" id="stage3" style="display:none;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <span class="" style="font-size:50pt;font-family:TrajanPro-Bold;color:#000000;">THANK YOU FOR<br>YOUR GENEROUS DONATION</span>
                    </div>
                </div>

                <a href="<?=base_url()?>" class="btn-bottom-left"><img src="<?=base_url('assets/images/btnhome.png')?>" alt=""></a>
            </div>
        </div>
    </div>

    <div class="stage" id="stage4" style="display:none;">
        <div class="d-flex justify-content-center toppad" style="height: 100%;">
            <form class="container-fluid" novalidate="" method="POST" id="submitTag">
                <div class="row">
                    <div class="col-12 mx-auto">

                        <div class="d-md-none mb-5" style="font-size:30pt;font-family:TrajanPro-Bold;color:#102B72;">pen your well wishes for smu</div>

                        <div class="d-none d-md-block mb-5" style="font-size:50pt;font-family:TrajanPro-Bold;color:#102B72;">pen your well wishes for smu</div>

                        <div class="row text-left" style="font-size:24pt;font-family:TradeGothicLTStd;">
                            <div class="col-md-6 pr-md-5">
                                <div class="form-group row">
                                    <label for="firstName" class="col-4 col-form-label py-0">First Name</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="firstName" id="firstName" maxlength="20" required>
                                        <div class="invalid-feedback">This field is required.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-5">
                                <div class="form-group row">
                                    <label for="lastName" class="col-4 col-form-label py-0">Last Name</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="lastName" id="lastName" maxlength="20" required>
                                        <div class="invalid-feedback">This field is required.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3 pt-4" style="border-top:3px solid darkgreen;">
                                    <textarea class="form-control" name="inputMessage" required id="inputMessage" maxlength="150" placeholder="Your message here..."></textarea>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-md-6 text-left" style="font-size:15pt;">
                                * ANY OFFENSIVE WORDS WILL NOT BE DISPLAYED
                            </div>
                            <div class="col-6 text-right">

                            </div>
                            <div>
                                <br>&nbsp;
                                <br>&nbsp;
                                <br>&nbsp;
                                <br>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <a href="<?=base_url()?>" class="btn-bottom-left"><img src="<?=base_url('assets/images/btnhome.png')?>" alt=""></a>
            <a href="javascript:;" id="btn-submit" class="btn-bottom-right"><img src="<?=base_url('assets/images/btnsubmit.png')?>" alt=""></a>
        </div>
    </div>

    <div class="stage" id="stage5" style="display:none;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <span class="" style="font-size:50pt;font-family:TrajanPro-Bold;color:#000000;">THANK YOU</span>
                    </div>
                </div>

                <a href="<?=base_url()?>" class="btn-bottom-left"><img src="<?=base_url('assets/images/btnhome.png')?>" alt=""></a>
            </div>
        </div>
    </div>
</div>

<input type="hidden" name="tagSelected" id="tagSelected">

<script type='text/javascript'>
    var newWindowOpened = false;
    var newWindow = null;

    $('#inputMessage').maxlength({
        threshold: 0
    });

    $('#firstName').maxlength({
        threshold: 0
    });

    $('#lastName').maxlength({
        threshold: 0
    });


    function checkOpen(){
        if (newWindow == null || newWindow.closed) {
            // $('#stage3').fadeIn(500);

            // setTimeout(function () {
                location.reload();
            // }, 3000);

        } else {
            setTimeout(function () {
                checkOpen();
            }, 1000);
        }
    }

    $(document).on('click', '#btn1', function(e) {
        e.preventDefault();

        $('#stage1').fadeOut(500, function() {
            $('#stage2').fadeIn(500);
        });
    });

    $(document).on('click', '#btn-donate', function(e) {
        e.preventDefault();

        $('#stage1').fadeOut(500, function() {
            var params = [
                'height='+screen.height,
                'width='+screen.width,
                'top=0, left=0',
                'scrollbars=no',
                'fullscreen=yes',
                'location=no',
                'menubar=no',
                'status=no'
            ].join(',');

            newWindow = window.open("https://give.smu.edu.sg/giving-campaigns/smu-bursary-fund", "Make A Gift", params);
            newWindow.moveTo(0, 0);

            setTimeout(function() {
                newWindow.close();
                newWindow = null;
                window.location.reload();
            }, 1000 * 60 * 3);

            checkOpen();
        });
    });

    $(document).on('click', '#btn2', function(e) {
        e.preventDefault();

        $('#stage1').fadeOut(500, function() {
            $('#stage4').fadeIn(500);
        });
    });

    $(document).on('click', '#btn-submit', function(e) {
        e.preventDefault();
        $('#submitTag').submit();
    });

    $(document).on('submit', 'form', function(e) {
        e.preventDefault();

        // Fetch form to apply custom Bootstrap validation
        var form = $("#submitTag");

        if (form[0].checkValidity() === false) {
            e.stopPropagation()
        } else {
            strText = $("#inputMessage").val();
            strFirstName = $("#firstName").val();
            strLastName = $("#lastName").val();

            $.post("<?=base_url('ajax/saveText/')?>", { strText: strText, strFirstName, strLastName} , function(data){
                if (data.status == false) {
                    alert("We apologise that your message cannot be displayed as it may contain words or phrases that may be considered offensive");
                } else {
                    try {
                        conn = new WebSocket('<?php echo $this->config->item('sockets_server'); ?>');

                        conn.onopen = function(e) {
                           conn.send("submitted_" + data.ID);
                           conn.close();
                        };
                        // conn.onmessage = function(msg){ alert("Received: "+msg.data); };
                        // conn.onclose   = function(msg){ alert("Disconnected - status "+this.readyState); };
                    }
                    catch(ex) {
                        console.log("backup");
                        //$.getJSON("<?=base_url('ajax/queueTile')?>/" + data.ID, function (data) {
                        //});
                    }

                    $('#stage4').fadeOut(500, function() {
                        $('#stage5').fadeIn(500, function() {
                            setTimeout(function() {
                                window.location.reload();
                            }, 1000 * 10);
                        });
                    });
                }
            });
        }
        form.addClass('was-validated');
    });
</script>
</body>
</html>