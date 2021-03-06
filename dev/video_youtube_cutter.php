<?php 
    $vid_id = $_POST["vid_id"]; 
    $vid_id = str_replace("https://www.youtube.com/watch?v=","", $vid_id);
?>

<!-- Video Crop Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.5.1/nouislider.min.css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
 .size
 {
 font-size: 80px;
 font-weight: bold;
 }
 .sizePar
 {
 font-size: 21px;
 }
 .input-size
 {
 width: 355px;
 float: left;
 }
 .button-size
 {
 width: 95px;
 float: none;
 height: 33px;
 }
 .padding
 {
 padding-top: 11px;
 }
 .video-image-size
 {
 width:250px;
 height:auto;
 }
 .center
 {
 text-align: center;
 padding-top: 25px;
 }
 .button-rule
 {
 font-style: normal;
 font-weight: bold;
 vertical-align: middle;
 }
 .button-widht
 {
 width: 116px;
 }
 .allontana
 {
 margin-bottom: 30px;
 margin-top:50px;
 margin-right:15px;
 }
 .separa{
 margin-left: 10px;
 margin-right: 10px;
 }
 .bordered{
 border: 1px solid black;
 }
 body { 
 padding-top: 70px;
 }
 .carousel-inner img{
 margin: 0 auto;
 }
 .navbar-brand{
 font-size: 20pt;
 font-style: bold;
 }
 hr { 
 display: block; 
 height: 1px;
 border: 0; 
 border-top: 1px solid orange;
 margin: 1em 0; padding: 0; 
 }
 .progress {
 border-radius: 0px; 
 height: 10px;
 }
 .progress-bar-warning{
 background: #ffffff;
 }
 .video-image-size-onWatch{
 width:150px;
 height:auto;
 }
 #showcase {
 margin: 0 20px;
 text-align: center;
 }
 #range .noUi-base {
 }
 #range .noUi-background {
 }
 #range .noUi-connect {
 background: #80C9F5;
 box-shadow: inset 0 0 5px rgba(20,20,20,0.65);
 }
 #value-span,
 #value-input {
 width: 50%;
 float: left;
 display: block;
 text-align: center;
 margin: 0;
 }
</style>
<!-- Video Crop Link Ends -->

<div class="row">
<div class="col-md-4 text-center">
    <div class="panel panel-info" style="margin-top:30px;">
       <div class="panel-heading">
          <h3 class="panel-title">Current Time</h3>
       </div>
       <div class="panel-body">
          <div id="curTime" style="font-size:20px;">
          </div>
       </div>
    </div>
    <div class="panel panel-info">
       <div class="panel-heading">
          <h3 class="panel-title">Cutted duration</h3>
       </div>
       <div class="panel-body">
          <div id="finalDuration" style="font-size:20px;">
          </div>
       </div>
    </div>
    <div class="panel panel-info">
       <div class="panel-body" style="background: green;color: white;font-size: 20px;font-weight: 700;border-radius: 10px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);cursor:pointer;">
          <a>Trim</a>
       </div>
    </div>
 </div>
 <!-- player -->
 <div class="col-md-7 text-center" style="padding-top:30px;">
    <div class="embed-responsive embed-responsive-16by9">
       <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
       <div id="player" class="embed-responsive-item">
       </div>
    </div>
    <!-- progress bar -->
    <div class="progress">
       <div class="progress-bar progress-bar-primary progress-bar-striped" id="cut-left" style="width: 0%">
          <span class="sr-only"></span>
       </div>
       <div class="progress-bar progress-bar-success progress-bar-striped active" id="played" style="width: 0%">
          <span class="sr-only"></span>
       </div>
       <div class="progress-bar progress-bar-warning progress-bar-striped" id="toPlay" style="width: 100%">
          <span class="sr-only"></span>
       </div>
       <div class="progress-bar progress-bar-primary progress-bar-striped" id="cut-right" style="width: 0%">
          <span class="sr-only"></span>
       </div>
    </div>
    <!-- 2. The IONrangeSlider container -->
    <div id="range"></div>
    <div id="value-input"></div>
    <div id="value-span"></div>
    <!-- Controls -->
    <div id="controls" style="padding-top:20px;">
       <a href="#" onClick="rewindVideo()" class="separa">
       <i class="separa fa fa-refresh fa-2x"></i>
       </a>
       <a href="#" onClick="backwardVideo()" class="separa">
       <i class="separa fa fa-backward fa-2x"></i>
       </a>
       <a href="#" onClick="playPauseVideo()" id="playPause" class="separa">
       <i class="separa fa fa-play fa-2x"></i>
       </a>
       <a href="#" onClick="forwardVideo()" class="separa">
       <i class="separa fa fa-forward fa-2x"></i>
       </a>
    </div>
    <div class="col-md-3" style="height: 20px;"></div>
 </div>

