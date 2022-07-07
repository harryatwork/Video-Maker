<?php include("../db.php"); 
    
	$u_id = $_POST['u_id'];
	$v_m_id = $_POST['v_m_id'];
    $image_cropped = $_POST['image_cropped'];
    $image_data_myattr = $_POST['old_layer_id'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    
    
    define('UPLOAD_DIR', '../images-main/images/');
    $image_parts = explode(";base64,", $_POST['image_cropped']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file_image_name = round(microtime(true)) . uniqid() . '.png';
    $file_image = UPLOAD_DIR . $file_image_name;

    if(file_put_contents($file_image, $image_base64)) {;

        $sql = "INSERT INTO video_maker_images (u_id, v_m_id, title, date)
        VALUES ('$u_id', '$v_m_id', '$file_image_name', '$date')";
        if ($con->query($sql) === TRUE) { 
            $last_id = $con->insert_id;
            
            $sqls = "UPDATE video_maker_layers SET layer_id = '$last_id'
	        WHERE id = '$image_data_myattr'";
            if ($con->query($sqls) === TRUE) {
               
               echo $file_image_name;
               
            } else { echo "ERROR" . $sqls . "<br>" . $con->error; }
            
        } else { echo "ERROR" . $sql . "<br>" . $con->error; }
    
    }
    
    