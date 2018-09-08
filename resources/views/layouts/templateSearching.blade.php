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
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/slit-slider.css">
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
						<a href="#body"><img src="img/logo-2.png" height="50"></a>
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

		
		<section id="home-slider">
		
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-m1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2><img src="img/central.png" class="imagen-logo-center"></h2>
                            </div>
                        </div>


					</div>
				


				</div><!-- /sl-slider -->

                <!--
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->


			</div><!-- /slider-wrapper -->
			
		</section>
		

			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-offset-1 wow animated fadeInLeft">
							<div class="welcome-block">
								<h3>Bienvenidos a Me Capacito Ecuador</h3>
								<div class="message-body">
									<img src="img/member-1.jpg" class="pull-left" alt="member">
									<p>Estimados docentes, el Ministerio de Educación ha lanzado una campaña de actualización de datos

El objetivo es mantener actualizados los contactos de la comunidad que se ha inscrito en el proceso QSM6 para comunicarles los por mayores del proceso

Recuerden que en noviembre empeizan las pruebas para la elegibilidad así que mantenerse informado y con los datos actualizados es indispensable

Comparte esta noticia para que nadie se quede fuera del proceso, para ir al formulario haz click aqui. </p>
								</div>
								<a href="#" class="btn btn-border btn-effect pull-right">Mas</a>
							</div>
						</div>
						<div class="col-md-4 wow animated fadeInRight">
							<div class="recent-works">
								<h3>Noticias Recientes</h3>
								<div id="works">
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="searching">
				<div class="container">
					<div class="row">
					
						<div class="sec-title wow animated fadeInDown">
							<h2>Consulta tus datos<div class="hr"></div></h2>
						</div>

                        <div class="col-sm-7">
<!--                           <h3>Verifica si eres idoneo</h3> -->
                          
