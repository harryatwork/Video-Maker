<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $property = $_POST['property'];
    $value = $_POST['value'];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_box_shadow = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$property'";
	$result_box_shadow = $con->query($sql_box_shadow);
	if ($result_box_shadow->num_rows > 0) {   
	while($row_box_shadow = $result_box_shadow->fetch_assoc()) { 
	    
        $sql = "UPDATE video_maker_styles SET value = '$value', date = '$date'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$property'";
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', '$property', '$value', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}