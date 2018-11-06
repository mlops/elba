<html>
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public')."") }}/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<style>
    html,
    body, {
        height: 100%;
        min-height: 100%;}
    .hero-wrap {
        height: 100%;
        min-height: 480px;
        overflow: visible;
        position: relative;}
    .hero-video {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative; }

        video,
        img.alternative {
            position: absolute
            height: auto
            width: auto
            -webkit-user-select: none
            -moz-user-select: none
            -ms-user-select: none
            user-select: none
            z-index: 0
        }
            
    .touch .hero-video video, 
    .no-touch .hero-video img.alternative {
        display: none;
    }

</style>
    <body>
        <div class="hero-wrap">
            <div class="hero-video">
                <video width="1280" height="720">
                    <source src="{{  URL::to(Config::get('caminho.server_public').'') }}/images/iphone.mp4" type="video/mp4" data-format="mp4">
                    <source src="{{  URL::to(Config::get('caminho.server_public').'') }}/images/web1.webm" type="video/webm" data-format="webm">
                </video>
                <img src="{{  URL::to(Config::get('caminho.server_public').'') }}/images/videoGif.gif" width="1280" height="720" class="alternative">
                <h1 id="logo"><img src="img/logo.svg" alt=""></h1>
                <h3 class="headline">This is a headline overlayed on the video</h3>
            </div>
        </div>
    </body>
    <script>
    $(function() {
        var $heroEl = Modernizr.touch ? $('img.alternative') : $('video'),
            $parent = $heroEl.parent(),
            $win = $(window),
            $popup = $('#videoPopup'),
            $mask = $('#toolsVideoShield'),
            heroAR = 16 / 9,
            vid;

        if (Modernizr.touch === false) {
            vid = $heroEl.get(0);

            // play the video when the browser is able and update the
            // video sources when the video ends
            $heroEl
                .on('canplaythrough', playVid)
                .on('ended', playVid)
                .click(function(e) {
                    e.preventDefault();
                    $popup.click();
                });

            // pause the BG video when the video modal is loaded
            $popup.click(pauseVid);

            // play the BG video when the mask is clicked
            $mask.click(playVid);
        }

        // fit the hero element when the browser window is resized
        $win.resize(fitHeroEl);

        fitHeroEl();
        playVid();

        // fitHeroEl()
        //
        // Center the hero element (image|video) using CSS left/top properties.
        function fitHeroEl() {
            var parentW = $parent.width(),
                parentH = $parent.height(),
                newWidthHeight = {},
                newPos = {};

            if (parentW / parentH <= heroAR) {
                newWidthHeight.height = '100%';
                newWidthHeight.width = 'auto';
            } else {
                newWidthHeight.height = 'auto';
                newWidthHeight.width = '100%';
            }

            $heroEl.css(newWidthHeight);

            newPos.left = Math.min(0, (parentW - $heroEl.width()) / 2);
            newPos.top = Math.min(0, (parentH - $heroEl.height()) / 2);

            $heroEl.css(newPos);
        }

        // playVid()
        //
        // Play the BG video.
        function playVid() {
            $heroEl.removeAttr('poster');
            fitHeroEl();
            vid.play();
        }

        // pauseVid()
        //
        // Pause the BG video.
        function pauseVid() {
            vid.pause();
        }

    });</script>
</html>