<?php

$input = array(0, 2, 4, 1, 0, array(0, 3, 0, 6, 0, 7), 4, 0, 0, 4, array(5, 2, 6, 5, 2));
$sum = 0;
foreach ($input as $key => $value){

    if($key == 1){
        $sum = $sum + $value;
    }
    if(is_array($value)){
        foreach($value as $key1 => $value1){
            if($key1 == 1){
                $sum = $sum + $value1;
            }
        }
    }

}
echo $sum;
