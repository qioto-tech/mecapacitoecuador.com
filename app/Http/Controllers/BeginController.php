<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


use Illuminate\Support\Facades\Redirect;


class BeginController extends Controller
{
    //
    public function index()
    {
        //
        $listaCursos = Product::where('type',2)
                    ->where('state',1)
                    ->select('id','name','description','img_p','img_g')
                    ->get();
        $listaSimuladores = Product::where('type',1)
                    ->where('state',1)
                    ->select('id','name','description','img_p','img_g')
                    ->get();
        
        return view('begin',['cursos' => $listaCursos, 'simuladores' => $listaSimuladores]);
    }
    
    
    public function revisar($producto){
        
        $cursos = Product::leftJoin('detail_products','detail_products.id_product','=','products.id')
        ->where('products.id',$producto)
        ->select('products.id','products.name','products.description','products.amount','products.img_g','detail_products.autor','detail_products.level','detail_products.commitment','detail_products.language','detail_products.how_to_pass','products.state')
        ->get();
        $curso_modulos = null;

        if($cursos[0]->state != 1){
            $curso_modulos = Product::join('syllabus_products','syllabus_products.id_product','=','products.id')
            ->where('products.id',$producto)
            ->select('products.id','syllabus_products.week','syllabus_products.description')
            ->get();
        }
        return view('contenidoModulos',['cursos' => $cursos, 'listaModulos' => $curso_modulos]);
    }
    
    public function contacto()
    {        
        return view('contacto');
    }
    
}
