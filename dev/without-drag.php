<?php include("../head.php"); ?>

<link href="css/bootstrap-custom/bootstrap.min.css" rel="stylesheet">
<link href="bundle/css/myslider_constructor.min.css" rel="stylesheet">
<script src="lib/jquery/dist/jquery.js"></script>
<script src="actions/index3099.php?a=jsLang"></script>
<script src="bundle/js/myslider_constructor.min1036.js?v=2.1.1"></script>


<style>
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
</style>


	<body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-20 kingcomposer kc-css-system" onload="modal()">
	   <div class="page-wrapper">
	   <!-- Preloader -->
	   <div class="preloader"></div>
			   
		<?php include("../header.php"); ?>
		   
		   
		   
<div id="msc-app" class="app-container" style="margin-top: 10%;margin-bottom: 5%;"></div>

<!-- Templates -->
<script type="text/template" id="msc-layout-template">

	<div style="width: 13%;display: inline-block;margin-left: 10px;height: 650px;">
		<div style="margin: 10px;">
			<div style="width: 100%;height: 100px;background: #F7F7F7;border: 8px solid #DDDD;">
				<span style="font-size: 14px;padding-left: 5px;font-weight: 600;color:#a0a0a0;">screen #1</span>
			</div>
		</div>
	</div>

    <div class="app-container-inner" style="width: 65%;display: inline-block;height: 650px;">
	   <div class="card mb-3" id="msc-container">
		  <div class="card-header">
			 <div class="row">
				<div class="col-md-8">
				   <div class="row form-group">

				   	<div style="width:100%;">
					
					  <div class="col-8 no-padding-right" style="display:inline-block;">
						<select class="form-control" id="resolution_selector" style="box-shadow: 0 0 7px rgb(0 0 0 / 10%) inset;">
							<option value="1920x1080">FULL HD 1920x1080 (16:9)</option>
							<option value="1080x1920">FULL HD 1080x1920 (9:16)</option>
							<option value="1080x720">HD 1080x720 (16:9)</option>
							<option value="720x1080">HD 720x1080 (9:16)</option>
							<option value="1080x1080">SQUARE 1080x1080 (1:1)</option>
							<option value="CUSTOM">CUSTOM SIZE</option>
						</select>
					  </div>
					  
					  <div class="col-3" style="display:inline-block"> 
					  	<button id="size_set_btn" class="btn btn-outline-primary button-slider-accept" data-toggle="tooltip" title="Apply"> 
						<i class="icon-checkmark3"></i> </button> 
					  </div>
					  
					  <input id="size_ranger" type="range" step="0.01" min="0.1" max="1" 
					  		style="width: 75%;margin-left: 3%;margin-top: 10px;" />
					  
					<br/>
					
					  <div class="col-4 no-padding-right custom_size" style="display:none;" > 
					  	<input class="form-control input-sm" id="custom_size_left" type="number" name="slider_width" value="" min="150" step="1"> 
					  </div>
					  <div class="col-4 no-padding-right custom_size" style="display:none;"> 
					  	<input class="form-control input-sm" id="custom_size_right" type="number" name="slider_height" value="" min="150" step="1"> 
					  </div>
					  
					</div>
					  
					  
				   </div>
				</div>
				<div class="col-md-4 text-md-right text-xs-center">
				   <button class="btn btn-outline-success margin-horizontal button-slider-save"> <i class="icon-checkmark3"></i> Save </button> 
				   <div class="dropdown display-inline-block margin-horizontal">
					  <button type="button" class="btn btn-outline-primary button-open" data-toggle="dropdown"> <i class="icon-list"></i> </button> 
					  <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item button-slider-new" href="#"> <i class="icon-file"></i> New </a> <a class="dropdown-item button-slider-open" href="#"> <i class="icon-folder"></i> Open </a> </div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
		  <div class="card-body p-0">
			 <div class="msc-slides-wrapper" style="height: 475px;">
				<div class="msc-slides-container" id="msc-slides-container" style="min-width: 700px;">
				   <div class="inner et-wrapper" style="width: 700px; height: 350px;">
					  <div class="msc-slide et-page et-page-current"></div>
				   </div>
				</div>
				<div class="msc-right-panel" id="msc-right-panel"></div>
			 </div>
		  </div>
		  <div class="card-footer" id="msc-slide-placeholder-container">
			 <div class="row">
				<div class="col-5 col-sm-5 col-md-7 list-container"> </div>
				<div class="col-7 col-sm-7 col-md-5 msc-slides-buttons-container">
				   <div class="msc-slides-buttons"> <button type="button" class="btn btn-outline-success button-play-slide" data-toggle="tooltip" title="Play slide animation"> <i class="icon-play"></i> </button> <span class="divider-vert"></span> <button type="button" class="btn btn-outline-primary button-add-slide" data-toggle="tooltip" title="New slide"> <i class="icon-plus3"></i> </button> <button type="button" class="btn btn-outline-primary button-copy-slide" data-toggle="tooltip" title="Copy slide"> <i class="icon-copy"></i> </button> <button type="button" class="btn btn-outline-danger button-remove-slide" data-toggle="tooltip" title="Delete slide"> <i class="icon-cancel3"></i> </button> </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
	
	<div id="msc-layer-placeholder-wrapper" style="width: 20%;vertical-align: top;display: inline-block;margin-top: 2%;height: 650px;"></div>
	
	<br/><br/>
	
	<div class="row" style="width: 90%;margin-left: 5%;">
		<div class="col-lg-12">
			 <div id="msc-options-layer"></div>
		</div>
	</div>
	
	<div id="msc-modals"></div>
	
