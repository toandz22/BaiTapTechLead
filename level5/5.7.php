<?php
function callback($arr1 , $arr2){
    if($arr1 == $arr2){
        return $arr2;
    }
    return "khác nhau";
}
$arr1 = array("a:3","b:8","c:7",5,2,1);
$arr2 = array("a:3","b:8");
$b = array_map("callback",$arr1,$arr2);
print_r($b);
?>