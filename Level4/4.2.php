<?php
function countDistinctSubsequences($arr, $tong) {
    $n = count($arr);
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

$arr = [1,2,3,4,5,6,7,8,9];
$tong = 10;

echo "kết quả :".countDistinctSubsequences($arr, $tong)
?>