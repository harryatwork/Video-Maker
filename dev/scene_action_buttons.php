<?php include("db.php"); 
      $v_m_id = $_POST["v_m_id"];
	  $scene_id = $_POST["scene_id"];

        $sql_scene = "SELECT * FROM video_maker_scene WHERE id = '$scene_id'";
        $result_scene = $conn->query($sql_scene);
        if ($result_scene->num_rows > 0) {   
        while($row_scene = $result_scene->fetch_assoc()) { 
            $scene_background = $row_scene["background"];
            $scene_duration = $row_scene["duration"];
            $animation_drag_area_width = ($scene_duration*197)+77;
        } } else { } 
?>

<div class="row">
    <div class="col-3 col-sm-3 col-md-5 ">
        <div class="msc-slides-buttons"> 
        </div>
    </div>
        
        <span id="slide_timeline_btn" class="app-container btn-outline-primary" style="font-size: 14px;padding: 3px 10px 3px 10px;cursor: pointer;width: auto;border: 1px solid #007bff;border-radius: 7px;margin: 7px 0 7px 0;">Animation Timeline</span>
        
    <div class="col-6 col-sm-6 col-md-4 msc-slides-buttons-container">
        <div class="msc-slides-buttons"> 
            <span class="divider-vert"></span> 
            <button id="slide_time_minus" type="button" class="btn btn-outline-danger button-remove-slide" data-toggle="tooltip" title="Remove Time" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="fa fa-minus" aria-hidden="true"></i> </button> 
            <span id="slide_time" style="border: 1px solid gray;padding: 0px 7px 3px 7px;font-size: 13px;border-radius: 3px;"><?= $scene_duration; ?></span>
            <button id="slide_time_plus" type="button" class="btn btn-outline-primary button-add-slide" data-toggle="tooltip" title="Add Time" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-plus3"></i> </button>
        </div>
    </div>
</div>