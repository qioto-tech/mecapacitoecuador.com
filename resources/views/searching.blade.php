@extends('layouts.templateSearching')

	@section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection    	
   
	@section('content_seccion')
   
	@endsection 
    
	@section('script') 
        <script>
            
            $(document).ready(function(){
            
            	$("#ci").keypress(function(e) {
            	       if(e.which == 13) {
            	          // Acciones a realizar, por ej: enviar formulario.
            	  			if( $("#ci").val() === '' ){
            					alert('Se requiere un numero de cedula');
            				} else {
            					$("#resultado").html('');
            					$("#parametro").html('');
            					var url = "{{ url('/teacher-search-suitable/search') }}";
            					$.ajax({
            						type: "POST",
            						url: url,
            						data: $('#frmsearch').serialize(),
            						success: function(data){
            							$.each(data, function(i, item) {
            								if(item.flag != 'No existe su cedula'){
            									$("#resultado").html(item.value);
            
            								} else {
            									$("#resultado").html(item.value);
            								}							
            							});	
            						}
            					});
            				}
            				return false;
            			          
            	       }
            	});
            
            	$("#ci_1").keypress(function(e) {
            	       if(e.which == 13) {
            	          // Acciones a realizar, por ej: enviar formulario.
            				if( $("#ci_1").val() === '' ){
            					alert('Se requiere un numero de cedula');
            				} else {
            					$("#resultado").html('');
            					$("#parametro").html('');
            					var url = "{{ url('/teacher-search-elegible/search') }}";
            					$.ajax({
            						type: "POST",
            						url: url,
            						data: $('#frmsearching').serialize(),
            						success: function(data){
            							$.each(data, function(i, item) {
            								if(item.flag != 'No existe su cedula'){
            									$("#resultado").html(item.value);
            
            								} else {
            									$("#resultado").html(item.value);
            								}							
            							});	
            						}
            					});
            				}
            				return false;
            
            	       }
            	});
            
            	
            	$("#btn-search-suitable").on("click", function() {
            		if( $("#ci").val() === '' ){
            			alert('Se requiere un numero de cedula');
            		} else {
            			$("#resultado").html('');
            			$("#parametro").html('');
            			var url = "{{ url('/teacher-search-suitable/search') }}";
            			$.ajax({
            				type: "POST",
            				url: url,
            				data: $('#frmsearch').serialize(),
            				success: function(data){
            					$.each(data, function(i, item) {
            						if(item.flag != 'No existe su cedula'){
            							$("#resultado").html(item.value);
            
            						} else {
            							$("#resultado").html(item.value);
            						}							
            					});	
            				}
            			});
            		}
            		return false;
            	});
            
            	$("#btn-search-elegible").on("click", function() {
            		if( $("#ci_1").val() === '' ){
            			alert('Se requiere un numero de cedula');
            		} else {
            			$("#resultado").html('');
            			$("#parametro").html('');
            			var url = "{{ url('/teacher-search-elegible/search') }}";
            			$.ajax({
            				type: "POST",
            				url: url,
            				data: $('#frmsearching').serialize(),
            				success: function(data){
            					$.each(data, function(i, item) {
            						if(item.flag != 'No existe su cedula'){
            							$("#resultado").html(item.value);
            
            						} else {
            							$("#resultado").html(item.value);
            						}							
            					});	
            				}
            			});
            		}
            		return false;
            	});
            	
            	$("#btn-validate").on("click", function() {
            		if( $("#usuario").val() === '' || $("#password").val() === '' || $("#sexo").val() == 0){
            			alert('Se requiere todos los campos');
            		} else {
            			$("#resultado").html('');
            			$("#parametro").html('');
            			var url = "{{ url('/search-result/result') }}";
            			$.ajax({
            				type: "POST",
            				url: url,
            				data: $('#frmvalidate').serialize(),
            				success: function(data){
            					$.each(data, function(i, item) {
            						$("#resultado").html(item.value);							
            					});	
            				}
            			});
            		}
            		return false;
            	});
            
            	$("#btn-validateTestOcupacional").on("click", function() {
            		if( $("#usuarioTestV").val() === '' || $("#passwordTestV").val() === '' ){
            			alert('Se requiere todos los campos');
            		} else {
            			$("#resultado").html('');
            			$("#parametro").html('');
            			var url = "{{ url('/search-result/resultVocacional') }}";
            			$.ajax({
            				type: "POST",
            				url: url,
            				data: $('#frmValidateTestOcupacional').serialize(),
            				success: function(data){
            					$.each(data, function(i, item) {
            						$("#resultado").html(item.value);							
            					});	
            				}
            			});
            		}
            		return false;
            	});

            	            
            });

        </script>

	@endsection