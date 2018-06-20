@extends('layouts.templateAdminProfesor') @section('menu_seccion')
@include('layouts.partials.menu_adminProfesor') @endsection

@section('name_seccion','Listado de cursos') @section('content_seccion')

<button type="button" class="btn btn-primary  btn-lg"
	data-toggle="modal" data-target="#myModal">Nuevo Curso</button>
<br />
<table class="table table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Grupo</th>
			<th>Estado</th>
			<th>Detalles</th>
			<th>Contenido</th>
			<th>Imagen</th>
			<th>Valores</th>
		</tr>
	</thead>
	<tbody>
		@if( count ($lista_cursos) > 0 ) @foreach($lista_cursos as $orden)
		<tr>
			<td>{{ $orden->id }}</td>
			<td>{{ $orden->name }}</td>
			<td>{{ $orden->id_product }}</td>
			<td>@if( $orden->state == 1 ) Activo @else Inactivo @endif</td>
			<td><a data-toggle="modal" data-target="#myModalDetalle"
				onclick="return loadDetalles({{ $orden->id }})">Ver</a></td>
			<td><a onclick="return loadContenido({{ $orden->id }})">Ver</a></td>
			<td><a data-toggle="modal" data-target="#myModalImage"
				onclick="return loadIdCurso({{ $orden->id }})">Cargar</a></td>
			<td><a onclick="return loadInfo({{ $orden->id }})">Ver</a></td>
		</tr>
		@endforeach @else
		<tr class="danger">
			<td colspan="7">No hay registros</td>
		</tr>
		@endif
	</tbody>
</table>

@endsection @section('content_formulario') {!! Form::open(['url' =>
'product/save', 'method' => 'POST','class' => 'form-horizontal',
'files'=>true, 'id'=>'frm-producto', 'enctype'=>'multipart/form-data'])
!!}
<div class="form-group">
	<label class="control-label col-sm-2" for="title">Nombre curso:</label>
	<div class="col-sm-10">{!!
		Form::text('name',null,['class'=>'form-control',
		'placeholder'=>'Introduce el nombre del curso','size'=>'60',
		'id'=>'name', 'name'=>'name']) !!}</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="title">Grupo:</label>
	<div class="col-sm-10">{!!
		Form::select('id_product',$lista_cursos_padres,['class'=>'form-control','size'=>'60',
		'id'=>'id_product', 'name'=>'id_product']) !!}</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" for="description">Descripcion:</label>
	<div class="col-sm-10">
		<textarea class="form-control ckeditor" name="description"
			id="description" rows="10" cols="80"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="abstract">Resumen:</label>
	<div class="col-sm-10">
		<textarea class="form-control ckeditor" name="legend" id="legend"
			rows="10" cols="80"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="date_input">Costo del curso:</label>
	<div class="col-sm-10">{!!
		Form::text('costocurso',null,['class'=>'form-control',
		'placeholder'=>'coloque su precio (4.99)','size'=>'60',
		'id'=>'costocurso', 'name'=>'costocurso']) !!}</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<input type="hidden" id="code" name="code" value="0"> <input
			type="hidden" id="state" name="state" value="0"> <input type="hidden"
			id="promotion" name="promotion" value="0"> <input type="hidden"
			id="amount" name="amount" value="0"> <input type="hidden"
			id="id_user" name="id_user" value="{{ Auth::user()->id }}"> <input
			id="submit" name="submit" value="Grabar" class="btn btn-danger"
			type="submit" /> <input id="reset" name="reset" value="Cancelar"
			class="btn btn-danger" type="reset" />
	</div>
</div>

{!! csrf_field() !!} {!! Form::close() !!} @endsection

@section('script_seccion')

<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<link rel="stylesheet"
	href="{{ URL::asset('assets/dropzone/dropzone.css') }}">
<script src="{{ URL::asset('assets/dropzone/dropzone.js') }}"></script>
<script src="{{ URL::asset('assets/dropzone/dropzone-config.js') }}"></script>



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
    
function loadIdCurso(id){
	$("#id").val(id);
}

function loadDetalles(id){
	var url = "{{ url('descripcion') }}"+ "/" + id;
	$.ajax({
		type: "GET",
		url: url,
		success: function(data){
			$.each(data, function(i, item) {
				if(item.flag != 'FAIL'){
					$("#contenidoDetalleCurso").html(item.value);	
				} else {
					$("#contenidoDetalleCurso").html(item.value);
				}							
			});	
		}
	});
	return false;
	
}
function loadContenido(id){
	var url = "{{ url('contenidoCurso') }}"+ "/" + id;
	$.ajax({
		type: "GET",
		url: url,
		success: function(data){
			$.each(data, function(i, item) {
				if(item.flag != 'FAIL'){
					$("#resultado").html(item.value);
					$("#id_product").val(id)
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

