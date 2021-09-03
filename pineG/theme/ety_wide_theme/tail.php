<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>





	<?php include_once(G5_THEME_PATH.'/footer.php')?>


    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var jQuery = $.noConflict(true);
	</script>
    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>
	<script>
		// para
		jQuery('.parallax-window').parallax({imageSrc: 'https://via.placeholder.com/1920x400'});
	</script>
	<script>
		$(document).ready(function () {
			//owl
			jQuery(".owl-carousel").owlCarousel({
				autoplay:true,
				autoplayTimeout:3000,// 1000 -> 1초
				autoplayHoverPause:true,
				loop:true,
				margin:10,//이미지 사이의 간격
				nav:false,
				responsive:{
					0:{
						items:2 // 모바일
					},
					600:{
						items:3 // 브라우저 600px 이하
					},
					1000:{
						items:6 // 브라우저 100px 이하
					}
				}
			});

			// countdown
			'use strict';
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319
			});
		});
	</script>

<script>

</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
