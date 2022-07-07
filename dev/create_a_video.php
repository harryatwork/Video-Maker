<?php include('../db.php'); 

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET["u_id"])) { 

    $u_id = $_GET['u_id'];
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');
    
        $sql = "INSERT INTO video_maker (u_id, date)
                 VALUES ('$u_id', '$date')";
                 if ($conn->query($sql) === TRUE) { 
                     $last_id = $conn->insert_id;
                     
                     $sql2 = "INSERT INTO video_maker_scene (u_id, p_id, date)
                         VALUES ('$u_id', '$last_id', '$date')";
                         if ($conn->query($sql2) === TRUE) { 
                             $last_scene_id = $conn->insert_id;
                    
                             header("Location: player_id_set?id=$last_id&scene_id=$last_scene_id"); 
                     
                         } else {  echo "ERROR" . $sql2 . "<br>" . $conn->error; }  
                     
                 } else {  echo "ERROR" . $sql . "<br>" . $conn->error; }  
                 
} else { } 

?>