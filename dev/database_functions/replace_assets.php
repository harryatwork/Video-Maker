<?php include("../db.php");

    $layer_id_of_selected = $_POST["layer_id_of_selected"];
    $new_image_layer_id = $_POST["new_image_layer_id"];
    // $new_image_layer_src = $_POST["new_image_layer_src"];

    $sql = "UPDATE video_maker_layers SET layer_id = '$new_image_layer_id'
            WHERE id = '$layer_id_of_selected'";

    if ($con->query($sql) === TRUE) {
        echo 'updated';
    } else { echo "ERROR" . $sql . "<br>" . $conn->error; }