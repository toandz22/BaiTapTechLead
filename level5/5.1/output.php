<?php
function reverseArray($arr) {
  $length = count($arr);
  for ($i = 0; $i < $length / 2; $i++) { // lặp nửa đầu của mảng 
     $temp = $arr[$i];
     $arr[$i] = $arr[$length - 1 - $i]; // Hoán vị vị trí các số trong mảng
     $arr[$length - 1 - $i] = $temp;
  }
  return $arr;
}
$arr = array($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f']);

// In ra mảng ban đầu
echo "Mảng ban đầu: ";
echo"<pre>";
print_r($arr);
echo"</pre>";
// Đảo ngược thứ tự mảng
$arr = reverseArray($arr);

// In ra mảng sau khi đảo ngược
echo "Mảng sau khi đảo ngược: ";
echo"<pre>";
print_r($arr);
echo"</pre>";
?>