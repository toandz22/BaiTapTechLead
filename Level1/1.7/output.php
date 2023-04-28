<?php
function sapXepChuoi($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if (strcasecmp($mang[$j], $mang[$minIndex]) < 0) {
                $minIndex = $j;
            }
        }
        if ($i != $minIndex) {
            // swap $mang[$i] và $mang[$minIndex]
            $temp = $mang[$i];
            $mang[$i] = $mang[$minIndex];
            $mang[$minIndex] = $temp;
        }
    }
    return $mang;
}

// Sử dụng hàm sapXepChuoi()
$chuoi = array($_POST["aa"],$_POST["bb"],$_POST["cc"],$_POST["dd"],$_POST["ee"],$_POST["ff"]);
$chuoiSapXep = sapXepChuoi($chuoi);
print_r($chuoiSapXep);
?>