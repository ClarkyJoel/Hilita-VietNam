<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Home - Vòng bi</title>
		<link type="text/css" href="css/style.css" rel="stylesheet" />
		<link type="text/css" href="css/bjqs.css" rel="stylesheet" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="js/bjqs-1.3.min.js"></script>
		
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Home" /></a></div>
				<div id="search"><input type="text" maxlength="255" placeholder="Search" /></div>
				<div id="navMenu">
					<ul>
						<li>
							<a href="index.php">Trang Chủ</a>
						</li>
						<li>
							<a href="gioithieu.php">Giới Thiệu</a>
						</li>
						<li>
							<a href="sanphamthuonghieu.php">Sản Phẩm Thương Hiệu</a>
						</li>
						<li>
							<a href="hinhanhkhohang.php">Hình Ảnh Kho Hàng</a>
						</li>
						<li>
							<a href="danhmuchanghoa.php">Danh Mục Hàng Hóa</a>
						</li>
						<li>
							<a href="lienhe.php">Liên Hệ</a>
						</li>
					</ul>
				</div>
			</div><!--.HEADER-->
			<div class="clear"></div>
			<div id="content">
				<div id="banner-fade">
					<ul class="bjqs">
						<li><div class="slideImg1"><img src="images/slide-img-1.png" /></div></li>
						<li><div class="slideImg2"><img src="images/slide-img-2.png" /></div></li>
						<li><div class="slideImg3"><img src="images/slide-img-3.png" /></div></li>
						<li><div class="slideImg4"><img src="images/slide-img-4.png" /></div></li>
						
					</ul>
					
						
				</div>
				<script class="secret-source">
					jQuery(document).ready(function($) {

					  $('#banner-fade').bjqs({
						height      : 300,
						width       : 960,
						responsive  : true
					  });

					});
				</script>
				<div class="clear"></div>
				<div class="container">
					<div class="left-col">
						<div class="danhmucsp">
							<ul>
								<h3 class="title">Danh Mục Sản Phẩm</h3>
								<li><a href="#SKF">Vòng bi SKF</a></li>
								<li><a href="#INA">Vòng bi INA</a></li>
								<li><a href="#FAG">Vòng bi FAG</a></li>
								<li><a href="#TIMKEN">Vòng bi TIMKEN</a></li>
								<li><a href="#NSK">Vòng bi NSK</a></li>
								<li><a href="#KOYO">Vòng bi KOYO</a></li>
								<li><a href="#IKO">Vòng bi IKO</a></li>
								<li><a href="#NACHI">Vòng bi NACHI</a></li>
								<li><a href="#NTN">Vòng bi NTN</a></li>
							</ul>
						</div>
					</div>
					
					<div class="main-col">
						<div class="lienhe boxstyle">
							<h3 class="title">Liên Hệ</h3>
							<div class="paragraph">
								<strong class="red">Hãy liên hệ với chúng tôi:</strong>
								<p>
									<br>Đc: Số 69 Trần Nguyên hãn.
									<br>Tel : 0986 423 522
									<br>Fax : 72453456
									<br>Email : vongbivn@info
									Website : www.vongbivn.vn
								</p>
							</div>
						</div>
					</div>
					<div class="right-col">
						<div class="support">
							<ul>
								<h3 class="title">Hỗ Trợ Trực Tuyến</h3>
								<li><a href="#Support1"><img src="images/hotro1.png" /></a></li>
								<li><a href="#Support2"><img src="images/hotro2.png" /></a></li>
								<li class="phone"><a href="#Support3"><strong class="red">0982 886 001</strong></a></li>
							</ul>
						</div>
						<div class="doitac">
							<ul>
								<h3 class="title">Đối Tác</h3>
								<li><img src="images/skf-logo.png" /></li>
								<li><img src="images/nsk-logo.png" /></li>
								<li><img src="images/timken-logo.png" /></li>
								<li><img src="images/fag-logo.png" /></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!--.CONTENT-->
			<div class="clear"></div>
			<div id="footer">
				<div class="tren">
					<ul class="tinMoiNhat">
						<h3>Tin mới nhất</h3>
						<li><a href="#">Tin công ty</a></li>
						<li><a href="#">Tin nội bộ</a></li>
						<li><a href="#">Tin sản phẩm</a></li>
						<li><a href="#">Tin chung</a></li>
					</ul>
					<ul class="truSo">
						<h3>Trụ sở</h3>
						<li><span>Đc: Số 69 Trần Nguyên hãn.</span></li>
						<li><span>Tel : 0986 423 522</span></li>
						<li><span>Fax : 72453456</span></li>
						<li><span>Email : vongbivn@info</span></li>
						<li><span>Website : www.vongbivn.vn</span></li>
					</ul>
				</div>
				<div class="duoi">
					<nav>
						<a href="#">Home</a> |
						<a href="#">About</a> |
						<a href="#">Folio</a> |
						<a href="#">Archive</a> |
						<a href="#">Contacts</a>
					</nav>
					<span class="copyright">&reg; Copyright 2012</span>
				</div>
			</div><!--.FOOTER-->
		</div><!--.WRAPPER-->
	</body>
</html>