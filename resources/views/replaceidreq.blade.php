<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online ID Card Application System</title>

    <!-- Bootstrap -->
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
					<li> <a href="{{ route('login')}}" class="btn btn-blue btn-effect">Login</a></li>
					<li> <a href="{{ route('register')}}" class="btn btn-blue btn-effect">Create an account</a></li>
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
								<li role="presentation"><a href="{{route('index')}}">Home</a></li>
								<li role="presentation"><a href="{{route('services')}}">Services</a></li>
								<li role="presentation"><a href="{{route('contact')}}">Contact</a></li>							
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
    
	<div class="jumbotron">
		<h2>Replace ID Card </h2>		
	</div>
	
	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8">
					<div class="page-header">
						<h3>Requirements</h3>							
						<p>
							 <ul>
                     			<li>Persons who qualify for this service: Persons who have lost 2nd generation ID card, Persons in possession of mutilated 2nd generation ID card </li>
  								<li>A police abstract or a letter from an administrative officer certifying the loss.</li>
  								<li>Your lost ID card number or copy of lost ID.</li>
  								<li>A passport size photograph.</li>
  								<li> Ksh 300/= for replacement.</li>

							</ul>
						</p>
						
						<h3>Application Process</h3>
						<p>
								<ol>
                         		<li>Create an account or login if you already have an account. </li>
  								<li>Follow the instructions to fill the ID replacement application form provided.</li>
  								<li>Upload required documents as per the instructions.</li>
  								<li>Download and print 2 copies of your fingerprint form on both sides.</li>
  								<li>present the fingerprint form and the original birth certificate to Nearby District Officer/ District Commission headquaters for fingerprint processing.</li>
  								<li>You will get an email notification after a few days once they start processing to download your ID waiting card. </li>
  								<li>When processing is complete, you will get an email notification to collect your ID.</li>
  								
  							</ol><br>
						
					
						<div class="ficon">
							<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{route('login')}}">Apply Now!</a></button>
						</div>	
					</div>	
					
					

					
				</div>
				
				<div class="recents">
					<div class="col-xs-6 col-md-4">
						<h5>Search for.</h5>
						<form class="form-search">
							<input class="form-control" type="text" placeholder="Search..">
						</form>
						<div class="page-header">
							<h4>Go to</h4>
						</div>
						<div class="recent-post">
							<ul class="recent">
								<li><a href="#">Home</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">New ID Card</a></li>
								<li><a href="#">Replace ID Card</a></li>
								<li><a href="#">Change ID Particulars</a></li>
								
							</ul>
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
    <script src="{{ asset('js/jquery-2.1.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/wow.min.js')}}"></script>
	<script src="{{ asset('js/fancybox/jquery.fancybox.pack.js')}}"></script>
	<script src="{{ asset('js/jquery.isotope.min.js')}}"></script>
	<script src="{{ asset('js/jquery.bxslider.min.js')}}"></script>
	<script src="{{ asset('js/functions.js')}}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>