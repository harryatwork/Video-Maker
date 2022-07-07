<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $style = $_POST['style'];
    $value = $_POST['value'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_style = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$style'";
	$result_style = $con->query($sql_style);
	if ($result_style->num_rows > 0) {   
	while($row_style = $result_style->fetch_assoc()) { 

        $sql = "UPDATE video_maker_styles SET value = '$value'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$style'";
    
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', '$style', '$value', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}
            
