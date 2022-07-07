<?php include("../db.php"); 
    
	$u_id = $_POST['u_id'];
	$v_m_id = $_POST['v_m_id'];
    $newfilename = $_FILES['video_upload_input_file']['name'];
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    
    $sql = "INSERT INTO video_maker_videos (u_id, v_m_id, title, date)
    VALUES ('$u_id', '$v_m_id', '$newfilename', '$date')";
    
    if ($con->query($sql) === TRUE) {
        
        $target_dir = "../images-main/videos/";
          
        $target_file2 = $target_dir . basename($_FILES["video_upload_input_file"]["name"]);
        $uploadOk2 = 1;
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        
        if ($uploadOk2 == 0) {
            echo 'nope0';
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            $temp_newfilename = $newfilename;
            if (move_uploaded_file($_FILES["video_upload_input_file"]["tmp_name"], $target_dir .$temp_newfilename)) {
                
                echo 'yep';
                
            } else { echo 'nope1'; } 
        }
        
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
    