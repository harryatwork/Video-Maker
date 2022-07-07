<?php include("../db.php"); 
    
	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $height = $_POST['height'];
    // $height = $height.'px';
    $width = $_POST['width'];
    // $width = $width.'px';
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_styles SET value = '$width'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'width'";
    
    if ($con->query($sql) === TRUE) {
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
    $sql2 = "UPDATE video_maker_styles SET value = '$height'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'height'";
    
    if ($con->query($sql2) === TRUE) {
       
    } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }