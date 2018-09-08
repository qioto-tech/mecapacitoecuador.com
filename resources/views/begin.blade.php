@extends('layouts.templateBegin')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection

@section('content_seccion_cursos')
					    @if( count ($cursos) > 0 )
					    	@foreach($cursos as $curso)		
    							<li class="portfolio-item">
 								<a href="{{ URL::asset('/revisar') }}/{{$curso->id}}">
    							   
    								
    									<img src="{{ URL::asset($curso->img_p) }}" class="img-responsive img-width-curse" alt="Me capacito ecuador.">
    								

    								<figcaption class="mask">
    									<h3>{{ $curso->name }}</h3>
    									<p>{!! substr ($curso->description, 0,60 ) !!}...</p>
    								</figcaption>
    								<ul class="external">
    									<li><a class="fancybox" title="{{ $curso->name }}" data-fancybox-group="works" href="{{ URL::asset($curso->img_g) }}"><i class="fa fa-search-plus"></i></a></li>
    									<li><a href=""><i class="fa fa-share"></i></a></li>
    								</ul>
								</a>
    							</li>
					      	@endforeach

					    @endif  
							
@endsection

@section('content_seccion_simuladores')
					    @if( count ($simuladores) > 0 )
					    	@foreach($simuladores as $simulador)		
 							<li class="portfolio-item">
     						<a href="{{ URL::asset('/revisar') }}/{{$simulador->id}}">	
 																						
 							  	
									<img src="{{ URL::asset($simulador->img_p) }}" class="img-responsive img-width-curse" alt="Me capacito ecuador.">
								

								<figcaption class="mask">
									<h3>{{ $simulador->name }}</h3>
									<p>{!! substr ($simulador->description, 0,60 ) !!}</p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="{{ $simulador->name }}" data-fancybox-group="works" href="{{ URL::asset($simulador->img_g) }}"><i class="fa fa-search-plus"></i></a></li>
									<li><a href=""><i class="fa fa-share"></i></a></li>
								</ul>
							</a>
							</li>   							

					      	@endforeach

					    @endif  
							
@endsection