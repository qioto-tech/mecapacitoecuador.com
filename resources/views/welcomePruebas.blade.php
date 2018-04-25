<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Quiero ser maestro  &mdash;  </title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/font.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/structure.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.html"><span>Quiero</span> <span style="color:#1b82cd">Ser</span> <span style="color:#d9534f">Maestro</span> 6</a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.html">Noticias</a></li>
            <li class=""> <a href="{{ URL::asset('/idoneo') }}">Consulta Idoneidad</a>
            </li>
            <li class=""> <a href="{{ URL::asset('/elegible') }}">Consulta Elegibilidad</a>
            </li>
            <li><a href="{{ URL::asset('/order') }}">Capacitacion</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <form id="searchForm" method="POST" action="/search/search">
      {{ csrf_field() }}
      <input type="text" placeholder="Buscar por cedula..." id="ci_search" name="ci_search">
      <input type="submit" value="" id="btn-submit" name="btn-submit">
    </form>
  </div>
</header>
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-6">
        <div class="row">
          <div class="leftbar_content">
            <h2>Noticias</h2>
          
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="images/tips3.jpg" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">QSM6</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Capacitacion para pruebas de personalidad</a></h2>
                      <?php
                    $personalidad=utf8_encode("El objetivo principal de las pruebas de personalidad es determinar las el desenvolvimiento psicol&oacute;gico del aspirante en un entorno estudiantil de ni&ntilde;os y j&oacute;venes. El Ministerio de Educaci&oacute;n ha realizado esfuerzos para poder segregar personalidades adictivas o violentas que puedan ser perjudiciales para la educaci&oacute;n.");
                    $personalidax=utf8_encode("Las pruebas de personalidad no tienen respuestas correctas o incorrectas ya que estas preguntas son interlazadas unas con otras y son dise&ntilde;adas para reconocer que el aspirante esta mintiendo en la l&oacute;gica de su respuesta. Es por eso que el principal secreto en estas pruebas de personalidad es la coherencia de contestaci&oacute;n y tiempos de respuesta");
                    
                    $personalidad3=utf8_encode("Ejemplo: En la pregunta 20 te preguntan algo como: Te gusta ir a fiestas y beber socialmente?.... En la pregunta 52 que esta enlazada te preguntan lo mismo pero de forma diferente Ejemplo te gusta tomar solo o acompa&ntilde;ado?. Si te das cuenta estas preguntas tienen relaci&oacute;n y se deben responder coherentemente.");
                    
                    $personalidad4=utf8_encode("1: Responder con la verdad y coherentemente todas las preguntas");
                    $personalidad5=utf8_encode("2: No contradecirnos");
                    $personalidad7=utf8_encode("3: Paciencia, la prueba puede llegar a demorarse aproximadamente 50 minutos cuyo objetivo es ofuscar la relaci&oacute;n entre las primeras preguntas y las &uacute;ltimas");
                    
                    $personalidad8=utf8_encode("Existen 2 tipos de prueba en latinoam&eacute;rica que determinan este tipo de personalidades que busca el Ministerio de Educaci&oacute;n. Estas pruebas han sido compiladas y puestas a su disposici&oacute;n por nuestro equipo para brindarles acertividad al momento de sus pruebas, y la confianza de que estas preparado para las mismas.  ");
                    
                    $personalidad9=utf8_encode("El siguiente es un link de la plataforma donde se desplegar&aacute; un demo de las pruebas de personalidad completamente gratis ");
                    
                    $personalidad10=utf8_encode("Si deseas ingresar a la prueba completa donde se desplegar&aacute;n las aproximadamente 500 preguntas del cuestionario de evaluaci&oacute;n de personalidad");
                    $personalidad11=utf8_encode("Mientras m&aacute;s te prepares, m&aacute;s oportunidades tendr&aacute;s de acceder a un puesto de trabajo dentro del Magisterio, no arriesgues tu futuro. CAPACITATE!!!!");
                    
                    
                    ?>
                    
                    <p>{!!$personalidad!!}</p>
                    <p>{!!$personalidax!!}</p>
                    <p>{!!$personalidad3!!}</p>
                    <p>TIPS:</p>
                   <p>{!!$personalidad4!!}</p>
                   <p>{!!$personalidad5!!}</p>
                   <p>{!!$personalidad7!!}</p>
                   <p>{!!$personalidad8!!}</p>
                   

                    <p>{!!$personalidad10!!}</p>
                    <p>
                    
                    <a target="_blank" href="http://www.yosiquierosermaestro.com/order"><h1><b><span style="color:#CCAF30">Simulador completo</span> <span style="color:#1b82cd">pruebas de </span> <span  style="color:#d9534f">personalidad AQUI...</span></b></h1></a>
                    </p>
                    
                   <p>{!!$personalidad11!!}</p>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
       
            
    
          
          
           <!-- <div class="stuffpost_paginatinonarea wow slideInLeft">
              <ul class="newstuff_pagnav">
                <li><a class="active_page" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>-->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2 col-lg-2">
        <div class="row">
          <div class="middlebar_content">
            <h2 class="yellow_bg">Vinculos importantes</h2>
            <div class="middlebar_content_inner wow fadeInUp">
              <ul class="middlebar_nav">
                <li> <a class="mbar_thubnail"  href="{{ URL::asset('/tips') }}"><img src="images/Tips.jpg" alt=""></a> <a class="mbar_title" href="{{ URL::asset('/tips') }}">Tips para aprobar las pruebas de idoneidad QSM6</a> </li>
                <li> <a class="mbar_thubnail"  href="{{ URL::asset('/resultado') }}"><img src="images/resultados.jpg" alt=""></a> <a class="mbar_title"   href="{{ URL::asset('/resultado') }}">Ver Resultados del simulador</a> </li>
                <li> <a class="mbar_thubnail" target="_blank"  href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/08/Cronograma-Elegibilidad-Meritos-y-Oposicion-QSM-6.pdf"><img src="images/cronograma.png" alt=""></a> <a class="mbar_title" target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/08/Cronograma-Elegibilidad-Meritos-y-Oposicion-QSM-6.pdf">Cronograma QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/07/MINEDUC-MINEDUC-2017-00065-A-2.pdf"><img src="images/Lista.png" alt=""></a> <a class="mbar_title"  target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/07/MINEDUC-MINEDUC-2017-00065-A-2.pdf">Acuerdo Ministerial QSM6</a> </li>
                <li> <a class="mbar_thubnail" href="{{ URL::asset('/idoneo') }}"><img src="images/archivo.png" alt=""></a> <a class="mbar_title"  href="{{ URL::asset('/idoneo') }}">Verifica tu idoneidad QSM6</a> </li>
                <li> <a class="mbar_thubnail"  href="{{ URL::asset('/elegible') }}"><img src="images/visto.png" alt=""></a> <a class="mbar_title"  href="{{ URL::asset('/elegible') }}">Verifica si eres elegible QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="https://www.educacion.gob.ec"><img src="images/indice.png" alt=""></a> <a class="mbar_title"  target="_blank" href="https://www.educacion.gob.ec">Ministerio de Educacion</a> </li>
                
                
              </ul>
            </div>
            <!-- <div class="popular_categori  wow fadeInUp">
              <h2 class="limeblue_bg">Categorias</h2>
              <ul class="poplr_catgnva">
                <li><a href="#">QSM</a></li>
                <li><a href="#">QSD</a></li>
                <li><a href="#">QSAA</a></li>
                
              </ul>
            </div>!-->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="row">
          <div class="rightbar_content">
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>Relacionados</h2>
              <ul class="featured_nav">
                  
                  <li> <a class="featured_img" href="{{ URL::asset('/tips') }}"><img src="images/test.jpg" alt=""></a>
                    <?php
                    $localx=  utf8_encode("Prep&aacute;rate para las pruebas");
                    ?>
                  <div class="featured_title"> <a class="" href="{{ URL::asset('/tips') }}">{!!$localx!!}</a> </div>
                </li>
                
                
               
                
                  <li> <a class="featured_img"  href="{{ URL::asset('/order') }}"><img src="images/5usd.png" alt=""></a>
                    <?php
                    $local=  utf8_encode("Capacitate con el simulador de pruebas de personalidad completo");
                    ?>
                  <div class="featured_title"> <a class=""  href="{{ URL::asset('/order') }}">{!!$local!!}</a> </div>
                </li>
               
                
                
                    <li> <a class="featured_img" href="{{ URL::asset('/order') }}"><img src="images/demo.png" alt=""></a>
                    <?php
                    $local2=  utf8_encode("Ingresa al demo del simulador de pruebas de personalidad");
                    ?>
                  <div class="featured_title"> <a class="" href="{{ URL::asset('/order') }}">{!!$local2!!}</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/QSMgalapagos.jpg" alt=""></a>
                    <?php
                    $local=  utf8_encode("Encuentra el cronograma de m&eacute;ritos y oposici&oacute;n");
                    ?>
                  <div class="featured_title"> <a class="" target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/09/Cronograma-Elegibilidad-Meritos-y-Oposicion-QSM-Galapagos-2017-1.pdf">{!!$local!!}</a> </div>
                </li>
                
                    <li> <a class="featured_img" href="#"><img src="images/bilingue.png" alt=""></a>
                    <?php
                    $local2=  utf8_encode("Encuentra todo lo que necesitas saber");
                    ?>
                  <div class="featured_title"> <a class="" target="_blank" href="https://educacion.gob.ec">{!!$local2!!}</a> </div>
                </li>
              
              
              </ul>
            </div>
           <!-- <div class="single_blog_sidebar wow fadeInUp">
              <h2>Popular Posts</h2>
              <ul class="middlebar_nav wow">
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img2.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>-->
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>Marcas Populares</h2>
              <ul class="poplr_tagnav">
                <li><a href="#">Maestros</a></li>
                <li><a href="#">pruebas maestros</a></li>
                <li><a href="#">qsm6</a></li>
                <li><a href="#">Conocimiento</a></li>
                <li><a href="#">Personalidad</a></li>
                <li><a href="#">noticias maestro</a></li>
                <li><a href="#">Videos maestros</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Copyright &copy; 2017 </p>
          <p class="pull-right">Developed By Qioto.tech</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>