<?php
$arr = array ($_POST["sa"],$_POST["sb"],$_POST["sc"],$_POST["sd"],$_POST["se"]);
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