<?php include("../db.php");

    $templateprojectid = $_POST["templateprojectid"];
    $p_id = $_POST["p_id"];
    $u_id = $_POST["u_id"];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_project_scene = "SELECT * FROM video_maker_scene WHERE p_id = '$p_id'";
    $result_project_scene = $conn->query($sql_project_scene);
    if($result_project_scene->num_rows > 0){ 
    while($rows_project_scene = $result_project_scene->fetch_assoc()) {
        $project_scene_id = $rows_project_scene["id"];

        $sql_scene_delete = "DELETE FROM video_maker_scene WHERE id = '$project_scene_id'";
        if ($con->query($sql_scene_delete) === TRUE) { } else { }

        $sql_layers_0 = "SELECT * FROM video_maker_layers WHERE scene_id = '$project_scene_id'";
        $result_layers_0 = $conn->query($sql_layers_0);
        if($result_layers_0->num_rows > 0){ 
        while($rows_layers_0 = $result_layers_0->fetch_assoc()) {
            $data_layer_id = $rows_layers_0["id"];
        
            $sql = "DELETE FROM video_maker_layers WHERE id = '$data_layer_id'";
            if ($con->query($sql) === TRUE) { 
                
                $sql_1 = "DELETE FROM video_maker_draggable_layers WHERE main_layer_id = '$data_layer_id'";
                if ($con->query($sql_1) === TRUE) { 
                
                    $sql2 = "DELETE FROM video_maker_styles WHERE layer_id = '$data_layer_id'";
                    if ($con->query($sql2) === TRUE) { 
                        
                        $sql3 = "DELETE FROM video_maker_layer_animations WHERE layer_id = '$data_layer_id'";
                        if ($con->query($sql3) === TRUE) { 
                            

                        } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }

                    } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                
                } else { echo "ERROR" . $sql_1 . "<br>" . $conn->error; }
                
            } else { echo "ERROR" . $sql . "<br>" . $conn->error; }

        } } else { }

    } } else { }



    //Scenes ----------------------------------------------------------

        $sql_scene = "SELECT * FROM video_maker_scene_templates WHERE p_id = '$templateprojectid'";
        $result_scene = $conn->query($sql_scene);
        if ($result_scene->num_rows > 0) {   
        while($row_scene = $result_scene->fetch_assoc()) {
            $scene_id = $row_scene["id"];
            $old_p_id = $row_scene["p_id"];
            $old_u_id = $row_scene["u_id"];
            $scene_title = $row_scene["title"];
            $scene_background = $row_scene["background"];
            $scene_duration = $row_scene["duration"];

            $sql_scene_insert = "INSERT INTO video_maker_scene (p_id, u_id, title, background, duration, date)
                    VALUES ('$p_id', '$u_id', '$scene_title', '$scene_background', '$scene_duration', '$date')";
            if ($con->query($sql_scene_insert) === TRUE) { 
                $scene_template_id = $con->insert_id;

    //Layers ----------------------------------------------------------
                $sql_layers = "SELECT * FROM video_maker_layers_templates WHERE scene_id = '$scene_id'";
                $result_layers = $conn->query($sql_layers);
                if ($result_layers->num_rows > 0) {   
                while($row_layers = $result_layers->fetch_assoc()) {
                    $layer_id = $row_layers["id"];
                    $layer_title = $row_layers["title"];
                    $layer_layer = $row_layers["layer"];
                    $layer_layer_id = $row_layers["layer_id"];
                    $layer_layer_count = $row_layers["layer_count"];
                    $layer_content = $row_layers["content"];
                    
                    $sql_layer_insert = "INSERT INTO video_maker_layers (title, p_id, u_id, scene_id, layer, layer_id, layer_count, content, date)
                                        VALUES ('$layer_title', '$p_id', '$u_id', '$scene_template_id', '$layer_layer', '$layer_layer_id', '$layer_layer_count', '$layer_content', '$date')";
                    if ($con->query($sql_layer_insert) === TRUE) { 
                        $layer_template_id = $con->insert_id;

    // Draggable Layers ------------------------------------------------

                        $sql_draggable_layers = "SELECT * FROM video_maker_draggable_layers_templates WHERE main_layer_id = '$layer_id'";
                        $result_draggable_layers = $conn->query($sql_draggable_layers);
                        if ($result_draggable_layers->num_rows > 0) {   
                        while($row_draggable_layers = $result_draggable_layers->fetch_assoc()) {
                            $layer_draggable_title = $row_draggable_layers["title"];
                            $layer_draggable_layer = $row_draggable_layers["layer"];
                            $layer_draggable_layer_count = $row_draggable_layers["layer_count"];
                            $layer_draggable_layer_length = $row_draggable_layers["layer_length"];
                            $layer_draggable_start_time_sec = $row_draggable_layers["start_time_sec"];
                            $layer_draggable_end_time_sec = $row_draggable_layers["end_time_sec"];

                            $sql_draggable_layer_insert = "INSERT INTO video_maker_draggable_layers (main_layer_id, p_id, u_id, layer, title, layer_count, layer_length, start_time_sec, end_time_sec, date)
                                        VALUES ('$layer_template_id', '$p_id', '$u_id', '$layer_draggable_layer', '$layer_draggable_title', '$layer_draggable_layer_count', '$layer_draggable_layer_length', '$layer_draggable_start_time_sec', '$layer_draggable_end_time_sec', '$date')";
                            if ($con->query($sql_draggable_layer_insert) === TRUE) { 

                            } else { }

                        } } else { } 

    // Layer Animations -------------------------------------------------

                        $sql_animation_layers = "SELECT * FROM video_maker_layer_animations_templates WHERE layer_id = '$layer_id'";
                        $result_animation_layers = $conn->query($sql_animation_layers);
                        if ($result_animation_layers->num_rows > 0) {   
                        while($row_animation_layers = $result_animation_layers->fetch_assoc()) {
                            $layer_animation_type = $row_animation_layers["type"];
                            $layer_animation_animation = $row_animation_layers["animation"];
                            $layer_animation_speed = $row_animation_layers["speed"];
                            $layer_animation_start = $row_animation_layers["start"];
                            $layer_animation_end = $row_animation_layers["end"];
                            $layer_animation_margin_left = $row_animation_layers["margin_left"];
                            $layer_animation_width = $row_animation_layers["width"];
                            $layer_animation_reverse = $row_animation_layers["reverse"];

                            $sql_animation_layers_insert = "INSERT INTO video_maker_layer_animations (layer_id, type, animation, speed, start, end, margin_left, width, reverse, date)
                                                            VALUES ('$layer_template_id', '$layer_animation_type', '$layer_animation_animation', '$layer_animation_speed', '$layer_animation_start', '$layer_animation_end', '$layer_animation_margin_left', '$layer_animation_width', '$layer_animation_reverse', '$date')";
                            if ($con->query($sql_animation_layers_insert) === TRUE) { 


                            } else { }
                        } } else { } 



    // Layer Animations -------------------------------------------------
                        
                        $sql_layer_styles = "SELECT * FROM video_maker_styles_templates WHERE layer_id = '$layer_id'";
                        $result_layer_styles = $conn->query($sql_layer_styles);
                        if ($result_layer_styles->num_rows > 0) {   
                        while($row_layer_styles = $result_layer_styles->fetch_assoc()) {
                            $layer_style_type = $row_layer_styles["type"];
                            $layer_style_style = $row_layer_styles["style"];
                            $layer_style_value = $row_layer_styles["value"];

                            $sql_layer_styles_insert = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                                                            VALUES ('$layer_template_id', '$layer_style_type', '$layer_style_style', '$layer_style_value', '$date')";
                            if ($con->query($sql_layer_styles_insert) === TRUE) { 

                            } else { }
                        } } else { } 





                    } else { } 
                } } else { }
                


            } else { }
        } } else { } 
