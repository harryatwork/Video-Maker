<?php
    include("../db.php"); 
    $p_id = $_POST["project_id"];
	$scene_id = $_POST["scene_id"];

    $main_array_start = '';
    $main_array_end = '';
    $main_array_animation = '';
    $main_array_speed = '';
	

    $sql_slide_preview_work_layers = "SELECT * FROM video_maker_layers WHERE p_id = '$p_id' AND scene_id = '$scene_id'";
	$result_slide_preview_work_layers = $conn->query($sql_slide_preview_work_layers);
	if ($result_slide_preview_work_layers->num_rows > 0) {   
	while($row_slide_preview_work_layers = $result_slide_preview_work_layers->fetch_assoc()) { 
	    $id_slide_preview_work_layers = $row_slide_preview_work_layers["id"];
	    $title_slide_preview_work_layers = $row_slide_preview_work_layers["title"];
	    $layer_id_slide_preview_work_layers = $row_slide_preview_work_layers["layer_id"];
	    $layer_count_slide_preview_work_layers = $row_slide_preview_work_layers["layer_count"];
	    $layer_slide_preview_work_layers = $row_slide_preview_work_layers["layer"];
	    $content_slide_preview_work_layers = $row_slide_preview_work_layers["content"];

		$child_array_start;
	    $child_array_end;
	    $child_array_animation;
        $child_array_speed;

        $sql_slide_preview_work_layers_animation = "SELECT * FROM video_maker_layer_animations WHERE layer_id = '$id_slide_preview_work_layers'";
    	$result_slide_preview_work_layers_animation = $conn->query($sql_slide_preview_work_layers_animation);
    	if ($result_slide_preview_work_layers_animation->num_rows > 0) {   
    	while($row_slide_preview_work_layers_animation = $result_slide_preview_work_layers_animation->fetch_assoc()) { 
    	    $id_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["id"];
    	    $start_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["start"];
    	    $end_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["end"];
    	    $speed_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["speed"];
    	    $animation_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["animation"];
    	    $animation_reverse_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["reverse"];
    	    
    	    $child_array_start = '['.$id_slide_preview_work_layers.', '.$start_slide_preview_work_layers_animation.'], ';
    	    $main_array_start = $main_array_start.$child_array_start;
    	    
    	    $child_array_end = '['.$id_slide_preview_work_layers.', '.$end_slide_preview_work_layers_animation.'], ';
    	    $main_array_end = $main_array_end.$child_array_end;
    	    
    	    $child_array_animation = '['.$id_slide_preview_work_layers.', '.$animation_slide_preview_work_layers_animation.'], ';
    	    $main_array_animation = $main_array_animation.$child_array_animation;
    	    
    	    $child_array_speed = '['.$id_slide_preview_work_layers.', '.$speed_slide_preview_work_layers_animation.'], ';
    	    $main_array_speed = $main_array_speed.$child_array_speed;


		 if($layer_slide_preview_work_layers == 'image'){
		    
		    $sql_slide_preview_work_layers_image = "SELECT * FROM video_maker_images WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_image = $conn->query($sql_slide_preview_work_layers_image);
			if ($result_slide_preview_work_layers_image->num_rows > 0) {   
			while($row_slide_preview_work_layers_image = $result_slide_preview_work_layers_image->fetch_assoc()) { 
			    $image_slide_preview_work_layers_image = $row_slide_preview_work_layers_image["title"];
			} } else { } 
			
			$style_slide_preview_work_layers_image_styles_main = '';
			$sql_slide_preview_work_layers_image_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='parent'";
			$result_slide_preview_work_layers_image_styles_main = $conn->query($sql_slide_preview_work_layers_image_styles_main);
			if ($result_slide_preview_work_layers_image_styles_main->num_rows > 0) {   
			while($row_slide_preview_work_layers_image_styles_main = $result_slide_preview_work_layers_image_styles_main->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_image_styles_main = $row_slide_preview_work_layers_image_styles_main["style"];
			    $style_value_slide_preview_work_layers_image_styles_main = $row_slide_preview_work_layers_image_styles_main["value"];
			    $style_slide_preview_work_layers_image_styles_main = $style_slide_preview_work_layers_image_styles_main.$style_title_slide_preview_work_layers_image_styles_main.':'.$style_value_slide_preview_work_layers_image_styles_main.';';
			
	            if($style_title_slide_preview_work_layers_image_styles_main == 'top') {
			        $slide_preview_current_top = $style_value_slide_preview_work_layers_image_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_image_styles_main == 'left') {
			        $slide_preview_current_left = $style_value_slide_preview_work_layers_image_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_image_styles_main == 'width') {
			        $slide_preview_current_width = $style_value_slide_preview_work_layers_image_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_image_styles_main == 'height') {
			        $slide_preview_current_height = $style_value_slide_preview_work_layers_image_styles_main;
			    }
	            
			} } else { } 
			
			$style_slide_preview_work_layers_image_styles_child = '';
			$sql_slide_preview_work_layers_image_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='child'";
			$result_slide_preview_work_layers_image_styles_child = $conn->query($sql_slide_preview_work_layers_image_styles_child);
			if ($result_slide_preview_work_layers_image_styles_child->num_rows > 0) {   
			while($row_slide_preview_work_layers_image_styles_child = $result_slide_preview_work_layers_image_styles_child->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_image_styles_child = $row_slide_preview_work_layers_image_styles_child["style"];
			    $style_value_slide_preview_work_layers_image_styles_child = $row_slide_preview_work_layers_image_styles_child["value"];
			    $style_slide_preview_work_layers_image_styles_child = $style_slide_preview_work_layers_image_styles_child.$style_title_slide_preview_work_layers_image_styles_child.':'.$style_value_slide_preview_work_layers_image_styles_child.';';
			} } else { } 
			
		    $layer_data_slide_preview = '<div class="slide_preview_layer image" layer-type-id="'.$layer_id_slide_preview_work_layers.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" style="'.$style_slide_preview_work_layers_image_styles_main.' z-index: '.$layer_count_slide_preview_work_layers.';" data-layercount="'.$layer_count_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" data-currenttop="'.$slide_preview_current_top.'" data-currentleft="'.$slide_preview_current_left.'" data-currentwidth="'.$slide_preview_current_width.'" data-currentheight="'.$slide_preview_current_height.'" data-reverse="'.$animation_reverse_slide_preview_work_layers_animation.'" data-layer="image" data-status="idle">
                                           <img style="width: 99%; height: 99%; object-fit: fill;'.$style_slide_preview_work_layers_image_styles_child.'" src="images-main/images/'.$image_slide_preview_work_layers_image.'" >
                                        </div>';
                            
		 } elseif($layer_slide_preview_work_layers == 'video'){
		    
		    $sql_slide_preview_work_layers_video = "SELECT * FROM video_maker_videos WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_video = $conn->query($sql_slide_preview_work_layers_video);
			if ($result_slide_preview_work_layers_video->num_rows > 0) {   
			while($row_slide_preview_work_layers_video = $result_slide_preview_work_layers_video->fetch_assoc()) { 
			    $image_slide_preview_work_layers_video = $row_slide_preview_work_layers_video["title"];
			} } else { } 
			
			$style_slide_preview_work_layers_video_styles_main = '';
			$sql_slide_preview_work_layers_video_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='parent'";
			$result_slide_preview_work_layers_video_styles_main = $conn->query($sql_slide_preview_work_layers_video_styles_main);
			if ($result_slide_preview_work_layers_video_styles_main->num_rows > 0) {   
			while($row_slide_preview_work_layers_video_styles_main = $result_slide_preview_work_layers_video_styles_main->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_video_styles_main = $row_slide_preview_work_layers_video_styles_main["style"];
			    $style_value_slide_preview_work_layers_video_styles_main = $row_slide_preview_work_layers_video_styles_main["value"];
			    $style_slide_preview_work_layers_video_styles_main = $style_slide_preview_work_layers_video_styles_main.$style_title_slide_preview_work_layers_video_styles_main.':'.$style_value_slide_preview_work_layers_video_styles_main.';';
			    
			    if($style_title_slide_preview_work_layers_video_styles_main == 'top') {
			        $slide_preview_current_top = $style_value_slide_preview_work_layers_video_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_video_styles_main == 'left') {
			        $slide_preview_current_left = $style_value_slide_preview_work_layers_video_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_video_styles_main == 'width') {
			        $slide_preview_current_width = $style_value_slide_preview_work_layers_video_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_video_styles_main == 'height') {
			        $slide_preview_current_height = $style_value_slide_preview_work_layers_video_styles_main;
			    }

			    
			} } else { } 
			
			$style_slide_preview_work_layers_video_styles_child = '';
			$sql_slide_preview_work_layers_video_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='child'";
			$result_slide_preview_work_layers_video_styles_child = $conn->query($sql_slide_preview_work_layers_video_styles_child);
			if ($result_slide_preview_work_layers_video_styles_child->num_rows > 0) {   
			while($row_slide_preview_work_layers_video_styles_child = $result_slide_preview_work_layers_video_styles_child->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_video_styles_child = $row_slide_preview_work_layers_video_styles_child["style"];
			    $style_value_slide_preview_work_layers_video_styles_child = $row_slide_preview_work_layers_video_styles_child["value"];
			    $style_slide_preview_work_layers_video_styles_child = $style_slide_preview_work_layers_video_styles_child.$style_title_slide_preview_work_layers_video_styles_child.':'.$style_value_slide_preview_work_layers_video_styles_child.';';
			} } else { } 
			
		    $layer_data_slide_preview = '<div class="slide_preview_layer video" layer-type-id="'.$layer_id_slide_preview_work_layers.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" style="'.$style_slide_preview_work_layers_video_styles_main.' z-index: '.$layer_count_slide_preview_work_layers.';" data-layercount="'.$layer_count_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" data-currenttop="'.$slide_preview_current_top.'" data-currentleft="'.$slide_preview_current_left.'" data-currentwidth="'.$slide_preview_current_width.'" data-currentheight="'.$slide_preview_current_height.'" data-reverse="'.$animation_reverse_slide_preview_work_layers_animation.'" data-layer="video" data-status="idle">
                                           <video style="width: 99%; object-fit: fill; height: 99%;'.$style_slide_preview_work_layers_video_styles_child.'" controls="controls" oncontextmenu="false" disablepictureinpicture="true" controlslist="nodownload" disableplaybackspeed="true">
                        					  <source src="images-main/videos/'.$image_slide_preview_work_layers_video.'" type="video/mp4">
                        				   </video>
                                        </div>';
                            
		} elseif($layer_slide_preview_work_layers == 'background') {
		     
		    $sql_slide_preview_work_layers_background = "SELECT * FROM video_maker_backgrounds WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_background = $conn->query($sql_slide_preview_work_layers_background);
			if ($result_slide_preview_work_layers_background->num_rows > 0) {   
			while($row_slide_preview_work_layers_background = $result_slide_preview_work_layers_background->fetch_assoc()) { 
			    $image_slide_preview_work_layers_background = $row_slide_preview_work_layers_background["title"];
			} } else { }
			
			$style_slide_preview_work_layers_background_styles_main = '';
			$sql_slide_preview_work_layers_background_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='parent'";
			$result_slide_preview_work_layers_background_styles_main = $conn->query($sql_slide_preview_work_layers_background_styles_main);
			if ($result_slide_preview_work_layers_background_styles_main->num_rows > 0) {   
			while($row_slide_preview_work_layers_background_styles_main = $result_slide_preview_work_layers_background_styles_main->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_background_styles_main = $row_slide_preview_work_layers_background_styles_main["style"];
			    $style_value_slide_preview_work_layers_background_styles_main = $row_slide_preview_work_layers_background_styles_main["value"];
			    $style_slide_preview_work_layers_background_styles_main = $style_slide_preview_work_layers_background_styles_main.$style_title_slide_preview_work_layers_background_styles_main.':'.$style_value_slide_preview_work_layers_background_styles_main.';';
		
		        if($style_title_slide_preview_work_layers_background_styles_main == 'top') {
			        $slide_preview_current_top = $style_value_slide_preview_work_layers_background_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_background_styles_main == 'left') {
			        $slide_preview_current_left = $style_value_slide_preview_work_layers_background_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_background_styles_main == 'width') {
			        $slide_preview_current_width = $style_value_slide_preview_work_layers_background_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_background_styles_main == 'height') {
			        $slide_preview_current_height = $style_value_slide_preview_work_layers_background_styles_main;
			    }
		
			} } else { } 
			
			$style_slide_preview_work_layers_background_styles_child = '';
			$sql_slide_preview_work_layers_background_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='child'";
			$result_slide_preview_work_layers_background_styles_child = $conn->query($sql_slide_preview_work_layers_background_styles_child);
			if ($result_slide_preview_work_layers_background_styles_child->num_rows > 0) {   
			while($row_slide_preview_work_layers_background_styles_child = $result_slide_preview_work_layers_background_styles_child->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_background_styles_child = $row_slide_preview_work_layers_background_styles_child["style"];
			    $style_value_slide_preview_work_layers_background_styles_child = $row_slide_preview_work_layers_background_styles_child["value"];
			    $style_slide_preview_work_layers_background_styles_child = $style_slide_preview_work_layers_background_styles_child.$style_title_slide_preview_work_layers_background_styles_child.':'.$style_value_slide_preview_work_layers_background_styles_child.';';
			} } else { } 
			
		    $layer_data_slide_preview = '<div class="slide_preview_layer background" layer-type-id="'.$layer_id_slide_preview_work_layers.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" style="'.$style_slide_preview_work_layers_background_styles_main.' z-index: '.$layer_count_slide_preview_work_layers.';" data-layercount="'.$layer_count_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" data-currenttop="'.$slide_preview_current_top.'" data-currentleft="'.$slide_preview_current_left.'" data-currentwidth="'.$slide_preview_current_width.'" data-currentheight="'.$slide_preview_current_height.'" data-reverse="'.$animation_reverse_slide_preview_work_layers_animation.'" data-layer="background" data-status="idle">
                                           <img style="width: 100%; height: 100%; object-fit: cover;'.$style_slide_preview_work_layers_background_styles_child.'" src="images-main/backgrounds/'.$image_slide_preview_work_layers_background.'">
                                        </div>';
                            
                            
		} elseif($layer_slide_preview_work_layers == 'font'){
		    
		    $sql_slide_preview_work_layers_font = "SELECT * FROM video_maker_fonts WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_font = $conn->query($sql_slide_preview_work_layers_font);
			if ($result_slide_preview_work_layers_font->num_rows > 0) {   
			while($row_slide_preview_work_layers_font = $result_slide_preview_work_layers_font->fetch_assoc()) { 
			    $font_slide_preview_work_layers_font = $row_slide_preview_work_layers_font["font"];
			    $name_slide_preview_work_layers_font = $row_slide_preview_work_layers_font["name"];
			} } else { } 
			
			$style_slide_preview_work_layers_font_styles_main = '';
			$sql_slide_preview_work_layers_font_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='parent'";
			$result_slide_preview_work_layers_font_styles_main = $conn->query($sql_slide_preview_work_layers_font_styles_main);
			if ($result_slide_preview_work_layers_font_styles_main->num_rows > 0) {   
			while($row_slide_preview_work_layers_font_styles_main = $result_slide_preview_work_layers_font_styles_main->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_font_styles_main = $row_slide_preview_work_layers_font_styles_main["style"];
			    $style_value_slide_preview_work_layers_font_styles_main = $row_slide_preview_work_layers_font_styles_main["value"];
			    $style_slide_preview_work_layers_font_styles_main = $style_slide_preview_work_layers_font_styles_main.$style_title_slide_preview_work_layers_font_styles_main.':'.$style_value_slide_preview_work_layers_font_styles_main.';';
			
			    if($style_title_slide_preview_work_layers_font_styles_main == 'top') {
			        $slide_preview_current_top = $style_value_slide_preview_work_layers_font_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_font_styles_main == 'left') {
			        $slide_preview_current_left = $style_value_slide_preview_work_layers_font_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_font_styles_main == 'width') {
			        $slide_preview_current_width = $style_value_slide_preview_work_layers_font_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_font_styles_main == 'height') {
			        $slide_preview_current_height = $style_value_slide_preview_work_layers_font_styles_main;
			    }
			    
			} } else { } 
			
			$style_slide_preview_work_layers_font_styles_child = '';
			$sql_slide_preview_work_layers_font_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='child'";
			$result_slide_preview_work_layers_font_styles_child = $conn->query($sql_slide_preview_work_layers_font_styles_child);
			if ($result_slide_preview_work_layers_font_styles_child->num_rows > 0) {   
			while($row_slide_preview_work_layers_font_styles_child = $result_slide_preview_work_layers_font_styles_child->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_font_styles_child = $row_slide_preview_work_layers_font_styles_child["style"];
			    $style_value_slide_preview_work_layers_font_styles_child = $row_slide_preview_work_layers_font_styles_child["value"];
			    $style_slide_preview_work_layers_font_styles_child = $style_slide_preview_work_layers_font_styles_child.$style_title_slide_preview_work_layers_font_styles_child.':'.$style_value_slide_preview_work_layers_font_styles_child.';';
			} } else { } 
			
		    $layer_data_slide_preview = '<div class="slide_preview_layer font" layer-type-id="'.$layer_id_slide_preview_work_layers.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" font-id="'.$name_slide_preview_work_layers_font.'" style="'.$style_slide_preview_work_layers_font_styles_main.' z-index: '.$layer_count_slide_preview_work_layers.';" data-layercount="'.$layer_count_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" data-currenttop="'.$slide_preview_current_top.'" data-currentleft="'.$slide_preview_current_left.'" data-currentwidth="'.$slide_preview_current_width.'" data-currentheight="'.$slide_preview_current_height.'" data-reverse="'.$animation_reverse_slide_preview_work_layers_animation.'" data-layer="font" data-status="selected">
                                           <textarea type="text" class="font-input" style="font-family:'.$name_slide_preview_work_layers_font.';font-size:100px;text-align:center;width:100%;height:100%;overflow:hidden;background: transparent;resize: none;'.$style_slide_preview_work_layers_font_styles_child.'" spellcheck="false">'.$content_slide_preview_work_layers.'</textarea>
                                        </div>';
                            
                            
		} elseif($layer_slide_preview_work_layers == 'shape'){
		    
		    $sql_slide_preview_work_layers_shape = "SELECT * FROM video_maker_shapes WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_shape = $conn->query($sql_slide_preview_work_layers_shape);
			if ($result_slide_preview_work_layers_shape->num_rows > 0) {   
			while($row_slide_preview_work_layers_shape = $result_slide_preview_work_layers_shape->fetch_assoc()) { 
			    $title_slide_preview_work_layers_shape = $row_slide_preview_work_layers_shape["title"];
			    $shape_slide_preview_work_layers_shape = $row_slide_preview_work_layers_shape["shape"];
			    $style_slide_preview_work_layers_shape = $row_slide_preview_work_layers_shape["style"];
			} } else { } 
			
			$style_slide_preview_work_layers_shape_styles_main = '';
			$sql_slide_preview_work_layers_shape_styles_main = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='parent'";
			$result_slide_preview_work_layers_shape_styles_main = $conn->query($sql_slide_preview_work_layers_shape_styles_main);
			if ($result_slide_preview_work_layers_shape_styles_main->num_rows > 0) {   
			while($row_slide_preview_work_layers_shape_styles_main = $result_slide_preview_work_layers_shape_styles_main->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_shape_styles_main = $row_slide_preview_work_layers_shape_styles_main["style"];
			    $style_value_slide_preview_work_layers_shape_styles_main = $row_slide_preview_work_layers_shape_styles_main["value"];
			    $style_slide_preview_work_layers_shape_styles_main = $style_slide_preview_work_layers_shape_styles_main.$style_title_slide_preview_work_layers_shape_styles_main.':'.$style_value_slide_preview_work_layers_shape_styles_main.';';
			
			    if($style_title_slide_preview_work_layers_shape_styles_main == 'top') {
			        $slide_preview_current_top = $style_value_slide_preview_work_layers_shape_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_shape_styles_main == 'left') {
			        $slide_preview_current_left = $style_value_slide_preview_work_layers_shape_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_shape_styles_main == 'width') {
			        $slide_preview_current_width = $style_value_slide_preview_work_layers_shape_styles_main;
			    }
			    if($style_title_slide_preview_work_layers_shape_styles_main == 'height') {
			        $slide_preview_current_height = $style_value_slide_preview_work_layers_shape_styles_main;
			    }
			    
			} } else { } 
			
			$style_slide_preview_work_layers_shape_styles_child = '';
			$sql_slide_preview_work_layers_shape_styles_child = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='child'";
			$result_slide_preview_work_layers_shape_styles_child = $conn->query($sql_slide_preview_work_layers_shape_styles_child);
			if ($result_slide_preview_work_layers_shape_styles_child->num_rows > 0) {   
			while($row_slide_preview_work_layers_shape_styles_child = $result_slide_preview_work_layers_shape_styles_child->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_shape_styles_child = $row_slide_preview_work_layers_shape_styles_child["style"];
			    $style_value_slide_preview_work_layers_shape_styles_child = $row_slide_preview_work_layers_shape_styles_child["value"];
			    $style_slide_preview_work_layers_shape_styles_child = $style_slide_preview_work_layers_shape_styles_child.$style_title_slide_preview_work_layers_shape_styles_child.':'.$style_value_slide_preview_work_layers_shape_styles_child.';';
			} } else { } 
			
			$style_slide_preview_work_layers_shape_styles_grandchild = '';
			$sql_slide_preview_work_layers_shape_styles_grandchild = "SELECT * FROM video_maker_styles WHERE layer_id = '$id_slide_preview_work_layers' AND type='grandchild'";
			$result_slide_preview_work_layers_shape_styles_grandchild = $conn->query($sql_slide_preview_work_layers_shape_styles_grandchild);
			if ($result_slide_preview_work_layers_shape_styles_grandchild->num_rows > 0) {   
			while($row_slide_preview_work_layers_shape_styles_grandchild = $result_slide_preview_work_layers_shape_styles_grandchild->fetch_assoc()) { 
			    $style_title_slide_preview_work_layers_shape_styles_grandchild = $row_slide_preview_work_layers_shape_styles_grandchild["style"];
			    $style_value_slide_preview_work_layers_shape_styles_grandchild = $row_slide_preview_work_layers_shape_styles_grandchild["value"];
			    
			 
			     
			    $style_slide_preview_work_layers_shape_styles_grandchild = $style_slide_preview_work_layers_shape_styles_grandchild.$style_title_slide_preview_work_layers_shape_styles_grandchild.'="'.$style_value_slide_preview_work_layers_shape_styles_grandchild.'" ';
			     
			
			    
			} } else { } 
			
			if($title_slide_preview_work_layers_shape == 'Sqaure') {
			    
			    $layer_shape_data_slide_preview = '<rect '.$style_slide_preview_work_layers_shape_styles_grandchild.' />';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Sqaure_Round') {
			    
			    $layer_shape_data_slide_preview = '<rect '.$style_slide_preview_work_layers_shape_styles_grandchild.' />';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Circle') {
			    
			    $layer_shape_data_slide_preview = '<circle '.$style_slide_preview_work_layers_shape_styles_grandchild.' />';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Elipse') {
			    
			    $layer_shape_data_slide_preview = '<ellipse '.$style_slide_preview_work_layers_shape_styles_grandchild.' />';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Line') {
			    
			    $layer_shape_data_slide_preview = '<line '.$style_slide_preview_work_layers_shape_styles_grandchild.' />';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Stroke') {
			    
			    $layer_shape_data_slide_preview = '<polyline points="60 110 65 120 70 115 75 130 80 125 85 140 90 135 95 150 100 145" stroke="black" fill="transparent" stroke-width="5"/>';
			    
			} elseif($title_slide_preview_work_layers_shape == 'Star') {
			    
			    $layer_shape_data_slide_preview = '<polygon points="50 160 55 180 70 180 60 190 65 205 50 195 35 205 40 190 30 180 45 180" stroke="black" fill="transparent" stroke-width="5"/>';
			    
			} else { }
			
		    $layer_data_slide_preview =  '<div class="slide_preview_layer shape '.$title_slide_preview_work_layers_shape.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" layer-type-id="'.$layer_id_slide_preview_work_layers.'" style="'.$style_slide_preview_work_layers_shape_styles_main.' z-index: '.$layer_count_slide_preview_work_layers.';" data-layercount="'.$layer_count_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" data-currenttop="'.$current_top.'" data-currentleft="'.$current_left.'" data-currentwidth="'.$current_width.'" data-currentheight="'.$current_height.'" data-reverse="'.$animation_reverse_slide_preview_work_layers_animation.'" data-layer="shape" data-status="selected">
                                           <svg version="1.1" class="svg_rect" xmlns="http://www.w3.org/2000/svg" style="'.$style_slide_preview_work_layers_shape_styles_child.'">
                                              '.$layer_shape_data_slide_preview.'
                                           </svg>
                                        </div>';
                            
        
		} elseif($layer_slide_preview_work_layers == 'BGM') {
		    
		    $sql_slide_preview_work_layers_audios = "SELECT * FROM video_maker_audios WHERE id = '$layer_id_slide_preview_work_layers'";
			$result_slide_preview_work_layers_audios = $conn->query($sql_slide_preview_work_layers_audios);
			if ($result_slide_preview_work_layers_audios->num_rows > 0) {   
			while($row_slide_preview_work_layers_audios = $result_slide_preview_work_layers_audios->fetch_assoc()) { 
			    $title_slide_preview_work_layers_audios = $row_slide_preview_work_layers_audios["title"];
			    
			    $sql_slide_preview_work_draggable_layers_audios = "SELECT * FROM video_maker_draggable_layers WHERE main_layer_id = '$id_slide_preview_work_layers' AND layer = 'BGM' LIMIT 1";
    			$result_slide_preview_work_draggable_layers_audios = $conn->query($sql_slide_preview_work_draggable_layers_audios);
    			if ($result_slide_preview_work_draggable_layers_audios->num_rows > 0) {   
    			while($row_slide_preview_work_draggable_layers_audios = $result_slide_preview_work_draggable_layers_audios->fetch_assoc()) { 
    			    $play_start_slide_preview_work_draggable_layers_audios = $row_slide_preview_work_draggable_layers_audios["start_time_sec"];
    			    $play_stop_slide_preview_work_draggable_layers_audios = $row_slide_preview_work_draggable_layers_audios["end_time_sec"];
					$play_volume_slide_preview_work_draggable_layers_audios = $row_slide_preview_work_draggable_layers_audios["volume"];
			    
			    $layer_data_slide_preview = '<audio class="bgm_palyer" id="bgm_palyer" data-playstart="'.$play_start_slide_preview_work_draggable_layers_audios.'" data-playstop="'.$play_stop_slide_preview_work_draggable_layers_audios.'" data-startanimation="'.$start_slide_preview_work_layers_animation.'" data-endanimation="'.$end_slide_preview_work_layers_animation.'" data-animation="'.$animation_slide_preview_work_layers_animation.'" data-speed="'.$speed_slide_preview_work_layers_animation.'" data-volume="'.$play_volume_slide_preview_work_draggable_layers_audios.'" layer-type-id="'.$layer_id_slide_preview_work_layers.'" data-slidepreviewmyattr="'.$id_slide_preview_work_layers.'" src="images-main/audio/'.$title_slide_preview_work_layers_audios.'#t='.$play_start_slide_preview_work_draggable_layers_audios.','.$play_stop_slide_preview_work_draggable_layers_audios.'"></audio>';
			    
			
    			} } else { } 
    			
    		} } else { } 
			
		
                            
		} else { 
			
		}
    
        echo $layer_data_slide_preview;
        
    	} } else { } 
    	
	} } else { } 	
    
	$main_array_start = substr($main_array_start, 0, -2);
	$main_array_start = '['.$main_array_start.']';

    $main_array_end = substr($main_array_end, 0, -2);
	$main_array_end = '['.$main_array_end.']';
	
	$main_array_animation = substr($main_array_animation, 0, -2);
	$main_array_animation = '['.$main_array_animation.']';
	
	$main_array_speed = substr($main_array_speed, 0, -2);
	$main_array_speed = '['.$main_array_speed.']';

  ?>
    
    
    <input type="hidden" class="main_array_start" value="<?= $main_array_start; ?>" />
    <input type="hidden" class="main_array_end" value="<?= $main_array_end; ?>" />
    <input type="hidden" class="main_array_animation" value="<?= $main_array_animation; ?>" />
    <input type="hidden" class="main_array_speed" value="<?= $main_array_speed; ?>" />
    
    
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    -->
<script>
    var initial = parseInt($("#slide_time").text());
    var initial_after = initial + 1;
        initial = '00:'+initial+':00';
        initial_after = '00:'+initial_after+':00';
    var regex = /([^\[\],\s]+)/g;
    
    var main_array_start = $(".main_array_start").val();
    var json_start = main_array_start.replace(regex, '"$&"');
    var multi_array_start = JSON.parse(json_start);
    
    var main_array_end = $(".main_array_end").val();
    var json_end = main_array_end.replace(regex, '"$&"');
    var multi_array_end = JSON.parse(json_end);
    
    var main_array_animation = $(".main_array_animation").val();
    var json_animation = main_array_animation.replace(regex, '"$&"');
    var main_array_animation = JSON.parse(json_animation);
    
    var main_array_speed = $(".main_array_speed").val();
    var json_speed = main_array_speed.replace(regex, '"$&"');
    var main_array_speed = JSON.parse(json_speed);

    var interval;

	if($('#bgm_palyer').length) {
		var bgm_palyer = document.getElementById('bgm_palyer');
		var playstart = parseInt($(".bgm_palyer").attr("data-playstart"));
		var playstop = parseInt($(".bgm_palyer").attr("data-playstop"));
	}
    

