<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $animation = $_POST['animation'];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_animation = "SELECT * FROM video_maker_layer_animations WHERE layer_id = '$layer_id'";
	$result_animation = $con->query($sql_animation);
	if ($result_animation->num_rows > 0) {   
	while($row_animation = $result_animation->fetch_assoc()) { 

        $sql = "UPDATE video_maker_layer_animations SET animation = '$animation'
	            WHERE layer_id = '$layer_id'";
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_layer_animations (layer_id, type, animation, date)
            VALUES ('$layer_id', '$type', '$animation', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}
        