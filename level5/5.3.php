<?php
function xoatrunglap($arr) {
  $new_arr = array();
  
  foreach ($arr as $value) {
    if (!in_array($value, $new_arr)) {
      $new_arr[] = $value;
    }
  }
  
  return $new_arr;
}
$arr = array(1, 2, 2, 3, 4, 4, 5, 6, 7, 7, 8, 9, 8, 9);
$new_arr = xoatrunglap($arr);
echo "<pre>";
print_r($new_arr);
echo "</pre>";