</script>
		   
		   
<script type="text/template" id="msc-layer-placeholder-empty-template">
    <div class="alert alert-warning text-xs-center" role="alert"> Empty </div>
</script>
<script type="text/template" id="msc-modal-template">
    <div class="modal fade">
	   <div class="modal-dialog" role="document">
		  <div class="modal-content">
			 <div class="modal-header">
				<h4 class="modal-title"><%- modalTitle %></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
			 </div>
			 <div class="modal-body max-height max-height400"> </div>
			 <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button> </div>
		  </div>
	   </div>
	</div>
</script>
<script type="text/template" id="msc-modal-submit-template">
    <div class="modal fade">
	   <div class="modal-dialog" role="document">
		  <div class="modal-content">
			 <div class="modal-header">
				<h4 class="modal-title"><%- modalTitle %></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
			 </div>
			 <div class="modal-body max-height max-height400"> </div>
			 <div class="modal-footer"> <button type="button" class="btn btn-primary button-submit" data-dismiss="modal"> Save </button> <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button> </div>
		  </div>
	   </div>
	</div>
</script>
<script type="text/template" id="msc-modal-slider-save-template">
    <div class="modal fade">
	   <div class="modal-dialog" role="document">
		  <div class="modal-content">
			 <div class="modal-header">
				<h4 class="modal-title"><%- modalTitle %></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
			 </div>
			 <div class="modal-body max-height"> </div>
			 <div class="modal-footer"> <button type="button" class="btn btn-primary button-submit" data-dismiss="modal"> Save </button> <button type="button" class="btn btn-outline-primary button-submit-new"> Save as new </button> <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button> </div>
		  </div>
	   </div>
	</div>
</script>
<script type="text/template" id="msc-icon-button-template">
    <i class="<%- name %>" title="<%- name %>"></i>
</script>
<script type="text/template" id="msc-layer-placeholder-collection-template">
    <div class="card" id="msc-layer-placeholder-container">
	   <div class="card-header" style="padding:0px;">
	   	<div class="card-title" id="card-title-layers" style="width: 49%;display: inline-block;text-align: center;padding: .75rem 1.25rem;font-size: 14px;background:#5c9ae4;color:white;margin-bottom: 0px;font-weight: 700;">
		  Layers
		</div>
		<div class="card-title" id="card-title-media" style="width: 49%;display: inline-block;text-align: center;padding: .75rem 1.25rem;font-size: 14px;margin-bottom: 0px;font-weight: 700;">
		  Media
		</div>
	   </div>
	   
	   <div class="card-body" id="card-body">
		  <div class="form-group"> <button class="btn btn-outline-primary btn-block button-add-layer"> <i class="icon-plus3"></i> Add layer </button> </div>
		  <div class="list-container"></div>
	   </div>
	   
	   <div class="card-body2" id="card-body2" style="padding:0px 20px;display:none;">
	   	
		<br/>
		<div>
		<h6 id="images-indi-title" style="text-align: center;background: white;color: black;padding: 10px 0px;
			box-shadow: 0px 0px 2px 2px rgb(0 0 0 / 20%);">IMAGES <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
		<div class="media-div" id="images-indi-div" style="display:none;">
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/0.png" style="">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/images/1.jpg">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/images/2.jpg">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/images/3.jpg">
	   	  </div>
		</div>
		</div> 
	<br/>
		<div>
		<h6 id="videos-indi-title" style="text-align: center;background: white;color: black;padding: 10px 0px;
			box-shadow: 0px 0px 2px 2px rgb(0 0 0 / 20%);">VIDEOS <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
		<div class="media-div" id="videos-indi-div"  style="display:none;">
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;margin: 0%;">
			<img src="images-main/0.png" style="">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<video style="width:100%;">
			  <source src="images-main/videos/1.mp4" type="video/mp4">
			</video>
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<video style="width:100%;">
			  <source src="images-main/videos/1.mp4" type="video/mp4">
			</video>
	   	  </div>
	   </div>
	   </div>
	<br/>
	   <div>
	   <h6 id="backgrounds-indi-title" style="text-align: center;background: white;color: black;padding: 10px 0px;
			box-shadow: 0px 0px 2px 2px rgb(0 0 0 / 20%);">BACKGROUNDS <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
		<div class="media-div" id="backgrounds-indi-div"  style="display:none;">
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/0.png" style="">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/backgrounds/1.jpg">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/backgrounds/2.jpg">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/backgrounds/3.jpg">
	   	  </div>
	   </div>
	   </div>
	   
	<br/>
	   <div>
	   <h6 id="music-indi-title" style="text-align: center;background: white;color: black;padding: 10px 0px;
			box-shadow: 0px 0px 2px 2px rgb(0 0 0 / 20%);">AUDIO & BGM <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
		<div class="media-div" id="music-indi-div"  style="display:none;">
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/0.png" style="">
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/1.png">
			<p style="position: absolute;margin-top: -13%;margin-left: 10%;width: 90px;color: white;">Temp_BGM</p>
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/1.png">
			<p style="position: absolute;margin-top: -13%;margin-left: 10%;width: 90px;color: white;">Levis_stras..</p>
	   	  </div>
		  <div style="width: 32%;display: inline-block;padding: 0px 0px 5px 0px;">
			<img src="images-main/1.png">
			<p style="position: absolute;margin-top: -13%;margin-left: 10%;width: 90px;color: white;">TTS_Output</p>
	   	  </div>
	   </div>
	   </div>
	   
	   
	</div>
</script>
<script type="text/template" id="msc-layer-placeholder-template">
    <div class="card-body p-2">
	   <div class="row">
		  <div class="col-2 col-sm-2 col-md-1 placeholder-icon"> <i class="icon-resize rotate-45"></i> </div>
		  <div class="col-6 col-sm-6 col-md-7 card-text">
			 <div class="ellipsis"> <%- placeholderText %> </div>
		  </div>
		  <div class="col-3 col-sm-3 col-md-3 text-xs-right msc-layer-buttons-container">
			 <div class="msc-layer-buttons">  <button type="button" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer"> <i class="icon-cancel3"></i> </button> <button type="button" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide"> <% if( isVisible ){ %> <i class="icon-eye2"></i> <% } else { %> <i class="icon-eye-slash"></i> <% } %> </button> </div>
		  </div>
	   </div>
	</div>
</script>

