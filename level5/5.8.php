<?php
// Hàm thay đổi thứ tự order của các object
function switchOrder($id, $newOrder, $arr) {
  $currentIndex = -1;
  foreach ($arr as $index => $item) {
    if ($item['id'] == $id) {
      $currentIndex = $index;
      break;
    }
  }
  $currentOrder = $arr[$currentIndex]['order'];
  if ($newOrder > $currentIndex) {
    for ($i = $currentIndex + 1; $i <= $newOrder; $i++) {
      $arr[$i - 1]['order'] = $arr[$i]['order'];
    }
  }
  else {
    for ($i = $currentIndex - 1; $i >= $newOrder; $i--) {
      $arr[$i + 1]['order'] = $arr[$i]['order'];
    }
  }
  $arr[$newOrder]['order'] = $currentOrder;
  usort($arr, function ($a, $b) { return $a['order'] - $b['order']; });

  return $arr;
}

// Kiểm tra nếu form được submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Khởi tạo mảng rỗng để chứa các object
  $arr = [];

  // Lấy dữ liệu từ form
  foreach ($_POST['objects'] as $object) {
    // Chuyển đổi dữ liệu từ string sang integer
    $id = (int) $object['id'];
    $order = (int) $object['order'];

    // Thêm object vào mảng
    $arr[] = ['id' => $id, 'order' => $order];
  }

  // Lấy giá trị của id và newOrder từ form
  $id = (int) $_POST['id'];
  $newOrder = (int) $_POST['new_order'];

  // Thay đổi thứ tự order của các object
  $newArr = switchOrder($id, $newOrder, $arr);

  // Hiển thị kết quả
  echo "<pre>";
  print_r($newArr);
  echo "</pre>";
}
?>

<!-- Form nhập thông tin cho các object -->
<form method="post">
  <label>Object ID:</label>
  <input type="text" name="id"><br>

  <label>New Order:</label>
  <input type="text" name="new_order"><br>

  <label>Object 1:</label>
  <input type="text" name="objects[0][id]" value="10">
  <input type="text" name="objects[0][order]" value="0"><br>

  <label>Object 2:</label>
  <input type="text" name="objects[1][id]" value="12">
  <input type="text" name="objects[1][order]" value="1"><br>

  <label>Object 3:</label>
  <input type="text" name="objects[2][id]" value="9">
  <input type="text" name="objects[2][order]" value="2"><br>

  <label>Object 4:</label>
  <input type="text" name="objects[3][id]" value="11">
  <input type="text" name="objects[3][order]" value="3"><br>

  <input type="submit" value="Submit">
</form>
