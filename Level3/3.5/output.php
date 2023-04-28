3.5 Số nguyên dương nhỏ nhất là :
<?php

function findSmallest($arr, $n)
{
    $res = 1;
    for($i = 0; $i < $n and $arr[$i] <= $res; $i++)
        $res = $res + $arr[$i];
    return $res;
}
$arr1 = array ($_POST["sa"],$_POST["sb"],$_POST["sc"],$_POST["sd"],$_POST["se"]);
$n = count($arr1);
echo findSmallest($arr1, $n),"\n";

?>