@extends('layouts.templateAdmin')

    @section('menu_seccion')
        @include('layouts.partials.menu_admin')
    @endsection
    
	@section('name_seccion','Noticias a publicar')
	
    @section('content_seccion')
        
        			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal"  onclick="openLink();">Nueva Noticia</button>
					  <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>id</th>
					        <th>Titulo</th>
					        <th>Resumen</th>
					        <th>fecha publicacion</th>
					        <th>Estado</th>
					        <th>Accion</th>
					      </tr>
					    </thead>
					    <tbody>
					    @if( count ($list_news) > 0 )
					    	@foreach($list_news as $news)
					      <tr>
					        <td>{{ $news->id }}</td>
					        <td>{{ $news->title }}</td>
					        <td>{{ $news->abstract }}</td>
					        <td>{{ $news->date_end }}</td>
					        <td>{{ $news->state }}</td>
					        <td>
					        	 @if( $news->state == 1 )
					        		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadOrder({{ $news->id }});">Desactivar</button>
					        		<button type="button" class="btn btn-xs btn-danger" onclick="sendActivation({{ $news->id }});">Activar</button>
					        	 @else  
					        	 	<button type="button" class="btn btn-xs btn-danger" onclick="sendActivation({{ $news->id }});">Activar</button>
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
     
        
    @endsection
	@section('script_seccion')
		<script>
			function openLink(){
                var url = "nuevo";    
                $(location).attr('href',url);
			}
    	</script>
	@endsection