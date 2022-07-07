<?php 
    session_start();
    $new_vid_id = $_GET["id"];
    $scene_id = $_GET["scene_id"];
    $u_id = $_GET["u_id"];
    $_SESSION["v_m_id"]= $new_vid_id;
    $_SESSION["scene_id"]= $scene_id;
    $_SESSION["u_id"]= $u_id;
    header("Location: player");
?>