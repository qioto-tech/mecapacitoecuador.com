<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ app()->getLocale() }}" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Me capacito ecuador</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,700,700italic|Ubuntu+Mono'
	rel='stylesheet' type='text/css' />
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/main.css">
<link href="img/peque-5.ico" rel="shortcut icon" />
<script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body id="body">

	<div id="preloader">
		<div class="loder-box">
			<div class="battery"></div>
		</div>
	</div>


	<header id="navigation"
		class="navbar-inverse navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<div class="navbar-brand">
					<a href="#body"><img src="img/logo-2.png" height="50"></a>
				</div>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				@yield('menu_seccion')</nav>
			<!-- /main nav -->

		</div>
	</header>

	<main class="site-content" role="main">

	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-1 wow animated fadeInLeft">
					<div class="welcome-block"></div>
				</div>
				<div class="col-md-4 wow animated fadeInRight">
					<div class="recent-works"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="teacher">
		<div class="container">
			<div class="row">

				<div class="sec-title wow animated fadeInDown">
					<h2>
						@yield('name_seccion')
						<div class="hr"></div>
					</h2>
				</div>
				<div class="col-sm-12">
					<div id="resultado" class="table-responsive"></div>
				</div>
				<div class="col-sm-12">

					@yield('content_seccion') <br>


				</div>


					<div class="col-sm-12">
						<div id="resultado" class="table-responsive"></div>
						<div id="parametro" class="table-responsive"></div>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Curso</h4>
									</div>
									<div class="modal-body">
										@yield('content_formulario')
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Cerrar</button>
									</div>
								</div>

							</div>
						</div>
						<!-- Modal -->
						<div id="myModalImage" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Curso</h4>
									</div>
									<div class="modal-body">
										@include('layouts.partials.formImagen')
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Cerrar</button>
									</div>
								</div>

							</div>
						</div>
						<!-- Modal -->
						<div id="myModalDetalle" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Detalle del curso</h4>
									</div>
									{!! Form::open(['url' => 'product/update', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
									<div class="modal-body" id="contenidoDetalleCurso">
										
									</div>
									{!!	csrf_field() !!}
                        			{!! Form::close() !!} 
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Cerrar</button>
									</div>
								</div>

							</div>
						</div>
						<!-- Modal -->
						<div id="myModalContenido" class="modal fade" role="dialog" width="1024px">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Detalle del curso</h4>
									</div>
									
	                      					<div class="modal-body" id="contenidoCursoDetalle">
                        						@include('layouts.partials.frmContenidosCurso')
                        						
                    	          			</div>


									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Cerrar</button>
									</div>
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
					<div class="wow animated fadeInDown"></div>
					<form action="#" method="post"
						class="subscribe-form wow animated fadeInUp">
						<div class="input-field">
							<input type="email" class="subscribe form-control"
								placeholder="Enter email">
							<button type="submit" class="submit-icon">
								<i class="fa fa-envelope fa-lg"></i>
							</button>
						</div>
					</form>
					<div class="footer-social">
						<ul>
							<li class="wow animated zoomIn"><a
								href="https://www.facebook.com/quierosermaestro/"
								target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i
									class="fa fa-twitter fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i
									class="fa fa-pinterest fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i
									class="fa fa-linkedin fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i
									class="fa fa-youtube fa-3x"></i></a></li>
						</ul>
					</div>

					<p>
						Copyright &copy; 2018 by <a href="#">qioto.tech</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.singlePageNav.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main-admin.js"></script>
	@yield('script_seccion')
</body>
</html>