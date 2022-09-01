<?php include("db.php"); ?>
<?php if (isset($_SESSION["email"])) { } else {
	header ("Location: ../sign/index");
}
?>

<?php include("css.php"); ?>

<style>
body {
  overscroll-behavior-x: none;
}
</style>

<link rel="stylesheet" type="text/css" href="/css.scss">

<?php 
    $v_m_id = $_SESSION["v_m_id"];
    $scene_id = $_SESSION["scene_id"];
?>

<div class="main_overlay">
    <div class="main_overlay_container">
        <div class="main_overlay_Loading"></div>
    </div>
</div>

<div id="overlay"></div>
<div id="overlay2"></div>

	<body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-20 kingcomposer kc-css-system" style="margin: 0;">
	   <div class="page-wrapper">
	   <!-- Preloader -->
	   <div class="preloader"></div>

    

	   <?php /* include("../header.php"); */ ?>
		   
        <?php 
			$email = $_SESSION['email'];
			$sqluser = "SELECT * FROM users WHERE email = '$email' ";
			$resultuser = $conn->query($sqluser);
			if ($resultuser->num_rows > 0) {   
			while($rowuser = $resultuser->fetch_assoc()) { 
			    $u_id = $rowuser["id"]; 
			} } else { } 
		?>
		   
        <input type="hidden" id="u_id" value="<?= $u_id; ?>" />
        <input type="hidden" id="v_m_id" value="<?= $v_m_id; ?>" />
        <input type="hidden" id="scene_id" value="<?= $scene_id; ?>" />
        
        <input type="hidden" class="current_left" />
        <input type="hidden" class="current_top" />
        <input type="hidden" class="current_width" />
        <input type="hidden" class="current_height" />
		   
		<?php
		    $sql_v_m = "SELECT * FROM video_maker WHERE id = '$v_m_id'";
			$result_v_m = $conn->query($sql_v_m);
			if ($result_v_m->num_rows > 0) {   
			while($row_v_m = $result_v_m->fetch_assoc()) { 
				$v_m_title = $row_v_m["title"];
			} } else { } 
		?>
		   
	    <div id="msc-app" class="app-container" style="margin-top: 0%;">
	    
		  <div style="width: 100%;padding: 0.5% 0% 0.5% 0%;background: linear-gradient(to left, #4caf50 0%, #5c9ae4 100%);z-index:9;">
            <a href="index" class="btn_on_hover" style="font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                <i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp; Home
            </a>
            
            <a class="btn_on_hover file_btn" style="cursor:pointer;font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                File
            </a>
            
            <a class="btn_on_hover resize_btn" style="cursor:pointer;font-size: 16px;font-weight:500;border: none;color: white;padding: 6px 20px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-left: 1%;">
                Resize
            </a>
            
            <a class="btn_on_hover save_btn" style="width:100px;cursor:pointer;font-size: 14px;font-weight:500;color: white;padding: 4px 16px 4px 2px;text-align: center;text-decoration: none;display: inline-block;border-radius: 5px;margin-right: 1%;float: right;border: 1px solid white;">
                <i class="fa fa-check" aria-hidden="true" style="width: 30px; -webkit-text-stroke: 1px white;"></i> Saved
            </a>
            
            
<!-- File Stuff Starts ----------------------------------------->
            <div class="file_div" style="z-index:9;zoom:0.8;display:none;position: absolute;margin-top: 9px;margin-left: 6%;width: 250px;background: white;height: auto;box-shadow:0px 0px 6px 4px rgb(0 0 0 / 20%);border-radius:7px;">
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    New Design
                </div>
				<div class="file_options create_scene_template_btn" data-scenetemplateid="0" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Create Scene Template
                </div>
			<?php	
				$sql_project_templates = "SELECT * FROM video_maker_templates WHERE p_id = '$v_m_id'";
				$result_project_templates = $conn->query($sql_project_templates);
				if ($result_project_templates->num_rows > 0) {   
				while($row_project_templates = $result_project_templates->fetch_assoc()) {
					$p_id_templates = $row_project_templates["id"];
					$project_template_text = 'Update Project Template';
				} } else { 
					$p_id_templates = 0;
					$project_template_text = 'Create Project Template';
				} 
			?>
				<div class="file_options create_project_template_btn" data-projecttemplateid="<?= $p_id_templates; ?>" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 8%;border-bottom: 1px solid #dbdbdb;">
                    <?= $project_template_text; ?>
                </div>
                <!-- <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Save
                </div> -->
                <!-- <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Download
                </div> -->
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;border-bottom: 1px solid #dbdbdb;">
                    Reset
                </div>
                <div class="file_options" style="display:inline-block;width:100%;font-weight:400;color:#818181;font-size: 18px;padding: 6% 12%;">
                    Close
                </div>
            </div>