<script type="text/template" id="msc-options-slide-template">
    <div class="msc-right-panel-b shadow-20" style="display:none;">
	   <div class="inner">
		  <div id="msc-options-wrapper">
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-slide-color">Color</label> </div>
				<div class="col-md-8"> <input type="text" class="form-control form-control-sm input-color option-control" name="color" data-validate="color-rgb" id="options-slide-color"> </div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-image">Image</label> </div>
				<div class="col-md-8"> <button type="button" class="btn btn-secondary btn-sm btn-block button-upload" id="options-layer-image"> <i class="icon-picture"></i> Upload </button> <input type="file" name="image" accept="image/gif,image/jpeg,image/png" style="display:none;"> </div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-slide-transition-in">Animation - in</label> </div>
				<div class="col-md-8">
				   <select class="form-control form-control-sm option-control" name="transitionIn" id="options-slide-transition-in">
					  <option value="">No animation</option>
					  <option value="rotateSlideIn">rotateSlideIn</option>
					  <option value="rotateSidesIn">rotateSidesIn</option>
					  <option value="rotateCarouselBottomIn">rotateCarouselBottomIn</option>
					  <option value="rotateCarouselTopIn">rotateCarouselTopIn</option>
					  <option value="rotateCarouselRightIn">rotateCarouselRightIn</option>
					  <option value="rotateCarouselLeftIn">rotateCarouselLeftIn</option>
					  <option value="rotateCubeBottomIn">rotateCubeBottomIn</option>
					  <option value="rotateCubeTopIn">rotateCubeTopIn</option>
					  <option value="rotateCubeRightIn">rotateCubeRightIn</option>
					  <option value="rotateCubeLeftIn">rotateCubeLeftIn</option>
					  <option value="rotateRoomBottomIn">rotateRoomBottomIn</option>
					  <option value="rotateRoomTopIn">rotateRoomTopIn</option>
					  <option value="rotateRoomRightIn">rotateRoomRightIn</option>
					  <option value="rotateRoomLeftIn">rotateRoomLeftIn</option>
					  <option value="rotateUnfoldBottom">rotateUnfoldBottom</option>
					  <option value="rotateUnfoldTop">rotateUnfoldTop</option>
					  <option value="rotateUnfoldRight">rotateUnfoldRight</option>
					  <option value="rotateUnfoldLeft">rotateUnfoldLeft</option>
					  <option value="moveFromTopFade">moveFromTopFade</option>
					  <option value="moveFromLeftFade">moveFromLeftFade</option>
					  <option value="moveFromRightFade">moveFromRightFade</option>
					  <option value="moveFromBottomFade">moveFromBottomFade</option>
					  <option value="rotatePullTop">rotatePullTop</option>
					  <option value="rotatePullBottom">rotatePullBottom</option>
					  <option value="rotatePullLeft">rotatePullLeft</option>
					  <option value="rotatePullRight">rotatePullRight</option>
					  <option value="moveFromTop">moveFromTop</option>
					  <option value="moveFromBottom">moveFromBottom</option>
					  <option value="moveFromLeft">moveFromLeft</option>
					  <option value="moveFromRight">moveFromRight</option>
					  <option value="scaleUp">scaleUp</option>
					  <option value="scaleUpDown">scaleUpDown</option>
					  <option value="scaleUpCenter">scaleUpCenter</option>
					  <option value="flipInTop">flipInTop</option>
					  <option value="flipInBottom">flipInBottom</option>
					  <option value="flipInLeft">flipInLeft</option>
					  <option value="flipInRight">flipInRight</option>
					  <option value="rotateInNewspaper">rotateInNewspaper</option>
				   </select>
				</div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-slide-transition-out">Animation - out</label> </div>
				<div class="col-md-8">
				   <select class="form-control form-control-sm option-control" name="transitionOut" id="options-slide-transition-out">
					  <option value="">No animation</option>
					  <option value="rotateSlideOut">rotateSlideOut</option>
					  <option value="rotateSidesOut">rotateSidesOut</option>
					  <option value="rotateCarouselBottomOut">rotateCarouselBottomOut</option>
					  <option value="rotateCarouselTopOut">rotateCarouselTopOut</option>
					  <option value="rotateCarouselRightOut">rotateCarouselRightOut</option>
					  <option value="rotateCarouselLeftOut">rotateCarouselLeftOut</option>
					  <option value="rotateCubeBottomOut">rotateCubeBottomOut</option>
					  <option value="rotateCubeTopOut">rotateCubeTopOut</option>
					  <option value="rotateCubeRightOut">rotateCubeRightOut</option>
					  <option value="rotateCubeLeftOut">rotateCubeLeftOut</option>
					  <option value="rotateRoomBottomOut">rotateRoomBottomOut</option>
					  <option value="rotateRoomTopOut">rotateRoomTopOut</option>
					  <option value="rotateRoomRightOut">rotateRoomRightOut</option>
					  <option value="rotateRoomLeftOut">rotateRoomLeftOut</option>
					  <option value="rotateFoldBottom">rotateFoldBottom</option>
					  <option value="rotateFoldTop">rotateFoldTop</option>
					  <option value="rotateFoldRight">rotateFoldRight</option>
					  <option value="rotateFoldLeft">rotateFoldLeft</option>
					  <option value="moveToBottomFade">moveToBottomFade</option>
					  <option value="moveToTopFade">moveToTopFade</option>
					  <option value="moveToRightFade">moveToRightFade</option>
					  <option value="moveToLeftFade">moveToLeftFade</option>
					  <option value="rotatePushBottom">rotatePushBottom</option>
					  <option value="rotatePushTop">rotatePushTop</option>
					  <option value="rotatePushRight">rotatePushRight</option>
					  <option value="rotatePushLeft">rotatePushLeft</option>
					  <option value="moveToBottom">moveToBottom</option>
					  <option value="moveToTop">moveToTop</option>
					  <option value="moveToRight">moveToRight</option>
					  <option value="moveToLeft">moveToLeft</option>
					  <option value="scaleDown">scaleDown</option>
					  <option value="scaleDownUp">scaleDownUp</option>
					  <option value="flipOutBottom">flipOutBottom</option>
					  <option value="flipOutTop">flipOutTop</option>
					  <option value="flipOutLeft">flipOutLeft</option>
					  <option value="flipOutRight">flipOutRight</option>
					  <option value="fade">fade</option>
					  <option value="rotateOutNewspaper">rotateOutNewspaper</option>
				   </select>
				</div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-slide-delay">Delay</label> </div>
				<div class="col-md-8"> <input type="number" class="form-control form-control-sm option-control" name="timeDelay" value="0" min="0" id="options-slide-delay"> </div>
			 </div>
		  </div>
	   </div>
	</div>
	<div class="button-toggle" style="display:none;"> <button class="btn btn-secondary" type="button"> <i class="icon"></i> </button> </div>
