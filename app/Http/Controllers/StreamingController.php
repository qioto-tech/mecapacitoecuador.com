<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\VideoStream;

class StreamingController extends Controller
{
    //
    public function reproducir(){
        $video = "videos/MP3Juices-Free-MP3-Downloads.mp4";
        $mime = "video/mp4";
        $title = "Os Simpsons";
        return view('player')->with(compact('video', 'mime', 'title'));
    }
    
    public function streaming( $filename ){
        $videosDir = base_path('public\videos');
        if (file_exists($filePath = $videosDir."/".$filename.'.mp4')) {             
            $stream = new VideoStream($filePath);
            return response()->stream(function() use ($stream) {
                $stream->start();
            });
        }
        return response("File doesn't exists", 404);
    }
}
