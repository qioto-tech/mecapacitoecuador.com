{!! Form::open(['url' => 'product/contenido', 'method' => 'POST','class' => 'form-horizontal', 'files'=>true, 'id'=>'frm-producto',  'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Nombre del modulo:</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Nombre del modulo" size="60" id="week" name="week" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Descripcion del contenido:</label>
            <div class="col-sm-10">
                <textarea class="form-control ckeditor" name="description" id="description" rows="10" cols="80"></textarea>
            </div>
        </div>
        
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
    			<input type="hidden" id="id_product" name="id_product" value="0">
    			<input id="submit" name="submit" value="Grabar" class="btn btn-danger" type="submit">
    			<input id="reset" name="reset" value="Cancelar" class="btn btn-danger" type="reset">
			</div>    
		</div>    
        
					{!!	csrf_field() !!}
					{!! Form::close() !!}