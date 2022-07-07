<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $opacity = $_POST['opacity'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_opacity = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'opacity'";
	$result_opacity = $con->query($sql_opacity);
	if ($result_opacity->num_rows > 0) {   
	while($row_opacity = $result_opacity->fetch_assoc()) { 

        $sql = "UPDATE video_maker_styles SET value = '$opacity'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'opacity'";
    
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', 'opacity', '$opacity', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}
            