function slide_preview_play() {
    
    	var startTime = Date.now();

            interval = setInterval(function() {
        var elapsedTime = Date.now() - startTime;
        let final_time = (elapsedTime / 1000).toFixed(2);
        
        let final_time_maxisecs = '00';
        let final_time_secs = final_time.split('.')[0];
            final_time_secs = ('0' + final_time_secs).slice(-2)
        let final_time_millisecs = final_time.split('.')[1];
        
	if($('#bgm_palyer').length) {
        var current_bgm_time = Math.round(bgm_palyer.currentTime);
	}
        
        final_time = final_time_maxisecs+':'+final_time_secs+':'+final_time_millisecs;
        
        if(final_time == initial || final_time == initial_after) {
            
            slide_preview_reset();
            clearTimeout(interval);

			if($('#bgm_palyer').length) {
				$('.bgm_palyer').get(0).pause();
				$('.bgm_palyer').currentTime = playstart;
			}

        } else {

            multi_array_start.forEach((main_indi_multi_array_start) => {
                main_indi_multi_array_start.forEach((child_indi_multi_array_start) => {
                    
                    let start_layer_id = main_indi_multi_array_start[0];
                    
                    if(child_indi_multi_array_start == '00:00:00') {
                        $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
						if($('#bgm_palyer').length) {
							if(current_bgm_time >= playstop) {
								$('.bgm_palyer').currentTime = 0;
								$('.bgm_palyer').get(0).pause();
							} else {
								$('.bgm_palyer').currentTime = 0;
								$('.bgm_palyer').get(0).play();
							}
						}
                        // console.log(current_bgm_time);
                    }
                    
                    if(final_time == child_indi_multi_array_start) {
                        
                        let animation = $('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-animation');
                        let speed = parseInt($('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-speed'));
                        
                        let slide_preview_current_top = $('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-currenttop');
                        let slide_preview_current_left = $('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-currentleft');
                        let slide_preview_current_width = $('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-currentwidth');
                        let slide_preview_current_height = $('[data-slidepreviewmyattr="'+start_layer_id+'"]').attr('data-currentheight');
    
                        // console.log(final_time);
    
                        if(animation == 'none') {
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","none");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('.bgm_palyer').currentTime = 0;
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').get(0).play();
							bgm_palyer.volume = bgm_player_volume;
                        } else if(animation == 'fadein') {
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","none");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').fadeIn({queue: false, duration: speed});
                        } else if(animation == 'riseup') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("top","-100%");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, top: slide_preview_current_top, }, speed );
                        } else if(animation == 'risedown') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("top","100%");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, top: slide_preview_current_top, }, speed );
                        } else if(animation == 'slideleft') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("left","-100%");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, left: slide_preview_current_left, }, speed );
                        } else if(animation == 'slideright') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("left","100%");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, left: slide_preview_current_left, }, speed );
                        } else if(animation == 'zoomin') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css({"width":"100%","height":"auto","left":"0","top":"0"});
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, height: slide_preview_current_height, width: slide_preview_current_width, left:slide_preview_current_left, top:slide_preview_current_top}, speed, 'linear');  
                        } else if(animation == 'zoomout') { 
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').css("display","block");
                            $('[data-slidepreviewmyattr="'+start_layer_id+'"]').animate({ queue: false, 'width': slide_preview_current_width, 'height': slide_preview_current_height, 'left':slide_preview_current_left, 'top':slide_preview_current_top}, speed, 'linear');  
                        } else { }
                    }
                });
            });
            
            multi_array_end.forEach((main_indi_multi_array_end) => {
                main_indi_multi_array_end.forEach((child_indi_multi_array_end) => {
                    if(final_time == child_indi_multi_array_end) {
                        
                        let end_layer_id = main_indi_multi_array_end[0];
                        
                        let animation = $('[data-slidepreviewmyattr="'+end_layer_id+'"]').attr('data-animation');
                        let speed = parseInt($('[data-slidepreviewmyattr="'+end_layer_id+'"]').attr('data-speed'));
                        let animation_reverse = $('[data-slidepreviewmyattr="'+end_layer_id+'"]').attr('data-reverse');
                        
                        let slide_preview_current_top = '-100%';
                        let slide_preview_current_left = '-100%';
                        let slide_preview_current_width = '100%';
                        let slide_preview_current_height = 'auto';
    
                        if(animation_reverse == '1') {
                            $('[data-slidepreviewmyattr="'+end_layer_id+'"]').css("display","none");
                            $('.bgm_palyer').get(0).pause();
                        } else {
                            
                            if(animation == 'none') {
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').css("display","none");
                                $('.bgm_palyer').get(0).pause();
                            } else if(animation == 'fadein') {
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').fadeOut({queue: false, duration: speed});
                            } else if(animation == 'riseup') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, top: slide_preview_current_top, }, speed );
                            } else if(animation == 'risedown') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, top: slide_preview_current_top, }, speed );
                            } else if(animation == 'slideleft') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, left: slide_preview_current_left, }, speed );
                            } else if(animation == 'slideright') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, left: slide_preview_current_left, }, speed );
                            } else if(animation == 'zoomin') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, height: slide_preview_current_height, width: slide_preview_current_width, left:0, top:slide_preview_current_top}, speed, 'linear');  
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').fadeOut({queue: false, duration: 500});
                            } else if(animation == 'zoomout') { 
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').animate({ queue: false, 'width': slide_preview_current_width, 'height': slide_preview_current_height, 'left':0, 'top':slide_preview_current_top}, speed, 'linear');  
                                $('[data-slidepreviewmyattr="'+end_layer_id+'"]').fadeOut({queue: false, duration: 500});
                            } else { }
                        
                        }
                    } 
                    
                });
            });
        
        }
        
        if($('#bgm_palyer').length) {
			if(current_bgm_time >= playstop) {
				// bgm_palyer.currentTime = playstart;
				bgm_palyer.pause();
			}
		}

    }, 10);
    
}

