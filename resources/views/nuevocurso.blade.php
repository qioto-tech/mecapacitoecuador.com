@extends('layouts.templateEmpty')

    @section('menu_seccion')
        @include('layouts.partials.menu_adminProfesor')
    @endsection
    
	@section('name_seccion','Nuevos cursos')

@section('content_seccion')
		
					{!! Form::open(['url' => 'product.save', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Nombre curso:</label>
							<div class="col-sm-10">
								{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Introduce el nombre del curso','size'=>'60', 'id'=>'name', 'name'=>'name']) !!}
							</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="description">Descripcion:</label>
					    	<div class="col-sm-10">
					      		<textarea class="form-control ckeditor" name="description" id="description" rows="10" cols="80"></textarea>
					    	</div>
					  	</div>
						<div class="form-group">
					    	<label class="control-label col-sm-2" for="abstract">Resumen:</label>
					    	<div class="col-sm-10">
					      		<textarea class="form-control ckeditor" name="legend" id="legend" rows="10" cols="80"></textarea>
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="date_input">Costo del curso:</label>
					    	<div class="col-sm-10">
					      		{!! Form::text('costocurso',null,['class'=>'form-control', 'placeholder'=>'coloque su precio (4.99)','size'=>'60', 'id'=>'costocurso', 'name'=>'costocurso']) !!}
					    	</div>
					  	</div>

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						    	<input type="hidden" id="code" name="code" value="0">
    						    <input type="hidden" id="state" name="state" value="0">
    						    <input type="hidden" id="promotion" name="promotion" value="0">
    						    <input type="hidden" id="amount" name="amount" value="0">
    						    <input type="hidden" id="id_user" name="id_user" value="{{ Auth::user()->id }}">
								<input id="submit" name="submit" value="Grabar"  class="btn btn-danger"  type="bottom"  />
								<input id="reset" name="reset" value="Cancelar"  class="btn btn-danger"  type="reset"  />
							</div>
						</div>
		
					{!!	csrf_field() !!}
					{!! Form::close() !!}
@endsection

@section('content_seccion_rigth')
	@include('layouts.partials.formImagen')
@endsection

@section('script_seccion')
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('assets/dropzone/dropzone.css') }}">
	<script src="{{ URL::asset('assets/dropzone/dropzone.js') }}"></script> 
	<script src="{{ URL::asset('assets/dropzone/dropzone-config.js') }}"></script> 
    
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> 

<script>

    $("#submit").on("click", function() {
    	if( $("#name").val() === '' ){
    		alert('Se requiere un titulo del curso');
    	} else {
    		var url = "{{ url('/product/save') }}";
    		 $("#description").val(CKEDITOR.instances.description.getData()) ;
    		 $("#legend").val(CKEDITOR.instances.legend.getData()) ;
    		$.ajax({
    			type: "POST",
    			url: url,
    			data: $('#frm-producto').serialize(),
    			success: function(data){
    				$.each(data, function(i, item) {
    					if(item.flag != 'FAIL'){
    						$("#id").val(item.value);
    						alert('Curso guardado correctamente');
    					} else {
    						alert('No se guardado correctamente el curso!!!');
    					}							
    				});	
    			}
    		});
    	}
    	return false;
    });
    
    $("#reset").on("click", function() {
    	var url = "{{ url('/curso') }}";
    	$( location ).attr("href", url);
    });	   
 
</script>
@endsection
