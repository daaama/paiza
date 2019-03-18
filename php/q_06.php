<?php
$n = trim(fgets(STDIN));
$credit = array();

for ($i=0; $i < $n; $i++) { 
    array_push($credit, trim(fgets(STDIN)));
}

for ($j=0; $j < $n; $j++) { 
    $taget = str_split($credit[$j]);
    
    // 諸々定義
    $even = 0;
    $odd = 0;
    $sum = 0;
    $remainder = 0;
    $ans = 0;

    for ($k=0; $k < count($taget)-1; $k++) { 
        if ($k%2 == 1) {
            $odd += (int)$taget[$k];
        } else {
            $taget_num = $taget[$k] * 2;
            if (strlen($taget_num) == 2) {
                $even += addNum($taget_num);
            } else {
                $even += $taget_num;
            }
        }
    }
    
    $sum = $even + $odd;
    if ($sum % 10 != 0) {
        $remainder = $sum % 10;
        $ans = 10 - $remainder;
    } else {
        $ans = 0;
    }

    echo $ans . PHP_EOL;
}

// 二桁の数字を一桁に計算し直す
function addNum($num) {
    $num = str_split($num);
    $num = $num[0] + $num[1];

    return $num;
}