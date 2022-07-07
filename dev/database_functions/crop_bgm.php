<?php include("../db.php"); 

	$draggable_layer_id = $_POST['draggable_layer_id'];
    $bgm_start_time = $_POST['bgm_start_time'];
    $bgm_end_time = $_POST['bgm_end_time'];
    
    $bgm_new_length = ($bgm_end_time - $bgm_start_time)*207;
    
    $sql = "UPDATE video_maker_draggable_layers SET start_time_sec = '$bgm_start_time', end_time_sec = '$bgm_end_time', layer_length = '$bgm_new_length'
            WHERE id = '$draggable_layer_id'";
    if ($con->query($sql) === TRUE) {
        echo $bgm_new_length;
    } else { echo "ERROR" . $sql . "<br>" . $con->error; }