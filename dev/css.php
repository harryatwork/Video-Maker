<link href="css/bootstrap-custom/bootstrap.min.css" rel="stylesheet">
<link href="bundle/css/myslider_constructor.min.css" rel="stylesheet">
<script src="lib/jquery/dist/jquery.js"></script>
<script src="actions/index3099.php?a=jsLang"></script>
<script src="bundle/js/myslider_constructor.min1036.js?v=2.1.1"></script>

<script src="https://kit.fontawesome.com/03465afe1b.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Draggable Div STARTS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Draggable Div ENDS -->



<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.0/cropper.min.css'>




<style>
*:focus {
  outline: none;
}
	
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.colorpick-eyedropper-input-trigger {
    display:none;
}
	
.logo-box {
	padding-top: 24px !important;
	padding-bottom: 0px;
}
.nav-outer {
	margin-top: 0% !important;
	width: 50% !important;
	margin-left: 10% !important;
}
.outer-box {
	margin-top: -75px !important;
}
.topbarmobileresponsive {
	zoom:0.7;
}
.outer-box {
	zoom:0.7;
}


.animation_secs {
	width:200px;
	display: inline-block;
}
.animation_secs_span {
	font-size: 12px;
    font-weight: 700;
}
	
.animation_drag_area_indi_layer:hover .animation_drag_area_indi_layer_title {
    background: #ececec;
}
	
	
.demo {
	width:150px;
	height:50px;
	padding:5px;
	background-color:#ff8811;
	/*position:absolute;*/
}
	
	
.left_bar_icon_div {
	box-shadow: 0px 0px 5px 2px rgb(0 0 0 / 20%); 
	width: 40px; 
	height: 40px; 
	border-radius: 50%; 
	text-align: center; 
	position: relative;
	margin: auto;
	cursor:pointer;
}
.left_bar_icon_div:hover {
	background: #2b4354;
}

.btn_on_hover:hover {
    box-shadow:0px 0px 8px 1px rgb(0 0 0 / 20%);
}

.file_options {
    cursor:pointer;
}
.file_options:hover {
    background:#f2f2f2;
}


.main_overlay {
    position: absolute;
    width:100%;
    height:110%;
    z-index:999;
    animation:pulse 5s infinite;
}
.main_overlay_container {
  position: relative;
  width: 50%;
  margin: 280px auto; 
  padding: 20px 40px;
  border-radius: 4px;
  box-sizing: border-box;
  background: #fff;
  box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
}

.main_overlay_Loading {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 10px;
  background: #f1f1f1;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
  border-radius: 4px;
  overflow: hidden;
}

.main_overlay_Loading:after {
  content: '';
  position: absolute;
  left: 0;
  width: 0;
  height: 100%;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .2);
  animation: load 20s;
  animation-iteration-count: 1;
}

@keyframes load {
  0% {
    width: 0;
    background: #a28089;
  }
  
  25% {
    width: 40%;
    background: #a0d2eb;
  }
  
  50% {
    width: 60%;
    background: #ffa8b6;
  }
  
  75% {
    width: 75%;
    background: #d0bdf4;
  }
  
  100% {
    width: 100%;
    background: #494d5f;
  }
}

@keyframes pulse {
  0% {
    background: #a28089;
  }
  
  25% {
    background: #a0d2eb;
  }
  
  50% {
    background: #ffa8b6;
  }
  
  75% {
    background: #d0bdf4;
  }
  
  100% {
    background: #494d5f;
  }
}

#overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#overlay2 {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.8); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}


#v_m_title:focus {
    border-bottom: 1px solid #d8d8d8;
}
.draggable2 {
    border:6px dashed transparent;
    border-radius:5px;
}
.draggable2:hover {
    border:6px dashed #5c9ae4;
}
video::-webkit-media-controls-timeline {
    display: none;
}
video::-webkit-media-controls-mute-button { 
    display: none !important; 
} 
video::-webkit-media-controls-volume-slider { 
    display: none !important; 
}
video::-webkit-media-controls-fullscreen-button
{
   display: none !important;
}
video::-webkit-media-controls-current-time-display {
    display:none;
}
video::-webkit-media-controls-time-remaining-display {
    display:none;
}
video::-webkit-media-controls-overlay-play-button {
  display: none;
}




.switch {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 20px;
}
.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}



::-webkit-scrollbar {
  width: 4px;
  height: 4px;
}
  ::-webkit-scrollbar-track {
    background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%); 
}
  ::-webkit-scrollbar-thumb {
  background: #888; 
    border-radius:10px;
}
::-webkit-scrollbar-thumb:hover {
  background: #555; 
} 


.draggable_layer_indi_common, .draggable2 {
    cursor:pointer;
}

.circular-loader {
  -webkit-animation: rotate 2s linear infinite;
          animation: rotate 2s linear infinite;
  height: 100%;
  -webkit-transform-origin: center center;
      -ms-transform-origin: center center;
          transform-origin: center center;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  margin: auto;
}

.loader-path {
  stroke-dasharray: 150,200;
  stroke-dashoffset: -10;
  -webkit-animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
          animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
  stroke-linecap: round;
}

@-webkit-keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -35;
  }
  100% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -124;
  }
}
@keyframes dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -35;
  }
  100% {
    stroke-dasharray: 89,200;
    stroke-dashoffset: -124;
  }
}
@-webkit-keyframes color {
  0% {
    stroke: #ffffff;
  }
  40% {
    stroke: #ffffff;
  }
  66% {
    stroke: #ffffff;
  }
  80%, 90% {
    stroke: #ffffff;
  }
}
@keyframes color {
  0% { 
    stroke: #ffffff;
  }
  40% {
    stroke: #ffffff;
  }
  66% {
    stroke: #ffffff;
  }
  80%, 90% {
    stroke: #ffffff;
  }
}


</style>