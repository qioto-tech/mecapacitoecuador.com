@extends('layouts.templateBegin')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection

@section('content_seccion')
					    @if( count ($lista) > 0 )
					    	@foreach($lista as $curso)		

    							<li class="portfolio-item">
    								<img src="{{ URL::asset($curso->img_p) }}" class="img-responsive img-width-curse" alt="Me capacito ecuador.">
    								<figcaption class="mask">
    									<h3><a href="{{ URL::asset('/revisar') }}/{{$curso->id}}">{{ $curso->name }}</a></h3>
    									<p>{!! substr ($curso->description, 0,60 ) !!}...</p>
    								</figcaption>
    								<ul class="external">
    									<li><a class="fancybox" title="{{ $curso->name }}" data-fancybox-group="works" href="{{ URL::asset($curso->img_g) }}"><i class="fa fa-search-plus"></i></a></li>
    									<li><a href=""><i class="fa fa-share"></i></a></li>
    								</ul>
    							</li>
					      	@endforeach

					    @endif  
							
@endsection