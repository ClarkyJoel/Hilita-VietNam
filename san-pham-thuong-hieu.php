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
						<div class="sanphamthuonghieu boxstyle">
							<h3 class="title">Sản Phẩm Thương Hiệu</h3>
							<ul>
								<li>
									<div class="imageHolder">
										<img src="images/skf-logo.png" />
									</div>
									<div class="text">
										<a href="vong-bi-skf.php">Vong bi SKF</a>
									</div>
								</li>
								<li>
									<div class="imageHolder">
										<img src="images/nsk-logo.png" />
									</div>
									<div class="text">
										<a href="vong-bi-nsk.php">Vong bi NSK</a>
									</div>
								</li>
								<li>
									<div class="imageHolder">
										<img src="images/timken-logo.png" />
									</div>
									<div class="text">
										<a href="vong-bi-timken.php">Vong bi TIMKEN</a>
										
									</div>
								</li>
								<li>
									<div class="imageHolder">
										<img src="images/fag-logo.png" />
									</div>
									<div class="text">
										<a href="vong-bi-fag.php">Vong bi FAG</a>
									</div>
								</li>
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

