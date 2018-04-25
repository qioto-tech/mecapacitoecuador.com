@extends('layouts.templateContenidoModulo')


@section('menu_seccion')
	@include('layouts.partials.menu')
@endsection


@section('name_seccion', 'Pago por deposito')


@section('content_seccion')
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="{{ URL::asset('images/idoneo.jpg') }}" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner">
                  <div class="stuff_article_inner"> <span class="stuff_date">
                    <h2><a href="#">Datos para realizar el pago </a></h2>	<br><br>
                  </div>
                  <div>
                  	<p>
						Para realizar los pagos via transferencia o deposito, revisar en la parte inferior los datos de la cuenta. 
						
						
						<table class="table table-hover">
						<thead>
							<tr>
								<td>Datos</td>
								<td></td>
							</tr>
						</thead>
    						<tbody>	
							<tr>
								<td>Banco: </td>
								<td>Banco del Pichincha</td>
							</tr>
							<tr>
								<td>Tipo de cuenta: </td>
								<td>Cuenta de Ahorros</td>
							</tr>
							<tr>
								<td>No. cuenta: </td>
								<td>5086202600</td>
							</tr>
							<tr>
								<td>Nombre: </td>
								<td>Renato Lopez</td>
							</tr>
							<tr>
								<td>Cedula: </td>
								<td>0602765935</td>
							</tr>
							</tbody>
						</table>
						Una vez que se realice el pago favor subir el comprobante de deposito, en la siguiente url: busque por su orden de pedido.
						url : <span style="color: red"><a href="{{ URL::asset('/deposito/'.$datos) }}">Registrar su Dep&oacute;sito</a></span>
						 
                  	</p>

                  </div>
                    
                </div>
              
                       </div>
              
              
            </div>
<br><br>

@endsection


