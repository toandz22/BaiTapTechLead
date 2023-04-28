VD: </br>
		Đầu vào: [1, 2, 3, 8, 6, 3] kết quả 4 </br>
		Đầu vào: [1, 2, 3, 8, 3, 2, 4, 5, 6, 7, 8, 9] kết quả 6</br>

<form method="post" action="">
    Nhập chuỗi số: <input type="text" name="numbers">
    <button type="submit">Tính toán</button>
</form>

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers_str = $_POST["numbers"]; // Lấy chuỗi số từ form
    
    // Tách các số trong chuỗi thành một mảng
    $numbers = explode(" ", $numbers_str);
    
    // Chuyển các phần tử trong mảng thành số nguyên
    foreach ($numbers as &$number) {
        $number = intval($number);
    }
    
    $result = longestIncreasingSubsequence($numbers);
    echo "Độ dài của dãy con tăng dần dài nhất là: " . $result . "\n";
}
?>
