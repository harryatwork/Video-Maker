<?php include("db.php"); 
      $v_m_id = $_POST["v_m_id"];
	  $scene_id = $_POST["scene_id"];
?>

   
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
            
            $layer_data = '<div class="background ui-draggable ui-draggable-handle draggable2 ui-resizable ui-resizable-disabled" layer-type-id="'.$layer_id_work_layers.'" style="'.$style_work_layers_background_styles_main.' z-index: '.$layer_count_work_layers.';" data-layercount="'.$layer_count_work_layers.'" data-myattr="'.$id_work_layers.'" data-layer="background" data-status="idle">
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
    