<!-- File Stuff Ends ----------------------------------------->
            
            
            
<!-- Resize Stuff Starts ----------------------------------------->
            <div class="resize_div" style="z-index:9;zoom:0.8;display:none;position: absolute;margin-top: 9px;margin-left: 6%;width: 400px;background: white;height: auto;padding: 2%;box-shadow:0px 0px 6px 4px rgb(0 0 0 / 20%);border-radius:7px;">
                
                <div style="display:inline-block;width:100%;">
                	<select class="form-control" id="resolution_selector" 
                	style="box-shadow: 0 0 7px rgb(0 0 0 / 10%) inset;font-size: 16px;padding: 7px;width: 100%;border: 1px solid #bfbfbf;border-radius: 5px;color:#818181;">
                		<option value="1920x1080">FULL HD 1920x1080 (16:9)</option>
                		<option value="1080x1920">FULL HD 1080x1920 (9:16)</option>
                		<option value="1080x720">HD 1080x720 (16:9)</option>
                		<option value="720x1080">HD 720x1080 (9:16)</option>
                		<option value="1080x1080">SQUARE 1080x1080 (1:1)</option>
                		<!--<option value="CUSTOM">CUSTOM SIZE</option>-->
                	</select>
                </div>
                <br/>
                <hr/>
                <div class="" style="display:inline-block;margin-top:0%;width:100%;"> 
                    <h6 class="app-container" style="font-weight:500;color:#818181;">Custom Size</h6>
            	    <input id="size_ranger" class="range-style" type="range" step="0.01" min="0.1" max="1" 
            		    style="width: 99%;color:#818181;" />
                </div>
            
                <div class="col-4 no-padding-right custom_size" style="display:none;width:18%;margin-top:6px;" > 
            	    <input class="form-control input-sm" id="custom_size_left" type="number" placeholder="width" name="slider_width" value="" min="150" step="1" style="height: 22px;padding: 5px;font-size: 13px;width: 60px;display: inline-block;"> 
            	    <span style="display: inline-block;font-size: 12px;">px</span>
                </div>
                <div class="col-4 no-padding-right custom_size" style="display:none;margin-top:6px;width:18%;"> 
            	    <input class="form-control input-sm" id="custom_size_right" type="number" placeholder="height" name="slider_height" value="" min="150" step="1" style="height: 22px;padding: 5px;font-size: 13px;width: 60px;display: inline-block;"> 
            	    <span style="display: inline-block;font-size: 12px;">px</span>
                </div>
                  
            </div>
<!-- Resize Stuff Ends ----------------------------------------->
            

          </div>
		  
		  <div class="card-header" style="padding: 0px;"> 
			 <div class="row">
				<div class="col-md-12">
				   <div class="row form-group" style="margin-bottom: 0rem;">
				      <div style="margin-left: 10%;width: 100%;padding: 5px 0;">
				        <div style="display:inline-block;width: 300px;padding: 5px;">
                            <i class="fa-solid fa-pen-to-square" style="display: inline-block;font-size: 18px;color:#5c9be2;"></i>
                            <input type="text" id="v_m_title" value="<?= $v_m_title; ?>" style="color:black;background:transparent;border:none;font-size: 16px;margin-left: 1%;width: 200px;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,sans-serif;">
    				    </div>
    				      <div style="display:inline-block;float:right;margin-right:5%;"> 
    					    <button type="button" class="btn btn-outline-success button-play-slide slide_preview_btn" data-toggle="tooltip" title="Play slide animation" style="height: auto;padding: 2px 4px;font-size: 12px;"> 
    						    <i class="fas fa-play-circle" style="font-size: 18px;color: red;" aria-hidden="true"></i>
    					    </button>
    					    <span class="divider-vert"></span> 
    					    <button type="button" class="btn btn-outline-primary button-add-slide" data-toggle="tooltip" title="New slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-plus3"></i> </button>
    					    <button type="button" class="btn btn-outline-primary button-copy-slide" data-toggle="tooltip" title="Copy slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-copy"></i> </button> 
    					    <button type="button" class="btn btn-outline-danger button-remove-slide" data-toggle="tooltip" title="Delete slide" style="height: 22px;padding: 2px 6px;font-size: 14px;"> <i class="icon-cancel3"></i> </button> 
    					 </div>
    				</div>
				   </div>
				</div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
		  
		  <div>
		  
			  <?php include("left_menu.php"); ?> 
			  
			  <div id="msc-layer-placeholder-wrapper" class="left_bar_menu_div"  style="width: 20%; vertical-align: top;position:absolute; display:none; margin-left: -0.5%; height: 87%;box-shadow: rgb(0 0 0 / 20%) 3px 0px 5px 1px;margin-top: -50px;">
			    
			  </div>
				

				<div class="app-container-inner" id="work_area" style="width: 73%;display: inline-block;height: 570px;padding-top: 0;margin-left: 1%;zoom:0.9;">
				   <div class="card mb-3" id="msc-container">
					  
					  <div class="card-body p-0">
						 <div class="msc-slides-wrapper" style="height: 475px;overflow-y:scroll;background:#f7f7f7;">
							<div class="msc-slides-container" id="msc-slides-container" style="min-width: 700px;padding:50px;zoom: 0.40;">
							   <div class="inner et-wrapper" id="work_area_div" style="width: 1920px; height: 1080px;background:white;">
								  <div class="msc-slide et-page et-page-current" id="work_area_div_sub" style="background:<?= $scene_background; ?>;">
								   
								  </div>
							   </div>
							</div>
							<!--<div class="msc-right-panel" id="msc-right-panel"></div>-->
						 </div>
					  </div>
					   
					   
					  <div class="card-footer scene_action_buttons" id="msc-slide-placeholder-container" style="padding: 0px 25px;min-height: 40px;">
						 
					  </div>
					   

					   
				   </div>
				</div>
			  
			  

			    <?php include("right_side.php"); ?>
			  
			</div>
			
				<div id="msc-modals"></div>
				
				
		<!-- Animation panel ----->
				
				<div class="row" id="slide_timeline_div" style="width: 90%;zoom: 0.6;display:none;margin-left:8%;position:absolute;height:auto;top:96%;padding-bottom: 50px;overflow-y:scroll;">
					<div class="col-lg-12">
						<div id="msc-options-layer">
							<div class="card" style="" id="draggable_div_inner2">
								<div class="card-header" id="draggable_header2">
									<h4 class="card-title" style="display: inline-block;"></h4>
								</div>
								<div class="card-body msc-options-container animation_dragger_panel" style="padding:0px;overflow-x: scroll;white-space: nowrap;">
								    
								</div>
							</div>
						</div>
					</div>
				</div>

	<!-- Animation panel ENds ----->
		  
		    </div>
		   
		   
			<div id="bottom_player_div" style="width: 100%; height: auto; background: linear-gradient(to top, rgb(92, 154, 228) 0%, rgb(76, 175, 80) 100%); position: fixed; bottom: 0%; border-radius: 0px 5px 5px 0px; box-shadow: 2px 0px 2px 1px rgb(0 0 0 / 20%);">
				<div id="bottom_player_btn" class="" style="z-index: 9; color: white; cursor: pointer; transform: rotate(270deg); left: 45%; top: -78%; position: absolute;">
					<svg width="15" height="96" viewBox="0 0 15 96" fill="none" xmlns="http://www.w3.org/2000/svg" class="SUDcEg" style="fill: #53a692;">
						<path
							d="M0 0H3V1.00588C3.0011 4.42584 3.9102 9.97716 7.27295 13.2873C7.45088 13.4625 7.62629 13.6347 7.79957 13.8048L7.85959 13.8637C9.89318 15.8599 11.6678 17.602 12.9234 19.7206C14.0939 21.6956 14.792 23.9527 14.9602 27H15V68C15 71.7381 14.3125 74.3685 13.0144 76.6235C11.7533 78.8142 9.94312 80.5911 7.86152 82.6344L7.79905 82.6957C7.62594 82.8656 7.4507 83.0377 7.27295 83.2127C3.9102 86.5228 3.0011 92.0739 3 95.4938V96H0V0Z"
							class="vu-d0A"
						></path>
						<path
							d="M3 0H2V1.00619C2.0011 4.50696 2.9164 10.4021 6.57143 14C6.74993 14.1757 6.92582 14.3484 7.09903 14.5184C11.2616 18.6046 13.8752 21.1704 13.9957 28H14V68C14 75.2071 11.3611 77.7976 7.09857 81.9821L7.07621 82.004C6.91037 82.1668 6.7421 82.332 6.57143 82.5C2.9164 86.0979 2.0011 91.993 2 95.4938V96H3V95.4938C3.0011 92.0739 3.9102 86.5228 7.27295 83.2127C7.4507 83.0377 7.62594 82.8656 7.79905 82.6957L7.86152 82.6344C9.94312 80.5911 11.7533 78.8142 13.0144 76.6235C14.3125 74.3685 15 71.7381 15 68V27H14.9602C14.792 23.9527 14.0939 21.6956 12.9234 19.7206C11.6678 17.602 9.89318 15.8599 7.85959 13.8637L7.79957 13.8048C7.62629 13.6347 7.45088 13.4625 7.27295 13.2873C3.9102 9.97716 3.0011 4.42584 3 1.00588V0Z"
							class="mcI_jw"
						></path>
					</svg>
					<span aria-hidden="true" class="" style="position: absolute; top: 45%; left: 20%;">
						<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
							<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.25" d="M7 3.17 4.88 5.3a1 1 0 0 0 0 1.42L7 8.83" style="fill: white;"></path>
						</svg>
					</span>
				</div>

				<div style="height: 70px; display: block;">
					<div style="width: auto; display: inline-block; vertical-align: top; padding: 1%;">
						<i class="fas fa-play-circle" style="font-size: 45px; color: red;" aria-hidden="true"></i>
					</div>
					<div style="width: auto; display: inline-block; text-align: left; height: 80px; vertical-align: top; padding: 1.5% 1%;">
						<i class="fa fa-plus-square-o new_scene_btn" aria-hidden="true" style="cursor:pointer;font-size: 30px;color:white;"></i>
					</div>
					<div class="all_scenes" style="width: 80%; display: inline-block; padding: 0.5% 1% 1% 1%;">
						
					<?php	
						$sql_scene = "SELECT * FROM video_maker_scene WHERE p_id = '$v_m_id'";
						$result_scene = $conn->query($sql_scene);
						if ($result_scene->num_rows > 0) {   
							$scene_count = 1;
						while($row_scene = $result_scene->fetch_assoc()) {
							$scene_id =  $row_scene["id"];
							$scene_background = $row_scene["background"];
							$scene_duration = $row_scene["duration"];
							$animation_drag_area_width = ($scene_duration*197)+77;
					?>

						<div class="scene_tab scene_tab_<?= $scene_count; ?>" data-scenetab="<?= $scene_count; ?>" data-sceneid="<?= $scene_id; ?>" style="cursor:pointer;width: 8%; display: inline-block; margin-right: 1%;">
							<div class="scene_tab_child" style="height: 47px; background: #f7f7f7; border: 1px solid #dddd;">
							<?php if($scene_count == 1) { } else { ?>
								<i class="fa fa-times-circle remove_scene scene_with_id_<?= $scene_id; ?>" data-sceneremoveiconid="<?= $scene_id; ?>" aria-hidden="true" style="display:none;font-size: 14px;color: black;cursor: pointer;position: relative;margin-left: 88%;margin-top: -5%;"></i>
							<?php } ?>
							</div>
							<p style="font-size: 10px; font-weight: normal; color: white; text-align: center;margin:0;">screen #<?= $scene_count; ?></p>
						</div>

					<?php $scene_count++; } } else { }  ?>
					
					</div>
				</div>
			</div>





<?php include("popups.php"); ?>


</div>

<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.0/cropper.js'></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c08261462acba8afd37dae25-|49" defer="">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="script.js"></script>
