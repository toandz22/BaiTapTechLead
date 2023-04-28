<?php

function longest_common_substring($strings) {
  $n = count($strings);
  if ($n == 0) {
      return 0;
  }
  $min_length = min(array_map('strlen', $strings));
  for ($len = $min_length; $len > 0; $len--) {
      for ($i = 0; $i <= $min_length - $len; $i++) {
          $substr = substr($strings[0], $i, $len);
          $j = 1;
          while ($j < $n && strpos($strings[$j], $substr) !== false) {
              $j++;
          }
          if ($j == $n) {
              return $substr;
          }
      }
  }
  return "";
}

if (isset($_POST['strings'])) {
  $strings = explode(",", $_POST['strings']);
  $result = longest_common_substring($strings);
  echo "Chuỗi kí tự trùng nhau dài nhất là: ".$result;
}

?>
<form method="POST">
    <label for="strings">Nhập danh sách chuỗi:</label><br>
    <input type="text" id="strings" name="strings"><br>
    <input type="submit" value="Tính toán">
</form>
