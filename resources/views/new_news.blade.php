@extends('layouts.templateAdmin')

    @section('menu_seccion')
        @include('layouts.partials.menu_admin')
    @endsection
    
	@section('name_seccion','Noticias a publicar')
	
    @section('content_seccion')
    
    	@include('layouts.partials.form_news')
    
    @endsection
	
	@section('script_seccion')
		    <link rel="stylesheet" href="{{asset('bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">
    		<link rel="stylesheet" href="{{asset('bootstrap-datepicker/css/bootstrap-datepicker.standalone.css')}}">
    		<script src="{{asset('bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    		<script src="{{asset('bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
			<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
			<link rel="stylesheet" href="{{ URL::asset('assets/dropzone/dropzone.css') }}">
			<script src="{{ URL::asset('assets/dropzone/dropzone.js') }}"></script> 
			<script src="{{ URL::asset('assets/dropzone/dropzone-config.js') }}"></script> 
			
            <script>
                $('.datepicker').datepicker({
                    format: "yyyy-mm-dd",
                    language: "es",
                    autoclose: true
                });
                $('.datepicker1').datepicker({
                    format: "yyyy-mm-dd",
                    language: "es",
                    autoclose: true
                });
                $('.datepicker2').datepicker({
                    format: "yyyy-mm-dd",
                    language: "es",
                    autoclose: true
                });
            	$("#submit").on("click", function() {
            		if( $("#title").val() === '' ){
            			alert('Se requiere un titulo de la noticia');
            		} else {
            			var url = "{{ url('/update_news') }}";
            			 $("#summary").val(CKEDITOR.instances.summary.getData()) ;
            			$.ajax({
            				type: "POST",
            				url: url,
            				data: $('#real-dropzone').serialize(),
            				success: function(data){
            					$.each(data, function(i, item) {
            						if(item.flag != 'OK'){
            							alert(item.value);
            							var url_ = "{{ url('/news-admin') }}";
            		            		$( location ).attr("href", url_);
            						} else {
            							alert(item.value);
            						}							
            					});	
            				}
            			});
            		}
            		return false;
            	});

            	$("#reset").on("click", function() {
            		var url = "{{ url('/news-admin') }}";
            		$( location ).attr("href", url);
            	});	
                            
            </script>
		
	@endsection