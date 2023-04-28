1.1 Tổng của 2 số x và y là : 
 <?php

function tong($a, $b)
{
    $uniq = $a + $b;
    return $uniq;
}
$a = $_POST["fnumber"];
$b = $_POST["cnumber"];
echo tong($a, $b)."<br>";
?>