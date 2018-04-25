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
        
        return response()->json($results);
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
        $list = Product::where('id_user',Auth::user()->id)
            ->select('id','name','state')
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
    public function update(Request $request, Product $product)
    {
        //
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
            ['id_product' => $request->id, 'create_by' => $request->create_by, 'level' => $request->level, 'commitment' => $request->commitment, 'language' => $request->language, 'how_to_pass' => $request->how_to_pass]);
        return Redirect::to('/contenidos');
    }

    public function contenido(Request $request){
        DB::table('syllabus_products')
        ->insert(
            ['id_product' => $request->id_product, 'week' =>  $request->week, 'description' =>  $request->description]);
        return Redirect::to('/contenidos');
    }
    
}
