<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\ImageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct(ImageRepository $imageRepository)
    {
        $this->middleware('auth');
        $this->image = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nuevocurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        
        $product = new Product();
        $validator = $this->validate($request, [
            'name'=>['required','max:255'],
            'description'=>['required'],
            'legend'=>['required'],
            'state'=>['required'],
            'promotion'=>['required'],
            'id_user'=>['required'],
            'costocurso'=>['required'],
        ]);
        
        // Si falla la validación redireccionamos de nuevo al formulario
        // enviando la variable Input (que contendrá todos los Input recibidos)
        // y la variable errors que contendrá los mensajes de error de validator.
        //    	if ($validator->fails())
        //    	{
        //    		return Redirect::to('country/create')
        //    		->withErrors($validator)
        //    		->withInput();
        //    	}
        
        
        $product->fill($request->all());
        $product->save();
        
        $cadena = '';
        $flag = 'FAIL';
        
        if( $product->id > 0 ){
            $flag = 'OK';
            $cadena = $product->id;
        }
        
        $results[] = [ 'value' => $cadena, 'flag' => $flag];
        
        return Redirect::to('/home');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $list = Product::leftJoin('detail_products','products.id','=','detail_products.id_product')
            ->leftJoin('syllabus_products','products.id','=','syllabus_products.id_product')
            ->where('products.id_user',Auth::user()->id)
            ->select('products.id','products.name','products.state',DB::raw('count(detail_products.id) as detalle'),DB::raw('count(syllabus_products.id) as contenido'))
            ->groupBy('products.id','products.name','products.state')
            ->get();
        
        return view('nuevocontenido',['lista' => $list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $form_data = Input::all();
        $result = null;
        if( isset($form_data['file']) ){
            if( $form_data['file'] ){
                $result = $this->image->upload_cursos($form_data);
            }
        }
        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        if($request->id != 0){
            DB::table('detail_products')
            ->where('id', $request->id)
            ->update(['id_product' => $request->id_product,'autor' => $request->autor,'level' => $request->level,'commitment' => $request->commitment, 'language' => $request->language, 'how_to_pass' => $request->how_to_pass]);
        } else{
            $this->detalle($request);
        }
        return Redirect::to('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
            
    }
    
    public function detalle(Request $request){
        DB::table('detail_products')
        ->insert(
            ['id_product' => $request->id_product, 'autor' => $request->autor, 'level' => $request->level, 'commitment' => $request->commitment, 'language' => $request->language, 'how_to_pass' => $request->how_to_pass]);
        return Redirect::to('/home');
    }

    public function contenido(Request $request){
        $contenido = '';
        DB::table('syllabus_products')
        ->insert(
            ['id_product' => $request->id_product, 'week' =>  $request->week, 'description' =>  $request->description]);
        
        $listadoSilabos = DB::table('syllabus_products')
        ->where('id_product', $request->id_product)
        ->get();
        $contenido .= '<div class="panel panel-default">';
        $contenido .= '<div class="panel-heading">Contenido del Curso</div>';
        $contenido .= '<div class="panel-body"><button type="button" class="btn btn-primary  btn-md"
	data-toggle="modal" data-target="#myModalContenido">Nuevo Contenido</button>';
        
        if(count($listadoSilabos) > 0){
            foreach ($listadoSilabos as $silabo) {
                $contenido .= '<div class="panel panel-warning">';
                $contenido .= '<div class="panel-heading">'. $silabo->week .'</div>';
                $contenido .= '<div class="panel-body">'. $silabo->description .'</div>';
                $contenido .= '</div>';
            }
            $flag = 'OK';
        } else {
            $contenido .= '<div class="panel panel-warning">No hay datos';
            $contenido .= '</div>';
            $flag = 'FAIL';
        }
        $contenido .= '</div>';
        $contenido .= '</div>';
        $results[] = [ 'value' => $contenido, 'flag' => $flag];
        return response()->json($results);
        
    }
 
    public function descripcion($id){
        $contenido = '';
        $results[] = [ 'value' => $contenido, 'FAIL' => 'OK'];
        $listas = DB::table('detail_products')
            ->where('id_product',$id)
            ->select('id','id_product','autor','level','commitment', 'language', 'how_to_pass')
            ->get();
            if( count($listas) != 0){
                foreach ($listas as $detalle) {
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <label class="control-label col-sm-2" for="title">Nombre autor:</label>';
                    $contenido .= '    <div class="col-sm-10">';
                    $contenido .= '        <input class="form-control" placeholder="Nombre autor" size="60" id="autor" name="autor" type="text" value="'.$detalle->autor.'">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <label class="control-label col-sm-2" for="title">Nivel curso:</label>';
                    $contenido .= '    <div class="col-sm-10">';
                    $contenido .= '    <input class="form-control" placeholder="Nivel del curso" size="60" id="level" name="level" type="text" value="'.$detalle->level.'">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <label class="control-label col-sm-2" for="title">Duracion curso:</label>';
                    $contenido .= '    <div class="col-sm-10">';
                    $contenido .= '    <input class="form-control" placeholder="Duracion (4 weeks of study, 3-5 hours/week)" size="60" id="commitment" name="commitment" type="text" value="'.$detalle->commitment.'">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <label class="control-label col-sm-2" for="title">Idioma curso:</label>';
                    $contenido .= '    <div class="col-sm-10">';
                    $contenido .= '    <input class="form-control" placeholder="Idioma del curso" size="60" id="language" name="language" type="text" value="'.$detalle->language.'">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <label class="control-label col-sm-2" for="title">Esfuerzo curso:</label>';
                    $contenido .= '    <div class="col-sm-10">';
                    $contenido .= '    <input class="form-control" placeholder="Pass all graded assignments to complete the course." size="60" id="how_to_pass" name="how_to_pass" type="text" value="'.$detalle->how_to_pass.'">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $contenido .= '<div class="form-group">';
                    $contenido .= '    <div class="col-sm-offset-2 col-sm-10">';
                    $contenido .= '        <input type="hidden" id="id" name="id" value="'.$detalle->id.'">';
                    $contenido .= '        <input type="hidden" id="id_product" name="id_product" value="'.$detalle->id_product.'">';
                    $contenido .= '        <input id="submit" name="submit" value="Grabar" class="btn btn-danger" type="submit">';
                    $contenido .= '        <input id="reset" name="reset" value="Cancelar" class="btn btn-danger" type="reset">';
                    $contenido .= '    </div>';
                    $contenido .= '</div>';
                    $results[] = [ 'value' => $contenido, 'flag' => 'OK'];
                }
            } else {
                $contenido .= '<div class="form-group">';
                $contenido .= '    <label class="control-label col-sm-2" for="title">Nombre autor:</label>';
                $contenido .= '    <div class="col-sm-10">';
                $contenido .= '        <input class="form-control" placeholder="Nombre autor" size="60" id="autor" name="autor" type="text" value="">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $contenido .= '<div class="form-group">';
                $contenido .= '    <label class="control-label col-sm-2" for="title">Nivel curso:</label>';
                $contenido .= '    <div class="col-sm-10">';
                $contenido .= '    <input class="form-control" placeholder="Nivel del curso" size="60" id="level" name="level" type="text" value="">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $contenido .= '<div class="form-group">';
                $contenido .= '    <label class="control-label col-sm-2" for="title">Duracion curso:</label>';
                $contenido .= '    <div class="col-sm-10">';
                $contenido .= '    <input class="form-control" placeholder="Duracion (4 weeks of study, 3-5 hours/week)" size="60" id="commitment" name="commitment" type="text" value="">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $contenido .= '<div class="form-group">';
                $contenido .= '    <label class="control-label col-sm-2" for="title">Idioma curso:</label>';
                $contenido .= '    <div class="col-sm-10">';
                $contenido .= '    <input class="form-control" placeholder="Idioma del curso" size="60" id="language" name="language" type="text" value="">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $contenido .= '<div class="form-group">';
                $contenido .= '    <label class="control-label col-sm-2" for="title">Esfuerzo curso:</label>';
                $contenido .= '    <div class="col-sm-10">';
                $contenido .= '    <input class="form-control" placeholder="Pass all graded assignments to complete the course." size="60" id="how_to_pass" name="how_to_pass" type="text" value="">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $contenido .= '<div class="form-group">';
                $contenido .= '    <div class="col-sm-offset-2 col-sm-10">';
                $contenido .= '        <input type="hidden" id="id" name="id" value="0">';
                $contenido .= '        <input type="hidden" id="id_product" name="id_product" value="'.$id.'">';
                $contenido .= '        <input id="submit" name="submit" value="Grabar" class="btn btn-danger" type="submit">';
                $contenido .= '        <input id="reset" name="reset" value="Cancelar" class="btn btn-danger" type="reset">';
                $contenido .= '    </div>';
                $contenido .= '</div>';
                $results[] = [ 'value' => $contenido, 'flag' => 'OK'];
                
            }
        return response()->json($results);
    }

    public function silabos($id){
        DB::table('syllabus_products')
        ->insert(
            ['id_product' => $request->id_product, 'week' =>  $request->week, 'description' =>  $request->description]);
        return Redirect::to('/contenidos');
    }
    
    public function listaCursos(){
        $listadoProductos = Product::select('id','name','amount','costocurso','type', 'promotion', 'state' )
                            ->orderby('id', 'desc')
                            ->get();
        
        return view('listaProductos',['listadoProductos' => $listadoProductos]);
    }
    
    public function frmEditCurso ( $id ){
        $contenido = '';
        
        $listadoProductos = Product::select('id','name','amount','costocurso','type', 'promotion', 'state' )
        ->where('id', $id)
        ->get();
        
        foreach ($listadoProductos as $producto) {
            $contenido .= '<div class="form-group">';
            $contenido .= '    <label class="control-label col-sm-2" for="title">Nombre curso:</label>';
            $contenido .= '    <div class="col-sm-10">';
            $contenido .= '        <input class="form-control" placeholder="Nombre autor" size="60" readonly id="autor" name="autor" type="text" value="'.$producto->name.'">';
            $contenido .= '    </div>';
            $contenido .= '</div>';
            $contenido .= '<div class="form-group">';
            $contenido .= '    <label class="control-label col-sm-2" for="title">PVP:</label>';
            $contenido .= '    <div class="col-sm-10">';
            $contenido .= '    <input class="form-control" placeholder="Nivel del curso" size="60" id="amount" name="amount" type="text" value="'.$producto->amount.'">';
            $contenido .= '    </div>';
            $contenido .= '</div>';
            $contenido .= '<div class="form-group">';
            $contenido .= '    <label class="control-label col-sm-2" for="title">Tiene Promocion:</label>';
            $contenido .= '    <div class="col-sm-10">';
            $contenido .= '    <select  class="form-control" placeholder="Selecciona una opcion..." id="promotion" name="promotion">';
            if($producto->promotion == 0 ){
                $contenido .= '    <option value="1">Si</option>';
                $contenido .= '    <option value="0" selected>No</option>';
            } else {
                $contenido .= '    <option value="1" selected>Si</option>';
                $contenido .= '    <option value="0">No</option>';
            }
            $contenido .= '    </select>';
            $contenido .= '    </div>';
            $contenido .= '</div>';
            $contenido .= '<div class="form-group">';
            $contenido .= '    <label class="control-label col-sm-2" for="title">Tipo:</label>';
            $contenido .= '    <div class="col-sm-10">';
            $contenido .= '    <select  class="form-control" placeholder="Selecciona una opcion..." id="type" name="type">';
            if($producto->type == 2 ){
                $contenido .= '    <option value="1">Simulador</option>';
                $contenido .= '    <option value="2" selected>Curso</option>';
            } else {
                $contenido .= '    <option value="1" selected>Simulador</option>';
                $contenido .= '    <option value="2">Curso</option>';
            }
            $contenido .= '    </select>';
            $contenido .= '    </div>';
            $contenido .= '</div>';
            $contenido .= '<div class="form-group">';
            $contenido .= '    <label class="control-label col-sm-2" for="title">Estado:</label>';
            $contenido .= '    <div class="col-sm-10">';
            $contenido .= '    <select  class="form-control" placeholder="Selecciona una opcion..." id="state" name="state">';
            if($producto->state == 0 ){
                $contenido .= '    <option value="1">Publicar</option>';
                $contenido .= '    <option value="0" selected>No publicar</option>';
            } else {
                $contenido .= '    <option value="1" selected>Publicar</option>';
                $contenido .= '    <option value="0">No publicar</option>';
            }
            $contenido .= '    </select>';
            $contenido .= '    </div>';
            $contenido .= '</div>';
            $contenido .= '<div class="form-group">';
            $contenido .= '    <div class="col-sm-offset-2 col-sm-10">';
            $contenido .= '        <input type="hidden" id="id" name="id" value="'.$id.'">';
            $contenido .= '        <input id="submit" name="submit" value="Grabar" class="btn btn-danger" type="submit">';
            $contenido .= '        <input id="reset" name="reset" value="Cancelar" class="btn btn-danger" type="reset">';
            $contenido .= '    </div>';
            $contenido .= '</div>';
        }
        $results[] = [ 'value' => $contenido, 'flag' => 'OK'];
        
        return response()->json($results);
    }
    
    public function updateAdmin(Request $request){
        DB::table('products')
        ->where('id', $request->id)
        ->update(['amount' => $request->amount,'promotion' => $request->promotion,'type' => $request->type, 'state' => $request->state]);
        
        return Redirect::to('/listaCursos');
        
    }
    
    public function contenidos($id){
        $contenido = '';
        $listadoSilabos = DB::table('syllabus_products')
        ->where('id_product', $id)
        ->get();
        $contenido .= '<div class="panel panel-default">';
        $contenido .= '<div class="panel-heading">Contenido del Curso</div>';
        $contenido .= '<div class="panel-body"><button type="button" class="btn btn-primary  btn-md"
	data-toggle="modal" data-target="#myModalContenido">Nuevo Contenido</button>';
        
        if(count($listadoSilabos) > 0){
            foreach ($listadoSilabos as $silabo) {
                $contenido .= '<div class="panel panel-warning">';
                $contenido .= '<div class="panel-heading">'. $silabo->week .'</div>';
                $contenido .= '<div class="panel-body">'. $silabo->description .'</div>';
                $contenido .= '</div>';
            }
            $flag = 'OK';
        } else {
            $contenido .= '<div class="panel panel-warning">No hay datos';
            $contenido .= '</div>';
            $flag = 'FAIL';
        }
        $contenido .= '</div>';
        $contenido .= '</div>';
        $results[] = [ 'value' => $contenido, 'flag' => $flag];
        return response()->json($results);
    }
}
