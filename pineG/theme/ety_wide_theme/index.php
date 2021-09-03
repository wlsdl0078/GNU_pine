<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<?php
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 배상책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/main_title_1.jpg')">
		<div class="carousel_pine d-md-block">
		  <h3 class="p_20 ks4">WELCOME TO PINEBEACH GOLF LINKS</h3>
		  <p class="ks4 f20">편안함 속에서 라운드의 여운은 더욱 길어집니다.<br> 최고수준의 클럽하우스와 골프호텔, 그 창밖으로 펼쳐지는 바다를 느껴보세요.
      </p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/main_title_2.jpg')">
		<div class="carousel_pine d-md-block">
		  <h3 class="p_20 ks4">WELCOME TO PINEBEACH GOLF LINKS</h3>
		  <p class="ks4 f20">
        편안함 속에서 라운드의 여운은 더욱 길어집니다.<br> 최고수준의 클럽하우스와 골프호텔, 그 창밖으로 펼쳐지는 바다를 느껴보세요.
      </p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/main_title_3.jpg')">
		<div class="carousel_pine d-md-block">
		  <h3 class="p_20 ks4">WELCOME TO PINEBEACH GOLF LINKS</h3>
		  <p class="ks4 f20">
        편안함 속에서 라운드의 여운은 더욱 길어집니다.<br> 최고수준의 클럽하우스와 골프호텔, 그 창밖으로 펼쳐지는 바다를 느껴보세요.
      </p>
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  <a class="coupon" href="http://wlsdl0078.cafe24.com/pineG/bbs/content.php?co_id=Pakage"><img class="cou_1" src="http://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/cou.png" alt="event"></a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->


<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-80"></div>
<div class="container">
	<div class="center-heading en1">
		<h2><strong class="Kaisei">Pine Promotion</strong> </h2>
		<span class="center-line"></span>
		<!-- <p class="sub-text margin-bottom-80 ks5 f19">
		2021 파인비치골프호텔 패키지를 월별로 만나보세요.
		</p> -->
	</div>
	<!-------------------------- 첫번째 줄 -------------------------->
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info-pink" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/9.jpg')">
						<i class="fas fa-chart-line d_n"></i>
            <div class="mtp-100 margin-bottom-20 d_n">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
          <p class="ks4 f15 h75"> 파인비치 9월 패키지</p>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info-pink" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/10.jpg')">
						<i class="fas fa-cloud-moon-rain d_n"></i>
            <div class="mtp-100 margin-bottom-20 d_n">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
          <p class="ks4 f15 h75">파인비치 10월 패키지 </p>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info-pink" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/11.jpg')">
						<i class="fas fa-cog d_n"></i>
            <div class="mtp-100 margin-bottom-20 d_n">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
          <p class="ks4 f15 h75">파인비치 11월 패키지</p>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info-pink" style="background-image: url('https://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/12.jpg')">
						<i class="fas fa-sliders-h d_n"></i>
            <div class="mtp-100 margin-bottom-20 d_n">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
          <p class="ks4 f15 h75"> 파인비치 12월 패키지 </p>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->
	</div><!-- /row -->


	<div class="hidden-xs hidden-sm margin-top-30"></div><!-- pc 만 적용 -->



	<!-------------------------- 두번째줄 -------------------------->
	<div class="row d_n">
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info">
						<i class="far fa-hospital"></i>
						<p class="ks4 f15 h75">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info">
						<i class="far fa-lightbulb"></i>
						<p class="ks4 f15 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">
					<div class="info">
						<i class="fab fa-php"></i>
						<p class="ks4 f15 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="box">
				<div class="icon">

					<div class="info-pink d_n">
						<i class="fab fa-rocketchat"></i>
						<p class="ks4 f15 h75">
							문의사항은 질문게시판에 글 남겨주세요.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
	</div><!-- /row -->
</div><!-- /container -->



<div class="margin-top-50"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div>
</div>



<!-------------------------- 테마소개 + 유튜브영상 -------------------------->
<!--
백그라운드 색상을 조정해주시면 됩니다.
-->

<div class="py-5 margin-top-80" style="background:#9cb775;">
	<div class="container margin-top-80">
	  <div class="row">
		<div class="col-lg-6">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/xo4GQ3spmzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">Pine Beach Golf Links</h2>
		  <p class="ks4"><strong>대자연의 작품에 명예로움만 더했습니다.</strong></p>
		  <p class="ks4">파인비치 골프 링크스는 지중해성 기후인 해남 고유의 기후로 인해 <br> 하루가 다르게 변하는 아름다운 경관 또한 귀하를 향합니다.</p>
		  <p class="ks4">파인비치 골프링크스에서 당신의 골프는 어느 덧 바다를 닮아갑니다.</p>
		  <p class="ks4"><strong><a class="you_a" href="http://wlsdl0078.cafe24.com/pineG/bbs/board.php?bo_table=ad1" target="_blank">예약안내 바로가기</a></strong></p>
		</div>
	  </div>
	</div>
</div>





<!-------------------------- USE A LIBRARY -------------------------->
<div class="py-5">
	<div class="container">
    <div class="center-heading">
			<h2 class="en1"><strong>코스안내</strong> </h2>
			<span class="center-line"></span>
      <div class="course_party">

            <div class="c-1 mtp-60">
              <ul>
                  <li class="golf_CO">
                    <h2>PINE COURSE</h2>
                    <ul class="c_tit mtp-100">
                      <li><h3 class="en1">PINE COURSE</h3></li>
                      <li><p class="ko_17">테마폴더내 라이선스 문서 확인</p></li>
                      <li><p class="ks5">소나무 숲과 거대한 호수를 끼고 있는 코스로 후반부 3개 홀이 바다와 접해있습니다.
                      차근차근 홀들을 공략하다보면 점점 바다 내음이 짙어지며 링크스 코스의 기대감을 불러일으키는 코스라 할 수 있습니다.</p></li>
                      <li>총 9가지 HOLE</li>
              				<li><strong><a href="http://wlsdl0078.cafe24.com/pineG/bbs/content.php?co_id=pine_course" target="_blank">자세히 보러가기</a></strong></li>
                    </ul>
                  </li>
             </ul>
             <div class="col-lg-6 text-right mtp-100">
               <img class="img-fluid rounded" src="http://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/pine.jpg" alt="이미지">
             </div>
           </div>

           <div class="c-1 mtp-60">
               <ul>
                   <li class="golf_CO">
                     <h2>BEACH COURSE</h2>
                     <ul class="d_n c_tit mtp-100">
                       <li><h3 class="en1">BEACH COURSE</h3></li>
                       <li><p class="ko_17">테마폴더내 라이선스 문서 확인</p></li>
                       <li><p class="ks5">소나무 숲과 거대한 호수를 끼고 있는 코스로 후반부 3개 홀이 바다와 접해있습니다.
                       차근차근 홀들을 공략하다보면 점점 바다 내음이 짙어지며 링크스 코스의 기대감을 불러일으키는 코스라 할 수 있습니다.</p></li>
                       <li>총 9가지 HOLE</li>
                       <li><strong><a href="http://wlsdl0078.cafe24.com/pineG/bbs/content.php?co_id=pine_course" target="_blank">자세히 보러가기</a></strong></li>
                     </ul>
                   </li>
              </ul>
              <div class="d_n col-lg-6 text-right mtp-100">
                <img class="img-fluid rounded" src="http://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/pine.jpg" alt="이미지">
              </div>
          </div>

          <div class="c-1 mtp-60">
              <ul>
                  <li class="golf_CO">
                    <h2>OSIANO COURSE</h2>
                    <ul class="d_n c_tit mtp-100">
                      <li><h3 class="en1">OSIANO COURSE</h3></li>
                      <li><p class="ko_17">테마폴더내 라이선스 문서 확인</p></li>
                      <li><p class="ks5">소나무 숲과 거대한 호수를 끼고 있는 코스로 후반부 3개 홀이 바다와 접해있습니다.
                      차근차근 홀들을 공략하다보면 점점 바다 내음이 짙어지며 링크스 코스의 기대감을 불러일으키는 코스라 할 수 있습니다.</p></li>
                      <li>총 9가지 HOLE</li>
                      <li><strong><a href="http://wlsdl0078.cafe24.com/pineG/bbs/content.php?co_id=pine_course" target="_blank">자세히 보러가기</a></strong></li>
                    </ul>
                  </li>
             </ul>
             <div class="d_n col-lg-6 text-right mtp-100">
               <img class="img-fluid rounded" src="http://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/pine.jpg" alt="이미지">
             </div>
         </div>
      </div>
		</div>


	  <!-- /.row -->
  </div>
</div>



<!-------------------------- USE A LIBRARY -------------------------->
<div class="py-5" style="background:#f2f2f2;">
	<div class="container">
		<div class="center-heading margin-top-40">
			<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
			<span class="center-line"></span>
		</div>
	  <div class="row margin-top-50 margin-bottom-50">
		<div class="col-lg-6 text-left">
			<img class="img-fluid rounded" src="http://wlsdl0078.cafe24.com/pineG/theme/ety_wide_theme/img/suit.jpg" alt="suit">
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">JavaScript Library</h2>
		  <p class="ko_17">테마폴더내 라이선스 문서 확인</p>
		  <ul class="en2">
		  	<li><strong>GNUboard5 (5.4.5.1)</strong></li>
			<li><strong>Bootstrap4</strong></li>
			<li>jQuery</li>
			<li>Font Awesome5</li>
			<li>Working contact form with validation</li>
			<li>Unstyled page elements for easy customization</li>
			<li>Parallax</li>
			<li>Owl</li>

		  </ul>
		  <p class="ks5">
		  현제 제작되는 모든 테마 및 템플릿은 글로벌하게 에티테마 에서 제작되고 있으며 무료 테마 및 템플릿의 경우에는 이미지가 포함 되어 있지 않습니다. 또한 에티테마로 오시면 추가적인 업데이트된 파일을 다운로드 하실 수 있습니다.</p>
		</div>

	  </div>
	  <!-- /.row -->
	</div>
</div>






<!-------------------------- 회사소개 및 안내 -------------------------->
<!-- <div class="container margin-top-80 margin-bottom-80">
	<div class="center-heading margin-top-40">
		<h2 class="en1">PRODUCT</h2>
		<span class="center-line"></span>
	</div>
	<!-- LATEST : pic_basic_company -->
	<!-- ?php echo latest('theme/pic_basic_company', 'gallery', 6, 24); ?>
  (윗줄 ?php 앞에 < 넣어야함)
</div>





<!-------------------------- parallax 박스 및 countdown -------------------------->
<!--

테마폴더/tail.php : 94번째줄에서 이미지를 교체해주세요.

-->
<!-- <div class="parallax-window" data-parallax="scroll">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center p-center para-text">
				<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
				<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button>
			</div>
		</div>
	</div>
</div> --> <!-- /parallax -->

<!-------------------------- GALLERY -------------------------->
<!--

테마폴더/tail.php : 99번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정
-->

<div class="container margin-top-50 margin-bottom-50">
	<h3 class="margin-bottom-50 text-left">GALLERY</h3>
  <?php echo latest('theme/pic_basic_owl', 'gallery', 12, 24); ?>
</div>




<!-------------------------- MAP -------------------------->

<div id="map" style="width:100%;height:500px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0cc0dac9b9e5937b66254fabf32d2e4e"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(34.69761240587384, 126.26163485157198), // 지도의 중심좌표
        level: 2 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커를 표시할 위치와 title 객체 배열입니다
var positions = [
    {
        title: '파인비치골프CC',
        latlng: new kakao.maps.LatLng(34.69665351065264, 126.26223481300099)
    },
    {
        title: '오시아노GC',
        latlng: new kakao.maps.LatLng(34.69736844256569, 126.26364054443123)
    },
    {
        title: '클럽하우스',
        latlng: new kakao.maps.LatLng(34.69685486146764, 126.26223099385102)
    },
    {
        title: '주차장',
        latlng: new kakao.maps.LatLng(34.69642802506473, 126.26372141093687)
    }
];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png";

for (var i = 0; i < positions.length; i ++) {

    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(35, 45);

    // 마커 이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지
    });
}
</script>



<?php
/*
	<!-------------------------- CALL ACTION -------------------------->
	<div class="callbox">
		<div class="container margin-top-20">
		<h3 class="margin-bottom-50 text-left en1">ETY DEMO</h3>
		  <div class="row">
			<div class="col-md-8">
			  <p class="ks4">
			  에티테마에 대한 궁금증이나 질문이 있으시면 에티테마의 질문게시판을 이용해주세요.<BR />
			  http://ety.kr/board/qa
			  </p>
			</div>
			<div class="col-md-4">
			  <a class="btn btn-lg btn-secondary btn-block en1" href="http://ety.kr/board/qa" target="_blank">GO!</a>
			</div>
		  </div>
		</div>
	</div>
	<!-- /.container -->
*/
?>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
