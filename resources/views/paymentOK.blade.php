<!DOCTYPE html>
<html>
<head>
<title>Quiero ser maestro  &mdash;  </title>
<meta charset="utf-8">
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
            <li><a href="{{ URL::asset('/payment') }}">Capacitacion</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <form id="searchForm">
      <input type="text" placeholder="Search...">
      <input type="submit" value="">
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
              <div class="single_stuff_img"> <a href="#"><img src="images/confirmation.png" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> 
                  <div class="stuff_article_inner"> 
                    <h2><a href="#">Ingreso a la plataforma virtual de entrenamiento</a></h2>
                      <?php
                    $personalidad=utf8_encode("Para obtener la elegibilidad el primer paso es rendir las pruebas de personalidad. El Ministerio de Educaci�n con coordinaci�n con el Ineval est�n preparando estas pruebas cuyo objetivo es determinar variantes como drogadicci�n, alcholismo, maltrato entre otras. Estas pruebas dar�n un dictamen de personalidad de apto o no apto dependiendo de los resultados. Las fechas definitivas a�n no se han definido pero estaremos pendienetes para poder informar a la comunidad oportunamente.");
                    $personalidax=utf8_encode("Te recomendamos empezar a prepararte para estas pruebas ya que el tiempo de aviso o publicaci�n de las mismas no ser� de m�s de una semana y no te dar� tiempo para tomar las acciones correspondientes.");
                    
                    $personalidad3=utf8_encode("Existen varios simuladores gratuitos en internet cuyo objetivo es mostrar a los docentes una prueba de lo que se considerar�a se tomar�n en las pruebas. Te dejamos algunos vinculos de estos simuladores gratuitos");
                    
                    $personalidad4=utf8_encode("Si deseas una capacitaci�n m�s espec�fica sobre la cual tu podras entrenarte en un ambiente similar a los propuestos por la entidad regulatoria el cual te dar� la confianza y los recursos necesarios para que estes listo para tu ex�men de elegibilidad ");
                    
                    $personalidad5=utf8_encode("Recuerda que mientras m�s te prepares para las pruebas, m�s oportunidades tendr�s para obtener la elegibilidad y posterior un nombramiento definitivo dentro del Magisterio F�scal... A quien no le cae mal un trabajo fijo y seguro en estos tiempos....SUERTE!!! ");
                    
                    ?>
                    
                    <p>{!!$personalidad!!}</p>
                    <p>{!!$personalidax!!}</p>
                    
                    
                    
                    <p>{!!$personalidad3!!}</p>
                    <p>
                        <a target="_blank" href="http://www.forosecuador.ec/forum/ecuador/educaci�n-y-ciencia/116548-simulador-de-pruebas-de-personalidad-quiero-ser-maestro-2017">Simulador Gratis 1</a>
                    </p>
                    
                    <p>
                        <a  target="_blank" href="http://www.forosecuador.ec/forum/ecuador/educaci�n-y-ciencia/116562-simulador-de-pruebas-psicom�ticas-quiero-ser-maestro-6-ministerio-de-educaci�n">Simulador Gratis 2</a>
                    </p>
                    
                    
                    <p>
                        <a target="_blank" href="http://noticiasecuador.org/wp-content/uploads/2017/08/EXAMEN-PERSONALIDAD-1.pdf">Simulador Gratis 3</a>
                    </p>
                    
                    
                    
                    
                    
                    <p>{!!$personalidad4!!}</p>
                    
                    <p>
                    
                    <a target="_blank" href="http://noticiasecuador.org/wp-content/uploads/2017/08/EXAMEN-PERSONALIDAD-1.pdf"><h2><b><span style="color:#CCAF30">Ingresa a la</span> <span style="color:#1b82cd">capacitacion</span> <span  style="color:#d9534f">AQUI...</span></b></h2></a>
                    </p>
                     <p>{!!$personalidad5!!}</p>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="images/consulta.jpg" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Consultas</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Consulta tu idoneidad y elegibilidad</a></h2>
                      <?php
                    $personalidad=utf8_encode("Para facilitar la vida a los aspirates a docentes del Ecuador, se ha desarrollado una plataforma de consulta basada en los archivos que ha publicado el Ministerio de Educaci�n del Ecuador");
                    $personalidad2=utf8_encode("Para consultar el estado de tu idoneidad has click ");
                    $personalidad3=utf8_encode("Para consultar el estado de tu elegibilidad has click ");
                    
                    $personalidad4=utf8_encode("Para verificar los archivos en los archivos oficiales del Ministerio de Educaci�n has click  ");
                    ?>
                    
                    <p>{!!$personalidad!!}</p>
                    <p>{!!$personalidad2!!} <a target="_blank" href="http://www.yosiquierosermaestro.com/teacher">aqui...</a></p>
                    <p>{!!$personalidad3!!} <a  target="_blank" href="http://www.yosiquierosermaestro.com/teacher">aqui...</a> </p>
                    <p>{!!$personalidad4!!} <a target="_blank" href="https://educacion.gob.ec/quiero-ser-maestro-6/">aqui...</a></p>
                  </div>
                </div>
              </div>
            </div>
         
             <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="pages/single.html"><img src="images/errores.jpg" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Errores en la inscripcion</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Ago <strong>5</strong></span>
                    <h2><a href="pages/single.html">Errores en el proceso de inscripcion</a></h2>
                    
                    <?php
                    $local3=  utf8_encode("El Ministerio de Educaci�n implemento un sistema de recepci�n de errores para las personas que tengan inconvenientes dentro del sistema");
                    $local4=  utf8_encode("Como funciona: Se deber� llenar un formulario con el error que se tiene en el sistema. El Ministerio ha dispuesto 48 horas para la resoluci�n de estos errores");
                    $local5=  utf8_encode("El error m�s com�n es el reseteo de clave. Este proceso puede demorar hasta 72 horas debido a la gran cantidad de aspirantes que no pueden acceder a la cuenta debido a sus credenciales del sistema. Se recomienda enviar el formulario una sola vez ya que si el formulario se remite 2 o m�s veces las claves y correos se resetar�n las veces que se hayan enviado los formularios");
                    $local6=  utf8_encode("Para acceder al formulario haga click ");
                    $local7=  utf8_encode("Si su solicitud no ha sido atendio en el transcurso de 72 horas puede escribir al correo quierosermaestro@educacion.gob.ec");
                    ?>
                    <p>
                        {!!$local3!!}
                    </p>
                    <br>
                    <p>
                        {!!$local4!!}
                    </p>
                    <p>
                        {!!$local5!!}
                    </p>
                    
                    <p>
                        {!!$local6!!} <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSew0WfgcrZvsIoeFRgwxK8QVcz6WQULyBC1P29ez304gj3WWg/closedform">aqui...</a>
                    </p> 
                    
                    <p>
                        {!!$local7!!} 
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="pages/single.html"><img src="images/quiero-ser-maestro.jpeg" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">QSM-6</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Ago <strong>1</strong></span>
                    <h2><a href="pages/single.html">Inicio proceso de Elegibilidad</a></h2>
                    
                    <?php
                    $local1=  utf8_encode("El Ministerio de Educaci�n anunci� que el concurso de m�ritos y oposici�n 'Quiero Ser Maestro 6' se abre del 1 al 10 de agosto.
Durante este periodo, los maestros del pa�s podr�n participar por una plaza de trabajo en instituciones de educaci�n p�blica.
El ministro de Educaci�n, Fander Falcoln�, se�al� este lunes en rueda de prensa, que unos 26.000 docentes que ya est�n vinculados a la educaci�n p�blica a trav�s de contratos, podr�n participar en este concurso para obtener un nombramiento fijo.
El proceso inicia con la postulaci�n a trav�s del sitio web del Ministerio");
                    ?>
                    <p>
                        {!!$local1!!}
                    </p>
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
                <li> <a class="mbar_thubnail" target="_blank" href="http://www.yosiquierosermaestro.com/tips"><img src="images/Tips.jpg" alt=""></a> <a class="mbar_title" target="_blank" href="http://www.yosiquierosermaestro.com/teacher">Tips para aprobar las pruebas de idoneidad QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank"  href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/08/Cronograma-Elegibilidad-Meritos-y-Oposicion-QSM-6.pdf"><img src="images/cronograma.png" alt=""></a> <a class="mbar_title" target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/08/Cronograma-Elegibilidad-Meritos-y-Oposicion-QSM-6.pdf">Cronograma QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/07/MINEDUC-MINEDUC-2017-00065-A-2.pdf"><img src="images/Lista.png" alt=""></a> <a class="mbar_title"  target="_blank" href="https://educacion.gob.ec/wp-content/uploads/downloads/2017/07/MINEDUC-MINEDUC-2017-00065-A-2.pdf">Acuerdo Ministerial QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="http://www.yosiquierosermaestro.com/teacher"><img src="images/archivo.png" alt=""></a> <a class="mbar_title" target="_blank" href="http://www.yosiquierosermaestro.com/teacher">Verifica tu idoneidad QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="http://www.yosiquierosermaestro.com/teacher"><img src="images/visto.png" alt=""></a> <a class="mbar_title" target="_blank" href="http://www.yosiquierosermaestro.com/teacher">Verifica si eres elegible QSM6</a> </li>
                <li> <a class="mbar_thubnail" target="_blank" href="www.educacion.gob.ec"><img src="images/indice.png" alt=""></a> <a class="mbar_title"  target="_blank" href="www.educacion.gob.ec">Ministerio de Educacion</a> </li>
                
                
                
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
                  
                  
                   <li> <a class="featured_img" target="_blank" href="http://www.yosiquierosermaestro.com/tips"><img src="images/test.jpg" alt=""></a>
                    <?php
                    $localx=  utf8_encode("Prep�rate para las pruebas");
                    ?>
                  <div class="featured_title"> <a class="" target="_blank" href="http://www.yosiquierosermaestro.com/tips">{!!$localx!!}</a> </div>
                </li>
                
                
               
                
                  <li> <a class="featured_img" target="_blank"  href="http://www.yosiquierosermaestro.com/order"><img src="images/5usd.png" alt=""></a>
                    <?php
                    $local=  utf8_encode("Capacitate con el simulador de pruebas de personalidad completo");
                    ?>
                  <div class="featured_title"> <a class="" target="_blank" href="http://www.yosiquierosermaestro.com/order">{!!$local!!}</a> </div>
                </li>
               
                
                
                    <li> <a class="featured_img" href="#"><img src="images/demo.png" alt=""></a>
                    <?php
                    $local2=  utf8_encode("Ingresa al demo del simulador de pruebas de personalidad");
                    ?>
                  <div class="featured_title"> <a class="" target="_blank" href="https://educacion.gob.ec">{!!$local2!!}</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/QSMgalapagos.jpg" alt=""></a>
                    <?php
                    $local=  utf8_encode("Encuentra el cronograma de m�ritos y oposici�n");
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