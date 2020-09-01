<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATION</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="*****" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//fonts-->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner w3ls-banner-inner"> 
	<!-- header -->
		<?php include 'nav.php'; ?>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="home.php">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">View portfolio </li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Firm Details</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-2 w3layouts_mail_grid_left">
				</div>
				<div class="col-lg-10 mt-lg-0 mt-5 wthree_mail_pos">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Firmname</th>
								<th>Contact</th>
								<th>Working Time</th>
								<th>Days</th>
								<th>About</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;
								$sql=mysqli_query($con,"SELECT * FROM portfolio where phid='$phid'") or die(mysqli_error($con));
								while($row=mysqli_fetch_array($sql)){
							?>
								<tr>
								<td><?php echo $row['firmname']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['wtimings']; ?></td>
								<td><?php echo $row['wdays']; ?></td>
								<td><?php echo $row['about']; ?></td>
								<td><a href="up_portfolio.php?pid=<?php echo $row['port_id']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="del_portfolio.php?pid=<?php echo $row['port_id']; ?>" class="btn btn-danger" onclick="return confirm('Sure to delete it?'); "><i class="fa fa-trash"></i></a></td>

								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clearfix"> </div>
			</div>
		
		<h3 class="heading text-center mb-sm-5 mb-4">My Specification</h3>
		<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-2 w3layouts_mail_grid_left">
				</div>
				<div class="col-lg-10 mt-lg-0 mt-5 wthree_mail_pos">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>SL NO</th>
								<th>Specification</th>
								<th>Charge</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;
								$sql=mysqli_query($con,"SELECT * FROM charges where phid='$phid' ORDER BY speciality ASC") or die(mysqli_error($con));
								while($row=mysqli_fetch_array($sql)){
							?>
								<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $row['speciality']; ?></td>
								<td><?php echo $row['charge']; ?></td>
							
								<td><a href="del_charge.php?sid=<?php echo $row['chid']; ?>" class="btn btn-danger" onclick="return confirm('Sure to delete it?'); "><i class="fa fa-trash"></i></a></td>

								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<br><br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			<div class="col-lg-4 footer-grid-left mb-lg-0 mb-4">
				<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
				<h2><a href="index.php">SWAG <br> </br><br></br> <br> </br><br></br>CREATION</a></h2>
			</div>
			<div class="col-lg-4 col-md-6 footer-grid-middle">
				<h4>About SWAG CREATION </h4>
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience. </p>
			</div>
			
		</div>
		
	</div>
</footer>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //move to top-js-files -->

	<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>
