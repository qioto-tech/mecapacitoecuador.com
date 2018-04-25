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
        $lista = Product::where('type',2)
                    ->where('state',1)
                    ->select('id','name','description','img_p','img_g')
                    ->get();
        
        return view('begin',['lista' => $lista]);
    }
    
    
    public function revisar($curso){
        $lista = Product::join('detail_products','detail_products.id_product','=','products.id')
        ->where('products.id',$curso)
        ->select('products.id','products.name','products.description','products.amount','products.img_g','detail_products.create_by','detail_products.level','detail_products.commitment','detail_products.language','detail_products.how_to_pass')
        ->get();

        $lista_modulos = Product::join('syllabus_products','syllabus_products.id_product','=','products.id')
        ->where('products.id',$curso)
        ->select('products.id','syllabus_products.week','syllabus_products.description')
        ->get();
        
        return view('contenidoModulos',['lista' => $lista, 'listaModulos' => $lista_modulos]);
    }
}
