<?php
$ary = explode(' ', trim(fgets(STDIN)));
rsort($ary);
$ans = ($ary[0] * 10 + $ary[2]) + ($ary[1] * 10 + $ary[3]);
print($ans);