@extends('layouts.templateContenidoModulo')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection

@section('name_seccion','Descripcion')

@section('content_seccion')

<div class="content-inner">
					    @if( count ($cursos) > 0 )
					    	@foreach($cursos as $curso)		
					    	<div class="btn-accion">
								<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#Modal-frm" onclick="loadFrmOrder({{ $curso->id }});" >Inscribirse</button>
							</div>
                            	<h2>{{ $curso->name }}</h2>
                                <div class="col-sm-3">
                                	<img src="{{ URL::asset($curso->img_g) }}" class="img-responsive img-width-curse" alt="Me capacito ecuador.">
                               
                               </div>
                               <div class="col-sm-9">
                                <p>
                            	    <strong class="body-2-text">Acerca del curso: </strong>{!! $curso->description !!}
                                    <br>
                                    <div align=center width=100%>
                                        <table class="table-bordered tabla-descripcion">
                                        	<tbody>
                                        		<tr>
                                        			<td class="td_content">
                                        				<i class="far fa-file-alt"></i><span class="td-title">&nbsp;&nbsp;Autor</span>
                                
                                        			</td>
                                        			<td class="td_content">
                                                    	{{ $curso->autor }} 
                                        			</td>
                                        		</tr>
                                                <tr>
                                                	<td class="td_content">
                                                		<i class="far fa-check-circle"></i><span class="td-title">&nbsp;&nbsp;Nivel</span>
                                                	</td>
                                                	<td class="td_content">{{ $curso->level }}</td>
                                                </tr>
                                                <tr>
                                                	<td class="td_content">
                                                		<i class="far fa-clock"></i><span class="td-title" data-reactid="179">&nbsp;&nbsp;Duracion</span>
                                                	</td>
                                                	<td class="td_content">{{ $curso->commitment }}</td>
                                                </tr>
                                                <tr>
                                                	<td class="td_content">
                                                		<i class="far fa-comment-alt"></i><span class="td-title" data-reactid="184">&nbsp;&nbsp;Idioma</span>
                                                	</td>
                                                	<td class="td_content">
                                                		<div class="language-info" data-reactid="186"><div class="rc-Language" data-reactid="187"><!-- react-text: 188 -->{{ $curso->language }}<!-- /react-text --></div></div>
                                                	</td>
                                                </tr>
                                                <tr>
                                                	<td class="td_content">
                                                		<i class="fas fa-graduation-cap"></i><span class="td-title" data-reactid="192">&nbsp;&nbsp;Como se aprueba</span>
                                                	</td>
                                                	<td class="td_content">{{ $curso->how_to_pass }}</td>
                                                </tr>
                                                <tr>
                                                	<td class="td_content">
                                                		<i class="fas fa-dollar-sign"></i><span class="td-title" data-reactid="192">&nbsp;&nbsp;Precio</span>
                                                	</td>
                                                	<td class="td_content">{{ $curso->amount }}</td>
                                                </tr>
                                        	</tbody>
                                        </table>
                                      </div>
                                </p>
                                </div>
    						@endforeach

					    @endif  
    <br>
    <div class="col-sm-12">
    <p>
					    @if( count ($listaModulos) > 0 )
					    	@foreach($listaModulos as $modulos)		
    							
    							    <div class="panel panel-warning">
                                      <div class="panel-heading">{{ $modulos->week }}</div>
                                      <div class="panel-body">{!! $modulos->description !!}</div>
                                    </div>
    							
					      	@endforeach

					    @endif  

    </p>
    </div>
					    	<div class="btn-accion">
								<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#Modal-frm" onclick="loadFrmOrder({{ $curso->id }});" >Inscribirse</button>
							</div>
							
</div>



							
@endsection

@section('script_seccion') 
        <script>
         	function loadFrmOrder(id){
				var url = "{{ url('forma/') }}"+ "/" + id ;
        		$.ajax({
        			type: "GET",
        			url: url,
        			ajaxStart: function(){
        				     // Handle the beforeSend event
        				
        				   },
        			success: function(data){
        				$.each(data, function(i, item) {
        						if(item.flag != 'OK'){
        							$("#content-frm").html(item.value);		

								} else {
									$("#content-frm").html(item.value);		
								}												
        				});	
        			},
        			complete: function(){
        				$("#preloader").fadeOut("slow");
        			},
        		});
        		return false;
				
            }
      </script>

@endsection
            