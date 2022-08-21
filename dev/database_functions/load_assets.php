<?php include("../db.php");

    $v_m_id = $_POST["v_m_id"];

    $sql_v_m_uploads_images = "SELECT * FROM video_maker_images WHERE v_m_id = '$v_m_id'";
    $result_v_m_uploads_images = $conn->query($sql_v_m_uploads_images);
    if ($result_v_m_uploads_images->num_rows > 0) {   
    while($row_v_m_uploads_images = $result_v_m_uploads_images->fetch_assoc()) { 
        $v_m_uploads_images_id = $row_v_m_uploads_images["id"];
        $v_m_uploads_images_title = $row_v_m_uploads_images["title"];
?>

    <div class="replace_image_select" layer-type-id="<?= $v_m_uploads_images_id; ?>" style="cursor:pointer;width: 150px; display: inline-block;margin: 5px;padding: 5px;height: 150px;border: 1px solid white;">
        <img style="width:100%;height:100%;object-fit:cover;" src="images-main/images/<?= $v_m_uploads_images_title; ?>" />
    </div>

<?php } } else { } ?>