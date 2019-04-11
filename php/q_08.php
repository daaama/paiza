<?php
$n = trim(fgets(STDIN));
$arr = str_split($n);
$ans_arr = array();
for ($i=0; $i < count($arr); $i++) { 
    switch ($arr[$i]) {
        case 'A':
            array_push($ans_arr, 4);
            break;
        case 'E':
            array_push($ans_arr, 3);
            break;
        case 'G':
            array_push($ans_arr, 6);
            break;
        case 'I':
            array_push($ans_arr, 1);
            break;
        case 'O':
            array_push($ans_arr, 0);
            break;
        case 'S':
            array_push($ans_arr, 5);
            break;
        case 'Z':
            array_push($ans_arr, 2);
            break;
        default:
            array_push($ans_arr, $arr[$i]);
            break;
    }
}

for ($i=0; $i < count($ans_arr); $i++) { 
    echo $ans_arr[$i];
}