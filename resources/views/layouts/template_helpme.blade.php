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
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/slit-slider.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
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

		
<!-- 		<section id="home-slider"> -->
		
<!--             <div id="slider" class="sl-slider-wrapper"> -->

<!-- 				<div class="sl-slider"> -->
				
<!-- 					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2"> -->

<!-- 						 <div class="bg-img bg-img-1"></div> -->

<!-- 						<div class="slide-caption"> -->
<!--                             <div class="caption-content"> -->
<!--                                 <h2><img src="{{ URL::asset('img/central.png') }}" class="imagen-logo-center"></h2> -->
<!--                             </div> -->
<!--                         </div> -->

<!-- 					</div> -->
				
<!-- 				</div> -->

<!-- 			</div> -->
			
<!-- 		</section> -->
		

			<section id="about" >
<!-- 				<div class="container"> -->
<!-- 					<div class="row"> -->
<!-- 						<div class="col-md-7 col-md-offset-1 wow animated fadeInLeft"> -->
<!-- 							<div class="welcome-block"> -->
<!-- 								<h3>Bienvenidos a Me Capacito Ecuador</h3> -->
<!-- 								<div class="message-body"> -->
<!-- 									<img src="{{ URL::asset('img/member-1.jpg') }}" class="pull-left" alt="member"> -->
<!-- 									<p>Estimad@s, Somos un grupo de profesionales independientes a los entes estatales, que estamos ayudando a los aspirantes en la preparacion de sus pruebas a traves de sumuladores en una plataforma digital, como preparacion a los examenes que deben dar . </p> -->
<!-- 								</div> -->
<!-- 								<a href="#" class="btn btn-border btn-effect pull-right">M&aacute;s</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="col-md-4 wow animated fadeInRight"> -->
<!-- 							<div class="recent-works"> -->
<!-- 								<h3>Noticias Recientes</h3> -->
<!-- 								<div id="works"> -->
<!-- 									<div class="work-item"> -->
<!-- 										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
<!-- 									</div> -->
<!-- 									<div class="work-item"> -->
<!-- 										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
<!-- 									</div> -->
<!-- 									<div class="work-item"> -->
<!-- 										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
			</section>


			<section id="helpme">
				<div class="container">
					<div class="row">
					
						<div class="sec-title wow animated fadeInDown">
							<h2>@yield('sub-title')<div class="hr"></div></h2>
						</div>

				  <div class="modal fade" id="Modal-Subir-Archivo" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Adquirir cuestionario</h4>
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
						

						<ul class="project-wrapper wow animated fadeInUp">
						
							@yield('content_seccion')
						

							
						</ul>
						
					</div>
				</div>
			</section>


			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title wow animated fadeInDown">
							<h2>Contactanos<div class="hr-c"></div></h2>
						</div>
						
						@if(Session::has('success'))
                           <div class="alert alert-success">
                             {{ Session::get('success') }}
                           </div>
                        @endif	
                        
                        
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							{!! Form::open(['route'=>'contactus.store']) !!}
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Nombre completo">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Su email">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Asunto">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Su mensaje"></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Enviar</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>						
								<p><i class="fa fa-pencil"></i>Me capacito ecuador.<span>ZIP 170503</span> <span>Quito </span><span>Ecuador</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (123) 567-8910 </p>
								<p><i class="fa fa-envelope"></i>info@mecapacitoecuador.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
<!-- 			<section id="google-map"> -->
<!-- 				<div id="map-canvas" class="wow animated fadeInUp"></div> -->
<!-- 			</section> -->
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">

						</div>

						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/quierosermaestro/" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-pinterest fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-linkedin fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
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
        <script src="{{ URL::asset('js/jquery.slitslider.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.ba-cond.min.js') }}"></script>
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>
        @yield('script')
         
    </body>
</html>