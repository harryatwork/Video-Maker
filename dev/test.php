<?php include("db.php"); ?>

<span id="timer"></span>

<div>
<?php

    $main_array_start;
    $main_array_end;
    
    $sql_slide_preview_work_layers = "SELECT * FROM video_maker_layers WHERE p_id = '1'";
	$result_slide_preview_work_layers = $conn->query($sql_slide_preview_work_layers);
	if ($result_slide_preview_work_layers->num_rows > 0) {   
	while($row_slide_preview_work_layers = $result_slide_preview_work_layers->fetch_assoc()) { 
	    $id_slide_preview_work_layers = $row_slide_preview_work_layers["id"];
	    $title_slide_preview_work_layers = $row_slide_preview_work_layers["title"];
	    
	    $child_array_start;
	    $child_array_end;
	    
	    $sql_slide_preview_work_layers_animation = "SELECT * FROM video_maker_layer_animations WHERE layer_id = '$id_slide_preview_work_layers'";
    	$result_slide_preview_work_layers_animation = $conn->query($sql_slide_preview_work_layers_animation);
    	if ($result_slide_preview_work_layers_animation->num_rows > 0) {   
    	while($row_slide_preview_work_layers_animation = $result_slide_preview_work_layers_animation->fetch_assoc()) { 
    	    $id_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["id"];
    	    $start_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["start"];
    	    $end_slide_preview_work_layers_animation = $row_slide_preview_work_layers_animation["end"];
    	    
    	    $child_array_start = '['.$id_slide_preview_work_layers.', '.$start_slide_preview_work_layers_animation.'], ';
    	    $main_array_start = $main_array_start.$child_array_start;
    	    
    	    $child_array_end = '['.$id_slide_preview_work_layers.', '.$end_slide_preview_work_layers_animation.'], ';
    	    $main_array_end = $main_array_end.$child_array_end;
    	    
?>
    	    
    <p><?= $title_slide_preview_work_layers; ?> - 
        <span class="php_start"><?= $start_slide_preview_work_layers_animation; ?></span> - 
        <span class="php_end"><?= $end_slide_preview_work_layers_animation; ?></span>
    </p>
    <p>From JS - 
        <span class="php_start" data-startlayerid="JS<?= $id_slide_preview_work_layers; ?>"></span> - 
        <span class="php_end" data-endlayerid="JS<?= $id_slide_preview_work_layers; ?>"></span>
    </p>
    	    
<?php
    	} } else { }
    	
	} } else { }
	
	$main_array_start = substr($main_array_start, 0, -2);
	$main_array_start = '['.$main_array_start.']';
// 	echo $main_array_start;

    $main_array_end = substr($main_array_end, 0, -2);
	$main_array_end = '['.$main_array_end.']';
// 	echo $main_array_end;
	
?>

<input type="hidden" class="main_array_start" value="<?= $main_array_start; ?>" />
<input type="hidden" class="main_array_end" value="<?= $main_array_end; ?>" />

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    var initial = 1000;
    var regex = /([^\[\],\s]+)/g;
    
    var main_array_start = $(".main_array_start").val();
    var json_start = main_array_start.replace(regex, '"$&"');
    var multi_array_start = JSON.parse(json_start);
    
    var main_array_end = $(".main_array_end").val();
    var json_end = main_array_end.replace(regex, '"$&"');
    var multi_array_end = JSON.parse(json_end);

    var startTime = Date.now();

    var interval = setInterval(function() {
        var elapsedTime = Date.now() - startTime;
        document.getElementById("timer").innerHTML = (elapsedTime / 1000).toFixed(2);
        let final_time = (elapsedTime / 1000).toFixed(2);
        
        let final_time_maxisecs = '00';
        let final_time_secs = final_time.split('.')[0];
            final_time_secs = ('0' + final_time_secs).slice(-2)
        let final_time_millisecs = final_time.split('.')[1];
        
            final_time = final_time_maxisecs+':'+final_time_secs+':'+final_time_millisecs;
        // console.log(final_time);

        multi_array_start.forEach((main_indi_multi_array_start) => {
            main_indi_multi_array_start.forEach((child_indi_multi_array_start) => {
                if(final_time == child_indi_multi_array_start) {
                    // console.log(main_indi_multi_array_start[0]);
                    // console.log(child_indi_multi_array_start);
                    
                    let start_layer_id = main_indi_multi_array_start[0];
                    $('[data-startlayerid="JS'+start_layer_id+'"]').html(child_indi_multi_array_start);
                }
            });
        });
        
        multi_array_end.forEach((main_indi_multi_array_end) => {
            main_indi_multi_array_end.forEach((child_indi_multi_array_end) => {
                if(final_time == child_indi_multi_array_end) {
                    // console.log(main_indi_multi_array_end[0]);
                    // console.log(child_indi_multi_array_end);
                    
                    let end_layer_id = main_indi_multi_array_end[0];
                    $('[data-endlayerid="JS'+end_layer_id+'"]').html(child_indi_multi_array_end);
                }
            });
        });
        
    }, 10);

</script>