<?php
$str =($_POST["fstring"]);
$length = 0;
while (isset($str[$length])) {
    $length++;
}
echo "Độ dài của chuỗi là: " . $length;
?>