<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Công ty Hilita Việt Nam</title>
		<link type="text/css" href="css/style.css" rel="stylesheet" />
		<link type="text/css" href="css/bjqs.css" rel="stylesheet" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="js/bjqs-1.3.min.js"></script>
		
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Home" /></a></div>
				
				<div id="navMenu">
					<?php include "include/nav-menu.php"; ?>
				</div>
			</div><!--.HEADER-->
			<div class="clear"></div>
			<div id="content">
				<div id="banner-fade">					
					<?php include "include/slide-html.php"; ?>
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
							<?php include "include/sanpham-widget.php"; ?>
						</div>
					</div>
					
					<div class="main-col">
						<div class="aboutUs boxstyle">
							<h3 class="title">Giới Thiệu Chung</h3>
							<div class="image-holder">
								<img src="images/banner-about.png" />
							</div>
							<div class="paragraph">
								<p>
									<strong class="red">Công Ty TNHH Hilita Việt Nam</strong>
									
									<p><br>Được thành lập từ ngày 17 tháng 9 năm 2012, qua hơn 2 tháng hình thành và phát triển, chúng tôi đã luôn nỗ lực để mang lại cho quý khách hàng những sản phẩm với chất lượng và giá cả cạnh tranh nhất.</p>

									<p><br>Chúng tôi luôn phục vụ trên tinh thần "Tận tâm, Uy tín, Chất lượng" đó là định hướng phát triển thương hiệu của Long Hải.</p>

									<p><br>Chúng tôi nhận cung cấp các loại mặt hàng cho những dự án lớn với đa dạng mẫu mã và chủng loại. Đặc biệt hàng hoá sẽ được phục vụ đến tận nơi (không giới hạn khoảng cách).</p>
								</p>
							</div>
						</div>
						<div class="sanphamIndex boxstyle">
							<h3 class="title">Sản Phẩm</h3>
							<ul>
								<?php for($i=1; $i<=6; $i++){
									echo "<li><div class=\"imageHolder\"><img src=\"images/image-item.png\" /></div><div class=\"text\"><a href=\"#\">Vong bi loại".$i." </a></div></li>";
									};
								?>
							</ul>
						</div>
					</div>
					<div class="right-col">
						<div id="search"><input type="text" maxlength="255" placeholder="Search" /></div>
						<div class="support">
							<?php include "include/support-widget.php"; ?>
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
				<?php include "include/footer.php"; ?>
			</div><!--.FOOTER-->
		</div><!--.WRAPPER-->
	</body>
</html>