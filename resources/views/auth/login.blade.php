<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Pest Controll Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/bootstrap.js"></script>
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
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
<!-- //web font -->
<style>
	

        
        body {
            font-family: montserrat, arial, verdana;
            background: #403A3E;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #88c3b6, #ffcc99);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #88c3b6, #ffcc99);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            min-height: 550px;
            margin-top: 0px;
        }
	#register-link{
	color: #ffcc99;
	}
	#register-link:hover{
	color: black;
	}
	html {
    height: 100%;
}
body {
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body><div class="banner" style="text-transform: capitalize;">
		<div class="header-bottom" >
			<div class="container" >
				<header >
    @include('header')
  </header><div class="agileits-top-heading">
				</div>
				<!-- agileits-top-heading -->
				
				<!-- //agileits-top-heading -->
			</div>
		</div>
	</div>
<h1> </h1>
<div class="main-agileits" style="padding-top:30px;">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h1>Login form</h1>
			<form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
			{{  csrf_field() }}
				<div class="form-sub-w3">
					<input type="text" name="Username" placeholder="Customer number" required="" style="color:white;"/>
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>

				<div class="form-sub-w3">
					<input type="password" name="Password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>

				<p class="p-bottom-w3ls" style="font-size: 16px;">Are you new to this site?<a class="" href="register.html" id="register-link">  Register here</a></p>
				
				<div class="submit-w3l" style="">
					<button type="submit" style="width:150px; height: 40px;">Login</button>
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<br><br>
	@include('footer')
</body>
</html>