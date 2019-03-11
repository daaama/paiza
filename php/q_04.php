<?php
$n = trim(fgets(STDIN));
$ary = array();
$s_count = 0;
$b_count = 0;

for ($i=0; $i < $n; $i++) { 
    $status = trim(fgets(STDIN));
    array_push($ary, $status);
}

for ($j=0; $j < $n; $j++) { 
    if ($ary[$j] == 'strike') {
        $s_count += 1;
        if ($s_count <= 2) {
            echo 'strike!' . PHP_EOL;   
        } else {
            echo 'out!' . PHP_EOL;
            break;
        }
    } elseif ($ary[$j] == 'ball') {
        $b_count += 1;
        if ($b_count <= 3) {
            echo 'ball!' . PHP_EOL;
        } else {
            echo 'fourball!' . PHP_EOL;
            break;
        }
    }
}