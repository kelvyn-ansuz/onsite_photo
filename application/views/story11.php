<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Story 11</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/story.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/video-js.css')?>">
    <link rel="stylesheet" href="<?=base_url('node_modules/videojs-playlist-ui/dist/videojs-playlist-ui.vertical.css')?>">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/video.js')?>"></script>
    <script src="<?=base_url('node_modules/videojs-playlist/dist/videojs-playlist.js')?>"></script>
    <script src="<?=base_url('node_modules/videojs-playlist-ui/dist/videojs-playlist-ui.js')?>"></script>
    <script>
        var baseURL = '<?=base_url()?>';
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>

<div class="fullscreen-loading" style="display:;">
    <span class="spinner-border" role="status"></span>
</div>

<div class="wrapper">
    <div class="nav">
        <a class="nav-item active" data-toggle="list" href="#tab1" role="tab" style="background-image:url('<?=base_url('assets/images/story11/tab1.png')?>');"></a>
        <a class="nav-item" data-toggle="list" href="#tab2" role="tab" style="background-image:url('<?=base_url('assets/images/story11/tab2.png')?>');"></a>
        <a class="nav-item" data-toggle="list" href="#tab3" role="tab" style="background-image:url('<?=base_url('assets/images/story11/tab3.png')?>');"></a>
        <a class="nav-item" data-toggle="list" href="#tab4" role="tab" style="background-image:url('<?=base_url('assets/images/story11/tab4.png')?>');"></a>
        <a class="nav-item" data-toggle="list" href="#tab5" role="tab" style="background-image:url('<?=base_url('assets/images/story11/tab5.png')?>');"></a>
    </div>
    <div class="content">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
            <div class="content-inner-container">
                <div class="content-top">
                    <h3 class="text-center mb-4">Interpreting Economies & Financial Markets</h3>

                    <div class="content-top-inner-container">
                        <div class="content-top-left">
                            The deluge of financial and economic data, and the surge of other types of big data adds complexity and untapped potential to the spheres of accounting, finance and economics. SMU has built up great research capabilities in these areas. Our researchers seek to understand and interpret economies, financial markets and the impact of regulations.
                        </div>
                        <div class="content-top-right">
                            <ul class="fa-ul">
                                <li class=""><i class="fa fa-angle-right mr-2"></i> Economic Growth, Trade</li>
                                <li class=""><i class="fa fa-angle-right mr-2"></i> Financial Market Soundness, Change, Risk, Resiliency</li>
                                <li class=""><i class="fa fa-angle-right mr-2"></i> Financial Reporting, Financial Information Disclosure</li>
                                <li class=""><i class="fa fa-angle-right mr-2"></i> Regulatory Impacts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <h2 class="mb-4">VIDEOS</h2>

                    <div class="content-bottom-inner-container">
                        <div class="content-bottom-left">
                            <video id="tab1-video" class="video-js vjs-fluid vjs-mouse vjs-big-play-centered" controls preload="auto">
                                <source src="<?=base_url('assets/videos/video1.mp4')?>" type="video/mp4">
                            </video>
                        </div>
                        <div class="content-bottom-right vjs-playlist"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel">

        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel">

        </div>
        <div class="tab-pane fade" id="tab4" role="tabpanel">

        </div>
        <div class="tab-pane fade" id="tab5" role="tabpanel">

        </div>
    </div>
</div>

<script>
    var fullScreenLoading = $('.fullscreen-loading');

    $(document).ready(function() {
        fullScreenLoading.fadeOut(500);

        var tab1Video = videojs('#tab1-video', {
            fluid: true,
            controlBar: {
                pictureInPictureToggle: false
            }
        });

        tab1Video.playlist([
            {
                name: 'Financial Econometrics',
                // description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video1.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...Professor Jun Yu has expertise in Computer Science and Economics...Professor Jun Yu has expertise in Computer Science and Economics...Professor Jun Yu has expertise in Computer Science and Economics...Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video2.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video3.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
            {
                name: 'Financial Econometrics',
                description: 'Professor Jun Yu has expertise in Computer Science and Economics...',
                duration: 45,
                thumbnail: '<?=base_url('assets/images/hamsterswing.jpg')?>',
                sources: [{
                    src: '<?=base_url('assets/videos/video4.mp4')?>',
                    type: 'video/mp4'
                }],
            },
        ]);

        tab1Video.playlistUi({
            playOnSelect: true,
        });
    });
</script>
</body>
</html>
