<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $value = $_POST['value'];
    $style = $_POST['style'];
    
    if($style == 'border-width'){
        $final_value = $value.'px';
    } elseif($style == 'border-radius') {
        $final_value = $value.'px';
    } elseif($style == 'border-style') {
        $final_value = $value;
    } elseif($style == 'border-color') {
        $final_value = $value;
    } else { } 
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_border_style = "SELECT * FROM video_maker_styles WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$style'";
	$result_border_style = $con->query($sql_border_style);
	if ($result_border_style->num_rows > 0) {   
	while($row_border_style = $result_border_style->fetch_assoc()) { 

        $sql = "UPDATE video_maker_styles SET value = '$final_value'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$style'";
    
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
	} } else {
            
        $sql2 = "INSERT INTO video_maker_styles (layer_id, type, style, value, date)
            VALUES ('$layer_id', '$type', '$style', '$final_value', '$date')";
        if ($con->query($sql2) === TRUE) { 
            echo 'inserted';
        } else { } 
        
	}
            