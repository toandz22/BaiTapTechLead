
<?php
function countDistinctSubsequences($arr, $tong) {
    $n = count($arr); //5
    $dp = array_fill(0, $tong + 1, 0);
    $dp[0] = 1;
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum += $arr[$i];
        for ($j = min($sum, $tong); $j >= $arr[$i]; $j--) {
            $dp[$j] += $dp[$j - $arr[$i]];
        }
    }
    return $dp[$tong];
}

$arr = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"],$_POST["f"]);
$tong = $_POST['sum'];

echo "Số tổ hợp để có tổng bằng sum  là :".countDistinctSubsequences($arr, $tong)
?>