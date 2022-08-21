<!-- Popups ------------------------------------------------------------------------------------------------------------------------>





<!-- Audio Upload Modal --->

<div id="audio_upload_div" style="position: fixed; background: white; top: 20%; left: 25%; padding: 50px; border-radius: 10px;width: 50%;z-index:9;display:none;">
    <h4 style="font-weight: 700;text-align: center;width:95%;display:inline-block;">Choose Audio file</h4>
    <i class="far fa-window-close close_popups" style="display: inline-block;float: right;font-size: 24px;cursor:pointer;"></i>
    <div id="audio_upload_div_content" style="margin-top: 4%; text-align: center;">
        <input type="file" id="audio_upload_input_file" accept="audio/*" style="display:none;" />
        <div id="audio_upload_btn_custom" style="width: 45%; display: inline-block; text-align: center; padding: 14px 7px; border: 1px solid lightgray; border-radius: 10px;cursor:pointer;height: 170px;">
            <i class="fa fa-cloud-upload" id="audio_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;margin-top: 10%;"></i><br />
            Custom Upload
        </div>
    </div>
    <div class="audio_upload_submit_btn_div" style="text-align: center;margin-top: 4%;width: 100%;">
        <a id="audio_upload_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Upload</a>
    </div>
</div>

 

<!-- Video Upload Modal --->

<div id="video_upload_div" style="position: fixed; background: white; top: 20%; left: 25%; padding: 50px; border-radius: 10px;width: 50%;z-index:9;display:none;">
    <h4 style="font-weight: 700;text-align: center;width:95%;display:inline-block;">Choose your upload Type</h4>
    <i class="far fa-window-close close_popups" style="display: inline-block;float: right;font-size: 24px;cursor:pointer;"></i>
    <div id="video_upload_div_content" style="margin-top: 4%; text-align: center;">
        <div id="video_upload_btn_youtube" style="width: 45%; display: inline-block; text-align: center; border: 1px solid lightgray; border-radius: 10px; padding: 14px 7px;cursor:pointer;">
            <i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 30px;"></i><br />
            Youtube Video
        </div>
        <input type="file" name="" accept="video/*" id="video_upload_input_file" style="display:none;" />
        <div id="video_upload_btn_custom" style="width: 45%; display: inline-block; text-align: center; padding: 14px 7px; border: 1px solid lightgray; border-radius: 10px;cursor:pointer;">
            <i class="fa fa-cloud-upload" id="video_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;"></i><br />
            Custom Upload
        </div>
    </div>
    <div id="video_upload_div_content_preview" style="margin-top: 4%; text-align: center;display:none;">
        <video width="100%" height="280" id="video-preview-div" style="" controls>
          <source src="mov_bbb.mp4" id="video_here">
        </video>
    </div>
    
    <div id="video_upload_div_youtube" style="text-align: center;display:none;">
        <input type="link" id="video_upload_youtube_link" placeholder="YouTube link goes here" style="width: 90%; margin-top: 4%; border: 1px solid lightgray; border-radius: 5px; padding: 5px 10px;" /> 
        <br /><br />
        <a id="video_upload_div_youtube_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Submit</a>
    </div>
    
    <div class="video_upload_submit_btn_div" style="text-align: center;margin-top: 4%;width: 100%;">
        <a id="video_upload_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Upload</a>
    </div>
    
</div>

<!--<div id="video_cutter_youtube_div" style="position: fixed;width: 60%;top: 15%;left: 20%;background: white;border: 1px solid lightgray;border-radius: 10px;z-index:9;display:none;">-->
    
<!--</div>-->




<!-- Images Upload Modal --->

<div id="image_upload_div" style="position: fixed; background: white; top: 20%; left: 25%; padding: 50px; border-radius: 10px;width: 50%;z-index:9;display:none;">
    <h4 style="font-weight: 700;text-align: center;width:95%;display:inline-block;">Choose Image file</h4>
    <i class="far fa-window-close close_popups" style="display: inline-block;float: right;font-size: 24px;cursor:pointer;"></i>
    <div id="image_upload_div_content" style="margin-top: 4%; text-align: center;">
        <input type="file" id="image_upload_input_file" accept="image/*" style="display:none;" />
        <div id="image_upload_btn_custom" style="width: 45%; display: inline-block; text-align: center; padding: 14px 7px; border: 1px solid lightgray; border-radius: 10px;cursor:pointer;height: 170px;">
            <i class="fa fa-cloud-upload" id="image_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;margin-top: 10%;"></i><br />
            Custom Upload
        </div>
    </div>
    
    <div id="image_upload_div_content_preview" style="margin-top: 4%; text-align: center;display:none;">
        <img src="" id="image_here" style="width: 50%;height: 200px;" />
    </div>
    
    <div class="image_upload_submit_btn_div" style="text-align: center;margin-top: 4%;width: 100%;">
        <a id="image_upload_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Upload</a>
    </div>
