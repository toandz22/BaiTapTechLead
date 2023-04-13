<?php

function sapxep($arr) {
    usort($arr, function($a, $b) {
        $aWords = array_unique(explode(" ", $a)); // chia mỗi chuỗi thành 1 mảng rồi loại bỏ phần tử trùng lặp trong mảng 
        $bWords = array_unique(explode(" ", $b));
        return (count($bWords) - count($aWords)); // so sánh 2 mảng , return = -1  => a đứng trước b và ngược lại .
    });
    return $arr;
}

// Example usage
$input = ["hello world", "the quick brown fox jumps over the lazy dog", "the cat in the hat"];
$output = sapxep($input);
echo "<pre>";
print_r($output);
echo "</pre>";

?>
