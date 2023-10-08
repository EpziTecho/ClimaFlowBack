<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RespawnController extends Controller
{
    public function index(){
        function isPointValid($new_x, $new_y, $x, $y) {
            for ($i = 0; $i < count($x); $i++) {
                if (DisEucli($x[$i], $y[$i], $new_x, $new_y) <= 4) {
                    return false;
                }
            }
            return true;
        }
        
        function respawn(&$x, &$y, $a) {
            $n = count($x);
            $randon = NumAleatorio($n);
            $new_x;
            $new_y;
        
            do {
                $randon = NumAleatorio($n);
                $new_x = NumAleatorio($a); // Supongamos que el rango es [0, 19] para x
                $new_y = NumAleatorio($a); // Supongamos que el rango es [0, 19] para y
            } while (!isPointValid($new_x, $new_y, $x, $y));
        
            array_push($x, $new_x);
            array_push($y, $new_y);
        
            return [$new_x, $new_y];
        }
        
    }
}
