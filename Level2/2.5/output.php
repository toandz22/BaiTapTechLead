2.5 mảng con liền kề có tổng lớn nhất :
<?php
$array = array($_POST["ca"],$_POST["cb"],$_POST["cc"],$_POST["cd"],$_POST["ce"],$_POST["cf"]);
$max_sum = 0;
$current_sum =0;
for($i = 0; $i < count($array) ; $i ++) {
    $current_sum = $current_sum + $array[$i] ;
    if ($current_sum > $max_sum) {
        $max_sum = $current_sum ;
   } elseif($current_sum <0 ) {
    $current_sum = 0;
   } $max_sum = $max_sum ;
}
echo $max_sum;
?>