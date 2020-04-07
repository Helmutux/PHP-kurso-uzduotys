<?php
    
    function spausdink($array){
        for($i=0; $i<count($array); $i++){
            if($i<(count($array))-1){
            print_r($array[$i]);
            print(", ");
            } 
            else 
            {
            print_r($array[$i]);
            print(".");
            }
        }
    }
    function bubblesort($array){
        for ($i = 0; $i <= count($array) - 2; $i++) {
            $minValue = $array[$i];
            for ($j = $i + 1; $j <= count($array) - 1; $j++) {
                if ($array[$j] < $minValue) {
                $minValue = $array[$j];
                $swap = $array[$i];
                $array[$i] = $minValue;
                $array[$j] = $swap;
                }
            }
        }
        spausdink($array);
    }
?>