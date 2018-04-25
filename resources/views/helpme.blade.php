@extends('layouts.template_helpme')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection    	



@section('sub-title', 'Ayuda')

@section('content_seccion')

         
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_0.jpg') }}" alt="Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_1.jpg') }}" alt="1 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_2.jpg') }}" alt="2 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_3.jpg') }}" alt="3 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_4.jpg') }}" alt="4 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_5.jpg') }}" alt="5 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_6.jpg') }}" alt="6 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_7.jpg') }}" alt="7 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_8.jpg') }}" alt="8 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_9.jpg') }}" alt="9 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_10.jpg') }}" alt="9 Paso" height="358px">
    </div>

    <div class="item">
      <img src="{{ URL::asset('img/model-2017/guia-suscripcion/Screenshot_11.jpg') }}" alt="9 Paso" height="358px">
    </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>              

              
            </div>
<br /><br />              
<!-- Preguntass mas frecuentes -->
 
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Como realizar el pago via dep&oacute;sito o transferencia?</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
       <ul class="list-group">
		  <li class="list-group-item list-group-item-success">
		  	Ingrese a la siguiente direcci&oacute;n http://www.yosiquierosermaestro.com/order<br />
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-deposito/Screenshot_1.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-info">
		  	Llene el formulario con sus datos en la secci&oacute;n Forma de pago seleccione la opci&oacute;n Transferencia o Dep&oacute;sito Bancario. Por ultimo haga clic en Registrarme <br />
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-deposito/Screenshot_2.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-success">
		  	Revise su correo, si no lo encuentra busque en la carpeta SPAM, es mail contiene los datos de la cuenta donde debe realizar el dep&oacute;sito o la transferencia, y la direcci&oacute;n para registrar el pago. El asunto del mail es el siguiente "Solicitud de Inscripci&oacute;n a la prueba de ...."<br />
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-deposito/Screenshot_3.jpg') }}" alt="8 Paso" height="358px">
		  	</p>		  	
		  </li>
		  <li class="list-group-item list-group-item-info">
		  	Una vez realizado el dep&oacute;sito o la transferencia, puede enviar el comprobante de dep&oacute;sito o transferencia respondiendo el mail anterior, o registrar el dep&oacute;sito en la direcci&oacute;n que se indica en el correo
		  </li>
		  <li class="list-group-item list-group-item-success">
		  	El proceso de verificaci&oacute;n de comprobante demora 1 hora, luego de esto se habilita sus credenciales.
		  </li>
		  <li class="list-group-item list-group-item-info">
		  	Se envia un mail a su cuenta con las credenciales de acceso al simulador, como en el caso anterior si no encuentra el correo busque en la carpeta SPAN.<br />
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-deposito/Screenshot_4.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>	
		  <li class="list-group-item list-group-item-success">
		  	Bienvenido a la plataforma de entrenamiento virtual.<br />
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-deposito/Screenshot_5.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		</ul> 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Como realizar el pago con tarjeta de credito?</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
       <ul class="list-group">
		  <li class="list-group-item list-group-item-success">
		  	Ingrese a la siguiente direcci&oacute;n http://www.yosiquierosermaestro.com/order
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-tarjeta/Screenshot_1.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-info">
		  	Llene el formulario con sus datos en la secci&oacute;n Forma de pago seleccione la opci&oacute;n Tarjeta de credito. Por ultimo haga clic en Registrarme 
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-tarjeta/Screenshot_2.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-success">
		  	Llene los datos de su tarjeta de credito
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-tarjeta/Screenshot_3.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-info">
		  	Se envia un mail a su cuenta con las credenciales de acceso al simulador, como en el caso anterior si no encuentra el correo busque en la carpeta SPAN.
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-tarjeta/Screenshot_4.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		  <li class="list-group-item list-group-item-success">
		  	Bienvenido a la plataforma de entrenamiento virtual.
		  	<p>
		  	<img src="{{ URL::asset('img/model-2017/guia-faq-tarjeta/Screenshot_5.jpg') }}" alt="8 Paso" height="358px">
		  	</p>
		  </li>
		</ul> 
      
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Como contactarnos en caso de un problema?</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
       <ul class="list-group">
		  <li class="list-group-item list-group-item-success">Puede escribirnos al correo info@yosiquierosermaestro.com</li>
		  <li class="list-group-item list-group-item-info">Puede escribirnos en nuestro canal de facebook https://www.facebook.com/quierosermaestro </li>
		</ul> 
		
	  </div>
    </div>
  </div>
</div>             





@endsection