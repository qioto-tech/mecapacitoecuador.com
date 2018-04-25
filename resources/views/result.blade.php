@extends('layouts.template')

@section('title', 'Inscripto')

@section('script')

<script>

function view_parameters(param,note){
	var url = "{{ url('parameters/result/') }}"+ "/" + param + "/" + note;
	$.ajax({
		type: "GET",
		url: url,
		success: function(data){
			$.each(data, function(i, item) {
					$(".modal-body").html(item.value);							
			});	
		}
	});
	return false;
}
</script>

@endsection



@section('info')
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="{{ URL::asset('images/capacitate.jpg') }}" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Ingreso al simulador</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Resultado de las pruebas</a></h2>
                    <p>
						{!! Form::open([null, null, 'class'=>'form-horizontal', 'role'=>'form','name'=>'frmvalidate','id'=>'frmvalidate']) !!}
						  <div class="form-group">
						  	<label class="control-label col-sm-2" for="name">Usuario</label>
						  	<div class="col-sm-8">
						    	{!!	Form::text('usuario',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero el usuario','size'=>'40', 'id'=>'usuario', 'name'=>'usuario']) !!}       
						  	</div>
						  </div>	
						  <div class="form-group">
						    <label class="control-label col-sm-2" for="name">Contrase&ntilde;a</label>
						    <div class="col-sm-8">
						    	{!!	Form::password('password',['class'=>'form-control', 'id'=>'password', 'name'=>'password']) !!}       
						  	</div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2" for="name">Sexo</label>
						    <div class="col-sm-8">
						    	{!!	Form::select('sexo',['1' => 'Hombre', '2' => 'Mujer'],null,['class'=>'form-control', 'placeholder'=>'Selecciona tu sexo', 'id'=>'sexo', 'name'=>'sexo']) !!}       
						  	</div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-2" for="name">Intentos</label>
						    <div class="col-sm-8">
						    	{!!	Form::select('attempt',['1' => 'Primer Intento', '2' => 'Segundo Intento', '3' => 'Tercero Intento', '4' => 'Cuarto Intento', '5' => 'Quinto Intento', '6' => 'Sexto Intento', '7' => 'Septimo Intento', '8' => 'Octavo Intento', '9' => 'Noveno Intento', '10' => 'Decimo Intento'],null,['class'=>'form-control', 'placeholder'=>'Selecciona el intento', 'id'=>'attempt', 'name'=>'attempt']) !!}       
						  	</div>
						  </div>
						  <div class="form-group">
    						<div class="col-sm-offset-2 col-sm-8">						  
						  		<button type="button" class="btn btn-default" id="btn-validate">Ver resultados</button>
							</div>
  						  </div>
						{!! Form::close() !!}
                    
                    </p>
					<p>
					<div class="panel panel-default" id="resultado-test">
    					<div class="panel-heading">Resultado</div>
    					<div class="panel-body" id="content-body">
	          			</div>
  					</div>
					</p>
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					
					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Interpretaci&oacute;n del parametro</h4>
					      </div>
					      <div class="modal-body">
					        <p>Some text in the modal.</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					
					  </div>
					</div>
						
					<p>
					<div class="panel panel-default">
    					<div class="panel-heading">Descripci&oacute;n de la nomenclatura</div>
    					<div class="panel-body" id="content-body">
    						<table class="table table-bordered  table-hover">
    							<tr>
    								<td>Hs</td>
    								<td>Hipocondr&iacute;a</td>
    							</tr>
    							<tr>
    								<td>D</td>
    								<td>Depresi&oacute;n</td>
    							</tr>
    							<tr>
    								<td>Hy</td>
    								<td>Histeria</td>
    							</tr>
    							<tr>
    								<td>Pd</td>
    								<td>Psicopat&iacute;a</td>
    							</tr>
    							<tr>
    								<td>Mf</td>
    								<td>Masculinidad/Feminidad</td>
    							</tr>
    							<tr>
    								<td>Pa</td>
    								<td>Paranoia</td>
    							</tr>
    							<tr>
    								<td>Pt</td>
    								<td>Psicastenia</td>
    							</tr>
    							<tr>
    								<td>Sc</td>
    								<td>Esquizofrenia</td>
    							</tr>
    							<tr>
    								<td>Ma</td>
    								<td>Hipoman&iacute;a</td>
    							</tr>
    							<tr>
    								<td>Si</td>
    								<td>Introversi&oacute;n Social </td>
    							</tr>
    						</table>
	          			</div>
  					</div>
					</p>	
                  </div>
                </div>
              </div>
            </div>
<br><br>
@endsection

@section('content')



<script>

</script>
@endsection