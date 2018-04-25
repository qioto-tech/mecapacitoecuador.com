<?php

namespace App;

use App\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ImageRepository {

    public function upload($form_data) {
    	
    	$validar = Order::where('orders.document_number',$form_data['num_documento'])
    	->select('orders.id')
    	->get();
    	
    	if( count($validar) == 0 ){
    	    $path = 'storage/deposits/';
    	    $carpeta = $path . date('Y');
	    	if (!file_exists($carpeta)) {
	    		mkdir($carpeta, 0755, true);
	    	}
	    	$carpeta = $carpeta . '/' . date('W');
	    	if (!file_exists($carpeta)) {
	    		mkdir($carpeta, 0755, true);
	    	}
	    	
	    	$path = $carpeta . '/';
	    	
	    	
	        $validator = Validator::make($form_data, Image::$rules, Image::$messages);
	
	
	        if ($validator->fails()) {
	
	            return Response::json([
	                        'error' => true,
	                        'message' => $validator->messages()->first(),
	                        'code' => 400
	                            ], 400);
	        }
	
	        $photo = $form_data['file'];
	
	
	        $originalName = $photo->getClientOriginalName();
	
	        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - 4);
	
	
	        $filename = $this->sanitize($originalNameWithoutExt);
	
	        $allowed_filename = $this->createUniqueFilename($path, $filename);
	
	
	        $filenameExt = $form_data['num_documento'] . $allowed_filename . '.jpg';
	
	
	
	        $uploadSuccess1 = $this->original($path, $photo, $filenameExt);
	
	
	      //  $uploadSuccess2 = $this->icon($photo, $filenameExt);
	
	
	        if (!$uploadSuccess1 ) {
	
	            return Response::json([
	                        'error' => true,
	                        'message' => 'Server error while uploading',
	                        'code' => 500
	                            ], 500);
	    
	        }
	
	        DB::table('orders')
	    	->where('id',$form_data['order_id'])
	    	->update(['document_number' => $form_data['num_documento'],'state' => "Pendiente", 'document_path'=> $path . $form_data['num_documento'] . $allowed_filename . '.jpg']);
	        
	
		
	
	
	        //$sessionImage->update();
	
	        return Response::json([
	                    'error' => false,
	                    'code' => 200
	                        ], 200);
    	} else {
    		return Response::json([
    				'error' => true,
    				'message' => 'El numero de deposito ya existe',
    				'code' => 500
    		], 500);
    	}
    }

    public function upload_news($form_data) {
        
        $path = 'storage/news/';
        
        $carpeta = $path . date('Y');
        if (!file_exists($carpeta)) {
                mkdir($carpeta, 0755, true);
            }
            
            $carpeta = $carpeta . '/' . date('W');
       if (!file_exists($carpeta)) {
                mkdir($carpeta, 0755, true);
            }
            
            $path = $carpeta . '/';
            
            $validator = Validator::make($form_data, Image::$rules, Image::$messages);
            
            
            if ($validator->fails()) {
                
                return Response::json([
                    'error' => true,
                    'message' => $validator->messages()->first(),
                    'code' => 400
                ], 400);
            }
            
            $photo = $form_data['file'];
            
            
            $originalName = $photo->getClientOriginalName();
            
            $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - 4);
            
            
            $filename = $this->sanitize($originalNameWithoutExt);
            
            $allowed_filename = $this->createUniqueFilename($path, $filename);
            
            $id = DB::table('news')
            ->insertGetId(['title' => $form_data['title'],'file' => $path . $originalName]);
            
            
            $uploadSuccess1 = $this->original($path, $photo, $originalName);
            
            
            if (!$uploadSuccess1 ) {
                
                return Response::json([
                    'error' => true,
                    'message' => 'Server error while uploading',
                    'code' => 500
                ], 500);
                
            } else {
                return Response::json([
                    'error' => false,
                    'code' => 200,
                    'id' => $id,
                ], 200);
            }
    }

    public function upload_cursos($form_data) {
        
        $path = 'img/portfolio/';
        
        $carpeta = $path . date('Y');
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0755, true);
        }
        
        $carpeta = $carpeta . '/' . date('W');
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0755, true);
        }
        
        $path = $carpeta . '/';
        
        $validator = Validator::make($form_data, Image::$rules, Image::$messages);
        
        
        if ($validator->fails()) {
            
            return Response::json([
                'error' => true,
                'message' => $validator->messages()->first(),
                'code' => 400
            ], 400);
        }
        
        $photo = $form_data['file'];
        
        
        $originalName = $photo->getClientOriginalName();
        
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - 4);
        
        
        $filename = $this->sanitize($originalNameWithoutExt);
        
        $allowed_filename = $this->createUniqueFilename($path, $filename);
        
        $id = DB::table('products')
        ->where('id',$form_data['id'])
        ->update(['code' => $this->generateRandomString(10),'img_p' => $path . $originalName,'img_g' => $path . $originalName]);
        
        
        $uploadSuccess1 = $this->original($path, $photo, $originalName);
        
        
        if (!$uploadSuccess1 ) {
            
            return Response::json([
                'error' => true,
                'message' => 'Server error while uploading',
                'code' => 500
            ], 500);
            
        } else {
            return Response::json([
                'error' => false,
                'code' => 200,
                'id' => $id,
            ], 200);
        }
    }
    
    public function createUniqueFilename($path, $filename) {


    	$full_image_path = $path . $filename . '.jpg';

        if (File::exists($full_image_path)) {
            // Generate token for image
            $imageToken = substr(sha1(mt_rand()), 0, 5);
            return $filename . '-' . $imageToken;
        }

        return $filename;
    }

  
 

    /**
     * Optimize Original Image
     */
    public function original($path, $photo, $filename) {
        $manager = new ImageManager();
        $image = $manager->make($photo)->encode('jpg')->save($path . $filename);

        return $image;
    }

    /**
     * Create Icon From Original
     */
    public function icon($photo, $filename) {
        $manager = new ImageManager();
        $image = $manager->make($photo)->encode('jpg')->resize(350, null, function($constraint) {
                    $constraint->aspectRatio();
                })->save('images/icon/' . $filename);

        return $image;
    }

    /**
     * Delete Image From Session folder, based on original filename
     */
    public function delete($originalFilename) {

        $full_size_dir = Config::get('images.fullsize');
        $icon_size_dir = Config::get('images.icon_size');

        $sessionImage = Image::where('original_name', 'like', $originalFilename)->first();


        if (empty($sessionImage)) {
            return Response::json([
                        'error' => true,
                        'code' => 400
                            ], 400);
        }

        $full_path1 = $full_size_dir . $sessionImage->filename . '.jpg';
        $full_path2 = $icon_size_dir . $sessionImage->filename . '.jpg';

        if (File::exists($full_path1)) {
            File::delete($full_path1);
        }

        if (File::exists($full_path2)) {
            File::delete($full_path2);
        }

        if (!empty($sessionImage)) {
            $sessionImage->delete();
        }

        return Response::json([
                    'error' => false,
                    'code' => 200
                        ], 200);
    }

    function sanitize($string, $force_lowercase = true, $anal = false) {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "â€�?", "â€“", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean;

        return ($force_lowercase) ?
                (function_exists('mb_strtolower')) ?
                        mb_strtolower($clean, 'UTF-8') :
                        strtolower($clean) :
                $clean;
    }
    
    private function generateRandomString($length = 10) {
        $characters = '123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    

}
