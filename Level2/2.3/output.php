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