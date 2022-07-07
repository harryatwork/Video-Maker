<?php include("../db.php"); 
    
	$layer_id = $_POST['layer_id'];
	$data_layer_id = $_POST['data_layer_id'];
	$project_id = $_POST['project_id'];
	
    $sql = "DELETE FROM video_maker_layers WHERE id = '$data_layer_id'";
    if ($con->query($sql) === TRUE) { 
        
        $sql_1 = "DELETE FROM video_maker_draggable_layers WHERE main_layer_id = '$data_layer_id'";
        if ($con->query($sql_1) === TRUE) { 
        
            $sql2 = "DELETE FROM video_maker_styles WHERE layer_id = '$data_layer_id'";
            if ($con->query($sql2) === TRUE) { 
                
                $sql3 = "DELETE FROM video_maker_layer_animations WHERE layer_id = '$data_layer_id'";
                if ($con->query($sql3) === TRUE) { 
                    
                    echo $data_layer_id.'-'.$project_id; 
                    
                } else { echo "ERROR" . $sql3 . "<br>" . $conn->error; }

            } else { echo "ERROR" . $sql2 . "<br>" . $conn->error; }
        
        } else { echo "ERROR" . $sql_1 . "<br>" . $conn->error; }
        
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }