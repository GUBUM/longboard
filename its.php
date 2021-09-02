<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>itslongboard</title>
  <meta name="description" content="">
  <meta name="author" content="Administrator">

  <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=2.0;">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" href="/longboard/css/reset.css" />
  <link rel="stylesheet" href="/longboard/css/style.css" />
  <script src="/longboard/js/jquery-1.7.1.min.js"></script>
  <script src="/longboard/js/jquery.easing.1.3.js"></script>  
  <script src="/longboard/js/its.js"></script>
  <script src="/longboard/js/quicknavi.js"></script>
  <script src="/longboard/js/its_m.js"></script>
  <script src="/longboard/js/popup.js"></script>
</head>
<body>
	<div id="quick_navi">
		<ul>
			<li><span class="navi_txt">HOME</span><span class="cir"></span></li>
			<li><span class="navi_txt">ATTRACTION</span><span class="cir"></span></li>
			<li><span class="navi_txt">ADVANTAGE</span><span class="cir"></span></li>
			<li><span class="navi_txt">TYPE</span><span class="cir"></span></li>
			<li><span class="navi_txt">INTERVIEW</span><span class="cir"></span></li>
		</ul>
	</div>
	<? include_once $_SERVER["DOCUMENT_ROOT"]."/longboard/inc/popup.html"?>
	<? include_once $_SERVER["DOCUMENT_ROOT"]."/longboard/inc/header.html"?>
	<!--컨텐츠-->
	<div id="home">
		<h2 class="main_title">It's 롱보드</h2>
		<section>		
		<h2>롱보드 정의</h2>
			<ul id="home_list">
				<li class="title">
					LONG + BOARD = LONGBOARD
				</li>
				<li class="subtitle">
					롱보드(longboard)는 스케이트보드의 일종으로<br> 
					길이가 35인치가 넘는 긴 보드이다.
				</li>
				<li class="txt">
					국내에서는 스케이트보드보다 덜 알려져 있지만 롱보드의 역사는 스케이트보드보다 길다. 서핑을 즐기던 서퍼들이 서핑을 하러 바다로 향하는 동안에도 서핑을 즐기고 싶어 이동수단으로 고안한 것이 롱보드다. 초창기의 롱보드는 서핑보드 만큼 길었다. 점점 길이가 짧아지고 좀더 크루징하기 쉽게 만든 것이 크루저보드다. 지금의 트릭 중심의 테크닉용 스케이트보드는 할아버지인 서핑과 아버지인 롱보드, 삼촌인 크루저보드가 있었기에 탄생할 수 있었다.
				</li>
			</ul>
			<span>
				<img src="/longboard/img/home01.jpg" alt="롱보드와 스케이트보드" />
			</span>		
		</section>
		
	</div>
	<div id="att_wrap">		
		<div id="att">
			<h2>롱보드의 매력</h2>
			<a href="#;"><p class="title">롱/보/드의 매력은?</p></a>
			<div class="con_att">						
				<div>
					<p class="title01">full of <span class="title02">ENERGY</span></p>
					<p class="subtitle">에너지를 충전하세요.</p>
					<p class="txt">
						집 회사 학교를 오가는 것이 전부일 때,<br>
						일상에 지루함을 느낄 때,<br>
						활력을 찾고 싶을 때,<br>
						롱보드에 빠져보세요.
					</p>
				</div>		
				<div>
					<img src="/longboard/img/att_img01.gif" alt=""/>
				</div>
			</div>
			<div class="con_att">
				<div>
					<img src="/longboard/img/att_img02.gif" alt=""/>
				</div>
				<div class="con_right">
					<p class="title01"><span class="title02">EASY</span> to learn</p>
					<p class="subtitle">남녀노소 쉽게 배울 수 있어요.</p>
					<p class="txt">
						롱보드는 길이가 길고 폭이 넓기 때문에<br>
						초보자들도 쉽게 배울 수 있습니다.<br>
						주행감 또한 좋아서 다양한 장소에서<br>
						미끄러지지 않고 잘 탈수 있습니다.
					</p>
				</div>				
			</div>
			<div class="con_att">
				<div>
					<p class="title01">feel <span class="title02">SOFT, MILD</span></p>
					<p class="subtitle">아름다운 선들을 느껴보세요</p>
					<p class="txt">
						스케이트 보드는 거칠고 위험한 스포츠라고 생각하나요?<br>
						롱보드는 부드럽고 유연한 동작들로<br>
						아주 우아하고 엣지있는 스포츠 입니다.<br>
					</p>
				</div>		
				<div>
					<img src="/longboard/img/att_img03.gif" alt=""/>
				</div>
			</div>
			<div class="con_att">
				<div>				
					<img src="/longboard/img/att_img04.gif" alt=""/>
				</div>
				<div class="con_right">
					<p class="title01">enjoy <span class="title02">CRUISING</span></p>
					<p class="subtitle">함께 즐겨보세요</p>
					<p class="txt">
						어디든지 보드와 함께해보세요.<br>
						보드를 들고 다니는 것만으로도 새로운 만남이 있을꺼에요.<br>
						그리고,<br>
						크루징을 통해 이동하면서<br> 
						더 많은 것을 보고 느낄 수 있는 시간이 될 거에요.
					</p>
				</div>				
			</div>
		</div>
	</div>	
	<div id="adv_wrap">
		<h2>롱보드와스케이트보드의차이</h2>
		<div id="adv_right">
		</div>
		<a href="#;">
		<div id="adv">			
			<img class="img_swd" src="/longboard/img/adv_img.jpg" alt="'롱보드'길이 35인치 이상으로 길고 무겁다.' '고무로 된 큰 휠을 사용한다.' '안정적이고 균형잡기 쉽다.' '스탭, 트릭, 라이딩용에 적합하다.' '스케이트보드''길이 26-32인치로 짧고 다양하며 가볍다.''플라스틱 휠을 사용한다.''작고 가벼워 휴대하기 편하다.''장애물을 넘거나 점프하는 화려한 묘기에 적합하다.'"/>
			<img class="img_m" src="/longboard/img/adv_m.gif" alt="'롱보드' 길이 35인치 이상 길고 무거움 고무로 된 큰 휠 안정적 균형잡기 쉬움 스탭, 트릭, 라이딩용 '스케이트보드'길이 26-32인치 짧고 다양하며 가벼움 플라스틱 휠 휴대하기 편함 화려한 묘기" />
		</div>
		</a>
	</div>
	<div id="type">
		<h2>롱보드의 종류</h2>
		<a href="#;"><p class="title">롱/보/드의 종류</p></a>	
			<ul id="type_list">				
				<li>    
					<span>
						<img src="/longboard/img/type01.gif" alt="댄싱" />
					</span> 
					<p class="subtitle">댄싱</p>
					<p class="txt">주행하는 보드 위에서 발을 엇갈리면서 스텝을 밟고 돌기도 하는 마치 보드 위에서 춤을 추는 것처럼 보이는 기술입니다.</p>
				</li>				
				<li>
					<span>
						<img src="/longboard/img/type02.gif" alt="프리스타일" />
					</span>
					<p class="subtitle">프리스타일</p>
					<p class="txt">손이나 발을 이용하는 기술입니다.롱보드 트릭의 특징은 발기술 뿐만아니라 보드가 길기때문에 손으로 잡고 돌리거나 다양한 퍼포먼스를 할 수 있습니다.</p>
				</li>
				<li>
					<span>
						<img src="/longboard/img/type03.gif" alt="다운힐" />
					</span>
					<p class="subtitle">다운힐</p>
					<p class="txt">경사에서 균형을 잡으며 빠르게 내려가는 것을 말합니다. 고속으로 내려가기 때문에 풀페이스 헬멧 및 보호장비는 필수이며 수트를 착용하기도 합니다.</p>
				</li>
				<li>
					<span>
						<img src="/longboard/img/type04.gif" alt="프리라이딩" />
					</span>
					<p class="subtitle">프리라이딩</p>
					<p class="txt">경사에서 손이 바닥에 닿지 않고 다리만으로 슬라이드 기술을 하는 것입니다.</p>
				</li>
			</ul>
	</div>
	<div id="inter_wrap">
		<div id="inter">
			<h2>롱보더 고효주 인터뷰</h2>					
			<div id="inter_txt">
				<a href="#;"><p class="title">"취미가 인생을 바꾼다" 롱보더 고효주</p></a>
				<p class="subtitle">[엠빅인터뷰]롱보더 고효주 인터뷰</p>
				<p class="txt">
					최근 여성 롱보드(기다란 스케이트 보드)보더 고효주씨 영상이 화제가 되고 있습니다.
					달리는 롱보드 위에서 발랄한 음악에 맞춰 사뿐사뿐 움직이는 고씨의 몸짓을 보고 네티즌들은 "나비를 보는 거 같다"며 열광하고 있습니다.					
					직장인인 그녀는 우연히 외국보드 라이더의 영상을 보고 취미생활로 롱보드를 시작했다고 합니다.<br><br>					
					그런데  그 취미가 많은 걸 바꿨습니다. 내성적인 성격도 달라지고 회사 생활도 더 기분좋게 하게되고, 무엇보다, SNS 스타가 됐으니까요.					
					취미 하나가 인생을 바꿀 수도 있다고 말하는 고효주씨를,[엠빅인터뷰]가 만나봤습니다.
				</p>
				<ul id="icon_list">
					<li>
						<a href="https://www.instagram.com/hyo_joo/">
						<img src="/longboard/img/icon01.png" alt="고효주인스타그램바로가기" />
						<img src="/longboard/img/icon_over01.png" alt="고효주인스타그램바로가기" />
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/KoHyojoo/">
						<img src="/longboard/img/icon02.png" alt="고효주페이스북바로가기" />
						<img src="/longboard/img/icon_over02.png" alt="고효주페이스북바로가기" />
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UC5FOkD_OiUjgCOawXaK0wCg">
						<img src="/longboard/img/icon03.png" alt="고효주유튜브바로가기" />
						<img src="/longboard/img/icon_over03.png" alt="고효주유튜브바로가기" />
						</a>
					</li>
				</ul>
			</div>
			<section id="inter_mo">
				<h2>고효주 인터뷰 영상</h2>
				<div>
					<embed id="inter_movie"  width="640" height="360"src="https://kakaotv.daum.net/embed/player/cliplink/300092029" frameborder="0" allowfullscreen scrolling="no"></embed>
				</div>	
				<p>출처:MBC시사교양 엠빅인터뷰| “취미가인생을바꾼다” 롱보더 고효주 2016</p>	
			</section>
			
		</div>
	</div>
	<? include_once $_SERVER["DOCUMENT_ROOT"]."/longboard/inc/footer.html"?>
</body>
</html>
