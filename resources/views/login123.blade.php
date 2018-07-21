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
					<li> <a href="{{route('login')}}" class="btn btn-blue btn-effect">Login</a></li>
					<li> <a href="{{route('createaccount')}}" class="btn btn-blue btn-effect">Create an account</a></li>
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
								<li role="presentation"><a href="{{route('contact')}}" >Contact</a></li>							
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>

	<div class="jumbotron">
		<h2>Login Form</h2>		
	</div>
	 <section class="main-gallery" id="home">
    <div class="overlay">
      <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                   <div class="div-trans text-center">
                    
                       <h3>Login </h3><br>
                        <form>
                       
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" required="required" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Password">
                                </div>
                            </div>
                        
                        
                            <div class="col-md-12 col-sm-12">
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Login </button>
                                </div>
                               
                           <div class="ficon">
                           	

							<p>Not registered?<a href="{{route('createaccount')}}" > Create an account</a></p>
						</div>


                            </div>
                            
                            
                       
                    </form>


                   </div>
   
            </div>

        </div>
    </div>
              
             
              
          </div>
      </div>
    </div>
      
  </section>
  

    
	

	
	<footer>
		
			
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