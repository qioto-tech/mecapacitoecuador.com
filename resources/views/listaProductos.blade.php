@extends('layouts.templateAdmin')

    @section('menu_seccion')
        @include('layouts.partials.menu_admin')
    @endsection
    
	@section('name_seccion','Listado de productos')

@section('content_seccion')


    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>PVP</th>
                <th>Costo</th>
                <th>Promocion</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>tarea</th>
                </tr>
            </thead>
            <tbody>
            @if( count ($listadoProductos) > 0 )
                @foreach($listadoProductos as $curso)
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->name }}</td>
                        <td>{{ $curso->amount }}</td>
                        <td>{{ $curso->costocurso }}</td>
                        @if( $curso->promotion == 1 )
                        	<td>Si</td>
                        @else 
                        	<td>No</td>
                        @endif
                        @if( $curso->type == 1 )
                        	<td>Simulador</td>
                        @else 
                        	<td>Curso</td>
                        @endif
                        @if( $curso->state == 1 )
                        	<td>Publicado</td>
                        @else 
                        	<td>No publicado</td>
                        @endif
                        <td>
                            <a href="#" data-toggle="modal" data-target="#Modal-frmdetalles-up" onclick="return mostrarFrmCurso({{ $curso->id }})">Editar</a> 
                        </td>
                    </tr>      
                @endforeach
            @else      
            <tr class="danger">
            <td colspan="7">No hay registros para autorizar</td>
            </tr>
            @endif  
            </tbody>
        
        </table>
    </div> 


<div class="container">
	<div class="row">
		<div class="col-sm-12">

            <!-- Modal -->
            <div id="Modal-frmdetalles-up" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detalles curso</h4>
                  </div>
                  <div class="modal-body">
                    <p></p>
                    
    					<div class="panel panel-default">
        					<div class="panel-heading">Descripcion</div>
        					{!! Form::open(['url' => 'product/updateAdmin', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
        					<div class="panel-body" id="content-body-3">
        						
        						
    	          			</div>
         					{!!	csrf_field() !!}
        					{!! Form::close() !!}                   	          			
      					</div>
                    
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
            
              </div>
            </div>
			
		</div> 
    </div>

</div>
@endsection

@section('script_seccion')
    
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> 

<script>
    
function sendActivation(id){
	var url = '{{ URL::asset('/autorizar/') }}' + '/' + id;
	$(location).attr("href", url);
	
}


function mostrarFrmCurso( id ){
	var url = "{{ url('editarCurso') }}"+ "/" + id;
	$.ajax({
		type: "GET",
		url: url,
		success: function(data){
			$.each(data, function(i, item) {
				if(item.flag != 'FAIL'){
					$("#content-body-3").html(item.value);	
				} else {
					$("#content-body-3").html(item.value);
				}							
			});	
		}
	});
	return false;
	
}

</script>
@endsection