</script>	   
		   
<script type="text/template" id="msc-options-layer-template">
    <div class="card">
	   <div class="card-header">
		  <h4 class="card-title">Layer options</h4>
	   </div>
	   <div class="card-body msc-options-container">
		  <form action="" method="post">
		  
		    <div style="width:48%;display:inline-block;padding-right: 10px;">
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-type"><b>Layer type</b></label> </div>
				<div class="col-md-8 form-group">
				   <select class="form-control option-control" name="type" id="options-layer-type">
					  <option value="text">Text</option>
					  <option value="image">Image</option>
					  <option value="video">Video</option>
					  <option value="icon">Icon</option>
				   </select>
				</div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-effect">Effect and delay</label> </div>
				<div class="col-md-5 form-group">
				   <select class="form-control form-control-sm option-control" name="effect" id="options-layer-effect">
					  <option value="">No effect</option>
					  <option value="bounce">bounce</option>
					  <option value="flash">flash</option>
					  <option value="pulse">pulse</option>
					  <option value="rubberBand">rubberBand</option>
					  <option value="shake">shake</option>
					  <option value="headShake">headShake</option>
					  <option value="swing">swing</option>
					  <option value="tada">tada</option>
					  <option value="wobble">wobble</option>
					  <option value="jello">jello</option>
					  <option value="bounceIn">bounceIn</option>
					  <option value="bounceInDown">bounceInDown</option>
					  <option value="bounceInLeft">bounceInLeft</option>
					  <option value="bounceInRight">bounceInRight</option>
					  <option value="bounceInUp">bounceInUp</option>
					  <option value="fadeIn">fadeIn</option>
					  <option value="fadeInDown">fadeInDown</option>
					  <option value="fadeInDownBig">fadeInDownBig</option>
					  <option value="fadeInLeft">fadeInLeft</option>
					  <option value="fadeInLeftBig">fadeInLeftBig</option>
					  <option value="fadeInRight">fadeInRight</option>
					  <option value="fadeInRightBig">fadeInRightBig</option>
					  <option value="fadeInUp">fadeInUp</option>
					  <option value="fadeInUpBig">fadeInUpBig</option>
					  <option value="flipInX">flipInX</option>
					  <option value="flipInY">flipInY</option>
					  <option value="lightSpeedIn">lightSpeedIn</option>
					  <option value="rotateIn">rotateIn</option>
					  <option value="rotateInDownLeft">rotateInDownLeft</option>
					  <option value="rotateInDownRight">rotateInDownRight</option>
					  <option value="rotateInUpLeft">rotateInUpLeft</option>
					  <option value="rotateInUpRight">rotateInUpRight</option>
					  <option value="hinge">hinge</option>
					  <option value="rollIn">rollIn</option>
					  <option value="zoomIn">zoomIn</option>
					  <option value="zoomInDown">zoomInDown</option>
					  <option value="zoomInLeft">zoomInLeft</option>
					  <option value="zoomInRight">zoomInRight</option>
					  <option value="zoomInUp">zoomInUp</option>
					  <option value="slideInDown">slideInDown</option>
					  <option value="slideInLeft">slideInLeft</option>
					  <option value="slideInRight">slideInRight</option>
					  <option value="slideInUp">slideInUp</option>
				   </select>
				</div>
				<div class="col-md-3"> <input type="number" class="form-control form-control-sm option-control" name="timeDelay" value="0" min="0" step="0.2" id="options-layer-delay"> </div>
			 </div>
			 <% if( type == 'text' ){ %> 
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-text">Text</label> </div>
				<div class="col-md-8"> <textarea class="form-control form-control-sm option-control" name="text" value="" cols="20" rows="3" id="options-layer-text"></textarea> </div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-font">Font and size</label> </div>
				<div class="col-md-5 form-group">
				   <select class="form-control form-control-sm option-control" name="font" id="options-layer-font">
					  <option value="Arial, Helvetica, sans-serif">Arial</option>
					  <option value="'Arial Black', Gadget, sans-serif">Arial Black</option>
					  <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans MS</option>
					  <option value="Impact, Charcoal, sans-serif">Impact</option>
					  <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
					  <option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet MS</option>
					  <option value="Verdana, Geneva, sans-serif">Verdana</option>
					  <option value="Georgia, serif">Georgia</option>
					  <option value="Palatino, serif">Palatino Linotype</option>
					  <option value="'Times New Roman', Times, serif">Times New Roman</option>
					  <option value="'Courier New', Courier, monospace">Courier New</option>
					  <option value="'Lucida Console', Monaco, monospace">Lucida Console</option>
				   </select>
				</div>
				<div class="col-md-3">
				   <select class="form-control form-control-sm option-control" name="fontSize" id="options-layer-fontSize">
					  <option value="16">16</option>
					  <option value="18">18</option>
					  <option value="20">20</option>
					  <option value="22">22</option>
					  <option value="24">24</option>
					  <option value="28">28</option>
					  <option value="32">32</option>
					  <option value="36">36</option>
					  <option value="40">40</option>
					  <option value="46">46</option>
					  <option value="52">52</option>
					  <option value="72">72</option>
					  <option value="80">80</option>
					  <option value="100">100</option>
				   </select>
				</div>
			 </div>
		    </div>
			 
			<div style="width:48%;display:inline-block;border-left: 1px solid gray;padding-left: 10px;">
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-text-style">Text style</label> </div>
				<div class="col-md-8">
				   <div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary btn-sm option-label"> <input type="radio" name="textAlign" value="left" autocomplete="off" /> <i class="icon-align-left"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="radio" name="textAlign" value="center" autocomplete="off" /> <i class="icon-align-center"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="radio" name="textAlign" value="right" autocomplete="off" /> <i class="icon-align-right"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="checkbox" name="bold" value="on" autocomplete="off" /> <i class="icon-bold"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="checkbox" name="underline" value="on" autocomplete="off" /> <i class="icon-underline"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="checkbox" name="italic" value="on" autocomplete="off" /> <i class="icon-italic"></i> </label>
						<label class="btn btn-secondary btn-sm option-label"> <input type="checkbox" name="lineThrough" value="on" autocomplete="off" /> <i class="icon-strikethrough"></i> </label>
					</div>
				</div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-line-height">Line height</label> </div>
				<div class="col-md-8"> <input type="range" class="option-control" name="lineHeight" value="1.2" min="0.5" max="5" step="0.2" id="options-layer-line-height"> </div>
			 </div>
			 <% } %> <% if( _.contains(['icon'], type) ){ %> 
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-icon">Icon</label> </div>
				<div class="col-md-8"> <button type="button" class="btn btn-secondary btn-sm btn-block button-icons-select" id="options-layer-icon"> <i class="icon-list"></i> Choose </button> </div>
			 </div>
			 <% } %> <% if( _.contains(['text', 'icon'], type) ){ %> 
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-padding">Padding</label> </div>
				<div class="col-md-8"> <input type="range" class="option-control" name="padding" value="0" min="0" max="70" step="1" id="options-layer-padding"> </div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-text-color">Text color</label> </div>
				<div class="col-md-8"> <input type="text" class="form-control form-control-sm input-color option-control" name="textColor" data-validate="color-rgb" id="options-layer-text-color"> </div>
			 </div>
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-background">Background color</label> </div>
				<div class="col-md-8"> <input type="text" class="form-control form-control-sm input-color-bg option-control" name="background" data-validate="color-rgb" id="options-layer-background"> </div>
			 </div>
			 <% } %> <% if( _.contains(['image'], type) ){ %> 
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-image">Image</label> </div>
				<div class="col-md-8"> <button type="button" class="btn btn-secondary btn-sm btn-block button-upload" id="options-layer-image"> <i class="icon-picture"></i> Upload </button> <input type="file" name="image" accept="image/gif,image/jpeg,image/png" style="display:none;"> </div>
			 </div>
			 <% } %> 
			 <div class="row form-group">
				<div class="col-md-4"> <label for="options-layer-link"> <% if( _.contains(['video'], type) ){ %> Video URL <% } else { %> Link <% } %> </label> </div>
				<div class="col-md-8"> <input type="text" class="form-control form-control-sm option-control" name="link" data-validate="link" value="" id="options-layer-link"> </div>
			 </div>
			</div>
			 
		  </form>
	   </div>
	</div>
