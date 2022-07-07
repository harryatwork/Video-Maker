<?php include("../db.php"); 
    
	$layer_title = $con->real_escape_string($_POST['layer_title']);
    $layer_id_of_layer_title = $_POST['layer_id_of_layer_title'];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_layers SET title = '$layer_title'
	        WHERE id = '$layer_id_of_layer_title'";
    
    if ($con->query($sql) === TRUE) {
       
       $sql2 = "UPDATE video_maker_draggable_layers SET title = '$layer_title'
	        WHERE main_layer_id = '$layer_id_of_layer_title'";
    
        if ($con->query($sql2) === TRUE) {
           
        } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }