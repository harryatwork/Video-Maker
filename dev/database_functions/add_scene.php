<?php include("../db.php");

    $v_m_id = $_POST["v_m_id"];
    $u_id = $_POST["u_id"];
    $duration = 8;
    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql_scene = "SELECT * FROM video_maker_scene WHERE p_id = '$v_m_id'";
    $result_scene = $conn->query($sql_scene);
    if ($result_scene->num_rows > 0) {   
        $scene_count = 1;
    while($row_scene = $result_scene->fetch_assoc()) {
        $scene_count++;
    } } else { } 

    $sql2 = "INSERT INTO video_maker_scene (p_id, u_id, duration, date)
              VALUES ('$v_m_id', '$u_id', '$duration', '$date')";
    if ($con->query($sql2) === TRUE) { 
        $last_id = $con->insert_id;
        echo '<div class="scene_tab scene_tab_'.$scene_count.'" data-sceneid="'.$last_id.'" style="cursor:pointer;width: 8%; display: inline-block; margin-right: 1%;">
                <div class="scene_tab_child" style="height: 47px; background: #f7f7f7; border: 1px solid #dddd;"></div>
                <p style="font-size: 10px; font-weight: normal; color: white; text-align: center;margin:0;">screen #'.$scene_count.'</p>
              </div>';
    } else { } 