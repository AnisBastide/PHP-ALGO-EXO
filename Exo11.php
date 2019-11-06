<?php

// function is_premier ($nombre){
//     $j=2;
//     while ($j<=sqrt($nombre)){
//         if ($nombre%$j==0){
//             return false;
//         }
//         $j++;
//     }
//     return true;
// }


function nombre_premier(){
    $premiers = 0;
    $i=2;
    while ($premiers<=100){
        $j=2;
        $estPremier = true;
        while ($j<=sqrt($i)){
            if ($i%$j==0){
                $estPremier = false;
                break;

            }
            $j++;
            
            
        }
        if($estPremier){
            $premiers++;
            print $i . "\n";
        }

        $i++;    
    }
}
nombre_premier();

// var_dump(is_premier(2)); // true
// var_dump(is_premier(5)); // true
// var_dump(is_premier(12)); // false
// var_dump(is_premier(81)); // false