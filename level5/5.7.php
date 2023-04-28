Cho 1 mảng các key, vào 1 mảng các object , 
Viết một function để trả ra một mảng các object theo thứ tự mảng các key.</br>
Ví dụ</br>
keys = b,a,c</br>
collections = </br>
[</br>
  { "a": 1, "b": 2, "c": 3 },</br>
  { "a": 4, "b": 5, "c": 6 },</br>
  { "a": 7, "b": 8, "c": 9 }</br>
]</br>

<?php
function sortObjectsByKeys($keys, $collections) {
  $result = [];

  foreach ($collections as $collection) {
    $temp = [];

    foreach ($keys as $key) {
      if (array_key_exists($key, $collection)) {
        $temp[$key] = $collection[$key];
      }
    }

    array_push($result, $temp);
  }

  return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Lấy giá trị của $keys và kiểm tra xem nó có tồn tại hay không
  if (isset($_POST['keys'])) {
    $keys = explode(',', $_POST['keys']);
  }

  // Lấy giá trị của $collections và kiểm tra xem nó có tồn tại hay không
  if (isset($_POST['collections'])) {
    $collections = json_decode($_POST['collections'], true);
  }

  // Gọi hàm sortObjectsByKeys để sắp xếp mảng các object
  $result = sortObjectsByKeys($keys, $collections);

  // In ra kết quả
  echo "<pre>";
  print_r($result);
  echo "</pre>";
}

?>

<!-- Form nhập giá trị của keys và collections -->
<form method="post">
  <label for="keys">Keys:</label><br>
  <input type="text" id="keys" name="keys"><br>
  <label for="collections">Collections:</label><br>
  <textarea id="collections" name="collections"></textarea><br>
  <input type="submit" value="Submit">
</form>
