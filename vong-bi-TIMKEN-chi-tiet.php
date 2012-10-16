<!DOCTYPE HTML>

<?php $productName="TIMKEN"; ?>
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
					
					<div class="skf-detail-container main-col ">
						
						<div class="skf-detail boxstyle">
							<h3 class="title">Chi tiết vòng bi <?php echo $productName; ?></h3>
							<div class="detail-holder">
								<div class="image-holder">
									<img src="images/timken-detail.jpg" />
								</div>
								<div class="paragraph">
								<div class="detail">
									<h3><strong class="red">Chi tiết vòng bi <?php echo $productName; ?> loại X </strong></h3>
									<table id="ar_t" style="width: 60%;" border="0" cellspacing="0" cellpadding="0" align="left" class="detail-table">
									<tbody>
									<tr>
									<td>Bearingstypes</td>
									<td>33213</td>
									</tr>
									<tr>
									<td>new types</td>
									<td>33213</td>
									</tr>
									<tr>
									<td>old types</td>
									<td>3007213E bearing</td>
									</tr>
									<tr>
									<td>productstypes</td>
									<td>33213</td>
									</tr>
									<tr>
									<td>categories</td>
									<td>TaperedRollerBearings</td>
									</tr>
									<tr>
									<td>brands</td>
									<td>TIMKEN</td>
									</tr>
									<tr>
									<td>ID d ( mm )</td>
									<td>65</td>
									</tr>
									<tr>
									<td>OD D ( mm )</td>
									<td>120</td>
									</tr>
									<tr>
									<td>thickness B ( mm )</td>
									<td>41</td>
									</tr>
									</tbody>
									</table>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="right-col">
						<div id="search"><input type="text" maxlength="255" placeholder="Search" /></div>
						<div class="contactUs boxstyle"><?php include "include/contact-us.php"; ?></div>
						<div class="support ">
							
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