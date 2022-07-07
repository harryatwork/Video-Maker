<?php include("../db.php"); ?>

<?php
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else { 
        header("Location: ../sign/");
    } 
?>



<style>
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      .desktop {
		   display:none;
		}
		.mobile {
		   display:block;
		}
		.desktop_inline {
		   display:none;
		}
		.mobile_inline {
		   display:inline-block;
		}
		.alert {
			width: 200px;
		}
		.status {
			font-size: 12px;
		}
		
/* common */
	  .logo-box {
		  padding-top: 24px !important;
    	  padding-bottom: 0px;
		}
	  .nav-outer {
		  margin-top: 0% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .desktop {
		   display:none;
		}
		.mobile {
		   display:block;
		}
		.desktop_inline {
		   display:none;
		}
		.mobile_inline {
		   display:inline-block;
		}
		.alert {
			width: 200px;
		}
		.status {
			font-size: 12px;
		}
		
/* common */
	  .logo-box {
		  padding-top: 24px !important;
    	  padding-bottom: 0px;
		}
	  .nav-outer {
		  margin-top: 0% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
      .desktop {
		   display:block;
		}
		.mobile {
		   display:none;
		}
		.desktop_inline {
		   display:inline-block;
		}
		.mobile_inline {
		   display:none;
		}
		.alert {
			width: 500px;
		}
		.status {
			font-size: 15px;
		}
		
/* common */
		.logo-box {
		  padding-top: 24px !important;
    	  padding-bottom: 0px;
		}
		.nav-outer {
		  margin-top: 0% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
		.outer-box {
		  margin-top: -75px !important;
		}
    }
    
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
       .desktop {
		   display:block;
		}
		.mobile {
		   display:none;
		}
		.desktop_inline {
		   display:inline-block;
		}
		.mobile_inline {
		   display:none;
		}
		.alert {
			width: 500px;
		}
		.status {
			font-size: 15px;
		}
		
/* common */
		.logo-box {
		  padding-top: 24px !important;
    	  padding-bottom: 0px;
		}
		.nav-outer {
		  margin-top: 0% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
		.outer-box {
		  margin-top: -75px !important;
		}
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
       .desktop {
		   display:block;
		}
		.mobile {
		   display:none;
		}
		.desktop_inline {
		   display:inline-block;
		}
		.mobile_inline {
		   display:none;
		}
		.alert {
			width: 500px;
		}
		.status {
			font-size: 15px;
		}
		
/* common */
		.logo-box {
		  padding-top: 24px !important;
    	  padding-bottom: 0px;
		}
		.nav-outer {
		  margin-top: 0% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
		.outer-box {
		  margin-top: -75px !important;
		}
 }
</style>


<?php
     $sql_users = "SELECT * FROM users WHERE email = '$email'";
	$result_users = $conn->query($sql_users);
	if ($result_users->num_rows > 0) {   
	while($row_users = $result_users->fetch_assoc()) {  
		$u_id = $row_users["id"]; 
?>

	<section class="kc-elm kc-css-256913 kc_row">
		   <div class="kc-row-container">
			  <div class="kc-wrap-columns">
				 <div class="kc-elm kc-css-446018 kc_col-sm-12 kc_column kc_col-sm-12">
					<div class="kc-col-container">
					   <!-- Faq Ssection -->
					   <section class="faq-section" id="faqs-section" style="margin-top: 50px;">
						  <div class="auto-container">
							 <div class="sec-title style-three text-center">
								<h2 style="width: 56%;text-align: right;">Video Maker</h2>
								<a class="status" href="create_a_video?u_id=<?= $u_id; ?>" style="float: right;background: #6973ed;padding: 5px 15px;border-radius: 7px;color: white;margin-right: 5px;margin-top: -3.5%;font-weight: 600;cursor: pointer;">Create New Video</a>
							 </div>
			
							
							 <div class="row">
								<div class="column col-lg-12 col-md-12 col-sm-12">
								   <ul class="accordion-box">
									 
									   
									   <li class="accordion block" style="margin-bottom:0px;background:transparent;box-shadow:none;">
										 <div class="acc-btn" style="padding: 25px 10px !important;">
											
											<p style="display: inline-block;width: 15%;">Vd No: </p>
											<p style="display: inline-block;width: 15%;">Title:</p>
											<p class="desktop_inline" style="width: 15%;">Vd Dt:</p>
											<p style="display: inline-block;float: right;">Action</p>
											 
										 </div>
										</li>

					
						
					<?php 
					    

						$sql_video_maker = "SELECT * FROM video_maker WHERE u_id = '$u_id'";
						$result_video_maker = $conn->query($sql_video_maker);
						if ($result_video_maker->num_rows > 0) {   
						    $sl = 1;
						while($row_video_maker = $result_video_maker->fetch_assoc()) {  
							$vd_id = $row_video_maker["id"]; 
							$vd_date = $row_video_maker["date"]; 
							$vd_title = $row_video_maker["title"]; 
							
							
						$sql_video_maker_scenes = "SELECT * FROM video_maker_scene WHERE p_id = '$vd_id' ORDER BY id ASC LIMIT 1";
						$result_video_maker_scenes = $conn->query($sql_video_maker_scenes);
						if ($result_video_maker_scenes->num_rows > 0) {   
						while($row_video_maker_scenes = $result_video_maker_scenes->fetch_assoc()) {  
							$scene_id = $row_video_maker_scenes["id"]; 
						} } else { }
					?>
					
					   
									   <li class="accordion block" >
										 <div class="acc-btn" style="padding: 25px 10px !important;" onclick="acc_btn()">
											
											<p style="display: inline-block;width: 15%;font-weight: normal;padding-left: 3%;"><?= $sl; ?></p>
											<p class="desktop_inline" style="width: 15%;font-weight: normal;"><?= $vd_title; ?></p>
											<p class="desktop_inline" style="width: 15%;font-weight: normal;"><?= $vd_date; ?></p>
											<p style="display: inline-block;float: right;"><a href="player_id_set?id=<?= $vd_id; ?>&u_id=<?= $u_id; ?>&scene_id=<?= $scene_id; ?>" style="color:#6973ed;">View/Edit Video</a></p>

										 </div>
										</li>

					<?php $sl++; } } else {  } ?>
									   
					<?php } } else {  }  ?>
									 
								   </ul>
								</div>
							 </div>
						  </div>
					   </section>
					   <!--End Faq Ssection -->
					</div>
				 </div>
			  </div>
		   </div>
		</section>