var slide_preview_state;

$("#overlay2,.slide_preview_overlay").on("click",function() {
    $("#overlay2,.slide_preview_div").css("display","none");
    $(".slide_preview_content_div").html("");
    $(".slide_preview_content_div").css("display","none");
    $(".slide_preview_overlay").css("display","none");
    $(".slide_preview_overlay").css("background","#0000007a");
    $(".slide_preview_loading_div").css("display","block");
    $(".slide_preview_overlay_another").css("display","none");
    slide_preview_reset();
    clearTimeout(interval);
});

$(".slide_preview_overlay,.slide_preview_overlay_another").on("click",function() {
    if(slide_preview_state == 'playing') {
        slide_preview_reset();
        clearTimeout(interval);
        slide_preview_state = 'paused';
		if($('#bgm_palyer').length) {
			var bgm_palyer = document.getElementById('bgm_palyer');
			var bgm_player_volume = parseFloat($(".bgm_palyer").attr("data-volume"));
			bgm_palyer.volume = bgm_player_volume;
			$('.bgm_palyer').get(0).pause();
			$('.bgm_palyer').currentTime = playstart;
		}
    } else {
        $(".slide_preview_overlay").css("background","transparent");
        $('.slide_preview_play').fadeOut({queue: false, duration: 'fast'});
        $('.slide_preview_play').animate({'zoom': 2}, 300);
        // $(".slide_preview_repeat").css("display","none");
        // $('.slide_preview_repeat').css("zoom","1");
        slide_preview_state = 'playing';
        $(".slide_preview_layer").css("display","none");
        slide_preview_play();
		if($('#bgm_palyer').length) {
			$('.bgm_palyer').currentTime = 0;
			var bgm_palyer = document.getElementById('bgm_palyer');
			var bgm_player_volume = parseFloat($(".bgm_palyer").attr("data-volume"));
			bgm_palyer.volume = bgm_player_volume;
			$('.bgm_palyer').get(0).play();
		}
    }
});

$(".slide_preview_repeat").on("click",function() {
    $(".slide_preview_overlay").css("background","transparent");
    $('.slide_preview_repeat').fadeOut({queue: false, duration: 'fast'});
    $('.slide_preview_repeat').animate({'zoom': 2}, 300);
    $(".slide_preview_play").css("display","block");
    $('.slide_preview_play').css("left","50%");
    slide_preview_state = 'paused';
});

function slide_preview_reset() {
    $(".slide_preview_overlay").css("background","#0000007a");
    $('.slide_preview_play').css("left","50%");
    $('.slide_preview_play').fadeIn({queue: false, duration: 'fast'});
    $('.slide_preview_play').animate({'zoom': 1}, 300);
    $(".slide_preview_repeat").css("display","block");
    $('.slide_preview_repeat').css("display","none");
    slide_preview_state = 'paused';
    $(".slide_preview_layer").css("display","none");
    // clearTimeout(interval);
	if($('#bgm_palyer').length) {
		$('.bgm_palyer').get(0).pause();
		let bgm_html = $('.bgm_palyer').html();
		$('.bgm_palyer').html("");
		$('.bgm_palyer').html(bgm_html);
		$('.bgm_palyer').currentTime = playstart;
	}
}



</script>
    