<!--                             {!! Form::open([null, null, 'class'=>'form-horizontal', 'role'=>'form','name'=>'frmsearch','id'=>'frmsearch']) !!} -->
<!--                               <div class="form-group"> -->
<!--                               	<label class="control-label col-sm-2" for="name">Usuario</label> -->
<!--                               	<div class="col-sm-8"> -->
<!--                                 	{!!	Form::text('ci',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero de cedula','size'=>'40', 'id'=>'ci', 'name'=>'ci']) !!}      -->
<!--                               	</div> -->
<!--                               </div>	 -->
<!--                               <div class="form-group"> -->
<!--                             	<div class="col-sm-offset-2 col-sm-8">	 -->
<!--                               		<button type="button" class="btn btn-primary" id="btn-search-suitable">Comprobar idoneidad</button>                              		 -->
<!--                             	</div> -->
<!--                               </div> -->
<!--                             {!!	csrf_field() !!} -->
<!--                             {!! Form::close() !!} -->
                                                    
<!--                           <p>Que tienes capacidades para ser docente</p> -->
<!--                           <p></p> -->
<!--                           <hr> -->
<!--                           <h3>Verifica si eres elegible</h3> -->
                          
<!--                             {!! Form::open([null, null, 'class'=>'form-horizontal', 'role'=>'form','name'=>'frmsearching','id'=>'frmsearching']) !!} -->

<!--                               <div class="form-group"> -->
<!--                               	<label class="control-label col-sm-2" for="name">Usuario</label> -->
<!--                               	<div class="col-sm-8"> -->
<!--                                 	{!!	Form::text('ci',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero de cedula','size'=>'40', 'id'=>'ci_1', 'name'=>'ci_1']) !!}           -->
<!--                               	</div> -->
<!--                               </div>	 -->
                              
<!--                               <div class="form-group"> -->
<!--                             	<div class="col-sm-offset-2 col-sm-8">						   -->
<!--                               		<button type="button" class="btn btn-primary" id="btn-search-elegible">Buscar elegible</button> -->
<!--                             	</div> -->
<!--                               </div> -->
<!--                             {!!	csrf_field() !!} -->
<!--                             {!! Form::close() !!} -->
                          
                          
<!--                           <p>Que puedes ser llamado para integrarte como educador</p> -->
<!--                           <p></p> -->
<!--                           <hr> -->
                          <h3>Resultado de las pruebas personalidad</h3>
                            {!! Form::open([null, null, 'class'=>'form-horizontal', 'role'=>'form','name'=>'frmvalidate','id'=>'frmvalidate']) !!}
                              <div class="form-group">
                              	<label class="control-label col-sm-2" for="name">Usuario</label>
                              	<div class="col-sm-8">
                                	{!!	Form::text('usuario',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero el usuario','size'=>'40', 'id'=>'usuario', 'name'=>'usuario']) !!}       
                              	</div>
                              </div>	
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Contrase&ntilde;a</label>
                                <div class="col-sm-8">
                                	{!!	Form::password('password',['class'=>'form-control', 'id'=>'password', 'name'=>'password']) !!}       
                              	</div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Sexo</label>
                                <div class="col-sm-8">
                                	{!!	Form::select('sexo',['1' => 'Hombre', '2' => 'Mujer'],null,['class'=>'form-control', 'placeholder'=>'Selecciona tu sexo', 'id'=>'sexo', 'name'=>'sexo']) !!}       
                              	</div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Intentos</label>
                                <div class="col-sm-8">
                                	{!!	Form::select('attempt',['1' => 'Primer Intento', '2' => 'Segundo Intento', '3' => 'Tercero Intento', '4' => 'Cuarto Intento', '5' => 'Quinto Intento', '6' => 'Sexto Intento', '7' => 'Septimo Intento', '8' => 'Octavo Intento', '9' => 'Noveno Intento', '10' => 'Decimo Intento'],null,['class'=>'form-control', 'placeholder'=>'Selecciona el intento', 'id'=>'attempt', 'name'=>'attempt']) !!}       
                              	</div>
                              </div>
                              <div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-8">						  
                              		<button type="button" class="btn btn-primary" id="btn-validate">Ver resultados</button>
                            	</div>
                              </div>
                            {!!	csrf_field() !!}
                            {!! Form::close() !!}
                          <br>
                          <p>Conoce las escalas de las pruebas. <a href="#" data-toggle="modal" data-target="#Modal-info"  onclick="">Aqui.</a></p>
                          <p></p>

                          <hr>
                          <h3>Resultado del Test de Orientacion Vocacional</h3>
                            {!! Form::open([null, null, 'class'=>'form-horizontal', 'role'=>'form','name'=>'frmValidateTestOcupacional','id'=>'frmValidateTestOcupacional']) !!}
                              <div class="form-group">
                              	<label class="control-label col-sm-2" for="name">Usuario</label>
                              	<div class="col-sm-8">
                                	{!!	Form::text('usuario',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero el usuario','size'=>'40', 'id'=>'usuarioTestV', 'name'=>'usuarioTestV']) !!}       
                              	</div>
                              </div>	
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Contrase&ntilde;a</label>
                                <div class="col-sm-8">
                                	{!!	Form::password('password',['class'=>'form-control', 'id'=>'passwordTestV', 'name'=>'passwordTestV']) !!}       
                              	</div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Intentos</label>
                                <div class="col-sm-8">
                                	{!!	Form::select('attempt',['1' => 'Primer Intento', '2' => 'Segundo Intento', '3' => 'Tercero Intento', '4' => 'Cuarto Intento', '5' => 'Quinto Intento', '6' => 'Sexto Intento', '7' => 'Septimo Intento', '8' => 'Octavo Intento', '9' => 'Noveno Intento', '10' => 'Decimo Intento'],null,['class'=>'form-control', 'placeholder'=>'Selecciona el intento', 'id'=>'attemptTestV', 'name'=>'attemptTestV']) !!}       
                              	</div>
                              </div>
                              <div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-8">						  
                              		<button type="button" class="btn btn-primary" id="btn-validateTestOcupacional">Ver resultados</button>
                            	</div>
                              </div>
                            {!!	csrf_field() !!}
                            {!! Form::close() !!}
                          <br>
                          <p>Conoce las escalas de las pruebas. <a href="#" data-toggle="modal" data-target="#Modal-info"  onclick="">Aqui.</a></p>
                          <p></p>


                            <!-- Modal -->
                            <div id="Modal-info" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Nomenclatura de terminos</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                    
                    					<div class="panel panel-default">
                        					<div class="panel-heading">Descripci&oacute;n de la nomenclatura</div>
                        					<div class="panel-body" id="content-body">
                        						<table class="table table-bordered  table-hover">
                        							<tr>
                        								<td>Hs</td>
                        								<td>Hipocondr&iacute;a</td>
                        							</tr>
                        							<tr>
                        								<td>D</td>
                        								<td>Depresi&oacute;n</td>
                        							</tr>
                        							<tr>
                        								<td>Hy</td>
                        								<td>Histeria</td>
                        							</tr>
                        							<tr>
                        								<td>Pd</td>
                        								<td>Psicopat&iacute;a</td>
                        							</tr>
                        							<tr>
                        								<td>Mf</td>
                        								<td>Masculinidad/Feminidad</td>
                        							</tr>
                        							<tr>
                        								<td>Pa</td>
                        								<td>Paranoia</td>
                        							</tr>
                        							<tr>
                        								<td>Pt</td>
                        								<td>Psicastenia</td>
                        							</tr>
                        							<tr>
                        								<td>Sc</td>
                        								<td>Esquizofrenia</td>
                        							</tr>
                        							<tr>
                        								<td>Ma</td>
                        								<td>Hipoman&iacute;a</td>
                        							</tr>
                        							<tr>
                        								<td>Si</td>
                        								<td>Introversi&oacute;n Social </td>
                        							</tr>
                        						</table>
                    	          			</div>
                      					</div>
                                    
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
                          
                        </div>
                        <div class="col-sm-5">
                          <h3>Resultados</h3>
                          <p>Usted encontrara aqui los resultados de sus busquedas.</p>
                          <br><hr>
                          <div id="resultado" class="table-responsive">
                          	 
                          </div>
                          <div id="parametro" class="table-responsive">
                          	 
                          </div>
                        </div>
						
						

						
						
												
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
								<p><i class="fa fa-phone"></i>Telefono: (123) 567-8910 </p>
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
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
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

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        @yield('script')
        <script type="text/javascript">
            	function view_parameters(param,note){
            		var url = "{{ url('parameters/result/') }}"+ "/" + param + "/" + note;
            		$.ajax({
            			type: "GET",
            			url: url,
            			success: function(data){
            				$.each(data, function(i, item) {
            						$("#parametro").html(item.value);							
            				});	
            			}
            		});
            		return false;
            	}

        </script>
    </body>
</html>