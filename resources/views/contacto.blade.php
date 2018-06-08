@extends('layouts.templateEmpty')

    @section('menu_seccion')
        @include('layouts.partials.menu')
    @endsection
@section('name_seccion','Contactanos')

@section('content_seccion')

			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
				

                        @if(Session::has('success'))
                           <div class="alert alert-success">
                             {{ Session::get('success') }}
                           </div>
                        @endif						


						<div class="col-md-7 contact-form wow animated fadeInLeft">
							{!! Form::open(['route'=>'contactus.store']) !!}
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Nombre completo">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Su email">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Asunto">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Su mensaje"></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Enviar</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Me capacito Ecuador</h3>						
								<p><i class="fa fa-pencil"></i>Somos una empresa que busca mejorar los conocimientos de la comunidad a trav&eacute;s de cursos dictados por profesionales con experiencia en varios campos.</p>
								<p>Si quieres conocer la modalidad para dar cursos comunicate con nosotros. <span>Quito </span><span>Ecuador</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (+593) 99-972-0644 </p>
								<p><i class="fa fa-envelope"></i>info@mecapacitoecuador.com</p>
							</address>
						</div>		
						
						
					</div>
				</div>
			</section>
			<!-- end Contact section -->
							
@endsection