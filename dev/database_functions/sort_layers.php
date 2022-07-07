<?php include('../db.php'); 

 $sort_layer = $_POST['sort_layer'];
 $sort_layer_ids = $_POST['sort_layer_ids'];
 $project_id = $_POST['project_id'];
 
 $sort_layer_count = count($sort_layer);

$sorter = $sort_layer_count;

foreach ($sort_layer as $index => $sort_layers) {
    
    $sort_layers_refined = str_replace("layer_tab_layer","",$sort_layers);
    $sort_layer_id = $sort_layer_ids[$index];

  $sql = "UPDATE video_maker_layers SET layer_count = '$sorter'
	        WHERE id = '$sort_layer_id' AND p_id = '$project_id'";
    
  if ($con->query($sql) === TRUE) { } else { echo "ERROR" . $sql . "<br>" . $conn->error; }
   
   $sorter--;
}


?>