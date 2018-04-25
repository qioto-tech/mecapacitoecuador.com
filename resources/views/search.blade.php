@extends('layouts.template')

@section('title', 'Busqueda')

@section('script')
@endsection

@section('info')
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="{{ URL::asset('images/capacitate.jpg') }}" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Buscar idoneo</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Verifica si eres idoneo</a></h2>	<br><br>
                  </div>
                  <div>
                  	<p>

                  	</p>
                  	<p>
          <table id="grid-elegible" class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th></th>
                <th>Detalle</th>
              </tr>
            </thead>
            	@if (count($datos) === 1)
            		@foreach($datos as $value)
		            	<tr id="">
		    				<td>CI : </td>
		    				<td>{{ $value->ci }}</td>
		    			</tr>
		     			<tr id="$value->id">
		    				<td>Nombre : </td>
		    				<td>{{ $value->name }}</td>
		    			</tr>
		    			<tr id="$value->id">
		    				<td>Personalidad : </td>
		    				<td>{{ $value->personalidad }}</td>
		    			</tr>
		    			<tr id="$value->id">
		    				<td>Razonamiento : </td>
		    				<td>{{ $value->razonamiento }}</td>
		    			</tr>
		    			<tr id="$value->id">
		    				<td>Su estado es : </td>
		    				<td><span style='color:#d9534f'>{{ $selection }}</span></td>
		    			</tr>
            
 		           	@endforeach	 
 		        @else
    				<tr>
		    				<td colspan="2">No se encontro en la base de datos</td>
		    		</tr>
				@endif   	
            	
			<tfoot>
			<tr>
				<th colspan="2">
				
				</th>
			</tr>
			</tfoot>            
            <tbody>
            </tbody>
          </table>
                  	
                  	</p>
                  </div>
                </div>
              </div>
            </div>
<br><br>	
@endsection

