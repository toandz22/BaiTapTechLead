<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy chuỗi được gửi từ form
    $string = $_POST['string'];
    // Xử lý chuỗi và hiển thị kết quả
    require_once 'functions.php';
    $cleanString = cleanString($string);
    echo 'Chuỗi đã xử lý: ' . $cleanString;
}
?>
