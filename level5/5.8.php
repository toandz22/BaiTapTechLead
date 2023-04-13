<?php
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
$arr = [['id' => 10, 'order' => 0], ['id' => 12, 'order' => 1], ['id' => 9, 'order' => 2], ['id' => 11, 'order' => 3]];
$newArr = switchOrder(9, 1, $arr);
echo "<pre>";
print_r($newArr); // [['id' => 10, 'order' => 0], ['id' => 9, 'order' => 1], ['id' => 12, 'order' => 2], ['id' => 11, 'order' => 3]]
echo "</pre>";
?>

