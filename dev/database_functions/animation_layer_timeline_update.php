<?php include("../db.php"); 

	$layer_id = $_POST['layer_id'];
    $animationdraggablelayer_left = $_POST['animationdraggablelayer_left'];
    $animationdraggablelayer_left = trim($animationdraggablelayer_left, 'px');
    $animationdraggablelayer_width = $_POST['animationdraggablelayer_width'];
    $animationdraggablelayer_width = trim($animationdraggablelayer_width, 'px');
    
    $sec = 208;
    $start_time_deci = ($animationdraggablelayer_left/$sec);
    $start_time_deci = round($start_time_deci, 1);
    
    $start_seconds = ($start_time_deci * 60);
    $start_minutes = floor($start_seconds / 60);
    $start_seconds -= $start_minutes * 60;
    $start_time =  "00:".lz($start_minutes).":".lz($start_seconds);
    if($start_time == '00:00:00') {
        $start_time = '00:00:01'; 
    } else {
        $start_time = $start_time;
    }

    $end_time_deci = ($animationdraggablelayer_width/$sec);
    $end_time_deci = round($end_time_deci, 1);
    $end_time_deci = $end_time_deci + $start_time_deci;
    
    $end_seconds = ($end_time_deci * 60);
    $end_minutes = floor($end_seconds / 60);
    $end_seconds -= $end_minutes * 60;
    $end_time =  "00:".lz($end_minutes).":".lz($end_seconds);
    
    function lz($num){
        return (strlen($num) < 2) ? "0{$num}" : $num;
    }

    $sql = "UPDATE video_maker_layer_animations SET start = '$start_time', end = '$end_time', margin_left = '$animationdraggablelayer_left', width = '$animationdraggablelayer_width'
            WHERE layer_id = '$layer_id'";
    if ($con->query($sql) === TRUE) {
       
    } else { 
    }

	