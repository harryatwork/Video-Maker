<?php include("../db.php"); 

	$scene_id = $_POST['scene_id'];
    $project_id = $_POST['project_id'];
    $scene_background = $_POST['scene_background'];

    $sql = "UPDATE video_maker_scene SET background = '$scene_background'
        WHERE id = '$scene_id' AND p_id = '$project_id'";

    if ($con->query($sql) === TRUE) {
       echo 'updated';
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    