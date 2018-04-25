@extends('layouts.template')

@section('title', 'Elegible')

@section('script')
@endsection



@section('info')
              <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="#"><img src="{{ URL::asset('images/elegible.jpg') }}" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Buscar elegible</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Sep <strong>1</strong></span>
                    <h2><a href="#">Verifica si eres elegible</a></h2>	<br><br>
                  </div>
                  <div>
                  	<p>
						{!! Form::open([null, null, 'class'=>'form-inline', 'role'=>'form','name'=>'frmsearch','id'=>'frmsearch']) !!}
						  <div class="form-group ui-widget">
						    <label class="sr-only" for="name">Numero de cedula</label>
						    {!!	Form::text('ci',null,['class'=>'form-control', 'placeholder'=>'Introduce el numero de cedula','size'=>'60', 'id'=>'ci_1', 'name'=>'ci_1']) !!}       
						  </div>
						  <button type="button" class="btn btn-default" id="btn-search-elegible">Buscar elegible</button>
						
						{!! Form::close() !!}
                  	</p>
                  	<p>
          <table id="grid-elegible" class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Criterio</th>
                <!--<th>Por conocimiento</th>-->
              </tr>
            </thead>
			<tfoot>
			<tr>
				<th colspan="5">
				
				</th>
			</tr>
			</tfoot>            
            <tbody>
            </tbody>
          </table>	
                  	</p>
                  </div>
                   <br> 
                      <?php
                   
                    $personalidad4=utf8_encode("Para verificar los archivos oficiales del Ministerio de Educaci&oacute;n de donde se obtiene esta informaci&oacute;n has click  ");
                    ?>
<p>{!!$personalidad4!!} <a target="_blank" href="https://educacion.gob.ec/quiero-ser-maestro-6/">aqui...</a></p>
<p>Si tienes alguna duda al respecto de tu elegibilidad comunicate a quierosermaestro@educacion.gob.ec </p>
 
                </div>
                  
                  
              </div>
            </div>
<br><br>	

@endsection

