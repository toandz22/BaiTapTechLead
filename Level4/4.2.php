Với dãy số: $arr={1,2,3,4,5} và Tổng cho trước: $tong = 5 </br> 
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

$arr = [1,2,3,4,5];
$tong = 5;

echo "Số tổ hợp để có tổng bằng 5 là :".countDistinctSubsequences($arr, $tong)
?>