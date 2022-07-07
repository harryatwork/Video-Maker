<div class="some" data-speed="2500">some</div>

<div class="enci" style="width:100px;height:100px;position:absolute;background:yellow;"></div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(".some").on("click",function() {
    let speed = parseInt($('.some').attr('data-speed'));
    $('.enci').css("top","-100%");
    $('.enci').css("display","block");
    $('.enci').animate({ queue: false, top: '10%', }, speed );
})
</script>