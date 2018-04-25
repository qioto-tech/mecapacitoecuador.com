@extends('layouts.template_helpme')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection    	


@section('sub-title', 'Aceptado')

@section('content_seccion')
 
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> 
                  <div class="stuff_article_inner"> 
                    <h2><a href="#">Pago realizado</a></h2>

					<p>
			          <table class="table table-bordered  table-hover">
			            <thead>
			              <tr>
			                <th>#</th>
			                <th>Descripcion</th>
			              </tr>
			            </thead>
			            <tbody>
                    
                    @foreach($datos as $dato)
		              <tr> 
		              	<td>Cedula</td> 
		                <td>{{ $dato->customer_ci }}</td>
		              </tr>
		              <tr>
		                <td>Nombre</td>
		                <td>{{ $dato->customer_name }}</td>
		              </tr>
		              <tr> 
		              	<td>Apellido</td> 
		              	<td>{{ $dato->customer_lastname }}</td>
		              </tr>
		              <tr> 
		              	<td>Email</td> 
		                <td>{{ $dato->customer_email }}</td>
		              </tr>		              
		              <tr> 
		              	<td>Usuario</td> 
		                <td><span style="color: red">{{ $usuario }}</span></td>
		              </tr>
		              <tr> 
		              	<td>Password</td> 
		                <td><span style="color: red">{{ $password }}</span></td>
		              </tr>
                    	@foreach($list_product as $product)
 		              <tr> 
		              	<td>Curso</td> 
		                <td><span style="color: red">{{ $product->pname }}</span></td>
		              </tr>
		              <tr> 
		              	<td>Clave</td> 
		                <td><span style="color: red">{{ $product->pcode }}</span></td>
		              </tr>
                    
                     	@endforeach	 
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

@section('script')

	<script>

</script>
@endsection

