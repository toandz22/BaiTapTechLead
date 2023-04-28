Sắp xếp từ chuỗi dài nhất đến ngắn nhất, trong trường hợp có 2 chuỗi cùng độ dài thì sắp xếp theo thứ tự bảng chữ cái :</br>
Với chuỗi đầu vào : $input = ["hello world", "the quick brown fox jumps over the lazy dog", "the cat in the hat"] 
<?php
function sapxep($arr) {
    usort($arr, function($a, $b) {
        $aWords = array_unique(explode(" ", $a)); // chia mỗi chuỗi thành 1 mảng rồi loại bỏ phần tử trùng lặp trong mảng 
        $bWords = array_unique(explode(" ", $b));
        return (count($bWords) - count($aWords)); // so sánh 2 mảng , return = -1  => a đứng trước b và ngược lại .
    });
    return $arr;
}
// Example usage
if (isset($_POST['strings'])) {
    $input = explode(",", $_POST['strings']);
    $output = sapxep($input);
    echo "<pre>";
    print_r($output);
    echo "</pre>";
  }
  
?>
<form method="POST">
    <label for="strings">Nhập danh sách chuỗi:</label><br>
    <input type="text" id="strings" name="strings"><br>
    <input type="submit" value="Sắp xếp">
</form>

