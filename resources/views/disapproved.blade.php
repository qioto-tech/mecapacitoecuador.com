@extends('layouts.template_helpme')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection    	




@section('sub-title', 'Error en el pago')

@section('content_seccion')
 
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#"></a>
                  <div class="stuff_article_inner"> <span class="stuff_date"></span>
                    <h2><a href="#">Algun problema con la forma de pago</a></h2>

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
		              	<td>Curso</td> 
		                <td>{{ $dato->product_description }}</td>
		              </tr>
		              <tr> 
		              	<td>Email</td> 
		                <td>{{ $dato->customer_email }}</td>
		              </tr>		              
		              <tr> 
		              	<td>Usuario</td> 
		                <td><span style="color: red">{{ $usuario }}</span></td>
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

@section('script')


	
	<script>



    $(".imagens").attr("src","{{ URL::asset('img/model-2017/capacitate.jpg') }}");

</script>
@endsection

