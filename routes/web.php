<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::resource('/teacher','TeacherController');
    Route::resource('/order','OrderController');
    Route::resource('/resultado','ResultController');

    
    
//     Route::get('/', 'NotesController@index');
    Route::get('/', 'BeginController@index');
        
//     Route::get('/index.html', 'NotesController@index');
    Route::get('/index.html', function () {
        return view('begin');
    });
        

    Route::get('/maestro', function () {
        return view('begin');
    });
        

    Route::get('/estudiante', 'NotesController@estudiante');
    Route::get('/abogados', 'NotesController@abogados');
    Route::get('/policia', 'NotesController@policia');
    Route::get('/test', 'NotesController@test');
        
    Route::get('/busqueda', function () {
        return view('searching');
    });
            
Route::get('/tips', function () {
	return view('welcomePruebas');
});
	
Route::get('/ayuda', function () {
		return view('helpme');
});

    Route::post('contact-us', ['as'=>'contactus.store','uses'=>'NotesController@contactUSPost']);
	Route::post('/teacher-search-suitable/search', 'TeacherController@searchTeacher_suitable');
	Route::post('/teacher-search-elegible/search', 'TeacherController@searchTeacher_elegible');
	Route::get('/idoneo', 'TeacherController@suitable');
	Route::get('/elegible', 'TeacherController@elegible');
	Route::get('/aprobado/{order}', 'OrderController@approved');
	Route::get('/reprobado/{order}', 'OrderController@disapproved');
//	Route::get('/pendientes', 'OrderController@pending');
	Route::get('/deposito/{order}', 'OrderController@deposit');
	Route::get('/autorizar/{order}', 'OrderController@authorize_payment');
	Route::post('/search/search', 'TeacherController@search');
	Route::post('/search-result/result', 'ResultController@validate_result');
	Route::get('/parameters/result/{param}/{note}', 'ResultController@parameters_result');
    Route::get('/render/{id_partial}', ['as' => 'render', 'uses' => 'OrderController@RenderPartial']);
    Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
    Route::get('/forma/{producto}', 'OrderController@generateForm');
    Route::get('/revisar/{producto}', 'BeginController@revisar');
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listadoPersonas', 'HomeController@listadoPersonas')->name('listadoPersonas');
Route::get('/registro', 'HomeController@registro')->name('registro');
Route::post('/save', 'HomeController@save')->name('save');
Route::post('/update_order', 'HomeController@update_manual')->name('update_order');
Route::get('/contactar', 'HomeController@clients')->name('contactar');
Route::get('/client/{teacher}', 'HomeController@showTeacher');
Route::post('/update_client', 'HomeController@update_teacher')->name('update_client');
Route::get('/mailsend/{teacher}', 'HomeController@mailTeacher');
Route::get('/news-admin', 'NewsController@index')->name('news-admin');
Route::post('/news-save', 'NewsController@save')->name('news-save');
Route::post('/update_news', 'NewsController@store')->name('update_news');
Route::get('/nuevo', 'NewsController@new')->name('nuevo');
Route::get('/deposit/result/{id}', 'HomeController@depositForCurso');
Route::get('/curso', 'ProductController@create');
Route::post('/product/save', 'ProductController@store');
Route::post('/product/update', 'ProductController@edit');
Route::get('/contenidos', 'ProductController@show');
Route::post('/product/detalle', 'ProductController@detalle');
Route::post('/product/contenido', 'ProductController@contenido');
Route::get('/descripcion/{producto}', 'ProductController@descripcion');
Route::get('/silabos/{producto}', 'ProductController@silabos');
Route::post('/product/update', 'ProductController@update');
Route::get('/listaCursos', 'ProductController@listaCursos');
Route::get('/editarCurso/{producto}', 'ProductController@frmEditCurso');
Route::post('/product/updateAdmin', 'ProductController@updateAdmin');
