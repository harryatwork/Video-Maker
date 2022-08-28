<?php include("../db.php"); 
    
	$layer_id = $_POST['layer_id'];
    $volume = $_POST['volume'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    
    $sql = "UPDATE video_maker_draggable_layers SET volume = '$volume'
	        WHERE main_layer_id = '$layer_id'";
    
    if ($con->query($sql) === TRUE) {
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
    