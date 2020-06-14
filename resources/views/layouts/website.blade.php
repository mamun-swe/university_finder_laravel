<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/custom.js') }}"></script>
    <script src="{{ asset('website/js/easing.js') }}"></script>
    <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('website/js/popper.js') }}"></script>
    <script src="{{ asset('website/js/parallax.min.js') }}"></script>
    <script src="{{ asset('website/js/contact.js') }}"></script>
    <script src="{{ asset('website/js/university.js') }}"></script>

    
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/main_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/owl.theme.default.css') }}" rel="stylesheet">

    <link href="{{ asset('website/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/contact.css') }}" rel="stylesheet">

    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/contact_responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</head>
<body>
    <div id="app" class="super_container">
        <!-- Header -->

	<header class="header">
			
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="top_bar_phone"><span class="top_bar_title">phone:</span>+44 300 303 0266</div>
                                    <div class="top_bar_right ml-auto">
    
                                        <!-- Social -->
                                        <div class="top_bar_social">
                                            <span class="top_bar_title social_title">follow us</span>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
    
            <!-- Header Content -->
            <div class="header_container pb-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container mr-auto">
                                    <a href="{{route('website.home')}}">
                                        <div class="logo_img">
                                            <img src="{{asset('static/logo.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner">
                                    <ul class="main_nav">
                                        <li class="active"><a href="{{route('website.home')}}">Home</a></li>
                                        <li><a href="{{route('website.university.list')}}">University</a></li>
                                        <li><a href="{{route('website.guildeline')}}">Guildeline</a></li>
                                        <li><a href="{{route('website.contact')}}">Contact</a></li>

                                        @if(Auth::User())
                                        <li><a href="" class="text-capitalize">Profile</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                                <div class="header_content_right ml-auto text-right">
                                    <!-- Hamburger -->
                                    <div class="user"><a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </header>
    <!-- /Header -->

    	<!-- Menu -->
        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="{{route('website.home')}}">Home</a></li>
                    <li class="menu_mm"><a href="{{route('website.university.list')}}">University</a></li>
                    <li class="menu_mm"><a href="{{route('website.guildeline')}}">Guildeline</a></li>
                    <li class="menu_mm"><a href="{{route('website.contact')}}">Contact</a></li>
                    @if(Auth::User())
                        <li class="menu_mm"><a href="" class="text-capitalize">PROFILE</a></li>
                        <li class="menu_mm">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    @endif
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
                <div class="menu_social">
                    <span class="menu_title">follow us</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!--/ Menu -->



        <main>
            @yield('content')
        </main>



    <!-- Footer -->
	<footer class="footer">
		<div class="footer_body">
			<div class="container">
				<div class="row">

					<!-- Newsletter -->
					<div class="col-lg-3 footer_col">
						<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
                            <a href="{{route('website.home')}}">
                                <div class="footer_logo mb-auto"><a href="#">UVPicker</a></div>
                            </a>
							<div class="footer_title mb-3">Description</div>
							<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iure ullam tempore atque. Provident cumque blanditiis atque iusto labore! Molestias!</p>
						</div>
					</div>

					<!-- About -->
					<div class="col-lg-2 offset-lg-3 footer_col">
						<div>
							<div class="footer_title">About Us</div>
							<ul class="footer_list">
                                <li><a href="{{route('website.home')}}">Home</a></li>
                                <li><a href="{{route('website.university.list')}}">University</a></li>
							</ul>
						</div>
					</div>

					<!-- Help & Support -->
					<div class="col-lg-2 footer_col">
						<div class="footer_title">Help & Support</div>
						<ul class="footer_list">
                            <li><a href="{{route('website.guildeline')}}">Guildeline</a></li>
                            <li><a href="{{route('website.contact')}}">Contact us</a></li>
						</ul>
					</div>

					<!-- Privacy -->
					<div class="col-lg-2 footer_col clearfix">
						<div>
							<div class="footer_title">Privacy & Terms</div>
							<ul class="footer_list">
								<li><a href="{{route('website.privacy')}}">Privacy</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	
	</footer>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
</body>
</html>
