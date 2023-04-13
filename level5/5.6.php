5.6 <br>
<?php
$arr = ("i love         tech        lead");
function xoakhoangtrang($arr){
    $t = trim($arr);
    return $t;
}
echo "chuỗi sau khi xóa khoảng trắng là : ".xoakhoangtrang($arr);
?>