</div>
 
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.5.1/nouislider.min.js'></script>
 
 <script>
    // console.log(1);
    
    var tag = document.createElement("script");

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    var duration;
    
    // console.log(2);
    
    function onYouTubeIframeAPIReady() {
        // console.log(3);
        player = new YT.Player("player", {
            height: "360",
            width: "640",
            videoId: "<?= $vid_id; ?>",
            playerVars: { start: 0, autoplay: 0, controls: 0 },
            events: {
                onReady: onPlayerReady,
                onStateChange: onytplayerStateChange,
            },
        });
        // console.log(4);
    }

    function onPlayerReady(event) {
        // event.target.playVideo();

        duration = player.getDuration();
        setMoreInfo();
        playPauseVideo();
        setIONrangeSlider();
        checkDomainAndStop();
    }

    function onytplayerStateChange(newState) {
        setCorrectImageOnPlay();
    }

    /*
          IONrangeSlider
          */
    var fromOld = 0;
    var toOld = duration;
    var slider;
    function setIONrangeSlider() {
        var slider = document.getElementById("range");

        noUiSlider.create(slider, {
            start: [0, duration], // Handle start position
            step: 1, // Slider moves in increments of '1'
            margin: 3, // Handles must be more than '3' apart
            connect: true, // Display a colored bar between the handles
            behaviour: "tap-drag", // Move handle on tap, bar is draggable
            range: {
                // Slider can select '0' to 'duration'
                min: 0,
                max: duration,
            },
        });

        var valueInput = document.getElementById("value-input"),
            valueSpan = document.getElementById("value-span");
        var readValue;
        // When the slider value changes, update the input and span
        slider.noUiSlider.on("update", function (values, handle) {
            if (handle) {
                readValue = values[handle] | 0;
                valueSpan.innerHTML = toHHMMSS(values[handle]);

                if (toOld != readValue) {
                    toOld = readValue;
                }
            } else {
                readValue = values[handle] | 0;
                valueInput.innerHTML = toHHMMSS(values[handle]);

                if (fromOld != readValue) {
                    fromOld = readValue;
                    player.seekTo(readValue, true);
                    player.pauseVideo();
                    player.playVideo();
                }
            }
        });

        // When the input changes, set the slider value
        valueInput.addEventListener("change", function () {
            slider.noUiSlider.set([null, this.value]);
        });
    }

    /*
          Player Bar
          */
    function updatePlayerBar() {
        var curTime = player.getCurrentTime();

        var cutLeft = (fromOld * 100) / duration;
        var cutRigth = ((duration - toOld) * 100) / duration;

        var played = ((curTime - fromOld) * 100) / duration;

        var toPlay = 100 - played - cutLeft - cutRigth;

        document.getElementById("cut-left").style.width = cutLeft + "%";
        document.getElementById("cut-right").style.width = cutRigth + "%";
        document.getElementById("played").style.width = played + "%";
        document.getElementById("toPlay").style.width = toPlay + "%";
    }

    /*
          Updates the playback quality
          */
    function updatePlaybackQuality(quality) {
        player.setPlaybackQuality(quality);
        waitForQuality(quality);
    }

    function waitForQuality(quality) {
        if (player.getPlaybackQuality() != quality) {
            setTimeout(function () {
                waitForQuality(quality);
            }, 1000);
        } else {
            createQualityList(qualityLevels);
        }
    }

    function checkDomainAndStop() {
        var curTime = player.getCurrentTime();
        document.getElementById("curTime").innerHTML = toHHMMSS(curTime.toString()) + " / " + toHHMMSS(duration.toString());
        var result = toHHMMSS((toOld - fromOld).toString());
        if (result != "NaN:NaN:NaN") {
            document.getElementById("finalDuration").innerHTML = result;
        }
        if (curTime < fromOld) {
            player.seekTo(fromOld, true);
        }
        if (curTime > toOld) {
            player.seekTo(toOld, true);
            pauseVideo();
        }

        updatePlayerBar();

        // recursively call it.
        setTimeout(checkDomainAndStop, 100);
    }

    /*
          Setting more infos
          */
    var waitForLevels;
    var qualityLevels;

    function setMoreInfo() {
        waitForLevels = player.getAvailableQualityLevels();

        if (waitForLevels.length == 0) {
            setTimeout(setMoreInfo, 1000);
        } else {
            qualityLevels = waitForLevels;
            //console.log(qualityLevels);
            createQualityList(qualityLevels);
        }
    }

    /*
          converts String to hh:mm:ss or mm:ss
          */
    function toHHMMSS(val) {
        var sec_num = parseInt(val, 10);
        var hours = Math.floor(sec_num / 3600);
        var minutes = Math.floor((sec_num - hours * 3600) / 60);
        var seconds = sec_num - hours * 3600 - minutes * 60;

        if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        // only mm:ss
        if (hours == "00") {
            var time = minutes + ":" + seconds;
        } else {
            var time = hours + ":" + minutes + ":" + seconds;
        }

        return time;
    }

    function stopVideo() {
        player.stopVideo();
    }
    function pauseVideo() {
        player.pauseVideo();
    }

    function playVideo() {
        player.playVideo();
    }

    function playPauseVideo() {
        //is playing
        if (player.getPlayerState() == 1) {
            pauseVideo();
        } else {
            playVideo();
        }
    }

    function setCorrectImageOnPlay() {
        //is playing
        if (player.getPlayerState() == 1) {
            document.getElementById("playPause").innerHTML = '<i class="separa fa fa-pause fa-2x"></i>';
        } else {
            document.getElementById("playPause").innerHTML = '<i class="separa fa fa-play fa-2x"></i>';
        }
    }

    function backwardVideo() {
        var curTime = player.getCurrentTime();
        curTime -= 5;
        if (curTime < fromOld) {
            player.seekTo(fromOld, true);
        } else {
            player.seekTo(curTime, true);
        }
    }

    function rewindVideo() {
        player.seekTo(fromOld, true);
        playVideo();
    }

    function forwardVideo() {
        var curTime = player.getCurrentTime();

        curTime += 5;
        if (curTime > toOld) {
            player.seekTo(toOld, true);
        } else {
            player.seekTo(curTime, true);
        }
    }
    //# sourceURL=pen.js
</script>
