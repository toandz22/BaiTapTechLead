
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
$arr = array($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'],$_POST['h']);
$new_arr = xoatrunglap($arr);
echo "<pre>";
print_r($new_arr);
echo "</pre>";