</script>
<script type="text/template" id="msc-save-form-template">
    <form action="" method="post">
	   <div class="row form-group">
		  <div class="col-md-4"> <label for="field-name"> Name </label> </div>
		  <div class="col-md-8"> <input type="text" class="form-control" name="name" value="<%- title %>" id="field-name" required> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-4"> <label for="field-background_color"> Background color </label> </div>
		  <div class="col-md-8"> <input type="text" class="form-control form-control-sm input-color-bg" name="backgroundColor" value="<%- backgroundColor %>" id="field-background_color"> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-8 ml-auto"> <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="arrows" value="1"<% if( showArrows ){ %> checked<% } %>> <span class="custom-control-indicator"></span> <span class="custom-control-description"> Show arrows </span> </label> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-8 ml-auto"> <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="pages" value="1"<% if( showPages ){ %> checked<% } %>> <span class="custom-control-indicator"></span> <span class="custom-control-description"> Pages navigation </span> </label> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-8 ml-auto"> <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="autoPlay" value="1"<% if( autoPlay ){ %> checked<% } %>> <span class="custom-control-indicator"></span> <span class="custom-control-description"> Auto play </span> </label> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-8 ml-auto"> <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="stopAutoPlayMouseOver" value="1"<% if( stopAutoPlayMouseOver ){ %> checked<% } %>> <span class="custom-control-indicator"></span> <span class="custom-control-description"> Stop auto play then mouse over </span> </label> </div>
	   </div>
	   <div class="row form-group">
		  <div class="col-md-8 ml-auto"> <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="effectsFromFirst" value="1"<% if( effectsFromFirst ){ %> checked<% } %>> <span class="custom-control-indicator"></span> <span class="custom-control-description"> Play effects from the first slide </span> </label> </div>
	   </div>
	</form>
