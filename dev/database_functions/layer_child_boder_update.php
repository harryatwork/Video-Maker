<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $type = $_POST['type'];
    $property = $_POST['property'];
    $value = $_POST['value'];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

        $sql = "UPDATE video_maker_styles SET value = '$value', date = '$date'
	        WHERE layer_id = '$layer_id' AND type = '$type' AND style = '$property'";
        if ($con->query($sql) === TRUE) {
           echo 'updated';
        } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
