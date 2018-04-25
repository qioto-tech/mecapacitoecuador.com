<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Parameter;

class ResultController extends Controller
{
    private $constant = null;
    private $resultado = null;
    private $columnas = array(0 => 'B',1 => 'C',2 => 'D',3 => 'E',4 => 'F',5 => 'G',6 => 'H',7 => 'I',
    		8 => 'J',9 => 'K',10 => 'L',11 => 'M',12 => 'N',13 => 'O',14 => 'P',15 => 'Q',16 => 'R',17 => 'S',
    		18 => 'T',19 => 'U',20 => 'V',21 => 'W',22 => 'X',23 => 'Y',24 => 'Z',25 => 'AA');
    
	public function __construct()
    {
    	$this->constant = array (
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 120, 'Z' => null, 'AA' => null),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 119, 'Z' => null, 'AA' => null),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 118, 'Z' => null, 'AA' => null),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 116, 'Z' => null, 'AA' => null),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => 100, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 115, 'Z' => null, 'AA' => 95),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => 99, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 113, 'Z' => null, 'AA' => 94),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 120, 'M' => null, 'N' => 98, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => 112, 'Z' => null, 'AA' => 93),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 118, 'M' => null, 'N' => 97, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 120, 'Y' => 111, 'Z' => null, 'AA' => 91),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 117, 'M' => null, 'N' => 96, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 119, 'Y' => 109, 'Z' => null, 'AA' => 90),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 115, 'M' => null, 'N' => 94, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 117, 'Y' => 108, 'Z' => null, 'AA' => 89),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 113, 'M' => null, 'N' => 93, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 115, 'Y' => 106, 'Z' => null, 'AA' => 88),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 111, 'M' => null, 'N' => 92, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 114, 'Y' => 105, 'Z' => null, 'AA' => 87),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => 110, 'M' => null, 'N' => 91, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 112, 'Y' => 103, 'Z' => null, 'AA' => 86),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => 120, 'L' => 108, 'M' => null, 'N' => 90, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 11, 'Y' => 102, 'Z' => null, 'AA' => 85),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => 119, 'L' => 106, 'M' => null, 'N' => 89, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 108, 'Y' => 100, 'Z' => null, 'AA' => 84),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => 117, 'L' => 105, 'M' => null, 'N' => 87, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 106, 'Y' => 99, 'Z' => null, 'AA' => 83),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => 115, 'L' => 103, 'M' => null, 'N' => 86, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 105, 'Y' => 97, 'Z' => null, 'AA' => 82),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => 109, 'J' => null, 'K' => 113, 'L' => 101, 'M' => null, 'N' => 85, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 103, 'Y' => 96, 'Z' => null, 'AA' => 81),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 120, 'G' => null, 'H' => null, 'I' => 107, 'J' => null, 'K' => 111, 'L' => 99, 'M' => null, 'N' => 84, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 101, 'Y' => 94, 'Z' => null, 'AA' => 79),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 119, 'G' => null, 'H' => null, 'I' => 105, 'J' => null, 'K' => 109, 'L' => 98, 'M' => null, 'N' => 83, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 99, 'Y' => 93, 'Z' => null, 'AA' => 78),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 117, 'G' => null, 'H' => null, 'I' => 103, 'J' => null, 'K' => 106, 'L' => 96, 'M' => null, 'N' => 82, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 120, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => 97, 'Y' => 91, 'Z' => null, 'AA' => 77),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 115, 'G' => null, 'H' => null, 'I' => 101, 'J' => null, 'K' => 104, 'L' => 94, 'M' => null, 'N' => 80, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 118, 'T' => 120, 'U' => null, 'V' => null, 'W' => null, 'X' => 95, 'Y' => 90, 'Z' => null, 'AA' => 76),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 114, 'G' => null, 'H' => 120, 'I' => 99, 'J' => null, 'K' => 102, 'L' => 93, 'M' => null, 'N' => 79, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 116, 'T' => 118, 'U' => null, 'V' => null, 'W' => null, 'X' => 94, 'Y' => 88, 'Z' => null, 'AA' => 75),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 112, 'G' => 120, 'H' => 117, 'I' => 97, 'J' => null, 'K' => 100, 'L' => 91, 'M' => null, 'N' => 78, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 114, 'T' => 115, 'U' => 120, 'V' => null, 'W' => null, 'X' => 92, 'Y' => 87, 'Z' => null, 'AA' => 74),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 110, 'G' => 119, 'H' => 115, 'I' => 95, 'J' => null, 'K' => 98, 'L' => 89, 'M' => null, 'N' => 77, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 112, 'T' => 113, 'U' => 118, 'V' => null, 'W' => null, 'X' => 90, 'Y' => 85, 'Z' => null, 'AA' => 73),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 108, 'G' => 116, 'H' => 112, 'I' => 93, 'J' => null, 'K' => 96, 'L' => 87, 'M' => null, 'N' => 76, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 109, 'T' => 111, 'U' => 115, 'V' => null, 'W' => null, 'X' => 88, 'Y' => 84, 'Z' => null, 'AA' => 72),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 106, 'G' => 114, 'H' => 110, 'I' => 91, 'J' => null, 'K' => 94, 'L' => 86, 'M' => null, 'N' => 75, 'O' => null, 'P' => null, 'Q' => null, 'R' => null, 'S' => 107, 'T' => 108, 'U' => 113, 'V' => null, 'W' => null, 'X' => 86, 'Y' => 82, 'Z' => null, 'AA' => 71),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 104, 'G' => 111, 'H' => 107, 'I' => 89, 'J' => null, 'K' => 91, 'L' => 84, 'M' => null, 'N' => 73, 'O' => null, 'P' => null, 'Q' => null, 'R' => 120, 'S' => 105, 'T' => 106, 'U' => 110, 'V' => null, 'W' => null, 'X' => 84, 'Y' => 81, 'Z' => null, 'AA' => 70),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => null, 'F' => 102, 'G' => 109, 'H' => 105, 'I' => 87, 'J' => null, 'K' => 89, 'L' => 82, 'M' => null, 'N' => 72, 'O' => null, 'P' => null, 'Q' => null, 'R' => 118, 'S' => 103, 'T' => 104, 'U' => 107, 'V' => null, 'W' => null, 'X' => 83, 'Y' => 79, 'Z' => null, 'AA' => 69),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 120, 'F' => 100, 'G' => 106, 'H' => 102, 'I' => 85, 'J' => null, 'K' => 87, 'L' => 81, 'M' => null, 'N' => 71, 'O' => null, 'P' => null, 'Q' => null, 'R' => 116, 'S' => 101, 'T' => 101, 'U' => 105, 'V' => 30, 'W' => null, 'X' => 81, 'Y' => 78, 'Z' => 120, 'AA' => 67),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 119, 'F' => 98, 'G' => 104, 'H' => 100, 'I' => 83, 'J' => null, 'K' => 85, 'L' => 79, 'M' => 120, 'N' => 70, 'O' => null, 'P' => null, 'Q' => null, 'R' => 113, 'S' => 99, 'T' => 99, 'U' => 102, 'V' => 33, 'W' => null, 'X' => 79, 'Y' => 76, 'Z' => 118, 'AA' => 66),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 116, 'F' => 97, 'G' => 101, 'H' => 97, 'I' => 81, 'J' => null, 'K' => 83, 'L' => 77, 'M' => 117, 'N' => 69, 'O' => null, 'P' => null, 'Q' => null, 'R' => 111, 'S' => 96, 'T' => 96, 'U' => 100, 'V' => 35, 'W' => null, 'X' => 77, 'Y' => 75, 'Z' => 115, 'AA' =>  65),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 114, 'F' => 95, 'G' => 99, 'H' => 95, 'I' => 79, 'J' => null, 'K' => 81, 'L' => 75, 'M' => 114, 'N' => 68, 'O' => null, 'P' => null, 'Q' => null, 'R' => 109, 'S' => 94, 'T' => 94, 'U' => 97, 'V' => 38, 'W' => null, 'X' => 75, 'Y' => 73, 'Z' => 112, 'AA' => 64),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 112, 'F' => 93, 'G' => 96, 'H' => 92, 'I' => 78, 'J' => null, 'K' => 79, 'L' => 74, 'M' => 110, 'N' => 66, 'O' => null, 'P' => null, 'Q' => null, 'R' => 107, 'S' => 92, 'T' => 92, 'U' => 94, 'V' => 40, 'W' => null, 'X' => 73, 'Y' => 72, 'Z' => 109, 'AA' => 63),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 110, 'F' => 91, 'G' => 94, 'H' => 90, 'I' => 76, 'J' => null, 'K' => 77, 'L' => 72, 'M' => 107, 'N' => 65, 'O' => null, 'P' => null, 'Q' => null, 'R' => 105, 'S' => 90, 'T' => 89, 'U' => 92, 'V' => 43, 'W' => null, 'X' => 72, 'Y' => 70, 'Z' => 106, 'AA' => 62),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 108, 'F' => 89, 'G' => 91, 'H' => 87, 'I' => 74, 'J' => null, 'K' => 74, 'L' => 70, 'M' => 104, 'N' => 64, 'O' => null, 'P' => null, 'Q' => null, 'R' => 103, 'S' => 88, 'T' => 87, 'U' => 89, 'V' => 45, 'W' => null, 'X' => 70, 'Y' => 69, 'Z' => 103, 'AA' => 61),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 105, 'F' => 87, 'G' => 89, 'H' => 84, 'I' => 72, 'J' => null, 'K' => 72, 'L' => 69, 'M' => 101, 'N' => 63, 'O' => null, 'P' => null, 'Q' => null, 'R' => 101, 'S' => 86, 'T' => 84, 'U' => 87, 'V' => 47, 'W' => null, 'X' => 68, 'Y' => 67, 'Z' => 100, 'AA' => 60),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 103, 'F' => 85, 'G' => 86, 'H' => 82, 'I' => 70, 'J' => null, 'K' => 70, 'L' => 67, 'M' => 98, 'N' => 62, 'O' => null, 'P' => null, 'Q' => null, 'R' => 99, 'S' => 83, 'T' => 82, 'U' => 84, 'V' => 50, 'W' => null, 'X' => 66, 'Y' => 66, 'Z' => 97, 'AA' => 59),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 101, 'F' => 83, 'G' => 84, 'H' => 79, 'I' => 68, 'J' => null, 'K' => 68, 'L' => 65, 'M' => 94, 'N' => 61, 'O' => null, 'P' => null, 'Q' => null, 'R' => 97, 'S' => 81, 'T' => 80, 'U' => 81, 'V' => 52, 'W' => null, 'X' => 64, 'Y' => 65, 'Z' => 94, 'AA' => 58),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 99, 'F' => 81, 'G' => 81, 'H' => 77, 'I' => 66, 'J' => null, 'K' => 66, 'L' => 63, 'M' => 91, 'N' => 59, 'O' => null, 'P' => null, 'Q' => null, 'R' => 95, 'S' => 79, 'T' => 77, 'U' => 79, 'V' => 55, 'W' => null, 'X' => 62, 'Y' => 63, 'Z' => 91, 'AA' => 57),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 97, 'F' => 80, 'G' => 79, 'H' => 74, 'I' => 64, 'J' => null, 'K' => 64, 'L' => 62, 'M' => 88, 'N' => 58, 'O' => null, 'P' => null, 'Q' => null, 'R' => 92, 'S' => 77, 'T' => 75, 'U' => 76, 'V' => 57, 'W' => null, 'X' => 61, 'Y' => 62, 'Z' => 88, 'AA' => 55),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 94, 'F' => 78, 'G' => 76, 'H' => 72, 'I' => 62, 'J' => null, 'K' => 62, 'L' => 60, 'M' => 85, 'N' => 57, 'O' => null, 'P' => null, 'Q' => null, 'R' => 90, 'S' => 75, 'T' => 73, 'U' => 73, 'V' => 60, 'W' => null, 'X' => 59, 'Y' => 60, 'Z' => 85, 'AA' => 54),
    			array('B' => null, 'C' => null, 'D' => null, 'E' => 92, 'F' => 76, 'G' => 74, 'H' => 69, 'I' => 60, 'J' => null, 'K' => 59, 'L' => 58, 'M' => 81, 'N' => 56, 'O' => null, 'P' => null, 'Q' => null, 'R' => 88, 'S' => 72, 'T' => 70, 'U' => 71, 'V' => 62, 'W' => null, 'X' => 57, 'Y' => 59, 'Z' => 83, 'AA' => 53),
    			array('B' => null, 'C' => null, 'D' => 81, 'E' => 90, 'F' => 74, 'G' => 71, 'H' => 67, 'I' => 58, 'J' => 120, 'K' => 57, 'L' => 56, 'M' => 78, 'N' => 55, 'O' => null, 'P' => null, 'Q' => 83, 'R' => 86, 'S' => 70, 'T' => 68, 'U' => 68, 'V' => 65, 'W' => 120, 'X' => 55, 'Y' => 57, 'Z' => 79, 'AA' => 52),
    			array('B' => null, 'C' => null, 'D' => 79, 'E' => 88, 'F' => 72, 'G' => 69, 'H' => 64, 'I' => 56, 'J' => 119, 'K' => 55, 'L' => 55, 'M' => 75, 'N' => 54, 'O' => null, 'P' => null, 'Q' => 81, 'R' => 84, 'S' => 68, 'T' => 65, 'U' => 66, 'V' => 67, 'W' => 118, 'X' => 53, 'Y' => 55, 'Z' => 76, 'AA' => 51),
    			array('B' => null, 'C' => 120, 'D' => 77, 'E' => 86, 'F' => 70, 'G' => 66, 'H' => 62, 'I' => 54, 'J' => 116, 'K' => 53, 'L' => 53, 'M' => 72, 'N' => 52, 'O' => null, 'P' => null, 'Q' => 78, 'R' => 82, 'S' => 66, 'T' => 63, 'U' => 63, 'V' => 69, 'W' => 114, 'X' => 51, 'Y' => 53, 'Z' => 74, 'AA' => 50),
    			array('B' => null, 'C' => 119, 'D' => 75, 'E' => 84, 'F' => 68, 'G' => 64, 'H' => 59, 'I' => 52, 'J' => 112, 'K' => 51, 'L' => 51, 'M' => 69, 'N' => 51, 'O' => null, 'P' => null, 'Q' => 76, 'R' => 80, 'S' => 64, 'T' => 61, 'U' => 60, 'V' => 72, 'W' => 111, 'X' => 49, 'Y' => 52, 'Z' => 71, 'AA' => 49),
    			array('B' => null, 'C' => 116, 'D' => 72, 'E' => 81, 'F' => 66, 'G' => 61, 'H' => 57, 'I' => 50, 'J' => 108, 'K' => 49, 'L' => 49, 'M' => 65, 'N' => 50, 'O' => null, 'P' => null, 'Q' => 74, 'R' => 78, 'S' => 62, 'T' => 58, 'U' => 58, 'V' => 74, 'W' => 107, 'X' => 47, 'Y' => 50, 'Z' => 68, 'AA' => 48),
    			array('B' => null, 'C' => 113, 'D' => 70, 'E' => 79, 'F' => 64, 'G' => 59, 'H' => 54, 'I' => 48, 'J' => 105, 'K' => 47, 'L' => 47, 'M' => 62, 'N' => 49, 'O' => null, 'P' => null, 'Q' => 72, 'R' => 76, 'S' => 59, 'T' => 56, 'U' => 55, 'V' => 77, 'W' => 103, 'X' => 44, 'Y' => 48, 'Z' => 65, 'AA' => 47),
    			array('B' => null, 'C' => 110, 'D' => 68, 'E' => 77, 'F' => 62, 'G' => 57, 'H' => 52, 'I' => 46, 'J' => 101, 'K' => 44, 'L' => 54, 'M' => 59, 'N' => 48, 'O' => null, 'P' => 120, 'Q' => 70, 'R' => 74, 'S' => 57, 'T' => 54, 'U' => 53, 'V' => 79, 'W' => 100, 'X' => 42, 'Y' => 46, 'Z' => 62, 'AA' => 46),
    			array('B' => null, 'C' => 107, 'D' => 66, 'E' => 75, 'F' => 61, 'G' => 54, 'H' => 50, 'I' => 44, 'J' => 97, 'K' => 43, 'L' => 44, 'M' => 56, 'N' => 47, 'O' => null, 'P' => 115, 'Q' => 67, 'R' => 71, 'S' => 55, 'T' => 51, 'U' => 51, 'V' => 82, 'W' => 96, 'X' => 40, 'Y' => 44, 'Z' => 59, 'AA' => 45),
    			array('B' => null, 'C' => 104, 'D' => 64, 'E' => 73, 'F' => 59, 'G' => 52, 'H' => 48, 'I' => 42, 'J' => 94, 'K' => 41, 'L' => 42, 'M' => 53, 'N' => 45, 'O' => null, 'P' => 113, 'Q' => 65, 'R' => 69, 'S' => 53, 'T' => 49, 'U' => 49, 'V' => 84, 'W' => 92, 'X' => 39, 'Y' => 42, 'Z' => 56, 'AA' => 43),
    			array('B' => null, 'C' => 101, 'D' => 62, 'E' => 70, 'F' => 57, 'G' => 50, 'H' => 46, 'I' => 40, 'J' => 90, 'K' => 39, 'L' => 40, 'M' => 51, 'N' => 44, 'O' => null, 'P' => 109, 'Q' => 63, 'R' => 67, 'S' => 51, 'T' => 47, 'U' => 47, 'V' => 87, 'W' => 89, 'X' => 37, 'Y' => 41, 'Z' => 53, 'AA' => 42),
    			array('B' => null, 'C' => 98, 'D' => 60, 'E' => 68, 'F' => 54, 'G' => 47, 'H' => 44, 'I' => 38, 'J' => 86, 'K' => 37, 'L' => 38, 'M' => 49, 'N' => 43, 'O' => null, 'P' => 106, 'Q' => 61, 'R' => 65, 'S' => 49, 'T' => 45, 'U' => 45, 'V' => 89, 'W' => 85, 'X' => 35, 'Y' => 39, 'Z' => 51, 'AA' => 41),
    			array('B' => null, 'C' => 95, 'D' => 58, 'E' => 66, 'F' => 52, 'G' => 45, 'H' => 42, 'I' => 36, 'J' => 83, 'K' => 36, 'L' => 37, 'M' => 47, 'N' => 42, 'O' => null, 'P' => 103, 'Q' => 59, 'R' => 63, 'S' => 47, 'T' => 43, 'U' => 43, 'V' => 92, 'W' => 81, 'X' => 34, 'Y' => 37, 'Z' => 49, 'AA' => 40),
    			array('B' => null, 'C' => 92, 'D' => 56, 'E' => 64, 'F' => 50, 'G' => 43, 'H' => 40, 'I' => 34, 'J' => 79, 'K' => 34, 'L' => 36, 'M' => 45, 'N' => 41, 'O' => null, 'P' => 99, 'Q' => 56, 'R' => 61, 'S' => 46, 'T' => 41, 'U' => 41, 'V' => 94, 'W' => 78, 'X' => 32, 'Y' => 36, 'Z' => 47, 'AA' => 39),
    			array('B' => null, 'C' => 98, 'D' => 54, 'E' => 62, 'F' => 47, 'G' => 42, 'H' => 39, 'I' => 32, 'J' => 75, 'K' => 33, 'L' => 35, 'M' => 43, 'N' => 40, 'O' => null, 'P' => 96, 'Q' => 54, 'R' => 59, 'S' => 44, 'T' => 39, 'U' => 39, 'V' => 96, 'W' => 74, 'X' => 31, 'Y' => 34, 'Z' => 45, 'AA' => 38),
    			array('B' => null, 'C' => 85, 'D' => 51, 'E' => 59, 'F' => 45, 'G' => 40, 'H' => 37, 'I' => 30, 'J' => 72, 'K' => 32, 'L' => 34, 'M' => 41, 'N' => 38, 'O' => null, 'P' => 93, 'Q' => 52, 'R' => 57, 'S' => 42, 'T' => 38, 'U' => 37, 'V' => 99, 'W' => 70, 'X' => 30, 'Y' => 33, 'Z' => 43, 'AA' => 37),
    			array('B' => 100, 'C' => 82, 'D' => 49, 'E' => 57, 'F' => 42, 'G' => 38, 'H' => 35, 'I' => null, 'J' => 68, 'K' => 31, 'L' => 33, 'M' => 39, 'N' => 37, 'O' => 103, 'P' => 89, 'Q' => 50, 'R' => 54, 'S' => 40, 'T' => 36, 'U' => 36, 'V' => 101, 'W' => 67, 'X' => null, 'Y' => 32, 'Z' => 41, 'AA' => 36),
    			array('B' => 96, 'C' => 79, 'D' => 47, 'E' => 54, 'F' => 40, 'G' => 37, 'H' => 34, 'I' => null, 'J' => 64, 'K' => 30, 'L' => 32, 'M' => 38, 'N' => 37, 'O' => 100, 'P' => 85, 'Q' => 48, 'R' => 51, 'S' => 38, 'T' => 35, 'U' => 34, 'V' => 104, 'W' => 63, 'X' => null, 'Y' => 31, 'Z' => 39, 'AA' => 35),
    			array('B' => 91, 'C' => 76, 'D' => 45, 'E' => 51, 'F' => 38, 'G' => 35, 'H' => 33, 'I' => null, 'J' => 61, 'K' => null, 'L' => 31, 'M' => 36, 'N' => 35, 'O' => 95, 'P' => 82, 'Q' => 46, 'R' => 49, 'S' => 36, 'T' => 34, 'U' => 32, 'V' => 106, 'W' => 59, 'X' => null, 'Y' => 30, 'Z' => 37, 'AA' => 34),
    			array('B' => 87, 'C' => 73, 'D' => 43, 'E' => 48, 'F' => 36, 'G' => 34, 'H' => 31, 'I' => null, 'J' => 57, 'K' => null, 'L' => 30, 'M' => 35, 'N' => 34, 'O' => 90, 'P' => 79, 'Q' => 43, 'R' => 46, 'S' => 34, 'T' => 32, 'U' => 30, 'V' => 109, 'W' => 56, 'X' => null, 'Y' => null, 'Z' => 35, 'AA' => 33),
    			array('B' => 83, 'C' => 70, 'D' => 41, 'E' => 45, 'F' => 34, 'G' => 33, 'H' => 30, 'I' => null, 'J' => 53, 'K' => null, 'L' => null, 'M' => 33, 'N' => 33, 'O' => 86, 'P' => 75, 'Q' => 41, 'R' => 43, 'S' => 32, 'T' => 32, 'U' => null, 'V' => 111, 'W' => 52, 'X' => null, 'Y' => null, 'Z' => 33, 'AA' => 32),
    			array('B' => 78, 'C' => 67, 'D' => 39, 'E' => 42, 'F' => 32, 'G' => 32, 'H' => null, 'I' => null, 'J' => 49, 'K' => null, 'L' => null, 'M' => 31, 'N' => 31, 'O' => 81, 'P' => 72, 'Q' => 39, 'R' => 40, 'S' => 30, 'T' => 31, 'U' => null, 'V' => 114, 'W' => 49, 'X' => null, 'Y' => null, 'Z' => 31, 'AA' => 30),
    			array('B' => 74, 'C' => 64, 'D' => 37, 'E' => 39, 'F' => 30, 'G' => 31, 'H' => null, 'I' => null, 'J' => 46, 'K' => null, 'L' => null, 'M' => 30, 'N' => 30, 'O' => 76, 'P' => 68, 'Q' => 37, 'R' => 38, 'S' => null, 'T' => 30, 'U' => null, 'V' => 116, 'W' => 45, 'X' => null, 'Y' => null, 'Z' => 30, 'AA' => null),
    			array('B' => 70, 'C' => 61, 'D' => 35, 'E' => 37, 'F' => null, 'G' => 30, 'H' => null, 'I' => null, 'J' => 42, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 71, 'P' => 65, 'Q' => 35, 'R' => 35, 'S' => null, 'T' => null, 'U' => null, 'V' => 118, 'W' => 42, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 65, 'C' => 58, 'D' => 33, 'E' => 35, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 39, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 66, 'P' => 61, 'Q' => 32, 'R' => 33, 'S' => null, 'T' => null, 'U' => null, 'V' => 120, 'W' => 39, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 61, 'C' => 55, 'D' => 30, 'E' => 33, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 37, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 62, 'P' => 58, 'Q' => 30, 'R' => 30, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => 37, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 56, 'C' => 51, 'D' => null, 'E' => 32, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 34, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 57, 'P' => 53, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => 34, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 52, 'C' => 48, 'D' => null, 'E' => 31, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 32, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 52, 'P' => 51, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => 32, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 48, 'C' => 45, 'D' => null, 'E' => 31, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 31, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 47, 'P' => 48, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => 31, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 43, 'C' => 42, 'D' => null, 'E' => 30, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => 30, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 43, 'P' => 44, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => 30, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 39, 'C' => 39, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 38, 'P' => 41, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			array('B' => 35, 'C' => 36, 'D' => null, 'E' => null, 'F' => null, 'G' => null, 'H' => null, 'I' => null, 'J' => null, 'K' => null, 'L' => null, 'M' => null, 'N' => null, 'O' => 33, 'P' => 37, 'Q' => null, 'R' => null, 'S' => null, 'T' => null, 'U' => null, 'V' => null, 'W' => null, 'X' => null, 'Y' => null, 'Z' => null, 'AA' => null),
    			
    			);
    	$this->resultado = array(
    			array('N' => 'L','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'F','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'K','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Hs','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'D','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Hy','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Pd','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Mf','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Pa','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Pt','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Sc','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Ma','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    			array('N' => 'Si','TV' => null, 'TF' => null, 'TB' => null, 'T' => null),
    		);
    }
    
    //
	public function index()
	{
		return view('result');//
		//
	}
	
	public function parameters_result($param, $note){
		$description = '';
		
		$parameters = Parameter::where('code',$param)
						->get();
		foreach ($parameters as $parameter){
			$val = explode(',', $parameter->rank);
			if ( is_numeric($val[0]) && is_numeric($val[1])){
				if( ($val[0] < $note) && ($val[1] > $note) ){
					$description = $parameter->description;
				}
			} elseif ( is_numeric($val[0]) ){
				if( ($val[0] <= $note) ){
					$description = $parameter->description;
				}
			} else {
					if( ($val[1] >= $note) ){
						$description = $parameter->description;
					}
			}

		}
		
		$results[] = [ 'value' => $description];
		return response()->json($results);
	}
	
	public function validate_result(Request $request)
	{
		$cadena = '';
		$usu_usuario = $request->usuario;
		$usu_password = md5( $request->password);
		$attempt = $request->attempt;
		
		$usuario = DB::connection('mecapacitoecuador')->select('	
 		SELECT us.id FROM `TB_USUARIOS` tmp
 		inner join mood_user us on (UPPER(us.username) = UPPER(tmp.usu_usuario))
 		where tmp.usu_usuario = ? and tmp.usu_password = ?',[$usu_usuario,$usu_password]);
		
		if(count($usuario) > 0){
			$this->process ($attempt, $usuario[0]->id, $request->sexo);
			$cadena = $this->present_info(1);
			$results[] = [ 'value' => $cadena];
		} else {
			$cadena = $this->present_info(0);
			$results[] = [ 'value' => $cadena];
		}
		
		return response()->json($results);
		//
	}
	
	private function present_info($flag)
	{
		$cadena = '';
		$cadena .= '<table class="table table-bordered  table-hover">';
		$cadena .= '		<thead>';
		$cadena .= '<tr>';
		$cadena .= '		<th>#</th>';
		$cadena .= '<th>Total V</th>';
		$cadena .= '<th>Total F</th>';
		$cadena .= '		<th>Total B</th>';
		$cadena .= '<th>Total</th>';
		$cadena .= '<th>Parametro</th>';
		$cadena .= '		</tr>';
		$cadena .= '</thead>';
		$cadena .= '		<tbody>';
		if ($flag == 1){
			for ($i = 0; $i < 13; $i++)
			{	
				$cadena .= '<tr>';
				$cadena .= '	<td>' . $this->resultado[$i]['N'] . '</td>';
				$cadena .= '	<td>' . $this->resultado[$i]['TV'] . '</td>';
				$cadena .= '	<td>' . $this->resultado[$i]['TF'] . '</td>';
				$cadena .= '	<td>' . $this->resultado[$i]['TB'] . '</td>';
				$cadena .= '	<td>' . $this->resultado[$i]['T'] . '</td>';
				$cadena .= '	<td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="view_parameters(\''.$this->resultado[$i]['N'].'\','.$this->resultado[$i]['T'].');">Ver</button></td>';
				$cadena .= '</tr>';
			}
		} else {
			$cadena .= '<tr><td colspan="5">No existe el usuario</td></tr>';
		}
		$cadena .= '		</tbody>';
		$cadena .= '</table><br><hr>';
		
		return $cadena;
	}
	
	private function process ($attempt, $user, $genero)
	{
		
		//registro verdades totalesL
		
		
// 		select us.id usuario_id, us.username usuario, us_ev.quiz prueba_id, ev.name, pre_gui.questionid pregunta_id,
// 		pre.name pregunta_descripcion , pre_gui.page pregunta_pagina, pre_gui.maxmark pregunta_puntaje, result.rightanswer respuesta_correcta,
// 		result.responsesummary respuesta_usuario, hom.Id_pregunta_excel
// 		from mood_user us
// 		join mood_quiz_attempts us_ev on us.id = us_ev.userid
// 		join mood_quiz ev on ev.id = us_ev.quiz
// 		join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz
// 		join mood_question pre on pre_gui.questionid = pre.id
// 		join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
// 		join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
// 		where us_ev.attempt = 2 and us.id = X
		
		$this->resultado[0]['TV'] = 0;
		//LV = 0
		
		$fv =	DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as FV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
			result.responsesummary = ? and
			hom.Id_pregunta_excel in (25,31,37,43,49,55,61,67,73,79,91,103,121,145,151,157,163,169,175,187,205,223,235,241,247,253,259,265,271,277,289,295,301,307,313,319,331,343,356,362,368)
			GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//FV suma los resultados verdadero columna F in (25,31,37,43,49,55,61,67,73,79,91,103,121,145,151,157,163,169,175,187,205,223,235,241,247,253,259,265,271,277,289,295,301,307,313,319,331,343,356,362,368)
		$this->resultado[1]['TV'] = (count($fv) == 0)?0:((is_null($fv[0]->FV))?0:$fv[0]->FV);
			
		
		$kv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as KV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (90)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//KV suma los resultados verdadero columna F in (90)
		//dd($kv);
		$this->resultado[2]['TV'] = (count($kv) == 0)?0:((is_null($kv[0]->KV))?0:$kv[0]->KV);
		
		
		$hsv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as HSV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (25,35,46,60,66,104,108,118,156,182,254)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//HsV suma los resultados verdadero columna F in (25,35,46,60,66,104,108,118,156,182,254)
		$this->resultado[3]['TV'] = (count($hsv) == 0)?0:((is_null($hsv[0]->HSV))?0:$hsv[0]->HSV);
		
		 
		$dv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as DV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (12,22,25,44,45,46,53,63,80,99,124,134,137,153,154,177,182,188,222,240)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//DV suma los resultados verdadero columna F in (12,22,25,44,45,46,53,63,80,99,124,134,137,153,154,177,182,188,222,240)
		$this->resultado[4]['TV'] = (count($dv) == 0)?0:((is_null($dv[0]->DV))?0:$dv[0]->DV);
		
		
		$hyv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as HYV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (18,25,38,46,47,51,72,108,173,179,182,225,237)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//HyV suma los resultados verdadero columna F in (18,25,38,46,47,51,72,108,173,179,182,225,237)
		$this->resultado[5]['TV'] = (count($hyv) == 0)?0:((is_null($hyv[0]->HYV))?0:$hyv[0]->HYV);
		
		
		$pdv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PDV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (24,28,29,38,39,42,49,59,61,63,78,89,96,101,106,112,120,202,209,226,232,266,271,295)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//PdV suma los resultados verdadero columna F in (24,28,29,38,39,42,49,59,61,63,78,89,96,101,106,112,120,202,209,226,232,266,271,295)
		$this->resultado[6]['TV'] = (count($pdv) == 0)?0:((is_null($pdv[0]->PDV))?0:$pdv[0]->PDV);
		
		if ($genero == 1) {
		$mfv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MFV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (11,32,69,71,74,81,87,119,126,129,135,144,173,184,194,198,203,212,216,226,243,258,263,275,278)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//MfV H suma los resultados verdadero columna F in (11,32,69,71,74,81,87,119,126,129,135,144,173,184,194,198,203,212,216,226,243,258,263,275,278)
		} else {
		//mujer
		$mfv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MFV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (11,32,69,71,74,81,87,119,126,128,129,135,144,135,144,184,194,198,203,212,226,243,258,263,278)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//MfV M suma los resultados verdadero columna F in (11,32,69,71,74,81,87,119,126,128,129,135,144,135,144,184,194,198,203,212,226,243,258,263,278)
		}
		$this->resultado[7]['TV'] = (count($mfv) == 0)?0:((is_null($mfv[0]->MFV))?0:$mfv[0]->MFV);
		
		
		$pav = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PAV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (23,24,29,30,31,49,106,120,145,151,152,153,169,241,266,278,284,292,312,314,340,341,343,362,368)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//PaV suma los resultados verdadero columna F in (23,24,29,30,31,49,106,120,145,151,152,153,169,241,266,278,284,292,312,314,340,341,343,362,368)
		$this->resultado[8]['TV'] = (count($pav) == 0)?0:((is_null($pav[0]->PAV))?0:$pav[0]->PAV);
		
		
		$ptv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PTV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (18,23,30,38,45,63,72,80,89,96,101,137,154,177,182,203,225,249,280,282,284,292,296,308,309,311,315,316,317,320,323,324,327,332,333,334,335,336,338)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//PtV suma los resultados verdadero columna F in (18,23,30,38,45,63,72,80,89,96,101,137,154,177,182,203,225,249,280,282,284,292,296,308,309,311,315,316,317,320,323,324,327,332,333,334,335,336,338)
		$this->resultado[9]['TV'] = (count($ptv) == 0)?0:((is_null($ptv[0]->PTV))?0:$ptv[0]->PTV);
		
		
		$scv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as SCV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (23,24,28,29,30,38,39,42,45,49,51,53,55,72,92,99,145,152,154,173,175,177,187,189,197,225,228,236,240,241,249,254,259,263,275,280,281,284,286,288,294,298,299,303,305,306,310,314,318,323,326,327,329,330,332,336,339,340,362)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//ScV suma los resultados verdadero columna F in (23,24,28,29,30,38,39,42,45,49,51,53,55,72,92,99,145,152,154,173,175,177,187,189,197,225,228,236,240,241,249,254,259,263,275,280,281,284,286,288,294,298,299,303,305,306,310,314,318,323,326,327,329,330,332,336,339,340,362)
		$this->resultado[10]['TV'] = (count($scv) == 0)?0:((is_null($scv[0]->SCV))?0:$scv[0]->SCV);
		
		
		$mav = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MAV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (20,22,28,30,57,62,68,92,94,105,120,129,138,152,162,175,176,189,197,207,212,213,218,219,225,227,234,236,245,249,251,255,257,260,276)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//MaV suma los resultados verdadero columna F in (20,22,28,30,57,62,68,92,94,105,120,129,138,152,162,175,176,189,197,207,212,213,218,219,225,227,234,236,245,249,251,255,257,260,276)
		$this->resultado[11]['TV'] = (count($mav) == 0)?0:((is_null($mav[0]->MAV))?0:$mav[0]->MAV);
		
		
		$siv = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as SIV
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (38,63,77,107,111,117,134,142,165,168,174,192,222,250,258,272,282,291,296,303,309,315,333,344,345,354,355,358,359,364,371,374,375,376)
		GROUP BY result.responsesummary',[$attempt,$user,'VERDADERO']);
		//SiV suma los resultados verdadero columna F in (38,63,77,107,111,117,134,142,165,168,174,192,222,250,258,272,282,291,296,303,309,315,333,344,345,354,355,358,359,364,371,374,375,376)
		$this->resultado[12]['TV'] = (count($siv) == 0)?0:((is_null($siv[0]->SIV))?0:$siv[0]->SIV);
		
		
		
		//registro falsos totales F
		
		$lf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as LF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (23,36,48,58,84,100,109,114,130,146,160,190,210,239,267)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//LF suma los resultados falsos columna G in (23,36,48,58,84,100,109,114,130,146,160,190,210,239,267)
		$this->resultado[0]['TF'] = (count($lf) == 0)?0:((is_null($lf[0]->LF))?0:$lf[0]->LF);
		
		
		$ff = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as FF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (13,19,85,97,109,115,127,133,139,181,193,199,211,217,229,283,325,337,350)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//FF suma los resultados falsos columna G in (13,19,85,97,109,115,127,133,139,181,193,199,211,217,229,283,325,337,350)
		$this->resultado[1]['TF'] = (count($ff) == 0)?0:((is_null($ff[0]->FF))?0:$ff[0]->FF);
		
		
		$kf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as KF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (36,44,65,83,117,123,129,134,137,143,155,164,165,174,178,203,220,250,274,291,297,337,345,346,348,353,355,363,372)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//KF suma los resultados falsos columna G in (36,44,65,83,117,123,129,134,137,143,155,164,165,174,178,203,220,250,274,291,297,337,345,346,348,353,355,363,372)
		$this->resultado[2]['TF'] = (count($kf) == 0)?0:((is_null($kf[0]->KF))?0:$kf[0]->KF);
		
		
		$hsf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as HSF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (9,10,15,17,27,52,54,64,98,124,148,150,159,171,180,183,186,215,231,256,262)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//HsF suma los resultados falsos columna G in (9,10,15,17,27,52,54,64,98,124,148,150,159,171,180,183,186,215,231,256,262)
		$this->resultado[3]['TF'] = (count($hsf) == 0)?0:((is_null($hsf[0]->HSF))?0:$hsf[0]->HSF);
		
		
		$df = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as DF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (9,16,17,27,36,40,44,50,52,56,62,75,82,83,102,116,125,141,147,148,149,150,155,172,185,195,196,219,228,230,233,245,252,255,267,274,337)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//DF suma los resultados falsos columna G in (9,16,17,27,36,40,44,50,52,56,62,75,82,83,102,116,125,141,147,148,149,150,155,172,185,195,196,219,228,230,233,245,252,255,267,274,337)
		$this->resultado[4]['TF'] = (count($df) == 0)?0:((is_null($df[0]->DF))?0:$df[0]->DF);
		
		
		$hyf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as HYF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (9,10,14,15,16,17,21,33,36,52,54,65,83,88,98,102,105,117,122,123,131,132,136,142,148,155,158,159,164,166,168,171,174,180,183,186,192,200,215,220,231,248,250,256,260,270,272)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//HyF suma los resultados falsos columna G in (9,10,14,15,16,17,21,33,36,52,54,65,83,88,98,102,105,117,122,123,131,132,136,142,148,155,158,159,164,166,168,171,174,180,183,186,192,200,215,220,231,248,250,256,260,270,272)
		$this->resultado[5]['TF'] = (count($hyf) == 0)?0:((is_null($hyf[0]->HYF))?0:$hyf[0]->HYF);
		
		
		$pdf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PDF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (16,19,41,77,86,90,102,129,132,136,150,164,165,167,174,178,192,216,221,224,233,250,268,270,273,274)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//PdF suma los resultados falsos columna G in (16,19,41,77,86,90,102,129,132,136,150,164,165,167,174,178,192,216,221,224,233,250,268,270,273,274)
		$this->resultado[6]['TF'] = (count($pdf) == 0)?0:((is_null($pdf[0]->PDF))?0:$pdf[0]->PDF);
		
		if ($genero == 1) {
			$mff = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MFF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
			result.responsesummary = ? and
			hom.Id_pregunta_excel in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,238,242,244,246,261,264,279)
			GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
			//MfF H suma los resultados falsos columna G in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,238,242,244,246,261,264,279)
		} else {
		//mujer
			$mff = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MFF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
			result.responsesummary = ? and
			hom.Id_pregunta_excel in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,216,238,242,244,246,261,264,275,279)
			GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
			//MfF M suma los resultados falsos columna G in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,216,238,242,244,246,261,264,275,279)
		}
		$this->resultado[7]['TF'] = (count($mff) == 0)?0:((is_null($mff[0]->MFF))?0:$mff[0]->MFF);
		
		
		$paf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PAF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (88,102,105,107,111,117,251,262,273,290,291,293,304,321,322)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//PaF suma los resultados falsos columna G in (88,102,105,107,111,117,251,262,273,290,291,293,304,321,322)
		$this->resultado[8]['TF'] = (count($paf) == 0)?0:((is_null($paf[0]->PAF))?0:$paf[0]->PAF);
		
		
		$ptf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as PTF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (10,16,40,116,147,172,181,300,328)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//PtF suma los resultados falsos columna G in (10,16,40,116,147,172,181,300,328)
		$this->resultado[9]['TF'] = (count($ptf) == 0)?0:((is_null($ptf[0]->PTF))?0:$ptf[0]->PTF);
		
		
		$scf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as SCF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (13,16,19,41,97,98,113,172,184,186,199,217,262,283,285,287,297,302,350)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//ScF suma los resultados falsos columna G in (13,16,19,41,97,98,113,172,184,186,199,217,262,283,285,287,297,302,350)
		$this->resultado[10]['TF'] = (count($scf) == 0)?0:((is_null($scf[0]->SCF))?0:$scf[0]->SCF);
		
		
		$maf = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as MAF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (95,100,107,113,114,143,161,165,174,250,270)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//MaF suma los resultados falsos columna G in (95,100,107,113,114,143,161,165,174,250,270)
		$this->resultado[11]['TF'] = (count($maf) == 0)?0:((is_null($maf[0]->MAF))?0:$maf[0]->MAF);
		
		
		$sif = DB::connection('mecapacitoecuador')->select('SELECT COUNT( result.responsesummary ) as SIF
			from mood_user us
			join mood_quiz_attempts us_ev on us.id = us_ev.userid
			join mood_quiz ev on ev.id = us_ev.quiz
			join mood_quiz_slots pre_gui on pre_gui.quizid = us_ev.quiz 
			join mood_question pre on pre_gui.questionid = pre.id
			join mood_question_attempts result on result.questionid = pre.id and result.questionusageid = us_ev.uniqueid
			join tb_homologacion_preguntas hom on hom.Id_pregunta_moodle = pre.id
			where us_ev.attempt = ? and us.id = ? and
		result.responsesummary = ? and
		hom.Id_pregunta_excel in (32,39,56,86,93,113,119,138,188,196,214,216,238,244,262,269,274,287,328,335,342,347,349,351,352,357,360,361,365,367,369,370,377)
		GROUP BY result.responsesummary',[$attempt,$user,'FALSO']);
		//SiF suma los resultados falsos columna G in (32,39,56,86,93,113,119,138,188,196,214,216,238,244,262,269,274,287,328,335,342,347,349,351,352,357,360,361,365,367,369,370,377)
		$this->resultado[12]['TF'] = (count($sif) == 0)?0:((is_null($sif[0]->SIF))?0:$sif[0]->SIF);
		
		
		//registro Totales
		$this->resultado[0]['TB'] = $this->resultado[0]['TV'] + $this->resultado[0]['TF'];
		$this->resultado[1]['TB'] = $this->resultado[1]['TV'] + $this->resultado[1]['TF'];
		$this->resultado[2]['TB'] = $this->resultado[2]['TV'] + $this->resultado[2]['TF'];
		$this->resultado[3]['TB'] = $this->resultado[3]['TV'] + $this->resultado[3]['TF'];
		$this->resultado[4]['TB'] = $this->resultado[4]['TV'] + $this->resultado[4]['TF'];
		$this->resultado[5]['TB'] = $this->resultado[5]['TV'] + $this->resultado[5]['TF'];
		$this->resultado[6]['TB'] = $this->resultado[6]['TV'] + $this->resultado[6]['TF'];
		$this->resultado[7]['TB'] = $this->resultado[7]['TV'] + $this->resultado[7]['TF'];
		$this->resultado[8]['TB'] = $this->resultado[8]['TV'] + $this->resultado[8]['TF'];
		$this->resultado[9]['TB'] = $this->resultado[9]['TV'] + $this->resultado[9]['TF'];
		$this->resultado[10]['TB'] = $this->resultado[10]['TV'] + $this->resultado[10]['TF'];
		$this->resultado[11]['TB'] = $this->resultado[11]['TV'] + $this->resultado[11]['TF'];
		$this->resultado[12]['TB'] = $this->resultado[12]['TV'] + $this->resultado[12]['TF'];

		//base;filas arriba - o abajo ;columnas izquierda -;numero de seldas seleccionadas
		// .'-'.$f.'-'.$c
//		=DESREF(Auxiliar!$B$79;-$E$7;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) +(-$this->resultado[0]['TB']);
		$c = ((1-1) + (($genero == 1)?0:13));
		
		$this->resultado[0]['T'] = $this->constant[$f][$this->columnas[$c]];
// //		=DESREF(Auxiliar!$C$79;-$E$8;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) +(-$this->resultado[1]['TB']);
		$c = ((2-1) + (($genero == 1)?0:13));
		
		$this->resultado[1]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// //		=DESREF(Auxiliar!$D$79;-E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) +(-$this->resultado[2]['TB']);
		$c = ((3-1) + (($genero == 1)?0:13));
		
		$this->resultado[2]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$E$79;-E10-0,5*E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + intval(-$this->resultado[3]['TB']-0.5*$this->resultado[2]['TB']);
		$c = ((4-1) + (($genero == 1)?0:13));
		
		$this->resultado[3]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$F$79;-E11;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + (-$this->resultado[4]['TB']);
		$c = ((5-1) + (($genero == 1)?0:13));
		
		$this->resultado[4]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$G$79;-E12;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + (-$this->resultado[5]['TB']);
		$c = ((6-1) + (($genero == 1)?0:13));
		
		$this->resultado[5]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$H$79;-E13-0,4*E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + intval(-$this->resultado[6]['TB']-0.4*$this->resultado[2]['TB']);
		$c = ((7-1) + (($genero == 1)?0:13));
		
		$this->resultado[6]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$I$79;-E14;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + (-$this->resultado[7]['TB']);
		$c = ((8-1) + (($genero == 1)?0:13));
		
		$this->resultado[7]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$J$79;-E15;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + (-$this->resultado[8]['TB']);
		$c = ((9-1) + (($genero == 1)?0:13));
		
		$this->resultado[8]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$K$79;-E16-E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + intval(-$this->resultado[9]['TB']-$this->resultado[2]['TB']);
		$c = ((10-1) + (($genero == 1)?0:13));
		
		$this->resultado[9]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$L$79;-E17-E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + intval(-$this->resultado[10]['TB']-$this->resultado[2]['TB']);
		$c = ((11-1) + (($genero == 1)?0:13));
		
		$this->resultado[10]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$M$79;-E18-0,2*E9;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + intval(-$this->resultado[11]['TB']-0.2*$this->resultado[2]['TB']);
		$c = ((12-1) + (($genero == 1)?0:13));
		
		$this->resultado[11]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
// 		=DESREF(Auxiliar!$N$79;-E19;SI(Test!K7=1;0;13);1;1)
		$f = (79-6) + (-$this->resultado[12]['TB']);
		$c = ((13-1) + (($genero == 1)?0:13));
		
		$this->resultado[12]['T'] = is_null($this->constant[$f][$this->columnas[$c]] )?0:$this->constant[$f][$this->columnas[$c]];
		
		
		
//LV = 0
//LF suma los resultados falsos columna G in (23,36,48,58,84,100,109,114,130,146,160,190,210,239,267)
//FV suma los resultados verdadero columna F in (25,31,37,43,49,55,61,67,73,79,91,103,121,145,151,157,163,169,175,187,205,223,235,241,247,253,259,265,271,277,289,295,301,307,313,319,331,343,356,362,368)
//FF suma los resultados falsos columna G in (13,19,85,97,109,115,127,133,139,181,193,199,G211,217,229,283,325,337,350)
//KV suma los resultados verdadero columna F in (90)
//KF suma los resultados falsos columna G in (36,44,65,83,117,123,129,134,137,143,155,164,165,174,178,203,220,250,274,291,297,337,345,346,348,353,355,363,372)
//HsV suma los resultados verdadero columna F in (25,35,46,60,66,104,108,118,156,182,254)
//HsF suma los resultados falsos columna G in (9,10,15,17,27,52,54,64,98,124,148,150,159,171,180,183,186,215,231,256,262)
//DV suma los resultados verdadero columna F in (12,22,25,44,45,46,53,63,80,99,124,134,137,153,154,177,182,188,222,240)
//DF suma los resultados falsos columna G in (9,16,17,27,36,40,44,50,52,56,62,75,82,83,102,116,125,141,147,148,149,150,155,172,185,195,196,219,228,230,233,245,252,255,267,274,337)
//HyV suma los resultados verdadero columna F in (18,25,38,46,47,51,72,108,173,179,182,225,237)
//HyF suma los resultados falsos columna G in (9,10,14,15,16,17,21,33,36,52,54,65,83,88,98,102,105,117,122,123,131,132,136,142,148,155,158,159,164,166,168,171,174,180,183,186,192,200,215,220,231,248,250,256,260,270,272)
//PdV suma los resultados verdadero columna F in (24,28,29,38,39,42,49,59,61,63,78,89,96,101,106,112,120,202,209,226,232,266,271,295)
//PdF suma los resultados falsos columna G in (16,19,41,77,86,90,102,129,132,136,150,164,165,167,174,178,192,216,221,224,233,250,268,270,273,274)
//MfV H suma los resultados verdadero columna F in (11,32,69,71,74,81,87,119,126,129,135,144,173,184,194,198,203,212,216,226,243,258,263,275,278)
//MfV M suma los resultados verdadero columna F in (11,32,69,71,74,81,87,119,126,128,129,135,144,135,144,184,194,198,203,212,226,243,258,263,278)
//MfF H suma los resultados falsos columna G in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,238,242,244,246,261,264,279)
//MfF M suma los resultados falsos columna G in (8,26,33,34,70,75,76,83,93,110,111,114,127,128,139,140,170,191,200,201,204,206,208,214,216,238,242,244,246,261,264,275,279)
//PaV suma los resultados verdadero columna F in (23,24,29,30,31,49,106,120,145,151,152,153,169,241,266,278,284,292,312,314,340,341,343,362,368)
//PaF suma los resultados falsos columna G in (88,102,105,107,111,117,251,262,273,290,291,293,304,321,322)
//PtV suma los resultados verdadero columna F in (18,23,30,38,45,63,72,80,89,96,101,137,154,177,182,203,225,249,280,282,284,292,296,308,309,311,315,316,317,320,323,324,327,332,333,334,335,336,338)
//PtF suma los resultados falsos columna G in (10,16,40,116,147,172,181,300,328)
//ScV suma los resultados verdadero columna F in (23,24,28,29,30,38,39,42,45,49,51,53,55,72,92,99,145,152,154,173,175,177,187,189,197,225,228,236,240,241,249,254,259,263,275,280,281,284,286,288,294,298,299,303,305,306,310,314,318,323,326,327,329,330,332,336,339,340,362)
//ScF suma los resultados falsos columna G in (13,16,19,41,97,98,113,172,184,186,199,217,262,283,285,287,297,302,350)
//MaV suma los resultados verdadero columna F in (20,22,28,30,57,62,68,92,94,105,120,129,138,152,162,175,176,189,197,207,212,213,218,219,225,227,234,236,245,249,251,255,257,260,276)
//MaF suma los resultados falsos columna G in (95,100,107,113,114,143,161,165,174,250,270)
//SiV suma los resultados verdadero columna F in (38,63,77,107,111,117,134,142,165,168,174,192,222,250,258,272,282,291,296,303,309,315,333,344,345,354,355,358,359,364,371,374,375,376)
//SiF suma los resultados falsos columna G in (32,39,56,86,93,113,119,138,188,196,214,216,238,244,262,269,274,287,328,335,342,347,349,351,352,357,360,361,365,367,369,370,377)
		
	}
	
}
