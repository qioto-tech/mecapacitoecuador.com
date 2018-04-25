@extends('layouts.templateAdminProfesor')

    @section('menu_seccion')
        @include('layouts.partials.menu_adminProfesor')
    @endsection
    
	@section('name_seccion','Listado de cursos')

@section('content_seccion')


					  <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>id</th>
					        <th>Nombre</th>
					        <th>Estado</th>
					        <th>No. Estudiantes</th>
					        <th>Cobrado</th>
							<th>Pendiente</th>
							<th>Detalle</th>
					      </tr>
					    </thead>
					    <tbody>
					    @if( count ($lista_ordenes) > 0 )
					    	@foreach($lista_ordenes as $orden)
					      <tr>
					        <td>{{ $orden->id }}</td>
					        <td>{{ $orden->name }}</td>
					        <td>
					        	@if( $orden->state == 1 )
					        		Activo
					        	@else  
					        		Caducado
					        	@endif 
					        </td>
					        <td>{{ $orden->estudiantes }}</td>
					        <td>{{ $orden->pay }} </td>
					        <td>{{ $orden->estudiantes - $orden->pay }}  </td>
					        <td> <a onclick="return loadInfo({{ $orden->id }})">Ver</a> </td>
					      </tr>  
					      	@endforeach
					    @else      
					      <tr class="danger">
					        <td colspan="7">No hay registros</td>
					      </tr>
					    @endif  
					    </tbody>
					  </table>

@endsection

@section('script_seccion')
    
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> 

<script>
            

function loadInfo(id){
		var url = "{{ url('deposit/result/') }}"+ "/" + id;
		$.ajax({
			type: "GET",
			url: url,
			success: function(data){
				$.each(data, function(i, item) {
					if(item.flag != 'FAIL'){
						$("#resultado").html(item.value);	
					} else {
						$("#resultado").html(item.value);
					}							
				});	
			}
		});
		return false;
}
    
 
</script>
@endsection

