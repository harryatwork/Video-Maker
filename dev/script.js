
document. addEventListener("keydown", function (event) {
    if (event. ctrlKey) {
        event. preventDefault();
    }
});


//-- Pre_loader -------------------->

$(document).ready(function() {
  setTimeout(function() {
 	$(".main_overlay").css("display","none");
  }, 10000);
});



//-- Pre Loader Ends -------------->


//--- Save Function Starts ------------------------------------------------------------------------------------------------------------------------------------------------------------>

$(".save_btn").on("click", function() {
    save_btn();
});

function save_btn() {
    $(".save_btn").html(`<svg class="circular-loader"viewBox="25 25 50 50" style="width: 25px;position: relative;height: 20px;vertical-align: top;" >
                     <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#ffffff" stroke-width="3" />
                  </svg> Saving`);
    setTimeout(function(){
     	$(".save_btn").html(`<i class="fa fa-check" aria-hidden="true" style="width: 30px; -webkit-text-stroke: 1px white;"></i> Saved`);
    }, 1000);
}

//-- Save Function Ends -------------------------------------------------------------------------------------------------------------------------------------------------------------->


//-- Project Title Input -------------------------------------------------------------------------------------------------------------------------------------------------------------->

$('#v_m_title').on('input',function(){
	let v_m_title = $("#v_m_title").val();
	let v_m_id = $("#v_m_id").val();
    $.post(
    	'database_functions/update_title.php',
      {
         v_m_title: v_m_title,
         v_m_id: v_m_id,
      },
     function(result){
        save_btn();
     }
  );
});

//-- Project Title input ends --------------------------------------------------------------------------------------------------------------------------------------------------------------->



//-- Layer title Input -------------------------------------------------------------------------------------------------------------------------------------------------------------->

$(document).on("input", ".layer_title", function(){
	let layer_title = $(this).val();
	let layer_id_of_layer_title = $(this).attr('id');
	

    $.post(
    	'database_functions/update_layer_title.php',
      {
         layer_title: layer_title,
         layer_id_of_layer_title: layer_id_of_layer_title
      },
     function(result){
        $('[data-mainlayerid="'+layer_id_of_layer_title+'"]').html(layer_title);
        save_btn();
     }
  );
});

//-- Layer input ends --------------------------------------------------------------------------------------------------------------------------------------------------------------->



//-- Top Header Stuff Starts ----------------------------------------------------------------------------------------------------------------------------------->

$("body").click(function() {
    $(".resize_div").fadeOut(500);
    $(".file_div").fadeOut(500);
    clearInterval(draggable_bgm_track_run);
});

$(".resize_div,.file_div").click(function() {
    event.stopPropagation();
});
$(".resize_btn").click(function() {
    event.stopPropagation();
    $(".file_div").fadeOut(500);
    if($('.resize_div').css('display') == 'none') {
        $(".resize_div").fadeIn(500);
    } else {
        $(".resize_div").fadeOut(500);
    }
});
$(".file_btn").click(function() {
    event.stopPropagation();
    $(".resize_div").fadeOut(500);
    if($('.file_div').css('display') == 'none') {
        $(".file_div").fadeIn(500);
    } else {
        $(".file_div").fadeOut(500);
    }
});


//-- Top Header Stuff Ends ----------------------------------------------------------------------------------------------------------------------------------->




//-- Overlay stuff	----------------------------------------------------------------------------------------------------------------------------------------------->


$(".close_popups").on("click", function() {
    $("#overlay").css("display","none");
    
    $("#video_upload_div").css("display","none");
    $("#video_upload_div_content").css("display","block");
    $("#video_upload_div_youtube").css("display","none");
    $(".video_upload_submit_btn_div").css("display","block");
    $("#video_upload_div_content_preview").html('<video width="100%" height="280" id="video-preview-div" style="" controls><source src="mov_bbb.mp4" id="video_here"></video>');
    $("#video_upload_div_content_preview").css("display","none");

    $("#audio_upload_div").css("display","none");
    $("#audio_upload_btn_custom").html('<i class="fa fa-cloud-upload" id="audio_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;"></i><br />Custom Upload');
    $(".audio_upload_submit_btn_div").css("display","block");
    
    $("#image_upload_div").css("display","none");
    $("#image_upload_div_content").css("display","block");
    $(".image_upload_submit_btn_div").css("display","block");
    $("#image_upload_div_content_preview").html('<img src="" id="image_here" />');
    $("#image_upload_div_content_preview").css("display","none");
    
    $("#background_upload_div").css("display","none");
    $("#background_upload_div_content").css("display","block");
    $(".background_upload_submit_btn_div").css("display","block");
    $("#background_upload_div_content_preview").html('<img src="" id="background_here" />');
    $("#background_upload_div_content_preview").css("display","none");
    
    $("#image_crop_div").css("display","none");
    $("#image_cropped").val("");
    $("#image_cropped_preview").attr("src","");
    // $("#image_crop_div_content_preview").html('<img id="image_cropped_preview" />');
    $(".salvar").css("display","block");
    $(".image_crop_submit_btn_div").css("display","none");

    // $("#video_cutter_youtube_div").html("");
    // $("#video_cutter_youtube_div").css("display","none");
});


//-- Overlay stuff Ends	----------------------------------------------------------------------------------------------------------------------------------------------->







//-- Bottom Slide Static div Display/Block ------------------------------------------------------------------------------------------------------------------------------------------>

$("#bottom_player_btn").click(function() {
    if($("#bottom_player_div").hasClass("hidden")) {
        $("#bottom_player_div").css("bottom","0%");
        $("#bottom_player_div").removeClass("hidden");
    } else {
        $("#bottom_player_div").css("bottom","-12%");
        $("#bottom_player_div").addClass("hidden");
    }
});

$(document).ready(function() {

  $(".scene_tab_1").click();

  setTimeout(function() {
 	$("#screens_slider_btn").click();
  }, 1000);
});

// Windows onscroll header display ---------------------------------------------

$(window).scroll(function () {
	if ($(this).scrollTop() > 75) {
		$(".main-header").slideUp( "fast", function() {});
	} else {
		$(".main-header").slideDown( "fast", function() {});
	}
});

//-- Bottom Slide Static div Display/Block Ends ------------------------------------------------------------------------------------------------------------------------------------------>





//-- Left bar Menu Switch between layers and media ------------------------------------------------------------------------------------------------------------------------------------------>		   
$(document).on("click","#card-title-media",function() {
	$(".card-title").css({"background": "transparent", "color": "white"});
	$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
	$("#card-body").css("display","none");
	$("#card-body2").css("display","block");
});
$(document).on("click","#card-title-layers",function() {
	$(".card-title").css({"background": "transparent", "color": "white"});
	$("#card-title-layers").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
	$("#card-body").css("display","block");
	$("#card-body2").css("display","none");
});

//-- Left bar Menu Switch between layers and media ends ------------------------------------------------------------------------------------------------------------------------------------------>										 
	
	
	
	
			
//-- Animation Timeline Display/Block -------------------------------------------------------------------------------------------------------------------------------------->

$(document).on("click","#slide_timeline_btn",function() {
	$("#slide_timeline_div").slideToggle(1000);
// 	$("#bottom_player_btn").click(); 
});

//Animation timeline display -------------------------------------------------->

// $("#bgm_audio_btn_remove").on("click", function() {
//     $(".bgm_layer").remove();
// 	$("#bgm_audio_div").css("display","none");
// 	$("#bgm_audio_choose").css("display","inline-block");
// 	$("#bgm_audio_btn_remove").css("display","none");
// });
$("#speech_audio_btn_remove").on("click", function() {
    $(".voice_layer").remove();
	$("#speech_audio_div").css("display","none");
	$("#speech_audio_choose").css("display","inline-block");
	$("#speech_audio_btn_remove").css("display","none");
});

//Animation timeline display ENds -----------------------------------------------

// Draggable Audio & Timeline Animation Link ------------------------------------>		   

function animation_draggables(){
	$('#bgm_audio')
		.draggable({ 
		axis: "x",
		containment: '#bgm_audio_div',
	})
	
	
	$('#speech_audio')
		.draggable({ 
		axis: "x",
		containment: '#speech_audio_div',
	})
	
	$('#timeline_dragger')
		.draggable({ 
		axis: "x",
		containment: '#timeline_dragger_div',
	})
	
	
	$('.draggable_layer_indi_common')
    		.draggable({ 
    		axis: "x",
    		containment: '.draggable_layer_containment_indi_common',
    	})
    		.resizable({ 
    		handles: 'e, w',
    		containment: '.draggable_layer_containment_indi_common',
        	drag: function(event) {
            var top = $(this).position().top;
            var left = $(this).position().left;
            // console.log(1);
            ICZoom.panImage(top, left);
    		},
    	});
}

//-- Draggable Animation Link Ends -------------------------------------------------------------------------------------------------------------------------------------->







//-- Work Area size Select modifier -------------------------------------------------------------------------------------------------------------------------------------------------->										 


$('#resolution_selector').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
	if(valueSelected == '1920x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1920);
		$("#custom_size_right").val(1080);
		$("#work_area_div").css({"width": "1920px", "height": "1080px"});
	} else if(valueSelected == '1080x1920'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(1920);
		$("#work_area_div").css({"width": "1080px", "height": "1920px"});
	} else if(valueSelected == '1080x720'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(720);
		$("#work_area_div").css({"width": "1080px", "height": "720px"});
	} else if(valueSelected == '720x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(720);
		$("#custom_size_right").val(1080);
		$("#work_area_div").css({"width": "720px", "height": "1080px"});
	} else if(valueSelected == '1080x1080'){
		$(".custom_size").css("display","none");
		$("#custom_size_left").val(1080);
		$("#custom_size_right").val(1080);
		$("#work_area_div").css({"width": "1080px", "height": "1080px"});
	} else if(valueSelected == 'CUSTOM'){
		$(".custom_size").css("display","inline-block");
		$("#custom_size_left").change(function(){
			let custom_size_left = $("#custom_size_left").val();
			$("#work_area_div").css("width", custom_size_left+"px");
		});
		$("#custom_size_right").change(function(){
			let custom_size_right = $("#custom_size_right").val();
			$("#work_area_div").css("height", custom_size_right+"px");
		});
		
	} else {
		$(".custom_size").css("display","inline-block");
	}
});


 // Left Bar and Work Area display & Slide functions -------------------------->

$("#left_bar_icon_music").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#audio-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
		$("#media_child").css("display","block");
		$(".indi-div-uploads").css("display","none");
		$(".indi-div-library").css("display","block");
		$("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_library_audios").css("display","block");
	} else {
		if($('#audio-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else {
			$(".media-div").css("display","none");
			$("#audio-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","block");
			$(".indi-div-uploads").css("display","none");
		    $(".indi-div-library").css("display","block");
		    $("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
            $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
		}
	}
});
	
$("#left_bar_icon_video").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#videos-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
		$("#media_child").css("display","block");
		$(".indi-div-uploads").css("display","none");
		$(".indi-div-library").css("display","block");
		$("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_library_videos").css("display","block");
	} else {
		if($('#videos-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#videos-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","block");
			$(".indi-div-uploads").css("display","none");
		    $(".indi-div-library").css("display","block");
		    $("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
            $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
		}
	}
});

$("#left_bar_icon_image").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#images-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
		$("#media_child").css("display","block");
		$(".indi-div-uploads").css("display","none");
		$(".indi-div-library").css("display","block");
		$("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_library_images").css("display","block");
	} else {
		if($('#images-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#images-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","block");
			$(".indi-div-uploads").css("display","none");
		    $(".indi-div-library").css("display","block");
		    $("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
            $("#media_child_uploads_btn").css({"background":"","color":"white"});
		}
	}
});

$("#left_bar_icon_bg").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#backgrounds-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
		$("#media_child").css("display","block");
		$(".indi-div-uploads").css("display","none");
		$(".indi-div-library").css("display","block");
		$("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_library_backgrounds").css("display","block");
	} else {
		if($('#backgrounds-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#backgrounds-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","block");
			$(".indi-div-uploads").css("display","none");
		    $(".indi-div-library").css("display","block");
		    $("#media_child_library_btn").css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
            $("#media_child_uploads_btn").css({"background":"transparent","color":"white"});
		}
	}
});	
	
$("#left_bar_icon_template").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#templates-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
	} else {
		if($('#templates-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#templates-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","none");
		}
	}
});	

$("#left_bar_icon_font").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#fonts-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
	} else {
		if($('#fonts-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#fonts-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","none");
		}
	}
});	


$("#left_bar_icon_shape").on("click", function() {
    $("#card-title-layers").css({"width":"48%","display":"inline-block"});
    $("#card-title-media").css({"width":"48%","display":"inline-block"});
	if($('.left_bar_menu_div').css('display') == 'none') {
		$('#work_area').animate({
			width:'60%',
			marginLeft: '19%',
			zoom: '0.7'
		}, 50, 'linear')  
		$(".right_side_panel").css("width","21%");
		$(".left_bar_menu_div").fadeIn(50);
		$(".left_bar_menu_div").css("display","inline");
		$(".media-div").css("display","none");
		$("#shapes-indi-div").css("display","block");
		$("#card-body").css("display","none");
		$("#card-body2").css("display","block");
		$(".card-title").css({"background": "transparent", "color": "white"});
		$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
	} else {
		if($('#shapes-indi-div').css('display') == 'block') {
			$('#work_area').animate({
				width:'73%',
				marginLeft: '1%',
				zoom: '0.9'
			}, 50, 'linear') 
			$(".right_side_panel").css("width","100%");
			$(".left_bar_menu_div").fadeOut(50);
			$(".left_bar_menu_div").css("display","none");
			$("#media_child").css("display","none");
		} else { 
			$(".media-div").css("display","none");
			$("#shapes-indi-div").css("display","block");
			$("#card-body").css("display","none");
			$("#card-body2").css("display","block");
			$(".card-title").css({"background": "transparent", "color": "white"});
			$("#card-title-media").css({"background": "linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)", "color": "white"});
			$("#media_child").css("display","none");
		}
	}
});	


//-- Work Area size modifier ---------------------------------------------------

$("#size_ranger").on('input', function () {
    $("#msc-slides-container").css({"zoom": $(this).val() });
});

//-- Work Area size Select modifier Ends -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->								 
	
		   




//-- Left Bar and Work Area display & Slide functions Starts ------------------------------------------------------------------------------------------------------------------------------------------------>

$(document).on("click", ".media_child_uploads_btn", function(){
    let media_child_data_div = $(this).attr("data-library");
        $(".media_child_library_btn").css({"background":"linear-gradient(to top, #5895d9 0%, #5895d7 100%)","color":"white"});
        $(this).css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_uploads_"+media_child_data_div).css("display","block");
});

$(document).on("click", ".media_child_library_btn", function() {
    let media_child_data_div = $(this).attr("data-library");
        $(".media_child_uploads_btn").css({"background":"linear-gradient(to top, #5895d9 0%, #5895d7 100%)","color":"white"});
        $(this).css({"background":"linear-gradient(to top, #5b9ae2 0%, #b9d9ff 100%)","color":"white"});
        $(".data_uploads_common").css("display","none");
        $(".data_library_"+media_child_data_div).css("display","block");
});



$(document).on("click", ".close_left_menu_detail_btn", function() {
    $('#work_area').animate({
		width:'73%',
		marginLeft: '1%',
		zoom: '0.9'
	}, 50, 'linear') 
	$(".right_side_panel").css("width","100%");
	$(".left_bar_menu_div").fadeOut(50);
	$(".left_bar_menu_div").css("display","none");
	$("#media_child").css("display","none");
});


//-- Left Bar and Work Area display & Slide functions ENDS -------------------------------------------------------------------------------------------------------------------------------------------------->





	
//-- Screen time incre and Decre ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->						 


$(document).on("click","#slide_time_plus",function() {
	$("#slide_time_minus").attr("disabled", false);
	let slide_time = parseInt($("#slide_time").text());
	let slide_time_p = slide_time+1;
	let project_id = $("#v_m_id").val();
	let scene_id = $("#scene_id").val();
	    
	if(slide_time == 30){
		$("#slide_time").text(slide_time);
		$("#slide_time_plus").attr("disabled", true);
	} else { 
		$("#slide_time").text(slide_time_p);
		$("#slide_time_plus").attr("disabled", false);
		$(".timeline_secs").append('<p class="animation_secs">| <span class="animation_secs_span">'+slide_time_p+' Sec</span></p>');
		let default_width = 77;
		let new_width = (slide_time_p*197)+default_width;
		$(".animation_drag_area").css("width",new_width);
	    
	    $.post(
        	'database_functions/scene_duration.php',
          {
             scene_id:scene_id,
             project_id: project_id,
             scene_duration: slide_time_p
          },
         function(result) {
            save_btn();
         }
	   );
	   
	}
});
$(document).on("click","#slide_time_minus",function() {
	$("#slide_time_plus").attr("disabled", false);
	let slide_time = parseInt($("#slide_time").text());
	let slide_time_m = slide_time-1;
	let project_id = $("#v_m_id").val();
	let scene_id = $("#scene_id").val();
	
	if(slide_time == 5){
		$("#slide_time").text(slide_time);
		$("#slide_time_minus").attr("disabled", true);
	} else { 
		$("#slide_time").text(slide_time_m);
		$("#slide_time_minus").attr("disabled", false);
		$('.timeline_secs').children().last().remove();
		let default_width = 77;
		let new_width = (slide_time_m*197)+default_width;
		$(".animation_drag_area").css("width",new_width);
		
	    $.post(
        	'database_functions/scene_duration.php',
          {
             scene_id:scene_id,
             project_id: project_id,
             scene_duration: slide_time_m
          },
         function(result) {
            save_btn()
            console.log(scene_id);
         }
	   );
		
	}
});


//-- Screen time incre and Decre Ends ---------------------------------------------------------------------------------------------------------------------------------------------->
		
		

		

//-- Draggable stuff Layer ------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

//-- BGM layer Drag & Drop ----->

function dragger_bgm() {
    $(".draggable_bgm").draggable({
      revert: "invalid",
      containment: "#bgm_work_area",
      helper: "clone",
      cursor: "move"
    });
    
    $(".draggable_bgm").draggable({
      revert: "invalid",
      containment: "#bgm_work_area",
      cursor: "move"
    });

    $("#bgm_work_area").droppable({
      accept: ".draggable_bgm",
      containment: "#bgm_work_area",
      drop: function( event, ui ) {
          
        $("#bgm_audio_choose").css("display","none");
        $("#bgm_audio_div").css("display","inline-block");
        // $("#bgm_audio_btn_remove").css("display","block");
        let bgm_length_time = parseInt(ui.draggable.attr('duration-id'));
            bgm_length = bgm_length_time*207;
        $("#bgm_audio").css("width",bgm_length);
        let bgm_id = ui.draggable.attr('bgm-id');
        $("#bgm_audio").attr('droppedbgm-id', bgm_id);
        
        let bgm_title = ui.draggable.attr('audio-layer-title');
        // console.log(bgm_length);
        
        $("#card-title-layers").click();
        
        // Background Layer to Backend -------------------
        	let project_id = $("#v_m_id").val();
        	let scene_id = $("#scene_id").val();
            let u_id = $("#u_id").val();
            let main_layer_id;
            let layer_type_id = bgm_id;
            
            $.post(
            	'database_functions/add_layer.php',
              {
                 layer: 'BGM',
                 title: 'BGM Layer-'+0,
                 layer_count: 0,
                 project_id : project_id,
                 scene_id : scene_id,
                 u_id : u_id,
                 layer_type_id : layer_type_id
              },
             function(result){
                save_btn();
                
                var main_layer_id = result;
                
                $(".legendary_layers").append(`<div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer bgm_layer" layer_id="00" id="layer_tab_layer00" style="margin-bottom: 5px !important;cursor: pointer;bottom: 6%;position: absolute;width: 90%;">
                                			<div class="card-body p-2" style="padding: 5px !important;">
                                				<div class="row">
                                				    <div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                                						&nbsp;
                                					</div>
                                					<div class="col-4 col-sm-4 col-md-4 card-text" style="padding: 0px;padding-top: 4px;">
                                						<div class="ellipsis" style="font-size: 12px;">
                                						    BGM Layer
                                						</div>
                                					</div>
                                					<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                            							<div class="msc-layer-buttons" style="width:auto;">
                            								<button type="button" data-id="00" data-layer-id="`+result+`" class="btn btn-outline-danger btn-sm show-on-hover button-bgm-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                            									<i class="icon-cancel3"></i>
                            								</button>
                            							</div>
                            						</div>
                                				</div>
                                			</div>
                                		</div>`);
        			
        // 			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);

        			// Adding Draggable Timeline Layer - BGM --------------------------------------------------------------------------------
          
                    $.post(
                    	'database_functions/add_draggable_layer.php',
                      {
                         layer: 'BGM',
                         title: 'BGM Layer-'+0,
                         layer_count: 0,
                         main_layer_id: main_layer_id,
                         project_id : project_id,
                         u_id : u_id,
                         layer_length : bgm_length
                      },
                     function(result) {
                        $(".bgm_audio_crop_btn").attr("draggable_layer_id",result);
                     }
                    );
                    
                    
                    // Adding Draggable Timeline Timing - BGM --------------------------------------------------------------------------------
          
                    $.post(
                    	'database_functions/animation_layer_timeline_update.php',
                      {
                         layer_id: main_layer_id,
                         animationdraggablelayer_left : 0,
                         animationdraggablelayer_width : bgm_length
                      },
                     function(result) {
                        // draggable_layer_id = result;
                        // console.log(bgm_length);
                        
                        
                        
                        let slide_time = parseInt($("#slide_time").text());
                        let round_bgm_lenght = parseInt(Math.round(bgm_length_time));
                        // console.log(round_bgm_lenght);
                        // console.log(bgm_length_time);
                        // console.log(slide_time);
                        if(round_bgm_lenght > slide_time) {
                            $(".audio_trimming_modal_close_btn").attr("data-id","00");
                            $(".audio_trimming_modal_close_btn").attr("data-layer-id",main_layer_id);
                            $(".audio_trim_modal_1").css("display","block");
                            $("#overlay").css("display","block");
                            $(".audio_trim_modal_1, .audio_trim_modal_2, .bgm_audio_track, .draggable_bgm_track").attr("data-length",round_bgm_lenght);
                            $(".bgm_audio_play").attr("bgm-title",bgm_title);
                            $("#bgm_trim_audio").attr("src",'images-main/audio/'+bgm_title);
                            $("#bgm_trim_audio").attr("data-source",'images-main/audio/'+bgm_title);

                            function secondsTimeSpanToHMS(s) {
                              var h = Math.floor(s / 3600); //Get whole hours
                              s -= h * 3600;
                              var m = Math.floor(s / 60); //Get remaining minutes
                              s -= m * 60;
                              return (m < 10 ? '0' + m : m) + ":" + (s < 10 ? '0' + s : s); //zero padding on minutes and seconds
                            }
                            
                            let round_bgm_lenght_echo = (secondsTimeSpanToHMS(round_bgm_lenght));
                            
                            $(".bgm_length").html(round_bgm_lenght_echo);
                            $(".bgm_trim_dragger_right").html(round_bgm_lenght_echo);
                            
                            // let bgm_trim_audio_ruling = '';
                            // let bgm_trim_audio_ruling_width = (800/round_bgm_lenght)+0.5;
                            // for(let i = 1; round_bgm_lenght > i; i++) {
                            //     bgm_trim_audio_ruling = bgm_trim_audio_ruling+'<span style="width: '+bgm_trim_audio_ruling_width+'px; font-family: monospace; display: inline-block; text-align: right;">|<span>'+i+'</span></span>';
                            // }
                            // $(".bgm_trim_audio_ruling").html(bgm_trim_audio_ruling);
                            
                        } else { }
                        
                        
                     }
                    );
             }
          );
      }
    });
}

