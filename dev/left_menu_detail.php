<?php include("db.php"); 
      $v_m_id = $_POST["v_m_id"];
	  $scene_id = $_POST["scene_id"];
?>

<div class="card" id="msc-layer-placeholder-container" style="height: 100%;border:none;overflow-y: scroll;overflow-x: hidden;background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%);">
	<div class="card-header" style="padding: 0px;">
		<div class="card-title" id="card-title-layers"
			style="background: linear-gradient(to top, rgb(91, 154, 226) 0%, rgb(185, 217, 255) 100%);width: 48%; display: inline-block; text-align: center;padding: 0.4rem 1.25rem;font-size: 12px;  margin-bottom: 0px; font-weight: 600; cursor: pointer;color: white;">
			Layers
		</div>
		<div class="card-title" id="card-title-media" style="display:inline-block;width: 48%; text-align: center;padding: 0.4rem 1.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;color:white;">
			Media
		</div>
	</div>

	<div class="card-body" id="card-body" style="padding: 0.5rem;display:block;">
	<!--
		<div class="form-group">
			<button class="btn btn-outline-primary btn-block button-add-layer"><i class="icon-plus3"></i> Add layer</button>
		</div>
	-->
		<div class="list-container">
		    
		
        
        
            <?php
                $sql_layers_count = "SELECT COUNT(*) AS total FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id'";
				$row_layers_count = mysqli_query($conn, $sql_layers_count);
				$coun_layers_count = mysqli_fetch_assoc($row_layers_count);	
				
				$sql_layers_count = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id' ORDER BY layer_count DESC LIMIT 1";
				$result_layers_count = $conn->query($sql_layers_count);
				if ($result_layers_count->num_rows > 0) {   
				while($row_layers_count = $result_layers_count->fetch_assoc()) { 
					$layer_count_new = $row_layers_count["layer_count"];
				// 	$layer_count_new = $layer_count_new + 1;
				} } else {
				    $layer_count_new = 0;
			    } 
			 ?>
			
			<input type="hidden" id="layer_count" value="<?= $layer_count_new; ?>" />
        
        <!-- JQuery Layers will add up here -->
        
            <div id="sortable" class="layer_items">
    		   
    		<?php
			    $sql_layers_main = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id' AND layer != 'BGM' ORDER BY layer_count DESC";
				$result_layers_main = $conn->query($sql_layers_main);
				if ($result_layers_main->num_rows > 0) {   
				while($row_layers_main = $result_layers_main->fetch_assoc()) { 
					$id_layers_main = $row_layers_main["id"];
					$title_layers_main = $row_layers_main["title"];
					$layer_id_layers_main = $row_layers_main["layer_id"];
					$layer_count_layers_main = $row_layers_main["layer_count"];
					$layer_layers_main = $row_layers_main["layer"];
			?>
    		    
    		    <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="<?= $id_layers_main; ?>" layer_id="<?= $layer_count_layers_main; ?>" id="layer_tab_layer<?= $layer_count_layers_main; ?>"  order-id="<?= $layer_count_layers_main; ?>" style="margin-bottom: 5px !important;">
    				<div class="card-body p-2" style="padding: 5px !important;">
    					<div class="row">
    						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
    							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top:5px;"></i>
    						</div>
    						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
    							<div class="ellipsis" style="font-size: 12px;">
    							    <input type="text" id="<?= $id_layers_main; ?>" data-layercount="<?= $layer_count_layers_main; ?>" class="layer_title" style="background:transparent;border:none;" value="<?= $title_layers_main; ?>" /></div>
    						</div>
    						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
    							<div class="msc-layer-buttons" style="width:auto;">
    							<?php if($layer_layers_main == 'background'){ } else { ?>
    							    <button type="button" data-id="<?= $layer_count_layers_main; ?>" data-layer-id="<?= $id_layers_main; ?>" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;">
    							        <i class="icon-copy"></i>
    							    </button>
    						    <?php } ?>
    								<button type="button" data-id="<?= $layer_count_layers_main; ?>" data-layer-id="<?= $id_layers_main; ?>" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-cancel3"></i>
    								</button>
    								<button type="button" data-id="<?= $layer_count_layers_main; ?>" data-layer-id="<?= $id_layers_main; ?>" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-eye2"></i>
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			
    		<?php } } else { } ?>
    		    
    		</div>
            
            <div class="legendary_layers">
                
                <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer" layer_id="00" id="layer_tab_layer00" style="margin-bottom: 5px !important;cursor:pointer;bottom: 14%;position: absolute;width: 90%;">
        			<div class="card-body p-2" style="padding: 5px !important;">
        				<div class="row">
        				    <div class="col-2 col-sm-2 col-md-1 placeholder-icon">
        						&nbsp;
        					</div>
        					<div class="col-6 col-sm-6 col-md-6 card-text" style="padding: 0px;padding-top: 4px;">
        						<div class="ellipsis" style="font-size: 12px;">
        						    Background Layer
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		
        	<?php
			    $sql_layers_legendary_bgm = "SELECT * FROM video_maker_layers WHERE p_id = '$v_m_id' AND scene_id = '$scene_id' AND layer = 'BGM' LIMIT 1";
				$result_layers_legendary_bgm = $conn->query($sql_layers_legendary_bgm);
				if ($result_layers_legendary_bgm->num_rows > 0) {   
				while($row_layers_legendary_bgm = $result_layers_legendary_bgm->fetch_assoc()) { 
					$id_layers_legendary_bgm = $row_layers_legendary_bgm["id"];
					$title_layers_legendary_bgm = $row_layers_legendary_bgm["title"];
					$layer_id_layers_legendary_bgm = $row_layers_legendary_bgm["layer_id"];
					$layer_count_layers_legendary_bgm = $row_layers_legendary_bgm["layer_count"];
					$layer_layers_legendary_bgm = $row_layers_legendary_bgm["layer"];
			?>
			
		        <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="<?= $id_layers_legendary_bgm; ?>" layer_id="<?= $layer_count_layers_legendary_bgm; ?>" id="layer_tab_layer<?= $layer_count_layers_legendary_bgm; ?>"  order-id="<?= $layer_count_layers_legendary_bgm; ?>" style="margin-bottom: 5px !important;cursor: pointer;bottom: 6%;position: absolute;width: 90%;">
    				<div class="card-body p-2" style="padding: 5px !important;">
    					<div class="row">
    						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
    							<!--<i class="icon-resize rotate-45" style="font-size: 12px;padding-top:5px;"></i>-->
    						</div>
    						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
    							<div class="ellipsis" style="font-size: 12px;">
    							    <input type="text" id="<?= $id_layers_legendary_bgm; ?>" data-layercount="<?= $layer_count_layers_legendary_bgm; ?>" class="layer_title" style="background:transparent;border:none;" value="<?= $title_layers_legendary_bgm; ?>" /></div>
    						</div>
    						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
    							<div class="msc-layer-buttons" style="width:auto;">
    								<button type="button" data-id="<?= $layer_count_layers_legendary_bgm; ?>" data-layer-id="<?= $id_layers_legendary_bgm; ?>" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove bgm_layer" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-cancel3"></i>
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
		    
		    <?php } } else { } ?>
        		
        		
    		</div>
    		
    		

		</div>
		
	</div>

	<div class="card-body2" id="card-body2" style="display: none;">
		
		<div class="media-div" id="templates-indi-div" style="display: none;">
			<div class="media_child_library_btn" data-library="templates"
				style="width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Library
			</div>
			<div class="data_library_templates">
			<?php
			    $sql_templates_scene = "SELECT * FROM video_maker_scene_templates";
				$result_templates_scene = $conn->query($sql_templates_scene);
				if ($result_templates_scene->num_rows > 0) {   
				while($row_templates_scene = $result_templates_scene->fetch_assoc()) { 
					$template_scene_id = $row_templates_scene["id"];
			?>
				<div class="load_template_btn" data-templatesceneid="<?= $template_scene_id; ?>" style="cursor:pointer;width: 45%;display: inline-block;margin: 5px;padding: 5px;height: auto;border: 1px solid white;border-radius:5px;">
					<img src="images-main/layout.png" style="width:100%;object-fit: cover;" />
				</div>
			<?php } } else { } ?>
			</div>
		</div>
		
	<!-- ----------------------------------------------------- -->

		<div class="media-div" id="images-indi-div" style="display: none;">
			
			<div class="media_child_library_btn" data-library="images"
				style="margin-top:1px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Library
			</div>

			<div class="indi-div-library data_library_images data_uploads_common">
				
				<!--<div style="width: 31%; display: inline-block; padding: 0px 0px 5px 0px;">-->
				<!--	<img src="images-main/images/1.jpg" />-->
				<!--</div>-->
				
			</div>

			<div class="media_child_uploads_btn" data-library="images"
				style="margin-top:3px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;  margin-bottom: 0px; font-weight: 600; cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Uploads
			</div>

		    <div class="indi-div-uploads data_uploads_images data_uploads_common" style="display:none;">
		        
		        <div id="uplaod_image_btn" style="width: 96%;margin: 5px; display: inline-block;padding: 5px;vertical-align: bottom;text-align: center;border-radius: 5px;cursor:pointer;border: 1px dashed white;">
					<i class="fa fa-upload" aria-hidden="true" style="font-size: 40px;color:white;"></i>
				</div>
				
			<?php
			    $sql_v_m_uploads_images = "SELECT * FROM video_maker_images WHERE v_m_id = '$v_m_id'";
				$result_v_m_uploads_images = $conn->query($sql_v_m_uploads_images);
				if ($result_v_m_uploads_images->num_rows > 0) {   
				while($row_v_m_uploads_images = $result_v_m_uploads_images->fetch_assoc()) { 
					$v_m_uploads_images_id = $row_v_m_uploads_images["id"];
					$v_m_uploads_images_title = $row_v_m_uploads_images["title"];
			?>
			
			    <div class="draggable image" layer-type-id="<?= $v_m_uploads_images_id; ?>" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: auto;border: 1px solid white;">
					<img style="width:100%;height:60px;object-fit:cover;" src="images-main/images/<?= $v_m_uploads_images_title; ?>" />
				</div>
			
			<?php } } else { } ?>
				
		    </div>

		    
		</div>
		
	<!-- ----------------------------------------------------- -->

		<div class="media-div" id="videos-indi-div" style="display: none;">
			
			<div class="media_child_library_btn" data-library="videos"
				style="margin-top:1px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Library
			</div>

			<div class="indi-div-library data_library_videos data_uploads_common" id="videos-indi-div-library">
				
				<!--<div style="width: 31%; display: inline-block; padding: 0px 0px 5px 0px;">-->
				<!--	<video style="width: 100%;">-->
				<!--		<source src="images-main/videos/1.mp4" type="video/mp4" />-->
				<!--	</video>-->
				<!--</div>-->

			</div>

			<div class="media_child_uploads_btn" data-library="videos"
				style="margin-top:3px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;  margin-bottom: 0px; font-weight: 600; cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Uploads
			</div>

			<div class="indi-div-uploads data_uploads_videos data_uploads_common" id="videos-indi-div-uploads" style="display:none;">
			    
			    <div id="uplaod_video_btn" style="width: 96%;margin: 5px; display: inline-block;padding: 5px;vertical-align: bottom;text-align: center;border-radius: 5px;cursor:pointer;border: 1px dashed white;">
					<i class="fa fa-upload" aria-hidden="true" style="font-size: 40px;color:white;"></i>
				</div>

            <?php
			    $sql_v_m_uploads_videos = "SELECT * FROM video_maker_videos WHERE v_m_id = '$v_m_id'";
				$result_v_m_uploads_videos = $conn->query($sql_v_m_uploads_videos);
				if ($result_v_m_uploads_videos->num_rows > 0) {   
				while($row_v_m_uploads_videos = $result_v_m_uploads_videos->fetch_assoc()) { 
					$v_m_uploads_videos_id = $row_v_m_uploads_videos["id"];
					$v_m_uploads_videos_title = $row_v_m_uploads_videos["title"];
			?>
			
			    <div class="draggable video" layer-type-id="<?= $v_m_uploads_videos_id; ?>" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: auto;border: 1px solid white;border-radius:5px;">
					<video style="width: 100%;object-fit: cover;height: 60px;">
						<source src="images-main/videos/<?= $v_m_uploads_videos_title; ?>" type="video/mp4" />
					</video>
				</div>
			
			<?php } } else { } ?>

			</div>
			
		</div>

	<!-- ----------------------------------------------------- -->

		<div class="media-div" id="backgrounds-indi-div" style="display: none;">

			<div class="media_child_library_btn" data-library="backgrounds"
				style="margin-top:1px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Library
			</div>

			<div class="indi-div-library data_library_backgrounds data_uploads_common" id="backgrounds-indi-div-library">
				
				<!--<div style="width: 31%; display: inline-block; padding: 0px 0px 5px 0px;">-->
				<!--	<img src="images-main/backgrounds/1.jpg" />-->
				<!--</div>-->
				
			</div>
			
			<div class="media_child_uploads_btn" data-library="backgrounds"
				style="margin-top:3px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;  margin-bottom: 0px; font-weight: 600; cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Uploads
			</div>

			<div class="indi-div-uploads data_uploads_backgrounds data_uploads_common"  id="backgrounds-indi-div-uploads" style="display:none;">
			    
				<div id="uplaod_background_btn" style="width: 96%;margin: 5px; display: inline-block;padding: 5px;vertical-align: bottom;text-align: center;border-radius: 5px;cursor:pointer;border: 1px dashed white;">
					<i class="fa fa-upload" aria-hidden="true" style="font-size: 40px;color:white;"></i>
				</div>
				
			<?php
			    $sql_v_m_uploads_backgrounds = "SELECT * FROM video_maker_backgrounds WHERE v_m_id = '$v_m_id'";
				$result_v_m_uploads_backgrounds = $conn->query($sql_v_m_uploads_backgrounds);
				if ($result_v_m_uploads_backgrounds->num_rows > 0) {   
				while($row_v_m_uploads_backgrounds = $result_v_m_uploads_backgrounds->fetch_assoc()) { 
					$v_m_uploads_backgrounds_id = $row_v_m_uploads_backgrounds["id"];
					$v_m_uploads_backgrounds_title = $row_v_m_uploads_backgrounds["title"];
			?>
			
			    <div class="draggable background" layer-type-id="<?= $v_m_uploads_backgrounds_id; ?>" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: auto;border: 1px solid white;border-radius:5px;">
					<img style="width:100%;height:60px;object-fit:cover;" src="images-main/backgrounds/<?= $v_m_uploads_backgrounds_title; ?>" />
				</div>
			
			<?php } } else { } ?>
			</div>

			
		</div>
		
	<!-- ----------------------------------------------------- -->
		
		<div class="media-div" id="fonts-indi-div" style="display: none;">
			
			<?php
			    $sql_v_m_uploads_fonts = "SELECT * FROM video_maker_fonts";
				$result_v_m_uploads_fonts = $conn->query($sql_v_m_uploads_fonts);
				if ($result_v_m_uploads_fonts->num_rows > 0) {   
				while($row_v_m_uploads_fonts = $result_v_m_uploads_fonts->fetch_assoc()) { 
					$v_m_uploads_fonts_id = $row_v_m_uploads_fonts["id"];
					$v_m_uploads_fonts_name = $row_v_m_uploads_fonts["name"];
					$v_m_uploads_fonts_file = $row_v_m_uploads_fonts["file_name"];
			?>
			
				<style>
					@font-face {
						font-family: <?= $v_m_uploads_fonts_name;?>;
						src: url(images-main/fonts/<?= $v_m_uploads_fonts_file; ?>);
					}
				</style>
			
			
			<div class="draggable font" layer-type-id="<?= $v_m_uploads_fonts_id; ?>" font-id="<?= $v_m_uploads_fonts_name; ?>" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: 52px;border: 1px solid white;text-align:center;border-radius: 5px;cursor:pointer;">
				<span style="font-family: <?= $v_m_uploads_fonts_name;?>;font-size: 22px;font-weight:600;color:white;">Preview</span>
			</div>
			
			<?php } } else { } ?>
			
		</div>
		

		<div class="media-div" id="audio-indi-div" style="display: none;">

			<div class="media_child_library_btn" data-library="audios"
				style="margin-top:1px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;margin-bottom: 0px; font-weight: 600;cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Library
			</div>

			<div class="indi-div-library data_library_audios data_uploads_common" id="audio-indi-div-library">
				
				<!--<div style="width: 31%; display: inline-block; padding: 0px 0px 5px 0px;">-->
				<!--	<img src="images-main/1.png" />-->
				<!--	<p style="margin-bottom: 0px;font-size: 10px;text-align: center;line-height: 0.8em;">audio #1</p>-->
				<!--</div>-->
				
			</div>

			<div class="media_child_uploads_btn" data-library="audios"
				style="margin-top:3px;width: 100%; display: inline-block; text-align: left;padding: 0.4rem 2.25rem;font-size: 12px;  margin-bottom: 0px; font-weight: 600; cursor: pointer;background: linear-gradient(to top, #5895d9 0%, #5895d7 100%);color: white;border-radius: 5px;box-shadow: 0px 3px 2px 1px rgb(0 0 0 / 20%);">
				Uploads
			</div>

		    <div class="indi-div-uploads data_uploads_audios data_uploads_common" id="audio-indi-div-uploads" style="display:none;">
		        
		        <div id="uplaod_audio_btn" style="width: 96%;margin: 5px; display: inline-block;padding: 5px;vertical-align: bottom;text-align: center;border-radius: 5px;cursor:pointer;border: 1px dashed white;">
					<i class="fa fa-upload" aria-hidden="true" style="font-size: 40px;color:white;"></i>
				</div>
				
			<?php
			    $sql_v_m_uploads_audios = "SELECT * FROM video_maker_audios WHERE v_m_id = '$v_m_id'";
				$result_v_m_uploads_audios = $conn->query($sql_v_m_uploads_audios);
				if ($result_v_m_uploads_audios->num_rows > 0) {   
				while($row_v_m_uploads_audios = $result_v_m_uploads_audios->fetch_assoc()) { 
					$v_m_uploads_audios_id = $row_v_m_uploads_audios["id"];
					$v_m_uploads_audios_title = $row_v_m_uploads_audios["title"];
			?>
				
				<script>
					var audioElement<?= $v_m_uploads_audios_id; ?> = document.createElement('audio');            
					audioElement<?= $v_m_uploads_audios_id; ?>.setAttribute('src','images-main/audio/<?= $v_m_uploads_audios_title; ?>');            
					audioElement<?= $v_m_uploads_audios_id; ?>.addEventListener("loadedmetadata", function(_event) {
						let duratione = audioElement<?= $v_m_uploads_audios_id; ?>.duration;
						let duration = parseInt(duratione);
						$('.bgm_id_<?= $v_m_uploads_audios_id; ?>').attr('duration-id', duratione);
					});
				</script>
				
				<div class="draggable_voice draggable_bgm bgm_id_<?= $v_m_uploads_audios_id; ?>" audio-layer-title="<?= $v_m_uploads_audios_title; ?>" layer-type-id="<?= $v_m_uploads_audios_id; ?>" bgm-id="<?= $v_m_uploads_audios_id; ?>" duration-id="" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: auto;border: 1px solid white;vertical-align: super;border-radius:5px;text-align:center;">
					<img src="images-main/audio/thumbnail.png" style="width:60px;" />
					<p style="margin-bottom: 0px;font-size: 10px;text-align: center;line-height: 0.8em;color:white;"><?php echo substr($v_m_uploads_audios_title, 0, 10); ?></p>
				</div>
				
			<?php } } else { } ?>
				
		    </div>

		    
		</div>

	<!-- ----------------------------------------------------- -->
		
		<div class="media-div" id="shapes-indi-div" style="display: none;">
		    <div class="indi-div-library" id="shapes-indi-div-library" style="overflow:auto;height:510px;width:110%;">
			
			<?php
			    $sql_v_m_uploads_shapes = "SELECT * FROM video_maker_shapes";
				$result_v_m_uploads_shapes = $conn->query($sql_v_m_uploads_shapes);
				if ($result_v_m_uploads_shapes->num_rows > 0) {   
				while($row_v_m_uploads_shapes = $result_v_m_uploads_shapes->fetch_assoc()) { 
					$v_m_uploads_shapes_id = $row_v_m_uploads_shapes["id"];
					$v_m_uploads_shapes_style = $row_v_m_uploads_shapes["style"];
					$v_m_uploads_shapes_title = $row_v_m_uploads_shapes["title"];
					$v_m_uploads_shapes_shape = $row_v_m_uploads_shapes["shape"];
			?>
				
				<div class="draggable shape <?= $v_m_uploads_shapes_title; ?>" layer-type-id="<?= $v_m_uploads_shapes_id; ?>" style="width: 45%; display: inline-block;margin: 5px;padding: 5px;height: auto;">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="<?= $v_m_uploads_shapes_style; ?> margin-top:0;width: 125%;">
					    <?= $v_m_uploads_shapes_shape; ?>
					</svg>
					<!--<p style="margin-bottom: 0px;font-size: 10px;text-align: center;line-height: 0.8em;"><?php echo substr($v_m_uploads_shapes_title, 0, 10); ?></p>-->
				</div>
				
			<?php } } else { } ?>
			
			</div>
		</div>
		<br/>

		
	</div>
		
	