</div>



<!-- Backgrounds Upload Modal --->

<div id="background_upload_div" style="position: fixed; background: white; top: 20%; left: 25%; padding: 50px; border-radius: 10px;width: 50%;z-index:9;display:none;">
    <h4 style="font-weight: 700;text-align: center;width:95%;display:inline-block;">Choose Background file</h4>
    <i class="far fa-window-close close_popups" style="display: inline-block;float: right;font-size: 24px;cursor:pointer;"></i>
    <div id="background_upload_div_content" style="margin-top: 4%; text-align: center;">
        <input type="file" id="background_upload_input_file" accept="image/*" style="display:none;" />
        <div id="background_upload_btn_custom" style="width: 45%; display: inline-block; text-align: center; padding: 14px 7px; border: 1px solid lightgray; border-radius: 10px;cursor:pointer;height: 170px;">
            <i class="fa fa-cloud-upload" id="background_upload_btn_youtube_file_icon" aria-hidden="true" style="font-size: 30px;margin-top: 10%;"></i><br />
            Custom Upload
        </div>
    </div>
    
    <div id="background_upload_div_content_preview" style="margin-top: 4%; text-align: center;display:none;">
        <img src="" id="background_here" style="width: 50%;height: 200px;" />
    </div>
    
    <div class="background_upload_submit_btn_div" style="text-align: center;margin-top: 4%;width: 100%;">
        <a id="background_upload_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Upload</a>
    </div>
</div>



<!-- Image Crop Modal -->

<div id="image_crop_div" style="position: fixed; background: white; top: 15%; left: 25%; padding: 50px; border-radius: 10px;width: 50%;z-index:9;display:none;">
    <h4 style="font-weight: 700;text-align: center;width:95%;display:inline-block;">Crop image</h4>
    <i class="far fa-window-close close_popups" style="display: inline-block;float: right;font-size: 24px;cursor:pointer;"></i>
    <div id="background_upload_div_content" style="margin-top: 4%; text-align: center;">
        <input type="hidden" form="feed-post" name="image_cropped" id="image_cropped" />
    </div>
    
    <div id="image_crop_div_content_preview" style="margin-top: 4%;height:300px; text-align: center;">
        <img id="image_cropped_preview" style="width: 60%;" />
    </div>

    <div class="salvar" style="text-align: center;margin-top: 4%;width: 100%;">
        <a id="" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Crop Image</a>
    </div>
    
    <div class="image_crop_submit_btn_div" style="text-align: center;margin-top: 4%;width: 100%;display:none;">
        <a id="image_crop_submit_btn" style="background: green; color: white; padding: 8px 50px; border-radius: 5px; font-weight: 700;cursor:pointer;">Upload</a>
    </div>
    
</div>



<!----- Slide Preview Modal Starts ------------------------>

<div class="slide_preview_div" style="display:none;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 1920px;height: 1080px;position: absolute;zoom: 0.4;z-index:9;">
    <div class="slide_preview_loading_div" style="height: 100%;width: 100%;background: linear-gradient(to left, #4caf50 0%, #5c9ae4 100%);">
        <svg class="circular-loader"viewBox="25 25 50 50" style="width: 300px;height: 300px;top: 35%;left: 43%;position: absolute;" >
            <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#ffffff" stroke-width="3" />
        </svg>
    </div>
    <div class="slide_preview_overlay" style="display:none;cursor:pointer;height: 100%;width: 100%;background: #0000007a;position:absolute;z-index:9;">
        <!--<i class="fa fa-repeat slide_preview_repeat" style="display:none;cursor:pointer;font-size: 200px;color: #ffffff;position: absolute;top: 50%;left: 35%;transform: translate(-50%, -50%);" aria-hidden="true"></i>-->
        <i class="fas fa-play-circle slide_preview_play" style="cursor:pointer;font-size: 200px;color: #ffffff;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" aria-hidden="true"></i>
    </div>
    <div class="slide_preview_overlay_another" style="display: none;cursor: pointer;height: 100%;width: 100%;background: transparent;position: absolute;z-index: 9999999;box-shadow: 0px 0px 20px 800px rgb(0 0 0);">
        
    </div>
    <div class="slide_preview_content_div" style="position:absolute;display:none;height: 100%;width: 100%;background: <?= $scene_background; ?>;">
        
    </div>
