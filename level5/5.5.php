Cho đầu vào là 1 collection ( array of object ), Viết một function để trả ra 1 OBJECT mới chứa dữ liệu được group theo trường chỉ định:
Ví dụ : const collect = [{a: 1, b: 2}, {a: 1, b: 3}, {a: 2, b: 2}];</br>
groupBy(collect, ‘a'); </br>
👉 output {1: [{a: 1, b: 2}, {a: 1, b: 3}], 2: [{a: 2, b: 5}]}</br>
Ví Dụ bên dưới :[</br>
    ["name" => "Toan", "age" => 21],</br>
    ["name" => "Anh", "age" => 22],</br>
    ["name" => "Son", "age" => 24],</br>
    ["name" => "Tien", "age" => 21],</br>
    ["name" => "Linh", "age" => 22],</br>
    ["name" => "Huy", "age" => 24]</br>
]</br>
=> gộp theo key"age" 

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu gửi từ form
    $input = $_POST['input'];
  
    // Chuyển đổi chuỗi JSON thành mảng PHP
    $input_array = json_decode($input, true);

    //hàm xử lý object trùng lặp
function group_by_field($collection, $field) 
{
    return array_reduce($collection, function($result, $item) use ($field) 
    {
        $key = $item[$field];
        if (!array_key_exists($key, $result)) {
            $result[$key] = [];
        }
        $result[$key][] = $item;
        return $result;
    }, 
    []);
}
$collection =[
    ["name" => "Toan", "age" => 21],
    ["name" => "Anh", "age" => 22],
    ["name" => "Son", "age" => 24],
    ["name" => "Tien", "age" => 21],
    ["name" => "Linh", "age" => 22],
    ["name" => "Huy", "age" => 24]
]; 
$result = group_by_field($collection, "age");
echo "<pre>";
print_r($result);
}
?>
<form method="post">
  <label for="input">Input:</label><br>
  <textarea id="input" name="input"></textarea><br><br>
  <input type="submit" value="Submit">
</form>
