Cho một mảng đầu vào, viết một function để chia đều mảng theo số phần chỉ định : </br>
Ví dụ: ['a', 'b', 'c', 'd'] </br>
chunk(['a', 'b', 'c', 'd'], 2); 👉 [['a', 'b'], ['c', 'd']] </br>
chunk(['a', 'b', 'c', 'd'], 3); 👉 [['a', 'b', 'c'], ['d']]

<?php
function chunk($arr, $size) {
  $result = array();
  $count = count($arr);
  $chunkSize = ceil($count / $size);
  
  for ($i = 0; $i < $count; $i += $chunkSize) {
    $chunk = array_slice($arr, $i, $chunkSize);
    $result[] = $chunk;
  }
  
  return $result;
}

$arr = array($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f']);
$size = $_POST["sp"];
$result = chunk($arr, $size);
echo"<pre>";
print_r($result);// [['a', 'b'], ['c', 'd']]
echo"</pre>"; 
?>