<html>
<body>
3.1Số nhỏ thứ 2 là: 
<?php
$my_array = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
sort($my_array);
list($a, $b, $c, $d, $e ) = $my_array;
echo "$b";
?> <br>

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

3.4 Hai chuỗi có số kí tự trùng nhau nhiều nhất :
<?php 
$b = array ($_POST["stra"],$_POST["strb"],$_POST["strc"],$_POST["strd"],$_POST["stre"]); //??????????Chưa tìm ra thuật toán 

?> <br> 

3.5 Số nguyên dương nhỏ nhất là :
<?php

function findSmallest($arr, $n)
{
    $res = 1;
    for($i = 0; $i < $n and $arr[$i] <= $res; $i++)
        $res = $res + $arr[$i];
    return $res;
}
$arr1 = array ($_POST["da"],$_POST["db"],$_POST["dc"],$_POST["dd"],$_POST["de"]);
$n1 = count($arr1);
echo findSmallest($arr1, $n1),"\n";

?>
</body>
</html>
 
