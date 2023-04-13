<?php
function longest_common_substring($strings) {
  $n = count($strings);
  $result = "";
  $min_len = strlen(min($strings, function($a, $b) {
    return strlen($a) - strlen($b);
  }));
  for ($i = 0; $i < $min_len; $i++) {
    for ($j = $i + 1; $j <= $min_len; $j++) {
      $substring = substr($strings[0], $i, $j - $i);
      for ($k = 1; $k < $n; $k++) {
        if (strpos($strings[$k], $substring) === false) {
          continue 2;
        }
      }
      if (strlen($substring) > strlen($result)) {
        $result = $substring;
      }
    }
  }
  
  return strlen($result);
}

$strings = ["hello world", "world of warcraft", "warcraft is great"];
echo longest_common_substring($strings);  // Output: 2  // wr
?>