</div>


<div class="close_left_menu_detail_btn" style="position: absolute; top: 45%; left: 99%; z-index: 9; color: white;cursor:pointer;">
    <svg width="15" height="96" viewBox="0 0 15 96" fill="none" xmlns="http://www.w3.org/2000/svg" class="SUDcEg" style="fill: #53a692;">
        <path
            d="M0 0H3V1.00588C3.0011 4.42584 3.9102 9.97716 7.27295 13.2873C7.45088 13.4625 7.62629 13.6347 7.79957 13.8048L7.85959 13.8637C9.89318 15.8599 11.6678 17.602 12.9234 19.7206C14.0939 21.6956 14.792 23.9527 14.9602 27H15V68C15 71.7381 14.3125 74.3685 13.0144 76.6235C11.7533 78.8142 9.94312 80.5911 7.86152 82.6344L7.79905 82.6957C7.62594 82.8656 7.4507 83.0377 7.27295 83.2127C3.9102 86.5228 3.0011 92.0739 3 95.4938V96H0V0Z"
            class="vu-d0A">
        </path>
        <path
            d="M3 0H2V1.00619C2.0011 4.50696 2.9164 10.4021 6.57143 14C6.74993 14.1757 6.92582 14.3484 7.09903 14.5184C11.2616 18.6046 13.8752 21.1704 13.9957 28H14V68C14 75.2071 11.3611 77.7976 7.09857 81.9821L7.07621 82.004C6.91037 82.1668 6.7421 82.332 6.57143 82.5C2.9164 86.0979 2.0011 91.993 2 95.4938V96H3V95.4938C3.0011 92.0739 3.9102 86.5228 7.27295 83.2127C7.4507 83.0377 7.62594 82.8656 7.79905 82.6957L7.86152 82.6344C9.94312 80.5911 11.7533 78.8142 13.0144 76.6235C14.3125 74.3685 15 71.7381 15 68V27H14.9602C14.792 23.9527 14.0939 21.6956 12.9234 19.7206C11.6678 17.602 9.89318 15.8599 7.85959 13.8637L7.79957 13.8048C7.62629 13.6347 7.45088 13.4625 7.27295 13.2873C3.9102 9.97716 3.0011 4.42584 3 1.00588V0Z"
            class="mcI_jw">
        </path>
    </svg>
    <span aria-hidden="true" class="" style="position: absolute; top: 45%; left: 20%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.25" d="M7 3.17 4.88 5.3a1 1 0 0 0 0 1.42L7 8.83" style="fill: white;"></path>
        </svg>
    </span>
</div>