</div>

<!----- Slide Preview Modal Ends ------------------------>






<!----- Audio Trimming Modal Starts ---------------------->

<div class="audio_trim_modal_1"
     style="
        display:none;
        position: fixed;
        top: 2%;
        left: 45%;
        transform: translate(-50%, 50%);
        width: 500px;
        height: 250px;
        background: white;
        box-shadow: 0px 0px 8px 4px rgb(0 0 0 / 20%);
        border-radius: 4px;
        z-index:99;
        background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%);">
    <div class="button-layer-remove audio_trimming_modal_close_btn bgm_layer" style="float: right; padding: 2%;">
        <i class="fa fa-times-circle" aria-hidden="true" style="font-size: 24px; color: #efefef; cursor: pointer;"></i>
    </div>

    <div>
        <p style="text-align: center; color: white; font-size: 16px; font-weight: 600; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">BGM Audio</p>
        <div style="width: 80%; margin: auto; border-radius: 4px; background: #2b4354;">
            <img src="images-main/audio_track.png" alt="" style="display: inline-block; width: 200px;" /><img src="images-main/audio_track.png" alt="" style="width: 200px; display: inline-block;" />
        </div>

        <p style="text-align: center; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px;">Length : <span class="bgm_length">00:24:20</span></p>

        <p style="text-align: center; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px;">
            Please note that the Audio doesn't cope up with the current scene length. Do you want to Crop the Audio or Apply the audio for whole video?
        </p>
    </div>
    <div style="position: absolute; width: 100%; bottom: 2%; margin: auto; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px; text-align: center;">
        <a class="bgm_crop_option" style="cursor:pointer;width: 40%; display: inline-block; padding: 3%; text-align: center; background: #ec9100; border-radius: 4px;">Crop Audio</a>
        <a class="bgm_apply_for_whole_video" style="cursor:pointer;width: 40%; display: inline-block; padding: 3%; text-align: center; background: #000000; border-radius: 4px;">Apply for Whole Video</a>
    </div>
</div>



