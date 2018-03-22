<?php 
use App\User;
use App\Crop;
use App\Pesticide;
$file = file_get_contents("http://localhost:5000/hello",true);
$file1 = json_decode($file);

function farmerlist($crop,$disease){
	$farmer1=Crop::where('Crop_Name',$crop)->where('Disease',$disease)->get();
	return $farmer1;
}

function sendsms($number,$crop,$disease){
	$message=$crop." has high chances of being infested by ".$disease;
	$file = file_get_contents("https://control.msg91.com/api/sendhttp.php?authkey=132727AshR9z6QU9Dg58416307&mobiles=".$number."&message=".$message."&sender=SAAMMY&route=4",true);
}

foreach($file1 as $obj){
	$crop=$obj->Crop;
	$disease=$obj->Pest;
	$state=$obj->State;
	$district=$obj->District;

	$farmer1=farmerlist($crop,$disease);

	foreach($farmer1 as $farm){
		if ($farm->state==$state && $farm->district==$district){
			sendsms($farm->number,$crop,$disease);
		}
} }?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Agrico Farm an Agriculture Category Bootstrap responsive Website Template | Home :: w3layouts</title>
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
<link rel="stylesheet" href="css/tablecss.css" type="text/css" media="all" />
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
<style>
.inputfield{
	min-width: 700px;
}
@media screen and (max-width: 700px) {

.inputfield{
	width:250px;
	}
}
</style>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="login.html">Login</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
				<!-- w3-banner -->
				<div class="w3-banner" style="min-height:700px;">
					<!-- <div class="w3layouts-border"> </div>  -->

					<form class="form-inline" action="#" style="margin-top:200px;">
					    <div class="form-group" style="">
					     
					      <input type="text" class="form-control inputfield" id="crop" placeholder="Enter crop" name="crop" style="height: 50px; margin:auto;margin-right:15px;">
					    </div>
					    
    					<a href="#croptable"> <button type="submit" class="btn btn-warning" style="height:50px;width:90px; font-size:16px;">Submit</button> </a>
  				</form>
					
        
					<!-- <h2>Pest <span>Management</span></h2>
					<p><b>Predict probability of disease. <span>Suggest pesticides.</span><span>Display nearby vendors.</span></b></p> 
					<div class="w3layouts-border agileits-border"> </div> -->
				</div>
				<!-- //w3-banner -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	<div class="table-users" id="croptable" name="croptable" style="">
   <div class="header1" style="text-align: center;">Users</div>
   
   <table cellspacing="0">
      <tr>
        
         <th>Crop Name</th>
         <th>Pest Name</th>
         <th>Pesticide Name</th>
         <th width="230">Seller</th>
      </tr>
<!-- add foreach php loop here -->
      <tr>
        
         <td>Wheat</td>
         <td>Pest 1</td>
         <td>0Pesticide 1</td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
      </tr>

      <tr>
        
         <td>Wheat</td>
         <td>Pest 1</td>
         <td>0Pesticide 1</td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
      </tr>

      <tr>
        
         <td>Wheat</td>
         <td>Pest 1</td>
         <td>0Pesticide 1</td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
      </tr>
      
      <tr>
        
         <td>Wheat</td>
         <td>Pest 1</td>
         <td>0Pesticide 1</td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
      </tr>
   </table>
</div>
  

	
	<!-- copyright -->
	<div class="agileits-w3layouts">
		<div class="container">
			<p>© 2017 Agrico Farm.</p>
			
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
	<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,ml,mr,pa,sd,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!-- //here ends scrolling icon -->
</body>	
</html>