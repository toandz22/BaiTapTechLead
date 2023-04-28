Cho một object đầu vào, viết một function để loại bỏ các phần tử bị lặp trong object </br>
Ví dụ 1 :</br>
[
  { "x": 1, "y": 2 },</br>
  { "x": 2, "y": 1 },</br>
  { "x": 1, "y": 2 }</br>
]
 </br>
👉 [{ ‘x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }]</br>
Ví dụ 2:</br>
[
  { "x": 1, "y": 2, 'z':3},</br>
  { "x": 2, "y": 1 },</br>
  { "x": 1, "y": 2 },</br>
  {"x": 1, "y": 2, 'z':3} </br>
]</br>
👉 [{ ‘x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }, { "x": 1, "y": 2, 'z':3}]

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Lấy dữ liệu gửi từ form
  $input = $_POST['input'];

  // Chuyển đổi chuỗi JSON thành mảng PHP
  $input_array = json_decode($input, true);

  // Loại bỏ các phần tử bị trùng lặp
  function remove_duplicates($input) {
    $output = array();
    foreach ($input as $element) {
      if (!in_array($element, $output)) {
        $output[] = $element;
      }
    }
    return $output;
  }

  // Gọi hàm loại bỏ các phần tử bị trùng lặp
  $output_array = remove_duplicates($input_array);

  // In ra kết quả
  echo '<pre>';
  print_r($output_array);
  echo '</pre>';
}
?>

<form method="post">
  <label for="input">Input:</label><br>
  <textarea id="input" name="input"></textarea><br><br>
  <input type="submit" value="Submit">
</form>