<div class="audio_trim_modal_2"
     style="
        position: fixed;
        top: 0%;
        display:none;
        left: 52%;
        transform: translate(-50%, 50%);
        width: 1000px;
        height: 250px;
        background: white;
        box-shadow: 0px 0px 8px 4px rgb(0 0 0 / 20%);
        border-radius: 4px;
        z-index:99;
        background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%);">
    <div class="button-layer-remove audio_trimming_modal_close_btn bgm_layer" style="float: right; padding: 2%;">
        <i class="fa fa-times-circle" aria-hidden="true" style="font-size: 24px; color: #efefef; cursor: pointer;"></i>
    </div>

    <div>
        <p style="text-align: center; color: white; font-size: 16px; font-weight: 600; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">Crop BGM Audio</p>
        
        <div class="bgm_audio_track" style="width: 800px; margin: auto; border-radius: 4px; background: #2b4354; height: 70px; position: relative;">
          
            <div style="position: absolute;left: -10%;padding-top: 5px;">
                <i class="fas fa-play-circle bgm_audio_play" onClick="bgm_trim_audio_play()" style="cursor:pointer;font-size: 64px;color: #ffffff;" aria-hidden="true"></i>
                <audio id="bgm_trim_audio" src="" style="display:none"; ></audio>
                <i class="fa fa-pause bgm_audio_pause" onClick="bgm_trim_audio_play()" style="display:none;cursor:pointer;font-size: 64px;color: #ffffff;" aria-hidden="true"></i>
            </div>
          
            <div class="bgm_track_work_area" style="width: 100%; margin: auto; border-radius: 4px; background: transparent; height: 70px; position: absolute;">
                    
                <div class="draggable_bgm_track" style="width: 98%;height: 68px;position: absolute;background: rgba(82, 167, 135, 0.28);border-width: 1px 9px;border-style: solid;border-color: white rgb(247, 247, 247);border-image: initial;border-radius: 3px;right: 0px;top: 0px;left: 0;">
                        
                    <div class="bgm_trim_dragger_left" style="font-family: monospace; color: black; background: white; border-radius: 4px; padding: 2px 5px; width: fit-content; margin-top: -20px; margin-left: -26px;">00:00</div>

                    <div class="bgm_track_tracker" style="font-family: monospace; color: black; background: transparent; border-radius: 2px; padding: 6px 3px; width: fit-content; height: 84%; margin-left: 0px;">
                        <div style="border-radius: 2px; background: white; position: absolute; padding: 6px 6px; top: -1px;"></div>
                        <div style="border-left: 6px solid transparent; border-right: 6px solid transparent; border-bottom: 10px solid #ffffff; transform: rotateX(180deg); margin-left: 0px; margin-top: 4px;"></div>
                        <p style="height: 100%; width: 1.5px; background: red; margin-top: -12px; margin-left: 5.2px; border-radius: 5px;"></p>
                    </div>
                        
                    <div class="bgm_trim_dragger_right" style="font-family: monospace; color: black; background: white; border-radius: 4px; padding: 2px 5px; width: fit-content; margin-top: -20px; margin-right: -26px; float: right;">00:00</div>

                </div>
            </div>
            
            <img src="images-main/audio_track.png" alt="" style="display: inline-block; width: 200px; height: 100%;" />
            <img src="images-main/audio_track.png" alt="" style="width: 200px; display: inline-block; height: 100%;" />
            <img src="images-main/audio_track.png" alt="" style="width: 200px; display: inline-block; height: 100%;" /><img src="images-main/audio_track.png" alt="" style="width: 190px; display: inline-block; height: 100%;" />
            
            <div style="margin-top: -5px;">
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
            </div>

            
        </div>

    </div>
    <div style="position: absolute; width: 100%; bottom: 8%; margin: auto; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px; text-align: center;">
        <a class="button-layer-remove audio_trimming_modal_close_btn bgm_layer" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: #ec9100; border-radius: 4px;">Cancel</a>
        <a class="bgm_audio_crop_btn" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: #000000; border-radius: 4px;">Crop Audio</a>
    </div>
</div>


<!----- Audio Trimming Modal Ends ---------------------->


<!----- Video Trimming Modal Starts ---------------------->


