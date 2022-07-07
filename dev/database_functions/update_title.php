<?php include("../db.php"); 
    
	$v_m_id = $_POST['v_m_id'];
    $v_m_title = $con->real_escape_string($_POST['v_m_title']);
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    
    $sql = "UPDATE video_maker SET title = '$v_m_title'
	        WHERE id = '$v_m_id'";
    
    if ($con->query($sql) === TRUE) {
       
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
    
    