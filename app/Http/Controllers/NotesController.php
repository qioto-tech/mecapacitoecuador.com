<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Jobs\ContactUs_Mail;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_news = News::where('state', 1)
        ->where('type', 'news')
        ->orderBy('id', 'desc')
        ->select('id','title','abstract','summary','file','date_end','state','url')
        ->get();

        $list_notes = News::where('state', 1)
        ->where('type', 'note')
        ->orderBy('id', 'desc')
        ->select('id','title','abstract','summary','file','date_end','state','url')
        ->get();
        
        return view('news',['list_news' => $list_news, 'list_notes' => $list_notes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        //
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;

        $this->dispatch(new ContactUs_Mail($data));
        
        return back()->with('success', 'Gracias por contactarnos!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function estudiante()
    {
        //
        return view('contentEstudiante',['option' => 'estudiante']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function abogados()
    {
        //
        return view('contentAbogados',['option' => 'abogados']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function policia()
    {
        //
        return view('contentPolicia',['option' => 'policia']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        //
        $product = DB::table('products')
        ->where('state',1)
        ->pluck('name','id');
        
        $products = $product;
        
        $product_list = DB::table('products')
        ->where('state',1)
        ->get();
        
        
        return view('contentTest',['products' => $products, 'listp' => $product_list]);
    }
}
