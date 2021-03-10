<?php

function fibonacci($n){
    if ($n==0) {
        return 0;
    }elseif ($n<3) {
        return 1;
    }else{
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

$var = 10;
for ($i = 0; $i < $var; $i++) { 
   echo ($i<$var-1) ? (fibonacci($i).',') : (fibonacci($i).'.');
}


function fibonacci_2($n){
    $list = [0,1];
    for ($i=0; $i < $n-2; $i++) { 
        $new_element = $list[$i]+$list[$i+1];
        array_push($list, $new_element);
    }
    echo "<pre>";
    var_dump($list);
    echo "</pre>";
}

fibonacci_2(10);