@extends('layouts.templateNews')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection

    @section('content_news')
    	@if( count ($list_news) > 0 )
    		@foreach($list_news as $news)    								
				<div class="message-body">
					<h3>{{$news->title}}</h3>
					<img src="{{$news->file}}" class="pull-left img-margen" alt="member">
					<p>{!!$news->summary!!}</p>
					<p>
						<a href="{{$news->url}}" target="_blank" class="btn btn-border btn-effect pull-right">Mas</a>
					</p>

				</div>
    		@endforeach
    	@else      
    		<h3>No hay registros</h3>
    	@endif       
	@endsection    								
    
  
    @section('content_notes')
    	@if( count ($list_notes) > 0 )
    		@foreach($list_notes as $news)    
    								
					<div class="work-item">
						<p>{{$news->abstract}}</p>
					</div>
    									

    		@endforeach
    	@else      
    		<h3>No hay registros</h3>
    	@endif       
	@endsection    								


