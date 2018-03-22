
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agrico Farm an Agriculture Category Bootstrap responsive Website Template | Contact :: w3layouts</title>
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
 <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_Pb0L4PtZNhNlyJcvK6cts");
   })();
</script>
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
					<h2>Contact Us</h2>
				</div>
				<!-- //agileits-top-heading -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
					<div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Address</h3>
                                <p>DJ Sanghvi College of Engineering
                                    <br>JVPD Scheme
                                    <br>Mumbai, <strong>India</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Call center</h3>
                                <p class="text-muted">This number is toll free if calling from India, otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+91 980 000 0000</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                   <p> <strong>info@agriculture.com</strong></p>
                                                                   
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>
               
				<div class="row text-center col-md-6 contact-form" style="margin-left: 290px;">
					<form id="formid" >
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<div class="col-sm-12 text-center" style="padding-bottom: 20px;padding-top: 20px;">
                            <button type="submit" id="buttonid" onclick="contact()" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>
                        </div>
					</form>
				</div>
				<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->

	<!-- copyright -->
	@include('footer')
	<!-- //here ends scrolling icon -->
</body>	
</html>