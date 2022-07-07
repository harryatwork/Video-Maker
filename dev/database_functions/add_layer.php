<?php include("../db.php"); 
    
	$u_id = $_POST['u_id'];
	$project_id = $_POST['project_id'];
	$scene_id = $_POST['scene_id'];
	$layer = $_POST['layer'];
	$title = $_POST['title'];
	$layer_count = $_POST['layer_count'];
	$layer_type_id = $_POST['layer_type_id'];
	$layer_content = 'Preview';
	
	$date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO video_maker_layers (u_id, p_id, scene_id, title, layer, layer_id, layer_count, content, date)
            VALUES ('$u_id', '$project_id', '$scene_id', '$title', '$layer', '$layer_type_id', '$layer_count', '$layer_content', '$date')";
    
    if ($con->query($sql) === TRUE) { 
        $last_id = $con->insert_id;
        
        if($layer == 'shape'){
            
            if($layer_type_id == 1) {

                    $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'width', 'auto', '$date')";
                    if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
                    
                    $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
                    if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                    
                    $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
                    if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
                    
                    $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
                    if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
                    
                    $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'vertical-align', 'super', '$date')";
                    if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }
                    
                    $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
                    if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
                    
                    $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
                    if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }
                    
                    $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
                    if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
                    
                    $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
                    if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
                    
                    $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'border', '6px dashed transparent', '$date')";
                    if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                    
                    $sql10_1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
                    if ($con->query($sql10_1) === TRUE) { } else { echo "ERROR" . $sql10_1 . "<br>" . $conn->error; }
                
                //-----------------------------------------------------------------------------------------------    
                    
                    $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'height', '220px', '$date')";
                    if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
                    
                    $sql12 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'width', '220px', '$date')";
                    if ($con->query($sql12) === TRUE) { } else { echo "ERROR" . $sql12 . "<br>" . $conn->error; }
                    
                //-----------------------------------------------------------------------------------------------
                    
                    $sql13 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'x', '10', '$date')";
                    if ($con->query($sql13) === TRUE) { } else { echo "ERROR" . $sql13 . "<br>" . $conn->error; }
                    
                    $sql14 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'y', '10', '$date')";
                    if ($con->query($sql14) === TRUE) { } else { echo "ERROR" . $sql14 . "<br>" . $conn->error; }
                    
                    $sql15 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'width', '205px', '$date')";
                    if ($con->query($sql15) === TRUE) { } else { echo "ERROR" . $sql15 . "<br>" . $conn->error; }
                    
                    $sql16 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'height', '205px', '$date')";
                    if ($con->query($sql16) === TRUE) { } else { echo "ERROR" . $sql16 . "<br>" . $conn->error; }
                    
                    $sql17 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke', 'black', '$date')";
                    if ($con->query($sql17) === TRUE) { } else { echo "ERROR" . $sql17 . "<br>" . $conn->error; }
                    
                    $sql18 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'fill', 'transparent', '$date')";
                    if ($con->query($sql18) === TRUE) { } else { echo "ERROR" . $sql18 . "<br>" . $conn->error; }
                    
                    $sql19 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke-width', '5', '$date')";
                    if ($con->query($sql19) === TRUE) { } else { echo "ERROR" . $sql19 . "<br>" . $conn->error; }
                    
            } elseif($layer_type_id == 2) {
                    
                    $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'width', 'auto', '$date')";
                    if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
                    
                    $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
                    if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                    
                    $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
                    if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
                    
                    $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
                    if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
                    
                    $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'vertical-align', 'super', '$date')";
                    if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }
                    
                    $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
                    if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
                    
                    $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
                    if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }
                    
                    $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
                    if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
                    
                    $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
                    if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
                    
                    $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'border', '6px dashed transparent', '$date')";
                    if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                    
                    $sql10_1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
                    if ($con->query($sql10_1) === TRUE) { } else { echo "ERROR" . $sql10_1 . "<br>" . $conn->error; }
                
                //-----------------------------------------------------------------------------------------------    
                    
                    $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'height', '220px', '$date')";
                    if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
                    
                    $sql12 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'width', '220px', '$date')";
                    if ($con->query($sql12) === TRUE) { } else { echo "ERROR" . $sql12 . "<br>" . $conn->error; }
                    
                //-----------------------------------------------------------------------------------------------
                    
                    $sql13 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'x', '10', '$date')";
                    if ($con->query($sql13) === TRUE) { } else { echo "ERROR" . $sql13 . "<br>" . $conn->error; }
                    
                    $sql14 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'y', '10', '$date')";
                    if ($con->query($sql14) === TRUE) { } else { echo "ERROR" . $sql14 . "<br>" . $conn->error; }
                    
                    $sql13a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'rx', '30', '$date')";
                    if ($con->query($sql13a) === TRUE) { } else { echo "ERROR" . $sql13a . "<br>" . $conn->error; }
                    
                    $sql14a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'ry', '30', '$date')";
                    if ($con->query($sql14a) === TRUE) { } else { echo "ERROR" . $sql14a . "<br>" . $conn->error; }
                    
                    $sql15 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'width', '200px', '$date')";
                    if ($con->query($sql15) === TRUE) { } else { echo "ERROR" . $sql15 . "<br>" . $conn->error; }
                    
                    $sql16 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'height', '200px', '$date')";
                    if ($con->query($sql16) === TRUE) { } else { echo "ERROR" . $sql16 . "<br>" . $conn->error; }
                    
                    $sql17 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke', 'black', '$date')";
                    if ($con->query($sql17) === TRUE) { } else { echo "ERROR" . $sql17 . "<br>" . $conn->error; }
                    
                    $sql18 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'fill', 'transparent', '$date')";
                    if ($con->query($sql18) === TRUE) { } else { echo "ERROR" . $sql18 . "<br>" . $conn->error; }
                    
                    $sql19 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke-width', '5', '$date')";
                    if ($con->query($sql19) === TRUE) { } else { echo "ERROR" . $sql19 . "<br>" . $conn->error; }
                
            } elseif($layer_type_id == 3) {
                
                    $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'width', 'auto', '$date')";
                    if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
                    
                    $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
                    if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                    
                    $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
                    if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
                    
                    $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
                    if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
                    
                    $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'vertical-align', 'super', '$date')";
                    if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }
                    
                    $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
                    if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
                    
                    $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
                    if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }
                    
                    $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
                    if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
                    
                    $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
                    if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
                    
                    $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'border', '6px dashed transparent', '$date')";
                    if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                    
                    $sql10_1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
                    if ($con->query($sql10_1) === TRUE) { } else { echo "ERROR" . $sql10_1 . "<br>" . $conn->error; }
                
                //-----------------------------------------------------------------------------------------------    
                    
                    $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'height', '220px', '$date')";
                    if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
                    
                    $sql12 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'width', '220px', '$date')";
                    if ($con->query($sql12) === TRUE) { } else { echo "ERROR" . $sql12 . "<br>" . $conn->error; }
                    
                //-----------------------------------------------------------------------------------------------
                    
                    $sql13 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'cx', '50%', '$date')";
                    if ($con->query($sql13) === TRUE) { } else { echo "ERROR" . $sql13 . "<br>" . $conn->error; }
                    
                    $sql14 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'cy', '50%', '$date')";
                    if ($con->query($sql14) === TRUE) { } else { echo "ERROR" . $sql14 . "<br>" . $conn->error; }
                    
                    $sql13a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'r', '100', '$date')";
                    if ($con->query($sql13a) === TRUE) { } else { echo "ERROR" . $sql13a . "<br>" . $conn->error; }

                    $sql17 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke', 'black', '$date')";
                    if ($con->query($sql17) === TRUE) { } else { echo "ERROR" . $sql17 . "<br>" . $conn->error; }
                    
                    $sql18 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'fill', 'transparent', '$date')";
                    if ($con->query($sql18) === TRUE) { } else { echo "ERROR" . $sql18 . "<br>" . $conn->error; }
                    
                    $sql19 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke-width', '5', '$date')";
                    if ($con->query($sql19) === TRUE) { } else { echo "ERROR" . $sql19 . "<br>" . $conn->error; }
                
            } elseif($layer_type_id == 4) {
                
                    $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'width', 'auto', '$date')";
                    if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
                    
                    $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
                    if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                    
                    $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
                    if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
                    
                    $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
                    if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
                    
                    $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'vertical-align', 'super', '$date')";
                    if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }
                    
                    $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
                    if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
                    
                    $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
                    if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }
                    
                    $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
                    if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
                    
                    $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
                    if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
                    
                    $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'border', '6px dashed transparent', '$date')";
                    if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                
                    $sql10_1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
                    if ($con->query($sql10_1) === TRUE) { } else { echo "ERROR" . $sql10_1 . "<br>" . $conn->error; }
                
                //-----------------------------------------------------------------------------------------------    
                    
                    $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'height', '220px', '$date')";
                    if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
                    
                    $sql12 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'width', '220px', '$date')";
                    if ($con->query($sql12) === TRUE) { } else { echo "ERROR" . $sql12 . "<br>" . $conn->error; }
                    
                //-----------------------------------------------------------------------------------------------
                    
                    $sql13 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'cx', '50%', '$date')";
                    if ($con->query($sql13) === TRUE) { } else { echo "ERROR" . $sql13 . "<br>" . $conn->error; }
                    
                    $sql14 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'cy', '50%', '$date')";
                    if ($con->query($sql14) === TRUE) { } else { echo "ERROR" . $sql14 . "<br>" . $conn->error; }
                    
                    $sql13a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'rx', '100', '$date')";
                    if ($con->query($sql13a) === TRUE) { } else { echo "ERROR" . $sql13a . "<br>" . $conn->error; }

                    $sql14a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'ry', '20', '$date')";
                    if ($con->query($sql14a) === TRUE) { } else { echo "ERROR" . $sql14a . "<br>" . $conn->error; }

                    $sql17 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke', 'black', '$date')";
                    if ($con->query($sql17) === TRUE) { } else { echo "ERROR" . $sql17 . "<br>" . $conn->error; }
                    
                    $sql18 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'fill', 'transparent', '$date')";
                    if ($con->query($sql18) === TRUE) { } else { echo "ERROR" . $sql18 . "<br>" . $conn->error; }
                    
                    $sql19 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke-width', '5', '$date')";
                    if ($con->query($sql19) === TRUE) { } else { echo "ERROR" . $sql19 . "<br>" . $conn->error; }
                
            } elseif($layer_type_id == 5) {
                
                    $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'width', 'auto', '$date')";
                    if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
                    
                    $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
                    if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
                    
                    $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
                    if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
                    
                    $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
                    if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
                    
                    $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'vertical-align', 'super', '$date')";
                    if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }
                    
                    $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
                    if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
                    
                    $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
                    if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }
                    
                    $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
                    if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
                    
                    $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
                    if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
                    
                    $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'border', '6px dashed transparent', '$date')";
                    if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                    
                    $sql10_1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
                    if ($con->query($sql10_1) === TRUE) { } else { echo "ERROR" . $sql10_1 . "<br>" . $conn->error; }
                
                //-----------------------------------------------------------------------------------------------    
                    
                    $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'height', '220px', '$date')";
                    if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
                    
                    $sql12 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'child', 'width', '220px', '$date')";
                    if ($con->query($sql12) === TRUE) { } else { echo "ERROR" . $sql12 . "<br>" . $conn->error; }
                    
                //-----------------------------------------------------------------------------------------------
                    
                    $sql13 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'x1', '10', '$date')";
                    if ($con->query($sql13) === TRUE) { } else { echo "ERROR" . $sql13 . "<br>" . $conn->error; }
                    
                    $sql14 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'x2', '200', '$date')";
                    if ($con->query($sql14) === TRUE) { } else { echo "ERROR" . $sql14 . "<br>" . $conn->error; }
                    
                    $sql13a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'y1', '10', '$date')";
                    if ($con->query($sql13a) === TRUE) { } else { echo "ERROR" . $sql13a . "<br>" . $conn->error; }

                    $sql14a = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'y2', '200', '$date')";
                    if ($con->query($sql14a) === TRUE) { } else { echo "ERROR" . $sql14a . "<br>" . $conn->error; }

                    $sql17 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke', 'black', '$date')";
                    if ($con->query($sql17) === TRUE) { } else { echo "ERROR" . $sql17 . "<br>" . $conn->error; }

                    $sql19 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                             VALUES ('$last_id', 'grandchild', 'stroke-width', '5', '$date')";
                    if ($con->query($sql19) === TRUE) { } else { echo "ERROR" . $sql19 . "<br>" . $conn->error; }
                
            } else { }
            
        } elseif($layer == 'background'){
            
            $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'width', '100%', '$date')";
            if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
            
            $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'height', '100%', '$date')";
            if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
            
            $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
            if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
            
            $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
            if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }

            $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
            if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }

            $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'top', '0px', '$date')";
            if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
            
            $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'left', '0px', '$date')";
            if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
            
            $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
            if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
            
        } elseif($layer == 'font'){
            
            $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'width', '450px', '$date')";
            if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
            
            $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'height', '130px', '$date')";
            if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
            
            $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
            if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
            
            $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'padding', '0px 18px 20px 4px', '$date')";
            if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }
            
            $sql5 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'text-align', 'center', '$date')";
            if ($con->query($sql5) === TRUE) { } else { echo "ERROR" . $sql5 . "<br>" . $conn->error; }

            $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
            if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }
            
            $sql7 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'border-radius', '5px', '$date')";
            if ($con->query($sql7) === TRUE) { } else { echo "ERROR" . $sql7 . "<br>" . $conn->error; }

            $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'top', '40%', '$date')";
            if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
            
            $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'left', '40%', '$date')";
            if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
            
            $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'margin-bottom', '5px', '$date')";
            if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
            
            $sql11 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'min-height', 'fit-content', '$date')";
            if ($con->query($sql11) === TRUE) { } else { echo "ERROR" . $sql11 . "<br>" . $conn->error; }
            
            $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
            if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
            
            
        } else { 
            
            $sql1 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'width', '40%', '$date')";
            if ($con->query($sql1) === TRUE) { } else { echo "ERROR" . $sql1 . "<br>" . $conn->error; }
            
            $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'height', 'auto', '$date')";
            if ($con->query($sql2) === TRUE) { } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
            
            $sql3 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'display', 'inline-block', '$date')";
            if ($con->query($sql3) === TRUE) { } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }
            
            $sql4 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'padding', '0px 0px 5px', '$date')";
            if ($con->query($sql4) === TRUE) { } else { echo "ERROR" . $sql4 . "<br>" . $conn->error; }

            $sql6 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'position', 'absolute', '$date')";
            if ($con->query($sql6) === TRUE) { } else { echo "ERROR" . $sql6 . "<br>" . $conn->error; }

            $sql8 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'top', '30%', '$date')";
            if ($con->query($sql8) === TRUE) { } else { echo "ERROR" . $sql8 . "<br>" . $conn->error; }
            
            $sql9 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'left', '30%', '$date')";
            if ($con->query($sql9) === TRUE) { } else { echo "ERROR" . $sql9 . "<br>" . $conn->error; }
            
            $sql10 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
                     VALUES ('$last_id', 'parent', 'transform', 'rotate(0deg)', '$date')";
            if ($con->query($sql10) === TRUE) { } else { echo "ERROR" . $sql10 . "<br>" . $conn->error; }
                    
            
        } 
        
        
        echo $last_id; 
        
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }