@extends('layouts.template')

@section('title', 'Actualizar pago')

@section('script')
@endsection



@section('sub-title', 'Actualizar pago')

@section('info')
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="{{ URL::asset('images/idoneo.jpg') }}" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Buscar idoneo</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Pendientes de actualizar </a></h2>	<br><br>
                  </div>
                  <div>
                  	<p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>Code</td>
									<td>Curso</td>
									<td>Valor</td>
									<td>Documento</td>
									<td>Accion</td>
								</tr>
							</thead>
    						<tbody>
							@foreach($datos as $dato)
								<tr>
									<td>{{ $dato->code }}</td>
									<td>{{ $dato->product_description }}</td>
									<td>{{ $dato->product_amount }}</td>
									<td><a href="{{ URL::asset($dato->document_path) }}" target="_blank">{{ $dato->document_number }}</a></td>
									<td><a href="{{ URL::asset('/autorizar/'.$dato->id) }}"> {{ $dato->state }}</a></td>
								</tr>
							@endforeach	 
							</tbody>
						</table>
                  	</p>

                  </div>
                    
                </div>
              
                       </div>
              
              
            </div>
<br><br>

@endsection


