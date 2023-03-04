<?php 
 function fibonacci($n){
    if( $n == 0 || $n== 1){
        return $n;
    }
    
       return fibonacci($n -1) + fibonacci($n-2);
    
 };

$n =20;

for ($n =0; $n <=10; $n++){

    echo fibonacci($n).' ';
}