function dragger_bgm_track() {
    
    $('.draggable_bgm_track')
		.draggable({ 
		axis: "x",
		containment: '.bgm_track_work_area',
	})
		.resizable({ 
		handles: 'e, w',
		containment: '.bgm_track_work_area',
    	drag: function(event) {
        var top = $(this).position().top;
        var left = $(this).position().left;
        // console.log(1);
        ICZoom.panImage(top, left);
		},
	});

}
    

$(document).on("click", ".button-bgm-layer-remove", function(){
    $(".bgm_layer").remove();
    $("#bgm_audio_choose").css("display","inline-block");
    $("#bgm_audio_div").css("display","none");
    // $("#bgm_audio_btn_remove").css("display","none");
});


//-- BGM drag & drop stuff ends -------------->


//-- Voice layer Drag & Drog Stuff ------------>

function dragger_voice() {
    $(".draggable_voice").draggable({
      revert: "invalid",
      containment: "#voice_work_area",
      helper: "clone",
      cursor: "move"
    });
    
    $(".draggable_voice").draggable({
      revert: "invalid",
    //   containment: "#voice_work_area",
      cursor: "move"
    });

    $("#voice_work_area").droppable({
      accept: ".draggable_voice",
      containment: "#voice_work_area",
      drop: function( event, ui ) {
        
        $("#speech_audio_choose").css("display","none");
        $("#speech_audio_div").css("display","inline-block");
        $("#speech_audio_btn_remove").css("display","block");
        let speech_length = parseInt(ui.draggable.attr('duration-id'));
            speech_length = speech_length*207;
        $("#speech_audio").css("width",speech_length);
        let speech_id = ui.draggable.attr('speech-id')
        $("#speech_audio").attr('droppedspeech-id', speech_id);
        // console.log(speech_length);
        
        $(".legendary_layers").append(`<div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer bgm_layer" layer_id="00" id="layer_tab_layer00" style="margin-bottom: 5px !important;cursor:pointer;bottom: 7%;position: absolute;width: 90%;">
                                			<div class="card-body p-2" style="padding: 5px !important;">
                                				<div class="row">
                                				    <div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                                						&nbsp;
                                					</div>
                                					<div class="col-4 col-sm-4 col-md-4 card-text" style="padding: 0px;padding-top: 4px;">
                                						<div class="ellipsis" style="font-size: 12px;">
                                						    Audio Layer
                                						</div>
                                					</div>
                                					<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                            							<div class="msc-layer-buttons" style="width:auto;">
                            								<button type="button" data-id="00" class="btn btn-outline-danger btn-sm show-on-hover button-bgm-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                            									<i class="icon-cancel3"></i>
                            								</button>
                            							</div>
                            						</div>
                                				</div>
                                			</div>
                                		</div>`);
  
        $("#card-title-layers").click();
      }
    });
    
}

$(document).on("click", ".button-voice-layer-remove", function(){
    $(".voice_layer").remove();
    $("#speech_audio_choose").css("display","inline-block");
    $("#speech_audio_div").css("display","none");
    $("#speech_audio_btn_remove").css("display","none");
});


//-- Voice Layer Drag & Drop Ends ------------->




//-- Normal Layer Drag & Drop Stiff ------>




