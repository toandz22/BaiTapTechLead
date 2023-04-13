<?php
function bubbleSort($arr) {
  $n = count($arr);
  $swaps = 0;
  
  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j + 1]) {
        // Hoán vị 
        $temp = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $temp;

        $swaps++;
      }
    }
  }

  return $swaps;
}

$list = array(5, 7, 1, 3, 9, 4);
$swaps = bubbleSort($list);

echo "số lần hoán đổi là :" . $swaps;

?>