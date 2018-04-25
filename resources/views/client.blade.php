@extends('layouts.templateAdmin')

    @section('menu_seccion')
        @include('layouts.partials.menu_admin')
    @endsection
    
	@section('name_seccion','Registrar pago persona')
	
@section('content_seccion')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel  panel-primary">
                
				  <div class="modal fade" id="Modal-Subir-Archivo" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Registrar contacto</h4>
				        </div>
				        <div class="modal-body">
							{!! Form::open(['route' => 'update_client', 'method' => 'POST','id' => 'DataG', 'class'=>'form-horizontal']) !!}
							<div id="formulario">
							
							</div>
							
							{!!	csrf_field() !!}
							{!! Form::close() !!}
							<div class="form-group">
							    <div id="resultado" class="col-sm-offset-2 col-sm-10">
									
								</div>
							</div>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        </div>
				      </div>
				    </div>
				  </div>
				               
                <div class="panel-heading">Seguimiento de clientes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Listado</a></li>
						<li><a data-toggle="tab" href="#menu1">Mails enviados</a></li>
						<li><a data-toggle="tab" href="#menu2">Volver a contactar</a></li>
						<li><a data-toggle="tab" href="#menu3">Pagados</a></li>
					</ul>
					<div class="tab-content">
    					<div id="home" class="tab-pane fade in active">
						  <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>id</th>
						        <th>Cedula</th>
						        <th>Nombre</th>
						        <th>Email</th>
						        <th>Celular</th>
						        <th>Accion</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if( count ($lista_clientes) > 0 )
						    	@foreach($lista_clientes as $cliente)
						      <tr>
						        <td>{{ $cliente->id }}</td>
						        <td>{{ $cliente->ci }}</td>
						        <td>{{ $cliente->name }}</td>
						        <td>{{ $cliente->email }}</td>
						        <td>{{ $cliente->celular }}</td>
	
						        <td>
						        	@if(!$cliente->contacted)
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente->id }});">Ver Info</button>
						        		<button type="button" class="btn btn-xs btn-danger" onclick="sendEmail({{ $cliente->id }});">Enviar Mail</button>
						        	@else
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente->id }});">Ver Info</button>
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
	                    {{ $lista_clientes->links() }}
	                  	</div>
						<div id="menu1" class="tab-pane fade">
						  <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>id</th>
						        <th>Cedula</th>
						        <th>Nombre</th>
						        <th>Email</th>
						        <th>Celular</th>
						        <th>Accion</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if( count ($lista_clientes_enviados_mail) > 0 )
						    	@foreach($lista_clientes_enviados_mail as $cliente_em)
						      <tr>
						        <td>{{ $cliente_em->id }}</td>
						        <td>{{ $cliente_em->ci }}</td>
						        <td>{{ $cliente_em->name }}</td>
						        <td>{{ $cliente_em->email }}</td>
						        <td>{{ $cliente_em->celular }}</td>
	
						        <td>
						        	@if(!$cliente_em->contacted)
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_em->id }});">Ver Info</button>
						        		<button type="button" class="btn btn-xs btn-danger" onclick="sendEmail({{ $cliente_em->id }});">Enviar Mail</button>
						        	@else
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_em->id }});">Ver Info</button>
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
	                    {{ $lista_clientes_enviados_mail->links() }}
						</div>
						<div id="menu2" class="tab-pane fade">
						  <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>id</th>
						        <th>Cedula</th>
						        <th>Nombre</th>
						        <th>Email</th>
						        <th>Celular</th>
						        <th>Accion</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if( count ($lista_clientes_para_llamar) > 0 )
						    	@foreach($lista_clientes_para_llamar as $cliente_pll)
						      <tr>
						        <td>{{ $cliente_pll->id }}</td>
						        <td>{{ $cliente_pll->ci }}</td>
						        <td>{{ $cliente_pll->name }}</td>
						        <td>{{ $cliente_pll->email }}</td>
						        <td>{{ $cliente_pll->celular }}</td>
	
						        <td>
						        	@if(!$cliente_pll->contacted)
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_pll->id }});">Ver Info</button>
						        		<button type="button" class="btn btn-xs btn-danger" onclick="sendEmail({{ $cliente_pll->id }});">Enviar Mail</button>
						        	@else
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_pll->id }});">Ver Info</button>
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
	                    {{ $lista_clientes_para_llamar->links() }}
						</div>
						<div id="menu3" class="tab-pane fade">
						  <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>id</th>
						        <th>Cedula</th>
						        <th>Nombre</th>
						        <th>Email</th>
						        <th>Celular</th>
						        <th>Accion</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if( count ($lista_clientes_pagados) > 0 )
						    	@foreach($lista_clientes_pagados as $cliente_p)
						      <tr>
						        <td>{{ $cliente_p->id }}</td>
						        <td>{{ $cliente_p->ci }}</td>
						        <td>{{ $cliente_p->name }}</td>
						        <td>{{ $cliente_p->email }}</td>
						        <td>{{ $cliente_p->celular }}</td>
	
						        <td>
						        	@if(!$cliente_p->contacted)
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_p->id }});">Ver Info</button>
						        		<button type="button" class="btn btn-xs btn-danger" onclick="sendEmail({{ $cliente_p->id }});">Enviar Mail</button>
						        	@else
						        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadClient({{ $cliente_p->id }});">Ver Info</button>
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
	                    {{ $lista_clientes_pagados->links() }}
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

	function validar(){

		$("#submitTeacher").on("click", function() {

			var url = "{{ url('/update_client') }}";
			$.ajax({
				type: "POST",
				url: url,
				data: $('#DataG').serialize(),
				success: function(data){
					$.each(data, function(i, item) {
						if(item.flag != 'OK'){
							$("#resultado").html(item.value);
						} else {
							$("#resultado").html(item.value);
						}							
					});	
				}
			});
		});
		return false;
		
	}
	
	function loadClient(id){
		var url = "{{ url('/client') }}"+ "/" + id;
		$.ajax({
			type: "GET",
			url: url,
			success: function(data){
				$.each(data, function(i, item) {
						$("#formulario").html(item.value);							
				});	
			}
		});
		return false;	
	}

	
	function sendEmail(id){
		var url = "{{ url('/mailsend') }}"+ "/" + id;
		$( location ).attr("href", url);	
		
	}


</script>
@endsection
