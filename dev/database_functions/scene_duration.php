<?php include("../db.php"); 
    
	$scene_id = $_POST['scene_id'];
    $project_id = $_POST['project_id'];
    $scene_duration = $_POST['scene_duration'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_scene SET duration = '$scene_duration'
	        WHERE id = '$scene_id' AND p_id = '$project_id'";
    
    if ($con->query($sql) === TRUE) {
    //   echo $scene_id;
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }