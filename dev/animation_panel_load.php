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

<div id="timeline_dragger_div" style="height: 100%;margin-left: 11%;display:none;">
    <span id="timeline_dragger" style="width: 4px;height: 74%;background: #6a6a6a;z-index: 9;position: absolute;cursor:pointer;">
        <span style="width: 20px;height: 20px;background: #6a6a6a;position: absolute;margin-left: -8px;"></span>
        <span style="width: 14px;height: 14px;background: #6a6a6a;position: absolute;margin-left: -5px;margin-top: 13px;transform: rotate(45deg);"></span>
    </span>
</div>

<div class="timeline_secs" style="height:20px;width:100%;margin-top: -8px;margin-bottom: 6px;">
    <p class="animation_secs">| <span class="animation_secs_span">&nbsp;</span></p>
<?php for($scene_lenght = 0; $scene_lenght<=$scene_duration; $scene_lenght++) { ?>
        <p class="animation_secs">| <span class="animation_secs_span"><?= $scene_lenght; ?> Sec</span></p>
<?php } ?>
</div>

<div class="animation_drag_area" style="width:<?= $animation_drag_area_width; ?>px;">
    
    <?php
        $sql_work_layers = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id'";
        $result_work_layers = $conn->query($sql_work_layers);
        if ($result_work_layers->num_rows > 0) {   
        while($row_work_layers = $result_work_layers->fetch_assoc()) { 
            $id_work_layers = $row_work_layers["id"];

        $sql_draggable_layers = "SELECT * FROM video_maker_draggable_layers WHERE main_layer_id = '$id_work_layers' AND layer != 'BGM' ORDER BY id DESC";
        $result_draggable_layers = $conn->query($sql_draggable_layers);
        if ($result_draggable_layers->num_rows > 0) {   
        while($row_draggable_layers = $result_draggable_layers->fetch_assoc()) { 
            $draggable_layers_id = $row_draggable_layers["id"];
            $draggable_main_layers_id = $row_draggable_layers["main_layer_id"];
            $draggable_layers_title = $row_draggable_layers["title"];
            $draggable_layers_layer_count = $row_draggable_layers["layer_count"];
            
            $sql_draggable_layers_animation = "SELECT * FROM video_maker_layer_animations WHERE layer_id = '$draggable_main_layers_id'";
            $result_draggable_layers_animation = $conn->query($sql_draggable_layers_animation);
            if ($result_draggable_layers_animation->num_rows > 0) {   
            while($row_draggable_layers_animation = $result_draggable_layers_animation->fetch_assoc()) { 
                $draggable_layers_animation_left = $row_draggable_layers_animation["margin_left"];
                $draggable_layers_animation_width = $row_draggable_layers_animation["width"];
                
            
    ?>
        <div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_<?= $draggable_layers_layer_count; ?>">
            <div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                <span data-draggableid="<?= $draggable_layers_id; ?>" data-mainlayerid="<?= $draggable_main_layers_id; ?>" data-mainlayercount="<?= $draggable_layers_layer_count; ?>" style="font-weight: 600; font-size: 17px;"><?= $draggable_layers_title; ?> <span id="layer_title" style="font-weight:normal;"> </span></span>
            </div>
            <div style="height: 34px;display:inline-block;width: 100%;" class="draggable_layer_containment_indi_common" id="layer_dragger_div_<?= $draggable_layers_layer_count; ?>">
                <div id="layer_dragger_<?= $draggable_layers_layer_count; ?>" data-mainlayeriddraggable="<?= $draggable_main_layers_id; ?>" data-animationdraggablelayercount="<?= $draggable_layers_layer_count; ?>" class="draggable_layer_indi_common" style="background: #d5e8ff;min-height:40px;height: 40px;width:<?= $draggable_layers_animation_width; ?>px;left:<?= $draggable_layers_animation_left; ?>;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                </div>
            </div>
        </div>
    <?php
            } } else { } 
        } } else { }
    } } else { } 
    ?>
        
    <?php
        $sql_layers_legendary_bgm = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND layer = 'BGM' LIMIT 1";
        $result_layers_legendary_bgm = $conn->query($sql_layers_legendary_bgm);
        if ($result_layers_legendary_bgm->num_rows > 0) {   
        while($row_layers_legendary_bgm = $result_layers_legendary_bgm->fetch_assoc()) { 
            $id_layers_legendary_bgm = $row_layers_legendary_bgm["id"];
            $title_layers_legendary_bgm = $row_layers_legendary_bgm["title"];
            $layer_id_layers_legendary_bgm = $row_layers_legendary_bgm["layer_id"];
            $layer_count_layers_legendary_bgm = $row_layers_legendary_bgm["layer_count"];
            $layer_layers_legendary_bgm = $row_layers_legendary_bgm["layer"];
            $status_layers_legendary_bgm = true;
            
            $sql_layers_legendary_bgm_draggable = "SELECT * FROM video_maker_draggable_layers WHERE main_layer_id = '$id_layers_legendary_bgm'";
            $result_layers_legendary_bgm_draggable = $conn->query($sql_layers_legendary_bgm_draggable);
            if ($result_layers_legendary_bgm_draggable->num_rows > 0) {   
            while($row_layers_legendary_bgm_draggable = $result_layers_legendary_bgm_draggable->fetch_assoc()) { 
                $layer_length_legendary_bgm = $row_layers_legendary_bgm_draggable["layer_length"];
            } } else { } 
            
        } } else { } 
    ?>
        
        <div class="animation_drag_area_indi_layer" id="bgm_work_area">
            <div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                <span style="font-weight: 600; font-size: 17px;">BGM  <span id="bgm_audio_title" style="font-weight:normal;"> </span></span>
                <span id="bgm_audio_choose" style="<?php if($status_layers_legendary_bgm) { ?> display:none; <?php } else { } ?>font-size: 20px;font-weight: normal;margin-left: 160px;">Drag & Drop an Audio file</span>
                <!--<span id="bgm_audio_btn_remove" style="padding: 3px; border-radius: 4px;float: right;cursor:pointer;display:none;">-->
                <!--    <i class="fa fa-trash" aria-hidden="true" style="font-size: 24px;"></i>-->
                <!--</span>-->
            </div>
            <div style="height: 40px;display:inline-block;width: auto;<?php if($status_layers_legendary_bgm) { ?> display:inline-block; <?php } else { ?> display:none; <?php } ?>" id="bgm_audio_div">
                <div id="bgm_audio" style="width:<?= $layer_length_legendary_bgm; ?>px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                    <img src="images-main/audio/0.jpg" alt="" style="height: 36px;object-fit:fill;width:100%;cursor:pointer;" />
                </div>
            </div>
        </div>
    <!-- 
        <div class="animation_drag_area_indi_layer" id="voice_work_area">
            <div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                <span  style="font-weight: 600; font-size: 17px;">Voice</span>
                <span id="speech_audio_choose" style="font-size: 20px;font-weight: normal;margin-left: 155px;">Drag & Drop an Audio file</span>
                <span id="speech_audio_btn_remove" style="padding: 3px; border-radius: 4px;float: right;cursor:pointer;display:none;">
                    <i class="fa fa-trash" aria-hidden="true" style="font-size: 24px;"></i>
                </span>
            </div>
            <div style="height: 40px;display:inline-block;width: auto;display:none;" id="speech_audio_div">
                <div id="speech_audio" style="width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                    <img src="images-main/audio/0.jpg" alt=""  style="height: 36px;object-fit:fill;width:100%;cursor:pointer;" />
                </div>
            </div>
        </div>
    -->

    

</div>