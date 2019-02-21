<?php
// 円の数
$n = trim(fgets(STDIN));
list($n_1, $d_1) = explode(' ', trim(fgets(STDIN)));
list($n_2, $d_2) = explode(' ', trim(fgets(STDIN)));
$leage = 0;
$small = 0;
$dire_1 = 0;
$dire_2 = 0;

$ary = array();

if ((int)$n_1 > (int)$n_2) {
    $leage = (int)$n_1;
    $small = (int)$n_2;
} else {
    $leage = (int)$n_2;
    $small = (int)$n_1;
}

if ($d_1 == "N") {
    $dire_1 = 1;
} elseif ($d_1 == "E") {
    $dire_1 = 2;
} elseif ($d_1 == "S") {
    $dire_1 = 3;
} elseif ($d_1 == "W") {
    $dire_1 = 4;
}

if ($d_2 == "N") {
    $dire_2 = 1;
} elseif ($d_2 == "E") {
    $dire_2 = 2;
} elseif ($d_2 == "S") {
    $dire_2 = 3;
} elseif ($d_2 == "W") {
    $dire_2 = 4;
}

$sum = $dire_1 + $dire_2;

$tyokusen = (int)$n_1 * 100 + (int)$n_2 * 100;
array_push($ary, $tyokusen);

if ($sum != 4 || $sum == 6) {
    for ($i=$small; $i <= $leage; $i++) { 
        $ans = 0;
    
        $ans = ((100 * $i) * M_PI) / 2;
        $ans = $ans + (($leage - $small) * 100);
    
        array_push($ary, $ans);
    }
}

sort($ary);

print($ary[0]);