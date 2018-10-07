<?php
//binary search in php
function searchElm($arr,$key) {
    $begin = 0;
    $end = count($arr) -1;
    $inedx = -1;
    
    while ($begin<=$end) {
        echo $begin.'<br>';
        $mid = ceil(($begin+$end) /2 );
        if($key == $arr[$mid]) {
            $index = $mid;
            $end = $mid-1;
        }
        if($key < $arr[$mid])  $end = $mid -1;
        if($key > $arr[$mid])  $begin = $mid +1;
    
    }
    return $index;
}
var_dump(searchElm([1,2,3,4,4,5,5,6,7,8,9,10,23,45,67,89,90],4));

