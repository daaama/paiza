<?php
$n = trim(fgets(STDIN));

$a = 0;
$b = 0;

for ($i=0; $i < $n; $i++) { 
    // notice出てるけど許して
    list($tipe, $hensu, $num) = explode(' ', trim(fgets(STDIN)));
    if ($tipe == 'SET' && $hensu == 1) {
        $a = $num;
    } elseif ($tipe == 'SET' && $hensu == 2) {
        $b = $num;
    }

    if ($tipe == 'ADD') {
        $b = $a + $hensu;
    }

    if ($tipe == 'SUB') {
        $b = $a - $hensu;
    }
}

echo $a . ' ' . $b;