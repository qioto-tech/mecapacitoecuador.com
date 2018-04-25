<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="{{ app()->getLocale() }}" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Me capacito ecuador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,700,700italic|Ubuntu+Mono' rel='stylesheet' type='text/css' />
 		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/contenido.css') }}">
        <link href="{{ URL::asset('img/peque-5.ico') }}" rel="shortcut icon" />
        <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>


    </head>
	
    <body id="body">

		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>


        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<div class="navbar-brand">
						<a href="#body"><img src="{{ URL::asset('img/logo-2.png') }}" height="50"></a>
					</div>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    @yield('menu_seccion')
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
		
		<main class="site-content" role="main">

			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-offset-1 wow animated fadeInLeft">
							<div class="welcome-block">

							</div>
						</div>
						<div class="col-md-4 wow animated fadeInRight">
							<div class="recent-works">

							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="teacher">
				<div class="container">
					<div class="row">
					
						<div class="sec-title wow animated fadeInDown">
							<h2>@yield('name_seccion')<div class="hr"></div></h2>
						</div>

                        <div class="col-sm-12">
                        
                        @yield('content_seccion')
                        
 
                          <br>

                          
                        </div>
                        
        				  <div class="modal fade" id="Modal-frm" role="dialog">
        				    <div class="modal-dialog modal-lg">
        				      <div class="modal-content">
        				        <div class="modal-header">
        				          <button type="button" class="close" data-dismiss="modal">&times;</button>
        				          <h4 class="modal-title">Adquirir curso</h4>
        				        </div>
        				        <div id="present" class="modal-body">
        							@include('layouts.partials.form-products')			          
        				        </div>
        				        <div class="modal-footer">
        				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        				        </div>
        				      </div>
        				    </div>
        				  </div>				
					</div>
				</div>
			</section>

			

		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
												<div class="wow animated fadeInDown">

						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter email">
								<button type="submit" class="submit-icon">
									<i class="fa fa-envelope fa-lg"></i>
								</button>
							</div>
						</form>
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/quierosermaestro/" target="_blank"><i class="fab fa-facebook-f fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fab fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fab fa-pinterest-p fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fab fa-linkedin-in fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fab fa-youtube fa-3x"></i></a></li>
							</ul>
						</div>
						
						<p>Copyright &copy; 2018 by <a href="#">qioto.tech</a> </p>
					</div>
				</div>
			</div>
		</footer>

        <script src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.singlePageNav.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.ba-cond.min.js') }}"></script>
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('js/main-admin.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

        @yield('script_seccion')
    </body>
</html>