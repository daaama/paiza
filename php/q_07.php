<?php
list($riko, $yuken, $n) = explode(' ', trim(fgets(STDIN)));
$riko_ary = array();
$yuken_ary = array();

for ($i=0; $i < $riko; $i++) { 
    array_push($riko_ary, array(0));
}

array_push($yuken_ary, $yuken);

for ($j=0; $j < $n; $j++) { 
    $k = trim(fgets(STDIN));
    if ($yuken_ary[0] != 0) {
        $riko_ary[$k-1][0] = $riko_ary[$k-1][0] + 1;
    }

    for ($l=0; $l < $riko; $l++) { 
        if ($riko_ary[$l][0] > 0) {
            $riko_ary[$l][0] = $riko_ary[$l][0] - 1;
            $riko_ary[$k-1][0] = $riko_ary[$k-1][0] + 1;
        }
    }

    $yuken_ary[0] = $yuken_ary[0] - 1;
}

$sort_ary = array();

for ($h=0; $h < $riko; $h++) { 
    if ($h == 0) {
        $tmp = $riko_ary[$h][0];
        continue;
    }
    if ($riko_ary[$h][0] > $tmp) {
        array_push($sort_ary, $h+1);
    }
}

for ($i=0; $i < count($sort_ary); $i++) { 
    echo $sort_ary[$i] . PHP_EOL;
}