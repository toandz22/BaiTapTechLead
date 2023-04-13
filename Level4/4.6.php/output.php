<?php
function maxProduct($arr, $n)
{
    $max_product = 0;
 
    for ($i = 0; $i < $n - 2; $i++)
        for ($j = $i + 1; $j < $n - 1; $j++)
            for ($k = $j + 1; $k < $n; $k++)
                $max_product = max($max_product, $arr[$i] * $arr[$j] * $arr[$k]);
 
    return $max_product;
}
    $arr = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
    $n = sizeof($arr);
    $max = maxProduct($arr, $n);

        echo "4.6 :Tích lớn nhất của 3 số bất kì là : " ,$max;
?>



