<?php
function bai5_2($arr, $num_parts) {
    $subarray_length = floor(count($arr) / $num_parts);

    $subarrays = array();
    for ($i = 0; $i < $num_parts; $i++) {
        $start_index = $i * $subarray_length;
        $end_index = ($i + 1) * $subarray_length;
        if ($i != $num_parts - 1) {
            $subarrays[] = array_slice($arr, $start_index, $subarray_length);
        }
        else {
            $subarrays[] = array_slice($arr, $start_index);
        }
    }
    return $subarrays;
}
$arr = array(1, 2, 3, 4);
$num_parts = 3;
$subarrays = bai5_2($arr, $num_parts);
echo "<pre>";
print_r($subarrays);
echo "</pre>";
?>
