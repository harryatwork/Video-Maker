<?php include("../db.php"); 
    
	$scene_id = $_POST['scene_id'];
	
    $sql_0 = "DELETE FROM video_maker_scene WHERE id = '$scene_id'";
    if ($con->query($sql_0) === TRUE) { 
    
        $sql_layers = "SELECT * FROM video_maker_layers WHERE scene_id = '$scene_id'";
        $result_layers = $conn->query($sql);
        if($result_layers->num_rows > 0){ 
        while($rows_layers = $result_layers->fetch_assoc()) {
            $data_layer_id = $rows_layers["id"];
        
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

        } } else { }

    } else { echo "ERROR" . $sql_0 . "<br>" . $conn->error; }