<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $status = $_POST['status'];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    if($status == 'yes') {
        $value = '1px solid';
    } elseif($status == 'no') {
        $value= 'none';
    } else { }

    $sql_border = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'border'";
	$result_border = $con->query($sql_border);
	if ($result_border->num_rows > 0) {   
	while($row_border = $result_border->fetch_assoc()) { 
	    
        $sql = "UPDATE video_maker_styles SET value = '$value', date = '$date'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'border'";
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', 'border', '$value', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}