function dragger() {
    $(".draggable").draggable({
      revert: "invalid",
      containment: "#work_area_div_sub",
      helper: "clone",
      cursor: "move"
    });

    $(".draggable2").draggable({
      revert: "invalid",
    //   containment: "#work_area_div_sub",
      cursor: "move"
    });

    $("#work_area_div_sub").droppable({
      accept: ".draggable, .draggable2",
      containment: "#work_area_div_sub",
      drop: function( event, ui ) {
          

        if((ui.draggable).hasClass('draggable2')) {
            
            if((ui.draggable).hasClass('font')) {
                
                $(".draggable2").resizable({
                    handles: "n, e, s, w"
                });
                
            } else if((ui.draggable).hasClass('shape')) {
                
                // $(".draggable2").resizable({
                //     handles: "n, e, s, w"
                // });
                
            } else {
                
                $(".draggable2").resizable({
                    handles: "n, e, s, w, se, ne, sw, nw",
                    aspectRatio: true
                });

            }
            
        } else { 

            if((ui.draggable).hasClass('font')) {
                
                let font_id = ui.draggable.attr('font-id');
                ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 font").css({"width": "450px","height": "130px","min-height":"fit-content","position": "absolute","top":"40%","left":"40%","padding": "0px 18px 20px 4px"}).html(`<i class="fa fa-arrows font-arrow-mover" aria-hidden="true" style="position: absolute;top:-35%;left:50%;transform: translate(-50%, -50%);font-size: 50px;"></i><textarea type="text" class="font-input" style="font-family:`+font_id+`;font-size:100px;text-align:center;width:100%;height:100%;overflow:hidden;background: transparent;resize: none;" >Preview</textarea> `);
                
                $(".draggable2").resizable({
                  handles: "n, e, s, w"
                });
                
                
            } else if((ui.draggable).hasClass('shape')) {
                
                if((ui.draggable).hasClass('Sqaure')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" class="svg_rect" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><rect class="rect" x="10" y="10" width="200" height="200" stroke="black" fill="transparent" stroke-width="5"></rect></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                } else if((ui.draggable).hasClass('Sqaure_Round')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><rect x="10" y="10" rx="30" ry="30" width="200" height="200" stroke="black" fill="transparent" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                } else if((ui.draggable).hasClass('Circle')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><circle cx="50%" cy="50%" r="100" stroke="black" fill="transparent" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                } else if((ui.draggable).hasClass('Elipse')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><ellipse cx="50%" cy="50%" rx="100" ry="20" stroke="black" fill="transparent" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                } else if((ui.draggable).hasClass('Line')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><line x1="10" x2="200" y1="10" y2="200" stroke="black" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                } else if((ui.draggable).hasClass('Stroke')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><polyline points="60 110 65 120 70 115 75 130 80 125 85 140 90 135 95 150 100 145" stroke="black" fill="transparent" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                    
                    
                } else if((ui.draggable).hasClass('Star')) {
                    
                    let shape_id = ui.draggable.attr('shape-id');
                    ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2 shape").css({"width": "auto","height": "auto","min-height":"fit-content","position": "absolute","top":"40%","left":"40%"}).html(`<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height: 220px;width: 220px;"><polygon points="50 160 55 180 70 180 60 190 65 205 50 195 35 205 40 190 30 180 45 180" stroke="black" fill="transparent" stroke-width="5"/></svg>`);
                    
                    // $(".draggable2").resizable({
                    //   handles: "n, e, s, w"
                    // });
                
                } else { }
                
                
            } else {
    
              
              ui.draggable.clone().appendTo($(this)).draggable().removeClass("draggable").addClass("draggable2").css({"width": "40%","height": "auto","position": "absolute","top":"30%","left":"30%"});
              
              $(".draggable2").resizable({
                  handles: "n, e, s, w, se, ne, sw, nw",
                  aspectRatio: true
              });
              
            }
    
              let layer_count = (parseInt($("#layer_count").val()) + 1);
              $("#layer_count").val(layer_count);
    
              $(".draggable2").parent().find('.draggable2:last').attr('data-layercount', layer_count);
              $(".draggable2").parent().find('.draggable2:last').css('z-index', layer_count);
              let layer_type_id = $(".draggable2").parent().find('.draggable2:last').attr('layer-type-id');
              
              if($(".draggable2").parent().find('.draggable2:last').hasClass('background')) {
                 var copy_button = '';
                 var layer_title = 'Background Layer';
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('image')) {
                 var copy_button = '<button type="button" data-id="'+layer_count+'" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;"><i class="icon-copy"></i></button>';
                 var layer_title = 'Image Layer-'+layer_count;
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('video')) {
                 var layer_title = 'Video Layer-'+layer_count;
                 var copy_button = '<button type="button" data-id="'+layer_count+'" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;"><i class="icon-copy"></i></button>';
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('font')) {
                 var layer_title = 'Font Layer-'+layer_count;
                 var copy_button = '<button type="button" data-id="'+layer_count+'" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;"><i class="icon-copy"></i></button>';
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('shape')) {
                 var layer_title = 'Shape Layer-'+layer_count;
                 var copy_button = '<button type="button" data-id="'+layer_count+'" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;"><i class="icon-copy"></i></button>';
              } else { } 
              
    
              if($(".draggable2").parent().find('.draggable2:last').hasClass('background')) {
                  $(".draggable2").parent().find('.draggable2 img:last').css({"width": "100%","height": "100%","object-fit": "cover"});
                  $(".draggable2").parent().find('.draggable2:last').attr('data-layer', 'background');
                  $(".draggable2").parent().find('.draggable2:last').attr('data-status', 'idle');
                  $(".draggable2").parent().find('.draggable2:last').css({"width":"100%","height":"100%","left":"-6px","top":"-6px"});
                  $(".draggable2").parent().find('.draggable2:last').resizable( "disable" );
                  
                  
                  // Background Layer to Backend -------------------
                	let project_id = $("#v_m_id").val();
                	let scene_id = $("#scene_id").val();
                    let u_id = $("#u_id").val();
                    let main_layer_id;
                    
                    $.post(
                    	'database_functions/add_layer.php',
                      {
                         layer: 'background',
                         title: 'Background Layer-'+layer_count,
                         layer_count: layer_count,
                         project_id : project_id,
                         scene_id : scene_id,
                         u_id : u_id,
                         layer_type_id : layer_type_id
                      },
                     function(result){
                        save_btn();
                        
                        var main_layer_id = result;
                        
                        $(".layer_items").prepend(`
                          <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
                				<div class="card-body p-2" style="padding: 5px !important;">
                					<div class="row">
                						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
                						</div>
                						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
                							<div class="ellipsis" style="font-size: 12px;">
                							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
                						</div>
                						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                							<div class="msc-layer-buttons" style="width:auto;">
                								`+copy_button+`
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-cancel3"></i>
                								</button>
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-eye2"></i>
                								</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>`);
                			
                			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                			
                			
                			// Adding Draggable Timeline Layer - Background --------------------------------------------------------------------------------
                  
                            $.post(
                            	'database_functions/add_draggable_layer.php',
                              {
                                 layer: 'background',
                                 title: 'Background Layer-'+layer_count,
                                 layer_count: layer_count,
                                 main_layer_id: main_layer_id,
                                 project_id : project_id,
                                 u_id : u_id
                              },
                             function(result) {
                                draggable_layer_id = result;
                                
                                $(".animation_drag_area").prepend(`<div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_`+layer_count+`">
                    									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                    										<span data-draggableid="`+draggable_layer_id+`" data-mainlayerid="`+main_layer_id+`" data-mainlayercount="`+layer_count+`" style="font-weight: 600; font-size: 17px;">Background Layer-`+layer_count+` <span id="layer_title" style="font-weight:normal;"> </span></span>
                    									</div>
                    									<div style="height: 34px;display:inline-block;width: 100%;" id="layer_dragger_div_`+layer_count+`">
                    										<div id="layer_dragger_`+layer_count+`" data-mainlayeriddraggable="`+main_layer_id+`" class="draggable_layer_indi_common" data-animationdraggablelayercount="`+layer_count+`" style="background: #d5e8ff;min-height:40px;height: 40px;width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                    										</div>
                    									</div>
                									</div>`);
 
                                    $('#layer_dragger_'+layer_count)
                                		.draggable({ 
                                		axis: "x",
                                		containment: '#layer_dragger_div_'+layer_count,
                                	})
                                		.resizable({ 
                                		handles: 'e, w',
                                		containment: '#layer_dragger_div_'+layer_count,
                                    	drag: function(event) {
                                        var top = $(this).position().top;
                                        var left = $(this).position().left;
                                
                                        ICZoom.panImage(top, left);
                                		},
                                	});
                                
                                
                             }
                            );
                     }
                  );
                
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('image')) {
                  $(".draggable2").parent().find('.draggable2 img:last').css({"width": "99%","height": "99%","object-fit": "fill"});
                  $(".draggable2").parent().find('.draggable2:last').attr('data-layer', 'image');
                  $(".draggable2").parent().find('.draggable2:last').attr('data-status', 'idle');
                  $(".draggable2").parent().find('.draggable2:last').css({"width":"40%","height":"auto"});
                  
                  let project_id = $("#v_m_id").val();
                  let scene_id = $("#scene_id").val();
                  let u_id = $("#u_id").val();
                  let main_layer_id;
                  let draggable_layer_id;

                // Image Layer to Backend ---------------------------------------

                    $.post(
                    	'database_functions/add_layer.php',
                      {
                         layer: 'image',
                         title: 'Image Layer-'+layer_count,
                         layer_count: layer_count,
                         project_id : project_id,
                         scene_id : scene_id,
                         u_id : u_id,
                         layer_type_id : layer_type_id
                      },
                     function(result){
                        save_btn();
                         
                        main_layer_id = result;
                        // console.log(main_layer_id);
                        $(".layer_items").prepend(`
                          <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
                				<div class="card-body p-2" style="padding: 5px !important;">
                					<div class="row">
                						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
                						</div>
                						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
                							<div class="ellipsis" style="font-size: 12px;">
                							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
                						</div>
                						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                							<div class="msc-layer-buttons" style="width:auto;">
                								`+copy_button+`
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-cancel3"></i>
                								</button>
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-eye2"></i>
                								</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>`);
                			
                			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                			
                			
                			// Adding Draggable Timeline Layer - Image--------------------------------------------------------------------------------
                  
                            $.post(
                            	'database_functions/add_draggable_layer.php',
                              {
                                 layer: 'image',
                                 title: 'Image Layer-'+layer_count,
                                 layer_count: layer_count,
                                 main_layer_id: main_layer_id,
                                 project_id : project_id,
                                 u_id : u_id
                              },
                             function(result) {
                                draggable_layer_id = result;
                                
                                $(".animation_drag_area").prepend(`<div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_`+layer_count+`">
                    									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                    										<span data-draggableid="`+draggable_layer_id+`" data-mainlayerid="`+main_layer_id+`" data-mainlayercount="`+layer_count+`" style="font-weight: 600; font-size: 17px;">Image Layer-`+layer_count+` <span id="layer_title" style="font-weight:normal;"> </span></span>
                    									</div>
                    									<div style="height: 34px;display:inline-block;width: 100%;" id="layer_dragger_div_`+layer_count+`">
                    										<div id="layer_dragger_`+layer_count+`" data-mainlayeriddraggable="`+main_layer_id+`" class="draggable_layer_indi_common" data-animationdraggablelayercount="`+layer_count+`" style="background: #d5e8ff;min-height:40px;height: 40px;width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                    										</div>
                    									</div>
                									</div>`);
 
                                    $('#layer_dragger_'+layer_count)
                                		.draggable({ 
                                		axis: "x",
                                		containment: '#layer_dragger_div_'+layer_count,
                                	})
                                		.resizable({ 
                                		handles: 'e, w',
                                		containment: '#layer_dragger_div_'+layer_count,
                                    	drag: function(event) {
                                        var top = $(this).position().top;
                                        var left = $(this).position().left;
                                
                                        ICZoom.panImage(top, left);
                                		},
                                	});
                                
                                
                             }
                            );

                    
                			
                     }
                  );

                  
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('video')) {
                  $(".draggable2").parent().find('.draggable2 video:last').css({"width": "99%","height": "99%","object-fit": "fill"});
                  $(".draggable2").parent().find('.draggable2:last').attr('data-layer', 'video');
                  $(".draggable2").parent().find('.draggable2:last').attr('data-status', 'idle');
                  $(".draggable2").parent().find('.draggable2 video:last').attr('controls',true);
                  $(".draggable2").parent().find('.draggable2 video:last').attr('oncontextmenu',false);
                  $(".draggable2").parent().find('.draggable2 video:last').attr('disablepictureinpicture',true);   
                  $(".draggable2").parent().find('.draggable2 video:last').attr('controlslist','nodownload');
                  $(".draggable2").parent().find('.draggable2 video:last').attr('disableplaybackspeed',true);
                  
                  
                  
                  
                    // Video Layer to Backend -------------------
                	let project_id = $("#v_m_id").val();
                	let scene_id = $("#scene_id").val();
                    let u_id = $("#u_id").val();
                    let main_layer_id;
                    let draggable_layer_id;
                    
                    $.post(
                    	'database_functions/add_layer.php',
                      {
                         layer: 'video',
                         title: 'Video Layer-'+layer_count,
                         layer_count: layer_count,
                         project_id : project_id,
                         scene_id : scene_id,
                         u_id : u_id,
                         layer_type_id : layer_type_id
                      },
                     function(result){
                        save_btn();
                         
                        main_layer_id = result;
                        
                        $(".layer_items").prepend(`
                          <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
                				<div class="card-body p-2" style="padding: 5px !important;">
                					<div class="row">
                						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
                						</div>
                						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
                							<div class="ellipsis" style="font-size: 12px;">
                							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
                						</div>
                						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                							<div class="msc-layer-buttons" style="width:auto;">
                								`+copy_button+`
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-cancel3"></i>
                								</button>
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-eye2"></i>
                								</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>`);
                			
                			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                			
                			
                			// Adding Draggable Timeline Layer - Video--------------------------------------------------------------------------------

                              $.post(
                                	'database_functions/add_draggable_layer.php',
                                  {
                                     layer: 'video',
                                     title: 'Video Layer-'+layer_count,
                                     main_layer_id: main_layer_id,
                                     layer_count: layer_count,
                                     project_id : project_id,
                                     u_id : u_id
                                  },
                                 function(result) {
                                    draggable_layer_id = result;
                                    
                                            $(".animation_drag_area").prepend(`<div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_`+layer_count+`">
                                									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                                										<span data-draggableid="`+draggable_layer_id+`" data-mainlayerid="`+main_layer_id+`" data-mainlayercount="`+layer_count+`" style="font-weight: 600; font-size: 17px;">Video Layer-`+layer_count+`  <span id="layer_title" style="font-weight:normal;"> </span></span>
                                									</div>
                                									<div style="height: 34px;display:inline-block;width: 100%;" id="layer_dragger_div_`+layer_count+`">
                                										<div id="layer_dragger_`+layer_count+`" data-mainlayeriddraggable="`+main_layer_id+`" class="draggable_layer_indi_common" data-animationdraggablelayercount="`+layer_count+`" style="background: #d5e8ff;min-height:40px;height: 40px;width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                                										</div>
                                									</div>
                            									</div>`);
                                
                                            $('#layer_dragger_'+layer_count)
                                        		.draggable({ 
                                        		axis: "x",
                                        		containment: '#layer_dragger_div_'+layer_count,
                                        	})
                                        		.resizable({ 
                                        		handles: 'e, w',
                                        		containment: '#layer_dragger_div_'+layer_count,
                                            	drag: function(event) {
                                                var top = $(this).position().top;
                                                var left = $(this).position().left;
                                        
                                                ICZoom.panImage(top, left);
                                        		},
                                        	});
                                 }
                                );
                                
                     }
                  );
                  
                  
              
              
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('font')) {
                  $(".draggable2").parent().find('.draggable2:last').attr('data-layer', 'font');
                  $(".draggable2").parent().find('.draggable2:last').attr('data-status', 'idle');
    
                    // Font Layer to Backend -------------------
                	let project_id = $("#v_m_id").val();
                	let scene_id = $("#scene_id").val();
                    let u_id = $("#u_id").val();
                    let main_layer_id;
                    let draggable_layer_id;
                    
                    $.post(
                    	'database_functions/add_layer.php',
                      {
                         layer: 'font',
                         title: 'Font Layer-'+layer_count,
                         layer_count: layer_count,
                         project_id : project_id,
                         scene_id : scene_id,
                         u_id : u_id,
                         layer_type_id : layer_type_id
                      },
                     function(result){
                        save_btn();
                         
                        main_layer_id = result;
                        
                        $(".layer_items").prepend(`
                          <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
                				<div class="card-body p-2" style="padding: 5px !important;">
                					<div class="row">
                						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
                						</div>
                						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
                							<div class="ellipsis" style="font-size: 12px;">
                							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
                						</div>
                						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                							<div class="msc-layer-buttons" style="width:auto;">
                								`+copy_button+`
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-cancel3"></i>
                								</button>
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-eye2"></i>
                								</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>`);
                			
                			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                			
                			
                			// Adding Draggable Timeline Layer - Font--------------------------------------------------------------------------------
                  
                              $.post(
                                	'database_functions/add_draggable_layer.php',
                                  {
                                     layer: 'font',
                                     title: 'Font Layer-'+layer_count,
                                     layer_count: layer_count,
                                     main_layer_id: main_layer_id,
                                     project_id : project_id,
                                     u_id : u_id
                                  },
                                 function(result) {
                                    draggable_layer_id = result;
                                    
                                            $(".animation_drag_area").prepend(`<div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_`+layer_count+`">
                                            									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                                            										<span data-draggableid="`+draggable_layer_id+`" data-mainlayerid="`+main_layer_id+`" data-mainlayercount="`+layer_count+`" style="font-weight: 600; font-size: 17px;">Font Layer-`+layer_count+`<span id="layer_title" style="font-weight:normal;"> </span></span>
                                            									</div>
                                            									<div style="height: 34px;display:inline-block;width: 100%;" id="layer_dragger_div_`+layer_count+`">
                                            										<div id="layer_dragger_`+layer_count+`" data-mainlayeriddraggable="`+main_layer_id+`" class="draggable_layer_indi_common" data-animationdraggablelayercount="`+layer_count+`" style="background: #d5e8ff;min-height:40px;height: 40px;width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                                            										</div>
                                            									</div>
                                        									</div>`);
                              
                                            $('#layer_dragger_'+layer_count)
                                        		.draggable({ 
                                        		axis: "x",
                                        		containment: '#layer_dragger_div_'+layer_count,
                                        	})
                                        		.resizable({ 
                                        		handles: 'e, w',
                                        		containment: '#layer_dragger_div_'+layer_count,
                                            	drag: function(event) {
                                                var top = $(this).position().top;
                                                var left = $(this).position().left;
                                        
                                                ICZoom.panImage(top, left);
                                        		},
                                        	});
                                    }
                                );
                			
                     }
                  );
                  
                  
                  
                  
              } else if($(".draggable2").parent().find('.draggable2:last').hasClass('shape')) {
                  $(".draggable2").parent().find('.draggable2:last').attr('data-layer', 'shape');
                  $(".draggable2").parent().find('.draggable2:last').attr('data-status', 'idle');
    
                  
                    // Shape Layer to Backend -------------------
                	let project_id = $("#v_m_id").val();
                	let scene_id = $("#scene_id").val();
                    let u_id = $("#u_id").val();
                    let main_layer_id;
                    let draggable_layer_id;
                    
                    $.post(
                    	'database_functions/add_layer.php',
                      {
                         layer: 'shape',
                         title: 'Shape Layer-'+layer_count,
                         layer_count: layer_count,
                         project_id : project_id,
                         scene_id : scene_id,
                         u_id : u_id,
                         layer_type_id : layer_type_id
                      },
                     function(result){
                        save_btn();
                         
                        main_layer_id = result;
                        
                        $(".layer_items").prepend(`
                          <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
                				<div class="card-body p-2" style="padding: 5px !important;">
                					<div class="row">
                						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
                							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
                						</div>
                						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
                							<div class="ellipsis" style="font-size: 12px;">
                							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
                						</div>
                						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
                							<div class="msc-layer-buttons" style="width:auto;">
                								`+copy_button+`
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-cancel3"></i>
                								</button>
                								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
                									<i class="icon-eye2"></i>
                								</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>`);
                			
                			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                			
                			
                			// Adding Draggable Timeline Layer - Shape--------------------------------------------------------------------------------
                              $.post(
                                	'database_functions/add_draggable_layer.php',
                                  {
                                     layer: 'shape',
                                     title: 'Shape Layer-'+layer_count,
                                     layer_count: layer_count,
                                     main_layer_id: main_layer_id,
                                     project_id : project_id,
                                     u_id : u_id
                                  },
                                 function(result) {
                                    draggable_layer_id = result;
                                    
                                        $(".animation_drag_area").prepend(`<div class="animation_drag_area_indi_layer animation_drag_area_indi_layer_`+layer_count+`">
                                    									<div class="animation_drag_area_indi_layer_title" style="width: 200px;padding: 5px 10px; border: 1px solid #ececec; border-left: none; border-right: none;border-bottom: none;padding-top: 12px;font-size: 24px;font-weight: 700;display: inline-block;">
                                    										<span data-draggableid="`+draggable_layer_id+`" data-mainlayerid="`+main_layer_id+`" data-mainlayercount="`+layer_count+`" style="font-weight: 600; font-size: 17px;">Shape Layer-`+layer_count+` <span id="layer_title" style="font-weight:normal;"> </span></span>
                                    									</div>
                                    									<div style="height: 34px;display:inline-block;width: 100%;" id="layer_dragger_div_`+layer_count+`">
                                    										<div id="layer_dragger_`+layer_count+`" data-mainlayeriddraggable="`+main_layer_id+`" class="draggable_layer_indi_common" data-animationdraggablelayercount="`+layer_count+`" style="background: #d5e8ff;min-height:40px;height: 40px;width:415px;border-left:10px solid gray;border-left:16px double gray;border-right:16px double gray;border-top:1px solid gray;border-bottom:1px solid gray;border-radius:5px;">
                                    										</div>
                                    									</div>
                                									</div>`);
                                  
                                        $('#layer_dragger_'+layer_count)
                                    		.draggable({ 
                                    		axis: "x",
                                    		containment: '#layer_dragger_div_'+layer_count,
                                    	})
                                    		.resizable({ 
                                    		handles: 'e, w',
                                    		containment: '#layer_dragger_div_'+layer_count,
                                        	drag: function(event) {
                                            var top = $(this).position().top;
                                            var left = $(this).position().left;
                                    
                                            ICZoom.panImage(top, left);
                                    		},
                                    	});
                                    
                                 }
                            );
                              
                     }
                  );
                  

                  
                  
              } else {
                  
                  $(".layer_items").prepend(`
                  <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer layer_tab_order" data-myattr="`+main_layer_id+`" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" order-id="1" style="margin-bottom: 5px !important;">
        				<div class="card-body p-2" style="padding: 5px !important;">
        					<div class="row">
        						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
        							<i class="icon-resize rotate-45" style="font-size: 12px;padding-top: 5px;"></i>
        						</div>
        						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
        							<div class="ellipsis" style="font-size: 12px;">
        							    <input type="text" id="`+main_layer_id+`" data-layercount="`+layer_count+`" class="layer_title" style="border:none;background:transparent;" value="`+layer_title+`" /></div>
        						</div>
        						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
        							<div class="msc-layer-buttons" style="width:auto;">
        								`+copy_button+`
        								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
        									<i class="icon-cancel3"></i>
        								</button>
        								<button type="button" data-id="`+layer_count+`" data-layer-id="`+main_layer_id+`" class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
        									<i class="icon-eye2"></i>
        								</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>`);
        			
        			$('[data-layercount="'+layer_count+'"]').attr('data-myattr', main_layer_id);
                  
              }

         }
         
         
         
         
         
    // Draggable positions/dimentions recodings 
    
        let thisdottop = ui.draggable.position().top;
        let thisdotleft = ui.draggable.position().left;
        let thisdotlayerid = ui.draggable.attr('data-myattr');
        // console.log(thisdotlayerid);
        
        $.post(
        	'database_functions/layer_position.php',
          {
             layer_id: thisdotlayerid,
             type: 'parent',
             top: thisdottop,
             left : thisdotleft
          },
         function(result){
            save_btn();
            // var main_layer_id = result;
         }
        );
        
        
    // Draggable Resize recording
    
        let _resize = false;

        $(".draggable2").resize(function(){
            if (_resize)
                clearTimeout(_resize);
            _resize = setTimeout(function() {
                
                let thisdotwidth = ui.draggable.css("width");
                let thisdotheight = ui.draggable.css("height");
                
                $.post(
                	'database_functions/layer_resize.php',
                  {
                     layer_id: thisdotlayerid,
                     type: 'parent',
                     height: thisdotheight,
                     width : thisdotwidth
                  },
                 function(result){
                    save_btn();
                    // var main_layer_id = result;
                 }
                );
                
                // console.log('resize');
            }, 500);
        }); 
        
        

          
       }

    });
}





//-- Draggable Layer Ends -------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

	
	
//-- Draggable2 Select and De-Select  ------------------------------------------------------------------------------------------------------------------------------->


$(document).on("click", ".draggable2", function() {
    $(".draggable2").css("border","6px dashed transparent"); 
    $(this).css("border","6px dashed #5c9ae4");
    $(".draggable2").attr('data-status', 'idle');
    $(this).attr('data-status', 'selected');
    $("#card-title-layers").click();
    let data_layercount = $(this).data("layercount");
    $(".layer_tab_layer").css("background","#fff");
    $("#layer_tab_layer"+data_layercount+"").css("background","#efefef");

    let current_left = $(this).css("left");
    let current_top = $(this).css("top");
    let current_width = $(this).css("width");
    let current_height = $(this).css("height");
    
    $(".current_left").val(current_left);
    $(".current_top").val(current_top);
    $(".current_width").val(current_width);
    $(".current_height").val(current_height);

    if($(this).attr("data-layer") == 'image'){
        $(".layer_options").css("display","none");
        $("#image_layer_options").css("display","block");
        $(".layer_options_default").css("display","none");
        $(".layer_options_heading").css("display","none");
        $(".layer_customizations_image").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
        $(".layer_animations_image").css({"display":"inline-block","background":"transparent","color":"black"});
        $("#image_layer_options_customizations").css("display","block");
        $("#image_layer_options_animations").css("display","none");
    } else if($(this).attr("data-layer") == 'video') {
        $(".layer_options").css("display","none");
        $("#video_layer_options").css("display","block");
        $(".layer_options_default").css("display","none");
        $(".layer_options_heading").css("display","none");
        $(".layer_customizations_video").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
        $(".layer_animations_video").css({"display":"inline-block","background":"transparent","color":"black"});
        $("#video_layer_options_customizations").css("display","block");
        $("#video_layer_options_animations").css("display","none");
    } else if($(this).attr("data-layer") == 'background'){
        $(".layer_options").css("display","none");
        $("#background_layer_options").css("display","block");
        $(".layer_options_default").css("display","none");
        $(".layer_options_heading").css("display","none");
        $(".layer_customizations_background").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
        $(".layer_animations_background").css({"display":"inline-block","background":"transparent","color":"black"});
    } else if($(this).attr("data-layer") == 'font'){
        $(".layer_options").css("display","none");
        $("#font_layer_options").css("display","block");
        $(".layer_options_default").css("display","none");
        $(".layer_options_heading").css("display","none");
        $(".layer_customizations_font").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
        $(".layer_animations_font").css({"display":"inline-block","background":"transparent","color":"black"});
        $(".font-arrow-mover").css("display","block");
    } else if($(this).attr("data-layer") == 'shape'){
        $(".layer_options").css("display","none");
        $("#shape_layer_options").css("display","block");
        $(".layer_options_default").css("display","none");
        $(".layer_options_heading").css("display","none");
        $(".layer_customizations_shape").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
        $(".layer_animations_shape").css({"display":"inline-block","background":"transparent","color":"black"});

    } else { }
});

$(document).on("click", "#work_area_div_sub", function(e){
  if (e.target !== this) {
    return;
  } else { 
    $(".layer_options").css("display","none");
    $(".layer_options_default").css("display","block");
    $(".layer_options_heading").css("display","none");
    $(".layer_options_default_heading").css({"display":"block"});
    $(".draggable2").css("border","6px dashed transparent"); 
    $(".draggable2").attr('data-status', 'idle');
    $(".layer_tab_layer").css("background","#fff");
    $(".layer_tab_layer").css("background","#fff");
    $("#layer_tab_layer0").css("background","#efefef");

    $(".layer_options").css("display","none");
    $("#work_area_layer_options").css("display","block");
    $(".layer_options_default").css("display","none");
    $(".layer_options_heading").css("display","none");
    
    $(".font-arrow-mover").css("display","none");
  }
});


//-- Draggable2 Select and De-Select Ends ------------------------------------------------------------------------------------------------------------------------------->

		
		
		
		


//--Upload Stuff --------------------------------------------------------------------------------------------------------------------------------------------->



// Audio Upload Stuff-----------------------------------------------------------

$(document).on("click", "#uplaod_audio_btn", function(){
    $("#overlay").css("display","block");
    $("#audio_upload_div").css("display","block");
});
$(document).on("click", "#audio_upload_btn_custom", function(){
    $("#audio_upload_input_file").click();
});
$(document).on("change", "#audio_upload_input_file", function(evt){
    $("#audio_upload_btn_custom").html('<img src="images-main/general/file_selected.png" alt="" /><br />Audio Selected');
});

$(document).on("click", "#audio_upload_submit_btn", function(){
    $("#audio_upload_btn_custom").html('<img src="images-main/general/loading.svg" alt="" /><br />Uploading');
    $(".audio_upload_submit_btn_div").css("display","none");
    
    var fd = new FormData();
    var files = $('#audio_upload_input_file')[0].files;
    var u_id = $("#u_id").val();
    var v_m_id = $("#v_m_id").val();
    
    fd.append('audio_upload_input_file',files[0]);
    fd.append('u_id',u_id);
    fd.append('v_m_id',v_m_id);
    
    $.ajax({
        url:'database_functions/upload_audio.php',
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(response){
            if(response == 'yep'){
                $("#audio_upload_btn_custom").html('<img src="images-main/general/tick.gif" alt="" style="width: 75px;" /><br />Uploaded');
                $.ajax({
                    url: 'https://vdofy.harryatwork.com/dev/left_menu_detail.php', 
                    success: function(data) {
                      $('.left_bar_menu_div').html(data);
                    },
                    
                });
            
                setTimeout(function(){ 
                    $("#audio_upload_div").css("display","none");
                    $("#audio_upload_btn_custom").html('<i class="fa fa-cloud-upload" id="audio_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;"></i><br />Custom Upload');
                    $(".audio_upload_submit_btn_div").css("display","block");
                    $("#overlay").css("display","none");
                    
                    $(".card-title").css({"background": "#F7F7F7", "color": "black"});
                	$("#card-title-media").css({"background": "#5c9ae4", "color": "white"});
                	$("#card-body").css("display","none");
                	$("#card-body2").css("display","block");
                	$("#media_child").css("display","block");
                	$("#audio-indi-div").css("display","block");
                	$("#audio-indi-div-uploads").css("display","block");
                	$("#audio-indi-div-library").css("display","none");
                    $("#media_child_library_btn").css({"background":"#f7f7f7","color":"black"});
                    $("#media_child_uploads_btn").css({"background":"#5c9ae4","color":"white"});
                    
                }, 2000);
            }else{ }
        }
    });
});


// Video Upload Stuff ----------------------------------------------------------

$(document).on("click", "#uplaod_video_btn", function(){
    $("#overlay").css("display","block");
    $("#video_upload_div").css("display","block");
});
$(document).on("click", "#video_upload_btn_youtube", function(){
    $("#video_upload_div_content").css("display","none");
    $("#video_upload_div_youtube").css("display","block");
});
$(document).on("click", "#video_upload_div_youtube_submit_btn", function(){
    $("#video_cutter_youtube_div").css("display","block");
    $("#video_upload_div").css("display","none");
});
$(document).on("click", "#video_upload_btn_custom", function(){
   $("#video_upload_input_file").click();
})
$(document).on("change", "#video_upload_input_file", function(evt) {
  let $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
  $("#video_upload_div_content").css("display", "none");
  $("#video_upload_div_content_preview").css("display", "block");
});

$(document).on("click", "#video_upload_submit_btn", function(){
    $("#video_upload_div_content_preview").prepend('<img src="images-main/general/loading.svg" style="position: absolute;background: lightgray;opacity: 0.5;width: 86%;height: 280px;">');
    $(".video_upload_submit_btn_div").css("display","none");
    
    var fd = new FormData();
    var files = $('#video_upload_input_file')[0].files;
    var u_id = $("#u_id").val();
    var v_m_id = $("#v_m_id").val();
    
    fd.append('video_upload_input_file',files[0]);
    fd.append('u_id',u_id);
    fd.append('v_m_id',v_m_id);
    
    $.ajax({
        url:'database_functions/upload_video.php',
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(response){
            if(response == 'yep'){
                $("#video_upload_div_content_preview").html('<img src="images-main/general/tick.gif" alt="" style="width: 75px;" /><br /> Uploaded');
                $.ajax({
                    url: 'https://vdofy.harryatwork.com/dev/left_menu_detail.php', 
                    success: function(data) {
                      $('.left_bar_menu_div').html(data);
                    },
                });
            
                setTimeout(function(){ 
                    $("#video_upload_div").css("display","none");
                    $("#video_upload_div_content").css("display","block");
                    $("#video_upload_div_youtube").css("display","none");
                    $(".video_upload_submit_btn_div").css("display","block");
                    $("#video_upload_div_content_preview").html('<video width="100%" height="280" id="video-preview-div" style="" controls><source src="mov_bbb.mp4" id="video_here"></video>');
                    $("#video_upload_div_content_preview").css("display","none");
                    $("#overlay").css("display","none");
                    
                    $(".card-title").css({"background": "#F7F7F7", "color": "black"});
                    $("#card-title-layers").css("width","48%");
                	$("#card-title-media").css({"display":"inline-block","background": "#5c9ae4", "color": "white"});
                	$("#card-body").css("display","none");
                	$("#card-body2").css("display","block");
                	$("#media_child").css("display","block");
                	$("#videos-indi-div").css("display","block");
                	$("#videos-indi-div-uploads").css("display","block");
                	$("#videos-indi-div-library").css("display","none");
                    $("#media_child_library_btn").css({"background":"#f7f7f7","color":"black"});
                    $("#media_child_uploads_btn").css({"background":"#5c9ae4","color":"white"});
                    
                }, 2000);
            }else{ }
        }
    });
});

// $("#video_upload_div_youtube_submit_btn").on("click", function() {
//     // e.preventDefault();
// 	let vid_id = $("#video_upload_youtube_link").val(); 
//     $.post(
//     	'video_youtube_cutter.php',
//       {
//          vid_id: vid_id,
//       },
//      function(result){
//          save_btn();
//          $("#video_cutter_youtube_div").html(result);
//      }
//   );
// });



// Image Upload Stuff ----------------------------------------------------------

$(document).on("click", "#uplaod_image_btn", function(){
    $("#overlay").css("display","block");
    $("#image_upload_div").css("display","block");
});
$(document).on("click", "#image_upload_btn_custom", function(){
   $("#image_upload_input_file").click();
})
$(document).on("change", "#image_upload_input_file", function(evt) {
  var $image_source = $('#image_here');
  $("#image_here").css("height","200px");
  $image_source[0].src = URL.createObjectURL(this.files[0]);
  $("#image_upload_div_content").css("display","none");
  $("#image_upload_div_content_preview").css("display","block");
});

$(document).on("click", "#image_upload_submit_btn", function(){
    $("#image_upload_div_content_preview").prepend('<img src="images-main/general/loading.svg" style="position: absolute;background: lightgray;opacity: 0.5;width: 51%;height: 200px;">');
    $(".image_upload_submit_btn_div").css("display","none");
    
    var fd = new FormData();
    var files = $('#image_upload_input_file')[0].files;
    var u_id = $("#u_id").val();
    var v_m_id = $("#v_m_id").val();
    
    fd.append('image_upload_input_file',files[0]);
    fd.append('u_id',u_id);
    fd.append('v_m_id',v_m_id);
    
    $.ajax({
        url:'database_functions/upload_image.php',
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(response){
            if(response == 'yep'){
                $("#image_upload_div_content_preview").html('<img src="images-main/general/tick.gif" alt="" style="width: 75px;" /><br /> Uploaded');
                $.ajax({
                    url: 'https://vdofy.harryatwork.com/dev/left_menu_detail.php', 
                    success: function(data) {
                      $('.left_bar_menu_div').html(data);
                    },
                });
            
                setTimeout(function(){ 
                    $("#image_upload_div").css("display","none");
                    $("#image_upload_div_content").css("display","block");
                    $(".image_upload_submit_btn_div").css("display","block");
                    $("#image_upload_div_content_preview").html('<img src="" id="image_here" />');
                    $("#image_upload_div_content_preview").css("display","none");
                    $("#overlay").css("display","none");
                    
                    $(".card-title").css({"background": "#F7F7F7", "color": "black"});
                    $("#card-title-layers").css("width","48%");
                	$("#card-title-media").css({"display":"inline-block","background": "#5c9ae4", "color": "white"});
                	$("#card-body").css("display","none");
                	$("#card-body2").css("display","block");
                	$("#media_child").css("display","block");
                	$("#images-indi-div").css("display","block");
                	$("#images-indi-div-uploads").css("display","block");
                	$("#images-indi-div-library").css("display","none");
                    $("#media_child_library_btn").css({"background":"#f7f7f7","color":"black"});
                    $("#media_child_uploads_btn").css({"background":"#5c9ae4","color":"white"});
                    
                }, 2000);
            }else{ }
        }
    });
});


// Background Image Upload Stuff -----------------------------------------------

$(document).on("click", "#uplaod_background_btn", function(){
    $("#overlay").css("display","block");
    $("#background_upload_div").css("display","block");
});
$(document).on("click", "#background_upload_btn_custom", function(){
   $("#background_upload_input_file").click();
})
$(document).on("change", "#background_upload_input_file", function(evt) {
  var $background_source = $('#background_here');
  $("#background_here").css("height","200px");
  $background_source[0].src = URL.createObjectURL(this.files[0]);
  $("#background_upload_div_content").css("display","none");
  $("#background_upload_div_content_preview").css("display","block");
});

$(document).on("click", "#background_upload_submit_btn", function(){
    $("#background_upload_div_content_preview").prepend('<img src="images-main/general/loading.svg" style="position: absolute;background: lightgray;opacity: 0.5;width: 50%;height: 200px;">');
    $(".background_upload_submit_btn_div").css("display","none");
    
    var fd = new FormData();
    var files = $('#background_upload_input_file')[0].files;
    var u_id = $("#u_id").val();
    var v_m_id = $("#v_m_id").val();
    
    fd.append('background_upload_input_file',files[0]);
    fd.append('u_id',u_id);
    fd.append('v_m_id',v_m_id);
    
    $.ajax({
        url:'database_functions/upload_background.php',
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(response){
            if(response == 'yep'){
                $("#background_upload_div_content_preview").html('<img src="images-main/general/tick.gif" alt="" style="width: 75px;" /><br /> Uploaded');
                $.ajax({
                    url: 'https://vdofy.harryatwork.com/dev/left_menu_detail.php', 
                    success: function(data) {
                      $('.left_bar_menu_div').html(data);
                    },
                });
            
                setTimeout(function(){ 
                    $("#background_upload_div").css("display","none");
                    $("#background_upload_div_content").css("display","block");
                    $(".background_upload_submit_btn_div").css("display","block");
                    $("#background_upload_div_content_preview").html('<img src="" id="background_here" />');
                    $("#background_upload_div_content_preview").css("display","none");
                    $("#overlay").css("display","none");
                    
                    $(".card-title").css({"background": "#F7F7F7", "color": "black"});
                    $("#card-title-layers").css("width","48%");
                	$("#card-title-media").css({"display":"inline-block","background": "#5c9ae4", "color": "white"});
                	$("#card-body").css("display","none");
                	$("#card-body2").css("display","block");
                	$("#media_child").css("display","block");
                	$("#backgrounds-indi-div").css("display","block");
                	$("#backgrounds-indi-div-uploads").css("display","block");
                	$("#backgrounds-indi-div-library").css("display","none");
                    $("#media_child_library_btn").css({"background":"#f7f7f7","color":"black"});
                    $("#media_child_uploads_btn").css({"background":"#5c9ae4","color":"white"});
                    
                }, 2000);
            }else{ }
        }
    });
});


//-- Upload Stuff Ends ---------------------------------------------------------------------------------------------------------------------------------------------->








//-- Layer Customizations / Animations Switch ----------------------------------------------------------------------------------------------------------------------->


// Image Layer Customizations Icons --------------------------------------------

$(document).on("click", ".layer_customizations_image", function(){
    $(".layer_customizations_image").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_animations_image").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#image_layer_options_customizations").css("display","block");
    $("#image_layer_options_animations").css("display","none");
});
$(document).on("click", ".layer_animations_image", function(){
    $(".layer_animations_image").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_customizations_image").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#image_layer_options_animations").css("display","block");
    $("#image_layer_options_customizations").css("display","none");
    $("#image_layer_options_animations_select_heading").click();
});

$(document).on("click", ".image_resize_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_resize_div").css("display","block");
});
$(document).on("click", ".image_rotate_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_rotate_div").css("display","block");
});
$(document).on("click", ".image_contrast_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_contrast_div").css("display","block");
});
$(document).on("click", ".image_bg_remove_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_bg_remove_div").css("display","block");
});
$(document).on("click", ".image_border_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_border_div").css("display","block");
});
$(document).on("click", ".image_shadow_icon", function(){
    $(".image_customizations_icon").css({"background":"white"});
    $(".image_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".image_customization_div").css("display","none");
    $(".image_shadow_div").css("display","block");
});


// Video Layer Customizations Icons --------------------------------------------

$(document).on("click", ".layer_customizations_video", function(){
    $(".layer_customizations_video").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_animations_video").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#video_layer_options_customizations").css("display","block");
    $("#video_layer_options_animations").css("display","none");
});
$(document).on("click", ".layer_animations_video", function(){
    $(".layer_animations_video").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_customizations_video").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#video_layer_options_animations").css("display","block");
    $("#video_layer_options_customizations").css("display","none");
    $("#video_layer_options_animations_select_heading").click();
});

$(document).on("click", ".video_resize_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_resize_div").css("display","block");
});
$(document).on("click", ".video_rotate_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_rotate_div").css("display","block");
});
$(document).on("click", ".video_contrast_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_contrast_div").css("display","block");
});
$(document).on("click", ".video_bg_remove_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_bg_remove_div").css("display","block");
});
$(document).on("click", ".video_border_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_border_div").css("display","block");
});
$(document).on("click", ".video_shadow_icon", function(){
    $(".video_customizations_icon").css({"background":"white"});
    $(".video_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".video_customization_div").css("display","none");
    $(".video_shadow_div").css("display","block");
});

    
// Background Layer Customizations Icons --------------------------------------------

$(document).on("click", ".layer_customizations_background", function(){
    $(".layer_customizations_background").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_animations_background").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#background_layer_options_customizations").css("display","block");
    $("#background_layer_options_animations").css("display","none");
});
$(document).on("click", ".layer_animations_background", function(){
    $(".layer_animations_background").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_customizations_background").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#background_layer_options_animations").css("display","block");
    $("#background_layer_options_customizations").css("display","none");
});

$(document).on("click", ".background_rotate_icon", function(){
    $(".background_customizations_icon").css({"background":"white"});
    $(".background_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".background_customization_div").css("display","none");
    $(".background_rotate_div").css("display","block");
});
$(document).on("click", ".background_contrast_icon", function(){
    $(".background_customizations_icon").css({"background":"white"});
    $(".background_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".background_customization_div").css("display","none");
    $(".background_contrast_div").css("display","block");
});



// Font Layer Customizations Icons --------------------------------------------

$(document).on("click", ".layer_customizations_font", function(){
    $(".layer_customizations_font").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_animations_font").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#font_layer_options_customizations").css("display","block");
    $("#font_layer_options_animations").css("display","none");
});
$(document).on("click", ".layer_animations_font", function(){
    $(".layer_animations_font").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_customizations_font").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#font_layer_options_animations").css("display","block");
    $("#font_layer_options_customizations").css("display","none");
    $("#font_layer_options_animations_select_heading").click();
});

$(document).on("click", ".font_rotate_icon", function(){
    $(".font_customizations_icon").css({"background":"white"});
    $(".font_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".font_customization_div").css("display","none");
    $(".font_rotate_div").css("display","block");
});

$(document).on("click", ".font_contrast_icon", function(){
    $(".font_customizations_icon").css({"background":"white"});
    $(".font_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".font_customization_div").css("display","none");
    $(".font_contrast_div").css("display","block");
});
$(document).on("click", ".font_font_icon", function(){
    $(".font_customizations_icon").css({"background":"white"});
    $(".font_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".font_customization_div").css("display","none");
    $(".font_font_div").css("display","block");
});
$(document).on("click", ".font_border_icon", function(){
    $(".font_customizations_icon").css({"background":"white"});
    $(".font_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".font_customization_div").css("display","none");
    $(".font_border_div").css("display","block");
});
$(document).on("click", ".font_shadow_icon", function(){
    $(".font_customizations_icon").css({"background":"white"});
    $(".font_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".font_customization_div").css("display","none");
    $(".font_shadow_div").css("display","block");
});

// Shape Layer Customizations Icons --------------------------------------------

$(document).on("click", ".layer_customizations_shape", function(){
    $(".layer_customizations_shape").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_animations_shape").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#shape_layer_options_customizations").css("display","block");
    $("#shape_layer_options_animations").css("display","none");
});
$(document).on("click", ".layer_animations_shape", function(){
    $(".layer_animations_shape").css({"display":"inline-block","background":"#5c9ae4","color":"white"});
    $(".layer_customizations_shape").css({"display":"inline-block","background":"transparent","color":"black"});
    $("#shape_layer_options_animations").css("display","block");
    $("#shape_layer_options_customizations").css("display","none");
    $("#shape_layer_options_animations_select_heading").click();
});

$(document).on("click", ".shape_rotate_icon", function(){
    $(".shape_customizations_icon").css({"background":"white"});
    $(".shape_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".shape_customization_div").css("display","none");
    $(".shape_rotate_div").css("display","block");
});

$(document).on("click", ".shape_contrast_icon", function(){
    $(".shape_customizations_icon").css({"background":"white"});
    $(".shape_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".shape_customization_div").css("display","none");
    $(".shape_contrast_div").css("display","block");
});
$(document).on("click", ".shape_shape_icon", function(){
    $(".shape_customizations_icon").css({"background":"white"});
    $(".shape_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".shape_customization_div").css("display","none");
    $(".shape_shape_div").css("display","block");
});
$(document).on("click", ".shape_shadow_icon", function(){
    $(".shape_customizations_icon").css({"background":"white"});
    $(".shape_customizations_icon").find(".icon").css({"color":"#797979"});
    $(this).css({"background":"#5c9ae4"});
    $(this).find(".icon").css({"color":"white"});
    $(".shape_customization_div").css("display","none");
    $(".shape_shadow_div").css("display","block");
});


//-- Layer Customizations / Animations Switch Ends ----------------------------------------------------------------------------------------------------------------------->







//-- Layers Tab stuff --------------------------------------------------------------------------------------------------------------------------------------------------->


$(document).on("click", ".button-layer-copy", function(){
    let layer_id = $(this).attr("data-id");
    
    let layer_count = (parseInt($("#layer_count").val()) + 1);
    $("#layer_count").val(layer_count);
    
    $(".layer_items").prepend(`
              <div class="card card-sm show-on-hover-parent mb-3 ui-sortable-handle layer_tab_layer" layer_id="`+layer_count+`" id="layer_tab_layer`+layer_count+`" style="margin-bottom: 5px !important;">
    				<div class="card-body p-2" style="padding: 5px !important;">
    					<div class="row">
    						<div class="col-2 col-sm-2 col-md-1 placeholder-icon">
    							<i class="icon-resize rotate-45" style="font-size: 12px;"></i>
    						</div>
    						<div class="col-4 col-sm-5 col-md-5 card-text" style="padding: 0px;padding-top: 4px;">
    							<div class="ellipsis" style="font-size: 12px;">
    							    <input type="text" id="`+main_layer_id+`" class="layer_title" style="border:none;background:transparent;" value="New Layer" /></div>
    						</div>
    						<div class="col-5 col-sm-5 col-md-5 text-xs-right msc-layer-buttons-container">
    							<div class="msc-layer-buttons" style="width:auto;">
    								<button type="button" data-id="`+layer_count+`" class="btn btn-outline-primary btn-sm show-on-hover button-layer-copy" data-toggle="tooltip" title="Copy layer" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-copy"></i>
    								</button>
    								<button type="button" data-id="`+layer_count+`" class="btn btn-outline-danger btn-sm show-on-hover button-layer-remove" data-toggle="tooltip" title="Delete layer" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-cancel3"></i>
    								</button>
    								<button type="button" data-id="`+layer_count+`"  class="btn btn-outline-primary btn-sm button-layer-visible" data-toggle="tooltip" title="Show / hide" style="font-size: 12px;padding: 0px 3px;">
    									<i class="icon-eye2"></i>
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>`);
    
    $('[data-layercount="'+layer_id+'"]').clone().appendTo("#work_area_div_sub");
    $(".draggable2").parent().find('.draggable2:last').attr('data-layercount', layer_count).css({"left":"0","top":"0"});
    $(".draggable2").attr('data-status', 'idle');
    $(".draggable2").css('border', 'none');

});

$(document).on("click", ".button-layer-remove", function(){
    let layer_id = $(this).attr("data-id");
    let project_id = $("#v_m_id").val();
    let data_layer_id = $(this).attr("data-layer-id");
    $('[data-layercount="'+layer_id+'"]').remove();
    $("#layer_tab_layer"+layer_id+"").remove();
    $(".animation_drag_area_indi_layer_"+layer_id+"").remove();
    
    if($(this).hasClass("bgm_layer")) {
        $("#bgm_audio_div").css("display","none");
        $("#bgm_audio_choose").css("display","inline-block");
        
        $(".audio_trim_modal_1, .audio_trim_modal_2, #overlay").css("display","none");
    } else { } 
    
    $.post(
    	'database_functions/remove_layer.php',
      {
         layer_id: layer_id,
         data_layer_id: data_layer_id,
         project_id: project_id
      },
     function(result){
        save_btn();
        //  console.log(result);
     }
  );
});


$(document).on("click", ".button-layer-visible", function(){
    let layer_id = $(this).attr("data-id");
    
    if($(this).hasClass('layer_hidden')) {
        $('[data-layercount="'+layer_id+'"]').css("display","block");
        $(this).removeClass("layer_hidden");
        $(this).css({"color":"#007bff","border-color":"#007bff"});
        $(this).html('<i class="icon-eye2"></i>');
    } else {
        $('[data-layercount="'+layer_id+'"]').css("display","none");
        $(this).addClass("layer_hidden");
        $(this).css({"color":"#d60000","border-color":"#d60000"});
        $(this).html('<i class="icon-eye"></i>');
    }
});


$(".bgm_apply_for_whole_video").on("click", function() {
    $(".audio_trim_modal_1,#overlay").css("display","none");
});

$(".bgm_crop_option").on("click",function() {
    $(".audio_trim_modal_1").css("display","none");
    $(".audio_trim_modal_2").css("display","block");
});



//-- Layers Tab Stuff Ends ------------------------------------------------------------------------------------------------------------------------------------------>



//-- Image Customizations Functions --------------------------------------------------------------------------------------------------------------------------------->


// Image Layer Width/ height ---------------------------------------------------
$('#image_layer_width').on('input',function(){
    let image_layer_width = $('#image_layer_width').val();
    let image_layer_height = $('[data-status="selected"]').height();
    
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#image_layer_height').prop('disabled')) {
        $('[data-status="selected"]').width(image_layer_width+"%");
        $('[data-status="selected"]').height("auto");
        $(".image_resize_width_div_span").html(image_layer_width+"%");
    } else {
        $('[data-status="selected"]').width(image_layer_width*10+"px");
        $(".image_resize_width_div_span").html(image_layer_width*10+"px");
    }
});
$('#image_layer_width').on('change', _.debounce(function() {
    let image_layer_width = $('#image_layer_width').val();
    let image_layer_height = $('[data-status="selected"]').height();
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    
    if($('#image_layer_height').prop('disabled')) {
        $.post(
        	'database_functions/layer_resize.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             width: image_layer_width+"%",
             height : 'auto'
          },
         function(result){
            save_btn();
         }
        );
         
    } else {
        $.post(
        	'database_functions/layer_resize.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             width: image_layer_width*10+"px",
             height : image_layer_height+"px"
          },
         function(result){
            save_btn();
         }
        );
        
    }
}, 100));




$('#image_layer_height').on('input',function(){
    let image_layer_height = $('#image_layer_height').val();
    let image_layer_width = $('[data-status="selected"]').width();
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $('[data-status="selected"]').height(image_layer_height+"px");
    $(".image_resize_height_div_span").html(image_layer_height+"px");

    $.post(
    	'database_functions/layer_resize.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         width: image_layer_width+"px",
         height : image_layer_height+"px"
      },
     function(result){
        save_btn();
        // var main_layer_id = result;
     }
    );
});

$(document).on("click", ".image_layer_height_lock", function(){
    $(".image_layer_height_lock_span").html('<i class="fas fa-lock-open image_layer_height_un_lock" style="font-size: 40px;cursor:pointer;"></i>');
    $("#image_layer_height").prop("disabled", false);
});
$(document).on("click", ".image_layer_height_un_lock", function(){
    $(".image_layer_height_lock_span").html('<i class="fas fa-lock image_layer_height_lock" style="font-size: 40px;cursor:pointer;"></i>');
    $(".image_resize_height_div_span").html("Auto");
    $("#image_layer_height").prop("disabled", true);
    $('[data-status="selected"]').height("auto");
});

// Image Layer Rotate ----------------------------------------------------------

$('#image_layer_rotate').on('input',function(){
    let image_rotate = $("#image_layer_rotate").val();
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $('[data-status="selected"]').css("transform","rotate("+image_rotate+"deg)");
    $(".image_rotate_div_span").html(image_rotate+" Deg");

});
$('#image_layer_rotate').on('change', _.debounce(function() {
  let image_rotate = $("#image_layer_rotate").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_rotate.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         rotate_deg: "rotate("+image_rotate+"deg)"
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));




$(document).on("click", "#image_layer_vertical_flip", function(){
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#image_layer_vertical_flip').css('border-top-style') == 'none' && $('#image_layer_vertical_flip').css('border-bottom-style') == 'none' && $('#image_layer_vertical_flip').css('border-right-style') == 'none' && $('#image_layer_vertical_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleY(-1)");
        $('#image_layer_vertical_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(-1)'
          },
         function(result){ 
            save_btn();
             //console.log(0); 
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleY(+1)");
        $('#image_layer_vertical_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(+1)'
          },
         function(result){ 
            save_btn();
             //console.log(0); 
         }
        );
    }
});
$(document).on("click", "#image_layer_horizontal_flip", function(){
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#image_layer_horizontal_flip').css('border-top-style') == 'none' && $('#image_layer_horizontal_flip').css('border-bottom-style') == 'none' && $('#image_layer_horizontal_flip').css('border-right-style') == 'none' && $('#image_layer_horizontal_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleX(-1)");
        $('#image_layer_horizontal_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(-1)'
          },
         function(result){
            save_btn();
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleX(+1)");
        $('#image_layer_horizontal_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(+1)'
          },
         function(result){
            save_btn();
         }
        );
    }
});

// Image Layer Contrast --------------------------------------------------------

$('#image_layer_opacity').on('input',function(){
    let image_opacity = $("#image_layer_opacity").val();
    $('[data-status="selected"]').css("opacity",image_opacity);
});
$('#image_layer_opacity').on('change', _.debounce(function() {
  let image_opacity = $("#image_layer_opacity").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_opacity.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         opacity: image_opacity
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_blur').on('input',function(){
    let image_blur = $("#image_layer_blur").val();
    $('[data-status="selected"]').css("filter","blur("+image_blur+"px)");
});
$('#image_layer_blur').on('change', _.debounce(function() {
  let image_blur = $("#image_layer_blur").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'blur'
      },
     function(result){
        save_btn();
        //console.log(1);
     }
    );
}, 100));


$('#image_layer_brightness').on('input',function(){
    let image_brightness = $("#image_layer_brightness").val();
    $('[data-status="selected"]').css("filter","brightness("+image_brightness+")");
});
$('#image_layer_brightness').on('change', _.debounce(function() {
  let image_blur = $("#image_layer_brightness").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'brightness'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_contrast').on('input',function(){
    let image_contrast = $("#image_layer_contrast").val();
    $('[data-status="selected"]').css("filter","contrast("+image_contrast+")");
});
$('#image_layer_contrast').on('change', _.debounce(function() {
  let image_blur = $("#image_layer_contrast").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'contrast'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_grayscale').on('input',function(){
    let image_grayscale = $("#image_layer_grayscale").val();
    $('[data-status="selected"]').css("filter","grayscale("+image_grayscale+")");
});
$('#image_layer_grayscale').on('change', _.debounce(function() {
  let image_blur = $("#image_layer_grayscale").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'grayscale'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_saturate').on('input',function(){
    let image_saturate = $("#image_layer_saturate").val();
    $('[data-status="selected"]').css("filter","saturate("+image_saturate+")");
});
$('#image_layer_saturate').on('change', _.debounce(function() {
  let image_blur = $("#image_layer_saturate").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'saturate'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


// Image Layer Shadows ---------------------------------------------------------

$('#image_layer_shadow').on('input',function() {
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#image_layer_shadow').is(':checked')) {
        $(".image_layer_shadow_div").fadeIn(500);
    } else {
        $(".image_layer_shadow_div").fadeOut(500);
        $('[data-status="selected"] img').css("box-shadow","none");
        $.post(
        'database_functions/layer_child_shadow.php',
          {
             layer_id: image_layer_id_of_selected,
             type: 'child',
             value: 'none',
             property: 'box-shadow'
          },
         function(result){ 
            save_btn();
         }
        );
    }
});

$(document).on("click", "#image_layer_shadow_1", function(){
    $('[data-status="selected"] img').css({"box-shadow":"15px 15px 10px #a5a5a5"});
    $("#image_shadow_distance_previous").val(50);
    $("#image_shadow_distance").val(50);
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: '15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#image_layer_shadow_2", function(){
    $('[data-status="selected"] img').css({"box-shadow":"-15px 15px 10px #a5a5a5"});
    $("#image_shadow_distance_previous").val(50);
    $("#image_shadow_distance").val(50);
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: '-15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#image_layer_shadow_3", function(){
    $('[data-status="selected"] img').css({"box-shadow":"-15px -15px 10px #a5a5a5"});
    $("#image_shadow_distance_previous").val(50);
    $("#image_shadow_distance").val(50);
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: '-15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#image_layer_shadow_4", function(){
    $('[data-status="selected"] img').css({"box-shadow":"15px -15px 10px #a5a5a5"});
    $("#image_shadow_distance_previous").val(50);
    $("#image_shadow_distance").val(50); 
    let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: '15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});


$('#image_shadow_blurr').on('input',function(){
    let image_shadow_blurr = $("#image_shadow_blurr").val();
    let image_shadow_previous_blurr = $("#image_shadow_blurr_previous").val();
    if(image_shadow_blurr > image_shadow_previous_blurr) {
        $('[data-status="selected"] img').css('box-shadow', shadow_blurr_incValues($('[data-status="selected"] img').css('box-shadow')));
        let value_for_post = shadow_blurr_incValues($('[data-status="selected"] img').css('box-shadow'));
    } else {
        $('[data-status="selected"] img').css('box-shadow', shadow_blurr_decValues($('[data-status="selected"] img').css('box-shadow')));
        let value_for_post = shadow_blurr_decValues($('[data-status="selected"] img').css('box-shadow'));
    }
    $("#image_shadow_blurr_previous").val(image_shadow_blurr);
});
$('#image_shadow_blurr').on('change', _.debounce(function() {
  let image_shadow_blurr_value = $('[data-status="selected"] img').css('box-shadow');
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: image_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


function shadow_blurr_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])+1) +'px #a5a5a5';
}
function shadow_blurr_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])-1) +'px #a5a5a5';
}


$('#image_shadow_distance').on('input',function(){
    let image_shadow_distance = $("#image_shadow_distance").val();
    let image_shadow_previous_distance = $("#image_shadow_distance_previous").val();
    if(image_shadow_distance > image_shadow_previous_distance) {
        $('[data-status="selected"] img').css('box-shadow', shadow_incValues($('[data-status="selected"] img').css('box-shadow')));
    } else {
        $('[data-status="selected"] img').css('box-shadow', shadow_decValues($('[data-status="selected"] img').css('box-shadow')));
    }
    $("#image_shadow_distance_previous").val(image_shadow_distance);
});
$('#image_shadow_distance').on('change', _.debounce(function() {
  let image_shadow_blurr_value = $('[data-status="selected"] img').css('box-shadow');
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         value: image_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


function shadow_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])+1) +'px ' + (parseInt(splits[1])+1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}
function shadow_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])-1) +'px ' + (parseInt(splits[1])-1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}

// Image Layer Border ----------------------------------------------------------

$('#image_layer_border').on('input',function() {
    if ($('#image_layer_border').is(':checked')) {
        $(".image_layer_border_div").fadeIn(500);
        $('[data-status="selected"] img').css("border","1px solid");

        let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
        $.post(
            'database_functions/layer_child_boder.php',
              {
                 layer_id: image_layer_id_of_selected,
                 type: 'child',
                 status: 'yes'
              },
             function(result){ 
                save_btn();
             }
        );

    } else {
        $(".image_layer_border_div").fadeOut(500);
        $('[data-status="selected"] img').css("border","none");
        
        let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
        $.post(
            'database_functions/layer_child_boder.php',
              {
                 layer_id: image_layer_id_of_selected,
                 type: 'child',
                 status: 'no'
              },
             function(result){ 
                save_btn();
             }
        );
    }
});

$('#image_layer_border_thickness').on('input',function() {
    let image_layer_border_thickness = $("#image_layer_border_thickness").val();
    $('[data-status="selected"] img').css("border-width",image_layer_border_thickness);
});
$('#image_layer_border_thickness').on('change', _.debounce(function() {
  let image_style = $("#image_layer_border_thickness").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         style: 'border-width',
         value: image_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_border_radius').on('input',function() {
    let image_layer_border_radius = $("#image_layer_border_radius").val();
    $('[data-status="selected"] img').css("border-radius",image_layer_border_radius+"px");
});
$('#image_layer_border_radius').on('change', _.debounce(function() {
  let image_style = $("#image_layer_border_radius").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         style: 'border-radius',
         value: image_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_border_style').on('input',function() {
    let image_layer_border_style = $("#image_layer_border_style").val();
    $('[data-status="selected"] img').css("border-style",image_layer_border_style);
});
$('#image_layer_border_style').on('change', _.debounce(function() {
  let image_style = $("#image_layer_border_style").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         style: 'border-style',
         value: image_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#image_layer_border_color').on('input',function() {
    let image_layer_border_color = $("#image_layer_border_color").val();
    $('[data-status="selected"] img').css("border-color",image_layer_border_color);
});
$('#image_layer_border_color').on('change', _.debounce(function() {
  let image_style = $("#image_layer_border_color").val();
  let image_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: image_layer_id_of_selected,
         type: 'child',
         style: 'border-color',
         value: image_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 150));



// Image Layer Crop ------------------------------------------------------------

$(document).on("click", ".image_crop_icon", function(){
    $("#image_crop_div").css("display","block");
    $("#overlay").css("display","block");
});

var recorte = $('#image_crop_div_content_preview > img');
recorte.cropper({
  movable: false,
  zoomable: false,
  rotatable: false,
  scalable: false
});

function previewFile() {
  $("#image_crop_btn").css("display","block");
   $('img').show(); 
   let image_path = $('[data-status="selected"] img').attr('src');
   let image_data_myattr = $('[data-status="selected"]').attr('data-myattr');
   let image_url = 'https://vdofy.harryatwork.com/dev/'+image_path;
   $("#image_crop_submit_btn").attr('data-myattr', image_data_myattr);
   recorte.cropper('replace',image_url);
}

$('.salvar').click(function(){
	temp = recorte.cropper('getCroppedCanvas').toDataURL();	
	document.getElementById('image_cropped_preview').src= temp;
    $("#image_cropped").val(temp);
	$(".salvar").css("display","none");
	$(".image_crop_submit_btn_div").css("display","block");
    $(".cropper-container").css("display","none");
    $("#image_cropped_preview").removeClass("cropper-hidden")

    setInterval(function(){ 
      $('#image_iframe body').css("text-align","center");
	  $('#image_iframe img').css("height","300px");
    }, 3000);
		
});

$(document).on("click", "#image_crop_submit_btn", function(){
    $("#image_crop_div_content_preview").prepend('<img src="images-main/general/loading.svg" style="position: absolute;background: lightgray;opacity: 0.5;width: 85%;height: 60%;">');
    $(".image_crop_submit_btn").css("display","none");
    
    var fd = new FormData();
    var image_cropped = $('#image_cropped').val();
    var u_id = $("#u_id").val();
    var v_m_id = $("#v_m_id").val();
    var image_data_myattr = $("#image_crop_submit_btn").attr('data-myattr');
    
    fd.append('image_cropped',image_cropped);
    fd.append('u_id',u_id);
    fd.append('v_m_id',v_m_id);
    fd.append('old_layer_id',image_data_myattr);
    
    $.ajax({
        url:'database_functions/upload_cropped_image.php',
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(response){
            if(response != 'yep'){
                $("#image_crop_div_content_preview").html('<img src="images-main/general/tick.gif" alt="" style="width: 75px;" /><br /> Uploaded');
                // $.ajax({
                //     url: 'https://vdofy.harryatwork.com/dev/left_menu_detail.php', 
                //     success: function(data) {
                //       $('.left_bar_menu_div').html(data);
                //     },
                // });
            
                $('[data-status="selected"] img').attr("src", "images-main/images/"+response);
            
                setTimeout(function(){ 
                    $("#image_crop_div").css("display","none");
                    $("#image_crop_div_content_preview").html('<img id="image_cropped_preview" />');
                    $("#overlay").css("display","none");
                    
                //      $(".card-title").css({"background": "#F7F7F7", "color": "black"});
                //      $("#card-title-layers").css("width","48%");
                // 	    $("#card-title-media").css({"display":"inline-block","background": "#5c9ae4", "color": "white"});
                // 	    $("#card-body").css("display","none");
                // 	    $("#card-body2").css("display","block");
                // 	    $("#media_child").css("display","block");
                // 	    $("#images-indi-div").css("display","block");
                // 	    $("#images-indi-div-uploads").css("display","block");
                // 	    $("#images-indi-div-library").css("display","none");
                //      $("#media_child_library_btn").css({"background":"#f7f7f7","color":"black"});
                //      $("#media_child_uploads_btn").css({"background":"#5c9ae4","color":"white"});
                    
                }, 2000);
            }else{ }
        }
    });
});



//-- Image Customizations Functions Ends ---------------------------------------------------------------------------------------------------------------------------->

//-- Image Animations Functions ------------------------------------------------------------------------------------------------------------------------------------->

//-- Image Animations tabs fucntions ------->


$(document).on("click", "#image_layer_options_animations_select_heading", function(){
    if ($('#image_layer_options_animations_select').css('display') == 'none') {
        $("#image_layer_options_animations_select_heading").html('Animationss <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
        $("#image_layer_options_animations_speed").slideUp("slow");
    } else { 
        $("#image_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-down" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
    }
    $("#image_layer_options_animations_select").slideToggle( "slow" );
});




//-- Image Animations tabs fucntions Ends ------->



$(".image_layer_animation_video").hover(function() {
        $(this).get(0).play();
        let animation = $(this).attr('id');
        let current_left = $(".current_left").val();
        let current_top = $(".current_top").val();
        let current_width = $(".current_width").val();
        let current_height = $(".current_height").val();

        if(animation == 'image_layer_animation_fadein') {
            $('[data-status="selected"]').css("display","none");
            $('[data-status="selected"]').fadeIn(1000);
        } else if(animation == 'image_layer_animation_riseup') { 
            $('[data-status="selected"]').css("top","-100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'image_layer_animation_risedown') { 
            $('[data-status="selected"]').css("top","100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'image_layer_animation_slideleft') { 
            $('[data-status="selected"]').css("left","-100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'image_layer_animation_slideright') { 
            $('[data-status="selected"]').css("left","100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'image_layer_animation_zoomin') { 
            $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else if(animation == 'image_layer_animation_zoomout') { 
            $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else { }
        
    }, function() {
        $(this).get(0).load();
        $('[data-status="selected"]').css({"top":current_top,"left":current_left,"width":current_width,"height":current_height});
});

$(document).on("click", ".image_layer_animation_video", function() {
    $(".image_layer_animation_video").css("border","1px solid #b5b5b5");
    $(this).css("border","4px solid #5c9ae4");
    $(".image_layer_animation_video").attr("data-image-animation-status","0")
    $(this).attr("data-image-animation-status","1")
    let data_value = $(this).attr("data-animation");
    
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    if(data_value == 'none') { } else { 
        
        if ($('#image_layer_options_animations_select').css('display') == 'none') { } else { 
            $("#image_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#image_layer_options_animations_select").slideToggle( "slow" );
        }
        if ($('#image_layer_options_animations_speed').css('display') == 'none') {
            $("#image_layer_options_animations_speed_heading").html('Speed <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#image_layer_options_animations_speed").slideToggle( "slow" );
        } else { }
    
    }
    
    $.post(
        'database_functions/layer_animation.php',
          {
             layer_id: layer_id,
             type: layer_type,
             animation: data_value
          },
         function(result){ 
            save_btn();
         }
      );
    
});

$('#image_layer_options_animations_speed_input').change(function() {
    let image_layer_options_animations_speed_input = parseInt($("#image_layer_options_animations_speed_input").val());
    
    let current_left = $(".current_left").val();
    let current_top = $(".current_top").val();
    let current_width = $(".current_width").val();
    let current_height = $(".current_height").val();
    
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    let image_animation_selected = $("#image_layer_options_animations_select").find("[data-image-animation-status=1]").attr("data-animation"); 
    
    if(image_animation_selected == 'fadein') {
        $('[data-status="selected"]').css("display","none");
        $('[data-status="selected"]').fadeIn(image_layer_options_animations_speed_input);
    } else if(image_animation_selected == 'riseup') {
        $('[data-status="selected"]').css("top","-100%");
        $('[data-status="selected"]').animate({ top: current_top, }, image_layer_options_animations_speed_input );
    } else if(image_animation_selected == 'risedown') {
        $('[data-status="selected"]').css("top","100%");
        $('[data-status="selected"]').animate({ top: current_top, }, image_layer_options_animations_speed_input );
    } else if(image_animation_selected == 'slideleft') {
        $('[data-status="selected"]').css("left","-100%");
        $('[data-status="selected"]').animate({ left: current_left, }, image_layer_options_animations_speed_input );
    } else if(image_animation_selected == 'slideright') {
        $('[data-status="selected"]').css("left","100%");
        $('[data-status="selected"]').animate({ left: current_left, }, image_layer_options_animations_speed_input );
    } else if(image_animation_selected == 'zoomin') {
        $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, image_layer_options_animations_speed_input, 'linear'); 
    } else if(image_animation_selected == 'zoomout') {
        $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, image_layer_options_animations_speed_input, 'linear');
    }
    
});
$('#image_layer_options_animations_speed_input').on('change', _.debounce(function() {
    let image_layer_options_animations_speed_input = parseInt($("#image_layer_options_animations_speed_input").val());
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    $.post(
        'database_functions/layer_animation_speed.php',
          {
             layer_id: layer_id,
             type: layer_type,
             speed: image_layer_options_animations_speed_input
          },
         function(result){ 
            save_btn();
         }
     );
    
}, 100));



//--- Image Animations Functons Ends -------------------------------------------------------------------------------------------------------------------------------->




//-- Video Customizations Functions --------------------------------------------------------------------------------------------------------------------------------->



// Video Layer width/ Height ---------------------------------------------------

$('#video_layer_width').on('input',function(){
    let video_layer_width = $('#video_layer_width').val();
    
    if($('#video_layer_height').prop('disabled')) {
        $('[data-status="selected"]').width(video_layer_width+"%");
        $('[data-status="selected"]').height("auto");
        $(".video_resize_width_div_span").html(video_layer_width+"%");
    } else {
        $('[data-status="selected"]').width(video_layer_width*10+"px");
        $(".video_resize_width_div_span").html(video_layer_width*10+"px");
    }
});
$('#video_layer_width').on('change', _.debounce(function() {
    let video_layer_width = $('#video_layer_width').val();
    let video_layer_height = $('[data-status="selected"]').height();
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    
    if($('#video_layer_height').prop('disabled')) {
        $.post(
        	'database_functions/layer_resize.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             width: video_layer_width+"%",
             height : 'auto'
          },
         function(result){
            save_btn();
         }
        );
         
    } else {
        $.post(
        	'database_functions/layer_resize.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             width: video_layer_width*10+"px",
             height : video_layer_height+"px"
          },
         function(result){
            save_btn();
         }
        );
        
    }
}, 100));


$('#video_layer_height').on('input',function(){
    let video_layer_height = $('#video_layer_height').val();
    $('[data-status="selected"]').height(video_layer_height+"px");
    $(".video_resize_width_div_span").html(video_layer_height+"px");
    
    let video_layer_width = $('[data-status="selected"]').width();
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');

    $.post(
    	'database_functions/layer_resize.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         width: video_layer_width+"px",
         height : video_layer_height+"px"
      },
     function(result){
        save_btn();
        // var main_layer_id = result;
     }
    );
    
});

$(document).on("click", ".video_layer_height_lock", function(){
    $(".video_resize_height_div_span").html('<i class="fas fa-lock-open video_layer_height_un_lock" style="font-size: 24px;cursor:pointer;"></i>');
    $("#video_layer_height").prop("disabled", false);
});
$(document).on("click", ".video_layer_height_un_lock", function(){
    $(".video_resize_height_div_span").html('<i class="fas fa-lock video_layer_height_lock" style="font-size: 24px;cursor:pointer;"></i>');
    $("#video_layer_height").prop("disabled", true);
    $('[data-status="selected"]').height("auto");
});

// Video Layer Rotate ----------------------------------------------------------

$('#video_layer_rotate').on('input',function(){
    let video_rotate = $("#video_layer_rotate").val();
    $('[data-status="selected"]').css("transform","rotate("+video_rotate+"deg)");
    $(".video_rotate_div_span").html(video_rotate+" Deg")
});
$('#video_layer_rotate').on('change', _.debounce(function() {
  let video_rotate = $("#video_layer_rotate").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_rotate.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         rotate_deg: "rotate("+video_rotate+"deg)"
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$(document).on("click", "#video_layer_vertical_flip", function() {
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#video_layer_vertical_flip').css('border-top-style') == 'none' && $('#video_layer_vertical_flip').css('border-bottom-style') == 'none' && $('#video_layer_vertical_flip').css('border-right-style') == 'none' && $('#video_layer_vertical_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleY(-1)");
        $('#video_layer_vertical_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(-1)'
          },
         function(result){
             save_btn();
             //console.log(0); 
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleY(+1)");
        $('#video_layer_vertical_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(+1)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    }
});
$(document).on("click", "#video_layer_horizontal_flip", function(){
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#video_layer_horizontal_flip').css('border-top-style') == 'none' && $('#video_layer_horizontal_flip').css('border-bottom-style') == 'none' && $('#video_layer_horizontal_flip').css('border-right-style') == 'none' && $('#video_layer_horizontal_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleX(-1)");
        $('#video_layer_horizontal_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(-1)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleX(+1)");
        $('#video_layer_horizontal_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(+1)'
          },
         function(result){ 
            save_btn();
             //console.log(0); 
         }
        );
    }
});

// Video Layer Contrast --------------------------------------------------------

$('#video_layer_opacity').on('input',function(){
    let video_opacity = $("#video_layer_opacity").val();
    $('[data-status="selected"]').css("opacity",video_opacity);
});
$('#video_layer_opacity').on('change', _.debounce(function() {
  let video_opacity = $("#video_layer_opacity").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_opacity.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         opacity: video_opacity
      },
     function(result){ 
        save_btn();
        //console.log(video_opacity);
     }
    );
}, 100));

$('#video_layer_blur').on('input',function(){
    let video_blur = $("#video_layer_blur").val();
    $('[data-status="selected"]').css("filter","blur("+video_blur+"px)");
});
$('#video_layer_blur').on('change', _.debounce(function() {
  let video_blur = $("#video_layer_blur").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         blur: video_blur,
         property: 'blur'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_brightness').on('input',function(){
    let video_brightness = $("#video_layer_brightness").val();
    $('[data-status="selected"]').css("filter","brightness("+video_brightness+")");
});
$('#video_layer_brightness').on('change', _.debounce(function() {
  let video_blur = $("#video_layer_brightness").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         blur: video_blur,
         property: 'brightness'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_contrast').on('input',function(){
    let video_contrast = $("#video_layer_contrast").val();
    $('[data-status="selected"]').css("filter","contrast("+video_contrast+")");
});
$('#video_layer_contrast').on('change', _.debounce(function() {
  let video_blur = $("#video_layer_contrast").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         blur: video_blur,
         property: 'contrast'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_grayscale').on('input',function(){
    let video_grayscale = $("#video_layer_grayscale").val();
    $('[data-status="selected"]').css("filter","grayscale("+video_grayscale+")");
});
$('#video_layer_grayscale').on('change', _.debounce(function() {
  let video_blur = $("#video_layer_grayscale").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         blur: video_blur,
         property: 'grayscale'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_saturate').on('input',function(){
    let video_saturate = $("#video_layer_saturate").val();
    $('[data-status="selected"]').css("filter","saturate("+video_saturate+")");
});
$('#video_layer_saturate').on('change', _.debounce(function() {
  let video_blur = $("#video_layer_saturate").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'parent',
         blur: video_blur,
         property: 'saturate'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

// Video Layer Shadows ---------------------------------------------------------

$('#video_layer_shadow').on('input',function() {
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#video_layer_shadow').is(':checked')) {
        $(".video_layer_shadow_div").fadeIn(500);
    } else {
        $(".video_layer_shadow_div").fadeOut(500);
        $('[data-status="selected"] video').css("box-shadow","none");
        $.post(
        'database_functions/layer_child_shadow.php',
          {
             layer_id: video_layer_id_of_selected,
             type: 'child',
             value: 'none',
             property: 'box-shadow'
          },
         function(result){ 
            save_btn();
         }
        );
    }
});

$(document).on("click", "#video_layer_shadow_1", function(){
    $('[data-status="selected"] video').css({"box-shadow":"15px 15px 10px #a5a5a5"});
    $("#video_shadow_distance_previous").val(50);
    $("#video_shadow_distance").val(50);
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: '15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#video_layer_shadow_2", function(){
    $('[data-status="selected"] video').css({"box-shadow":"-15px 15px 10px #a5a5a5"});
    $("#video_shadow_distance_previous").val(50);
    $("#video_shadow_distance").val(50);
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: '-15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#video_layer_shadow_3", function(){
    $('[data-status="selected"] video').css({"box-shadow":"-15px -15px 10px #a5a5a5"});
    $("#video_shadow_distance_previous").val(50);
    $("#video_shadow_distance").val(50);
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: '-15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#video_layer_shadow_4", function(){
    $('[data-status="selected"] video').css({"box-shadow":"15px -15px 10px #a5a5a5"});
    $("#video_shadow_distance_previous").val(50);
    $("#video_shadow_distance").val(50); 
    let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: '15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});


$('#video_shadow_blurr').on('input',function(){
    let video_shadow_blurr = $("#video_shadow_blurr").val();
    let video_shadow_previous_blurr = $("#video_shadow_blurr_previous").val();
    if(video_shadow_blurr > video_shadow_previous_blurr) {
        $('[data-status="selected"] video').css('box-shadow', shadow_blurr_incValues($('[data-status="selected"] video').css('box-shadow')));
        let value_for_post = shadow_blurr_incValues($('[data-status="selected"] video').css('box-shadow'));
    } else {
        $('[data-status="selected"] video').css('box-shadow', shadow_blurr_decValues($('[data-status="selected"] video').css('box-shadow')));
        let value_for_post = shadow_blurr_decValues($('[data-status="selected"] video').css('box-shadow'));
    }
    $("#video_shadow_blurr_previous").val(video_shadow_blurr);
});
$('#video_shadow_blurr').on('change', _.debounce(function() {
  let video_shadow_blurr_value = $('[data-status="selected"] video').css('box-shadow');
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: video_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


$('#video_shadow_distance').on('input',function(){
    let video_shadow_distance = $("#video_shadow_distance").val();
    let video_shadow_previous_distance = $("#video_shadow_distance_previous").val();
    if(video_shadow_distance > video_shadow_previous_distance) {
        $('[data-status="selected"] video').css('box-shadow', shadow_incValues($('[data-status="selected"] video').css('box-shadow')));
    } else {
        $('[data-status="selected"] video').css('box-shadow', shadow_decValues($('[data-status="selected"] video').css('box-shadow')));
    }
    $("#video_shadow_distance_previous").val(video_shadow_distance);
});
$('#video_shadow_distance').on('change', _.debounce(function() {
  let video_shadow_blurr_value = $('[data-status="selected"] video').css('box-shadow');
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         value: video_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));


// Video Layer Borders ---------------------------------------------------------

$('#video_layer_border').on('input',function() {
    if ($('#video_layer_border').is(':checked')) {
        $(".video_layer_border_div").fadeIn(500);
        $('[data-status="selected"] video').css("border","1px solid");
        let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
        $.post(
            'database_functions/layer_child_boder.php',
              {
                 layer_id: video_layer_id_of_selected,
                 type: 'child',
                 status: 'yes'
              },
             function(result){ 
                save_btn();
             }
        );
    } else {
        $(".video_layer_border_div").fadeOut(500);
        $('[data-status="selected"] video').css("border","none");
        
        let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
        $.post(
            'database_functions/layer_child_boder.php',
              {
                 layer_id: video_layer_id_of_selected,
                 type: 'child',
                 status: 'no'
              },
             function(result){ 
                save_btn();
             }
        );
    }
});

$('#video_layer_border_thickness').on('input',function() {
    let video_layer_border_thickness = $("#video_layer_border_thickness").val();
    $('[data-status="selected"] video').css("border-width",video_layer_border_thickness);
});
$('#video_layer_border_thickness').on('change', _.debounce(function() {
  let video_style = $("#video_layer_border_thickness").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         style: 'border-width',
         value: video_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_border_radius').on('input',function() {
    let video_layer_border_radius = $("#video_layer_border_radius").val();
    $('[data-status="selected"] video').css("border-radius",video_layer_border_radius+"px");
});
$('#video_layer_border_radius').on('change', _.debounce(function() {
  let video_style = $("#video_layer_border_radius").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         style: 'border-radius',
         value: video_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_border_style').on('input',function() {
    let video_layer_border_style = $("#video_layer_border_style").val();
    $('[data-status="selected"] video').css("border-style",video_layer_border_style);
});
$('#video_layer_border_style').on('change', _.debounce(function() {
  let video_style = $("#video_layer_border_style").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         style: 'border-style',
         value: video_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#video_layer_border_color').on('input',function() {
    let video_layer_border_color = $("#video_layer_border_color").val();
    $('[data-status="selected"] video').css("border-color",video_layer_border_color);
});
$('#video_layer_border_color').on('change', _.debounce(function() {
  let video_style = $("#video_layer_border_color").val();
  let video_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: video_layer_id_of_selected,
         type: 'child',
         style: 'border-color',
         value: video_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 150));

// Video Layer Autoplay/Loop (Doesn't exist in right_side.php) ---------------------------------------------------

$('#video_layer_autoplay').on('input',function(){
    if ( $('[data-status="selected"] video').attr('autoplay') == 'autoplay' ) {
        $('[data-status="selected"] video').attr('autoplay',false);
    } else {
        $('[data-status="selected"] video').attr('autoplay',true);
    }
});

//(Doesn't exist in right_side.php) ----------------------------------------------------------------------------------

$('#video_layer_loop').on('input',function(){
    if ( $('[data-status="selected"] video').attr('loop') == 'loop' ) {
        $('[data-status="selected"] video').attr('loop',false);
    } else {
        $('[data-status="selected"] video').attr('loop',true);
    }
});

// $(document).on("click", "#video_layer_delete", function(){
//     $('[data-status="selected"]').remove();
//     $(".layer_options").css("display","none");
//     $(".layer_options_default").css("display","block");
// });



//-- Video Customizations Functions Ends  --------------------------------------------------------------------------------------------------------------------------->


//-- Video Animations Functions ------------------------------------------------------------------------------------------------------------------------------------->

//-- Video Animations tabs fucntions ------->


$(document).on("click", "#video_layer_options_animations_select_heading", function(){
    if ($('#video_layer_options_animations_select').css('display') == 'none') {
        $("#video_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
        $("#video_layer_options_animations_speed").slideUp("slow");
    } else { 
        $("#video_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-down" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
    }
    $("#video_layer_options_animations_select").slideToggle( "slow" );
});




//-- Video Animations tabs fucntions Ends ------->



$(".video_layer_animation_video").hover(function() {
        $(this).get(0).play();
        let animation = $(this).attr('id');
        
        let current_left = $(".current_left").val();
        let current_top = $(".current_top").val();
        let current_width = $(".current_width").val();
        let current_height = $(".current_height").val();
        
        if(animation == 'video_layer_animation_fadein') {
            $('[data-status="selected"]').css("display","none");
            $('[data-status="selected"]').fadeIn(1000);
        } else if(animation == 'video_layer_animation_riseup') { 
            $('[data-status="selected"]').css("top","-100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'video_layer_animation_risedown') { 
            $('[data-status="selected"]').css("top","100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'video_layer_animation_slideleft') { 
            $('[data-status="selected"]').css("left","-100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'video_layer_animation_slideright') { 
            $('[data-status="selected"]').css("left","100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'video_layer_animation_zoomin') { 
            $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else if(animation == 'video_layer_animation_zoomout') { 
            $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else { }
        
    }, function() {
        $(this).get(0).load();
        $('[data-status="selected"]').css({"top":current_top,"left":current_left,"width":current_width,"height":current_height});
});

$(document).on("click", ".video_layer_animation_video", function(){
    $(".video_layer_animation_video").css("border","1px solid #b5b5b5");
    $(this).css("border","4px solid #5c9ae4");
    $(".video_layer_animation_video").attr("data-video-animation-status","0")
    $(this).attr("data-video-animation-status","1")
    let data_value = $(this).attr("data-animation");
    
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    if(data_value == 'none'){ } else { 
    
        if ($('#video_layer_options_animations_select').css('display') == 'none') { } else { 
            $("#video_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#video_layer_options_animations_select").slideToggle( "slow" );
        }
        
        if ($('#video_layer_options_animations_speed').css('display') == 'none') {
            $("#video_layer_options_animations_speed_heading").html('Speed <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#video_layer_options_animations_speed").slideToggle( "slow" );
        } else { }
    
    }
    
    $.post(
        'database_functions/layer_animation.php',
          {
             layer_id: layer_id,
             type: layer_type,
             animation: data_value
          },
         function(result){ 
            save_btn();
         }
      );
    
});

$('#video_layer_options_animations_speed_input').change(function(){
    let video_layer_options_animations_speed_input = parseInt($("#video_layer_options_animations_speed_input").val());
    
    let current_left = $(".current_left").val();
    let current_top = $(".current_top").val();
    let current_width = $(".current_width").val();
    let current_height = $(".current_height").val();
    
    let video_animation_selected = $("#video_layer_options_animations_select").find("[data-video-animation-status=1]").attr("data-animation"); 
    
    if(video_animation_selected == 'fadein') {
        $('[data-status="selected"]').css("display","none");
        $('[data-status="selected"]').fadeIn(video_layer_options_animations_speed_input);
    } else if(video_animation_selected == 'riseup') {
        $('[data-status="selected"]').css("top","-100%");
        $('[data-status="selected"]').animate({ top: current_top, }, video_layer_options_animations_speed_input );
    } else if(video_animation_selected == 'risedown') {
        $('[data-status="selected"]').css("top","100%");
        $('[data-status="selected"]').animate({ top: current_top, }, video_layer_options_animations_speed_input );
    } else if(video_animation_selected == 'slideleft') {
        $('[data-status="selected"]').css("left","-100%");
        $('[data-status="selected"]').animate({ left: current_left, }, video_layer_options_animations_speed_input );
    } else if(video_animation_selected == 'slideright') {
        $('[data-status="selected"]').css("left","100%");
        $('[data-status="selected"]').animate({ left: current_left, }, video_layer_options_animations_speed_input );
    } else if(video_animation_selected == 'zoomin') {
        $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, video_layer_options_animations_speed_input, 'linear'); 
    } else if(video_animation_selected == 'zoomout') {
        $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, video_layer_options_animations_speed_input, 'linear');
    }
    
});
$('#video_layer_options_animations_speed_input').on('change', _.debounce(function() {
    let video_layer_options_animations_speed_input = parseInt($("#video_layer_options_animations_speed_input").val());
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    // console.log(video_layer_options_animations_speed_input);
    // console.log(layer_id);
    // console.log(layer_type);
    $.post(
        'database_functions/layer_animation_speed.php',
          {
             layer_id: layer_id,
             type: layer_type,
             speed: video_layer_options_animations_speed_input
          },
         function(result){ 
            save_btn();
         }
     );
    
}, 100));



//--- Video Animations Functons Ends -------------------------------------------------------------------------------------------------------------------------------->









//-- Font Customizations Functions --------------------------------------------------------------------------------------------------------------------------------->


// Font Layer Rotate ----------------------------------------------------------

$('#font_layer_rotate').on('input',function(){
    // console.log(1);
    let font_rotate = $("#font_layer_rotate").val();
    $('[data-status="selected"]').css("transform","rotate("+font_rotate+"deg)");
    $(".font_rotate_div_span").html(font_rotate+" Deg")
});
$('#font_layer_rotate').on('change', _.debounce(function() {
  let font_rotate = $("#font_layer_rotate").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_rotate.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'parent',
         rotate_deg: "rotate("+font_rotate+"deg)"
      },
     function(result){
        save_btn();
     }
    );
}, 100));

$(document).on("click", "#font_layer_vertical_flip", function(){
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#font_layer_vertical_flip').css('border-top-style') == 'none' && $('#font_layer_vertical_flip').css('border-bottom-style') == 'none' && $('#font_layer_vertical_flip').css('border-right-style') == 'none' && $('#font_layer_vertical_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleY(-1)");
        $('#font_layer_vertical_flip').css("border","5px solid #5c9ae4");
        
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(-1)'
          },
         function(result){ 
            save_btn();
             //console.log(0); 
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleY(+1)");
        $('#font_layer_vertical_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(+1)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    }
});
$(document).on("click", "#font_layer_horizontal_flip", function(){
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#font_layer_horizontal_flip').css('border-top-style') == 'none' && $('#font_layer_horizontal_flip').css('border-bottom-style') == 'none' && $('#font_layer_horizontal_flip').css('border-right-style') == 'none' && $('#font_layer_horizontal_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleX(-1)");
        $('#font_layer_horizontal_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(-1)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleX(+1)");
        $('#font_layer_horizontal_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(+1)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    }
});


$('#font_layer_stroke').on('input',function() {
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#font_layer_stroke').is(':checked')) {
        $(".font_layer_stroke_div").fadeIn(500);
        $('[data-status="selected"] textarea').css("-webkit-text-stroke", '2px rgb(92, 154, 228)');
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: '-webkit-text-stroke',
             value: '2px rgb(92, 154, 228)'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    } else {
        $(".font_layer_stroke_div").fadeOut(500);
        $('[data-status="selected"] textarea').css("-webkit-text-stroke", 'transparent');
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: '-webkit-text-stroke',
             value: 'transparent'
          },
         function(result){ 
             save_btn();
             //console.log(0); 
         }
        );
    }
});

$("#font_layer_stroke_picker").on('input',function(){
    let font_stroke_picker = $("#font_layer_stroke_picker").val();
    $('[data-status="selected"] textarea').css("-webkit-text-stroke", '2px '+font_stroke_picker);
});

$('#font_layer_stroke_picker').on('change', _.debounce(function() {
    let font_stroke_picker = $("#font_layer_stroke_picker").val();
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: '-webkit-text-stroke',
             value: '2px '+font_stroke_picker
          },
        function(result){ 
            save_btn();
             //console.log(0); 
        }
    );
}, 100));

// Font Layer Contrast --------------------------------------------------------

$('#font_layer_opacity').on('input',function(){
    let font_opacity = $("#font_layer_opacity").val();
    $('[data-status="selected"]').css("opacity",font_opacity);
});
$('#font_layer_opacity').on('change', _.debounce(function() {
  let font_opacity = $("#font_layer_opacity").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_opacity.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'parent',
         opacity: font_opacity
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#font_layer_blur').on('input',function(){
    let font_blur = $("#font_layer_blur").val();
    $('[data-status="selected"]').css("filter","blur("+font_blur+"px)");
});
$('#font_layer_blur').on('change', _.debounce(function() {
  let font_blur = $("#font_layer_blur").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'parent',
         blur: font_blur,
         property: 'blur'
      },
     function(result){ 
         save_btn();
        //console.log(1);
     }
    );
}, 100));

$('#font_layer_grayscale').on('input',function(){
    let font_grayscale = $("#font_layer_grayscale").val();
    $('[data-status="selected"]').css("filter","grayscale("+font_grayscale+")");
});
$('#font_layer_grayscale').on('change', _.debounce(function() {
  let font_blur = $("#font_layer_grayscale").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'parent',
         blur: font_blur,
         property: 'grayscale'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#font_layer_background').on('input',function() {
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#font_layer_background').is(':checked')) {
        $(".font_layer_background_div").fadeIn(500);
        $('[data-status="selected"]').css("background","white");
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             style: 'background',
             value: 'white'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
    } else {
        $(".font_layer_background_div").fadeOut(500);
        $('[data-status="selected"]').css("background","none");
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             style: 'background',
             value: 'none'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
    }
});

$("#font_layer_background_picker").on('input',function(){
    let font_background_picker = $("#font_layer_background_picker").val();
    $('[data-status="selected"] textarea').css("background", font_background_picker);
    $("#font_layer_background_hex").val(font_background_picker);
});
$('#font_layer_background_picker').on('change', _.debounce(function() {
  let font_background_color = $("#font_layer_background_picker").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             style: 'background',
             value: font_background_color
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));

$("#font_layer_background_hex").on('input',function(){
    let font_background_hex = $("#font_layer_background_hex").val();
    $('[data-status="selected"] textarea').css("background", font_background_hex);
    $("#font_layer_background_picker").val(font_background_hex);
});
$('#font_layer_background_hex').on('change', _.debounce(function() {
  let font_background_color = $("#font_layer_background_hex").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'parent',
             style: 'background',
             value: font_background_color
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));


// Font Layer Properties -------------------------------------------------------

$("#font_layer_font_family").change(function(){
    let layer_id_of_layer_title = $('[data-status="selected"]').attr('data-myattr');
    let font_family = $(this).val();
    $('[data-status="selected"] textarea').css("font-family",font_family);
      $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: layer_id_of_layer_title,
             type: 'child',
             style: 'font-family',
             value: font_family
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
});

$(document).on("change", ".font-input", function(){
    let layer_id_of_layer_title = $('[data-status="selected"]').attr('data-myattr');
    let textarea_content = $(this).val();
    let char_count = parseInt($(this).val().length);
    let char_parent_width = char_count * 80;
    $('[data-status="selected"]').css("width",char_parent_width+"px");
    
    $.post(
    	'database_functions/textarea_input.php',
      {
         content: textarea_content,
         layer_id_of_layer_title: layer_id_of_layer_title,
      },
     function(result){
         save_btn();
        //console.log(4);
      }
    );
    
    $.post(
    	'database_functions/layer_resize.php',
      {
         layer_id: layer_id_of_layer_title,
         type: 'parent',
         width: char_parent_width+"px",
         height : "auto"
      },
     function(result){
         save_btn();
        // var main_layer_id = result;
     }
    );
    
});

$('#font_layer_size_range').on('input',function(){
    let font_size_range = ($("#font_layer_size_range").val())+'px';
    $('[data-status="selected"] textarea').css("font-size", font_size_range);
    $("#font_layer_size_custom").val(font_size_range);
});
$('#font_layer_size_range').on('change', _.debounce(function() {
  let font_layer_size = $("#font_layer_size_range").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'font-size',
             value: font_layer_size+'px'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));

$('#font_layer_weight_range').on('input',function(){
    let font_weight_range = ($("#font_layer_weight_range").val());
    $('[data-status="selected"] textarea').css("font-weight", font_weight_range);
});
$('#font_layer_weight_range').on('change', _.debounce(function() {
  let font_layer_weight = $("#font_layer_weight_range").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'font-weight',
             value: font_layer_weight
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));

$('#font_layer_size_custom').on('input',function(){
    let font_size_custom = $("#font_layer_size_custom").val();
    $('[data-status="selected"] textarea').css("font-size", font_size_custom);
});
$('#font_layer_size_custom').on('change', _.debounce(function() {
  let font_layer_size = $("#font_layer_size_custom").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'font-size',
             value: font_layer_size+'px'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));

$("#font_layer_color_picker").on('input',function(){
    let font_color_picker = $("#font_layer_color_picker").val();
    $('[data-status="selected"] textarea').css("color", font_color_picker);
    $("#font_layer_color_hex").val(font_color_picker);
});
$('#font_layer_color_picker').on('change', _.debounce(function() {
  let font_layer_color = $("#font_layer_color_picker").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'color',
             value: font_layer_color
          },
            function(result){ 
                save_btn();
                // console.log(1); 
            }
        );
}, 100));

$("#font_layer_color_hex").on('input',function(){
    let font_color_hex = $("#font_layer_color_hex").val();
    $('[data-status="selected"] textarea').css("color", font_color_hex);
    $("#font_layer_color_picker").val(font_color_hex);
});
$('#font_layer_color_hex').on('change', _.debounce(function() {
  let font_layer_color = $("#font_layer_color_hex").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'color',
             value: font_layer_color
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
}, 100));


// Font Layer Shadows ---------------------------------------------------------

$('#font_layer_shadow').on('input',function() {
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#font_layer_shadow').is(':checked')) {
        $(".font_layer_shadow_div").fadeIn(500);
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: '15px 15px 10px #a5a5a5'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
    } else {
        $(".font_layer_shadow_div").fadeOut(500);
        $('[data-status="selected"] textarea').css("box-shadow","none");
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: 'none'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
            }
        );
    }
});

$(document).on("click", "#font_layer_shadow_1", function(){
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $('[data-status="selected"] textarea').css({"box-shadow":"15px 15px 10px #a5a5a5"});
    $("#font_shadow_distance_previous").val(50);
    $("#font_shadow_distance").val(50);
    
    $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: '15px 15px 10px #a5a5a5'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
          }
    );
});
$(document).on("click", "#font_layer_shadow_2", function(){
    $('[data-status="selected"] textarea').css({"box-shadow":"-15px 15px 10px #a5a5a5"});
    $("#font_shadow_distance_previous").val(50);
    $("#font_shadow_distance").val(50);
    
    $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: '-15px 15px 10px #a5a5a5'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
          }
    );
});
$(document).on("click", "#font_layer_shadow_3", function(){
    $('[data-status="selected"] textarea').css({"box-shadow":"-15px -15px 10px #a5a5a5"});
    $("#font_shadow_distance_previous").val(50);
    $("#font_shadow_distance").val(50);
    
    $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: '-15px -15px 10px #a5a5a5'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
          }
    );
});
$(document).on("click", "#font_layer_shadow_4", function(){
    $('[data-status="selected"] textarea').css({"box-shadow":"15px -15px 10px #a5a5a5"});
    $("#font_shadow_distance_previous").val(50);
    $("#font_shadow_distance").val(50);
    
    $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'box-shadow',
             value: '15px -15px 10px #a5a5a5'
          },
            function(result){ 
                save_btn();
                //console.log(0); 
          }
    );
});


$('#font_shadow_blurr').on('input',function(){
    let font_shadow_blurr = $("#font_shadow_blurr").val();
    let font_shadow_previous_blurr = $("#font_shadow_blurr_previous").val();
    if(font_shadow_blurr > font_shadow_previous_blurr) {
        $('[data-status="selected"] textarea').css('box-shadow', shadow_blurr_incValues($('[data-status="selected"] textarea').css('box-shadow')));
    } else {
        $('[data-status="selected"] textarea').css('box-shadow', shadow_blurr_decValues($('[data-status="selected"] textarea').css('box-shadow')));
    }
    $("#font_shadow_blurr_previous").val(font_shadow_blurr);
});
$('#font_shadow_blurr').on('change', _.debounce(function() {
  let font_shadow_blurr_value = $('[data-status="selected"] textarea').css('box-shadow');
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         value: font_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

function shadow_blurr_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])+1) +'px #a5a5a5';
}
function shadow_blurr_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])-1) +'px #a5a5a5';
}


$('#font_shadow_distance').on('input',function(){
    let font_shadow_distance = $("#font_shadow_distance").val();
    let font_shadow_previous_distance = $("#font_shadow_distance_previous").val();
    if(font_shadow_distance > font_shadow_previous_distance) {
        $('[data-status="selected"] textarea').css('box-shadow', shadow_incValues($('[data-status="selected"] textarea').css('box-shadow')));
    } else {
        $('[data-status="selected"] textarea').css('box-shadow', shadow_decValues($('[data-status="selected"] textarea').css('box-shadow')));
    }
    $("#font_shadow_distance_previous").val(font_shadow_distance);
});
$('#font_shadow_distance').on('change', _.debounce(function() {
  let font_shadow_blurr_value = $('[data-status="selected"] textarea').css('box-shadow');
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         value: font_shadow_blurr_value,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

function shadow_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])+1) +'px ' + (parseInt(splits[1])+1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}
function shadow_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])-1) +'px ' + (parseInt(splits[1])-1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}

// Font Layer Border ----------------------------------------------------------

$('#font_layer_border').on('input',function() {
    let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#font_layer_border').is(':checked')) {
        $(".font_layer_border_div").fadeIn(500);
        $('[data-status="selected"] textarea').css("border","1px solid");
        
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'border',
             value: '1px solid'
          },
            function(result){ 
                //console.log(0); 
                save_btn();
          }
        );
    } else {
        $(".font_layer_border_div").fadeOut(500);
        $('[data-status="selected"] textarea').css("border","none");
        
        $.post(
    	'database_functions/layer_style.php',
          {
             layer_id: font_layer_id_of_selected,
             type: 'child',
             style: 'border',
             value: 'none'
          },
            function(result){ 
                //console.log(0);
                save_btn();
          }
        );
    }
});

$('#font_layer_border_thickness').on('input',function() {
    let font_layer_border_thickness = $("#font_layer_border_thickness").val();
    $('[data-status="selected"] textarea').css("border-width",font_layer_border_thickness);
});
$('#font_layer_border_thickness').on('change', _.debounce(function() {
  let font_style = $("#font_layer_border_thickness").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         style: 'border-width',
         value: font_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#font_layer_border_radius').on('input',function() {
    let font_layer_border_radius = $("#font_layer_border_radius").val();
    $('[data-status="selected"] textarea').css("border-radius",font_layer_border_radius+"px");
});
$('#font_layer_border_radius').on('change', _.debounce(function() {
  let font_style = $("#font_layer_border_radius").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         style: 'border-radius',
         value: font_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#font_layer_border_style').on('input',function() {
    let font_layer_border_style = $("#font_layer_border_style").val();
    $('[data-status="selected"] textarea').css("border-style",font_layer_border_style);
});
$('#font_layer_border_style').on('change', _.debounce(function() {
  let font_style = $("#font_layer_border_style").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         style: 'border-style',
         value: font_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#font_layer_border_color').on('input',function() {
    let font_layer_border_color = $("#font_layer_border_color").val();
    $('[data-status="selected"] textarea').css("border-color",font_layer_border_color);
});
$('#font_layer_border_color').on('change', _.debounce(function() {
  let font_style = $("#font_layer_border_color").val();
  let font_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_style.php',
      {
         layer_id: font_layer_id_of_selected,
         type: 'child',
         style: 'border-color',
         value: font_style
      },
     function(result){ 
        save_btn();
     }
    );
}, 150));




//-- Font Customizations Functions Ends ---------------------------------------------------------------------------------------------------------------------------->

//-- Font Animations Functions ------------------------------------------------------------------------------------------------------------------------------------->

//-- Font Animations tabs fucntions ------->


$(document).on("click", "#font_layer_options_animations_select_heading", function(){
    if ($('#font_layer_options_animations_select').css('display') == 'none') {
        $("#font_layer_options_animations_select_heading").html('Animationss <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
        $("#font_layer_options_animations_speed").slideUp("slow");
    } else { 
        $("#font_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-down" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
    }
    $("#font_layer_options_animations_select").slideToggle( "slow" );
});


//-- Font Animations tabs fucntions Ends ------->



$(".font_layer_animation_video").hover(function() {
        $(this).get(0).play();
        let animation = $(this).attr('id');
        
        let current_left = $(".current_left").val();
        let current_top = $(".current_top").val();
        let current_width = $(".current_width").val();
        let current_height = $(".current_height").val();

        if(animation == 'font_layer_animation_fadein') {
            $('[data-status="selected"]').css("display","none");
            $('[data-status="selected"]').fadeIn(1000);
        } else if(animation == 'font_layer_animation_riseup') { 
            $('[data-status="selected"]').css("top","-100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'font_layer_animation_risedown') { 
            $('[data-status="selected"]').css("top","100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'font_layer_animation_slideleft') { 
            $('[data-status="selected"]').css("left","-100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'font_layer_animation_slideright') { 
            $('[data-status="selected"]').css("left","100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'font_layer_animation_zoomin') { 
            $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else if(animation == 'font_layer_animation_zoomout') { 
            $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else { }
        
    }, function() {
        $(this).get(0).load();
        $('[data-status="selected"]').css({"top":current_top,"left":current_left,"width":current_width,"height":current_height});
});

$(document).on("click", ".font_layer_animation_video", function(){
    $(".font_layer_animation_video").css("border","1px solid #b5b5b5");
    $(this).css("border","4px solid #5c9ae4");
    $(".font_layer_animation_video").attr("data-font-animation-status","0")
    $(this).attr("data-font-animation-status","1")
    let data_value = $(this).attr("data-animation");
    
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    if(data_value == 'none'){ } else { 
    
        if ($('#font_layer_options_animations_select').css('display') == 'none') { } else { 
            $("#font_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#font_layer_options_animations_select").slideToggle( "slow" );
        }
        
        if ($('#font_layer_options_animations_speed').css('display') == 'none') {
            $("#font_layer_options_animations_speed_heading").html('Speed <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#font_layer_options_animations_speed").slideToggle( "slow" );
        } else { }
    
    }
    
    $.post(
        'database_functions/layer_animation.php',
          {
             layer_id: layer_id,
             type: layer_type,
             animation: data_value
          },
         function(result){ 
            save_btn();
         }
      );
    
});

$('#font_layer_options_animations_speed_input').change(function(){
    let font_layer_options_animations_speed_input = parseInt($("#font_layer_options_animations_speed_input").val());
    
    let current_left = $(".current_left").val();
    let current_top = $(".current_top").val();
    let current_width = $(".current_width").val();
    let current_height = $(".current_height").val();
    
    let font_animation_selected = $("#font_layer_options_animations_select").find("[data-font-animation-status=1]").attr("data-animation"); 
    
    if(font_animation_selected == 'fadein') {
        $('[data-status="selected"]').css("display","none");
        $('[data-status="selected"]').fadeIn(font_layer_options_animations_speed_input);
    } else if(font_animation_selected == 'riseup') {
        $('[data-status="selected"]').css("top","-100%");
        $('[data-status="selected"]').animate({ top: current_top, }, font_layer_options_animations_speed_input );
    } else if(font_animation_selected == 'risedown') {
        $('[data-status="selected"]').css("top","100%");
        $('[data-status="selected"]').animate({ top: current_top, }, font_layer_options_animations_speed_input );
    } else if(font_animation_selected == 'slideleft') {
        $('[data-status="selected"]').css("left","-100%");
        $('[data-status="selected"]').animate({ left: current_left, }, font_layer_options_animations_speed_input );
    } else if(font_animation_selected == 'slideright') {
        $('[data-status="selected"]').css("left","100%");
        $('[data-status="selected"]').animate({ left: current_left, }, font_layer_options_animations_speed_input );
    } else if(font_animation_selected == 'zoomin') {
        $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, font_layer_options_animations_speed_input, 'linear'); 
    } else if(font_animation_selected == 'zoomout') {
        $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, font_layer_options_animations_speed_input, 'linear');
    }
    
});
$('#font_layer_options_animations_speed_input').on('change', _.debounce(function() {
    let font_layer_options_animations_speed_input = parseInt($("#font_layer_options_animations_speed_input").val());
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    $.post(
        'database_functions/layer_animation_speed.php',
          {
             layer_id: layer_id,
             type: layer_type,
             speed: font_layer_options_animations_speed_input
          },
         function(result){ 
            save_btn();
         }
     );
    
}, 100));



//--- Font Animations Functons Ends -------------------------------------------------------------------------------------------------------------------------------->










//-- Shape Customizations Functions --------------------------------------------------------------------------------------------------------------------------------->


// Shape Layer Width/ height ---------------------------------------------------

$('#shape_layer_width').on('input',function(){
    let shape_layer_width = $('#shape_layer_width').val();
    if($('#shape_layer_height').prop('disabled')) {
        $('[data-status="selected"]').width(shape_layer_width+"%");
        $('[data-status="selected"]').height(shape_layer_width+"%");
        $('.svg_rect').css({"width":"100%","height":"100%"});
        $('.rect').width("100%");
        $('.rect').height("100%");
        $(".shape_resize_width_div_span").html(shape_layer_width+"%");
    } else {
        $('[data-status="selected"]').width((shape_layer_width*10)+"px");
        $(".shape_resize_width_div_span").html((shape_layer_width*10)+"px");
    }
});
$('#shape_layer_height').on('input',function(){
    let shape_layer_height = $('#shape_layer_height').val();
    $('[data-status="selected"]').height(shape_layer_height+"px");
    $(".shape_resize_height_div_span").html(shape_layer_height+"px");
});

$(document).on("click", ".shape_layer_height_lock", function(){
    $(".shape_layer_height_lock_span").html('<i class="fas fa-lock-open shape_layer_height_un_lock" style="font-size: 40px;cursor:pointer;"></i>');
    $("#shape_layer_height").prop("disabled", false);
});
$(document).on("click", ".shape_layer_height_un_lock", function(){
    $(".shape_layer_height_lock_span").html('<i class="fas fa-lock shape_layer_height_lock" style="font-size: 40px;cursor:pointer;"></i>');
    $(".shape_resize_height_div_span").html("Auto");
    $("#shape_layer_height").prop("disabled", true);
    $('[data-status="selected"]').height("auto");
});

// Shape Layer Rotate ----------------------------------------------------------

$('#shape_layer_rotate').on('input',function(){
    let shape_rotate = $("#shape_layer_rotate").val();
    $('[data-status="selected"]').css("transform","rotate("+shape_rotate+"deg)");
    $(".shape_rotate_div_span").html(shape_rotate+" Deg")
});
$('#shape_layer_rotate').on('change', _.debounce(function() {
  let shape_rotate = $("#shape_layer_rotate").val();
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_rotate.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'parent',
         rotate_deg: "rotate("+shape_rotate+"deg)"
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

// Shape Layer Contrast --------------------------------------------------------

$('#shape_layer_opacity').on('input',function(){
    let shape_opacity = $("#shape_layer_opacity").val();
    $('[data-status="selected"]').css("opacity",shape_opacity);
});
$('#shape_layer_opacity').on('change', _.debounce(function() {
  let shape_opacity = $("#shape_layer_opacity").val();
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_opacity.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'parent',
         opacity: shape_opacity
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#shape_layer_blur').on('input',function(){
    let shape_blur = $("#shape_layer_blur").val();
    $('[data-status="selected"]').css("filter","blur("+shape_blur+"px)");
});
$('#shape_layer_blur').on('change', _.debounce(function() {
  let image_blur = $("#shape_layer_blur").val();
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'parent',
         blur: image_blur,
         property: 'blur'
      },
     function(result){ 
        //console.log(1);
        save_btn();
     }
    );
}, 100));

// Shape Layer Properties -------------------------------------------------------

$('#shape_layer_size_range').on('input',function() {
    let shape_size_range = ($("#shape_layer_size_range").val());
    
    if ($('[data-status="selected"]').hasClass('Sqaure')) {
        let shape_size_range_svg = parseInt(shape_size_range)+20;
        //$('[data-status="selected"]').css({"height": shape_size_range_svg,"width":shape_size_range_svg});
        $('[data-status="selected"] svg').css({"height": shape_size_range_svg,"width":shape_size_range_svg});
        $('[data-status="selected"] svg rect').attr({"height": shape_size_range,"width":shape_size_range});
        
    } else if ($('[data-status="selected"]').hasClass('Sqaure_Round')) {
        let shape_size_range_svg = parseInt(shape_size_range)+20;
        //$('[data-status="selected"]').css({"height": shape_size_range_svg,"width":shape_size_range_svg});
        $('[data-status="selected"] svg').css({"height": shape_size_range_svg,"width":shape_size_range_svg});
        $('[data-status="selected"] svg rect').attr({"height": shape_size_range,"width":shape_size_range});
    
    } else if ($('[data-status="selected"]').hasClass('Circle')) {
        let shape_size_range_circle = (parseInt(shape_size_range)*2)+4;
        //$('[data-status="selected"]').css({"height": shape_size_range_circle,"width":shape_size_range_circle});
        $('[data-status="selected"] svg').css({"height": shape_size_range_circle,"width":shape_size_range_circle});
        $('[data-status="selected"] svg circle').attr('r', shape_size_range);
        
    } else if ($('[data-status="selected"]').hasClass('Elipse')) {
        let shape_size_range_elipse = (parseInt(shape_size_range)*2)+4;
        //$('[data-status="selected"]').css({"width":shape_size_range_elipse});
        $('[data-status="selected"] svg').css({"width":shape_size_range_elipse});
        $('[data-status="selected"] svg ellipse').attr('rx', shape_size_range);
        
    } else if ($('[data-status="selected"]').hasClass('Line')) {
        let shape_size_range_line = (parseInt(shape_size_range))+10;
        //$('[data-status="selected"]').css({"height": shape_size_range_line,"width":shape_size_range_line});
        $('[data-status="selected"] svg').css({"height": shape_size_range_line,"width":shape_size_range_line});
        $('[data-status="selected"] svg line').attr({'x2': shape_size_range, 'y2': shape_size_range});
    } else {
        
    }
});
$('#shape_layer_size_range').on('change', _.debounce(function() {
  let shape_size_range = ($("#shape_layer_size_range").val());
  let shape_size_range_svg = '';
  let grand_child_height = '';
  let grand_child_width = '';
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  
  if ($('[data-status="selected"]').hasClass('Sqaure')) {
      shape_size_range_svg = parseInt(shape_size_range)+20;
      grand_child_height = 'height';
      grand_child_width = 'width';
      
  } else if ($('[data-status="selected"]').hasClass('Sqaure_Round')) {
      shape_size_range_svg = parseInt(shape_size_range)+20;
      grand_child_height = 'height';
      grand_child_width = 'width';
        
  } else if ($('[data-status="selected"]').hasClass('Circle')) {
      shape_size_range_svg = (parseInt(shape_size_range)*2)+4;
      grand_child_height = 'r';
      grand_child_width = 'width';
        
  } else if ($('[data-status="selected"]').hasClass('Elipse')) {
      shape_size_range_svg = (parseInt(shape_size_range)*2)+4;
      grand_child_height = 'rx';
      grand_child_width = 'width';
        
  } else if ($('[data-status="selected"]').hasClass('Line')) {
      shape_size_range_svg = (parseInt(shape_size_range))+10;
      grand_child_height = 'x2';
      grand_child_width = 'y2';
  } else {
        
  }

// Child Style insert - Height
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         style: 'height',
         value: shape_size_range_svg+'px'
      },
     function(result){
        save_btn();
     }
  );
// Child Style insert - Width
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         style: 'width',
         value: shape_size_range_svg+'px'
      },
     function(result){ 
        save_btn();
     }
  );
  
// Grand Child Style insert - Height
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: grand_child_height,
         value: shape_size_range+'px'
      },
     function(result){
         save_btn();
     }
  );
// Grand Child Style insert - Width
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: grand_child_width,
         value: shape_size_range+'px'
      },
     function(result){ 
         save_btn();
     }
  );
  
    
}, 150));


$('#shape_layer_weight_range').on('input',function(){
    let shape_weight_range = ($("#shape_layer_weight_range").val());
    $('[data-status="selected"] svg rect').css("stroke-width", shape_weight_range);
    $('[data-status="selected"] svg circle').css("stroke-width", shape_weight_range);
    $('[data-status="selected"] svg ellipse').css("stroke-width", shape_weight_range);
    $('[data-status="selected"] svg line').css("stroke-width", shape_weight_range);
    //$('[data-status="selected"] svg polyline').css("stroke-width", shape_weight_range);
});
$('#shape_layer_weight_range').on('change', _.debounce(function() {
  let shape_weight_range = ($("#shape_layer_weight_range").val());
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: 'stroke-width',
         value: shape_weight_range
      },
     function(result){ 
        //console.log(1);
        save_btn();
     }
    );
}, 100));

$("#shape_layer_color_picker").on('input',function(){
    let shape_color_picker = $("#shape_layer_color_picker").val();
    $('[data-status="selected"] svg rect').css("stroke", shape_color_picker);
    $('[data-status="selected"] svg circle').css("stroke", shape_color_picker);
    $('[data-status="selected"] svg ellipse').css("stroke", shape_color_picker);
    $('[data-status="selected"] svg line').css("stroke", shape_color_picker);
    //$('[data-status="selected"] svg polyline').css("stroke", shape_color_picker);
    $("#shape_layer_color_hex").val(shape_color_picker);
});
$('#shape_layer_color_picker').on('change', _.debounce(function() {
  let shape_color_picker = ($("#shape_layer_color_picker").val());
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: 'stroke',
         value: shape_color_picker
      },
     function(result){ 
        // console.log(1);
        save_btn();
     }
    );
}, 100));

$("#shape_layer_color_hex").on('input',function(){
    let shape_color_hex = $("#shape_layer_color_hex").val();
    $('[data-status="selected"] svg rect').css("stroke", shape_color_hex);
    $('[data-status="selected"] svg circle').css("stroke", shape_color_hex);
    $('[data-status="selected"] svg ellipse').css("stroke", shape_color_hex);
    $('[data-status="selected"] svg line').css("stroke", shape_color_hex);
    $('[data-status="selected"] svg polyline').css("stroke", shape_color_hex);
    $("#shape_layer_color_picker").val(shape_color_hex);
});
$('#shape_layer_color_hex').on('change', _.debounce(function() {
  let shape_color_hex = ($("#shape_layer_color_hex").val());
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: 'stroke',
         value: shape_color_hex
      },
     function(result){ 
        //console.log(1);
        save_btn();
     }
    );
}, 100));

$("#shape_layer_fill_color_picker").on('input',function(){
    let shape_fill_color_picker = $("#shape_layer_fill_color_picker").val();
    $('[data-status="selected"] svg rect').css("fill", shape_fill_color_picker);
    $('[data-status="selected"] svg circle').css("fill", shape_fill_color_picker);
    $('[data-status="selected"] svg ellipse').css("fill", shape_fill_color_picker);
    $('[data-status="selected"] svg line').css("fill", shape_fill_color_picker);
    $('[data-status="selected"] svg polyline').css("fill", shape_fill_color_picker);
    $("#shape_layer_fill_color_hex").val(shape_fill_color_picker);
});
$('#shape_layer_fill_color_picker').on('change', _.debounce(function() {
  let shape_fill_color_picker = ($("#shape_layer_fill_color_picker").val());
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: 'fill',
         value: shape_fill_color_picker
      },
     function(result){ 
        //console.log(1);
        save_btn();
     }
    );
}, 100));

$("#shape_layer_fill_color_hex").on('input',function(){
    let shape_fill_color_hex = $("#shape_layer_fill_color_hex").val();
    $('[data-status="selected"] svg rect').css("fill", shape_fill_color_hex);
    $('[data-status="selected"] svg circle').css("fill", shape_fill_color_hex);
    $('[data-status="selected"] svg ellipse').css("fill", shape_fill_color_hex);
    $('[data-status="selected"] svg line').css("fill", shape_fill_color_hex);
    $('[data-status="selected"] svg polyline').css("fill", shape_fill_color_hex);
    $("#shape_layer_fill_color_picker").val(shape_fill_color_hex);
});
$('#shape_layer_fill_color_hex').on('change', _.debounce(function() {
  let shape_fill_color_hex = ($("#shape_layer_fill_color_hex").val());
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_style.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'grandchild',
         style: 'fill',
         value: shape_fill_color_hex
      },
     function(result){ 
        //console.log(1);
        save_btn();
     }
    );
}, 100));



// Shape Layer Shadows ---------------------------------------------------------

$('#shape_layer_shadow').on('input',function() {
    let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if ($('#shape_layer_shadow').is(':checked')) {
        $(".shape_layer_shadow_div").fadeIn(500);
    } else {
        $(".shape_layer_shadow_div").fadeOut(500);
        $('[data-status="selected"] svg').css("box-shadow","none");
        $.post(
        'database_functions/layer_child_shadow.php',
          {
             layer_id: shape_layer_id_of_selected,
             type: 'child',
             value: 'none',
             property: 'box-shadow'
          },
         function(result){ 
            save_btn();
         }
        );
    }
});

$(document).on("click", "#shape_layer_shadow_1", function(){
    $('[data-status="selected"] svg').css({"box-shadow":"15px 15px 10px #a5a5a5"});
    $("#shape_shadow_distance_previous").val(50);
    $("#shape_shadow_distance").val(50);
    let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: '15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#shape_layer_shadow_2", function(){
    $('[data-status="selected"] svg').css({"box-shadow":"-15px 15px 10px #a5a5a5"});
    $("#shape_shadow_distance_previous").val(50);
    $("#shape_shadow_distance").val(50);
    let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: '-15px 15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#shape_layer_shadow_3", function(){
    $('[data-status="selected"] svg').css({"box-shadow":"-15px -15px 10px #a5a5a5"});
    $("#shape_shadow_distance_previous").val(50);
    $("#shape_shadow_distance").val(50);
    let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: '-15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});
$(document).on("click", "#shape_layer_shadow_4", function(){
    $('[data-status="selected"] svg').css({"box-shadow":"15px -15px 10px #a5a5a5"});
    $("#shape_shadow_distance_previous").val(50);
    $("#shape_shadow_distance").val(50);
    let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    $.post(
    'database_functions/layer_child_shadow.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: '15px -15px 10px #a5a5a5',
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
});


$('#shape_shadow_blurr').on('input',function(){
    let shape_shadow_blurr = $("#shape_shadow_blurr").val();
    let shape_shadow_previous_blurr = $("#shape_shadow_blurr_previous").val();
    if(shape_shadow_blurr > shape_shadow_previous_blurr) {
        $('[data-status="selected"] svg').css('box-shadow', shadow_blurr_incValues($('[data-status="selected"] svg').css('box-shadow')));
    } else {
        $('[data-status="selected"] svg').css('box-shadow', shadow_blurr_decValues($('[data-status="selected"] svg').css('box-shadow')));
    }
    $("#shape_shadow_blurr_previous").val(shape_shadow_blurr);
});
$('#shape_shadow_blurr').on('change', _.debounce(function() {
  let shape_shadow_blurr = $('[data-status="selected"] svg').css('box-shadow');
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: shape_shadow_blurr,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

function shadow_blurr_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])+1) +'px #a5a5a5';
}
function shadow_blurr_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])) +'px ' + (parseInt(splits[1])) +'px ' + (parseInt(splits[2])-1) +'px #a5a5a5';
}


$('#shape_shadow_distance').on('input',function(){
    let shape_shadow_distance = $("#shape_shadow_distance").val();
    let shape_shadow_previous_distance = $("#shape_shadow_distance_previous").val();
    if(shape_shadow_distance > shape_shadow_previous_distance) {
        $('[data-status="selected"] svg').css('box-shadow', shadow_incValues($('[data-status="selected"] svg').css('box-shadow')));
    } else {
        $('[data-status="selected"] svg').css('box-shadow', shadow_decValues($('[data-status="selected"] svg').css('box-shadow')));
    }
    $("#shape_shadow_distance_previous").val(shape_shadow_distance);
});
$('#shape_shadow_distance').on('change', _.debounce(function() {
  let shape_shadow_distance = $('[data-status="selected"] svg').css('box-shadow');
  let shape_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_child_boder_update.php',
      {
         layer_id: shape_layer_id_of_selected,
         type: 'child',
         value: shape_shadow_distance,
         property: 'box-shadow'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

function shadow_incValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])+1) +'px ' + (parseInt(splits[1])+1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}
function shadow_decValues(values){
    var splits = values.split('px');
    splits[0] = splits[0].split(' ');
    splits[0] = splits[0][splits[0].length-1];
    return (parseInt(splits[0])-1) +'px ' + (parseInt(splits[1])-1) +'px ' + (parseInt(splits[2])) +'px #a5a5a5';
}



//-- Shape Customizations Functions Ends ---------------------------------------------------------------------------------------------------------------------------->

//-- Shape Animations Functions ------------------------------------------------------------------------------------------------------------------------------------->

//-- Shape Animations tabs fucntions ------->


$(document).on("click", "#shape_layer_options_animations_select_heading", function(){
    if ($('#shape_layer_options_animations_select').css('display') == 'none') {
        $("#shape_layer_options_animations_select_heading").html('Animationss <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
        $("#shape_layer_options_animations_speed").slideUp("slow");
    } else { 
        $("#shape_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-down" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
    }
    $("#shape_layer_options_animations_select").slideToggle( "slow" );
});




//-- Shape Animations tabs fucntions Ends ------->



$(".shape_layer_animation_video").hover(function() {
        $(this).get(0).play();
        let animation = $(this).attr('id');
        
        let current_left = $(".current_left").val();
        let current_top = $(".current_top").val();
        let current_width = $(".current_width").val();
        let current_height = $(".current_height").val();

        if(animation == 'shape_layer_animation_fadein') {
            $('[data-status="selected"]').css("display","none");
            $('[data-status="selected"]').fadeIn(1000);
        } else if(animation == 'shape_layer_animation_riseup') { 
            $('[data-status="selected"]').css("top","-100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'shape_layer_animation_risedown') { 
            $('[data-status="selected"]').css("top","100%");
            $('[data-status="selected"]').animate({ top: current_top, }, 500 );
        } else if(animation == 'shape_layer_animation_slideleft') { 
            $('[data-status="selected"]').css("left","-100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'shape_layer_animation_slideright') { 
            $('[data-status="selected"]').css("left","100%");
            $('[data-status="selected"]').animate({ left: current_left, }, 500 );
        } else if(animation == 'shape_layer_animation_zoomin') { 
            $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else if(animation == 'shape_layer_animation_zoomout') { 
            $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
            $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, 500, 'linear');  
        } else { }
        
    }, function() {
        $(this).get(0).load();
        $('[data-status="selected"]').css({"top":current_top,"left":current_left,"width":current_width,"height":current_height});
});

$(document).on("click", ".shape_layer_animation_video", function(){
    $(".shape_layer_animation_video").css("border","1px solid #b5b5b5");
    $(this).css("border","4px solid #5c9ae4");
    $(".shape_layer_animation_video").attr("data-shape-animation-status","0")
    $(this).attr("data-shape-animation-status","1")
    let data_value = $(this).attr("data-animation");
    
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    if(data_value == 'none'){ } else { 
    
        if ($('#shape_layer_options_animations_select').css('display') == 'none') { } else { 
            $("#shape_layer_options_animations_select_heading").html('Animations <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#shape_layer_options_animations_select").slideToggle( "slow" );
        }
        
        if ($('#shape_layer_options_animations_speed').css('display') == 'none') {
            $("#shape_layer_options_animations_speed_heading").html('Speed <i class="fa fa-caret-up" aria-hidden="true" style="float: right;padding-right: 10%;font-size: 30px;"></i>');
            $("#shape_layer_options_animations_speed").slideToggle( "slow" );
        } else { }
    
    }
    
    $.post(
        'database_functions/layer_animation.php',
          {
             layer_id: layer_id,
             type: layer_type,
             animation: data_value
          },
         function(result){ 
            save_btn();
         }
      );
    
});

$('#shape_layer_options_animations_speed_input').change(function(){
    let shape_layer_options_animations_speed_input = parseInt($("#shape_layer_options_animations_speed_input").val());
    
    let current_left = $(".current_left").val();
    let current_top = $(".current_top").val();
    let current_width = $(".current_width").val();
    let current_height = $(".current_height").val();

    let shape_animation_selected = $("#shape_layer_options_animations_select").find("[data-shape-animation-status=1]").attr("data-animation"); 
    
    if(shape_animation_selected == 'fadein') {
        $('[data-status="selected"]').css("display","none");
        $('[data-status="selected"]').fadeIn(shape_layer_options_animations_speed_input);
    } else if(shape_animation_selected == 'riseup') {
        $('[data-status="selected"]').css("top","-100%");
        $('[data-status="selected"]').animate({ top: current_top, }, shape_layer_options_animations_speed_input );
    } else if(shape_animation_selected == 'risedown') {
        $('[data-status="selected"]').css("top","100%");
        $('[data-status="selected"]').animate({ top: current_top, }, shape_layer_options_animations_speed_input );
    } else if(shape_animation_selected == 'slideleft') {
        $('[data-status="selected"]').css("left","-100%");
        $('[data-status="selected"]').animate({ left: current_left, }, shape_layer_options_animations_speed_input );
    } else if(shape_animation_selected == 'slideright') {
        $('[data-status="selected"]').css("left","100%");
        $('[data-status="selected"]').animate({ left: current_left, }, shape_layer_options_animations_speed_input );
    } else if(shape_animation_selected == 'zoomin') {
        $('[data-status="selected"]').css({"width":"100%","height":"100%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height':current_height, 'left':current_left, 'top':current_top}, shape_layer_options_animations_speed_input, 'linear'); 
    } else if(shape_animation_selected == 'zoomout') {
        $('[data-status="selected"]').css({"width":"0%","height":"0%","left":"0","top":"0"});
        $('[data-status="selected"]').animate({'width': current_width, 'height': current_height, 'left':current_left, 'top':current_top}, shape_layer_options_animations_speed_input, 'linear');
    }

});
$('#shape_layer_options_animations_speed_input').on('change', _.debounce(function() {
    let shape_layer_options_animations_speed_input = parseInt($("#shape_layer_options_animations_speed_input").val());
    let layer_id = $('[data-status="selected"]').attr('data-myattr');
    let layer_type = $('[data-status="selected"]').attr('data-layer');
    
    $.post(
        'database_functions/layer_animation_speed.php',
          {
             layer_id: layer_id,
             type: layer_type,
             speed: shape_layer_options_animations_speed_input
          },
         function(result){ 
            save_btn();
         }
     );
    
}, 100));

//--- Shape Animations Functons Ends -------------------------------------------------------------------------------------------------------------------------------->









//-- Background Customizaiton Functions ------------------------------------------------------------------------------------------------------------------------------>


    
// Background Layer Rotate ----------------------------------------------------------

$(document).on("click", "#background_layer_vertical_flip", function(){
    let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#background_layer_vertical_flip').css('border-top-style') == 'none' && $('#background_layer_vertical_flip').css('border-bottom-style') == 'none' && $('#background_layer_vertical_flip').css('border-right-style') == 'none' && $('#background_layer_vertical_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleY(-1)");
        $('#background_layer_vertical_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: background_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(-1)'
          },
         function(result){ 
            //console.log(0);
            save_btn();
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleY(+1)");
        $('#background_layer_vertical_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: background_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleY(+1)'
          },
         function(result){ 
            //console.log(0); 
            save_btn();
         }
        );
    }
});
$(document).on("click", "#background_layer_horizontal_flip", function(){
    let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
    if($('#background_layer_horizontal_flip').css('border-top-style') == 'none' && $('#background_layer_horizontal_flip').css('border-bottom-style') == 'none' && $('#background_layer_horizontal_flip').css('border-right-style') == 'none' && $('#background_layer_horizontal_flip').css('border-right-style') == 'none') {
        $('[data-status="selected"]').css("transform","scaleX(-1)");
        $('#background_layer_horizontal_flip').css("border","5px solid #5c9ae4");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: background_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(-1)'
          },
         function(result){
            save_btn();
         }
        );
    } else {
        $('[data-status="selected"]').css("transform","scaleX(+1)");
        $('#background_layer_horizontal_flip').css("border","none");
        $.post(
    	'database_functions/layer_rotate.php',
          {
             layer_id: background_layer_id_of_selected,
             type: 'parent',
             rotate_deg: 'scaleX(+1)'
          },
         function(result){
            save_btn();
         }
        );
    }
});

// Background Layer Contrast --------------------------------------------------------

$('#background_layer_opacity').on('input',function(){
    let background_opacity = $("#background_layer_opacity").val();
    $('[data-status="selected"]').css("opacity",background_opacity);
});
$('#background_layer_opacity').on('change', _.debounce(function() {
  let background_opacity = $("#background_layer_opacity").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_opacity.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         opacity: background_opacity
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#background_layer_blur').on('input',function(){
    let background_blur = $("#background_layer_blur").val();
    $('[data-status="selected"]').css("filter","blur("+background_blur+"px)");
});
$('#background_layer_blur').on('change', _.debounce(function() {
  let background_blur = $("#background_layer_blur").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         blur: background_blur,
         property: 'blur'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#background_layer_brightness').on('input',function(){
    let background_brightness = $("#background_layer_brightness").val();
    $('[data-status="selected"]').css("filter","brightness("+background_brightness+")");
});
$('#background_layer_brightness').on('change', _.debounce(function() {
  let background_brightness = $("#background_layer_brightness").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         blur: background_brightness,
         property: 'brightness'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#background_layer_contrast').on('input',function(){
    let background_contrast = $("#background_layer_contrast").val();
    $('[data-status="selected"]').css("filter","contrast("+background_contrast+")");
});
$('#background_layer_contrast').on('change', _.debounce(function() {
  let background_contrast = $("#background_layer_contrast").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         blur: background_contrast,
         property: 'contrast'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#background_layer_grayscale').on('input',function(){
    let background_grayscale = $("#background_layer_grayscale").val();
    $('[data-status="selected"]').css("filter","grayscale("+background_grayscale+")");
});
$('#background_layer_grayscale').on('change', _.debounce(function() {
  let background_grayscale = $("#background_layer_grayscale").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         blur: background_grayscale,
         property: 'grayscale'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

$('#background_layer_saturate').on('input',function(){
    let background_saturate = $("#background_layer_saturate").val();
    $('[data-status="selected"]').css("filter","saturate("+background_saturate+")");
});
$('#background_layer_saturate').on('change', _.debounce(function() {
  let background_saturate = $("#background_layer_saturate").val();
  let background_layer_id_of_selected = $('[data-status="selected"]').attr('data-myattr');
  $.post(
    'database_functions/layer_blur.php',
      {
         layer_id: background_layer_id_of_selected,
         type: 'parent',
         blur: background_saturate,
         property: 'saturate'
      },
     function(result){ 
        save_btn();
     }
    );
}, 100));

//-- Background Customizaiton Functions Ends ------------------------------------------------------------------------------------------------------------------->



//-- Work Area Customizations ---------------------------------------------------------------------------------------------------------------------------------->

$(document).on("click", ".work_area_color_btn", function(){
    let work_area_color_value = $(this).attr("data-color");
    $("#work_area_div_sub").css("background",work_area_color_value);
    $(".work_area_color_btn").css("border","none");
    $(this).css({"border":"0.1px solid gray","border-radius":"6px"});
    $("#work_area_color_picker").val(work_area_color_value);
    $("#work_area_color_hex").val(work_area_color_value);
    let work_area_color = $("#work_area_color_hex").val();
    let project_id = $("#v_m_id").val();
    let scene_id = $("#scene_id").val();
      $.post(
        'database_functions/scene_background_color.php',
          {
             project_id: project_id,
             scene_id: scene_id,
             scene_background: work_area_color_value
          },
         function(result){ 
            save_btn();
            $(".slide_preview_content_div").css("background",work_area_color);
         }
        );
});

$('#work_area_color_picker').on('input',function(){
    let work_area_color_picker = $("#work_area_color_picker").val();
    $("#work_area_div_sub").css("background",work_area_color_picker);
    $(".work_area_color_btn").css("border","none");
    $("#work_area_color_hex").val(work_area_color_picker);
});
$('#work_area_color_hex').on('input',function(){
    let work_area_color_hex = $("#work_area_color_hex").val();
    $("#work_area_div_sub").css("background",work_area_color_hex);
    $(".work_area_color_btn").css("border","none");
    $("#work_area_color_picker").val(work_area_color_hex);
});
$('#work_area_color_hex,#work_area_color_picker').on('change', _.debounce(function() {
  let work_area_color = $("#work_area_color_hex").val();
  let project_id = $("#v_m_id").val();
  let scene_id = $("#scene_id").val();
  $.post(
    'database_functions/scene_background_color.php',
      {
         project_id: project_id,
         scene_id: scene_id,
         scene_background: work_area_color
      },
     function(result){ 
        save_btn();
        $(".slide_preview_content_div").css("background",work_area_color);
     }
    );
}, 100));

// $('#work_area_layer_opacity').on('input',function(){
//     let work_area_layer_opacity = $("#work_area_layer_opacity").val();
//     $("#work_area_div_sub").css("opacity",work_area_layer_opacity);
// });


//-- Work Area Customizations Ends ---------------------------------------------------------------------------------------------------------------------------------->




//-- Bottom Animation Starts ---------------------------------------------------------------------------------------------------------------------------------------->


// Animation Timeline Draggable Resize recording
    
    
// This timeout, started on mousedown, triggers the beginning of a hold
var holdStarter = null;
// This flag indicates the user is currently holding the mouse down
var holdActive = false;

// MouseDown
$(document).on("mousedown", ".draggable_layer_indi_common", function(){
	holdStarter = null;
	holdActive = true;
    $(this).css("background","#becee2");
    $(this).addClass("active_draggable_timeline_layer");
});

// MouseUp
$(document).mouseup(function() {
	if (holdStarter) {
		clearTimeout(holdStarter);
        $('.draggable_layer_indi_common').css("background","#d5e8ff");
        // let animationdraggablelayercount = $(".active_draggable_timeline_layer").attr("data-animationdraggablelayercount");
        let main_layer_id = $(".active_draggable_timeline_layer").attr("data-mainlayeriddraggable");
        let animationdraggablelayer_left = $(".active_draggable_timeline_layer").css("left");
        let animationdraggablelayer_width = $(".active_draggable_timeline_layer").css("width");
        $.post(
         'database_functions/animation_layer_timeline_update.php',
          {
             layer_id: main_layer_id,
             animationdraggablelayer_left: animationdraggablelayer_left,
             animationdraggablelayer_width: animationdraggablelayer_width
          },
          function(result){ 
              save_btn();
          }
        );
        setTimeout(function(){
         	$('.draggable_layer_indi_common').removeClass("active_draggable_timeline_layer");
        }, 500);
	}
	else if (holdActive) {
		holdActive = false;
        $('.draggable_layer_indi_common').css("background","#d5e8ff");
        // let animationdraggablelayercount = $(".active_draggable_timeline_layer").attr("data-animationdraggablelayercount");
        let main_layer_id = $(".active_draggable_timeline_layer").attr("data-mainlayeriddraggable");
        let animationdraggablelayer_left = $(".active_draggable_timeline_layer").css("left");
        let animationdraggablelayer_width = $(".active_draggable_timeline_layer").css("width");
        $.post(
         'database_functions/animation_layer_timeline_update.php',
          {
             layer_id: main_layer_id,
             animationdraggablelayer_left: animationdraggablelayer_left,
             animationdraggablelayer_width: animationdraggablelayer_width
          },
          function(result){ 
             save_btn();
          }
        );
        setTimeout(function(){
         	$('.draggable_layer_indi_common').removeClass("active_draggable_timeline_layer");
        }, 500);
	}
});
    



//-- Bottom Animation Ends------------------------------------------------------------------------------------------------------------------------------------------->



//--  BGM Audio Trim  Starts ---------------------------------------------------------------------------------------------------------------------------------------->

var draggable_bgm_track_run;
var current_bgm_time_interval;
var bgm_track_tracker = $(".bgm_track_tracker");

$(".draggable_bgm_track").mousedown(function() {
    let draggable_bgm_track_total_width = 782;
    let bgm_length = parseInt($(".draggable_bgm_track").attr("data-length"));
    
    // bgm_trim_audio_play();
    var bgm_audio_start = $(".bgm_trim_dragger_left").text();
    var bgm_audio_end = $(".bgm_trim_dragger_right").text();
    var start_in_seconds = bgm_audio_start.split(':'); 
        start_in_seconds = ((+start_in_seconds[0]) * 60 + (+start_in_seconds[1])); 
    var abgm_trim_audioudio = document.getElementById('bgm_trim_audio');
    bgm_trim_audio.currentTime = start_in_seconds;
    bgm_trim_audio.pause();
    clearInterval(current_bgm_time_interval);
    console.log('paused');
    $(".bgm_audio_pause").css("display","none");
    $(".bgm_audio_play").css("display","block");
    bgm_track_tracker.css("margin-left","0px");
    
    draggable_bgm_track_run = setInterval(function() { 
        
        let draggable_bgm_track_width = $(".draggable_bgm_track").css("width");
            draggable_bgm_track_width = draggable_bgm_track_width.replace("px", ""); 
        let draggable_bgm_track_width_for_sec = (draggable_bgm_track_total_width/bgm_length).toFixed(2);         // length of each sec in px;
        let current_bgm_track_length = parseInt((draggable_bgm_track_width/draggable_bgm_track_width_for_sec).toFixed(2)); //cropped _bgm_track_length in secs;
        
        let draggable_bgm_track_left = $(".draggable_bgm_track").css("left");
            draggable_bgm_track_left = draggable_bgm_track_left.replace("px", ""); 
        let current_bgm_track_starting_time =  parseInt((draggable_bgm_track_left/draggable_bgm_track_width_for_sec).toFixed(2)); //cropped bgm start position in secs;
        
        let current_bgm_track_starting_time_echo = (secondsTimeSpanToHMS(current_bgm_track_starting_time));
        let current_bgm_track_ending_time = parseInt(current_bgm_track_starting_time + current_bgm_track_length);
        let current_bgm_track_ending_time_echo = (secondsTimeSpanToHMS(current_bgm_track_ending_time));
        
        function secondsTimeSpanToHMS(s) {
          var h = Math.floor(s / 3600); //Get whole hours
          s -= h * 3600;
          var m = Math.floor(s / 60); //Get remaining minutes
          s -= m * 60;
          return (m < 10 ? '0' + m : m) + ":" + (s < 10 ? '0' + s : s); //zero padding on minutes and seconds
        }
        
        // console.log('end_part '+current_bgm_track_ending_time);
        // console.log('left_part '+current_bgm_track_starting_time);
        
        $(".bgm_trim_dragger_left").text(current_bgm_track_starting_time_echo);
        $(".bgm_trim_dragger_right").text(current_bgm_track_ending_time_echo);
        $(".bgm_trim_dragger_left").attr("bgm_start_time_in_secs",current_bgm_track_starting_time);
        $(".bgm_trim_dragger_right").attr("bgm_end_time_in_secs",current_bgm_track_ending_time);
    }, 5);
    
});

$(".draggable_bgm_track").mouseup(function() {
    console.log('release');
    clearInterval(draggable_bgm_track_run);
    let bgm_audio_start = $(".bgm_trim_dragger_left").text();
    let bgm_audio_end = $(".bgm_trim_dragger_right").text();
    let bgm_trim_audio_src = $("#bgm_trim_audio").attr("data-source");
        bgm_trim_audio_src = bgm_trim_audio_src+'#t='+bgm_audio_start+','+bgm_audio_end;
    $("#bgm_trim_audio").attr("src",bgm_trim_audio_src);
    bgm_track_tracker.css("margin-left","0px");
    
});

$(".bgm_audio_play").on("click",function() {
    let bgm_title = $(this).attr("bgm-title");
    $(this).css("display","none");
    $(".bgm_audio_pause").css("display","block");
    // bgm_audio_trimmed_play_fnc();
});

$(".bgm_audio_pause").on("click",function() {
    $(this).css("display","none");
    $(".bgm_audio_play").css("display","block");
    // bgm_audio_trimmed_play_fnc();
});



function bgm_trim_audio_play() {
    var bgm_audio_start = $(".bgm_trim_dragger_left").text();
    var bgm_audio_end = $(".bgm_trim_dragger_right").text();
    var start_in_seconds = bgm_audio_start.split(':'); 
        start_in_seconds = ((+start_in_seconds[0]) * 60 + (+start_in_seconds[1])); 
    
    var abgm_trim_audioudio = document.getElementById('bgm_trim_audio');
    if (bgm_trim_audio.paused) {
        bgm_trim_audio.play();
        var bgm_track_tracker_counter = 1;
        current_bgm_time_interval = setInterval(function() { 
            let current_bgm_time = Math.round(bgm_trim_audio.currentTime);
            
            let end_in_seconds = bgm_audio_end.split(':'); 
                end_in_seconds = ((+end_in_seconds[0]) * 60 + (+end_in_seconds[1]));
                
                console.log(current_bgm_time);
                console.log(end_in_seconds);
                
                bgm_track_tracker.animate({'margin-left': bgm_track_tracker_counter}, 'slow');

            if(current_bgm_time >= end_in_seconds) {
                bgm_trim_audio.currentTime = start_in_seconds;
                bgm_trim_audio.pause();
                clearInterval(current_bgm_time_interval);
                $(".bgm_audio_pause").css("display","none");
                $(".bgm_audio_play").css("display","block");
                bgm_track_tracker.css("margin-left","0px");
            } else { }
            bgm_track_tracker_counter++;
        }, 1000);
    } else {
        bgm_trim_audio.currentTime = start_in_seconds;
        bgm_trim_audio.pause();
        clearInterval(current_bgm_time_interval);
        console.log('paused');
        $(".bgm_audio_pause").css("display","none");
        $(".bgm_audio_play").css("display","block");
        bgm_track_tracker.css("margin-left","0px");
    }
}


$(".bgm_audio_crop_btn").on("click",function() {
    let bgm_start_time = $(".bgm_trim_dragger_left").attr("bgm_start_time_in_secs");
    let bgm_end_time = $(".bgm_trim_dragger_right").attr("bgm_end_time_in_secs");
    let draggable_layer_id = $(this).attr("draggable_layer_id");
    $.post('database_functions/crop_bgm.php',
        {
            draggable_layer_id : draggable_layer_id,
            bgm_start_time : bgm_start_time,
            bgm_end_time : bgm_end_time
            
        }, function(result) {
            $("#bgm_audio").css("width",result+"px");
            $(".audio_trim_modal_2, #overlay").css("display","none");
            console.log(result);
        } 
    );
    
});


//--  BGM Audio Trim  Ends ---------------------------------------------------------------------------------------------------------------------------------------->




//------Slider Preview Stuff Starts ---------------------------------------------------------------------------------------------------------------------------------->


$(".slide_preview_btn").on("click",function() {
    $("#overlay2,.slide_preview_div").css("display","block");
    let v_m_id = $("#v_m_id").val();
    let scene_id = $("#scene_id").val();
    $.post(
     'database_functions/slide_preview.php',
      {
         project_id: v_m_id,
         scene_id : scene_id
      },
      function(result){ 
         $(".slide_preview_content_div").html(result);
         setTimeout(function(){
         	$(".slide_preview_loading_div").css("display","none");
         	$(".slide_preview_overlay").css("display","block");
         	$(".slide_preview_overlay_another").css("display","block");
         	$(".slide_preview_content_div").css("display","block");
         }, 3000);
         save_btn();
      }
    );
});





//------Slider Preview Stuff Ends ------------------------------------------------------------------------------------------------------------------------------------>



//------Left Hand Side Menu Details Load Dynamically Starts ---------------------------------------------------------------------------------------------------------->
$(document).on("click",".scene_tab",function() {
    $(".scene_tab_child").css("box-shadow","none");
    $(this).find(".scene_tab_child").css("box-shadow","inset 0px 0px 8px 3px rgb(91 154 223)");

// Left hand side stuff -----------------------------
    let scene_id = $(this).attr("data-sceneid");
    let v_m_id = $("#v_m_id").val();
    $.post('left_menu_detail.php', 
    {
        scene_id : scene_id,
        v_m_id : v_m_id
    }, function(result) {
        $("#scene_id").val(scene_id);
        $(".left_bar_menu_div").html(result);
    });

// Work Area Stuff ----------------------------------

    $.post('work_area_load.php',
    {
        scene_id : scene_id,
        v_m_id : v_m_id
    }, function(result) {
        $("#work_area_div_sub").html(result);
    });

// Bottom Animattion Panel Stuff --------------------

    $.post('animation_panel_load.php',
    {
        scene_id : scene_id,
        v_m_id : v_m_id
    }, function(result) {
        $(".animation_dragger_panel").html(result);
    });

// Scene Action Buttons ---------------------------

    $.post('scene_action_buttons.php',
    {
        scene_id : scene_id,
        v_m_id : v_m_id
    }, function(result){
        $(".scene_action_buttons").html(result);
    })

    setTimeout(function() {
        dragger();
        //   dragger_voice();
        dragger_bgm();
        dragger_bgm_track();
        animation_draggables();
        layers_sort();
    }, 3000);


// Scene Screenshot shit -------------------------

    // Not WOrking ..... evne if it works, its in canvas. Can't save it.. pointless
    // let div = document.getElementById('work_area_div_sub');
    // html2canvas(div).then(function(canvas) {
    //     document.getElementById('work_area_div_sub').appendChild(canvas);
    //     $(this).find(".scene_tab_child").html(canvas);
    //     console.log(canvas);
    // });


});

//------Left Hand Side Menu Details Load Dynamically Ends ---------------------------------------------------------------------------------------------------------->


//------ New Slide -------------------------------------------------------------------->
$(".new_scene_btn").on("click",function() {
    let v_m_id = $("#v_m_id").val(); 
    let u_id = $("#u_id").val(); 
    $.post('database_functions/add_scene.php',
    {
        v_m_id: v_m_id,
        u_id: u_id
    }, function(result){
        $(".all_scenes").append(result);
        save_btn();
    });
});

$(document).on("click",".remove_scene",function() {
    let scene_id = $(this).attr("data-sceneremoveiconid");
    let scene_tab = parseInt($('[data-sceneid="'+scene_id+'"]').attr("data-scenetab"));
        scene_tab = scene_tab - 1;
    $.post('database_functions/remove_scene.php',
    {
        scene_id : scene_id
    }, function(result){
        $('[data-sceneid="'+scene_id+'"]').remove();
        $(".scene_tab_"+scene_tab).click();
    });
});

$(document).on("mouseenter",".scene_tab", function(){
    let scene_id = $(this).attr("data-sceneid");
    // console.log(scene_id);
    $(".remove_scene").css("display","none");
    $(".scene_with_id_"+scene_id).css("display","block");
});

$(document).on("mouseleave",".scene_tab", function(){
    $(".remove_scene").css("display","none");
});

//-- New Slide Ends ------------------------------------------------------------------------------------------------------------------------------------------------->



//-- Create Templates Starts ---------------------------------------------------------------------------------------------------------------------------------------->
$(".create_template_btn").on("click",function() {
    let template_id = parseInt($(this).attr("data-templateid"));
    let scene_id = $("#scene_id").val();
    $(this).text("Creating Template...");
    $(this).css({"background":"#5b9dd3","color":"white"});

    if(template_id == 0) {
        //Insert as a Template
        $.post('database_functions/create_template.php',
        {
            scene_id : scene_id
        }, function(result){
            save_btn();
            $(".create_template_btn").attr("data-templateid", result);
            $(".create_template_btn").text("Template Created");
            $(".create_template_btn").css({"background":"#51a97e","color":"white"});
        });
    } else {
        //Update existing Template
        $.post('database_functions/update_template.php',
        {
            scene_id : scene_id
        }, function(result){

        });
    }

});

//-- Create Templates Ends ------------------------------------------------------------------------------------------------------------------------------------------->

//-- Load Template Starts -------------------------------------------------------------------------------------------------------------------------------------------->

// $(".load_template_btn").on("click",function() {
$(document).on("click",".load_template_btn",function() {
    let templatesceneid = $(this).attr("data-templatesceneid");
    let scene_id = $("#scene_id").val();
    let p_id = $("#v_m_id").val();
    let u_id = $("#u_id").val();
    
    $.post('database_functions/load_template.php',
        {
            scene_id : scene_id,
            templatesceneid : templatesceneid,
            p_id : p_id,
            u_id : u_id
        }, function(result){
            console.log(2);
            $(".scene_tab:last").click();
            save_btn();
        });
});










//-- Layer Sorting Starts -------------------------------------------------------------------------------------------------------------------------------------------->

function layers_sort() {
    $('#sortable').sortable({
        opacity: 0.325,
        tolerance: 'pointer',
        cursor: 'move',
        update: function(event, ui) {
        var post = $(this).sortable('toArray');
        var ids = $(this).sortable('toArray', {attribute: 'data-myattr'});
    
        let project_id = $("#v_m_id").val();
        let order_id = $('.layer_tab_order').length;
        $('.layer_tab_order').each(function(){
            $(this).attr('order-id', order_id);
            let layer_id =  $(this).attr('layer_id');
            $('[data-layercount="'+layer_id+'"]').css("z-index", order_id);
            order_id--;
        });
        // console.log(ids);
        
    
            $.post(
                'database_functions/sort_layers.php',
                {
                    sort_layer: post,
                    sort_layer_ids: ids,
                    project_id : project_id
                },
                function(result){
                save_btn();
            }
            );
    
        }
    });
};


//-- Layer Sorting Ends --------------------------------------------------------------------------------------------------------------------------------------------->



										 
//-- NOT USING ANYMORE ------------------------------------------------------------------------------------------------------------------------------------------ -->

$("#screens_slider_btn").on("click", function() {
	if($('#screens_slider_div').css('margin-left') == '-12.5%') {
		$("#screens_slider_div").animate({
				marginLeft: '0%'
			}, 500);
	} else { 
		$("#screens_slider_div").animate({
				marginLeft: '-12.5%'
			}, 500);
	}
});
	

    var underscore = _.noConflict();
    var app = new App({
        container: '#msc-app',
        baseUrl: '/demo/mysliderconstructor2/',
        controllerUrl: '/demo/mysliderconstructor2/actions/index.php',
        lang: window.msc_lang
    });
    app.start();
	