<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\ImageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    protected $commerce_id;
    protected $response_url;
    protected $image;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->middleware('auth');
        
        $this->image = $imageRepository;
        
        $constants= DB::table('constants')
        ->where('code','commerce_id')
        ->select('value')
        ->get();
        $this->commerce_id = $constants[0]->value;
        
        $constants= DB::table('constants')
        ->where('code','response_url')
        ->select('value')
        ->get();
        $this->response_url= $constants[0]->value;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_news = News::orderBy('id', 'desc')
        ->select('id','title','abstract','date_end','state')
        ->get();
        
        return view('news_admin',['list_news' => $list_news,'news_id' => 0]);
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
    public function store(Request $request)
    {
        //
        
        
        $val = DB::table('news')
            ->where('title',$request->title)
            ->update(['title' => $request->title, 'abstract' => $request->abstract, 'summary'=> $request->summary, 'url' => $request->url, 'type' => $request->type, 'date_input' => $request->date_input, 'date_publication' => $request->date_publication, 'date_end' => $request->date_end, 'state' => $request->state, ]);
        
            
        if($val){
            $results[] = [ 'value' => 'Se inserto correctamente!!!', 'flag' => 'OK'];
        }else{
            $results[] = [ 'value' => 'No se inserto correctamente!!!', 'flag' => 'FAIL'];
        }
       
        return response()->json($results);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
    
    public function save(Request $request){
        $form_data = Input::all();
        $result = null;
        if( isset($form_data['file']) ){
            if( $form_data['file'] ){
                $result = $this->image->upload_news($form_data);
            }
        }
        return response()->json($result);
    }
    
    public function new(){
        return view('new_news',['news_id' => 0]);
    }
}
