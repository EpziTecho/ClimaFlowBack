<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $valores = [
            [1, 19], [2, 7], [2, 8], [2, 9], [2, 10], [2, 12], [2, 13], [3, 6], [3, 7], [3, 8],
            [3, 9], [3, 10], [3, 12], [3, 13], [3, 15], [4, 6], [4, 4], [4, 3], [4, 18], [5, 19],
            [5, 18], [5, 17], [5, 16], [5, 15], [5, 12], [5, 11], [5, 10], [5, 5], [5, 3], [5, 2],
            [6, 1], [6, 2], [6, 3], [6, 7], [6, 8], [6, 14], [6, 16], [6, 17], [6, 18], [6, 19],
            [7, 19], [7, 18], [7, 17], [7, 16], [7, 14], [7, 8], [7, 7], [7, 6], [7, 4], [7, 3],
            [7, 2], [7, 1], [8, 1], [8, 2], [8, 3], [8, 6], [8, 7], [8, 13], [8, 16], [8, 17],
            [8, 18], [8, 19], [9, 19], [9, 16], [9, 15], [9, 11], [9, 10], [9, 9], [9, 6],
            [9, 4], [9, 3], [10, 2], [10, 3], [10, 5], [10, 4], [10, 16], [10, 17], [10, 19],
            [11, 18], [11, 17], [11, 14], [11, 13], [11, 10], [11, 9], [11, 8], [11, 7], [11, 4],
            [10, 3], [12, 7], [12, 8], [12, 9], [12, 10], [12, 11], [12, 12], [12, 13], [12, 14],
            [12, 15], [12, 21]
        ];

        $randon = $this->NumAleatorio(97);
    $x = [];
    $y = [];
    array_push($x, $valores[$randon][0]);
    array_push($y, $valores[$randon][1]);
    
    while (count($x) < 10) {
        $bre = true;
        $i = 0;
        $randon = $this->NumAleatorio(97);
    
        while ($i < count($x) && $bre == true) {
            if ($this->DisEucli($x[$i], $y[$i], $valores[$randon][0], $valores[$randon][1]) > 10) {
                $i++;
            } else {
                $randon = $this->NumAleatorio(97);
                $i = 0;
            }
        }
    
        array_push($x, $valores[$randon][0]);
        array_push($y, $valores[$randon][1]);
    }
    
    $points = [];
    for ($i = 0; $i < count($x); $i++) {
        $points[] = [$x[$i], $y[$i]];
    }
    
    return json_encode($points);
    
   
    }
    

    function DisEucli($x1, $x2, $y1, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
    
    function NumAleatorio($x) {
        $numeroAleatorio = rand(0, $x);
        //echo "Número aleatorio: " . $numeroAleatorio . PHP_EOL;
        return $numeroAleatorio;
        
    }
    
   
    
    

    
}
