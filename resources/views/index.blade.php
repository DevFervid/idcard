<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online ID Card Application System</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('css/jquery.bxslider.css')}}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/slider/15.png') }}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/isotope.css')}}" media="screen" />	
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>
		<nav div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<ul class="social-network">
					
				</ul>
				<ul class="info">
					<li> <a href="{{route('login')}}" class="btn btn-blue btn-effect">Login</a></li>
					<li> <a href="{{route('register')}}" class="btn btn-blue btn-effect">Create an account</a></li>
				</ul>
			</div>
		</nav>
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<h1><img src="{{asset('img/slider/logo9.png')}}" alt=""/></h1>
						</div>
					</div>
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="{{route('index')}}" class="active">Home</a></li>
								<li role="presentation"><a href="{{route('services')}}">Services</a></li>
								<li role="presentation"><a href="{{route('contact')}}" >Contact</a></li>	
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
   
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url('img/slider/9.png')">
          <div class="caption">
            <h1>Acquiring your ID is now Easy,Efficient & Secure! </h1>
            <p>Apply and get our services fast.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ route('register')}}">Create an account</a>
            
          </div>
        </div>
        
      </div>
	
    <div class="jumbotron">
		<h2>Why us?</h2>		
	</div>
	<div class="container">
		<div class="row">				
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="align-center">
						<h4>Cost Saving</h4>					
						<div class="icon">
							<i class="fa fa-usd fa-3x"></i>
						</div>
						<p>
						Reduce the expenses that is spent on ID card application processes such as travelling cost.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
					<div class="align-center">
						<h4>Greater Flexibility</h4>				
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<p>
						 You can apply for your ID Card anywhere, anytime using your smartphone or laptop.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
					<div class="align-center">
						<h4>Easy to Navigate</h4>					
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>
						 The system is user friendly and easy to navigate with clear instructions.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
	 
	<div class="jumbotron">
		<h1>You can <span>get your account</span> NOW!</h1>
		<p>Now availabe across all devices.</p>
		<p><a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Get it now</a></p>
	</div>
	
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html"><h1>About</h1></a>
						<p>OICAS is a Kenyan online ID issuance system. Here, you can apply online for your National ID Card. It is our highest priority to make the application process more convenient and experience of using our online application system as pleasant as possible.</p>
						
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Latest Posts</h3>
						<ul>
							<li><a href="#">Check your ID card status</a></li>
							<li><a href="#">List of processed ID Cards</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Stay in touch</h3>
						<a href="#"><p><i class="fa fa-envelope"></i> vuthi.esther@gmail.com</p></a>
						<p><i class="fa fa-phone"></i>  +254 79 65 10 663</p>
						<p><i class="fa fa-home"></i> PO Box 21 
							Huduma center, Nairobi <br>
							Kenya</p>
					</div>
				</div>
			</div>
		</div>
			
		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						© 2018 Department of immigration services | <a href="http://bootstraptaste.com">All rights reserved.</a>
					</div>
                   
					
					<div class="clear"></div>
				</div>
			</div>
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
		</div>		
	</footer>
   

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('js/functions.js')}}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>