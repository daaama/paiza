<?php
list($x, $y) = explode(' ', trim(fgets(STDIN)));
$k = trim(fgets(STDIN));
$n = trim(fgets(STDIN));

$ary = array();

for ($i=0; $i < $n ; $i++) { 
    $ans = 0;
    $tmp = [];
    list($x_i, $y_i, $p_i) = explode(' ', trim(fgets(STDIN)));
    $s = (pow((int)$x - (int)$x_i, 2)) + (pow((int)$y - (int)$y_i, 2));
    $ans = sqrt($s);
    $tmp = [$ans, $p_i];
    
    array_push($ary, $tmp);
}

$sort_ary = array();

for ($j = 0; $j < $n; $j++) {
     $sort_ary[] = $ary[$j][0];
}

array_multisort($sort_ary, SORT_ASC, $ary);

$sum_ans = 0;

for ($l = 0; $l < $k; $l++) {
     $sum_ans = $sum_ans + (int)$ary[$l][1];
}

print($sum_ans / $k . PHP_EOL);
