<?php
$n = trim(fgets(STDIN));
$ans = array();
$studentAns = array();
$score = 0;

for ($i=0; $i < $n; $i++) { 
    list($a, $b) = explode(' ', trim(fgets(STDIN)));
    array_push($ans, $a);
    array_push($studentAns, $b);
}

for ($j=0; $j < $n; $j++) { 
    if (mb_strlen($ans[$j]) != mb_strlen($studentAns[$j])) {
        continue;
    }

    $a_1 = str_split($ans[$j]);
    $b_1 = str_split($studentAns[$j]);
    $d = 0;

    for ($k=0; $k < mb_strlen($ans[$j]); $k++) { 
        if ($a_1[$k] != $b_1[$k]) {
            $d++;
        }
    }

    if ($d == 0) {
        $score += 2;
    } elseif ($d ==1) {
        $score++;
    } else {
        continue;
    }
}

echo $score;