<div class="video_trim_modal_2"
     style="
        position: fixed;
        top: -20%;
        display:none;
        left: 52%;
        transform: translate(-50%, 50%);
        width: 1000px;
        height: 450px;
        background: white;
        box-shadow: 0px 0px 8px 4px rgb(0 0 0 / 20%);
        border-radius: 4px;
        z-index:99;
        background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%);">
    <div class="button-layer-remove video_trimming_modal_close_btn" style="float: right; padding: 2%;">
        <i class="fa fa-times-circle" aria-hidden="true" style="font-size: 24px; color: #efefef; cursor: pointer;"></i>
    </div>

    <div>
        <p style="text-align: center; color: white; font-size: 16px; font-weight: 600; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">Crop Video</p>
        
        <div class="video_track" style="width: 800px; margin: auto; border-radius: 4px; background: #2b4354; height: 36px; position: relative;">
          
            <div style="position: absolute;left: -10%;padding-top: 5px;">
                <i class="fas fa-play-circle video_play" onClick="trim_video_play()" style="cursor:pointer;font-size: 64px;color: #ffffff;" aria-hidden="true"></i>
                <!-- <video id="trim_video" src="" style="display:none"; ></video> -->
                <i class="fa fa-pause video_pause" onClick="trim_video_play()" style="display:none;cursor:pointer;font-size: 64px;color: #ffffff;" aria-hidden="true"></i>
            </div>
          
            <div class="video_track_work_area" style="width: 100%; margin: auto; border-radius: 4px; background: transparent; height: 46px; position: relative;">
                    
                <div class="draggable_video_track" style="width: 98%;height: 36px;position: absolute;background: rgba(82, 167, 135, 0.28);border-width: 1px 9px;border-style: solid;border-color: white rgb(247, 247, 247);border-image: initial;border-radius: 3px;right: 0px;top: 0px;left: 0;">
                        
                    <div class="video_trim_dragger_left" style="font-family: monospace; color: black; background: white; border-radius: 4px; padding: 2px 5px; width: fit-content; margin-top: -20px; margin-left: -26px;">00:00</div>

                    <div class="video_track_tracker" style="font-family: monospace; color: black; background: transparent; border-radius: 2px; padding: 6px 3px; width: fit-content; height: 84%; margin-left: 0px;">
                        <div style="border-radius: 2px; background: white; position: absolute; padding: 6px 6px; top: -1px;"></div>
                        <div style="border-left: 6px solid transparent; border-right: 6px solid transparent; border-bottom: 10px solid #ffffff; transform: rotateX(180deg); margin-left: 0px; margin-top: 4px;"></div>
                        <p style="height: 100%; width: 1.5px; background: red; margin-top: -12px; margin-left: 5.2px; border-radius: 5px;"></p>
                    </div>
                        
                    <div class="video_trim_dragger_right" style="font-family: monospace; color: black; background: white; border-radius: 4px; padding: 2px 5px; width: fit-content; margin-top: -20px; margin-right: -26px; float: right;">00:00</div>

                </div>
            </div>
            
            <!-- <img src="images-main/audio_track.png" alt="" style="display: inline-block; width: 200px; height: 100%;" />
            <img src="images-main/audio_track.png" alt="" style="width: 200px; display: inline-block; height: 100%;" />
            <img src="images-main/audio_track.png" alt="" style="width: 200px; display: inline-block; height: 100%;" /> -->
            <!-- <img src="images-main/audio_track.png" alt="" style="width: 190px; display: inline-block; height: 100%;" /> -->
            
            <div style="margin-top: -5px;">
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 15px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
                <span style="width: 10px; font-size: 8px; font-family: monospace; display: inline-block; text-align: center; vertical-align: top;">|</span>
            </div>


            <video id="trim_video" style="width: 50%;object-fit: fill;height: 200px;margin-left: 20%;" oncontextmenu="false" disablepictureinpicture="true" controlslist="nodownload" disableplaybackspeed="true">
                <source src="images-main/videos/_I could take the Phoenix Club and turn it into my ping-pong room_ – The Social Network.mp4" type="video/mp4">
            </video>

            
        </div>
        
    </div>
    <div style="position: absolute; width: 100%; bottom: 8%; margin: auto; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px; text-align: center;">
        <a class="video_trimming_modal_close_btn" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: #ec9100; border-radius: 4px;">Cancel</a>
        <a class="video_crop_btn" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: #000000; border-radius: 4px;">Crop Video</a>
    </div>
</div>


<!----- Video Trimming Modal Ends ---------------------->



<!-- Image Replace Popup Starts ---------------------------------------------------------->

<div class="image_replace_div"
     style="
        position: fixed;
        top: -40%;
        display:none;
        left: 52%;
        transform: translate(-50%, 50%);
        width: 1000px;
        height: 550px;
        background: white;
        box-shadow: 0px 0px 8px 4px rgb(0 0 0 / 20%);
        border-radius: 4px;
        z-index:99;
        background: linear-gradient(to top, #4caf50 0%, #5c9ae4 100%);">
    <span class="layer_id_of_selected" style="display:none;"></span>
    <span class="new_image_layer_id" style="display:none;"></span>
    <span class="new_image_layer_src" style="display:none;"></span>
    <div class="image_replace_div_sub" style="padding:2%;overflow-y: scroll;height:80%;"></div>

    <div style="position: absolute; width: 100%; bottom: 2%; margin: auto; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: white; font-size: 14px; text-align: center;">
        <a class="replace_image_modal_close_btn" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: #ec9100; border-radius: 4px;">Cancel</a>
        <a class="replace_image_btn_pre" style="cursor:pointer;width: 40%; display: inline-block; padding: 1%; text-align: center; background: gray; border-radius: 4px;">Replace</a>
    </div>

</div>


<!-- Image Replace Popup Ends ---------------------------------------------------------->





<!-- Popups Ends --->