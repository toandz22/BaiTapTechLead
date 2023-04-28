<html>
<body>
        2.1 Số lớn thứ 2 là :
<?php
   $my_array = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
   rsort($my_array);
   list($a, $b, $c, $d, $e ) = $my_array;
   echo "$b";
?> <br>
        2.2 Chuỗi có từ dài nhất là :
<?php 
   $string = array($_POST["stra"],$_POST["strb"],$_POST["strc"],$_POST["strd"],$_POST["stre"]);

   
   $longestWordLength = 0;
   $longestWord = '';
   
   foreach ($string as $word) {
      if (strlen($word) > $longestWordLength) {
         $longestWordLength = strlen($word);
         $longestWord = $word;
      }
   }
   
   echo $longestWord;
   
   ?> <br>

2.3 dãy con chung dài nhất là:
<?php
function lcs($X , $Y, $m, $n){
	for ($i = 0; $i <= $m; $i++)
	{
		for ($j = 0; $j <= $n; $j++)
		{
			if ($i == 0 || $j == 0)
				$L[$i][$j] = 0;
			else if ($X[$i - 1] == $Y[$j - 1])
				$L[$i][$j] = $L[$i - 1][$j - 1] + 1; // độ dài cộng thêm 1 
			else
				$L[$i][$j] = max($L[$i - 1][$j] , $L[$i][$j - 1]);
		}
	}
	return $L[$m][$n];
}


$S1 = $_POST["sa"];
$S2 = $_POST["sb"];
$m = strlen($S1);
$n = strlen($S2) ;
echo lcs($S1, $S2, $m, $n);

?> <br>

   2.4 Tổng các số chia hết cho 3 và 5 là : 
   <?php
$tatal = 0;
for($i = 1; $i <= $_POST["nb"]; $i ++) {
     if ($i % 5 == 0 and $i % 3 == 0) {
        $tatal += $i;
    }
}
echo  $tatal;
?> <br>
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
</body>
</html>