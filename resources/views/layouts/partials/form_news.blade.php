					
					{!! Form::open(['url' => route('news-save'), 'method' => 'POST','class' => 'form-horizontal dropzone', 'files'=>true, 'id'=>'real-dropzone',  'enctype'=>'multipart/form-data']) !!}
				
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Titulo:</label>
							<div class="col-sm-10">
								{!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Introduce el titulo','size'=>'60', 'id'=>'title', 'name'=>'title']) !!}
							</div>
					  	</div>
						<div class="form-group">
					    	<label class="control-label col-sm-2" for="abstract">Resumen:</label>
					    	<div class="col-sm-10">
					      		{!! Form::text('abstract',null,['class'=>'form-control', 'placeholder'=>'Introduce tu resumen','size'=>'60', 'id'=>'abstract', 'name'=>'abstract']) !!}
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="summary">Contenido:</label>
					    	<div class="col-sm-10">
					      		<textarea class="form-control ckeditor" name="summary" id="summary" rows="10" cols="80"></textarea>
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="date_input">Fecha de ingreso:</label>
					    	<div class="col-sm-10">
					      		{!! Form::text('date_input',null,['class'=>'form-control datepicker', 'placeholder'=>'yyyy-mm-dd','size'=>'60', 'id'=>'date_input', 'name'=>'date_input']) !!}
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="date_publication">Fecha de publicacion:</label>
					    	<div class="col-sm-10">
					      		{!! Form::text('date_publication',null,['class'=>'form-control datepicker1', 'placeholder'=>'yyyy-mm-dd','size'=>'60', 'id'=>'date_publication', 'name'=>'date_publication']) !!}
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="date_end">Caduca:</label>
					    	<div class="col-sm-10">
					      		{!! Form::text('date_end',null,['class'=>'form-control datepicker2', 'placeholder'=>'yyyy-mm-dd','size'=>'60', 'id'=>'date_end', 'name'=>'date_end']) !!}
					    	</div>
					  	</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="url">URL:</label>
							<div class="col-sm-10">
								{!! Form::text('url',null,['class'=>'form-control', 'placeholder'=>'Introduce la url de facebook','size'=>'60', 'id'=>'url', 'name'=>'url']) !!}
							</div>
					  	</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="type">Tipo:</label>
							<div class="col-sm-10">
								{!!	Form::select('type', ['news' => 'Noticias', 'note' => 'Notas'], null, ['class'=>'form-control','placeholder' => 'Selecciona un tipo...', 'id'=>'type', 'name'=>'type']) !!}
							</div>
					  	</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="num_doc">Publicar:</label>
							<div class="col-sm-10">
								{!! Form::checkbox('state',1,['class'=>'form-control', 'id'=>'state', 'name'=>'state']) !!}
							</div>
						</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-2" for="customer_lastname">Imagen:</label>
					    	<div class="col-sm-10">
        						<div id="ptm" class="row">
        							<div class="form-group">
        								<div class="col-sm-8">
        									<div class="jumbotron how-to-create">
        										
        										<input type="hidden" id="news_id" name="news_id" value="{{ $news_id }}">
        										<div class="dz-message">
        										</div>
        										<div class="fallback">
        											<input id="file" name="file" type="file" multiple />
        										</div>
        										<div class="dropzone-previews" id="dropzonePreview"></div>
        								
        											<h4 style="text-align: center;color:#428bca;">Carga el comprobante bancario aqui (Formato: jpg, png, tamaño max: 6Mb)  <span class="glyphicon glyphicon-hand-down"></span></h4>
        										</div>
        									</div>
        							</div>								  
        							<!-- Dropzone Preview Template -->
        							<div id="preview-template" style="display: none;">
        							
        								<div class="dz-preview dz-file-preview">
        									<div class="dz-image"><img data-dz-thumbnail=""></div>
        							
        									<div class="dz-details">
        										<div class="dz-size"><span data-dz-size=""></span></div>
        										<div class="dz-filename"><span data-dz-name=""></span></div>
        									</div>
        									<div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
        									<div class="dz-error-message"><span data-dz-errormessage=""></span></div>
        							
        									<div class="dz-success-mark">
        										<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
        											<!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
        											<title>Check</title>
        											<desc>Created with Sketch.</desc>
        											<defs></defs>
        											<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        												<path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
        											</g>
        										</svg>
        									</div>
        							
        									<div class="dz-error-mark">
        										<svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
        											<!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
        											<title>error</title>
        											<desc>Created with Sketch.</desc>
        											<defs></defs>
        											<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        												<g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
        													<path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
        												</g>
        											</g>
        										</svg>
        									</div>
        							
        								</div>
        							</div>								
        						</div>
        						<div class="form-group">
        						    <div id="resultado" class="col-sm-offset-2 col-sm-10">
        								
        							</div>
        						</div>
					    	</div>
					  	</div>

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
								<input id="submit" name="submit" value="Grabar"  class="btn btn-danger"  type="submit"  />
								<input id="reset" name="reset" value="Cancelar"  class="btn btn-danger"  type="reset"  />
							</div>
						</div>
						
					{!!	csrf_field() !!}
					{!! Form::close() !!}