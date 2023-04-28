<?php
function getLargestOverlap($strings) {
    $maxOverlap = 0;
    $maxOverlapStrings = array();

    foreach ($strings as $i => $s1) {
        foreach (array_slice($strings, $i+1) as $s2) {
            $overlap = 0;
            $shorterLength = min(strlen($s1), strlen($s2));
            
            for ($j=1; $j <= $shorterLength; $j++) {
                if (substr($s1, -$j) == substr($s2, 0, $j)) {
                    $overlap = $j;
                }
            }

            if ($overlap > $maxOverlap) {
                $maxOverlap = $overlap;
                $maxOverlapStrings = array($s1, $s2);
            }
        }
    }

    return $maxOverlapStrings;
}

// Example usage:
$strings = array($_POST['stra'],$_POST['strb'],$_POST['strc'],$_POST['strd'],$_POST['stre']);
$result = getLargestOverlap($strings);
echo "The two strings with the largest overlap are: '{$result[0]}' and '{$result[1]}'";

?>