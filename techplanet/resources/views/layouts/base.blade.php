<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Techplanet</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- favicon -->
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
      {{-- <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"> --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 techplanet-header">
					<div class="logo techplanet-logo"><a href="/"><img src="{{ asset('images/main/logo.png') }}"></a></div>
					<h1 class="techplanet-title">TECHPLANET</h1>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                           <a class="nav-item nav-link" href="/">Home</a>
                           <a class="nav-item nav-link" href="/category">Store</a>
                           <a class="nav-item nav-link" href="/about-us">About Us</a>
                           @if (Route::has('login'))
                                <div class="nav-item nav-link dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        @auth
                                            {{ Auth::user()->name }}
                                        @else
                                            Account
                                        @endauth
                                    </button>
                                    <div class="dropdown-menu">
                                        @auth
                                            <a class="dropdown-item" href="{{ url('/payment') }}">Orders</a> <!-- Ahmad, tolong letak link dlm ni thanks -->
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('/user/profile') }}">Edit Profile</a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                       this.closest('form').submit();">Log Out</a>
                                            </form>
                                        @else
                                            <a class="dropdown-item" href="{{ route('login') }}">Log in</a>

                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>

    @yield('content')

	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-4 col-lg-3 techplanet-footer">
    					<div class="logo techplanet-logo"><a href="/">
                            <img src="{{ asset('images/main/logo.png') }}">
                        </a></div>
                        <h1 class="techplanet-title">TECHPLANET</h1>
    				</div>
    				{{-- <div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="{{ asset('images/phone-icon.png') }}"><span class="map_text">(+60) 1234567890</span></div>
    				</div> --}}
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="{{ asset('images/email-icon.png') }}"><span class="map_text">Demo@gmail.com</span></div>
    					<div class="footer-logo"><img src="{{ asset('images/phone-icon.png') }}"><span class="map_text">(+60) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="{{ asset('images/fb-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/twitter-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/in-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/google-icon.png') }}"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2 delivery_text">Follow us on social media!</div>
    			</div>
    	    </div>
    	    {{-- <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text">Your place, your style, your way.</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="{{ asset('images/map-icon.png') }}"><span class="pet_text">Techplanet HQ, Jalan Gombak, 53100, Selangor, Malaysia</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Link</h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Store</li>
    				    		<li>About us</li>
    				    		<li>Legal Notice</li>
    				    		<li>Payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			</div>
    	        </div>
	        </div> --}}
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">&copy; Techplanet 2021. All Rights Reserved i guess. Pending patent.</div>


      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <!-- javascript -->
      {{-- <script src="{{ asset('js/owl.carousel.js') }}"></script> --}}
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });


$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });})
      </script>
   </body>
</html>
