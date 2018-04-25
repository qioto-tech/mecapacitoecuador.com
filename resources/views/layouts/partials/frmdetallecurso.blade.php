{!! Form::open(['url' => 'product/detalle', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Nombre autor:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Nombre autor" size="60" id="create_by" name="create_by" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Nivel curso:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Nivel del curso" size="60" id="level" name="level" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Duracion curso:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Duracion (4 weeks of study, 3-5 hours/week)" size="60" id="commitment" name="commitment" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Idioma curso:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Idioma del curso" size="60" id="language" name="language" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Esfuerzo curso:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Pass all graded assignments to complete the course." size="60" id="how_to_pass" name="how_to_pass" type="text">
            </div>
        </div>
        
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
    			<input type="hidden" id="id" name="id" value="0">
    			<input id="submit" name="submit" value="Grabar" class="btn btn-danger" type="submit">
    			<input id="reset" name="reset" value="Cancelar" class="btn btn-danger" type="reset">
			</div>    
		</div>    
        
					{!!	csrf_field() !!}
					{!! Form::close() !!}