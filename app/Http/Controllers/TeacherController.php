<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    	return view('teacher_suitable');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function suitable()
    {
    	//
    	return view('teacher_suitable');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function elegible()
    {
    	//
    	return view('teacher_elegible');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
    
    public function searchTeacher_suitable(Request $request){
   	
    	$cadena = '';
    	$idoneos = Teacher::join('personalities','teachers.ci','=','personalities.ci')
    		->join('reasonings','teachers.ci','=','reasonings.ci')
    		->where('teachers.ci',$request->ci)
    		->select('teachers.ci','teachers.name','personalities.opinion as personalidad','reasonings.opinion as razonamiento')
    		->get();

    	
    	if( count($idoneos) > 0 )	{
    		foreach ($idoneos as $value){
    			
    		    $cadena .= "<table class='table table-hover'>";
    		    $cadena .= "<thead>";
    		    $cadena .=  "<th colspan='2'>Datos del aspirante</th>";
    		    $cadena .= "</thead>";
    		    $cadena .= "<tr>";
    			$cadena .=  "<td>CI  </td>";
    			$cadena .=  "<td>" . $value->ci . "</td>";
    			$cadena .=  "</tr>";
     			$cadena .= "<tr>";
    			$cadena .=  "<td>Nombre  </td>";
    			$cadena .=  "<td>" . $value->name . "</td>";
    			$cadena .=  "</tr>";
    			$cadena .= "<tr>";
    			$cadena .=  "<td>Personalidad  </td>";
    			$cadena .=  "<td>" . $value->personalidad. "</td>";
    			$cadena .=  "</tr>";
    			$cadena .= "<tr>";
    			$cadena .=  "<td>Razonamiento  </td>";
    			$cadena .=  "<td>" . $value->razonamiento. "</td>";
    			$cadena .=  "</tr>";
    			$cadena .= "<tr>";
    			$cadena .=  "<td>Su estado es  </td>";
    			$tmp = (($value->personalidad == $value->razonamiento) && ($value->personalidad == 'ADECUADO'))?'IDONEO':'NO ES IDONEO';
    			$cadena .=  "<td><span style='color:#d9534f'>" . $tmp. "</span></td>";
    			$cadena .=  "</tr>";
    			$cadena .= "</table>";
    			
       		}
       		


       		$results[] = [ 'value' => $cadena, 'flag' => ''];
    	} else {
    		$cadena .= "<tr>";
    		$cadena .=  "<td colspan='7'>No existe su cedula</td>";
    		$cadena .=  "</tr>";
    		
    		$results[] = [ 'value' => $cadena, 'flag' => 'No existe su cedula' ];
    	}
    	return response()->json($results);
    	
    }

    public function searchTeacher_elegible(Request $request){
    	
    	$cadena = '';
    	$elegibles = Teacher::join('knowledges','teachers.ci','=','knowledges.ci')
	    	->where('teachers.ci',$request->ci_1)
	    	->select('teachers.ci','teachers.name','knowledges.opinion','knowledges.specialty','knowledges.know')
	    	->get();
    	
    	$cadena .= "<table class='table table-hover'>";
    	$cadena .= "<thead>";
    	$cadena .=  "<th colspan='4'>Datos del aspirante</th>";
    	$cadena .= "</thead>";
    	if( count($elegibles) > 0 )	{
    		foreach ($elegibles as $value){
    			$cadena .= "<tr id='" . $value->id . "'>";
    			$cadena .=  "<td>" . $value->ci . "</td>";
    			$cadena .=  "<td>" . $value->name . "</td>";
    			if($value->opinion != "NO ELEGIBLE")
                        $cadena .=  "<td>" . $value->specialty . "</td>";
                        //opinion=dictamen
                        //know=saberes
    			$cadena .=  "<td>" . $value->opinion. "</td>";
    			//$tmp = ($value->know)?'SI':'NO';
    			//$cadena .=  "<td>" . $tmp . "</td>";
    			$cadena .=  "</tr>";
    		}
    		
    		$cadena .= "</table>";
    		$results[] = [ 'value' => $cadena, 'flag' => ''];
    	} else {
    		$cadena .= "<tr>";
    		$cadena .=  "<td colspan='4'>No existe su cedula</td>";
    		$cadena .=  "</tr>";
    		
    		$cadena .= "</table>";
    		$results[] = [ 'value' => $cadena, 'flag' => 'No existe su cedula' ];
    	}
    	
    	return response()->json($results);
    	
    }

    public function search(Request $request){
    	
    	$idoneos = Teacher::join('personalities','teachers.ci','=','personalities.ci')
    	->join('reasonings','teachers.ci','=','reasonings.ci')
    	->where('teachers.ci',$request->ci_search)
    	->select('teachers.ci','teachers.name','personalities.opinion as personalidad','reasonings.opinion as razonamiento')
    	->get();
    	if(count($idoneos) > 0){
    		$selection = (($idoneos[0]->personalidad == $idoneos[0]->razonamiento) && ($idoneos[0]->personalidad == 'ADECUADO'))?'IDONEO':'NO ES IDONEO';
    	} else {
    		$selection = '';
    	}
    	return view('search',['datos' => $idoneos, 'selection' => $selection]);
    }
    
}
