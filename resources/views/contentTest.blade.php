@extends('layouts.templateContentTest')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection    	
   
   @section('content_seccion')
   
    	@if( count ($listp) > 0 )
    		@foreach($listp as $prods)    
    								
					<li class="portfolio-item">
						<img src="{{ URL::asset($prods->img_p) }}" class="img-responsive img-width-curse" alt="Me capacito ecuador.">
						<figcaption class="mask">
							<h3 data-toggle="modal" data-target="#Modal-Subir-Archivo" onclick="loadFrmOrder({{ $prods->id }});">{{ $prods->name }}</h3>
							<p>{{ $prods->legend }} </p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="{{ $prods->name }}" data-fancybox-group="works" href="{{ URL::asset($prods->img_g) }}"><i class="fa fa-search-plus"></i></a></li>
							<li><a href=""><i class="fa fa-share"></i></a></li>
						</ul>
					</li>

    		@endforeach
    	@else      
    		<h3>No hay registros</h3>
    	@endif       
   	
   
   @endsection 
    
   @section('script') 
        <script>
            
            function validate() {
                            
                             //  $( "#submit" ).prop( "disabled", true );
            
            	$( "#submit" ).hide();
                        var has_empty = false;
            
            	$(".form-horizontal").find( 'input[type!="hidden"]' ).each(function () {
            
              		if ( ! $(this).val() ) { has_empty = true; return false; 
              		}
            	});
            
            	if ( has_empty ) { 
            		alert("Debe llenar todos los campos");
            		$( "#submit" ).show( 2000 );
            		return false; }
            	else
            	{
            		//  $( "#DataG" ).submit();
            		return true;
            	}
            }

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