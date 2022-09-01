<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://kit.fontawesome.com/03465afe1b.js" crossorigin="anonymous"></script>

<!----- video Preview Modal Starts ------------------------>

<div class="video_preview_div" style="display:block;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 1920px;height: 1080px;position: absolute;zoom: 0.4;z-index:9;">
    <div class="video_preview_loading_div" style="height: 100%;width: 100%;background: linear-gradient(to left, #4caf50 0%, #5c9ae4 100%);">
        <svg class="circular-loader"viewBox="25 25 50 50" style="width: 300px;height: 300px;top: 35%;left: 43%;position: absolute;" >
            <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#ffffff" stroke-width="3" />
        </svg>
    </div>
    <div class="video_preview_overlay" style="display:block;cursor:pointer;height: 100%;width: 100%;background: #0000007a;position:absolute;z-index:9;">
        <!--<i class="fa fa-repeat video_preview_repeat" style="display:none;cursor:pointer;font-size: 200px;color: #ffffff;position: absolute;top: 50%;left: 35%;transform: translate(-50%, -50%);" aria-hidden="true"></i>-->
        <i class="fas fa-play-circle video_preview_play" style="cursor:pointer;font-size: 200px;color: #ffffff;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" aria-hidden="true"></i>
    </div>
    <div class="video_preview_overlay_another" style="display: none;cursor: pointer;height: 100%;width: 100%;background: transparent;position: absolute;z-index: 9999999;box-shadow: 0px 0px 20px 800px rgb(0 0 0);">
        
    </div>
    <div class="video_preview_content_div" style="position:absolute;display:none;height: 100%;width: 100%;background: <?= $scene_background; ?>;">
        
    </div>
</div>

<button class="video_preview_btn" >s</button>

<!----- video Preview Modal Ends ------------------------>

<script>
//------Slider Preview Stuff Starts ---------------------------------------------------------------------------------------------------------------------------------->
$(".video_preview_btn").on("click",function() {
    $("#overlay2,.video_preview_div").css("display","block");
    let v_m_id = 1;
    let scene_id = 1;
    $.post(
     'database_functions/video_preview.php',
      {
         project_id: v_m_id,
         scene_id : scene_id
      },
      function(result){ 
         $(".video_preview_content_div").html(result);
         setTimeout(function(){
         	$(".video_preview_loading_div").css("display","none");
         	$(".video_preview_overlay").css("display","block");
         	$(".video_preview_overlay_another").css("display","block");
         	$(".video_preview_content_div").css("display","block");
         }, 3000);
        //  save_btn();
      }
    );
});
//------Slider Preview Stuff Ends ------------------------------------------------------------------------------------------------------------------------------------>
</script>