<?php include("db.php"); ?>

<?php include("css.php"); ?>

<style>
body {
  overscroll-behavior-x: none;
}
</style>

<link rel="stylesheet" type="text/css" href="/css.scss">

<?php 
    $v_m_id = $_SESSION["v_m_id"];
    $scene_id = $_SESSION["scene_id"];
?>

<div class="main_overlay">
    <div class="main_overlay_container">
        <div class="main_overlay_Loading"></div>
    </div>
</div>

<div id="overlay"></div>
<div id="overlay2"></div>

	<body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-20 kingcomposer kc-css-system" style="margin: 0;">
	   <div class="page-wrapper">
	   <!-- Preloader -->
	   <div class="preloader"></div>

    

	   <?php /* include("../header.php"); */ ?>
		   
        <?php 
			$email = $_SESSION['email'];
			$sqluser = "SELECT * FROM users WHERE email = '$email' ";
			$resultuser = $conn->query($sqluser);
			if ($resultuser->num_rows > 0) {   
			while($rowuser = $resultuser->fetch_assoc()) { 
			    $u_id = $rowuser["id"]; 
			} } else { } 
		?>
		   
        <input type="hidden" id="u_id" value="<?= $u_id; ?>" />
        <input type="hidden" id="v_m_id" value="<?= $v_m_id; ?>" />
        <input type="hidden" id="scene_id" value="<?= $scene_id; ?>" />
        
        <input type="hidden" class="current_left" />
        <input type="hidden" class="current_top" />
        <input type="hidden" class="current_width" />
        <input type="hidden" class="current_height" />
		   
		<?php
		    $sql_v_m = "SELECT * FROM video_maker WHERE id = '$v_m_id'";
			$result_v_m = $conn->query($sql_v_m);
			if ($result_v_m->num_rows > 0) {   
			while($row_v_m = $result_v_m->fetch_assoc()) { 
				$v_m_title = $row_v_m["title"];
			} } else { } 
		?>
		<?php
            $sql_scene = "SELECT * FROM video_maker_scene WHERE id = '$scene_id'";
        	$result_scene = $conn->query($sql_scene);
        	if ($result_scene->num_rows > 0) {   
        	while($row_scene = $result_scene->fetch_assoc()) { 
        		$scene_background = $row_scene["background"];
        		$scene_duration = $row_scene["duration"];
        		$animation_drag_area_width = ($scene_duration*197)+77;
        	} } else { } 
        ?>
		   
		   
	    <div id="msc-app" class="app-container" style="margin-top: 0%;">
	    
		  <div style="width: 100%;padding: 0.5% 0% 0.5% 0%;background: linear-gradient(to left, #4caf50 0%, #5c9ae4 100%);z-index:9;">
            <a href="index" class="btn_on_hover" style="font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                <i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp; Home
            </a>
            
            <a class="btn_on_hover file_btn" style="cursor:pointer;font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                File
            </a>
            
            <a class="btn_on_hover resize_btn" style="cursor:pointer;font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                Resize
            </a>
            
            <a class="btn_on_hover save_btn" style="width:100px;cursor:pointer;font-size: 14px;font-weight:500;color: white;padding: 4px 16px 4px 2px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-right: 1%;float: right;border: 1px solid white;">
                <i class="fa fa-check" aria-hidden="true" style="width: 30px; -webkit-text-stroke: 1px white;"></i> Saved
            </a>
            
            
<!-- File Stuff Starts ----------------------------------------->
            <div class="file_div" style="z-index:9;zoom:0.8;display:none;position: absolute;margin-top: 9px;margin-left: 6%;width: 250px;background: white;height: auto;box-shadow:0px 0px 6px 4px rgb(0 0 0 / 20%);border-radius:7px;">
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    New Design
                </div>
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Save
                </div>
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Download
                </div>
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Reset
                </div>
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;">
                    Close
                </div>
            </div>
<!-- File Stuff Ends ----------------------------------------->
            
            
            
<!-- Resize Stuff Starts ----------------------------------------->
            <div class="resize_div" style="z-index:9;zoom:0.8;display:none;position: absolute;margin-top: 9px;margin-left: 6%;width: 400px;background: white;height: auto;padding: 2%;box-shadow:0px 0px 6px 4px rgb(0 0 0 / 20%);border-radius:7px;">
                
                <div style="display:inline-block;width:100%;">
                	<select class="form-control" id="resolution_selector" 
                	style="box-shadow: 0 0 7px rgb(0 0 0 / 10%) inset;font-size: 16px;padding: 7px;width: 100%;border: 1px solid #bfbfbf;border-radius: 5px;color:#818181;">
                		<option value="1920x1080">FULL HD 1920x1080 (16:9)</option>
                		<option value="1080x1920">FULL HD 1080x1920 (9:16)</option>
                		<option value="1080x720">HD 1080x720 (16:9)</option>
                		<option value="720x1080">HD 720x1080 (9:16)</option>
                		<option value="1080x1080">SQUARE 1080x1080 (1:1)</option>
                		<!--<option value="CUSTOM">CUSTOM SIZE</option>-->
                	</select>
                </div>
                <br/>
                <hr/>
                <div class="" style="display:inline-block;margin-top:0%;width:100%;"> 
                    <h6 class="app-container" style="font-weight:500;color:#818181;">Custom Size</h6>
            	    <input id="size_ranger" class="range-style" type="range" step="0.01" min="0.1" max="1" 
            		    style="width: 99%;color:#818181;" />
                </div>
            
                <div class="col-4 no-padding-right custom_size" style="display:none;width:18%;margin-top:6px;" > 
            	    <input class="form-control input-sm" id="custom_size_left" type="number" placeholder="width" name="slider_width" value="" min="150" step="1" style="height: 22px;padding: 5px;font-size: 13px;width: 60px;display: inline-block;"> 
            	    <span style="display: inline-block;font-size: 12px;">px</span>
                </div>
                <div class="col-4 no-padding-right custom_size" style="display:none;margin-top:6px;width:18%;"> 
            	    <input class="form-control input-sm" id="custom_size_right" type="number" placeholder="height" name="slider_height" value="" min="150" step="1" style="height: 22px;padding: 5px;font-size: 13px;width: 60px;display: inline-block;"> 
            	    <span style="display: inline-block;font-size: 12px;">px</span>
                </div>
                  
            </div>
<!-- Resize Stuff Ends ----------------------------------------->
            

          </div>
		  
		  <div class="card-header" style="padding: 0px;"> 
			 <div class="row">
				<div class="col-md-12">
				   <div class="row form-group" style="margin-bottom: 0rem;">
				      <div style="margin-left: 10%;width: 100%;padding: 5px 0;">
				        <div style="display:inline-block;width: 300px;padding: 5px;">
                            <i class="fa-solid fa-pen-to-square" style="display: inline-block;font-size: 18px;color:#5c9be2;"></i>
                            <input type="text" id="v_m_title" value="<?= $v_m_title; ?>" style="color:black;background:transparent;border:none;font-size: 16px;margin-left: 1%;width: 200px;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,sans-serif;">
    				    </div>
    				      <div style="display:inline-block;float:right;margin-right:5%;"> 
    					    <button type="button" class="btn btn-outline-success button-play-slide slide_preview_btn" data-toggle="tooltip" title="Play slide animation" style="height: auto;padding: 2px 4px;font-size: 12px;"> 
    						    <i class="fas fa-play-circle" style="font-size: 18px;color: red;" aria-hidden="true"></i>
    					    </button>
    					    <span class="divider-vert"></span> 
    					    <button type="button" class="btn btn-outline-primary button-add-slide" data-toggle="tooltip" title="New slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-plus3"></i> </button>
    					    <button type="button" class="btn btn-outline-primary button-copy-slide" data-toggle="tooltip" title="Copy slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-copy"></i> </button> 
    					    <button type="button" class="btn btn-outline-danger button-remove-slide" data-toggle="tooltip" title="Delete slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-cancel3"></i> </button> 
    					 </div>
    				</div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
		  
		  <div>
		  
			  <?php include("left_menu.php"); ?> 
			  
			  <div id="msc-layer-placeholder-wrapper" class="left_bar_menu_div"  style="width: 20%; vertical-align: top;position:absolute; display:none; margin-left: -0.5%; height: 87%;box-shadow: rgb(0 0 0 / 20%) 3px 0px 5px 1px;margin-top: -50px;">
			    <?php include("left_menu_detail.php"); ?>
			  </div>
				

				<div class="app-container-inner" id="work_area" style="width: 73%;display: inline-block;height: 570px;padding-top: 0;margin-left: 1%;zoom:0.9;">
				   <div class="card mb-3" id="msc-container">
					  
					  <div class="card-body p-0">
						 <div class="msc-slides-wrapper" style="height: 475px;overflow-y:scroll;background:#f7f7f7;">
							<div class="msc-slides-container" id="msc-slides-container" style="min-width: 700px;padding:50px;zoom: 0.40;">
							   <div class="inner et-wrapper" id="work_area_div" style="width: 1920px; height: 1080px;background:white;">
								  <div class="msc-slide et-page et-page-current" id="work_area_div_sub" style="background:<?= $scene_background; ?>;">
								      
        							<?php
                            		    $sql_work_layers = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id'";
                            			$result_work_layers = $conn->query($sql_work_layers);
                            			if ($result_work_layers->num_rows > 0) {   
                            			while($row_work_layers = $result_work_layers->fetch_assoc()) { 
                            			    $id_work_layers = $row_work_layers["id"];
                            			    $title_work_layers = $row_work_layers["title"];
                            			    $layer_id_work_layers = $row_work_layers["layer_id"];
                            			    $layer_count_work_layers = $row_work_layers["layer_count"];
                            			    $layer_work_layers = $row_work_layers["layer"];
                            			    $content_work_layers = $row_work_layers["content"];
                            		
                                    		 if($layer_work_layers == 'image'){
                                    		    
                                    		    $sql_work_layers_image = "SELECT * FROM video_maker_images WHERE id = '$layer_id_work_layers'";
                                    			$result_work_layers_image = $conn->query($sql_work_layers_image);
                                    			if ($result_work_layers_image->num_rows > 0) {   
                                    			while($row_work_layers_image = $result_work_layers_image->fetch_assoc()) { 
                                    			    $image_work_layers_image = $row_work_layers_image["title"];
                                    			} } else { } 
                                    			
                                    			$style_work_layers_image_styles_main = '';
                                    			$sql_work_layers_image_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='parent'";
                                    			$result_work_layers_image_styles_main = $conn->query($sql_work_layers_image_styles_main);
                                    			if ($result_work_layers_image_styles_main->num_rows > 0) {   
                                    			while($row_work_layers_image_styles_main = $result_work_layers_image_styles_main->fetch_assoc()) { 
                                    			    $style_title_work_layers_image_styles_main = $row_work_layers_image_styles_main["style"];
                                    			    $style_value_work_layers_image_styles_main = $row_work_layers_image_styles_main["value"];
                                    			    $style_work_layers_image_styles_main = $style_work_layers_image_styles_main.$style_title_work_layers_image_styles_main.':'.$style_value_work_layers_image_styles_main.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_image_styles_child = '';
                                    			$sql_work_layers_image_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='child'";
                                    			$result_work_layers_image_styles_child = $conn->query($sql_work_layers_image_styles_child);
                                    			if ($result_work_layers_image_styles_child->num_rows > 0) {   
                                    			while($row_work_layers_image_styles_child = $result_work_layers_image_styles_child->fetch_assoc()) { 
                                    			    $style_title_work_layers_image_styles_child = $row_work_layers_image_styles_child["style"];
                                    			    $style_value_work_layers_image_styles_child = $row_work_layers_image_styles_child["value"];
                                    			    $style_work_layers_image_styles_child = $style_work_layers_image_styles_child.$style_title_work_layers_image_styles_child.':'.$style_value_work_layers_image_styles_child.';';
                                    			} } else { } 
                                    			
                                    		    $layer_data = '<div class="image ui-draggable ui-draggable-handle draggable2 ui-resizable" layer-type-id="'.$layer_id_work_layers.'" style="'.$style_work_layers_image_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="image" data-status="idle">
                                                                   <img style="width: 99%; height: 99%; object-fit: fill;'.$style_work_layers_image_styles_child.'" src="images-main/images/'.$image_work_layers_image.'" >
                                                                   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
                                                                </div>';
                                                                
                                    		 } elseif($layer_work_layers == 'video'){
                                    		    
                                    		    $sql_work_layers_video = "SELECT * FROM video_maker_videos WHERE id = '$layer_id_work_layers'";
                                    			$result_work_layers_video = $conn->query($sql_work_layers_video);
                                    			if ($result_work_layers_video->num_rows > 0) {   
                                    			while($row_work_layers_video = $result_work_layers_video->fetch_assoc()) { 
                                    			    $image_work_layers_video = $row_work_layers_video["title"];
                                    			} } else { } 
                                    			
                                    			$style_work_layers_video_styles_main = '';
                                    			$sql_work_layers_video_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='parent'";
                                    			$result_work_layers_video_styles_main = $conn->query($sql_work_layers_video_styles_main);
                                    			if ($result_work_layers_video_styles_main->num_rows > 0) {   
                                    			while($row_work_layers_video_styles_main = $result_work_layers_video_styles_main->fetch_assoc()) { 
                                    			    $style_title_work_layers_video_styles_main = $row_work_layers_video_styles_main["style"];
                                    			    $style_value_work_layers_video_styles_main = $row_work_layers_video_styles_main["value"];
                                    			    $style_work_layers_video_styles_main = $style_work_layers_video_styles_main.$style_title_work_layers_video_styles_main.':'.$style_value_work_layers_video_styles_main.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_video_styles_child = '';
                                    			$sql_work_layers_video_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='child'";
                                    			$result_work_layers_video_styles_child = $conn->query($sql_work_layers_video_styles_child);
                                    			if ($result_work_layers_video_styles_child->num_rows > 0) {   
                                    			while($row_work_layers_video_styles_child = $result_work_layers_video_styles_child->fetch_assoc()) { 
                                    			    $style_title_work_layers_video_styles_child = $row_work_layers_video_styles_child["style"];
                                    			    $style_value_work_layers_video_styles_child = $row_work_layers_video_styles_child["value"];
                                    			    $style_work_layers_video_styles_child = $style_work_layers_video_styles_child.$style_title_work_layers_video_styles_child.':'.$style_value_work_layers_video_styles_child.';';
                                    			} } else { } 
                                    			
                                    		    $layer_data = '<div class="video ui-draggable ui-draggable-handle draggable2 ui-resizable" layer-type-id="'.$layer_id_work_layers.'" style="'.$style_work_layers_video_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="video" data-status="idle">
                                                                   <video style="width: 99%; object-fit: fill; height: 99%;'.$style_work_layers_video_styles_child.'" controls="controls" oncontextmenu="false" disablepictureinpicture="true" controlslist="nodownload" disableplaybackspeed="true">
                                                					  <source src="images-main/videos/'.$image_work_layers_video.'" type="video/mp4">
                                                				   </video>
                                                                   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
                                                                </div>';
                                                                
                                    		} elseif($layer_work_layers == 'background'){
                                    		    
                                    		    $sql_work_layers_background = "SELECT * FROM video_maker_backgrounds WHERE id = '$layer_id_work_layers'";
                                    			$result_work_layers_background = $conn->query($sql_work_layers_background);
                                    			if ($result_work_layers_background->num_rows > 0) {   
                                    			while($row_work_layers_background = $result_work_layers_background->fetch_assoc()) { 
                                    			    $image_work_layers_background = $row_work_layers_background["title"];
                                    			} } else { }
                                    			
                                    			$style_work_layers_background_styles_main = '';
                                    			$sql_work_layers_background_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='parent'";
                                    			$result_work_layers_background_styles_main = $conn->query($sql_work_layers_background_styles_main);
                                    			if ($result_work_layers_background_styles_main->num_rows > 0) {   
                                    			while($row_work_layers_background_styles_main = $result_work_layers_background_styles_main->fetch_assoc()) { 
                                    			    $style_title_work_layers_background_styles_main = $row_work_layers_background_styles_main["style"];
                                    			    $style_value_work_layers_background_styles_main = $row_work_layers_background_styles_main["value"];
                                    			    $style_work_layers_background_styles_main = $style_work_layers_background_styles_main.$style_title_work_layers_background_styles_main.':'.$style_value_work_layers_background_styles_main.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_background_styles_child = '';
                                    			$sql_work_layers_background_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='child'";
                                    			$result_work_layers_background_styles_child = $conn->query($sql_work_layers_background_styles_child);
                                    			if ($result_work_layers_background_styles_child->num_rows > 0) {   
                                    			while($row_work_layers_background_styles_child = $result_work_layers_background_styles_child->fetch_assoc()) { 
                                    			    $style_title_work_layers_background_styles_child = $row_work_layers_background_styles_child["style"];
                                    			    $style_value_work_layers_background_styles_child = $row_work_layers_background_styles_child["value"];
                                    			    $style_work_layers_background_styles_child = $style_work_layers_background_styles_child.$style_title_work_layers_background_styles_child.':'.$style_value_work_layers_background_styles_child.';';
                                    			} } else { } 
                                    			
                                    		    $layer_data = '<div class="background ui-draggable ui-draggable-handle draggable2 ui-resizable ui-resizable-disabled" layer-type-id="'.$layer_id_work_background.'" style="'.$style_work_layers_background_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="background" data-status="idle">
                                                                   <img style="width: 100%; height: 100%; object-fit: cover;'.$style_work_layers_background_styles_child.'" src="images-main/backgrounds/'.$image_work_layers_background.'">
                                                                   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
                                                                </div>';
                                                                
                                                                
                                    		} elseif($layer_work_layers == 'font'){
                                    		    
                                    		    $sql_work_layers_font = "SELECT * FROM video_maker_fonts WHERE id = '$layer_id_work_layers'";
                                    			$result_work_layers_font = $conn->query($sql_work_layers_font);
                                    			if ($result_work_layers_font->num_rows > 0) {   
                                    			while($row_work_layers_font = $result_work_layers_font->fetch_assoc()) { 
                                    			    $font_work_layers_font = $row_work_layers_font["font"];
                                    			    $name_work_layers_font = $row_work_layers_font["name"];
                                    			} } else { } 
                                    			
                                    			$style_work_layers_font_styles_main = '';
                                    			$sql_work_layers_font_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='parent'";
                                    			$result_work_layers_font_styles_main = $conn->query($sql_work_layers_font_styles_main);
                                    			if ($result_work_layers_font_styles_main->num_rows > 0) {   
                                    			while($row_work_layers_font_styles_main = $result_work_layers_font_styles_main->fetch_assoc()) { 
                                    			    $style_title_work_layers_font_styles_main = $row_work_layers_font_styles_main["style"];
                                    			    $style_value_work_layers_font_styles_main = $row_work_layers_font_styles_main["value"];
                                    			    $style_work_layers_font_styles_main = $style_work_layers_font_styles_main.$style_title_work_layers_font_styles_main.':'.$style_value_work_layers_font_styles_main.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_font_styles_child = '';
                                    			$sql_work_layers_font_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='child'";
                                    			$result_work_layers_font_styles_child = $conn->query($sql_work_layers_font_styles_child);
                                    			if ($result_work_layers_font_styles_child->num_rows > 0) {   
                                    			while($row_work_layers_font_styles_child = $result_work_layers_font_styles_child->fetch_assoc()) { 
                                    			    $style_title_work_layers_font_styles_child = $row_work_layers_font_styles_child["style"];
                                    			    $style_value_work_layers_font_styles_child = $row_work_layers_font_styles_child["value"];
                                    			    $style_work_layers_font_styles_child = $style_work_layers_font_styles_child.$style_title_work_layers_font_styles_child.':'.$style_value_work_layers_font_styles_child.';';
                                    			} } else { } 
                                    			
                                    		    $layer_data = '<div class="font ui-draggable ui-draggable-handle draggable2 ui-resizable" layer-type-id="'.$layer_id_work_layers.'" font-id="'.$name_work_layers_font.'" style="'.$style_work_layers_font_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="font" data-status="selected">
                                                                   <i class="fa fa-arrows font-arrow-mover" aria-hidden="true" style="position: absolute; top: -35%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; display: block;"></i>
                                                                   <textarea type="text" class="font-input" style="font-family:'.$name_work_layers_font.';font-size:100px;text-align:center;width:100%;height:100%;overflow:hidden;background: transparent;resize: none;'.$style_work_layers_font_styles_child.'" spellcheck="false">'.$content_work_layers.'</textarea>
                                                                   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
                                                                   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
                                                                </div>';
                                                                
                                                                
                                    		} elseif($layer_work_layers == 'shape'){
                                    		    
                                    		    $sql_work_layers_shape = "SELECT * FROM video_maker_shapes WHERE id = '$layer_id_work_layers'";
                                    			$result_work_layers_shape = $conn->query($sql_work_layers_shape);
                                    			if ($result_work_layers_shape->num_rows > 0) {   
                                    			while($row_work_layers_shape = $result_work_layers_shape->fetch_assoc()) { 
                                    			    $title_work_layers_shape = $row_work_layers_shape["title"];
                                    			    $shape_work_layers_shape = $row_work_layers_shape["shape"];
                                    			    $style_work_layers_shape = $row_work_layers_shape["style"];
                                    			} } else { } 
                                    			
                                    			$style_work_layers_shape_styles_main = '';
                                    			$sql_work_layers_shape_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='parent'";
                                    			$result_work_layers_shape_styles_main = $conn->query($sql_work_layers_shape_styles_main);
                                    			if ($result_work_layers_shape_styles_main->num_rows > 0) {   
                                    			while($row_work_layers_shape_styles_main = $result_work_layers_shape_styles_main->fetch_assoc()) { 
                                    			    $style_title_work_layers_shape_styles_main = $row_work_layers_shape_styles_main["style"];
                                    			    $style_value_work_layers_shape_styles_main = $row_work_layers_shape_styles_main["value"];
                                    			    $style_work_layers_shape_styles_main = $style_work_layers_shape_styles_main.$style_title_work_layers_shape_styles_main.':'.$style_value_work_layers_shape_styles_main.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_shape_styles_child = '';
                                    			$sql_work_layers_shape_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='child'";
                                    			$result_work_layers_shape_styles_child = $conn->query($sql_work_layers_shape_styles_child);
                                    			if ($result_work_layers_shape_styles_child->num_rows > 0) {   
                                    			while($row_work_layers_shape_styles_child = $result_work_layers_shape_styles_child->fetch_assoc()) { 
                                    			    $style_title_work_layers_shape_styles_child = $row_work_layers_shape_styles_child["style"];
                                    			    $style_value_work_layers_shape_styles_child = $row_work_layers_shape_styles_child["value"];
                                    			    $style_work_layers_shape_styles_child = $style_work_layers_shape_styles_child.$style_title_work_layers_shape_styles_child.':'.$style_value_work_layers_shape_styles_child.';';
                                    			} } else { } 
                                    			
                                    			$style_work_layers_shape_styles_grandchild = '';
                                    			$sql_work_layers_shape_styles_grandchild = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_work_layers' AND type='grandchild'";
                                    			$result_work_layers_shape_styles_grandchild = $conn->query($sql_work_layers_shape_styles_grandchild);
                                    			if ($result_work_layers_shape_styles_grandchild->num_rows > 0) {   
                                    			while($row_work_layers_shape_styles_grandchild = $result_work_layers_shape_styles_grandchild->fetch_assoc()) { 
                                    			    $style_title_work_layers_shape_styles_grandchild = $row_work_layers_shape_styles_grandchild["style"];
                                    			    $style_value_work_layers_shape_styles_grandchild = $row_work_layers_shape_styles_grandchild["value"];
                                    			    
                                    			 
                                    			     
                                    			    $style_work_layers_shape_styles_grandchild = $style_work_layers_shape_styles_grandchild.$style_title_work_layers_shape_styles_grandchild.'="'.$style_value_work_layers_shape_styles_grandchild.'" ';
                                    			     
                                    			
                                    			    
                                    			} } else { } 
                                    			
                                    			if($title_work_layers_shape == 'Sqaure') {
                                    			    
                                    			    $layer_shape_data = '<rect '.$style_work_layers_shape_styles_grandchild.' />';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Sqaure_Round') {
                                    			    
                                    			    $layer_shape_data = '<rect '.$style_work_layers_shape_styles_grandchild.' />';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Circle') {
                                    			    
                                    			    $layer_shape_data = '<circle '.$style_work_layers_shape_styles_grandchild.' />';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Elipse') {
                                    			    
                                    			    $layer_shape_data = '<ellipse '.$style_work_layers_shape_styles_grandchild.' />';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Line') {
                                    			    
                                    			    $layer_shape_data = '<line '.$style_work_layers_shape_styles_grandchild.' />';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Stroke') {
                                    			    
                                    			    $layer_shape_data = '<polyline points="60 110 65 120 70 115 75 130 80 125 85 140 90 135 95 150 100 145" stroke="black" fill="transparent" stroke-width="5"/>';
                                    			    
                                    			} elseif($title_work_layers_shape == 'Star') {
                                    			    
                                    			    $layer_shape_data = '<polygon points="50 160 55 180 70 180 60 190 65 205 50 195 35 205 40 190 30 180 45 180" stroke="black" fill="transparent" stroke-width="5"/>';
                                    			    
                                    			} else { }
                                    			
                                    		    $layer_data =  '<div class="shape '.$title_work_layers_shape.' ui-draggable ui-draggable-handle draggable2" layer-type-id="'.$layer_id_work_layers.'" style="'.$style_work_layers_shape_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="shape" data-status="selected">
                                                                   <svg version="1.1" class="svg_rect" xmlns="http://www.w3.org/2000/svg" style="'.$style_work_layers_shape_styles_child.'">
                                                                      '.$layer_shape_data.'
                                                                   </svg>
                                                                </div>';
                                                                
                                                                
                                    		} else { }
                            		
                            		
                            		        echo $layer_data;
                            		        
                            	
                            	         } } else { } ?>
								      
								  </div>
							   </div>
							</div>
							<!--<div class="msc-right-panel" id="msc-right-panel"></div>-->
						 </div>
					  </div>
					   
					   
					  <div class="card-footer" id="msc-slide-placeholder-container" style="padding: 0px 25px;min-height: 40px;">
						 <div class="row">
							<div class="col-3 col-sm-3 col-md-5 ">
								<div class="msc-slides-buttons"> 
								</div>
							</div>
							 
							 <span id="slide_timeline_btn" class="app-container btn-outline-primary" style="font-size: 14px;padding: 3px 10px 3px 10px;cursor: pointer;width: auto;border: 1px solid #007bff;border-radius: 7px;margin: 7px 0 7px 0;">Animation Timeline</span>
							 
							<div class="col-6 col-sm-6 col-md-4 msc-slides-buttons-container">
							   <div class="msc-slides-buttons"> 
								   <span class="divider-vert"></span> 
								   <button id="slide_time_minus" type="button" class="btn btn-outline-danger button-remove-slide" data-toggle="tooltip" title="Remove Time" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="fa fa-minus" aria-hidden="true"></i> </button> 
								   <span id="slide_time" style="border: 1px solid gray;padding: 0px 7px 3px 7px;font-size: 13px;border-radius: 3px;"><?= $scene_duration; ?></span>
								   <button id="slide_time_plus" type="button" class="btn btn-outline-primary button-add-slide" data-toggle="tooltip" title="Add Time" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-plus3"></i> </button>
								</div>
							</div>
						 </div>
					  </div>
					   

					   
				   </div>
				</div>
			  
			  

			    <?php include("right_side.php"); ?>
			  
			</div>
			
				<div id="msc-modals"></div>
				
				
		<!-- Animation panel ----->
				
				<div class="row" id="slide_timeline_div" style="width: 90%;zoom: 0.6;display:none;margin-left:8%;position:absolute;height:auto;top:96%;padding-bottom: 50px;overflow-y:scroll;">
					<div class="col-lg-12">
						<div id="msc-options-layer">
							<div class="card" style="" id="draggable_div_inner2">
								<div class="card-header" id="draggable_header2">
									<h4 class="card-title" style="display: inline-block;"></h4>
								</div>
								<div class="card-body msc-options-container" style="padding:0px;overflow-x: scroll;white-space: nowrap;">
								    
								    <div id="timeline_dragger_div" style="height: 100%;margin-left: 11%;display:none;">
								        <span id="timeline_dragger" style="width: 4px;height: 74%;background: #6a6a6a;z-index: 9;position: absolute;cursor:pointer;">
								            <span style="width: 20px;height: 20px;background: #6a6a6a;position: absolute;margin-left: -8px;"></span>
								            <span style="width: 14px;height: 14px;background: #6a6a6a;position: absolute;margin-left: -5px;margin-top: 13px;transform: rotate(45deg);"></span>
								        </span>
								    </div>

									<div class="timeline_secs" style="height:20px;width:100%;margin-top: -8px;margin-bottom: 6px;">
										<p class="animation_secs">| <span class="animation_secs_span">&nbsp;</span></p>
									<?php for($scene_lenght = 0; $scene_lenght<=$scene_duration; $scene_lenght++) { ?>
									     <p class="animation_secs">| <span class="animation_secs_span"><?= $scene_lenght; ?> Sec</span></p>
									<?php } ?>
									</div>

                                    <div class="animation_drag_area" style="width:<?= $animation_drag_area_width; ?>px;">
                                        
                                    <?php
                                        $sql_draggable_layers = "SELECT * FROM video_maker_draggable_layers WHERE p_id = '$v_m_id' ORDER BY id DESC";
                                    	$result_draggable_layers = $conn->query($sql_draggable_layers);
                                    	if ($result_draggable_layers->num_rows > 0) {   
                                    	while($row_draggable_layers = $result_draggable_layers->fetch_assoc()) { 
                                    	    $draggable_layers_id = $row_draggable_layers["id"];
                                    	    $draggable_main_layers_id = $row_draggable_layers["main_layer_id"];
                                    	    $draggable_layers_title = $row_draggable_layers["title"];
                                    	    $draggable_layers_layer_count = $row_draggable_layers["layer_count"];
                                    	    
                                    	    $sql_draggable_layers_animation = "SELECT * FROM video_maker_layer_animations WHERE layer_id = '$draggable_main_layers_id'";
                                        	$result_draggable_layers_animation = $conn->query($sql_draggable_layers_animation);
                                        	if ($result_draggable_layers_animation->num_rows > 0) {   
                                        	while($row_draggable_layers_animation = $result_draggable_layers_animation->fetch_assoc()) { 
                                        	    $draggable_layers_animation_left = $row_draggable_layers_animation["margin_left"];
                                        	    $draggable_layers_animation_width = $row_draggable_layers_animation["width"];
                                        	    
                                        	
                                    ?>
                                        <div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_<?= $draggable_layers_layer_count; ?>">
        									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
        										<span data-draggableid="<?= $draggable_layers_id; ?>" data-mainlayerid="<?= $draggable_main_layers_id; ?>" data-mainlayercount="<?= $draggable_layers_layer_count; ?>" style="font-weight: 600; font-size: 17px;"><?= $draggable_layers_title; ?> <span id="layer_title" style="font-weight:normal;"> </span></span>
        									</div>
        									<div style="height: 34px;display:inline-block;width: 100%;" class="draggable_layer_containment_indi_common" id="layer_dragger_div_<?= $draggable_layers_layer_count; ?>">
        										<div id="layer_dragger_<?= $draggable_layers_layer_count; ?>" data-mainlayeriddraggable="<?= $draggable_main_layers_id; ?>" data-animationdraggablelayercount="<?= $draggable_layers_layer_count; ?>" class="draggable_layer_indi_common" style="background: #d5e8ff;min-height:40px;height: 40px;width:<?= $draggable_layers_animation_width; ?>px;left:<?= $draggable_layers_animation_left; ?>;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
        										</div>
        									</div>
    									</div>
                                    <?php
                                           } } else { } 
                                        } } else { } 
                                    ?>
                                        
                                    <?php
                        			    $sql_layers_legendary_bgm = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND layer = 'BGM' LIMIT 1";
                        				$result_layers_legendary_bgm = $conn->query($sql_layers_legendary_bgm);
                        				if ($result_layers_legendary_bgm->num_rows > 0) {   
                        				while($row_layers_legendary_bgm = $result_layers_legendary_bgm->fetch_assoc()) { 
                        					$id_layers_legendary_bgm = $row_layers_legendary_bgm["id"];
                        					$title_layers_legendary_bgm = $row_layers_legendary_bgm["title"];
                        					$layer_id_layers_legendary_bgm = $row_layers_legendary_bgm["layer_id"];
                        					$layer_count_layers_legendary_bgm = $row_layers_legendary_bgm["layer_count"];
                        					$layer_layers_legendary_bgm = $row_layers_legendary_bgm["layer"];
                        					$status_layers_legendary_bgm = true;
                        					
                        					$sql_layers_legendary_bgm_draggable = "SELECT * FROM video_maker_draggable_layers WHERE main_layer_id = '$id_layers_legendary_bgm'";
                            				$result_layers_legendary_bgm_draggable = $conn->query($sql_layers_legendary_bgm_draggable);
                            				if ($result_layers_legendary_bgm_draggable->num_rows > 0) {   
                            				while($row_layers_legendary_bgm_draggable = $result_layers_legendary_bgm_draggable->fetch_assoc()) { 
                            				    $layer_length_legendary_bgm = $row_layers_legendary_bgm_draggable["layer_length"];
                            				} } else { } 
                        					
                        				} } else { } 
                        			?>
                                        
                                        <div class="animation_drag_area_indi_layer" id="bgm_work_area">
        									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
        										<span style="font-weight: 600; font-size: 17px;">BGM  <span id="bgm_audio_title" style="font-weight:normal;"> </span></span>
        										<span id="bgm_audio_choose" style="<?php if($status_layers_legendary_bgm) { ?> display:none; <?php } else { } ?>font-size: 20px;font-weight: normal;margin-left: 160px;">Drag & Drop an Audio file</span>
        										<!--<span id="bgm_audio_btn_remove" style="padding: 3px; border-radius: 4px;float: right;cursor:pointer;display:none;">-->
        										<!--    <i class="fa fa-trash" aria-hidden="true" style="font-size: 24px;"></i>-->
        										<!--</span>-->
        									</div>
        									<div style="height: 40px;display:inline-block;width: auto;<?php if($status_layers_legendary_bgm) { ?> display:inline-block; <?php } else { ?> display:none; <?php } ?>" id="bgm_audio_div">
        										<div id="bgm_audio" style="width:<?= $layer_length_legendary_bgm; ?>px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
        											<img src="images-main/audio/0.jpg" alt="" style="height: 36px;object-fit:fill;width:100%;cursor:pointer;" />
        										</div>
        									</div>
    									</div>
                                <!-- 
                                        <div class="animation_drag_area_indi_layer" id="voice_work_area">
        									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
        										<span  style="font-weight: 600; font-size: 17px;">Voice</span>
        										<span id="speech_audio_choose" style="font-size: 20px;font-weight: normal;margin-left: 155px;">Drag & Drop an Audio file</span>
        										<span id="speech_audio_btn_remove" style="padding: 3px; border-radius: 4px;float: right;cursor:pointer;display:none;">
        										    <i class="fa fa-trash" aria-hidden="true" style="font-size: 24px;"></i>
        										</span>
        									</div>
        									<div style="height: 40px;display:inline-block;width: auto;display:none;" id="speech_audio_div">
        										<div id="speech_audio" style="width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
        											<img src="images-main/audio/0.jpg" alt=""  style="height: 36px;object-fit:fill;width:100%;cursor:pointer;" />
        										</div>
        									</div>
                                        </div>
                                -->

    									
                                    </div>

								</div>
							</div>
						</div>
					</div>
				</div>

	<!-- Animation panel ENds ----->
		  
		    </div>
		   
		   
		  <div style="width: 100%; height: auto; background: white; position: fixed; bottom: 0%; border-radius: 0px 5px 5px 0px; 
					  box-shadow: 2px 0px 2px 1px rgb(0 0 0 / 20%);">
			<div id="bottom_player_btn" style="width: 79px; background: white; border-radius: 5px 5px 5px 0px; 
						margin-top: -6px; height: 20px; box-shadow: 0px -2px 2px 1px rgb(0 0 0 / 20%); margin-left: 45%;cursor:pointer;">
				<i class="fa fa-chevron-up" id="screens_slider_btn" aria-hidden="true" 
				   style="color: black; font-size: 22px; cursor: pointer; margin-left: 43%;"></i>
			</div>
			  
			<div id="bottom_player_div" style="height:70px;display:block;">
				<div style="width: 6%;display: inline-block;vertical-align: text-bottom;padding-top: 7px;">
					<img src="../images/others/vdofy-mini.png" style="width: 75px;padding: 0px 10px 10px 10px;">
				</div>
				<div style="width: 4%; display: inline-block; text-align: left;height: 80px; vertical-align: middle;">
					<i class="fa fa-plus-square-o" aria-hidden="true" style="font-size: 30px;"></i>
				</div>
				<div style="width: 87%; display: inline-block;">
					
					<div style="width: 8%;display: inline-block;margin-right: 1%;">
						<div style="height: 47px; background: #f7f7f7; border: 1px solid #dddd;"></div>
						<p style="font-size: 10px; font-weight: normal; color: #a0a0a0; text-align: center;">screen #1</p>
					</div>
					
					<div style="width: 8%;display: inline-block;margin-right: 1%;">
						<div style="height: 47px; background: #f7f7f7; border: 1px solid #dddd;"></div>
						<p style="font-size: 10px; font-weight: normal; color: #a0a0a0; text-align: center;">screen #1</p>
					</div>
					
					<div style="width: 8%;display: inline-block;margin-right: 1%;">
						<div style="height: 47px; background: #f7f7f7; border: 1px solid #dddd;"></div>
						<p style="font-size: 10px; font-weight: normal; color: #a0a0a0; text-align: center;">screen #1</p>
					</div>
					
				</div>
		  </div>
			  
		</div>




<?php include("popups.php"); ?>


</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.0/cropper.js'></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c08261462acba8afd37dae25-|49" defer="">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="script.js"></script>
