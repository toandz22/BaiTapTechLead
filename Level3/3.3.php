<?php
$arr = array(10,3,11,2,1,20);
$n = $arr[0];

for($i = 0 ; $i < count($arr); $i ++){
    if($n < $arr[$i]){
    echo $n ."<br>";
    $n = $arr[$i];
    if($n > $arr[$i]){
        echo $arr[$i];
        $n = $arr[$i];
    } 
} 
}
?>