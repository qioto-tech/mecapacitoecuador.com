@extends('layouts.templateAdmin')


    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection
    
    @section('name_seccion','Adquirir simulador')
    
@section('script')
@endsection




@section('content_seccion')
 
    <?php
                      
                      
                                
                    $personalidada=utf8_encode("EL Ministerio de Educación del Ecuador ha declarado recientemente el inicio de la toma de exámenes psicométricos para los aspirantes a docentes del proceso QSM6. Proceso que ofrece cerca de 20 mil plazas de trabajo con nombramiento para docentes de las diferentes especialidades a nivel nacional.");
                    $personalidad=("");
                    $personalidad2=utf8_encode("Es por ello que se exhorta a los interesados a no perder esta oportunidad, que pudiera ser la última, de participar para obtener una plaza de trabajo dentro del Magisterio.");
                    
                    $personalidad4=utf8_encode("Al aplicar a nuestro servicio de capacitación y entrenamiento virtual práctico Me Capacito Ecuador, contarás con la asesoría de profesionales expertos en el tema de pruebas psicométricas y de conocimientos, quienes han desarrollado cuidadosamente el banco de preguntas para cada participación, y así evitar errores que podrían significar la anulación de tu prueba.");
                    $personalidadfin=utf8_encode("El organismo oficial declaró que las pruebas empezarán a partir de 9 de Noviembre durante los siguientes 2 meses.");
                    $personalidadfin2=utf8_encode("El servicio de YoSiQuierosermaestro.com y MeCapacitoEcuador.com en ningún momento representa al organismo oficial, solo presta un servicio serio y eficiente de capacitación práctica para las diferentes pruebas que tomará del Ministerio. El contratar nuestros servicios garantiza su correcta capacitación y sobresaliente participación en el proceso. Los datos suministrados por medio de esta página web tienen como finalidad únicamente informar.");
                     
                    
                    
                    $personalidadven=utf8_encode("Nuestros cursos y pruebas de capacitación se adaptan a tu tiempo y espacio, puedes acceder en el horario que se ajuste mejor a ti y desde el lugar que te encuentres. ");
                    $personalidadBAN=utf8_encode("Simulador de exámen: Contamos con bancos de preguntas para repasar antes de presentar el examen. Se provee feedback sobre las preguntas, ayudándote a mejorar y reforzar tus conocimientos. ");
                    $personalidadesp=utf8_encode("Sigue los tips y recomendaciones para facilitarte el entrenamiento");
                    $personalidadfin6=utf8_encode("Ingresa a los simuladores de las pruebas psicométricas generando una orden de pedido y el pago correspondiente, si tienes alguna duda puedes contactarte con nosotros a info@yosiquierosermaestro.com o siguenos en facebook ");
               ?>


<div class="single_stuff wow fadeInDown">
      <div class="single_stuff_img"> <a href="#"><img src="images/bannerPromocionYoSiQuiero1.png" alt=""></a> </div>
             
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> 
                  <div class="stuff_article_inner">
                      
                      <div>

</div>
                         <h2>Funcionamiento de la plataforma virtual de entrenamiento</h2>
                                                 
                         
                         <p style="color:red"><b >{!!$personalidad4!!} </b></p>
                              
                    
                    <p>{!!$personalidadfin6!!} </p>
                    
                     <h2>Suscribete al simulador de entrenamiento online</h2>                    
						
						<p>

@include('order.partials.errors')


{!! Form::open(['route' => 'order.store', 'method' => 'POST','id' => 'DataG', 'class'=>'form-horizontal']) !!}

  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_ci">Cedula:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_ci',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero de cedula','size'=>'60', 'id'=>'customer_ci', 'name'=>'customer_ci']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_name">Nombre:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_name',null,['class'=>'form-control', 'placeholder'=>'Introduce tu nombre','size'=>'60', 'id'=>'customer_name', 'name'=>'customer_name']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_lastname">Apellido:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_lastname',null,['class'=>'form-control', 'placeholder'=>'Introduce tu apellido','size'=>'60', 'id'=>'customer_lastname', 'name'=>'customer_lastname']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_phone">Telefono:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_phone',null,['class'=>'form-control', 'placeholder'=>'Introduce tu telefono','size'=>'60', 'id'=>'customer_phone', 'name'=>'customer_phone']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_address">Direccion:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_address',null,['class'=>'form-control', 'placeholder'=>'Introduce tu direccion','size'=>'60', 'id'=>'customer_address', 'name'=>'customer_address']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="customer_email">Email:</label>
    <div class="col-sm-10">
      {!! Form::text('customer_email',null,['class'=>'form-control', 'placeholder'=>'Introduce tu email','size'=>'60', 'id'=>'customer_email', 'name'=>'customer_email']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="curso">Curso:</label>
    <div class="col-sm-10">
      {!!	Form::select('product', $products, null, ['class'=>'form-control','placeholder' => 'Selecciona un curso...', 'id'=>'product', 'name'=>'product']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="curso">Forma de pago:</label>
    <div class="col-sm-10">
      {!!	Form::select('pay_type', ['1' => 'Tarjeta de credito', '2' => 'Trasferencia o Deposito Bancario'], null, ['class'=>'form-control','placeholder' => 'Selecciona la forma de pago...', 'id'=>'pay_type', 'name'=>'pay_type']) !!}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
       <input id="submit" name="submit" value="Registrarme" onclick="validate();" class="btn btn-danger"  type="submit"  />

    </div>
  </div>


{!!	csrf_field() !!}
{!! Form::close() !!}

                     <p>Los pagos los podras realizar con:</p>
                         <span><br>Tarjetas de credito<br></span>
                         <span>Transferencias bancarias<br></span>
                         <span>Depositos bancarios<br></span>
                     


</p>
							<div class="col-md-10" id="result-elegible">
							</div>
			               
                    
                                 
                    
                  </div>
                </div>
              </div>
            </div>

              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="images/capacitate.jpg" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Ingreso al simulador</a>
                  <div class="stuff_article_inner"> 
                    <h2><a href="#">Capacitate para aprobar las pruebas de personalidad</a></h2>
                  
                    
                    <p>{!!$personalidada!!}</p>
                    <p>{!!$personalidad!!}</p>
                    <div><img style="visibility: visible; width: 90%;" src="images/plataforma.png" alt=""></div>
                    <p>{!!$personalidad2!!}</p>
                    <div><img style="visibility: visible; width: 200px;" src="images/5usd.png" alt=""></div>
                    <p>{!!$personalidadesp!!}</p>
                    <div><img style="visibility: visible; width: 10%;" src="images/247.png" alt=""></div>
                    <p>{!!$personalidadven!!}</p>
                    <div><img style="visibility: visible; width: 10%;" src="images/computadora.png" alt=""></div>
                    <p>{!!$personalidadBAN!!}</p>
                    
                    
                    
                    <p>{!!$personalidad4!!} <a target="_blank" href="https://educacion.gob.ec/quiero-ser-maestro-6/"></a></p>
                        
                  </div>
                </div>
              </div>
            </div>
<br><br>
@endsection

@section('content')

              
	
	<script>
            
         
    
            function validate() {
                
                 //  $( "#submit" ).prop( "disabled", true );

    $( "#submit" ).hide();
                var has_empty = false;

   $(".form-horizontal").find( 'input[type!="hidden"]' ).each(function () {

      if ( ! $(this).val() ) { has_empty = true; return false; 
      }
   });

   if ( has_empty ) { 
       alert("Debe llenar todos los campos");
       $( "#submit" ).show( 2000 );
        return false; }
    else
    {
       //  $( "#DataG" ).submit();
        return true;
}
}



    
 
</script>
@endsection


