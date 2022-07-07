<?php include("../db.php"); 
    
	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $top = $_POST['top'];
    $top = $top.'px';
    $left = $_POST['left'];
    $left = $left.'px';
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_styles SET value = '$top'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'top'";
    
    if ($con->query($sql) === TRUE) {
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
    $sql2 = "UPDATE video_maker_styles SET value = '$left'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'left'";
    
    if ($con->query($sql2) === TRUE) {
       
    } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }