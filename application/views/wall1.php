<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
    <title>Wall</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="<?=base_url('assets/css/wall.css')?>" rel="stylesheet">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.textfill.min.js')?>"></script>
</head>
<body>
<div id="status" style="display:none;"></div>

<div id="animation-1" class="" data-id="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

<div id="animation-2" class="animating"></div>

<div id="animation-3" data-id="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

<div id="animation-4" data-id="" class="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

<div id="animation-5" data-id="" class="">
    <div class="text-container">
        <div class="text-inner-container">
            <p class="text"></p>
            <p class="text-author"></p>
        </div>
    </div>
</div>

<div style="width: 100%; height:100%;">
    <img src="<?=base_url('assets/images/sbst.jpg')?>" style="max-width: 100%; max-height: 100%; display:block; margin:auto;">
    <!--
    <video loop muted autoplay poster="" class="fullscreen-bg__video">
        <source src="<?=base_url('assets/images/background_noplogo.mp4')?>" type="video/mp4">
    </video>
    -->
</div>
<?php
$arrTop = array(600, 550, 500, 450, 400, 350, 300, 250, 200, 150);
$arrTop1 = array(400, 350, 300, 250, 200, 150, 120); // top half only
$arrTop2 = array(450, 400, 350, 300, 250, 200, 150);
$arrTop3 = array(500, 450, 400, 350, 300, 250, 200);
$arrTop4 = array(550, 450, 400, 350, 300, 250, 250);
$arrTop5 = array(600, 550, 500, 450, 400, 350, 300);
$arrTop6 = array(600, 550, 500, 450, 400, 350);
$arrTop7 = array(600, 550, 500, 450, 400);
$arrLeft = array(-200, -100, 0, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000);
$arrColors = array(
    'b7bba6',
    'f5c24c',
    '76cbdd',
    'e2323b',
    'e4cbd1',
    '936aae',
);
foreach ($PublishedTiles as $tiles) {
    $intLeft = $arrLeft[array_rand($arrLeft)] + rand(0, 80);
    if ($intLeft <= -160 || $intLeft >= 960) {
        $arrTop = $arrTop6;
    } elseif ($intLeft <= -120 || $intLeft >= 920) {
        $arrTop = $arrTop6;
    } elseif ($intLeft <= -80 || $intLeft >= 880) {
            $arrTop = $arrTop5;
    } elseif ($intLeft <= 40 || $intLeft >= 760) {
        $arrTop = $arrTop4;
    } elseif ($intLeft <= 160 || $intLeft >= 640) {
        $arrTop = $arrTop3;
    } elseif ($intLeft <= 280 || $intLeft >= 520) {
        $arrTop = $arrTop2;
    } else {
        $arrTop = $arrTop1;
    }
    $intLeft += 15;
    $intTop = $arrTop[array_rand($arrTop)] + rand(0, 40);
    $angle = pow(-1, rand(1, 2)) * rand(5, 10);
    $color = $arrColors[array_rand($arrColors)];
    $i = $tiles->AtCollectionID;
    ?>
    <div id="leave_<?=$i?>" class="leaves tag smallTag" style="top:<?=$intTop?>px;left:<?=$intLeft?>px;background-color:#<?=$color?>;transform:rotate(<?=$angle?>deg) scale(0.04);" data-id="<?=$tiles->AtCollectionID?>">
        <div class="text-container">
            <div class="text-inner-container" style="transform:rotate(<?=$angle * -1?>deg);">
                <p class="text"><?=$tiles->AtText?></p>
                <p class="text-author"><?=$tiles->AtFirstName?><br><?=$tiles->AtLastName?></p>
            </div>
        </div>
    </div>
    <?php
}
?>

<script type="text/javascript">
    var growTimer = null;
    var animationInProgress = false;
    var idleAnimationType = 1;
    var newTagSubmittedQueue = [];
    var animation1 = $('#animation-1');
    var animation2 = $('#animation-2');
    var animation3 = $('#animation-3');
    var animation4 = $('#animation-4');
    var animation5 = $('#animation-5');

    function escapeNull(str) {
        return str === null ? '' : str;
    }

    $.fn.random = function() {
        return this.eq(Math.floor(Math.random() * this.length));
    };

    function getRandomTag() {
        return $('.smallTag').random();
    }

    $(document).ready(function() {
      console.log("readt");
        function wallActivity() {
            console.log('Initiailizing wall activity');

            if (animationInProgress) {
                console.log('Animation in progress');
            } else {
                console.log('No animation in progress');

                console.log(newTagSubmittedQueue.length + ' new tags submitted in queue');
                var smallTags = $('.smallTag');
                console.log(smallTags.length + ' tags currently displayed on the wall');

                if (newTagSubmittedQueue.length) {
                    console.log('Initializing new-tag-submitted animation');
                    newTagSubmittedAnimation();
                } else if (smallTags.length) {
                    console.log('Initializing idle animation');
                    idleAnimation();
                } else {
                    console.log('No animation can be played');
                }
            }

            setTimeout(function() {
                wallActivity();
            }, 5000);
        }

        function newTagSubmittedAnimation() {
            console.log('New-tag-published animation initialized');
            animationInProgress = true;

            if (newTagSubmittedQueue.length) {
                var tag = newTagSubmittedQueue[0];
                newTagSubmittedQueue.shift();

                var arrTop = [600,550,500,450,400,350];
                var intTop = arrTop[Math.floor(Math.random() * arrTop.length)] + Math.floor(Math.random() * 40);

                var arrLeft = [250,350,450,550,650,750,850,950,1000];
                var intLeft = arrLeft[Math.floor(Math.random() * arrLeft.length)] + Math.floor(Math.random() * 80);

                var angle = Math.pow(-1, Math.floor(Math.random() * 2) + 1) * (Math.floor(Math.random() * 6) + 5);

                var arrColors = [
                    'b7bba6',
                    'f5c24c',
                    '76cbdd',
                    'e2323b',
                    'e4cbd1',
                    '936aae'
                ];
                var color = arrColors[Math.floor(Math.random() * arrColors.length)];

                var strHTML = '<div id="leave_' + tag.AtCollectionID + '" class="leaves smallTag tag" style="top:' + intTop + 'px;left:' + intLeft + 'px;background-color:#' + color + ';transform:rotate(' + angle + 'deg) scale(0.04);" data-id="' + tag.AtCollectionID + '">';
                strHTML += '<div class="text-container">';
                strHTML += '<div class="text-inner-container">';
                strHTML += '<p class="text">' + tag.AtText + '</p>';
                strHTML += '<p class="text-author">' + escapeNull(tag.AtFirstName) + '<br>' + escapeNull(tag.AtLastName) + '</p>';
                strHTML += '</div>';
                strHTML += '</div>';
                strHTML += '</div>';

                var newTag = $(strHTML);

                animation1.find('.text-container').css('background-color', newTag.css('background-color'));
                animation1.attr('data-id', newTag.data('id'));
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
                    animation3.css('background-color', newTag.css('background-color'));
                    animation3.attr('data-id', newTag.data('id'));
                    setTimeout(function() {
                        animation3.find('.text').html(tag.AtText);
                        animation3.find('.text-author').html(escapeNull(tag.AtFirstName) + '<br>' + escapeNull(tag.AtLastName));
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
                        newTag.fadeIn(1000);
                        setTimeout(function() {
                            animationInProgress = false;
                        }, 2000);
                    }, <?=$animation3Duration * 1000?>);
                }, <?=$animation1Duration * 1000?>)
            }
        }

        function idleAnimation() {
            console.log('Idle animation initialized');
            animationInProgress = true;

            var tag = getRandomTag();
            var tagHTML = tag.find('.text-inner-container').html();

            if (idleAnimationType === 1) {
                console.log('Idle animation type 1');
                idleAnimationType = 2; // switch animation type for next call
                animation4.css('background-color', tag.css('background-color'));
                animation4.attr('data-id', tag.data('id'));
                animation4.find('.text-inner-container').html(tagHTML);
                animation4.textfill({
                    innerTag: '.text-inner-container',
                    maxFontPixels: 50,
                    explicitWidth: 250,
                    explicitHeight: 260
                });
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
                    maxFontPixels: 50,
                    explicitWidth: 250,
                    explicitHeight: 260
                });
                animation5.addClass('animating');
                setTimeout(function() {
                    animation5.removeClass('animating');
                }, <?=$animation3Duration * 1000?>);
            }

            setTimeout(function() {
                animationInProgress = false;
            }, <?=$animation3Duration * 1000?> + 2000)
        }

        function initSocket() {
            var conn = new WebSocket('<?php echo $this->config->item('sockets_server'); ?>');
            var statusDiv = $('#status');

            function checkServer() {
                intTimeStamp = new Date().getTime()
                conn.send("ping_" + intTimeStamp);

                setTimeout(function() {
                    checkServer()
                },5000);
            }

            conn.onopen = function(e) {
                statusDiv.text('Connection Established');
                statusDiv.fadeIn(300).delay(1000).fadeOut(300);
                checkServer();
            };

            conn.onclose = function(e) {
                statusDiv.text('Connection Dropped');
                statusDiv.fadeIn(300);
            };

            conn.onerror = function(e) {
                statusDiv.text('Error Detected');
                statusDiv.fadeIn(300);
            };

            conn.onmessage = function(e) {

                var strMessage = e.data;
                console.log(strMessage);

                if (strMessage.startsWith("submitted")) {
                    $.getJSON("<?=base_url('ajax/getTile/')?>" + strMessage.split("_")[1], function (data) {
                        console.log("submitted");
                        console.log(data);
                        newTagSubmittedQueue.push(data);
                    });
                } else if (strMessage.startsWith("publish")) {
                    $.getJSON("<?=base_url('ajax/publishTile/')?>" + strMessage.split("_")[1], function (data) {
                        console.log('publish');
                        console.log(data);
                        var tag = data;

                        var arrTop = [600,550,500,450,400,350];
                        var intTop = arrTop[Math.floor(Math.random() * arrTop.length)] + Math.floor(Math.random() * 40);

                        var arrLeft = [250,350,450,550,650,750,850,950,1000];
                        var intLeft = arrLeft[Math.floor(Math.random() * arrLeft.length)] + Math.floor(Math.random() * 80);

                        var angle = Math.pow(-1, Math.floor(Math.random() * 2) + 1) * (Math.floor(Math.random() * 6) + 5);

                        var arrColors = [
                            'b7bba6',
                            'f5c24c',
                            '76cbdd',
                            'e2323b',
                            'e4cbd1',
                            '936aae'
                        ];
                        var color = arrColors[Math.floor(Math.random() * arrColors.length)];

                        var strHTML = '<div id="leave_' + tag.AtCollectionID + '" class="leaves smallTag tag" style="top:' + intTop + 'px;left:' + intLeft + 'px;background-color:#' + color + ';transform:rotate(' + angle + 'deg) scale(0.04);" data-id="' + tag.AtCollectionID + '">';
                        strHTML += '<div class="text-container">';
                        strHTML += '<div class="text-inner-container">';
                        strHTML += '<p class="text">' + tag.AtText + '</p>';
                        strHTML += '<p class="text-author">' + escapeNull(tag.AtFirstName) + '<br>' + escapeNull(tag.AtLastName) + '</p>';
                        strHTML += '</div>';
                        strHTML += '</div>';
                        strHTML += '</div>';

                        var newTag = $(strHTML).hide();
                        $('body').append(newTag);
                        newTag.fadeIn(500);
                    });
                } else if (strMessage.startsWith("unpublish")) {
                    intID = strMessage.split("_")[1];
                    $objTarget = $("#leave_" + intID);
                    $objTarget.fadeOut(500, function() {
                        $objTarget.remove();
                    });
                    $('[data-id=' + intID + ']').removeClass('animating').find('.text, .text-author').html('');
                }
            };
        }

        initSocket();

        setTimeout(function() {
       //     wallActivity();
        }, 3000);
    });
</script>
</body>
</html>