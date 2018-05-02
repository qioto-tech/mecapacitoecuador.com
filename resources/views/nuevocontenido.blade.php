@extends('layouts.templateEmpty')

    @section('menu_seccion')
        @include('layouts.partials.menu_adminProfesor')
    @endsection
    
	@section('name_seccion','Descripcion')

@section('content_seccion')



					  <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>id</th>
					        <th>Nombre</th>
					        <th>Estado</th>
							<th>Detalle</th>
							<th>Contenidos</th>
					      </tr>
					    </thead>
					    <tbody>
					    @if( count ($lista) > 0 )
					    	@foreach($lista as $curso)
					      <tr>
					        <td>{{ $curso->id }}</td>
					        <td>{{ $curso->name }}</td>
					        <td>
					        	@if( $curso->state == 1 )
					        		Activo
					        	@else  
					        		Caducado
					        	@endif 
					        	<input type="hidden" id="id_{{ $curso->id }}" name="id_{{ $curso->id }}" value="{{ $curso->id }}">
					        </td>
					        <td>
					        	@if( $curso->detalle == 0 )
					        		<a href="#" data-toggle="modal" data-target="#Modal-frminfo" onclick="return loadId1({{ $curso->id }})">Ingresar</a> 
					        	@else
					        		<a href="#" data-toggle="modal" data-target="#Modal-frmdetalles-up" onclick="return mostrarDescripcion({{ $curso->id }})">Editar</a> 
					        	@endif	
					        </td>
					        <td>
					        	 
					        	@if( $curso->contenido == 0 )
					        		<a href="#" data-toggle="modal" data-target="#Modal-frmdetalles" onclick="return loadId2({{ $curso->id }})">Ingresar</a> 
					        	@else
					        		<a href="#" data-toggle="modal" data-target="#Modal-frmdetalles" onclick="return mostrarSilabos({{ $curso->id }})">Revisar</a>
					        	@endif	
					        </td>
					      </tr>  
					      	@endforeach
					    @else      
					      <tr class="danger">
					        <td colspan="7">No hay registros</td>
					      </tr>
					    @endif  
					    </tbody>
					  </table>
					  
                            <!-- Modal -->
                            <div id="Modal-frminfo" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Detalles del modulo</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                    
                    					<div class="panel panel-default">
                        					<div class="panel-heading">Datos del curso</div>
                        					<div class="panel-body" id="content-body-1">
												@include('layouts.partials.frmdetallecurso')

                    	          			</div>
                      					</div>
                                    
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
					  
                            <!-- Modal -->
                            <div id="Modal-frmdetalles" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Resumen del Modulo</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                    
                    					<div class="panel panel-default">
                        					<div class="panel-heading">Resumen del contenido</div>
                        					<div class="panel-body" id="content-body">
                        						@include('layouts.partials.frmContenidosCurso')
                        						
                    	          			</div>
                      					</div>
                                    
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
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
                        					{!! Form::open(['url' => 'product/update', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
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
		
@endsection


@section('script_seccion')
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> 

<script>
    
    $("#reset").on("click", function() {
    	var url = "{{ url('/contenidos') }}";
    	$( location ).attr("href", url);
    });	  

    function loadId1(id){ 
    	$("#id").val($("#id_" + id).val());
    }
    function loadId2(id){ 
    	$("#id_product").val($("#id_" + id).val());
    }   
    function mostrarDescripcion(id){
		var url = "{{ url('descripcion') }}"+ "/" + id;
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
    
    function mostrarSilabos(id){
		var url = "{{ url('silabos') }}"+ "/" + id;
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
