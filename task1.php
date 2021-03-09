<?php
$counter = 0;
$testarray = array(22, 23, 24, 25, 26, 27, 28, 29, 30);
$a = count($testarray);
for($i = 0; $i < $a; $i++){
    if(!($i % 2 == 0)) {
        $counter = $testarray[$i] + $counter;
    }
}
echo $counter;

