<?php include("../db.php"); 

	$layer = $_POST['layer'];
    $title = $_POST['title'];
    $layer_count = $_POST['layer_count'];
    $project_id = $_POST['project_id'];
    $u_id = $_POST['u_id'];
    $main_layer_id = $_POST['main_layer_id'];
    
    if(isset($_POST['layer_length'])) {
        $layer_length = $_POST['layer_length'];
    } else {
        $layer_length = 0;
    }

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

        $sql2 = "INSERT INTO video_maker_draggable_layers (main_layer_id, p_id, u_id, layer, title, layer_count, layer_length, date)
            VALUES ('$main_layer_id','$project_id', '$u_id', '$layer', '$title', '$layer_count', '$layer_length', '$date')";
        if ($con->query($sql2) === TRUE) { 
            $last_id = $con->insert_id;
            
            $sql3 = "INSERT INTO video_maker_layer_animations (layer_id, type, animation, date)
            VALUES ('$main_layer_id','$layer', 'none',  '$date')";
            if ($con->query($sql3) === TRUE) { 
                
                echo $last_id;
                
            } else { } 

        } else { } 
            