</script>
<script type="text/template" id="msc-layer-template">
    <div class="inner"> <%- text %> </div>
</script>
<script type="text/template" id="msc-slider-files-container">
    <table class="table table-bordered table-hover">
	   <colgroup>
		  <col width="15%">
		  <col width="40%">
		  <col width="20%">
		  <col width="20%">
	   </colgroup>
	   <tbody></tbody>
	</table>
</script>
<script type="text/template" id="msc-slider-file-template">
    <td> <small><%- id %></small> </td>
	<td> <% if( isActive ){ %> <i class="icon-checkmark3"></i> <% } %> <span title="<%- size %>, <%- width %>x<%- height %>"> <%- title %> </span> </td>
	<td> <small><%- mtime %></small> </td>
	<td class="text-xs-right"> 
		<a class="btn btn-sm btn-outline-primary button-file-preview" href="/demo/mysliderconstructor2/preview.php?id=<%- id %>" target="_blank" data-toggle="tooltip" title="Preview"> <i class="icon-link"></i> </a> 
		<button type="button" class="btn btn-sm btn-outline-danger button-file-remove" data-toggle="tooltip" title="Delete"> <i class="icon-cancel3"></i> </button> 
	</td>
</script>
<!-- /Templates -->

 
<script>
    var underscore = _.noConflict();
    var app = new App({
        container: '#msc-app',
        baseUrl: '/demo/mysliderconstructor2/',
        controllerUrl: '/demo/mysliderconstructor2/actions/index.php',
        lang: window.msc_lang
    });
    app.start();
</script>
		   
		   
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>		   
<script>
$("#card-title-media").click(function() {
	$(".card-title").css({"background": "#F7F7F7", "color": "black"});
	$("#card-title-media").css({"background": "#5c9ae4", "color": "white"});
	$("#card-body").css("display","none");
	$("#card-body2").css("display","block");
});
$("#card-title-layers").click(function() {
	$(".card-title").css({"background": "#F7F7F7", "color": "black"});
	$("#card-title-layers").css({"background": "#5c9ae4", "color": "white"});
	$("#card-body").css("display","block");
	$("#card-body2").css("display","none");
});
</script>
		   
<script>
$("#images-indi-title").click(function() {
	$(".media-div").slideUp( "slow", function() { });
	$("#images-indi-div").slideDown( "slow", function() { });
});
$("#videos-indi-title").click(function() {
	$(".media-div").slideUp( "slow", function() { });
	$("#videos-indi-div").slideDown( "slow", function() { });
});
$("#backgrounds-indi-title").click(function() {
	$(".media-div").slideUp( "slow", function() { });
	$("#backgrounds-indi-div").slideDown( "slow", function() { });
});
$("#music-indi-title").click(function() {
	$(".media-div").slideUp( "slow", function() { });
	$("#music-indi-div").slideDown( "slow", function() { });
});
	
$(window).scroll(function () {
	if ($(this).scrollTop() > 75) {
		$(".main-header").slideUp( "fast", function() {});
	} else {
		$(".main-header").slideDown( "fast", function() {});
	}
});
</script>

<script>
$('#resolution_selector').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
	
	if(valueSelected == '1920x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1920);
		$("#custom_size_right").val(1080);
	} else if(valueSelected == '1080x1920'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(1920);
	} else if(valueSelected == '1080x720'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(720);
	} else if(valueSelected == '720x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(720);
		$("#custom_size_right").val(1080);
	} else if(valueSelected == '1080x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(1080);
	} else if(valueSelected == 'CUSTOM'){
		$(".custom_size").css("display","inline-block");
	} else {
		$(".custom_size").css("display","inline-block");
	}
    //console.log(valueSelected);
});
</script>
		   
 
<script>
$("#size_ranger").on('input', function () {
    $("#msc-slides-container").css({"zoom": $(this).val() });
});
</script>
		   
		   
		   
		   
		<?php include("../footer.php"); ?>

		</div>
		   
<?php include("../foot.php"); ?>