
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agrico Farm an Agriculture Category Bootstrap responsive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agrico Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header-bottom">
			<div class="container">
				<header>
    @include('header')
  </header>
				<!-- agileits-top-heading -->
				<div class="agileits-top-heading">
					<h2>About Us</h2>
				</div>
				<!-- //agileits-top-heading -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	
	<!-- services -->
	<div class="services">
		<div class="w3ls-services-right">
			<div class="w3ls-services-icons" style="margin-top: 0px;">
				<div class="agileits-icon-grid">
					<div class="icon-left hvr-radial-out">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</div>
					<div class="icon-right">
						<h5>Suspendisse consectetur dapibus volutpat</h5>
						<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits-icon-grid">
					<div class="icon-left hvr-radial-out">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</div>
					<div class="icon-right">
						<h5>Lorem ipsum dolor sit amet, consectetur</h5>
						<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits-icon-grid">
					<div class="icon-left hvr-radial-out">
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
					</div>
					<div class="icon-right">
						<h5>Suspendisse consectetur dapibus volutpat.</h5>
						<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //services -->
	<!-- different -->
	<div class="jarallax different">
		<div class="container">
			<div class="agileits-heading different-heading">
				<h3>Put some content here</h3>
			</div>
			<div class="w3agile-different-info">
				<p>Cras vehicula massa id ipsum venenatis, non convallis libero pellentesque. Sed tristique massa et mattis mattis. Nunc euismod consequat ex, eu tincidunt justo malesuada vitae. Sed auctor diam quis nulla hendrerit porta. Quisque venenatis, tortor quis tristique congue, lorem lectus elementum augue, in laoreet lorem justo lacinia velit. Phasellus tempus luctus velit, eu fermentum arcu porttitor sit amet. Suspendisse id efficitur sem. Donec laoreet ante at facilisis dictum. Donec sodales porta orci sed porta. Vivamus est enim, pharetra sit amet placerat ut, eleifend quis purus. Sed elementum tortor erat, placerat rutrum augue facilisis vel. Morbi feugiat tortor erat, nec gravida mauris egestas tincidunt. Sed vitae dignissim sapien.</p>
				<div class="w3agile-button">
					<a href="single.html">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //different -->
	
	<!-- //about -->

	<!-- copyright -->
	@include('footer')
</body>	
</html>