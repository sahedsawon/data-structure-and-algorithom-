<?php
function squart($root){
   $low = 0.00;
   $high = $root;
   
   foreach (range(0, 64) as $value) {
       $mid =  ($low+$high)/2;
       if( ($mid * $mid) > $root) {
           $high = $mid;
       }else{
           $low = $mid;
       }
   }
    return $mid;
}
   echo squart(64);
