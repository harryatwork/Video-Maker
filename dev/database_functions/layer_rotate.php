<?php include("../db.php"); 
    
	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $rotate_deg = $_POST['rotate_deg'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_styles SET value = '$rotate_deg'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'transform'";
    
    if ($con->query($sql) === TRUE) {
       echo $rotate_deg;
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }