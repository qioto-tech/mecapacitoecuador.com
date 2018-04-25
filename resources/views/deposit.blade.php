@extends('layouts.templateContenidoModulo')


@section('menu_seccion')
	@include('layouts.partials.menu')
@endsection


@section('name_seccion', 'Registrar deposito')



<link rel="stylesheet" href="{{ URL::asset('assets/dropzone/dropzone.css') }}">
<script src="{{ URL::asset('assets/dropzone/dropzone.js') }}"></script> 
<script src="{{ URL::asset('assets/dropzone/dropzone-config.js') }}"></script> 



@section('content_seccion')

<?php
$personalidada = ("Para comprobar el depósito bancario realizado se ha automatizado el sistema para su comodidad");
$personalidad = ("Debe ingresar el número de comprobante de la papeleta de depósito bancario");
$personalidad2 = ("Finalmente se debe cargar la imagen o fotografía del deposito o transferencia bancaria");
?>


<div class="single_stuff wow fadeInDown">
    <div class="single_stuff_img"> <a href="#"><br><br></a> </div>

    <div class="single_stuff_article">
        <div class="single_sarticle_inner"> 
            <div class="stuff_article_inner">

                <p>{!!$personalidada!!}</p>
                <br>
                <p>{!!$personalidad!!}</p>
                <br>
                <p>{!!$personalidad2!!}</p>
                <br>
                
              	<p>
			          <table class="table table-bordered  table-hover">
			            <thead>
			              <tr>
			                <th>#</th>
			                <th>Descripcion</th>
			              </tr>
			            </thead>
			            <tbody>
                    
                    
		              <tr> 
		              	<td>Cedula</td> 
		                <td>{!!$datos->customer_ci!!}</td>
		              </tr>
		              <tr>
		                <td>Nombre</td>
		                <td>{!!$datos->customer_name!!}</td>
		              </tr>
		              <tr> 
		              	<td>Apellido</td> 
		              	<td>{!!$datos->customer_lastname!!}</td>
		              </tr>
		              <tr> 
		              	<td>Estado</td> 
		                <td>{!!$datos->state!!}</td>
		              </tr>
		            
                    
                    
                    
                    
            </tbody>
          </table>
                    
                   </p> 

                
                    
                    
                    
                    <br>
                    <br>
                    
                        
                    
                
                <div id="ptm">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="customer_email"># de documento:</label>
                    <div class="col-sm-10">
                        {!! Form::text('num_doc',null,['class'=>'form-control', 'placeholder'=>'Número de documento','size'=>'60', 'id'=>'num_doc', 'name'=>'num_doc']) !!}
                    </div>
                </div>

                <br>

                <div class="row">

                    <div class="col-md-offset-1 col-md-10">
                        <div class="jumbotron how-to-create" >
                            {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}

                            <input type="hidden" id="num_documento" name="num_documento" >
                            <input type="hidden" id="order_id" name="order_id" value="{{$order}}">


                            <div class="dz-message">

                            </div>

                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>

                            <div class="dropzone-previews" id="dropzonePreview"></div>

                            <h4 style="text-align: center;color:#428bca;">Carga el comprobante bancario aquí (Formato: jpg, tamaño max: 6Mb)  <span class="glyphicon glyphicon-hand-down"></span></h4>

                            {!! Form::close() !!}


                        </div>

                    </div>
                  
                </div>

                <!-- Dropzone Preview Template -->
                <div id="preview-template" style="display: none;">

                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail=""></div>

                        <div class="dz-details">
                            <div class="dz-size"><span data-dz-size=""></span></div>
                            <div class="dz-filename"><span data-dz-name=""></span></div>
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

                        <div class="dz-success-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                            <title>Check</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                            </g>
                            </svg>
                        </div>

                        <div class="dz-error-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                            <title>error</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                            </g>
                            </g>
                            </svg>
                        </div>

                    </div>
                </div>

                </div>
 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
       <input id="submit" name="submit" value="Finalizar" onclick="validate();" class="btn btn-danger"  type="submit"  />

    </div>
  </div>
                <p>

                    @include('order.partials.errors')


                </p>
                <div class="col-md-10" id="result-elegible">
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>
@endsection

@section('content')

<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> 

	<script>
            
         
            function validate() {
                
                

   $("#ptm").find( 'input[type!="hidden"]' ).each(function () {

      if ( ! $(this).val() ) { has_empty = true;  return false; }
      else
      {
           has_empty = false;
      }
   });
   

   
   if ( has_empty  ) { 
       alert("Debe llenar todos los campos");
       //$("#submit").removeAttr("disabled");
        return false; }
    else
    {
       alert("Sus datos han sido recibidos, se procesarán en aprox 12 horas y recibirá un email con sus credenciales para ingresar al simulador");
        $('#submit').attr('disabled', 'disabled');
}
}


    
    
    $( "#num_doc" ).keyup(function( event ) {
  
  $("#num_documento").val($("#num_doc").val());
}).keydown(function( event ) {
  if ( event.which == 13 ) {
    event.preventDefault();
  }
});
 
</script>



@endsection


