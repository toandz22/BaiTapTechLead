<?php
$arr = array(
    array('x' => 1, 'y' => 2, 'z' =>3),
    array('x' => 2, 'y' => 1),
    array('x' => 1, 'y' => 2, 'z' =>3),
    array('x' => 1, 'y' => 2)
);
$unique_arr = array();

foreach ($arr as $val) {
    if (!in_array($val, $unique_arr)) {
        $unique_arr[] = $val;
    }
}
echo "<pre>";
print_r($unique_arr);
echo "</pre>";
?>
