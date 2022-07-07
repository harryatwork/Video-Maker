<?php include("../db.php"); 
    
	$content = $con->real_escape_string($_POST['content']);
    $layer_id_of_layer_title = $_POST['layer_id_of_layer_title'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE video_maker_layers SET content = '$content'
	        WHERE id = '$layer_id_of_layer_title'";
    
    if ($con->query($sql) === TRUE) {
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }