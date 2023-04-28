3.6____Cho 2 mảng A = {1} ; B={2,3,4,5,6} . ta có :____</br>
<?php
function MO2($a, $b)
{
    return ($a + $b) / 2; //1.5
}
function MO3($a, $b, $c)
{
    return $a + $b + $c - max($a, max($b, $c)) - min($a, min($b, $c)); //6 - 3 - 1 =2
}
function MO4($a, $b, $c, $d)
{
    $Max = max($a, max($b, max($c, $d))); // 1,2,3,4 => max = 4
    $Min = min($a, min($b, min( $c, $d))); // 1,2,3,4 => min = 1
    return ($a + $b + $c + $d - $Max - $Min) / 2; //10-4-1 = 5
}
function medianSingle($arr, $n)
{
if ($n == 0)
    return -1;
if ($n % 2 == 0)
        return ($arr[$n / 2] + $arr[$n / 2 - 1]) / 2;
return $arr[$n / 2];
}
function findMedianUtil(&$A, $N, &$B, $M )
{
    
    if ($N == 0)
    return medianSingle($B, $M);
    if ($N == 1)
    {
        if ($M == 1)
            return MO2($A[0], $B[0]);
 
        if ($M & 1)
            return MO2($B[$M / 2], $MO3($A[0],
                       $B[$M / 2 - 1],
                       $B[$M / 2 + 1]));
 
        return MO3($B[$M / 2],
                   $B[$M / 2 - 1], $A[0]);
    }
 
    else if ($N == 2)
    {
        if ($M == 2)
            return MO4($A[0], $A[1],
                       $B[0], $B[1]);

        if ($M & 1)
            return MO3 ($B[$M / 2],
                        max($A[0], $B[$M / 2 - 1]),
                        min($A[1], $B[$M / 2 + 1]));
 
        return MO4 ($B[$M / 2],
                    $B[$M / 2 - 1],
                    max($A[0], $B[$M / 2 - 2]),
                    min($A[1], $B[$M / 2 + 1]));
    }
 
    $idxA = ($N - 1 ) / 2;
    $idxB = ($M - 1 ) / 2;
 
    if ($A[$idxA] <= $B[$idxB] )
    return findMedianUtil($A + $idxA,
                          $N / 2 + 1, $B,
                          $M - $idxA );
 
    return findMedianUtil($A, $N/2 + 1,
                          $B + $idxA, $M - $idxA );
}
 
function findMedian(&$A, $N,
                    &$B, $M )
{
    if ($N > $M)
    return findMedianUtil($B, $M,
                          $A, $N );
 
    return findMedianUtil($A, $N,
                          $B, $M );
}
 

$A = array(1);
$B = array(2,3,4,5,6,7);
$N = sizeof($A);
$M = sizeof($B);
 
echo " =>Trung vị của danh sách kết hợp là: " .findMedian( $A, $N, $B, $M );
 
?>
