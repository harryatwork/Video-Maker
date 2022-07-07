<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $value = $_POST['blur'];
    $property = $_POST['property'];
    
    if($property == 'blur'){
        $final_value = 'blur('.$value.'px)';
    } elseif($property == 'brightness') {
        $final_value = 'brightness('.$value.')';
    } elseif($property == 'contrast') {
        $final_value = 'contrast('.$value.')';
    } elseif($property == 'grayscale') {
        $final_value = 'grayscale('.$value.')';
    } elseif($property == 'saturate') {
        $final_value = 'saturate('.$value.')';
    } else { } 
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_opacity = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'filter'";
	$result_opacity = $con->query($sql_opacity);
	if ($result_opacity->num_rows > 0) {   
	while($row_opacity = $result_opacity->fetch_assoc()) { 

        $sql = "UPDATE video_maker_styles SET value = '$final_value'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = 'filter'";
    
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', 'filter', '$final_value', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}
            
