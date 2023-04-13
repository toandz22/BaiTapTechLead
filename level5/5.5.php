<?php
function group_by_field($collection, $field) {
    return array_reduce($collection, function($result, $item) use ($field) {
        $key = $item[$field];
        if (!array_key_exists($key, $result)) {
            $result[$key] = [];
        }
        $result[$key][] = $item;
        return $result;
    }, []);
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
echo "</pre>";
?>