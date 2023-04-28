3.2 Hiệu của 2 số là : 
<?php 
$array = array ($_POST["sa"],$_POST["sb"],$_POST["sc"],$_POST["sd"],$_POST["se"]);
$sub_max = 0;
$minElement = $array[0];
for($i = 0; $i < count($array) ; $i ++) {
    if(($array[$i] - $minElement) > $sub_max){
        $sub_max = $array[$i] - $minElement ;
    }elseif($array[$i] < $minElement){
        $sub_max = $array[$i];
    }
}
echo $sub_max;
?> <br>