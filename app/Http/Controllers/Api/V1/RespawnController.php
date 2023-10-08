<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RespawnController extends Controller
{
    public function index(){
        
    $x = [];
    $y = [];
    
    //55 matriz
    $respawn = $this->respawn($x, $y, 55);   
    return json_encode($respawn);
        
    }

    function isPointValid($new_x, $new_y, $x, $y) {
        for ($i = 0; $i < count($x); $i++) {
            if ($this->DisEucli($x[$i], $y[$i], $new_x, $new_y) <= 4) {
                return false;
            }
        }
        return true;
    }
    
    function respawn(&$x, &$y, $a) {
        $n = count($x);
        $randon = $this->NumAleatorio($n);
        $new_x=0;
        $new_y=0;
    
        do {
            $randon = $this->NumAleatorio($n);
            $new_x = $this->NumAleatorio($a); // Supongamos que el rango es [0, 19] para x
            $new_y = $this->NumAleatorio($a); // Supongamos que el rango es [0, 19] para y
        } while (!$this->isPointValid($new_x, $new_y, $x, $y));
    
        array_push($x, $new_x);
        array_push($y, $new_y);
    
        return [$new_x, $new_y];
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
