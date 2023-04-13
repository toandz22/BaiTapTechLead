<?php
function longestIncreasingSubsequence($arr) {
    $l = count($arr);
    $dp = array_fill(0, $l, 1); // Khởi tạo mảng dp với giá trị ban đầu là 1
    
    for ($i = 1; $i < $l; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$i] > $arr[$j] && abs($i - $j) <= 1) { // nếu phần tử i lớn hơn phần tử j và khoảng cách i - j <= 1 
                $dp[$i] = max($dp[$i], $dp[$j] + 1); // Tính toán độ dài của dãy con tăng dần dài nhất
            }
        }
    }
    
    return max($dp); // Trả về độ dài của dãy con tăng dần dài nhất
}

$arr1 = [1, 2, 3, 4, 8, 6, 3];
$result1 = longestIncreasingSubsequence($arr1);
echo "Độ dài của dãy con tăng dần dài nhất là: " . $result1 . "\n"."<br>";

$arr2 = [1, 2, 3, 8, 3, 2, 4, 5, 6, 7, 8, 9];
$result2 = longestIncreasingSubsequence($arr2);
echo "Độ dài của dãy con tăng dần dài nhất là: " . $result2 . "\n";

?>
